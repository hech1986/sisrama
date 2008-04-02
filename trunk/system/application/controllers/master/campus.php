<?php

class Campus extends Controller {
	
    function page()
    {
        
        $this->load->model('master/CampusModel');

		$config['uri_segment'] = 4;
		$config['base_url'] = site_url("master/campus/page/");
		$config['total_rows'] = $this->CampusModel->countCampus();
		$this->pagination->initialize($config);

		$page= $this->uri->segment(4, 0);
        $data = array(
                'campusList' => $this->CampusModel->listCampus($this->pagination->per_page ,$page )
                ,'campusData' => array('id'=>'','name'=>'')
				,'paging' => $this->pagination->create_links()
				
        );
        $this->load->view("master/campusview",$data);
    }
    
    function save()
    {
		$rules['campusname']	= "required";
		
		$this->validation->set_rules($rules);
		if ($this->validation->run() == FALSE)
		{ 
				redirect('/master/campus/page/invalid', 'refresh');
		}else{
				$this->load->model('master/CampusModel');
				$this->CampusModel->saveCampus($_POST);
				redirect('/master/campus/page', 'refresh');
			
			}

    }

    function edit()
    {
        $this->load->model('master/CampusModel');
        //display all data
        $regData = $this->CampusModel->editCampus($this->uri->segment(5,0));

		$config['uri_segment'] = 4;
		$config['base_url'] = site_url("master/campus/page/");
		$config['total_rows'] = $this->CampusModel->countCampus();
		$this->pagination->initialize($config);

		$page= $this->uri->segment(4, 0);

        $data = array(
            'campusList' => $this->CampusModel->listCampus($this->pagination->per_page ,$page )
            ,'campusData' => array('id'=>$regData[0]->campusid,'name'=>$regData[0]->campusname)
			,'paging' => $this->pagination->create_links()
        );

        $this->load->view("master/campusview",$data);

    }
    
    function remove()
    {		
		$this->load->model('master/CampusModel');
        $this->CampusModel->removeCampus($this->uri->segment(5,0));
        redirect('/master/campus/page', 'refresh');
    }
}
?>