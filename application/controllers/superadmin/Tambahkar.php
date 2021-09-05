<?php
defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH.'vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
	use PhpOffice\PhpSpreadsheet\IOFactory;
	use PhpOffice\PhpSpreadsheet\Spreadsheet;

    class Tambahkar extends CI_Controller 
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
         $data1['url'] = $this->uri->segment(2);
		$this->load->view('template/header', $data1);
		$this->load->view('superadmin/form_add_pegawai');
		$this->load->view('template/footer');
        }

        public function import(){
           
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->getColumnDimension('B')->setAutoSize(true);
            $sheet->getColumnDimension('C')->setAutoSize(true);
            $sheet->getColumnDimension('D')->setAutoSize(true);
            $sheet->getColumnDimension('E')->setAutoSize(true);
            $sheet->getColumnDimension('F')->setAutoSize(true);
            $sheet->getColumnDimension('G')->setAutoSize(true);
            $sheet->getColumnDimension('H')->setAutoSize(true);
            $sheet->getColumnDimension('I')->setAutoSize(true);
            $sheet->getColumnDimension('J')->setAutoSize(true);
            $sheet->getColumnDimension('K')->setAutoSize(true);
            $sheet->getColumnDimension('L')->setAutoSize(true);
            $sheet->getColumnDimension('M')->setAutoSize(true);
            $sheet->getColumnDimension('N')->setAutoSize(true);
            $sheet->getColumnDimension('O')->setAutoSize(true);
            $sheet->getColumnDimension('P')->setAutoSize(true);
            $sheet->getColumnDimension('Q')->setAutoSize(true);
            $sheet->getColumnDimension('R')->setAutoSize(true);
            $sheet->getColumnDimension('S')->setAutoSize(true);
            $sheet->getColumnDimension('T')->setAutoSize(true);
            $sheet->getColumnDimension('U')->setAutoSize(true);
            $sheet->getColumnDimension('V')->setAutoSize(true);
            $sheet->getColumnDimension('W')->setAutoSize(true);
            $sheet->getColumnDimension('X')->setAutoSize(true);
            $sheet->getColumnDimension('Y')->setAutoSize(true);
            $sheet->getColumnDimension('Z')->setAutoSize(true);
            $sheet->getColumnDimension('AA')->setAutoSize(true);
            $sheet->getColumnDimension('AB')->setAutoSize(true);
            $sheet->getColumnDimension('AC')->setAutoSize(true);
            $sheet->getColumnDimension('AD')->setAutoSize(true);
            $sheet->getColumnDimension('AE')->setAutoSize(true);
            $sheet->getColumnDimension('AF')->setAutoSize(true);
            $sheet->getColumnDimension('AG')->setAutoSize(true);


            $sheet->setCellValue('A1', 'NO');
            $sheet->setCellValue('B1', 'Employe Number');
            $sheet->setCellValue('C1', 'Name');
            $sheet->setCellValue('D1', 'Wilayah');
            $sheet->setCellValue('E1', 'Jenis Kelamin');
            $sheet->setCellValue('F1', 'Status Perkawinan');
            $sheet->setCellValue('G1', 'Alamat Tempat Tinggal');
            $sheet->setCellValue('H1', 'Tempat Lahir');
            $sheet->setCellValue('I1', 'Tanggal Lahir');
            $sheet->setCellValue('J1', 'Umur');
            $sheet->setCellValue('K1', 'No Telphone');
            $sheet->setCellValue('L1', 'Alamat Email');
            $sheet->setCellValue('M1', 'Golongan Darah');
            $sheet->setCellValue('N1', 'Nomor KTP');
            $sheet->setCellValue('O1', 'Nomor KK');
            $sheet->setCellValue('P1', 'No BPJS Kes');
            $sheet->setCellValue('Q1', 'No BPJS TK');
            $sheet->setCellValue('R1', 'NO DPLK / Asuransi');
            $sheet->setCellValue('S1', 'No NPWP');
            $sheet->setCellValue('T1', 'Nama Bank');
            $sheet->setCellValue('U1', 'No Rekening');
            $sheet->setCellValue('V1', 'Status Pajak');
            $sheet->setCellValue('W1', 'Status Perkawinan');
            $sheet->setCellValue('X1', 'Nomor PKWT');
            $sheet->setCellValue('Y1', 'Status Karyawan');
            $sheet->setCellValue('Z1', 'Pendidikan Saat Bergabung');
            $sheet->setCellValue('AA1', 'Kelompok Jabatan');
            $sheet->setCellValue('AB1', 'Alamat KTP');
            $sheet->setCellValue('AC1', 'Kontak Darurat');
            $sheet->setCellValue('AD1', 'Tanggal Bergabung');
            $sheet->setCellValue('AE1', 'Jurusan Pendidikan');
            $sheet->setCellValue('AF1', 'Tahun Lulus');
            $sheet->setCellValue('AG1', 'Nama Sekolah / Universitas'); 
            
            $sheet->getStyle('A1:AG1')->getFont()->setBold(true);
            $sheet->getStyle('A1:AG1')->getAlignment()->setWrapText(true);
		    $sheet->getStyle('A1:AG1')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
		    $sheet->getStyle('A1:AG1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
		    $sheet->getStyle('A1:AG1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF00');

            ob_end_clean();
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename="Upload Karyawan.xlsx"');
            header('Cache-Control: max-age=0');
            $writer = IOFactory::createWriter($spreadsheet,'Xlsx');
            $writer->save("php://output");
            die;
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
	
