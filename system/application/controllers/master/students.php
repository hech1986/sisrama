<?php

class Students extends Controller {
	
    function listStudents()
    {
        
        $this->load->model('master/StudentsModel');

        $data = array(
                'studentsList' => $this->StudentsModel->listStudents(),
                'studentsData' => array('id' => ''
									,'regno' => ''
									,'name' => ''
									,'class' => ''
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
            'studentsData' => array('id' => $regData[0]->id
									,'regno' => $regData[0]->regno
									,'name' => $regData[0]->name
									,'class' => $regData[0]->class
									,'parent' => $regData[0]->parent
									,'address' => $regData[0]->address
									,'city' => $regData[0]->city
									,'phone' => $regData[0]->phone
									,'birthdate' => $regData[0]->birthdate
									,'birthplace' => $regData[0]->birthplace
									)
			
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