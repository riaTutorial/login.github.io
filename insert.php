<?php

include "connection.php";

if(isset($_POST['insert']))
{

 $name=$_POST['uname'];
 $lname=$_POST['lname'];
$company=$_POST['cname'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$DOB=$_POST['date'];
$city=$_POST['city'];
$country=$_POST['country'];

$image=$_FILES['f1']['name'];
$Email=$_POST['email'];

$extension=substr($image, strlen($image)-4,strlen($image));

$allowed_extensions=array(".jpg",".jpeg",".png",".gif",".JPG",".JPEG",".PNG",".GIF");

if(!in_array($extension, $allowed_extensions))
	{
		echo "<script>alert('Invalid format. Only jph/png/jpeg/gif format allowed');</script>";
	}

	else
	{
		$imgnewfile=md5($imgfile).time().$extension;
		move_uploaded_file($_FILES['f1']['tmp_name'],'upload/'.$imgnewfile);

		$query=mysqli_query($conn,"insert into clients_data(Name,LastName,CompanyName,Contact,Address,DOB,City,Country,Image,Email) value('$name','$lname','$company','$contact','$address','$DOB','$city','$country','$imgnewfile','$Email')");

		if($query)
		{
			echo "<script>alert('You have successfully inserted the data');</script>";
			echo "<script>document.location='button.php';</script>";
		}

		else
		{
			echo "<script>alert('Something went wrong. Try again.');</script>";
		}
	}
}
?> 

<!-- <?php

include "connection.php";

$name=$_POST['uname'];
$company=$_POST['cname'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$city=$_POST['city'];
$country=$_POST['country'];
$Email=$_POST['email'];

$image=$_FILES['f1']['name'];

$uploaddir='upload/';
$uploadfile=$uploaddir . basename($_FILES['f1']['name']);

$files= $_FILES['f1'];

$filename=$files['name'];

$ext=pathinfo($filename, PATHINFO_EXTENSION);

$fileextstored=array('jpg','jpeg','png','gif','JPG','PNG','JPEG','GIF');

if(in_array($ext, $fileextstored))
{
	if(move_uploaded_file($_FILES['f1']['tmp_name'], $uploadfile))

	{
		$sql="insert into clients_data set
        Name='".$name."',
        CompanyName='".$company."',
        Contact='".$contact."',
        Address='".$address."',
        City='".$city."',
        Country='".$country."',
        Image='".$image."',
        Email='".$Email."'";

        $result=mysqli_query($conn,$sql);

        if($result)
        {

        	header("location:fetch.php");
        }

        else
        {
        	header("location:form.php");
        }        

	}

	else
	{
		echo "upload failed";
	}

}

else
{
	echo 
	"file not supported";
}

?> -->