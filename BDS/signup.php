<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign Up - BloodConnect</title>
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
      max-width: 500px;
      margin: 60px auto;
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

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 18px;
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
      <a href="login.php">LOGIN</a>
    </nav>
  </header>

  <div class="container">
    <h2>Create Your Account</h2>
    <form action="signup_handler.php" method="POST">
      <label for="firstname">First Name</label>
      <input type="text" name="firstname" id="firstname" required>

      <label for="lastname">Last Name</label>
      <input type="text" name="lastname" id="lastname" required>

      <label for="email">Email Address</label>
      <input type="email" name="email" id="email" required>

      <label for="password">Password</label>
      <input type="password" name="password" id="password" required>

      <button type="submit" class="btn">Sign Up</button>

      <div class="links">
        <p>Already have an account? <a href="login.php">Login here</a></p>
      </div>
    </form>
  </div>

</body>
</html>
