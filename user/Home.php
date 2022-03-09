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
</head>

<body>
 <div class = "container">
	<div class = "navlayer6">
	<div class="left">
	<a href = "#"> <img src="../images/fb.png" height="30" width="25">&nbsp;&nbsp;Facebook</a> 
	<a href = "#"><img src="../images/tt.png" height="30" width="25">&nbsp;&nbsp;Twitter</a>  
</div>
	<div class="right">		
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
		<a href="shop_animals.php">Bid an Animal</a>
	  	<a href="sell_livestock.php">Auction Animal</a>
		<a href="#breeding">Breeding Systems</a>
	  	<a href="#news">Weekly Updates</a>
	   	<a href="auctionresults.php">Results</a>
	  </div>
	
	<div class="right">	
		<a href="contact_form.php">Contact Us</a>
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
		</div>
	  </div>
	</body>
</html>
