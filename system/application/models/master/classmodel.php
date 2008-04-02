<?
 class ClassModel extends Model { 
 
    function ClassModel() 
    { 
    // Call the Model constructor 
        parent::Model(); 
     } 

    function listClass($from,$count) 
    { 
		
		$this->db->order_by("level,name", "asc"); 
		$rs=$this->db->get('dnclass',$from,$count);
        $row = $rs->result() ; 
		//echo $this->db->last_query();
        return $row; 
    } 
    
	function countClass()
	{
		$this->db->from('dnclass');
		return $this->db->count_all_results();
	
	}
	
    function saveClass($arrPost)
    {
        $this->load->helper('array');
        
        $data = array(
            'name' =>  $arrPost['name']
			,'level' => $arrPost['level']
			,'name_ar' => $arrPost['name_ar']
        );
        
        
        $classId = element('classid', $arrPost, NULL);
        
        if ($classId == null)
        {
            $this->db->insert('dnclass', $data); 
        } 
        else
        {
            $this->db->update('dnclass', $data, "classid = ".$classId);
            
        } 
	//echo $this->db->last_query();
    }
    
    function editClass($id)
    {
        //get by id
		$this->db->where('classid', $id);

		$rs=$this->db->get('dnclass');
		//echo $this->db->last_query();
        $row = $rs->result() ; 
        return $row;
    }
    
    function removeClass($id)
    {
		$this->db->where('classid', $id);
		$this->db->delete('dnclass'); 
    }
}