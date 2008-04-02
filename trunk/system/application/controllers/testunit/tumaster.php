<?

class TUMaster extends Controller 
{
    function testRegionModel()
    {
        $this->load->library('unit_test');
        
        //model
        $this->load->model('master/RegionModel');
        
        //insert test record
        $arrPost = array('regionname' => 'TUTESTREGION');
        $this->RegionModel->saveRegion($arrPost);
        
        $rs=$this->db->get_where('region',$arrPost);
        
        $row = $rs->result() ; 
	    echo $this->unit->run($row[0]->regionname, $arrPost['regionname'], 'Master Region Model Save' );
   	     
        //update
        $arrPost = array('regionname' => 'TUTESTREGIONUpdate','regionid'=> $row[0]->regionid);
        $this->RegionModel->saveRegion($arrPost);
        
 		$rs = $this->db->get_where('region', array('regionname' => $arrPost['regionname']));
        $row = $rs->result() ; 
        echo $this->unit->run($row[0]->regionname, $arrPost['regionname'], 'Master Region Model Update' );
 
		//remove test record
        $this->RegionModel->removeRegion($arrPost['regionid']);
        
		$this->db->where('regionid', $arrPost['regionid']); 
		$this->db->from('region');
		$countRow=$this->db->count_all_results();
        echo $this->unit->run($countRow, 0, 'Master Region Model Remove' );

    }

    function testCampusModel()
    {
        $this->load->library('unit_test');
        
        //model
        $this->load->model('master/CampusModel');
        
        //insert test record
        $arrPost = array('campusname' => 'TUTESTCAMPUS');
        $this->CampusModel->saveCampus($arrPost);
		$rs=$this->db->get_where('campus',$arrPost);
        $row = $rs->result() ; 
        echo $this->unit->run($row[0]->campusname, $arrPost['campusname'], 'Master Campus Model Save' );
  
        //update
        $arrPost = array('campusname' => 'TUTESTCampusUpdate','campusid'=> $row[0]->campusid);
        $this->CampusModel->saveCampus($arrPost);
        $arrPost = array('campusname' => 'TUTESTCampusUpdate','campusid'=> $row[0]->campusid);
 		$rs = $this->db->get_where('campus', array('campusname' => $arrPost['campusname']));
        $row = $rs->result() ; 
        echo $this->unit->run($row[0]->campusname, $arrPost['campusname'], 'Master Campus Model Update' );

		//remove test record
        $this->CampusModel->removeCampus($arrPost['campusid']);
		$this->db->where('campusid', $arrPost['campusid']); 
		$this->db->from('campus');
		$countRow=$this->db->count_all_results();
        echo $this->unit->run($countRow, 0, 'Master Campus Model Remove' );

    }

    function testPeriodModel()
    {
		//prepare
        $this->load->library('unit_test');
        
        //model
        $this->load->model('master/PeriodModel');

		//create
        $arrPost = array('begin' => '2008-02-10','end' => '2008-02-11','active' => 1);
        $this->PeriodModel->savePeriod($arrPost);
	
		$this->db->where('fromdate', $arrPost['begin']);
		$this->db->where('todate', $arrPost['end']);
		$rs=$this->db->get('period'); 
        $row = $rs->result() ; 
        echo $this->unit->run($row[0]->fromdate, $arrPost['begin'], 'Master Period Model Save' );

		//UPDATE
		$arrPost = array('begin' => '2008-02-09','periodid'=> $row[0]->periodid,'end' => '2008-02-11','active' => 1);
        $this->PeriodModel->savePeriod($arrPost);
        
		$this->db->where('fromdate', $arrPost['begin']);
		$this->db->where('todate', $arrPost['end']);
		$rs=$this->db->get('period'); 

        $row = $rs->result() ;
        echo $this->unit->run($row[0]->fromdate,$arrPost['begin'] , 'Master Period Model Update' );
        //remove test record
        $this->PeriodModel->removePeriod($arrPost['periodid']);
        
		$this->db->where('periodid', $arrPost['periodid']); 
		$this->db->from('period');
		$countRow=$this->db->count_all_results();

        
        echo $this->unit->run($countRow, 0, 'Master Period Model Remove' );

    }
	
