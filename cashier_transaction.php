<?php
require_once 'connect.php';
if(isset($_SESSION['position'])){

  if($_SESSION['position']==2){
    header('Location: user.php');
  }
  if($_SESSION['position']==1){
    header('Location: admin_p.php');
  }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cashier Page</title>
    <script src="js/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/materialize.min.css">
    <script src="js/materialize.min.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/cashier_transaction.css">
    <style type="text/css">
      .input-field .prefix.active{
        color: orange;
      }
      .input-field input[type=text]:focus + label {
        color: orange;
      }
    /* label underline focus color */
      .input-field input[type=text]:focus {
         border-bottom: 1px solid orange;
         box-shadow: 0 1px 0 0 orange;
       }
    </style>
</head>
<body>
<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
<ul id="slide-out" class="side-nav fixed">
    <li>
    <div class="userView">
      <div class="background">
      </div>
      <a href="#!user"><img src="http://www.brandcrowd.com/gallery/brands/pictures/picture13787516129015.png" style="height: auto;margin-left: -30%;"></a>
      <a href="#!name" style="margin-top: 2%;"><span class=" name" style="color: black;"><?php echo $_SESSION['name'];?></span></a>
      <a href="#!email"><span class=" email"><?php echo $_SESSION['email'];?></span></a>
    </div>
    </li>
    <li><a href="transaction.php" class="collapsible-header">See Transactions</a></li>
  </ul>
<main>
  <div class="row">
  <div class="col s2 offset-s10">
     <a class="waves-effect waves-light btn  red darken-4" id="lout" style="margin-top: 5%;"> LogOut</a>
  </div>
  </div>
  <div class="row">
    <div class="col s6">
      <label style="margin-left: 1%;font-size: 20px;">Choose Category Of Product</label>
        <select class="browser-default" id="medicines" style="margin-left: 1%;">
          <option value="" disabled selected>Choose your option</option>
          <option value="1">Option 1</option>
          <option value="2">Option 2</option>
          <option value="3">Option 3</option>
        </select>
    </div>
  </div>
  <div class="row" id="table1">
    <div class="col s12">
      <table class="striped centered responsive-table">
        <thead>
          <th>Name</th>
          <th>Details</th>
        </thead>
        <tbody id="details1">
        </tbody>
      </table>
    </div>
  </div>
</main>
  <?php require("footer.php");?>
<script type="text/javascript" src="js/cashier_transaction.js"></script>
</body>
</html>
