<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */


class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$this->load->view('login');
	}
	

	public function Ceklogin()
	{
		date_default_timezone_set('Asia/Jakarta');
		$username 	= $this->input->post('npk');
		$password   = md5($this->input->post('password'));

		var_dump($password,$username);
			
		var_dump($username,$password);
		 	$cekakun = $this->m_admin->cari(array("npk" => $username , "password" => $password),"akun");
		 	if($cekakun->num_rows() > 0 ){
		 		$data = $cekakun->row();
				 
		 		switch ($data->role_id) {
		 			case '1':
		 				$this->session->set_userdata("npk",$data->npk);
		 		 		$this->session->set_userdata("nama",$data->nama);
		 		 		$this->session->set_userdata("id",$data->id);
		 				redirect('superadmin/Dashboard');
		 				break;
					
		 			default:
		 				# code...
		 				break;
		 		}
		 	}else {
		 		$this->session->set_flashdata("nouser","akun tidak di temukan");
		 		redirect("login");
		 	}
	}

	public function Create_akun()
	{
		$this->load->view('Create_akun');
	}

	public function Create()
	{

			 	$npk		 	= $this->input->post('npk');
			 	$nama 		 	= $this->input->post('nama');
			 	$email 			= $this->input->post('email');
			 	$photo 	 		= 'default.jpg';
			 	$pass  			= md5($this->input->post('password'));
			 	$role_id    	= 1;
			 	$is_active  	= 1;
			 	$date_create 	= date("d-m-Y H:i");
			 
			var_dump($npk,$nama,$email,$photo,$pass,$role_id,$is_active,$date_create);
			 // $this->db->insert('akun',$data);
			
	}

	public function Lupapass()
	{
		$this->load->view('Lupapass');
	}
}
