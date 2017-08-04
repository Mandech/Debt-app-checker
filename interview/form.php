+<?php
require("/includes/connection.php");
 
if (isset($_POST['btn_submit'])) {
    // form variables
   $username=$_POST['username'];
  $national_id=$_POST['national_id'];
  $phone=$_POST['phone'];
  $password=md5($_POST['password']);
  $debt=$_POST['debt'];
 
 $query="INSERT INTO tbl_users(username,national_id,phone,password,debt) VALUES('{$username}','{$national_id}','{$phone}','{$password}','{$debt}')";
      // connecting sqli
      $result=mysqli_query($connection, $query) or die("Queryfailed".mysqli_error($connection));

         header('Location:welcome.php');

        }
?>
<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
		<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body>
<div class="container"><div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
<article>
	<form action="form.php" method="POST" name="user_form">
		<label>Username</label>
		<input type="text" name="username" placeholder="Usernaem" class="form-control"><br>
		<label>Id number</label>
		<input type="number" name="national_id" placeholder="124" class="form-control"><br>
		<label>Phone number</label>
		<input type="number" name="phone" placeholder="07*****" class="form-control"><br>
		<label>Password</label>
		<input type="Password" name="Password" placeholder="......" class="form-control"><br>
		<label>Debt</label>
		<input type="debt" name="debt" placeholder="Kshs." class="form-control"><br>
		<button type="submit" class="btn btn-primary" name="btn_submit" >ADD</button>
	</form>
</article>
</div></div>
<script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>
