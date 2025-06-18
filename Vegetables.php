<?php
// You can start a session and include any necessary PHP configuration or database connection
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits - eFarm Shop</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            color: #333;
        }

        .container {
            padding: 40px 0;
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .header h1 {
            font-size: 2.5rem;
            color: #28a745;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .card img {
            border-radius: 10px 10px 0 0;
            height: 250px;
            object-fit: cover;
        }

        .card-body {
            padding: 20px;
            text-align: center;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: #333;
        }

        .card-text {
            font-size: 1rem;
            color: #555;
        }

        .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-primary:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .row {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .col-md-4 {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

<!-- Header Section -->
<div class="container">
    <div class="header">
        <h1>Fresh Vegetable from the Farm</h1>
        
    </div>

    <!-- Fruits Cards Section -->
    <div class="row">
        <!-- Card 1: Fresh Apples -->
        <div class="col-md-4">
            <div class="card">
                <img src="Images/Vegetables/brocoli.jpg" class="card-img-top" alt="Fresh Apples" height="15px">
                <div class="card-body">
                    <h5 class="card-title">Brocoli</h5>
                                    <b>70 Rs</b>
                    <a href="order.php?product=apple" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>

        <!-- Card 2: Organic Bananas -->
        <div class="col-md-4">
            <div class="card">
                <img src="Images/Vegetables/Cabbage.jpg" class="card-img-top" alt="Organic Bananas">
                <div class="card-body">
                    <h5 class="card-title">Cabbage</h5>
                     <b>50 Rs</b>
                    <a href="order.php?product=banana" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>

        <!-- Card 3: Fresh Oranges -->
        <div class="col-md-4">
            <div class="card">
                <img src="Images/Vegetables/Green Capsicum.jpg" class="card-img-top" alt="Fresh Oranges">
                <div class="card-body">
                    <h5 class="card-title">Green Capsicum</h5>
                     <b>50 Rs</b>
                    <a href="order.php?product=orange" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>

        <!-- Card 4: Juicy Mangoes -->
        <div class="col-md-4">
            <div class="card">
                <img src="Images/Vegetables/Onion.jpg" class="card-img-top" alt="Juicy Mangoes">
                <div class="card-body">
                    <h5 class="card-title">Onion</h5>
                    <b>70 Rs</b>
                    <a href="order.php?product=mango" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>

        <!-- Card 5: Grapes -->
        <div class="col-md-4">
            <div class="card">
                <img src="Images/Vegetables/Potato.webp" class="card-img-top" alt="Grapes">
                <div class="card-body">
                    <h5 class="card-title">Potato</h5>
                    <b>100 Rs</b>
                    <a href="order.php?product=grapes" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>

        <!-- Card 6: Pomegranates -->
        <div class="col-md-4">
            <div class="card">
                <img src="Images/Vegetables/Tomato.jpg" class="card-img-top" alt="Pomegranates">
                <div class="card-body">
                    <h5 class="card-title">Tomato</h5>
                    <b>40 Rs</b>
                    <a href="order.php?product=pomegranate" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and Popper.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

</body>
</html>
