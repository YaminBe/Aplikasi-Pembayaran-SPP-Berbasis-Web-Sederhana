-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2018 at 07:36 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sppsekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(5) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `namalengkap` varchar(40) DEFAULT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `namalengkap`, `foto`) VALUES
(1, 'admin', 'admin', 'Bae', 'userk.png'),
(3, 'yamin', 'yamin', 'Abdul Yamin', 'atomix_user31.png');

-- --------------------------------------------------------

--
-- Table structure for table `db_kas`
--

CREATE TABLE `db_kas` (
  `kode` int(11) NOT NULL,
  `idguru` int(5) NOT NULL,
  `namasiswa` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `tgl` date NOT NULL,
  `jumlah` int(30) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `keluar` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_kas`
--

INSERT INTO `db_kas` (`kode`, `idguru`, `namasiswa`, `kelas`, `keterangan`, `tgl`, `jumlah`, `jenis`, `keluar`) VALUES
(1, 2, 'Mahasiswa Abadi', 'IPS X', 'tes', '2018-05-24', 6000, 'masuk', '0'),
(2, 2, 'Ridwan Kamil', 'IPS X', 'ft', '2018-05-24', 6000, 'masuk', '0'),
(3, 2, '', 'IPS X', 'sabu', '2018-05-24', 0, 'keluar', '6000'),
(4, 5, 'Anggi', 'IPA XI', 'lunas', '2018-05-24', 6000, 'masuk', '0'),
(5, 5, 'Comel', 'IPA XI', 'lunsa', '2018-05-24', 6000, 'masuk', '0'),
(6, 5, '', 'IPA XI', 'beli buku', '2018-05-24', 0, 'keluar', '6000');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `idguru` int(5) NOT NULL,
  `namaguru` varchar(40) DEFAULT NULL,
  `mapel` varchar(60) NOT NULL,
  `Jabatan` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`idguru`, `namaguru`, `mapel`, `Jabatan`, `username`, `password`, `foto`) VALUES
(2, '  Riki Sanjaya  RT', 'IPS', 'Guru kelas', 'riki', 'riki', 'userk.png'),
(3, 'Nopriadi, S.Pd', 'IPA', 'Guru kelas', 'nopri', 'nopri', 'userk.png'),
(4, 'Poppy', 'Bahasa Inggris', 'Guru kelas', 'p', 'p', 'tafsir.jpg'),
(5, 'Anggi', 'Matematika', 'Guru kelas', 'a', 'a', 'atomix_user31.png'),
(11, 'fsf', 'Bahasa Indonesia', 'Guru kelas', 'fdf', 'fsf', '1357922b6712244.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `idjab` int(11) NOT NULL,
  `jabatan` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`idjab`, `jabatan`) VALUES
(1, 'Guru kelas'),
(2, 'PNS');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `idkelas` int(11) NOT NULL,
  `kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`idkelas`, `kelas`) VALUES
