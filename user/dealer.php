<?php
require_once('../admin/database.php');
$cid = ''; 
if( isset( $_GET['cid'])) {
    $cid = $_GET['cid']; 
} 


$sql = mysqli_query($dbConn, "SELECT fullname, region, phonenumber,email
								FROM  tbl_offices								
								WHERE email = (SELECT postedby FROM tbl_courier WHERE cid = '$cid')");// select query

$data = mysqli_fetch_array($sql); // fetch data

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>Dealer</title>
	<link href="../css/admin.css" rel="stylesheet" type="text/css">
	<link href="../css/central.css" rel="stylesheet" type="text/css">
	<script src="https://kit.fontawesome.com/4cb2645454.js" crossorigin="anonymous"></script>	
	<link rel="icon" href="http://localhost/mulling_logo.jpg" type="image/icon type">

	<style>
table {
  table-layout: fixed ;
  width: 100% ;
}
td {
  width: 33.33% ; 
  padding-left:0%;
  padding-bottom:0%;
}
</style>	
	</head>
	<body>

	<?php include("master.php"); ?>			
<div class = "innercontainer">
<div class = "wrapper1">	
			<table  width = "100%">
				<tr>
					<td>
					<img src="../images/person.png" width ="60%" height = "300" alt = "No Picture" align = "center"/>
			
			</td><td align = "left">
					<h2>Name of Dealer:&nbsp;<?php echo $data['fullname'];?></h2>										
					<h3>Region:&nbsp;<?php echo $data['region'];?></h3>
					<h4>Phone Number: &nbsp;+254<?php echo $data['phonenumber'];?></h4>					
					<p>E-mail address:&nbsp;<?php echo $data['email'];?></p>
	
</td><td align = "left">
			<div class = "displayanimal2_tab">
					<a href = "order.php?cid=<?php echo $cid; ?>">Click here to bid now</a> 
				</div>
				</td>
			</tr>
		</table>
			</div>			
		</div>
	</body>
</html>
