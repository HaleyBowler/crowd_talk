<?php
class Submission_model extends CI_Model {

    public $date;
    public $lat;
    public $long;
    public $submission_id;

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function insert_entry()
    {
        $this->date    = date();

        $this->db->insert('entries', $this);
    }

}
?>