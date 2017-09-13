<?php
require_once 'connect.php';
if(isset($_SESSION['position'])){

  if($_SESSION['position']==1){
    header('Location: admin_p.php');
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
              <img src="http://www.glossyfinds.com/wp-content/uploads/2014/10/category-sale.jpg">
            </li>
            <li>
              <img src="https://d3r2zleywq7959.cloudfront.net/media/wysiwyg/hicarousel//2/0/2032-priceline-new_level_1_website_banners_toiletries_women_s_essentials_women_s_essentials.jpg">
            </li>
            <li>
              <img src="https://d3r2zleywq7959.cloudfront.net/media/wysiwyg/hicarousel//2/0/2032-priceline-new_level_1_website_banners_mens_fa_men_s_essentials_gift_sets.jpg">
            </li>
            <li>
              <img src="https://www.priceline.com.au/media/wysiwyg/hicarousel//2/0/2032-priceline-new_level_1_website_banners_toiletries_bathroom_basics.jpg">
            </li>
            <li>
              <img src="https://creativechump.files.wordpress.com/2013/03/3963-bdf-nivea-stress-protect-web-banner-transparant-bg.jpg">
            </li>
            <li>
              <img src="https://img.honest.com/uploads/managed_assets/file/13507/WidgetMember-84-widget_member/slide_fullscreen/image-093c326d-4d26-4c11-955a-35130191cbd9.jpg">
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col s3 m3" id="card">
          <div class="card">
            <div class="card-image">
              <img src="images\11.jpg" id="img3" style="height:150px;">
            </div>
            <div class="card-action">
              <a href="medicines.php">Shop for Medicines</a>
            </div>
          </div>
      </div>
      <div class="col s3 m3">
          <div class="card">
            <div class="card-image">
              <img src="images\9.jpg" id="img4" style="height:150px;">
            </div>
            <div class="card-action">
              <a href="men.php">Shop for Men</a>
            </div>
          </div>
      </div>
      <div class="col s3 m3">
          <div class="card">
            <div class="card-image">
              <img src="images\10.jpg" id="img5" style="height:150px;">
            </div>
            <div class="card-action">
              <a href="women.php">Shop for Women</a>
            </div>
          </div>
      </div>
      <div class="col s3 m3">
          <div class="card">
            <div class="card-image">
              <img src="images\8.jpg" id="img6" style="height:150px;">
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