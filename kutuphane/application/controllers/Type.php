<?php

class Type extends CI_Controller
{
    public function index()
    { 
        $this->load->model('Type_Model'); 
        $data['types'] = $this->Type_Model->get_types();  
        $this->load->view('type_view', $data);
    }

    public function save()
    {
        $data = array(
            "name" => $this->input->post("name"),
            "status" => $this->input->post("status")
        );
        $this->load->model("Type_Model");
        $insert = $this->Type_Model->insert($data);
        if ($insert) {
            redirect(base_url('/type'));
        } else {
            
            redirect(base_url('/type'));
        }
    }
}
