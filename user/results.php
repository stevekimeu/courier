<?php
require_once('../admin/database.php');
require_once('../admin/library.php');

date_default_timezone_set("Africa/Nairobi");

$sql = "SELECT * FROM tbl_courier";
$result = mysqli_query($dbConn, $sql);	
$data = mysqli_fetch_array($result);

$Auction = $data['auction_date'];
$date1=date_create("$Auction");
$date2=date_create(date("y-m-d"));
$diff=date_diff($date2,$date1);		
$days = $diff->format('%R%a');

while($data = mysqli_fetch_array($result)){			
				
if($days<0){		
	$Category = $data['category'];
	$Bid = $data['bid'];
	$Auction = $data['auction_date'];
	$Picture = $data['picture'];
	
	$insert = "INSERT INTO tbl_results values(category,bid, auction,picture '$Category', '$Bid', '$Auction','$Picture')";	
	}	
}
?>