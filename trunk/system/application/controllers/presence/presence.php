<?php

class Presence extends Controller {
	
    function page()
    {
		
		$this->load->model('presence/PresenceModel');

		$regionId='';
		$campusId='';
		$page= $this->uri->segment(4, 0);
		$dataInit=array('presenceid'=>''
						,'presencedate'=>''
						,'regionid' => ''
						,'roomid'=>''
						,'campusid'=>''
						,'studentheadid'=>''
						,'studentname'=>''
						,'parent'=>''
						,'capacity'=>''
						);
		
        $data = array(
                'presenceList' => $this->PresenceModel->listPresence()
                ,'presenceData' => $dataInit
				,'regionList' => $this->PresenceModel->listRegion()
				,'campusList' => $this->PresenceModel->listCampus()
				,'roomList' =>$this->PresenceModel->listRoom($campusId,$regionId)
        );

	$this->load->view("presence/presenceview",$data);
    }
    
    function save()
    {
		//$this->load->helper(array('form', 'url'));
		//$this->load->library('validation');
			
		$rules['presencename']	= "required";
		
		$this->validation->set_rules($rules);
		if ($this->validation->run() == FALSE)
		{ 
				redirect('/presence/presence/page/invalid', 'refresh');
		}else{
				$this->load->model('presence/PresenceModel');
				$this->PresenceModel->savePresence($_POST);
				//$this->load->helper('url');
				redirect('/presence/presence/page', 'refresh');
			
			}

    }

    function edit()
    {
        $this->load->model('presence/PresenceModel');
        //display all data
        $regData = $this->PresenceModel->editPresence($this->uri->segment(5,0));

		$config['uri_segment'] = 4;
		$config['base_url'] = site_url("presence/presence/page/");
		$config['total_rows'] = $this->PresenceModel->countPresence();
		$this->pagination->initialize($config);

		$page= $this->uri->segment(4, 0);

        $data = array(
                'dataList' => $this->PresenceModel->listPresence($this->pagination->per_page ,$page )
                ,'presenceData' => array('presenceid'=>$regData[0]->presenceid,'presencename'=>$regData[0]->presencename,'consulateid' => $regData[0]->consulateid)
				,'paging' => $this->pagination->create_links()
        );

        $this->load->view("presence/presenceview",$data);

    }
    
    function remove()
    {
        $this->load->model('presence/PresenceModel');
        $this->PresenceModel->removePresence($this->uri->segment(5,0));
        redirect('/presence/presence/page', 'refresh');
        
    }
}
?>