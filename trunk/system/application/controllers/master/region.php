<?php

class Region extends Controller {
	
    function page()
    {
		
		$this->load->model('master/RegionModel');

		$config['uri_segment'] = 4;
		$config['base_url'] = site_url("master/region/page/");
		$config['total_rows'] = $this->RegionModel->countRegion();
		$this->pagination->initialize($config);

		$page= $this->uri->segment(4, 0);
        $data = array(
                'regionList' => $this->RegionModel->listRegion($this->pagination->per_page ,$page )
                ,'regionData' => array('id'=>'','name'=>'')
				,'paging' => $this->pagination->create_links()
				
        );

	$this->load->view("master/regionview",$data);
    }
    
    function save()
    {
		//$this->load->helper(array('form', 'url'));
		//$this->load->library('validation');
			
		$rules['regionname']	= "required";
		
		$this->validation->set_rules($rules);
		if ($this->validation->run() == FALSE)
		{ 
				redirect('/master/region/page/invalid', 'refresh');
		}else{
				$this->load->model('master/RegionModel');
				$this->RegionModel->saveRegion($_POST);
				//$this->load->helper('url');
				redirect('/master/region/page', 'refresh');
			
			}

    }

    function edit()
    {
        $this->load->model('master/RegionModel');
        //display all data
        $regData = $this->RegionModel->editRegion($this->uri->segment(5,0));

		$config['uri_segment'] = 4;
		$config['base_url'] = site_url("master/region/page/");
		$config['total_rows'] = $this->RegionModel->countRegion();
		$this->pagination->initialize($config);

		$page= $this->uri->segment(4, 0);

        $data = array(
            'regionList' => $this->RegionModel->listRegion($this->pagination->per_page ,$page )
            ,'regionData' => array('id'=>$regData[0]->regionid,'name'=>$regData[0]->regionname)
			,'paging' => $this->pagination->create_links()
        );

        $this->load->view("master/regionview",$data);

    }
    
    function remove()
    {
        $this->load->model('master/RegionModel');
        $this->RegionModel->removeRegion($this->uri->segment(5,0));
        redirect('/master/region/page', 'refresh');
        
    }
}
?>