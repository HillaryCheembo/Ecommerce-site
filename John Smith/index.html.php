<?php

//establish the connection to database, and start the session
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
    header('location: products.php');
}

?>

<!--Specifies document type is html-->
<!DOCTYPE html>
<!--Specifies the language as English-->
<html lang="en">

<head>
    <!--instructs browser on how to control the page's dimensions and scaling-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Title of index page-->
    <title>Welcome | Smiths Orchard</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</head>

<body style="padding-top: 50px;">
    <!-- Header -->
    <?php
    include 'includes/header.php';
    ?>
    <!--Header end-->

    <div id="content">
        <!--Main banner image-->
        <div id="banner_image">
            <div class="container">
                <center>
                    <div id="banner_content">
                        <h1>Picked with Passion, Served with Love.</h1>
                        <p>30% off</p>
                        <br />
                        <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                    </div>
                </center>
            </div>
        </div>
        <!--Main banner image end-->

        <!--Item categories listing-->
        <div class="container">
            <div class="row text-center" id="item_list">
                <div class="col-sm-4">
                    <a href="products.php#fallapples">
                        <div class="thumbnail">
                            <img src="img/1.jpg" alt="">
                            <div class="caption">
                                <h3>Fall Apples</h3>
                                <p>Choose among the best available in the world.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-4">
                    <a href="products.php#winter">
                        <div class="thumbnail">
                            <img src="img/10.jpg" alt="">
                            <div class="caption">
                                <h3>Winter Apples</h3>
                                <p>Frost-Kissed, Nature's Sweet Embrace.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-4">
                    <a href="products.php#crab">
                        <div class="thumbnail">
                            <img src="img/13.jpg" alt="">
                            <div class="caption">
                                <h3>Crab Apples</h3>
                                <p>A Zesty Twist in Every Bite!</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!--Item categories listing end-->
    </div>

    <!--Footer-->
    <?php
    include 'includes/footer.php';
    ?>
    <!--Footer end-->

</body>

</html>