<?php
date_default_timezone_set('Asia/Jakarta');
/**
 * 
 */
class Surat_peringatan extends CI_Controller
{
	

	public function form_add()
	{
		$data   = array(
 			'pegawai'		=>  $this->m_admin->getData("tbl_pegawai")->result()
 		);
		$this->load->view("form_add_sp",$data);
	}


	public function add()
 	{
 		$tipe 			 = $this->input->post("tipe_sp");
 		$npk  			 = $this->input->post("npk");
 		$tgl  			 = $this->input->post("tgl");
 		$keterangan		 = $this->input->post("keterangan");

	 		$data = array(
	 			"id_user"						=> md5($npk) ,
	 			"npk"							=> $npk ,
	 			"tgl"							=> $tgl ,
	 			"jenis_surat_peringatan"		=> $tipe ,
	 			"tahun"							=> date("Y"),
	 			"keterangan"					=> $keterangan
	 		);
	 		$input = $this->m_admin->inputData($data,"histori_pelanggaran_karyawan");
	 			if($input == true){
	 				echo "sukses";
	 			} else {
	 				echo "gagal";
	 			}			
 	}

}