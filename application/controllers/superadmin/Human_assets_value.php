<?php
date_default_timezone_set('Asia/Jakarta');
/**
 * 
 */
class Human_assets_value extends CI_Controller
{
	private $filename = "Upload_HAV";
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


	public function form_add()
	{
		$data = array(
			'url'		 => $this->uri->segment(2),
			'karyawan'	 => $this->m_admin->getData("tbl_karyawan")->result()
		);
		$this->load->view('template/header', $data);
		$this->load->view("superadmin/form_human_assets", $data);
		$this->load->view('template/footer');
	}


	public function add()
	{
		$id_user 		 = $this->input->post("id_user");
		$nama  			 = $this->input->post("nama");
		$npk  			 = $this->input->post("npk");
		$tgl  			 = $this->input->post("tgl");
		$kekuatan		 = $this->input->post("kekuatan");
		$kelemahan		 = $this->input->post("kelemahan");
		$keterangan		 = $this->input->post("keterangan");
		$assets_value	 = $this->input->post("assets_value");

		$data = array(
			"id_user"						=> $id_user,
			"nama"							=> $nama,
			"npk"							=> $npk,
			"asset_value"					=> $assets_value,
			"tahun"							=> substr($tgl, 0, 4),
			"tgl"							=> $tgl,
			"keterangan"					=> $keterangan,
			"kekuatan"						=> $kekuatan,
			"kelemahan"						=> $kelemahan
		);

		$input = $this->m_admin->inputData($data, "human_value_assets");
		if ($input == true) {
			echo "sukses";
		} else {
			echo "gagal";
		}
	}
	
	public function uploadExcel()
	{
		$data = array();
		if(isset($_POST['submit'])){
			$upload = $this->m_admin->uploadfile($this->filename);
			if($upload['result'] =="success") {
                    // Load plugin PHPExcel nya
                    include APPPATH.'third_party/PHPExcel/PHPExcel.php';

                    $excelreader = new PHPExcel_Reader_Excel2007();
                    $loadexcel = $excelreader->load('assets/upload/'.$this->filename.'.xlsx'); // Load file yang tadi diupload ke folder excel
                    $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

                    // Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
                    // Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam excel yang sudha di upload sebelumnya
                    $data['sheet'] = $sheet ;
                	}else{
                    $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
                    echo $upload['error'];
                }

		}

		$data1['url'] = $this->uri->segment(2);
 		$this->load->view('template/header',$data1);
 		$this->load->view('superadmin/form_upload_HAV',$data);
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
			if ($numrow > 1) {
				//cek nisn sudah terdaftar apa belum di master siswa
				$cekNPK = $this->m_admin->cari(array("id_user" => $row['B']), "tbl_karyawan")->num_rows();
				if ($cekNPK == 0) {
					$this->session->set_flashdata("error", "NPK " . $row['B'] . " NPK tidak terdaftar di dalam sistem");
					redirect("superadmin/Human_assets_value/uploadExcel");
				} else {
					// push data karyawan ke tabel karyawan
					array_push($data, array(
						'id_user'					=> $row['B'],
						'npk'						=> $row['C'],
						'nama'						=> $row['D'],
						'asset_value'				=> $row['E'],
						'kekuatan'					=> $row['F'],
						'kelemahan'					=> $row['G'],
						'keterangan'				=> $row['H'],
						'tahun' 					=> $row['I'],
						'tgl' 						=> $row['J'],
					));

				}
			}
			$numrow++; // Tambah 1
		}

		if ($cekNPK == 0) {
			echo "";
		} else {
			$input = $this->m_admin->inputArray("human_value_assets", $data);
			if ($input) {
				$this->session->set_flashdata("success","Berhasil");
				redirect("superadmin/Human_assets_value/uploadExcel");
			} else {
				echo "Gagal";
			}
		}

 	}
}
