<?php

date_default_timezone_set('Asia/Jakarta');

/**
 * 
 */
class Nilai_karyawan extends CI_Controller
{

	private $filename = "upload_nilai_pegawai";



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


	//form input nilai karyawan
	public function add_histori_nilai()
	{
		$data = array(
			'url'		 => $this->uri->segment(2),
			'karyawan'	 => $this->m_admin->getData("tbl_karyawan")->result()
		);
		$this->load->view('template/header', $data);
		$this->load->view("superadmin/add_histori_nilai_karyawan", $data);
		$this->load->view('template/footer');
	}

	//form input karyawan dengan upload
	public function upload_histori_nilai()
	{
		$data = array();
		if (isset($_POST['submit'])) {
			$upload = $this->m_admin->uploadfile($this->filename);
			if ($upload['result'] == "success") {
				// Load plugin PHPExcel nya
				include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

				$excelreader = new PHPExcel_Reader_Excel2007();
				$loadexcel = $excelreader->load('assets/upload/' . $this->filename . '.xlsx'); // Load file yang tadi diupload ke folder excel
				$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

				// Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
				// Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam excel yang sudha di upload sebelumnya
				$data['sheet'] = $sheet;
			} else {
				$data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
				echo $upload['error'];
			}
		}

		$data1['url'] = $this->uri->segment(2);
		$this->load->view('template/header', $data1);
		$this->load->view('superadmin/form_upload_nilai_karyawan', $data);
		$this->load->view('template/footer');
	}

	public function Upload()
	{
		// Load plugin PHPExcel nya
		include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

		$excelreader = new PHPExcel_Reader_Excel2007();
		$loadexcel = $excelreader->load('assets/upload/' . $this->filename . '.xlsx'); // Load file yang telah diupload ke folder excel
		$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

		$numrow    = 1;
		$data      = array();
		$dataLog   = array();
		$cekNPK    = array();
		foreach ($sheet as $row) {
			$info  = "Melakukan perubahan nilai dan poin karyawan atas npk " . $row['C'] . " - " . $row['D'];
			if ($numrow > 1) {
				//cek nisn sudah terdaftar apa belum di master siswa
				$cekNPK = $this->m_admin->cari(array("id_user" => $row['B']), "tbl_karyawan")->num_rows();
				if ($cekNPK == 0) {
					$this->session->set_flashdata("error", "NPK " . $row['B'] . " NPK tidak terdaftar di dalam sistem");
					redirect("superadmin/Nilai_karyawan/upload_histori_nilai");
				} else {
					// push data 
					array_push($data, array(
						'id_user'					=> $row['B'],
						'npk'						=> $row['C'],
						'nama'						=> $row['D'],
						'nilai_pk'					=> $row['E'],
						'tahun'						=> $row['F'],
						'tgl'						=> $row['G'],
					));

					//
				}
			}
			$numrow++; // Tambah 1
		}

		if ($cekNPK == 0) {
			echo "";
		} else {
			$input = $this->m_admin->inputArray("histori_nilai_karyawan", $data);
			if ($input) {
				$this->m_admin->inputArray("log_aktivitas", $dataLog);
				$this->session->set_flashdata("success");
				redirect("superadmin/Nilai_karyawan/upload_histori_nilai");
			} else {
				echo "Gagal";
			}
		}
	}


	//input data nilai karyawan
	public  function input_histori()
	{
		$npk				 = $this->input->post("npk");
		$nilai 	 			 = $this->input->post("nilai");
		$tgl				 = $this->input->post("tanggal");
		$id 				 = $this->input->post("id");
		$nama 				 = $this->input->post("nama");
		$id_user 			 = $this->input->post("id_user");
		$point 				 = $this->input->post("point");
		$data = array(
			"id_user"				=> $id_user,
			"npk"					=> $npk,
			"nama"					=> $nama,
			"nilai_pk"				=> $nilai,
			"point_pk"				=> $point,
			"tahun"					=> substr($tgl, 0, 4),
			"tgl"					=> $tgl,
		);


		// var_dump($data);
		$input = $this->m_admin->inputData($data, "histori_nilai_karyawan");

		//tambahkan data ke log aktivitas
		$info  = "Melakukan perubahan nilai dan poin karyawan atas npk " . $npk . " - " . $nama;


		if ($input == true) {
			helper_log($this->session->userdata('npk'), $this->session->userdata('nama'), $npk, $info);
			echo "sukses";
		} else {
			echo "gagal";
		}
	}
}
