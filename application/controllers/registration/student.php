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
		$osama = array('first_name' =>  $this->input->post('fname'),
				'last_name' =>  $this->input->post('lname')
		);
		echo $osama;
		exit();
		// $fname = $this->input->post('fname');
	 //    $lname = $this->input->post('lname');
	 //    echo $fname.$lname;
	    /*$this->db->insert('questions', array('email' =>$email, 'text' => $text));*/
	}
}

?>