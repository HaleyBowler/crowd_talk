<?php
class Answer_model extends CI_Model {

    public $body;
    public $question_id;
    public $vote;
    public $answer_id;

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function insert_entry()
    {
        $this->body   = $_POST['body']; // please read the below note
        $this->question_id = $_POST['question'];
        $this->vote = $_POST['vote']

        $this->db->insert('entries', $this);
    }

}
?>