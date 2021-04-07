<?php

/**
 * 
 */
class Jabatan extends CI_Controller
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

		$data = array(
			'url' => $this->uri->segment(2),
			'jabatan'	=> $this->m_admin->getData("tbl_jabatan")->result()
		);
		$this->load->view('template/header', $data);
		$this->load->view('superadmin/jabatan', $data);
		$this->load->view('template/footer');
	}

	public function modal()
	{
		$id = $this->input->get("id");
		$data['results']  = $this->m_admin->cari(array('id' => $id), "tbl_jabatan")->row();
		$this->load->view("superadmin/modal_data_jabatan", $data);
	}

	public function update()
	{
		$kode 			 = $this->input->post("range");
		$nama  			 = $this->input->post("nama_jabatan");
		$keterangan		 = $this->input->post("keterangan");
		$id 			 = $this->input->post("id");
		$data = array(
			"range"					=> $kode,
			"nama_jabatan"			=> $nama,
			"keterangan"			=> $keterangan
		);
		$update = $this->m_admin->update($data, "tbl_jabatan", array("id"	=> $id));
		if ($update == true) {
			echo "berhasil";
		} else {
			echo "gagal";
		}
	}


	public function add()
	{
		$kode 			 = $this->input->post("range");
		$nama  			 = $this->input->post("nama_jabatan");
		$keterangan		 = $this->input->post("keterangan");
		$cek			 = $this->m_admin->cari(array("range" => $kode), "tbl_jabatan")->num_rows();
		if ($cek > 0) {
			echo "kode sudah digunakan";
		} else {
			$data = array(
				"range"					=> $kode,
				"nama_jabatan"			=> $nama,
				"keterangan"			=> $keterangan
			);
			//var_dump($data);
			$input = $this->m_admin->inputData($data, "tbl_jabatan");
			if ($input == true) {
				echo "sukses";
			} else {
				echo "gagal";
			}
		}
	}


	public function delete($id)
	{
		//$id = $this->input->get("id");
		$this->m_admin->delete("tbl_jabatan", array("id" => $id));
		redirect('superadmin/Jabatan');
	}
}
