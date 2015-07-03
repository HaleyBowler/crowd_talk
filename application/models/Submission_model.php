<?php
class Submissionmodel extends CI_Model {

    public $date;
    public $lat;
    public $long;

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