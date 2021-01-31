<?php 

/**
 * 
 */
class Karyawan extends CI_Controller
{

	public function __construct()
	{
		 parent::__construct();	
	}

	public function index()
	{
		$this->output->cache(1);
		$this->load->view('template/header');
		$this->load->view('superadmin/karyawan');
		$this->load->view('template/footer');
		
	}

	public function LoadModal()
	{
		$this->output->cache(1);
		$this->load->view('superadmin/modal_karyawan');
		
	}

	public function Edit_karyawan()
	{
		$this->output->cache(1);
		$this->load->view('template/header');
		$this->load->view('superadmin/edit_karyawan');
		$this->load->view('template/footer');
	}
}
