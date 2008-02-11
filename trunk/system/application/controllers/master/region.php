<?php

class Region extends Controller {
	
    function listRegion()
    {
        
        $this->load->model('master/RegionModel');

        $data = array(
                'regionList' => $this->RegionModel->listRegion(),
                'regionData' => array('id'=>'','name'=>'')
        );

        
        $this->load->view("master/regionview",$data);
    }
    
    function save()
    {
        $this->load->model('master/RegionModel');
        $this->RegionModel->saveRegion($_POST);
        $this->load->helper('url');
        redirect('/master/region/listregion', 'refresh');
    }

    function edit()
    {
        $this->load->model('master/RegionModel');
        //display all data
        $regData = $this->RegionModel->editRegion($this->uri->uri_to_assoc(4));
        $data = array(
            'regionList' => $this->RegionModel->listRegion(),
            'regionData' => array('id'=>$regData[0]->id,'name'=>$regData[0]->name)
        );

        $this->load->view("master/regionview",$data);

    }
    
    function remove()
    {
        $this->load->model('master/RegionModel');
        $this->RegionModel->removeRegion($this->uri->uri_to_assoc(4));
        $this->load->helper('url');
        redirect('/master/region/listregion', 'refresh');
        
    }
}
?>