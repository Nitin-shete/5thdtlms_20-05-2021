<?php 
class Course extends CI_Controller {

	
	public function index()
	{
		
		$this->load->view('header');
		$this->load->view('courses_list');
		$this->load->view('footer');

	}

public function course_single()
	{
		
		$this->load->view('header');
		$this->load->view('course_single');
		$this->load->view('footer');

	}


public function course_single_free()
	{
		
		$this->load->view('header');
		$this->load->view('course_single_free');
		$this->load->view('footer');

	}




}
 ?>