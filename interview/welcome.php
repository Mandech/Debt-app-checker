<?php
require("/includes/connection.php");


?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN MENU</title>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
	</head>
<body>
<div class="container">
 <div class="row">
  <center><h1>ADMIN PAGE</h1></center>
   <div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
	  <div class="search-box">
	    <div class="alert alert-default input-group search-box">
			<span class="input-group-btn">
			<input type="text" class="form-control" placeholder="Search user Details Into Database..." ng-model="search_query">
			</span>
		</div>
		
	  </div>
   	
   </div>

   <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
	   <button class="btn btn-primary" ng-show="show_form" ng-click="formToggle()" style="margin-top: 18px;"><a href="form.php?action"> Add User <a><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
	   	
	   </div>

 	
 </div>
 <div class="row">
 <center>USERS TABLE</center>
  <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
    <div class="table-responsive">
		<table class="table table-hover" style="background-color:green;">
		<tr>
		<th>ID</th>
		<th>username</th>
		<th>national_id</th>
		<th>phone</th>
		<th>Debt</th>
		<th></th>
		<th></th>
		</tr>
		<tr ng-repeat="detail in details| filter:search_query">
		<td>
		<span>{{detail.id}}</span></td>
		<td>{{detail.username}}</td>
		<td>{{detail.national_id}}</td>
		<td>{{detail.phone}}</td>
		<td>{{detail.debt}}</td>
		<td>
  <tbody>
    <?php
    $query="SELECT* FROM tbl_users";
    $result=mysqli_query($connection, $query);
    while ($row=mysqli_fetch_array($result)) {
      echo '<tr>
             <td>'.$row['id'].'</td>
             <td>'.$row['username'].'</td>
             <td>'.$row['national_id'].'</td>
             <td>'.$row['phone'].'</td>
             <td>'.$row['debt'].'</td>
                       </tr>';
    }
    ?>
  </tbody>
  <form action="excel.php" method="POST">
  	<input type="submit" name="export_excel" class="btn btn-success" value="Export to Excel">
  </form>
 </div>
	
</div>
</script>
<script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- script -->
</body>
</html>