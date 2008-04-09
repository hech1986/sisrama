<?php

class StudentRep extends Controller {
	
    function byCity()
    {
        $this->load->view("report/student/summaryreport-bycityview.php");
    }

    function byRegion()
    {
        $this->load->view("report/student/summaryreport-byregionview.php");
    }

    function byRoom()
    {
        $this->load->view("report/student/summaryreport-roomview.php");
    }

    function byClass()
    {
        $this->load->view("report/student/summaryreport-classview.php");
    }

    function infoByClass()
    {
        $this->load->view("report/student/reportstudent-byclassview.php");
    }

    function infoByRoom()
    {
        $this->load->view("report/student/reportstudent-byroomview.php");
    }

}
?>