	function testStudentModel()
    {
		//prepare
        $this->load->library('unit_test');
        
        //model
        $this->load->model('master/StudentModel');
		
		//create
        $arrPost = array('regnumber' => 'student1'
									,'name' => 'RADHITYA'
									,'classid' => '1'
									,'parent' => 'B&F'
									,'address' => 'Jl. Jawa'
									,'cityid' => '1'
									,'phonenumber' => '0101010101'
									,'birthdate' => 'Depok'
									,'birthplace' => '0101010101'
									);
        $this->StudentModel->saveStudent($arrPost);
	
		$this->db->where('regnumber', $arrPost['regnumber']);
		$rs=$this->db->get('student');
        $row = $rs->result() ; 
        echo $this->unit->run($row[0]->regnumber, $arrPost['regnumber'], 'Master Student Model Save' );

		//UPDATE
		$arrPost = array('regnumber' => 'student1'
							,'name' => 'RADHITYA RIZQI'
							,'classid' => '1A'
							,'parent' => 'B&F'
							,'address' => 'Jl. Jawa'
							,'cityid' => 'Depok'
							,'phonenumber' => '0101010101'
							,'birthdate' => 'Depok'
							,'birthplace' => '0101010101'
							,'studentid'=> $row[0]->studentid);

        $this->StudentModel->saveStudent($arrPost);
        
		$this->db->where('regnumber', $arrPost['regnumber']);
		$rs=$this->db->get('student');
		
        $row = $rs->result() ;
        echo $this->unit->run($row[0]->name,$arrPost['name'] , 'Master Student Model Update' );
        
        //remove test record
        $this->StudentModel->removeStudent($arrPost['studentid']);
        
		$this->db->where('studentid', $arrPost['studentid']); 
		$this->db->from('student');
		$countRow=$this->db->count_all_results();

        echo $this->unit->run($countRow, 0, 'Master Student Model Remove' );
		
	}

	function testRoomModel()
	{
		//todo: create complete test unit to check table depedency
		//prepare
		$this->load->library('unit_test');
		
		//model
		$this->load->model('master/RoomModel');
		
		//create
		$arrPost = array('name' => 'roomtest'
									 ,'parent' => 'parenttest'
									 ,'regionid'=>99999
									 ,'studentheadid'=>9999999999999
									 ,'campusid' =>99999
									 ,'capacity' =>999);

		$this->RoomModel->saveRoom($arrPost);
		$this->db->where('name', $arrPost['name']);
		$rs=$this->db->get('room');
		$row = $rs->result() ; 
		echo $this->unit->run($row[0]->name, $arrPost['name'], 'Master Room Model Save' );

		//UPDATE
		$arrPost = array('name' => 'roomtestupdate'
									,'parent' => 'parenttest'
									,'regionid'=>99999
									,'studentheadid'=>999999999999
									,'campusid' =>99999
									,'capacity' =>999
									,'roomid'=> $row[0]->roomid);

		$this->RoomModel->saveRoom($arrPost);		
		$this->db->where('roomid', $row[0]->roomid);
		$rs=$this->db->get('room');
		$row = $rs->result() ; 
		echo $this->unit->run($row[0]->name,$arrPost['name'] , 'Master Room Model Update' );
		
		//remove test record
		$this->RoomModel->removeRoom($arrPost['roomid']);
		$this->db->where('roomid', $arrPost['roomid']); 
		$this->db->from('room');
		$countRow=$this->db->count_all_results();

		echo $this->unit->run($countRow, 0, 'Master Room Model Remove' );

		}
				
	function testConsulateModel()
    {
        $this->load->library('unit_test');
        
        //model
        $this->load->model('master/ConsulateModel');
        
        //insert test record
        $arrPost = array('consulatename' => 'TUTESTCONSULAT');
        $this->ConsulateModel->saveConsulate($arrPost);
        
        $rs=$this->db->get_where('consulate',$arrPost);
        
        $row = $rs->result() ; 
	    echo $this->unit->run($row[0]->consulatename, $arrPost['consulatename'], 'Master Consulate Model Save' );
   	     
        //update
        $arrPost = array('consulatename' => 'TUTESTCONSULATUpdate','consulateid'=> $row[0]->consulateid);
        $this->ConsulateModel->saveConsulate($arrPost);
        
 		$rs = $this->db->get_where('consulate', array('consulatename' => $arrPost['consulatename']));
        $row = $rs->result() ; 
        echo $this->unit->run($row[0]->consulatename, $arrPost['consulatename'], 'Master Consulate Model Update' );
 
		//remove test record
        $this->ConsulateModel->removeConsulate($arrPost['consulateid']);
        
		$this->db->where('consulateid', $arrPost['consulateid']); 
		$this->db->from('consulate');
		$countRow=$this->db->count_all_results();
        echo $this->unit->run($countRow, 0, 'Master Consulate Model Remove' );

    }
	
