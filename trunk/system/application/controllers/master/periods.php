<?php

class Periods extends Controller {
	
    function listPeriods()
    {
        
        $this->load->model('master/PeriodsModel');

        $data = array(
                'periodsList' => $this->PeriodsModel->listPeriods(),
                'periodsData' => array('id'=>'','begin'=>'','end'=>'','active'=>'')
        );

        
        $this->load->view("master/periodsview",$data);
    }
    
    function save()
    {
        $this->load->model('master/PeriodsModel');
        $arrData = $_POST;
        
        if(empty($arrData['active'])){
             $arrData['active']=0; 
        }
        $this->PeriodsModel->savePeriods($arrData);

        $this->load->helper('url');
        redirect('/master/periods/listperiods', 'refresh');
    }

    function edit()
    {
        $this->load->model('master/PeriodsModel');
        //display all data
        $regData = $this->PeriodsModel->editPeriods($this->uri->uri_to_assoc(4));
        $data = array(
            'periodsList' => $this->PeriodsModel->listPeriods(),
            'periodsData' => array('id'=>$regData[0]->id
                                    ,'begin'=>$regData[0]->begin
                                    ,'end'=>$regData[0]->end
                                    ,'active'=>$regData[0]->active)
        );

        $this->load->view("master/periodsview",$data);

    }
    
    function remove()
    {
        $this->load->model('master/PeriodsModel');
        $this->PeriodsModel->removePeriods($this->uri->uri_to_assoc(4));
        $this->load->helper('url');
        redirect('/master/periods/listperiods', 'refresh');
        
    }
}
?>