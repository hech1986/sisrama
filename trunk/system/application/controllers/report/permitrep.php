<?php

class PermitRep extends Controller {

	function byStudent()
	{
        $this->load->view("report/permit/reportpermitstudentview.php");		
	}

	function listPermit()
	{
        $this->load->view("report/permit/reportpermitdateview.php");		
	}

	function byClass()
	{
        $this->load->view("report/permit/reportpermitclassview.php");		
	}

	function byRoom()
	{
        $this->load->view("report/permit/reportpermitroomview.php");		
	}

	function late()
	{
        $this->load->view("report/permit/reportpermitlateview.php");		
	}
	
}
?>