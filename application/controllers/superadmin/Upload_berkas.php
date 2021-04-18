<?php

/**
 * 
 */
class Upload_berkas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		// $this->load->library('encryption');
		$id 	 = $this->session->userdata('id');

		if ($id == null || $id == "") {
			$this->session->set_flashdata('info', 'sessi berakhir silahkan login kembali');
			redirect('Login');
		}
	}


	public function index()
	{
		$data = array(
			'url'		 => $this->uri->segment(2),
			'karyawan'	 => $this->m_admin->getData("tbl_karyawan")->result()
		);
		$this->load->view('template/header', $data);
		$this->load->view('superadmin/form_upload_berkas', $data);
		$this->load->view('template/footer');
	}

	public function upload()
	{
		if(isset($_POST['submit'])){
    $ktp = $_FILES['ktp']['name'];
    $kartu_keluarga = $_FILES['kartu_keluarga']['name'];
	$surat_lamaran = $_FILES['surat_lamaran']['name'];

    var_dump($ktp,$kartu_keluarga);
	}
	}
}