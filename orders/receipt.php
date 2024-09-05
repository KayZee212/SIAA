<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RubbyRoasts - Receipt</title>
    <link rel="icon" type="image/png" href="../img/favicon.png">
</head>
<body>

<?php
require "../LOGIN_SIGNUP_UPDATED/functions.php";
check_login();

// Check if the required parameters are set in the query string
if (isset($_GET['modeOfPayment']) && isset($_GET['data'])) {
    // Get the values from the query string
    $username = $_SESSION['USER']->username;
    $first_name = $_SESSION['USER']->first_name;
    $middle_name = $_SESSION['USER']->middle_name;
    $last_name = $_SESSION['USER']->last_name;
    $contact = $_SESSION['USER']->contact_number;
    $address1 = $_SESSION['USER']->address_line_1;
    $address2 = $_SESSION['USER']->address_line_2;
    $barangay = $_SESSION['USER']->barangay;
    $region = $_SESSION['USER']->region;
    $postal = $_SESSION['USER']->postal_code;
    $modeOfPayment = htmlspecialchars($_GET['modeOfPayment']);
    $rawData = urldecode($_GET['data']);

    // Split the receipt data into an array of lines
    $lines = explode("\n", $rawData);

    // Create a filename based on the username and current timestamp, in the users_orders folder
    $folderPath = 'users_orders/';
    if (!file_exists($folderPath)) {
        // Create the folder if it doesn't exist
        mkdir($folderPath, 0755, true);
    }

    $timestamp = date("mdY_His"); // Format: MMDDYYYY_HHMMSS
    $filename = $folderPath . "receipt_" . $username . "_" . $timestamp . ".txt";

    // Open the file for writing
    $file = fopen($filename, "w");

    // Write the receipt information to the file
    fwrite($file, "Receipt\n\n");
    fwrite($file, "Username: " . $username . "\n");
    fwrite($file, "Contact #: " . $contact . "\n");
    fwrite($file, "Name: " . $first_name . " " . $middle_name . " " . $last_name . "\n");
    fwrite($file, "Address 1: " . $address1 . "\n");
    fwrite($file, "Address 2: " . $address2 . "\n");
    fwrite($file, "Barangay: " . $barangay . "\n");
    fwrite($file, "Region: " . $region . "\n");
    fwrite($file, "Postal: " . $postal . "\n");
    fwrite($file, "Mode of Payment: " . $modeOfPayment . "\n\n");

    // Write the order details to the file
    foreach ($lines as $line) {
        fwrite($file, str_replace('Receipt:', 'Order Details:', $line) . "\n");
    }

    // Close the file
    fclose($file);

    // Display the receipt information on the webpage
    echo '<div class="receipt">';
    echo '<h2> Receipt </h2>';
    echo '<p><strong>Username:</strong> ' . $username . '</p>';
    echo '<p><strong>Contact #:</strong> ' . $contact . '</p>';
    echo '<p><strong>Name:</strong> ' . $first_name . ' ' . $middle_name . ' ' . $last_name . '</p>';
    echo '<p><strong>Address 1:</strong> ' . $address1 . '</p>';
    echo '<p><strong>Address 2:</strong> ' . $address2 . '</p>';
    echo '<p><strong>Barangay:</strong> ' . $barangay . '</p>';
    echo '<p><strong>Region:</strong> ' . $region . '</p>';
    echo '<p><strong>Postal:</strong> ' . $postal . '</p>';
    echo '<p><strong>Mode of Payment:</strong> ' . $modeOfPayment . '</p>';
    
    // Display the order details
    foreach ($lines as $index => $line) {
        $class = ($index === count($lines) - 1) ? 'total-line' : '';
        $modifiedLine = str_replace('Receipt:', '<strong>Order Details:</strong>', $line);
        echo '<p class="' . $class . '">' . html_entity_decode($modifiedLine) . '</p>';
    }

    echo '<h2>Thank You For Purchasing!<h2>';
    
    echo '<div class="button-container">';
    echo '<div class="button-row">';
    echo '<a href="' . $filename  . '" download class="download-button">Download Receipt</a>';
    echo '</div>';

    echo '<div class="button-row">';
    echo '<a href="orders.php" class="confirm-button">Back to Merchant</a>';
    echo '</div>';
    echo '</div>';
    
    echo '</div>';
} else {
    // If any required parameter is missing, display an error message
    echo '<p>Error: Insufficient information to generate receipt.</p>';
}
?>

<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic');
    body {
        font-family: 'Poppins', sans-serif;
        margin: 0px;
        background: url('../img/coffeebginvert.png') no-repeat;
        background-size: cover; 
    }

    .receipt {
        display: flex;
        flex-direction: column;
        border: 1px solid #ccc;
        padding: 10px;
        max-width: 700px; /* Adjust the max-width as needed */
        margin: 0 auto;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        background: #fee3c5;
        font-size: 20px;
        bottom: 0;
        text-align: left;
        border-radius: 10px;
        margin-top: 10px; /* Adjust the margin as needed */
        padding-left: 20px;
    }

    h2 {
        text-align: center;
        color: #411530;
        font-weight: 800;
    }

    p {
        margin: 5px 0;
    }

    .confirm-button {
        background-color: #411530;
        color: white;
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px; /* Adjust the margin as needed */
        text-decoration: none; /* Remove default underline for anchor */
        display: inline-block; /* Ensure inline-block behavior */
        text-align: center;
        margin: 5px;
    }

    .confirm-button:hover {
        background-color: #954b3f; /* Darker green color on hover */
    }

    .download-button {
        background-color: #411530;
        color: white;
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        /* Adjust the margin as needed */
        text-decoration: none; /* Remove default underline for anchor */
        display: inline-block; /* Ensure inline-block behavior */
        text-align: center;
        margin: 5px;
    }

    .download-button:hover {
        background-color: #954b3f; /* Darker green color on hover */
    }

    .button-container {
        display: flex;
        justify-content: center;
        margin-top: 0px; /* Adjust the margin as needed */
    }

    </style>

</body>
</html>
