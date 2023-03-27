<?php
require_once("../config/products.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://kit.fontawesome.com/69a2e32eeb.js" crossorigin="anonymous"></script>

</head>

<body>
    <section class="preloader" style="position: absolute;">
        <div id="preloader">
            <div class="arc"></div>
            <div class="arc"></div>
            <div class="arc"></div>
        </div>
        <p style="color:white">Loading...</p>

    </section>






    <main class="afterloader">
        <section class="sec-1" id="sec-1">
            <nav>
                <div class="logoname">
                    <h5>art<span>ify</span> </h5>
                </div>


                <div class="two">
                    <div class="menu">
                        <div class="menuitems">
                            <ul>
                                <li class="menuItems"><a href="#sec-1">Home</a></li>
                                <li class="menuItems"><a href="#sec-2">Market Place</a></li>
                                <li class="menuItems"><a href="#newsletter">About Us</a></li>
                                <li class="menuItems"><a href="#newsletter">Contact Us</a></li>


                            </ul>

                            <!-- Add icons -->
                            <div class="profile">
                                <div><a class="menuItems" href="../pages/cart.php"><i class="fa-solid fa-cart-shopping"></i>
                                        <sup><span class="notification"></span></sup>
                                    </a></div>
                                <a class="menuItems" href="../pages/profile.php"><i class="fa-solid fa-user"></i></a>

                            </div>

                        </div>


                        <!-- Hamburger Menu -->
                        <div class="hamburger">
                            <span class="hamburgerspan"></span>
                            <span class="hamburgerspan"></span>
                            <span class="hamburgerspan"></span>

                        </div>





                    </div>

                </div>


            </nav>

            <div class="maincontent">
                <h1>Discover, Sell & Collect Rare <span>Art Work</span></h1>
                <p>Digital market place for art collections.</p>

                <a href="#sec-2"><button>EXPLORE </button></a>
            </div>
        </section>
        <!-- <div class="spinner"></div> -->


        <section id="sec-2" class="sec-2">

            <div class="filter">
                <div class="container-header" id="container-header">
                    <span class="new">Categories</span>
                </div>
                <div class="category-list">
                    <ul>
                        <li id="all">All</li>
                        <li id="animals">Animals</li>
                        <li id="anime">Anime</li>
                        <li id="beaches">Beaches </li>
                        <li id="buildings">Buildings</li>
                        <li id="cars">Cars</li>
                        <li id="food">Food</li>
                        <li id="landscape">Landscapes</li>
                        <li id="mountains">Mountains</li>
                        <li id="nature">Nature</li>
                        <li id="space">Space</li>
                        <li id="technology">Technology</li>
                    </ul>
                </div>
            </div>



            <div class="market-place">
                <!-- Php code to loop contents from the database -->
                <div class="container-header">
                    <span class="top">New Arrivals </span>
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
                <div class="grid-container" id="grid-container">
                    <!-- refer to js for flesh -->
                    <?php
                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    foreach ($rows as $row) {
                        products($row['product_name'], $row['price'], $row['product_image']);
                    }
                    ?>

                </div>
                <div class="container-header">
                    <span>Painting </span>
                    <i class="fa-solid fa-arrow-right"></i>

                </div>

                <div id="grid-container" class="newPainting">
                    <!-- refer to js for flesh -->
                    <?php
                    foreach ($rows as $row) {
                        products($row['product_name'], $row['price'], $row['product_image']);
                    }
                    ?>

                </div>

                <div class="container-header">
                    <span>Photography </span>
                    <i class="fa-solid fa-arrow-right"></i>

                </div>
                <div id="grid-container" class="newPhotography">
                    <!-- refer to js for flesh -->
                    <?php
                    foreach ($rows as $row) {
                        products($row['product_name'], $row['price'], $row['product_image']);
                    }
                    ?>

                </div>
            </div>




        </section>



        <footer id="footer">
            <div id="newsletter">
                <div class="newstext">
                    <h4>Sign Up For Newsletter</h4>
                    <p>Get email updates about our latest products and <span>special offers.</span></p>

                </div>
                <form action="">
                    <input type="email" placeholder="Enter your email...">
                    <button type="submit">SUBMIT</button>
                </form>

            </div>


            <!-- footer section -->


            <div class="column" id="column">
                <div class="logoname" id="logoname">
                    <h5>art<span>ify</span> </h5>
                </div>
                <div class="big-screen">
                    <div class="contacts">
                        <h4>Contact</h4>
                        <p><strong>Address: </strong>Tumaini, Ongata Rongai</p>
                        <p><strong>Phone: </strong> <a href="tel:+254705036698">+2547 050 36698, +2547 592 42900</a> </p>
                    </div>

                    <div class="">
                        <h4>Our Socials</h4>
                        <div>
                            <a href="https://www.instagram.com/innoxv/">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="">
                                <i class="fa-brands fa-github"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                            <a href="https://wa.me/message/3OPSEQ47UDYYJ1">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                    <div class="about-account">
                        <div class="more">
                            <h4>About Us</h4>
                            <a href="">Delivery Information</a>
                            <a href="">Privacy Policy</a>
                            <a href="">Terms & Conditions</a>
                            <a href="">FAQ's</a>

                        </div>
                        <div class="more">
                            <h4>My Account</h4>
                            <a href="">Sign In</a>
                            <a href="">View Cart</a>
                            <a href="">Track My Order</a>
                            <a href="">Help</a>

                        </div>
                    </div>

                    <div class="colinstall">
                        <h4>Install App</h4>
                        <p>From App Store or Google Play</p>
                        <div class="row">
                            <a href="https://itunes.apple.com/app/"><img src="../assets/img/appstore.png" alt=""></a>
                            <a href="https://play.google.com/store/apps/"><img src="../assets/img/googleplay.png" alt=""></a>
                        </div>
                    </div>



                </div>

                <div class="copyright">
                    <p>&copy; 2023 - <a href="tel:+254705036698">WAZEE WAZIMA!!</a> </p>
                </div>

            </div>


        </footer>


    </main>

    <!-- javascript codes -->

    <script src="../assets/js/jquery-3.6.3.min.js"></script>
    <?php
    include("../assets/js/main.js.php");
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(window).on('load', function() {
            $('.preloader').fadeOut('slow');
            $(".afterloader").addClass("active")

        });
    </script>
</body>

</html>