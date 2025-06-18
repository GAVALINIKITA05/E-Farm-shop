<?php
// Include header (navbar)
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Farm Shop</title>
    <style>
        /* Hero Section Styles */
        .hero-section {
            position: relative;
            height: 500px; /* Adjust height as needed */
            background-size: cover;
            background-position: center center;
            animation: slideshow 20s infinite; /* Slideshow duration */
        }

        @keyframes slideshow {
            0% {
                background-image: url('Images/Homepage/vegetables.jpg');
            }
            25% {
                background-image: url('Images/Homepage/fruitsbasket.jpg');
            }
            50% {
                background-image: url('Images/Fruits/Mango.jpg');
            }
            75% {
                background-image: url('Images/Homepage/vegetables.jpg');
            }
            100% {
                background-image: url('Images/Homepage/fruitsbasket.jpg');
            }
        }
        

        /* Text Styling for Hero Section */
        .hero-section h1 {
            color: white;
            font-size: 3rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .hero-section p {
            color: white;
            font-size: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        /* Category Dropdown Section */
        .dropdown-toggle {
            width: 100%;
            text-align: center;
        }

        /* Featured Products Section */
        .card-body {
            text-align: center;
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        /* Additional Styles */
        .container {
            position: relative;
            z-index: 1;
        }

        /* Ensure the page's text is not hidden behind the slideshow */
        body {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Hero Section with background slideshow -->
    <div class="hero-section">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <!-- <h1 class="display-4 text-success">Welcome to E-Farm Shop</h1> -->
                <!-- <p class="lead">Fresh, local produce delivered straight from the farm to your table.</p> -->
            </div>
        </div>
    </div>

    <!-- Category Dropdown Section -->
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <div class="dropdown text-center">
                <button class="btn btn-lg btn-primary dropdown-toggle" type="button" id="categoryDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    Shop by Category
                </button>
                <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                    <!-- Links to different categories -->
                    <li><a class="dropdown-item" href="fruits.php">Fruits</a></li>
                    <li><a class="dropdown-item" href="vegetables.php">Vegetables</a></li>
                    <li><a class="dropdown-item" href="crops.php">Crops</a></li>
                    <!-- <li><a class="dropdown-item" href="handmade.php">Handmade Goods</a></li>
                    <li><a class="dropdown-item" href="dairy.php">Dairy Products</a></li> -->
                </ul>
            </div>
        </div>
    </div>

    <!-- Featured Products Section -->
    <div class="row mt-5">
        <div class="col-12 text-center">
            <h2>Featured Products</h2>
            <p>Check out some of our top-quality farm fresh products!</p>
        </div>

        <!-- Featured Products -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="Images/Homepage/fruitsbasket.jpg" class="card-img-top" alt="Fresh Apples">
                <div class="card-body">
                    <h5 class="card-title">Fresh Fruits</h5>
                    <a href="fruits.php" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="Images/Homepage/vegetables.jpg" class="card-img-top" alt="Organic Eggs">
                <div class="card-body">
                    <h5 class="card-title">Fresh Vegetables</h5>
                    <a href="Vegetables.php" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="Images/Fruits/crop.jpg" class="card-img-top" alt="Fresh Carrots">
                <div class="card-body">
                    <h5 class="card-title">Crops</h5>
                    <a href="crops.php" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
 
<?php
// Include footer
include('footer.php');
?>

</body>
</html>
