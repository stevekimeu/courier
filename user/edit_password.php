<?php
include("master.php");
require_once('../admin/database.php');
$sql = mysqli_query($dbConn,"select password FROM tbl_offices WHERE email = '$username'"); // select query
echo $username;

$data = mysqli_fetch_array($sql); // fetch data


?>
			
	<div class = "innercontainer">
	<div class = "childpane">
		<div class = "wrapper_edit">

			<?php
				if(isset($_POST['submit']))
				{
					$currentPassword = $_POST['currentPassword'];
                    $newPassword = $_POST['newPassword'];

					if($currentPassword == $data['password']) {
                        $update= mysqli_query($dbConn, "update tbl_offices set password ='$newPassword' WHERE email='$username'");
                        header("location: user_login.php");
                    }
                    else {
                        mysqli_error($dbConn);
                    }
				   
                }
				else 
					{
						mysqli_close($dbConn);
					}
				
		?>
		 <form name="form" method="POST" action="">
			
						<p>CHANGE PASSWORD</p>
<table width = "100%">	
	<tr>
		<td>		
	<div class="form-group">
			<label>Enter the Current Password </label>			
			<input type="password" name="currentPassword"><span id="currentPassword"class = "form-control1" />		
	</div>	
</td><td>
	 <div class="form-group">
			<label>Enter New Password </label>		  
			<input type="password" name="newPassword"><span id="newPassword" class = "form-control1" />
	</div>
</td></tr>
<tr>
	<td>
		  <input name="submit" type="submit" value="Submit Changes" />
		</td></tr>
		  
	 </form>   
 


</div>
</div>
	
