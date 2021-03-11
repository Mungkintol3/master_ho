<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */


class Login extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('login');
	}
	

	public function Ceklogin()
	{
		date_default_timezone_set('Asia/Jakarta');
		$username 	= $this->input->post('npk');
		$password   = md5($this->input->post('password'));
			
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
}
