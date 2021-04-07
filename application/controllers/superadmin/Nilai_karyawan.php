<?php


/**
 * 
 */
class Nilai_karyawan extends CI_Controller
{
	private $filename = "upload_nilai_pegawai";
	
	//form input nilai karyawan
	public function add_histori_nilai()
	{
		$data = array(
 		  		'url'		 => $this->uri->segment(2) ,
 		  		'karyawan'	 => $this->m_admin->getData("tbl_karyawan")->result()
 		  );
 		$this->load->view('template/header',$data);
		$this->load->view("superadmin/add_histori_nilai_karyawan",$data);
		$this->load->view('template/footer');
	}

	//form input karyawan dengan upload
	public function upload_histori_nilai()
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
 		$this->load->view('superadmin/form_upload_nilai_karyawan',$data);
 		$this->load->view('template/footer');
	}

	public function Upload()
 	{

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
	 		$data = array(
	 			"id_user"				=> $id_user ,
	 			"npk"					=> $npk ,
	 			"nama"					=> $nama ,
	 			"nilai_pk"				=> $nilai ,
	 			"tahun"					=> substr($tgl, 0,4) ,
	 			"tgl"					=> $tgl ,
	 		);

			// var_dump($data);
	 		$input = $this->m_admin->inputData($data,"histori_nilai_karyawan");
	 			if($input == true){
			 		echo "sukses";
	 			} else {
	 				echo "gagal";
	 			}			
 	}
}