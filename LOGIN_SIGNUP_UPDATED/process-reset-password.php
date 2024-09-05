<?php
require "functions.php";

$token = $_POST["token"];
$token_hash = hash("sha256", $token);

$mysqli = new mysqli("localhost", "root", "", "verify_db");


if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$sql = "SELECT id, username, email_verified, password, date, reset_token_hash, reset_token_expires_at FROM users WHERE reset_token_hash = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $token_hash);
$stmt->execute();

$result = $stmt->get_result();

// Fetch the data into variables
$row = $result->fetch_assoc();

// Check if a record was found
if (!$row) {
    die("Token not found");
}

// Retrieve data from the fetched row
$id = $row['id'];
$username = $row['username'];
$email_verified = $row['email_verified'];
$reset_token_expires_at = $row['reset_token_expires_at'];

if (strtotime($reset_token_expires_at) <= time()) {
    die("Token has expired");
}

// Retrieve password data from the form
$new_password = $_POST['password'];
$password2 = $_POST['password2'];

// Validate password
$errors = array();
if (strlen(trim($new_password)) < 4) {
    $errors[] = "Password must be at least 4 characters long";
}

if ($new_password != $password2) {
    $errors[] = "Passwords must match";
}

if (!empty($errors)) {
    die(implode("<br>", $errors));
}

// Hash the new password
$new_password_hash = hash('sha256', $new_password);

// Update the user's password
$sql = "UPDATE users SET password = ?, reset_token_expires_at = NULL WHERE id = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("si", $new_password_hash, $id);
$stmt->execute();

// Redirect to the success page
header("Location: success-password.html");
exit;
?>
