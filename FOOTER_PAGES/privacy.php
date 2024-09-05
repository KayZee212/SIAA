<?php
	require "../LOGIN_SIGNUP_UPDATED/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="privacy.css">
    <!--NAVBAR, FOOTER, COPYRIGHT LINKS-->
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../footer.css">
    <link rel="stylesheet" href="../copyright.css">
    <script src="https://kit.fontawesome.com/d9b0917e73.js" crossorigin="anonymous"></script>
    <title>RubbyRoasts - Privacy Policy</title>
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
                    <h4>PRIVACY NOTICE</h4>
                </div>
            </div>

            <div class="aboutusinvert">
                <div class="descriptionscontainer">
                    <p>RubbyRoasts understands that our users care about their personal data and how it is collected, used, shared and cared for. We are committed to handling your personal data in accordance with the applicable laws when you use any of the features, functions, mini-apps or mobile games available on our Platform or Services, interact with us via an external service, application or through our customer service agents, or access our Services or our Platform through your computer, mobile device, or any other device with Internet connectivity.</p>
                    <br>
                    <h4>PLEASE READ THIS PRIVACY NOTICE CAREFULLY. BY CLICKING OR CHECKING “SIGN UP”, “I AGREE TO RubbyRoasts’S PRIVACY NOTICE”, “I AGREE AND CONSENT TO THE COLLECTION, USE, DISCLOSURE, STORAGE, TRANSFER AND/OR PROCESSING OF MY PERSONAL DATA FOR THE PURPOSE STATED IN, AND UNDER THE TERMS OF, RubbyRoasts’S PRIVACY NOTICE” OR SIMILAR STATEMENTS AVAILABLE AT THE RubbyRoasts REGISTRATION PAGE OR IN THE COURSE OF PROVIDING YOU WITH THE SERVICES OR ACCESS TO THE PLATFORM, YOU ACKNOWLEDGE THAT YOU HAVE READ AND UNDERSTOOD THE TERMS OF THIS PRIVACY NOTICE AND THAT YOU HAVE AGREED AND CONSENTED TO THE COLLECTION, USE, DISCLOSURE, STORAGE, TRANSFER
                    AND/OR PROCESSING OF YOUR PERSONAL DATA AS DESCRIBED AND UNDER THE TERMS HEREIN.</h4>
                </div>
            </div>
                    
            <div class="aboutus">
                <div class="descriptionscontainer">
                    <h2>INTRODUCTION TO THIS PRIVACY NOTICE</h2>
                    <p>1.1. Where applicable, this Privacy Notice should be read in conjunction with the Country-Specific Riders for your jurisdiction as set out in Section 12 below.</p>
                    <p>1.2. In the course of you using RubbyRoasts’s applications and websites (both web and mobile versions), as well as products, information, functions and other services operated by RubbyRoasts, we will be collecting, using, disclosing, storing and/or processing data, including your personal data. In this Privacy Notice, Platform shall refer to all relevant applications and websites (both web and mobile versions), and Services shall refer to all products, information, functions and services provided by RubbyRoasts from time to time at the Platform(s).  </p>
                    <p>1.3. This Privacy Notice exists to keep you in the know about how we collect, use, disclose, store and/or process the data we collect and receive during the course of providing the Services or access to the Platform to you, our user, whether or not you have registered to use our Platform as a buyer or a seller. We will only collect, use, disclose, store and/or process your personal data in accordance with this Privacy Notice.  </p>
                    <p>1.4. It is important that you read this Privacy Notice together with any other applicable notices we may provide for special applications where when we are collecting, using, disclosing and/or processing personal data about you, so that you are fully aware of how and why we are using your personal data.  </p>
                    <p>1.5. We may update this Privacy Notice from time to time. Any changes we make to this Privacy Notice in the future will be reflected on this page and material changes will be notified to you. Where permissible under local laws, your continued use of the Services or access to the Platform, including placing Orders (as defined in the Terms of Use) on the Platform, or express consent thereto, following the modifications, updates or amendments to this Privacy Notice (whether or not you have reviewed such document) shall constitute your acknowledgment and acceptance of the changes we make to this Privacy Notice. You agree that it is your responsibility to review and check the Privacy Notice frequently to see if any updates or changes have been made to this Privacy Notice.  </p>
                    <p>1.6. This Privacy Notice applies in conjunction with other notices, contractual clauses and consent clauses that apply in relation to the collection, storage, use, disclosure and/or processing of your personal data by us and is not intended to override them unless we state expressly otherwise. </p>
                    <p>1.7. All of these terms apply to RubbyRoasts's users, whether or not the users have created an account as buyers and/or sellers, unless otherwise stated specifically to apply only to buyers or only to sellers.  </p>
                </div>
            </div>
            <div class="aboutusinvert">
                <div class="descriptionscontainer">
                    <h2>THE PERSONAL DATA WE COLLECT FROM YOU</h2>
                    <p>2.1. We collect the personal data described below in accordance with applicable local laws and, if required, upon obtaining your consent.</p>
                    <p>2.2. Personal data means any information about an individual, whether recorded in a material form or not and whether true or not, who can be identified from that data (whether directly or indirectly), or from that data and other data to which we have or are likely to have access. </p>
                    <p>2.3 Depending on your use of our Platform and/or your interaction with our Services (such as when registering for our Services and/or logging into our Platform), you may be asked to provide us with certain information. While you can choose not to provide us with certain information, you might not be able to take advantage of many of our Services that are provided to you. The personal data that you may opt to provide to us are as follows: </p>
                    <p>(a) Identity and Profile Data, which may include your name, date of birth, gender, username and password, email address, telephone number, your interests, and any personal data in any photographs or videos or audio recordings that you upload onto our Platform.  </p>
                    <p>(b) Account and Transaction Data, which may include your credit card details, bank account details, bank statements, delivery/ billing address, payments and orders to and from you, and other details of products and services that you have supplied to or purchased through the Platform. </p>
                    <p>(c) Usage Data, such as information about how and when you use the Platform, products and Services or view any content on the Platform, as well as websites you were visiting before you came to the Platform and other similar statistics.</p>
                    <p>(d) Marketing and Communications Data, which may include your interests, survey responses, preferences in receiving marketing materials from us and your communication preferences, your preferences for particular products or services, as well as your feedback, chat, email or call history on the Platform or with third party service providers. </p>
                    <p>(e) Location data, such as when you check for deals near you or the delivery / pick-up status of orders.</p>
                    <p>2.4. We automatically collect and process certain types of information when you use your devices to access our Platform and interact with our Services for the purposes set out herein.</p>
                </div>
            </div>
            <div class="aboutus">
                <div class="descriptionscontainer">
                    <h2>HOW WE RECEIVE YOUR PERSONAL DATA</h2>
                    <p>2.5. During the course of your use of the Platform and our provision of the Services, we may receive personal data from you in the following situations:</p>
                    <p>(a) When you browse our websites</p>
                    <p>(b) When you create an account with us</p>
                    <p>(c) When you make a transaction regarding the products available on the Platform;</p>
                    <p>(d) When you activate or use any payment-related functions available on the Platform</p>
                    <p>(e) When you record any user-generated content which is uploaded on the Platform;</p>
                    <p>(f) When you participate in any activity or campaign on the Platform;</p>
                    <p>(g) When you log in to your account on the Platform or otherwise interact with us via an external service or application, such as Facebook or Google;</p>
                    <p>(h) When any other user of the Platform posts any comments on the content you have uploaded on the Platform or when you post any comments on other users’ content uploaded to the Platform;</p>
                    <p>(i) When a third party lodges a complaint against you or the content you have posted on the Platform; and</p>
                    <p>(j) When you interact with us offline, including when you interact with our outsourced customer service agents.  </p>
                    <p>2.6. We may collect personal data from you, third parties (including but not limited to agents, vendors, contractors, partners and any others who provide services to us, who collect your personal information and/or perform functions on our behalf, or with whom we collaborate, including but not limited to payment service providers, government sources of data, financial services providers, credit bureaus, delivery, marketing and other service partners), our affiliates, or such data may be collected automatically when you use the Platform or the Services, as set out in this section. Please see also Sections 2.12 to 2.16 on the collection of computer data.  </p>
                    <p>2.7. During the course of your use of the Platform and our provision of the Services, you agree that you have provided your consent (whether to us, the third party or our affiliates) to the transfer of your personal data from third parties and/or our affiliates to RubbyRoasts for the purposes set out in this Privacy Notice or any other terms.  </p>
                    <p>2.8. You agree to only submit personal data which is accurate and not misleading and to keep it up to date and inform us of any changes to the personal data that you have provided to us. We shall have the right to request for documentation and carry out the necessary checks to verify the personal data provided by you as part of our user verification processes or as required under law.  </p>
                    <p>2.9. We will only be able to collect certain categories of personal data if you voluntarily provide the personal data to us or as otherwise provided for under this Privacy Notice. If you choose not to provide your personal data to us or subsequently withdraw your consent to our use of your personal data, we may not be able to provide you with certain features or functionality on the Services or access to the Platform.</p>
                    <p>2.10. In some situations, you may provide personal data of other individuals to us (such as your family members or friends or persons in your contact list), when you use the "Find My Friends" or similar function, or when you add them as recipients or beneficiaries of any use of our Services. You represent and warrant that you have obtained the necessary consent, license and permissions from such individuals to share and transfer his/her personal data to us, and for us to collect, store, use, disclose or otherwise process that data in accordance with this Privacy Notice. </p>
                    <p>2.11. If you sign up to be a user on our Platform using your social media account or link your RubbyRoasts account to your social media account or use certain other RubbyRoasts social media features, we may access personal data about you which you have voluntarily provided to your social media provider in accordance with the provider's policies and we will manage your personal data in accordance with this Privacy Notice.  </p>
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
