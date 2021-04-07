<?php

/**
 * 
 */
class Golongan extends CI_Controller
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
			'golongan'	 => $this->m_admin->getData("tbl_golongan")->result()
		);
		$this->load->view('template/header', $data);
		$this->load->view('superadmin/golongan', $data);
		$this->load->view('template/footer');
	}


	//tampilkan data detail dari master golongan kerja
	public function modal()
	{
		$id = $this->input->get("id");
		$data['results']  = $this->m_admin->cari(array('id' => $id), "tbl_golongan")->row();
		$this->load->view("superadmin/modal_data_golongan", $data);
	}


	//update data golongan kerja dari master
	public function update()
	{

		$kode 			 = $this->input->post("kode_golongan");
		$nama  			 = $this->input->post("golongan_kerja");
		$keterangan		 = $this->input->post("keterangan");
		$id 			 = $this->input->post("id");
		$data = array(
			"kode_golongan"			=> $kode,
			"golongan_kerja"		=> $nama,
			"keterangan"			=> $keterangan
		);
		$update = $this->m_admin->update($data, "tbl_golongan", array("id"	=> $id));
		if ($update == true) {
			echo "berhasil";
		}
	}



	//tambah jenis golongan kerja 
	public function add()
	{
		$kode 			 = $this->input->post("kode_golongan");
		$nama  			 = $this->input->post("golongan_kerja");
		$keterangan		 = $this->input->post("keterangan");
		$cek			 = $this->m_admin->cari(array("kode_golongan" => $kode), "tbl_golongan")->num_rows();
		if ($cek > 0) {
			echo "kode sudah digunakan";
		} else {
			$data = array(
				"kode_golongan"			=> $kode,
				"golongan_kerja"		=> $nama,
				"keterangan"			=> $keterangan
			);
			$input = $this->m_admin->inputData($data, "tbl_golongan");
			if ($input == true) {
				echo "sukses";
			} else {
				echo "gagal";
			}
		}
	}

	//hapus data golongan kerja dari master 
	public function delete($id)
	{
		$del = $this->m_admin->delete("tbl_golongan", array("id" => $id));
		if ($del) {
			redirect('superadmin/Golongan');
		}
	}



	//histori golongan kerja karyawan
	/*public function add_histori_golongan_pegawai()
 	{
 		$data   = array(
 			'golongan' 			=>  $this->m_admin->getData("tbl_golongan")->result() ,
 			'karyawan'		=>  $this->m_admin->getData("tbl_karyawan")->result() ,
 			'url'			=> ""
 		);
 		$this->load->view('template/header',$data);
 		$this->load->view("superadmin/add_histori_golongan_pegawai",$data);
		$this->load->view('template/footer');
 	}

 	public  function input_histori()
 	{
 		$file 				 =  $_FILES['file']['name'];
 		$filename 			 = $file;
 		$npk				 = $this->input->post("npk");
		$extensi 			= pathinfo($filename, PATHINFO_EXTENSION);
 		$this->load->library('upload');
 		$config['allowed_types']   = 'pdf|PDF' ;
 		$config['upload_path']     = './assets/upload/histori_golongan/' ;
 		$config['file_name'] 	   = $npk . date('yyddmm')  . $file  ;

 		$this->upload->initialize($config);
 			if(!$this->upload->do_upload('file')){
 				echo "file gagal upload";
 			}else {
 				$berkas  			 = $this->upload->data('file_name');
 				$gol_lama 			 = $this->input->post("gol_sebelumnya");
		 		$gol_baru 			 = $this->input->post("gol_update");
		 		$tgl				 = $this->input->post("tanggal");
		 		$id_user			 = $this->input->post("id_user");
		 		$id 				 = $this->input->post("id");

		 		//data update 
		 		$data_update = array(
			 			"gol_kerja"			=> $gol_baru
			 		);


	 		$input = $this->m_admin->update($data_update,"tbl_karyawan",array("id" => $id));
	 			if($input == true){
			 		$data = array(
			 			"npk"					=> $npk ,
			 			"id_user"				=> $id_user ,
			 			"gol_update"			=> $gol_baru ,
			 			"gol_sebelumnya"		=> $gol_lama ,
			 			"tahun"					=> substr($tgl, 0,4) ,
			 			"tgl"					=> $tgl ,
			 			'berkas'				=> $berkas
			 		);
			 		$this->m_admin->inputData($data,"histori_golongan");
			 		echo "sukses";
	 			} else {
	 				echo "gagal";
	 			}
 			}


 	}*/
}
