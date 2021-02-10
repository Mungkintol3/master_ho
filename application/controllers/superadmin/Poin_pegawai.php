<?php

/**
 * 
 */
class Poin_pegawai extends CI_Controller
{


	//input point karyawan
	public function add_histori_poin()
	{
		$data = array(
 		  		'url'		 => $this->uri->segment(2) ,
 		  		'karyawan'	 => $this->m_admin->getData("tbl_karyawan")->result()
 		  );
 		$this->load->view('template/header',$data);
		$this->load->view("superadmin/add_histori_poin_pegawai",$data);
		$this->load->view('template/footer');
	}

	public  function input_histori()
 	{
 		$npk				 = $this->input->post("npk");
 		$nilai 	 			 = $this->input->post("poin");
 		$tgl				 = $this->input->post("tanggal");
 		$id 				 = $this->input->post("id");
 		$nama 				 = $this->input->post("nama");
 		$id_user 			 = $this->input->post("id_user");
	 		$data = array(
	 			"id_user"				=> $id_user ,
	 			"npk"					=> $npk ,
	 			"nama"					=> $nama ,
	 			"poin"					=> $nilai ,
	 			"tahun"					=> substr($tgl,0,4) ,
	 			"tgl"					=> $tgl ,
	 		);


	 		$input = $this->m_admin->inputData($data,"histori_poin_karyawan");
	 			if($input == true){
			 		echo "sukses";
	 			} else {
	 				echo "gagal";
	 			}			
 	}
}