<?php

/**
 * 
 */
class Upload_berkas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url', 'form');
		// $this->load->library('encryption');
		$id 	 = $this->session->userdata('id');

		if ($id == null || $id == "") {
			$this->session->set_flashdata('info', 'sessi berakhir silahkan login kembali');
			redirect('Login');
		}
	}


	public function index()
	{
		$data = array(
			'url'		 => $this->uri->segment(2),
			'karyawan'	 => $this->m_admin->getData("tbl_karyawan")->result()
		);
		$this->load->view('template/header', $data);
		$this->load->view('superadmin/form_upload_berkas', $data);
		$this->load->view('template/footer');
	}

	public function upload()
	{
		$nama  		= $this->input->post('nama');
		$id_user  	= $this->input->post('id_user');
		$id 	 	= $this->input->post('id');
		$npk 	 	= $this->input->post('npk');

		$ktp  				= $_FILES['ktp']['name'];
		$kartu_keluarga  	= $_FILES['kartu_keluarga']['name'];
		$buku_rekening		= $_FILES['buku_rekening']['name'];
		$surat_lamaran		= $_FILES['surat_lamaran']['name'];
		$riwayat_hidup		= $_FILES['riwayat_hidup']['name'];
		$ket_domisili 		= $_FILES['ket_domisili']['name'];
		$npwp 				= $_FILES['npwp']['name'];
		$skck 				= $_FILES['skck']['name'];
		$ket_kesehatan		= $_FILES['ket_kesehatan']['name'];
		$ijazah				= $_FILES['ijazah_sekolah']['name'];
		$photo 				= $_FILES['photo']['name'];
		$ext 				= pathinfo($photo, PATHINFO_EXTENSION);

		//rename file dengan nama NPK karyawan 
		$ktp  				= $id_user . date('his'). md5($ktp) .'.pdf';
		$kartu_keluarga  	= $id_user . date('his'). md5($kartu_keluarga) .'.pdf';
		$buku_rekening		= $id_user . date('his'). md5($buku_rekening) .'.pdf';
		$surat_lamaran		= $id_user . date('his'). md5($surat_lamaran) .'.pdf';
		$riwayat_hidup		= $id_user . date('his'). md5($riwayat_hidup) .'.pdf';
		$ket_domisili 		= $id_user . date('his'). md5($ket_domisili) .'.pdf';
		$npwp 				= $id_user . date('his'). md5($npwp) .'.pdf';
		$skck 				= $id_user . date('his'). md5($skck) .'.pdf';
		$ket_kesehatan		= $id_user . date('his'). md5($ket_kesehatan) .'.pdf';
		$ijazah				= $id_user . date('his'). md5($ijazah) .'.pdf';
		$photo 				= $id_user . date('his'). md5($photo) .'.' . $ext;

		if (file_exists("assets/upload/berkas/ktp/$ktp")) {
			unlink("assets/upload/berkas/ktp/$ktp");
		}
		if (file_exists("assets/upload/berkas/kartu keluarga/$kartu_keluarga")) {
			unlink("assets/upload/berkas/kartu keluarga/$kartu_keluarga");
		}
		if (file_exists("assets/upload/berkas/buku rekening/$buku_rekening")) {
			unlink("assets/upload/berkas/buku rekening/$buku_rekening");
		}
		if (file_exists("assets/upload/berkas/surat lamaran/$surat_lamaran")) {
			unlink("assets/upload/berkas/surat lamaran/$surat_lamaran");
		}
		if (file_exists("assets/upload/berkas/daftar riwayat hidup/$riwayat_hidup")) {
			unlink("assets/upload/berkas/daftar riwayat hidup/$riwayat_hidup");
		}
		if (file_exists("assets/upload/berkas/domisili/$ket_domisili")) {
			unlink("assets/upload/berkas/domisili/$ket_domisili");
		}
		if (file_exists("assets/upload/berkas/skck/$skck")) {
			unlink("assets/upload/berkas/skck/$skck");
		}
		if (file_exists("assets/upload/berkas/npwp/$npwp")) {
			unlink("assets/upload/berkas/npwp/$npwp");
		}
		if (file_exists("assets/upload/berkas/surat kesehatan/$ket_kesehatan")) {
			unlink("assets/upload/berkas/surat kesehatan/$ket_kesehatan");
		}
		if (file_exists("assets/upload/berkas/ijazah/$ijazah")) {
			unlink("assets/upload/berkas/ijazah/$ijazah");
		}
		if (file_exists("assets/upload/berkas/photo/" . $photo)) {
			unlink("assets/upload/berkas/photo/" . $photo);
		}

		if (
			move_uploaded_file($_FILES['ktp']['tmp_name'], 'assets/upload/berkas/ktp/' . $ktp) &&
			move_uploaded_file($_FILES['kartu_keluarga']['tmp_name'], 'assets/upload/berkas/kartu keluarga/' . $kartu_keluarga) &&
			move_uploaded_file($_FILES['buku_rekening']['tmp_name'], 'assets/upload/berkas/buku rekening/' . $buku_rekening) &&
			move_uploaded_file($_FILES['surat_lamaran']['tmp_name'], 'assets/upload/berkas/surat lamaran/' . $surat_lamaran) &&
			move_uploaded_file($_FILES['riwayat_hidup']['tmp_name'], 'assets/upload/berkas/daftar riwayat hidup/' . $riwayat_hidup) &&
			move_uploaded_file($_FILES['ket_domisili']['tmp_name'], 'assets/upload/berkas/domisili/' . $ket_domisili) &&
			move_uploaded_file($_FILES['npwp']['tmp_name'], 'assets/upload/berkas/npwp/' . $npwp) &&
			move_uploaded_file($_FILES['skck']['tmp_name'], 'assets/upload/berkas/skck/' . $skck) &&
			move_uploaded_file($_FILES['ket_kesehatan']['tmp_name'], 'assets/upload/berkas/surat kesehatan/' . $ket_kesehatan) &&
			move_uploaded_file($_FILES['ijazah_sekolah']['tmp_name'], 'assets/upload/berkas/ijazah/' . $ijazah) &&
			move_uploaded_file($_FILES['photo']['tmp_name'], 'assets/upload/berkas/photo/' . $photo)
		) {
			$data = array(
				'id_user'				=> $id_user,
				'npk'					=> $npk,
				'nama'					=> $nama,
				'ktp'					=> $ktp,
				'kartu_keluarga'		=> $kartu_keluarga,
				'buku_rekening'			=> $buku_rekening,
				'surat_lamaran'			=> $surat_lamaran,
				'daftar_riwayat_hidup'	=> $riwayat_hidup,
				'surat_domisili'		=> $ket_domisili,
				'npwp'					=> $npwp,
				'skck'					=> $skck,
				'surat_kesehatan'		=> $ket_kesehatan,
				'ijazah_sekolah'		=> $ijazah,
				'foto_karyawan'			=> $photo
			);
			$data2 = array(
				'photo'    		=> $photo	
			);
			$cekiduser = $this->m_admin->cari(['id_user' => $id_user], 'tbl_berkas')->num_rows();
			if ($cekiduser > 0) {
				$this->session->set_flashdata('warning', 'histori berkas user belum di bersihkan kosongkan histori berkas ! Hubungi IT Support');
				redirect('superadmin/Upload_berkas');
			} else {
				$this->m_admin->update($data2, "tbl_karyawan", array("id" => $id));
				$input = $this->m_admin->inputData($data, "tbl_berkas");
				if ($input) {
					$this->session->set_flashdata('upload ok', 'file successfull upload');
					redirect('superadmin/Upload_berkas');
				} else {
					$this->session->set_flashdata('failed', 'file gagal upload');
					redirect('superadmin/Upload_berkas');
				}
			}
		} else {
			echo "failed uploaded";
		}
	}

	public function Update()
	{
		$id = $this->input->post('id');
		$data['karyawan'] = $this->m_admin->cari(array("id" => $id), "tbl_karyawan")->row();
		$this->load->view('superadmin/modal_update_berkas', $data);	
	}

	public function loadForm()
 	{
 		$keyword = $this->input->get("pilih"); 
 		$data['keyword'] =  $this->input->get("pilih"); 
 		$this->load->view("superadmin/form-upload-berkas",$data);
 	}
}