		function testCityModel()
    {
        $this->load->library('unit_test');
        
        //model
        $this->load->model('master/CityModel');
        
        //insert test record
        $arrPost = array('cityname' => 'TUTESTCITY');
        $this->CityModel->saveCity($arrPost);
        
        $rs=$this->db->get_where('city',$arrPost);
        
        $row = $rs->result() ; 
	    echo $this->unit->run($row[0]->cityname, $arrPost['cityname'], 'Master City Model Save' );
   	     
        //update
        $arrPost = array('cityname' => 'TUTESTCITYUpdate','cityid'=> $row[0]->cityid);
        $this->CityModel->saveCity($arrPost);
        
 		$rs = $this->db->get_where('city', array('cityname' => $arrPost['cityname']));
        $row = $rs->result() ; 
        echo $this->unit->run($row[0]->cityname, $arrPost['cityname'], 'Master City Model Update' );
 
		//remove test record
        $this->CityModel->removeCity($arrPost['cityid']);
        
		$this->db->where('cityid', $arrPost['cityid']); 
		$this->db->from('city');
		$countRow=$this->db->count_all_results();
        echo $this->unit->run($countRow, 0, 'Master City Model Remove' );

    }
	
	function testClassModel()
    {
        $this->load->library('unit_test');
        
        //model
        $this->load->model('master/ClassModel');
        
        //insert test record
        $arrPost = array('name' => 'TUTESTCLASSES','level'=>1);
        $this->ClassModel->saveClass($arrPost);
        
        $rs=$this->db->get_where('dnclass',$arrPost);
        
        $row = $rs->result() ; 
	    echo $this->unit->run($row[0]->name, $arrPost['name'], 'Master Class Model Save' );
   	     
        //update
        $arrPost = array('name' => 'TUTESTCLASSESUpdate','classid'=> $row[0]->classid,'level'=>1);
        $this->ClassModel->saveClass($arrPost);
        
 		$rs = $this->db->get_where('dnclass', array('name' => $arrPost['name']));
        $row = $rs->result() ; 
        echo $this->unit->run($row[0]->name, $arrPost['name'], 'Master Class Model Update' );
 
		//remove test record
        $this->ClassModel->removeClass($arrPost['classid']);
        
		$this->db->where('classid', $arrPost['classid']); 
		$this->db->from('dnclass');
		$countRow=$this->db->count_all_results();
        echo $this->unit->run($countRow, 0, 'Master Class Model Remove' );
    }
	
	    function testOfficerModel()
    {
        $this->load->library('unit_test');
        
        //model
        $this->load->model('master/OfficerModel');
        
        //insert test record
        $arrPost = array('officername' => 'TUTESTOFFICER');
        $this->OfficerModel->saveOfficer($arrPost);
        
        $rs=$this->db->get_where('officer',$arrPost);
        
        $row = $rs->result() ; 
	    echo $this->unit->run($row[0]->officername, $arrPost['officername'], 'Master Officer Model Save' );
   	     
        //update
        $arrPost = array('officername' => 'TUTESTOFFICERUpdate','officerid'=> $row[0]->officerid);
        $this->OfficerModel->saveOfficer($arrPost);
        
 		$rs = $this->db->get_where('officer', array('officername' => $arrPost['officername']));
        $row = $rs->result() ; 
        echo $this->unit->run($row[0]->officername, $arrPost['officername'], 'Master Officer Model Update' );
 
		//remove test record
        $this->OfficerModel->removeOfficer($arrPost['officerid']);
        
		$this->db->where('officerid', $arrPost['officerid']); 
		$this->db->from('officer');
		$countRow=$this->db->count_all_results();
        echo $this->unit->run($countRow, 0, 'Master Officer Model Remove' );

    }
}

?> 
