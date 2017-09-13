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
              <img src="http://crazyadventuresinparenting.com/wp-content/uploads/2014/10/Gifttable-first_touch-e1414018337181.jpg">
            </li>
            <li>
              <img src="https://easyfit.in/images/babyProduct-mobile.jpg">
            </li>
            <li>
              <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img16/Baby/35pcBabyProductsBunkLP/1020218_Baby-winter-store_750x375.jpg">
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
              <img src="https://i5.walmartimages.com/asr/57d27f8c-5113-47e2-895a-3ab859df2156_1.875fedd64e91f0dc86348880fff26427.jpeg" style="height:200px;">
            </div>
            <div class="card-action">
              <a href="#">Shop for Medicines</a>
            </div>
          </div>
      </div>
      <div class="col s4 m4">
          <div class="card">
            <div class="card-image">
              <img src="https://www.johnsonsbaby.in/sites/jbaby_in/files/styles/product_image/public/product-images/johnsons_baby_care_collection_with_organic_cotton_bib_3_gift_items_pink.png?itok=RjE7Znbf" style="height:200px;">
            </div>
            <div class="card-action">
              <a href="#">Shop for Men</a>
            </div>
          </div>
      </div>
      <div class="col s4 m4">
          <div class="card">
            <div class="card-image">
              <img src="http://bpc.h-cdn.co/assets/16/03/480x480/comotomo-green-baby-bottle.jpg" style="height:200px;">
            </div>
            <div class="card-action">
              <a href="#">Shop for Infants</a>
            </div>
          </div>
      </div>
    </div>
<script type="text/javascript" src="js/men.js"></script>
</body>
</html>