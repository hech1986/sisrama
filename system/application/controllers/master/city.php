<?php

class City extends Controller {
	
    function page()
    {
		
		$this->load->model('master/CityModel');

		$config['uri_segment'] = 4;
		$config['base_url'] = site_url("master/city/page/");
		$config['total_rows'] = $this->CityModel->countCity();
		$this->pagination->initialize($config);

		$page= $this->uri->segment(4, 0);
        $data = array(
                'dataList' => $this->CityModel->listCity($this->pagination->per_page ,$page )
                ,'cityData' => array('cityid'=>'','cityname'=>'','consulateid' => '')
				,'paging' => $this->pagination->create_links()
        );

	$this->load->view("master/cityview",$data);
    }
    
    function save()
    {
		//$this->load->helper(array('form', 'url'));
		//$this->load->library('validation');
			
		$rules['cityname']	= "required";
		
		$this->validation->set_rules($rules);
		if ($this->validation->run() == FALSE)
		{ 
				redirect('/master/city/page/invalid', 'refresh');
		}else{
				$this->load->model('master/CityModel');
				$this->CityModel->saveCity($_POST);
				//$this->load->helper('url');
				redirect('/master/city/page', 'refresh');
			
			}

    }

    function edit()
    {
        $this->load->model('master/CityModel');
        //display all data
        $regData = $this->CityModel->editCity($this->uri->segment(5,0));

		$config['uri_segment'] = 4;
		$config['base_url'] = site_url("master/city/page/");
		$config['total_rows'] = $this->CityModel->countCity();
		$this->pagination->initialize($config);

		$page= $this->uri->segment(4, 0);

        $data = array(
                'dataList' => $this->CityModel->listCity($this->pagination->per_page ,$page )
                ,'cityData' => array('cityid'=>$regData[0]->cityid,'cityname'=>$regData[0]->cityname,'consulateid' => $regData[0]->consulateid)
				,'paging' => $this->pagination->create_links()
        );

        $this->load->view("master/cityview",$data);

    }
    
    function remove()
    {
        $this->load->model('master/CityModel');
        $this->CityModel->removeCity($this->uri->segment(5,0));
        redirect('/master/city/page', 'refresh');
        
    }
}
?>