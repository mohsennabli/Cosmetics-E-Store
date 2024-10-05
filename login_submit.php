<?php
require("includes/connect.php");

session_start();

$email = mysqli_real_escape_string($con, $_POST['e-mail']);
$password = mysqli_real_escape_string($con, $_POST['password']);

$password_hashed = md5($password);

$query = "SELECT id, email FROM users WHERE email='$email' AND password='$password_hashed'";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) == 0) {
    header('location: login.php?error=Invalid Email or Password');
} else {
    $row = mysqli_fetch_array($result);
    $_SESSION['email'] = $row['email'];
    $_SESSION['user_id'] = $row['id'];

    header('location: products.php');
}
?>
