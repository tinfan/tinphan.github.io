<?php
 include_once "../../dbconnect.php";
 include_once "../../funcitions.php";
 $categories = showAllCategories();
 $products = showAllProducts();
 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="public/css/login.css" />
    <!-- font roboto -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    
    <!-- form signup -->
    <div class="signup">
        <div id="header">
            <a href="" class="logo">
                <img src="public/assets/logopiz.png" width="400px" height="200px" alt="">
            </a>
      <div class="signup__container">
        <h1>Đăng Ký</h1>
        <form action="">
          <h5>Email</h5>
          <input type="text" class="input-signup-username" />
          <h5>Password</h5>
          <input type="password" class="input-signup-password" />
          <button type="submit" class="signup__signInButton">Đăng Ký</button>
        </form>
        <a href="public/login.php" class="signup__registerButton"
          ></a
        >
      </div>
    </div>
  </body>
  <script src="public/js/signup.js"></script>
</html>