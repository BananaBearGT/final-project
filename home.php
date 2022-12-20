<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<html>
<head>
  <title>My Clothes Store</title>
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
    <h1 style="background-image: url(https://media.timeout.com/images/101714607/image.jpg); height: 500px;background-repeat: no-repeat;">Welcome to My Clothes Store</h1>
    <p style="text-align: center; font-weight: 100; font-size: large; margin-bottom: 20px;">We offer a wide range of high-quality clothes for men, women, and children.</p>
    <div class="featured-products">
      <div class="product">
        <a href=""><img src="https://lp2.hm.com/hmgoepprod?set=quality%5B79%5D%2Csource%5B%2F4d%2F52%2F4d529b0bf866d7f36cf00d9c9c348a627d6db077.jpg%5D%2Corigin%5Bdam%5D%2Ccategory%5B%5D%2Ctype%5BLOOKBOOK%5D%2Cres%5Bm%5D%2Chmver%5B1%5D&call=url[file:/product/main]" alt="Relaxed Fit Sweatshirt"></a>
        <h3>Relaxed Fit Sweatshirt </h3>
        <p class="price">$14.99</p>
      </div>
      <div class="product">
        <a href=""><img src="https://lp2.hm.com/hmgoepprod?set=quality%5B79%5D%2Csource%5B%2Fd7%2Fc9%2Fd7c90e49075baffb341d8eaf5c95660e7d58c2aa.jpg%5D%2Corigin%5Bdam%5D%2Ccategory%5B%5D%2Ctype%5BLOOKBOOK%5D%2Cres%5Bm%5D%2Chmver%5B1%5D&call=url[file:/product/main]" alt="Slim Fit Pants"></a>
        <h3>Slim Fit Pants</h3>
        <p class="price">$49.99</p>
      </div>
      <div class="product">
        <a href=""><img src="https://lp2.hm.com/hmgoepprod?set=quality%5B79%5D%2Csource%5B%2F90%2Fd1%2F90d144261afb8b574a926c3b8dd03b9e09fd4a80.jpg%5D%2Corigin%5Bdam%5D%2Ccategory%5B%5D%2Ctype%5BLOOKBOOK%5D%2Cres%5Bm%5D%2Chmver%5B1%5D&call=url[file:/product/main]" alt="Double-breasted Jacket"></a>
        <h3>Double-breasted Jacket</h3>
        <p class="price">$199.00</p>
      </div>
      <div class="product">
        <a href=""><img src="https://lp2.hm.com/hmgoepprod?set=quality%5B79%5D%2Csource%5B%2F55%2F9c%2F559ccf17b74213e4ad6613c446d93ea1c4d4adb5.jpg%5D%2Corigin%5Bdam%5D%2Ccategory%5B%5D%2Ctype%5BLOOKBOOK%5D%2Cres%5Bm%5D%2Chmver%5B1%5D&call=url[file:/product/main]" alt="Tie Belt Coat"></a>
        <h3>Tie Belt Coat</h3>
        <p class="price">$74.99</p>
      </div>
      <div class="product">
        <a href=""><img src="https://lp2.hm.com/hmgoepprod?set=quality%5B79%5D%2Csource%5B%2Fca%2Fb6%2Fcab627a16ccc5daa332e69f69a011a5a9aa6c147.jpg%5D%2Corigin%5Bdam%5D%2Ccategory%5B%5D%2Ctype%5BLOOKBOOK%5D%2Cres%5Bm%5D%2Chmver%5B1%5D&call=url[file:/product/main]" alt="Loose Fit Jeans"></a>
        <h3>Loose Fit Jeans</h3>
        <p class="price">$29.99</p>
      </div>
      <div class="product">
        <a href=""><img src="https://lp2.hm.com/hmgoepprod?set=quality%5B79%5D%2Csource%5B%2F97%2Fbf%2F97bfa65aed7d850eca6cb3447fd42b1971f99633.jpg%5D%2Corigin%5Bdam%5D%2Ccategory%5B%5D%2Ctype%5BLOOKBOOK%5D%2Cres%5Bm%5D%2Chmver%5B1%5D&call=url[file:/product/main]" alt="Fine-knit Cotton Sweater"></a>
        <h3>Fine-knit Cotton Sweater</h3>
        <p class="price">$12.99</p>
      </div>
      <div class="product">
        <a href=""><img src="https://lp2.hm.com/hmgoepprod?set=quality%5B79%5D%2Csource%5B%2F5e%2Ff2%2F5ef2608f2fc1d83fbc6e414b49c2d7fd49d06f3a.jpg%5D%2Corigin%5Bdam%5D%2Ccategory%5B%5D%2Ctype%5BDESCRIPTIVESTILLLIFE%5D%2Cres%5Bm%5D%2Chmver%5B2%5D&call=url[file:/product/main]" alt="2-piece Bodysuit Set"></a>
        <h3>2-piece Bodysuit Set</h3>
        <p class="price">$14.99</p>
      </div>
      <div class="product">
        <a href=""><img src="https://lp2.hm.com/hmgoepprod?set=quality%5B79%5D%2Csource%5B%2F0b%2F67%2F0b67fe50c7f90f9a77f517ae9ce3972362cb09b9.jpg%5D%2Corigin%5Bdam%5D%2Ccategory%5B%5D%2Ctype%5BLOOKBOOK%5D%2Cres%5Bm%5D%2Chmver%5B1%5D&call=url[file:/product/main]" alt="Tennis Skirt"></a>
        <h3>Tennis Skirt</h3>
        <p class="price">$24.99</p>
      </div>
      <div class="product">
        <a href=""><img src="https://lp2.hm.com/hmgoepprod?set=quality%5B79%5D%2Csource%5B%2F70%2F19%2F70192170e3d59342bdbae2b50e5930b5e715d841.jpg%5D%2Corigin%5Bdam%5D%2Ccategory%5B%5D%2Ctype%5BLOOKBOOK%5D%2Cres%5Bm%5D%2Chmver%5B1%5D&call=url[file:/product/main]" alt="Running Pants"></a>
        <h3>Running Pants</h3>
        <p class="price">$34.99</p>
      </div>
    </div>
  </main>
  <footer>
    <p>My Clothes Store 2022</p>
  </footer>
</body>
</html>
