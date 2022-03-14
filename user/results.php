<?php
require_once('../admin/database.php');
require_once('../admin/library.php');

date_default_timezone_set("Africa/Nairobi");

$sql = "SELECT * FROM tbl_courier";
$result = mysqli_query($dbConn, $sql);	
$data = mysqli_fetch_array($result);

while($data = mysqli_fetch_array($result)){
		$Auction = $data['auction_date'];		
		$date1=date_create("$Auction");
		$date2=date_create(date("y-m-d"));
		$diff=date_diff($date2,$date1);		
		$days = $diff->format('%a');		
if($days<0){		
	$Category = $data['category'];
	$Auction = $data['auction_date'];
	
	$insert = "INSERT INTO tbl_results values(category,bid, auction,picture '$Category', '$Bid', '$Auction','$Picture')";	
	}	
}
?>