<?php
require "../admin/database.php";

if(isset($_POST['Submit'])){
$UserName = $_POST['Name'];
	$Address = $_POST['Email'];
	$Town = $_POST['Phone'];	
	$PhoneNumber = $_POST['Message'];;	
		
	$sql = "INSERT INTO tbl_offices (name,email, phone, message)
			VALUES('$name', '$email','$phone', '$message')";	
	if (mysqli_query($dbConn, $sql)) {
				
				header("location: master.php"); // redirects to delivered page
		}
		 else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($dbConn);
  
						}
		mysqli_close($dbConn);

	}
?>


