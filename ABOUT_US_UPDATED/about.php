<?php
	require "../LOGIN_SIGNUP_UPDATED/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="about.css">
    <!--NAVBAR, FOOTER, COPYRIGHT LINKS-->
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../footer.css">
    <link rel="stylesheet" href="../copyright.css">
    <script src="https://kit.fontawesome.com/d9b0917e73.js" crossorigin="anonymous"></script>
    <title>RubbyRoasts - About Us</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.png">
</head>
<body>
    
    <nav class="navbar">
        <ul class="navbar-ul">
            <li><a href="../index.php"><i class="fa-solid fa-house"></i>Home</a></li>
            <li><a href="../CATALOG_UPDATED/menu.php"><i class="fa-solid fa-bars"></i>Menu</a></li>
                <?php
                    // Check if the user is logged in
                    if (check_login(false)) {
                        // If logged in, display "Profile" and "Orders" links
                        echo '<li><a href="../orders/orders.php"><i class="fa-solid fa-bag-shopping"></i>Orders</a></li>';
                        echo '<li><a href="../USER_PROFILE_UPDATED/profile.php"><i class="fa-solid fa-user"></i>Profile</a></li>';
                        echo '<li><a href="../LOGIN_SIGNUP_UPDATED/logout.php">Logout</a></li>';
                    } else {
                        // If not logged in, display "Sign-In/Log-In" link
                        echo '<li><a href="../LOGIN_SIGNUP_UPDATED/login.php">Sign-Up</a></li>';
                    }
                ?>
        </ul>
    </nav>
    <div class="filler"></div>

    <div class="mainoutercontainer">
        <!-- UPPER ADS BAR PARANG SA PROMO SA CATALOG-->
            <div class="aboutusmain">
                <div class="title">
                    <img src="../img/logomaroon.png" class="logotop"></img>
                </div>
                <div class="descriptionscontainer">
                    <h4>Roasting the only the best available coffee beans since 2023.</h4>
                </div>
            </div>

            <div class="aboutusinvert">
                <div class="descriptionscontainer">
                    <h2>Location</h2>
                    <img src="../img/location.jpg" class="map">
                    <img src="../img/coffee1.jpg" class="map">
                    <img src="../img/coffee2.jpg" class="map">
                    <p>Our precious shop is located at 533 G Jade Lane, Cristimar Village</p>
                    <p>Barangay San Roque, Antipolo City, Rizal</p>
                </div>
            </div>
                    
            <div class="aboutus">
                <div class="descriptionscontainer">
                    <h2>History</h2>
                    <p>RubbyRoasts was conceptualized by a group of college students with the burning desire to roast coffee beans.</p>
                    <p>Originally, <b>"RubbyRoasts"</b> was a wordplay for the gibberish phrase by Crazy Dave from Plants vs Zombies <b>"Rabirow"</b></p>
                </div>
            </div>
            <div class="aboutusinvert">
                <div class="descriptionscontainer">
                    <h2>Background</h2>
                    <p>As the group of handsome college students rode the jeepney to the Antipolo Cathedral, they huddled together to discuss their dream of opening a coffee shop.</p>
                    <p>They excitedly tossed around ideas for the menu, decor, and location, all while jotting down notes on their phones.</p>
                    <p>The noise of the busy streets outside couldn't dampen their enthusiasm as they planned their future business venture.</p>
                </div>
            </div>
            <div class="aboutus">
                <div class="descriptionscontainer">
                    <h2>Contact Us</h2>
                    <p>Have any questions? Feel free to contact us at</p>
                    <h4>RubbyRoasts@gmail.com</h4>
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
                <li><a href="about.php">About Us</a></li>
                <li><a href="../FOOTER_PAGES/terms.php">Terms of Service</a></li>
                <li><a href="../FOOTER_PAGES/privacy.php">Privacy Policy</a></li>
                <li><a href="../FOOTER_PAGES/developers.php">Developers' Profile</a></li>
            </ul>
        </div>
    </footer>

    <div class="copyright-container">
        <p>&copy; 2023 RubbyRoasts. All rights reserved.</p>
    </div>

</body>
</html>
