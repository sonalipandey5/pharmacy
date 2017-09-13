<!DOCTYPE html>
<html>
<head>
    <title>Women</title>
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
        <li><a href="medicines.php">Medicines</a></li>
        <li><a href="men.php">Men</a></li>
        <li><a href="women.php">Women</a></li>
        <li><a href="infant.php">Infants</a></li>
        <li><a href="badges.html"><i class="material-icons left" style="margin-right: -5%;">shopping_cart</i></a></li>
        <li id="lout"><a>SignOut</a></li>
      </ul>
    </div>
  </nav>
   <div class="row">
      <div class="col s12">
        <div class="slider">
          <ul class="slides">
            <li>
              <img src="https://static.independent.co.uk/s3fs-public/styles/story_medium/public/thumbnails/image/2016/02/23/16/loreal.jpg">
            </li>
            <li>
              <img src="http://www.deobazaar.com/admin/product_image/engage-value-pack-of-7-women-deodorants.jpg">
            </li>
            <li>
              <img src="http://www.makeupandbeauty.in/wp-content/uploads/2015/03/Nivea-Aqua-Effect-Purifying-Face-Wash1.jpg">
            </li>
          </ul>
        </div>
      </div>
    </div>
    <br><br>
    <h3><center>List of Products</center></h3><br><br>
    <div class="row">
      <div class="col s4 m4" id="card">
          <div class="card">
            <div class="card-image">
              <img src="https://www.diabeticpick.com/blog/wp-content/uploads/2015/09/lakme-face-wash-1.jpg" style="height:200px;">
            </div>
            <div class="card-action">
              <a href="#">Shop for Medicines</a>
            </div>
          </div>
      </div>
      <div class="col s4 m4">
          <div class="card">
            <div class="card-image">
              <img src="http://mac.h-cdn.co/assets/15/31/480x720/mcx-cleansing-wipes-02.jpg" style="height:200px;">
            </div>
            <div class="card-action">
              <a href="#">Shop for Men</a>
            </div>
          </div>
      </div>
      <div class="col s4 m4">
          <div class="card">
            <div class="card-image">
              <img src="https://images-na.ssl-images-amazon.com/images/I/61hAEZGOGRL._SY355_.jpg" style="height:200px;">
            </div>
            <div class="card-action">
              <a href="#">Shop for Kids/Infants</a>
            </div>
          </div>
      </div>
    </div>
<script type="text/javascript" src="js/men.js"></script>
</body>
</html>