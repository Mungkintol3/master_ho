-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 05:08 PM
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
(1, 220927, 'Murry', 'murry.febrian@gmail.com', 'default.jpg', '70c4f0ada9e26cd555d9bc9f5dbbecf3', 1, 1, '03-06-2021 04:08'),
(5, 123456, 'Murray', 'murry.febrian@gmail.com', 'default.jpg', 'd41d8cd98f00b204e9800998ecf8427e', 1, 1, '06-06-2021 20:21');

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
(1, 'Market Research'),
(2, 'Understanding Market Segments'),
(3, 'Product Decisions'),
(4, 'Promotion Decisions'),
(5, 'Price Decisions'),
(6, 'Product Distribution ');

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
(1, 'Production'),
(2, 'Research and Development (often abbreviated to R'),
(3, 'Purchasing'),
(4, 'Human Resource Management'),
(5, 'Accounting and Finance.');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(2) NOT NULL,
  `fasilitas` varchar(255) DEFAULT NULL,
  `aktif_klaim` varchar(255) DEFAULT NULL,
  `periode_klaim` varchar(100) DEFAULT NULL,
  `golongan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `fasilitas`, `aktif_klaim`, `periode_klaim`, `golongan`) VALUES
(1, 'Kacamata', 'masa kerja +1', 'masa kerja +2', 'Semua'),
(2, 'Handphone', 'masa kerja +1', 'masa kerja +2', 'BOD , Kasie , Kadept'),
(3, 'COP', 'masa kerja +1', 'Kredit Selesai', 'BOD , Kasie , Kadept'),
(4, 'MOP', 'masa kerja +1', 'Kredit Selesai', 'BOD , Kasie , Kadept');

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
(2, '220220', '220220', 'Murry', 'Research and Development (often abbreviated to R', 'Understanding Market Segments', 'Executive Secretary', 2021, '2021-06-25'),
(3, '221123', '221123', 'Sukijah', 'Purchasing', 'Product Decisions', 'Front Office Manager', 2021, '2021-06-25'),
(4, '224452', '224452', 'Suminep', 'Human Resource Management', 'Promotion Decisions', 'Mining Engineer', 2021, '2021-06-25'),
(5, '224532', '224532', 'Susanto', 'Accounting and Finance.', 'Product Distribution', 'Environmental Engineer', 2021, '2021-06-25');

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
(1, '220220', 'Murry', '987654', '220220', '2021-05-22', 2021);

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

-- --------------------------------------------------------

--
-- Table structure for table `log_aktivitas`
--

CREATE TABLE `log_aktivitas` (
  `id` int(11) NOT NULL,
  `npk` int(6) DEFAULT NULL,
  `nama` varchar(60) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `npk_user` int(6) DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_aktivitas`
--

INSERT INTO `log_aktivitas` (`id`, `npk`, `nama`, `tanggal`, `npk_user`, `keterangan`) VALUES
(1, 220927, 'Murry', '2021-06-03 08:40:47', 123456, 'Ganti divisi dan departement terbaru karyawan atas npk 123456 - Dasep'),
(2, 220927, 'Murry', '2021-06-03 08:41:03', 220220, 'Ganti divisi dan departement terbaru karyawan atas npk 220220 - Murry'),
(3, 220927, 'Murry', '2021-06-03 08:41:20', 221123, 'Ganti divisi dan departement terbaru karyawan atas npk 221123 - Sukijah'),
(4, 220927, 'Murry', '2021-06-03 08:41:43', 224452, 'Ganti divisi dan departement terbaru karyawan atas npk 224452 - Suminep'),
(5, 220927, 'Murry', '2021-06-03 08:41:59', 224532, 'Ganti divisi dan departement terbaru karyawan atas npk 224532 - Susanto'),
(6, 220927, 'Murry', '2021-06-06 20:32:53', 220220, 'Perbarui NPK karyawan atas npk 220220 - Murry');

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
(2, '220220', 'Murry', '220220', 'SMK', 'IPS', 'SMAN 1 ', '2015'),
(3, '221123', 'Sukijah', '221123', 'SMA', 'IPA', 'SMAN 18', '2017'),
(4, '224452', 'Suminep', '224452', 'SMA', 'IPA', 'SMAN 8', '2017'),
(5, '224532', 'Susanto', '224532', 'SMA', 'IPA', 'SMAN 10', '2017'),
(6, '220220', 'Murry', '220220', 'SMK', 'IPS', 'SMAN 1 ', '2015');

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
(1, 'Business Consultant'),
(2, 'Executive Secretary'),
(3, 'Front Office Manager'),
(4, 'Mining Engineer'),
(5, 'Petroleum Engineer'),
(6, 'Environmental Engineer');

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
-- Table structure for table `tbl_fasilitasi`
--

