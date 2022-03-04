<?php
session_start();
require_once('database.php');
require_once('library.php');

isUser();

$sql = "SELECT *
		FROM tbl_courier_officers";
$result = dbQuery($sql);		

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>Admin</title>
	<link href="../css/admin.css" rel="stylesheet" type="text/css">
	<link href="../css/central.css" rel="stylesheet" type="text/css">
	<script src="https://kit.fontawesome.com/4cb2645454.js" crossorigin="anonymous"></script>	
	<link rel="icon" href="http://localhost/mulling_logo.jpg" type="image/icon type">
	<link href="../css/topcss.css" rel="stylesheet" type="text/css">
</head>
<body>
 <div class = "outerlayer">
		<?php include("user_management.php"); ?>
			<div class = "affliatelayer">	
			<div class = "table_wrapper">
					<p>All Managers</p>
			  
			  <table class="blackbox" border="0" cellpadding="10" cellspacing="2" align="center" width="100%">
				<tbody><tr class="BoldRED" bgcolor="#FFFFFF" style="height:20px;">
				  <td class="newtext" bgcolor="#EDEDED" width="20%">Manager Name </td>
				  <td class="newtext" bgcolor="#EDEDED" width="20%">Address</td>
				  <td class="newtext" bgcolor="#EDEDED" width="20%">Email</td>
				  <td class="newtext" bgcolor="#EDEDED" width="15%">Phone Numner</td>
				  <td class="newtext" bgcolor="#EDEDED" width="25%">Region</td>
				
				</tr>
				<?php
				
				while($data = dbFetchAssoc($result)){
				extract($data);	
				?>
				  <tr onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF" style="height:20px;">
				
				  <td class="gentxt"><?php echo $manager_name; ?></td>
				  <td class="gentxt"><?php echo $address; ?></td>
				  <td class="gentxt"><?php echo $email; ?></td>
				  <td class="gentxt"><?php echo $phonenumber; ?></td>
				  <td class="gentxt"><?php echo $region; ?></td>
				  <td class="gentxt"><a href = "delete_manager.php?cid=<?php echo $cid; ?>">Remove manager</a></td>
				  
				</tr>
				<?php
				}//while
				?>
					  </tbody>
					 </table>
				</div>					 
				</div>
			</div>
		</body>
	</html>