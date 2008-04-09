<?
 class StudentClassModel extends Model { 
 
    function StudentClassModel() 
    { 
    // Call the Model constructor 
        parent::Model(); 
     } 
    
    function listStudentClass($arrPost) 
    { 
		$this->db->order_by("level,name", "asc"); 
		$rs=$this->db->get('dnclass');
        $row['classList'] = $rs->result() ; 
		
		//liststudent by class
		if (!empty($arrPost['classid'])){
			$this->db->select('student.studentid as studentid,regnumber,student.name as name, class');
			$this->db->join('student_state', 'student.studentid = student_state.studentid');
			$this->db->order_by("regnumber", "asc");
			$rs=$this->db->get_where('student', array('student_state.classid' => $arrPost['classid']));
			$row['classid']=$arrPost['classid'];
		} else {
			$this->db->select('student.studentid as studentid,regnumber,student.name as name, class');
			$this->db->join('student_state', 'student.studentid = student_state.studentid','LEFT');
			$this->db->where("student_state.studentid IS NULL");
			$this->db->order_by("regnumber", "asc");
			$rs=$this->db->get('student');
			$row['classid']='';
		}
		
		$row['studentList'] = $rs->result() ; 
		log_message('debug', '>>>$sql: '.$this->db->last_query());
		//echo $this->db->last_query();
        return $row; 
    } 

	function countStudentClass()
	{
		$this->db->from('student_state');
		return $this->db->count_all_results();
	}
    
   function savePlacement($arrPost)
    {
		//check		
		if (!empty($arrPost['studentid'])){
			if(empty($arrPost['classidfrom']) && !empty($arrPost['classidto'])){
				//new
				$this->newPlacement($arrPost);
			}else if (!empty($arrPost['classidfrom']) && !empty($arrPost['classidto'])){
				//update
				$this->moveClass($arrPost);
			}else if(empty($arrPost['classidto']) && !empty($arrPost['classidfrom'])){		
				//delete
				$this->outFromClass($arrPost);
			}
		}
    }
    
	function newPlacement($arrPost)
	{		
		//TODO: other efficient method ?
		 foreach($arrPost['studentid'] as $item){
			$data = array(
                'classid' => $arrPost['classidto'] 
                ,'studentid' => $item 
             );
 
			$this->db->insert('student_state', $data); 
			log_message('debug', '>>>$sql: '.$this->db->last_query());
		} 
		
	}

	function moveClass($arrPost)
	{		
		//TODO: other efficient method ?
		if(!empty($arrPost['studentid'])){
			foreach($arrPost['studentid'] as $item){
				//$sql = 'update studentclass set classid=? where classid=? and studentid = ?';
				//$rs = $this->db->query($sql,array($arrPost['classidto'] ,$arrPost['classidfrom'],$item)); 
			$data = array(
                'classid' => $arrPost['classidto'] ,
                'studentid' => $item 
             );
			$where = array(
                'classid' => $arrPost['classidfrom'] ,
                'studentid' => $item 
             );
 
			$this->db->where($where);
			$this->db->update('student_state', $data);				
			log_message('debug', '>>>$sql: '.$this->db->last_query());
			} 
		}
		
	}
 
	function outFromClass($arrPost)
	{		
		//TODO: other efficient method ?
		if(!empty($arrPost['studentid'])){
			 foreach($arrPost['studentid'] as $item){
				//$sql = 'delete from studentclass where classid=? and studentid = ?';
				//$rs = $this->db->query($sql,array($arrPost['classidfrom'],$item)); 
				$where = array(
					'classid' => $arrPost['classidfrom'] ,
					'studentid' => $item 
				 );

				$this->db->where($where);
				$this->db->delete('student_state');
				log_message('debug', '>>>$sql: '.$this->db->last_query());
			} 
		}
	}

}