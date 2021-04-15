<?php

/**
 * 
 */
class Upload_berkas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
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
		$this->load->view('superadmin/form_upload_berkas', $data);
		$this->load->view('template/footer');
	}

	public function upload()
	{
		//tempat menyimpan folder file upload
		$directory = $this->input->post("direktory");
		//nama table di database 
		$file 				 = $_FILES['file']['name'];
		$filename 			 = $file;
		$npk				 = $this->input->post("npk");
		$extensi 			 = pathinfo($filename, PATHINFO_EXTENSION);
		$this->load->library('upload');
		$config['allowed_types'] = 'pdf';
		$config['upload_path']     = './assets/upload/berkas/' . $directory . "/";
		$config['overwrite'] = true;
		$config['file_name'] 	   = $npk .  date('his') .  md5($filename) . '.' . $extensi;
		$this->upload->initialize($config);

		if(!$this->upload->do_upload('file')){
			echo 'failed';
		}else{
			$ktp				= $this->upload->data("ktp");
			$buku_rekening 		= $this->upload->data("buku_rekening");
			$ijazah_sekolah 	= $this->upload->data("ijazah_sekolah");
			$kartu_keluarga 	= $this->upload->data("kartu_keluarga");
			$ket_domisili 		= $this->upload->data("ket_domisili");
			$ket_kesehatan 		= $this->upload->data("ket_kesehatan");
			$npwp 				= $this->upload->data("npwp");
			$photo 				= $this->upload->data("photo");
			$riwayat_hidup 		= $this->upload->data("riwayat_hidup");
			$skck 				= $this->upload->data("skck");
			$surat_lamaran 		= $this->upload->data("surat_lamaran");
		
			$berkas = array(
				'id_user'			=> $id_user,
				'nama'				=> $nama,
				'npk'				=> $npk,
				'ktp'				=> $ktp,
				'buku_rekening'		=> $buku_rekening,
				'ijazah_sekolah'	=> $ijazah_sekolah,
				'kartu_keluarga'	=> $kartu_keluarga,
				'ket_domisili'		=> $ket_domisili,
				'ket_kesehatan'		=> $ket_kesehatan,
				'npwp'				=> $npwp,
				'photo'				=> $photo,
				'riwayat_hidup'		=> $riwayat_hidup,
				'skck'				=> $skck,
				'surat_lamaran'		=> $surat_lamaran,
			);
				var_dump($berkas);
			// $input = $this->m_admin->inputData("tbl_berkas",$berkas);
			// if($input){
			// 	$this->session->set_flashdata("sukses","berhasil");
			// }else{
			// 	echo "gagal";
			// }
		}

		
	}
}
