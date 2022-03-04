<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>Add Manager</title>
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
		<div class = "wrapper1">
			<p>Field Officer information </p>
			
	
					<form action="new_manager.php" method="post" name="form" > 
			<table width = "100%">
					<tr>
						<td>
							<div class="form-group">
								<label>Officer Name :</label>										
								<input name="ManagerName" type="TEXT" id="ManagerName" class = "form-control1">               
							</div>
						</td><td>
							<div class="form-group">
								<label>Officer Address   :</label>									 
								<textarea name="Address" cols="45" rows="3" id="Address" ></textarea>						  
							</div>
						</td></tr>
						<tr><td>
							<div class="form-group">
								  <label>Officer Email Address :</label>							  
								  <input name="Email" id="Email" type="TEXT" class = "form-control1">
							</div>
							</td><td>
							<div class="form-group">	  
								 <label> Officer Phone No. : </label>							  
								  <input name="PhoneNumber" id="PhoneNumber"  type="TEXT" class = "form-control1">
							  </div>
							  </td></tr>
							  <tr><td>
							 <div class="form-group"> 	  
									<label>Officer Region of Coverage : </label>		  
									<input name="Region" id="Region"  type="TEXT"  class = "form-control1">
							 </div>
</td><td>							 
							<div class="form-group">
								<label> Assign Password  :</label>										
								<input name="Password" id="Password"  type="password" class = "form-control1">										
							</div>
</td></tr>
			<tr><td>
					<input name="Submit" type="submit" value="Add New Field Officer">
					
			</td></tr>
	</table>
						</form>
					</div>
				</div>
			</div>
		</body>
	</html>