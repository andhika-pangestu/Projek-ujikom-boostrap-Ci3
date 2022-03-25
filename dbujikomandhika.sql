-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2022 at 01:22 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbujikomandhika`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbcatatanperjalanan`
--

CREATE TABLE `tbcatatanperjalanan` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(128) NOT NULL,
  `lokasi` varchar(128) NOT NULL,
  `suhu_tubuh` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbcatatanperjalanan`
--

INSERT INTO `tbcatatanperjalanan` (`id`, `tanggal`, `jam`, `lokasi`, `suhu_tubuh`, `id_user`) VALUES
(1, '0000-00-00', '05.00', 'cianjur', 40, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `email` varchar(128) NOT NULL,
  `jeniskel` varchar(128) NOT NULL,
  `tgllahir` date NOT NULL,
  `status` int(11) NOT NULL,
  `alamat` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`id`, `nama`, `nik`, `email`, `jeniskel`, `tgllahir`, `status`, `alamat`) VALUES
(1, 'ANDHIKA PANGESTU', '1212423435436365', 'andhika@gmail.com', '0', '2022-03-09', 0, 'CIANrhyrhr'),
(2, 'ANDHIKA PANGESTU', '2345678908765435', 'andhikapangestu66@gmail.com', '0', '2022-03-02', 1, 'CIANJUR'),
(3, 'dhika_png', '0987654321234563', 'djfdh@gmail.com', 'Perempuan', '2022-03-08', 0, 'rwgrev'),
(4, 'fghghhj', '1213214124124124', 'g434314@gamil.com', 'Laki-Laki', '2022-03-08', 1, 'eftutyjyuj'),
(5, 'ANDHIKA PANGESTU', '1214234324324234', 'andhikapangestu663@gmail.com', 'Pilih Jenis Kelamin', '0000-00-00', 0, 'CIANJUR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbcatatanperjalanan`
--
ALTER TABLE `tbcatatanperjalanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbcatatanperjalanan`
--
ALTER TABLE `tbcatatanperjalanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
