<?php

/**
 * 
 */
class Poin_pegawai extends CI_Controller
{
	public function add_histori_poin()
	{
		$data   = array(
 			'pegawai'		=>  $this->m_admin->getData("tbl_pegawai")->result()
 		);
		$this->load->view("add_histori_poin_pegawai",$data);
	}

	public  function input_histori()
 	{
 		$npk				 = $this->input->post("npk");
 		$nilai 	 			 = $this->input->post("poin");
 		$tgl				 = $this->input->post("tgl");
	 		$data = array(
	 			"npk"					=> $npk ,
	 			"id_user"				=> md5($npk) ,
	 			"poin"					=> $nilai ,
	 			"tahun"					=> date("Y") ,
	 			"tgl"					=> $tgl
	 		);

	 		$input = $this->m_admin->inputData($data,"histori_poin_karyawan");
	 			if($input == true){
			 		echo "sukses";
	 			} else {
	 				echo "gagal";
	 			}			
 	}
}