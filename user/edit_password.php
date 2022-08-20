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
				if ( !empty ( $_POST ['submit'] ) ) {
                    $confirmPassword = $_POST['confirmPassword']; 
                    $currentPassword = $_POST['currentPassword'];
                    $newPassword = $_POST['newPassword'];
					$oldPassword = $data['password'];
					$hashed_password = password_hash($currentPassword, PASSWORD_DEFAULT);
					
					if($hashed_password == $oldPassword){
						
						if ($newPassword == $confirmPassword) {
						$hash_password = password_hash($newPassword, PASSWORD_DEFAULT);
                        $update = mysqli_query($dbConn, "UPDATE tbl_offices SET password ='$hash_password' WHERE email='$username'");
                            if($update){
                                    header("location: user_login.php");
                                }
                            else{
                                    header("location: edit_password.php");
                                }
                            }
                    else {
                        echo "New Password field does not match with confirm password field";
                    }
				   
                }
				else 
					{
						echo "The Old password is wrong";
						mysqli_close($dbConn);
					}
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
	</td>
</tr>
</table>
	 </form>   
 


</div>
</div>
	
