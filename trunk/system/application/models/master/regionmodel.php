<?
 class RegionModel extends Model { 
 
    function RegionModel() 
    { 
    // Call the Model constructor 
        parent::Model(); 
     } 
    
    function listRegion() 
    { 

        $rs = $this->db->query('SELECT id,name FROM regions order by name'); 
        $row = $rs->result() ; 
          
        return $row; 
    } 
    
    function saveRegion($arrPost)
    {
        $this->load->helper('array');
        
        $data = array(
            'name' =>  $arrPost['regionname']
        );
        
        
        $regionId = element('regionid', $arrPost, NULL);
        
        if ($regionId == null)
        {
            $this->db->insert('regions', $data); 
            log_message('debug', '>>>$sql: '.$this->db->last_query());
        } 
        else
        {
            $sql = 'UPDATE sisrama.regions SET name = ? WHERE regions.id = ?';
            
            $this->db->query($sql,array($data['name'],$regionId)); 
            log_message('debug', '>>>$sql: '.$this->db->last_query());
            
        } 
    }
    
    function editRegion($array)
    {
        //get by id
        $sql='SELECT id,name FROM regions where id= ?';
  
        $rs = $this->db->query($sql,array($array['regionid'])); 
        $row = $rs->result() ; 
        
        
        return $row;
    }
    
    function removeRegion($array)
    {
        
        $sql='DELETE FROM regions where id= ?';
        $rs = $this->db->query($sql,array($array['regionid'])); 
        log_message('debug', '>>>$sql: '.$this->db->last_query());

    }
}