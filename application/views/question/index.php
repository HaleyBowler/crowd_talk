<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Question</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>" />
	<link href='http://fonts.googleapis.com/css?family=Comfortaa:400,300' rel='stylesheet' type='text/css'>
</head>


<h1 id="h1_question"> <?php echo $question?>  </h1>

<?php echo "<a href='question/submit?answer_letter=a&question_id=$question_id' id=answer_a>" ?>
<p class="answer" id="answer_a"> <?php echo $answer_a?> </p>
</a>

<?php echo "<a href='question/submit?answer_letter=b&question_id=$question_id' id=answer_b>" ?>
<p class="answer" id="answer_b"> <?php echo $answer_b?> </p>
</a>


<?php echo "<a href='question/submit?answer_letter=c&question_id=$question_id' id=answer_c>" ?>
<p class="answer" id="answer_c"> <?php echo $answer_c?> </p>
</a>

<?php echo "<a href='question/submit?answer_letter=d&question_id=$question_id' id=answer_d>" ?>
<p class="answer" id="answer_d"> <?php echo $answer_d?> </p>
</a>

<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.11.3.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

