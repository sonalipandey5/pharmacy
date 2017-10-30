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
    <title>Payment</title>
    <script src="js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/materialize.min.css">
    <script src="js/materialize.min.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/pay.css">
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
    <li><a id="credit" class="collapsible-header">Credit/Debit Card</a></li>
    <li><a id="paytm" class="collapsible-header">Paytm</a></li>
    <li><a id="cod" class="collapsible-header">Cash on Delivery</a></li>
  </ul>
<main>
  <div class="row">
    <div class="col s2 offset-s10">
       <a class="waves-effect waves-light btn  red darken-4" id="lout" style="margin-top: 5%;"> LogOut</a>
    </div>
  </div>
  <input type="hidden" id="prev_loc">
  <div class="row">
    <div id="credit1">
      <form id="credit_card">
        <div class="row">
          <div class="input-field col s12">
            <h6>Enter Credit Card Number</h6>
            <div class="input-field col s2">
            <input pattern=".{4,}" required title="Minimum 4 characters required" id="debit" name="debit" type="text" class="validate" maxlength="4">
            </div>
            <center><div class="col s1"> - </div></center>
            <div class="input-field col s2">
            <input pattern=".{4,}" required title="Minimum 4 characters required" id="debit1" name="debit1" type="text" class="validate" maxlength="4">
            </div>
            <center><div class="col s1"> - </div></center>
            <div class="input-field col s2">
            <input pattern=".{4,}" required title="Minimum 4 characters required" id="debit2" name="debit2" type="text" class="validate" maxlength="4">
            </div>
            <center><div class="col s1"> - </div></center>
            <div class="input-field col s2">
            <input pattern=".{4,}" required title="Minimum 4 characters required" id="debit3" name="debit3" type="text" class="validate" maxlength="4">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s4" >
            <input id="dat1" name="dat1" type="text" class="datepicker">
            <label for="dat1">Expiry Date</label>
          </div>
          <div class="input-field col s4">
            <input id="cvv" name="cvv" type="password" class="validate" maxlength="3">
            <label for="cvv">CVV</label>
          </div>
        </div>
        <div class="col s2 offset-s10">
        <a class="waves-effect waves-light btn indigo accent-2" id="credit_sub" style="margin-top: 5%;">Submit</a>
      </div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <form id="paytm_pay">
      <div id="paytm1">
        <div class="input-field col s4" >
          <input id="pnum" name="pnum" type="text" class="validate" maxlength="10">
          <label for="pnum">Add Phone Number</label>
        </div>
        <div class="input-field col s4" >
          <input id="cost" name="cost" type="number" class="validate">
          <label for="cost">Enter Amount</label>
        </div>
        <div class="col s2 offset-s10">
          <a class="waves-effect waves-light btn indigo accent-2" id="otp" style="margin-top: 5%;">Get OTP</a>
        </div>
      </div>
      </form>
    </div>
    <div class="col" id="paytm2">
      <div class="input-field col s4" >
        <input id="onum" name="onum" type="text" class="validate" maxlength="4">
        <label for="onum">Enter OTP</label>
      </div>
      <div class="col s2 offset-s10">
          <a class="waves-effect waves-light btn indigo accent-2" id="pay" style="margin-top: 5%;">Pay</a>
      </div>
    </div>
  </div>
  <div class="row">
    <div id="cod1">
    <form id="cod_pay">
    <h5 style="margin-left: 2%;">Enter your Address</h5>
      <div class="input-field col s4">
      <input type="textarea" name="addr" id="addr" class="validate">
      <label style="margin-left: 2%;" id="label">Enter Your Address ....</label>
      </div>
      <div class="col s4 offset-s8">
          <a class="waves-effect waves-light btn indigo accent-2" id="pay_cod" style="margin-top: 5%;">Pay On Delivery </a>
      </div>
    </div>
    </form>
  </div>



<?php require("footer.php");?>
</main>
<script type="text/javascript" src="js/pay.js"></script>
</body>
</html>
