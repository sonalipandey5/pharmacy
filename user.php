<?php
require_once 'connect.php';
if(isset($_SESSION['position'])){

  if($_SESSION['position']==1){
    header('Location: admin_p.php');
  }
  if($_SESSION['position']==3){
    header('Location: cashier.php');
  }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to the Pharmacy</title>
    <script src="js/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/materialize.min.css">
    <script src="js/materialize.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/user.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

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
      <div class="col s8">
        <div class="slider" style="margin-top: -0.1%;">
          <ul class="slides">
            <li>
              <img src="http://www.zafaxpharma.com/flash/9/data1/images/mainbanner1.jpg">
            </li>
            <li>
              <img src="https://www.uts.edu.au/sites/default/files/styles/full_width_small_1x/public/2017-08/GSH-Pharmacy-Banner.jpg?itok=F3cBtU0c">
            </li>
            <li>
              <img src="http://martjackstorage.blob.core.windows.net/in-resources/2c7f2299-9129-4131-839f-b80663cec2e2/Images/userimages/Aster-Banners-15-09-16/BabyandMother/BABY-ESSENTIALS.jpg">
            </li>
            <li>
              <img src="http://pimg.tradeindia.com/76719/2/template_photo_3.jpg">
            </li>
          </ul>
        </div>
      </div>
      <div class="col s3 ">
          <div class="card" style="margin-top: -1%;float: left;">
            <div class="card-image">
              <img src="http://cienciauanl.uanl.mx/wp-content/uploads/2015/04/farmacosluz.jpg" id="img3" style="height:100px;">
            </div>
            <div class="card-action">
              <a href="medicines.php">Shop for Medicines</a>
            </div>
          </div>
      </div>
      <div class="col s4">
          <div class="card" style="float: right; width: 300px;">
            <div class="card-image">
              <img src="https://d3r2zleywq7959.cloudfront.net/media/wysiwyg/hicarousel//2/0/2032-priceline-new_level_1_website_banners_toiletries_women_s_essentials_women_s_essentials.jpg" id="img4" style="height:100px;">
            </div>
            <div class="card-action">
              <a href="women.php">Shop for Women</a>
            </div>
          </div>
      </div>
      <div class="col s3">
          <div class="card">
            <div class="card-image">
              <img src="http://www.lasplash.com/uploads//f2b0/5577e2e1ad0ae-best-baby-products-for-infants-3.jpg" id="img5" style="height:100px;">
            </div>
            <div class="card-action">
              <a href="infant.php">Shop for Infants</a>
            </div>
          </div>
      </div>
    </div>
<script type="text/javascript" src="js/user.js"></script>
</body>
</html>