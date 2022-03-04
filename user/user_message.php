<?php
require_once('../admin/database.php');
require_once('../admin/library.php');	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inbox</title>
			<link href="../css/topcss.css" rel="stylesheet" type="text/css">
			<link href="../css/admin.css" rel="stylesheet" type="text/css">			
			<link href="../css/central.css" rel="stylesheet" type="text/css">			
			<link rel="icon" href="http://localhost/mulling_logo.jpg" type="image/icon type">
			<script src="https://kit.fontawesome.com/4cb2645454.js" crossorigin="anonymous"></script>

</head>

<body>

				<?php include("master.php"); 
				
				$username = $_SESSION['username'];
				$sql = "SELECT id, sender, receiver, message
						FROM tbl_messages where receiver = '$username'
						
						ORDER BY id DESC ";
						$result = dbQuery($sql);			
				
				?>
				<div class = "childpane">
				<div class = "wrapper1">
				<p>Inbox</p>
			<form action="" method="post">
			<table border="0" cellpadding="8" cellspacing="1" align="center">
				<tbody>
					<tr class="BoldRED" bgcolor="#FFFFFF" height = "20px">					  
					  <td class="newtext" bgcolor="#EDEDED" width="20%">Message Send by</td>
					  <td class="newtext" bgcolor="#EDEDED" width="60%">Message</td>
					  <td class="newtext" bgcolor="#EDEDED" width="8%">Reply Message</td>
					</tr>					
							<?php					
							while($data = dbFetchAssoc($result)){
							extract($data);	 
							?>
					  <tr onMouseOver="this.bgColor='lightgreen';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF">					  
					  <td ><?php echo $data['sender']; ?></td>
					  <td><?php echo $data['message']; ?></td>
					  <td><a href = "user_reply.php?id=<?php echo $data['id'];?>">Reply message</a> </td>
					</tr>
				</form>
			
							<?php
									}
							?>
						</div>
					</div>
			</body>
</html>
