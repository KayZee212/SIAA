<?php
	require "../LOGIN_SIGNUP_UPDATED/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="terms.css">
    <!--NAVBAR, FOOTER, COPYRIGHT LINKS-->
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../footer.css">
    <link rel="stylesheet" href="../copyright.css">
    <script src="https://kit.fontawesome.com/d9b0917e73.js" crossorigin="anonymous"></script>
    <title>RubbyRoasts - Terms and Conditions</title>
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
                <div class="descriptionscontainer">
                    <h4>TERMS AND CONDITIONS</h4>
                </div>
            </div>

            <div class="aboutusinvert">
                <div class="descriptionscontainer">
                    <p>Welcome to the RubbyRoasts platform. Please read these terms and conditions carefully. The following Terms of Use govern your use and access of the Platform (defined below) and the use of the Services. By accessing the Platform and/or using the Services, you agree to be bound by these Terms of Use. If you do not agree to these Terms of Use, do not access and/or use this Platform or the Services.</p>
                    <p>Access to and use of password protected and/or secure areas of the Platform and/or use of the Services are restricted to Customers with accounts only. You may not obtain or attempt to obtain unauthorized access to such parts of this Platform and/or Services, or to any other protected information, through any means not intentionally made available by us for your specific use.</p>
                    <p>If you are below 18 years old: you must obtain consent from your parent(s) or legal guardian(s), their acceptance of these Terms of Use and their agreement to take responsibility for: (i) your actions; (ii) any charges associated with your use of any of the Services or purchase of Products; and (iii) your acceptance and compliance with these Terms of Use. If you do not have consent from your parent(s) or legal guardian(s), you must stop using/accessing this Platform and using the Services.</p>
                </div>
            </div>
                    
            <div class="aboutus">
                <div class="descriptionscontainer">
                    <h2>General Use of Services and/or Access of Platform</h2>
                    <p>2.1 Guidelines to the use of Platform and/or Services: You agree to comply with any and all the guidelines, notices, operating rules and policies and instructions pertaining to the use of the Services and/or access to the Platform, as well as any amendments to the aforementioned, issued by us, from time to time. We reserve the right to revise these guidelines, notices, operating rules and policies and instructions at any time and you are deemed to be aware of and bound by any changes to the foregoing upon their publication on the Platform.</p>
                    <p>2.2 Restricted activities: You agree and undertake NOT to:</p>
                    <p>(a) impersonate any person or entity or to falsely state or otherwise misrepresent your affiliation with any person or entity;</p>
                    <p>(b) use the Platform or Services for illegal purposes;</p>
                    <p>(c) attempt to gain unauthorized access to or otherwise interfere or disrupt other computer systems or networks connected to the Platform or Services;</p>
                    <p>(d) post, promote or transmit through the Platform or Services any Prohibited Materials;</p>
                    <p>(e) interfere with another’s utilization and enjoyment of the Platform or Services;</p>
                    <p>(f) use or upload, in any way, any software or material that contains, or which you have reason to suspect that contains, viruses, damaging components, malicious code or harmful components which may impair or corrupt the Platform’s data or damage or interfere with the operation of another Customer’s computer or mobile device or the Platform or Services; and</p>
                    <p>(g) use the Platform or Services other than in conformance with the acceptable use policies of any connected computer networks, any applicable Internet standards and any other applicable laws.</p>
                    <p>2.3 Availability of Platform and Services: We may, from time to time and without giving any reason or prior notice, upgrade, modify, suspend or discontinue the provision of or remove, whether in whole or in part, the Platform or any Services and shall not be liable if any such upgrade, modification, suspension or removal prevents you from accessing the Platform or any part of the Services.</p>
                    <p>2.4 Right, but not obligation, to monitor content: We reserve the right, but shall not be obliged to:</p>
                    <p>(a) monitor, screen or otherwise control any activity, content or material on the Platform and/or through the Services. We may in our sole and absolute discretion, investigate any violation of the terms and conditions contained herein and may take any action it deems appropriate;</p>
                    <p>(b) prevent or restrict access of any Customer to the Platform and/or the Services;</p>
                    <p>(c) report any activity it suspects to be in violation of any applicable law, statute or regulation to the appropriate authorities and to co-operate with such authorities; and/or</p>
                    <p>(d) to request any information and data from you in connection with your use of the Services and/or access of the Platform at any time and to exercise our right under this paragraph if you refuse to divulge such information and/or data or if you provide or if we have reasonable grounds to suspect that you have provided inaccurate, misleading or fraudulent information and/or data.</p>
                </div>
            </div>
            <div class="aboutusinvert">
                <div class="descriptionscontainer">
                    <h2>Use of Services</h2>
                    <p>3.1 Application of this Clause: In addition to all other terms and conditions of these Terms of Use, the provisions in this Clause 3 are the additional specific terms and conditions governing your use of the Services.</p>
                    <p>3.2 Restrictions: Use of the Services is limited to authorized Customers that are of legal age and who have the legal capacity to enter into and form contracts under any applicable law. Customers who have breached or are in breach of the terms and conditions contained herein and Customers who have been permanently or temporarily suspended from use of any of the Services may not use the Services even if they satisfy the requirements of this Clause 3.2.</p>
                    <p>3.3 General terms of use: You agree:</p>
                    <p>(a) to access and/or use the Services only for lawful purposes and in a lawful manner at all times and further agree to conduct any activity relating to the Services in good faith; and</p>
                    <p>(b) to ensure that any information or data you post or cause to appear on the Platform in connection with the Services is accurate and agree to take sole responsibility for such information and data.</p>
                    <p>3.4 Product description: While we endeavor to provide an accurate description of the Products, we do not warrant that such description is accurate, current or free from error.</p>
                    <p>3.5 Prices of Products: All Listing Prices are subject to taxes, unless otherwise stated. We reserve the right to amend the Listing Prices at any time without giving any reason or prior notice.</p>
                    <p>3.6 Third Party Vendors: You acknowledge that parties other than RubbyRoasts (i.e. Third Party-Vendors or Sellers) list and sell Products on the Platform. Whether a particular Product is listed for sale on the Platform by RubbyRoasts or a Third-Party Vendor may be stated on the webpage listing that Product. For the avoidance of doubt, each agreement entered into for the sale of a Third-Party Vendor’s Products to a Customer shall be an agreement entered into directly and only between the Third-Party Vendor and the Customer. You further acknowledge that Third Party Vendors may utilize paid services offered by RubbyRoasts to promote their Product listings within your search results on the Platform. Such Product listings may be accompanied by a “megaphone” logo.</p>
                </div>
            </div>
            <div class="aboutus">
                <div class="descriptionscontainer">
                    <h2>Customers with RubbyRoasts accounts</h2>
                    <p>4.1 Username/Password: Certain Services that may be made available on the Platform may require creation of an account with us or for you to provide Personal Data. If you request to create an account with us, a Username and Password may either be: (i) determined and issued to you by us; or (ii) provided by you and accepted by us in our sole and absolute discretion in connection with the use of the Services and/or access to the relevant Platform. We may at any time in our sole and absolute discretion, request that you update your Personal Data or forthwith invalidate the Username and/or Password without giving any reason or prior notice and shall not be liable or responsible for any Losses suffered by or caused by you or arising out of or in connection with or by reason of such request or invalidation. You hereby agree to change your Password from time to time and to keep the Username and Password confidential and shall be responsible for the security of your account and liable for any disclosure or use (whether such use is authorized or not) of the Username and/or Password. You should notify us immediately if you have knowledge that or have reason for suspecting that the confidentiality of the Username and/or Password has been compromised or if there has been any unauthorized use of the Username and/or Password or if your Personal Data requires updating.</p>
                    <p>4.2 Biometric Login Service: If your device supports fingerprint or facial recognition features, you may be able to set up these as your verification methods and use your fingerprint or face identification registered on a permitted mobile device in lieu of your Username and/or Password, or one-time pin (OTP) as a security code to confirm your identity to access the Platform and/or use of the Services (“Biometric Login”). You acknowledge and agree that in order to use the Biometric Login:</p>
                    <p>(a) you must access our mobile application using a permitted mobile device. For the purposes of this Clause, a permitted mobile device shall be one that is deemed to be a “trusted device” based on the security criteria which shall be determined by RubbyRoasts at its sole discretion from time to time;</p>
                    <p>(b) you will need to ensure that the fingerprint / face recognition function has been activated on your permitted mobile device and thus, your face identification or fingerprint for control access has been registered and stored in your permitted mobile device;</p>
                    <p>(c) you must ensure that only your face and/or fingerprint identification are stored in your permitted mobile device to access the device and you understand that upon activation of the Biometric Login function in your account, any face / fingerprint identification that is stored on your permitted mobile device will be used for the purpose of the Biometric Login and to access the Platform and/or Services under your account;</p>
                    <p>(d) you are responsible for the safety and security of your mobile device, the face or fingerprint recognition function of your mobile device, and any face or fingerprint identification information stored in your mobile device;</p>
                    <p>(e) by activating the Biometric Login function in your Account, you hereby agree and authorize RubbyRoasts to access the face / fingerprint identification function in your permitted mobile device, and you hereby consent to RubbyRoasts accessing and using such information for the provision of the Service under your account. Please note that RubbyRoasts does not collect, process, or store your face/ fingerprint information in the provision of this service;</p>
                    <p>(f) the face / fingerprint authentication module of the permitted mobile device is not provided by RubbyRoasts, and RubbyRoasts makes no representation or warranty as to the security of the Biometric Login function of any permitted mobile device and whether it works in the way that the manufacturer of the device represents;</p>
                    <p>(g) unless prohibited by applicable laws from excluding or limiting our liability, RubbyRoasts is not liable for any loss you incur in connection with the use or attempted use of the Biometric Login, access to your Account by using the Biometric Login, or your instructions, or any unauthorised transactions through or in connection with the Biometric Login service; and</p>
                    <p>(h) RubbyRoasts does not represent or warrant that the Biometric Login service will be accessible at all times, or function with any electronic equipment, software, infrastructure or other Services that we may offer from time to time. You may at any time still choose to access the mobile app using your Username and Password, and/or choose to deactivate the Biometric Login service at any time via your mobile application once you are signed in.</p>
                    <p>4.3 Purported use/access: You agree and acknowledge that any use of the Services and/or any access to the Platform and any information, data or communications referable to your Username and Password (including any access using the Biometric Login) shall be deemed to be, as the case may be:</p>
                    <p>(a) access to the relevant Platform and/or use of the Services by you; or</p>
                    <p>(b) information, data, or communications posted, transmitted, and validly issued by you.</p>
                    <p>Your Username, Password and facial or fingerprint identification are confidential information that cannot be shared with any party. We will always hold and assume that the use of your Username, Password and/or Biometric Login is done by you alone and RubbyRoasts shall have the right to conclude that such utilization/activity is conducted or sent by you. You further agree and acknowledge that you shall be bound by and agree to fully indemnify us against any and all Losses attributable to any use of any Services and/ or access to the Platform referable to your Username and Password, or Biometric Login.</p>

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
