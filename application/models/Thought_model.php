<?php
class Thought_model extends CI_Model {

    public $thought_id;
    public $body;
    public $latitude;
    public $longitude;
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
        $this->latitude = $_POST['latitude'];
        $this->longitude = $_POST['longitude'];
        $this->body = $_POST['body'];       
        $this->db->insert('thought', $this);
    }


}
?>