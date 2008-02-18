<?
 class RoomsModel extends Model { 
 
    function RoomsModel() 
    { 
    // Call the Model constructor 
        parent::Model(); 
     } 
    
    function listRooms() 
    { 
		
        $rs = $this->db->query('SELECT ro.id,ro.name,ro.parent,re.name as regionname, st.name as studentsname,ca.name as campusname,ro.capacity , ro.filled
												FROM rooms ro, 
												campus ca,
												regions re,
												students st
												where
													re.id = ro.regionid
													and st.id = ro.studentheadid
													and ca.id = ro.campusid
												order by ro.name'); 
        $row['roomsList'] = $rs->result() ; 
		
        $rs = $this->db->query('SELECT id,name FROM students order by name'); 
        $row['studentsList'] = $rs->result() ; 
		
		
        $rs = $this->db->query('SELECT id,name FROM campus order by name'); 
        $row['campusList'] = $rs->result() ; 
		
        $rs = $this->db->query('SELECT id,name FROM regions order by name'); 
        $row['regionsList'] = $rs->result() ;           
		
        return $row; 
    } 
    
    function saveRooms($arrPost)
    {
        $this->load->helper('array');
        
        $roomsId = element('roomsid', $arrPost, NULL);
        unset($arrPost['roomsid']);
        if ($roomsId == null)
        {
			
            $this->db->insert('rooms', $arrPost); 
            log_message('debug', '>>>$sql: '.$this->db->last_query());
			
        } 
        else
        {
            $sql = 'UPDATE sisrama.rooms 
							SET 
									name=?
									,parent=?
									,regionid=?
									,studentheadid=?
									,campusid=?
									,capacity=?							
							WHERE rooms.id = ?';
           $arrPost['roomsid']=$roomsId;
            $this->db->query($sql,$arrPost); 
            log_message('debug', '>>>$sql: '.$this->db->last_query());
            
        } 
    }
    
    function editRooms($array)
    {
        //get by id
		$sql='SELECT ro.id,ro.name,ro.parent,re.name as regionname, st.name as studentsname
								,ca.name as campusname,ro.capacity , ro.filled
								,ro.regionid,ro.studentheadid,ro.campusid
						FROM rooms ro, 
						campus ca,
						regions re,
						students st
						where
							ro. id= ?
							and re.id = ro.regionid
							and st.id = ro.studentheadid
							and ca.id = ro.campusid'; 
  
        $rs = $this->db->query($sql,array($array['roomsid'])); 
        $row = $rs->result() ;         
        
        return $row;
    }
    
    function removeRooms($array)
    {
        
        $sql='DELETE FROM rooms where id= ?';
        $rs = $this->db->query($sql,array($array['roomsid'])); 
        log_message('debug', '>>>$sql: '.$this->db->last_query());

    }
}