<?php


class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        // $this->load->library('encryption');
        $id      = $this->session->userdata('id');

        if ($id == null || $id == "") {
            $this->session->set_flashdata('info', 'sessi berakhir silahkan login kembali');
            redirect('Login');
        }
    }


    public function index()
    {
        $data = array(
            'url'        => $this->uri->segment(2),
            'akun'       => $this->m_admin->getData("akun")->result()
        );
        $this->load->view('template/header', $data);
        $this->load->view('superadmin/admin', $data);
        $this->load->view('template/footer');
    }


    //reset password menjadi 123
    public function resetPassword($id)
    {
        $data = array(
            "password"      => md5(123)
        );
        $update = $this->m_admin->update($data, "akun", array("id" => $id));
        if ($update) {
            $this->session->set_flashdata('ok', 'password di reset');
            redirect('superadmin/Admin');
        }
    }


    //hapus akun administrator
    public function delete($id)
    {
        $update = $this->m_admin->delete("akun", array("id" => $id));
        if ($update) {
            $this->session->set_flashdata('del', 'akun di hapus');
            redirect('superadmin/Admin');
        }
    }

    //tambah administrator 
    public function input()
    {
        $user         = $this->input->post("username");
        $password    = md5($this->input->post("password"));
        $npk         = $this->input->post("npk");
        $cekdata     = $this->m_admin->cari(array("npk" => $npk), "akun")->num_rows();
        if ($cekdata > 0) {
            echo "user sudah ada";
        } else {
            $data = array(
                "nama"        => $user,
                "npk"        => $npk,
                "password"    => $password,
                "role_id"    => 1
            );
            $input = $this->m_admin->inputData($data, "akun");
            if ($input == true) {
                echo "sukses";
            } else {
                echo "gagal";
            }
        }
    }
}
