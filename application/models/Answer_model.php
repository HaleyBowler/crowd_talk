<?php
class Answer_model extends CI_Model {

    public $body;
    public $question_id;
    public $vote;
    public $answer_id;
    public $answer_letter;

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function insert_entry()
    {
        $this->body   = $_POST['body']; // please read the below note
        $this->question_id = $_POST['question_id'];
        $this->vote = $_POST['vote']
        $this->answer_id = $_POST['answer_id']
        $this->answer_letter = $_POST['answer_letter']

        $this->db->insert('entries', $this);
    }

}
?>

