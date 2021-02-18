-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2021 at 11:54 AM
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
  `keterangan` varchar(100) DEFAULT NULL,
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
  `kekuatan` varchar(100) DEFAULT NULL,
  `kelemahan` varchar(100) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(19, 'e10adc3949ba59abbe56e057f20f883e', 'Dasep', '123456', 'SMA', 'IPA', 'SMK DWIPA', '2017'),
(20, 'a2e80aa2ed6e8f87a79188ef1f1b6b08', 'Murry', '220220', 'SMK', 'IPS', 'SMAN 1 ', '2015');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `histori_divisi`
--
ALTER TABLE `histori_divisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `histori_golongan`
--
ALTER TABLE `histori_golongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `histori_jabatan`
--
ALTER TABLE `histori_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `histori_karir`
--
ALTER TABLE `histori_karir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `histori_nilai_karyawan`
--
ALTER TABLE `histori_nilai_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `histori_training`
--
ALTER TABLE `histori_training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `human_value_assets`
--
ALTER TABLE `human_value_assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mutasi_jabatan`
--
ALTER TABLE `mutasi_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `promosi_jabatan`
--
ALTER TABLE `promosi_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_keluarga`
--
ALTER TABLE `tbl_keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
