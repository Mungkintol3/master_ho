<?php


/**
 * 
 */
class Nilai_karyawan extends CI_Controller
{
	

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