<?php 
class Contact extends CI_Controller {

	
	public function index()
	{
		
		$this->load->view('header');
		$this->load->view('contacts');
		$this->load->view('footer');

	}
}