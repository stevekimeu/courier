<?php
session_start();
require_once('../admin/database.php');


$username =  $_GET['username'];
 
$sql = mysqli_query($dbConn,"select * from tbl_offices where username='$username'"); // select query

$data = mysqli_fetch_array($sql); // fetch data

//$sql = "SELECT * FROM tbl_courier WHERE cid = '$id'";

//$result = dbQuery($sql);		

/**while($data = dbFetchAssoc($result)) {
extract($data);**/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>Edit Livestock</title>
	<link href="../css/admin.css" rel="stylesheet" type="text/css">
	<link href="../css/central.css" rel="stylesheet" type="text/css">
	<script src="https://kit.fontawesome.com/4cb2645454.js" crossorigin="anonymous"></script>	
	<link rel="icon" href="http://localhost/mulling_logo.jpg" type="image/icon type">
	
	</head>
	<body>

	
	<div class = "user_loginbg">
    <div class="wrapper">

			<?php
				if(isset($_POST['submit']))
				{
					
					$Category = $_REQUEST['category'];
					$Contact = $_REQUEST['contact'];
					$Town	=$_POST['town'];
					$Address =$_POST['address'];
					
					$update= mysqli_query($dbConn, "update tbl_offices set user_category = '$Category', phone_number= '$Contact', Town ='$Town', address ='$Address' where username = '$username'"); 

				   if($update)
					{
						
						header("location: user_login.php");
						
						exit;
					}
				else 
					{
						echo 'errors Occured';
					}
				}
		?>
		 <form name="form" method="POST" action="">
			
						<p>Complete Registration </p>

<div class="form-group">	
	<label>USer Category :</label>             
			<select id="category" name="category" maxlength="100" class = "form-control" >
			<option value="Buyer" >Buyer</option>
			<option value="Seller">Seller</option>
			<option value="Both">Both</option>
		</select>			
</div>
	
<div class="form-group">			
		<label>Contact Number: </label>            
			<input name="contact" id="contact" class = "form-control" type="TEXT"/>
			
</div>
  <div class="form-group">
			<label>Address of the user: </label>			
			<textarea type="TEXT" name="address" cols = "45" rows = "3" /></textarea>
</div>

<div class="form-group">
			<label>Town of the user:</label>			
			<input name="town" id="town" class = "form-control" type="TEXT"/>
</div>
		  <input name="submit" type="submit" value="Register" />
		
		
	 </form>  
</div>
</div>
	</body>
</html>
