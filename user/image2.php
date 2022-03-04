<?php

if (isset($_POST['submit'])) { 
$target_path = "uploads/";
 
$target_path = $target_path . basename( $_FILES['uploadedfilee']['name']);
 
if(move_uploaded_file($_FILES['uploadedfilee']['tmp_name'], $target_path))
 
{
 
$conn = new mysqli("localhost", "root", " ", "student");
 
$sql = "INSERT INTO student_table(`path`) VALUES ('$target_path')";
 
if ($conn->query($sql) === TRUE) {
 
echo "<br><br>";
 
} else {
 
echo "Error: " . $sql . "<br>" . $conn->error;
 
}
 
$sql1 = "SELECT path FROM student_table order by id desc limit 1";
 
$result1 = $conn->query($sql1);
 
if ($result1->num_rows > 0) {
 
// output data of each row
 
while($row = $result1->fetch_assoc()) {
 
$path=$row["path"];
 
echo "<img src='$path' height='280' width='320' />";
 
}
 
}
 
$conn->close();
 
}
}
 
?>

<form method="post" action="" enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE_SIZE" value="1000000"/><input name="uploadedfilee" type="file" style="height:35px;" /><br><br>
<input type="submit" value="submit" name="submit">
</form>