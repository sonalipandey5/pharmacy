<?php
  require_once 'connect.php';
  $_SESSION['previous_page']='buy_now';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Medicines</title>
    <script src="js/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/materialize.min.css">
    <script src="js/materialize.min.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/medicines.css">
</head>
<body>
  <nav>
    <div class="nav-wrapper">
      <img src="images\pharmacy_logo1.png" id="img1">
      <img src="images\pharmacy_logo2.png" id="img2">
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li id="container-1"><span class="icon"><i class="material-icons">search</i></span>
            <input type="search" id="search"/>
        </li>
        <li><a href="user.php">Home</a></li>
        <li><a href="medicines.php">Medicines</a></li>
        <li><a href="women.php">Women</a></li>
        <li><a href="infant.php">Infants</a></li>
        <li><a href="cart.php"><i class="material-icons left" style="margin-right: -5%;">shopping_cart</i></a></li>
        <li id="lout"><a>SignOut</a></li>
      </ul>
    </div>
  </nav>
   <div class="row">
      <div class="col s12">
        <div class="slider" style="margin-top: -0.1%;">
          <ul class="slides">
            <li>
              <img src="https://d3r2zleywq7959.cloudfront.net/media/wysiwyg/hicarousel//2/0/2032-priceline-new_level_1_website_banners_health_medicines.jpg">
            </li>
            <li>
              <img src="http://medicas.in/shop/asset/68945_Banner_2[1].jpg">
            </li>
          </ul>
        </div>
      </div>
    </div>
    <br>
    <h3><center>List of Products</center></h3><br>
    <div class="row">
      <div class="col s3" id="med1" style="margin-left: 10%;">
          <div class="card">
            <div class="card-image">
             <a href="med_product.php" id="med_image"></a>
            </div>
            <div class="card-action">
            <p id="price"></p>
            <a href="#" style="float: right;margin-top: -14%" id="medicine_cart">Buy Now</a>
            </div>
          </div>
      </div>
    </div>
<script type="text/javascript" src="js/medicines.js"></script>
</body>
</html>