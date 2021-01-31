<?php

 /**
  * 
  */
 class Golongan extends CI_Controller
 {
 	
 	public function form_add()
 	{
 		$this->load->view("form_add_golongan");
 	}


 	public function add_histori_golongan_pegawai()
 	{
 		$data   = array(
 			'data' 			=>  $this->m_admin->getData("tbl_golongan")->result() ,
 			'pegawai'		=>  $this->m_admin->getData("tbl_pegawai")->result()
 		);
 		$this->load->view("add_histori_golongan_pegawai",$data);
 	}

 	public  function input_histori()
 	{
 		$npk				 = $this->input->post("npk");
 		$gol_lama 			 = $this->input->post("gol_sebelumnya");
 		$gol_baru 			 = $this->input->post("gol_update");
 		$tgl				 = $this->input->post("tgl");
	 		$data = array(
	 			"npk"					=> $npk ,
	 			"id_user"				=> md5($npk) ,
	 			"gol_update"			=> $gol_baru ,
	 			"gol_sebelumnya"		=> $gol_lama ,
	 			"tahun"					=> date("Y") ,
	 			"tgl"					=> $tgl
	 		);

	 		$input = $this->m_admin->inputData($data,"histori_golongan");
	 			if($input == true){
			 		$data2 = array(
			 			"gol_kerja"			=> $gol_baru
			 		);
			 		$this->m_admin->update($data2,"tbl_pegawai",array("npk"	=> $npk));
			 		echo "sukses";
	 			} else {
	 				echo "gagal";
	 			}			
 	}

 	public function update()
 	{

 		$kode 			 = $this->input->post("kode_golongan");
 		$nama  			 = $this->input->post("golongan_kerja");
 		$keterangan		 = $this->input->post("keterangan");
 		$id 			 = $this->input->post("id");
 		$data = array(
 			"kode_golongan"			=> "C1" ,
	 		"golongan_kerja"		=> "K2" ,
	 		"keterangan"			=> ""
	 	);
	 	$update = $this->m_admin->update($data,"tbl_golongan",array("id"	=> $id));
	 		if($update == true){
	 			echo "berhasil";
	 		}
 	}


 	public function add()
 	{
 		$kode 			 = $this->input->post("kode_golongan");
 		$nama  			 = $this->input->post("golongan_kerja");
 		$keterangan		 = $this->input->post("keterangan");
 		$cek			 = $this->m_admin->cari(array("kode_golongan" => $kode),"tbl_golongan")->num_rows();
 		if($cek > 0 ){
 			echo "kode sudah digunakan";
 		}else {
	 		$data = array(
	 			"kode_golongan"			=> $kode ,
	 			"golongan_kerja"		=> $nama ,
	 			"keterangan"			=> $keterangan
	 		);
	 		$input = $this->m_admin->inputData($data,"tbl_golongan");
	 			if($input == true){
	 				echo "sukses";
	 			} else {
	 				echo "gagal";
	 			}			
 		}
 	}

 	public function delete()
 	{
 		$id = $this->input->get("id");
 		$this->m_admin->delete("tbl_golongan",array("id" => 3));
 	}
 }