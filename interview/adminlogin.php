<?php
require("/includes/connection.php");
?>
<?php
   if (isset($_GET['btn_login'])) {
    // form variables
   $username=$_GET['username'];
   $password=md5($_GET['password']);
  $username=ucfirst(mysqli_real_escape_string($connection,$_GET['username']));
  $password=md5(mysqli_real_escape_string($connection,$_GET['password']));

  // sql statements
      $query="SELECT username and password  FROM  admin_tbl";

      $result=mysqli_query($connection, $query) or die("Queryfailed".mysqli_error($connection));
         header("Location:welcome.php");

        }
       ?>




<!DOCTYPE html>
<html>
    <head>
          	<title>ADMIN LOGIN</title>
          	<meta charset="utf-8">
          	<meta name="viewport" content="width=device-width, initial-scale=1">
          	<meta http-equiv="x-ua-compatible" content="ie=edge">
          	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
          	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
          	<link rel="stylesheet" type="text/css" href="css/style.css">
            <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    </head>
<body>
<div class="container-fliud" id="nav">
    <div class="container" id="form">
            <div class="row" style="background-color: #001;">
            	<h2 align="center">ADMIN LOGIN</h2>
            </div><br>
      <div class="col-md-2 col-lg-2"></div>
      <div class="col-md-8 col-lg-8">

        	<form action="adminlogin.php" method="GET" name="login_form" onsubmit="return validate()">
        		<input type="text" name="username" placeholder="username" class="form-control"><br><br>
        		<input type="password" name="password" placeholder="password" class="form-control"><br><br>
        		<button name="btn_login" class="btn btn-primary" style="float: right;"> LOGIN</button><br><br>
        	</form>
    	<a href="changepassword.php" style="float: right; text-decoration: underline;">Forgot password? Change here</a>
    	</div>
    	<div class="col-md-2 col-lg-2"></div>
    </div>

 
 <div class="container-fliud" id="footer" style="margin-top: 224px;">
 	<div class="row">
 		<CENTER><p>&copy 2017</p></CENTER>
 	</div>
 </div>


<!-- script -->
<script>
    function validate(){
    var Username=document.login_form.username.value;
    var Pword=document.login_form.password.value;
    if (Username== "") {
      alert('Please Enter username');
      return false;
    }

    if (Pword== "") {
      alert('Please Enter your password');
      return false;
    }
          return true;
     
         

  }
</script>
<script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- script -->

</body>
</html>