<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>

    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://kit.fontawesome.com/69a2e32eeb.js" crossorigin="anonymous"></script>


</head>

<body>
    <nav>
        <div class="logoname">
            <h5>art<span>ify</span> </h5>
        </div>


        <div class="two">
            <div class="menu">
                <div class="menuitems">
                    <ul>
                        <li class="menuItems"><a href="../pages/landingpage.html">Home</a></li>
                        <li class="menuItems"><a href="../pages/landingpage.html#sec-2">Market Place</a></li>
                        <li class="menuItems"><a href="../pages/about-us.html">About Us</a></li>
                        <li class="menuItems"><a href="#column">Contact Us</a></li>


                    </ul>

                    <!-- Add icons -->

                    <div class="profile">
                        <a class="menuItems" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                        <a class="menuItems" href="../pages/profile.html"><i class="fa-solid fa-user"></i></a>

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

    <!-- cart section -->
    <!-- <section class="sec-cart"> -->

    <!-- $product_name = $_POST["product_name"];
        $product_description = $_POST["product_description"];
        $price = $_POST["price"];
        $product_image = $_POST["product_image"];
        $product_category = $_POST["product_category"];

        $connection = new mysqli("localhost", "obinchu", "@Ibrahim1864", "artify");
        // 3.check database connection
        if ($connection->connect_error) {
            die("Connection to the database failed" + $connection->connect_error);
        } else {
            // 4. write a query to manipulate the database.*Use the prepare method.
            $sqlquery = $connection->prepare("SELECT * FROM cart ");
            $sqlquery->execute();
            $result = $sqlquery->get_result();


            if ($result->num_rows == 0) {
                echo "<div class=\"empty-cart\">
                    <img src=\"https://img.icons8.com/cute-clipart/64/null/shopping-cart.png\"/>
                    <h2>Your Cart is Empty !!</h2>
                    <h3>Browse our Categories to Discover More</h3>
                    <a href=\"../pages/landingpage.php#sec-2\"><button>MARKETPLACE</button></a>
                </div>";
            } else {
                // fetch each row and display product
                echo "<div class=\"full-cart\">
                    <div class=\"cart-product\">";
                while ($row = mysqli_fetch_assoc($result)) {
                    products($row['product_name'], $row['price'], $row['product_image']);
                }
                echo "</div>
                  <div class=\"cart-summary\">
                    refer js for flesh -->
    <!-- </div>
                </div>";
            }
        } -->

    <!-- function products($product_name, $price, $product_image)
        {
            $productItem = "
             <div class=\"cart-item\">
                <div class=\"item-des\">
                    <div class=\"item-image\"><img src=\"$product_image\"></div>
                    <div class=\"item-name\">$product_name</div>
                </div>
                <div class=\"item-extras\">
                    <button class=\"delete\">delete<i class=\"fa-solid fa-trash\"></i></button>
                    <button class=\"decrement\"><i class=\"fa-solid fa-square-minus\"></i></button>
                    <span class=\"counter\">1</span>
                    <button class=\"increment\"><i class=\"fa-solid fa-square-plus\"></i></button>
                    <div class=\"item-price\">$price</div>
                </div>
            </div>";
            echo $productItem; -->
    <!-- } -->

    <!-- </section> -->
    <section class="sec-cart">

        <!-- empty cart -->

        <!-- refer to js for flesh -->



        <!-- full cart -->
        <!-- <div class="full-cart"> -->
        <!-- <div class="cart-product"> -->

        <!-- refer to js for flesh -->

        <!-- </div> -->

        <!-- <div class="cart-summary"> -->
        <!-- refer js for flesh -->
        <!-- </div> -->


        <!-- </div> -->
    </section>






    <!-- footer -->
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






    <!-- javascript codes -->

    <script src="../assets/js/jquery-3.6.3.min.js"></script>
    <?php
    include("../assets/js/main.js.php");
    ?>
    <!-- <script type="text/javascript" src="../assets/js/main.js"></script> -->

</body>

</html>