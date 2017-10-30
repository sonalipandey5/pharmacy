<!DOCTYPE html>
<html>
<head>
    <title>Women Products</title>
    <script src="js/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/materialize.min.css">
    <script src="js/materialize.min.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/product.css">
</head>
<body>
<div class="row">
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
</div>
    <div class="row">
        <div class="col s4" id="image_area3">

        </div>
        <div class="col s8">
            <table>
                <thead>
                    <tr id="name7"></tr>
                    <tr id="cost7"></tr>
                    <tr id="expiry7"></tr>
                    <tr id="des7"></tr>
                    <tr id="quant7"></tr>
                </thead>
            </table>
        </div>
        <div class="col s4 offset-s8">
            <a class="waves-effect waves-light btn orange darken-1 " id="wcart" style="margin-top: 5%;">Add to Cart</a>
        </div>
    </div>
<script type="text/javascript" src="js/product.js"></script>
</body>
</html>