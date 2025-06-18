<?php
include("php/config.php");

$registered = false;
$message = '';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $age = (int) $_POST['age'];
    $password = $_POST['password'];

    if (empty($name) || empty($email) || empty($password) || $age < 1) {
        $message = "<div class='message error'><p>Please fill in all fields correctly.</p></div>";
    } else {
        $stmt = $con->prepare("SELECT Email FROM users WHERE Email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $message = "<div class='message error'><p>This email is already registered. Try another.</p></div>";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $con->prepare("INSERT INTO users (Name, Email, Age, Password) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssis", $name, $email, $age, $hashed_password);

            if ($stmt->execute()) {
                $registered = true;
                $message = "<div class='message success'><p>Registration successful!</p></div>";
            } else {
                $message = "<div class='message error'><p>Error: " . htmlspecialchars($stmt->error) . "</p></div>";
            }
        }
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('Images/Fruits/n.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 420px;
        }

        header {
            text-align: center;
            font-size: 26px;
            font-weight: 600;
            color: #333;
            margin-bottom: 25px;
        }

        .field {
            margin-bottom: 20px;
        }

        .field label {
            font-size: 14px;
            color: #444;
            margin-bottom: 6px;
            display: block;
        }

        .field input {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
            transition: border-color 0.3s ease;
            font-size: 14px;
        }

        .field input:focus {
            border-color: #007bff;
            outline: none;
        }

        .btn {
            background: #007bff;
            color: #fff;
            border: none;
            padding: 14px;
            width: 100%;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: #0056b3;
        }

        .message {
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
            text-align: center;
        }

        .message.success {
            background-color: #d4edda;
            color: #155724;
        }

        .message.error {
            background-color: #f8d7da;
            color: #721c24;
        }

        .links {
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
        }

        .links a {
            color: #007bff;
            text-decoration: none;
        }

        .links a:hover {
            text-decoration: underline;
        }

        @media (max-width: 500px) {
            .container {
                padding: 25px;
            }

            header {
                font-size: 22px;
            }

            .btn {
                font-size: 15px;
                padding: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>Sign Up</header>

        <!-- Show messages -->
        <?php if (!empty($message)) echo $message; ?>

        <!-- Show form only if not registered -->
        <?php if (!$registered): ?>
            <form action="" method="post">
                <div class="field">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" required>
                </div>

                <div class="field">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="field">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" required min="1">
                </div>

                <div class="field">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Register">
                </div>

                <div class="field">
                    <input type="button" class="btn" value="Cancel" onclick="window.location.href='index1.php';">
                </div>

                <div class="links">
                    Already a member? <a href="login.php">Sign In</a>
                </div>
            </form>
        <?php else: ?>
            <div class="field">
                <a href="login.php"><button class="btn">Login Now</button></a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
