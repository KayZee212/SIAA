// Define initial quantities and unit prices
var quantities = {
    'quantity1': 0,
    'quantity2': 0,
    'quantity3': 0,
    'quantity4': 0,
};

var unitPrices = {
    'quantity1': 100,
    'quantity2': 50,
    'quantity3': 80,
    'quantity4': 75,
};

// Function to update quantity and recalculate total
function updateQuantity(quantityId, change) {
    // Get the current quantity
    var currentQuantity = parseInt(document.getElementById(quantityId).value);

    // Update the quantity
    currentQuantity += change;
    if (currentQuantity < 0) {
        currentQuantity = 0; // Ensure quantity is non-negative
    }

    // Update the input field with the new quantity
    document.getElementById(quantityId).value = currentQuantity;

    // Update the quantities object
    quantities[quantityId] = currentQuantity;

    // Update the total
    updateTotal();
}

// Function to update the total and display it
function updateTotal() {
    var totalItems = 0;
    var totalPrice = 0;

    // Get all checkboxes with the class 'product-checkbox'
    var checkboxes = document.querySelectorAll('.product-checkbox');

    // Loop through each checkbox
    checkboxes.forEach(function (checkbox, index) {
        if (checkbox.checked) {
            // Get the corresponding quantity and unit price
            var quantityId = 'quantity' + (index + 1);
            var quantity = quantities[quantityId];
            var unitPrice = unitPrices[quantityId];

            // Update the total items and total price
            totalItems += quantity;
            totalPrice += quantity * unitPrice;
        }
    });

    // Update the total items and total price display
    document.getElementById('totalItems').innerText = 'Total (' + totalItems + ' item' + (totalItems !== 1 ? 's' : '') + '):';
    document.getElementById('totalPrice').innerText = totalPrice + 'php';
}

// Add event listeners to checkboxes to update total when checked or unchecked
var checkboxes = document.querySelectorAll('.product-checkbox');
checkboxes.forEach(function (checkbox, index) {
    checkbox.addEventListener('change', function () {
        // Call updateTotal when a checkbox is checked or unchecked
        updateTotal();
    });
});

// Function to handle checkout button click
function checkout(event) {
    event.preventDefault();

    // Check if at least one item is selected
    var selectedItems = document.querySelectorAll('.product-checkbox:checked');
    if (selectedItems.length === 0) {
        alert('Please select items before checking out.');
        return;
    }

    // Check if all selected items have a quantity greater than 0
    var quantitiesValid = Array.from(selectedItems).every(function (checkbox) {
        var index = Array.from(checkboxes).indexOf(checkbox);
        var quantityId = 'quantity' + (index + 1);
        var quantity = quantities[quantityId];
        return quantity > 0;
    });

    if (!quantitiesValid) {
        alert('Please enter a quantity for all selected items before checking out.');
        return;
    }

    // Initialize the receipt string
    var receipt = "Receipt:\n";

    // Loop through each checkbox to gather selected items and quantities
    checkboxes.forEach(function (checkbox, index) {
        if (checkbox.checked) {
            // Get the corresponding quantity and unit price
            var quantityId = 'quantity' + (index + 1);
            var quantity = quantities[quantityId];
            var unitPrice = unitPrices[quantityId];

            // Calculate the total price for the item
            var totalPrice = quantity * unitPrice;

            // Append item details to the receipt string
            receipt += quantity + "x " + document.querySelectorAll('.box-product')[index].innerText + ": " + totalPrice + "php\n";
        }
    });

    // Get the total price
    var totalItems = document.getElementById('totalItems').innerText;
    var totalPrice = document.getElementById('totalPrice').innerText;

    // Append total to the receipt string
    receipt += totalItems + " " + totalPrice;

    // Log the receipt to the console (you can customize this part)
    console.log(receipt);

    // Redirect to http://localhost/code/orders/checkout.php with the receipt data as a query parameter
    window.location.href = 'http://home.rubbyroasts.store/orders/checkout.php?data=' + encodeURIComponent(receipt);


    // Add your further checkout logic here
    // For example, you might want to clear the selected items and quantities
    checkboxes.forEach(function (checkbox) {
        checkbox.checked = false;
    });

    // Clear quantities and update the total
    for (var key in quantities) {
        quantities[key] = 0;
        document.getElementById(key).value = 0;
    }
    updateTotal();

}
