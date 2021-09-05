<?php

/**
 * 
 */
class Update_pkwt extends CI_Controller
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
		$this->load->view('superadmin/form_update_pkwt', $data);
		$this->load->view('template/footer');
	}


	public function update()
	{

		$file 				 = $_FILES['file']['name'];
		$filename 			 = $file;
		$npk				 = $this->input->post("npk");
		$extensi 			 = pathinfo($filename, PATHINFO_EXTENSION);
		$this->load->library('upload');
		$config['allowed_types']   = 'pdf|PDF';
		$config['upload_path']     = './assets/upload/pkwt/';
		$config['file_name'] 	   = $npk .  date('his') .  md5($filename) . '.' . $extensi;

		$this->upload->initialize($config);
		if (!$this->upload->do_upload('file')) {
			echo "failed";
		}else{
	
			$berkas     = $this->upload->data("file_name");
			$id  		= $this->input->post("id");
			$id_user	= $this->input->post("id_user");
			$tgl 		= $this->input->post("tanggal");
			$pkwt_baru  = $this->input->post("pkwt_baru");
			$pkwt_lama  = $this->input->post("pkwt_lama");
			$npk  		= $npk;
			$nama  		= $this->input->post("nama");
			//tambah traking histori no pkwt
			$data  = array(
				'id_user'			=> $id_user,
				'tgl'				=> $tgl,
				'tahun'				=> substr($tgl, 0, 4),
				"no_pkwt"			=> $pkwt_baru,
				"pkwt_sebelumnya"	=> $pkwt_lama,
				"file"				=> $berkas
			);

			//update data pkwt
			$dataupdate = array(
				'no_pkwt'  => $pkwt_baru
			);

			$update = $this->m_admin->update($dataupdate, "tbl_karyawan", array("id" => $id));
			if ($update) {
				$this->m_admin->inputData($data, "histori_pkwt");
				echo "pkwt " . $nama . "-" . $npk . " update";
			} else {
				echo "gagal update";
			}
	}
	}
}
