<?php

 /**
  * 
  */
 class Data_divisi extends CI_Controller
 {
 	

 	public function index()
 	{

 		$data = array(
 		  		'url' => $this->uri->segment(2) ,
 		  		'divisi'	=> $this->m_admin->getData("divisi")->result()
 		  );
 		$this->load->view('template/header',$data);
		$this->load->view('superadmin/divisi',$data);
		$this->load->view('template/footer');
 	}

 	public function modal()
 	{
 		$id = $this->input->get("id");
 		$data['results']  = $this->m_admin->cari(array('id' => $id),"divisi")->row();
 		$this->load->view("superadmin/modal_data_divisi",$data);
 	}

 	public function update()
 	{
 		$divisi 	 	 = $this->input->post("divisi");
 		$id 			 = $this->input->post("id");
 		$data = array(
 			"divisi"			=> $divisi ,
	 	);
	 	$update = $this->m_admin->update($data,"divisi",array("id"	=> $id));
	 		if($update == true){
	 			echo "berhasil";
	 		}else {
	 			echo "gagal";
	 		}

 	}


 	public function add()
 	{
 		$divisi 	    = $this->input->post("divisi");
 		$cek			= $this->m_admin->cari(array("divisi" => $divisi),"divisi")->num_rows();
 		if($cek > 0 ){
 			echo "divisi sudah ada";
 		}else {
	 		$data = array(
	 			"divisi"		=> $divisi ,
	 		);
	 		//var_dump($data);
	 		$input = $this->m_admin->inputData($data,"divisi");
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
 		$this->m_admin->delete("divisi",array("id" => $id));
 		redirect('superadmin/Data_divisi');
 	}
 }