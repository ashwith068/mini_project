<!DOCTYPE html>
<html>
<head>
  <title>Medical Registration Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }

    .form-group input {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-group select {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-group input[type="submit"] {
      background-color: #4caf50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      border-radius: 4px;
      font-size: 16px;
    }

    .form-group input[type="submit"]:hover {
      background-color: #45a049;
    }

    .login-section {
      text-align: center;
      margin-top: 20px;
    }

    .login-section p {
      margin: 0;
    }

    .caduceus {
      display: inline-block;
      width: 40px;
      height: 40px;
      position: absolute;
      top: 50%;
      left: -50px;
      transform: translateY(-50%);
      background-image: url("https://m.media-amazon.com/images/I/410Rvb5mM%2BL._SR600%2C315_PIWhiteStrip%2CBottomLeft%2C0%2C35_SCLZZZZZZZ_FMpng_BG255%2C255%2C255.jpg");
      background-repeat: no-repeat;
      background-size: contain;
      opacity: 0.7;
    }

    .login-section a {
      color: #4caf50;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container">
<h1><span class="caduceus"></span>Medical Registration</h1>
    <form action="docreg.jsp" method="post">
      <div class="form-group">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" required>
      </div>
      <div class="form-group">
        <label for="specialization">Specialization:</label>
        <input type="text" id="specialization" name="specialization" required>
      </div>
      <div class="form-group">
        <label for="license">License Number:</label>
        <input type="text" id="license" name="license" required>
      </div>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Register">
      </div>
    </form>
    <div class="login-section">
      <p>Already have an account? <a href="doctor-login.html">Login</a></p>
    </div>
  </div>
</body>
</html>
