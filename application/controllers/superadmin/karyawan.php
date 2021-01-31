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
<<<<<<< HEAD

=======
		$data['url']=  $this->uri->segment(2);
		$this->load->view('template/header',$data);
		$this->load->view('superadmin/karyawan');
>>>>>>> a99b76e616d0bb7ef72b6cd871a0d40917711cc6
		$karyawan = $this->m_admin->getData("tbl_pegawai")->result();
		$data = array(
			'karyawan' =>  $karyawan ,
			'url' 	   =>   $this->uri->segment(2)
		);
		//$this->output->cache(1);
		$this->load->view('template/header',$data);
		$this->load->view('superadmin/karyawan',$data);
		$this->load->view('template/footer');
		
	}

	public function LoadModal()
	{
<<<<<<< HEAD
=======

>>>>>>> a99b76e616d0bb7ef72b6cd871a0d40917711cc6
		//$this->output->cache(1);
		$this->load->view('superadmin/modal_karyawan');
		
	}

	public function Edit_karyawan($id)
	{
<<<<<<< HEAD

=======
		$data['url'] = $this->uri->segment(2);
		$this->load->view('template/header',$data);
		$this->load->view('superadmin/edit_karyawan');
>>>>>>> a99b76e616d0bb7ef72b6cd871a0d40917711cc6
		$data = array(
			'karyawan'		=> $this->m_admin->cari(array("id_user"=> $id),"tbl_pegawai")->row() ,
			'url' 			=> $this->uri->segment(2)
		);
		//$this->output->cache(1);
		$this->load->view('template/header',$data);
		$this->load->view('superadmin/edit_karyawan',$data);
		$this->load->view('template/footer');
	}
}
