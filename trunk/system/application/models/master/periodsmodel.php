<?
 class PeriodsModel extends Model { 
 
    function PeriodsModel() 
    { 
    // Call the Model constructor 
        parent::Model(); 
     } 
    
    function listPeriods() 
    { 

        $rs = $this->db->query('SELECT id,begin,end,active FROM periods order by begin,end'); 
        $row = $rs->result() ; 
          
        return $row; 
    } 
    
    function savePeriods($arrPost)
    {
        $this->load->helper('array');
        
        $data = array(
            'begin' =>  $arrPost['begin']
            ,'end' =>  $arrPost['end']
            ,'active' =>  $arrPost['active']
        );

        $periodsId = element('periodsid', $arrPost, NULL);
        
        if ($periodsId == null)
        {
            $this->db->insert('periods', $data); 
            log_message('debug', '>>>$sql: '.$this->db->last_query());
        } 
        else
        {
            $sql = 'UPDATE sisrama.periods SET begin = ?, end = ?, active = ? WHERE periods.id = ?';
            $this->db->query($sql,array($arrPost['begin'],$arrPost['end'],$arrPost['active'],$periodsId)); 

            log_message('debug', '>>>$sql: '.$this->db->last_query());
            
        } 
    }
    
    function editPeriods($array)
    {
        //get by id
        $sql='SELECT id,begin,end,active FROM periods where id= ?';
  
        $rs = $this->db->query($sql,array($array['periodsid'])); 
        $row = $rs->result() ; 
        
        
        return $row;
    }
    
    function removePeriods($array)
    {
        
        $sql='DELETE FROM periods where id= ?';
        $rs = $this->db->query($sql,array($array['periodsid'])); 
        log_message('debug', '>>>$sql: '.$this->db->last_query());

    }
}