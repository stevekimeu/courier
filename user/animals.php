<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include("master.php");

$sql = "SELECT cid, category, age, weight, location,sex, auction_date,price
		FROM tbl_courier
		
		ORDER BY cid DESC 
		LIMIT 0, 50";
$result = dbQuery($sql);		

?>
<div class = "innercontainer">
	<div class = "childpane">
		<table >      
		  <td bgcolor="#EDEDED" width="10%">Animal Category </td>
		  <td bgcolor="#EDEDED" width="7%">Animal Age</td>
		  <td bgcolor="#EDEDED" width="11%">Aproximate Weight</td>
		  <td bgcolor="#EDEDED" width="11%">Location</td>
		  <td bgcolor="#EDEDED" width="9%">Sex</td>
		  <td bgcolor="#EDEDED" width="6%"><div align="center">Auction Date	</div></td>
		  <td bgcolor="#EDEDED" width="9%">Price</td>
		  <td bgcolor="#EDEDED" width="9%">Picture</td>
		</tr>
		<?php
		while($data = dbFetchAssoc($result)){
		extract($data);	
		$imageURL = 'uploads/'.$row["picture"];
		?>
		<tr  onMouseOver="this.bgColor='lightgreen';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF">	      
		  <td><?php echo $data['category']; ?></td>
		  <td><?php echo $data['age']; ?></td>
		  <td><?php echo $data['weight']; ?></td>
		  <td><?php echo $data['location']; ?> </td>
		   <td><?php echo $data['sex']; ?></td>
		  <td><?php echo $data['auction_date']; ?></td>
		  <td><?php echo $data['price']; ?> </td>					  
		  <td><img src="<?php echo $imageURL; ?>" width ="100%" height = "240" alt = "No Picture"/></td>
	
			</tr>
		<?php
		}//while
		?>
		  </table>
	</div>
</div>

	
