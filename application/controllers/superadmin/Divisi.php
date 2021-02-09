<?php

/**
 * 
 */
class Divisi extends CI_Controller
{
	
	public function add()
	{
		$data = array(
 		  		'url'		 	 => $this->uri->segment(2) ,
 		  		'karyawan'	 	 => $this->m_admin->getData("tbl_karyawan")->result() ,
 		  		'divisi'		 => $this->m_admin->getData("divisi")->result() ,
 		  		'position'	 	 => $this->m_admin->getData("position")->result() ,
 		  		'departement'	 => $this->m_admin->getData("departement")->result() ,
 		  );
 		$this->load->view('template/header',$data);
		$this->load->view("superadmin/add_divisi_departement",$data);
		$this->load->view('template/footer');
	}

	//input promosi jabatan 
	public  function input()
 	{
 		$id  				= $this->input->post("id");
		$id_user			= $this->input->post("id_user");
		$tgl 				= $this->input->post("tgl");
		$npk  				= $this->input->post("npk");
		$nama  				= $this->input->post("nama");
		$divisi 			= $this->input->post("divisi");
		$posisi 			= $this->input->post("position");
		$departement 		= $this->input->post("departement");
		$divisi_old			= $this->input->post("divisi_old");
		$posisi_old			= $this->input->post("posisi_old");
		$departement_old 	= $this->input->post("departement_old");
		//tambah traking histori no pkwt


		//update data		
		$dataupdate = array(
			"divisi"		=> $divisi ,
			"departement"	=> $departement ,
			"position"		=> $posisi			
		);
		$update = $this->m_admin->update($dataupdate,"tbl_karyawan",array("id" => $id));
			if($update){
					$data  = array(
						'id_user'			=> $id_user ,
						'nama'				=> $nama ,
						'npk'				=> $npk ,
						"divisi"			=> $divisi_old ,
						"departement"		=> $departement_old ,
						"position"			=> $posisi_old	,
						'tahun'				=> $tgl 
					);
				 $this->m_admin->inputData($data,"histori_divisi");
				echo "data " . $nama . "-" . $npk . " update";
			}else {
				echo "gagal update";
			}		
 	}


 	public function add_mutasi_jabatan()
	{
		$data = array(
 		  		'url'		 => $this->uri->segment(2) ,
 		  		'karyawan'	 => $this->m_admin->getData("tbl_karyawan")->result()
 		  );
 		$this->load->view('template/header',$data);
		$this->load->view("superadmin/add_mutasi_jabatan",$data);
		$this->load->view('template/footer');
	}

}