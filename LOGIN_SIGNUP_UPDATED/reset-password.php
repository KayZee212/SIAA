<?php
require "../LOGIN_SIGNUP_UPDATED/functions.php";

$token = $_GET["token"];

$token_hash = hash("sha256", $token);

$mysqli = new mysqli("localhost", "root", "", "verify_db");


if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$sql = "SELECT * FROM users
        WHERE reset_token_hash =?";

$stmt = $mysqli-> prepare($sql);

$stmt->bind_param("s", $token_hash);

$stmt ->execute();

$result = $stmt->get_result();

$user = $result -> fetch_assoc();

if ($user === null){
    die("token not found");
}

if (strtotime($user["reset_token_expires_at"]) <= time()){
    die("token has expired");
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset-password.css">
    <!--NAVBAR, FOOTER, COPYRIGHT LINKS-->
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../footer.css">
    <link rel="stylesheet" href="../copyright.css">
    <script src="https://kit.fontawesome.com/d9b0917e73.js" crossorigin="anonymous"></script>
    <title>Reset Password</title>
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
                        echo '<li><a href="../USER_PROFILE/profile.php"><i class="fa-solid fa-user"></i>Profile</a></li>';
                        echo '<li><a href="logout.php">Logout</a></li>';
                    } else {
                        // If not logged in, display "Sign-In/Log-In" link
                        echo '<li><a href="login.php">Sign-Up</a></li>';
                    }
                ?>
        </ul>
    </nav>
    <div class="filler"></div>

    <div class="mainoutercontainer">
        <div class="innercontainer">
            <img src="../img/logomaroon.png" class="LogoTop" >
            <div class="container">
                <form method="post" action="process-reset-password.php">    
                    <input type="hidden" name="token" value="<?= htmlspecialchars($token)?>">
                    <div class="Input-Field">
                        <input type="password" id="password" name="password" placeholder="Enter New Password" class="form-control">
                    </div><br>
                    <div class="Input-Field">
                        <input type="password" id="password2" name="password2" placeholder="Repeat Password" class="form-control">
                    </div><br>
                    <div>
                        <button class="Send-Button">
                            <a href="">Send</a>
                        </button>
                    </div>
                </form>
            </div>
            <br>
            <div class="form-group">
                    <a href="../CATALOG_UPDATED/menu.php" ><button class="BackButton">Back</button></a>
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

