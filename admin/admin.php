<?php
session_start();
require_once('library.php');
isUser();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>Admin Account</title>
	<link href="../css/admin.css" rel="stylesheet" type="text/css">
	<link href="../css/central.css" rel="stylesheet" type="text/css">
	<script src="https://kit.fontawesome.com/4cb2645454.js" crossorigin="anonymous"></script>	
	<link rel="icon" href="http://localhost/mulling_logo.jpg" type="image/icon type">
</head>
<body>

<div class = "outerlayer">
	<?php
	include("top.php");
	?>
<div class = "affliatelayer">
  <div class = "wrapper4">	
	<div class = "wrapperleft">
			<p>Notifications</p>
		<ul style="list-style-type:circle;">
		    <li><a href="message.php" ><i class="fas fa-envelope">&nbsp;</i>Messages</a></li>
			<li><a href="#" ><i class="fas fa-bell">&nbsp;</i>Notifications</a></li>
			<li><a href="receive_order.php" ><i class="fas fa-envelope-open-text">&nbsp;&nbsp;</i>All Bids</a></li>
		</ul>
	</div>	
	<div class = "wrapperright">
			<p>User Management</p>
		<ul style="list-style-type:circle;">
		   <li><a href="adduser.php"><i class="fas fa-home">&nbsp;</i>Add User</a></li>	  
			<li><a href="allusers.php"><i class="fas fa-user-shield">&nbsp;</i>View Users</a></li> 
			<li><a href="addmanager.php"><i class="fas fa-envelope">&nbsp;</i>Add Field Officer</a>	</li>		
			<li><a href="allmanagers.php"><i class="fas fa-user-shield">&nbsp;</i>Manage Field Officers</a></li>
		</ul>
	</div>				
	   </div>	
 <div class = "wrapper4">	
	<div class = "wrapperleft">
			<p>Livestock Management</p>
		<ul style="list-style-type:circle;">
		    <li><a href="add_livestock.php"><i class="fas fa-home">&nbsp;</i>Add Livestock</a></li>  
			<li><a href="view_livestock.php"><i class="fas fa-user-shield">&nbsp;</i>View Livestock</a></li>
			<li><a href="manage_livestock.php"><i class="fas fa-envelope">&nbsp;</i>Manage Livestock</a></li>
		</ul>
	</div>	
	<div class = "wrapperright">
			<p>Logout</p>
		<ul style="list-style-type:circle;">
			<li><a href="#" ><i class="fas fa-envelope-open-text">&nbsp;&nbsp;</i>Shopping Cart</a></li>
		    <li><a href="#"><i class="fas fa-envelope">&nbsp;&nbsp;</i>User Logs</a></li>
			<li><a href="process.php?action=logOut"><i class="fas fa-bell">&nbsp;&nbsp;</i>Logout</a></li>
		</ul>
	</div>				
	   </div>	   
	  </div>
	 </div>
	</body>
</html>