<?php
  require_once 'connect.php';
  $_SESSION['previous_page']='buy_now';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Infant</title>
    <script src="js/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/materialize.min.css">
    <script src="js/materialize.min.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/men.css">
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
              <img src="http://www.pbcc.ca/en/image/product/care/banner_index_en.png">
            </li>
            <li>
              <img src="http://martjackstorage.blob.core.windows.net/in-resources/2c7f2299-9129-4131-839f-b80663cec2e2/Images/userimages/Aster-Banners-15-09-16/BabyandMother/BABY-ESSENTIALS.jpg">
            </li>
          </ul>
        </div>
      </div>
   </div>
    <br><br>
    <h3><center>List of Products</center></h3><br>
    <div class="row">
      <div class="col s3" id="inf1" style="margin-left: 10%;">
          <div class="card">
            <div class="card-image">
             <a href="infant_product.php" id="infant_img"></a>
            </div>
            <div class="card-action">
              <p id="price"></p>
              <a href="#" style="float: right;margin-top: -14%;" id="infant_cart"> Buy Now</a>
            </div>
          </div>
      </div>
    </div>
<script type="text/javascript" src="js/infant.js"></script>
</body>
</html>