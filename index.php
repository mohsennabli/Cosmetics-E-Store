<?php

require("includes/connect.php");

if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Cosmetics Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">
        <?php
        include 'includes/header.php';
        ?>

        <div id="content">
            <div id = "banner_image">
                <div class="container"> 
                    <center>
                        <div id="banner_content">
                            <h1>We sell Cosmetics.</h1>
                            <p>Flat 40% OFF on premium brands </p>
                            <br/>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>

            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php" >
                            <div class="thumbnail">
                                <div class="caption">
                                    <h3>Lipsticks</h3>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php" >
                            <div class="thumbnail">
                                <div class="caption">
                                    <h3>Mascara</h3>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php" >
                            <div class="thumbnail">
                                <div class="caption">
                                    <h3>Foundation</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
        
       
   
    </body> 
</html>