<?php
session_start();
$username = $_SESSION['username'];
require_once('../admin/database.php');
if(!isset($_SESSION['username'])){	
		header('Location: user_login.php');
	}
$sql = mysqli_query($dbConn,"SELECT fullname FROM tbl_offices WHERE email = '$username'"); // select query
if($sql->num_rows > 0){
    while($row = $sql->fetch_assoc()){        
		$loggedin = $row["fullname"];
?>

<!DOCTYPE html>
<html>
<head>
<title>Livestock Markets</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="http://localhost/courier/images/log.png" type="image/icon type">
<link href = "../css/central.css" type = "text/css" rel = "stylesheet" />
<link href = "../css/topcss.css" type = "text/css" rel = "stylesheet" />
<script src="https://kit.fontawesome.com/4cb2645454.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="config.js"></script>  	
<link href = "../css/admin.css" type = "text/css" rel = "stylesheet" />  
</head>
<body>
<div class = "innercontainer">
	<div class = "windowpane">	
	<div class = "searchnav">
	<form name = "search" action = "search.php" method = "POST">
		<table width = "100%">
		<td>
			<a href = "Home.php"> <img src="../images/logos.png" height="60" width="400"></a> 
		</td>
		<td align "right" >  Quick Search Bar &nbsp; <input type="text" name = "search" placeholder="Search for Livestock"  >&nbsp;<input name = "submit" type="submit" Value="Search" >
		</td>
		</table>
	</form>
	</div>
	<div class="navlayer4">
	<div class = "left">
	<i>Logged in as:&nbsp;<?php echo $loggedin;} }?></i>
	
	</div>
	<div class="right">		
		<a href="user_message.php">Inbox</a>
		<a href="contact_form.php">Contact Us</a>
		<a href="logout.php">Logout</a>
	  </div>
	</div>
	<div class="navlayer3">
<table width = "100%">
	<tr>
		<td width ="100%" align = "center">	
		  <a href="shop_animals.php">Bid Animals</a>
		  <a href="sell_livestock.php">Auction Animal</a>		  
		  <a href="myposting.php">On Sale</a>
		  <a href="bids.php">My Livestock Bidders</a>
		  <a href="mybids.php">Bids on Livestock</a>			  
		  <a href="auctionresults.php">Results</a>			  
				  
		</td>
	</tr>
</table>
	  </div>
	 
	
	</div>
</div>

</body>
</html>