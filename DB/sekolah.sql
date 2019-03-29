-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 03:58 AM
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
(1, 'admin', 'admin', 'admin.png');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `kd_chat` int(11) NOT NULL,
  `kd_siswa` int(11) NOT NULL,
  `message` text NOT NULL,
  `to_kd_guru` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, '07052013109.jpg'),
(2, '07052013110.jpg'),
(3, '07052013112.jpg'),
(4, '07052013108.jpg'),
(5, '07052013113.jpg'),
(6, '07052013114.jpg'),
(7, '07052013115.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `kd_guru` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
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

INSERT INTO `guru` (`kd_guru`, `nip`, `pass`, `nama`, `status`, `alamat`, `tmp_lahir`, `tgl_lahir`, `jns_kelamin`, `foto_profil`) VALUES
(9, '01', '01', 'Dra. A. Simpuruslah', '3', 'jl.sungai saddang', 'takkalalla', '2000-10-24', 'LAKI-LAKI', 'IMG-20190316-WA0004.jpg'),
(10, '02', '002', 'Rahmat', '2', 'jl.Ablam', 'makassar', '2000-10-24', 'LAKI-LAKI', 'Deadpool-Logo-Wallpaper-On-Wallpaper-Hd-4.jpg'),
(11, '1290390', 'iuyri', 'iowu', '1', 'qwe', 'sf', '2000-10-24', 'LAKI-LAKI', 'IMG_6169  paskecil.jpg'),
(12, '1290390', 'asihdjasdh', 'adas', '1', 'asdasd', 'sf', '2000-10-24', 'LAKI-LAKI', 'IMG_6169  paskecil.jpg'),
(13, '1290390', 'tenriajeng', 'ilham', '1', 'qwe', 'sf', '2000-10-24', 'LAKI-LAKI', 'dual-monitor-wallpaper-gaming-pc-master-race.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `guru_mapel`
--

CREATE TABLE `guru_mapel` (
  `kd_gm` int(11) NOT NULL,
  `kd_guru` int(11) NOT NULL,
  `kd_mapel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru_mapel`
--

INSERT INTO `guru_mapel` (`kd_gm`, `kd_guru`, `kd_mapel`) VALUES
(1, 9, 1),
(2, 9, 3),
(4, 13, 1),
(5, 13, 3),
(6, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `kd_jawaban` int(11) NOT NULL,
  `kd_siswa` int(11) NOT NULL,
  `kd_tugas` int(11) NOT NULL,
  `kd_kelas` int(11) NOT NULL,
  `kd_mapel` int(11) NOT NULL,
  `link` text NOT NULL,
  `nilai_tugas` double NOT NULL DEFAULT '0',
  `nama_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`kd_jawaban`, `kd_siswa`, `kd_tugas`, `kd_kelas`, `kd_mapel`, `link`, `nilai_tugas`, `nama_file`) VALUES
(1, 21, 6, 1, 1, '', 90, 'printkartupeserta.pdf');

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
(1, 'X.IIS'),
(2, 'XI.IPS'),
(3, 'XII.IPS'),
(4, 'X.MIA'),
(5, 'XI.IPA'),
(6, 'XII.IPA'),
(7, 'BUKAN WALI KELAS');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `kd_mapel` int(11) NOT NULL,
  `kd_kelas` int(11) NOT NULL,
  `nama_mapel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`kd_mapel`, `kd_kelas`, `nama_mapel`) VALUES
(1, 3, 'IPA'),
(3, 5, 'IPS');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `kd_materi` int(11) NOT NULL,
  `kd_kelas` int(11) NOT NULL,
  `kd_mapel` int(11) NOT NULL,
  `nama_materi` text NOT NULL,
  `nama_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`kd_materi`, `kd_kelas`, `kd_mapel`, `nama_materi`, `nama_file`) VALUES
(1, 1, 1, 'one piece', 'IMG_20190316_112317-dikonversi.pdf');

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
(1, 1, 1, 1, 2),
(2, 21, 0, 0, 1),
(3, 21, 1, 0, 1),
(4, 21, 2, 0, 1),
(5, 21, 3, 0, 1),
(6, 21, 4, 0, 1),
(7, 21, 5, 0, 1),
(8, 21, 6, 0, 1),
(9, 21, 7, 0, 1),
(10, 21, 8, 0, 1),
(11, 21, 9, 0, 1),
(12, 21, 10, 0, 1),
(13, 21, 11, 0, 1),
(14, 21, 12, 0, 1),
(15, 21, 13, 0, 1),
(16, 21, 14, 0, 1),
(17, 21, 15, 0, 1),
(18, 21, 16, 0, 1),
(19, 21, 17, 0, 1),
(20, 21, 18, 0, 1),
(21, 21, 0, 0, 2),
(22, 21, 1, 0, 2),
(23, 21, 2, 0, 2),
(24, 21, 3, 0, 2),
(25, 21, 4, 0, 2),
(26, 21, 5, 0, 2),
(27, 21, 6, 0, 2),
(28, 21, 7, 0, 2),
(29, 21, 8, 0, 2),
(30, 21, 9, 0, 2),
(31, 21, 10, 0, 2),
(32, 21, 11, 0, 2),
(33, 21, 12, 0, 2),
(34, 21, 13, 0, 2),
(35, 21, 14, 0, 2),
(36, 21, 15, 0, 2),
(37, 21, 16, 0, 2),
(38, 21, 17, 0, 2),
(39, 21, 18, 0, 2),
(40, 22, 0, 0, 1),
(41, 22, 1, 0, 1),
(42, 22, 2, 0, 1),
(43, 22, 3, 0, 1),
(44, 22, 4, 0, 1),
(45, 22, 5, 0, 1),
(46, 22, 6, 0, 1),
(47, 22, 7, 0, 1),
(48, 22, 8, 0, 1),
(49, 22, 9, 0, 1),
(50, 22, 10, 0, 1),
(51, 22, 11, 0, 1),
(52, 22, 12, 0, 1),
(53, 22, 13, 0, 1),
(54, 22, 14, 0, 1),
(55, 22, 15, 0, 1),
(56, 22, 16, 0, 1),
(57, 22, 17, 0, 1),
(58, 22, 18, 0, 1);

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
(21, 1, '210101', 'Alfandi', 'jl.veteran selatan', 'makassar', '2003-01-09', 'LAKI-LAKI', 'profil.jpg'),
(22, 5, '152246', 'ilham', 'jl. perintis kemerdekaan no.4', 'soppeng', '2000-10-24', 'LAKI-LAKI', '0yknWeg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `kd_tugas` int(11) NOT NULL,
  `kd_mapel` int(11) NOT NULL,
  `kd_kelas` int(11) NOT NULL,
  `nama_tugas` text NOT NULL,
  `nama_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`kd_tugas`, `kd_mapel`, `kd_kelas`, `nama_tugas`, `nama_file`) VALUES
(6, 1, 5, 'tugas besar 2', 'JURNAL PISING.docx'),
(7, 3, 4, 'tugas besar', 'JURNAL MARDIANA.docx');

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
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`kd_chat`);

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
-- Indexes for table `guru_mapel`
--
ALTER TABLE `guru_mapel`
  ADD PRIMARY KEY (`kd_gm`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`kd_jawaban`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kd_kelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kd_mapel`),
  ADD UNIQUE KEY `nama_mapel` (`nama_mapel`);

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
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `kd_chat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `kd_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `kd_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `guru_mapel`
--
ALTER TABLE `guru_mapel`
  MODIFY `kd_gm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `kd_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `kd_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `kd_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `kd_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  MODIFY `kd_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `kd_semester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `kd_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `kd_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wali_kelas`
--
ALTER TABLE `wali_kelas`
  MODIFY `kd_wali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
