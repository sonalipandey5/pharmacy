<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
    <script src="js/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/materialize.min.css">
    <script src="js/materialize.min.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/cart.css">
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
        <li><a href="men.php">Men</a></li>
        <li><a href="women.php">Women</a></li>
        <li><a href="infant.php">Infants</a></li>
        <li><a href="cart.php"><i class="material-icons left" style="margin-right: -5%;">shopping_cart</i></a></li>
        <li id="lout"><a>SignOut</a></li>
      </ul>
    </div>
  </nav>
  <div class="row" id="table_cart">
    <div class="col s12">
      <table class="striped centered responsive-table">
        <thead>
          <th>Name</th>
          <th>Quantity</th>
          <th>Remove</th>
          <th>Cost</th>
        </thead>
        <tbody id="details_cart">
        </tbody>
      </table>
    </div>
    <div class="col s2 offset-s10">
      <a class="waves-effect waves-light btn  indigo accent-2" id="sub_cart" style="margin-top: 5%;" href="pay.php"> Place Order </a>
    </div>
  </div>
<script type="text/javascript" src="js/cart.js"></script>
</body>
</html>