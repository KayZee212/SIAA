<!-- Header -->
<?php 
    include "../db_conn.php"; 
	require "../../LOGIN_SIGNUP_UPDATED/functions.php";
?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="createreviews.css">
    <!--NAVBAR, FOOTER, COPYRIGHT LINKS-->
    <link rel="stylesheet" href="../../navbar.css">
    <link rel="stylesheet" href="../../footer.css">
    <link rel="stylesheet" href="../../copyright.css">
    <script src="https://kit.fontawesome.com/d9b0917e73.js" crossorigin="anonymous"></script>
    <title>Add Comment</title>
    <link rel="icon" type="image/x-icon" href="../../img/favicon.png">
</head>
<body>

    <nav class="navbar">
        <ul class="navbar-ul">
            <li><a href="../../index.php"><i class="fa-solid fa-house"></i>Home</a></li>
            <li><a href="../menu.php"><i class="fa-solid fa-bars"></i>Menu</a></li>
            <?php
                // Check if the user is logged in
                if (check_login(false)) {
                    // If logged in, display "Profile" and "Orders" links
                    echo '<li><a href="../../ORDERS_UPDATED/orders.php"><i class="fa-solid fa-bag-shopping"></i>Orders</a></li>';
                    echo '<li><a href="../../USER_PROFILE_UPDATED/profile.php"><i class="fa-solid fa-user"></i>Profile</a></li>';
                    echo '<li><a href="../../LOGIN_SIGNUP_UPDATED/logout.php">Logout</a></li>';
                } else {
                    // If not logged in, display "Sign-In/Log-In" link
                    echo '<li><a href="../../LOGIN_SIGNUP_UPDATED/login.php">Sign-Up</a></li>';
                }
            ?>
        </ul>
    </nav>
    <div class="filler"></div>
    
    <div class="mainoutercontainer">
        <div class="innercontainer">
            <?php 
            if(isset($_POST['create'])) {
                $username = isset($_SESSION['USER']) ? $_SESSION['USER']->username : '';
                $prodname = $_POST['prodname'];
                $comments = $_POST['comments'];

                // Use prepared statements to prevent SQL injection
                $query = "INSERT INTO comments (username, prodname, comments) VALUES (?, ?, ?)";
                $stmt = mysqli_prepare($conn, $query);
                mysqli_stmt_bind_param($stmt, "sss", $username, $prodname, $comments);

                // Execute the statement
                $add_comment = mysqli_stmt_execute($stmt);

                // Display appropriate message
                if (!$add_comment) {
                    echo "Something went wrong: " . mysqli_error($conn);
                } else { 
                    echo "<script type='text/javascript'>alert('Successfully added comment!')</script>";
                }

                mysqli_stmt_close($stmt);
            }
            ?>
            
            <img src="../../img/logomaroon.png" class="LogoTop" >
            <h1 class="text-center">Add Comment</h1>
            <div class="container">
            <form action="" method="post">

            <div class="form-group">
            <label for="username" class="form-label"></label>
            <!-- Display the username as non-editable text -->
            <input type="text" class="form-control" value="<?php echo $_SESSION['USER']->username; ?>" readonly>
            </div><br>

            <div class="form-group">
                <label for="prodname" class="form-label"></label>
                <select name="prodname" id="prodname" class="ProductSelect" placeholder="Select a RubbyRoasts Product"required>
                    <option disabled selected hidden>Select a RubbyRoasts Product</option>
                    <option value="Latte">Latte</option>
                    <option value="Mocha">Mocha</option>
                    <option value="Cappucino">Cappucino</option>
                    <option value="Espresso">Espresso</option>
                </select>
            </div><br>
            
            <div class="form-group">
                <label for="comments" class="form-label"></label>
                <input type="text" name="comments" class="form-control" placeholder="Add Comment" required>
            </div><br>

            

            <div  class="form-group">
                    <input type="submit" name="create" value="Submit" class="SubmitButton" required>
            </div><br>
            </form> 
            </div>
         
            <div class="form-group">
                    <a href="../menu.php" ><button class="BackButton">Back</button></a>
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
                <li><a href="../../ABOUT_US_UPDATED/about.php">About Us</a></li>
                <li><a href="../../FOOTER_PAGES/terms.php">Terms of Service</a></li>
                <li><a href="../../FOOTER_PAGES/privacy.php">Privacy Policy</a></li>
                <li><a href="../../FOOTER_PAGES/developers.php">Developers' Profile</a></li>
            </ul>
        </div>
    </footer>

    <div class="copyright-container">
        <p>&copy; 2023 RubbyRoasts. All rights reserved.</p>
    </div>

</body>
</html>
