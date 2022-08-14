<?php 
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
		$Description = $row['description'];
		
		
		date_default_timezone_set("Africa/Nairobi");
		$date1=date_create("$auction");
		$date2=date_create(date("y-m-d"));
		$diff=date_diff($date2,$date1);
?>
<div class = "displayanimal">		
	<table >
		<tr>
			<td align = "center" color = "green">
					<img src="<?php echo $imageURL; ?>" width ="80%" height = "192" alt = "No Picture"/>
					<h3>Opening Bid: Kshs.&nbsp;<?php echo number_format($price,2); ?></h3>					
					<h4>&nbsp;<?php echo $location; ?></h4>	
					<p>&nbsp;<?php echo $category.", ".$Description ; ?></p>
					<p>Posted On:&nbsp;<?php echo $posted; ?></p>					
					<h4>Bidding to close in:<?php echo $diff->format("%R%a days");?> <?php echo ", On ".$auction;?></h4>					
					<p>Age:&nbsp;<?php echo $age; ?>&nbsp;Months</p>
					<p>Weight:&nbsp;<?php echo $weight; ?>&nbsp;Kgs</p>
					<div class = "displayanimal_tab">			
					<a href = "order.php?cid=<?php echo $cid; ?>">Place your bid </a>
					</div> 
								
			</td>
		</tr>
	</table>	
</div>
<?php }
}

else{  ?>
    <p>Livestock not found...</p>
<?php }
// Display status message

?>