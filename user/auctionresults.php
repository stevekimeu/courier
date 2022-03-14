<?php 
include("master.php");
include("results.php");
	
require_once('../admin/database.php');
require_once('../admin/library.php');
$cid = '';
$query = $dbConn->query("SELECT * FROM tbl_results ORDER BY category");
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["picture"];
		$Category = $row["category"];
		$Sold = $row["bid"];
		$auction = $row["auction"];
?>
<div class = "childpane">
<div class = "displayanimal">		
	<table width = "100%">
		<tr>
			<td align = "center" color = "green">
					<img src="<?php echo $imageURL; ?>" width ="100%" height = "240" alt = "No Picture"/>
					<h3>&nbsp;<?php echo $Category; ?></h3>
					<h1>Sold at: &nbspKsh.&nbsp;<?php echo $Sold; ?></h1>									
					<p>Auction Closed On:&nbsp;<?php echo $auction; ?></p>	
			</td>
		</tr>
	</table>	
</div>
</div>

<?php }
}else{ ?>
<div class = "childpane">
    <p>There are no auction Results currently, Kindly check in later</p>
</div>
<?php }
// Display status message

?>