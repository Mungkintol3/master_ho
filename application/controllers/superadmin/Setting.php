<?php


/**
 * 
 */
class Setting extends CI_Controller
{
	public function index()
	{
		$data = array(
 		  		'url' => $this->uri->segment(2) ,
 		  );

 		$this->load->view('template/header',$data);
		$this->load->view('superadmin/setting',$data);
		$this->load->view('template/footer');
	}

	public function update()
	{
		$password = $this->input->post("password");
		$password2 = $this->input->post("password2");

		$pass     = md5($this->input->post("password")) ;
		$pass2     = md5($this->input->post("password2")) ;

		$user 	  = $this->input->post("nama");
		$id 	  = $this->input->post("id");

			if($password == null || $password == ""){
				$data = array(
					'nama'		=> $user 
				);

				$update = $this->m_admin->update($data,'akun',array('id' => $id));
				if($update){
					$this->session->set_flashdata('sukses','akun sudah terdaftar');
				}else {
					echo "gagal";
				}
			}else if($password != null || $password != ""){
				if($pass != $pass2){
					echo "password tidak sama";
				}else {
					$data = array(
					'password'		=> $pass
				);

				$update = $this->m_admin->update($data,'akun',array('id' => $id));
					if($update){
					$this->session->set_flashdata('sukses','Password Berhasil di Rubah');
					redirect('superadmin/Setting');
					}else {
						echo "gagal";
					}
				}
			}
	}

	
}