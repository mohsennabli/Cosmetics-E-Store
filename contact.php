<!DOCTYPE html>
<html lang="en">
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact | Life Style Store</title>
        <style type="text/css">
            .p1{
                text-align: justify;
            }
        </style>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
include 'includes/header.php';
?>
<div class="container" id="content">
    <div class="row">
    <div class="col-lg">
        <img src="img/contact.png" style="float: right;">
        <h1>Get in Touch</h1>
        <p id="p1">We value your feedback and inquiries. Whether you have a question about our products, need assistance with an order, or simply want to share your shopping experience, we're here to help! Our dedicated customer service team is available to provide you with the support you need. Please feel free to reach out to us through the contact form below, or directly via email or phone. We aim to respond to all inquiries within 24 hours. Thank you for choosing us for your shopping needs—we look forward to hearing from you!</p>
    </div><br><br>
    <div class="col-lg">
        <div style="float: right;">
            <h1>COMPANY INFORMATION</h1><br>
            <p id="p1">Tunisia-Bizerte-7000</p><br>
            <p id="p1">Phone : +123456789</p><br>
            <p id="p1">Email : support@Cosmeticstore.com</p>
        </div>
        <h1>CONTACT US</h1>
        <div style="float: left;">
        <form>
            <div class="form-group">
                <input type="text" name="name" placeholder="Name" autofocus="on" class="form-control" required = "true">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" class="form-control" required = "true">
            </div>
            <div class="form-group">
                <textarea rows="5" cols="60" placeholder="Address"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    </div>
</div>
</div>

</body>
</html>