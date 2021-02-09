<?php
date_default_timezone_set('Asia/Jakarta');
/**
 * 
 */
class Training_histori extends CI_Controller
{
	

	public function form_add()
	{
		$data = array(
 		  		'url'		 => $this->uri->segment(2) ,
 		  		'karyawan'	 => $this->m_admin->getData("tbl_karyawan")->result()
 		  );
 		$this->load->view('template/header',$data);
		$this->load->view("superadmin/form_training_histori",$data);
		$this->load->view('template/footer');
	}


	public function add()
 	{
 		$npk  			 = $this->input->post("npk");
 		$nama  			 = $this->input->post("nama");
 		$id_user 		 = $this->input->post("id_user");
 		$tgl  			 = $this->input->post("tgl");
 		$keterangan		 = $this->input->post("keterangan");
 		$jenis_training	 = $this->input->post("jenis_training");

	 		$data = array(
	 			"id_user"						=> $id_user,
	 			"nama"							=> $nama ,
	 			"jenis_training"				=> $jenis_training , 
	 			"npk"							=> $npk ,
	 			"tgl"							=> $tgl ,
	 			"tahun"							=> substr($tgl, 0,4),
	 			"keterangan"					=> $keterangan
	 		);
	 		
	 		$input = $this->m_admin->inputData($data,"histori_training");
	 			if($input == true){
	 				echo "sukses";
	 			} else {
	 				echo "gagal";
	 			}			
 	}

}