<?php
require_once('../admin/database.php');

// fetch data

//$sql = "SELECT * FROM tbl_courier WHERE cid = '$id'";

//$result = dbQuery($sql);		

/**while($data = dbFetchAssoc($result)) {
extract($data);**/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>New Message</title>
	<link href="../css/admin.css" rel="stylesheet" type="text/css">
	<link href="../css/central.css" rel="stylesheet" type="text/css">
	<script src="https://kit.fontawesome.com/4cb2645454.js" crossorigin="anonymous"></script>	
	<link rel="icon" href="http://localhost/mulling_logo.jpg" type="image/icon type">
	
	</head>
	<body>

	<?php include("master.php");
	
		$username = $_SESSION['username'];

	?>
			
	
	<div class = "childpane">
		<div class = "wrapper1_reply">

			<?php
				if(isset($_POST['submit']))
				{
					$Sender = $_REQUEST['sender'];
					$Receiver = $_REQUEST['receiver'];
					$Message	=$_POST['message'];
					
					$insert= mysqli_query($dbConn, "INSERT INTO tbl_messages (sender, receiver,message) 
												VALUES('$Sender', '$Receiver', '$Message')"); 

				   if($insert)
					{
						
						echo 'Done! Message Successfully sent.';
						
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
			
						<p>Compose a Message</p>
<table>	
	<tr>
		<td>	
		<div class="form-group">			
				<label>Sender of the Message </label>            
					<input name="sender" id="sender" class = "form-control1" type="TEXT" readonly value="<?php echo $username;?>" />
					
		</div>
		</td></tr>
	<tr><td>
		  <div class="form-group">
					<label>Email of the Receiver </label>				
					<input type="TEXT" name="receiver"  class = "form-control1" />
		</div>
		</td></tr>
	<tr><td>
			<div class="form-group">
						<label>Type your Message here</label>						
						<textarea name="message" id="message" cols = "70" rows = "10" type="TEXT" required /></textarea>
			</div>		
		</td></tr>
	
	<tr >
		<td width = "200%">
			  <input name="submit" type="submit" value="Send Message" />
		</td>
	</tr>
		  
</form>   
 

</div>
</div>
	</body>
</html>
