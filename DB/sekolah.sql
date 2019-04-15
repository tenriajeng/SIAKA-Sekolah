-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2019 pada 04.33
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

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
(1, 'admin', 'admin', 'profil.jpg');

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
(12, '07052013110.jpg'),
(13, '07052013112.jpg'),
(14, '07052013108.jpg'),
(15, '07052013114.jpg'),
(16, '07052013115.jpg'),
(17, '07052013113.jpg'),
(18, 'IMG20190411190812.jpg'),
(19, 'IMG20190411190812.jpg'),
(20, 'IMG20190411190812.jpg'),
(21, 'logo-unhas-hitam-putih.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
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
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`kd_guru`, `nip`, `pass`, `nama`, `status`, `alamat`, `tmp_lahir`, `tgl_lahir`, `jns_kelamin`, `foto_profil`) VALUES
(14, '0101', '01', 'Idifupkans, S.Pd', '7', 'jalan daeng supu nipa-nipa antang', 'saludengen', '2000-10-24', 'LAKI-LAKI', 'IMG20190411190812.jpg'),
(15, '0102', '02', 'Drs. Abd. Gani, M.A.', '1', 'jl.veteran selatan', 'sinjai', '1986-08-25', 'LAKI-LAKI', 'profil.jpg'),
(16, '0103', '03', 'Bamabas Pangloli, S.', '5', 'jl.sungai saddang IV', 'nosu', '1969-12-26', 'LAKI-LAKI', 'profil.jpg'),
(17, '0104', '04', 'Dra. La Jalia', '2', 'jl.sungai saddang III', 'mabolu', '1960-12-12', 'PEREMPUAN', 'profil.jpg'),
(18, '0105', '05', 'Simon Rapa, S.Pd', '6', 'jl.veteran utara', 'bokin', '1969-06-25', 'LAKI-LAKI', 'profil.jpg'),
(19, '0106', '06', 'Nur Mei, S.Pd., M.Pd', '3', 'jl.veteran selatan', 'selayar', '1976-05-15', 'PEREMPUAN', 'profil.jpg'),
(21, '0107', '07', 'Pither Paemboan, S.P', '7', 'jl.veteran selatan', 'Uluway tator', '1972-04-11', 'LAKI-LAKI', 'profil.jpg'),
(22, '0108', '08', 'Doni Kumala Putra, S', '7', 'jl.sungai saddang II', 'lebbeng', '1991-11-12', 'LAKI-LAKI', 'profil.jpg'),
(23, '0109', '09', 'Yohana, B.AB, S.Pd', '7', 'jl.veteran selatan', 'Toraja', '1967-08-17', 'PEREMPUAN', 'profil.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru_mapel`
--

CREATE TABLE `guru_mapel` (
  `kd_gm` int(11) NOT NULL,
  `kd_guru` int(11) NOT NULL,
  `kd_mapel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru_mapel`
--

INSERT INTO `guru_mapel` (`kd_gm`, `kd_guru`, `kd_mapel`) VALUES
(1, 9, 1),
(2, 9, 3),
(5, 14, 3),
(7, 9, 5),
(8, 9, 4),
(9, 14, 0),
(14, 14, 0),
(16, 14, 4),
(17, 14, 12),
(19, 14, 8),
(20, 14, 7),
(21, 14, 13),
(22, 14, 11),
(23, 14, 6),
(24, 14, 5),
(25, 14, 10),
(26, 14, 9),
(27, 14, 14),
(28, 14, 15),
(29, 14, 45),
(30, 14, 2),
(31, 14, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
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
-- Dumping data untuk tabel `jawaban`
--

INSERT INTO `jawaban` (`kd_jawaban`, `kd_siswa`, `kd_tugas`, `kd_kelas`, `kd_mapel`, `link`, `nilai_tugas`, `nama_file`) VALUES
(1, 24, 9, 1, 1, '', 100, 'printkartupeserta.pdf'),
(2, 25, 9, 1, 2, '', 90, ''),
(6, 24, 9, 6, 1, 'https://www.youtube.com/', 80, 'ROMANG LOMPOA.xlsx');

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
  `kd_kelas` int(11) NOT NULL,
  `nama_mapel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`kd_mapel`, `kd_kelas`, `nama_mapel`) VALUES
(1, 1, 'BHS. INGGRIS 1'),
(2, 4, 'BHS. INGGRIS'),
(3, 1, 'AGAMA 1'),
(4, 4, 'AGAMA'),
(5, 1, 'MATEMATIKA 1'),
(6, 4, 'MATEMATIKA'),
(7, 1, 'BHS. INDONESIA 1'),
(8, 4, 'BHS. INDONESIA'),
(9, 1, 'PKN 1'),
(10, 4, 'PKN'),
(11, 4, 'FISIKA'),
(12, 4, 'BIOLOGI'),
(13, 1, 'EKONOMI'),
(14, 1, 'SOSIOLOGI'),
(15, 6, 'AGAMA XII.IPA'),
(45, 6, 'IPA XII.IPA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `kd_materi` int(11) NOT NULL,
  `kd_kelas` int(11) NOT NULL,
  `kd_mapel` int(11) NOT NULL,
  `Pupload` varchar(20) NOT NULL,
  `nama_materi` text NOT NULL,
  `nama_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`kd_materi`, `kd_kelas`, `kd_mapel`, `Pupload`, `nama_materi`, `nama_file`) VALUES
(5, 6, 15, '', 'one piece eps 900', 'AHP.rar'),
(6, 6, 45, '', 'one piece eps 909', 'JURNAL MARDIANA.docx'),
(7, 6, 15, 'Idifupkans, S.Pd', 'apaaaa', 'JURNAL MARDIANA.docx');

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
(289, 24, 1, 0, 1),
(290, 24, 2, 0, 1),
(291, 24, 3, 0, 1),
(292, 24, 4, 0, 1),
(293, 24, 5, 0, 1),
(294, 24, 6, 0, 1),
(295, 24, 7, 0, 1),
(296, 24, 8, 0, 1),
(297, 24, 9, 0, 1),
(298, 24, 10, 0, 1),
(299, 24, 11, 0, 1),
(300, 24, 12, 0, 1),
(301, 24, 13, 0, 1),
(302, 24, 14, 0, 1),
(303, 24, 15, 0, 1),
(304, 24, 16, 0, 1),
(305, 24, 17, 0, 1),
(306, 24, 18, 0, 1),
(307, 24, 0, 0, 2),
(308, 24, 1, 0, 2),
(309, 24, 2, 0, 2),
(310, 24, 3, 0, 2),
(311, 24, 4, 0, 2),
(312, 24, 5, 0, 2),
(313, 24, 6, 0, 2),
(314, 24, 7, 0, 2),
(315, 24, 8, 0, 2),
(316, 24, 9, 0, 2),
(317, 24, 10, 0, 2),
(318, 24, 11, 0, 2),
(319, 24, 12, 0, 2),
(320, 24, 13, 0, 2),
(321, 24, 14, 0, 2),
(322, 24, 15, 0, 2),
(323, 24, 16, 0, 2),
(324, 24, 17, 0, 2),
(325, 24, 18, 0, 2),
(326, 24, 0, 0, 3),
(327, 24, 1, 0, 3),
(328, 24, 2, 0, 3),
(329, 24, 3, 0, 3),
(330, 24, 4, 0, 3),
(331, 24, 5, 0, 3),
(332, 24, 6, 0, 3),
(333, 24, 7, 0, 3),
(334, 24, 8, 0, 3),
(335, 24, 9, 0, 3),
(336, 24, 10, 0, 3),
(337, 24, 11, 0, 3),
(338, 24, 12, 0, 3),
(339, 24, 13, 0, 3),
(340, 24, 14, 0, 3),
(341, 24, 15, 90, 3),
(342, 24, 16, 0, 3),
(343, 24, 17, 0, 3),
(344, 24, 18, 0, 3),
(345, 24, 19, 0, 3),
(346, 24, 20, 0, 3),
(347, 24, 21, 0, 3),
(348, 24, 22, 0, 3),
(349, 24, 23, 0, 3),
(350, 24, 24, 0, 3),
(351, 24, 25, 0, 3),
(352, 24, 26, 0, 3),
(353, 24, 27, 0, 3),
(354, 24, 28, 0, 3),
(355, 24, 29, 0, 3),
(356, 24, 30, 0, 3),
(357, 24, 31, 0, 3),
(358, 24, 32, 0, 3),
(359, 24, 33, 0, 3),
(360, 24, 34, 0, 3),
(361, 24, 35, 0, 3),
(362, 24, 36, 0, 3),
(363, 24, 37, 0, 3),
(364, 24, 38, 0, 3),
(365, 24, 39, 0, 3),
(366, 24, 40, 0, 3),
(367, 24, 41, 0, 3),
(368, 24, 42, 0, 3),
(369, 24, 43, 0, 3),
(370, 24, 44, 0, 3),
(371, 24, 45, 100, 3),
(372, 24, 46, 0, 3),
(373, 24, 47, 0, 3),
(374, 24, 48, 0, 3),
(375, 24, 49, 0, 3),
(376, 24, 50, 0, 3),
(377, 24, 51, 0, 3),
(378, 24, 52, 0, 3),
(379, 24, 53, 0, 3),
(380, 24, 54, 0, 3),
(381, 24, 55, 0, 3),
(382, 24, 56, 0, 3),
(383, 24, 57, 0, 3),
(384, 24, 58, 0, 3),
(385, 24, 59, 0, 3),
(386, 24, 60, 0, 3),
(387, 24, 61, 0, 3),
(388, 24, 62, 0, 3),
(389, 24, 63, 0, 3),
(390, 24, 64, 0, 3),
(391, 24, 65, 0, 3),
(392, 24, 66, 0, 3),
(393, 24, 67, 0, 3),
(394, 24, 68, 0, 3),
(395, 24, 69, 0, 3),
(396, 24, 70, 0, 3),
(397, 24, 71, 0, 3),
(398, 24, 72, 0, 3),
(399, 24, 73, 0, 3),
(400, 24, 74, 0, 3),
(401, 24, 75, 0, 3),
(402, 24, 76, 0, 3),
(403, 24, 77, 0, 3),
(404, 24, 78, 0, 3),
(405, 24, 79, 0, 3),
(406, 24, 80, 0, 3),
(407, 24, 81, 0, 3),
(408, 24, 82, 0, 3),
(409, 24, 83, 0, 3),
(410, 24, 84, 0, 3),
(411, 24, 85, 0, 3),
(412, 24, 86, 0, 3),
(413, 24, 87, 0, 3),
(414, 24, 88, 0, 3),
(415, 24, 89, 0, 3),
(416, 24, 90, 0, 3),
(417, 24, 91, 0, 3),
(418, 24, 92, 0, 3),
(419, 24, 93, 0, 3),
(420, 24, 94, 0, 3),
(421, 24, 95, 0, 3),
(422, 24, 96, 0, 3),
(423, 24, 97, 0, 3),
(424, 24, 98, 0, 3),
(425, 24, 99, 0, 3),
(426, 25, 0, 0, 1),
(427, 25, 1, 0, 1),
(428, 25, 2, 0, 1),
(429, 25, 3, 0, 1),
(430, 25, 4, 0, 1),
(431, 25, 5, 0, 1),
(432, 25, 6, 0, 1),
(433, 25, 7, 0, 1),
(434, 25, 8, 0, 1),
(435, 25, 9, 0, 1),
(436, 25, 10, 0, 1),
(437, 25, 11, 0, 1),
(438, 25, 12, 0, 1),
(439, 25, 13, 0, 1),
(440, 25, 14, 0, 1),
(441, 25, 15, 0, 1),
(442, 25, 16, 0, 1),
(443, 25, 17, 0, 1),
(444, 25, 18, 0, 1),
(445, 25, 19, 0, 1),
(446, 25, 20, 0, 1),
(447, 25, 21, 0, 1),
(448, 25, 22, 0, 1),
(449, 25, 23, 0, 1),
(450, 25, 24, 0, 1),
(451, 25, 25, 0, 1),
(452, 25, 26, 0, 1),
(453, 25, 27, 0, 1),
(454, 25, 28, 0, 1),
(455, 25, 29, 0, 1),
(456, 25, 30, 0, 1),
(457, 25, 31, 0, 1),
(458, 25, 32, 0, 1),
(459, 25, 33, 0, 1),
(460, 25, 34, 0, 1),
(461, 25, 35, 0, 1),
(462, 25, 36, 0, 1),
(463, 25, 37, 0, 1),
(464, 25, 38, 0, 1),
(465, 25, 39, 0, 1),
(466, 25, 40, 0, 1),
(467, 25, 41, 0, 1),
(468, 25, 42, 0, 1),
(469, 25, 43, 0, 1),
(470, 25, 44, 0, 1),
(471, 25, 45, 0, 1),
(472, 25, 46, 0, 1),
(473, 25, 47, 0, 1),
(474, 25, 48, 0, 1),
(475, 25, 49, 0, 1),
(476, 25, 50, 0, 1),
(477, 25, 51, 0, 1),
(478, 25, 52, 0, 1),
(479, 25, 53, 0, 1),
(480, 25, 54, 0, 1),
(481, 25, 55, 0, 1),
(482, 25, 56, 0, 1),
(483, 25, 57, 0, 1),
(484, 25, 58, 0, 1),
(485, 25, 59, 0, 1),
(486, 25, 60, 0, 1),
(487, 25, 61, 0, 1),
(488, 25, 62, 0, 1),
(489, 25, 63, 0, 1),
(490, 25, 64, 0, 1),
(491, 25, 65, 0, 1),
(492, 25, 66, 0, 1),
(493, 25, 67, 0, 1),
(494, 25, 68, 0, 1),
(495, 25, 69, 0, 1),
(496, 25, 70, 0, 1),
(497, 25, 71, 0, 1),
(498, 25, 72, 0, 1),
(499, 25, 73, 0, 1),
(500, 25, 74, 0, 1),
(501, 25, 75, 0, 1),
(502, 25, 76, 0, 1),
(503, 25, 77, 0, 1),
(504, 25, 78, 0, 1),
(505, 25, 79, 0, 1),
(506, 25, 80, 0, 1),
(507, 25, 81, 0, 1),
(508, 25, 82, 0, 1),
(509, 25, 83, 0, 1),
(510, 25, 84, 0, 1),
(511, 25, 85, 0, 1),
(512, 25, 86, 0, 1),
(513, 25, 87, 0, 1),
(514, 25, 88, 0, 1),
(515, 25, 89, 0, 1),
(516, 25, 90, 0, 1),
(517, 25, 91, 0, 1),
(518, 25, 92, 0, 1),
(519, 25, 93, 0, 1),
(520, 25, 94, 0, 1),
(521, 25, 95, 0, 1),
(522, 25, 96, 0, 1),
(523, 25, 97, 0, 1),
(524, 25, 98, 0, 1),
(525, 25, 99, 0, 1),
(526, 30, 0, 0, 1),
(527, 30, 1, 0, 1),
(528, 30, 2, 0, 1),
(529, 30, 3, 0, 1),
(530, 30, 4, 0, 1),
(531, 30, 5, 0, 1),
(532, 30, 6, 0, 1),
(533, 30, 7, 0, 1),
(534, 30, 8, 0, 1),
(535, 30, 9, 0, 1),
(536, 30, 10, 0, 1),
(537, 30, 11, 0, 1),
(538, 30, 12, 0, 1),
(539, 30, 13, 0, 1),
(540, 30, 14, 0, 1),
(541, 30, 15, 0, 1),
(542, 30, 16, 0, 1),
(543, 30, 17, 0, 1),
(544, 30, 18, 0, 1),
(545, 30, 19, 0, 1),
(546, 30, 20, 0, 1),
(547, 30, 21, 0, 1),
(548, 30, 22, 0, 1),
(549, 30, 23, 0, 1),
(550, 30, 24, 0, 1),
(551, 30, 25, 0, 1),
(552, 30, 26, 0, 1),
(553, 30, 27, 0, 1),
(554, 30, 28, 0, 1),
(555, 30, 29, 0, 1),
(556, 30, 30, 0, 1),
(557, 30, 31, 0, 1),
(558, 30, 32, 0, 1),
(559, 30, 33, 0, 1),
(560, 30, 34, 0, 1),
(561, 30, 35, 0, 1),
(562, 30, 36, 0, 1),
(563, 30, 37, 0, 1),
(564, 30, 38, 0, 1),
(565, 30, 39, 0, 1),
(566, 30, 40, 0, 1),
(567, 30, 41, 0, 1),
(568, 30, 42, 0, 1),
(569, 30, 43, 0, 1),
(570, 30, 44, 0, 1),
(571, 30, 45, 0, 1),
(572, 30, 46, 0, 1),
(573, 30, 47, 0, 1),
(574, 30, 48, 0, 1),
(575, 30, 49, 0, 1),
(576, 30, 50, 0, 1),
(577, 30, 51, 0, 1),
(578, 30, 52, 0, 1),
(579, 30, 53, 0, 1),
(580, 30, 54, 0, 1),
(581, 30, 55, 0, 1),
(582, 30, 56, 0, 1),
(583, 30, 57, 0, 1),
(584, 30, 58, 0, 1),
(585, 30, 59, 0, 1),
(586, 30, 60, 0, 1),
(587, 30, 61, 0, 1),
(588, 30, 62, 0, 1),
(589, 30, 63, 0, 1),
(590, 30, 64, 0, 1),
(591, 30, 65, 0, 1),
(592, 30, 66, 0, 1),
(593, 30, 67, 0, 1),
(594, 30, 68, 0, 1),
(595, 30, 69, 0, 1),
(596, 30, 70, 0, 1),
(597, 30, 71, 0, 1),
(598, 30, 72, 0, 1),
(599, 30, 73, 0, 1),
(600, 30, 74, 0, 1),
(601, 30, 75, 0, 1),
(602, 30, 76, 0, 1),
(603, 30, 77, 0, 1),
(604, 30, 78, 0, 1),
(605, 30, 79, 0, 1),
(606, 30, 80, 0, 1),
(607, 30, 81, 0, 1),
(608, 30, 82, 0, 1),
(609, 30, 83, 0, 1),
(610, 30, 84, 0, 1),
(611, 30, 85, 0, 1),
(612, 30, 86, 0, 1),
(613, 30, 87, 0, 1),
(614, 30, 88, 0, 1),
(615, 30, 89, 0, 1),
(616, 30, 90, 0, 1),
(617, 30, 91, 0, 1),
(618, 30, 92, 0, 1),
(619, 30, 93, 0, 1),
(620, 30, 94, 0, 1),
(621, 30, 95, 0, 1),
(622, 30, 96, 0, 1),
(623, 30, 97, 0, 1),
(624, 30, 98, 0, 1),
(625, 30, 99, 0, 1),
(626, 32, 0, 0, 1),
(627, 32, 1, 0, 1),
(628, 32, 2, 0, 1),
(629, 32, 3, 0, 1),
(630, 32, 4, 0, 1),
(631, 32, 5, 0, 1),
(632, 32, 6, 0, 1),
(633, 32, 7, 0, 1),
(634, 32, 8, 0, 1),
(635, 32, 9, 0, 1),
(636, 32, 10, 0, 1),
(637, 32, 11, 0, 1),
(638, 32, 12, 0, 1),
(639, 32, 13, 0, 1),
(640, 32, 14, 0, 1),
(641, 32, 15, 0, 1),
(642, 32, 16, 0, 1),
(643, 32, 17, 0, 1),
(644, 32, 18, 0, 1),
(645, 32, 19, 0, 1),
(646, 32, 20, 0, 1),
(647, 32, 21, 0, 1),
(648, 32, 22, 0, 1),
(649, 32, 23, 0, 1),
(650, 32, 24, 0, 1),
(651, 32, 25, 0, 1),
(652, 32, 26, 0, 1),
(653, 32, 27, 0, 1),
(654, 32, 28, 0, 1),
(655, 32, 29, 0, 1),
(656, 32, 30, 0, 1),
(657, 32, 31, 0, 1),
(658, 32, 32, 0, 1),
(659, 32, 33, 0, 1),
(660, 32, 34, 0, 1),
(661, 32, 35, 0, 1),
(662, 32, 36, 0, 1),
(663, 32, 37, 0, 1),
(664, 32, 38, 0, 1),
(665, 32, 39, 0, 1),
(666, 32, 40, 0, 1),
(667, 32, 41, 0, 1),
(668, 32, 42, 0, 1),
(669, 32, 43, 0, 1),
(670, 32, 44, 0, 1),
(671, 32, 45, 0, 1),
(672, 32, 46, 0, 1),
(673, 32, 47, 0, 1),
(674, 32, 48, 0, 1),
(675, 32, 49, 0, 1),
(676, 32, 50, 0, 1),
(677, 32, 51, 0, 1),
(678, 32, 52, 0, 1),
(679, 32, 53, 0, 1),
(680, 32, 54, 0, 1),
(681, 32, 55, 0, 1),
(682, 32, 56, 0, 1),
(683, 32, 57, 0, 1),
(684, 32, 58, 0, 1),
(685, 32, 59, 0, 1),
(686, 32, 60, 0, 1),
(687, 32, 61, 0, 1),
(688, 32, 62, 0, 1),
(689, 32, 63, 0, 1),
(690, 32, 64, 0, 1),
(691, 32, 65, 0, 1),
(692, 32, 66, 0, 1),
(693, 32, 67, 0, 1),
(694, 32, 68, 0, 1),
(695, 32, 69, 0, 1),
(696, 32, 70, 0, 1),
(697, 32, 71, 0, 1),
(698, 32, 72, 0, 1),
(699, 32, 73, 0, 1),
(700, 32, 74, 0, 1),
(701, 32, 75, 0, 1),
(702, 32, 76, 0, 1),
(703, 32, 77, 0, 1),
(704, 32, 78, 0, 1),
(705, 32, 79, 0, 1),
(706, 32, 80, 0, 1),
(707, 32, 81, 0, 1),
(708, 32, 82, 0, 1),
(709, 32, 83, 0, 1),
(710, 32, 84, 0, 1),
(711, 32, 85, 0, 1),
(712, 32, 86, 0, 1),
(713, 32, 87, 0, 1),
(714, 32, 88, 0, 1),
(715, 32, 89, 0, 1),
(716, 32, 90, 0, 1),
(717, 32, 91, 0, 1),
(718, 32, 92, 0, 1),
(719, 32, 93, 0, 1),
(720, 32, 94, 0, 1),
(721, 32, 95, 0, 1),
(722, 32, 96, 0, 1),
(723, 32, 97, 0, 1),
(724, 32, 98, 0, 1),
(725, 32, 99, 0, 1);

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
(24, 6, '210101', 'Alfandi', 'jl.sungai saddang', 'makassar', '2000-10-24', 'PEREMPUAN', '585e4bf3cb11b227491c339a.png'),
(25, 4, '210102', 'Alfilin', 'jl.veteran selatan', 'makassar', '2003-10-16', 'LAKI-LAKI', 'profil.jpg'),
(26, 4, '210103', 'Arniati', 'jl.sungai saddang IV', 'makassar', '2003-03-14', 'PEREMPUAN', 'profil.jpg'),
(27, 4, '210104', 'Arruan Sambo Langi', 'jl.veteran selatan', 'makassar', '2003-05-28', 'LAKI-LAKI', 'profil.jpg'),
(28, 4, '210105', 'Erni', 'jl.sungai saddang', 'makassar', '2003-10-08', 'PEREMPUAN', 'profil.jpg'),
(30, 1, '210201', 'Alfiandro de Paulo', 'jl.sungai saddang IV', 'makassar', '2002-10-25', 'LAKI-LAKI', 'profil.jpg'),
(31, 1, '210202', 'Andre Junior', 'jl.Ablam', 'makassar', '2002-07-09', 'LAKI-LAKI', 'profil.jpg'),
(32, 1, '210203', 'Antonius Naga', 'jl. Gn Batu Putih', 'makassar', '2002-05-15', 'LAKI-LAKI', 'profil.jpg'),
(33, 1, '210204', 'Fanny Thoeng', 'jl.veteran selatan', 'makassar', '2002-04-10', 'PEREMPUAN', 'profil.jpg'),
(34, 1, '210205', 'Ferdyanus Daminggus', 'jl.sungai saddang', 'makassar', '2002-11-15', 'LAKI-LAKI', 'profil.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `kd_tugas` int(11) NOT NULL,
  `kd_mapel` int(11) NOT NULL,
  `kd_kelas` int(11) NOT NULL,
  `nama_tugas` text NOT NULL,
  `nama_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`kd_tugas`, `kd_mapel`, `kd_kelas`, `nama_tugas`, `nama_file`) VALUES
(9, 1, 6, 'tugas besar 1', 'AHP.rar'),
(10, 13, 1, 'one piece eps 900', 'JURNAL MARDIANA.docx');

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
-- Indeks untuk tabel `guru_mapel`
--
ALTER TABLE `guru_mapel`
  ADD PRIMARY KEY (`kd_gm`);

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
  MODIFY `kd_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `kd_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `guru_mapel`
--
ALTER TABLE `guru_mapel`
  MODIFY `kd_gm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `kd_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `kd_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `kd_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `kd_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  MODIFY `kd_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=726;

--
-- AUTO_INCREMENT untuk tabel `semester`
--
ALTER TABLE `semester`
  MODIFY `kd_semester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `kd_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `tugas`
--
ALTER TABLE `tugas`
  MODIFY `kd_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `wali_kelas`
--
ALTER TABLE `wali_kelas`
  MODIFY `kd_wali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
