<?php

 /**
  * 
  */
 class Departement extends CI_Controller
 {
 	

 	public function index()
 	{

 		$data = array(
 		  		'url' => $this->uri->segment(2) ,
 		  		'departement'	=> $this->m_admin->getData("departement")->result()
 		  );
 		$this->load->view('template/header',$data);
		$this->load->view('superadmin/departement',$data);
		$this->load->view('template/footer');
 	}

 	public function modal()
 	{
 		$id = $this->input->get("id");
 		$data['results']  = $this->m_admin->cari(array('id' => $id),"departement")->row();
 		$this->load->view("superadmin/modal_data_departement",$data);
 	}

 	public function update()
 	{
 		$departement 	 = $this->input->post("departement");
 		$id 			 = $this->input->post("id");
 		$data = array(
 			"departement"			=> $departement ,
	 	);
	 	$update = $this->m_admin->update($data,"departement",array("id"	=> $id));
	 		if($update == true){
	 			echo "berhasil";
	 		}else {
	 			echo "gagal";
	 		}

 	}


 	public function add()
 	{
 		$departement 	= $this->input->post("departement");
 		$cek			= $this->m_admin->cari(array("departement" => $departement),"departement")->num_rows();
 		if($cek > 0 ){
 			echo "departement sudah ada";
 		}else {
	 		$data = array(
	 			"departement"			=> $departement ,
	 		);
	 		//var_dump($data);
	 		$input = $this->m_admin->inputData($data,"departement");
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
 		$this->m_admin->delete("departement",array("id" => $id));
 		redirect('superadmin/Departement');
 	}
 }