<?php
// Start PHP session if needed
session_start();

// Connect your front end  to database
$conn = mysqli_connect("localhost", "root", "", "document");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Login logic
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email    = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $sql = "SELECT * FROM information WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        echo "<script>alert('Login successful! ✅'); window.location.href = 'ourservice.php';</script>";
        exit();
    } else {
        echo "<script>alert('Invalid email or password ❌');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>+Ticket Soft Login</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: #eef2f5;
      color: #333;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1rem 2rem;
      background: linear-gradient(90deg, #1e3c72, #2a5298);
      color: white;
    }
    header img { height: 40px; }
    header nav a {
      margin: 0 15px;
      color: white;
      text-decoration: none;
      font-weight: 500;
    }

    .all-body {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      padding: 2rem;
      gap: 2rem;
      flex-wrap: wrap;
    }

    .sub-all-body img {
      width: 100%;
      height: auto;
      max-height: 480px;
      border-radius: 1rem;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .sub-all-body {
      max-width: 320px;
    }

    .en-all-body {
      background: white;
      padding: 2rem 3rem;
      border-radius: 1rem;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      max-width: 400px;
      width: 100%;
    }

    h1 {
      text-align: center;
      color: #007bff;
      margin-bottom: 2rem;
      font-size: 2.5rem;
    }

    label {
      display: block;
      font-size: 1.2rem;
      margin-bottom: 0.5rem;
      font-weight: 500;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 0.75rem;
      border: none;
      border-bottom: 2px solid #007bff;
      background: transparent;
      font-size: 1rem;
      margin-bottom: 1.5rem;
      transition: background 0.3s ease;
    }

    input[type="text"]:hover,
    input[type="password"]:hover {
      background-color: #f0f8ff;
    }

    .login-button {
      display: block;
      width: 100%;
      padding: 0.75rem;
      background: #007bff;
      color: white;
      border: none;
      font-size: 1.2rem;
      border-radius: 0.5rem;
      cursor: pointer;
      margin-top: 1rem;
      transition: background 0.3s ease;
    }

    .login-button:hover {
      background: #0056b3;
    }

    .forgot-section {
      text-align: center;
      margin-top: 1rem;
      font-size: 0.95rem;
    }

    .forgot-section label {
      display: block;
      margin: 0.3rem 0;
      cursor: pointer;
      color: #555;
    }

    .back-button {
      margin-top: 1.5rem;
      background: #f4f4f4;
      padding: 0.7rem;
      width: 100%;
      font-size: 1rem;
      border: 1px solid #ccc;
      border-radius: 0.5rem;
      cursor: pointer;
    }

    .back-button:hover {
      background-color: #e0e0e0;
    }

    .copy-right {
      background: #d3d3d3;
      padding: 1rem;
      text-align: center;
      font-size: 1rem;
      color: #555;
    }

    @media (max-width: 768px) {
      .all-body {
        flex-direction: column;
      }

      .sub-all-body img {
        max-height: 300px;
      }
    }
  </style>
</head>

<body>

  <header>
    <div><img src="logo.png" alt="Logo"> <strong>+Ticket Soft</strong></div>
    <nav>
      <a href="index.php" id="navHome">Home</a>
      <a href="about.php" id="navAbout">About Us</a>
      <a href="ourservice.php" id="navServices">Services</a>
      <a href="contact.php" id="navHelp">Help & Contact</a>
      <a href="login.php" id="navSignIn">Sign In</a>
      <a href="signup.php" id="navSignUp">Sign Up</a>
    </nav>
  </header>

  <div class="all-body">
    <div class="sub-all-body">
      <img src="login.jpg" alt="Login Visual" />
    </div>

    <form action="" method="post" class="en-all-body">
      <h1>Sign In</h1>

      <label for="e-mail">Email</label>
      <input type="text" id="e-mail" name="email" placeholder="Enter your email" required />

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required />

      <button type="submit" class="login-button">Login</button>

      <div class="forgot-section">
        <label>Forgot Password?</label>
        <label>Try other ways</label>
      </div>

      <button type="button" class="back-button" onclick="back()">⬅ Back</button>
    </form>
  </div>

  <div class="copy-right">
    &copy; 2025 Ticket Soft. All rights reserved.
  </div>

  <script>
    function back() {
      window.location.href = "index.php";
    }
  </script>

</body>
</html>

