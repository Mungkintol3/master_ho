<?php


class Log extends CI_Controller
{

    public function index()
    {
        $data = array(
            'url'        => $this->uri->segment(2),
            'log'       => $this->m_admin->getData("log_aktivitas")->result()
        );
        $this->load->view('template/header', $data);
        $this->load->view('superadmin/log', $data);
        $this->load->view('template/footer');
    }
}
