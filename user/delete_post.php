<?php

require('../admin/database.php'); // Using database connection file here

$id = $_GET['cid']; // get id through query string

$del = mysqli_query($dbConn,"delete from tbl_courier where cid = '$id'"); // delete query

if($del)
{
    mysqli_close($dbConn); // Close connection
    header("location: myposting.php"); // redirects to my postings page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>





