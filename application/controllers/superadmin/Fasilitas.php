<?php


class Fasilitas extends CI_Controller
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
		$data = array(
			'url'		 => $this->uri->segment(2),
			'fasilitas'	 => $this->m_admin->getData("fasilitas")->result(),
		);
		$this->load->view('template/header', $data);
		$this->load->view('superadmin/form_fasilitas', $data);
		$this->load->view('template/footer');
	}

	public function add()
	{
		$fasilitas 	    = $this->input->post("fasilitas");
		$aktif_klaim    = $this->input->post("aktif_klaim");
		$periode_klaim 	= $this->input->post("periode_klaim");
		$golongan       = $this->input->post("golongan");
		$cek		    = $this->m_admin->cari(array("fasilitas" => $fasilitas), "fasilitas")->num_rows();
		if ($cek > 0) {
			echo "fasilitas sudah ada";
		} else {
			$data = array(
				"fasilitas"			=> $fasilitas,
				"aktif_klaim"       => $aktif_klaim,
				"periode_klaim"           => $periode_klaim,
				"golongan"          => $golongan,
			);
			var_dump($data);
			$input = $this->m_admin->inputData($data, "fasilitas");
			if ($input == true) {
				echo "sukses";
			} else {
				echo "gagal";
			}
		}
	}



	public function add_fasilitas()
	{
		$data = array(
			'url'		 => $this->uri->segment(2),
			'karyawan'	 => $this->m_admin->getData("tbl_karyawan")->result(),
			'fasilitas'	 => $this->m_admin->getData("tbl_fasilitasi")->result(),
			'fasilitasi' => $this->m_admin->getData("fasilitas")->result(),

		);
		$this->load->view('template/header', $data);
		$this->load->view('superadmin/fasilitas', $data);
		$this->load->view('template/footer');
	}

	public function input_fasilitas()
	{
		$id             = $this->input->post("id");
		$id_user        = $this->input->post("id_user");
		$nama           = $this->input->post("nama");
		$npk            = $this->input->post("npk");
		$fasilitas      = $this->input->post("fasilitas");
		$tanggal        = $this->input->post("tanggal");
		$data = array(
			"id_user"       => $id_user,
			"npk"           => $npk,
			"nama"          => $nama,
			"fasilitas"     => $fasilitas,
			"tanggal"       => $tanggal,
			"claim_ke"		=> 1
		);
		$dataupdate = array(
			'fasilitas' 	 => $fasilitas,
		);
		//hitung selisih tahun bergabung karyawan dengan tanggal hari ini 
		$joinDate       =  $this->input->post("join");
		$join   		= new DateTime($joinDate);
		$today			= new DateTime("today");
		$y 				= $today->diff($join)->y;
		$d 				= $today->diff($join)->d;
		$m 				= $today->diff($join)->m;



		if ($y < 2) {
			echo "tidak bisa claim, masa kerja belum 2 tahun atau lebih\n";
			echo "total masa kerja " . $y . " tahun " . $m . " bulan " . $d . " hari";
		} else {
			//cari apakah sudah ada histori claim apa belum 
			$cariHistori = $this->m_admin->cari(['id_user' => $id_user], "tbl_fasilitasi")->num_rows();
			if ($cariHistori == 0) {
				//  var_dump($data);
				$update = $this->m_admin->update($dataupdate, "tbl_karyawan", array("id" => $id));
				if ($update) {
					$info  = "Update Fasilitas Karayawan " . $npk . " - " . $nama;
					helper_log($this->session->userdata('npk'), $this->session->userdata('nama'), $npk, $info);
					$this->m_admin->inputData($data, "tbl_fasilitasi");
					echo "sukses";
				} else {
					echo "gagal update";
				}
			} else {
				//cek tanggal terakhir claim karyawan 
				$dataKlaim      = $this->m_admin->cekKlaim($id_user);
				$tglKlaim       = $dataKlaim->tanggal;
				$klaim  		= new DateTime($tglKlaim);
				$hariIni		= new DateTime("today");
				$tahunKlaim     = $hariIni->diff($klaim)->y;
				$hitungClaim    = $this->m_admin->maxKlaim($id_user);

				//echo $tahunKlaim;
				$data1 = array(
					"id_user"       => $id_user,
					"npk"           => $npk,
					"nama"          => $nama,
					"fasilitas"     => $fasilitas,
					"tanggal"       => $tanggal,
					"claim_ke"		=> $hitungClaim->claim + 1
				);
				if ($tahunKlaim > 2) {
					//input dan update disini
					//var_dump($data1);
					$update = $this->m_admin->update($dataupdate, "tbl_karyawan", array("id" => $id));
					if ($update) {
						$info  = "Update Fasilitas Karayawan " . $npk . " - " . $nama;
						helper_log($this->session->userdata('npk'), $this->session->userdata('nama'), $npk, $info);
						$this->m_admin->inputData($data1, "tbl_fasilitasi");
						echo "sukses";
					} else {
						echo "gagal update";
					}
				} else {
					echo "masa klaim sebelumnya belum genap 2 tahun";
				}
			}
		}
	}
}
