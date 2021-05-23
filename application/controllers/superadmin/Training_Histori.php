<?php
date_default_timezone_set('Asia/Jakarta');
/**
 * 
 */
class Training_histori extends CI_Controller
{
	private $filename = "Upload_Pelatihan";

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


	//form input histori training karyawan
	public function form_add()
	{
		$data = array(
			'url'		 => $this->uri->segment(2),
			'karyawan'	 => $this->m_admin->getData("tbl_karyawan")->result()
		);
		$this->load->view('template/header', $data);
		$this->load->view("superadmin/form_training_histori", $data);
		$this->load->view('template/footer');
	}

	//simpan histori training karyawan
	public function add()
	{

		$npk  			 = $this->input->post("npk");
		$nama  			 = $this->input->post("nama");
		$id_user 		 = $this->input->post("id_user");
		$tgl  			 = $this->input->post("tgl");
		$keterangan		 = $this->input->post("keterangan");
		$jenis_training	 = $this->input->post("jenis_training");

		$file 			 	 =  $_FILES["file"]["name"];
		$filename 			 = 	$file;
		$npk				 = $this->input->post("npk");
		$extensi 			 = pathinfo($filename, PATHINFO_EXTENSION);
		$this->load->library('upload');
		$config['allowed_types']   = 'pdf|PDF';
		$config['upload_path']     = './assets/upload/sertifikat/';
		$config['file_name'] 	   = $npk .  $jenis_training .  md5($filename) . '.' . $extensi;

		$this->upload->initialize($config);
		if (!$this->upload->do_upload('file')) {
			echo "failed";
		} else {
			$file = $this->upload->data("file_name");
			$data = array(
				"id_user"						=> $id_user,
				"nama"							=> $nama,
				"jenis_training"				=> $jenis_training,
				"npk"							=> $npk,
				"tgl"							=> $tgl,
				"tahun"							=> substr($tgl, 0, 4),
				"keterangan"					=> $keterangan,
				"file"							=> $file
			);
			//tambahkan data ke log aktivitas
			$info  = "Melakukan penambahan histori training karyawan atas npk " . $npk . " - " . $nama;
			$dataLog     = array(
				'npk'			=> $this->session->userdata('npk'),
				'nama'			=> $this->session->userdata('nama'),
				'tanggal'		=> date('y-m-d H:i:s'),
				'npk_user'		=> $npk,
				'keterangan'	=> $info
			);


			$input = $this->m_admin->inputData($data, "histori_training");
			if ($input == true) {
				$this->m_admin->inputData($dataLog, "log_aktivitas");
				$this->session->set_flashdata("success");
			} else {
				echo "gagal";
			}
		}
	}

	public function uploadExcel()
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
		$this->load->view('superadmin/form_upload_training_karyawan', $data);
		$this->load->view('template/footer');
	}

	public function Upload()
	{
		// Load plugin PHPExcel nya
		include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

		$excelreader = new PHPExcel_Reader_Excel2007();
		$loadexcel = $excelreader->load('assets/upload/' . $this->filename . '.xlsx'); // Load file yang telah diupload ke folder excel
		$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

		$numrow   = 1;
		$data     = array();
		$dataLog  = array();
		$cekNPK   = array();
		foreach ($sheet as $row) {
			if ($numrow > 1) {
				$info  = "Melakukan penambahan histori training karyawan atas npk " . $row['C'] . " - " . $row['D'];

				//cek nisn sudah terdaftar apa belum di master siswa
				$cekNPK = $this->m_admin->cari(array("id_user" => $row['B']), "tbl_karyawan")->num_rows();
				if ($cekNPK == 0) {
					$this->session->set_flashdata("error", "NPK " . $row['B'] . " NPK tidak terdaftar di dalam sistem");
					redirect("superadmin/Training_histori/uploadExcel");
				} else {
					// push data karyawan ke tabel karyawan
					array_push($data, array(
						'id_user'					=> $row['B'],
						'npk'						=> $row['C'],
						'nama'						=> $row['D'],
						'jenis_training'			=> $row['E'],
						'tahun'						=> $row['F'],
						'tgl'						=> $row['G'],
						'keterangan'				=> $row['H']
					));
					//masukan log aktiviats 
					array_push($dataLog, array(
						'npk'			=> $this->session->userdata('npk'),
						'nama'			=> $this->session->userdata('nama'),
						'tanggal'		=> date('y-m-d H:i:s'),
						'npk_user'		=> $row['C'],
						'keterangan'	=> $info
					));
				}
				// var_dump($data);
			}
			$numrow++; // Tambah 1
		}
		if ($cekNPK == 0) {
			echo "";
		} else {
			$input = $this->m_admin->inputArray("histori_training", $data);
			if ($input) {
				$this->m_admin->inputArray("log_aktivitas", $dataLog);
				$this->session->set_flashdata("success", "Berhasil");
				redirect("superadmin/Training_histori/uploadExcel");
			} else {
				echo "Gagal";
			}
		}
	}
}
