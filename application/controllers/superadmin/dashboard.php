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
		// $this->load->library('encryption');
	}

	public function index()
	{

		$karyawan = $this->m_admin->getData("tbl_karyawan")->result();
		$data = array(
			'karyawan' =>  $karyawan ,
			'url' 	   =>   $this->uri->segment(2),
		);
		$this->load->view('template/header',$data);
		$this->load->view('superadmin/dashboard',$data);
		$this->load->view('template/footer');
		
	}

}