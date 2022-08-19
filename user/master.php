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
		<td align "right" ><p>  Quick Search  &nbsp; <input type="text" name = "search" placeholder="Search for Livestock"  >&nbsp;<input name = "submit" type="submit" Value="Search" ></p>
		</td>
		</table>
	</form>
	</div>
	<div class="navlayer4">
	<div class = "left">
	<a href="user_message.php">Notification</a>
	</div>
	<div class="right">		
				
		<div class="dropdown">
			<button onclick="myFunction()" class="dropbtn">My Account</i></button>
			<div id="myDropdown" class="dropdown-content">
				<a href="#"><i style="text-transform:uppercase;"><?php echo $loggedin;} }?></i> </a>
				<a href="edit_password.php">Change Password</a>
				<a href="logout.php">Sign Out</a>
			</div>
</div>
	  </div>

	</div>
	<div class="navlayer3" id="top">
<table width = "100%">
	<tr>
		<td width ="100%" align = "center">	
		  <a href="shop_animals.php">Buy Livestock</a>
		  <a href="sell_livestock.php">Sell your Livestock</a>		  
		  <a href="myposting.php">My Livestock on sale</a>
		  <a href="bids.php">My Livestock Buyers</a>
		  <a href="mybids.php">My Bids on Others</a>			  
		  <a href="auctionresults.php">Results</a>
		  <a href="javascript:void(0);" class="icon" onclick="Responsiveness()"><i class="fa fa-bars"></i>			  
				  
		</td>
	</tr>
</table>
	  </div>
	 
	
	</div>
</div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
function Responsiveness() {
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