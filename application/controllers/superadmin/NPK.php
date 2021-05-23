<?php

/**
 * 
 */
class NPK extends CI_Controller
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
			'url' 			=> $this->uri->segment(2),
			"karyawan"		=> $this->m_admin->getData("tbl_karyawan")->result()
		);
		$this->load->view('template/header', $data);
		$this->load->view('superadmin/form_update_npk', $data);
		$this->load->view('template/footer');
	}


	public function update()
	{
		$id  		= $this->input->post("id");
		$id_user	= $this->input->post("id_user");
		$tgl 		= $this->input->post("tanggal");
		$npk_lama	= $this->input->post("npk");
		$npk_baru	= $this->input->post("npk_baru");
		$nama  		= $this->input->post("nama");
		//tambah traking histori no pkwt
		$data  = array(
			'id_user'			=> $id_user,
			'nama'				=> $nama,
			'tanggal'			=> $tgl,
			'tahun'				=> substr($tgl, 0, 4),
			"npk_lama"			=> $npk_baru,
			"npk_baru"			=> $npk_lama
		);

		//update data pkwt
		$dataupdate = array(
			'npk'  => $npk_baru
		);

		$update = $this->m_admin->update($dataupdate, "tbl_karyawan", array("id" => $id));
		if ($update) {
			$info  = "Perbarui NPK karyawan atas npk " . $npk_lama . " - " . $nama;
			helper_log($this->session->userdata('npk'), $this->session->userdata('nama'), $npk_lama, $info);
			$this->m_admin->inputData($data, "histori_npk");
			echo "sukses";
		} else {
			echo "gagal update";
		}
	}
}
