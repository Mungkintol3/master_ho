<?php

/**
 * 
 */
class Upload_berkas extends CI_Controller
{
	public function index()
	{
		$data = array(
 		  		'url'		 => $this->uri->segment(2) ,
 		  		'karyawan'	 => $this->m_admin->getData("tbl_karyawan")->result()
 		  );
		$this->load->view('template/header',$data);
		$this->load->view('superadmin/form_upload_berkas',$data);
		$this->load->view('template/footer');
	}

	public function upload()
	{
		//tempat menyimpan folder file upload
 		$directory = $this->input->post("direktory"); 
 		//nama table di database 
 		$nameColum = $this->input->post("nama_colom");
 		$extensi 			 = pathinfo($filename, PATHINFO_EXTENSION);

		$file 				 = $_FILES['file']['name'];
 		$filename 			 = $file;
 		$npk				 = $this->input->post("npk");
		$extensi 			 = pathinfo($filename, PATHINFO_EXTENSION);
 		$this->load->library('upload');
 		$config['allowed_types'] = 'pdf' ;
 		$config['upload_path']     = './assets/upload/berkas/'.$directory. "/" ;
 		$config['overwrite'] = true ;
 		$config['file_name'] 	   = $npk .  date('his') .  md5($filename) . '.' . $extensi ;
 			$this->upload->initialize($config);
 		if($this->upload->do_upload("file")){
 			$file = $this->upload->data('file_name');
 				$data = array(
 					$nameColum  => $file 
 				);
 				$where = array('id_user' => $this->input->post('npk'));
 				$p = $this->m_karyawan->updateFile($data,'tbl_karyawan',$where);
 					if($p){
 						echo "Sukses";
 					}
 		}
 	}
}