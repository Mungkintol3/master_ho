<?php
date_default_timezone_set('Asia/Jakarta');


function helper_log($npk, $nama,  $user, $info)
{
    $CI = &get_instance();
    $param['keterangan']    = $info;
    $param['npk']           = $CI->session->userdata('npk');
    $param['nama']          = $CI->session->userdata('nama');
    $param['tanggal']       = date('y-m-d H:i:s');
    $param['npk_user']      = $user;
    //load model
    $CI->load->model('m_admin');

    //panggil model
    $CI->m_admin->save_log($param);
}
