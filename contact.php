<!DOCTYPE html>
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
    <h1 style="background-color: white; color: black;">Contact My Clothes Store</h1>
    <p style="font-size: 25px; margin-bottom: 20px;">Get in touch with us:</p>
    <form>
      <label for="name">Name:</label><br>
      <input type="text" id="name" name="name" style="margin-bottom: 10px;"><br>
      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email" style="margin-bottom: 10px;"><br>
      <label for="message">Message:</label><br>
      <textarea id="message" name="message" rows="5" style="margin-bottom: 10px;"></textarea><br>
      <button><input style="border: none;" type="submit" value="Send Message"></button>
    </form> 
  </main>
  <footer style="position: absolute; bottom: 0px; width: 100%;">
    <p>My Clothes Store 2022</p>
  </footer>
</body>
</html>
