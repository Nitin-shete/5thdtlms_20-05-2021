<?php 
class Instructor extends CI_Controller {

	
	public function index()
	{
		
		$this->load->view('header');
		$this->load->view('instructor_single');
		$this->load->view('footer');

	}
}
 ?>

