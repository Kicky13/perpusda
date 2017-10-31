-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2017 at 02:29 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpusda`
--

-- --------------------------------------------------------

--
-- Table structure for table `agendakeluar`
--

CREATE TABLE `agendakeluar` (
  `idKeluar` int(3) UNSIGNED ZEROFILL NOT NULL,
  `noSurat` varchar(25) NOT NULL,
  `tanggalSurat` date NOT NULL,
  `tujuan` text NOT NULL,
  `perihal` text NOT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agendakeluar`
--

INSERT INTO `agendakeluar` (`idKeluar`, `noSurat`, `tanggalSurat`, `tujuan`, `perihal`, `keterangan`) VALUES
(001, 'XIV', '2017-07-27', 'Banyuwangi', 'Makrab Blimbing', NULL),
(002, 'C0NT014', '2017-07-13', 'Banyuwangi', 'Contoh', NULL),
(003, 'C0NT014', '2017-05-30', 'Banyuwangi', 'Makrab Blimbing', NULL),
(004, 'C0NT014', '2017-05-30', 'Banyuwangi', 'Makrab Aja', NULL),
(005, 'C0NT014', '2017-05-30', 'Banyuwangi', 'Makrab Blimbing', NULL),
(006, 'XIV', '2017-03-23', 'Banyuwangi', 'Makrab Blimbing', NULL),
(007, 'C0NT014', '2017-07-19', 'Banyuwangi', 'Contoh', NULL),
(008, 'C0NT014', '2011-03-22', 'Banyuwangi', 'Contoh', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `agendamasuk`
--

CREATE TABLE `agendamasuk` (
  `idMasuk` int(7) UNSIGNED ZEROFILL NOT NULL,
  `noSurat` varchar(25) NOT NULL,
  `tanggalMasuk` date NOT NULL,
  `asalSurat` text NOT NULL,
  `tanggalTerima` date NOT NULL,
  `noAgenda` varchar(25) NOT NULL,
  `perihal` text NOT NULL,
  `tembusan` text,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agendamasuk`
--

INSERT INTO `agendamasuk` (`idMasuk`, `noSurat`, `tanggalMasuk`, `asalSurat`, `tanggalTerima`, `noAgenda`, `perihal`, `tembusan`, `keterangan`) VALUES
(0000001, 'C0NT014', '2017-05-02', 'Test 123', '2017-05-02', 'X034', 'Mencoba', 'Alam Sekitar', NULL),
(0000002, 'GAD', '2017-05-01', 'Jember', '2017-05-02', '985JDS', 'Contoh', NULL, NULL),
(0000003, 'XIV', '2017-05-01', 'Jember', '2017-05-02', '54A', 'Anu', NULL, NULL),
(0000004, 'C0NT015', '2017-06-05', 'Banyuwangi', '2017-06-05', 'X034', 'Makrab Blimbing', NULL, NULL),
(0000005, 'ABC', '2017-05-11', 'Banyuwangi', '2017-06-05', '54A', 'Anu', NULL, NULL),
(0000006, 'abc001', '2017-05-02', 'UNEJ', '2017-05-02', 'tes001', 'magang', 'kepala perpustakaan', NULL),
(0000007, '005/10/35.09.510/2017', '2017-05-02', 'setda jember', '2017-05-12', '120', 'undangan', 'yyyy', NULL),
(0000008, '005/10/35.09.510/2017', '2017-05-02', 'setda jember', '2017-05-12', '120', 'undangan', 'yyyy', NULL),
(0000009, '005/10/35.09.510/2017', '2017-05-02', 'setda jember', '2017-05-12', '120', 'undangan', NULL, 'bla bla');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin1', 'admin1'),
(2, 'admin2', 'admin2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendakeluar`
--
ALTER TABLE `agendakeluar`
  ADD PRIMARY KEY (`idKeluar`);

--
-- Indexes for table `agendamasuk`
--
ALTER TABLE `agendamasuk`
  ADD PRIMARY KEY (`idMasuk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendakeluar`
--
ALTER TABLE `agendakeluar`
  MODIFY `idKeluar` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `agendamasuk`
--
ALTER TABLE `agendamasuk`
  MODIFY `idMasuk` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
