<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[Farm Shop Name]</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Internal CSS for custom styles -->
    <style>
        /* Internal CSS for additional styling */
        body {
            font-family: Arial, sans-serif;
        }

        .navbar {
            margin-bottom: 30px;
        }

        .navbar-brand {
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            font-size: 1.1em;
        }

        .card-title {
            font-size: 1.2em;
        }

        .dropdown-menu a {
            font-size: 1.1em;
        }

        /* Hero Section */
        .hero-section {
            background-color: #f8f9fa;
            padding: 50px 0;
        }

        .hero-section h1 {
            font-size: 3em;
            color: #28a745;
        }

        .hero-section p {
            font-size: 1.2em;
            color: #6c757d;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 10px;
        }

        .card-body {
            text-align: center;
        }

        .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-primary:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">E-Farm Shop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index1.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Product Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="fruits.php">Fruits</a></li>
                        <li><a class="dropdown-item" href="vegetables.php">Vegetables</a></li>
                        <li><a class="dropdown-item" href="crops.php">Crops</a></li>
                        
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Optional Bootstrap JS (dropdown functionality) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

