<?php 
include("php/config.php"); // Include your database connection

// Initialize error and success messages
$message = '';

// Handling the POST request to save the rating
if (isset($_POST['rate'])) {
    // Ensure that the 'rating' is set and it's within the correct range (1-5)
    if (isset($_POST['rating']) && in_array($_POST['rating'], [1, 2, 3, 4, 5])) {
        $item_id = $_POST['item_id']; // Item being rated
        $rating = $_POST['rating']; // Rating (1-5)

        // Save the rating into the database
        $query = "INSERT INTO ratings (item_id, rating) VALUES ('$item_id', '$rating')";
        if (mysqli_query($con, $query)) {
            $message = "Rating saved successfully!";
        } else {
            $message = "Error: " . mysqli_error($con);
        }
    } else {
        $message = "Please select a valid rating.";
    }
}

// Fetch the average rating for the item (if any)
$item_id = 1; // Example item id (change based on what you need)
$avg_query = mysqli_query($con, "SELECT AVG(rating) AS avg_rating FROM ratings WHERE item_id = $item_id");
$avg_result = mysqli_fetch_assoc($avg_query);

// If no ratings exist, set the average rating to 0
$avg_rating = $avg_result['avg_rating'] ? round($avg_result['avg_rating'], 1) : 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating System</title>
    <style>
        /* General styles for the stars */
        .star-rating {
            font-size: 24px;
            color: #ffcc00;
            cursor: pointer;
        }

        .star-rating input {
            display: none;
        }

        .star-rating label {
            display: inline-block;
            width: 30px;
            height: 30px;
            background: url('star-empty.png') no-repeat center center;
            background-size: contain;
        }

        .star-rating input:checked ~ label {
            background: url('star-filled.png') no-repeat center center;
            background-size: contain;
        }

        /* Display average rating */
        .average-rating {
            font-size: 18px;
            color: #333;
        }

        .rating-form {
            margin-top: 20px;
        }

        .submit-rating {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Displaying the average rating -->
        <div class="average-rating">
            <p>Average Rating: <?= $avg_rating ?> / 5</p>
        </div>

        <!-- Display any messages -->
        <?php if ($message): ?>
            <div class="message">
                <p><?= $message ?></p>
            </div>
        <?php endif; ?>

        <!-- Rating System -->
        <form class="rating-form" method="POST" action="">
            <div class="star-rating">
                <!-- Radio buttons for each star -->
                <input type="radio" name="rating" value="5" id="star5"><label for="star5">&#9733;</label>
                <input type="radio" name="rating" value="4" id="star4"><label for="star4">&#9733;</label>
                <input type="radio" name="rating" value="3" id="star3"><label for="star3">&#9733;</label>
                <input type="radio" name="rating" value="2" id="star2"><label for="star2">&#9733;</label>
                <input type="radio" name="rating" value="1" id="star1"><label for="star1">&#9733;</label>
            </div>
            
            <input type="hidden" name="item_id" value="<?= $item_id ?>"> <!-- Item ID (e.g., product ID) -->
            <button type="submit" name="rate" class="submit-rating">Submit Rating</button>
        </form>
    </div>
</body>
</html>
