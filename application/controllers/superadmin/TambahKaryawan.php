<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahKaryawan extends CI_Controller {
	private $filename = "upload_pegawai";

	public function index()
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
 		$this->load->view('form_add_pegawai',$data);
 	}


 	public function upload()
 	{

 		// Load plugin PHPExcel nya
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';

        $excelreader = new PHPExcel_Reader_Excel2007();
        $loadexcel = $excelreader->load('assets/upload/'.$this->filename.'.xlsx'); // Load file yang telah diupload ke folder excel
        $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

 		$numrow = 1  ;
 		 $data = array();
 		 $cekNPK= array();
 		foreach($sheet as $row){
	            if($numrow > 1){
	 			//cek nisn sudah terdaftar apa belum di master siswa
				$cekNPK = $this->m_admin->cari(array("npk" => $row['C']),"tbl_pegawai")->num_rows();
	            	if($cekNPK > 0){
	            		$this->session->set_flashdata("error","NPK " . $row['C'] . " Sudah Terdaftar di Master Karyawan");
	            		redirect("TambahKaryawan");
					}else {
							// push data karyawan ke tabel karyawan
			                array_push($data, array(
			                	'id_user'				=> md5($row['C']) ,
			                	'nama'					=> $row['B'] ,
			                	'npk'					=> $row['C'] ,
			                	'nik'					=> $row['D'] ,
			                	'no_kk'					=> $row['E'] ,
			                	'tempat_lahir'			=> $row['F'] ,
			                	'tgl_lahir'				=> $row['G'] ,
			                	'bpjs_kesehatan'		=> $row['H'] ,
			                	'bpjs_ketenagakerjaan'	=> $row['I'] ,
			                	'divisi'				=> $row['J'] ,
			                	'departement'			=> $row['K'] ,
			                	'posisi'				=> $row['L'] ,
			                	'wilayah'				=> $row['M'] ,
			                	'status_karyawan'		=> $row['N'] ,
			                	'company'				=> $row['O'] ,
			                	'join_date'				=> $row['P'] ,
			                	'usia'					=> $row['Q'] ,
			                	'sertifikasi_terbaru'	=> $row['R'] ,
			                	'tgl_sertifikasi'		=> $row['S'] ,
			                	'kel_jabatan'			=> $row['T'] ,
			                	'gol_kerja'				=> $row['U'] ,
			                	'status_kerja'			=> $row['V'] ,
			                	'latest_promosi'		=> $row['W'] ,
			                ));
					}
	            }
            		$numrow++; // Tambah 1
        }
        	if($cekNPK > 0){
        		echo "";
        	}else {
        		$input = $this->m_admin->inputArray("tbl_pegawai",$data);
        			if($input){
        				$this->session->set_flashdata("success","Data telah Di daftar");
	            		redirect("TambahKaryawan");
        			}else {
        				echo "Gagal";
        			}
        	}
 	}
}
