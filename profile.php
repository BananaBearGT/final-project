<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<html>
<head>
  <title>Contact My Clothes Store</title>
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
    <h1 style="background-color: white; color: black;">Your profile</h1>
    <h3 style="margin-bottom: 20px;">Hi <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h3>
    <a href="./contact.php">
        <img src="https://cdn-icons-png.flaticon.com/512/6570/6570260.png" alt="" width="25px" height="25px" >Contact Us
    </a>
    <p style="margin-top: 10px;"><a href="#">
        <img src="https://cdn-icons-png.flaticon.com/512/14/14815.png" alt="" width="20px" height="20px">
        Favorites
    </a></p>
    <h2 style="margin-bottom: 20px;">My orders:</h2>
    <div class="featured-products" style="width: 400px; margin-bottom: 50px;">
      <?php 
      require_once "config.php";

      $sql = "SELECT * FROM cart WHERE username = ?";
      if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        $param_username = $_SESSION["username"];
        
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
            if (mysqli_stmt_num_rows($stmt) > 0) {
              mysqli_stmt_bind_result($stmt, $id, $username, $good_id);
              while (mysqli_stmt_fetch($stmt)) {
                $sql2 = "SELECT * FROM goods WHERE id = ?";
                if($stmt2 = mysqli_prepare($link, $sql2)){
                  mysqli_stmt_bind_param($stmt2, "s", $param_id);
                  $param_id = $good_id;
                  if(mysqli_stmt_execute($stmt2)){
                      mysqli_stmt_store_result($stmt2);
                      if (mysqli_stmt_num_rows($stmt2) > 0) {
                        mysqli_stmt_bind_result($stmt2, $id, $name, $cost, $img);
                        while (mysqli_stmt_fetch($stmt2)) {
                          echo '<div class="product"><a href=""><img src="'.$img.'" alt="'.$name.'"></a><h3 style="font-size: small;">'.$name.'</h3><p class="price" style="margin-bottom: 5px; font-size: small;">'.$cost.'</p></div>';
                        }
                      }
                    }
                  }
              }
            }
        }
      }
      ?>
    </div>
    <a href="logout.php">
        <img src="https://cdn-icons-png.flaticon.com/512/992/992680.png" alt="" width="15px" height="15px">
        Sign out
    </a>
  </main>
  <footer style="position: absolute; bottom: 0px; width: 100%;">
    <p>My Clothes Store 2022</p>
  </footer>
</body>
</html>
