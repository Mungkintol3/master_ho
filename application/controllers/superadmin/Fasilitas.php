<?php


class Fasilitas extends CI_Controller{
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

    public function add_fasilitas()
    {
        $data = array(
			'url'		 => $this->uri->segment(2),
			'karyawan'	 => $this->m_admin->getData("tbl_karyawan")->result(),
			'fasilitas'	 => $this->m_admin->getData("tbl_fasilitasi")->result(),
		);
        $this->load->view('template/header',$data);
        $this->load->view('superadmin/fasilitas',$data);
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
            "id"            => $id,
            "id_user"       => $id_user,
            "npk"           => $npk,
            "nama"          => $nama,
            "fasilitas"     => $fasilitas,
            "tanggal"       => $tanggal,
        );
        $dataupdate = array(
				'fasilitas' 	 => $fasilitas,
			);

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
    }
}

?>