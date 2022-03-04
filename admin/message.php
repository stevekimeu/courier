<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();

$sql = "SELECT id, name, email, phone, message, sentdate
		FROM messages
		
		ORDER BY id DESC 
		LIMIT 0, 50";
$result = dbQuery($sql);	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard | Messages</title>
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
				<p>User Messages</p>
			<form action="" method="post">
			<table class="blackbox" border="0" cellpadding="10" cellspacing="1" align="center">
				<tbody>
					<tr class="BoldRED" bgcolor="#FFFFFF" height = "20px">					  
					  <td class="newtext" bgcolor="#EDEDED" width="10%">Name </td>
					  <td class="newtext" bgcolor="#EDEDED" width="15%">E-Mail</td>
					  <td class="newtext" bgcolor="#EDEDED" width="10%">Phone Number</td>
					  <td class="newtext" bgcolor="#EDEDED" width="38%">Message</td>
					  <td class="newtext" bgcolor="#EDEDED" width="20%">Sent Time</td>
					  <td class="newtext" bgcolor="#EDEDED" width="8%">Action</td>
					</tr>					
							<?php					
							while($data = dbFetchAssoc($result)){
							extract($data);	 
							?>
					  <tr onMouseOver="this.bgColor='lightgreen';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF">					  
					  <td ><?php echo $data['name']; ?></td>
					  <td><?php echo $data['email']; ?></td>
					  <td><?php echo $data['phone']; ?></td>
					  <td><?php echo $data['message']; ?> </td>					  
					  <td><?php echo $data['sentdate']; ?> </td>
					  <td><a href = "deletemessage.php?id=<?php echo $data['id'];?>">Remove</a> </td>
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
