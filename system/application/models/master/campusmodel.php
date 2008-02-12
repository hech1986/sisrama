<?
 class CampusModel extends Model { 
 
    function CampusModel() 
    { 
    // Call the Model constructor 
        parent::Model(); 
     } 
    
    function listCampus() 
    { 

        $rs = $this->db->query('SELECT id,name FROM campus order by name'); 
        $row = $rs->result() ; 
          
        return $row; 
    } 
    
    function saveCampus($arrPost)
    {
        $this->load->helper('array');
        
        $data = array(
            'name' =>  $arrPost['campusname']
        );
        
        
        $campusId = element('campusid', $arrPost, NULL);
        
        if ($campusId == null)
        {
            $this->db->insert('campus', $data); 
            log_message('debug', '>>>$sql: '.$this->db->last_query());
        } 
        else
        {
            $sql = 'UPDATE sisrama.campus SET name = ? WHERE campus.id = ?';
            
            $this->db->query($sql,array($data['name'],$campusId)); 
            log_message('debug', '>>>$sql: '.$this->db->last_query());
            
        } 
    }
    
    function editCampus($array)
    {
        //get by id
        $sql='SELECT id,name FROM campus where id= ?';
  
        $rs = $this->db->query($sql,array($array['campusid'])); 
        $row = $rs->result() ; 
        
        
        return $row;
    }
    
    function removeCampus($array)
    {
        
        $sql='DELETE FROM campus where id= ?';
        $rs = $this->db->query($sql,array($array['campusid'])); 
        log_message('debug', '>>>$sql: '.$this->db->last_query());

    }
}