CREATE TABLE `tbl_fasilitasi` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `npk` int(8) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `fasilitas` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
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
(1, 'Administrative Work', '3A-3F', ''),
(2, 'Engineering', '3F-4D', ''),
(3, 'Financial and Accounting', '3A-3B', ''),
(4, 'Human Resource', '4A-4D', ''),
(5, 'Marketing', '3A-3C', '');

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
  `fasilitas` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`id`, `id_user`, `npk`, `nama`, `divisi`, `departement`, `position`, `wilayah`, `gender`, `martial_status`, `address`, `tgl_lahir`, `age`, `no_telp`, `email`, `gol_darah`, `no_ktp`, `no_kk`, `bpjs_kesehatan`, `bpjs_tenagakerja`, `no_dplk`, `no_npwp`, `nama_bank`, `no_rekening`, `status_pajak`, `status_kawin`, `no_pkwt`, `promosi_jabatan`, `mutasi_jabatan`, `demosi_jabatan`, `status`, `employment_status`, `company`, `join_date`, `length_of_service`, `education_join`, `education_update`, `kel_jabatan`, `gol_kerja`, `range_golongan`, `latest_promotion`, `karir`, `alamat_ktp`, `tempat_lahir`, `kontak_darurat`, `latest_promosi`, `fasilitas`, `photo`) VALUES
