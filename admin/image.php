<?php 

require_once('database.php');
require_once('library.php');

$id = (int)$_GET['cid'];

$sql = SELECT fileToUpload FROM tbl_courier WHERE cid = "$cid";
		
		ORDER by cid DESC;
		
		LIMIT 0, 50;
	while($results = mysqli_fetch_array($records))
	{
		?>
	<td><img src="<?php echo $results['fileToUpload']; ?> " width="100" height= "100"/></td>"
	<?php	
	} else
		echo 'query not successful';
	
?>