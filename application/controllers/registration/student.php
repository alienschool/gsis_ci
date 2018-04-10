<?php

/**
* 
*/
class Student extends CI_Controller
{
	
	function __construct()
	{
		parent :: __construct();
	}

	public function register()
	{
		$this->load->view('header.php');
		$this->load->view('registration/registration_form.php');
	}
	public function add()
	{
		$osama = array('student_name' =>  $this->input->post('student_name')
				,'student_gender' =>  $this->input->post('student_gender')
				,'student_date_of_birth' =>  $this->input->post('student_date_of_birth')
				,'student_place_of_birth' =>  $this->input->post('student_place_of_birth')
				,'student_religion' =>  $this->input->post('student_religion')
				,'student_nationality' =>  $this->input->post('student_nationality')
				,'student_status' =>  $this->input->post('student_status')
		);
		print_r($osama);
		exit();
		// $fname = $this->input->post('fname');
	 //    $lname = $this->input->post('lname');
	 //    echo $fname.$lname;
	    /*$this->db->insert('questions', array('email' =>$email, 'text' => $text));*/
	}
}

?>