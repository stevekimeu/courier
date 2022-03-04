<?php
require_once('database.php');

if(isset($_POST['Submit'])){
	$UserName = $_POST['username'];
	$Address = $_POST['address'];
	$Contact = $_POST['contact'];
	$Email = $_POST['email'];	
	$Password= $_POST['password'];	
		
	$sql = "INSERT INTO tbl_offices (fullname, region, phonenumber, email, password)
			VALUES('$UserName', '$Address','$Contact','$Email','$Password')";	
	if (mysqli_query($dbConn, $sql)) {
				
				header("location: admin.php"); // redirects to delivered page
		}
		 else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($dbConn);
  
						}
		mysqli_close($dbConn);

	}
?>


