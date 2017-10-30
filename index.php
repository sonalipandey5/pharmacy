<?php
require_once 'connect.php';
if(isset($_SESSION['position'])){
  if($_SESSION['position']==1){
    header('Location: admin_p.php');
  }
  else if($_SESSION['position']==2){
    header('Location: user.php');
  }
  else if($_SESSION['position']==3){
    header('Location: cashier.php');
  }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/materialize.min.css">

    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<main>
  <div class="anyForm loginform">
   <div class="container white ">

      <div class="row">
        <form class="col s6 offset-s3 z-depth-5">
        <div class="imgcontainer">
          <img src="http://www.brandcrowd.com/gallery/brands/pictures/picture13787516129015.png"  alt="Logo">
        </div>
          <div class="row">
            <div class="input-field col s6 offset-s3">
              <i class="material-icons prefix">account_circle</i>
              <input id="uname" type="text" class="validate" required>
              <label for="userName">User Name</label>
            </div>
            <div class="input-field col s6 offset-s3">
              <i class="material-icons prefix">vpn_key</i>
                    <input id="pass" type="password" class="validate" required>
                    <label for="password">Password</label>
            </div>
            <div class="container" >
              <div class="col s8">
                <a href="password_reset.php" target="_blank">Forgotten Password?</a>
              </div>
              <div class="col s2 offset-s1">
                <a class="modal-trigger" href="#modal1">Register?</a>
              </div>
            </div>
            <!-- Modal Structure -->

        </form>
            <div class="center" style="padding-top: 200px;">
              <button class="waves-effect waves-light btn green accent-4 logIn" id="submit">Sign in<i class="material-icons right">send</i></button>
            </div>
          </div>

      </div>
    </div>
  </div>
  </main>
  <?php require("footer.php");?>
  <div id="modal1" class="modal modal-fixed-footer">
              <div class="modal-content">
                <h4>Register Form</h4>
                  <div class="row">
                    <form class="col s12" id="register">
                      <div class="row">
                        <div class="input-field col s12">
                          <input placeholder="Enter Full Name" id="full_name" type="text" class="validate">
                          <label for="first_name">Full Name</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input id="email" type="email" class="validate" placeholder="Enter Email ID">
                          <label for="email">Email</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input id="phone" type="text" class="validate" placeholder="Enter Phone Number" maxlength="10">
                          <label for="phone">Phone Number</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input id="password" type="password" class="validate" placeholder="Enter Password">
                          <label for="password">Password</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input id="r_password" type="password" class="validate" placeholder="Repeat Password">
                          <label for="r_password">Repeat Password</label>
                        </div>
                      </div>
                      <div class="row">
                        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                      </div>
                    </form>
                  </div>
                  <center>
                  <button class="btn waves-effect waves-light" type="submit" name="action" id="register">Submit
                    <i class="material-icons right">send</i>
                  </button>
                  </center>
              </div>
              <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Done</a>
              </div>
            </div>
  <script src="js/jquery.min.js"></script>
<script src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>
</body>
</html>