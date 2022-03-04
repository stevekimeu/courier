<?php

require ('database.php');

mysqli_select_db("tutorohx_rw", $conncection);

$valueToSearch = $_POST['valueToSearch'];

$sql = "SELECT * FROM user WHERE f_name=$valueToSearch ";
$result = mysqli_query($sql, $connection);

?>

<?php

if ($result)
 {
  while($row = mysqli_fetch_array($result))
 {

?>

<table>
<tr><th>ID</th><th>First Name</th><th>Last Name</th></tr>
<tr>
<td><?php echo $row["f_name"]; ?></td>
<td><?php echo $row["l_name"]; ?></td>
</tr>

<?php
 }
} 
?>
</table>

