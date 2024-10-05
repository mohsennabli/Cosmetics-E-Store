<?php

require("includes/connect.php");

function clean_input($con, $data) {
    return mysqli_real_escape_string($con, trim($data));
}

$name = clean_input($con, $_POST['name']);
$email = clean_input($con, $_POST['e-mail']);
$password = MD5(clean_input($con, $_POST['password']));
$contact = clean_input($con, $_POST['contact']);
$city = clean_input($con, $_POST['city']);
$address = clean_input($con, $_POST['address']);

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($con, $query);
$num = mysqli_num_rows($result);

if ($num != 0) {
    $message = "Email Already Exists";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $message = "Not a valid Email Id";
} elseif (!is_numeric($contact) || strlen($contact) != 8) {
    $message = "Not a valid phone number";
} else {
    $query = "INSERT INTO users(name, email, password, contact, city, address) VALUES('$name', '$email', '$password', '$contact', '$city', '$address')";
    if (mysqli_query($con, $query)) {
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['user_id'] = mysqli_insert_id($con);
        header('location: login.php');
        exit;
    } else {
        die(mysqli_error($con));
    }
}

if (isset($message)) {
    header('location: signup.php?m1=' . urlencode($message));
    exit;
}
?>
