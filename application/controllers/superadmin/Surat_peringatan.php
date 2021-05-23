<?php
date_default_timezone_set('Asia/Jakarta');
/**
 * 
 */
class Surat_peringatan extends CI_Controller
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

	//form input surat peringatan karyawan
	public function form_add()
	{
		$data = array(
			'url'		 => $this->uri->segment(2),
			'karyawan'	 => $this->m_admin->getData("tbl_karyawan")->result()
		);
		$this->load->view('template/header', $data);
		$this->load->view("superadmin/form_add_sp", $data);
		$this->load->view('template/footer');
	}


	//tambah surat peringatan karyawan
	public function add()
	{

		$file 				 = $_FILES['file']['name'];
		$filename 			 = $file;
		$npk				 = $this->input->post("npk");
		$extensi 			 = pathinfo($filename, PATHINFO_EXTENSION);
		$this->load->library('upload');
		$config['allowed_types']   = '*';
		$config['upload_path']     = './assets/upload/surat_peringatan/';
		$config['file_name'] 	   = $npk .  date('his') .  md5($filename) . '.' . $extensi;

		$this->upload->initialize($config);
		if (!$this->upload->do_upload('file')) {
			echo "failed";
		} else {
			$berkas     = $this->upload->data("file_name");
			$npk  			 = $this->input->post("npk");
			$nama  			 = $this->input->post("nama");
			$id_user 		 = $this->input->post("id_user");
			$tgl  			 = $this->input->post("tanggal");
			$tipe 			 = $this->input->post("tipe_sp");
			$keterangan		 = $this->input->post("keterangan");

			$data = array(
				"id_user"						=> $id_user,
				"nama"							=> $nama,
				"npk"							=> $npk,
				"tgl"							=> $tgl,
				"tahun"							=> substr($tgl, 0, 4),
				"jenis_surat_peringatan"		=> $tipe,
				"keterangan"					=> $keterangan,
				'file'							=> $berkas
			);

			$info  = "Input Surat Peringatan karyawan atas npk " . $npk . " - " . $nama;
			$input = $this->m_admin->inputData($data, "histori_surat_peringatan");
			if ($input == true) {
				helper_log($this->session->userdata('npk'), $this->session->userdata('nama'), $npk, $info);
				echo "sukses";
			} else {
				echo "gagal";
			}
		}
	}
}
