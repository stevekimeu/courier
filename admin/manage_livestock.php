<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();

$sql = "SELECT cid, category, age, weight, location,sex, auction_date, price, picture
		FROM tbl_courier
		
		ORDER BY cid DESC 
		LIMIT 0, 50";
$result = dbQuery($sql);		

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
			<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
			<title>Manage Livestock</title>
			<link href="../css/topcss.css" rel="stylesheet" type="text/css">
			<link href="../css/admin.css" rel="stylesheet" type="text/css">			
			<script src="https://kit.fontawesome.com/4cb2645454.js" crossorigin="anonymous"></script>
			<link href="../css/central.css" rel="stylesheet" type="text/css">
			
			<link rel="icon" href="http://localhost/mulling_logo.jpg" type="image/icon type">
	</head>
<body>
<div class = "outerlayer">

				<?php include("livestock_management.php"); ?>				
		<div class = "affliatelayer">
		<div class = "table_wrapper">
		<p>Manage Livestock</p>
			<table  cellpadding="10" cellspacing="2">
				<tbody>
					<tr class="BoldRED" bgcolor="#FFFFFF" style="height:20px;">					  
					  <td class="newtext" bgcolor="#EDEDED" width="10%">Animal Category </td>
					  <td class="newtext" bgcolor="#EDEDED" width="7%">Animal Age</td>
					  <td class="newtext" bgcolor="#EDEDED" width="11%">Aproximate Weight</td>
					  <td class="newtext" bgcolor="#EDEDED" width="11%">Location</td>
					  <td class="newtext" bgcolor="#EDEDED" width="9%">Sex</td>
					  <td class="newtext" bgcolor="#EDEDED" width="6%"><div align="center">Auction Date	</div></td>
					  <td class="newtext" bgcolor="#EDEDED" width="9%">Price</td>
					  <td class="newtext" bgcolor="#EDEDED" width="9%">Picture</td>
					  <td class="newtext" bgcolor="#EDEDED" width="6%"><div align="center">Edit Record	</div></td>
					  <td class="newtext" bgcolor="#EDEDED" width="9%">Delete Record</td>
					</tr>					
							<?php					
							while($data = dbFetchAssoc($result)){
							extract($data);	 
							$imageURL = 'uploads/'.$data["picture"];
							?>
					  <tr onMouseOver="this.bgColor='lightgreen';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF">					  
					  <td><?php echo $data['category']; ?></td>
					  <td><?php echo $data['age']; ?></td>
					  <td><?php echo $data['weight']; ?></td>
					  <td><?php echo $data['location']; ?> </td>
					   <td><?php echo $data['sex']; ?></td>
					  <td><?php echo $data['auction_date']; ?></td>
					  <td><?php echo $data['price']; ?> </td>					  
					  <td><img src="<?php echo $imageURL; ?>" width ="100%" height = "240" alt = "No Picture"/> </td>
					  <td align="center"> <a href="edit_livestock.php?cid=<?php echo $data['cid']; ?>">Update</a> </td>
					  <td><a href = "delete.php?cid=<?php echo $data['cid']; ?>">Remove</a> </td>
					</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>
		</div>
	 </body> 
 </html>