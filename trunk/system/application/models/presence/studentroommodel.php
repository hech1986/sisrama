<?
 class StudentRoomModel extends Model { 
 
    function StudentRoomModel() 
    { 
    // Call the Model constructor 
        parent::Model(); 
     } 
    
    function listStudentRoom($arrPost) 
    { 
		$this->db->order_by("name", "asc"); 
		$rs=$this->db->get('room');
        $row['roomList'] = $rs->result() ; 
		
		//liststudent by room
		if (!empty($arrPost['roomid'])){
			$this->db->select('student.studentid as studentid,regnumber,student.name as name, class');
			$this->db->join('student', 'student.studentid = studentroom.studentid');
			$this->db->order_by("regnumber", "asc");
			$rs=$this->db->get_where('studentroom', array('roomid' => $arrPost['roomid']));
			$row['roomid']=$arrPost['roomid'];
		} else {
			$this->db->select('student.studentid as studentid,regnumber,student.name as name, class');
			$this->db->join('studentroom', 'student.studentid = studentroom.studentid','LEFT');
			$this->db->where("studentroom.studentid IS NULL");
			$this->db->order_by("regnumber", "asc");
			$rs=$this->db->get('student');
			$row['roomid']='';
		}
		
		$row['studentList'] = $rs->result() ; 
		//log_message('debug', '>>>$sql: '.$this->db->last_query());
        return $row; 
    } 

	function countStudentRoom()
	{
		$this->db->from('studentroom');
		return $this->db->count_all_results();
	}
    
   function savePlacement($arrPost)
    {
		//check		
		if (!empty($arrPost['studentid'])){
			if(empty($arrPost['roomidfrom']) && !empty($arrPost['roomidto'])){
				//new
				$this->newPlacement($arrPost);
			}else if (!empty($arrPost['roomidfrom']) && !empty($arrPost['roomidto'])){
				//update
				$this->moveRoom($arrPost);
			}else if(empty($arrPost['roomidto']) && !empty($arrPost['roomidfrom'])){		
				//delete
				$this->outFromRoom($arrPost);
			}
		}
    }
    
	function newPlacement($arrPost)
	{		
		//TODO: other efficient method ?
		 foreach($arrPost['studentid'] as $item){
			//$sql = 'INSERT INTO studentroom (roomid ,studentid) VALUES (?,?);';
			//$rs = $this->db->query($sql,array($arrPost['roomidto'] ,$item)); 
			$data = array(
                'roomid' => $arrPost['roomidto'] 
                ,'studentid' => $item 
             );
 
			$this->db->insert('studentroom', $data); 
			log_message('debug', '>>>$sql: '.$this->db->last_query());
		} 
		
	}

	function moveRoom($arrPost)
	{		
		//TODO: other efficient method ?
		if(!empty($arrPost['studentid'])){
			foreach($arrPost['studentid'] as $item){
				//$sql = 'update studentroom set roomid=? where roomid=? and studentid = ?';
				//$rs = $this->db->query($sql,array($arrPost['roomidto'] ,$arrPost['roomidfrom'],$item)); 
			$data = array(
                'roomid' => $arrPost['roomidto'] ,
                'studentid' => $item 
             );
			$where = array(
                'roomid' => $arrPost['roomidfrom'] ,
                'studentid' => $item 
             );
 
			$this->db->where($where);
			$this->db->update('studentroom', $data);				
			log_message('debug', '>>>$sql: '.$this->db->last_query());
			} 
		}
		
	}
 
	function outFromRoom($arrPost)
	{		
		//TODO: other efficient method ?
		if(!empty($arrPost['studentid'])){
			 foreach($arrPost['studentid'] as $item){
				//$sql = 'delete from studentroom where roomid=? and studentid = ?';
				//$rs = $this->db->query($sql,array($arrPost['roomidfrom'],$item)); 
				$where = array(
					'roomid' => $arrPost['roomidfrom'] ,
					'studentid' => $item 
				 );

				$this->db->where($where);
				$this->db->delete('studentroom');
				log_message('debug', '>>>$sql: '.$this->db->last_query());
			} 
		}
	}

}