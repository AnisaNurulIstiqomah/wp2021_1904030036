-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 21, 2022 at 06:03 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpsmt5`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_mhs`
--

CREATE TABLE `calon_mhs` (
  `id` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `sekolah_asal` varchar(20) NOT NULL,
  `foto_maba` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calon_mhs`
--

INSERT INTO `calon_mhs` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`, `foto_maba`) VALUES
(1, 'ANISA', 'RAJEG', 'PEREMPUAN', 'Islam', 'MAN 3 TANGERANG', 0),
(2, 'NURUL', 'RAJEG', 'PEREMPUAN', 'Islam', 'MAN 3 TANGERANG', 0),
(3, 'ISTIQOMAH', 'RAJEG', 'PEREMPUAN', 'Islam', 'MAN 3 TANGERANG', 0),
(4, 'ANISA NURUL', 'RAJEG', 'PEREMPUAN', 'Islam', 'MAN 3 TANGERANG', 0),
(5, 'NURUL ISTIQOMAH', 'RAJEG', 'PEREMPUAN', 'Islam', 'MAN 3 TANGERANG', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_mhs`
--
ALTER TABLE `calon_mhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_mhs`
--
ALTER TABLE `calon_mhs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
