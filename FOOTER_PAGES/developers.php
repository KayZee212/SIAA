<?php
	require "../LOGIN_SIGNUP_UPDATED/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="developers.css">
    <!--NAVBAR, FOOTER, COPYRIGHT LINKS-->
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../footer.css">
    <link rel="stylesheet" href="../copyright.css">
    <script src="https://kit.fontawesome.com/d9b0917e73.js" crossorigin="anonymous"></script>
    <title>RubbyRoasts - Developers' Profile</title>
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

    <section>
    <h2 style="text-align: center;">DEVELOPERS' PROFILE</h2>
        <h3 style="text-align: center;">Our Mission</h3>
        <p style="text-align: left; width: 65%; margin: auto;">
            Our mission is to create a warm and inviting space where coffee enthusiasts can savor the finest blends, fostering community connections and delivering exceptional moments through the artistry of expertly crafted coffee.</p>
        <h3 style="text-align: center;">Meet the Team</h3>
        <div class="team-container">
            <!-- Member 1 -->
            <div class="team-member">
                <img src="../img/member1.jpg" alt="Member 1">
                <h4>Jiro Eugenio</h4>
                <p>Front-End Developer</p>
            </div>

            <!-- Member 2 -->
            <div class="team-member">
                <img src="../img/member2.png" alt="Member 2">
                <h4>Marcus Romero</h4>
                <p>Front-End Developer</p>
            </div>

            <!-- Member 3 -->
            <div class="team-member">
                <img src="../img/member3.PNG" alt="Member 3">
                <h4>Erimar Gonzales</h4>
                <p>Back-End Developer</p>
            </div>

            <!-- Member 4 -->
            <div class="team-member">
                <img src="../img/member4.jpg" alt="Member 4">
                <h4>Miguel Gallendez</h4>
                <p>Front-End Developer</p>
            </div>

            <!-- Member 5 -->
            <div class="team-member">
                <img src="../img/member5.png" alt="Member 5">
                <h4>Kurt Tuasoc</h4>
                <p>Back-End Developer</p>
            </div>
        </div>
    </section>

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
                <li><a href="terms.php">Terms of Service</a></li>
                <li><a href="privacy.php">Privacy Policy</a></li>
                <li><a href="developers.php">Developers' Profile</a></li>
            </ul>
        </div>
    </footer>

    <div class="copyright-container">
        <p>&copy; 2023 RubbyRoasts. All rights reserved.</p>
    </div>

</body>
</html>