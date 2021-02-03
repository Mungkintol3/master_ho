<?php


/**
 * 
 */
class Company extends CI_Controller
{
	
	public function index()
	{
		$data = array(
 		  		'url'		 => $this->uri->segment(2) ,
 		  		'karyawan'	 => $this->m_admin->getData("tbl_karyawan")->result()
 		  );
 		$this->load->view('template/header',$data);
		$this->load->view('superadmin/form_histori_company',$data);
		$this->load->view('template/footer');
	}

	public function update()
	{
		$id 			= $this->input->post("id");
		$id_user		= $this->input->post("id_user");
		$npk 			= $this->input->post("npk");
		$company_old	= $this->input->post("company_old");
		$company_new 	= $this->input->post("company_new");
		$tgl 			= $this->input->post("tgl");
		$nama 			= $this->input->post("nama");
		//tambah ke histori company
		$data = array(
			'id_user'		=> $id_user ,
			"company"		=> $company_new ,
			"join_date"		=> $tgl ,
		);

		//data karir terbaru
		$dataupdate = array(
			'company'			=> $company_new ,
			"join_date"		=> $tgl ,
		);

		$update = $this->m_admin->update($dataupdate,"tbl_karyawan",array("id" => $id));
			if($update){
				 $this->m_admin->inputData($data,"histori_company");
				echo "company " . $nama . "-" . $npk . " update";
			}else {
				echo "gagal update";
			}
	}
}