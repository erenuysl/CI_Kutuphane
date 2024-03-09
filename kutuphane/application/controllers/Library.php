<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends CI_Controller {

    public function __construct() {    
        parent::__construct();
        $this->load->model('Library_Model');
        $this->load->model('Authors_Model'); 
    }

    public function index() {
        $data = array(
            'books' => $this->Library_Model->getBooks(),
            'authors' => $this->Authors_Model->get_authors(array(
                "status" => 1)),
            'types' => $this->Library_Model->getTypes(array(
                "status" => 1))
        );
        $this->load->view('library_view', $data);
    }

    public function save() {
	
        $data = array(
            "name" => $this->input->post('name'),
            "author" => $this->input->post('author'),
            "type" => $this->input->post('type'),
            "publish_date" => $this->input->post('publish_date'),
            "status" => $this->input->post('status')
        );
        $insert = $this->Library_Model->insert($data);

        if ($insert) {
			redirect(base_url(''));
        } else {
            redirect(base_url(''));
        }
    }
}
