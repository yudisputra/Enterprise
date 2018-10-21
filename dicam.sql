-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 Okt 2018 pada 03.54
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dicam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nidn` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempatlahir` varchar(50) NOT NULL,
  `tanggallahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nidn`, `nip`, `nama`, `tempatlahir`, `tanggallahir`, `alamat`, `foto`) VALUES
('0005016210', '196201051990031002', 'Budi Harijanto, ST., MMKom', '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `employees`
--

CREATE TABLE `employees` (
  `employeeNumber` int(11) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `extension` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `officeCode` varchar(10) NOT NULL,
  `file_url` varchar(250) CHARACTER SET utf8 NOT NULL,
  `jobTitle` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `employees`
--

INSERT INTO `employees` (`employeeNumber`, `lastName`, `firstName`, `extension`, `email`, `officeCode`, `file_url`, `jobTitle`) VALUES
(1002, 'Murph', 'Diane', 'x5800', 'dmurphy@classicmodelcars.com', '1', '', 'President'),
(1056, 'Patterson', 'Mary', 'x4611', 'mpatterso@classicmodelcars.com', '1', '', 'VP Sales'),
(1076, 'Firrelli', 'Jeff', 'x9273', 'jfirrelli@classicmodelcars.com', '1', '', 'VP Marketing'),
(1088, 'Patterson', 'William', 'x4871', 'wpatterson@classicmodelcars.com', '6', '', 'Sales Manager (APAC)'),
(1102, 'Bondur', 'Gerard', 'x5408', 'gbondur@classicmodelcars.com', '4', 'pdftest.pdf', 'Sale Manager (EMEA)'),
(1143, 'Bow', 'Anthony', 'x5428', 'abow@classicmodelcars.com', '1', '', 'Sales Manager (NA)'),
(1165, 'Jennings', 'Leslie', 'x3291', 'ljennings@classicmodelcars.com', '1', '', 'Sales Rep'),
(1166, 'Thompson', 'Leslie', 'x4065', 'lthompson@classicmodelcars.com', '1', '', 'Sales Rep'),
(1188, 'Firrelli', 'Julie', 'x2173', 'jfirrelli@classicmodelcars.com', '2', 'test-2.pdf', 'Sales Rep'),
(1216, 'Patterson', 'Steve', 'x4334', 'spatterson@classicmodelcars.com', '2', '', 'Sales Rep'),
(1286, 'Tseng', 'Foon Yue', 'x2248', 'ftseng@classicmodelcars.com', '3', '', 'Sales Rep'),
(1323, 'Vanauf', 'George', 'x4102', 'gvanauf@classicmodelcars.com', '3', '', 'Sales Rep'),
(1337, 'Bondur', 'Loui', 'x6493', 'lbondur@classicmodelcars.com', '4', '', 'Sales Rep'),
(1370, 'Hernandez', 'Gerard', 'x2028', 'ghernande@classicmodelcars.com', '4', '', 'Sales Rep'),
(1401, 'Castillo', 'Pamela', 'x2759', 'pcastillo@classicmodelcars.com', '4', '', 'Sales Rep'),
(1501, 'Bott', 'Larry', 'x2311', 'lbott@classicmodelcars.com', '7', '', 'Sales Rep'),
(1504, 'Jones', 'Barry', 'x102', 'bjones@classicmodelcars.com', '7', '', 'Sales Rep'),
(1611, 'Fixter', 'Andy', 'x101', 'afixter@classicmodelcars.com', '6', '', 'Sales Rep'),
(1612, 'Marsh', 'Peter', 'x102', 'pmarsh@classicmodelcars.com', '6', '', 'Sales Rep'),
(1619, 'King', 'Tom', 'x103', 'tking@classicmodelcars.com', '6', '', 'Sales Rep'),
(1621, 'Nishi', 'Mami', 'x101', 'mnishi@classicmodelcars.com', '5', '', 'Sales Rep'),
(1625, 'Kato', 'Yoshimi', 'x102', 'ykato@classicmodelcars.com', '5', '', 'Sales Rep'),
(1702, 'Gerard', 'Martin', 'x2312', 'mgerard@classicmodelcars.com', '4', '', 'Sales Rep');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempatlahir` varchar(50) NOT NULL,
  `tanggallahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `tempatlahir`, `tanggallahir`, `alamat`, `jurusan`, `prodi`, `foto`) VALUES
('1641720081', 'Bagus Denissiasis', 'Lumajang', '2018-10-16', 'Lumajang', 'Teknologi Informasi', 'Teknik Informatika', ''),
('1641720187', 'Nugroho Febriyanto', 'Madiun', '2018-10-14', 'Madiun', 'Teknologi Informasi', 'Teknik Informatika', '1641720187.jpg'),
('1641720200', 'Yudistira Eka Putra ganteng', 'Malang', '1995-09-17', 'Asrama Men Armed 1', 'Teknologi Informasi', 'Teknik Informatika', '1641720197.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam`
--

CREATE TABLE `pinjam` (
  `nopinjam` int(50) NOT NULL,
  `noruang` varchar(50) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `waktupinjam` datetime NOT NULL,
  `waktukembali` datetime NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE `ruang` (
  `noruang` varchar(50) NOT NULL,
  `namaruang` varchar(50) NOT NULL,
  `lokasiruang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`noruang`, `namaruang`, `lokasiruang`) VALUES
('1', 'LKJ3', 'Gedung Sipil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employeeNumber`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`nopinjam`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`noruang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employeeNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1703;

--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `nopinjam` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
