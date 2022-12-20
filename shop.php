<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}    
  require_once "config.php";
if(isset($_POST['1'])) {
  $sql = "INSERT INTO cart (good_id, username) VALUES (1, ?)";
  if($stmt = mysqli_prepare($link, $sql)){
      mysqli_stmt_bind_param($stmt, "s", $param_username);
      $param_username=$_SESSION["username"];
      
      if(mysqli_stmt_execute($stmt)){
          header("location: shop.php");
      } else{
          echo "Oops! Something went wrong. Please try again later.";
      }

      mysqli_stmt_close($stmt);
  }   
}
if(isset($_POST['2'])) {
  $sql = "INSERT INTO cart (good_id, username) VALUES (2, ?)";
  if($stmt = mysqli_prepare($link, $sql)){
      mysqli_stmt_bind_param($stmt, "s", $param_username);
      $param_username=$_SESSION["username"];
      
      if(mysqli_stmt_execute($stmt)){
          header("location: shop.php");
      } else{
          echo "Oops! Something went wrong. Please try again later.";
      }

      mysqli_stmt_close($stmt);
  }   
}
if(isset($_POST['3'])) {
  $sql = "INSERT INTO cart (good_id, username) VALUES (3, ?)";
  if($stmt = mysqli_prepare($link, $sql)){
      mysqli_stmt_bind_param($stmt, "s", $param_username);
      $param_username=$_SESSION["username"];
      
      if(mysqli_stmt_execute($stmt)){
          header("location: shop.php");
      } else{
          echo "Oops! Something went wrong. Please try again later.";
      }

      mysqli_stmt_close($stmt);
  }   
}
mysqli_close($link);   
?>

<html>
<head>
  <title>Shop My Clothes Store</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">

    input[type="submit"] {
        border: 1px solid #0A3D5B;
        background-color: transparent;
        color: #0A3D5B;
        padding: 20px 60px;
        font-size: 18px;
        font-weight: 500;
        display: inline-block;
        margin-right: 15px;
        margin-bottom: 30px;
        text-transform: capitalize;
    }

    input.anim {
      background-image: linear-gradient(0, #0A3D5B, #0A3D5B);
      background-size: 0;
      transition: .8s;
      background-repeat: no-repeat;
      transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
    }

    input.anim:hover {
        background-size: 100%;
        color: #fff;
    }
  </style>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="./home.php">Home</a></li>
        <li><a href="./about.php">About</a></li>
        <li><a href="./shop.php">Shop</a></li>
        <li><a href="./contact.php">Contact</a></li>
        <li><a href="./locatio.php">Location</a></li>
        <li><a href="./profile.php">Profile</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <h1 style="background-color: white; color: black;">Shop My Clothes Store</h1>
    <p style="text-align: center; font-weight: 100; font-size: large; margin-bottom: 20px;" >Browse our selection of high-quality clothes for men, women, and children:</p>
    <div class="featured-products">
      <div class="product">
        <a href=""><img src="https://lp2.hm.com/hmgoepprod?set=quality%5B79%5D%2Csource%5B%2F12%2Fd5%2F12d5aff3fd3543c41c1b91756a5e2c76352d56bd.jpg%5D%2Corigin%5Bdam%5D%2Ccategory%5B%5D%2Ctype%5BLOOKBOOK%5D%2Cres%5Bm%5D%2Chmver%5B1%5D&call=url[file:/product/main]" alt="Oversized Fit Cotton Hoodie"></a>
        <h3>Oversized Fit Cotton Hoodie</h3>
        <p class="price" style="margin-bottom: 5px;">$39.99</p>
        <form method="post">
          <input class="anim" type="submit" name="1"
                value="Add to Cart"/>
        </form>
      </div>
      <div class="product">
        <img src="https://lp2.hm.com/hmgoepprod?set=quality%5B79%5D%2Csource%5B%2F2e%2Fb3%2F2eb366239d94be508b7a8bb3ae0c1d707fb8dbce.jpg%5D%2Corigin%5Bdam%5D%2Ccategory%5B%5D%2Ctype%5BLOOKBOOK%5D%2Cres%5Bm%5D%2Chmver%5B1%5D&call=url[file:/product/main]" alt="Oversized Fit Cardigan">
        <h3>Oversized Fit Cardigan</h3>
        <p class="price" style="margin-bottom: 5px;">$49.99</p>
        <form method="post">
          <input class="anim" type="submit" name="2"
                value="Add to Cart"/>
        </form>
      </div>
      <div class="product">
        <img src="https://lp2.hm.com/hmgoepprod?set=quality%5B79%5D%2Csource%5B%2F48%2F98%2F48986360cbe88ab507c151210daceae1efc331a2.jpg%5D%2Corigin%5Bdam%5D%2Ccategory%5B%5D%2Ctype%5BLOOKBOOK%5D%2Cres%5Bm%5D%2Chmver%5B1%5D&call=url[file:/product/main]" alt="Double-breasted blazer dress">
        <h3>Double-breasted blazer dress</h3>
        <p class="price" style="margin-bottom: 5px;">$39.99</p>
        <form method="post">
          <input class="anim" type="submit" name="3"
                value="Add to Cart"/>
        </form>
      </div>
    </div>
  </main>
  <footer>
    <p>My Clothes Store 2022</p>
  </footer>
</body>
</html>
