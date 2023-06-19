<?php

include "connection.php";

if(isset($_POST['insert']))

{
$eid=$_GET['id'];
$name=$_POST['uname'];
$lname=$_POST['lname'];
$company=$_POST['cname'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$DOB=$_POST['date'];
$city=$_POST['city'];
$country=$_POST['country'];
$Email=$_POST['email'];

$qry=mysqli_query($conn,"update clients_data set Name='$name', LastName='$lname', CompanyName='$company', Contact='$contact', Address='$address', DOB='$DOB', City='$city', Country='$country', Email='$Email' where Id='$eid'");

if($qry)
{
	header("location:fetch.php");
}

else
{
	echo mysqli_error();
}

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.css"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<style type="text/css">
	
		textarea:focus
		{
			color: #339933;
	        box-shadow: 0 0 5px rgba(0,255,0,0.2),
	                    inset 0 0 5px rgba(0,255,0,0.1);
	        /*background: linear-gradient(#339933,#222922);*/
	        animation: jay 0.8s ease-out infinite alternate;
		}

		@keyframes jay{
	0%
	{
		border-color: #339933;
		box-shadow: 0 0 5px rgba(0,255,0,0.2),
		            inset 0 0 5px rgba(0,0,0,0.1);
	}

	100%{
		border-color: #666;
		box-shadow: 0 0 20px rgba(0,255,0,0.6),
		            inset 0 0 10px rgba(0,255,0,0.4);
	}
}

   .button{
   	height: 40px;
	width: 50%;
	outline: none;
	font-size: 19px;
	color:#868686;
	font-weight: bold;
	border: 1px solid #444;
	border-radius: 0 5px 5px 0;
	 carret-color:#339933;
	background: linear-gradient(#333,#222);
	padding: 0px 15px;
	cursor: pointer;
   }

   .button:hover
   {
   	color: #339933;
	border: 1px solid #339933;
	box-shadow: 0 0 5px rgba(0, 255, 0, 0.3),
	            inset 0 0 10px rgba(0,255,0,0.2),
	            inset 0 0 15px rgba(0,255,0,0.1),
	            0 2px 0 black;
   }
	
</style>

</head>
<body>
	<div class="main">
     <div class="container w-50 text-white p-2 text-center">
     	<div class="row mb-4">
     		<div class="col-md-12">
     			<h2>Update details</h2>
     		</div>
     	</div>
        
        <form method="post" class="row needs-validation" novalidate="">
        	<?php
             
             $eid=$_GET['id'];
             $query="select * from clients_data where Id='".$eid."'";

             $result=mysqli_query($conn,$query);
             $r=mysqli_num_rows($result);

             if($r>0)
             {
             	while($row=mysqli_fetch_array($result))
             	{
             		// $Id=$row['Id'];
             		// $name=$row['Name'];
             		// $company=$row['CompanyName'];
             		// $contact=$row['Contact'];
             		// $address=$row['Address'];
             		// $city=$row['City'];
             		// $country=$row['Country'];
             		// $image=$row['Image'];
                
                ?>

             	<div class="row">
     		<div class="col">
     			<div class="input-group">
                <input type="text" class="form-control" name="id" value="<?php echo $row['Id'];?>" required>
                </div>
     		</div>
     	</div>

     	<div class="row mt-3">
     		<div class="col">
     			<div class="input-group">
                <span class="input-group-text"><b>Enter Name</b></span>
                <input type="text" class="form-control" value="<?php echo $row['Name'];?>" name="uname" required>
                </div>
     		</div>
     	</div>

     	<div class="row mt-3">
     		<div class="col">
     			<div class="input-group">
                <span class="input-group-text"><b>Enter Last Name</b></span>
                <input type="text" class="form-control" value="<?php echo $row['LastName'];?>" name="lname" required>
                </div>
     		</div>
     	</div>
         
         <div class="row mt-3">
     		<div class="col">
     			<div class="input-group">
                <span class="input-group-text"><b>Enter Company Name</b></span>
                <input type="text" class="form-control" value="<?php echo $row['CompanyName'];?>" name="cname" required>
                </div>
     		</div>
     		</div>

            <div class="row mt-3">
     		<div class="col">
     			<div class="input-group">
                <span class="input-group-text"><b>Contact</b></span>
                <input type="text" class="form-control" value="<?php echo $row['Contact'];?>" name="contact" required>
                </div>
     		</div>
     	</div>

     	<div class="row mt-3">
     		<div class="col">
     			<div class="input-group">
                <span class="input-group-text"><b>Address</b></span>
                <textarea class="form-control" name="address" value="<?php $row['Address'];?>" style="resize: none;"></textarea>
                </div>
     		</div>
     	</div>

     	<div class="row mt-3">
     		<div class="col">
     			<div class="input-group">
                <span class="input-group-text"><b>Enter Date of Birth</b></span>
                <input type="text" class="form-control" value="<?php $row['DOB'];?>" name="date" required>
                </div>
     		</div>
     		</div>

            <div class="row mt-3">
     		<div class="col">
     			<div class="input-group">
                <span class="input-group-text"><b>Enter City</b></span>
                <input type="text" class="form-control" value="<?php $row['City'];?>" name="city" required>
                </div>
     		</div>
     		</div>

     	<div class="row mt-3">
     		<div class="col">
     			<div class="input-group">
                <span class="input-group-text"><b>Enter Country</b></span>
                <input type="text" class="form-control" value="<?php echo $row['Country'];?>" name="country" required>
                </div>
     		</div>
     	</div>

     	<div class="row mt-3">
     		<div class="col">
     			<div class="input-group">
                <span class="input-group-text"><b>Email</b></span>
                <input type="text" class="form-control" value="<?php echo $row['Email'];?>" name="email" required>
                </div>
     		</div>
     	</div>

            <div class="row mt-3">
     		<div class="col">
     			<div class="input-group">
     			<img src="upload/<?php echo $row['Image']?>" style="width: 100px; border-radius: 5px;">
                <div class="ms-2 mt-5">
                <a href="changeimg.php?userid=<?php echo $row['Id'];?>" style="color:white; text-decoration: none; font-size: 18px;">Change image</a>
            </div>
                </div>
     		</div>

     		
     	      <?php
             	}
             }
        	?>

        	
        
     	<div class="row mt-5">
        <div class="col">
        <input type="submit" name="insert" value="Submit" class="button">
        </div>
        </div> 

     	</form>
     </div>
</div>

</body>
</html>