-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 08:01 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simpeg`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `npk` int(6) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role_id` int(1) DEFAULT NULL,
  `is_active` int(1) NOT NULL,
  `date_create` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `npk`, `nama`, `email`, `photo`, `password`, `role_id`, `is_active`, `date_create`) VALUES
(20, 220927, 'Murry Febriansyah Putra', 'murry.febrian@gmail.com', 'default.jpg', 'e10adc3949ba59abbe56e057f20f883e', 1, 1, '28-02-2021 10:55'),
(21, 220930, 'Murry', 'murryfebriansyah1@gmail.com', 'default.jpg', 'd41d8cd98f00b204e9800998ecf8427e', 1, 1, '28-02-2021 10:56'),
(22, 220931, 'MURRY FEBRIANSYAH PUTRA', 'murry.febrian@gmail.com', 'default.jpg', 'd41d8cd98f00b204e9800998ecf8427e', 1, 1, '28-02-2021 10:59');

-- --------------------------------------------------------

--
-- Table structure for table `demosi_jabatan`
--

CREATE TABLE `demosi_jabatan` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `npk` varchar(11) DEFAULT NULL,
  `demosi_jabatan` varchar(100) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demosi_jabatan`
--

INSERT INTO `demosi_jabatan` (`id`, `id_user`, `nama`, `npk`, `demosi_jabatan`, `tahun`, `tanggal`, `file`) VALUES
(9, 'e10adc3949ba59abbe56e057f20f883e', 'Dasep', '123456', 'Team Leader 1', 2021, '2021-01-01', '123456030719fae2e1f097f394b7f5813cf94286e2bb.pdf'),
(10, '220220', 'Murry', '220927', 'Admin 2', 2021, '2021-03-27', '220927074744b1dbf843bb4655ff823e5d1bcbb2af02.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `departement`
--

CREATE TABLE `departement` (
  `id` int(11) NOT NULL,
  `departement` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departement`
--

