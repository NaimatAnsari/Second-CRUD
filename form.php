<?php
include 'db.php';

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "INSERT INTO users (id, email, password) VALUES (NULL , '$email' , '$password')";

  $result = mysqli_query($conn , $sql);

  if ($result) {
    header('Location: index.php?sg=New Record Created Successfully');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f2f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .login-container {
      background: #fff;
      padding: 2rem;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      width: 300px;
    }
    .login-container h2 {
      text-align: center;
      margin-bottom: 1rem;
      color: #333;
    }
    .login-container form {
      display: flex;
      flex-direction: column;
    }
    .form-group {
      margin-bottom: 1rem;
    }
    .form-group label {
      font-size: 0.9rem;
      color: #555;
    }
    .form-group input {
      width: 90%;
      padding: 0.8rem;
      margin-top: 0.5rem;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 1rem;
    }
    .form-group input:focus {
      border-color: #007bff;
      outline: none;
    }
    .login-container button {
      background-color: #007bff;
      color: #fff;
      padding: 0.8rem;
      font-size: 1rem;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .login-container button:hover {
      background-color: #0056b3;
    }
    .login-container .register-link {
      text-align: center;
      margin-top: 1rem;
      font-size: 0.9rem;
    }
    .login-container .register-link a {
      color: #007bff;
      text-decoration: none;
    }
    .login-container .register-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form action="" method="post">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password" required>
      </div>
      <button type="submit" name="submit">Login</button>
    </form>
  </div>
</body>
</html>
