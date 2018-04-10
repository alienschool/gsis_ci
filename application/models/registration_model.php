<?php

/**
* 
*/
class registration_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	public function register_new_student($student,$registration,$guardian)
	{
		$this->db->insert('student', $student);
	    $student_id = array('student_id' => $this->db->insert_id());
	    $guardian=array_merge($guardian, $student_id);
	    $this->db->insert('guardian', $guardian);
	    $registration=array_merge($registration, $student_id);
	    $this->db->insert('registration', $registration);
	}
}

?>