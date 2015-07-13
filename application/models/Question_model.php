<?php
class Question_model extends CI_Model {

    public $current;
    public $question;
    public $answer_a;
    public $answer_b;
    public $answer_c;
    public $answer_d;
    public $question_id;

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function insert_entry()
    {
        $this->current = true;
        $this->question   = $_POST['question'];
        $this->answer_a   = $_POST['answer_a'];
        $this->answer_b   = $_POST['answer_b'];
        $this->answer_c   = $_POST['answer_c'];
        $this->answer_d   = $_POST['answer_d'];
        

        $this->db->insert('question', $this);
    }

}
?>