-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 12:59 AM
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
(32, 220927, 'Murry Febriansyah Putra', '2021-05-24 05:28:31', 220212, 'Update Human Assets Value atas npk 220212 - Febriansyah'),
(33, 220927, 'Murry Febriansyah Putra', '2021-05-24 05:28:31', 220927, 'Update Human Assets Value atas npk 220927 - Murry'),
(34, 220927, 'Murry Febriansyah Putra', '2021-05-24 05:39:04', 220212, 'Update Human Assets Value atas npk 220212 - Febriansyah'),
(35, 220927, 'Murry Febriansyah Putra', '2021-05-24 05:40:54', 220927, 'Update kelompok jabatan dan golongan karyawan atas npk 220927 - Murry'),
(36, 220927, 'Murry Febriansyah Putra', '2021-05-24 05:51:04', 220927, 'Update demosi karyawan atas npk 220927 - Murry'),
(37, 220927, 'Murry Febriansyah Putra', '2021-05-24 05:52:41', 220212, 'Ganti divisi terbaru karyawan atas npk 220212 - Febriansyah'),
(38, 220927, 'Murry Febriansyah Putra', '2021-05-24 05:53:40', 220212, 'Perbarui pendidikan karyawan atas npk 220212 - Febriansyah'),
(39, 220927, 'Murry Febriansyah Putra', '2021-05-24 05:54:41', 220212, 'Tambah anggota keluarga baru dari karyawan atas npk 220212 - Dasep'),
(40, 220927, 'Murry Febriansyah Putra', '2021-05-24 05:55:38', NULL, 'Perbarui NPK karyawan atas npk  - Murry'),
(41, 220927, 'Murry Febriansyah Putra', '2021-05-24 05:56:27', 220212, 'Perbarui NPK karyawan atas npk 220212 - Febriansyah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_aktivitas`
--
ALTER TABLE `log_aktivitas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_aktivitas`
--
ALTER TABLE `log_aktivitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
