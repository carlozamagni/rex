<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Students extends CI_Controller {
	/*
		is user logged in ?
	*/
	function __construct()
	{
		session_start();
		parent::__construct();
		if (!isset($_SESSION['username'])) {
			redirect('auth');
		}
	}

	public function index()
	{
		$this->load->model('student_model');
		
		$data['test_text'] = $this->student_model->load_students();
		
		$this->load->view('header_bs', $data);
		$this->load->view('students/list', $data);
		$this->load->view('footer_bs');
	}
	
	public function detail($id)
	{
		$this->load->model('student_model');
		
		$data['test_text'] = $this->student_model->load_student($id);
		
		$this->load->view('header_bs', $data);
		$this->load->view('students/detail', $data);
		$this->load->view('footer_bs');
	}
}
?>