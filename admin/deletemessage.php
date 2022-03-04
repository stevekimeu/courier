<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('database.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from messages where id='$id'";
 mysqli_query($dbConn, $sql) or die(mysqli_error($dbConn));
 header("location: message.php");
}

?>