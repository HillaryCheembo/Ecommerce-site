<?php
//establish the connection to database, and start the session
require("includes/common.php");
?>

<!--Specifies document type is html-->
<!DOCTYPE html>
<!--Specifies the language as English-->
<html lang="en">

<head>
    <!--instructs browser on how to control the page's dimensions and scaling-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Title of products page-->
    <title>Products | Smiths Orchard</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    include 'includes/header.php';
    include 'includes/check-if-added.php';
    ?>
    <div class="container" id="content">
        <!-- Jumbotron Header -->
        <div class="jumbotron home-spacer" id="products-jumbotron">
            <h1>Welcome to Smiths Orchard</h1>
            <p>We offer you the best apples out there.</p>

        </div>
        <hr>

        <div class="row text-center" id="fall">
            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/5.jpg" alt="">
                    <div class="caption">
                        <h3>Dolgo </h3>
                        <p>Price: Rs. 3600 </p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to
                                    cart</a>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/2.jpg" alt="">
                    <div class="caption">
                        <h3>Pizzaz </h3>
                        <p>Price: Rs. 40000 </p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to
                                    cart</a>
                                <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/25.jpg" alt="">
                    <div class="caption">
                        <h3>Honey Crisp</h3>
                        <p>Price: Rs. 45000 </p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to
                                    cart</a>
                                <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/4.jpg" alt="">
                    <div class="caption">
                        <h3>First Kiss</h3>
                        <p>Price: Rs. 50000 </p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to
                                    cart</a>
                                <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center" id="winter">
            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/18.jpg" alt="">
                    <div class="caption">
                        <h3>SweeTango </h3>
                        <p>Price: Rs. 13000 </p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to
                                    cart</a>
                                <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/19.jpg" alt="">
                    <div class="caption">
                        <h3>McIntosh</h3>
                        <p>Price: Rs. 3000 </p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to
                                    cart</a>
                                <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/20.jpg" alt="">
                    <div class="caption">
                        <h3>Cortland</h3>
                        <p>Price: Rs. 8000 </p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to
                                    cart</a>
                                <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/21.jpg" alt="">
                    <div class="caption">
                        <h3>KeepSake </h3>
                        <p>Price: Rs. 18000 </p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to
                                    cart</a>
                                <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center" id="crab">
            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/22.jpg" alt="">
                    <div class="caption">
                        <h3>Riverbelle </h3>
                        <p>Price: Rs. 800 </p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to
                                    cart</a>
                                <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/24.jpg" alt="">
                    <div class="caption">
                        <h3>Regent</h3>
                        <p>Price: Rs. 1000 </p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to
                                    cart</a>
                                <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/23.jpg" alt="">
                    <div class="caption">
                        <h3>Sweet Sixteen</h3>
                        <p>Price: Rs. 1500 </p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to
                                    cart</a>
                                <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/3.jpg" alt="">
                    <div class="caption">
                        <h3>Haralson</h3>
                        <p>Price: Rs. 1300 </p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to
                                    cart</a>
                                <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <hr>
    </div>

    <?php include("includes/footer.php"); ?>
</body>

</html>