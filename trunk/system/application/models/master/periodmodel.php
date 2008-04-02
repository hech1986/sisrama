<?
 class PeriodModel extends Model { 
 
    function PeriodModel() 
    { 
    // Call the Model constructor 
        parent::Model(); 
     } 
    
    function listPeriod($from,$count) 
    { 
          
		$this->db->order_by("fromdate", "asc"); 
		$rs=$this->db->get('period',$from,$count);
        $row = $rs->result() ; 

        return $row; 
    } 

	function countPeriod()
	{
		$this->db->from('period');
		return $this->db->count_all_results();
	}

    function savePeriod($arrPost)
    {
        $this->load->helper('array');

        $data = array(
            'fromdate' =>  $arrPost['begin']
            ,'todate' =>  $arrPost['end']
            ,'active' =>  $arrPost['active']
        );
        
        $periodId = element('periodid', $arrPost, NULL);
		
        if ($periodId == null)
        {
            $this->db->insert('period', $data); 
            log_message('debug', '>>>$sql: '.$this->db->last_query());
        } 
        else
        {
			$this->db->set($data); 
			$this->db->where('periodid', $arrPost['periodid']);
			$this->db->update('period');

            log_message('debug', '>>>$sql: '.$this->db->last_query());
            
        } 
    }

    function editPeriod($id)
    {
		$this->db->where('periodid', $id);
		$rs=$this->db->get('period');
        $row = $rs->result() ; 

        return $row;
    }
    
    function removePeriod($id)
    {
		$this->db->where('periodid', $id);
		$this->db->delete('period'); 
        log_message('debug', '>>>$sql: '.$this->db->last_query());

    }
}