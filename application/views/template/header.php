<?php

$akun = $this->m_admin->cari(array('id' => $this->session->userdata('id')), "akun")->row();
?>
<!-- 
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <!-- <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/img/') ?>sigap.png"> -->
  <link rel="icon" type="favicon" href="<?= base_url('assets/img/') ?>sigap.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Master Data HO
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!-- chartis -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/font-google.css" />
  <link rel="stylesheet" href="<?= base_url() ?>/assets/font-awesome/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url() ?>assets/css/material-dashboard.css" rel="stylesheet" />
  <!--  <script src="<?php echo base_url() ?>assets/js/core/jquery.min.js"></script> -->
  <script src="<?php echo base_url() ?>assets/js/jquery-3-1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="<?= base_url('assets/sweetalert2/') ?>sweetalert2.min.css">
  <script src="<?= base_url('assets/sweetalert2/') ?>sweetalert2.min.js"></script>


</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange" data-background-color="white" data-image="<?php echo base_url() ?>assets/img/sigap.png">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="<?php echo base_url('superadmin/dashboard') ?>" class="simple-text logo-normal">
          <img src="<?php echo base_url() ?>assets/img/sigap.png" height="50px" width="50px">
          <b>SISMORO</b>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">

          <div class="btn-group">
            <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons"></i>
              Input Data Karyawan
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo base_url('superadmin/Nilai_karyawan/add_histori_nilai') ?>">Input Penilaian Karyawan</a>
              <!-- <a class="dropdown-item" href="<?php echo base_url('superadmin/Poin_pegawai/add_histori_poin') ?>">Input Poin Karyawan</a> -->
              <!-- <a class="dropdown-item" href="<?= base_url('superadmin/Golongan/add_histori_golongan_pegawai') ?>">Input History Golongan</a> -->
              <!-- <a class="dropdown-item" href="<?= base_url('superadmin/Career') ?>">Input Career History</a> -->
              <a class="dropdown-item" href="<?= base_url('superadmin/Training_Histori/form_add') ?>">Input Histori Training</a>
              <a class="dropdown-item" href="<?= base_url('superadmin/Fasilitas/add_fasilitas') ?>">Input Fasilitas Karyawan</a>
              <a class="dropdown-item" href="<?= base_url('superadmin/Company') ?>">Input History Company</a>
              <a class="dropdown-item" href="<?= base_url('superadmin/Surat_peringatan/form_add') ?>">Input Surat Peringatan</a>
              <a class="dropdown-item" href="<?= base_url('superadmin/Human_assets_value/form_add') ?>">Input Human Assets Value</a>
              <a class="dropdown-item" href="<?= base_url('superadmin/Promosi/add_promosi_jabatan') ?>">Input Promosi Jabatan</a>
              <a class="dropdown-item" href="<?= base_url('superadmin/Promosi/add_mutasi_jabatan') ?>">Input Mutasi Jabatan</a>
              <a class="dropdown-item" href="<?= base_url('superadmin/Promosi/add_demosi_jabatan') ?>">Input Demosi Jabatan</a>
              <a class="dropdown-item" href="<?= base_url('superadmin/Divisi/add') ?>">Input Divisi & Departement</a>
              <a class="dropdown-item" href="<?= base_url('superadmin/Pendidikan/formupdate') ?>">Update Pendidikan</a>
            </div>
          </div>

          <li class="nav-item <?php if ($url == 'dashboard') {
                                echo 'active';
                              } ?>">
            <a class="nav-link" href="<?php echo base_url("superadmin/dashboard"); ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <!-- <li class="nav-item <?php if ($url == 'Log') {
                                echo 'active';
                              } ?>">
            <a class="nav-link" href="<?php echo base_url("superadmin/Log"); ?>">
              <i class="material-icons">dashboard</i>
              <p>Log</p>
            </a>
          </li> -->
          <li class="nav-item <?php if ($url == 'karyawan' || $url == 'TambahKaryawan') {
                                echo 'active';
                              } ?>">
            <a class="nav-link" href="<?php echo base_url() ?>superadmin/karyawan">
              <i class="material-icons">person</i>
              <p>Karyawan</p>
            </a>
          </li>
          <li class="nav-item <?php if ($url == 'Jabatan') {
                                echo 'active';
                              } ?>">
            <a class="nav-link" href="<?php echo base_url() ?>superadmin/Jabatan/">
              <i class="material-icons">markunread_mailbox</i>
              <p>Jabatan & Posisi </p>
            </a>
          </li>
          <!--  <li class="nav-item <?php if ($url == 'Golongan') {
                                      echo 'active';
                                    } ?>">
            <a class="nav-link" href="<?php echo base_url() ?>superadmin/Golongan">
              <i class="material-icons">input</i>
              <p>Golongan</p>
            </a>
          </li> -->

          <li class="nav-item <?php if ($url == 'Departement') {
                                echo 'active';
                              } ?>">
            <a class="nav-link" href="<?php echo base_url() ?>superadmin/Departement">
              <i class="material-icons">note_add</i>
              <p>Departement & Divisi</p>
            </a>
          </li>

          <li class="nav-item <?php if ($url == 'Update_pkwt') {
                                echo 'active';
                              } ?>">
            <a class="nav-link" href="<?= base_url('superadmin/Update_pkwt') ?>">
              <i class="material-icons">print</i>
              <p>Perbarui PKWT</p>
            </a>
          </li>

          <li class="nav-item <?php if ($url == 'Upload_berkas') {
                                echo 'active';
                              } ?>">
            <a class="nav-link" href="<?= base_url('superadmin/Upload_berkas') ?>">
              <i class="material-icons">queue</i>
              <p>Upload Berkas Karyawan</p>
            </a>
          </li>

          <li class="nav-item <?php if ($url == 'NPK') {
                                echo 'active';
                              } ?>">
            <a class="nav-link" href="<?= base_url('superadmin/NPK') ?>">
              <i class="material-icons">contact_mail</i>
              <p>Perbarui NPK</p>
            </a>
          </li>

          <li class="nav-item <?php if ($url == 'Keluarga') {
                                echo 'active';
                              } ?>">
            <a class="nav-link" href="<?= base_url('superadmin/Keluarga/form_add') ?>">
              <i class="material-icons">pregnant_woman</i>
              <p>Tambah Keluarga</p>
            </a>
          </li>
          <li class="nav-item <?php if ($url == 'Pinjaman_karyawan') {
                                echo 'active';
                              } ?>">
            <a class="nav-link" href="<?= base_url('superadmin/Pinjaman_karyawan/') ?>">
              <i class="material-icons">credit_card</i>
              <p>Peminjaman Karyawan</p>
            </a>
          </li>

          <li class="nav-item <?php if ($url == 'Admin') {
                                echo 'active';
                              } ?>">
            <a class="nav-link" href="<?= base_url('superadmin/Admin/') ?>">
              <i class="material-icons">credit_card</i>
              <p>Administrator</p>
            </a>
          </li>

        </ul>
      </div>
    </div>

    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;"><b>MASTER DATA KARYAWAN</b></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">

              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification"></span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <p>Nothing</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="<?= base_url('superadmin/Setting') ?>">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?= base_url('Logout') ?>">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <script>
        $(document).ready(function() {
          // Javascript method's body can be found in assets/js/demos.js
          md.initDashboardPageCharts();
        });
        $(document).ready(function() {
          $('#table_id').DataTable({
            "pagingType": "full_numbers"
          });
        });
      </script>