<?php
session_start();
include("config.php");

// Ensure admin is logged in
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

// Handle form submission to add product
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $target = "uploads/" . basename($image);

    // Upload image
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $query = "INSERT INTO products (name, price, description, image) VALUES ('$name', '$price', '$description', '$target')";
        if (mysqli_query($con, $query)) {
            echo "Product added successfully!";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    } else {
        echo "Error uploading image.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <h2>Add New Product</h2>
    <form action="add_product.php" method="POST" enctype="multipart/form-data">
        <label>Product Name: <input type="text" name="name" required></label><br>
        <label>Price: <input type="number" name="price" step="0.01" required></label><br>
        <label>Description: <textarea name="description" required></textarea></label><br>
        <label>Image: <input type="file" name="image" required></label><br>
        <button type="submit" name="submit">Add Product</button>
    </form>
</body>
</html>
