<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Thoughts</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>" />
	<link href='http://fonts.googleapis.com/css?family=Comfortaa:400,300' rel='stylesheet' type='text/css'>
</head>
<body class="stats-page">
	<div class="page-header">
		<h3 class="stats-header">Recent Thoughts</h3>
	</div>
	<div class="container">
	<?php
	$result = $this->Thought_model->get_last_ten_entries();
	foreach ($result as $row)
	{
		?>
		<div class="row thought-list-border">
			<p class="thought">
				<?php
				echo $row->body;
				?>
			</p>
			<p class="time">
				<?php
				$date = new DateTime((string)$row->timestamp);
				echo date_format($date, 'g:ia \o\n l jS F Y');
				?>
			</p>
		</div>
		<?php
	}
	?>
	<div>
		<a class="btn button-top btn-stat" href="../question" role="button">Answer the Question</a>
		<a class="btn button-right btn-stat" href="../info" role="button">What is Talking Toilet?</a>
	</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.11.3.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script><br/>
</body>
</html>