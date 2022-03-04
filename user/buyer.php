<?php
include("master.php");
require_once('../admin/database.php');

$id = '';
if(isset( $_GET['cid'])) 
{
    $id = $_GET['cid'];
} 

$sql1 = "SELECT * FROM tbl_courier WHERE cid = (SELECT cid FROM tbl_order WHERE id = '$id')";

$sql = "SELECT fullname, phonenumber, region, email FROM tbl_offices WHERE email = (SELECT username FROM tbl_order WHERE id = '$id')";		

$result = mysqli_query($dbConn, $sql);

$result1 = mysqli_query($dbConn, $sql1);

$data = mysqli_fetch_array($result); //fetch data


$data1 = mysqli_fetch_array($result1); //fetch data

//if the number of days remaining is less than or equal to five, show the bidders

		$auction = $data1['auction_date'];
		date_default_timezone_set("Africa/Nairobi");
		$date1=date_create("$auction");
		$date2=date_create(date("y-m-d"));
		$diff=date_diff($date2,$date1);
		
		$minidate = $diff->format('%a');
		
		if($minidate<1){
?>
	<div class = "childpane">
		<div class = "wrapper_edit1">
			<p>Bidder Contact information</p>
			<table>
		<tr>
			<td >						
					<h4>Bidder Name:&nbsp;<?php echo $data['fullname']; ?></h4>					
					<h4>Location:&nbsp;<?php echo $data['region']; ?></h4>
					<h4>Bidder Phone Number:&nbsp;+254<?php echo $data['phonenumber']; ?></h4>
					<h4>Bidder Email Address:&nbsp;<?php echo $data['email']; ?></h4>
			</td>
		</tr>
	</table>
	</div>
</div>	
		<?php
		}
		else {
		?>
	<div class = "childpane">
		<div class = "wrapper_edit">	
		<?php
			
	echo'Bidder information will appear on the auction date. The auction date is on:  ', $auction,',   ', $minidate, '  ', 'Days Remaining Now';
		}
		?>
		</div>
	</div>
