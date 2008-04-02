<?php

class Period extends Controller {
	
    function page()
    {
        
        $this->load->model('master/PeriodModel');

		$config['uri_segment'] = 4;
		$config['base_url'] = site_url("master/period/page/");
		$config['total_rows'] = $this->PeriodModel->countPeriod();
		$this->pagination->initialize($config);

		$page= $this->uri->segment(4, 0);
        $data = array(
                'periodList' => $this->PeriodModel->listPeriod($this->pagination->per_page ,$page )
                ,'periodData' => array('id'=>'','begin'=>'','end'=>'','active'=>'')
				,'paging' => $this->pagination->create_links()
				
        );

        $this->load->view("master/periodview",$data);
    }
    
    function save()
    {
        $this->load->model('master/PeriodModel');
        $arrData = $_POST;
        
        if(empty($arrData['active'])){
             $arrData['active']=0; 
        }
        $this->PeriodModel->savePeriod($arrData);

        redirect('/master/period/page', 'refresh');
    }

    function edit()
    {
        $this->load->model('master/PeriodModel');
        $regData = $this->PeriodModel->editPeriod($this->uri->segment(5,0));

		$config['uri_segment'] = 4;
		$config['base_url'] = site_url("master/period/page/");
		$config['total_rows'] = $this->PeriodModel->countPeriod();
		$this->pagination->initialize($config);

		$page= $this->uri->segment(4, 0);

        $data = array(
            'periodList' => $this->PeriodModel->listPeriod($this->pagination->per_page ,$page )
            ,'periodData' => array('id'=>$regData[0]->periodid
                                    ,'begin'=>$regData[0]->fromdate
                                    ,'end'=>$regData[0]->todate
                                    ,'active'=>$regData[0]->active)
			,'paging' => $this->pagination->create_links()
        );

        $this->load->view("master/periodview",$data);

    }
    
    function remove()
    {
        $this->load->model('master/PeriodModel');
        $this->PeriodModel->removePeriod($this->uri->segment(5,0));
        redirect('/master/period/page', 'refresh');
        
    }
}
?>