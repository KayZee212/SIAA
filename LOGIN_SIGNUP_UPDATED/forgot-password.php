<?php
	require "functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forgot-password.css">
    <!--NAVBAR, FOOTER, COPYRIGHT LINKS-->
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../footer.css">
    <link rel="stylesheet" href="../copyright.css">
    <script src="https://kit.fontawesome.com/d9b0917e73.js" crossorigin="anonymous"></script>
    <title>Forgot Password</title>
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
                    echo '<li><a href="logout.php">Logout</a></li>';
                } else {
                    // If not logged in, display "Sign-In/Log-In" link
                    echo '<li><a href="login.php">Sign-Up</a></li>';
                }
            ?>
        </ul>
    </nav>
    <div class="filler"></div>
    
    <div class="forgotpasscontainer">
            <br><br><br><br><br><br><br><img src="../img/logomaroon.png" class="logo"></img>
            <div>
                <h1>Reset Password</h1>
            </div>
            <div>
                <form method="post" action="send-password-reset.php">
                    <input type="email" name="email" id="email" placeholder="Enter email here"><br><br>
                    <button>Send</button>
                </form>
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
                <li><a href="../ABOUT_US_UPDATED/about.php">About Us</a></li>
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