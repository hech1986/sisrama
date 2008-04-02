<?php

class Classes extends Controller {
	
    function page()
    {
		
		$this->load->model('master/ClassModel');

		$config['uri_segment'] = 4;
		$config['base_url'] = site_url("master/classes/page/");
		$config['total_rows'] = $this->ClassModel->countClass();
		$this->pagination->initialize($config);

		$page= $this->uri->segment(4, 0);
        $data = array(
                'classList' => $this->ClassModel->listClass($this->pagination->per_page ,$page )
                ,'classData' => array('classid'=>'','name'=>'','level'=>'','name_ar' => '')
				,'paging' => $this->pagination->create_links()
				
        );

	$this->load->view("master/classview",$data);
    }
    
    function save()
    {
		//$this->load->helper(array('form', 'url'));
		//$this->load->library('validation');
			
		$rules['name']	= "required";
		
		$this->validation->set_rules($rules);
		if ($this->validation->run() == FALSE)
		{ 
				redirect('/master/classes/page/invalid', 'refresh');
		}else{
				$this->load->model('master/ClassModel');
				$this->ClassModel->saveClass($_POST);
				//$this->load->helper('url');
				redirect('/master/classes/page', 'refresh');
			
			}

    }

    function edit()
    {
        $this->load->model('master/ClassModel');
        //display all data
        $regData = $this->ClassModel->editClass($this->uri->segment(5,0));

		$config['uri_segment'] = 4;
		$config['base_url'] = site_url("master/classes/page/");
		$config['total_rows'] = $this->ClassModel->countClass();
		$this->pagination->initialize($config);

		$page= $this->uri->segment(4, 0);

        $data = array(
            'classList' => $this->ClassModel->listClass($this->pagination->per_page ,$page )
            ,'classData' => array(
										'classid'=>$regData[0]->classid
										,'name'=>$regData[0]->name
										,'level' => $regData[0]->level
										,'name_ar' => $regData[0]->name_ar
										)
			,'paging' => $this->pagination->create_links()
        );

        $this->load->view("master/classview",$data);

    }
    
    function remove()
    {
        $this->load->model('master/ClassModel');
        $this->ClassModel->removeClass($this->uri->segment(5,0));
        redirect('/master/classes/page', 'refresh');
        
    }
}
?>