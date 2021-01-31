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
		$karyawan = $this->m_admin->getData("tbl_pegawai")->result();
		$data = array(
			'karyawan' =>  $karyawan
		);
		//$this->output->cache(1);
		$this->load->view('template/header');
		$this->load->view('superadmin/karyawan',$data);
		$this->load->view('template/footer');
		
	}

	public function LoadModal()
	{

		//$this->output->cache(1);
		$this->load->view('superadmin/modal_karyawan');
		
	}

	public function Edit_karyawan($id)
	{
		$data['url'] = $this->uri->segment(2);
		$this->load->view('template/header',$data);
		$this->load->view('superadmin/edit_karyawan');
		$data = array(
			'karyawan'		=> $this->m_admin->cari(array("id_user"=> $id),"tbl_pegawai")->row()
		);
		//$this->output->cache(1);
		$this->load->view('template/header');
		$this->load->view('superadmin/edit_karyawan',$data);
		$this->load->view('template/footer');
	}
}
