<?php


/**
 * 
 */
class Company extends CI_Controller
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
			'url'		 => $this->uri->segment(2),
			'karyawan'	 => $this->m_admin->getData("tbl_karyawan")->result()
		);
		$this->load->view('template/header', $data);
		$this->load->view('superadmin/form_histori_company', $data);
		$this->load->view('template/footer');
	}

	public function update()
	{
		$id 			= $this->input->post("id");
		$id_user		= $this->input->post("id_user");
		$npk 			= $this->input->post("npk");
		$company_old	= $this->input->post("company_old");
		$company_new 	= $this->input->post("company_new");
		$tgl 			= $this->input->post("tgl");
		$nama 			= $this->input->post("nama");
		//tambah ke histori company
		$data = array(
			'nama'			=> $nama,
			'npk'			=> $npk,
			'id_user'		=> $id_user,
			"company"		=> $company_new,
			"join_date"		=> $tgl,
			'tahun'			=> substr($tgl, 0, 4)
		);

		//data karir terbaru
		$dataupdate = array(
			'company'			=> $company_new,
			"join_date"			=> $tgl,
		);

		$update = $this->m_admin->update($dataupdate, "tbl_karyawan", array("id" => $id));
		if ($update) {
			$this->m_admin->inputData($data, "histori_company");
			echo "company " . $nama . "-" . $npk . " update";
		} else {
			echo "gagal update";
		}
	}
}
