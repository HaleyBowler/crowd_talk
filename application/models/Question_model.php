<?php
class Questionmodel extends CI_Model {

    public $body;
    public $submission_id;

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function insert_entry()
    {
        $this->body   = $_POST['body']; // please read the below note
        $this->subission_id = $_POST['submission'];

        $this->db->insert('entries', $this);
    }

}
?>