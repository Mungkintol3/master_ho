<?php
defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH.'vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
	use PhpOffice\PhpSpreadsheet\IOFactory;
	use PhpOffice\PhpSpreadsheet\Spreadsheet;

class TambahKaryawan extends CI_Controller
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

		// $data = array();
		// if (isset($_POST['submit'])) {
		// 	$upload = $this->m_admin->uploadfile($this->filename);
		// 	if ($upload['result'] == "success") {
		// 		 Load plugin PHPExcel nya
		// 		 include APPPATH . 'third_party/PHPExcel/PHPExcel.php';
				
		// 		$loadexcel = $excelreader->load('assets/upload/' . $this->filename . '.xlsx'); // Load file yang tadi diupload ke folder excel
		// 		$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

		// 		// Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
		// 		// Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam excel yang sudha di upload sebelumnya
		// 		$data['sheet'] = $sheet;
		// 	} else {
		// 		$data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
		// 		echo $upload['error'];
		// 	}
		// }
			
		$data1['url'] = $this->uri->segment(2);
		$this->load->view('template/header', $data1);
		$this->load->view('superadmin/form_add_pegawai');
		$this->load->view('template/footer');
	}


	public function upload()
        {
            $upload_file=$_FILES['upload_file']['name'];
            $extension=pathinfo($upload_file,PATHINFO_EXTENSION);
            if($extension == 'csv'){
                 $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Csv');
            }else if($extension == 'xls'){
                 $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xls');
            }else{
                 $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
            }
            $spreadsheet = $reader->load($_FILES['upload_file']['tmp_name']);
            $sheetdata = $spreadsheet->getActiveSheet()->toArray(); 
            $sheetcount=count($sheetdata);
            $data = array();
            $pendidikan = array();
            $cekNPK = array();
            $cekNPK = $this->m_admin->cari(array("npk" => $EmployeNumber), "tbl_karyawan")->num_rows();
            if ($sheetcount>1){
               for  ($i=1; $i < $sheetcount; $i++){
                                        $EmployeNumber = $sheetdata[$i][1];
                                        $Name = $sheetdata[$i][2];
                                        $Wilayah = $sheetdata[$i][3];
                                        $JenisKelamin = $sheetdata[$i][4];
                                        $StatusPerkawinan = $sheetdata[$i][5];
                                        $AlamatTinggal = $sheetdata[$i][6];
                                        $TempatLahir = $sheetdata[$i][7];
                                        $TanggalLahir = $sheetdata[$i][8];
                                        $Umur = $sheetdata[$i][9];
                                        $NoTelephone = $sheetdata[$i][10];
                                        $Email = $sheetdata[$i][11];
                                        $GolonganDarah = $sheetdata[$i][12];
                                        $NomorKTP = $sheetdata[$i][13];
                                        $NomorKK = $sheetdata[$i][14];
                                        $NoBPJSKes = $sheetdata[$i][15];
                                        $NoBPJSTk = $sheetdata[$i][16];
                                        $NoDPLK = $sheetdata[$i][17];
                                        $NoNpwp = $sheetdata[$i][18];
                                        $NamaBank = $sheetdata[$i][19];
                                        $NomorRekening = $sheetdata[$i][20];
                                        $StatusPajak = $sheetdata[$i][21];
                                        $StatusPerkawinan1 = $sheetdata[$i][22];
                                        $NomorPKWT = $sheetdata[$i][23];
                                        $StatusKaryawan = $sheetdata[$i][24];
                                        $PendidikanBergabung = $sheetdata[$i][25];
                                        $KelompokJabatan = $sheetdata[$i][26];
                                        $AlamatKTP = $sheetdata[$i][27];
                                        $KontakDarurat = $sheetdata[$i][28];
                                        $TanggalBergabung = $sheetdata[$i][29];
                                        $Jurusan = $sheetdata[$i][30];
                                        $TahunLulus = $sheetdata[$i][31];
                                        $NamaSekolah = $sheetdata[$i][32];
                                        $photo      = $sheetdata[$i][33];
                                        //table karyawan
                                        $data[]= array(
                                            'id_user'					=> $EmployeNumber,
                                            'npk'						=> $EmployeNumber,
                                            'nama'						=> $Name,
                                            'wilayah'					=> $Wilayah,
                                            'gender'					=> $JenisKelamin,
                                            'martial_status'			=> $StatusPerkawinan,
                                            'address'					=> $AlamatTinggal,
                                            'tempat_lahir'				=> $TempatLahir,
                                            'tgl_lahir'					=> $TanggalLahir,
                                            'age'						=> $Umur,
                                            'no_telp'					=> $NoTelephone,
                                            'email'						=> $Email,
                                            'gol_darah'					=> $GolonganDarah,
                                            'no_ktp'					=> $NomorKTP,
                                            'no_kk'						=> $NomorKK,
                                            'bpjs_kesehatan'			=> $NoBPJSKes,
                                            'bpjs_tenagakerja'			=> $NoBPJSTk,
                                            'no_dplk'					=> $NoDPLK,
                                            'no_npwp'					=> $NoNpwp,
                                            'nama_bank'					=> $NamaBank,
                                            'no_rekening'				=> $NomorRekening,
                                            'status_pajak'				=> $StatusPajak,
                                            'status_kawin'				=> $StatusPerkawinan1,
                                            'no_pkwt'					=> $NomorPKWT,
                                            'employment_status'			=> $StatusKaryawan,
                                            'education_join'			=> $PendidikanBergabung, 
                                            'education_update'			=> $PendidikanBergabung,
                                            'kel_jabatan'				=> $KelompokJabatan,
                                            'alamat_ktp'				=> $AlamatKTP,
                                            'kontak_darurat'			=> $KontakDarurat,
                                            'join_date'					=> $TanggalBergabung,
                                            'photo'						=> $photo,
                                        );
                                        // pendidikan 
                                        $pendidikan[]= array(
                                            'id_user'					=> $EmployeNumber,
                                            'nama'						=> $Name,
                                            'npk'						=> $EmployeNumber,
                                            'pendidikan'				=> $PendidikanBergabung,
                                            'jurusan'					=> $Jurusan,
                                            'institusi'					=> $NamaSekolah,
                                            'thn_lulus'					=> $TahunLulus,
                                        );
                        }
                 }
                if ($cekNPK > 0) {
                    echo "gagal";
                } else {
                    $input = $this->m_admin->inputArray("tbl_karyawan", $data);
                    $input = $this->m_admin->inputArray("pendidikan", $pendidikan);
                    if ($input) {
                        $this->session->set_flashdata("success", "Karyawan tersimpan di data master");
                        redirect("superadmin/TambahKaryawan");
                    } else {
                        echo "Gagal";
                    }
                }
	}
}
