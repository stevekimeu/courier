
<!DOCTYPE html>
<?php require_once("../admin/database.php"); ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<title> Sign Up </title>
    <link rel="icon" href="http://localhost/mulling_logo.jpg" type="image/icon type">
	<link href = "../css/central.css" type = "text/css" rel = "stylesheet" /> 
</head>
<body>

<?php 
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: shop_animals.php");
	exit;
}
 if(isset($_POST['signup'])){
  extract($_POST);
  if(strlen($fname)<3){ // Minimum 
      $error[] = 'Please enter First Name using 3 charaters atleast.';
        }
if(strlen($fname)>30){  // Max 
      $error[] = 'Full Name: Max length 20 Characters Not allowed';
        }
if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $fname)){
            $error[] = 'Invalid Entry First Name. Please Enter letters without any Digit or special symbols like ( 1,2,3#,$,%,&,*,!,~,`,^,-,)';
        }    
if(strlen($region)<3){ // Minimum 
      $error[] = 'Please enter Home Region/Country/County using 3 charaters atleast.';
        }
if(strlen($region)>20){  // Max 
      $error[] = 'Home Region/Country/County: Max length 20 Characters Not allowed';
        }
if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $region)){
            $error[] = 'Home Region/Country/County:. Please Enter letters without any Digit or special symbols like ( 1,2,3#,$,%,&,*,!,~,`,^,-,)';
              }    
      if(strlen($phonenumber)<6){ // Change Minimum Lenghth   
            $error[] = 'Please enter Phone Number with atleast 6 digits.';
        }
  if(strlen($phonenumber)>15){ // Change Max Length 
            $error[] = 'Phone Number : More than 15 digits Not allowed';
        }
  if(!preg_match("/^[0-9\-]|[\+0-9]|[0-9\s]|[0-9()]*$/", $phonenumber)){
            $error[] = 'Invalid Entry for Phone Number.';
        }  
if(strlen($email)>50){  // Max 
            $error[] = 'Email: Max length 50 Characters Not allowed';
        }
   if($passwordConfirm ==''){
            $error[] = 'Please confirm the password.';
        }
        if($password != $passwordConfirm){
            $error[] = 'Passwords do not match.';
        }
          if(strlen($password)<7){ // min 
            $error[] = 'The password is 8 characters long.';
        }
        
         if(strlen($password)>20){ // Max 
            $error[] = 'Password: Max length 20 Characters Not allowed';
        }
          $sql="select * from tbl_offices where (phonenumber='$phonenumber' or email='$email');";
      $res=mysqli_query($dbConn,$sql);
   if (mysqli_num_rows($res) > 0) {
$row = mysqli_fetch_assoc($res);

     if($phonenumber==$row['phonenumber'])
     {
           $error[] ='Phone Number alredy Exists.';
          } 
       if($email==$row['email'])
       {
            $error[] ='Email alredy Exists.';
          } 
      }
         if(!isset($error)){ 
              $date=date('Y-m-d');
            $options = array("cost"=>4);
    $password = password_hash($password,PASSWORD_BCRYPT,$options);
            
           $result = mysqli_query($dbConn,"INSERT into tbl_offices values('','$fname','$region','$phonenumber','$email','$password','$date')");

           if($result)
    {
     $done=2; 
    }
    else{
      $error[] ='Failed : Something went wrong';
    }
 }
 } ?>
     
 <?php 
  if(isset($error)){ 
foreach($error as $error){ 
  echo '<p class="errmsg">&#x26A0;'.$error.' </p>'; 
}
}
?>
      <?php if(isset($done)) 
      { 
   header("location: user_login.php");	
    
      } else 
	  
			{ ?>
	  
<div class = "user_loginbg">
    <div class="wrapper">
	<h2>Registration Form</h2>
        <h6>Please fill this form to create an account.</h6>
<form action="" method="POST">
<div class = "wrapper_left">
		  <div class="form-group">  		
				<input type="text" class="form-control" name="fname" value="<?php if(isset($error)){ echo $_POST['fname'];}?>" required="" placeholder="Enter your Full Name" minlength = "8"maxlength = "30">
		  </div>
		  <div class="form-group">				
				<input type="text" class="form-control" name="region" value="<?php if(isset($error)){ echo $_POST['region'];}?>" required="" placeholder="Enter home County " minlength = "3"maxlength = "20">
		  </div> 
			<div class="form-group">				
				<input type="number" class="form-control" name="phonenumber" value="<?php if(isset($error)){ echo $_POST['phonenumber'];}?>" required="" placeholder="Enter phone number" minlength = "9"maxlength = "14">
			</div>
</div>
<div class = "wrapper_right">
		<div class="form-group">			
			<input type="email" class="form-control" name="email" value="<?php if(isset($error)){ echo $_POST['email'];}?>" required="" placeholder="Enter email Adrress" minlength = "10"maxlength = "30">
		  </div>
		  <div class="form-group">			
			<input type="password" name="password" class="form-control" required="" placeholder="Enter your password" minlength = "8" maxlength = "30">
		  </div>
	   <div class="form-group">			
			<input type="password" name="passwordConfirm" class="form-control" required="" placeholder="Confirm password" minlength = "8" maxlength = "30">
	  </div>
</div>
		<div class="user_login">
                <input type="submit" name = "signup" value="Submit">
        </div>
   <p>Already Have an account?  <a href="user_login.php">Login</a> </p>
   <p><a href="Home.php">Go to main Page</a>.</p>
</form>
<?php } ?> 
		</div>		
	</div>
</body>

</html>