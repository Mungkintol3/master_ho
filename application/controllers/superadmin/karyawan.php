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
		$karyawan = $this->m_admin->getData("tbl_karyawan")->result();
		$data = array(
			'karyawan' =>  $karyawan ,
			'url' 	   =>   $this->uri->segment(2)
		);
		$this->load->view('template/header',$data);
		$this->load->view('superadmin/karyawan',$data);
		$this->load->view('template/footer');
		
	}

	public function LoadModal()
	{
		$this->load->view('superadmin/modal_karyawan');
		
	}

	public function Edit_karyawan($id)
	{
		$data = array(
			'karyawan'		=> $this->m_admin->cari(array("id_user"=> $id),"tbl_karyawan")->row() ,
			'url' 			=> $this->uri->segment(2)
		);
		//$this->output->cache(1);
		$this->load->view('template/header',$data);
		$this->load->view('superadmin/edit_karyawan',$data);
		$this->load->view('template/footer');
	}
}
