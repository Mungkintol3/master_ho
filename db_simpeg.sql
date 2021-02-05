-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2021 at 12:54 AM
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
-- Table structure for table `histori_company`
--

CREATE TABLE `histori_company` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `join_date` varchar(100) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `histori_company`
--

INSERT INTO `histori_company` (`id`, `id_user`, `company`, `join_date`, `tahun`) VALUES
(1, 'e10adc3949ba59abbe56e057f20f883e', 'SPG', '2021-01-01', NULL),
(2, 'e10adc3949ba59abbe56e057f20f883e', 'SPA', '2021-06-01', NULL);

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
-- Table structure for table `histori_karir`
--

CREATE TABLE `histori_karir` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `karir_old` varchar(100) DEFAULT NULL,
  `karir_new` varchar(100) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `histori_karir`
--

INSERT INTO `histori_karir` (`id`, `id_user`, `karir_old`, `karir_new`, `tahun`) VALUES
(5, 'e10adc3949ba59abbe56e057f20f883e', 'NPB', 'Payroll', 2016),
(6, 'e10adc3949ba59abbe56e057f20f883e', 'Payroll', 'IT', 2016),
(7, 'e10adc3949ba59abbe56e057f20f883e', 'IT', 'GA', 2017),
(8, 'e10adc3949ba59abbe56e057f20f883e', 'GA', 'HRD', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `histori_nilai_karyawan`
--

CREATE TABLE `histori_nilai_karyawan` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `nilai_pk` varchar(10) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `histori_nilai_karyawan`
--

INSERT INTO `histori_nilai_karyawan` (`id`, `id_user`, `nilai_pk`, `tahun`, `tgl`) VALUES
(3, 'a2e80aa2ed6e8f87a79188ef1f1b6b08', 'A', 2021, '2021-01-13'),
(4, 'a2e80aa2ed6e8f87a79188ef1f1b6b08', 'B', 2020, '2020-01-13');

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
-- Table structure for table `histori_pkwt`
--

CREATE TABLE `histori_pkwt` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `pkwt_sebelumnya` varchar(50) DEFAULT NULL,
  `no_pkwt` varchar(20) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `histori_pkwt`
--

INSERT INTO `histori_pkwt` (`id`, `id_user`, `pkwt_sebelumnya`, `no_pkwt`, `tahun`, `tgl`) VALUES
(1, 'e10adc3949ba59abbe56e057f20f883e', '1', '2', 2021, '2021-01-01'),
(2, 'e10adc3949ba59abbe56e057f20f883e', '2', '3', 2021, '2021-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `histori_poin_karyawan`
--

CREATE TABLE `histori_poin_karyawan` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `poin` varchar(10) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `histori_poin_karyawan`
--

INSERT INTO `histori_poin_karyawan` (`id`, `id_user`, `poin`, `tahun`, `tgl`) VALUES
(2, 'a2e80aa2ed6e8f87a79188ef1f1b6b08', '4', 2020, '2020-01-13'),
(3, 'a2e80aa2ed6e8f87a79188ef1f1b6b08', '3', 2021, '2021-01-13');

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
  `jenis_surat_peringatan` varchar(255) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `histori_surat_peringatan`
--

INSERT INTO `histori_surat_peringatan` (`id`, `id_user`, `jenis_surat_peringatan`, `tgl`, `tahun`, `keterangan`) VALUES
(4, 'a2e80aa2ed6e8f87a79188ef1f1b6b08', 'SP1', '2020-01-12', 2020, ''),
(5, 'a2e80aa2ed6e8f87a79188ef1f1b6b08', 'SP2', '2021-01-12', 2021, '');

-- --------------------------------------------------------

--
-- Table structure for table `histori_training`
--

CREATE TABLE `histori_training` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `jenis_training` varchar(40) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `human_value_assets`
--

CREATE TABLE `human_value_assets` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `asset_value` varchar(100) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(5, 'Kontrak', 'K2', 'asa');

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
(9, 'Clerk', 'A1', 'admin atuh'),
(10, 'Supervisor', 'B2', 'cape kerjanya gaji nya gaada');

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
  `tgl_lahir` varchar(30) DEFAULT NULL,
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
  `employment_status` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `join_date` varchar(20) DEFAULT NULL,
  `length_of_service` varchar(100) DEFAULT NULL,
  `education_join` varchar(100) DEFAULT NULL,
  `education_update` varchar(100) DEFAULT NULL,
  `kel_jabatan` varchar(100) DEFAULT NULL,
  `gol_kerja` varchar(100) DEFAULT NULL,
  `latest_promotion` varchar(100) DEFAULT NULL,
  `karir` varchar(100) DEFAULT NULL,
  `alamat_ktp` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `kontak_darurat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`id`, `id_user`, `npk`, `nama`, `divisi`, `departement`, `position`, `wilayah`, `gender`, `martial_status`, `address`, `tgl_lahir`, `age`, `no_telp`, `email`, `gol_darah`, `no_ktp`, `no_kk`, `bpjs_kesehatan`, `bpjs_tenagakerja`, `no_dplk`, `no_npwp`, `nama_bank`, `no_rekening`, `status_pajak`, `status_kawin`, `no_pkwt`, `promosi_jabatan`, `mutasi_jabatan`, `demosi_jabatan`, `employment_status`, `company`, `join_date`, `length_of_service`, `education_join`, `education_update`, `kel_jabatan`, `gol_kerja`, `latest_promotion`, `karir`, `alamat_ktp`, `tempat_lahir`, `kontak_darurat`) VALUES
(2, 'e10adc3949ba59abbe56e057f20f883e', 123456, 'Dasep', 'BOD', '-', 'PDCA', 'Head Office', 'Laki-Laki', 'Single', 'BLOK KAMIS, RT 004/RW 002, KEL. MAJA UTARA, KEC. MAJA', '01 October 1996', 51, '0821-1285-0847', 'a@gmail.com', 'A', '3175042312881012', '3175042312881088', '000124567891', '120J12345', '0001G31219800', '246155097024000', 'Bank Central Asia', '6930347998', 'TK/0', 'LAJANG', '3', NULL, NULL, NULL, 'Permanent Employee', 'SPA', '2021-06-01', '4years9months', 'SMA', 'S1', 'Junior Analyst', '3E-4D', '01 Januari 2017', 'HRD', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `histori_company`
--
ALTER TABLE `histori_company`
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
-- Indexes for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `histori_company`
--
ALTER TABLE `histori_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `histori_karir`
--
ALTER TABLE `histori_karir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `histori_nilai_karyawan`
--
ALTER TABLE `histori_nilai_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `histori_pendidikan`
--
ALTER TABLE `histori_pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `histori_pkwt`
--
ALTER TABLE `histori_pkwt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `histori_poin_karyawan`
--
ALTER TABLE `histori_poin_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `histori_promosi`
--
ALTER TABLE `histori_promosi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `histori_surat_peringatan`
--
ALTER TABLE `histori_surat_peringatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- AUTO_INCREMENT for table `tbl_golongan`
--
ALTER TABLE `tbl_golongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
