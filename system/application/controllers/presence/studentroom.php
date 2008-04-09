<?php

class StudentRoom extends Controller {
	
    function page()
    {
        
        $this->load->model('presence/StudentRoomModel');
		$data = array(
					'data' => $this->StudentRoomModel->listStudentRoom($_POST)
					);
		
        $this->load->view("presence/studentroomview",$data);
    }
    
    function save()
    {
        $this->load->model('presence/StudentRoomModel');
        $this->StudentRoomModel->savePlacement($_POST);
        $this->load->helper('url');
        redirect('/presence/studentroom/page', 'refresh');
    }

    function listByRoom()
    {
        $this->load->model('presence/StudentRoomModel');
        $data=$_POST;
		$roomid=$this->uri->uri_to_assoc(4);
		
		$data['roomid']=$roomid['roomid'];
		$viewData = array(
					'data' => $this->StudentRoomModel->listStudentRoom($data)
					);

        $this->load->view("presence/studentroomview",$viewData);

    }
    
    function remove()
    {
        $this->load->model('presence/StudentRoomModel');
        $this->StudentRoomModel->removeStudentRoom($this->uri->uri_to_assoc(4));
        $this->load->helper('url');
        redirect('/presence/studentRoom/page', 'refresh');
        
    }
}
?>