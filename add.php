<php? //TODO: Set up form for adding a new question ?>
<p> Add a question </p>

<form action="insert_into_db" method="post">

Question:
<input type="text" name="question" >
<br>

Question date:
<input type="date" name="ask_date" >
<br>

Answer A.
<input type="text" name="answer_a" >
<br>

Answer B.
<input type="text" name="answer_b" >
<br>

Answer C.
<input type="text" name="answer_c" >
<br>

Answer D.
<input type="text" name="answer_d" >
<br>

<input type="submit" value="Submit">
</form> 