<?php
date_default_timezone_set('Asia/Jakarta');
/**
 * 
 */
class Keluarga extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		// $this->load->library('encryption');
		$id 	 = $this->session->userdata('id');

		if ($id == null || $id == "") {
			$this->session->set_flashdata('info', 'sessi berakhir silahkan login kembali');
			redirect('Login');
		}
	}

	public function form_add()
	{
		$data = array(
			'url'		 => $this->uri->segment(2),
			'karyawan'	 => $this->m_admin->getData("tbl_karyawan")->result()
		);
		$this->load->view('template/header', $data);
		$this->load->view("superadmin/form_add_keluarga", $data);
		$this->load->view('template/footer');
	}


	public function add()
	{
		$npk  			 = $this->input->post("npk");
		$nama  			 = $this->input->post("nama");
		$nama_karyawan	 = $this->input->post("nama_karyawan");
		$id_user 		 = $this->input->post("id_user");
		$status 		 = $this->input->post("status");
		$no_kk 			 = $this->input->post("no_kk");
		$bpjs_kesehatan	 = $this->input->post("no_bpjs");
		$nik			 = $this->input->post("nik");

		$data = array(
			"id_user"						=> $id_user,
			"nama_karyawan"					=> $nama_karyawan,
			"npk"							=> $npk,
			"nama"							=> $nama,
			"status"						=> $status,
			"no_kk"							=> $no_kk,
			"bpjs_kesehatan"				=> $bpjs_kesehatan,
			"nik"							=> $nik,

		);

		$input = $this->m_admin->inputData($data, "tbl_keluarga");
		if ($input == true) {
			$info  = "Tambah anggota keluarga baru dari karyawan atas npk " . $npk . " - " . $nama;
			helper_log($this->session->userdata('npk'), $this->session->userdata('nama'), $npk, $info);
			echo "sukses";
		} else {
			echo "gagal";
		}
	}
}
