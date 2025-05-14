<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>+Ticket Soft</title>
  <link rel="icon" href="logo.png">
  <style>

* {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      
    }

    body {
      background: #eef2f5;
      color: #333;
      height: 100vh;
      font-family: sans-serif;
      overflow-y: auto;
      overflow-x: hidden;

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
    header nav a:hover {
       text-decoration: none; 
      }

     .form-control{
        margin-bottom:20px;
     }
     .register-form{
        margin-top:30px;
     }
     .submit-btn{
    padding:5px 10px;
    background-color: #0d3256;
    color: #fff; 
    border-radius: 10px;
   margin-left: 10rem;
   margin-top: 2rem;
   height: 5rem;
   width: 8rem;
   font-size: 2rem;
 }
 .container{
  background-color: #1e3c72;
  height: 18rem;
  width: 20rem;
  border: none;
  border-radius: 10%;
  margin-left: 40rem;
  margin-top: -22rem;
 }
 h2{
  margin-left: 7rem;
  color: black;
 }
 label{
  font-size: 1.5rem;
  color: black;
 }
 input{
  height: 2rem;
  width: 13rem;
 }
 input:hover{
  background-color: #f4f4f4;
  color: black;
  font-size: 1.5rem;
 }
 .main{
  height: 40rem;
  width: 100%;
  background-color:#eef2f5;
 }
 .img{
  height: 30rem;
  width: 30rem;
  margin-left: 10rem;
  margin-top: 1rem;
  border: none;
  border-radius: 15px;
 }
 .end{
  height: 3rem;
  width: 200rem;
  background-color: #eef2f5;
  margin-top: 5rem;
  padding: 2rem 2rem 3rem 2rem;
 }
  </style>
</head>
<body>

  <header>
    <div><img src="logo.png" alt="Logo" class="logo"> <strong>+Ticket Soft</strong></div>
    <nav>
      <a href="index.php" id="navHome">Home</a>
      <a href="about.php" id="navAbout">About Us</a>
      <a href="ourservice.php" id="navServices">Services</a>
      <a href="#" id="navHelp">Help&contact</a>
      <a href="login.php" id="navSignIn">Sign In</a>
      <a href="signup.php" id="navSignUp">Sign Up</a>
    </nav>
  </header>

  <div class="main">
    <img src="animate.jpg" class="img">
  <!-- Main Content Area -->
  <div class="container">
    <!-- Left Main Content -->
    <div class="main-content">
      <h2>Login</h2>
      <!-- Register Form -->
      <div class="register-form">
          <form  method="post">
            <div class="form-control">
                <label>Email</label>
                <input type="text" name="email" />
            </div> 
            <div class="form-control">
                <label>Password</label>
                <input type="password" name="password" />
            </div> 
            <div class="form-control">
                <button class="submit-btn" type="submit" name="submit">Login</button>
            </div>              
          </form>    
          <div class="end">&copy;Copy Right || +Ticket Soft</div>
        </div>

</body>
</html>
