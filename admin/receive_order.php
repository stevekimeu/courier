<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();

$sql = "SELECT id, cid, category, price, auction, bid, comments,order_date,username
		FROM tbl_order
		
		ORDER BY cid DESC ";
$result = dbQuery($sql);	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard| Orders</title>
			<link href="../css/topcss.css" rel="stylesheet" type="text/css">
			<link href="../css/admin.css" rel="stylesheet" type="text/css">			
			<link href="../css/central.css" rel="stylesheet" type="text/css">			
			<link rel="icon" href="http://localhost/mulling_logo.jpg" type="image/icon type">
			<script src="https://kit.fontawesome.com/4cb2645454.js" crossorigin="anonymous"></script>

</head>

<body>
<div class = "outerlayer">

				<?php include("briefs.php"); ?>
				<div class = "affliatelayer">
				<div class = "table_wrapper">
				<p>Orders</p>
			<form action="" method="post">
			<table border="0" cellpadding="8" cellspacing="1" align="center">
				<tbody>
					<tr class="BoldRED" bgcolor="#FFFFFF" height = "20px">	
					  <td class="newtext" bgcolor="#EDEDED" width="10%">Category</td>
					  <td class="newtext" bgcolor="#EDEDED" width="10%">Opening Bid</td>
					  <td class="newtext" bgcolor="#EDEDED" width="10%">Bid Amount</td>
					  <td class="newtext" bgcolor="#EDEDED" width="10%">Aution Date</td>
					  <td class="newtext" bgcolor="#EDEDED" width="20%">Bidder Comments</td>					  
					  <td class="newtext" bgcolor="#EDEDED" width="10%">Bid Placed On</td>
					  <td class="newtext" bgcolor="#EDEDED" width="10%">Bidder Email</td>
					  <td class="newtext" bgcolor="#EDEDED" width="8%">Contact Bidder</td>
					</tr>					
							<?php					
							while($data = dbFetchAssoc($result)){
							extract($data);	 
							?>
					  <tr onMouseOver="this.bgColor='lightgreen';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF">					  
					  <td><?php echo $data['category']; ?></td>
					  <td><?php echo $data['price']; ?></td>
					  <td><?php echo $data['bid']; ?></td>
					  <td><?php echo $data['auction']; ?> </td>					  
					  <td><?php echo $data['comments']; ?> </td>
					  <td><?php echo $data['order_date']; ?> </td>
					  <td><?php echo $data['username']; ?> </td>
					  <td><a href = "admin_message.php?id=<?php echo $data['id'];?>">Send message</a> </td>
					</tr>
				</form>
			
							<?php
									}
							?>
						</div>
					</div>
				</div>
			</body>
</html>
