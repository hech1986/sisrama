<?
 class RegionModel extends Model { 
 
    function RegionModel() 
    { 
    // Call the Model constructor 
        parent::Model(); 
     } 

    function listRegion($from,$count) 
    { 
		
		$this->db->order_by("regionname", "asc"); 
		$rs=$this->db->get('region',$from,$count);
        $row = $rs->result() ; 
		//echo $this->db->last_query();
        return $row; 
    } 
    
	function countRegion()
	{
		$this->db->from('region');
		return $this->db->count_all_results();
	
	}
	
    function saveRegion($arrPost)
    {
        $this->load->helper('array');
        
        $data = array(
            'regionname' =>  $arrPost['regionname']
        );
        
        
        $regionId = element('regionid', $arrPost, NULL);
        
        if ($regionId == null)
        {
            $this->db->insert('region', $data); 
        } 
        else
        {
            $this->db->update('region', $data, "regionid = ".$regionId);
            
        } 
	//	echo $this->db->last_query();
    }
    
    function editRegion($id)
    {
        //get by id
		$this->db->where('regionid', $id);

		$rs=$this->db->get('region');
        $row = $rs->result() ; 
        return $row;
    }
    
    function removeRegion($id)
    {
		$this->db->where('regionid', $id);
		$this->db->delete('region'); 
    }
}