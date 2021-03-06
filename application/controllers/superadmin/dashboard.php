<?php

/**
 * 
 */
class Dashboard extends CI_Controller
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
		// $data1 = $this->m_admin->cari(array('id_user' => $id_user), "akun")->result();
		$data =  array(
			'aktivitas'			=> $this->m_admin->getData("log_aktivitas")->result(),
			'karyawan'			=> $this->m_admin->getData("tbl_karyawan")->result(),
			'url' 				=> $this->uri->segment(2),
			'range18_27'		=> $this->m_admin->rangeUmur(18, 27),
			'range28_35'		=> $this->m_admin->rangeUmur(28, 35),
			'range36_45'		=> $this->m_admin->rangeUmur(36, 45),
			'range46_55'		=> $this->m_admin->rangeUmur(46, 55),
			'totalSma'			=> $this->m_admin->countPendidikan("SMA"),
			'totalS1'			=> $this->m_admin->countPendidikan("S1"),
			'totalS2'			=> $this->m_admin->countPendidikan("S2"),
			'totalD3'			=> $this->m_admin->countPendidikan("D3"),
			'totalD4'			=> $this->m_admin->countPendidikan("D4"),
		);
		$this->load->view('template/header', $data);
		$this->load->view('superadmin/dashboard',$data);
		$this->load->view('template/footer');
	}
}
