
<?php
class Thought extends CI_Controller {

     function index()
     {
     	//$this->load->helper('form');
		//$this->load->library('form_validation');

        $this->load->view('thought/form');
    }
    
/*
    function save(){
    	$this->load->model(‘tesformmodel’);        
    	if($this->input->post(‘submit’)){
    		$this->tesformmodel->process();                
    	}
    	redirect(‘tesform’);
    }
*/    

    function insert_into_db()
    {
    	$this->load->model('Thought_model');
    	$this->Thought_model->insert_into_db();
		$this->load->view('thought/success');//loading success view
	}


/*
	function index() 
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('text', 'thought', 'required'); 

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('thought/new');
		}
		else 
		{
			$this->load->model('Thought_model');
    		$this->Thought_model->save($data);           
    	}
	}
*/

}
?>