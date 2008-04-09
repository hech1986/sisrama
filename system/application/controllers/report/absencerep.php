<?php

class AbsenceRep extends Controller {
	
    function inabsentia()
    {
        $this->load->view("report/absence/reportabsenceview.php");
    }

	function byRoom()
	{
        $this->load->view("report/absence/roomreportview.php");		
	}
	
	function byRoomAll()
	{
        $this->load->view("report/absence/roomreport-allview.php");		
	}
	
}
?>