<?php 

require('../admin/database.php');

$username = ''; 
if(isset( $_GET['username'])) { 
$username = $_GET['username']; 
} 
$sql = mysqli_query($dbConn,"SELECT * FROM tbl_offices WHERE username = '$username'"); // select query
$data = mysqli_fetch_array($sql); // fetch data

			if(isset($_POST['submit']))
			{				
				$Fullname = $_POST['fullname'];
				$Address	= $_POST['address'];
				$Town = $_POST['town'];
				$PhoneNumber	= $_POST['phonenumber'];
				$Category	= $_POST['category'];
				
				$update= mysqli_query($dbConn, "update tbl_offices set fullname ='$Fullname', address ='$Address', Town = '$Town', phone_number = '$PhoneNumber', user_category = '$Category'  where username = '$username'"); 

			   if($update)
				{
					
					header("location: user_login.php");
					
					exit;
				}
			else 
				{
					mysqli_close($dbConn);
				}
			}
	?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Complete Registration</title>
<link href = "../css/central.css" type = "text/css" rel = "stylesheet" />
<link href = "../css/admin.css" type = "text/css" rel = "stylesheet" /> 
</head>
	<body>
	<div class = "user_loginbg">
		<div class="wrapper">
		<h2>Sign Up</h2>
			<p>Please fill this form to create an account.</p>
					<form name="registration" action="" method="post">
						<div class="form-group">
							<label>Your username</label>
							<input type="text" name="username" class="form-control" readonly value = "<?php echo $data['username'];?>" />
						</div>
						<div class="form-group">
							<label>Enter Full Name</label>
							<input type="text" name="fullname" class="form-control" required />
						</div>
						<div class="form-group">
							<label>Enter your Physical Address</label>
							<input type="text" name="address" class="form-control" required />
						</div>
						<div class="form-group">
							<label>Enter your Town</label>
							<input type="text" name="town" class="form-control" required />
						</div>
						<div class="form-group">
							<label>Enter your Phone Number</label>
							<input type="text" name="phonenumber" class="form-control" required />
						</div>
						<div class="form-group">
							<label>Enter your Category</label>
							<input type="text" name="category" class="form-control"  required />
						</div>
						<input type="submit" name="submit" value="Register" />
					</form>
				</div>
			</div>
		</div>
	</body>
</html>