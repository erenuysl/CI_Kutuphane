<?php
//deneme
class Authors extends CI_Controller
{
    public function index()
    { 
        $this->load->model('Authors_Model'); 
        $data['authors'] = $this->Authors_Model->get_authors();  
        $this->load->view('authors_view', $data);
    }

    public function save()
    {  $this->load->model('Authors_Model'); 
        $data = array(
            "name" => $this->input->post("name"),
            "surname" => $this->input->post("surname"),
            "status" => $this->input->post("status")
        );
        $this->load->model("Authors_Model");
        $insert = $this->Authors_Model->insert($data);
        if ($insert) {
            redirect(base_url('Authors'));
        } else {
            
            redirect(base_url('Authors'));
        }
    }
}
