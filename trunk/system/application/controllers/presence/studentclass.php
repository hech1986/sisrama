<?php

class StudentClass extends Controller {
	
    function page()
    {
        
        $this->load->model('presence/StudentClassModel');
		$data = array(
					'data' => $this->StudentClassModel->listStudentClass($_POST)
					);
		
        $this->load->view("presence/studentclassview",$data);
    }
    
    function save()
    {
        $this->load->model('presence/StudentClassModel');
        $this->StudentClassModel->savePlacement($_POST);
        $this->load->helper('url');
        redirect('/presence/studentclass/page', 'refresh');
    }

    function listByClass()
    {
        $this->load->model('presence/StudentClassModel');
        $data=$_POST;
		$classid=$this->uri->uri_to_assoc(4);
		
		$data['classid']=$classid['classid'];
		$viewData = array(
					'data' => $this->StudentClassModel->listStudentClass($data)
					);

        $this->load->view("presence/studentclassview",$viewData);

    }
    
    function remove()
    {
        $this->load->model('presence/StudentClassModel');
        $this->StudentClassModel->removeStudentClass($this->uri->uri_to_assoc(4));
        $this->load->helper('url');
        redirect('/presence/studentclass/page', 'refresh');
        
    }
}
?>