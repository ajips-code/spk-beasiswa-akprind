-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2023 at 02:55 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_saw_beasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nim` char(25) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `tempat_lahir` varchar(35) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` int(2) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `c1` double NOT NULL,
  `c2` int(2) NOT NULL,
  `c3` int(2) NOT NULL,
  `c4` int(2) NOT NULL,
  `c5` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nim`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `umur`, `jk`, `alamat`, `c1`, `c2`, `c3`, `c4`, `c5`) VALUES
(1, '2022120001', 'WIJAYANTO', 'Semarang', '2002-01-20', 21, 'Laki-Laki', 'Yogyakarta', 4, 3, 3, 4, 2),
(2, '2022120002', 'SURATMI', 'Purworejo', '2002-01-10', 21, 'Perempuan', 'Yogyakarta', 1, 2, 1, 5, 2),
(3, '20221203', 'SUNARTO', 'Malang', '2000-09-20', 22, 'Laki-Laki', 'Yogyakarta', 5, 4, 3, 5, 5),
(4, '2022120004', 'NARYONO', 'Malang', '2002-09-02', 20, 'Laki-Laki', 'Yogyakarta', 2, 2, 1, 3, 1),
(5, '20231204', 'YUDOYONO', 'Solo', '2003-08-12', 19, 'Laki-Laki', 'Yogyakarta', 4, 2, 1, 4, 4),
(6, '2022120006', 'JAYA KUSUMA', 'Surabaya', '2001-12-05', 21, 'Laki-Laki', 'Yogyakarta', 4, 2, 1, 5, 5),
(7, '2022120007', 'MELANI WIBOWO', 'Surabaya', '2003-09-11', 19, 'Perempuan', 'Yogyakarta', 4, 1, 1, 2, 2),
(8, '2022120008', 'INDAH NURHAYATI', 'Bandung', '2000-09-14', 22, 'Perempuan', 'Yogyakarta', 5, 3, 3, 4, 5),
(9, '2022120009', 'DIMAS PURNOMO', 'Blitar', '2004-03-11', 19, 'Laki-Laki', 'Yogyakarta', 5, 2, 3, 5, 5),
(10, '202312041', 'RATU WIJAYANTI', 'Bekasi', '2003-03-03', 20, 'Perempuan', 'Yogyakarta', 2, 2, 1, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `bobot_data_kriteria`
--

CREATE TABLE `bobot_data_kriteria` (
  `id_kriteria` varchar(2) NOT NULL,
  `nama_kriteria` varchar(45) NOT NULL,
  `bobot_kriteria` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobot_data_kriteria`
--

INSERT INTO `bobot_data_kriteria` (`id_kriteria`, `nama_kriteria`, `bobot_kriteria`) VALUES
('C1', 'Nalai IPK', 30),
('C2', 'Semester', 25),
('C3', 'Prestasi', 20),
('C4', 'Penghasilan Orang Tua', 15),
('C5', 'Tanggungan Orang Tua', 10);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(3) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_lengkap`, `username`, `password`) VALUES
(1, 'ADMINISTRATOR', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'STAF', 'user', 'ee11cbb19052e40b07aac0ca060c23ee');

-- --------------------------------------------------------

--
-- Table structure for table `ranging`
--

CREATE TABLE `ranging` (
  `nim` varchar(25) DEFAULT NULL,
  `nama_lengkap` varchar(40) DEFAULT NULL,
  `nilai` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ranging`
--

INSERT INTO `ranging` (`nim`, `nama_lengkap`, `nilai`) VALUES
('202312041', 'RATU WIJAYANTI', 0.45),
('2022120009', 'DIMAS PURNOMO', 0.79),
('2022120008', 'INDAH NURHAYATI', 0.86),
('2022120007', 'MELANI WIBOWO', 0.56),
('2022120006', 'JAYA KUSUMA', 0.59),
('20231204', 'YUDOYONO', 0.59),
('2022120004', 'NARYONO', 0.43),
('20221203', 'SUNARTO', 0.91),
('2022120002', 'SURATMI', 0.35),
('2022120001', 'WIJAYANTO', 0.74);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `bobot_data_kriteria`
--
ALTER TABLE `bobot_data_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
