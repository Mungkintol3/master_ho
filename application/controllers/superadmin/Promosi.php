<?php

/**
 * 
 */
class Promosi extends CI_Controller
{
	
	public function add_promosi_jabatan()
	{
		$data = array(
 		  		'url'		 => $this->uri->segment(2) ,
 		  		'karyawan'	 => $this->m_admin->getData("tbl_karyawan")->result() ,
 		  		'jabatan'	 => $this->m_admin->getData("tbl_jabatan")->result() ,
 		  );
 		$this->load->view('template/header',$data);
		$this->load->view("superadmin/add_promosi_jabatan",$data);
		$this->load->view('template/footer');
	}

	//input promosi jabatan 
	public  function input_jabatan()
 	{
 		$id  		= $this->input->post("id");
		$id_user	= $this->input->post("id_user");
		$tgl 		= $this->input->post("tgl");
		$npk  		= $this->input->post("npk");
		$nama  		= $this->input->post("nama");
		$jabatan 	= $this->input->post("jabatan");
		//tambah traking histori no pkwt
		$data  = array(
			'id_user'			=> $id_user ,
			'nama'				=> $nama ,
			'npk'				=> $npk ,
			'tahun'				=> substr($tgl,0 ,4 ) ,
			'tanggal'			=> $tgl ,
			'latest_promosi'	=> $jabatan
		);


		//update data pkwt
		$dataupdate = array(
			'promosi_jabatan'  => $jabatan ,
			'latest_promosi'	=> $tgl
		);

		$update = $this->m_admin->update($dataupdate,"tbl_karyawan",array("id" => $id));
			if($update){
				 $this->m_admin->inputData($data,"promosi_jabatan");
				echo "jabatan " . $nama . "-" . $npk . " update";
			}else {
				echo "gagal update";
			}		
 	}

 	//tambah data mutasi jabatan ke histori
 	public function add_mutasi_jabatan()
	{
		$data = array(
 		  		'url'		 => $this->uri->segment(2) ,
 		  		'jabatan'	 => $this->m_admin->getData("tbl_jabatan")->result() ,
 		  		'karyawan'	 => $this->m_admin->getData("tbl_karyawan")->result()
 		  );
 		$this->load->view('template/header',$data);
		$this->load->view("superadmin/add_mutasi_jabatan",$data);
		$this->load->view('template/footer');
	}

	//input promosi mutasi 
	public  function input_mutasi()
 	{
 		$id  		= $this->input->post("id");
		$id_user	= $this->input->post("id_user");
		$tgl 		= $this->input->post("tgl");
		$npk  		= $this->input->post("npk");
		$nama  		= $this->input->post("nama");
		$mutasi 	= $this->input->post("mutasi");
		//tambah traking histori no pkwt
		$data  = array(
			'id_user'			=> $id_user ,
			'nama'				=> $nama ,
			'npk'				=> $npk ,
			'tahun'				=> substr($tgl , 0, 1) ,
			'mutasi'			=> $mutasi
		);


		//update data pkwt
		$dataupdate = array(
			'mutasi_jabatan'  => $mutasi
		);

		$update = $this->m_admin->update($dataupdate,"tbl_karyawan",array("id" => $id));
			if($update){
				 $this->m_admin->inputData($data,"mutasi_jabatan");
				echo "jabatan " . $nama . "-" . $npk . " di mutasi";
			}else {
				echo "gagal update";
			}		
 	}

 	public function add_demosi_jabatan()
	{
		$data = array(
 		  		'url'		 => $this->uri->segment(2) ,
 		  		'jabatan'	 => $this->m_admin->getData("tbl_jabatan")->result() ,
 		  		'karyawan'	 => $this->m_admin->getData("tbl_karyawan")->result()
 		  );
 		$this->load->view('template/header',$data);
		$this->load->view("superadmin/add_demosi_jabatan",$data);
		$this->load->view('template/footer');
	}

	//input promosi mutasi 
	public  function input_demosi()
 	{
 		$id  		= $this->input->post("id");
		$id_user	= $this->input->post("id_user");
		$tgl 		= $this->input->post("tgl");
		$npk  		= $this->input->post("npk");
		$nama  		= $this->input->post("nama");
		$demosi 	= $this->input->post("demosi");
		//tambah traking histori no pkwt
		$data  = array(
			'id_user'			=> $id_user ,
			'nama'				=> $nama ,
			'npk'				=> $npk ,
			'tahun'				=> substr($tgl ,0,4) ,
			'tanggal'			=> $tgl ,
			'demosi_jabatan'	=> $demosi
		);


		//update data pkwt
		$dataupdate = array(
			'demosi_jabatan'  => $demosi
		);

		$update = $this->m_admin->update($dataupdate,"tbl_karyawan",array("id" => $id));
			if($update){
				 $this->m_admin->inputData($data,"demosi_jabatan");
				echo "demosi jabatan " . $nama . "-" . $npk . "";
			}else {
				echo "gagal update";
			}		
 	}
}