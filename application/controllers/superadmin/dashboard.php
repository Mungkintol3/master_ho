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
		
		
	}

}