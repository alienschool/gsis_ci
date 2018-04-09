<?php

/**
* 
*/
class Challan extends CI_Controller
{
	function __construct(){
		parent :: __construct();
		$this->load->model('Challan_Model');
	}

	
	public function view($page='welcome_message',$roll=4)
	{
		# code...
		if(!file_exists(APPPATH.'views/'.$page.'.php')){
			show_404();
		}
		$data['challan'] = $this->Challan_Model->get_challan($roll);
		$data['title']=ucfirst($page);
		$this->load->view($page, $data);
	}
}


?>