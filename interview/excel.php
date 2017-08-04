<?php
require("/includes/connection.php");
$output ='';
 if (isset($_POST["export_excel"])) 
 {
 	$query="SELECT *  FROM  tbl_users ORDER BY id DESC";
 $result=mysqli_query($connection, $query) or die("Queryfailed".mysqli_error($connection));
 if(mysqli_num_rows($result)>0)
 {
 	$output='
 	<table class="table" bordered="1">
 	  <tr>
 	      <th>id</th>
 	      <th>username</th>
 	      <th>national_id</th>
 	      <th>phone</th>
 	      <th>Debt</th>

 	';
 	while($row =mysqli_fetch_array($result))
 	{
 		$output .='
 		<tr>
 		   <td>'.$row["id"].'</td>
 		   <td>'.$row["username"].'</td>
 		   <td>'.$row["national_id"].'</td>
 		   <td>'.$row["phone"].'</td>
 		   <td>'.$row["debt"].'</td>
 		</tr>
 		';
 	}
 	$output .='<table>';
 	header("Content-Type; application/xls");
 	header("Content-Disposition: attachment; filename=download.xls");
 	echo $output;
 }
 }

?>