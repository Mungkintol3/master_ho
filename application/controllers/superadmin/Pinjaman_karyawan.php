<?php


/**
 * 
 */
class Pinjaman_karyawan extends CI_Controller
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
			'url'		 	 => $this->uri->segment(2),
			'pinjaman'		 => $this->m_admin->getData("tbl_peminjaman")->result()
		);
		$this->load->view('template/header', $data);
		$this->load->view('superadmin/peminjaman_karyawan', $data);
		$this->load->view('template/footer');
	}


	//rincian pinjam
	public function rincian($id)
	{
		$data = array(
			'url'		 	 => $this->uri->segment(2),
			'pinjaman'		 => $this->m_admin->cari(array('id_pinjam'	=> $id), "tbl_pembayaran")->result(),
			'sisa_tenor'	 => $this->m_admin->cari(array('id_pinjam'	=> $id), "tbl_pembayaran")->num_rows(),
			'data_pinjam'	 => $this->m_admin->cari(array('id_pinjam'	=> $id), "tbl_peminjaman")->result(),

		);
		$this->load->view('template/header', $data);
		$this->load->view('superadmin/rincian_pembayaran', $data);
		$this->load->view('template/footer');
	}

	public function form_pinjam_kary()
	{
		$data = array(
			'url'		 	 => $this->uri->segment(2),
			'karyawan'		 => $this->m_admin->getData("tbl_karyawan")->result()
		);
		$this->load->view('template/header', $data);
		$this->load->view('superadmin/form_pinjam_kary', $data);
		$this->load->view('template/footer');
	}



	public function input_pinjaman($value = '')
	{

		$file 				 = $_FILES['file']['name'];
		$filename 			 = $file;
		$npk				 = $this->input->post("npk");
		$extensi 			 = pathinfo($filename, PATHINFO_EXTENSION);
		$this->load->library('upload');
		$config['allowed_types']   = '*';
		$config['upload_path']     = './assets/upload/bukti_peminjaman/';
		$config['file_name'] 	   = $npk .  date('his') .  md5($filename) . '.' . $extensi;

		$this->upload->initialize($config);
		if (!$this->upload->do_upload('file')) {
			echo "failed";
		} else {
			//data peminjam
			$id_user 			= $this->input->post("id_user");
			$nama 				= $this->input->post("nama");

			//data peminjaman
			$berkas 		    = $this->upload->data("file_name");
			$vendor 			= $this->input->post("vendor_pinjam");
			$id_pinjam 			= $npk . date('Mhisy');
			$bunga  			= $this->input->post("total_bunga");
			$persentaseBunga	= $this->input->post("persentase_bunga") . "%";
			$tenor  			= $this->input->post("tenor");
			$totalPinjam 		= $this->input->post("total_pinjam");
			$pokokBayar 		= $this->input->post("pokok");
			$setorBulanan		= $this->input->post("setor_perbulan");
			$tanggal 			= $this->input->post("tanggal");

			$data = array(
				'nama'				=> $nama,
				'id_user'			=> $id_user,
				'npk'				=> $npk,
				'vendor_pinjam'		=> $vendor,
				'id_pinjam'			=> $id_pinjam,
				'total_pinjam'		=> $totalPinjam,
				'persentase_bunga'	=> $persentaseBunga,
				'total_bunga'		=> $bunga,
				'pokok'				=> $pokokBayar,
				'setor_perbulan'	=> $setorBulanan,
				'tenor'				=> $tenor,
				'tanggal'			=> $tanggal,
				'file'				=> $berkas
			);

			$input = $this->m_admin->inputData($data, "tbl_peminjaman");
			if ($input) {
				echo "sukses";
			} else {
				echo "error";
			}
		}
	}
}
