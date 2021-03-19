<?php

/**
 * 
 */
class Penilaian_pegawai extends CI_Controller
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


	public function add_histori_penilaian()
	{
		$data   = array(
			'pegawai'		=>  $this->m_admin->getData("tbl_pegawai")->result()
		);
		$this->load->view("add_histori_nilai_karyawan", $data);
	}

	public  function input_histori()
	{
		$npk				 = $this->input->post("npk");
		$nilai 	 			 = $this->input->post("nilai_pk");
		$tgl				 = $this->input->post("tgl");
		$data = array(
			"npk"					=> $npk,
			"id_user"				=> md5($npk),
			"nilai_pk"				=> $nilai,
			"tahun"					=> date("Y"),
			"tgl"					=> $tgl
		);

		$input = $this->m_admin->inputData($data, "histori_nilai_karyawan");
		if ($input == true) {
			$data2 = array(
				"nilai_pk"			=> $nilai
			);
			$this->m_admin->update($data2, "tbl_pegawai", array("npk"	=> $npk));
			echo "sukses";
		} else {
			echo "gagal";
		}
	}
}
