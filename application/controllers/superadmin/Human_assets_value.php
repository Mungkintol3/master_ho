<?php
date_default_timezone_set('Asia/Jakarta');
/**
 * 
 */
class Human_assets_value extends CI_Controller
{
	

	public function form_add()
	{
		$data = array(
 		  		'url'		 => $this->uri->segment(2) ,
 		  		'karyawan'	 => $this->m_admin->getData("tbl_karyawan")->result()
 		  );
 		$this->load->view('template/header',$data);
		$this->load->view("superadmin/form_human_assets",$data);
		$this->load->view('template/footer');
	}


	public function add()
 	{
 		$id_user 		 = $this->input->post("id_user");
 		$nama  			 = $this->input->post("nama");
 		$npk  			 = $this->input->post("npk");
 		$tgl  			 = $this->input->post("tgl");
 		$keterangan		 = $this->input->post("keterangan");
 		$assets_value	 = $this->input->post("assets_value");

	 		$data = array(
	 			"id_user"						=> $id_user,
	 			"nama"							=> $nama ,
	 			"npk"							=> $npk ,
	 			"asset_value"					=> $assets_value , 
	 			"tahun"							=> $tgl,
	 			"keterangan"					=> $keterangan
	 		);
					
	 		$input = $this->m_admin->inputData($data,"human_value_assets");
	 			if($input == true){
	 				echo "sukses";
	 			} else {
	 				echo "gagal";
	 			}			
 	}

}