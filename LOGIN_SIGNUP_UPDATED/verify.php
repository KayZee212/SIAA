<?php

	require "mail.php";
	require "functions.php";
	check_login();

	$errors = array();

	if($_SERVER['REQUEST_METHOD'] == "GET" && !check_verified()){

		//send email
		$vars['code'] =  rand(10000,99999);

		//save to database
		$vars['expires'] = (time() + (60 * 10));
		$vars['email'] = $_SESSION['USER']->email;

		$query = "insert into verify (code,expires,email) values (:code,:expires,:email)";
		database_run($query,$vars);

		$message = "Greetings! You have successfully requested for account verification.
		Expires in 6 mins: " . $vars['code'];
		$subject = "RubbyRoasts - Account Verification Request";
		$recipient = $vars['email'];
		send_mail($recipient,$subject,$message);
	}

	if($_SERVER['REQUEST_METHOD'] == "POST"){

		if(!check_verified()){

			$query = "select * from verify where code = :code && email = :email";
			$vars = array();
			$vars['email'] = $_SESSION['USER']->email;
			$vars['code'] = $_POST['code'];

			$row = database_run($query,$vars);

			if(is_array($row)){
				$row = $row[0];
				$time = time();

				if($row->expires > $time){

					$id = $_SESSION['USER']->id;
					$query = "update users set email_verified = email where id = '$id' limit 1";
					
					database_run($query);

					header("Location: ../USER_PROFILE_UPDATED/profile.php");
					die;
				}else{
					echo "Code expired";
				}
			}else{
				echo "wrong code";
			}
		}else{
			echo "You're already verified";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="verify.css">
    <!--NAVBAR, FOOTER, COPYRIGHT LINKS-->
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../footer.css">
    <link rel="stylesheet" href="../copyright.css">
    <script src="https://kit.fontawesome.com/d9b0917e73.js" crossorigin="anonymous"></script>
    <title>Verification</title>
	<link rel="icon" type="image/x-icon" href="../img/favicon.png">
</head>
<body>
	
	<div class="error-code">
				<?php if(count($errors) > 0):?>
					<?php foreach ($errors as $error):?>
						<?= $error?> <br>	
					<?php endforeach;?>
				<?php endif;?>
			</div><br>

	<div class="mainoutercontainer">
		<div class="Verify-Container">
			<br><h4>An email was sent to your address. Please paste the code from the email here.</h4><br>
			<form method="post">
				<input class = "form-control" type="text" name="code" placeholder="Enter your Code"><br>
				<br>
				<div>
						<input type="submit" value="Verify" class="Verify-Button">
				</div>
			</form>
		</div>
    </div>

	<nav class="navbar">
        <ul class="navbar-ul">
            <li><a href="../index.php"><i class="fa-solid fa-house"></i>Home</a></li>
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