<<?php
    session_start(); // Start the session

    require "../LOGIN_SIGNUP_UPDATED/functions.php";

    // Check if the user is logged in (you may want to add more robust authentication)
    if (!isset($_SESSION['USER'])) {
        header("Location: login.php");
        exit;
    }

    // Ensure the database connection is available (you might have this in functions.php)
    $string = "mysql:host=localhost;dbname=u524404949_verify_db";
    $conn = new PDO($string,'u524404949_rubbyroast','RabirowRadaRada@123');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Sanitize and validate input data (you may want to add more validation)
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
        $middle_name = filter_input(INPUT_POST, 'middle_name', FILTER_SANITIZE_STRING);
        $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING);
        $contact_number = filter_input(INPUT_POST, 'contact_number', FILTER_SANITIZE_STRING);
        $address_line_1 = filter_input(INPUT_POST, 'address_line_1', FILTER_SANITIZE_STRING);
        $address_line_2 = filter_input(INPUT_POST, 'address_line_2', FILTER_SANITIZE_STRING);
        $barangay = filter_input(INPUT_POST, 'barangay', FILTER_SANITIZE_STRING);
        $region = filter_input(INPUT_POST, 'region', FILTER_SANITIZE_STRING);
        $postal_code = filter_input(INPUT_POST, 'postal_code', FILTER_SANITIZE_STRING);

        // Update the user's profile information
        $user_id = $_SESSION['USER']->id;
        update_profile($user_id, $username, $email, $first_name, $middle_name, $last_name, $contact_number, $address_line_1, $address_line_2, $barangay, $region, $postal_code);

        // Redirect to the profile page after the update
        session_destroy();
        header("Location: ../LOGIN_SIGNUP_UPDATED/login.php");
        exit;
    }
?>