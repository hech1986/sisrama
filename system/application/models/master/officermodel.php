<?
 class OfficerModel extends Model { 
 
    function OfficerModel() 
    { 
    // Call the Model constructor 
        parent::Model(); 
     } 

    function listOfficer($from,$count) 
    { 
		
		$this->db->order_by("officername", "asc"); 
		$rs=$this->db->get('officer',$from,$count);
        $row = $rs->result() ; 
		//echo $this->db->last_query();
        return $row; 
    } 
    
	function countOfficer()
	{
		$this->db->from('officer');
		return $this->db->count_all_results();
	
	}
	
    function saveOfficer($arrPost)
    {
        $this->load->helper('array');
        
        $data = array(
            'officername' =>  $arrPost['officername']
        );
        
        
        $officerId = element('officerid', $arrPost, NULL);
        
        if ($officerId == null)
        {
            $this->db->insert('officer', $data); 
        } 
        else
        {
            $this->db->update('officer', $data, "officerid = ".$officerId);
            
        } 
	//	echo $this->db->last_query();
    }
    
    function editOfficer($id)
    {
        //get by id
		$this->db->where('officerid', $id);

		$rs=$this->db->get('officer');
        $row = $rs->result() ; 
        return $row;
    }
    
    function removeOfficer($id)
    {
		$this->db->where('officerid', $id);
		$this->db->delete('officer'); 
    }
}