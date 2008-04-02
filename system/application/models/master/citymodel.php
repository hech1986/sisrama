<?
 class CityModel extends Model { 
 
    function CityModel() 
    { 
    // Call the Model constructor 
        parent::Model(); 
     } 

    function listCity($from,$count) 
    { 
		$this->db->join('consulate', 'consulate.consulateid = city.consulateid');
		$this->db->order_by("cityname", "asc"); 
		$rs=$this->db->get('city',$from,$count);
        $row['cityList'] = $rs->result() ;
		//echo $this->db->last_query();
		
		$this->db->select('consulateid,consulatename');
		$this->db->order_by("consulatename", "asc"); 
		$rs=$this->db->get('consulate');
        $row['consulateList'] = $rs->result() ; 
		
        return $row; 
    } 
    
	function countCity()
	{
		$this->db->from('city');
		return $this->db->count_all_results();
	
	}
	
    function saveCity($arrPost)
    {
        $this->load->helper('array');
        
        $data = array(
            'cityname' =>  $arrPost['cityname']
			,'consulateid' => $arrPost['consulateid']
        );
        
        $cityId = element('cityid', $arrPost, NULL);
        
        if ($cityId == null)
        {
            $this->db->insert('city', $data); 
        } 
        else
        {
            $this->db->update('city', $data, "cityid = ".$cityId);
            
        } 
	//	echo $this->db->last_query();
    }
    
    function editCity($id)
    {
        //get by id
		$this->db->join('consulate', 'consulate.consulateid = city.consulateid');
		$this->db->where('cityid', $id);
		$rs=$this->db->get('city');
        $row = $rs->result() ; 
        return $row;
    }
    
    function removeCity($id)
    {
		$this->db->where('cityid', $id);
		$this->db->delete('city'); 
    }
}