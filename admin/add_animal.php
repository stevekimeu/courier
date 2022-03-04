<?php
require_once('database.php');

if(isset($_POST['Submit'])){
$Category = $_POST['Category'];
	$Age = $_POST['Age'];
	$Weight = $_POST['Weight'];	
	$Location = $_POST['Location'];
	$Sex = $_POST['Sex'];
	$AuctionDate = $_POST['AuctionDate'];	
	$Description = $_POST['Description'];
	$Price = $_POST['Price'];
	$Picture = $_POST['Picture'];	
	$PaymentMethod = $_POST['PaymentMethod'];
		
	$sql = "INSERT INTO tbl_courier (category, age, weight, location, sex, auction_date, description,  price, picture, paymentmethod, Created_On)
			VALUES('$Category', '$Age','$Weight', '$Location', '$Sex','$AuctionDate','$Description', '$Price','$Picture', '$PaymentMethod', NOW())";	
	if (mysqli_query($dbConn, $sql)) {
				
				header("location: manage_livestock.php"); // redirects to manage_livestock page
		}
		 else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($dbConn);
  
						}
		mysqli_close($dbConn);

	}
?>


