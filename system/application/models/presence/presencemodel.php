<?
  class  PresenceModel extends Model { 
 
    function PresenceModel() 
    { 
    	// Call the Model constructor 
        parent::Model(); 
     } 

    function listPresence() 
    { 
		//$this->db->order_by("name", "asc"); 
		$rs=$this->db->get('presence');
        $row = $rs->result() ; 
		
		//echo $this->db->last_query();
        return $row; 
    } 

	function listRegion(){
		$this->db->order_by("regionname", "asc"); 
		$rs=$this->db->get('region');
		$row= $rs->result() ;
		return $row;
	}

	function listCampus(){
		$this->db->order_by("campusname", "asc"); 
		$rs=$this->db->get('campus');
		$row= $rs->result() ;
		return $row;
	}

	function listRoom($campusId,$idRegion){
		
		//$this->db->where("campusid",$campusId);
		//$this->db->where("regionid",$regionId);
		$this->db->order_by("name", "asc"); 
		$rs=$this->db->get('room');
		$row= $rs->result() ;
		return $row;
	}

	function countPresence()
	{
		$this->db->from('presence');
		return $this->db->count_all_results();
	}
	
    function savePresence($arrPost)
    {
        $this->load->helper('array');
        
        $data = array(
					'studentroomid' =>   $arrPost['studentroomid']
					,'status'=>  $arrPost['status']
					,'presencedate'=>  $arrPost['presencedate']
					);
        
        
        $presenceId = element('presenceid', $arrPost, NULL);
        
        if ($presenceId == null)
        {
            $this->db->insert('presence', $data); 
        } 
        else
        {
            $this->db->update('presence', $data, "presenceid = ".$presenceId);
            
        } 
	//echo $this->db->last_query();
    }
    
    function editPresence($id)
    {
        //get by id
		$this->db->where('presenceid', $id);

		$rs=$this->db->get('presence');
		//echo $this->db->last_query();
        $row = $rs->result() ; 
        return $row;
    }
    
    function removePresence($id)
    {
		$this->db->where('presenceid', $id);
		$this->db->delete('presence'); 
    }
}