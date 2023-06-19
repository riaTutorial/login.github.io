<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>

	<div class="main">
		
		<div class="login-form">
			
			<!-- <div class="text">LOGIN</div> -->
			<div class="part">
				<p class="p1">L</p>
				<p class="p1">O</p>
				<p class="p1">G</p>
				<p class="p1">I</p>
				<p class="p1">N</p>
			</div>

			<form>
				<div class="field">
					<i class="fa fa-envelope"></i>
					<input type="text" id="uname" placeholder="Username" required>
					
				</div>

				<div class="field">
					<i class="fa fa-lock"></i>
					<input type="password" id="pass" placeholder="Password" required>
					
				</div>

				<button onclick="login()">LOGIN</button>
			</form>

		</div>
	</div>

	<script type="text/javascript">
		function login()
		{
              var name=document.getElementById("uname").value;
              var password=document.getElementById("pass").value;

              if(name == 'Admin' && password == 12345)
              {
              	window.location.assign("button.php");
              	alert("successfully login");
              }

              else
              {
              	alert("invalid information");
              	return;
              }

		}
	</script>



</body>
</html>