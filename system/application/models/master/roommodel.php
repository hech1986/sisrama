<?
 class RoomModel extends Model { 
 
    function RoomModel() 
    { 
    // Call the Model constructor 
        parent::Model(); 
     } 
    
    function listRoom($from,$count) 
    { 
		
		$this->db->select('roomid,room.name as roomname,room.parent
										,regionname,student.name as studentname
										,campusname,capacity
									');
		$this->db->join('campus', 'campus.campusid = room.campusid');
		$this->db->join('region', 'region.regionid = room.regionid');
		$this->db->join('student', 'student.studentid = room.studentheadid');
		$rs=$this->db->get('room',$from,$count);
		$row['roomList'] =  $rs->result() ; 

		$this->db->select('studentid,name');
		$this->db->order_by("name", "asc"); 
		$rs=$this->db->get('student');
        $row['studentsList'] = $rs->result() ; 
		
		$this->db->select('campusid,campusname');
		$this->db->order_by("campusname", "asc"); 
		$rs=$this->db->get('campus');
		$row['campusList'] = $rs->result() ; 
		
//        $rs = $this->db->query('SELECT id,name FROM regions order by name'); 
		$this->db->select('regionid,regionname');
		$this->db->order_by("regionname", "asc"); 
		$rs=$this->db->get('region');
        $row['regionsList'] = $rs->result() ;           
		
        return $row; 
    } 
    
	function countRoom()
	{
		$this->db->from('room');
		return $this->db->count_all_results();
	}
	
	
    function saveRoom($arrPost)
    {
        $this->load->helper('array');
        
        $roomId = element('roomid', $arrPost, NULL);
        unset($arrPost['roomid']);
        if ($roomId == null)
        {
			
            $this->db->insert('room', $arrPost); 
            log_message('debug', '>>>$sql: '.$this->db->last_query());
			
        } 
        else
        {

			$this->db->set($arrPost); 
			$this->db->where('roomid', $roomId);
			$this->db->update('room');
			log_message('debug', '>>>$sql: '.$this->db->last_query());
            
        } 
		
    }
    
    function editRoom($id)
    {
        //get by id
/*		$sql='SELECT ro.id,ro.name,ro.parent,re.name as regionname, st.name as studentsname
								,ca.name as campusname,ro.capacity , ro.filled
								,ro.regionid,ro.studentheadid,ro.campusid
						FROM room ro, 
						campus ca,
						regions re,
						students st
						where
							ro. id= ?
							and re.id = ro.regionid
							and st.id = ro.studentheadid
							and ca.id = ro.campusid'; 
  
        $rs = $this->db->query($sql,array($array['roomid'])); 
        $row = $rs->result() ;         
 */
		$this->db->select('roomid,room.name as roomname,room.parent
										,regionname,student.name as studentname
										,campusname,capacity
									');
		$this->db->join('campus', 'campus.campusid = room.campusid');
		$this->db->join('region', 'region.regionid = room.regionid');
		$this->db->join('student', 'student.studentid = room.studentheadid');
		$this->db->where('roomid',$id);
		$rs=$this->db->get('room');
		$row['roomList'] =  $rs->result() ; 
 
        return $row;
    }
    
    function removeRoom($id)
    {
        
		$this->db->where('roomid', $id);
		$this->db->delete('room'); 

        log_message('debug', '>>>$sql: '.$this->db->last_query());

    }
}