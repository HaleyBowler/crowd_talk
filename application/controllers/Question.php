<?php
class Question extends CI_Controller {

	public function index()
	{
		$date = date("Y-m-d");
		$date = '"'.$date.'"';

		$query = $this->db->query('SELECT * FROM `question` WHERE ask_date='.$date.' LIMIT 1');

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
		$answer = $_GET['answer'];
		$question_id = $_GET['question_id'];

		$this->load->view('question/stats');
	}

	public function add()
	{
		$this->load->view('question/add');
	}

	public function insert_into_db()
	{

		$this->load->model('Question_model');
		$this->Question_model->insert_entry();
		$this->load->view('success');
	}
}
?>