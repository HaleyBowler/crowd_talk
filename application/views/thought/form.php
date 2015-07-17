<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Thoughts</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>" />
	<link href='http://fonts.googleapis.com/css?family=Comfortaa:400,300' rel='stylesheet' type='text/css'>
	<script>
		if (!navigator.geolocation){
			alert("ERROR 1");
		}

		function success(position) {
			var latitude  = position.coords.latitude; //position.coords.latitude;
			var longitude = position.coords.longitude;

			alert('Latitude is ' + latitude + '° Longitude is ' + longitude + '°');
			$.ajax({
				url: 'stats',
  				type: "POST",
  				data: { latitude:latitude, longitude:longitude }
  				});
			
		};

		function error() {
			alert("ERROR 2");
		};

		navigator.geolocation.getCurrentPosition(success, error);
	</script>
</head>
<body class="thought-form">
	<div class="container form-margin">
		<h1 class="form-heading">Thoughts?</h1>
		<form action="insert_into_db" method="post">
			<div class="form-group">
				<textarea placeholder="What are you thinking about right now?" class="form-control" name="body" type="text" rows="2" autofocus></textarea>
			</div>
			<button type="submit" class="btn submit-thought">Submit</button>
		</form>
	</div>
	<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.11.3.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>
