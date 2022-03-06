
<?php 
	include("master.php");
	$username = $_SESSION['username'];
	
require_once('../admin/database.php');
require_once('../admin/library.php');
$cid = '';
$query = $dbConn->query("SELECT * FROM tbl_courier WHERE postedby = '$username' ORDER BY category ASC");
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["picture"];
		$category = $row["category"];
		$age = $row["age"];
		$weight = $row["weight"];
		$location = $row["location"];
		$price = $row["price"];
		$auction = $row["auction_date"];
		$posted = $row["Created_On"];
		$cid = $row["cid"];
		
	date_default_timezone_set("Africa/Nairobi");
	$date1=date_create("$auction");
	$date2=date_create(date("y-m-d"));
	$diff=date_diff($date2,$date1);
	
		
?>
<div class = "childpane">
<div class = "displayanimal">		
	<table width = "100%">
		<tr>
			<td align = "center" color = "green">
					<img src="<?php echo $imageURL; ?>" width ="80%" height = "192" alt = "No Picture"/>
					<h1>Kshs.&nbsp;<?php echo $price; ?></h1>					
					<h2>&nbsp;<?php echo $location; ?></h2>	
					<p>Posted On:&nbsp;<?php echo $posted; ?></p>
					<p>Date of Auction:&nbsp;<?php echo $auction; ?></p>
					<h3><?php echo $diff->format("%R%a days");?> Remaining</h3>	
					<a href = "delete_post.php?cid=<?php echo $cid; ?>"><h3>Delete Post</h3></a>
	<div class = "displayanimal_tab">
			<a href = "edit.php?cid=<?php echo $cid; ?>">Edit your Post</a>
		</div>
	
							
					
			</td>
		</tr>
	</table>	
</div>
</div>

		<?php }
		}else{ ?>
			<p>You have no Livestock on sale, Click on 'sell your Animal' to add a livestock</p>
		<?php }
		// Display status message

		?>
	
</body>
</html>