<?php
include("master.php");
require_once('../admin/database.php');

$id = '';
if(isset( $_GET['cid'])) 
	{
		$id = $_GET['cid'];
	} 
else {
	?>
	<div class = "innercontainer">
		<div class = "childpane">
			<div class = "wrapper_edit1">
	<?php
	//if the number of days remaining is less than or equal to one, show the bidders
		echo 'Record not found.';
	?>
		</div>
	</div>
</div>
	<?php
 } 
$auction_date_sql = mysqli_query($dbConn, "SELECT * FROM tbl_order WHERE id = '$id'");//This line enables comparing auction date with current date and get the difference
$sql = "SELECT fullname, phonenumber, region, email FROM tbl_offices WHERE email = (SELECT username FROM tbl_order WHERE id = '$id')";		

$result = mysqli_query($dbConn, $sql);

$data = mysqli_fetch_array($result);  
$auction_date = mysqli_fetch_array($auction_date_sql);//Fetch data from the tbl_order where id == $id

$num_rows = mysqli_num_rows($result);
if($num_rows>0){
		$auction = $auction_date['auction'];
		date_default_timezone_set("Africa/Nairobi");
		$date1=date_create("$auction");
		$date2=date_create(date("y-m-d"));
		$diff=date_diff($date2, $date1);
		
		$num_days = $diff->format('%R%a');
		
	if($num_days<0){
	?>
	<div class = "innercontainer">
	<div class = "childpane">
		<div class = "wrapper_edit1">
			<p>Buyer Contact information</p>
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
		<div class = "innercontainer">
	<div class = "childpane">
		<div class = "wrapper_edit">	
		<?php
	echo'Bidder information will appear on the auction date. The auction date is on:  ', $auction,',   ', $num_days, '  ', 'Days Remaining Now';
		}
		?>
		</div>
		<?php } 
		
		else { ?>
		<div class = "innercontainer">
	<div class = "childpane">
		<div class = "wrapper_edit">
			<?php
				echo 'Such record does not exist';
			?>
		</div>
	</div>
		</div>
	<?php } ?>