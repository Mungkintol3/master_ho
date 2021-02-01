<?php

 /**
  * 
  */
 class Jabatan extends CI_Controller
 {
 	

 	public function index()
 	{

 		$data = array(
 		  		'url' => $this->uri->segment(2) ,
 		  		'jabatan'	=> $this->m_admin->getData("tbl_jabatan")->result()
 		  );
 		$this->load->view('template/header',$data);
		$this->load->view('superadmin/jabatan',$data);
		$this->load->view('template/footer');
 	}

 	public function form_add()
 	{
 		$data['url']=  $this->uri->segment(2);
		$this->load->view('template/header',$data);
		$this->load->view('superadmin/form_add_jabatan');
		$this->load->view('template/footer');
 	}

 	public function update()
 	{
 		$kode 			 = $this->input->post("kode_jabatan");
 		$nama  			 = $this->input->post("nama_jabatan");
 		$keterangan		 = $this->input->post("keterangan");
 		//$id 			 = $this->input->post("id");
 		$data = array(
 			"kode_jabatan"			=> "B1" ,
 			"nama_jabatan"			=> "OFFICER" ,
 			"keterangan"			=> ""
	 	);
	 	$update = $this->m_admin->update($data,"tbl_jabatan",array("id"	=> 1));
	 		if($update == true){
	 			echo "berhasil";
	 		}

 	}


 	public function add()
 	{
 		$kode 			 = $this->input->post("kode_jabatan");
 		$nama  			 = $this->input->post("nama_jabatan");
 		$keterangan		 = $this->input->post("keterangan");
 		$cek			 = $this->m_admin->cari(array("kode_jabatan" => $kode),"tbl_jabatan")->num_rows();
 		if($cek > 0 ){
 			echo "kode sudah digunakan";
 		}else {
	 		$data = array(
	 			"kode_jabatan"			=> $kode ,
	 			"nama_jabatan"			=> $nama ,
	 			"keterangan"			=> $keterangan
	 		);
	 		$input = $this->m_admin->inputData($data,"tbl_jabatan");
	 			if($input == true){
	 				echo "sukses";
	 			} else {
	 				echo "gagal";
	 			}			
 		}
 	}


 	public function delete($id)
 	{
 		//$id = $this->input->get("id");
 		$this->m_admin->delete("tbl_jabatan",array("id" => $id));
 		redirect('superadmin/Jabatan');
 	}
 }