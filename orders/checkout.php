<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="checkout.css">
    <title>RubbyRoasts - Checkout</title>
    <link rel="icon" type="image/png" href="../img/favicon.png">
</head>
<body>
<?php

    require "../LOGIN_SIGNUP_UPDATED/functions.php";
    check_login();

// Check if the 'data' parameter is set in the query string
if (isset($_GET['data'])) {
    // Get the receipt data from the query string
    $rawData = urldecode($_GET['data']);

    // Split the receipt data into an array of lines
    $lines = explode("\n", $rawData);

    // Define variables for name and address
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

    // Display the checkout form
    
    echo '<form action="receipt.php" method="get" onsubmit="return captureModeOfPayment()">'; // Change the method to GET

    echo '<div class="checkout">';
    echo '<h2> Order Details</h2>';

    // Display Name, Address, and Mode of Payment using variables
    echo '<p><strong>Username:</strong> ' . $username . '</p>';
    echo '<p><strong>Contact #:</strong> ' . $contact. '</p>';
    echo '<p><strong>Name:</strong> ' . $first_name . ' ' . $middle_name . ' ' . $last_name . '</p>';
    echo '<p><strong>Address 1:</strong> ' . $address1 . '</p>';
    echo '<p><strong>Address 2:</strong> ' . $address2 . '</p>';
    echo '<p><strong>Barangay:</strong> ' . $barangay . '</p>';
    echo '<p><strong>Region:</strong> ' . $region . '</p>';
    echo '<p><strong>Postal:</strong> ' . $postal . '</p>';
    

    

    // Display the select box for Mode of Payment
    echo '<label for="modeOfPayment"><strong>Mode of Payment:</strong></label>';
    echo '<select id="modeOfPayment" name="modeOfPayment" class = "Mode-Of-Payment">';
        echo '<option value="">Select</option>';
        echo '<option value="Cash on Delivery">Cash on Delivery</option>';
        echo '<option value="Credit / Debit Card">Credit / Debit Card</option>';
        echo '<option value="Gcash">GCash</option>';
    echo '</select>';

    // Add hidden input field to store details
    echo '<input type="hidden" name="name" value="' . htmlspecialchars($username) . '">';
    echo '<input type="hidden" name="contact" value="' . htmlspecialchars($contact) . '">';
    echo '<input type="hidden" name="first_name" value="' . htmlspecialchars($first_name) . '">';
    echo '<input type="hidden" name="middle_name" value="' . htmlspecialchars($middle_name) . '">';
    echo '<input type="hidden" name="last_name" value="' . htmlspecialchars($last_name) . '">';
    echo '<input type="hidden" name="address1" value="' . htmlspecialchars($address1) . '">';
    echo '<input type="hidden" name="address2" value="' . htmlspecialchars($address2) . '">';
    echo '<input type="hidden" name="barangay" value="' . htmlspecialchars($barangay) . '">';
    echo '<input type="hidden" name="region" value="' . htmlspecialchars($region) . '">';
    echo '<input type="hidden" name="postal" value="' . htmlspecialchars($postal) . '">';

  
    echo '<input type="hidden" name="address" value="' . htmlspecialchars($address1) . '">';
    
    // Add hidden input field to store receipt data
    echo '<input type="hidden" name="data" value="' . htmlspecialchars($rawData) . '">';

    // Add hidden input field to store selected mode of payment
    echo '<input type="hidden" name="selectedPayment" id="selectedPayment" value="">';

    // Display the order details
    foreach ($lines as $index => $line) {
        // Use a conditional to add a class to the last <p> element
        $class = ($index === count($lines) - 1) ? 'total-line' : '';

        // Replace "Receipt:" with "Order Details:" in each line
        $modifiedLine = str_replace('Receipt:', '<strong>Order Details:</strong>', $line);

        // Use html_entity_decode to ensure HTML tags are not escaped
        echo '<p class="' . $class . '">' . html_entity_decode($modifiedLine) . '</p>';
    }

    // Add the confirmation button with the "confirm-button" class
    echo '<button type="submit" class="confirm-button">Proceed to Checkout</button>';

    echo '</div>';
    echo '</form>';
} else {
    // If 'data' parameter is not set, display an error message
    echo '<p>Error: Order details not found.</p>';
}
?>

<script>
function captureModeOfPayment() {
    var selectedPayment = document.getElementById("modeOfPayment").value;

    if (selectedPayment === "") {
        alert("Please select a mode of payment.");
        return false; // Prevent form submission
    }

    document.getElementById("selectedPayment").value = selectedPayment;
    return true; // Allow form submission
}

</script>
<style>
    body{
        background-size: cover;
    }
    </style>
</body>
</html>