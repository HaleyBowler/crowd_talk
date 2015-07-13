<?php
class Question extends CI_Controller {

	public function index()
	{
		$query = $this->db->query('SELECT * FROM `question` WHERE current=true');

		$row = $query->row();

		$data = array(
               'question' => $row->question,
               'question_id' => $row->question_id,
               'answer_a' => $row->answer_a,
               'answer_b' => $row->answer_b,
               'answer_c' => $row->answer_c,
               'answer_d' => $row->answer_d
        );

		$this->load->view('question/index', $data);
	}

	public function submit()
	{
		$answer_letter = $_GET['answer_letter'];
		$question_id = $_GET['question_id'];

		$answer_letter = '"'.$answer_letter.'"';


		$sql = "INSERT INTO `question_submit`(`answer_letter`, `question_id`)
				 VALUES ($answer_letter,$question_id)";

		$this->db->query($sql);

		$question_query = $this->db->query('SELECT * FROM `question` WHERE question_id='.$question_id.' LIMIT 1');
		$answer_a_query = $this->db->query('SELECT * FROM `question_submit` WHERE question_id='.$question_id.' AND answer_letter="a"');
		$answer_b_query = $this->db->query('SELECT * FROM `question_submit` WHERE question_id='.$question_id.' AND answer_letter="b"');
		$answer_c_query = $this->db->query('SELECT * FROM `question_submit` WHERE question_id='.$question_id.' AND answer_letter="c"');
		$answer_d_query = $this->db->query('SELECT * FROM `question_submit` WHERE question_id='.$question_id.' AND answer_letter="d"');

		$question = $question_query->row()->question;
		$answer_a = $question_query->row()->answer_a;
		$answer_b = $question_query->row()->answer_b;
		$answer_c = $question_query->row()->answer_c;
		$answer_d = $question_query->row()->answer_d;
		$a_count =  $answer_a_query->num_rows();
		$b_count =  $answer_b_query->num_rows();
		$c_count =  $answer_c_query->num_rows();
		$d_count =  $answer_d_query->num_rows();

		$data = array(
			'question' => $question,
			'a_count' => $a_count,
			'b_count' => $b_count,
			'c_count' => $c_count,
			'd_count' => $d_count,
			'answer_a' => $answer_a,
			'answer_b' => $answer_b,
			'answer_c' => $answer_c,
			'answer_d' => $answer_d

		);

		$this->load->view('question/stats', $data);
	}

	public function add()
	{
		$this->load->view('question/add');
	}

	public function insert_into_db()
	{
		/*$current_question = $this->db->query('SELECT * FROM `question` WHERE current= 'true' ');*/
		$this->db->query('UPDATE `question` SET current=false WHERE current=true');
		$this->load->model('Question_model');
		$this->Question_model->insert_entry();
		$this->load->view('success');
	}
}
?>