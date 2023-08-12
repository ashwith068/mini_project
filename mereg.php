<!DOCTYPE html>
<html>
<head>
  <title>Medical Agency Registration</title>
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
      margin-bottom: 30px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group input[type="password"],
    .form-group textarea {
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
      width: 100%;
    }

    .form-group input[type="submit"]:hover {
      background-color: #45a049;
    }

    .form-group .login-link {
      text-align: center;
      margin-top: 10px;
    }

    .form-group .login-link a {
      color: #007bff;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Add Medicines</h1>
    <form action="mereg.jsp" method="post">
      <div class="form-group">
        <label for="name">Medicine Name:</label>
        <input type="text" id="name" name="name" required>
      
       <div class="form-group">
        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" required></textarea>
      </div>

      <div class="form-group">
        <label for="price">Price (M R P):</label>
        <input type="text" id="price" name="price" required>
      </div>
      <div class="form-group">
        <label for="image">Image:</label>
        <input type="text" id="image" name="image" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Register">
      </div>
    </form>
  </div>
</body>
</html>
