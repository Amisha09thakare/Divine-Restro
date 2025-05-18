<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Restro Divine - Login / Sign Up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: white;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .auth-container {
      max-width: 400px;
      margin: 50px auto;
      background: #f8f9fa;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 0px 20px rgba(0,0,0,0.1);
    }

    .form-title {
      text-align: center;
      color: maroon;
      margin-bottom: 20px;
    }

    .form-control:focus {
      box-shadow: none;
      border-color: maroon;
    }

    .btn-maroon {
      background-color: maroon;
      color: white;
    }

    .btn-maroon:hover {
      background-color:hsl(0, 3.00%, 6.50%);
    }

    .switch-link {
      text-align: center;
      margin-top: 10px;
    }

    .switch-link a {
      color: black;
      text-decoration: underline;
    }

    .partnership {
      background: maroon;
      color: white;
      padding: 30px;
      text-align: center;
      margin-top: 50px;
      border-radius: 10px;
    }

    .partnership h2 {
      margin-bottom: 20px;
    }

    .partnership .btn {
      background: white;
      color: maroon;
      border: 2px solid white;
    }

    .partnership .btn:hover {
      background: black;
      color: white;
      border-color: white;
    }
  </style>
</head>
<?php
include "include/nav.php";
?>
<body>

  <div class="auth-container" id="login-form">
    <h3 class="form-title">Login to Restro Divine</h3>
    <form>
      <div class="mb-3">
        <label for="loginEmail" class="form-label">Email address</label>
        <input type="email" class="form-control" id="loginEmail" required>
      </div>
      <div class="mb-3">
        <label for="loginPassword" class="form-label">Password</label>
        <input type="password" class="form-control" id="loginPassword" required>
      </div>
      <button type="submit" class="btn btn-maroon w-100">Login</button>
      <div class="switch-link mt-3">
        <span>Don't have an account? <a href="#" onclick="toggleForm()">Sign Up</a></span>
      </div>
    </form>
  </div>

  <div class="auth-container d-none" id="signup-form">
    <h3 class="form-title">Create Account - Restro Divine</h3>
    <form>
      <div class="mb-3">
        <label for="signupName" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="signupName" required>
      </div>
      <div class="mb-3">
        <label for="signupEmail" class="form-label">Email address</label>
        <input type="email" class="form-control" id="signupEmail" required>
      </div>
      <div class="mb-3">
        <label for="signupPhone" class="form-label">Phone Number</label>
        <input type="tel" class="form-control" id="signupPhone" required>
      </div>
      <div class="mb-3">
        <label for="signupPassword" class="form-label">Password</label>
        <input type="password" class="form-control" id="signupPassword" required>
      </div>
      <button type="submit" class="btn btn-maroon w-100">Sign Up</button>
      <div class="switch-link mt-3">
        <span>Already have an account? <a href="#" onclick="toggleForm()">Login</a></span>
      </div>
    </form>
  </div>

  <div class="container partnership mt-5">
    <h2>Become a Member of Restro Divine</h2>
    <p>Sign up today and enjoy exclusive member discounts and special offers at our partner restaurants!</p>
    <a href="#signup-form" onclick="scrollToSignup()" class="btn btn-lg">Join Now</a>
  </div>
  <br>
  <?php
include "include/footer.php";
?>

  <script>
    function toggleForm() {
      const loginForm = document.getElementById('login-form');
      const signupForm = document.getElementById('signup-form');
      loginForm.classList.toggle('d-none');
      signupForm.classList.toggle('d-none');
    }

    function scrollToSignup() {
      const signupForm = document.getElementById('signup-form');
      if (signupForm.classList.contains('d-none')) toggleForm();
      signupForm.scrollIntoView({ behavior: 'smooth' });
    }
  </script>

</body>
</html>
