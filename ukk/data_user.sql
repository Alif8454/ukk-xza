-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2023 at 08:40 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel-anggota`
--

CREATE TABLE `tabel-anggota` (
  `ID_anggota` int(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nomor_telepon` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tanggal_pendaftaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel-buku`
--

CREATE TABLE `tabel-buku` (
  `ID` int(200) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `pengarang` varchar(200) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `stock` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel-pinjaman`
--

CREATE TABLE `tabel-pinjaman` (
  `ID` int(20) NOT NULL,
  `tanggal_peminjaman` varchar(200) NOT NULL,
  `tanggal_pengembalian` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel-saran`
--

CREATE TABLE `tabel-saran` (
  `id_feedback` int(20) NOT NULL,
  `isi` varchar(200) NOT NULL,
  `tanggal_feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabelbuku`
--

CREATE TABLE `tabelbuku` (
  `nama` varchar(200) NOT NULL,
  `kelas` varchar(200) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabelbuku`
--

INSERT INTO `tabelbuku` (`nama`, `kelas`, `judul`, `tanggal`) VALUES
('wahyudi santoso', 'PPLG', 'laskar pelangi', '2023-11-23'),
('rusdi elgato', 'DKV XI', 'Malin kundang', '2023-11-23'),
('rusdi elgato', 'DKV XI', 'Malin kundang', '2023-11-23'),
('sdsa', 'adas', 'asda', '2023-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_anggota`
--

CREATE TABLE `tabel_anggota` (
  `ID_anggota` int(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nomor_telepon` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tanggal_pendaftaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_anggota`
--

INSERT INTO `tabel_anggota` (`ID_anggota`, `nama`, `alamat`, `nomor_telepon`, `email`, `tanggal_pendaftaran`) VALUES
(11111111, 'dimas saputra mahesa', 'mrbel bangka raya no 9', '08193318248', 'zxzxa@gmail.com', '2023-11-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel-anggota`
--
ALTER TABLE `tabel-anggota`
  ADD PRIMARY KEY (`ID_anggota`);

--
-- Indexes for table `tabel-buku`
--
ALTER TABLE `tabel-buku`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tabel-pinjaman`
--
ALTER TABLE `tabel-pinjaman`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tabel-saran`
--
ALTER TABLE `tabel-saran`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indexes for table `tabel_anggota`
--
ALTER TABLE `tabel_anggota`
  ADD PRIMARY KEY (`ID_anggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel-anggota`
--
ALTER TABLE `tabel-anggota`
  MODIFY `ID_anggota` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabel-buku`
--
ALTER TABLE `tabel-buku`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabel-pinjaman`
--
ALTER TABLE `tabel-pinjaman`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabel-saran`
--
ALTER TABLE `tabel-saran`
  MODIFY `id_feedback` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabel_anggota`
--
ALTER TABLE `tabel_anggota`
  MODIFY `ID_anggota` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11111112;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
