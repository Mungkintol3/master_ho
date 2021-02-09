<?php

 /**
  * 
  */
 class Position extends CI_Controller
 {
 	

 	public function index()
 	{

 		$data = array(
 		  		'url' => $this->uri->segment(2) ,
 		  		'position'	=> $this->m_admin->getData("position")->result()
 		  );
 		$this->load->view('template/header',$data);
		$this->load->view('superadmin/position',$data);
		$this->load->view('template/footer');
 	}

 	public function modal()
 	{
 		$id = $this->input->get("id");
 		$data['results']  = $this->m_admin->cari(array('id' => $id),"position")->row();
 		$this->load->view("superadmin/modal_data_position",$data);
 	}

 	public function update()
 	{
 		$position 	 	 = $this->input->post("position");
 		$id 			 = $this->input->post("id");
 		$data = array(
 			"posisi"			=> $position ,
	 	);
	 	$update = $this->m_admin->update($data,"position",array("id"	=> $id));
	 		if($update == true){
	 			echo "berhasil";
	 		}else {
	 			echo "gagal";
	 		}

 	}


 	public function add()
 	{
 		$position 	    = $this->input->post("position");
 		$cek			= $this->m_admin->cari(array("posisi" => $position),"position")->num_rows();
 		if($cek > 0 ){
 			echo "position sudah ada";
 		}else {
	 		$data = array(
	 			"posisi"			=> $position ,
	 		);
	 		//var_dump($data);
	 		$input = $this->m_admin->inputData($data,"position");
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
 		$this->m_admin->delete("position",array("id" => $id));
 		redirect('superadmin/Position');
 	}
 }