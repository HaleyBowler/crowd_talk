<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Thoughts</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>" />
</head>
<body class="thought-form">
	<form action="insert_into_db" method="post">
		<div class="form-group">
		<label for="thought">Thought</label>
			<textarea class="form-control" name="body" type="text" rows="10" autofocus></textarea>
		</div>
		<button type="submit" class="btn submit-thought" placeholder="Anonymously share you thoughts!">Submit</button>
	</form>
	</div>
	<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.11.3.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>
