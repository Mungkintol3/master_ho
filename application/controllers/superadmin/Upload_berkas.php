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
		$this->load->view("superadmin/form-upload-berkas", $data);
	}

	public function uploadTrial()
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

		$cekiduser = $this->m_admin->cari(['id_user' => $id_user], 'tbl_berkas')->num_rows();

		//jika iduser sudah ada di table berkas maka gunakan script di bawah
		if ($cekiduser > 0) {
			$identitas = $this->m_admin->cari(['id_user' => $id_user], 'tbl_berkas')->row();
			//update nama berkas jika sudah ada berkas lainnya
			$ktp		    	= $this->input->post("namaKTP");
			$kartu_keluarga 	= $this->input->post("idKK");
			$buku_rekening		= $this->input->post("idrekening");
			$surat_lamaran		= $this->input->post("idLamaran");
			$riwayat_hidup		= $this->input->post("idRiwayat");
			$ket_domisili		= $this->input->post("idDomisili");
			$npwp		   		= $this->input->post("idNPWP");
			$skck		   		= $this->input->post("idSKCK");
			$ket_kesehatan		= $this->input->post("idKesehatan");
			$ijazah				= $this->input->post("idIjazah");
			$photo				= $this->input->post("idPhoto");

			//cek nama file upload dengan nama file di database
			//jika sama maka data tidak update 
			//jika beda maka data file yang di upload akan di replace dan file lama akan di hapus
			if ($this->input->post("namaKTP") == $identitas->ktp) {
				$ktp = $this->input->post("namaKTP");
				//echo "file tidak update";
			} else if ($this->input->post("namaKTP") != $identitas->ktp) {
				if (file_exists("assets/upload/berkas/ktp/$identitas->ktp")) {
					unlink("assets/upload/berkas/ktp/$identitas->ktp");
				}
				$ktp = "KTP" . $id_user . date('his') .  '.pdf';
				//echo "update file  <br>";
			}


			if ($kartu_keluarga  == $identitas->kartu_keluarga) {
				$kartu_keluarga = $this->input->post("idKK");
				//echo "file tidak update";
			} else if ($kartu_keluarga != $identitas->kartu_keluarga) {
				if (file_exists("assets/upload/berkas/kartu keluarga/$identitas->kartu_keluarga")) {
					unlink("assets/upload/berkas/kartu keluarga/$identitas->kartu_keluarga");
				}
				$kartu_keluarga = "Kartu_Keluarga" . $id_user . date('his') .  '.pdf';
				//echo "update file <br>";
			}

			if ($buku_rekening  == $identitas->buku_rekening) {
				$buku_rekening = $this->input->post("idrekening");
				//echo "file tidak update";
			} else if ($buku_rekening != $identitas->buku_rekening) {
				if (file_exists("assets/upload/berkas/buku rekening/$identitas->buku_rekening")) {
					unlink("assets/upload/berkas/buku rekening/$identitas->buku_rekening");
				}
				$buku_rekening = "Buku_rekening" . $id_user . date('his') .  '.pdf';
				//echo "update file  <br>";
			}

			if ($surat_lamaran  == $identitas->surat_lamaran) {
				$surat_lamaran = $this->input->post("idLamaran");
				//echo "file tidak update";
			} else if ($surat_lamaran != $identitas->surat_lamaran) {
				if (file_exists("assets/upload/berkas/surat lamaran/$identitas->surat_lamaran")) {
					unlink("assets/upload/berkas/surat lamaran/$identitas->surat_lamaran");
				}
				$surat_lamaran = "Surat_lamaran" . $id_user . date('his') .  '.pdf';
				//echo "update file  <br>";
			}

			if ($riwayat_hidup  == $identitas->daftar_riwayat_hidup) {
				$riwayat_hidup = $this->input->post("idRiwayat");
				//echo "file tidak update";
			} else if ($riwayat_hidup != $identitas->daftar_riwayat_hidup) {
				if (file_exists("assets/upload/berkas/daftar riwayat hidup/$identitas->daftar_riwayat_hidup")) {
					unlink("assets/upload/berkas/daftar riwayat hidup/$identitas->daftar_riwayat_hidup");
				}
				$riwayat_hidup = "Riwayat_hidup" . $id_user . date('his') .  '.pdf';
				//echo "update file   <br>";
			}

			if ($ket_domisili  == $identitas->surat_domisili) {
				$ket_domisili = $this->input->post("idDomisili");
				//echo "file tidak update";
			} else if ($ket_domisili != $identitas->surat_domisili) {
				if (file_exists("assets/upload/berkas/daftar riwayat hidup/$identitas->surat_domisili")) {
					unlink("assets/upload/berkas/daftar riwayat hidup/$identitas->surat_domisili");
				}
				$ket_domisili = "Domisili" . $id_user . date('his') .  '.pdf';
				//echo "update file   <br>";
			}

			if ($npwp  == $identitas->npwp) {
				$npwp = $this->input->post("idNPWP");
				//echo "file  tidak update";
			} else if ($npwp != $identitas->npwp) {
				if (file_exists("assets/upload/berkas/npwp/$identitas->npwp")) {
					unlink("assets/upload/berkas/npwp/$identitas->npwp");
				}
				$npwp = "NPWP" . $id_user . date('his') .  '.pdf';
				//echo "update file  <br>";
			}

			if ($skck  == $identitas->skck) {
				$skck = $this->input->post("idSKCK");
				//echo "file  tidak update";
			} else if ($skck != $identitas->skck) {
				if (file_exists("assets/upload/berkas/skck/$identitas->skck")) {
					unlink("assets/upload/berkas/skck/$identitas->skck");
				}
				$skck = "SKCK" . $id_user . date('his') .  '.pdf';
				//echo "update file  <br>";
			}

			if ($ket_kesehatan  == $identitas->surat_kesehatan) {
				$ket_kesehatan = $this->input->post("idKesehatan");
				//echo "file tidak update";
			} else if ($ket_kesehatan != $identitas->surat_kesehatan) {
				if (file_exists("assets/upload/berkas/surat kesehatan/$identitas->surat_kesehatan")) {
					unlink("assets/upload/berkas/surat kesehatan/$identitas->surat_kesehatan");
				}
				$ket_kesehatan = "Surat_Kesehatan" . $id_user . date('his') .  '.pdf';
				//echo "update file   <br>";
			}

			if ($ijazah  == $identitas->ijazah_sekolah) {
				$ijazah = $this->input->post("idIjazah");
				//echo "file tidak update";
			} else if ($ijazah != $identitas->ijazah_sekolah) {
				if (file_exists("assets/upload/berkas/ijazah/$identitas->ijazah_sekolah")) {
					unlink("assets/upload/berkas/ijazah/$identitas->ijazah_sekolah");
				}
				$ijazah = "IJAZAH" . $id_user . date('his') .  '.pdf';
				//echo "update file   <br>";
			}

			if ($photo  == $identitas->foto_karyawan) {
				$photo = $this->input->post("idPhoto");
				//echo "file tidak update";
			} else if ($photo != $identitas->foto_karyawan) {
				if (file_exists("assets/upload/berkas/photo/$identitas->foto_karyawan")) {
					unlink("assets/upload/berkas/photo/$identitas->foto_karyawan");
				}
				$photo = "PHOTO" . $id_user . date('his') .  '.' . $ext;
				//echo "update file   <br>";
			}



			move_uploaded_file($_FILES['ktp']['tmp_name'], 'assets/upload/berkas/ktp/' . $ktp);
			move_uploaded_file($_FILES['kartu_keluarga']['tmp_name'], 'assets/upload/berkas/kartu keluarga/' . $kartu_keluarga);
			move_uploaded_file($_FILES['buku_rekening']['tmp_name'], 'assets/upload/berkas/buku rekening/' . $buku_rekening);
			move_uploaded_file($_FILES['surat_lamaran']['tmp_name'], 'assets/upload/berkas/surat lamaran/' . $surat_lamaran);
			move_uploaded_file($_FILES['riwayat_hidup']['tmp_name'], 'assets/upload/berkas/daftar riwayat hidup/' . $riwayat_hidup);
			move_uploaded_file($_FILES['npwp']['tmp_name'], 'assets/upload/berkas/npwp/' . $npwp);
			move_uploaded_file($_FILES['skck']['tmp_name'], 'assets/upload/berkas/skck/' . $skck);
			move_uploaded_file($_FILES['ket_kesehatan']['tmp_name'], 'assets/upload/berkas/surat kesehatan/' . $ket_kesehatan);
			move_uploaded_file($_FILES['ijazah']['tmp_name'], 'assets/upload/berkas/ijazah/' . $ijazah);
			move_uploaded_file($_FILES['photo']['tmp_name'], 'assets/upload/berkas/photo/' . $photo);
			$data = array(
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
			try {
				$p = 	$this->m_admin->update($data, "tbl_berkas", ['id_user' => $id_user]);
				if ($p == true) {
					$this->session->set_flashdata('upload ok', 'file successfull upload');
					redirect('superadmin/Upload_berkas');
				} else {
					$this->session->set_flashdata('failed', 'no uploaded file');
					redirect('superadmin/Upload_berkas');
				}
			} catch (Exception $e) {
				echo $e->getMessage();
			}
			//end script update berkas
		} else {
			//jika id user tidak ada maka upload file dan gunakan script di bawah 

			//rename nama ktp yang di upload
			if ($ktp != null || $ktp != "") {
				$ktp = "KTP" . $id_user . date('his') .  '.pdf';
			} else {
				$ktp = null;
			}

			//rename nama kartu keluarga yang di upload
			if ($kartu_keluarga != null || $kartu_keluarga != "") {
				$kartu_keluarga  = "Kartu_Keluarga" . $id_user . date('his') .  '.pdf';
			} else {
				$kartu_keluarga = null;
			}

			//rename nama buku rekening yang di upload
			if ($buku_rekening != null || $buku_rekening != "") {
				$buku_rekening 	= "Buku_Rekening" . $id_user . date('his') .  '.pdf';
			} else {
				$buku_rekening = null;
			}

			//rename nama surat lamaran  yang di upload
			if ($surat_lamaran != null || $surat_lamaran != "") {
				$surat_lamaran 	= "Surat_lamaran" . $id_user . date('his') .  '.pdf';
			} else {
				$surat_lamaran = null;
			}

			//rename nama daftar riwayat hidup  yang di upload
			if ($riwayat_hidup != null || $riwayat_hidup != "") {
				$riwayat_hidup 	= "Riwayat_hidup" . $id_user . date('his') .  '.pdf';
			} else {
				$riwayat_hidup = null;
			}

			//rename nama surat domisili  yang di upload
			if ($ket_domisili != null || $ket_domisili != "") {
				$ket_domisili 	= "Domisili" . $id_user . date('his') .  '.pdf';
			} else {
				$ket_domisili = null;
			}

			//rename nama file npwp yang di upload
			if ($npwp != null || $npwp != "") {
				$npwp 	= "NPWP" . $id_user . date('his') .  '.pdf';
			} else {
				$npwp = null;
			}

			//rename nama file skck yang di upload
			if ($skck != null || $skck != "") {
				$skck 	= "SKCK" . $id_user . date('his') .  '.pdf';
			} else {
				$skck = null;
			}


			//rename nama file surat kesehatan yang di upload
			if ($ket_kesehatan != null || $ket_kesehatan != "") {
				$ket_kesehatan 	= "Surat_Kesehatan" . $id_user . date('his') .  '.pdf';
			} else {
				$ket_kesehatan = null;
			}

			//rename nama file ijazah yang di upload
			if ($ijazah != null || $ijazah != "") {
				$ijazah	= "Ijazah" . $id_user . date('his') .  '.pdf';
			} else {
				$ijazah = null;
			}


			//rename nama file poto karyawan yang di upload
			if ($photo != null || $photo != "") {
				$photo	= "Photo" . $id_user . date('his') . "." . $ext;
			} else {
				$photo = null;
			}

			//jika belum ada berkas satupun maka upload dan insert datanya ke database 
			move_uploaded_file($_FILES['ktp']['tmp_name'], 'assets/upload/berkas/ktp/' . $ktp);
			move_uploaded_file($_FILES['kartu_keluarga']['tmp_name'], 'assets/upload/berkas/kartu keluarga/' . $kartu_keluarga);
			move_uploaded_file($_FILES['buku_rekening']['tmp_name'], 'assets/upload/berkas/buku rekening/' . $buku_rekening);
			move_uploaded_file($_FILES['surat_lamaran']['tmp_name'], 'assets/upload/berkas/surat lamaran/' . $surat_lamaran);
			move_uploaded_file($_FILES['riwayat_hidup']['tmp_name'], 'assets/upload/berkas/daftar riwayat hidup/' . $riwayat_hidup);
			move_uploaded_file($_FILES['ket_domisili']['tmp_name'], 'assets/upload/berkas/domisili/' . $ket_domisili);
			move_uploaded_file($_FILES['npwp']['tmp_name'], 'assets/upload/berkas/npwp/' . $npwp);
			move_uploaded_file($_FILES['skck']['tmp_name'], 'assets/upload/berkas/skck/' . $skck);
			move_uploaded_file($_FILES['ket_kesehatan']['tmp_name'], 'assets/upload/berkas/surat kesehatan/' . $ket_kesehatan);
			move_uploaded_file($_FILES['ijazah']['tmp_name'], 'assets/upload/berkas/ijazah/' . $ijazah);
			move_uploaded_file($_FILES['photo']['tmp_name'], 'assets/upload/berkas/photo/' . $photo);
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

			try {
				$p = $this->m_admin->inputData($data, "tbl_berkas");
				if ($p == true) {
					$this->session->set_flashdata('upload ok', 'file successfull upload');
					redirect('superadmin/Upload_berkas');
				} else {
					$this->session->set_flashdata('failed', 'no uploaded file');
					redirect('superadmin/Upload_berkas');
				}
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}
	}

	public function cekFile()
	{
		$id = $this->input->post('id');
		$data = $this->m_admin->cekFile($id);
		if ($data->num_rows() > 0) {
			$result = $data->row();
			echo json_encode($result);
		} else {
			$result = ['result' => 0];
			echo json_encode($result);
		}
	}
}
