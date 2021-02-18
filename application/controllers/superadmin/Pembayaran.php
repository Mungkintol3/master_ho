<?php


/**
 * 
 */
class Pembayaran extends CI_Controller
{
	

	public function form_bayar($id)
	{
		  $data = array(
		  		'url'		 	 => $this->uri->segment(2) ,
		  		'karyawan'		 => $this->m_admin->getData("tbl_karyawan")->result() ,
		  		'bayar'			 => $this->m_admin->cari(array("id_pinjam" => $id ),"tbl_pembayaran")->num_rows() ,
		  		'peminjam'		 => $this->m_admin->cari(array("id_pinjam" => $id ),"tbl_peminjaman")->row()
		  );
 		$this->load->view('template/header',$data);
		$this->load->view('superadmin/form_bayar_kary',$data);
		$this->load->view('template/footer');
	}


	public function bayar_pinjaman()
	{
		$id_user  		 = $this->input->post("id_user") ;
		$nama 			 = $this->input->post("nama") ;
		$npk 			 = $this->input->post("npk");
		$pembayaran_ke   = $this->input->post("pembayaran_ke");
		$jumlah_bayar 	 = $this->input->post("jumlah_bayar") ;
		$bunga 			 = $this->input->post("bunga");
		$pokok 			 = $this->input->post("pokok") ;
		$id_pinjam  	 = $this->input->post("id_pinjam");
		$tanggal 		 = $this->input->post("tanggal"); 

		$data = array(
			'id_user'			=> $id_user ,
			'nama'				=> $nama 	,
			'npk'				=> $npk ,
			'pembayaran_ke'		=> $pembayaran_ke ,
			'jumlah_bayar'		=> $jumlah_bayar ,
			'bunga'				=> $bunga ,
			'pokok'				=> $pokok ,
			'id_pinjam'			=> $id_pinjam ,
			'tanggal'			=> $tanggal ,
		);

		$input = $this->m_admin->inputData($data,"tbl_pembayaran");
			if($input){
				echo "sukses";
			}else {
				echo "error";
			}
	
	}


}