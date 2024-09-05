<?php 
    include "db_conn.php";
    require "../LOGIN_SIGNUP_UPDATED/functions.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <!--NAVBAR, FOOTER, COPYRIGHT LINKS-->
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../footer.css">
    <link rel="stylesheet" href="../copyright.css">
    <script src="https://kit.fontawesome.com/d9b0917e73.js" crossorigin="anonymous"></script>
    <title>RubbyRoasts - Menu</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.png">
</head>
<body>
    <nav class="navbar">
        <ul class="navbar-ul">
            <li><a href="../index.php"><i class="fa-solid fa-house"></i>Home</a></li>
            <li><a href="menu.php"><i class="fa-solid fa-bars"></i>Menu</a></li>
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

    <div class="outer-container">
        <div class="promo">
                <img src="../img/santa.webp" alt="santa" class="santa">
                <div class="promodescriptions">
                    <h1>Merry Christmas!</h1>
                    <p>Celebrate your Christmas with <b>RubbyRoasts</b></p>
                </div>
        </div>
        <div class="main-content">            
            <div class="food-menu">
                
                <div class="food-item">
                    <h3>Espresso</h3>
                    <img src="../img/1Espresso.jpg" alt="Espresso">
                    <p>High-quality and delicious espresso</p>
                    <div class="buy-now-container">
    <?php
    if (check_login(false)) { // Check if the user is logged in without redirecting
        // User is logged in, display the buy now button
        ?>
        <a href="../orders/orders.php" class="ButtonContainer">
            <button class="buy-now-button">
                ₱50.00
            </button>
        </a>
        <?php
    } else {
        // User is not logged in, provide a link to the login page
        ?>
        <a href="../LOGIN_SIGNUP_UPDATED/login.php" class="ButtonContainer">
            <button class="buy-now-button">
            ₱50.00
            </button>
        </a>
        <?php
    }
    ?>
</div> 
                </div>
                <div class="food-item">
                    <h3>Cappuccino</h3>
                    <img src="../img/2Cappuccino.jpg" alt="Cappuccino">
                    <p>Rich and creamy taste in a cup</p>
                    
                     <div class="buy-now-container">
                        
                     <?php
    if (check_login(false)) { // Check if the user is logged in without redirecting
        // User is logged in, display the buy now button
        ?>
        <a href="../orders/orders.php" class="ButtonContainer">
            <button class="buy-now-button">
                ₱75.00
            </button>
        </a>
        <?php
    } else {
        // User is not logged in, provide a link to the login page
        ?>
        <a href="../LOGIN_SIGNUP_UPDATED/login.php" class="ButtonContainer">
            <button class="buy-now-button">
            ₱75.00
            </button>
        </a>
        <?php
    }
    ?>
         
        </div>
            </div>
                <div class="food-item">
                    <h3>Latte</h3>
                    <img src="../img/3Latte.jpg" alt="Latte">
                    <p>Smooth, frothy, and delicious!</p> 
                   
                    <div class="buy-now-container">
                    <?php
    if (check_login(false)) { // Check if the user is logged in without redirecting
        // User is logged in, display the buy now button
        ?>
        <a href="../orders/orders.php" class="ButtonContainer">
            <button class="buy-now-button">
                ₱80.00
            </button>
        </a>
        <?php
    } else {
        // User is not logged in, provide a link to the login page
        ?>
        <a href="../LOGIN_SIGNUP_UPDATED/login.php" class="ButtonContainer">
            <button class="buy-now-button">
            ₱80.00
            </button>
        </a>
        <?php
    }
    ?>
                    </div>
                
                </div>
                <div class="food-item">
                    <h3>Mocha</h3>
                    <img src="../img/4Mocha.jpg" alt="Mocha">
                    <p>A bittersweet chocolatey drink!</p>
                    
                    <div class="buy-now-container">
                    <?php
    if (check_login(false)) { // Check if the user is logged in without redirecting
        // User is logged in, display the buy now button
        ?>
        <a href="../orders/orders.php" class="ButtonContainer">
            <button class="buy-now-button">
                ₱100.00
            </button>
        </a>
        <?php
    } else {
        // User is not logged in, provide a link to the login page
        ?>
        <a href="../LOGIN_SIGNUP_UPDATED/login.php" class="ButtonContainer">
            <button class="buy-now-button">
            ₱100.00
            </button>
        </a>
        <?php
    }
    ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Jiro Code Start FRONTEND-->
    <div class="reviewsmain">
        <div class="headercomments">
            <br><br><h1 class="text-center" >Product Reviews!</h1><br>
                 <?php if (check_login(false)): ?>
                    <a href="includes/create.php" class='reviewbutton'>Add Review</a><br><br>
                 <?php endif; ?>
            <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
            <tr>
                <th scope="col">Username</th>
                <th scope="col">Product</th>
                <th scope="col" class ="commentbar">Comment</th>
            </tr> 
            </thead>
            <tbody>
            <tr>
        </div>
        <div class="commentsdisplay">
            <?php
                $query="SELECT * FROM comments"; // SQL query to fetch all table data
                $view_users= mysqli_query($conn,$query); // sending the query to the database
                // displaying all the data retrieved from the database using while loop
                while($row= mysqli_fetch_assoc($view_users))
                {
                    $id = $row['id'];
                    $username = $row['username'];
                    $comments= $row['comments'];
                    $prodname= $row['prodname'];
                
                    echo "<tr >";
                    echo " <td ><b>{$username}</b></td>";
                    echo " <td >{$prodname} </td>";
                    echo " <td >{$comments} </td>";
                    
                } 
            ?>
                    </tr> 
                    </tbody>
                </table>
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






