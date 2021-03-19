-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2021 at 08:12 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

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
  `photo` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role_id` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `npk`, `nama`, `photo`, `password`, `role_id`) VALUES
(1, 220221, 'Administrator', NULL, '202cb962ac59075b964b07152d234b70', 1),
(10, 232324, 'Dasep', NULL, '202cb962ac59075b964b07152d234b70', 1);

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
(9, 'e10adc3949ba59abbe56e057f20f883e', 'Dasep', '123456', 'Team Leader 1', 2021, '2021-01-01', '123456030719fae2e1f097f394b7f5813cf94286e2bb.pdf');

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
(4, 'Finance');

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
(5, 'Finance Accounting');

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
(4, '123456', 'Dasep', '123456', 'SGP', '2021-03-12', 2021);

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
(3, '123456', '123456', 'Dasep', 'Koperasi', 'GA', 'Operational 1& 2 Staff', 2021, '2021-03-12');

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
(10, '123456', 'Dasep', '123456', NULL, '2B', 2021, '2021-03-12', '123456061600fae2e1f097f394b7f5813cf94286e2bb.pdf');

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
(5, '123456', 'Dasep', 123456, 'GA', 'GA', 'GA', '2021-03-12', '123456061532fae2e1f097f394b7f5813cf94286e2bb.pdf', 2021);

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
  `tahun` year(4) DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `histori_nilai_karyawan`
--

INSERT INTO `histori_nilai_karyawan` (`id`, `npk`, `nama`, `id_user`, `nilai_pk`, `tahun`, `tgl`) VALUES
(1, '123456', 'Dasep', '123456', 'A', 2021, '2021-03-12');

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
(1, 'Dasep', '123456', '123456', '12', 2021, '2021-03-12');

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
(4, '123456', 'Dasep', '123456', 'SP 1', '2021-03-12', 2021, 'tidur', '123456122514fae2e1f097f394b7f5813cf94286e2bb.pdf');

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
  `keterangan` varchar(100) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `histori_training`
--

INSERT INTO `histori_training` (`id`, `id_user`, `npk`, `nama`, `jenis_training`, `tahun`, `tgl`, `keterangan`, `file`) VALUES
(10, '123456', '123456', 'Dasep', 'K3', 2021, '2021-03-12', 'Ada', '123456K3fae2e1f097f394b7f5813cf94286e2bb.pdf');

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
  `kekuatan` varchar(100) DEFAULT NULL,
  `kelemahan` varchar(100) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `human_value_assets`
--

INSERT INTO `human_value_assets` (`id`, `id_user`, `nama`, `npk`, `asset_value`, `tahun`, `kekuatan`, `kelemahan`, `keterangan`, `tgl`) VALUES
(1, '123456', 'Dasep', '123456', 'Top Performers', 2021, 'lari nya kenceng', 'tidur mulu', '', '2021-03-12'),
(2, '565655', 'Rama Hidayat', '565655', 'Star', 2021, 'lari nya kenceng', 'tidur mulu', 'tttt', '2021-03-10');

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
(23, '123456', 'Dasep', '123456', 'SMA', 'IPA', 'SMK DWIPA', '2017'),
(24, '220220', 'Murry', '220220', 'SMK', 'IPS', 'SMAN 1 ', '2015'),
(25, '123456', 'Dasep', '123456', 'D3', 'Manajemen Informatika', 'STIMIK SWADHARMA', '2021'),
(26, '220556', 'Risma', '220556', 'SMA', 'IPA', 'SMK DWIPA', '2014'),
(27, '565655', 'Rama Hidayat', '565655', 'D1', 'IPS', 'SMAN 1 ', '2015'),
(28, '225655', 'Ranti', '225655', 'S2', 'IPS', 'SMAN 1 ', '2015'),
(29, '552552', 'Bayu Adji', '552552', 'D4', 'IPS', 'SMAN 1 ', '2015');

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
(5, 'HC Ops Staff');

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
(8, '123456', '123456', 'Dasep', '2021-03-12', 2021, 'Team Leader 1', '123456061600fae2e1f097f394b7f5813cf94286e2bb.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berkas`
--

