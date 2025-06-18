<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }       
        body {
            font-family: Arial, sans-serif;
            background-image: url('Images/Fruits/f1.jpg'); /* Replace with your image path */
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-attachment: fixed; /* Keeps background fixed when scrolling */
        }     
        .container {
            width: 100%;
            max-width: 400px;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        header {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }
        .field {
            margin-bottom: 20px;
        }
        .field input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }
        .field input:focus {
            border-color: #4CAF50;
        }
        .field input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            font-size: 18px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .field input[type="submit"]:hover {
            background-color: #45a049;
        }
        .message {
            text-align: center;
            color: red;
            margin-bottom: 10px;
        }
        .links {
            text-align: center;
            font-size: 14px;
        }
        .links a {
            text-decoration: none;
            color: #4CAF50;
        }
        .links a:hover {
            text-decoration: underline;
        }
        a {
            text-align: center;
            display: block;
            margin-top: 20px;
            font-size: 14px;
            color: #333;
            text-decoration: none;
        }
    </style>
</head>
<body>
      <div class="container">
        <div class="box form-box">
            <?php 
              include("php/config.php");
              // Check if the form is submitted
              if (isset($_POST['submit'])) {
                $email = mysqli_real_escape_string($con, $_POST['email']);
                $password = mysqli_real_escape_string($con, $_POST['password']);
                // Query to check if the user exists in the database
                $result = mysqli_query($con, "SELECT * FROM users WHERE Email='$email' AND Password='$password'") or die("Select Error");
                $row = mysqli_fetch_assoc($result);               
                if (is_array($row) && !empty($row)) {
                    // Start session and store user data
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['name'] = $row['Name'];
                    $_SESSION['age'] = $row['Age'];
                    $_SESSION['id'] = $row['Id'];

                    // Redirect to the home page (or any other page like index1.php)
                    header("Location: index1.php");
                    exit();  // Stop the script execution after redirecting
                } else {
                    echo "<div class='message'><p>Wrong Email or Password</p></div>";
                    echo "<a href='index.php'><button class='btn'>Go Back</button></a>";
                }
              } else {
            ?>
            <!-- Display the login form -->
            <header>Login</header>
            <form action="" method="POST">
                <div class="field">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>
                <div class="field">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login">
                </div>
                <div class="field">
                    <input type="button" value="Cancel" onclick="window.location.href='index1.php';">
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>
