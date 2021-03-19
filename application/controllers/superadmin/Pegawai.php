<?php

/**
 * 
 */
class Pegawai extends CI_Controller
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


	public function index()
	{
		$data = $this->m_admin->getData("tbl_pegawai")->result();
		echo json_encode($data);
	}


	public function update()
	{
		$data = array(
			"nama"							=> $this->input->post("nama"),
			"nik"							=> $this->input->post("nik"),
			"no_kk"							=> $this->input->post("no_kk"),
			"tempat_lahir"					=> $this->input->post("tempat_lahir"),
			"tgl_lahir"						=> $this->input->post("tgl_lahir"),
			"bpjs_kesehatan"				=> $this->input->post("bpjs_kesehatan"),
			"bpjs_ketenagakerjaan"			=> $this->input->post("bpjs_ketenagakerjaan"),
			"divisi"						=> $this->input->post("divisi"),
			"departement"					=> $this->input->post("departement"),
			"posisi"						=> $this->input->post("posisi"),
			"wilayah"						=> $this->input->post("wilayah"),
			"status_karyawan"				=> $this->input->post("status_karyawan"),
			"company"						=> $this->input->post("company"),
			"join_date"						=> $this->input->post("join_date"),
			"usia"							=> $this->input->post("usia"),
			"kel_jabatan"					=> $this->input->post("kel_jabatan"),
		);

		$where = array("npk"	=> 220222);
		$update = $this->m_admin->update($data, "tbl_pegawai", $where);
	}

	public function delete()
	{
		$id = $this->input->get("id");
		$this->m_admin->delete("tbl_pegawai", array("id" => 12));
	}
}
