<?php

require('database.php'); // Using database connection file here

$id = $_GET['cid']; // get id through query string

$del = mysqli_query($dbConn,"delete from tbl_courier where cid = '$id'"); // delete query

if($del)
{
    mysqli_close($dbConn); // Close connection
    header("location: manage_livestock.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>





