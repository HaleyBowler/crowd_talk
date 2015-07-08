<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Thoughts</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
</head>
<body>
	<h3>Recent Thoughts</h3><br/>
	<a class="btn btn-default" href="../question" role="button">Answer the Question</a>
	<a class="btn btn-default" href="../info" role="button">What is Talking Toilet?</a><br/><br/>
<?php
$result = $this->Thought_model->get_last_ten_entries();
foreach ($result as $row)
{
	echo "At ";
	$date = new DateTime((string)$row->timestamp);
	echo date_format($date, 'g:ia \o\n l jS F Y');
	echo " someone thought ";
	echo $row->body;
	echo " ";
	echo "<html>";
	echo "<br/>";
	echo "<br/>";
}
?>
	<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.11.3.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>