<?php
class Thought_model extends CI_Model {

    public $thought_id;
    public $body;
    public $timestamp;


    function __construct()
    {
        parent::__construct();
    }
    public function get_last_ten_entries()
    {
        $this->db->order_by('timestamp', 'DESC'); 
        $this->db->where('body !=', ''); 
        $query = $this->db->get('thought', 5);
        return $query->result();        
    }
    
    function insert_into_db()
    {
        $this->body = $_POST['body'];
        $this->db->insert('thought', $this);
    }


}
?>