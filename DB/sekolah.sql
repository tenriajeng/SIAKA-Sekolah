-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2019 at 01:12 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `kd_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `foto_profil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`kd_admin`, `username`, `pass`, `foto_profil`) VALUES
(1, 'admin', 'admin', 'Japan - 1941 Dec__ Luzon_ Private_ Imperial Japanese Army.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `kd_foto` int(11) NOT NULL,
  `nama_foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`kd_foto`, `nama_foto`) VALUES
(1, 'Anak-SMA.jpg'),
(2, 'kenapa-sih-ngelarang-anak-sma-party-kelulusan-pikiran-mereka-kan-cuma-sesederhana-hal-hal-ini-aja-1493796759.jpg'),
(3, 'Untitled-2-700x400.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `kd_guru` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `tmp_lahir` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jns_kelamin` varchar(10) NOT NULL,
  `foto_profil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`kd_guru`, `nip`, `nama`, `status`, `alamat`, `tmp_lahir`, `tgl_lahir`, `jns_kelamin`, `foto_profil`) VALUES
(1, '1010', 'ito', '1', 'btp', 'soppeng', '1997-08-13', 'LAKI-LAKI', 'YDXJ0031.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kd_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kd_kelas`, `nama_kelas`) VALUES
(1, 'X.B'),
(2, 'XI.B'),
(3, 'XII.B'),
(4, 'X.A'),
(5, 'XI.A'),
(6, 'XII.A');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `kd_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`kd_mapel`, `nama_mapel`) VALUES
(1, 'Matematika'),
(2, 'TIK'),
(3, 'BHS.INGGRIS'),
(4, 'Biologi'),
(5, 'Geografi'),
(6, 'Sejarah');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `kd_materi` int(11) NOT NULL,
  `nama_materi` text NOT NULL,
  `nama_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`kd_materi`, `nama_materi`, `nama_file`) VALUES
(11, 'BHS.INGGRIS Kelas X', '2018 soal osk komputer.pdf'),
(14, 'Bioloagi Kelas XI', 'download-fullpapers-001 Sri Endah Kinasih----mAKNA sUMPAH pOCONG.pdf'),
(18, 'Geografi X', 'cpnstatanegara.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_siswa`
--

CREATE TABLE `nilai_siswa` (
  `kd_nilai` int(11) NOT NULL,
  `kd_siswa` int(11) NOT NULL,
  `kd_mapel` int(11) NOT NULL,
  `nilai` int(11) NOT NULL DEFAULT '0',
  `kd_semester` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_siswa`
--

INSERT INTO `nilai_siswa` (`kd_nilai`, `kd_siswa`, `kd_mapel`, `nilai`, `kd_semester`) VALUES
(1, 1, 1, 90, 2),
(2, 1, 2, 89, 1),
(3, 1, 4, 60, 2),
(4, 1, 3, 34, 3),
(5, 1, 6, 87, 2),
(6, 1, 5, 56, 2),
(7, 2, 2, 98, 1),
(8, 2, 1, 10, 2),
(9, 2, 3, 20, 2),
(10, 2, 4, 30, 2),
(11, 2, 5, 40, 2),
(12, 2, 6, 50, 2);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `kd_semester` int(11) NOT NULL,
  `nm_semester` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`kd_semester`, `nm_semester`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `kd_siswa` int(11) NOT NULL,
  `kd_kelas` int(11) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `tmp_lahir` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jns_kelamin` varchar(10) NOT NULL,
  `foto_profil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`kd_siswa`, `kd_kelas`, `nis`, `nama`, `alamat`, `tmp_lahir`, `tgl_lahir`, `jns_kelamin`, `foto_profil`) VALUES
(1, 1, '152246', 'ilhamT', 'btp', 'soppeng', '1997-04-16', 'LAKI-LAKI', 'sharpshooter-merc-bundle.jpg'),
(2, 1, '152247', 'ito', 'btp', 'makassar', '1997-04-16', 'LAKI-LAKI', 'fletcher.jpg'),
(4, 4, '152250', 'muhammad', 'antang', 'kalimantan', '0000-00-00', 'LAKI-LAKI', 'IMG-20180715-WA0013.jpg'),
(6, 4, '152251', 'muhammad', 'antang', 'kalimantan', '2019-02-05', 'LAKI-LAKI', 'IMG-20180715-WA0013.jpg'),
(10, 4, '152245', 'nurul', 'malaka', 'soppeng', '0000-00-00', 'PEREMPUAN', 'f-3.jpg'),
(12, 4, '152244', 'nurul', 'malaka', 'soppeng', '0000-00-00', 'PEREMPUAN', '20180304_195545.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `kd_tugas` int(11) NOT NULL,
  `nama_tugas` text NOT NULL,
  `nama_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`kd_tugas`, `nama_tugas`, `nama_file`) VALUES
(2, 'Tugas 2', 'Soal Psikotest - Aritmatik.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `wali_kelas`
--

CREATE TABLE `wali_kelas` (
  `kd_wali` int(11) NOT NULL,
  `kd_guru` int(11) NOT NULL,
  `kd_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wali_kelas`
--

INSERT INTO `wali_kelas` (`kd_wali`, `kd_guru`, `kd_kelas`) VALUES
(1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`kd_admin`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`kd_foto`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`kd_guru`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kd_kelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kd_mapel`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`kd_materi`);

--
-- Indexes for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD PRIMARY KEY (`kd_nilai`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`kd_semester`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`kd_siswa`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`kd_tugas`);

--
-- Indexes for table `wali_kelas`
--
ALTER TABLE `wali_kelas`
  ADD PRIMARY KEY (`kd_wali`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `kd_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `kd_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `kd_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `kd_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `kd_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `kd_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  MODIFY `kd_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `kd_semester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `kd_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `kd_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wali_kelas`
--
ALTER TABLE `wali_kelas`
  MODIFY `kd_wali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
