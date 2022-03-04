<?php
require_once('../admin/database.php');
$cid = ''; 
if( isset( $_GET['cid'])) {
    $cid = $_GET['cid']; 
} 
$sql = mysqli_query($dbConn,"select * from tbl_courier where cid='$cid'"); // select query

$data = mysqli_fetch_array($sql); // fetch data


?>

	<?php include("master.php"); ?>
			
	
	<div class = "childpane">
		<div class = "wrapper_edit">

			<?php
				if(isset($_POST['submit']))
				{
					
					$AuctionDate =$_POST['AuctionDate'];
					$Price	=$_POST['Price'];
					
					$update= mysqli_query($dbConn, "update tbl_courier set auction_date ='$AuctionDate', price ='$Price' where cid = '$cid'"); 

				   if($update)
					{
						
						header("location: myposting.php");
						
						//header("location: delivered-list.php"); // redirects to delivered page
						exit;
					}
				else 
					{
						mysqli_close($dbConn);
					}
				}
		?>
		 <form name="form" method="POST" action="">
			
						<p><b>NOTICE!:</b> You can only change the <b>Price</b> of the Livestock and the <b>Date of Auction</b> </p>
<table width = "100%">	
	<tr>
		<td>		
	<div class="form-group">
			<label>Price of the Animal: </label>			
			<input name="Price" id="Price" class = "form-control1" type="TEXT"  value="<?php echo $data['price'];?>" />		
	</div>	
</td><td>
	 <div class="form-group">
			<label>Date of Auction :</label>		  
			<input type="date" name="AuctionDate" class = "form-control1"  value="<?php echo $data['auction_date'];?>" />
	</div>
</td></tr>
<tr>
	<td>
		  <input name="submit" type="submit" value="Edit your Posts" />
		</td></tr>
		  
	 </form>   
 


</div>
</div>
	
