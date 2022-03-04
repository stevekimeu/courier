<?php 
//session_start();
?>
<title>User Management</title>
	<link href="../css/admin.css" rel="stylesheet" type="text/css">
	<link href="../css/central.css" rel="stylesheet" type="text/css">
	<script src="https://kit.fontawesome.com/4cb2645454.js" crossorigin="anonymous"></script>	
	<link rel="icon" href="http://localhost/mulling_logo.jpg" type="image/icon type">
<div class = "outerlayer">
<div class = "majorlayer">
	<table>
		<td>	
			<a href = "admin.php"> <img src="../images/mulling_logo1.png" height="70" width="900">
		</td>
			
	</table>	
			<div class = "navlayer5">
			<div class = "left">				
				<p>User Management</p>	
			</div>
				<div class = "right">
					<a href="admin.php"><i class="fas fa-home">&nbsp;</i>Home</a>
					<a href="process.php?action=logOut"><i class="fas fa-envelope">&nbsp;</i>Logout</a>	
				</div>
			</div>
	
			<div class ="navlayer2">
				<div class = "left">
					<a href="adduser.php"><i class="fas fa-home">&nbsp;&nbsp;</i>Add User</a>	  
					<a href="allusers.php"><i class="fas fa-user-shield">&nbsp;&nbsp;</i>View Users</a> 
					<a href="addmanager.php"><i class="fas fa-envelope">&nbsp;&nbsp;&nbsp;</i>Add Officer</a>			
					<a href="allmanagers.php"><i class="fas fa-user-shield">&nbsp;&nbsp;</i>Manage Officers</a>
				</div>				
			</div>
	</div>	  
</div>