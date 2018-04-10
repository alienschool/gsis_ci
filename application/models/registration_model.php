<?php

/**
* 
*/
class registraion_model extends CI_Model
{
	
	function __construct(argument)
	{
		# code...
	}

	public function register_new_student($student,$guardian,$admission)
	{
		
		// $fname = $this->input->post('fname');
	 // 	$lname = $this->input->post('lname');
	    $this->db->insert('student', $student);
	    $student_id = array('student_id' => $this->db->insert_id());
	    array_merge($guardian, $student_id);
	    $this->db->insert('guardian', $guardian);
	    array_merge($admission, $student_id);
	    $this->db->insert('admission', $admission);
	}
}

?>