<?php
require_once('../admin/database.php');

if(!isset($_POST['submit'])){
	$name = $_POST['Name'];
	$email = $_POST['Email'];
	$phone = $_POST['Phone'];	
	$message = $_POST['Message'];
		
	$sql = "INSERT INTO messages (name, email, phone, message)
			VALUES('$name', '$email','$phone', '$message')";	
	if (mysqli_query($dbConn, $sql)) {
				
				header("location: master.php"); // redirects to main page
		}
		 else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($dbConn);
  
						}
		mysqli_close($dbConn);

	}
?>


