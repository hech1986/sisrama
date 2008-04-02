<?php

class Consulate extends Controller {
	
    function page()
    {
		
		$this->load->model('master/ConsulateModel');

		$config['uri_segment'] = 4;
		$config['base_url'] = site_url("master/consulate/page/");
		$config['total_rows'] = $this->ConsulateModel->countConsulate();
		$this->pagination->initialize($config);

		$page= $this->uri->segment(4, 0);
        $data = array(
                'consulateList' => $this->ConsulateModel->listConsulate($this->pagination->per_page ,$page )
                ,'consulateData' => array('id'=>'','name'=>'')
				,'paging' => $this->pagination->create_links()
				
        );

	$this->load->view("master/consulateview",$data);
    }
    
    function save()
    {
		//$this->load->helper(array('form', 'url'));
		//$this->load->library('validation');
			
		$rules['consulatename']	= "required";
		
		$this->validation->set_rules($rules);
		if ($this->validation->run() == FALSE)
		{ 
				redirect('/master/consulate/page/invalid', 'refresh');
		}else{
				$this->load->model('master/ConsulateModel');
				$this->ConsulateModel->saveConsulate($_POST);
				//$this->load->helper('url');
				redirect('/master/consulate/page', 'refresh');
			
			}

    }

    function edit()
    {
        $this->load->model('master/ConsulateModel');
        //display all data
        $regData = $this->ConsulateModel->editConsulate($this->uri->segment(5,0));

		$config['uri_segment'] = 4;
		$config['base_url'] = site_url("master/consulate/page/");
		$config['total_rows'] = $this->ConsulateModel->countConsulate();
		$this->pagination->initialize($config);

		$page= $this->uri->segment(4, 0);

        $data = array(
            'consulateList' => $this->ConsulateModel->listConsulate($this->pagination->per_page ,$page )
            ,'consulateData' => array('id'=>$regData[0]->consulateid,'name'=>$regData[0]->consulatename)
			,'paging' => $this->pagination->create_links()
        );

        $this->load->view("master/consulateview",$data);

    }
    
    function remove()
    {
        $this->load->model('master/ConsulateModel');
        $this->ConsulateModel->removeConsulate($this->uri->segment(5,0));
        redirect('/master/consulate/page', 'refresh');
        
    }
}
?>