<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<html>
<head>
  <title>About My Clothes Store</title>
  <link rel="stylesheet" type="text/css" href="style.css">
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
    <h1 style="background-image: url(https://hmgroup.com/wp-content/uploads/2020/03/cq5dam.web_.2400.720.5.jpeg); color: black; height: 400px; font-size: 60px"><br><br><span style="opacity: 0.7;">About My Clothes Store</span></h1>
    <br>
    <p style="font-size: 25px; text-align: center;">At My Clothes Store, we are passionate about providing high-quality clothes for men, women, and children. Our goal is to help our customers look and feel their best, no matter the occasion. We offer a wide range of styles, from casual to formal, at affordable prices.</p>
    <h2 style="background-color: #f8f8f8";>Our History</h2>
    <p style="font-size: 25px; text-align: center;">My Clothes Store was founded in 2022 by a team of fashion industry professionals. We have since grown to become a leading online destination for stylish, affordable clothing. Our team is dedicated to constantly seeking out the latest trends and bringing them to our customers.</p>
    <h2 style="background-color: #f8f8f8">Our Philosophy</h2>
    <p style="font-size: 25px; text-align: center;">At My Clothes Store, we believe that fashion should be accessible to everyone. We strive to provide high-quality, stylish clothing at affordable prices. We also believe in the importance of sustainability and strive to minimize our environmental impact by using eco-friendly materials and practices whenever possible.</p>
    <br>
  </main>
  <footer style="position: absolute; bottom: 0px; width: 100%;">
    <p>My Clothes Store 2022</p>
  </footer>
</body>
</html>
