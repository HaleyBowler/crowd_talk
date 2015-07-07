<!--<html>
<head>
<title>Let's Talk</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open('thought/index'); ?>

<label for="thought">Thought?</label>
<input type="text" name="body" value="" maxlength= "140" size="50" /><br/>


<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>-->

<form action="<?php echo base_url();?>index/thought/insert_into_db" method="post">
Thoughts? <input type = 'text' name='body'>
<input type='submit'>
</form>