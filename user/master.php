<?php
session_start();
$username = $_SESSION['username'];
require_once('../admin/database.php');
if(!isset($_SESSION['username'])){	
		header('Location: user_login.php');
	}
if (isset($_SESSION["LAST_ACTIVITY"])) {
		if (time() - $_SESSION["LAST_ACTIVITY"] > 1800) {
			// last request was more than 30 minutes ago
			session_unset();     // unset $_SESSION variable for the run-time 
			session_destroy();   // destroy session data in storage
		} else if (time() - $_SESSION["LAST_ACTIVITY"] > 60) {
			$_SESSION["LAST_ACTIVITY"] = time(); // update last activity time stamp
		}
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
<link href = "../css/mobile.css" type = "text/css" rel = "stylesheet" />
<script src="https://kit.fontawesome.com/4cb2645454.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
		<a href="user_message.php">Notification</a>
		<a href="contact_form.php">Contact Us</a>
		<a href="logout.php">Logout</a>
	  </div>
	</div>
	<div class="navlayer3" id="top">
<table width = "100%">
	<tr>
		<td width ="100%" align = "center">	
		  <a href="shop_animals.php">Bid Livestock</a>
		  <a href="sell_livestock.php">Add Livestock</a>		  
		  <a href="myposting.php">Edit Livestock Details</a>
		  <a href="bids.php">My Livestock Bidders</a>
		  <a href="mybids.php">My Bids on Others</a>			  
		  <a href="auctionresults.php">Results</a>
		  <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i>			  
				  
		</td>
	</tr>
</table>
	  </div>
	 
	
	</div>
</div>
<script>
function myFunction() {
  var x = document.getElementById("top");
  if (x.className === "navlayer3") {
    x.className += " responsive";
  } else {
    x.className = "navlayer3";
  }
}
</script>

</body>
</html>

</body>
</html>