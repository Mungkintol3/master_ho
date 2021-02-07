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

		$data1['url'] = $this->uri->segment(2);
 		$this->load->view('template/header',$data1);
 		$this->load->view('superadmin/form_add_pegawai',$data);
 		$this->load->view('template/footer');
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
				$cekNPK = $this->m_admin->cari(array("npk" => $row['B']),"tbl_karyawan")->num_rows();
	            	if($cekNPK > 0){
	            		$this->session->set_flashdata("error","NPK " . $row['B'] . " Sudah Terdaftar di Master Karyawan");
	            		redirect("superadmin/TambahKaryawan");
					}else {
							// push data karyawan ke tabel karyawan
			                array_push($data, array(
			                	'id_user'					=> md5($row['B']) ,
			                	'npk'						=> $row['B'] ,
			                	'nama'						=> $row['C'] ,
			                	'divisi'					=> $row['D'] ,
			                	'departement'				=> $row['E'] ,
			                	'position'					=> $row['F'] ,
			                	'wilayah'					=> $row['G'] ,
			                	'gender'					=> $row['H'] ,
			                	'martial_status'			=> $row['I'] ,
			                	'address'					=> $row['J'] ,
			                	'tgl_lahir'					=> $row['K'] ,
			                	'age'						=> $row['L'] ,
			                	'no_telp'					=> $row['M'] ,
			                	'email'						=> $row['N'] ,
			                	'gol_darah'					=> $row['O'] ,
			                	'no_ktp'					=> $row['P'] ,
			                	'no_kk'						=> $row['Q'] ,
			                	'bpjs_kesehatan'			=> $row['R'] ,
			                	'bpjs_tenagakerja'			=> $row['S'] ,
			                	'no_dplk'					=> $row['T'] ,
			                	'no_npwp'					=> $row['U'] ,
			                	'nama_bank'					=> $row['V'] ,
			                	'no_rekening'				=> $row['W'] ,
			                	'status_pajak'				=> $row['X'] ,
			                	'status_kawin'				=> $row['Y'] ,
			                	'no_pkwt'					=> $row['Z'] ,
			                  	'employment_status'			=> $row['AA'] ,
			                	'company'					=> $row['AB'] ,
			                	'join_date'					=> $row['AC'] ,
			                	'education_join'			=> $row['AD'] ,
			                	'kel_jabatan'				=> $row['AE'] ,
			                	'gol_kerja'					=> $row['AF'] ,
			                ));
					}
	            }
            		$numrow++; // Tambah 1
        }


        	if($cekNPK > 0){
        		echo "";
        	}else {
        		$input = $this->m_admin->inputArray("tbl_karyawan",$data);
        			if($input){
        				$this->session->set_flashdata("success","Data telah Di daftar");
	            		redirect("superadmin/TambahKaryawan");
        			}else {
        				echo "Gagal";
        			}
        	}
 	}
}
