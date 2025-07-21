<?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $conn = new mysqli("localhost", "root", "", "blood_donation");

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $email = $_POST['email'];
  $password = $_POST['password'];

  // Fetch user by email
  $stmt = $conn->prepare("SELECT first_name, last_name, password FROM users WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $stmt->store_result();

  if ($stmt->num_rows == 1) {
    $stmt->bind_result($first_name, $last_name, $hashed_password);
    $stmt->fetch();

    if (password_verify($password, $hashed_password)) {
      echo "<script>alert('Welcome, $first_name $last_name!');</script>";
    } else {
      echo "<script>alert('Incorrect password. Please try again.');</script>";
    }
  } else {
    echo "<script>alert('Email not found. Please sign up.');</script>";
  }

  $stmt->close();
  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - BloodConnect</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #FFF5F5;
      color: #333;
    }

    header {
      background-color: #FF8A80;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;
      color: white;
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
    }

    nav a {
      color: white;
      margin: 0 12px;
      text-decoration: none;
      font-weight: bold;
    }

    .container {
      max-width: 400px;
      margin: 80px auto;
      background: white;
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
    }

    h2 {
      text-align: center;
      color: #B71C1C;
      margin-bottom: 24px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
      font-size: 14px;
    }

    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .btn {
      background-color: #D32F2F;
      color: white;
      padding: 12px;
      width: 100%;
      border: none;
      font-weight: bold;
      border-radius: 4px;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #B71C1C;
    }

    .links {
      margin-top: 16px;
      text-align: center;
    }

    .links a {
      color: #D32F2F;
      text-decoration: none;
      font-size: 14px;
    }

    .links a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">bloodconnect</div>
    <nav>
      <a href="#">ABOUT US</a>
      <a href="#">ORGANIZE A CAMP</a>
      <a href="#">SPREAD AWARENESS</a>
      <a href="#">JOIN US</a>
      <a href="#">BLOG</a>
      <a href="signup.php">SIGN UP</a>
    </nav>
  </header>

  <div class="container">
    <h2>Login to BloodConnect</h2>
    <form method="POST" action="">
      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" placeholder="you@example.com" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>

      <button type="submit" class="btn">Login</button>

      <div class="links">
        <p><a href="#">Forgot Password?</a> | <a href="signup.php">Create an Account</a></p>
      </div>
    </form>
  </div>

</body>
</html>
