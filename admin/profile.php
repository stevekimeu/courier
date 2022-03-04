<?php 
//session_start();
?>
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<link rel="icon" href="http://localhost/mulling_logo.jpg" type="image/icon type">
<link href="../css/topcss.css" rel="stylesheet" type="text/css">
<div class = "majorlayer">
	<table>
		<td>	
			<a href = "admin.php"> <img src="../images/mulling_logo1.png" height="70" width="900">
		</td>
			
	</table>		
		<div class="topnav" id="myTopnav">  
		  <div class="dropdown">
				<h4 class="dropbtn"><i class="fas fa-home">&nbsp;&nbsp;</i>Home</h4>
				<div class="dropdown-content">
				<a href="message.php" ><i class="fas fa-envelope"></i>&nbsp;Messages</a>
				<a href="#" ><i class="fas fa-bell"></i>&nbsp;Notifications</a>
				<a href="#" ><i class="fa-solid fa-envelope-open-text">&nbsp;&nbsp;</i>New Orders</a>
				</div>
		  </div> 
		  <div class="dropdown">
				<h4 class="dropbtn"><i class="fas fa-user-shield"></i>&nbsp;&nbsp;&nbsp;User Management</h4>
				<div class="dropdown-content">
				<a href="adduser.php">Add User</a>
				<a href="allusers.php">View Users</a>
				<a href="addmanager.php">Add Field Officer</a>
				<a href="allmanagers.php">Manage Field Officer</a>
				</div>
		  </div>
		  <div class="dropdown">
				<h4 class="dropbtn"><i class="fas fa-envelope"></i>&nbsp;&nbsp;&nbsp;Livestock Management</h4>
				<div class="dropdown-content">
				  <a href="add_livestock.php">Add Livestock</a>
				  <a href="view_livestock.php">View Livestock</a>
				  <a href="manage_livestock.php">Manage Livestock</a>
				</div>
		  </div>
		  <div class="dropdown">
				<h4 class="dropbtn"><i class="fas fa-user-shield"></i>&nbsp;&nbsp;&nbsp;Admin Profile </h4>
				<div class="dropdown-content">
				  <a href="#">User Logs</a>
				  <a href="process.php?action=logOut">Logout</a>
				</div>
		  </div>
		  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
	</div>	  
</div>