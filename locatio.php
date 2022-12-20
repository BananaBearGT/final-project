<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<html>
<head>
  <title>Location My Clothes Store</title>
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
    <p style="font-size: 30px; margin-bottom: 20px;">Find Us</p>
    <iframe src="https://www.google.com/maps/d/embed?mid=18fRJasYimIzdhVQSDsVWOXKmyQw&ehbc=2E312F" width="910" height="500" style="border-radius: 5px; margin-bottom: 20px;"></iframe>
    <div>
        <h4>Contact Info</h4>
        <br>
        <p>All out offers go with 24/7 support.</p>
        <br>
        <p>If you need help write or call our contacts.</p>
        <br>
        The Company Name Inc. <br>
        9870 St Vincent Place,<br>
        Glasgow, DC 45 Fr 45.<br>
        Telephone: +1 800 603 6035<br>
        FAX: +1 800 889 9898<br>
        E-mail: <a href="#">mail@demolink.org</a>
      </div>
  </main>
  <footer style="position: absolute; bottom: 0px; width: 100%;">
    <p>My Clothes Store 2022</p>
  </footer>
</body>
</html>
