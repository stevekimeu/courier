<?php
require_once('../admin/database.php');
require_once('../admin/library.php');
		


$sql = "SELECT tbl_courier.cid, tbl_order.cid, tbl_courier.category, tbl_courier.auction_date, tbl_courier.picture, tbl_order.bid
			
			FROM tbl_order
			
			INNER JOIN tbl_courier
			ON tbl_courier.cid = tbl_order.cid
			";
		


$result = mysqli_query($dbConn, $sql);	

$data = mysqli_fetch_array($result);

		$Auction = $data['auction_date'];
		date_default_timezone_set("Africa/Nairobi");
		$date1=date_create("$Auction");
		$date2=date_create(date("y-m-d"));
		$diff=date_diff($date2,$date1);		
		$days = $diff->format('%a');
		
if($days>0){		
$sql1 =  "SELECT * FROM tbl_courier WHERE auction_date = (SELECT bid FROM tbl_order WHERE auction ='$days')";

$result1 = mysqli_query($dbConn, $sql1);

while($data1 = mysqli_fetch_array($result1)){
	
	$Category = $data1['category'];
	$Bid = $data1['bid'];
	$Auction = $data1['auction_date'];
	$Picture = $data1['picture'];	
	$insert = "INSERT INTO tbl_results values('', '$Category', '$Bid', '$Auction','$Picture')";	
	}
	
}
?>