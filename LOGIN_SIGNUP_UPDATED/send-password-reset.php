<?php
$email = $_POST["email"];

$token = bin2hex(random_bytes(16));
$token_hash = hash("sha256", $token);
$expiry = date("Y-m-d H:i:s", time() + 60 * 30);

$mysqli = new mysqli("localhost", "root", "", "verify_db");


if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$sql = "UPDATE users
        SET reset_token_hash = ?,
            reset_token_expires_at = ?
        WHERE email = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("sss", $token_hash, $expiry, $email);
$stmt->execute();

if ($mysqli->affected_rows) {
    $mail = require __DIR__ . "/mail.php";
    if (!$mail) {
        die("Unable to instantiate mailer");
    }

    $mail = create_mailer();
    $mail->SetFrom("rubbyroasts@gmail.com", "RubbyRoasts");
    $mail->addAddress($email);
    $mail->Subject = "Password Reset";
    $mail->Body = <<<END
        <html>
        <body style="background-image: url(''); background-size: cover; font-family: Arial, sans-serif; display: flex; align-items: center; justify-content: center; height: 100vh; margin: 0;">
            <div style="background-color: #ffffff; max-width: 600px; padding: 20px; border-radius: 15px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);">
                <h2 style="text-align: center;">Password Reset</h2>
                <p style="text-align: center;">Click <a href="http://localhost/rubbyroast/LOGIN_SIGNUP_UPDATED/reset-password.php?token=$token">here</a> to reset your password.</p>
            </div>
        </body>
        </html>
    END;

    try {
        $mail->send();
        echo "";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer error: {$mail->ErrorInfo}";
    }
}

$stmt->close();
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Sent Successfully</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.png">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: brown;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .message-container {
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            max-width: 400px;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .success-message {
            color: #009688;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .back-link {
            color: #3498db;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="message-container">
        <p class="success-message">Email sent successfully!</p>
        <p>Your password reset instructions have been sent to your email address.</p>
        <p>Check your email inbox</a></p>
    </div>
</body>
</html>



