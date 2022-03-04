<?php
include("master.php");
require_once('../admin/database.php');
require_once('../admin/library.php');

$sql = "SELECT * FROM tbl_order WHERE username = '$username'";

$result = dbQuery($sql);	

?>

<div class = "displayanimalpane">	
   <p>My Bids</p>  
  <table cellpadding="10" cellspacing="2" width = "100%" >
    <tr bgcolor="#FFFFFF" style="height:20px;" >  
		  <td style="font-weight:bold">Category</td>
		  <td style="font-weight:bold">Opening Bid</td>
		  <td style="font-weight:bold">My Quotation</td>
		  <td style="font-weight:bold">My Comments</td>
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
		   <td class="gentxt"><?php echo $data['price']; ?></td>
		   <td class="gentxt"><?php echo $data['bid']; ?></td>
		   <td class="gentxt"><?php echo $data['comments']; ?></td>
		   <td class="gentxt"><?php echo $data['order_date']; ?></td>
		   <td><a href = "edit_bid.php?cid=<?php echo $data['id']; ?>">Edit Bid</a></td>
		</tr>
    <?php
	}//while
	
?>
</div>


