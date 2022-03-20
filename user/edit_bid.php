<?php
require_once('../admin/database.php');
$cid = ''; 
if( isset( $_GET['cid'])) {
    $cid = $_GET['cid']; 
} 
$sql = mysqli_query($dbConn,"select * from tbl_order where id='$cid'"); // select query

$data = mysqli_fetch_array($sql); // fetch data


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

	<?php include("master.php"); ?>
			
	<div class = "innercontainer">
	<div class = "childpane">
		<div class = "wrapper_edit">

			<?php
				if(isset($_POST['submit']))
				{
					
					$Comments =$_POST['comments'];
					$Bid	=$_POST['bid'];
					
					$update= mysqli_query($dbConn, "update tbl_order set comments ='$Comments', bid ='$Bid' where id = '$cid'"); 

				   if($update)
					{
						
						header("location: mybids.php");
						
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
			
						<p><b>NOTICE!:</b> You can only change your <b>bid amount</b> and the <b>Comments</b> </p>
<table width = "100%">	
	<tr>
		<td>		
	<div class="form-group">
			<label>My Quotation: </label>			
			<input name="bid" id="bid" class = "form-control1" type="TEXT"  value="<?php echo $data['bid'];?>" />		
	</div>	
</td><td>
	 <div class="form-group">
			<label>My Comments:</label>		  
			<input type="text" name="comments" class = "form-control1"  value="<?php echo $data['comments'];?>" />
	</div>
</td></tr>
<tr>
	<td>
		  <input name="submit" type="submit" value="Edit your Posts" />
		</td></tr>
		  
	 </form>   
 


</div>
</div>
	</body>
</html>
