<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login | Signup</title>
  <link rel="stylesheet" href="styles.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
  <a href="../index.php" class="back-home" tabindex="0">&#8592; Back to Home</a>
  <div class="container" id="container">
    <!-- Sign Up Form -->
    <div class="form-container sign-up-container">
      <form action="signup.php" method="POST" autocomplete="off">
        <h1>Create Account</h1>
        <input type="email" placeholder="Email" name="email" required />
        <input type="password" placeholder="Password" name="password" required minlength="6" />
        <button type="submit">Sign Up</button>
      </form>
    </div>

    <!-- Sign In Form -->
    <div class="form-container sign-in-container">
      <form action="login.php" method="POST" autocomplete="off">
        <h1>Sign in</h1>
        <input type="email" placeholder="Email" name="email" required />
        <input type="password" placeholder="Password" name="password" required minlength="6" />
        <button type="submit">Sign In</button>
      </form>
    </div>

    <!-- Overlay Panel -->
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>Welcome Back!</h1>
          <p>To keep enjoying our burgers, please login here.</p>
          <button class="ghost" id="signIn" type="button">Sign In</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1>Hello, Foodie!</h1>
          <p>Enter your details and start your burger journey with us!</p>
          <button class="ghost" id="signUp" type="button">Sign Up</button>
        </div>
      </div>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>
