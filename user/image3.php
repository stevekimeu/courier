<?php
// Include the database configuration file
require_once('../admin/database.php');

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){	
	
	//image processing	
	$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database			
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
	$Category = $_POST['Category'];
	$Age = $_POST['Age'];
	$Weight = $_POST['Weight'];	
	$Location = $_POST['Location'];
	$Sex = $_POST['Sex'];
	$AuctionDate = $_POST['AuctionDate'];	
	$Description = $_POST['Description'];
	$Price = $_POST['Price'];	
	$PaymentMethod = $_POST['PaymentMethod'];
		
	$sql = "INSERT INTO tbl_courier (category, age, weight, location, sex, auction_date, description, picture , price,paymentmethod, Created_On)
			VALUES('$Category', '$Age','$Weight', '$Location', '$Sex','$AuctionDate','$Description', '$fileName','$Price','$PaymentMethod',NOW())";	
	if (mysqli_query($dbConn, $sql)) {
				
				header("location: master.php"); // redirects to manage_livestock page
		}
		 else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($dbConn);
  
						}
		mysqli_close($dbConn);

	}
else{
    $statusMsg = 'Please select a file to upload.';
}


?>

	
	