<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
		<!--<script type="text/javascript">
		var centreGot = false;
	</script>
	<?php echo $map['js']; ?>-->
</head>
<body>
	<div class="page-header">
		<h1>Talk toilet <small>Pick a path</small></h1>
	</div>
	<a class="btn btn-default" href="thought/form" role="button">Thoughts?</a>
	<a class="btn btn-default" href="question" role="button">Daily Question</a>
	<p id="lat"></p>


	<script>
	    var x = document.getElementById("lat");

		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
		} else {
			alert('Error.');
		}
		function successFunction(position) {
			var lat = position.coords.latitude;
			var long = position.coords.longitude;
			x.innerHTML = lat;
		}
	</script>

	<!--<body><?php echo $map['html']; ?></body>-->
	<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.11.3.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>