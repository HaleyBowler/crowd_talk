<?php
class Thought_model extends CI_Model {

    public $thought_id;
    public $body;
    public $timestamp;

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

/*
    function get_last_ten_entries()
    {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }
*/

    public function get_last_ten_entries()
    {
        $this->db->order_by('timestamp', 'DESC');    
        $query = $this->db->get('thought', 10);
        return $query->result();        
    }
/*
    function insert_into_db()
    {
        $this->body   = $_POST['body']; // please read the below note
        $this->subission_id = $_POST['submission'];

        $this->db->insert('entries', $this);
    }
*/

    function insert_into_db()
    {
        $this->body = $_POST['body'];
        

        $this->db->insert('thought', $this);
    }


}
?>