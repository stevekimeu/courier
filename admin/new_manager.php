<?php
require_once('database.php');

if(isset($_POST['Submit'])){
	$ManagerName = $_POST['ManagerName'];
	$Address = $_POST['Address'];
	$Email = $_POST['Email'];	
	$PhoneNumber = $_POST['PhoneNumber'];	
	$Region= $_POST['Region'];
	$Password= $_POST['Password'];	
		
	$sql = "INSERT INTO tbl_courier_officers (manager_name,address, email, phonenumber, region, password)
			VALUES('$ManagerName', '$Address','$Email', '$PhoneNumber', '$Region','$Password')";	
	if (mysqli_query($dbConn, $sql)) {
				
				header("location: admin.php"); // redirects to delivered page
		}
		 else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($dbConn);
  
						}
		mysqli_close($dbConn);

	}
?>

