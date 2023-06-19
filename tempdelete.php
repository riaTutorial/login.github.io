<?php
include "connection.php";

$Id=$_GET['id'];
echo $Id;

$query="update clients_data set Status=0 where Id=".$Id;
$result=mysqli_query($conn,$query);
if($result)
{
	echo "<script>alert('Data temporary deleted');</script>";
	header("location:fetch.php");
}

else
{
	echo mysqli_error();	
}
?>