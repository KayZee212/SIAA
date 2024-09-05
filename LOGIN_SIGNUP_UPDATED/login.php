<?php  
require "functions.php";
$errors = array();
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$errors = login($_POST);
	if(count($errors) == 0)
	{
		header("Location: ../index.php");
		die;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <!--NAVBAR, FOOTER, COPYRIGHT LINKS-->
    <link rel="stylesheet" href="../navbarinvert.css">
    <link rel="stylesheet" href="../footerinvert.css">
    <link rel="stylesheet" href="../copyright.css">
    <script src="https://kit.fontawesome.com/d9b0917e73.js" crossorigin="anonymous"></script>
    <title>RubbyRoasts - Login</title>
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
                        echo '<li><a href="login.php"></a></li>';
                    }
                ?>
        </ul>
    </nav>
    <div class="filler"></div>
	<!-- JIRO CODE START -->
    <div class="unified">
        <div class="errorwindow">
            <?php if(count($errors) > 0):?>
                <?php foreach ($errors as $error):?>
                    <?= $error?> <br>	
                <?php endforeach;?>
            <?php endif;?>
        </div>
        <div class="loginform">
            <form method="post">
                <h2 class ="logindisp">Log in</h2>
                <input type="email" name="email" placeholder="Email Address" required><br><br>
                <input type="password" name="password" placeholder="Password" required><br><br> 
                <button type="submit" name="submit" value="Login">Log-in</button><br>
                <p class="already">Don't have an account?</p>
                <a href="signup.php" class="loglink">Sign-up</a><br><br>
                <a href="forgot-password.php" class="forgotpass">Forgot password?</a>
            </form>
        </div>
        <div class="logocontainer">
            <img src="../img/logomaroon.png" class="logox"></img>
            <p class="descriptions">Rubbin' these coffee beans to make the perfect Roasts for you.</p>  
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