
<?php 
	include("master.php");
	
require_once('../admin/database.php');
require_once('../admin/library.php');
$cid = '';
$query = $dbConn->query("SELECT * FROM tbl_courier ORDER BY category ASC"); ?>
<div class = "innercontainer">
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
?>

<div class = "childpane">
<div class = "displayanimal">		
	<table width = "100%">
		<tr>
			<td align = "center" color = "green">
					<img src="<?php echo $imageURL; ?>" width ="80%" height = "192" alt = "No Picture"/>
					<h1>Opening Bid: &nbsp; Ksh.&nbsp;<?php echo $price; ?></h1>			
					<h3>&nbsp;<?php echo $category; ?></h3>						
					<h3>&nbsp;<?php echo $location; ?></h3>					
					<p>Bid CLoses On:&nbsp;<?php echo $auction; ?></p>		
			<div class = "displayanimal_tab">
					<a href = "moredetails.php?cid=<?php echo $cid; ?>">More Details</a> 
			</div>					
					
			</td>
		</tr>
	</table>
	
</div>
</div>

<?php }
}else{ ?>
    <p>Livestock of such Category not found...</p>
<?php }
// Display status message

?>