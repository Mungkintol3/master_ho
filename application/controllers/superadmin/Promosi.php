<?php

/**
 * 
 */
class Promosi extends CI_Controller
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


	public function add_promosi_jabatan()
	{
		$data = array(
			'url'		 => $this->uri->segment(2),
			'karyawan'	 => $this->m_admin->getData("tbl_karyawan")->result(),
			'jabatan'	 => $this->m_admin->getData("tbl_jabatan")->result(),
		);
		$this->load->view('template/header', $data);
		$this->load->view("superadmin/add_promosi_jabatan", $data);
		$this->load->view('template/footer');
	}

	//input promosi jabatan 
	public  function input_jabatan()
	{
		$file 				 = $_FILES['file']['name'];
		$filename 			 = $file;
		$npk				 = $this->input->post("npk");
		$extensi 			 = pathinfo($filename, PATHINFO_EXTENSION);
		$this->load->library('upload');
		$config['allowed_types']   = '*';
		$config['upload_path']     = './assets/upload/promosi_jabatan/';
		$config['file_name'] 	   = $npk .  date('his') .  md5($filename) . '.' . $extensi;

		$this->upload->initialize($config);
		if (!$this->upload->do_upload('file')) {
			echo "failed";
		} else {
			$berkas     = $this->upload->data("file_name");
			$id  		= $this->input->post("id");
			$id_user	= $this->input->post("id_user");
			$tgl 		= $this->input->post("tanggal");
			$npk  		= $this->input->post("npk");
			$nama  		= $this->input->post("nama");
			$jabatan 	= $this->input->post("jabatan");
			$range_gol	= $this->input->post("range_golongan");
			$golongan 	= $this->input->post("golongan");
			$status 	= $this->input->post("status");
			//tambah traking histori no pkwt
			$data  = array(
				'id_user'			=> $id_user,
				'nama'				=> $nama,
				'npk'				=> $npk,
				'tahun'				=> substr($tgl, 0, 4),
				'tanggal'			=> $tgl,
				'latest_promosi'	=> $jabatan,
				"file"				=> $berkas
			);

			//tambah histori golongan 
			$data2 = array(
				'id_user'			=> $id_user,
				'nama'				=> $nama,
				'npk'				=> $npk,
				'tahun'				=> substr($tgl, 0, 4),
				'tgl'				=> $tgl,
				"berkas"			=> $berkas,
				"gol_update"		=> $golongan
			);


			//update data 
			$dataupdate = array(
				'promosi_jabatan'   => $jabatan,
				'latest_promosi'	=> $tgl,
				'kel_jabatan'		=> $jabatan,
				'gol_kerja'			=> $golongan,
				'range_golongan'	=> $range_gol,
				'status'			=> $status
			);

			$update = $this->m_admin->update($dataupdate, "tbl_karyawan", array("id" => $id));
			if ($update) {
				$this->m_admin->inputData($data, "promosi_jabatan");
				$this->m_admin->inputData($data2, "histori_golongan");
				echo "berhasil";
			} else {
				echo "error";
			}
		}
		/**/
	}

	//tambah data mutasi jabatan ke histori
	public function add_mutasi_jabatan()
	{
		$data = array(
			'url'		 	 => $this->uri->segment(2),
			'departement'	 => $this->m_admin->getData("departement")->result(),
			'divisi'	 => $this->m_admin->getData("divisi")->result(),
			'karyawan'		 => $this->m_admin->getData("tbl_karyawan")->result()
		);
		$this->load->view('template/header', $data);
		$this->load->view("superadmin/add_mutasi_jabatan", $data);
		$this->load->view('template/footer');
	}

	//input promosi mutasi 
	public  function input_mutasi()
	{

		$file 				 = $_FILES['file']['name'];
		$filename 			 = $file;
		$npk				 = $this->input->post("npk");
		$extensi 			 = pathinfo($filename, PATHINFO_EXTENSION);
		$this->load->library('upload');
		$config['allowed_types']   = '*';
		$config['upload_path']     = './assets/upload/mutasi/';
		$config['file_name'] 	   = $npk .  date('his') .  md5($filename) . '.' . $extensi;

		$this->upload->initialize($config);
		if (!$this->upload->do_upload('file')) {
			echo "failed";
		} else {
			$berkas     	= $this->upload->data("file_name");
			$id  			= $this->input->post("id");
			$id_user		= $this->input->post("id_user");
			$tgl 			= $this->input->post("tanggal");
			$npk  			= $this->input->post("npk");
			$nama  			= $this->input->post("nama");
			$departement 	= $this->input->post("departement");
			$divisi 		= $this->input->post("divisi");
			$posisi 		= $this->input->post("posisi");


			//histori_karir 
			$data = array(
				'id_user'			=> $id_user,
				'nama'				=> $nama,
				'npk'				=> $npk,
				'tahun'				=> substr($tgl, 0, 4),
				'tanggal'			=> $tgl,
				'departement'		=> $departement,
				'divisi'			=> $divisi,
				'posisi'			=> $posisi,
				'file'				=> $berkas
			);
			//update data pkwt
			$dataupdate = array(
				'divisi' 		 => $divisi,
				'departement'  	 => $departement,
				'position'  	 => $posisi
			);

			$update = $this->m_admin->update($dataupdate, "tbl_karyawan", array("id" => $id));
			if ($update) {
				$this->m_admin->inputData($data, "histori_karir");
				echo "sukses";
			} else {
				echo "gagal update";
			}
		}

		/**/
	}

	public function add_demosi_jabatan()
	{
		$data = array(
			'url'		 => $this->uri->segment(2),
			'jabatan'	 => $this->m_admin->getData("tbl_jabatan")->result(),
			'karyawan'	 => $this->m_admin->getData("tbl_karyawan")->result()
		);
		$this->load->view('template/header', $data);
		$this->load->view("superadmin/add_demosi_jabatan", $data);
		$this->load->view('template/footer');
	}

	//input promosi mutasi 
	public  function input_demosi()
	{
		$file 				 = $_FILES['file']['name'];
		$filename 			 = $file;
		$npk				 = $this->input->post("npk");
		$extensi 			 = pathinfo($filename, PATHINFO_EXTENSION);
		$this->load->library('upload');
		$config['allowed_types']   = '*';
		$config['upload_path']     = './assets/upload/demosi_jabatan/';
		$config['file_name'] 	   = $npk .  date('his') .  md5($filename) . '.' . $extensi;

		$this->upload->initialize($config);
		if (!$this->upload->do_upload('file')) {
			echo "failed";
		} else {
			$berkas     = $this->upload->data("file_name");
			$id  		= $this->input->post("id");
			$id_user	= $this->input->post("id_user");
			$tgl 		= $this->input->post("tanggal");
			$npk  		= $this->input->post("npk");
			$nama  		= $this->input->post("nama");
			$demosi 	= $this->input->post("jabatan");
			$range_gol	= $this->input->post("range_golongan");
			$golongan 	= $this->input->post("golongan");
			$status 	= $this->input->post("status");


			//tambah traking histori demosi
			$data  = array(
				'id_user'			=> $id_user,
				'nama'				=> $nama,
				'npk'				=> $npk,
				'tahun'				=> substr($tgl, 0, 4),
				'tanggal'			=> $tgl,
				'demosi_jabatan'	=> $demosi,
				'file'				=> $berkas
			);

			//tambah histori golongan 
			$data2 = array(
				'id_user'			=> $id_user,
				'nama'				=> $nama,
				'npk'				=> $npk,
				'tahun'				=> substr($tgl, 0, 4),
				'tgl'				=> $tgl,
				"berkas"			=> $berkas,
				"gol_update"		=> $golongan
			);


			//update data 
			$dataupdate = array(
				'demosi_jabatan'    => $demosi,
				'latest_promosi'	=> $tgl,
				'kel_jabatan'		=> $demosi,
				'gol_kerja'			=> $golongan,
				'range_golongan'	=> $range_gol,
				'status'			=> $status
			);

			$update = $this->m_admin->update($dataupdate, "tbl_karyawan", array("id" => $id));
			if ($update) {
				$this->m_admin->inputData($data, "demosi_jabatan");
				$this->m_admin->inputData($data2, "histori_golongan");
				echo "sukses";
			} else {
				echo "gagal update";
			}
		}
	}
}
