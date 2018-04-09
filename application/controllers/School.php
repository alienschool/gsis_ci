<?php
class School extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		
	}

  public function index()
  {
  	$this->load->view('header.php');
  	$this->load->view('registration/registration_form.php');
  	 // $this->load->view('footer.php');
  }

  // public function login()
  // {
  // 	$this->load->view('registration/school.php');
  // }
public function user()
{
	$this->load->view('registration/user_form.php');
}
public function form()
{
	$this->load->view('registration/form.php');
}
public function view()
{
	$this->load->view('registration/view_form.php');
}
public function portal()
{
	$this->load->view('registration/portal.php');
}
public function challan()
{
	$this->load->view('registration/challan.php');
}
public function voucher()
{
	$this->load->view('registration/voucher.php');
}
public function admin_dashboard()
{
	$this->load->view('admin/header');
	$this->load->view('admin/dashboard.php');
}
public function admin_portal()
{
	$this->load->view('admin/header');
	$this->load->view('admin/admin_portal.php');
}

public function login()
{
	$this->load->view('registration/login_form.php');
}
public function detail()
{
	$this->load->view('registration/detailed_view.php');
}

}
?>