<?php
    require "../LOGIN_SIGNUP_UPDATED/functions.php";
    check_login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="../img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <!-- NAVBAR, FOOTER, COPYRIGHT LINKS -->
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../footer.css">
    <link rel="stylesheet" href="../copyright.css">
    <script src="https://kit.fontawesome.com/d9b0917e73.js" crossorigin="anonymous"></script>
    <title>RubbyRoasts - Profile</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.png">
</head>
<body>

<div class="container">
    <h1>Profile</h1>

    <?php if (check_login(false)): ?>

        <div class="form-group">
            <form action="update_profile.php" method="post">
                <!-- Existing code for readonly fields -->
                <p>Hi, <b><?= $_SESSION['USER']->username ?></b></p>
                <h4 class="restart-warning">Warning: You will be logged out once you make changes. </h4>
                <h4>Please re-login again.</h4>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="<?= $_SESSION['USER']->username ?>" readonly>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?= $_SESSION['USER']->email ?>" readonly>

                <!-- First Name -->
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input class="text-box" type="text" id="first_name" name="first_name" value="<?= isset($_POST['first_name']) ? htmlspecialchars($_POST['first_name']) : $_SESSION['USER']->first_name ?>" <?php if (!check_verified()) echo 'disabled'; ?> required>
                </div>

                <!-- Middle Name -->
                <div class="form-group">
                    <label for="middle_name">Middle Name:</label>
                    <input type="text" id="middle_name" name="middle_name" value="<?= isset($_POST['middle_name']) ? htmlspecialchars($_POST['middle_name']) : $_SESSION['USER']->middle_name ?>" <?php if (!check_verified()) echo 'disabled'; ?> required>
                </div>

                <!-- Last Name -->
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" id="last_name" name="last_name" value="<?= isset($_POST['last_name']) ? htmlspecialchars($_POST['last_name']) : $_SESSION['USER']->last_name ?>" <?php if (!check_verified()) echo 'disabled'; ?> required>
                </div>

                <!-- Contact Number -->
                <div class="form-group">
                    <label for="contact_number">Contact Number:</label>
                    <input type="text" id="contact_number" name="contact_number" value="<?= isset($_POST['contact_number']) ? htmlspecialchars($_POST['contact_number']) : $_SESSION['USER']->contact_number ?>" <?php if (!check_verified()) echo 'disabled'; ?> required>
                </div>

                <!-- Address Line 1 -->
                <div class="form-group">
                    <label for="address_line_1">Address Line 1:</label>
                    <input type="text" id="address_line_1" name="address_line_1" value="<?= isset($_POST['address_line_1']) ? htmlspecialchars($_POST['address_line_1']) : $_SESSION['USER']->address_line_1 ?>" <?php if (!check_verified()) echo 'disabled'; ?> required>
                </div>

                <!-- Address Line 2 -->
                <div class="form-group">
                    <label for="address_line_2">Address Line 2:</label>
                    <input type="text" id="address_line_2" name="address_line_2" value="<?= isset($_POST['address_line_2']) ? htmlspecialchars($_POST['address_line_2']) : $_SESSION['USER']->address_line_2 ?>" <?php if (!check_verified()) echo 'disabled'; ?> required>
                </div>

                <!-- Barangay -->
                <div class="form-group">
                    <label for="barangay">Barangay:</label>
                    <input type="text" id="barangay" name="barangay" value="<?= isset($_POST['barangay']) ? htmlspecialchars($_POST['barangay']) : $_SESSION['USER']->barangay ?>" <?php if (!check_verified()) echo 'disabled'; ?> required>
                </div>

                <!-- Region -->
                <div class="form-group">
                    <label for="region">Region:</label>
                    <input type="text" id="region" name="region" value="<?= isset($_POST['region']) ? htmlspecialchars($_POST['region']) : $_SESSION['USER']->region ?>" <?php if (!check_verified()) echo 'disabled'; ?> required>
                </div>

                <!-- Postal Code -->
                <div class="form-group">
                    <label for="postal_code">Postal Code:</label>
                    <input type="number" id="postal_code" name="postal_code" value="<?= isset($_POST['postal_code']) ? htmlspecialchars($_POST['postal_code']) : $_SESSION['USER']->postal_code ?>" <?php if (!check_verified()) echo 'disabled'; ?> required>
                </div>

                <div >
                    <button type="submit" <?php if (!check_verified()) echo 'disabled'; ?> class ="Submit-Button">Update Profile</button>
                </div>
                
            </form>
            <div>
                
                    <?php if (!check_verified()): ?>
                        <a href="../LOGIN_SIGNUP_UPDATED/verify.php" >
                            <button class = "Verify-Button" class = "Verify-Button">Verify Profile</button>
                        </a>
                    <?php endif; ?>
               
            </div>
            
            
        </div>
    <?php endif; ?>
</div>

    <nav class="navbar">
        <ul class="navbar-ul">
            <li><a href="../index.php"><i class="fa-solid fa-house"></i>Home</a></li>
            <li><a href="../CATALOG_UPDATED/menu.php"><i class="fa-solid fa-bars"></i>Menu</a></li>
                <?php
                    // Check if the user is logged in
                    if (check_login(false)) {
                        // If logged in, display "Profile" and "Orders" links
                        echo '<li><a href="../orders/orders.php"><i class="fa-solid fa-bag-shopping"></i>Orders</a></li>';
                        echo '<li><a href="profile.php"><i class="fa-solid fa-user"></i>Profile</a></li>';
                        echo '<li><a href="../LOGIN_SIGNUP_UPDATED/logout.php">Logout</a></li>';
                    } else {
                        // If not logged in, display "Sign-In/Log-In" link
                        echo '<li><a href="../LOGIN_SIGNUP_UPDATED/login.php">Sign-Up</a></li>';
                    }
                ?>
        </ul>
    </nav>
    <div class="filler"></div>

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
