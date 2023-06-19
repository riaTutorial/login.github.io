<?php
include "connection.php";

$Id=$_GET['id'];
// echo $Id;

$query="delete from clients_data where Id=".$Id;
$result=mysqli_query($conn,$query);
if($result)
{
	echo "<script>alert('Data permanently deleted');</script>";
	header("location:fetch.php");
}

else
{
	echo mysqli_error();
}
?>