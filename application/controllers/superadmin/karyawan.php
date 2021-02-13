<?php 

/**
 * 
 */
class Karyawan extends CI_Controller
{


	public function __construct()
	{
		 parent::__construct();	
	}



	public function index()
	{
		$karyawan = $this->m_admin->getData("tbl_karyawan")->result();
		$data = array(
			'karyawan' =>  $karyawan ,
			'url' 	   =>   $this->uri->segment(2)
		);
		$this->load->view('template/header',$data);
		$this->load->view('superadmin/karyawan',$data);
		$this->load->view('template/footer');
		
	}

	public function LoadModal()
	{
		$this->load->view('superadmin/modal_karyawan');
		
	}

	public function Edit_karyawan($id)
	{
/*		$p = $this->m_admin->showPendidikan1($id)->result();
		print_r($p);*/

		$data = array(
			'karyawan'		=> $this->m_admin->cari(array("id_user"=> $id),"tbl_karyawan")->row() ,
			'golongan'		=> $this->m_admin->cari(array("id_user"=> $id),"histori_golongan")->result() ,
			'company'		=> $this->m_admin->cari(array("id_user"=> $id),"histori_company")->result() ,
			'training'		=> $this->m_admin->cari(array("id_user"=> $id),"histori_training")->result() ,
			'sp'			=> $this->m_admin->cari(array("id_user"=> $id),"histori_surat_peringatan")->result() ,
			'pendidikan'	=> $this->m_admin->cari(array("id_user"=> $id),"pendidikan")->result() ,
			'keluarga'		=> $this->m_admin->cari(array("id_user"=> $id),"tbl_keluarga")->result() ,
			'join_pendidikan' => $this->m_admin->showPendidikan($id)->result(), 
			'url' 			=> $this->uri->segment(2)
		);
		//$this->output->cache(1);
		$this->load->view('template/header',$data);
		$this->load->view('superadmin/edit_karyawan',$data);
		$this->load->view('template/footer');
	}


	public function delete($id)
	{
		$delete = $this->m_admin->delete('tbl_karyawan',array("id_user"  => $id));
		if($delete){
			$this->m_admin->delete('histori_company',array("id_user"  => $id));
			$this->m_admin->delete('histori_divisi',array("id_user"  => $id));
			$this->m_admin->delete('histori_golongan',array("id_user"  => $id));
			$this->m_admin->delete('histori_jabatan',array("id_user"  => $id));
			$this->m_admin->delete('histori_karir',array("id_user"  => $id));
			$this->m_admin->delete('histori_nilai_karyawan',array("id_user"  => $id));
			$this->m_admin->delete('histori_pendidikan',array("id_user"  => $id));
			$this->m_admin->delete('histori_pkwt',array("id_user"  => $id));
			$this->m_admin->delete('histori_poin_karyawan',array("id_user"  => $id));
			$this->m_admin->delete('histori_promosi',array("id_user"  => $id));
			$this->m_admin->delete('histori_surat_peringatan',array("id_user"  => $id));
			$this->m_admin->delete('histori_training',array("id_user"  => $id));
			$this->m_admin->delete('human_value_assets',array("id_user"  => $id));
			$this->m_admin->delete('mutasi_jabatan',array("id_user"  => $id));
			$this->m_admin->delete('promosi_jabatan',array("id_user"  => $id));
			$this->m_admin->delete('pendidikan',array("id_user"  => $id));
			$this->m_admin->delete('tbl_keluarga',array("id_user"  => $id));
			redirect('superadmin/Karyawan');
		}

	}


	//hapus data golongan
	public function delgol($id , $id_user , $file)
	{
		$dir   = './assets/upload/histori_golongan/' . $file ;
		if(file_exists($dir)){
			unlink($dir);
	 		$this->m_admin->delete("histori_golongan",array("id" => $id));
	 		redirect('superadmin/Karyawan/Edit_karyawan/' . $id_user);
		}
 	
	}

	public function delkel($id, $id_user)
	{

	 		$this->m_admin->delete("tbl_keluarga",array("id" => $id));
	 		redirect('superadmin/Karyawan/Edit_karyawan/' . $id_user);
 	
	}
}
