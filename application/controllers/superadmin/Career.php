<?php


/**
 * 
 */
class Career extends CI_Controller
{
	

	public function index()
	{
		$data = array(
 		  		'url'		 => $this->uri->segment(2) ,
 		  		'karyawan'	 => $this->m_admin->getData("tbl_karyawan")->result()
 		  );
 		$this->load->view('template/header',$data);
		$this->load->view('superadmin/form_histori_karir',$data);
		$this->load->view('template/footer');
	}

	public function update()
	{
		$id 			= $this->input->post("id");
		$id_user		= $this->input->post("id_user");
		$npk 			= $this->input->post("npk");
		$karir_old		= $this->input->post("karir_old");
		$karir_new 		= $this->input->post("new_karir");
		$tgl 			= $this->input->post("tanggal");
		$nama 			= $this->input->post("nama");
		//tambah ke histori karir
		$data = array(
			'id_user'		=> $id_user ,
			"karir_new"		=> $karir_new ,
			"karir_old"		=> $karir_old ,
			'tahun'			=> substr($tgl,0,4) ,
			'tanggal'		=> $tgl 
		);

		//data karir terbaru
		$dataupdate = array(
			'karir'			=> $karir_new 
		);

		$update = $this->m_admin->update($dataupdate,"tbl_karyawan",array("id" => $id));
			if($update){
				 $this->m_admin->inputData($data,"histori_karir");
				echo "karir " . $nama . "-" . $npk . " update";
			}else {
				echo "gagal update";
			}
	}
}