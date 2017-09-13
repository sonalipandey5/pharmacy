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
              <img src="http://netdoctor.cdnds.net/15/43/1600x800/landscape-1445716807-g-medicines-affect-sex-506115031.jpg">
            </li>
            <li>
              <img src="http://www.ox.ac.uk/sites/files/oxford/styles/ow_medium_feature/public/field/field_image_main/shutterstock_168702206.jpg?itok=HxUopj2N">
            </li>
            <li>
              <img src="https://greatist.com/sites/default/files/styles/article_main/public/Aromatherapy_732.jpg?itok=UUw0q5dZ">
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
              <img src="https://res.cloudinary.com/du8msdgbj/image/private/s--bR2DbA7Y--/a_ignore,c_fit,h_380,q_60,w_380/v1/otc/otc113472.jpg" style="height:200px;">
            </div>
            <div class="card-action">
              <a href="medicines.php">Shop for Medicines</a>
            </div>
          </div>
      </div>
      <div class="col s4 m4">
          <div class="card">
            <div class="card-image">
              <img src="https://static.chemistwarehouse.com.au/ams/media/pi/3528/3DF_800.jpg" style="height:200px;">
            </div>
            <div class="card-action">
              <a href="men.php">Shop for Men</a>
            </div>
          </div>
      </div>
      <div class="col s4 m4">
          <div class="card">
            <div class="card-image">
              <img src="http://onetouchmedicine.com/console/files/product/755d381377a4e4e52d663bcff8a8655b.jpeg" style="height:200px;">
            </div>
            <div class="card-action">
              <a href="#">Shop for Kids/Infants</a>
            </div>
          </div>
      </div>
    </div>
<script type="text/javascript" src="js/medicines.js"></script>
</body>
</html>