INSERT INTO `departement` (`id`, `departement`) VALUES
(1, 'GA'),
(2, 'Staff Operasional'),
(3, 'Koperasi'),
(4, 'Finance'),
(5, 'asdsadsa');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id` int(11) NOT NULL,
  `divisi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id`, `divisi`) VALUES
(1, 'Koperasi'),
(2, 'HC'),
(3, 'Operational'),
(4, 'GA '),
(5, 'Finance Accounting'),
(6, 'divisi');

-- --------------------------------------------------------

--
-- Table structure for table `histori_company`
--

CREATE TABLE `histori_company` (
  `id` int(11) NOT NULL,
  `npk` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `join_date` varchar(100) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `histori_company`
--

INSERT INTO `histori_company` (`id`, `npk`, `nama`, `id_user`, `company`, `join_date`, `tahun`) VALUES
(5, '220220', 'Murry', '220220', 'Sigap Prima Astrea', '2017-03-27', 2021),
(6, '220212', 'Febriansyah', '220212', 'SIGAP PRIMA ASTREA', '2021-04-30', 2021),
(7, '220212', 'Febriansyah', '220212', 'SIGAP GARDA PRATAMA', '2021-05-31', 2021),
(8, '220220', 'MURRY', '220220', 'SIGAP GARDA PRATAMA', '2021', 2021),
(9, '220212', 'FEBRIANSYAH', '220212', 'SIGAP PRIMA ASTREA', '2021', 2021),
(10, '220220', 'MURRY', '220220', 'SIGAP GARDA PRATAMA', '2018-04-12', 2021),
(11, '220212', 'FEBRIANSYAH', '220212', 'SIGAP GARDA PRATAMA', '2017-04-12', 2021),
(12, '220220', 'MURRY', '220220', 'masuk', '2021-04-12', 2021),
(13, '220212', 'FEBRIANSYAH', '220212', 'masuk', '2021-04-12', 2021),
(14, '220220', 'MURRY', '220220', 'masuk', '2020-04-12', 2021),
(15, '220212', 'FEBRIANSYAH', '220212', 'masuk', '2021-04-12', 2021),
(16, '220927', 'MURRY', '220220', 'masuk', '2021-04-12', 2021),
(17, '220212', 'FEBRIANSYAH', '220212', 'masuk', '2021-04-12', 2021),
(18, '220927', 'MURRY', '220220', 'ko gamasuk?', '2021-04-12', 2021),
(19, '220212', 'FEBRIANSYAH', '220212', 'tapi ini bisa', '2021-04-12', 2021),
(20, '220927', 'MURRY', '220220', 'ko gamasuk?', '2021-04-12', 2021),
(21, '220212', 'FEBRIANSYAH', '220212', 'tapi ini bisa', '2021-04-12', 2021);

-- --------------------------------------------------------

--
-- Table structure for table `histori_divisi`
--

CREATE TABLE `histori_divisi` (
  `id` int(11) NOT NULL,
  `npk` varchar(11) DEFAULT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `divisi` varchar(100) DEFAULT NULL,
  `departement` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `histori_divisi`
--

INSERT INTO `histori_divisi` (`id`, `npk`, `id_user`, `nama`, `divisi`, `departement`, `position`, `tahun`, `tanggal`) VALUES
(5, '220220', '220220', 'Murry', 'HC', 'Staff Operasional', 'Operational 1& 2 Staff', 2021, '2021-03-27');

-- --------------------------------------------------------

--
-- Table structure for table `histori_golongan`
--

CREATE TABLE `histori_golongan` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `npk` varchar(6) DEFAULT NULL,
  `gol_sebelumnya` varchar(255) DEFAULT NULL,
  `gol_update` varchar(100) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `berkas` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `histori_golongan`
--

INSERT INTO `histori_golongan` (`id`, `id_user`, `nama`, `npk`, `gol_sebelumnya`, `gol_update`, `tahun`, `tgl`, `berkas`) VALUES
(10, '220220', 'Murry', '220927', NULL, '4D', 2021, '2021-03-04', '220927074347b1dbf843bb4655ff823e5d1bcbb2af02.pdf'),
(11, '220220', 'Murry', '220927', NULL, '2F', 2021, '2021-03-27', '220927074744b1dbf843bb4655ff823e5d1bcbb2af02.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `histori_jabatan`
--

CREATE TABLE `histori_jabatan` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `npk` varchar(6) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jabatan_sebelumnya` varchar(255) DEFAULT NULL,
  `promosi_jabatan` varchar(255) DEFAULT NULL,
  `mutasi_jabatan` varchar(255) DEFAULT NULL,
  `demosi_jabatan` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `histori_karir`
--

CREATE TABLE `histori_karir` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `npk` int(6) DEFAULT NULL,
  `departement` varchar(100) DEFAULT NULL,
  `divisi` varchar(100) DEFAULT NULL,
  `posisi` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `histori_karir`
--

INSERT INTO `histori_karir` (`id`, `id_user`, `nama`, `npk`, `departement`, `divisi`, `posisi`, `tanggal`, `file`, `tahun`) VALUES
(5, '220220', 'Murry', 220927, 'Koperasi', 'Koperasi', 'BOD', '2021-03-27', '220927073434b1dbf843bb4655ff823e5d1bcbb2af02.pdf', 2021);

-- --------------------------------------------------------

--
-- Table structure for table `histori_nilai_karyawan`
--

