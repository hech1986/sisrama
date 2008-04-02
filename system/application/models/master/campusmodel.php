<?
 class CampusModel extends Model { 
 
    function CampusModel() 
    { 
    // Call the Model constructor 
        parent::Model(); 
     } 
    
    function listCampus($from,$count) 
    { 

		$this->db->order_by("campusname", "asc"); 
		$rs=$this->db->get('campus',$from,$count);
        $row = $rs->result() ; 
          
        return $row; 
    } 
    
	function countCampus()
	{
		$this->db->from('campus');
		return $this->db->count_all_results();
	}

    function saveCampus($arrPost)
    {
        $this->load->helper('array');
        
        $data = array(
            'campusname' =>  $arrPost['campusname']
        );
        
        
        $campusId = element('campusid', $arrPost, NULL);
        
        if ($campusId == null)
        {
            $this->db->insert('campus', $data); 
            log_message('debug', '>>>$sql: '.$this->db->last_query());
        } 
        else
        {
            //$sql = 'UPDATE sisrama.campus SET name = ? WHERE campus.id = ?';
            
            //$this->db->query($sql,array($data['name'],$campusId)); 
			$this->db->update('campus', $data, "campusid = ".$campusId);
            log_message('debug', '>>>$sql: '.$this->db->last_query());
            
        } 
    }
    
    function editCampus($id)
    {
        //get by id
        //$sql='SELECT id,name FROM campus where id= ?';
  
        //$rs = $this->db->query($sql,array($array['campusid'])); 
		$this->db->where('campusid', $id);
		$rs=$this->db->get('campus');
        $row = $rs->result() ; 
        
        return $row;
    }
    
    function removeCampus($id)
    {
        
        //$sql='DELETE FROM campus where id= ?';
        //$rs = $this->db->query($sql,array($array['campusid'])); 
		$this->db->where('campusid', $id);
		$this->db->delete('campus'); 

        log_message('debug', '>>>$sql: '.$this->db->last_query());

    }
}