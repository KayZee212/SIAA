<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['LOGGED_IN']) || !$_SESSION['LOGGED_IN']) {
    header("Location: login.php");
    exit;
}

// Get user data from session
$user = $_SESSION['USER'];

// Check if the user is an admin
if ($user->is_admin != 1) {
    // If not an admin, redirect to a permission denied page or home page
    header("Location: rubbyroast/index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0; }
        .container { width: 50%; margin: 0 auto; padding: 20px; background-color: #fff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        h1 { text-align: center; }
        .admin-notice { color: green; font-weight: bold; }
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome to the Admin Dashboard, <?php echo htmlspecialchars($user->username); ?>!</h1>

    <p class="admin-notice">You have admin privileges.</p>
    <p>Here, you can manage the system, view reports, and perform admin-specific tasks.</p>

    <p><a href="logout.php">Logout</a></p>
</div>

</body>
</html>
