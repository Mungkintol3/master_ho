<?php

/**
 * 
 */
class Pendidikan extends CI_Controller
{


	//input histori pendidikan karyawan
	public function formupdate()
	{
		$data = array(
 		  		'url'		 => $this->uri->segment(2) ,
 		  		'karyawan'	 => $this->m_admin->getData("tbl_karyawan")->result()
 		  );
 		$this->load->view('template/header',$data);
		$this->load->view("superadmin/update_pendidikan",$data);
		$this->load->view('template/footer');
	}

	public  function input_histori()
 	{
 		$id  				= $this->input->post("id");
		$id_user			= $this->input->post("id_user");
		$tgl 				= $this->input->post("tahun_lulus");
		$npk  				= $this->input->post("npk");
		$nama  				= $this->input->post("nama");
		$old_education 		= $this->input->post("old_education");
		$new_education 		= $this->input->post("new_education");
		$institusi 			= $this->input->post("institusi");
		$jurusan 			= $this->input->post("jurusan");

		//tambah traking histori no pkwt
		$data  = array(
			'id_user'			=> $id_user ,
			'nama'				=> $nama ,
			'npk'				=> $npk ,
			'thn_lulus'			=> $tgl ,
			'pendidikan'		=> $new_education ,
			'institusi'			=> $institusi ,
			'jurusan'			=> $jurusan ,
		);


		//update data pkwt
		$dataupdate = array(
			'education_update'	=> $new_education
		);

		$update = $this->m_admin->update($dataupdate,"tbl_karyawan",array("id" => $id));
			if($update){
				 $this->m_admin->inputData($data,"pendidikan");
				echo "pendidikan " . $nama . "-" . $npk . " update";
			}else {
				echo "gagal update";
			}			
 	}
}