CREATE TABLE `histori_nilai_karyawan` (
  `id` int(11) NOT NULL,
  `npk` varchar(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `nilai_pk` varchar(10) DEFAULT NULL,
  `point_pk` int(3) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `histori_nilai_karyawan`
--

INSERT INTO `histori_nilai_karyawan` (`id`, `npk`, `nama`, `id_user`, `nilai_pk`, `point_pk`, `tahun`, `tgl`) VALUES
(2, '220220', 'Murry', '220220', 'B', NULL, 2021, '2021-03-27'),
(3, '220927', 'Murry', '220220', 'B', NULL, 2021, '2021-03-27'),
(6, '220220', 'Murry', '220220', 'A', NULL, 2021, '2021-02-14'),
(7, '220220', 'Murry', '220220', 'A', NULL, 2022, '2022-02-14'),
(8, '220220', 'Murry', '220220', 'A', NULL, 2021, '2021-02-14'),
(9, '220220', 'Murry', '220220', 'A', NULL, 2022, '2022-02-14'),
(10, '220220', 'Murry', '220220', 'A', NULL, 2021, '2021-02-14'),
(11, '220220', 'Murry', '220220', 'A', NULL, 2022, '2022-02-14');

-- --------------------------------------------------------

--
-- Table structure for table `histori_npk`
--

CREATE TABLE `histori_npk` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `npk_lama` varchar(10) DEFAULT NULL,
  `npk_baru` varchar(10) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `histori_npk`
--

INSERT INTO `histori_npk` (`id`, `id_user`, `nama`, `npk_lama`, `npk_baru`, `tanggal`, `tahun`) VALUES
(1, '220220', 'Murry', '220927', '220220', '2021-03-27', 2021);

-- --------------------------------------------------------

--
-- Table structure for table `histori_pendidikan`
--

CREATE TABLE `histori_pendidikan` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `npk` varchar(7) DEFAULT NULL,
  `join` date DEFAULT NULL,
  `update` varchar(100) DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `histori_pkwt`
--

CREATE TABLE `histori_pkwt` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `pkwt_sebelumnya` varchar(50) DEFAULT NULL,
  `no_pkwt` varchar(20) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `histori_poin_karyawan`
--

CREATE TABLE `histori_poin_karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `npk` varchar(11) DEFAULT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `poin` varchar(10) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `histori_poin_karyawan`
--

INSERT INTO `histori_poin_karyawan` (`id`, `nama`, `npk`, `id_user`, `poin`, `tahun`, `tgl`) VALUES
(2, 'Murry', '220927', '220220', '8', 2021, '2021-03-26');

-- --------------------------------------------------------

--
-- Table structure for table `histori_promosi`
--

CREATE TABLE `histori_promosi` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `latest_promosi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `histori_surat_peringatan`
--

CREATE TABLE `histori_surat_peringatan` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `npk` varchar(255) DEFAULT NULL,
  `jenis_surat_peringatan` varchar(255) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `histori_surat_peringatan`
--

INSERT INTO `histori_surat_peringatan` (`id`, `id_user`, `nama`, `npk`, `jenis_surat_peringatan`, `tgl`, `tahun`, `keterangan`, `file`) VALUES
(4, '220220', 'Murry', '220927', 'SP1', '2021-03-31', 2021, 'Tidur waktu jam kerja', '220927013959b1dbf843bb4655ff823e5d1bcbb2af02.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `histori_training`
--

CREATE TABLE `histori_training` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `npk` varchar(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis_training` varchar(40) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `histori_training`
--

INSERT INTO `histori_training` (`id`, `id_user`, `npk`, `nama`, `jenis_training`, `tahun`, `tgl`, `keterangan`, `file`) VALUES
(10, '220220', '220927', 'Murry', 'K3', 2021, '2021-03-27', 'Ada', '220927K3b1dbf843bb4655ff823e5d1bcbb2af02.pdf'),
(11, '220212', '220212', 'Febriansyah', 'K3', 2021, '2021-04-20', 'Ada', '220212K34734e651087d78be0cab9b58148a2769.pdf'),
(12, '220220', '220927', 'Murry', 'K3', 2021, '2021-04-30', 'Ada', '220927K34734e651087d78be0cab9b58148a2769.pdf'),
(13, '220220', '220927', 'Murry', 'GADUT', 2021, '2021-04-30', 'Ada', '220927GADUT4734e651087d78be0cab9b58148a2769.pdf'),
(14, '220220', '220927', 'Murry', 'K3', 2021, '2021-04-13', 'Ada', '220927K34734e651087d78be0cab9b58148a27691.pdf'),
(15, '220220', '220927', 'Murry', 'K3', 2021, '2021-04-24', 'Ada', '220927K34734e651087d78be0cab9b58148a27692.pdf'),
(28, '220220', '220927', 'Murry', 'Gada Pratama', 2018, '2018-08-29', 'Tidak Ada Sertifikat', NULL),
(29, '220212', '220212', 'Febriansyah', 'Gada Media', 2018, '2018-08-29', 'Tidak Ada Sertifikat', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `human_value_assets`
--

CREATE TABLE `human_value_assets` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `npk` varchar(100) DEFAULT NULL,
  `asset_value` varchar(100) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `kekuatan` text DEFAULT NULL,
  `kelemahan` text DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `human_value_assets`
--

INSERT INTO `human_value_assets` (`id`, `id_user`, `nama`, `npk`, `asset_value`, `tahun`, `kekuatan`, `kelemahan`, `keterangan`, `tgl`) VALUES
(1, '220220', 'Murry', '220927', 'Potensial Kandidat', 2021, 'Bisa melakukan segala hal', 'gabisa benerin ac', 'Mungkin harus ikut training benerin ac', '2021-03-27'),
(2, '220212', 'Febriansyah', '220212', 'Star', 2021, 'Bisa Melakukan apa saja', 'Gabisa benerin printer, gabisa benerin ac', 'harus di ikutin pelatihan printer dan ac, biar berguna', '2021-02-14'),
(3, '220220', 'Murry', '220927', 'DeadWood', 2022, 'Ga ada kekuatan apa apa', 'Ga bisa di andelin, nyebelin, dan masih banyak lagi', 'Pecat aja, bikin bangkrut doang', '2022-02-14'),
(4, '220212', 'Febriansyah', '220212', 'Star', 2021, 'Bisa Melakukan apa saja', 'Gabisa benerin printer, gabisa benerin ac', 'harus di ikutin pelatihan printer dan ac, biar berguna', '2021-02-14'),
(5, '220220', 'Murry', '220927', 'DeadWood', 2022, 'Ga ada kekuatan apa apa', 'Ga bisa di andelin, nyebelin, dan masih banyak lagi', 'Pecat aja, bikin bangkrut doang', '2022-02-14');

-- --------------------------------------------------------

--
-- Table structure for table `mutasi_jabatan`
--

CREATE TABLE `mutasi_jabatan` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `npk` varchar(11) DEFAULT NULL,
  `mutasi` varchar(255) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `id_user` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `npk` varchar(100) DEFAULT NULL,
  `pendidikan` varchar(5) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `institusi` varchar(100) DEFAULT NULL,
  `thn_lulus` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `id_user`, `nama`, `npk`, `pendidikan`, `jurusan`, `institusi`, `thn_lulus`) VALUES
(24, '220212', 'Febriansyah', '220212', 'SMA', 'IPA', 'SMK DWIPA', '2017'),
(25, '220220', 'Murry', '220220', 'SMK', 'IPS', 'SMAN 1 ', '2015'),
(26, '220220', 'Murry', '220220', 'S1', 'ILMU ILMU BIOLOGI', 'Bina Nusantara', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `posisi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `posisi`) VALUES
(1, 'Koperasi Staff'),
(2, 'Operational 1& 2 Staff'),
(3, 'GA Dept Head'),
(4, 'Finance Sect Head'),
(5, 'HC Ops Staff'),
(7, 'General Admin');

-- --------------------------------------------------------

--
-- Table structure for table `promosi_jabatan`
--

CREATE TABLE `promosi_jabatan` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `npk` varchar(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `latest_promosi` varchar(100) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promosi_jabatan`
--

INSERT INTO `promosi_jabatan` (`id`, `id_user`, `npk`, `nama`, `tanggal`, `tahun`, `latest_promosi`, `file`) VALUES
(8, '220220', '220927', 'Murry', '2021-03-04', 2021, 'Team Leader 2', '220927074347b1dbf843bb4655ff823e5d1bcbb2af02.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berkas`
--

CREATE TABLE `tbl_berkas` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `npk` int(8) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `ktp` varchar(255) DEFAULT NULL,
  `kartu_keluarga` varchar(255) DEFAULT NULL,
  `buku_rekening` varchar(255) DEFAULT NULL,
  `surat_lamaran` varchar(255) DEFAULT NULL,
  `daftar_riwayat_hidup` varchar(255) DEFAULT NULL,
  `surat_domisili` varchar(255) DEFAULT NULL,
  `npwp` varchar(255) DEFAULT NULL,
  `skck` varchar(255) DEFAULT NULL,
  `surat_kesehatan` varchar(255) DEFAULT NULL,
  `ijazah_sekolah` varchar(255) DEFAULT NULL,
  `foto_karyawan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id` int(11) NOT NULL,
  `nama_jabatan` varchar(100) DEFAULT NULL,
  `range` varchar(100) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id`, `nama_jabatan`, `range`, `keterangan`) VALUES
(2, 'Admin 2', '2F-3F', 'kacung'),
(3, 'Team Leader 1', '2F-3E', ''),
(4, 'Team Leader 2', '3A-3F', ''),
(5, 'Analyst', '3E-4D', ''),
(6, 'Section Head', '4A-4F', ''),
(7, 'Department', '4D-5B', ''),
(8, 'Division Head', '5A-6A', ''),
(10, 'Admin1', '2A-2F', 'Susah\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `npk` int(8) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `divisi` varchar(100) DEFAULT NULL,
  `departement` varchar(150) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `wilayah` varchar(100) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `martial_status` varchar(30) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `gol_darah` varchar(3) DEFAULT NULL,
  `no_ktp` varchar(30) DEFAULT NULL,
  `no_kk` varchar(30) DEFAULT NULL,
  `bpjs_kesehatan` varchar(40) DEFAULT NULL,
  `bpjs_tenagakerja` varchar(40) DEFAULT NULL,
  `no_dplk` varchar(50) DEFAULT NULL,
  `no_npwp` varchar(60) DEFAULT NULL,
  `nama_bank` varchar(60) DEFAULT NULL,
  `no_rekening` varchar(100) DEFAULT NULL,
  `status_pajak` varchar(10) DEFAULT NULL,
  `status_kawin` varchar(40) DEFAULT NULL,
  `no_pkwt` varchar(100) DEFAULT NULL,
  `promosi_jabatan` varchar(100) DEFAULT NULL,
  `mutasi_jabatan` varchar(100) DEFAULT NULL,
  `demosi_jabatan` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `employment_status` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `join_date` varchar(20) DEFAULT NULL,
  `length_of_service` varchar(100) DEFAULT NULL,
  `education_join` varchar(100) DEFAULT NULL,
  `education_update` varchar(100) DEFAULT NULL,
  `kel_jabatan` varchar(100) DEFAULT NULL,
  `gol_kerja` varchar(100) DEFAULT NULL,
  `range_golongan` varchar(100) DEFAULT NULL,
  `latest_promotion` varchar(100) DEFAULT NULL,
  `karir` varchar(100) DEFAULT NULL,
  `alamat_ktp` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `kontak_darurat` varchar(100) DEFAULT NULL,
  `latest_promosi` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`id`, `id_user`, `npk`, `nama`, `divisi`, `departement`, `position`, `wilayah`, `gender`, `martial_status`, `address`, `tgl_lahir`, `age`, `no_telp`, `email`, `gol_darah`, `no_ktp`, `no_kk`, `bpjs_kesehatan`, `bpjs_tenagakerja`, `no_dplk`, `no_npwp`, `nama_bank`, `no_rekening`, `status_pajak`, `status_kawin`, `no_pkwt`, `promosi_jabatan`, `mutasi_jabatan`, `demosi_jabatan`, `status`, `employment_status`, `company`, `join_date`, `length_of_service`, `education_join`, `education_update`, `kel_jabatan`, `gol_kerja`, `range_golongan`, `latest_promotion`, `karir`, `alamat_ktp`, `tempat_lahir`, `kontak_darurat`, `latest_promosi`, `photo`) VALUES
(21, '220212', 220212, 'Febriansyah', NULL, NULL, NULL, 'Head Office', 'Laki-Laki', 'Single', 'BLOK KAMIS, RT 004/RW 002, KEL. MAJA UTARA, KEC. MAJA', '1999-04-01', 51, '0821-1285-0847', 'a@gmail.com', 'A', '3175042312881012', '3175042312881088', '000124567891', '120J12345', '0001G31219800', '246155097024000', 'Bank Central Asia', '6930347998', 'TK/0', 'LAJANG', '123456', NULL, NULL, NULL, NULL, 'Permanent Employee', 'tapi ini bisa', '2021-04-12', NULL, 'SMA', 'SMA', 'Junior Analyst', NULL, NULL, NULL, NULL, 'Priuk Jakarta Utara', 'Jakarta', '01212121212', NULL, NULL),
(22, '220220', 220927, 'Murry', 'Koperasi', 'Koperasi', 'BOD', 'Head Offie', 'Laki-Laki', 'Single', 'Lodan Dalam II C RT 06 / RW 08 KEL.ANCOL JAKARTA UTARA', '1998-04-13', 21, '0812-1212-2244', 'murrry@gmail.com', 'AB', '3175042312881111', '3175042312881089', '000124567892', '120J12344', '0001G31219801', '246155097024001', 'Bank Central Asia', '6930347991', 'TK/0', 'KAWIN', '123457', 'Team Leader 2', NULL, 'Admin 2', 'Meet', 'Permanent Employee', 'Sigap Prima Astrea', '2021-03-27', NULL, 'SMK', 'S1', 'Admin 2', '2F', '2F-3F', NULL, NULL, 'Ancol Jakarta Utara', 'Bandung', '0121212121', '2021-03-27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keluarga`
--

CREATE TABLE `tbl_keluarga` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `npk` varchar(11) DEFAULT NULL,
  `nama_karyawan` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `no_kk` varchar(255) DEFAULT NULL,
  `bpjs_kesehatan` varchar(255) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `buku_nikah` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `npk` int(6) DEFAULT NULL,
  `pembayaran_ke` int(3) DEFAULT NULL,
  `jumlah_bayar` int(100) DEFAULT NULL,
  `bunga` int(100) DEFAULT NULL,
  `pokok` int(100) DEFAULT NULL,
  `id_pinjam` varchar(100) DEFAULT NULL,
  `tanggal` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`id`, `id_user`, `nama`, `npk`, `pembayaran_ke`, `jumlah_bayar`, `bunga`, `pokok`, `id_pinjam`, `tanggal`) VALUES
(18, '220220', 'Murry', 220927, 1, 669999999, 666666667, 3333333, '220927Feb07195121', '2021-02-28'),
(19, '220212', 'Febriansyah', 220212, 1, 1749999, 83333, 1666667, '220212Feb08012921', '2021-02-28'),
(20, '220220', 'Murry', 220927, 2, 669999999, 666666667, 3333333, '220927Feb07195121', '2021-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peminjaman`
--

CREATE TABLE `tbl_peminjaman` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `npk` int(6) DEFAULT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `vendor_pinjam` varchar(60) DEFAULT NULL,
  `id_pinjam` varchar(60) DEFAULT NULL,
  `total_pinjam` int(10) DEFAULT NULL,
  `persentase_bunga` varchar(100) DEFAULT NULL,
  `total_bunga` int(100) DEFAULT NULL,
  `pokok` int(20) DEFAULT NULL,
  `tenor` int(20) DEFAULT NULL,
  `setor_perbulan` int(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_peminjaman`
--

INSERT INTO `tbl_peminjaman` (`id`, `nama`, `npk`, `id_user`, `vendor_pinjam`, `id_pinjam`, `total_pinjam`, `persentase_bunga`, `total_bunga`, `pokok`, `tenor`, `setor_perbulan`, `tanggal`, `file`, `status`) VALUES
(13, 'Murry', 220927, '220220', 'KAI', '220927Feb07195121', 10000000, '20000%', 666666667, 3333333, 3, 669999999, '2021-03-04', '220927071951b1dbf843bb4655ff823e5d1bcbb2af02.pdf', NULL),
(14, 'Febriansyah', 220212, '220212', 'KOP SIGAP', '220212Feb08012921', 10000000, '5%', 83333, 1666667, 6, 1749999, '2021-03-27', '220212080129b1dbf843bb4655ff823e5d1bcbb2af02.pdf', NULL),
(15, 'Murry', 220927, '220220', 'KAI', '220927Apr09275821', 10000000, '%', NULL, 416667, 24, 416667, '2021-04-27', '2209270927584734e651087d78be0cab9b58148a2769.pdf', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demosi_jabatan`
--
ALTER TABLE `demosi_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histori_company`
--
ALTER TABLE `histori_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histori_divisi`
--
ALTER TABLE `histori_divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histori_golongan`
--
ALTER TABLE `histori_golongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histori_jabatan`
--
ALTER TABLE `histori_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histori_karir`
--
ALTER TABLE `histori_karir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histori_nilai_karyawan`
--
ALTER TABLE `histori_nilai_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histori_npk`
--
ALTER TABLE `histori_npk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histori_pendidikan`
--
ALTER TABLE `histori_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histori_pkwt`
--
ALTER TABLE `histori_pkwt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histori_poin_karyawan`
--
ALTER TABLE `histori_poin_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histori_promosi`
--
ALTER TABLE `histori_promosi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histori_surat_peringatan`
--
ALTER TABLE `histori_surat_peringatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histori_training`
--
ALTER TABLE `histori_training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `human_value_assets`
--
ALTER TABLE `human_value_assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mutasi_jabatan`
--
ALTER TABLE `mutasi_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promosi_jabatan`
--
ALTER TABLE `promosi_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_keluarga`
--
ALTER TABLE `tbl_keluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `demosi_jabatan`
--
ALTER TABLE `demosi_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `departement`
--
ALTER TABLE `departement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `histori_company`
--
ALTER TABLE `histori_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `histori_divisi`
--
ALTER TABLE `histori_divisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `histori_golongan`
--
ALTER TABLE `histori_golongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `histori_jabatan`
--
ALTER TABLE `histori_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `histori_karir`
--
ALTER TABLE `histori_karir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `histori_nilai_karyawan`
--
ALTER TABLE `histori_nilai_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `histori_npk`
--
ALTER TABLE `histori_npk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `histori_pendidikan`
--
ALTER TABLE `histori_pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `histori_pkwt`
--
ALTER TABLE `histori_pkwt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `histori_poin_karyawan`
--
ALTER TABLE `histori_poin_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `histori_promosi`
--
ALTER TABLE `histori_promosi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `histori_surat_peringatan`
--
ALTER TABLE `histori_surat_peringatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `histori_training`
--
ALTER TABLE `histori_training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `human_value_assets`
--
ALTER TABLE `human_value_assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mutasi_jabatan`
--
ALTER TABLE `mutasi_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `promosi_jabatan`
--
ALTER TABLE `promosi_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_keluarga`
--
ALTER TABLE `tbl_keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
