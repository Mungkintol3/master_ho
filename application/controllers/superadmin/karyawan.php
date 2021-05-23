<?php

/**
 * 
 */
class Karyawan extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		// $this->load->library('encryption');
		$id 	 = $this->session->userdata('id');

		if ($id == null || $id == "") {
			$this->session->set_flashdata('info', 'sessi berakhir silahkan login kembali');
			redirect('Login');
		}
	}

	public function index()
	{
		$karyawan = $this->m_admin->getData("tbl_karyawan")->result();
		$data = array(
			'karyawan' =>  $karyawan,
			'url' 	   =>   $this->uri->segment(2)
		);
		$this->load->view('template/header', $data);
		$this->load->view('superadmin/karyawan', $data);
		$this->load->view('template/footer');
	}



	public function UpdateBiodata($id)
	{
		$data = array(
			'no_ktp'  			=> $this->input->post("no_ktp"),
			'no_kk'  			=> $this->input->post("no_kk"),
			'status_pajak'  	=> $this->input->post("status_pajak"),
			'no_npwp'  			=> $this->input->post("no_npwp"),
			'status_kawin'  	=> $this->input->post("status_kawin"),
			'alamat_ktp'  		=> $this->input->post("alamat_ktp"),
			'address'  			=> $this->input->post("address"),
			'email'  			=> $this->input->post("email"),
			'no_telp'  			=> $this->input->post("no_telp"),
			'kontak_darurat'  	=> $this->input->post("kontak_darurat")
		);

		$update = $this->m_admin->update($data, "tbl_karyawan", array("id" => $id));
		if ($update) {
			echo "sukses";
		} else {
			echo "gagal";
		}
	}

	public function UpdateInformasi($id)
	{
		$data = array(
			'bpjs_kesehatan'	=> $this->input->post("bpjs_kesehatan"),
			'bpjs_tenagakerja'	=> $this->input->post("bpjs_tenagakerja"),
			'no_dplk'			=> $this->input->post("no_dplk"),
			'nama_bank'			=> $this->input->post("nama_bank"),
			'no_rekening'		=> $this->input->post("rekening"),
		);

		$update = $this->m_admin->update($data, "tbl_karyawan", array("id" => $id));
		if ($update) {
			echo "sukses";
		} else {
			echo "gagal";
		}
	}

	public function Edit_karyawan($id)
	{
		$data = array(
			'berkas'		=> $this->m_admin->cari(array("id_user" => $id), "tbl_berkas")->result(),	
			'karyawan'		=> $this->m_admin->cari(array("id_user" => $id), "tbl_karyawan")->row(),
			'golongan'		=> $this->m_admin->cari(array("id_user" => $id), "histori_golongan")->result(),
			'company'		=> $this->m_admin->cari(array("id_user" => $id), "histori_company")->result(),
			'training'		=> $this->m_admin->cari(array("id_user" => $id), "histori_training")->result(),
			'sp'			=> $this->m_admin->cari(array("id_user" => $id), "histori_surat_peringatan")->result(),
			'pendidikan'	=> $this->m_admin->cari(array("id_user" => $id), "pendidikan")->result(),
			'point'			=> $this->m_admin->cari(array("id_user" => $id), "histori_poin_karyawan")->result(),
			'dept_divi' 	=> $this->m_admin->cari(array("id_user" => $id), "histori_divisi")->result(),
			'nilai'			=> $this->m_admin->cari(array("id_user" => $id), "histori_nilai_karyawan")->result(),
			'keluarga'		=> $this->m_admin->cari(array("id_user" => $id), "tbl_keluarga")->result(),
			'join_pendidikan' => $this->m_admin->showPendidikan($id)->result(),
			'human_value_assets' => $this->m_admin->cari(array("id_user" => $id), "human_value_assets")->result(),
			'berkas'		=> $this->m_admin->cari(array("id_user" => $id), "tbl_berkas")->result(),
			'url' 			=> $this->uri->segment(2)
		);
		//$this->output->cache(1);
		$this->load->view('template/header', $data);
		$this->load->view('superadmin/edit_karyawan', $data);
		$this->load->view('template/footer');
	}


	public function delete($id)
	{
		$delete = $this->m_admin->delete('tbl_karyawan', array("id_user"  => $id));
		if ($delete) {
			$this->m_admin->delete('histori_company', array("id_user"  => $id));
			$this->m_admin->delete('histori_divisi', array("id_user"  => $id));
			$this->m_admin->delete('histori_golongan', array("id_user"  => $id));
			$this->m_admin->delete('histori_jabatan', array("id_user"  => $id));
			$this->m_admin->delete('histori_karir', array("id_user"  => $id));
			$this->m_admin->delete('histori_nilai_karyawan', array("id_user"  => $id));
			$this->m_admin->delete('histori_pendidikan', array("id_user"  => $id));
			$this->m_admin->delete('histori_pkwt', array("id_user"  => $id));
			$this->m_admin->delete('histori_poin_karyawan', array("id_user"  => $id));
			$this->m_admin->delete('histori_promosi', array("id_user"  => $id));
			$this->m_admin->delete('histori_surat_peringatan', array("id_user"  => $id));
			$this->m_admin->delete('histori_training', array("id_user"  => $id));
			$this->m_admin->delete('human_value_assets', array("id_user"  => $id));
			$this->m_admin->delete('mutasi_jabatan', array("id_user"  => $id));
			$this->m_admin->delete('promosi_jabatan', array("id_user"  => $id));
			$this->m_admin->delete('pendidikan', array("id_user"  => $id));
			$this->m_admin->delete('tbl_keluarga', array("id_user"  => $id));
			$this->m_admin->delete('tbl_peminjaman', array("id_user"  => $id));
			$this->m_admin->delete('tbl_pembayaran', array("id_user"  => $id));
			redirect('superadmin/Karyawan');
		}
	}


	public function Replacement($id)
	{
		 $data2 = array(
			'info' 			=> $this->m_admin->cari(array('id_user' => $id), "tbl_karyawan")->row(),
			'pendidikan'  	=> $this->m_admin->cari(array('id_user' => $id), "pendidikan")->result(),
			'golongan'		=> $this->m_admin->cari(array("id_user" => $id), "histori_golongan")->result(),
			'company'		=> $this->m_admin->cari(array("id_user" => $id), "histori_company")->result(),
			'jabatan'		=> $this->m_admin->cari(array("id_user" => $id), "promosi_jabatan")->result(),
			'training'		=> $this->m_admin->cari(array("id_user" => $id), "histori_training")->result(),
			'keluarga'		=> $this->m_admin->cari(array("id_user" => $id), "tbl_keluarga")->result(),
			'nilai'			=> $this->m_admin->shownilai($id),
			'human_value_assets' => $this->m_admin->showvaluea($id),
			'replacement'	=> $this->m_admin->getData("tbl_karyawan")->result(),
			'url' 			=> $this->uri->segment(2)
		);
        //$this->load->view('template/header',$data);
		$this->load->view('superadmin/replacement',$data2);
		$this->load->view('template/footer');
    	
	}

	public function loadModal($id)
	{
		$npk = $this->input->get("npk");
		$data['npk'] = $id;
		$data['berkas'] = $id;
		$data['row']  = $this->m_admin->getKar("tbl_karyawan", array('id_user' => $id))->row();
		$this->load->view("superadmin/karyawan", $data);
	}


	//modal edit biodata data karyawan
	public function modaleditBiodata()
	{
		$id = $this->input->post('id');
		$data['karyawan'] = $this->m_admin->cari(array("id" => $id), "tbl_karyawan")->row();
		$this->load->view('superadmin/update_modalbiodata_karyawan', $data);
	}

	//modal edit

	//modal edit informasi karyawan
	public function modaleditInformasi()
	{
		$id = $this->input->post("id");
		$data['karyawan'] = $this->m_admin->cari(array("id" => $id), "tbl_karyawan")->row();
		$this->load->view('superadmin/update_modalinformasi_karyawan', $data);
	}

	//hapus histori nilai karyawan 
	public function delHistoriNilai($id, $id_user)
	{
		$delete = $this->m_admin->delete("histori_nilai_karyawan", array('id' => $id));
		if ($delete) {
			$this->session->set_flashdata('delInfo', 'data terhapus');
			redirect('superadmin/Karyawan/Edit_karyawan/' . $id_user);
		} else {
			echo "gagal hapus data";
		}
	}

	//hapus histori departement dan divisi  karyawan 
	public function delDepatertement($id, $id_user)
	{
		$delete = $this->m_admin->delete("histori_divisi", array('id' => $id));
		if ($delete) {
			$this->session->set_flashdata('delInfo', 'data terhapus');
			redirect('superadmin/Karyawan/Edit_karyawan/' . $id_user);
		} else {
			echo "gagal hapus data";
		}
	}

	//hapus histori point  karyawan 
	public function delPoint($id, $id_user)
	{
		$delete = $this->m_admin->delete("histori_poin_karyawan", array('id' => $id));
		if ($delete) {
			$this->session->set_flashdata('delInfo', 'data terhapus');
			redirect('superadmin/Karyawan/Edit_karyawan/' . $id_user);
		} else {
			echo "gagal hapus data";
		}
	}

	//hapus data golongan
	public function delgol($id, $id_user, $file)
	{
		$dir   = './assets/upload/histori_golongan/' . $file;
		if (file_exists($dir)) {
			unlink($dir);
			$this->m_admin->delete("histori_golongan", array("id" => $id));
			redirect('superadmin/Karyawan/Edit_karyawan/' . $id_user);
		}
	}


	//hapus data keluarga karyawan 
	public function delkel($id, $id_user)
	{
		$delete = $this->m_admin->delete("tbl_keluarga", array("id" => $id));
		if ($delete) {
			$this->session->set_flashdata('delInfo', 'data terhapus');
			redirect('superadmin/Karyawan/Edit_karyawan/' . $id_user);
		} else {
			echo "gagal hapus data";
		}
	}

	//hapus histori human assets value karyawan 
	public function delHumanAssetValue($id, $id_user)
	{
		$delete = $this->m_admin->delete("human_value_assets", array("id" => $id));
		if ($delete) {
			$this->session->set_flashdata('delInfo', 'data terhapus');
			redirect('superadmin/Karyawan/Edit_karyawan/' . $id_user);
		} else {
			echo "gagal hapus data";
		}
	}

	//hapus histori surat peringatan karyawan 
	public function delPeringatan($id, $id_user, $file)
	{
		$dir   = './assets/upload/surat_peringatan/' . $file;
		if (file_exists($dir)) {
			unlink($dir);
			$this->m_admin->delete("histori_surat_peringatan", array("id" => $id));
			$this->session->set_flashdata('delInfo', 'data terhapus');
			redirect('superadmin/Karyawan/Edit_karyawan/' . $id_user);
		} else {
			echo "gagal terjadi kesalahan , hubungi IT Support";
		}
	}

	//hapus histori traininig karyawan 
	public function delTraining($id, $id_user, $file)
	{
		$dir   = './assets/upload/sertifikat/' . $file;
		if (file_exists($dir)) {
			unlink($dir);
			$this->m_admin->delete("histori_training", array("id" => $id));
			$this->session->set_flashdata('delInfo', 'data terhapus');
			redirect('superadmin/Karyawan/Edit_karyawan/' . $id_user);
		} else {
			echo "gagal terjadi kesalahan , hubungi IT Support";
		}
	}
}
