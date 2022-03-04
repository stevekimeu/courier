
<?php 
	include("master.php");
	$username = $_SESSION['username'];	
	
require_once('../admin/database.php');
require_once('../admin/library.php');

$query = $dbConn->query("SELECT tbl_courier.picture, tbl_courier.price, tbl_courier.postedby, tbl_order.username, tbl_order.bid
							FROM tbl_courier
							INNER JOIN tbl_order ON tbl_courier.cid = tbl_order.cid");
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["picture"];
		$Price = $row["price"];
		$Bid = $row["bid"];
		$Username = $row["username"];
?>
<div class = "childpane">
<div class = "displayanimal">		
	<table width = "100%">
		<tr>
			<td align = "center" color = "green">
					<img src="<?php echo $imageURL;?>" width ="100%" height = "240" alt = "No Picture"/>
					<p>Kshs.&nbsp;<?php echo $Price;?></p>										
					<p>Bidders:&nbsp;<?php echo $Username;?></p>
					<p>Postedby:&nbsp;<?php echo $username;?></p>
					<p>The Bidders Quote Kshs.&nbsp;<?php echo $Bid; ?></p>	
			<div class = "displayanimal_tab">
					<a href = "#">Tender your Bid</a> 
			</div>					
			</td>
		</tr>
	</table>	
</div>
<?php }

} else{
	?>
	<p>No Images</P>
<?php
}
?>

</div>
</body>
</html>