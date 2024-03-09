<?php



class Type_Model extends CI_Model { 

    public function __construct() { 
            parent::__construct();
    }

    public function insert($data = array()) {
        return $this->db->insert("types", $data);   
    }
    public function get_types($where = array()) {
       
       
        return $this->db->where($where)->get('types')->result();

    }
   }