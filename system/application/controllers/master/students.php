<?php

class Students extends Controller {
	
    function listStudents()
    {
        
        $this->load->model('master/StudentsModel');

        $data = array(
                'studentsList' => $this->StudentsModel->listStudents(),
                'studentsData' => array('regno' => ''
									,'name' => ''
									,'parent' => ''
									,'address' => ''
									,'city' => ''
									,'phone' => ''
									,'birthdate' => ''
									,'birthplace' => ''
									)
        );

        
        $this->load->view("master/studentsview",$data);
    }
    
    function save()
    {
        $this->load->model('master/StudentsModel');
        $arrData = $_POST;
	
        $this->StudentsModel->saveStudents($arrData);

        $this->load->helper('url');
        redirect('/master/students/liststudents', 'refresh');
    }

    function edit()
    {
        $this->load->model('master/StudentsModel');
        //display all data
        $regData = $this->StudentsModel->editStudents($this->uri->uri_to_assoc(4));
        $data = array(
            'studentsList' => $this->StudentsModel->listStudents(),
            'studentsData' => array()
        );

        $this->load->view("master/studentsview",$data);

    }
    
    function remove()
    {
        $this->load->model('master/StudentsModel');
        $this->StudentsModel->removeStudents($this->uri->uri_to_assoc(4));
        $this->load->helper('url');
        redirect('/master/students/liststudents', 'refresh');
        
    }
}
?>