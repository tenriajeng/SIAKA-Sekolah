-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Mar 2019 pada 10.50
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `kd_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `foto_profil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`kd_admin`, `username`, `pass`, `foto_profil`) VALUES
(1, 'admin', 'admin', 'admin.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
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
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `kd_foto` int(11) NOT NULL,
  `nama_foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
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
-- Struktur dari tabel `guru`
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
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`kd_guru`, `nip`, `nama`, `status`, `alamat`, `tmp_lahir`, `tgl_lahir`, `jns_kelamin`, `foto_profil`) VALUES
(9, '01', 'Dra. A. Simpuruslah', '4', 'jl.sungai saddang', 'takkalalla', '1959-12-12', 'PEREMPUAN', 'profil.jpg'),
(10, '02', 'Rahmat', '7', 'jl.Ablam', 'makassar', '2000-10-06', 'LAKI-LAKI', 'profil.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE `jawaban` (
  `kd_jawaban` int(11) NOT NULL,
  `kd_siswa` int(11) NOT NULL,
  `kd_tugas` int(11) NOT NULL,
  `kd_kelas` int(11) NOT NULL,
  `link` text NOT NULL,
  `nilai_tugas` double NOT NULL DEFAULT '0',
  `nama_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `kd_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
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
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `kd_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`kd_mapel`, `nama_mapel`) VALUES
(2, 'Agama'),
(13, 'Bahasa Indonesia'),
(21, 'Bahasa Inggris I'),
(3, 'BHS.INGGRIS'),
(4, 'Biologi'),
(11, 'Ekonomi'),
(14, 'Fisika'),
(12, 'Geografi'),
(15, 'Kimia'),
(18, 'KIRT'),
(8, 'Matematika'),
(19, 'Mulok'),
(1, 'Penjas'),
(10, 'PKN'),
(5, 'Prakarya'),
(17, 'Seni Budaya'),
(6, 'Sosiologi'),
(16, 'TIK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `kd_materi` int(11) NOT NULL,
  `nama_materi` text NOT NULL,
  `nama_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`kd_materi`, `nama_materi`, `nama_file`) VALUES
(2, 'Materi 1', 'Bahan ajar biologi XI.A.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_siswa`
--

CREATE TABLE `nilai_siswa` (
  `kd_nilai` int(11) NOT NULL,
  `kd_siswa` int(11) NOT NULL,
  `kd_mapel` int(11) NOT NULL,
  `nilai` int(11) NOT NULL DEFAULT '0',
  `kd_semester` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai_siswa`
--

INSERT INTO `nilai_siswa` (`kd_nilai`, `kd_siswa`, `kd_mapel`, `nilai`, `kd_semester`) VALUES
(394, 6, 0, 0, 1),
(395, 6, 1, 0, 1),
(396, 6, 2, 0, 1),
(397, 6, 3, 0, 1),
(398, 6, 4, 0, 1),
(399, 6, 5, 0, 1),
(400, 6, 6, 0, 1),
(401, 6, 7, 0, 1),
(402, 6, 8, 0, 1),
(403, 6, 9, 0, 1),
(404, 6, 10, 0, 1),
(405, 6, 11, 0, 1),
(406, 6, 12, 0, 1),
(407, 6, 13, 0, 1),
(408, 6, 14, 0, 1),
(409, 6, 15, 0, 1),
(410, 6, 16, 0, 1),
(411, 6, 17, 0, 1),
(412, 6, 18, 0, 1),
(413, 1, 0, 0, 1),
(414, 1, 1, 0, 1),
(415, 1, 2, 0, 1),
(416, 1, 3, 0, 1),
(417, 1, 4, 0, 1),
(418, 1, 5, 0, 1),
(419, 1, 6, 0, 1),
(420, 1, 7, 0, 1),
(421, 1, 8, 0, 1),
(422, 1, 9, 0, 1),
(423, 1, 10, 0, 1),
(424, 1, 11, 0, 1),
(425, 1, 12, 0, 1),
(426, 1, 13, 0, 1),
(427, 1, 14, 0, 1),
(428, 1, 15, 0, 1),
(429, 1, 16, 0, 1),
(430, 1, 17, 0, 1),
(431, 1, 18, 0, 1),
(432, 14, 0, 0, 1),
(433, 14, 1, 0, 1),
(434, 14, 2, 0, 1),
(435, 14, 3, 0, 1),
(436, 14, 4, 0, 1),
(437, 14, 5, 0, 1),
(438, 14, 6, 0, 1),
(439, 14, 7, 0, 1),
(440, 14, 8, 0, 1),
(441, 14, 9, 0, 1),
(442, 14, 10, 0, 1),
(443, 14, 11, 0, 1),
(444, 14, 12, 0, 1),
(445, 14, 13, 0, 1),
(446, 14, 14, 0, 1),
(447, 14, 15, 0, 1),
(448, 14, 16, 0, 1),
(449, 14, 17, 0, 1),
(450, 14, 18, 0, 1),
(451, 14, 0, 0, 2),
(452, 14, 1, 0, 2),
(453, 14, 2, 0, 2),
(454, 14, 3, 0, 2),
(455, 14, 4, 0, 2),
(456, 14, 5, 0, 2),
(457, 14, 6, 0, 2),
(458, 14, 7, 0, 2),
(459, 14, 8, 0, 2),
(460, 14, 9, 0, 2),
(461, 14, 10, 0, 2),
(462, 14, 11, 0, 2),
(463, 14, 12, 0, 2),
(464, 14, 13, 0, 2),
(465, 14, 14, 0, 2),
(466, 14, 15, 0, 2),
(467, 14, 16, 0, 2),
(468, 14, 17, 0, 2),
(469, 14, 18, 0, 2),
(470, 21, 0, 0, 1),
(471, 21, 1, 0, 1),
(472, 21, 2, 0, 1),
(473, 21, 3, 0, 1),
(474, 21, 4, 0, 1),
(475, 21, 5, 0, 1),
(476, 21, 6, 0, 1),
(477, 21, 7, 0, 1),
(478, 21, 8, 0, 1),
(479, 21, 9, 0, 1),
(480, 21, 10, 0, 1),
(481, 21, 11, 0, 1),
(482, 21, 12, 0, 1),
(483, 21, 13, 0, 1),
(484, 21, 14, 0, 1),
(485, 21, 15, 0, 1),
(486, 21, 16, 0, 1),
(487, 21, 17, 0, 1),
(488, 21, 18, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

CREATE TABLE `semester` (
  `kd_semester` int(11) NOT NULL,
  `nm_semester` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `semester`
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
-- Struktur dari tabel `siswa`
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
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`kd_siswa`, `kd_kelas`, `nis`, `nama`, `alamat`, `tmp_lahir`, `tgl_lahir`, `jns_kelamin`, `foto_profil`) VALUES
(21, 4, '210101', 'Alfandi', 'jl.veteran selatan', 'makassar', '2003-01-09', 'LAKI-LAKI', 'profil.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `kd_tugas` int(11) NOT NULL,
  `nama_tugas` text NOT NULL,
  `nama_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`kd_tugas`, `nama_tugas`, `nama_file`) VALUES
(5, 'tugas 1', 'Tugas 1 biologi.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wali_kelas`
--

CREATE TABLE `wali_kelas` (
  `kd_wali` int(11) NOT NULL,
  `kd_guru` int(11) NOT NULL,
  `kd_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wali_kelas`
--

INSERT INTO `wali_kelas` (`kd_wali`, `kd_guru`, `kd_kelas`) VALUES
(1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`kd_admin`);

--
-- Indeks untuk tabel `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`kd_chat`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`kd_foto`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`kd_guru`);

--
-- Indeks untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`kd_jawaban`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kd_kelas`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kd_mapel`),
  ADD UNIQUE KEY `nama_mapel` (`nama_mapel`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`kd_materi`);

--
-- Indeks untuk tabel `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD PRIMARY KEY (`kd_nilai`);

--
-- Indeks untuk tabel `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`kd_semester`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`kd_siswa`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indeks untuk tabel `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`kd_tugas`);

--
-- Indeks untuk tabel `wali_kelas`
--
ALTER TABLE `wali_kelas`
  ADD PRIMARY KEY (`kd_wali`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `kd_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `chat`
--
ALTER TABLE `chat`
  MODIFY `kd_chat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `kd_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `kd_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `kd_jawaban` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `kd_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `kd_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `kd_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  MODIFY `kd_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=489;

--
-- AUTO_INCREMENT untuk tabel `semester`
--
ALTER TABLE `semester`
  MODIFY `kd_semester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `kd_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tugas`
--
ALTER TABLE `tugas`
  MODIFY `kd_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `wali_kelas`
--
ALTER TABLE `wali_kelas`
  MODIFY `kd_wali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
