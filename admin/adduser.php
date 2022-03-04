<?php 
session_start();
require_once('library.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>Add User</title>
	<link href="../css/admin.css" rel="stylesheet" type="text/css">
	<link href="../css/central.css" rel="stylesheet" type="text/css">
	<script src="https://kit.fontawesome.com/4cb2645454.js" crossorigin="anonymous"></script>	
	<link rel="icon" href="http://localhost/mulling_logo.jpg" type="image/icon type">
</head>

<body>

<div class = "outerlayer">
		<?php include("user_management.php"); ?>
		
	<div class = "affliatelayer">	
		<div class = "wrapper1">		
		<form name="form" method="POST" action="new_user.php">
		<p>User information Capture </p>
<table width = "100%">
	<tr>
		<td>
         <div class="form-group">
			<label>Name of the User:</label>            
			<input name="username" type="TEXT" id="username" class = "form-control1">         
          </div>
</td><td>		  
		  <div class="form-group">
			<label>User Region :</label>
			<input type="TEXT" name="address" id="address"  class = "form-control1">              
          </div>
</td></tr>	
<tr><td>	  
		 <div class="form-group">
		 <label>User Contact :</label>		  
		  <input name="contact" id="contact" class = "form-control1" type="TEXT">
		  </div>	
</td><td>		  
		  <div class="form-group">
		  <label>Email Address:</label> 		  
		  <input name="email" id="email" class = "form-control1" type="TEXT">
		  </div>
</td></tr>
<tr><td>		  
		  <div class="form-group">
		  <label>Assign Initial password: </label>		  
		  <input name="password" id="password" class = "form-control1" type="TEXT">
		  </div>		  
</td><td>
           <input name="Submit" type="submit" value="Add New User">   
			</form>
</td></tr>
		</div>	
	</div>
</div>	   
	</body>
</html>