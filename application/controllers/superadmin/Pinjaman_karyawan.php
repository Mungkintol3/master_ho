<?php


/**
 * 
 */
class Pinjaman_karyawan extends CI_Controller
{
	

	public function index()
	{
		$data = array(
 		  		'url'		 	 => $this->uri->segment(2) ,
 		  		'pinjaman'		 => $this->m_admin->getData("tbl_peminjaman")->result()
 		  );
 		$this->load->view('template/header',$data);
		$this->load->view('superadmin/peminjaman_karyawan',$data);
		$this->load->view('template/footer');
	}


	//rincian pinjam
	public function rincian($id)
	{
		$data = array(
	  		'url'		 	 => $this->uri->segment(2) ,
	  		'pinjaman'		 => $this->m_admin->cari(array('id_pinjam'	=> $id),"tbl_pembayaran")->result() ,
	  		'sisa_tenor'	 => $this->m_admin->cari(array('id_pinjam'	=> $id),"tbl_pembayaran")->num_rows() ,
	  		'data_pinjam'	 => $this->m_admin->cari(array('id_pinjam'	=> $id),"tbl_peminjaman")->result() ,
	  			
 		  );
 		$this->load->view('template/header',$data);
		$this->load->view('superadmin/rincian_pembayaran',$data);
		$this->load->view('template/footer');
	}

	public function form_pinjam_kary()
	{
		  $data = array(
		  		'url'		 	 => $this->uri->segment(2) ,
		  		'karyawan'		 => $this->m_admin->getData("tbl_karyawan")->result()
		  );
 		$this->load->view('template/header',$data);
		$this->load->view('superadmin/form_pinjam_kary',$data);
		$this->load->view('template/footer');
	}


}