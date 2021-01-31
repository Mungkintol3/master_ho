<!DOCTYPE html>
<html>
<head>
	<title>SIMPEG</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/bootstrap.min.css') ?>">
	<script type="text/javascript" src="<?= base_url('assets/jquery.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/bootstrap.min.js') ?>"></script>
</head>
<body>
	<nav class="nav navbar">
		<ul>
			<li ><a href="<?= base_url('TambahKaryawan') ?>">Tambah Data Karyawan</a> </li>
			<li ><a href="<?= base_url('Jabatan/form_add') ?>">Tambah Data Jabatan</a> </li>
			<li ><a href="<?= base_url('Golongan/form_add') ?>">Tambah Data Golongan</a> </li>
			<li ><a href="<?= base_url('Golongan/add_histori_golongan_pegawai') ?>">Input Histori Data Golongan</a> </li>
			<li ><a href="<?= base_url('Penilaian_pegawai/add_histori_penilaian') ?>">Input Histori Penilaian Pegawai</a> </li>
			<li ><a href="<?= base_url('Poin_pegawai/add_histori_poin') ?>">Input Poin Penilaian Pegawai</a> </li>
			<li ><a href="<?= base_url('Surat_peringatan/form_add') ?>">Input SP</a> </li>
		</ul>
	</nav>