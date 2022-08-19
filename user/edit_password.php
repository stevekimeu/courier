<?php
include("master.php");
require_once('../admin/database.php');
$sql = mysqli_query($dbConn,"select password FROM tbl_offices WHERE email = '$username'"); // select query

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
                    $confirmPassword = $_POST['confirmPassword']; 

					if($currentPassword == $data['password'] && $newPassword == $confirmPassword) {
                        mysqli_query($dbConn, "update tbl_offices set password ='$newPassword' WHERE email='$username'");
                        header("location: user_login.php");
                    }
                    else {
                        echo "Update was not sucessful";
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
			<input type="password" name="currentPassword" id = "currentPassword" class = "form-control1" />		
	</div>	
</td><td>
	 <div class="form-group">
			<label>Enter New Password </label>		  
			<input type="password" name="newPassword" id = "newPassword" class = "form-control1" />
	</div>
    </td><td>
	 <div class="form-group">
			<label>Confirm Password </label>		  
			<input type="password" name="confirmPassword" id = "confirmPassword" class = "form-control1" />
	</div>
</td></tr>
<tr>
	<td>
		  <input name="submit" type="submit" value="Submit Changes" />
		</td></tr>
		  
	 </form>   
 


</div>
</div>
	
