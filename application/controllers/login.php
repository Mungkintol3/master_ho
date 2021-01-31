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
		$username 	= ($this->input->post('npk'));
		$password   = ($this->input->post('password'));
		if ($username == 220927) {
			redirect('superadmin/Dashboard');
		}
			
			
	}
}
