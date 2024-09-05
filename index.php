<?php
	require "LOGIN_SIGNUP_UPDATED/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main-page.css">
    <!--NAVBAR, FOOTER, COPYRIGHT LINKS-->
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="copyright.css">
    <script src="https://kit.fontawesome.com/d9b0917e73.js" crossorigin="anonymous"></script>
    <title>RubbyRoasts - Coffee Shop</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
</head>
<body>
    
    <nav class="navbar">
        <ul class="navbar-ul">
            <li><a href="index.php"><i class="fa-solid fa-house"></i>Home</a></li>
            <li><a href="CATALOG_UPDATED/menu.php"><i class="fa-solid fa-bars"></i>Menu</a></li>
            <?php
                    // Check if the user is logged in
                    if (check_login(false)) {
                        // If logged in, display "Profile" and "Orders" links
                        echo '<li><a href="orders/orders.php"><i class="fa-solid fa-bag-shopping"></i>Orders</a></li>';
                        echo '<li><a href="USER_PROFILE_UPDATED/profile.php"><i class="fa-solid fa-user"></i>Profile</a></li>';
                        echo '<li><a href="LOGIN_SIGNUP_UPDATED/logout.php">Logout</a></li>';
                    } else {
                        // If not logged in, display "Sign-In/Log-In" link
                        echo '<li><a href="LOGIN_SIGNUP_UPDATED/login.php">Sign-Up</a></li>';
                    }
                ?>
        </ul>
    </nav>
    <div class="filler"></div>

    <div class="main">
        <div class="main-container-bg">
            <div class="main-container">
                <div class="logo-container">
                    <div>
                        <img class="logo" src="img/white-trim.png" height="250px">
                        <h2>Rubbin' these coffee beans to make the <br>perfect roasts for you.</h2>
                    </div>
                </div>
                <div class="image-slider">
                    <div class="slides fade">
                        <img src="img/coffee1.jpg" alt="">
                    </div>
                    <div class="slides fade">
                        <img src="img/coffee2.jpg" alt="">
                    </div>
                    <div class="slides fade">
                        <img src="img/coffee3.png" alt="">
                    </div>
                    <div class="slides fade">
                        <img src="img/coffee4.png" alt="">
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
            </div>
        </div>
        <div class="quote-container-bg">
            <div class="quote-container">
                <div class="container-1">
                    <img src="img/1Espresso.jpg" height="380px">
                    <div>
                            <h2>"Don't you like the smell of RubbyRoastsTM Cappucino in the morning?"</h2>
                    </div>
                </div>
                <div class="container-2">
                    <div>
                            <h2>"Don't you like the smell of RubbyRoastsTM Cappucino in the morning?"</h2>
                    </div>
                    <img src="img/2Cappuccino.jpg" height="380px">
                </div>
                <div class="container-1">
                    <img src="img/3Latte.jpg" height="380px">
                    <div>
                            <h2>"Don't you like the smell of RubbyRoastsTM Cappucino in the morning?"</h2>
                    </div>
                </div>
                <div class="container-2">
                    <div>
                            <h2>"Don't you like the smell of RubbyRoastsTM Cappucino in the morning?"</h2>
                    </div>
                    <img src="img/4Mocha.jpg" height="380px">
                </div>
            </div>
        </div>
        <div class="gallery-container">
            <h2>GALLERY</h2>
            <p>Products</p>
            <div class="gallery-preview-container">
                    <img src="img/1Espresso.jpg" alt="">
                    <img src="img/2Cappuccino.jpg" alt="">
                    <img src="img/3Latte.jpg" alt="">

                    <img src="img/2Cappuccino.jpg" alt="">
                    <img src="img/3Latte.jpg" alt="">
                    <img src="img/1Espresso.jpg" alt="">

                    <img src="img/3Latte.jpg" alt="">
                    <img src="img/1Espresso.jpg" alt="">
                    <img src="img/2Cappuccino.jpg" alt="">
            </div>
        </div>
    </div>

    <footer class="footer-container">
        <div>
            <h3>CONTACT US</h3>
            <ul>
                <li>E-mail: rubbyroasts@gmail.com</li>
                <li>Contact: XXXXXXXXXXX (Globe)</li>
                <li>Telephone: XXX-XXXX-XXX</li>
            </ul>
        </div>
        <div>
            <h3>SOCIAL</h3>
            <ul>
                <li>Twitter: @rubbyroastsofficial</li>
                <li>Instagram: @rubby_roasts</li>
                <li>Tiktok: @rubby_roasts_official</li>
            </ul>
        </div>
        <div>
            <h3>ADDRESS</h3>
            <ul>
                <li>533 G Jade Lane. Cristimar Village</li>
                <li>Barangay San Roque</li>
                <li>Antipolo City, Rizal</li>
            </ul>
        </div>
        <div>
            <h3>COMPANY</h3>
            <ul>
                <li><a href="ABOUT_US_UPDATED/about.php">About Us</a></li>
                <li><a href="FOOTER_PAGES/terms.php">Terms of Service</a></li>
                <li><a href="FOOTER_PAGES/privacy.php">Privacy Policy</a></li>
                <li><a href="FOOTER_PAGES/developers.php">Developers' Profile</a></li>
            </ul>
        </div>
    </footer>

    <div class="copyright-container">
        <p>&copy; 2023 RubbyRoasts. All rights reserved.</p>
    </div>
    
    <script src="main-page.js"></script>
</body>
</html>