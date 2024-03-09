<?php



class Authors_Model extends CI_Model { 

    public function __construct() { 
            parent::__construct();
    }

    public function insert($data = array()) {
        return $this->db->insert("authors", $data);   
    }
    public function get_authors($where = array()) {
       
       
        return $this->db->where($where)->get('authors')->result();

    }
   }