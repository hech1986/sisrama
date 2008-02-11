<?php

class Campus extends Controller {
	
    function listCampus()
    {
        
        $this->load->model('master/CampusModel');

        $data = array(
                'campusList' => $this->CampusModel->listCampus(),
                'campusData' => array('id'=>'','name'=>'')
        );

        
        $this->load->view("master/campusview",$data);
    }
    
    function save()
    {
        $this->load->model('master/CampusModel');
        $this->CampusModel->saveCampus($_POST);
        $this->load->helper('url');
        redirect('/master/campus/listcampus', 'refresh');
    }

    function edit()
    {
        $this->load->model('master/CampusModel');
        //display all data
        $regData = $this->CampusModel->editCampus($this->uri->uri_to_assoc(4));
        $data = array(
            'campusList' => $this->CampusModel->listCampus(),
            'campusData' => array('id'=>$regData[0]->id,'name'=>$regData[0]->name)
        );

        $this->load->view("master/campusview",$data);

    }
    
    function remove()
    {
        $this->load->model('master/CampusModel');
        $this->CampusModel->removeCampus($this->uri->uri_to_assoc(4));
        $this->load->helper('url');
        redirect('/master/campus/listcampus', 'refresh');
        
    }
}
?>