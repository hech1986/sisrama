<?php

class RoomData {
		var $roomid = '';
		var $name = '';
		var $parent = '';
		var $regionid = '';
		var $studentheadid = '';
		var $campusid = '';
		var $capacity = '';					
		var $filled = '';
	
}

class Room extends Controller {
	
    function page()
    {
        
        $this->load->model('master/RoomModel');
		
		$config['uri_segment'] = 4;
		$config['base_url'] = site_url("master/room/page/");
		$config['total_rows'] = $this->RoomModel->countRoom();
		$this->pagination->initialize($config);
		$page= $this->uri->segment(4, 0);
		
		$data=$this->RoomModel->listRoom($this->pagination->per_page ,$page );
		$data['roomData']=new RoomData();
		$data['paging'] = $this->pagination->create_links();
		$this->load->view("master/roomview",$data);
    }
    
    function save()
    {
        $this->load->model('master/RoomModel');
        $arrData = $_POST;
		unset($arrData['filled']);
        $this->RoomModel->saveRoom($arrData);
        redirect('/master/room/page', 'refresh');
    }

    function edit()
    {
        $this->load->model('master/RoomModel');
        //display all data
        $regData = $this->RoomModel->editRoom($this->uri->segment(5,0));
		$config['uri_segment'] = 4;
		$config['base_url'] = site_url("master/room/page/");
		$config['total_rows'] = $this->RoomModel->countRoom();
		$this->pagination->initialize($config);
		$page= $this->uri->segment(4, 0);
		
		$data=$this->RoomModel->listRoom($this->pagination->per_page ,$page );
		$data['roomData']=$regData[0];
		$data['paging'] = $this->pagination->create_links();
        $this->load->view("master/roomview",$data);
    }
    
    function remove()
    {
        $this->load->model('master/RoomModel');
        $this->RoomModel->removeRoom($this->uri->segment(5,0));

        redirect('/master/room/page', 'refresh');
        
    }
}
?>