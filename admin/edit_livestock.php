<?php
session_start();
require_once('database.php');
$cid = ''; 
if( isset( $_GET['cid'])) {
    $cid = $_GET['cid']; 
} 
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
	<title>Edit Livestock</title>
	<link href="../css/admin.css" rel="stylesheet" type="text/css">
	<link href="../css/central.css" rel="stylesheet" type="text/css">
	<script src="https://kit.fontawesome.com/4cb2645454.js" crossorigin="anonymous"></script>	
	<link rel="icon" href="http://localhost/mulling_logo.jpg" type="image/icon type">
	
	</head>
	<body>
<div class = "outerlayer">

	<?php include("top.php"); ?>
			
	
	<div class = "affliatelayer">
		<div class = "wrapper1">

			<?php
				if(isset($_POST['submit']))
				{
					$cid = $_REQUEST['cid'];
					$Category = $_REQUEST['Category'];
					$Age = $_REQUEST['Age'];
					$Weight	=$_POST['Weight'];
					$Location	=$_POST['Location'];
					$Sex =$_POST['Sex'];
					$AuctionDate =$_POST['AuctionDate'];
					$Description	=$_POST['Description'];
					$Price	=$_POST['Price'];
					$Picture =$_POST['Picture'];
					$PaymentMethod =$_POST['PaymentMethod'];
					
					$update= mysqli_query($dbConn, "update tbl_courier set category = '$Category', age= '$Age', weight ='$Weight', location ='$Location', sex ='$Sex', auction_date ='$AuctionDate', description ='$Description', price ='$Price', picture ='$Picture', paymentmethod ='$PaymentMethod' where cid = '$cid'"); 

				   if($update)
					{
						
						echo 'Record Updated';
						
						//header("location: delivered-list.php"); // redirects to delivered page
						exit;
					}
				else 
					{
						echo 'errors Occured';
					}
				}
		?>
		 <form name="form" method="POST" action="">
			
						<p>Edit Livestock </p>
<table>	
	<tr>
		<td>
<div class="form-group">	
	<label>Animal Category :</label>             
			<select id="Category" name="Category" maxlength="100" class = "form-control1" >
			<option value="Dairy Cattle" >Dairy Cattle</option>
			<option value="Beef Cattle">Beef Cattle</option>
			<option value="<?php echo $data['category'];?>" selected="selected">Goats</option>
			<option value="Donkeys">Donkeys</option>
			<option value="Carmels">Carmels</option>
		</select>			
</div>
</td><td>	
<div class="form-group">			
		<label>Age of the Animal: </label>            
			<input name="Age" id="Age" class = "form-control1" type="TEXT"  value="<?php echo $data['age'];?>" />&nbsp;Months
			
</div>
</td></tr>
<tr><td>
  <div class="form-group">
			<label>Brief Description of the Animal : </label>
			
			<textarea type="TEXT" name="Description" cols = "45" rows = "3" placeholder="may be the color of the animal, etc"  value="<?php echo $data['Description'];?>" /></textarea>
</div>
</td><td>
<div class="form-group">
			<label>Animal Approx Weight : </label>
			
			<input name="Weight" id="Weight" class = "form-control1" type="TEXT" value="<?php echo $data['weight'];?>" />&nbsp;Kgs</p>
</div>		
</td></tr>
<tr><td>		
	<div class="form-group">
			<label>Price of the Animal : </label>
			
			<input name="Price" id="Price" class = "form-control1" type="TEXT"  value="<?php echo $data['price'];?>" />
		
</div>	
</td><td>		
	<div class="form-group">
			<label>Animal Location/contstituency/ward: </label>
			
			<textarea type="TEXT" cols = "45" rows = "3" name="Location" placeholder="state the county,	constituency and ward"  value="<?php echo $data['location'];?>" /></textarea>
</div>
</td></tr>
<tr><td>
	<div class="form-group">
			<label>Sex of the Animal:</label>
			
			<select id="Sex" name="Sex" width = "50" class = "form-control1" >
                <option value="Female" selected="selected"><?php echo $data['sex'];?></option>
                <option value="Male">Male</option>
                <option value="Both">Both</option>
			</select>
</div>
</td><td>		
	<div class="form-group">
			<label>Preferred Method of Payment :</label>
			<select name="PaymentMethod" id="PaymentMethod" class = "form-control1">
                <option selected="selected" value="Cash"><?php echo $data['paymentmethod'];?></option>
                <option value="Bank">Bank</option>
                <option value="Mpesa">M-pesa</option>
            </select>	
	  
	</div> 
</td></tr>	
<tr><td>
	 <div class="form-group">
		<label>  Auction Date  :</label>
		  
		  <input type="text" name="AuctionDate" class = "form-control1" placeholder="Enter Name"  value="<?php echo $data['auction_date'];?>" />
</div> 
</td><td> 		  
	<div class="form-group">
		  <label>Picture Upload :</label>
		  		  
		  <input type="file" name="Picture" class = "form-control1"  value="<?php echo $data['picture'];?>" />
		  
</div>
</td></tr>
<tr >
	<td width = "200%">
		  <input name="submit" type="submit" value="Update" />
		</td></tr>
		  
	 </form>   
 

</div>
</div>
</div>
	</body>
</html>
