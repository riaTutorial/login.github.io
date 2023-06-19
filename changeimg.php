<?php

include "connection.php";

if(isset($_POST['submit']))
{
	$id=$_GET['userid'];

	$image=$_FILES['f1']['name'];

	$oldppic=$_POST['oldpic'];

	$oldprofilepic="upload"."/".$oldppic;

	$extension=substr($image,strlen($image)-4,strlen($image));

	$allowed_extensions=array(".png",".jpg",".jpeg",".gif",".PNG",".JPG",".JPEG",".GIF");

	if(!in_array($extension,$allowed_extensions))

	{
		echo "<script>alert('Invalid format. Only jpeg,jpg,png and gif format allowed');</script>";
	}

	else
	{

	  move_uploaded_file($_FILES["f1"]["tmp_name"],"upload/".$image);
	  echo $image;

      $query=mysqli_query($conn,"UPDATE `clients_data` SET `Image` = '$image' WHERE Id = $id");

      if($query)
      {
      	unlink($oldprofilepic);
      	echo "<script>alert('Profile pic updated successfully');</script>";
      	echo "<script type='text/javascript'> document.location ='fetch.php'; </script>";
      }

      else
      {
      	echo "<script>alert('Something went wrong. Please try again.');</script>";
      }
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.css"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>

	<div class="signup-form main">
		<form method="post" enctype="multipart/form-data">

	<?php
            $eid=$_GET['userid'];
            $rest=mysqli_query($conn,"select * from clients_data where Id='$eid'");

            while($row=mysqli_fetch_array($rest))
            {
            	?>
            	<h2 class="text-white">Update</h2>
            	<p class="hint-text text-white">Update your profile pic.</p>

            	<input type="hidden" name="oldpic" value="<?php  echo $row['Image'];?>">
          
            <div class="form-group mb-3">
            <img src="upload/<?php  echo $row['Image'];?>" width="120" height="120" style="border-radius: 5px;">
            </div>

            <div class="form-group">
            <input type="file" class="form-control" name="f1"  required="true">
            <span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
            </div> 

            <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
            </div>

            <?php
            }
	?>
		</form>
	</div>

</body>
</html>