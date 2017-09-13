<?php
require_once 'connect.php';
if(isset($_SESSION['position'])){

  if($_SESSION['position']==2){
    header('Location: user.php');
  }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Medicine</title>
    <script src="js/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/materialize.min.css">
    <script src="js/materialize.min.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/medicines.css">
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
      <a href="#!user"><img src="images/pharmacy_logo.png" style="height: auto;margin-left: -30%;"></a>
      <a href="#!name" style="margin-top: 2%;"><span class=" name" style="color: black;"><?php echo $_SESSION['name'];?></span></a>
      <a href="#!email"><span class=" email"><?php echo $_SESSION['email'];?></span></a>
    </div>
    </li>
    <li><a href="medicines.php" class="collapsible-header">List Of Medicines</a></li>
    <li class="active"><a href="add_medicine.php" class="collapsible-header">Add Medicine</a></li>
  </ul>
<main>
  <div class="row">
  <div class="col s2 offset-s10">
     <a class="waves-effect waves-light btn  red darken-4" id="lout" style="margin-top: 5%;"> LogOut</a>
  </div>
  </div>
  <h4 style="margin-left: 3%;" >Add a Medicine</h4>
   <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s4">
          <input placeholder="Enter name of medicine" id="name" name="name" type="text" class="validate">
          <label for="name">Name</label>
        </div>
        <div class="input-field col s4">
          <input id="quantity" name="quantity" type="number" class="validate" placeholder="Enter quantity of medicine">
          <label for="quantity">Quantity</label>
        </div>
        <div class="input-field col s4">
          <input id="cost" name="cost" type="number" class="validate" placeholder="Enter cost per tablet/bottle (Rs.)">
          <label for="cost">Cost per Tablet/Bottle</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="dat" name="dat" type="text" class="datepicker">
          <label for="dat">Expiry Date</label>
        </div>
        <div class="input-field col s6">
          <input id="des" name="des" type="text" class="validate" placeholder="Add description of the medicine">
          <label for="des">Description</label>
        </div>
      </div>
      <div class="row">
        <div class="file-field input-field">
          <div class="btn">
            <span>Upload</span>
            <input type="file">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload image of the Medicine">
          </div>
        </div>
        <div class=" col s2 offset-s10">
           <a class="waves-effect waves-light btn green accent-4" id="create_test_sub"> Submit </a>
        </div>
      </div>
    </form>
  </div>
</main>
  <?php require("footer.php");?>
<script type="text/javascript" src="js/add_medicine.js"></script>
</body>
</html>
