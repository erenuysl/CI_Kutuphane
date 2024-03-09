<?php


class Library_Model extends CI_Model {

    public function __construct() {         
            parent::__construct();
    }
    public function getBooks() {
        return $this->db->get('book')->result();
    }
 
    public function getTypes($where = array()) {
       
       
        return $this->db->where($where)->get('types')->result();

    }

    public function insert($data) {
        $this->db->insert('book', $data);
        return $this->db->insert_id();
    }





}