<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cetak extends CI_Controller
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

	public function view($id)
	{
		$mpdf = new \Mpdf\Mpdf([
			'margin_left' => 20,
			'margin_right' => 15,
			'margin_top' => 48,
			'margin_bottom' => 25,
			'margin_header' => 10,
			'margin_footer' => 10
		]);
		$data2 = array(
			'info'  => $this->m_admin->cari(array('id_user' => $id), "tbl_karyawan")->row(),
			'pendidikan'  	=> $this->m_admin->cari(array('id_user' => $id), "pendidikan")->result(),
			'golongan'		=> $this->m_admin->cari(array("id_user" => $id), "histori_golongan")->result(),
			'company'		=> $this->m_admin->cari(array("id_user" => $id), "histori_company")->result(),
			'jabatan'		=> $this->m_admin->cari(array("id_user" => $id), "promosi_jabatan")->result(),
			'training'		=> $this->m_admin->cari(array("id_user" => $id), "histori_training")->result(),
			'sp'			=> $this->m_admin->cari(array("id_user" => $id), "histori_surat_peringatan")->result(),
			'keluarga'		=> $this->m_admin->cari(array("id_user" => $id), "tbl_keluarga")->result(),
			'nilai'			=> $this->m_admin->cari(array("id_user" => $id), "histori_nilai_karyawan")->result(),
			'human_value_assets' => $this->m_admin->cari(array("id_user" => $id), "human_value_assets")->result(),
		);
		$data = $this->load->view('superadmin/mpdf', $data2, TRUE);
		$mpdf->SetProtection(array('print'));
		$mpdf->SetTitle("Biodata Karyawan");
		$mpdf->SetAuthor("Murry Fuckin' Febrians");
		$mpdf->SetWatermarkText("SIGAP");
		$mpdf->showWatermarkText = true;
		$mpdf->watermark_font = 'DejaVuSansCondensed';
		$mpdf->watermarkTextAlpha = 0.1;
		$mpdf->SetDisplayMode('fullpage');
		$mpdf->WriteHTML($data);
		$mpdf->Output();
	}
}
