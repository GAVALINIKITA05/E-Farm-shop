<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form - eFarm Shop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #4CAF50;
            margin-bottom: 30px;
        }
        .field {
            margin-bottom: 15px;
        }
        .field label {
            display: block;
            font-weight: bold;
            color: #333;
        }
        .field input, .field textarea, .field select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
        }
        .field input[type="submit"], .field input[type="button"] {
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .field input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
        }
        .field input[type="submit"]:hover {
            background-color: #45a049;
        }
        .field input[type="button"] {
            background-color: #f44336;
            color: white;
            border: none;
        }
        .field input[type="button"]:hover {
            background-color: #e53935;
        }
        .message {
            text-align: center;
            font-size: 18px;
            color: green;
            margin-top: 20px;
        }
        .error {
            text-align: center;
            font-size: 18px;
            color: red;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Order Form</h1>
    <!-- Order Form -->
    <form action="payment.php" method="POST">
        <div class="field">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="field">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="field">
            <label for="phone">Phone Number</label>
            <input type="text" name="phone" id="phone" required>
        </div>
        <div class="field">
            <label for="address">Delivery Address</label>
            <textarea name="address" id="address" rows="4" required></textarea>
        </div>
        <div class="field">
            <label for="product">Product</label>
            <select name="product" id="product" required>
                <option value="Apple">Apple</option>
                <option value="Banana">Banana</option>
                <option value="Orange">Orange</option>
                <option value="Mango">Mango</option>
            </select>
        </div>
        <div class="field">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity" min="1" required>
        </div>
        <!-- Submit Button -->
        <div class="field">
            <input type="submit" name="submit" value="Place Order">
        </div>      
        <!-- Cancel Button -->
        <div class="field">
            <input type="button" value="Cancel" onclick="window.location.href='index1.php';">
        </div>      
    </form>
</div>
</body>
</html>
