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
	
	</head>
	<body>

	<?php include("master.php"); ?>
			
<div class = "childpane">
<div class = "displayanimal2">	
			<table  width = "100%">
				<tr>
					<td>
					<img src="../images/person.png" width ="60%" height = "300" alt = "No Picture" align = "center"/>
			
			</td><td align = "left">
					<h2>&nbsp;<?php echo $data['fullname'];?></h2>										
					<h3>&nbsp;<?php echo $data['region'];?></h3>
					<h4>&nbsp;+254<?php echo $data['phonenumber'];?></h4>					
					<p>&nbsp;<?php echo $data['email'];?></p>	
			
			<div class = "displayanimal2_tab">
					<a href = "order.php?cid=<?php echo $cid; ?>">Click to bid now</a> 
				</div>
				</td>
			</tr>
		</table>
			</div>			
		</div>
	</body>
</html>
