
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
        <p>Please fill this form to create an account.</p>
<form action="" method="POST">
<div class = "wrapper_left">
		  <div class="form-group">  	
				<label class="label_txt">Enter your Full Name</label>
				<input type="text" class="form-control" name="fname" value="<?php if(isset($error)){ echo $_POST['fname'];}?>" required="">
		  </div>
		  <div class="form-group">
				<label class="label_txt">Region/Country/County </label>
				<input type="text" class="form-control" name="region" value="<?php if(isset($error)){ echo $_POST['region'];}?>" required="">
		  </div> 
			<div class="form-group">
				<label class="label_txt">Phone Number </label>
				<input type="text" class="form-control" name="phonenumber" value="<?php if(isset($error)){ echo $_POST['phonenumber'];}?>" required="">
			</div>
</div>
<div class = "wrapper_right">
		<div class="form-group">
			<label class="label_txt">Email Address </label>
			<input type="email" class="form-control" name="email" value="<?php if(isset($error)){ echo $_POST['email'];}?>" required="">
		  </div>
		  <div class="form-group">
			<label class="label_txt">Password </label>
			<input type="password" name="password" class="form-control" required="">
		  </div>
	   <div class="form-group">
			<label class="label_txt">Confirm Password </label>
			<input type="password" name="passwordConfirm" class="form-control" required="">
	  </div>
</div>
		<div class="user_login">
                <input type="submit" name = "signup" value="Submit">
                <input type="reset"  value="Reset">
        </div>
   <p>Already Have an account?  <a href="user_login.php">Login Here</a> </p>
   <p><a href="Home.php">Go to main Page</a>.</p>
</form>
<?php } ?> 
		</div>		
	</div>
</body>

</html>