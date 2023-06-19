<?php
include "connection.php";

$ids=$_GET['id'];
// echo $Id;

$query="update clients_data set Status=1 where Id='".$ids."'";
$result=mysqli_query($conn,$query);

if($result)
{
	header("location:temdelete_restore.php");
}

else
{
	echo mysqli_error();
}

?>