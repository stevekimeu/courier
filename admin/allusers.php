<?php
session_start();
require_once('database.php');
require_once('library.php');

isUser();

$sql = "SELECT * FROM tbl_offices";

$result = dbQuery($sql);		

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>All Users</title>
	<link href="../css/admin.css" rel="stylesheet" type="text/css">
	<link href="../css/central.css" rel="stylesheet" type="text/css">
	<script src="https://kit.fontawesome.com/4cb2645454.js" crossorigin="anonymous"></script>	
	<link rel="icon" href="http://localhost/mulling_logo.jpg" type="image/icon type">
	<link href="../css/topcss.css" rel="stylesheet" type="text/css">
</head>
	<body>
		<div class = "outerlayer">
		<?php include("user_management.php"); ?>			
			<div class = "affliatelayer">
			<div class = "table_wrapper">
				<p>All system Users </p>  
			<table  cellpadding="10" cellspacing="2" width="100%">
				<tbody><tr class="BoldRED" bgcolor="#FFFFFF" style="height:20px;">
			  <td class="newtext" bgcolor="#EDEDED" width="20%">Name of User</td>
			  <td class="newtext" bgcolor="#EDEDED" width="20%">User Address</td>
			  <td class="newtext" bgcolor="#EDEDED" width="10%">Phone Number</td>
			  <td class="newtext" bgcolor="#EDEDED" width="15%">Email</td>
			</tr>
			<?php	
			while($data = dbFetchAssoc($result)){
			extract($data);	
			
			$username = $data['fullname'];
			$address = $data['region'];
			$contact = $data['phonenumber'];
			$email = $data['email'];
			$id = $data['id'];
			
			?>
			  <tr onMouseOver="this.bgColor='lightgreen';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF" style="height:20px;">	
			  <td class="gentxt"><?php echo $username; ?></td>
			  <td class="gentxt"><?php echo $address; ?></td>
			  <td class="gentxt"><?php echo $contact; ?></td>
			  <td class="gentxt"><?php echo $email; ?></td>			  
			  <td class="gentxt"><a href = "delete_user.php?cid=<?php echo $id;?>"> Remove User</a></td>
			</tr>
			<?php
			}
			?>
				</tbody>
			</table> 
			</div>
			</div>
		</div>
	</body>
</html>