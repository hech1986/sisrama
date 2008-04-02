<?
 class ConsulateModel extends Model { 
 
    function ConsulateModel() 
    { 
    // Call the Model constructor 
        parent::Model(); 
     } 

    function listConsulate($from,$count) 
    { 
		
		$this->db->order_by("consulatename", "asc"); 
		$rs=$this->db->get('consulate',$from,$count);
        $row = $rs->result() ; 
		//echo $this->db->last_query();
        return $row; 
    } 
    
	function countConsulate()
	{
		$this->db->from('consulate');
		return $this->db->count_all_results();
	
	}
	
    function saveConsulate($arrPost)
    {
        $this->load->helper('array');
        
        $data = array(
            'consulatename' =>  $arrPost['consulatename']
        );
        
        
        $consulateId = element('consulateid', $arrPost, NULL);
        
        if ($consulateId == null)
        {
            $this->db->insert('consulate', $data); 
        } 
        else
        {
            $this->db->update('consulate', $data, "consulateid = ".$consulateId);
            
        } 
	//	echo $this->db->last_query();
    }
    
    function editConsulate($id)
    {
        //get by id
		$this->db->where('consulateid', $id);

		$rs=$this->db->get('consulate');
        $row = $rs->result() ; 
        return $row;
    }
    
    function removeConsulate($id)
    {
		$this->db->where('consulateid', $id);
		$this->db->delete('consulate'); 
    }
}