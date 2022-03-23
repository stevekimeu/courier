<?php
include("master.php");
require_once('../admin/database.php');
require_once('../admin/library.php');

$sql = "SELECT category, price, bid, username, id, comments, order_date FROM tbl_order WHERE dealer = (SELECT email FROM tbl_offices WHERE email = '$username')";

$result = dbQuery($sql);	

?>
<div class = "innercontainer">
<div class = "displayanimalpane">	
   <p>My Livestock Bidders</p>  
  <table cellpadding="10" cellspacing="2" width = "100%" >
    <tr bgcolor="#FFFFFF" style="height:20px;" >  
		  <td style="font-weight:bold">Category</td>
		  <td style="font-weight:bold">Opening Bid</td>
		  <td style="font-weight:bold">Bidder Quotation</td>
		  <td style="font-weight:bold">Bidder Comments</td>
		  <td style="font-weight:bold">Bid Date</td>
    </tr>
	<?php
	while($data = dbFetchAssoc($result)){
	extract($data);	
	//$imageURL = 'uploads/'.$data["picture"];
	//$diff = $data['bid'] + $data['price'];
	?>
		<tr onMouseOver="this.bgColor='#FAFAD2';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF">	      
		   <td class="gentxt"><?php echo $data['category']; ?></td>
		   <td class="gentxt"><?php echo number_format($data['price'],2); ?></td>
		   <td class="gentxt"><?php echo number_format($data['bid'],2); ?></td>
		   <td class="gentxt"><?php echo $data['comments']; ?></td>
		   <td class="gentxt"><?php echo $data['order_date']; ?></td>
		   <td><a href = "buyer.php?cid=<?php echo $data['id']; ?>">Contact Dealer</a></td>
		</tr>
    <?php
	}//while
	
?>
</div>


