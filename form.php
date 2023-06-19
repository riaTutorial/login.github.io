<!-- <?php
include "connection.php";

if(isset($_POST['upload']))
{
	$filename=$_FILES['f1']['name'];
	$filetype=$_FILES['f1']['type'];
	$filetmp=$_FILES['f1']['tmp_name'];

	$image=move_uploaded_file($filetmp,'upload/'.$filename);
}
?>
 -->
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

	</style>
</head>
<body>
	<div class="main">
     <div class="container w-50 text-white p-2 text-center">
     	<div class="row">
     		<div class="col-md-12">
     			<h2>Kindly fill the below details.</h2>
     		</div>
     	</div>
        
        <form method="post" action="insert.php" enctype="multipart/form-data">
     	<div class="row">
     		<div class="col">
     			<div class="input-group">
                <span class="input-group-text"><b>Enter First Name</b></span>
                <input type="text" class="form-control" name="uname" required>
                </div>
     		</div>
     	</div>

     	<div class="row mt-3">
     		<div class="col">
     			<div class="input-group">
                <span class="input-group-text"><b>Enter Last Name</b></span>
                <input type="text" class="form-control" name="lname" required>
                </div>
     		</div>
     	</div>
         
         <div class="row mt-3">
     		<div class="col">
     			<div class="input-group">
                <span class="input-group-text"><b>Enter Company Name</b></span>
                <input type="text" class="form-control" name="cname" required>
                </div>
     		</div>
     		</div>

            <div class="row mt-3">
     		<div class="col">
     			<div class="input-group">
                <span class="input-group-text"><b>Contact</b></span>
                <input type="text" class="form-control" name="contact" required>
                </div>
     		</div>
     	</div>

     	<div class="row mt-3">
     		<div class="col">
     			<div class="input-group">
                <span class="input-group-text"><b>Address</b></span>
                <textarea class="form-control" name="address" style="resize: none;"></textarea>
                </div>
     		</div>
     	</div>

     	<div class="row mt-3">
     		<div class="col">
     			<div class="input-group">
                <span class="input-group-text"><b>Date of Birth</b></span>
                <input type="date" class="form-control" name="date" required>
                </div>
     		</div>
     	</div>

            <div class="row mt-3">
     		<div class="col">
     			<div class="input-group">
                <span class="input-group-text"><b>Enter City</b></span>
                <input type="text" class="form-control" name="city" required>
                </div>
     		</div>
     		</div>

     	<div class="row mt-3">
     		<div class="col">
     			<div class="input-group">
                <span class="input-group-text"><b>Enter Country</b></span>
                <input type="text" class="form-control" name="country" required>
                </div>
     		</div>
     	</div>

            <div class="row mt-3">
     		<div class="col">
     			<div class="input-group">
                <span class="input-group-text"><b>Upload image</b></span>
                <input type="file" class="form-control" name="f1" required>
                </div>
     		</div>
     	</div>

     	<div class="row mt-3">
     		<div class="col">
     			<div class="input-group">
                <span class="input-group-text"><b>Email</b></span>
                <input type="text" class="form-control" name="email" required>
                </div>
     		</div>
     	</div>
        
     	<div class="row">
        <div class="col">
        <input type="submit" name="insert" value="Submit" class="btn text-white mt-4 btn-secondary">
        </div>
        </div> 

     	</form>
     </div>
</div>

</body>
</html>