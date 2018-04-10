<?php

/**
* 
*/
class Student extends CI_Controller
{
	
	function __construct()
	{
		parent :: __construct();
		$this->load->model('registration_model');
	}

	public function register()
	{
		$this->load->view('header.php');
		$this->load->view('registration/registration_form.php');
	}
	public function add()
	{
		$student = array('student_name' =>  $this->input->post('student_name')
				,'student_national_id' =>  $this->input->post('student_national_id')
				,'student_gender' =>  $this->input->post('student_gender')
				,'student_date_of_birth' =>  $this->input->post('student_date_of_birth')
				,'student_place_of_birth' =>  $this->input->post('student_place_of_birth')
				,'student_religion' =>  $this->input->post('student_religion')
				,'student_nationality' =>  $this->input->post('student_nationality')
		);
		print_r($student);
		$registration = array('registration_last_school_name' =>  $this->input->post('registration_last_school_name')
				,'registration_last_school_from' =>  $this->input->post('registration_last_school_from')
				,'registration_last_school_to' =>  $this->input->post('registration_last_school_to')
				,'registration_last_school_reason_for_leaving' =>  $this->input->post('registration_reason_for_leaving')
		);
		print_r($registration);
		$guardian = array('guardian_name' =>  $this->input->post('guardian_name')
				,'relashionship_to_child' =>  'father'
				,'guardian_national_id' =>  $this->input->post('guardian_national_id')
		);
		print_r($guardian);
		$this->registration_model->register_new_student($student,$registration,$guardian);
		exit();
		// $fname = $this->input->post('fname');
	 //    $lname = $this->input->post('lname');
	 //    echo $fname.$lname;
	    /*$this->db->insert('questions', array('email' =>$email, 'text' => $text));*/
	}
}

?>