(2, '220220', 987654, 'Murry', 'Research and Development (often abbreviated to R', 'Understanding Market Segments', 'Executive Secretary', 'Head Office', 'Laki-Laki', 'Single', 'BLOK KAMIS, RT 004/RW 002, KEL. MAJA UTARA, KEC. MAJA', '1998-04-13', 23, '0812-1212-2244', 'b@gmail.com', 'B', '3175042312881111', '3175042312881089', '000124567892', '120J12344', '0001G31219801', '246155097024001', 'Bank Central Asia', '6930347991', 'TK/0', 'LAJANG', '789101', NULL, NULL, NULL, NULL, 'Permanent Employee', NULL, '2011/11/06', NULL, 'SMK', 'SMK', 'Operational', NULL, NULL, NULL, NULL, 'Ancol Jakarta Utara', 'Bandung', '0121212121', NULL, NULL, 'sigap.png'),
(3, '221123', 221123, 'Sukijah', 'Purchasing', 'Product Decisions', 'Front Office Manager', 'Head Office', 'Laki-Laki', 'Single', 'BLOK BARAT, RT 004/RW 002, KEL. MAJA UTARA, KEC. MAJA', '1999-04-01', 22, '0821-1285-0847', 'c@gmail.com', 'A', '3175042312881012', '3175042312881088', '000124567891', '120J12345', '0001G31219800', '246155097024000', 'Bank Central Asia', '6930347998', 'TK/0', 'LAJANG', '122734', NULL, NULL, NULL, NULL, 'Kontrak Employee', NULL, '2017/11/12', NULL, 'SMA', 'SMA', 'Staff', NULL, NULL, NULL, NULL, 'Priuk Jakarta Utara', 'Tegal', '01212121212', NULL, NULL, 'sigap.png'),
(4, '224452', 224452, 'Suminep', 'Human Resource Management', 'Promotion Decisions', 'Mining Engineer', 'Head Office', 'Perempuan', 'Menikah', 'BLOK NAZI, RT 004/RW 002, KEL. MAJA UTARA, KEC. MAJA', '1999-04-01', 22, '0821-1285-0847', 'd@gmail.com', 'AB', '3175042312881012', '3175042312881088', '000124567891', '120J12345', '0001G31219800', '246155097024000', 'Bank Central Asia', '6930347998', 'TK/2', 'KAWIN', '288472', NULL, NULL, NULL, NULL, 'Kontrak Employee', NULL, '2019/11/12', NULL, 'SMA', 'SMA', 'Staff 2', NULL, NULL, NULL, NULL, 'Priuk Jakarta Utara', 'Garut', '01212121212', NULL, NULL, 'sigap.png'),
(5, '224532', 224532, 'Susanto', 'Accounting and Finance.', 'Product Distribution', 'Environmental Engineer', 'Head Office', 'Laki-Laki', 'Single', 'BLOK SEKUTU, RT 004/RW 002, KEL. MAJA UTARA, KEC. MAJA', '1999-04-01', 22, '0821-1285-0847', 'e@gmail.com', 'O', '3175042312881012', '3175042312881088', '000124567891', '120J12345', '0001G31219800', '246155097024000', 'Bank Central Asia', '6930347998', 'TK/0', 'LAJANG', '284859', NULL, NULL, NULL, NULL, 'Kontrak Employee', NULL, '2018/11/12', NULL, 'SMA', 'SMA', 'Junior Analyst', NULL, NULL, NULL, NULL, 'Priuk Jakarta Utara', 'Papua', '01212121212', NULL, NULL, 'sigap.png'),
(6, '220220', 220220, 'Murry', NULL, NULL, NULL, 'Head Office', 'Laki-Laki', 'Single', 'BLOK KAMIS, RT 004/RW 002, KEL. MAJA UTARA, KEC. MAJA', '1998-04-13', 23, '0812-1212-2244', 'b@gmail.com', 'B', '3175042312881111', '3175042312881089', '000124567892', '120J12344', '0001G31219801', '246155097024001', 'Bank Central Asia', '6930347991', 'TK/0', 'LAJANG', '789101', NULL, NULL, NULL, NULL, 'Permanent Employee', NULL, '2011/11/06', NULL, 'SMK', 'SMK', 'Operational', NULL, NULL, NULL, NULL, 'Ancol Jakarta Utara', 'Bandung', '0121212121', NULL, NULL, 'sigap.png');

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
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
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
-- Indexes for table `log_aktivitas`
--
ALTER TABLE `log_aktivitas`
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
-- Indexes for table `tbl_fasilitasi`
--
ALTER TABLE `tbl_fasilitasi`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `demosi_jabatan`
--
ALTER TABLE `demosi_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departement`
--
ALTER TABLE `departement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `histori_company`
--
ALTER TABLE `histori_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `histori_divisi`
--
ALTER TABLE `histori_divisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `histori_golongan`
--
ALTER TABLE `histori_golongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `histori_jabatan`
--
ALTER TABLE `histori_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `histori_karir`
--
ALTER TABLE `histori_karir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `histori_nilai_karyawan`
--
ALTER TABLE `histori_nilai_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `histori_poin_karyawan`
--
ALTER TABLE `histori_poin_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `histori_promosi`
--
ALTER TABLE `histori_promosi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `histori_surat_peringatan`
--
ALTER TABLE `histori_surat_peringatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `histori_training`
--
ALTER TABLE `histori_training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `human_value_assets`
--
ALTER TABLE `human_value_assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_aktivitas`
--
ALTER TABLE `log_aktivitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mutasi_jabatan`
--
ALTER TABLE `mutasi_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `promosi_jabatan`
--
ALTER TABLE `promosi_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_fasilitasi`
--
ALTER TABLE `tbl_fasilitasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_keluarga`
--
ALTER TABLE `tbl_keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
