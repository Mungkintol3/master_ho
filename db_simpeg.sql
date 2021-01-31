-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2021 at 06:05 AM
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
-- Table structure for table `histori_golongan`
--

CREATE TABLE `histori_golongan` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `npk` varchar(6) DEFAULT NULL,
  `gol_sebelumnya` varchar(255) DEFAULT NULL,
  `gol_update` varchar(100) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `histori_golongan`
--

INSERT INTO `histori_golongan` (`id`, `id_user`, `npk`, `gol_sebelumnya`, `gol_update`, `tahun`, `tgl`) VALUES
(3, 'a2e80aa2ed6e8f87a79188ef1f1b6b08', '220220', 'D1', 'Tetap', 2020, '2020-01-13'),
(4, 'a2e80aa2ed6e8f87a79188ef1f1b6b08', '220220', 'Tetap', 'Kontrak', 2021, '2021-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `histori_jabatan`
--

CREATE TABLE `histori_jabatan` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `npk` varchar(6) DEFAULT NULL,
  `jabatan_sebelumnya` varchar(255) DEFAULT NULL,
  `promosi_jabatan` varchar(255) DEFAULT NULL,
  `mutasi_jabatan` varchar(255) DEFAULT NULL,
  `demosi_jabatan` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `histori_nilai_karyawan`
--

CREATE TABLE `histori_nilai_karyawan` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `npk` varchar(6) DEFAULT NULL,
  `nilai_pk` varchar(10) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `histori_nilai_karyawan`
--

INSERT INTO `histori_nilai_karyawan` (`id`, `id_user`, `npk`, `nilai_pk`, `tahun`, `tgl`) VALUES
(3, 'a2e80aa2ed6e8f87a79188ef1f1b6b08', '220220', 'A', 2021, '2021-01-13'),
(4, 'a2e80aa2ed6e8f87a79188ef1f1b6b08', '220220', 'B', 2020, '2020-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `histori_pelanggaran_karyawan`
--

CREATE TABLE `histori_pelanggaran_karyawan` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `npk` varchar(6) DEFAULT NULL,
  `jenis_surat_peringatan` varchar(255) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `histori_pelanggaran_karyawan`
--

INSERT INTO `histori_pelanggaran_karyawan` (`id`, `id_user`, `npk`, `jenis_surat_peringatan`, `tgl`, `tahun`, `keterangan`) VALUES
(4, 'a2e80aa2ed6e8f87a79188ef1f1b6b08', '220220', 'SP1', '2020-01-12', 2020, ''),
(5, 'a2e80aa2ed6e8f87a79188ef1f1b6b08', '220220', 'SP2', '2021-01-12', 2021, '');

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

--
-- Dumping data for table `histori_pendidikan`
--

INSERT INTO `histori_pendidikan` (`id`, `id_user`, `npk`, `join`, `update`, `keterangan`) VALUES
(1, 'a2e80aa2ed6e8f87a79188ef1f1b6b08', '220220', '2018-01-01', 'Lulus', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `histori_poin_karyawan`
--

CREATE TABLE `histori_poin_karyawan` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `npk` varchar(6) DEFAULT NULL,
  `poin` varchar(10) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `histori_poin_karyawan`
--

INSERT INTO `histori_poin_karyawan` (`id`, `id_user`, `npk`, `poin`, `tahun`, `tgl`) VALUES
(2, 'a2e80aa2ed6e8f87a79188ef1f1b6b08', '220220', '4', 2020, '2020-01-13'),
(3, 'a2e80aa2ed6e8f87a79188ef1f1b6b08', '220220', '3', 2021, '2021-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_golongan`
--

CREATE TABLE `tbl_golongan` (
  `id` int(11) NOT NULL,
  `golongan_kerja` varchar(255) DEFAULT NULL,
  `kode_golongan` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_golongan`
--

INSERT INTO `tbl_golongan` (`id`, `golongan_kerja`, `kode_golongan`, `keterangan`) VALUES
(4, 'Tetap', 'K1', ''),
(5, 'Kontrak', 'K2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id` int(11) NOT NULL,
  `nama_jabatan` varchar(100) DEFAULT NULL,
  `kode_jabatan` varchar(100) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id`, `nama_jabatan`, `kode_jabatan`, `keterangan`) VALUES
(4, 'Clerk', 'A1', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `npk` varchar(6) DEFAULT NULL,
  `nik` varchar(100) DEFAULT NULL,
  `no_kk` varchar(100) DEFAULT NULL,
  `npwp` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `domisili` varchar(255) DEFAULT NULL,
  `gol_darah` varchar(2) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `bpjs_kesehatan` varchar(100) DEFAULT NULL,
  `bpjs_ketenagakerjaan` varchar(100) DEFAULT NULL,
  `divisi` varchar(100) DEFAULT NULL,
  `departement` varchar(100) DEFAULT NULL,
  `posisi` varchar(100) DEFAULT NULL,
  `wilayah` varchar(100) DEFAULT NULL,
  `status_karyawan` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `usia` varchar(100) DEFAULT NULL,
  `sertifikasi_terbaru` varchar(100) DEFAULT NULL,
  `tgl_sertifikasi` date DEFAULT NULL,
  `kel_jabatan` varchar(100) DEFAULT NULL,
  `gol_kerja` varchar(100) DEFAULT NULL,
  `status_kerja` varchar(100) DEFAULT NULL,
  `latest_promosi` varchar(100) DEFAULT NULL,
  `nilai_pk` varchar(100) DEFAULT NULL,
  `poin` int(100) DEFAULT NULL,
  `surat_peringatan` int(100) DEFAULT NULL,
  `no_telpon` varchar(15) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `kontak_darurat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id`, `id_user`, `nama`, `npk`, `nik`, `no_kk`, `npwp`, `tempat_lahir`, `alamat`, `domisili`, `gol_darah`, `tgl_lahir`, `bpjs_kesehatan`, `bpjs_ketenagakerjaan`, `divisi`, `departement`, `posisi`, `wilayah`, `status_karyawan`, `company`, `join_date`, `usia`, `sertifikasi_terbaru`, `tgl_sertifikasi`, `kel_jabatan`, `gol_kerja`, `status_kerja`, `latest_promosi`, `nilai_pk`, `poin`, `surat_peringatan`, `no_telpon`, `email`, `kontak_darurat`) VALUES
(13, 'a2e80aa2ed6e8f87a79188ef1f1b6b08', 'Dasep', '220220', '3217', '3033', '82.939.497.2-042.000', 'Bandung', 'Jakarta', 'Lodan Dalam II C', 'A', '1999-04-13', '3215', '3219', 'IT', 'DC', 'IT', 'Jakarta', 'Tetap', 'SAP', '2025-12-12', '25', 'Gada Madya', '2025-12-12', 'A1', 'B1', 'Tetap', '2025-12-12', 'B', NULL, NULL, '081809064389', 'murry@gmail.com', '081908989');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `histori_nilai_karyawan`
--
ALTER TABLE `histori_nilai_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histori_pelanggaran_karyawan`
--
ALTER TABLE `histori_pelanggaran_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histori_pendidikan`
--
ALTER TABLE `histori_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histori_poin_karyawan`
--
ALTER TABLE `histori_poin_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_golongan`
--
ALTER TABLE `tbl_golongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NewIndex1` (`id`,`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `histori_golongan`
--
ALTER TABLE `histori_golongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `histori_jabatan`
--
ALTER TABLE `histori_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `histori_nilai_karyawan`
--
ALTER TABLE `histori_nilai_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `histori_pelanggaran_karyawan`
--
ALTER TABLE `histori_pelanggaran_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `histori_pendidikan`
--
ALTER TABLE `histori_pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `histori_poin_karyawan`
--
ALTER TABLE `histori_poin_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_golongan`
--
ALTER TABLE `tbl_golongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
