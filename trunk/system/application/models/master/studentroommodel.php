<?
 class StudentRoomModel extends Model { 
 
    function StudentRoomModel() 
    { 
    // Call the Model constructor 
        parent::Model(); 
     } 
    
    function listStudentRoom($arrPost) 
    { 
		//list room
        $rs = $this->db->query('SELECT id,name,parent FROM rooms order by name'); 
        $row['roomList'] = $rs->result() ; 
		
		//liststudent by room
		if (!empty($arrPost['roomid'])){
			$sql='select st.id,st.regno, st.name,st.class from students st,studentroom sr where sr.roomid=? and sr.studentid = st.id order by regno';
			$rs = $this->db->query($sql,array($arrPost['roomid'])); 
			$row['roomid']=$arrPost['roomid'];
		} else {
			$sql='select id,regno, name,class from students st where 0=(select count(studentid) from studentroom where studentid=st.id) order by regno';
			$rs = $this->db->query($sql);
			$row['roomid']='';
		}
		
		$row['studentList'] = $rs->result() ; 
        
        return $row; 
    } 
    
   function savePlacement($arrPost)
    {
		//check		
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
    
	function newPlacement($arrPost)
	{		
		//TODO: other efficient method ?
		 foreach($arrPost['studentid'] as $item){
			$sql = 'INSERT INTO studentroom (roomid ,studentid) VALUES (?,?);';
			$rs = $this->db->query($sql,array($arrPost['roomidto'] ,$item)); 
		} 
	}

	function moveRoom($arrPost)
	{		
		//TODO: other efficient method ?
		if(!empty($arrPost['studentid'])){
			foreach($arrPost['studentid'] as $item){
				$sql = 'update studentroom set roomid=? where roomid=? and studentid = ?';
				$rs = $this->db->query($sql,array($arrPost['roomidto'] ,$arrPost['roomidfrom'],$item)); 
			} 
		}
	}
 
	function outFromRoom($arrPost)
	{		
		//TODO: other efficient method ?
		if(!empty($arrPost['studentid'])){
			 foreach($arrPost['studentid'] as $item){
				$sql = 'delete from studentroom where roomid=? and studentid = ?';
				$rs = $this->db->query($sql,array($arrPost['roomidfrom'],$item)); 
			} 
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    function editStudentRoom($array)
    {
        //get by id
        $sql='SELECT id,name FROM studentRoom where id= ?';
  
        $rs = $this->db->query($sql,array($array['studentRoomid'])); 
        $row = $rs->result() ; 
        
        
        return $row;
    }
    
    function removeStudentRoom($array)
    {
        
        $sql='DELETE FROM studentRoom where id= ?';
        $rs = $this->db->query($sql,array($array['studentRoomid'])); 
        log_message('debug', '>>>$sql: '.$this->db->last_query());

    }
}