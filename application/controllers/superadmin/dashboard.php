<?php 

/**
 * 
 */
class Dashboard extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('encryption');
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('superadmin/dashboard');
		$this->load->view('template/footer');
		$this->output->cache(1);
		
	}

}