<?php
class StudentData {
			var $studentid = '';
			var $regnumber = '';
			var $name = '';
			var $classid = '';
			var $parent = '';
			var $address = '';
			var $cityid = '';
			var $phonenumber = '';
			var $birthdate = '';
			var $birthplace = '';
		};

class Student extends Controller {
	
    function page()
    {
        
        $this->load->model('master/StudentModel');
        
		$config['uri_segment'] = 4;
		$config['base_url'] = site_url("master/student/page/");
		$config['total_rows'] = $this->StudentModel->countStudent();
		$this->pagination->initialize($config);

		$page= $this->uri->segment(4, 0);

        $data = array(
                'studentList' => $this->StudentModel->listStudent($this->pagination->per_page ,$page )
                ,'studentData' => new StudentData()
				,'paging' => $this->pagination->create_links()
				);

        $this->load->view("master/studentview",$data);
    }
    
    function save()
    {
        $this->load->model('master/StudentModel');
        $this->StudentModel->saveStudent($_POST);

        redirect('/master/student/page', 'refresh');
    }

    function edit()
    {
        $this->load->model('master/StudentModel');
        
		$regData = $this->StudentModel->editStudent($this->uri->segment(5,0));

		$config['uri_segment'] = 4;
		$config['base_url'] = site_url("master/student/page/");
		$config['total_rows'] = $this->StudentModel->countStudent();
		$this->pagination->initialize($config);
		$page= $this->uri->segment(4, 0);

        $data = array(
						'studentList' => $this->StudentModel->listStudent($this->pagination->per_page ,$page )
						,'studentData' => $regData[0]
						,'paging' => $this->pagination->create_links()
					);

        $this->load->view("master/studentview",$data);

    }
    
    function remove()
    {
        $this->load->model('master/StudentModel');
        $this->StudentModel->removeStudent($this->uri->segment(5,0));
        $this->load->helper('url');
        redirect('/master/student/page', 'refresh');
        
    }
}
?>