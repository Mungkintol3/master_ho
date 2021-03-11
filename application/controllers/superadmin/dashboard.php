<?php 

/**
 * 
 */
class Dashboard extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('encryption');
	}

	public function index()
	{

		$data =  array(
			'url' 				=> $this->uri->segment(2) ,
			'range18_27'		=> $this->m_admin->rangeUmur(18 , 27) ,
			'range28_35'		=> $this->m_admin->rangeUmur(28 , 35) ,
			'range36_45'		=> $this->m_admin->rangeUmur(36 , 45) ,
			'range46_55'		=> $this->m_admin->rangeUmur(46 , 55) ,
			'totalSma'			=> $this->m_admin->countPendidikan("SMA"),
			'totalS1'			=> $this->m_admin->countPendidikan("S1"),
			'totalS2'			=> $this->m_admin->countPendidikan("S2"),
			'totalD3'			=> $this->m_admin->countPendidikan("D3"),
			'totalD4'			=> $this->m_admin->countPendidikan("D4"),
		);

 		$this->load->view('template/header',$data);
		$this->load->view('superadmin/dashboard');
		$this->load->view('template/footer'); 
		
	}

}