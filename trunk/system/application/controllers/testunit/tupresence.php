<?

class TUPresence extends Controller 
{
		function testStudentRoomModel()
		{
			//prepare
			//todo: create complete test unit to check table depedency
			$this->load->library('unit_test');
			
			//model
			$this->load->model('presence/StudentRoomModel');
			
			//assign student room
			$arrPost['studentid'] = array(1,2,3,4,5);
			$arrPost['roomidfrom']='';
			$arrPost['roomidto']=1;
			$this->StudentRoomModel->savePlacement($arrPost);
		
			$this->db->where_in('studentid', $arrPost['studentid']);
			$this->db->from('studentroom');
			$countRow=$this->db->count_all_results();
			log_message('debug', '>>>$sql: '.$this->db->last_query());
			echo $this->unit->run($countRow, 5, 'Presence  StudentRoom Model Save' );

			//change student room
			$arrPost['studentid'] = array(1,2,3,4,5);
			$arrPost['roomidfrom']=1;
			$arrPost['roomidto']=2;
			$this->StudentRoomModel->savePlacement($arrPost);
		
			$this->db->where('roomid', $arrPost['roomidto']);
			$this->db->from('studentroom');
			$countRow=$this->db->count_all_results();

			echo $this->unit->run($countRow, 5, 'Presence  StudentRoom Model Update' );
	
			//empty room(delete all student from that room)
			$arrPost['studentid'] = array(1,2,3,4,5);
			$arrPost['roomidfrom']=2;
			$arrPost['roomidto']='';
			$this->StudentRoomModel->savePlacement($arrPost);
		
			$this->db->where('roomid', $arrPost['roomidto']);
			$this->db->where_in('studentid', $arrPost['studentid']);			
			$this->db->from('studentroom');
			$countRow=$this->db->count_all_results();

			echo $this->unit->run($countRow, 0, 'Presence  StudentRoom Model Remove' );

		}
		
		function testStudentClassModel()
		{
			//prepare
			//todo: create complete test unit to check table depedency
			$this->load->library('unit_test');
			
			//model
			$this->load->model('presence/StudentClassModel');
			
			//assign student class
			$arrPost['studentid'] = array(1,2,3,4,5);
			$arrPost['classidfrom']='';
			$arrPost['classidto']=1;
			$this->StudentClassModel->savePlacement($arrPost);
		
			$this->db->where_in('studentid', $arrPost['studentid']);
			$this->db->from('student_state');
			$countRow=$this->db->count_all_results();

			echo $this->unit->run($countRow, 5, 'Presence  StudentClass Model Save' );
			

			//change student class
			$arrPost['studentid'] = array(1,2,3,4,5);
			$arrPost['classidfrom']=1;
			$arrPost['classidto']=2;
			$this->StudentClassModel->savePlacement($arrPost);
		
			$this->db->where('classid', $arrPost['classidto']);
			$this->db->from('student_state');
			$countRow=$this->db->count_all_results();

			echo $this->unit->run($countRow, 5, 'Presence  StudentClass Model Update' );
	
			//empty class(delete all student from that class)
			$arrPost['studentid'] = array(1,2,3,4,5);
			$arrPost['classidfrom']=2;
			$arrPost['classidto']='';
			$this->StudentClassModel->savePlacement($arrPost);
		
			$this->db->where('classid', $arrPost['classidto']);
			$this->db->where_in('studentid', $arrPost['studentid']);			
			$this->db->from('student_state');
			$countRow=$this->db->count_all_results();

			echo $this->unit->run($countRow, 0, 'Presence  StudentClass Model Remove' );

		}
		
	function testPresenceModel()
    {
        $this->load->library('unit_test');
        
        //model
        $this->load->model('presence/PresenceModel');
        
        //insert test record
        $arrPost = array('studentroomid' => '0'
			,'status'=>'H'
			,'presencedate'=>"2008/01/01"
			);
			
        $this->PresenceModel->savePresence($arrPost);        
        $rs=$this->db->get_where('presence',$arrPost);
		$row = $rs->result() ; 
		echo $this->unit->run($row[0]->status, $arrPost['status'], 'Presence Presence Model Save' );
   	     
        //update
        $arrPost = array('studentroomid' => '0'
			,'status'=>'I'
			,'presencedate'=>"2008/01/01"
			,'presenceid' => $row[0]->presenceid
			);
		$this->PresenceModel->savePresence($arrPost);
        
		$rs = $this->db->get_where('presence', array('presenceid' => $arrPost['presenceid']));
        $row = $rs->result() ; 
        echo $this->unit->run($row[0]->status, $arrPost['status'], 'Presence Presence Model Update' );
 
		//remove test record
        $this->PresenceModel->removePresence($arrPost['presenceid']);
        
		$this->db->where('presenceid', $arrPost['presenceid']); 
		$this->db->from('presence');
		$countRow=$this->db->count_all_results();
        echo $this->unit->run($countRow, 0, 'Presence Presence Model Remove' );

    }

}

?> 
