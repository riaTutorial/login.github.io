<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  
  <div class="main">
  	<button class="fill" onclick="fill()">Fill the form</button>
  	<button class="info" onclick="info()">Clients info</button>
  </div>

<script type="text/javascript">
	function fill()
	{
		window.location.assign("form.php");
	}

	function info()
	{
		window.location.assign("fetch.php");
	}
</script>

</body>
</html>