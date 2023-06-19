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
		*
		{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		.head{
			background: #151515;
			padding: 10px;
			width: 100%;
			display: flex;
			justify-content: center;	
		}

	</style>
</head>
<body>
	<div class="head text-white">
	<div class="container mt-5 p-1">
		<div class="row">
			<h3 class="text-center">Client details</h3>
			<table class="table table-bordered table-striped text-center table-secondary mt-3">
				<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Last Name</th>
				<th>Company Name</th>
				<th>Contact</th>
				<th>Address</th>
				<th>DOB</th>
				<th>City</th>
				<th>Country</th>
				<th>Image</th>
				<th>Email</th>
				<th>Posting Date</th>
				<th colspan="3">Action</th>
				</tr>

				<?php
                 
                 include "connection.php";

                 $query="select * from clients_data where Status=1";
                 $result=mysqli_query($conn,$query);
                 $row=mysqli_num_rows($result);

                 if($row>0)
                 {
                 	while($r=mysqli_fetch_assoc($result))
                 	{
                 		?>
                 		<tr>
                 			<td><?php echo $r['Id'] ?></td>
                 			<td><?php echo $r['Name'] ?></td>
                 			<td><?php echo $r['LastName'] ?></td>
                 			<td><?php echo $r['CompanyName'] ?></td>
                 			<td><?php echo $r['Contact'] ?></td>
                 			<td><?php echo $r['Address'] ?></td>
                 			<td><?php echo $r['DOB'] ?></td>
                 			<td><?php echo $r['City'] ?></td>
                 			<td><?php echo $r['Country'] ?></td>
                 			<td><img src="upload/<?php echo $r['Image']?>" style="width: 100px; height: 100px; border-radius: 5px;"></td>
                 			<td><?php echo $r['Email'] ?></td>
                 			<td><?php echo $r['PostingDate'] ?></td>
                 			<td><a href="tempdelete.php?id=<?php echo $r['Id']?>">Hide</td>
                 			<td><a href="update.php?id=<?php echo $r['Id']?>">Update</td>
                 			<td><a href="delete.php?id=<?php echo $r['Id']?>">Delete</td>
                 		</tr>

                 		<?php
                 	}
                 }

				?>
			</table>	

			<a href="temdelete_restore.php"><button class="btn btn-secondary">Show temporary deleted data</button></a>
		</div>
	</div>
	</div>

</body>
</html>