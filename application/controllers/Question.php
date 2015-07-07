<?php
class Question extends CI_Controller {

	public function index()
	{

		/* TODO: Set up so questions come from database
		$date=idate('z');

		$query = $this->db->query('SELECT * FROM  WHERE OrderDate='2008-11-11'');
		*/
		$data = array(
               'question' => 'Who is the best intern?',
               'answer_a' => 'James',
               'answer_b' => 'Mark',
               'answer_c' => 'Haley',
               'answer_d' => 'The duck book'
        );

		$this->load->view('question/index.php', $data);
	}

	public function stats()
	{
		$this->load->view('question/stats.php');
	}

	public function add()
	{
		$this->load->view('question/add.php');
	}

	public function insert_into_db()
	{

		$this->load->model('New_Question_model');
		$this->New_Question_model->insert_entry();
		$this->load->view('success');
	}
}
?>