<?php

class Officer extends Controller {
	
    function page()
    {
		
		$this->load->model('master/OfficerModel');

		$config['uri_segment'] = 4;
		$config['base_url'] = site_url("master/officer/page/");
		$config['total_rows'] = $this->OfficerModel->countOfficer();
		$this->pagination->initialize($config);

		$page= $this->uri->segment(4, 0);
        $data = array(
                'officerList' => $this->OfficerModel->listOfficer($this->pagination->per_page ,$page )
                ,'officerData' => array('officerid'=>'','officername'=>'')
				,'paging' => $this->pagination->create_links()
				
        );

	$this->load->view("master/officerview",$data);
    }
    
    function save()
    {
		//$this->load->helper(array('form', 'url'));
		//$this->load->library('validation');
			
		$rules['officername']	= "required";
		
		$this->validation->set_rules($rules);
		if ($this->validation->run() == FALSE)
		{ 
				redirect('/master/officer/page/invalid', 'refresh');
		}else{
				$this->load->model('master/OfficerModel');
				$this->OfficerModel->saveOfficer($_POST);
				//$this->load->helper('url');
				redirect('/master/officer/page', 'refresh');
			
			}

    }

    function edit()
    {
        $this->load->model('master/OfficerModel');
        //display all data
        $regData = $this->OfficerModel->editOfficer($this->uri->segment(5,0));

		$config['uri_segment'] = 4;
		$config['base_url'] = site_url("master/officer/page/");
		$config['total_rows'] = $this->OfficerModel->countOfficer();
		$this->pagination->initialize($config);

		$page= $this->uri->segment(4, 0);

        $data = array(
            'officerList' => $this->OfficerModel->listOfficer($this->pagination->per_page ,$page )
            ,'officerData' => array('officerid'=>$regData[0]->officerid,'officername'=>$regData[0]->officername)
			,'paging' => $this->pagination->create_links()
        );

        $this->load->view("master/officerview",$data);

    }
    
    function remove()
    {
        $this->load->model('master/OfficerModel');
        $this->OfficerModel->removeOfficer($this->uri->segment(5,0));
        redirect('/master/officer/page', 'refresh');
        
    }
}
?>