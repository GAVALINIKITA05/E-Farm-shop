<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_farm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize user input
function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize form data
    $name = isset($_POST['name']) ? sanitize_input($_POST['name']) : '';
    $email = isset($_POST['email']) ? sanitize_input($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? sanitize_input($_POST['phone']) : '';
    $address = isset($_POST['address']) ? sanitize_input($_POST['address']) : '';
    $product = isset($_POST['product']) ? sanitize_input($_POST['product']) : '';
    $quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 0;

    // Check if all fields are filled
    if (empty($name) || empty($email) || empty($phone) || empty($address) || empty($product) || $quantity <= 0) {
        echo "<div class='error'>All fields are required. Please fill in all details.</div>";
    } else {
        // Insert into database
        $sql = "INSERT INTO orders (name, email, phone, address, product, quantity) VALUES (?, ?, ?, ?, ?, ?)";

        // Prepare statement
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("sssssi", $name, $email, $phone, $address, $product, $quantity);

            // Execute the query
            if ($stmt->execute()) {
                echo "<div class='message'>Order placed successfully!</div>";
            } else {
                echo "<div class='error'>Error: " . $stmt->error . "</div>";
            }

            // Close statement
            $stmt->close();
        } else {
            echo "<div class='error'>Failed to prepare statement: " . $conn->error . "</div>";
        }
    }
}

// Close connection
$conn->close();
?>
