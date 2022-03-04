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
<link rel="icon" href="http://localhost/mulling_logo.jpg" type="image/icon type">
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
			<a href = "Home.php"> <img src="../images/mulling_logo1.png" height="60" width="550"></a> 
		</td>
		<td align "right" >  Quick Search Bar &nbsp; <input type="text" name = "search" placeholder="Search Animal(s)"  >&nbsp;<input name = "submit" type="submit" Value="Search" >
		</td>
		</table>
	</form>
	</div>
	<div class="navlayer4">
	<div class = "left">
	<a href = "#">You are logged in as:&nbsp;<i><?php echo $loggedin;} }?></i></a>
	
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
		  <a href="shop_animals.php">Shop for Animal(s)</a>
		  <a href="sell_livestock.php">Sell your Animal(s)</a>		  
		  <a href="auctionresults.php">Auction Results</a>		  
		<div class="dropdown">
			<button class="dropbtn">My Markets </button>
			<div class="dropdown-content">
				<a href="myposting.php">My Livestock On Sale</a>
				  <a href="bids.php">My Livestock Buyers</a>
				  <a href="mybids.php">My Bids</a>				  
			</div>
		</div>	  
		</td>
	</tr>
</table>
	  </div>
	 
	
	</div>
</div>

</body>
</html>