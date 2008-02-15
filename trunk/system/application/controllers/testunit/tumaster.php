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
        
        $sql = 'SELECT id,name FROM regions where name= ?';
        $rs = $this->db->query($sql,array($arrPost['regionname'])); 
        $row = $rs->result() ; 
        echo $this->unit->run($row[0]->name, $arrPost['regionname'], 'Master Region Model Save' );
        
        //update
        $arrPost = array('regionname' => 'TUTESTREGIONUpdate','regionid'=> $row[0]->id);
        $this->RegionModel->saveRegion($arrPost);
        
        $sql = 'SELECT id,name FROM regions where name= ?';
        $rs = $this->db->query($sql,array($arrPost['regionname'])); 
        $row = $rs->result() ; 
        echo $this->unit->run($row[0]->name, $arrPost['regionname'], 'Master Region Model Update' );
        
        //remove test record
        $this->RegionModel->removeRegion($arrPost);
        
        $sql = 'SELECT count(*) as resultRec FROM regions where id= ? ';
        $rs = $this->db->query($sql,array($row[0]->id)); 
        $row = $rs->result() ; 
        echo $this->unit->run($row[0]->resultRec, 0, 'Master Region Model Remove' );

    }

    function testCampusModel()
    {
        $this->load->library('unit_test');
        
        //model
        $this->load->model('master/CampusModel');
        
        //insert test record
        $arrPost = array('campusname' => 'TUTESTCAMPUS');
        $this->CampusModel->saveCampus($arrPost);
        
        $sql = 'SELECT id,name FROM campus where name= ?';
        $rs = $this->db->query($sql,array($arrPost['campusname'])); 
        $row = $rs->result() ; 
        echo $this->unit->run($row[0]->name, $arrPost['campusname'], 'Master Campus Model Save' );
        
        //update
        $arrPost = array('campusname' => 'TUTESTCampusUpdate','campusid'=> $row[0]->id);
        $this->CampusModel->saveCampus($arrPost);
        
        $sql = 'SELECT id,name FROM campus where name= ?';
        $rs = $this->db->query($sql,array($arrPost['campusname'])); 
        $row = $rs->result() ; 
        echo $this->unit->run($row[0]->name, $arrPost['campusname'], 'Master Campus Model Update' );
        
        //remove test record
        $this->CampusModel->removeCampus($arrPost);
        
        $sql = 'SELECT count(*) as resultRec FROM campus where id= ? ';
        $rs = $this->db->query($sql,array($row[0]->id)); 
        $row = $rs->result() ; 
        echo $this->unit->run($row[0]->resultRec, 0, 'Master Campus Model Remove' );

    }

    function testPeriodsModel()
    {
		//prepare
        $this->load->library('unit_test');
        
        //model
        $this->load->model('master/PeriodsModel');

		//create
        $arrPost = array('begin' => '2008-02-10','end' => '2008-02-11','active' => 1);
        $this->PeriodsModel->savePeriods($arrPost);
	
        $sql = 'SELECT id,begin FROM periods where begin= ? and end=? and active=?';
        $rs = $this->db->query($sql,array($arrPost['begin'],$arrPost['end'],$arrPost['active'])); 
        $row = $rs->result() ; 
        echo $this->unit->run($row[0]->begin, $arrPost['begin'], 'Master Periods Model Save' );

		//UPDATE
		$arrPost = array('begin' => '2008-02-09','periodsid'=> $row[0]->id,'end' => '2008-02-11','active' => 1);
        $this->PeriodsModel->savePeriods($arrPost);
        
        $sql = 'SELECT id,begin FROM periods where begin= ? and end=? and active=?';
        $rs = $this->db->query($sql,array($arrPost['begin'],$arrPost['end'],$arrPost['active'])); 
        $row = $rs->result() ;
        echo $this->unit->run($row[0]->begin,$arrPost['begin'] , 'Master Periods Model Update' );
        
        //remove test record
        $this->PeriodsModel->removePeriods($arrPost);
        
        $sql = 'SELECT count(*) as resultRec FROM periods where id= ? ';
        $rs = $this->db->query($sql,array($row[0]->id)); 
        $row = $rs->result() ; 
        echo $this->unit->run($row[0]->resultRec, 0, 'Master Periods Model Remove' );

    }
	
	function testStudentsModel()
    {
		//prepare
        $this->load->library('unit_test');
        
        //model
        $this->load->model('master/StudentsModel');
		
		//create
        $arrPost = array('regno' => 'student1'
									,'name' => 'RADHITYA'
									,'parent' => 'B&F'
									,'address' => 'Jl. Jawa'
									,'city' => 'Depok'
									,'phone' => '0101010101'
									,'birthdate' => 'Depok'
									,'birthplace' => '0101010101'
									);
        $this->StudentsModel->saveStudents($arrPost);
	
        $sql = 'SELECT id,regno FROM students where regno=?';
        $rs = $this->db->query($sql,array($arrPost['regno'])); 
        $row = $rs->result() ; 
        echo $this->unit->run($row[0]->regno, $arrPost['regno'], 'Master Students Model Save' );

		//UPDATE
		$arrPost = array('regno' => 'student1'
							,'name' => 'RADHITYA RIZQI'
							,'parent' => 'B&F'
							,'address' => 'Jl. Jawa'
							,'city' => 'Depok'
							,'phone' => '0101010101'
							,'birthdate' => 'Depok'
							,'birthplace' => '0101010101'
							,'studentsid'=> $row[0]->id);

        $this->StudentsModel->saveStudents($arrPost);
        
        $sql = 'SELECT id,regno FROM students where id=?';
        $rs = $this->db->query($sql,array($row[0]->id)); 
        $row = $rs->result() ;
        echo $this->unit->run($row[0]->regno,$arrPost['regno'] , 'Master Students Model Update' );
        
        //remove test record
        $this->StudentsModel->removeStudents($arrPost);
        
        $sql = 'SELECT count(*) as resultRec FROM students where id= ? ';
        $rs = $this->db->query($sql,array($row[0]->id)); 
        $row = $rs->result() ; 
        echo $this->unit->run($row[0]->resultRec, 0, 'Master Students Model Remove' );
		
	}
}

?> 
