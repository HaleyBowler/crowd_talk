<?php
	$result = $this->Thought_model->get_last_ten_entries();
	foreach ($result as $row)
	{
		echo $row->body;
		echo " ";
		echo $row->timestamp;
		echo "<html>";
		echo "<br/>";
	}
?>