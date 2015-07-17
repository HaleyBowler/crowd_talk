<?php
class Thought extends CI_Controller {

    function form()
    {
        $this->load->view('thought/form');
    }   

    function insert_into_db()
    {
    	$this->load->model('Thought_model');
    	$this->Thought_model->insert_into_db();
		$this->load->view('thought/stats');
	}
   
    function stats() 
    {
        $this->load->model('Thought_model');
        $this->load->view('thought/stats');
    }

}
?>