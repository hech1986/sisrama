<?
 class StudentsModel extends Model { 
 
    function StudentsModel() 
    { 
    // Call the Model constructor 
        parent::Model(); 
     } 
    
    function listStudents() 
    { 

        $rs = $this->db->query('SELECT id,regno,name,class,parent,address,city,phone,birthdate,birthplace FROM students order by name'); 
        $row = $rs->result() ; 
          
        return $row; 
    } 
    
    function saveStudents($arrPost)
    {
        $this->load->helper('array');
        
        $studentsId = element('studentsid', $arrPost, NULL);
        unset($arrPost['studentsid']);
        if ($studentsId == null)
        {
			
			
            $this->db->insert('students', $arrPost); 
            log_message('debug', '>>>$sql: '.$this->db->last_query());
			
        } 
        else
        {
            $sql = 'UPDATE sisrama.students 
							SET 
								regno = ?
								,name = ?
								,class=?
								,parent = ?
								,address = ?
								,city = ?
								,phone = ?
								,birthdate=?
								,birthplace=?
							WHERE students.id = ?';
           $arrPost['studentsid']=$studentsId;
            $this->db->query($sql,$arrPost); 
            log_message('debug', '>>>$sql: '.$this->db->last_query());
            
        } 
    }
    
    function editStudents($array)
    {
        //get by id
        $sql='SELECT id,regno,name,class,parent,address,city,phone,birthdate,birthplace FROM students where id= ?';
  
        $rs = $this->db->query($sql,array($array['studentsid'])); 
        $row = $rs->result() ; 
        
        
        return $row;
    }
    
    function removeStudents($array)
    {
        
        $sql='DELETE FROM students where id= ?';
        $rs = $this->db->query($sql,array($array['studentsid'])); 
        log_message('debug', '>>>$sql: '.$this->db->last_query());

    }
}