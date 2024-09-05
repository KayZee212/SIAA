<?php
    require "../LOGIN_SIGNUP_UPDATED/functions.php";
    check_login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="orders.css">
    <!--NAVBAR, FOOTER, COPYRIGHT LINKS-->
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../footer.css">
    <link rel="stylesheet" href="../copyright.css">
    <script src="https://kit.fontawesome.com/d9b0917e73.js" crossorigin="anonymous"></script>
    <title>RubbyRoasts - Orders</title>
    <link rel="icon" type="image/png" href="../img/favicon.png">
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
                        echo '<li><a href="orders.php"><i class="fa-solid fa-bag-shopping"></i>Orders</a></li>';
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

<div class="table-container">
    <table class="info-container">
        <tr>
            <td class="box-info" colspan="2">Product</td>
            <td class="box-info">Unit Price</td>
            <td class="box-info">Quantity</td>
        </tr>
    </table>

    <table class="container" id="productTable">
        <tr>
        <td class="checkbox">
            <label class="checkbox-container">
            <input type="checkbox" name="productCheckbox[]" class="product-checkbox">
            <span class="checkmark"></span>
            </label>
         </td>
            <td class="box-info-img"> <img src="../img/4Mocha.jpg" class="image"></td>
            <td class="box-product">Mocha</td>
            <td class="box unit-price">100PHP</td>
            <td class="box">
                <div class="quantity-container">
                    <button class="quantity-btn" onclick="updateQuantity('quantity1', -1)">-</button>
                    <input type="text" class="quantity-input" id="quantity1" value="0" />
                    <button class="quantity-btn" onclick="updateQuantity('quantity1', 1)">+</button>
                </div>
            </td>
           
        </tr>
        <tr>
        <td class="checkbox">
            <label class="checkbox-container">
            <input type="checkbox" name="productCheckbox[]" class="product-checkbox">
            <span class="checkmark"></span>
            </label>
        </td>
            <td class="box-info-img"> <img src="../img/1Espresso.jpg" class="image"></td>
            <td class="box-product">Espresso</td>
            <td class="box unit-price">50PHP</td>
            <td class="box">
                <div class="quantity-container">
                    <button class="quantity-btn" onclick="updateQuantity('quantity2', -1)">-</button>
                    <input type="text" class="quantity-input" id="quantity2" value="0" />
                    <button class="quantity-btn" onclick="updateQuantity('quantity2', 1)">+</button>
                </div>
            </td>
            
        </tr>
        <tr>
        <td class="checkbox">
            <label class="checkbox-container">
            <input type="checkbox" name="productCheckbox[]" class="product-checkbox">
            <span class="checkmark"></span>
            </label>
        </td>
            <td class="box-info-img"> <img src="../img/3Latte.jpg" class="image"></td>
            <td class="box-product">Latte</td>
            <td class="box unit-price">80PHP</td>
            <td class="box">
                <div class="quantity-container">
                    <button class="quantity-btn" onclick="updateQuantity('quantity3', -1)">-</button>
                    <input type="text" class="quantity-input" id="quantity3" value="0" />
                    <button class="quantity-btn" onclick="updateQuantity('quantity3', 1)">+</button>
                </div>
            </td>
            
        </tr>
        <tr>
        <td class="checkbox">
            <label class="checkbox-container">
            <input type="checkbox" name="productCheckbox[]" class="product-checkbox">
            <span class="checkmark"></span>
            </label>
        </td>
            <td class="box-info-img"> <img src="../img/2Cappuccino.jpg" class="image"></td>
            <td class="box-product">Cappucinno</td>
            <td class="box unit-price">75PHP</td>
            <td class="box">
                <div class="quantity-container">
                    <button class="quantity-btn" onclick="updateQuantity('quantity4', -1)">-</button>
                    <input type="text" class="quantity-input" id="quantity4" value="0" />
                    <button class="quantity-btn" onclick="updateQuantity('quantity4', 1)">+</button>
                </div>
            </td>
           
        </tr>
    </table>
    <div class="under-navbar">
    <div class="nav-box">
        <p id="totalItems">Total (0 items):</p>
    </div>
    <div class="nav-box">
        <p id="totalPrice">0PHP</p>
    </div>
    <div class="nav-box">
        <?php
        // Check if the user is logged in and verified
        if (check_login(false) && check_verified()) {
            echo '<a href="#" class="checkout-button" onclick="checkout(event)">Checkout</a>';
        } else {
            echo "Not verified";
        }
        ?>
    </div>       
</div>
</div>
</div>

    <footer class="footer-container">
        <div>
            <h3>CONTACT US</h3>
            <br>
            <ul>
                <li>E-mail: rubbyroasts@gmail.com</li>
                <li>Contact: XXXXXXXXXXX (Globe)</li>
                <li>Telephone: XXX-XXXX-XXX</li>
            </ul>
        </div>
        <div>
            <h3>SOCIAL</h3>
            <br>
            <ul>
                <li>Twitter: @rubbyroastsofficial</li>
                <li>Instagram: @rubby_roasts</li>
                <li>Tiktok: @rubby_roasts_official</li>
            </ul>
        </div>
        <div>
            <h3>ADDRESS</h3>
            <br>
            <ul>
                <li>533 G Jade Lane. Cristimar Village</li>
                <li>Barangay San Roque</li>
                <li>Antipolo City, Rizal</li>
            </ul>
        </div>
        <div>
            <h3>COMPANY</h3>
            <br>
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
        

<script src="orders.js"></script>

</body>
</html>