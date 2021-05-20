<?php 
class E_resource extends CI_Controller {

	
	public function index()
	{
		
		$this->load->view('header');
		$this->load->view('e_resources_list');
		$this->load->view('footer');

	}

public function e_resources_single()
	{
		
		$this->load->view('header');
		$this->load->view('e_resources_single');
		$this->load->view('footer');

	}


	public function e_resources_single_free()
	{
		
		$this->load->view('header');
		$this->load->view('e_resources_single_free');
		$this->load->view('footer');

	}







}
 ?>