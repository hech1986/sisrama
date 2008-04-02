<?
 class StudentModel extends Model { 
 
    function StudentModel() 
    { 
    // Call the Model constructor 
        parent::Model(); 
     } 
    
    function listStudent($from,$count) 
    {           
		
		$this->db->order_by("name", "asc"); 
		$rs=$this->db->get('student',$from,$count);
        $row = $rs->result() ; 
		//echo $this->db->last_query();

        return $row; 
    } 
    	
	function countStudent()
	{
		$this->db->from('student');
		return $this->db->count_all_results();
	}

    function saveStudent($arrPost)
    {
		$this->load->helper('array');

		$studentId = element('studentid', $arrPost, NULL);
		unset($arrPost['studentid']);

		if ($studentId == null)
		{
			$this->db->insert('student', $arrPost); 
			log_message('debug', '>>>$sql: '.$this->db->last_query());
		} 
		else
		{
			$this->db->set($arrPost); 
			$this->db->where('studentid', $studentId);
			$this->db->update('student');

			log_message('debug', '>>>$sql: '.$this->db->last_query());
		} 
	}
    
    function editStudent($id)
    {
        //get by id
		$this->db->where('studentid', $id);
		$rs=$this->db->get('student');
        $row = $rs->result() ; 
        return $row;
    }
    
    function removeStudent($id)
    {
		$this->db->where('studentid', $id);
		$this->db->delete('student'); 
        log_message('debug', '>>>$sql: '.$this->db->last_query());

    }
}