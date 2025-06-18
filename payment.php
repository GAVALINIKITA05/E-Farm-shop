<?php
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

$firstname = $email = $address = $city = $state = $zip = $cardname = $cardnumber = $expmonth = $expyear = $cvv = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $firstname = isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : '';
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
    $address = isset($_POST['address']) ? htmlspecialchars($_POST['address']) : '';
    $city = isset($_POST['city']) ? htmlspecialchars($_POST['city']) : '';
    $state = isset($_POST['state']) ? htmlspecialchars($_POST['state']) : '';
    $zip = isset($_POST['zip']) ? htmlspecialchars($_POST['zip']) : '';
    $cardname = isset($_POST['cardname']) ? htmlspecialchars($_POST['cardname']) : '';
    $cardnumber = isset($_POST['cardnumber']) ? preg_replace("/[^0-9]/", "", $_POST['cardnumber']) : '';
    $expmonth = isset($_POST['expmonth']) ? htmlspecialchars($_POST['expmonth']) : '';
    $expyear = isset($_POST['expyear']) ? htmlspecialchars($_POST['expyear']) : '';
    $cvv = isset($_POST['cvv']) ? preg_replace("/[^0-9]/", "", $_POST['cvv']) : '';

    // Validate fields
    if (empty($firstname) || empty($email) || empty($address) || empty($city) || empty($state) || empty($zip) ||
        empty($cardname) || empty($cardnumber) || empty($expmonth) || empty($expyear) || empty($cvv)) {
        $errors[] = "All fields are required!";
    }

    // If no errors, insert into database
    if (empty($errors)) {
        $sql = "INSERT INTO payments (firstname, email, address, city, state, zip, cardname, cardnumber, expmonth, expyear, cvv)
                VALUES ('$firstname', '$email', '$address', '$city', '$state', '$zip', '$cardname', '$cardnumber', '$expmonth', '$expyear', '$cvv')";
        
        if ($conn->query($sql) === TRUE) {
            header("Location: index1.php");
            exit();
        } else {
            $errors[] = "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Checkout</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}
* {
  box-sizing: border-box;
}
.row {
  display: flex;
  flex-wrap: wrap;
  margin: 0 -16px;
}
.col-25 {
  flex: 25%;
}
.col-50 {
  flex: 50%;
}
.col-75 {
  flex: 75%;
}
.col-25, .col-50, .col-75 {
  padding: 0 16px;
}
.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}
input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
label {
  margin-bottom: 10px;
  display: block;
}
.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}
.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}
.btn:hover {
  background-color: #45a049;
}
a {
  color: #2196F3;
}
hr {
  border: 1px solid lightgrey;
}
span.price {
  float: right;
  color: grey;
}
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<h2>Responsive Checkout Form</h2>

<?php
if (!empty($errors)) {
    echo "<div style='color: red;'>";
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
    echo "</div>";
}
?>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="" method="POST">
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe" value="<?php echo $firstname; ?>" required>

            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com" value="<?php echo $email; ?>" required>

            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" value="<?php echo $address; ?>" required>

            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York" value="<?php echo $city; ?>" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY" value="<?php echo $state; ?>" required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001" value="<?php echo $zip; ?>" required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>

            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe" value="<?php echo $cardname; ?>" required>

            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" value="<?php echo $cardnumber; ?>" required>

            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September" value="<?php echo $expmonth; ?>" required>

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2026" value="<?php echo $expyear; ?>" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352" value="<?php echo $cvv; ?>" required>
              </div>
            </div>
          </div>
        </div>

        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
</div>

</body>
</html>