CREATE TABLE `tbl_berkas` (
  `id_user` int(11) NOT NULL,
  `npk` int(6) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `npwp` varchar(255) DEFAULT NULL,
  `ktp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_berkas`
--

INSERT INTO `tbl_berkas` (`id_user`, `npk`, `nama`, `npwp`, `ktp`) VALUES
(123456, 123456, 'Dasep', NULL, NULL);

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
(1, 'Admin 1', '2B-3B', ''),
(2, 'Admin 2', '2F-3F', ''),
(3, 'Team Leader 1', '2F-3E', ''),
(4, 'Team Leader 2', '3A-3F', ''),
(5, 'Analyst', '3E-4D', ''),
(6, 'Section Head', '4A-4F', ''),
(7, 'Department', '4D-5B', ''),
(8, 'Division Head', '5A-6A', '');

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
(25, '123456', 123456, 'Dasep', 'Koperasi', 'GA', 'Operational 1& 2 Staff', 'Head Office', 'Laki-Laki', 'Single', 'BLOK KAMIS, RT 004/RW 002, KEL. MAJA UTARA, KEC. MAJA', '1999-04-13', 51, '0821-1285-0847', 'a@gmail.com', 'A', '3175042312881012', '3175042312881088', '000124567891', '120J12345', '0001G31219800', '246155097024000', 'Bank Central Asia', '6930347998', 'TK/0', 'LAJANG', '123456', 'Team Leader 1', NULL, NULL, 'Meet', 'Permanent Employee', 'SGP', '2021-03-12', NULL, 'SMA', 'D3', 'Team Leader 1', '2B', '2F-3F', NULL, NULL, 'Priuk Jakarta Utara', 'Jakarta', '01212121212', '2021-03-12', NULL),
(26, '220220', 220220, 'Murry', NULL, NULL, NULL, 'Head Offie', 'Laki-Laki', 'Single', 'Lodan Dalam II C RT 06 / RW 08 KEL.ANCOL JAKARTA UTARA', '1998-02-14', 21, '0812-1212-2244', 'murrry@gmail.com', 'AB', '3175042312881111', '3175042312881089', '000124567892', '120J12344', '0001G31219801', '246155097024001', 'Bank Central Asia', '6930347991', 'TK/0', 'KAWIN', '123457', NULL, NULL, NULL, NULL, 'Permanent Employee', NULL, '2011/11/06', NULL, 'S1', 'S1', 'Operational', NULL, NULL, NULL, NULL, 'Ancol Jakarta Utara', 'Bandung', '0121212121', NULL, NULL),
(27, '220556', 220556, 'Risma', NULL, NULL, NULL, 'Head Office', 'Laki-Laki', 'Single', 'BLOK KAMIS, RT 004/RW 002, KEL. MAJA UTARA, KEC. MAJA', '1980-04-01', 51, '0821-1285-0847', 'a@gmail.com', 'A', '3175042312881010', '3175042312881080', '000124567899', '12012340', '0001G31219800', '246155097024000', 'Bank Central Asia', '6930347998', 'TK/0', 'LAJANG', '123456', NULL, NULL, NULL, NULL, 'Permanent Employee', NULL, '2014/11/12', NULL, 'SMA', 'SMA', 'Junior Analyst', NULL, NULL, NULL, NULL, 'Priuk Jakarta Utara', 'Jakarta', '01212121212', NULL, NULL),
(28, '565655', 565655, 'Rama Hidayat', NULL, NULL, NULL, 'Head Offie', 'Laki-Laki', 'Single', 'Lodan Dalam II C RT 06 / RW 08 KEL.ANCOL JAKARTA UTARA', '1989-04-13', 6, '0812-1212-2244', 'murrry@gmail.com', 'AB', '3175042312881113', '3175042312881081', '000124567856', '12012341', '0001G31219801', '246155097024001', 'Bank Central Asia', '6930347991', 'TK/0', 'KAWIN', '123457', NULL, NULL, NULL, NULL, 'Permanent Employee', NULL, '2011/11/06', NULL, 'D4', 'D4', 'Operational', NULL, NULL, NULL, NULL, 'Ancol Jakarta Utara', 'Bandung', '0121212121', NULL, NULL),
(29, '225655', 225655, 'Ranti', NULL, NULL, NULL, 'Head Offie', 'Laki-Laki', 'Single', 'Lodan Dalam II C RT 06 / RW 08 KEL.ANCOL JAKARTA UTARA', '1989-04-13', 6, '0812-1212-2244', 'murrry@gmail.com', 'AB', '3175042312881114', '3175042312881083', '000124567894', '12012345', '0001G31219801', '246155097024001', 'Bank Central Asia', '6930347993', 'TK/0', 'KAWIN', '123457', NULL, NULL, NULL, NULL, 'Permanent Employee', NULL, '2011/11/06', NULL, 'S2', 'S2', 'Operational', NULL, NULL, NULL, NULL, 'Ancol Jakarta Utara', 'Bandung', '0121212121', NULL, NULL),
(30, '552552', 552552, 'Bayu Adji', NULL, NULL, NULL, 'Head Offie', 'Laki-Laki', 'Single', 'Lodan Dalam II C RT 06 / RW 08 KEL.ANCOL JAKARTA UTARA', '1995-04-13', 6, '0812-1212-2244', 'murrry@gmail.com', 'AB', '3175042312881115', '3175042312881084', '000124567895', '12012346', '0001G31219801', '246155097024001', 'Bank Central Asia', '6930347992', 'TK/0', 'KAWIN', '123457', NULL, NULL, NULL, NULL, 'Permanent Employee', NULL, '2011/11/06', NULL, 'D4', 'D4', 'Operational', NULL, NULL, NULL, NULL, 'Ancol Jakarta Utara', 'Bandung', '0121212121', NULL, NULL);

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
  `nik` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_keluarga`
--

INSERT INTO `tbl_keluarga` (`id`, `id_user`, `npk`, `nama_karyawan`, `nama`, `status`, `no_kk`, `bpjs_kesehatan`, `nik`) VALUES
(9, '123456', '123456', 'Dasep', 'Ayu Safitri', 'Istri', '76576767', '4554545', '456656');

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
  ADD PRIMARY KEY (`id_user`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `demosi_jabatan`
--
ALTER TABLE `demosi_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `departement`
--
ALTER TABLE `departement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `histori_company`
--
ALTER TABLE `histori_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `histori_divisi`
--
ALTER TABLE `histori_divisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `histori_golongan`
--
ALTER TABLE `histori_golongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `histori_npk`
--
ALTER TABLE `histori_npk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `human_value_assets`
--
ALTER TABLE `human_value_assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mutasi_jabatan`
--
ALTER TABLE `mutasi_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `promosi_jabatan`
--
ALTER TABLE `promosi_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_keluarga`
--
ALTER TABLE `tbl_keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
