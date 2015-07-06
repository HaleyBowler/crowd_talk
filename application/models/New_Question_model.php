<?php
class New_Question_model extends CI_Model {

    public $ask_date;
    public $question;
    public $answer_a;
    public $answer_b;
    public $answer_c;
    public $answer_d;

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function insert_entry()
    {
        $this->ask_date = $_POST['ask_date'];
        $this->question   = $_POST['question'];
        $this->answer_a   = $_POST['answer_a'];
        $this->answer_b   = $_POST['answer_b'];
        $this->answer_c   = $_POST['question'];
        $this->answer_d   = $_POST['question'];
        

        $this->db->insert('new_question', $this);
    }

}
?>