-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jan 2022 pada 02.02
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.14

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
-- Struktur dari tabel `calon_mhs`
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
-- Dumping data untuk tabel `calon_mhs`
--

INSERT INTO `calon_mhs` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`, `foto_maba`) VALUES
(1, 'ANISA', 'RAJEG', 'PEREMPUAN', 'Islam', 'MAN 3 TANGERANG', 0),
(2, 'NURUL', 'RAJEG', 'PEREMPUAN', 'Islam', 'MAN 3 TANGERANG', 0),
(3, 'ISTIQOMAH', 'RAJEG', 'PEREMPUAN', 'Islam', 'MAN 3 TANGERANG', 0),
(4, 'ANISA NURUL', 'RAJEG', 'PEREMPUAN', 'Islam', 'MAN 3 TANGERANG', 0),
(5, 'NURUL ISTIQOMAH', 'RAJEG', 'PEREMPUAN', 'Islam', 'MAN 3 TANGERANG', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_dosen`
--

CREATE TABLE `daftar_dosen` (
  `id` int(10) NOT NULL,
  `nidn` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `s1` varchar(30) NOT NULL,
  `s2` varchar(30) NOT NULL,
  `s3` varchar(30) NOT NULL,
  `foto` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_dosen`
--

INSERT INTO `daftar_dosen` (`id`, `nidn`, `nama`, `email`, `jenis_kelamin`, `alamat`, `agama`, `s1`, `s2`, `s3`, `foto`) VALUES
(1, 401099003, 'Djamaludin', 'Djamaludin@unis.ac.id', 'LAKI-LAKI', 'Tangerang', 'Islam', 'Pendidikan', 'Pendidikan', 'Pendidikan', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `calon_mhs`
--
ALTER TABLE `calon_mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daftar_dosen`
--
ALTER TABLE `daftar_dosen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `calon_mhs`
--
ALTER TABLE `calon_mhs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
