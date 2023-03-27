<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://kit.fontawesome.com/69a2e32eeb.js" crossorigin="anonymous"></script>

</head>

<body>

    <!-- ignore this class. Inno's secret spice -->
    <div class="scroll">

        <!-- navbar -->
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
                            <div><a class="menuItems" id="cartWindow"><i class="fa-solid fa-cart-shopping"></i>
                                    <sup><span class="notification"></span></sup>
                                </a></div>
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

        <section class="sec-profile">
            <div class="profile-filter">
                <div class="profile-list">

                    <div class="upper">
                        <ul>
                            <li id="profile">Profile</li>
                            <li id="">Account Balance</li>
                            <li id="">Address Book</li>
                            <li id="">My Orders </li>
                            <li id="">Messages</li>
                        </ul>

                    </div>


                    <div class="logout">
                        <ul>
                            <li> <a href="./login.html">
                                    <div>Log Out</div>
                                    <div><i class="fa-solid fa-right-from-bracket"></i></div>
                                </a> </li>

                        </ul>

                    </div>


                </div>

            </div>

            <div class="profile-details">
                <div class="firsinlastout">
                    <form action="#" class="profile-form">
                        <table>
                            <tr>
                                <td>Email: </td>
                                <td><input type="email" name="" id="" placeholder="johndoe@gmail.com">
                                </td>
                            </tr>
                            <tr>
                                <td>Phone: </td>
                                <td><input type="phone" name="" id="" placeholder="254712345678" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>Name: </td>
                                <td><input type="text" name="" id="" placeholder="John Doe" readonly></td>
                            </tr>
                            <tr>
                                <td>Gender: </td>
                                <td>
                                    <select name="Gender" id="">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="non-binary">Non Binary</option>
                                    </select>

                                </td>

                            </tr>
                            <tr>
                                <td>Birthday: </td>
                                <td><input type="date" name="" id=""></td>
                            </tr>
                            <tr>
                                <td></td>

                                <td><button type="submit">UPDATE</button></td>
                            </tr>

                        </table>


                    </form>
                </div>


                <div class="lastinfastout">
                    <div class="profile-image">

                    </div>
                    <label for="upload" class="upload-label">UPLOAD</label>
                    <input type="file" id="upload" name="filename" style="visibility:hidden;">
                </div>



            </div>
        </section>



























        <!-- footer section -->
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












        <!-- DO NOT TOUCH -->
    </div>

    <!-- javascript codes -->

    <script src="../assets/js/jquery-3.6.3.min.js"></script>
    <script type="text/javascript" src="../assets/js/main.js"></script>


</body>

</html>