(1, 'IPA X'),
(2, 'IPA XI'),
(3, 'IPA XII'),
(4, 'IPS X'),
(5, 'IPS XI'),
(6, 'Kelas Baru');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `idmapel` int(11) NOT NULL,
  `mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`idmapel`, `mapel`) VALUES
(1, 'Bahasa Indonesia'),
(2, 'Bahasa Inggris'),
(3, 'Matematika'),
(4, 'IPA'),
(5, 'IPS');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `idsiswa` int(10) NOT NULL,
  `nis` varchar(10) DEFAULT NULL,
  `namasiswa` varchar(40) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `tahunajaran` varchar(10) DEFAULT NULL,
  `biaya` int(20) DEFAULT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`idsiswa`, `nis`, `namasiswa`, `kelas`, `tahunajaran`, `biaya`, `foto`) VALUES
(8, '2513003', 'Mahasiswa Abadi', 'IPS X', '2017/2018', 60000, 'userk.png'),
(9, '2513001', 'Ridwan Kamil', 'IPA X', '2017/2018', 60000, 'userk.png'),
(12, '004', 'Anggi', 'IPA XII', '2017/2018', 60000, 'if_sublime-text_1297064.ico'),
(13, '001', 'Comel', 'IPA XII', '2017/2018', 60000, 'tafsir.jpg'),
(14, '005', 'tes', 'IPA XI', '2017/2018', 60000, '10304432100006.png');

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `idspp` int(100) NOT NULL,
  `idsiswa` int(10) DEFAULT NULL,
  `jatuhtempo` date DEFAULT NULL,
  `bulan` varchar(20) DEFAULT NULL,
  `nobayar` varchar(10) DEFAULT NULL,
  `tglbayar` date DEFAULT NULL,
  `jumlah` int(20) DEFAULT NULL,
  `ket` varchar(20) DEFAULT NULL,
  `idadmin` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`idspp`, `idsiswa`, `jatuhtempo`, `bulan`, `nobayar`, `tglbayar`, `jumlah`, `ket`, `idadmin`) VALUES
(25, 8, '2018-01-25', 'Januari 2018', '1805120001', '2018-05-12', 60000, 'LUNAS', 1),
(26, 8, '2018-02-25', 'Februari 2018', '1805120002', '2018-05-12', 60000, 'LUNAS', 1),
(27, 8, '2018-03-25', 'Maret 2018', NULL, NULL, 60000, NULL, NULL),
(28, 8, '2018-04-25', 'April 2018', NULL, NULL, 60000, NULL, NULL),
(29, 8, '2018-05-25', 'Mei 2018', NULL, NULL, 60000, NULL, NULL),
(30, 8, '2018-06-25', 'Juni 2018', NULL, NULL, 60000, NULL, NULL),
(31, 8, '2018-07-25', 'Juli 2018', NULL, NULL, 60000, NULL, NULL),
(32, 8, '2018-08-25', 'Agustus 2018', NULL, NULL, 60000, NULL, NULL),
(33, 8, '2018-09-25', 'September 2018', NULL, NULL, 60000, NULL, NULL),
(34, 8, '2018-10-25', 'Oktober 2018', NULL, NULL, 60000, NULL, NULL),
(35, 8, '2018-11-25', 'November 2018', NULL, NULL, 60000, NULL, NULL),
(36, 8, '2018-12-25', 'Desember 2018', NULL, NULL, 60000, NULL, NULL),
(37, 9, '2018-01-25', 'Januari 2018', '1805240001', '2018-05-24', 60000, 'LUNAS', 1),
(38, 9, '2018-02-25', 'Februari 2018', '1808090001', '2018-08-09', 60000, 'LUNAS', 1),
(39, 9, '2018-03-25', 'Maret 2018', NULL, NULL, 60000, NULL, NULL),
(40, 9, '2018-04-25', 'April 2018', NULL, NULL, 60000, NULL, NULL),
(41, 9, '2018-05-25', 'Mei 2018', NULL, NULL, 60000, NULL, NULL),
(42, 9, '2018-06-25', 'Juni 2018', NULL, NULL, 60000, NULL, NULL),
(43, 9, '2018-07-25', 'Juli 2018', NULL, NULL, 60000, NULL, NULL),
(44, 9, '2018-08-25', 'Agustus 2018', NULL, NULL, 60000, NULL, NULL),
(45, 9, '2018-09-25', 'September 2018', NULL, NULL, 60000, NULL, NULL),
(46, 9, '2018-10-25', 'Oktober 2018', NULL, NULL, 60000, NULL, NULL),
(47, 9, '2018-11-25', 'November 2018', NULL, NULL, 60000, NULL, NULL),
(48, 9, '2018-12-25', 'Desember 2018', NULL, NULL, 60000, NULL, NULL),
(49, 12, '2018-01-25', 'Januari 2018', '1805220001', '2018-05-22', 60000, 'LUNAS', 1),
(50, 12, '2018-02-25', 'Februari 2018', '1805220002', '2018-05-22', 60000, 'LUNAS', 1),
(51, 12, '2018-03-25', 'Maret 2018', '1805220003', '2018-05-22', 60000, 'LUNAS', 1),
(52, 12, '2018-04-25', 'April 2018', NULL, NULL, 60000, NULL, NULL),
(53, 12, '2018-05-25', 'Mei 2018', NULL, NULL, 60000, NULL, NULL),
(54, 12, '2018-06-25', 'Juni 2018', NULL, NULL, 60000, NULL, NULL),
(55, 12, '2018-07-25', 'Juli 2018', NULL, NULL, 60000, NULL, NULL),
(56, 12, '2018-08-25', 'Agustus 2018', NULL, NULL, 60000, NULL, NULL),
(57, 12, '2018-09-25', 'September 2018', NULL, NULL, 60000, NULL, NULL),
(58, 12, '2018-10-25', 'Oktober 2018', NULL, NULL, 60000, NULL, NULL),
(59, 12, '2018-11-25', 'November 2018', NULL, NULL, 60000, NULL, NULL),
(60, 12, '2018-12-25', 'Desember 2018', NULL, NULL, 60000, NULL, NULL),
(62, 13, '2018-01-25', 'Januari 2018', NULL, NULL, 60000, NULL, NULL),
(63, 13, '2018-02-25', 'Februari 2018', NULL, NULL, 60000, NULL, NULL),
(64, 13, '2018-03-25', 'Maret 2018', NULL, NULL, 60000, NULL, NULL),
(65, 13, '2018-04-25', 'April 2018', NULL, NULL, 60000, NULL, NULL),
(66, 13, '2018-05-25', 'Mei 2018', NULL, NULL, 60000, NULL, NULL),
(67, 13, '2018-06-25', 'Juni 2018', NULL, NULL, 60000, NULL, NULL),
(68, 13, '2018-07-25', 'Juli 2018', NULL, NULL, 60000, NULL, NULL),
(69, 13, '2018-08-25', 'Agustus 2018', NULL, NULL, 60000, NULL, NULL),
(70, 13, '2018-09-25', 'September 2018', NULL, NULL, 60000, NULL, NULL),
(71, 13, '2018-10-25', 'Oktober 2018', NULL, NULL, 60000, NULL, NULL),
(72, 13, '2018-11-25', 'November 2018', NULL, NULL, 60000, NULL, NULL),
(73, 13, '2018-12-25', 'Desember 2018', NULL, NULL, 60000, NULL, NULL),
(74, 14, '2018-01-25', 'Januari 2018', '1805240004', '2018-05-24', 60000, 'LUNAS', 1),
(75, 14, '2018-02-25', 'Februari 2018', '1805240005', '2018-05-24', 60000, 'LUNAS', 1),
(76, 14, '2018-03-25', 'Maret 2018', NULL, NULL, 60000, NULL, NULL),
(77, 14, '2018-04-25', 'April 2018', NULL, NULL, 60000, NULL, NULL),
(78, 14, '2018-05-25', 'Mei 2018', NULL, NULL, 60000, NULL, NULL),
(79, 14, '2018-06-25', 'Juni 2018', NULL, NULL, 60000, NULL, NULL),
(80, 14, '2018-07-25', 'Juli 2018', NULL, NULL, 60000, NULL, NULL),
(81, 14, '2018-08-25', 'Agustus 2018', NULL, NULL, 60000, NULL, NULL),
(82, 14, '2018-09-25', 'September 2018', NULL, NULL, 60000, NULL, NULL),
(83, 14, '2018-10-25', 'Oktober 2018', NULL, NULL, 60000, NULL, NULL),
(84, 14, '2018-11-25', 'November 2018', NULL, NULL, 60000, NULL, NULL),
(85, 14, '2018-12-25', 'Desember 2018', NULL, NULL, 60000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `walikelas`
--

CREATE TABLE `walikelas` (
  `kelas` varchar(10) NOT NULL,
  `idguru` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `walikelas`
--

INSERT INTO `walikelas` (`kelas`, `idguru`) VALUES
('IPS X', 2),
('IPA X', 3),
('IPA XII', 4),
('IPA XI', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `db_kas`
--
ALTER TABLE `db_kas`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `idguru` (`idguru`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`idguru`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`idjab`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`idkelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`idmapel`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`idsiswa`),
  ADD KEY `fk_kelas` (`kelas`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`idspp`),
  ADD KEY `fk_admin` (`idadmin`),
  ADD KEY `fk_siswa` (`idsiswa`);

--
-- Indexes for table `walikelas`
--
ALTER TABLE `walikelas`
  ADD PRIMARY KEY (`kelas`),
  ADD KEY `fk_guru` (`idguru`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `db_kas`
--
ALTER TABLE `db_kas`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `idguru` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `idjab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `idkelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `idmapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `idsiswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `idspp` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `db_kas`
--
ALTER TABLE `db_kas`
  ADD CONSTRAINT `db_kas_ibfk_1` FOREIGN KEY (`idguru`) REFERENCES `guru` (`idguru`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`kelas`) REFERENCES `walikelas` (`kelas`);

--
-- Constraints for table `spp`
--
ALTER TABLE `spp`
  ADD CONSTRAINT `fk_admin` FOREIGN KEY (`idadmin`) REFERENCES `admin` (`idadmin`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_siswa` FOREIGN KEY (`idsiswa`) REFERENCES `siswa` (`idsiswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `walikelas`
--
ALTER TABLE `walikelas`
  ADD CONSTRAINT `walikelas_ibfk_1` FOREIGN KEY (`idguru`) REFERENCES `guru` (`idguru`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
