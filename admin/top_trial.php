<?php 
//session_start();
?>
<html><head>
			<title>Manage Livestock</title>
			
			<link href="../css/admin.css" rel="stylesheet" type="text/css">
			
			<link href="../css/central.css" rel="stylesheet" type="text/css">
			
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

<link rel="icon" href="http://localhost/mulling_logo.jpg" type="image/icon type">
</head>
<body>
<div class = "majorlayer">
	<table>
		<td>	
			<a href = "admin.php"> <img src="../images/mulling_logo1.png" height="70" width="900">
		</td>
			
	</table>		
	<div class = "navlayer1">
		<div class = "right">
					
				  <i class="fas fa-home"></i>
				  <a href="../user/master.php">User Experience</a>					  
				  <a href="#">User Logs</a>
				  <a href="process.php?action=logOut">Logout</a>
	   </div>
	   
	</div>
	<div class = "navlayer2">

		<table align = "center">
			<td width = "100%">
				  <a href="add_livestock.php">Add Livestock</a>
				  <a href="view_livestock.php">View All Livestock</a>
				  <a href="manage_livestock.php">Update Livestock Records</a>
			</td>
		</table>	
	  
	</div>
	  <div class = "navlayer3">
	  
	  <div class = "left">
				  <a href="adduser.php">Add a User</a>
				  <a href="addmanager.php">Add a Manager</a>
				  <a href="allusers.php">Manage Users</a>
				  <a href="allmanagers.php">Managers</a>	
	  </div>
	  
	 </div>
	</div>
	
	</body>
	</html>