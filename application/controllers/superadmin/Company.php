<?php


/**
 * 
 */
class Company extends CI_Controller
{
	private $filename = "Upload_Mutasi_Perusahaan";
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

		//tambahkan data ke log aktivitas
		$info  = "Update perubahan histori company  karyawan atas npk " . $npk . " - " . $nama;

		$update = $this->m_admin->update($dataupdate, "tbl_karyawan", array("id" => $id));
		if ($update) {
			//log aktivitas admin ketika merubah data
			helper_log($this->session->userdata('npk'), $this->session->userdata('nama'), $npk, $info);
			$this->m_admin->inputData($data, "histori_company");
			echo "company " . $nama . "-" . $npk . " update";
		} else {
			echo "gagal update";
		}
	}

	public function UploadExcel()
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
		$this->load->view('superadmin/Form_upload_company', $data);
		$this->load->view('template/footer');
	}

	public function Upload()
	{
		// Load plugin PHPExcel nya
		include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

		$excelreader = new PHPExcel_Reader_Excel2007();
		$loadexcel = $excelreader->load('assets/upload/' . $this->filename . '.xlsx'); // Load file yang telah diupload ke folder excel
		$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

		$numrow = 1;
		$data = array();
		$pendidikan = array();
		$cekNPK = array();
		foreach ($sheet as $row) {
			$info  = "Update perubahan histori company  karyawan atas npk " . $row['C'] . " - " . $row['D'];

			if ($numrow > 1) {
				//cek nisn sudah terdaftar apa belum di master siswa
				$cekNPK = $this->m_admin->cari(array("id_user" => $row['B']), "tbl_karyawan")->num_rows();
				if ($cekNPK == 0) {
					$this->session->set_flashdata("error", "NPK " . $row['B'] . " NPK tidak terdaftar di dalam sistem");
					redirect("superadmin/Company/UploadExcel");
				} else {
					// push data karyawan ke tabel karyawan
					array_push($data, array(
						'id_user'					=> $row['B'],
						'npk'						=> $row['C'],
						'nama'						=> $row['D'],
						'company'					=> $row['E'],
						'tahun'						=> $row['G'],
						'join_date'					=> $row['F'],
					));

					//update company pada tbl_karyawan
					$update = array(
						'id_user'			=> $row['B'],
						'company'			=> $row['E'],
						'join_date'			=> $row['F']
					);

					//log aktivitas 
					helper_log($this->session->userdata('npk'), $this->session->userdata('nama'), $row['C'], $info);
				}
			}
			$numrow++; // Tambah 1
		}

		if ($cekNPK == 0) {
			echo "";
		} else {
			$data1 = $this->m_admin->update($update, "tbl_karyawan", array("id_user" => $row['B']));
			if ($data1) {
				$input = $this->m_admin->inputArray("histori_company", $data);
				$this->session->set_flashdata("success", "Berhasil");
				redirect("superadmin/Company/UploadExcel");
			} else {
				echo "Gagal";
			}
		}
	}
}
