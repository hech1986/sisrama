<?php

class StudentRoom extends Controller {
	
    function listStudentRoom()
    {
        
        $this->load->model('master/StudentRoomModel');
        $this->load->view("master/studentroomview",$this->StudentRoomModel->listStudentRoom($_POST));
    }
    
    function save()
    {
        $this->load->model('master/StudentRoomModel');
        $this->StudentRoomModel->savePlacement($_POST);
        $this->load->helper('url');
        redirect('/master/studentroom/liststudentroom', 'refresh');
    }

    function listByRoom()
    {
        $this->load->model('master/StudentRoomModel');
        $data=$_POST;
		$roomid=$this->uri->uri_to_assoc(4);
		
		$data['roomid']=$roomid['roomid'];
		
        $this->load->view("master/studentroomview",$this->StudentRoomModel->listStudentRoom($data));

    }
    
    function remove()
    {
        $this->load->model('master/StudentRoomModel');
        $this->StudentRoomModel->removeStudentRoom($this->uri->uri_to_assoc(4));
        $this->load->helper('url');
        redirect('/master/studentRoom/listcampus', 'refresh');
        
    }
}
?>