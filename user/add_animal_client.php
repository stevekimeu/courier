<?php
// Include the database configuration file
require_once('../admin/database.php');

//image processing	
	$statusMsg = '';


if(isset($_POST["Submit"])&& !empty($_FILES["Picture"]["name"])){	
// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["Picture"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["Picture"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database			
			
            
                echo 'The file ".$fileName. " has been uploaded successfully.';
            }
    }
	
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
				
				header("location: master.php"); // redirects to manage_livestock page
		}
		 else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($dbConn);
  
						}
		mysqli_close($dbConn);

	}
	
?>