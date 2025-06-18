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
        <h1>Fresh Fruits from the Farm</h1>
        <p>Explore our collection of the finest farm-fresh fruits, handpicked just for you!</p>
    </div>

    <!-- Fruits Cards Section -->
    <div class="row">
        <!-- Card 1: Fresh Apples -->
        <div class="col-md-4">
            <div class="card">
                <img src="Images/Fruits/apple.jpg" class="card-img-top" alt="Fresh Apples" height="15px">
                <div class="card-body">
                    <h5 class="card-title">Fresh Apples</h5>
                    <p class="card-text">Handpicked organic apples, juicy and sweet, straight from the farm.</p>
                    <b>200 Rs</b>
                    <a href="order.php?product=apple" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>

        <!-- Card 2: Organic Bananas -->
        <div class="col-md-4">
            <div class="card">
                <img src="Images/Fruits/Bananas.jpg" class="card-img-top" alt="Organic Bananas">
                <div class="card-body">
                    <h5 class="card-title">Organic Bananas</h5>
                    <p class="card-text">Sweet, healthy bananas grown without chemicals. Perfect for smoothies!</p>
                    <b>50 Rs</b>
                    <a href="order.php?product=banana" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>

        <!-- Card 3: Fresh Oranges -->
        <div class="col-md-4">
            <div class="card">
                <img src="Images/Fruits/orange.jpg" class="card-img-top" alt="Fresh Oranges">
                <div class="card-body">
                    <h5 class="card-title">Fresh Oranges</h5>
                    <p class="card-text">Citrusy, tangy, and fresh oranges harvested from our orchards.</p>
                    <b>150 Rs</b>
                    <a href="order.php?product=orange" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>

        <!-- Card 4: Juicy Mangoes -->
        <div class="col-md-4">
            <div class="card">
                <img src="Images/Fruits/Mango.jpg" class="card-img-top" alt="Juicy Mangoes">
                <div class="card-body">
                    <h5 class="card-title">Juicy Mangoes</h5>
                    <p class="card-text">Sweet and ripe mangoes straight from the tropical orchards.</p>
                    <b>200 Rs</b>
                    <a href="order.php?product=mango" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>

        <!-- Card 5: Grapes -->
        <div class="col-md-4">
            <div class="card">
                <img src="Images/Fruits/Green Grapes.jpg" class="card-img-top" alt="Grapes">
                <div class="card-body">
                    <h5 class="card-title">Fresh Grapes</h5>
                    <p class="card-text">Organic grapes, sweet and crunchy, perfect for snacking.</p>
                    <b>300 Rs</b>
                    <a href="order.php?product=grapes" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>

        <!-- Card 6: Pomegranates -->
        <div class="col-md-4">
            <div class="card">
                <img src="Images/Fruits/strawberry.jpg" class="card-img-top" alt="Pomegranates">
                <div class="card-body">
                    <h5 class="card-title">Strawberry</h5>
                    <p class="card-text">Fresh, juicy pomegranates full of antioxidants and flavor.</p>
                    <b>400 Rs</b>
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
