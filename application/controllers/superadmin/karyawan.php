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
		$data['url']=  $this->uri->segment(2);
		$this->load->view('template/header',$data);
		$this->load->view('superadmin/karyawan');
		$this->load->view('template/footer');
		
	}

	public function LoadModal()
	{
		$this->load->view('superadmin/modal_karyawan');
		
	}

	public function Edit_karyawan()
	{
		$data['url'] = $this->uri->segment(2);
		$this->load->view('template/header',$data);
		$this->load->view('superadmin/edit_karyawan');
		$this->load->view('template/footer');
	}
}
