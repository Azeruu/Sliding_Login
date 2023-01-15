<?php
require 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reza's Store</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script  src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    
</head>
    
<body>
<div id="back">
  <div class="backRight"></div>
  <div class="backLeft"></div>
</div>

<div id="slideBox">
  <div class="topLayer">
<!--Bagian Kiri-->    
    <div class="left">
      <h1 align="center"> Top Up Murah dan Terpercaya Hanya Di <br>Reza's Store </h1>
      <div class="content">
        
        <h2 align="center">Sign Up</h2>
        <form method="post" onsubmit="return false;">
          <div class="form-group">
            <input type="text" placeholder="Username" />
            <input type="text" placeholder="Password" />
          </div>
          <div class="form-group"></div>
          <div class="form-group"></div>
          <div class="form-group"></div>
        </form>
        <button id="goLeft" class="off">Login</button>
        <button >Sign up</button>
      </div>
    </div>
<!--Bagian Kanan    -->
    <div class="right">
      <h1 align="center"> Top Up Murah dan Terpercaya Hanya Di <br>Reza's Store </h1>
      <div class="content">
        <h2 align="center">Login</h2>
        <form method="post" onsubmit="return false;" align="center">
          <div class="form-group">
            <input class="form-control" name="email" id="inputEmail" type="email" placeholder="Username" />                                    
            <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Password" />
          </div>
          <button id="goRight" class="off">Sign Up</button>
          <button name="login" id="login" type="submit">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>
  
</body>

</html>