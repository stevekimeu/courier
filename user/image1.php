<?php
error_reporting(0);
?>
<?php
  $msg = "";
  
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "uploads/".$filename;
          
    $db = mysqli_connect("localhost", "root", "", "student");
  
        // Get all the submitted data from the form
        $sql = "INSERT INTO student_table (imagename) VALUES ('$filename')";
  
        // Execute query
        mysqli_query($db, $sql);
          
        // Now let's move the uploaded image into the folder: image
		if (move_uploaded_file($tempname, $folder)) 
    {
    	echo '<script type="text/javascript"> alert("Data Inserted Seccessfully!"); </script>';  // alert message
    }
    else
    {
    	echo '<script type="text/javascript"> alert("Error Uploading Data!"); </script>';  // when error occur
    }
	
  }
  $result = mysqli_query($db, "SELECT * FROM student_table");
while($data = mysqli_fetch_array($result))
{
  
      ?>
<img src="<?php echo $data['imagename']; ?>"/>
  
<?php
}
?>
  
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link rel="stylesheet" type= "text/css" href ="style.css"/>
<div id="content">
  
  <form method="POST" action="" enctype="multipart/form-data">
      <input type="file" name="uploadfile" value=""/>
        
      <div>
          <button type="submit" name="upload">UPLOAD</button>
        </div>
  </form>
</div>
</body>
</html>








