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
  <style type="text/css">
    * {box-sizing:border-box}

    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
    }

    .mySlides {
      display: none;
    }

    .prev, .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      margin-top: -22px;
      padding: 16px;
      color: white;
      font-weight: bold;
      font-size: 18px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
    }

    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    .prev:hover, .next:hover {
      background-color: rgba(0,0,0,0.8);
    }

    .text {
      font-weight: bold;
      color: white;
      opacity: 0.90;
      font-size: 40px;
      padding: 8px 12px;
      position: absolute;
      bottom: 300px;
      width: 100%;
      text-align: center;
    }

    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    .dot {
      cursor: pointer;
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active, .dot:hover {
      background-color: #717171;
    }

    .fade {
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @keyframes fade {
      from {opacity: .4}
      to {opacity: 1}
    }
  </style>
  <script type="text/javascript"> 
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
    }
  </script>
</head>
<body onload="currentSlide(1)">
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
      <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="https://media.timeout.com/images/101714607/image.jpg" style="width:100%">
          <div class="text" style="">Welcome to My Clothes Store!</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="https://media.istockphoto.com/id/1222457390/photo/small-business-owener-stock-photo.jpg?s=612x612&w=0&k=20&c=aoiYnGS1HIPf7ZGyn68-NuYu-d_JmPfz2UYC2vllDPs=" style="width:100%">
          <div class="text">We glad to see you!</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="https://i.pinimg.com/originals/99/4e/1b/994e1b7fae8f8f69decc1745679d144b.jpg" style="width:100%">
          <div class="text">Hope you`ll enjoy the shoping</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>

      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
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
