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

		$data['url']=  $this->uri->segment(2);
		$this->load->view('template/header',$data);
		$this->load->view('superadmin/dashboard');
		$this->load->view('template/footer');
<<<<<<< HEAD
		
=======

		$this->output->cache(1);
>>>>>>> f5dcb73bca0a59d826e1f565baf1ef8a2058ab2f
		
	}

}