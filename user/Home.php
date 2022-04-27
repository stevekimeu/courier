<?php
require_once('../admin/database.php');
require_once('../admin/library.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Livestock Markets</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="http://localhost/courier/images/log.png" type="image/icon type">

<link href = "../css/central.css" type = "text/css" rel = "stylesheet" /> 
<link href = "../css/admin.css" type = "text/css" rel = "stylesheet" /> 
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<script src="https://kit.fontawesome.com/4cb2645454.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
 <div class = "container">
	<div class = "navlayer6">
	<div class="left">
	<a href = "https://www.facebook.com" class="fa fa-facebook icon-border facebook"></a> 
	<a href = "https://twitter.com" class="fa fa-twitter icon-border twitter"></a>  
	<a href="https://plus.google.com/u/0/"class="fa fa-google-plus icon-border googleplus"></a> 
	
</div>
	<div class="right">	
		<a href="mailto:info@example.com" ><i class="fa fa-envelope" aria-hidden="true" ></i>&nbsp;&nbsp;<u>admin@livestockmarkets.com</u></a>
		<a href = "#" style="color:black; cursor:default;"><i class="fa fa-phone" aria-hidden="true" >&nbsp;&nbsp;0711648268</i></a> 	
	    <a href="user_login.php">Login</a>
		<a href="signup.php">Register</a>
	  </div>
</div>
  <div class = "searchnav">
	<form name = "search" action = "search.php" method = "POST">
		<table width = "100%">
		<td>
			<a href = "Home.php"> <img src="../images/logos.png" height="70" width="450"></a> 
		</td>
		<td align "right" >  Quick Search Bar &nbsp; <input type="text" name = "search" placeholder="Search for Livestock" >&nbsp;<input name = "submit" type="submit" Value="Search" >
		</td>
		</table>
	</form>
	</div>
	
	<div class="topnav">
		<div class="left">
		<a href="shop_animals.php">Buy Livestock</a>
	  	<a href="sell_livestock.php">Sell your Livestock</a>
	   	<a href="auctionresults.php">Auction Results</a>
	  </div>
	</div>
	
<div class = "centered">
	<div class="tab">
	  <button class="tablinks" onclick="openCity(event, 'DairyLivestock')" id="defaultOpen" >Dairy Cattle</button>
	  <button class="tablinks" onclick="openCity(event, 'BeefLivestock')">Beef Cattle</button>
	  <button class="tablinks" onclick="openCity(event, 'Goats')" >Goats</button>	  
	  <button class="tablinks" onclick="openCity(event, 'Sheep')">Sheep</button>
	  <button class="tablinks" onclick="openCity(event, 'Donkeys')">Donkeys</button>
	  <button class="tablinks" onclick="openCity(event, 'Carmels')">Carmels</button>
	  <button class="tablinks" onclick="openCity(event, 'Swine')">Swine</button>
	  <button class="tablinks" onclick="openCity(event, 'Pets')">Pets</button>
	</div>


<div id="DairyLivestock" class="tabcontent">
   <?php $query = $dbConn->query("SELECT * FROM tbl_courier WHERE category = 'Dairy Cattle'"); ?>
   <?php include ("display_home.php");?>
</div>

<div id="BeefLivestock" class="tabcontent">
	<?php $query = $dbConn->query("SELECT * FROM tbl_courier WHERE category = 'Beef Cattle'"); ?>
	<?php include ("display_home.php");?>
</div>

<div id="Goats" class="tabcontent">
	<?php $query = $dbConn->query("SELECT * FROM tbl_courier WHERE category = 'Goats'"); ?>
	<?php include ("display_home.php");?>
</div>
<div id="Sheep" class="tabcontent">
	<?php $query = $dbConn->query("SELECT * FROM tbl_courier WHERE category = 'Sheep'"); ?>
	<?php include ("display_home.php");?>
</div>
<div id="Donkeys" class="tabcontent">
	<?php $query = $dbConn->query("SELECT * FROM tbl_courier WHERE category = 'Donkeys'"); ?>
	<?php include ("display_home.php");?>
</div>
<div id="Carmels" class="tabcontent">
	<?php $query = $dbConn->query("SELECT * FROM tbl_courier WHERE category = 'Carmels'"); ?>
	<?php include ("display_home.php");?>
</div>
<div id="Swine" class="tabcontent">
	<?php $query = $dbConn->query("SELECT * FROM tbl_courier WHERE category = 'Swine'"); ?>
	<?php include ("display_home.php");?> 
</div>
<div id="Pets" class="tabcontent">
	<?php $query = $dbConn->query("SELECT * FROM tbl_courier WHERE category = 'Pets'"); ?>
	<?php include ("display_home.php");?>
</div>

				<script>
				function openCity(evt, cityName) {
				  var i, tabcontent, tablinks;
				  tabcontent = document.getElementsByClassName("tabcontent");
				  for (i = 0; i < tabcontent.length; i++) {
					tabcontent[i].style.display = "none";
				  }
				  tablinks = document.getElementsByClassName("tablinks");
				  for (i = 0; i < tablinks.length; i++) {
					tablinks[i].className = tablinks[i].className.replace(" active", "");
				  }
				  document.getElementById(cityName).style.display = "block";
				  evt.currentTarget.className += " active";
				}
				// Get the element with id="defaultOpen" and click on it
				document.getElementById("defaultOpen").click();
				</script>			
					
			</div>
			<?php
include("contact_home.php");
?>
		</div>
	  </div>
	</body>
</html>
