<?php
require_once('../admin/database.php');
$cid = ''; 
if( isset( $_GET['cid'])) {
    $cid = $_GET['cid']; 
} 
$sql = mysqli_query($dbConn,"select * from tbl_courier where cid='$cid'"); // select query

$data = mysqli_fetch_array($sql); // fetch data

$imageURL = 'uploads/'.$data["picture"];

//$sql = "SELECT * FROM tbl_courier WHERE cid = '$id'";

//$result = dbQuery($sql);		

/**while($data = dbFetchAssoc($result)) {
extract($data);**/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>More Details</title>
	<link href="../css/admin.css" rel="stylesheet" type="text/css">
	<link href="../css/central.css" rel="stylesheet" type="text/css">
	<script src="https://kit.fontawesome.com/4cb2645454.js" crossorigin="anonymous"></script>	
	<link rel="icon" href="http://localhost/mulling_logo.jpg" type="image/icon type">
	
	</head>
	<body>

	<?php 
	include("master.php");
		
		$auction = $data['auction_date'];
		date_default_timezone_set("Africa/Nairobi");
		$date1=date_create("$auction");
		$date2=date_create(date("y-m-d"));
		$diff=date_diff($date2,$date1);
	
	
	
	?>
<div class = "childpane">
<div class = "displayanimal2">	
			<table  width = "100%">
				<tr>
					<td>
					<img src="<?php echo $imageURL; ?>" width ="100%" height = "225" alt = "No Picture"/>
						<div class = "displayanimal2_tab">
							<a href = "order.php?cid=<?php echo $cid; ?>">Click to bid now</a> 
						</div>				
			</td><td>
					<h3>Opening Bid in Kshs.&nbsp;<?php echo $data['price']; ?></h3>					
					<h4>Location:&nbsp;<?php echo $data['location']; ?></h4>	
					<p>&nbsp;<?php echo $data['category']; ?></p>
					<p>Age:&nbsp;<?php echo $data['age']; ?>&nbsp;Months</p>
					<p>Weight:&nbsp;<?php echo $data['weight']; ?>&nbsp;Kgs</p>
					<p>Posted On:&nbsp;<?php echo $data['Created_On']; ?></p>
					<p>Bidding Closes:&nbsp;<?php echo $auction; ?></p>					
					<h5>Bidding to close in &nbsp;<?php echo $diff->format("%R%a days");?> </h5>
				<div class = "displayanimal2_tab">
					<a href = "dealer.php?cid=<?php echo $cid; ?>">For more information, Contact Dealer</a> 
				</div>
				</td>
			</tr>
		</table>
		</div>
<div class = "displayanimal2_extra">
<p>The highest becomes the buyer of a particular livestock and the buyer and the seller are expected to hold conversation over the provided medium. The winner of the bid pays transport cost. </p>
	</div>	
</div>
	</body>
</html>
