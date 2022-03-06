<?php
require_once('../admin/database.php');
require_once('../admin/library.php');

$cid =  $_GET['cid']; 

$sql = mysqli_query($dbConn,"select * from tbl_courier where cid='$cid'"); // select query

$data = mysqli_fetch_array($sql); // fetch data

//$sql = "SELECT * FROM tbl_courier WHERE cid = '$id'";

//$result = dbQuery($sql);		

/**while($data = dbFetchAssoc($result)) {
extract($data);**/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<title>Bidding</title>
		<link href="../css/admin.css" rel="stylesheet" type="text/css">
		<link href="../css/central.css" rel="stylesheet" type="text/css">
		<script src="https://kit.fontawesome.com/4cb2645454.js" crossorigin="anonymous"></script>	
		<link rel="icon" href="http://localhost/mulling_logo.jpg" type="image/icon type">
	</head>
<body>
<?php include("master.php"); ?>	
		<div class = "wrapper1">
			<?php
				if(isset($_POST['submit']))
				{
					$Category = $_REQUEST['Category'];
					$Number = $_REQUEST['Number'];
					$Date	=$_POST['Date'];
					$Price	=$_POST['Price'];
					$Bid =$_POST['bid'];
					$Comments =$_POST['comments'];
					$username = $_SESSION['username'];
					$dealer = $data['postedby'];
					
					$insert = mysqli_query($dbConn, "INSERT INTO tbl_order (cid, category, auction, price, bid, comments, username,dealer) 
							VALUES( '$Number', '$Category', '$Date', '$Price', '$Bid', '$Comments', '$username','$dealer')");

				   if($insert)
					{
						
						echo 'Your bid has been submitted successfully!';						
						exit;
					}
				else 
					{
						echo 'errors Occured', mysqli_error($dbConn);
					}
				}
		?>
		 <form name="form" method="POST" action="">	
		 <fieldset>
		<legend>Tender your Bid</legend> 
		<table  width = "100%">
			<tr>
				<td>
		<div class="form-group">	
			<label>Animal Category :</label><br>
		<input name="Category" id="Category" class = "form-control1" type="TEXT"  readonly value = "<?php echo $data['category'];?>" />				
		</div>	
		</td><td >
			<div class="form-group">			
					<label>Animal Number: </label> <br>           
						<input name="Number" id="Number" class = "form-control1" type="TEXT" readonly value="<?php echo $data['cid'];?>" />			
			</div>
		</td></tr>
		<tr><td>
		  <div class="form-group">
					<label>Farmer Quoted Price: </label><br><br>	
					<input name="Price" id="Price" class = "form-control1" type="TEXT"  readonly value="<?php echo $data['price'];?>" />
		</div>
		</td><td>
		<div class="form-group">
					<label>Date of Auction: </label><br><br>			
					<input name="Date" id="Date" class = "form-control1" type="date" readonly value="<?php echo $data['auction_date'];?>" />
		</div>		
		</td></tr>
		<tr><td>		
			<div class="form-group">
					<label>Quote your Price</label><br><br>
					<input type="TEXT" class = "form-control1" name="bid" required>
			</div>
				</td><td>
			<div class="form-group">
					<label>Please give more specifications</label><br><br>		
					<textarea  name="comments" id="comments" cols = "50" rows= "3" required>	</textarea>
			</div>
			</td></tr>
			<tr><td colspan = "2">
			<div class="form-group">
				  <input name="submit" type="submit" value="Submit your  Bid" />
			</div>
			</td></tr>
		</table>
			</fieldset>		  
	 </form>   
 

</div>
</div>
	</body>
</html>
