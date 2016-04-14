-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Okt 2015 pada 18.27
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `puskesmasdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
`idberita` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `ulasan` text NOT NULL,
  `tgl_post` varchar(50) NOT NULL,
  `user_post` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`idberita`, `judul`, `kategori`, `ulasan`, `tgl_post`, `user_post`, `isi`, `img`) VALUES
(1, 'Pengertian dan Fungsi Puskesmas', 'puskesmas', 'Puskesmas merupakan suatu kesatuan organisasi kesehatan fungsional yang merupakan pusat pengembangan kesehatan masyarakat yang juga membina peran serta masyarakat disamping memberikan pelayanan secara menyeluruh dan terpadu kepada masyarakat di wilayah kerjanya dalam bentuk kegiatan pokok.', '17-09-15', 'admin', 'Puskesmas merupakan suatu kesatuan organisasi kesehatan fungsional yang merupakan pusat pengembangan kesehatan masyarakat yang juga membina peran serta masyarakat disamping memberikan pelayanan secara menyeluruh dan terpadu kepada masyarakat di wilayah kerjanya dalam bentuk kegiatan pokok.\r\n\r\nWilayah kerja puskesmas meliputi satu kecamatan atau sebagian dari kecamatan. Faktor kepadatan penduduk, luas daerah, keadaan geografi dan keadaan infrastruktur lainnya merupakan bahan pertimbangan dalam menentukan wilayah kerja puskesmas.\r\n\r\nSasaran penduduk yang dilayani oleh sebuah puskesmas rata-rata 30.000. penduduk. Untuk perluasan jangkauan pelayanan kesehatan maka puskesmas perlu ditunjang dengan unit pelayanan kesehatan yang lebih sederhana yaitu Puskesmas Pembantu dan Puskesmas Keliling.Pelayanan kesehatan yang diberikan di Puskesmas adalah pelayanan kesehatan yang meliputi pelayanan pengobatan (kuratif), upaya pencegahan (preventif), peningkatan kesehatan (promotif) dan pemullihan kesehatan (rehabilitatif) yang ditujukan kepada semua penduduk dan tidak dibedakan jenis kelamin dan golongn umur, sejak pembuahan dalam kandungan sampai tutup usia\r\n\r\nFungsi puskesmas\r\n\r\nSebagai pusat pembangunan kesehatan masyarakat di wilayah kerjanya.\r\nMembina peran serta masyarakat di wilayah kerjanya dalam rangka meningkatkan kemampuan untuk hidup sehat.\r\nMemberikan pelayanan kesehatan secara menyeluruh dan terpadu kepada masyarakat di wilayah kerjanya', 'Pengertian dan Fungsi Puskesmas.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beri_resep`
--

CREATE TABLE IF NOT EXISTS `beri_resep` (
`id_resep` int(11) NOT NULL,
  `id_pasien` varchar(50) NOT NULL DEFAULT '0',
  `nama_obat` varchar(50) NOT NULL DEFAULT '0',
  `satuan_obat` varchar(50) NOT NULL DEFAULT '0',
  `jumlah_obat` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `beri_resep`
--

INSERT INTO `beri_resep` (`id_resep`, `id_pasien`, `nama_obat`, `satuan_obat`, `jumlah_obat`) VALUES
(9, '2114067112270004', 'Vitamin B1', 'kapsul', '10'),
(10, '2114067112270004', 'Vitamin B6', 'kapsul', '10'),
(11, '2114067112270004', 'Vitamin B12', 'kapsul', '10'),
(12, '2114067112270004', 'Paracetamol', 'tablet', '10'),
(13, '7315070110890001', 'Tambah Darar', 'tablet', '10'),
(14, '7315070110890001', 'Vitamin B1', 'kapsul', '10'),
(15, '7315070110890001', 'Vitamin C', 'tablet', '10'),
(16, '7315070612980002', 'Vitamin B1', 'kapsul', '3'),
(17, '7315070612980002', 'Vitamin B6', 'kapsul', '3'),
(18, '7315070612980002', 'Vitamin B12', 'kapsul', '3'),
(19, '7315070806980002', 'Glyceryl Guaiacolate', 'kapsul', '7'),
(20, '7315070806980002', 'Chlorrpheniramine', 'tablet', '5'),
(21, '7315070806980002', 'Paracetamol', 'tablet', '8'),
(22, '7315070806980002', 'Vitamin C', 'tablet', '8'),
(23, '7315071010720002', 'Vitamin B12', 'kapsul', '6'),
(24, '7315071010720002', 'Ibuprophine', 'tablet', ' 3'),
(25, '7315071102970001', 'Amoxillin', 'tablet', '4'),
(26, '7315071102970001', 'Vitamin C', 'tablet', '6'),
(27, '7315071102970001', 'Paracetamol', 'tablet', '2'),
(28, '7315071212070001', 'Paracetamol', 'tablet', '3'),
(29, '7315071212070001', 'Vitamin B Complex', 'tablet', '5'),
(30, '7315071212070001', 'Oralit', '', '5'),
(31, '7315072408130001', 'Chlorrpheniramine', 'tablet', '6'),
(32, '7315072408130001', 'Oralit', '', '5'),
(33, '7315072810020001', 'Antalgin', 'tablet', '10'),
(34, '7315073112730173', 'Antalgin', 'tablet', '6'),
(35, '7315073112730173', 'Paracetamol', 'tablet', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
`idinbox` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `hp` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `saran` text
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `inbox`
--

INSERT INTO `inbox` (`idinbox`, `nama`, `hp`, `email`, `saran`) VALUES
(1, 'santi', '082194783458', 'santiamir@gmail.com', 'mohon obat-obatan diapotik lebih dilengkapi lagi.. terima kasih'),
(2, 'Andini', '085299911570', 'dini@yahoo.com', 'intensitas kehadiran dokter mohon ditingkatkan, terima kasih'),
(3, 'Sabia', '085255205285', 'sabia@rocketmail.com', 'assalamualaikum\r\nsiswa/mahasiswa magang perlu dikurangi karena sudah sangat banyak melebihi PNS '),
(4, 'iman', '085252440918', 'iman@gmail.com', 'Pasien tidak perlu melepas alas kaki apabila masuk ke ruang rawat jalan'),
(5, 'amir', '08239', 'santi@ymail.com', 'sadfdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_poli`
--

CREATE TABLE IF NOT EXISTS `jenis_poli` (
  `id_jn_poli` varchar(50) NOT NULL,
  `jenis_poli` varchar(50) DEFAULT NULL,
  `ket` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='managemen jenis poli';

--
-- Dumping data untuk tabel `jenis_poli`
--

INSERT INTO `jenis_poli` (`id_jn_poli`, `jenis_poli`, `ket`) VALUES
('poli1', 'Poli Umum', 'Poli Umum'),
('poli2', 'Poli Gigi', 'Poli Gigi'),
('poli3', 'Poli Kesehatan Ibu Dan Anak', 'Poli KIA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `klevel`
--

CREATE TABLE IF NOT EXISTS `klevel` (
`idlevel` int(11) NOT NULL,
  `level` char(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COMMENT='Kategori Level';

--
-- Dumping data untuk tabel `klevel`
--

INSERT INTO `klevel` (`idlevel`, `level`) VALUES
(1, 'admin'),
(3, 'apoteker'),
(2, 'dokter'),
(6, 'kepala puskesmas'),
(7, 'pasien'),
(5, 'petugas registrasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kmenu`
--

CREATE TABLE IF NOT EXISTS `kmenu` (
`idmenu` int(11) NOT NULL,
  `level` char(50) DEFAULT NULL,
  `kategori` char(50) DEFAULT NULL,
  `icon` char(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 COMMENT='Daftar kategori menu';

--
-- Dumping data untuk tabel `kmenu`
--

INSERT INTO `kmenu` (`idmenu`, `level`, `kategori`, `icon`) VALUES
(1, 'admin', 'Managemen', 'zone-label.png'),
(2, 'admin', 'Laporan', 'zone-label.png'),
(9, 'dokter', 'Laporan', 'zone-label.png'),
(11, 'apoteker', 'Laporan', 'zone-label.png'),
(12, 'kepala puskesmas', 'Laporan', 'zone-label.png'),
(13, 'admin', 'System', 'zone-label.png'),
(14, 'petugas registrasi', 'Laporan', 'zone-label.png'),
(15, 'apoteker', 'Resep Obat', 'zone-label.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kunjungan`
--

CREATE TABLE IF NOT EXISTS `kunjungan` (
`id_kunjungan` int(11) NOT NULL,
  `tgl_kunjungan` varchar(50) DEFAULT NULL,
  `id_pasien` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `kd_poli` varchar(50) DEFAULT NULL,
  `jam_kunjungan` time DEFAULT NULL,
  `identitas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kunjungan`
--

INSERT INTO `kunjungan` (`id_kunjungan`, `tgl_kunjungan`, `id_pasien`, `nama`, `kd_poli`, `jam_kunjungan`, `identitas`) VALUES
(1, '2015-10-13', '7315077112540070', 'Hj. Bahara', 'Poli Umum', '04:27:45', 'NIK'),
(2, '2015-10-13', '7315072811030001', 'Doni', 'Poli Umum', '04:28:03', 'NIK'),
(3, '2015-10-13', '7315071212070001', 'Adam', 'Poli Umum', '04:28:47', 'NIK'),
(4, '2015-10-13', '7315075909930005', 'Rosneni', 'Poli Kesehatan Ibu Dan Anak', '04:29:08', 'NIK'),
(5, '2015-10-13', '731507121840004', 'Jumardi', 'Poli Umum', '04:29:26', 'NIK'),
(6, '2015-10-13', '7604062307580001', 'Duali', 'Poli Umum', '04:29:43', 'NIK'),
(7, '2015-10-13', '7315074107750038', 'Juma', 'Poli Kesehatan Ibu Dan Anak', '04:30:14', 'NIK'),
(8, '2015-10-13', '7315077112640067', 'Mariana', 'Poli Umum', '04:30:33', 'NIK'),
(9, '2015-10-13', '7315071502800003', 'Gana', 'Poli Umum', '04:31:06', 'NIK'),
(10, '2015-10-13', '7315070806980002', 'Aswan', 'Poli Umum', '04:31:22', 'NIK'),
(11, '2015-10-13', '7315072712700003', 'mustafa', 'Poli Umum', '04:31:41', 'NIK'),
(13, '2015-10-13', '7315074107660005', 'Dara', 'Poli Umum', '04:36:16', 'NIK'),
(14, '2015-10-13', '7315076105800001', 'Linda', 'Poli Kesehatan Ibu Dan Anak', '04:40:01', 'NIK'),
(15, '2015-10-13', '7315076105800001', 'Linda', 'Poli Kesehatan Ibu Dan Anak', '04:40:20', 'NIK'),
(16, '2015-10-13', '73150771112600001', 'Eda', 'Poli Umum', '04:40:41', 'NIK'),
(17, '2015-10-13', '7315074703880001', 'Sasmi', 'Poli Umum', '04:41:19', 'NIK'),
(18, '2015-10-13', '7315072408130001', 'A. Muh. Rafik', 'Poli Umum', '04:41:45', 'NIK'),
(19, '2015-10-13', '7315075609130001', 'Nur Wahidah', 'Poli Umum', '04:42:08', 'NIK'),
(20, '2015-10-13', '7315075909930005', 'Hj. Halla', 'Poli Umum', '13:59:57', 'NIK'),
(21, '2015-10-13', '7315071312110001', 'Kama', 'Poli Umum', '14:00:20', 'NIK'),
(22, '2015-10-13', '7315070612980002', 'A. Sulistia', 'Poli Umum', '14:00:42', 'NIK'),
(23, '2015-10-13', '2114067112270004', 'Mutri', 'Poli Umum', '14:02:21', 'NIK'),
(24, '2015-10-13', '7315075009910005', 'Darmawati', 'Poli Kesehatan Ibu Dan Anak', '14:02:57', 'NIK'),
(25, '2015-10-13', '7315071010720002', 'Bakkarang', 'Poli Umum', '14:03:27', 'NIK'),
(26, '2015-10-13', '7315075808060003', 'Nurmalasari', 'Poli Umum', '14:04:01', 'NIK'),
(27, '2015-10-13', '7315079112750229', 'Hj. Sukawati', 'Poli Umum', '14:05:03', 'NIK'),
(28, '2015-10-13', '7315071502070001', 'Haikal', 'Poli Umum', '14:05:27', 'NIK'),
(29, '2015-10-13', '7315071308130001', 'Rusyadi', 'Poli Umum', '14:05:49', 'NIK'),
(30, '2015-10-13', '7315071411950001', 'Hernawati', 'Poli Umum', '14:06:11', 'NIK'),
(31, '2015-10-13', '7315075108140001', 'Nurul Adibah', 'Poli Kesehatan Ibu Dan Anak', '14:06:49', 'NIK'),
(32, '2015-10-13', '7315070606020001', 'Arjun', 'Poli Umum', '14:07:10', 'NIK'),
(33, '2015-10-14', '7315070206680020', 'Hartawan', 'Poli Umum', '14:07:41', 'NIK'),
(34, '2015-10-14', '7315075011900002', 'Jumriati', 'Poli Kesehatan Ibu Dan Anak', '14:08:14', 'NIK'),
(35, '2015-10-14', '7315070912140002', 'Azila Nurfadilah', 'Poli Kesehatan Ibu Dan Anak', '14:08:37', 'NIK'),
(36, '2015-10-14', '7315074301800002', 'Nani', 'Poli Kesehatan Ibu Dan Anak', '14:08:59', 'NIK'),
(37, '2015-10-14', '73150743070800003', 'miranda', 'Poli Umum', '14:09:53', 'NIK'),
(38, '2015-10-14', '7315077112270004', 'Muttia', 'Poli Umum', '14:10:58', 'NIK'),
(39, '2015-10-14', '7315072201120001', 'Muh. Fahri', 'Poli Kesehatan Ibu Dan Anak', '14:11:18', 'NIK'),
(40, '2015-10-14', '7315072810020001', 'Muh. Tasdiq', 'Poli Gigi', '14:11:42', 'NIK'),
(41, '2015-10-14', '7315077012520010', 'Rema', 'Poli Umum', '14:12:06', 'NIK'),
(42, '2015-10-14', '7315073012550003', 'Hasmin', 'Poli Gigi', '14:12:24', 'NIK'),
(43, '2015-10-14', '7315070706740001', 'Halim', 'Poli Umum', '14:27:23', 'NIK'),
(44, '2015-10-14', '7315073112730173', 'Darwis', 'Poli Gigi', '14:27:41', 'NIK'),
(45, '2015-10-14', '7315077112750223', 'Juda', 'Poli Gigi', '14:28:16', 'NIK'),
(46, '2015-10-14', '7315073112480047', 'Parakkasi', 'Poli Umum', '14:28:37', 'NIK'),
(47, '2015-10-14', '7315073112540163', 'Baddu', 'Poli Umum', '14:28:56', 'NIK'),
(48, '2015-10-14', '731507711274003', 'Lisa', 'Poli Kesehatan Ibu Dan Anak', '14:29:15', 'NIK'),
(49, '2015-10-14', '731507711274003', 'Lisa', 'Poli Kesehatan Ibu Dan Anak', '14:29:23', 'NIK'),
(50, '2015-10-14', '7315074704840002', 'wati', 'Poli Kesehatan Ibu Dan Anak', '14:29:47', 'NIK'),
(51, '2015-10-14', '7315074905910001', 'Muslia', 'Poli Kesehatan Ibu Dan Anak', '14:30:06', 'NIK'),
(52, '2015-10-14', '7315077112490029', 'Eja', 'Poli Umum', '14:30:23', 'NIK'),
(53, '2015-10-14', '7315071312660001', 'Kamaria', 'Poli Umum', '14:30:40', 'NIK'),
(54, '2015-10-14', '7315070704040003', 'Rusdin', 'Poli Umum', '14:31:03', 'NIK'),
(55, '2015-10-14', '7315076601850001', 'Tarika', 'Poli Umum', '14:31:36', 'NIK'),
(56, '2015-10-14', '7315076303960004', 'Hasliana', 'Poli Umum', '14:31:57', 'NIK'),
(57, '2015-10-14', '7315074002030001', 'Ummi Kalsum', 'Poli Kesehatan Ibu Dan Anak', '14:32:21', 'NIK'),
(58, '2015-10-14', '7315074109470001', 'Hj. Nurjanna', 'Poli Umum', '14:34:53', 'NIK'),
(59, '2015-10-14', '7315074212470001', 'TIja', 'Poli Umum', '14:35:13', 'NIK'),
(60, '2015-10-14', '7315072106860002', 'Umar', 'Poli Umum', '14:35:37', 'NIK'),
(61, '2015-10-14', '7315070304950001', 'Rita', 'Poli Kesehatan Ibu Dan Anak', '14:36:26', 'NIK'),
(62, '2015-10-14', '7315073012570004', 'Zainuddin', 'Poli Umum', '14:36:51', 'NIK'),
(63, '2015-10-14', '7315074305800001', 'Hasmia', 'Poli Kesehatan Ibu Dan Anak', '14:37:12', 'NIK'),
(64, '2015-10-14', '7315070706740001', 'Halim', 'Poli Umum', '14:37:30', 'NIK'),
(65, '2015-10-14', '7315075312720001', 'Darawisa', 'Poli Umum', '14:37:53', 'NIK'),
(66, '2015-10-14', '7315070803130001', 'Edgard', 'Poli Umum', '14:38:24', 'NIK'),
(67, '2015-10-14', '731507311247032', 'Ruki', 'Poli Umum', '14:38:54', 'NIK'),
(68, '2015-10-14', '7315070504860047', 'Hasbudi', 'Poli Umum', '14:39:16', 'NIK'),
(69, '2015-10-14', '7315073112600245', 'Muh. Yusuf', 'Poli Umum', '14:39:38', 'NIK'),
(70, '2015-10-14', '7315076710730001', 'Hanisa', 'Poli Umum', '14:39:59', 'NIK'),
(71, '2015-10-14', '7315072406050001', 'Junaedi', 'Poli Umum', '14:40:23', 'NIK'),
(72, '2015-10-14', '7315072309090001', 'Sapira', 'Poli Umum', '14:40:46', 'NIK'),
(73, '2015-10-14', '7315074808760001', 'Nahira', 'Poli Umum', '14:41:07', 'NIK'),
(74, '2015-10-14', '7315076041210001', 'Nur Atikah', 'Poli Kesehatan Ibu Dan Anak', '14:41:31', 'NIK'),
(75, '2015-10-14', '7315077427100024', 'Sagara', 'Poli Umum', '14:41:48', 'NIK'),
(76, '2015-10-14', '7315077230350002', 'Muh. A. Muhtadi', 'Poli Kesehatan Ibu Dan Anak', '14:42:08', 'NIK'),
(77, '2015-10-14', '7315071002680001', 'Abdul Halid', 'Poli Umum', '14:42:32', 'NIK'),
(78, '2015-10-14', '7315074510030001', 'Milna Sari', 'Poli Umum', '14:43:11', 'NIK'),
(79, '2015-10-14', '7315072008100001', 'Fadil', 'Poli Umum', '14:43:27', 'NIK'),
(80, '2015-10-14', '7315071604010001', 'Yulian', 'Poli Umum', '14:43:52', 'NIK'),
(81, '2015-10-14', '7315070611020001', 'Abd. Ahmad', 'Poli Umum', '14:44:12', 'NIK'),
(82, '2015-10-14', '73150771128900009', 'Ramlah', 'Poli Kesehatan Ibu Dan Anak', '14:44:31', 'NIK'),
(83, '2015-10-14', '7315070110890001', 'Ratna', 'Poli Kesehatan Ibu Dan Anak', '14:44:54', 'NIK'),
(84, '2015-10-14', '7315076803100001', 'Nor Fazira', 'Poli Gigi', '14:45:14', 'NIK'),
(85, '2015-10-14', '7315076607820001', 'Mariati', 'Poli Kesehatan Ibu Dan Anak', '14:45:49', 'NIK'),
(86, '2015-10-14', '7315070914230001', 'Abd. Asis', 'Poli Umum', '14:46:20', 'NIK'),
(87, '2015-10-14', '7315074906070203', 'Nur Fadilla', 'Poli Umum', '14:46:50', 'NIK'),
(88, '2015-10-14', '731507260600007', 'Muh. Fahril', 'Poli Gigi', '14:47:13', 'NIK'),
(89, '2015-10-14', '7315076060600007', 'Muh. FAhrul', 'Poli Gigi', '14:47:34', 'NIK'),
(90, '2015-10-14', '731507100404', 'Muh. Faiz', 'Poli Gigi', '14:48:00', 'NIK'),
(91, '2015-10-14', '7315079112570003', 'Hj. Sundre', 'Poli Umum', '14:48:23', 'NIK'),
(92, '2015-10-14', '7315071102970001', 'Amelia', 'Poli Gigi', '14:48:43', 'NIK'),
(93, '2015-10-15', '7315070302150001', 'Muh. Ali Syarif', 'Poli Kesehatan Ibu Dan Anak', '14:49:01', 'NIK'),
(94, '2015-10-15', '7315071601150002', 'Jibran', 'Poli Kesehatan Ibu Dan Anak', '14:49:24', 'NIK'),
(95, '2015-10-15', '7315074403670001', 'Bungawati', 'Poli Umum', '14:49:53', 'NIK'),
(96, '2015-10-15', '7315071908140001', 'Muh Hafiz', 'Poli Kesehatan Ibu Dan Anak', '14:50:09', 'NIK'),
(97, '2015-10-15', '7315070710140001', 'Muh. Abifar', 'Poli Umum', '14:50:43', 'NIK'),
(98, '2015-10-15', '7315070801150002', 'Muh. Assagaf', 'Poli Kesehatan Ibu Dan Anak', '14:51:14', 'NIK'),
(99, '2015-10-15', '7315071809030002', 'Rian', 'Poli Gigi', '14:51:41', 'NIK'),
(100, '2015-10-15', '7315074105550001', 'Nurul Andin', 'Poli Kesehatan Ibu Dan Anak', '14:52:00', 'NIK'),
(101, '2015-10-15', '7315071981080004', 'Daniati', 'Poli Umum', '14:52:17', 'NIK'),
(102, '2015-10-15', '7315070104150002', 'Salsabila', '-', '14:52:40', 'NIK'),
(103, '2015-10-15', '7315077004150001', 'Muh. Alif', 'Poli Kesehatan Ibu Dan Anak', '14:52:57', 'NIK'),
(104, '2015-10-15', '7315073107070001', 'Muh. Farhan', 'Poli Gigi', '14:53:13', 'NIK'),
(105, '2015-10-15', '7315071802010001', 'Muh. Iqbal', 'Poli Umum', '14:53:50', 'NIK'),
(106, '2015-10-15', '7315075005740004', 'Rabah', 'Poli Kesehatan Ibu Dan Anak', '14:54:19', 'NIK'),
(107, '2015-10-15', '7315070107090001', 'Andi M. Husni', 'Poli Gigi', '14:54:36', 'NIK'),
(108, '2015-10-15', '7315070607900001', 'Nurlia', 'Poli Kesehatan Ibu Dan Anak', '14:54:58', 'NIK'),
(109, '2015-10-15', '7315072810020001', 'Muh. Tasdiq', 'Poli Gigi', '838:59:59', 'NIK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lmenu`
--

CREATE TABLE IF NOT EXISTS `lmenu` (
`idkategori` int(11) NOT NULL,
  `nama` char(50) NOT NULL,
  `kategori` char(50) DEFAULT NULL,
  `level` char(50) DEFAULT NULL,
  `url` char(50) DEFAULT NULL,
  `icon` char(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1 COMMENT='Daftar list menu';

--
-- Dumping data untuk tabel `lmenu`
--

INSERT INTO `lmenu` (`idkategori`, `nama`, `kategori`, `level`, `url`, `icon`) VALUES
(1, 'Petugas Registrasi', 'Managemen', 'admin', 'main.php?id=petugas_registrasi', 'zone-label.png'),
(2, 'Dokter', 'Managemen', 'admin', 'main.php?id=dokter', 'zone-label.png'),
(3, 'Apoteker', 'Managemen', 'admin', 'main.php?id=apoteker', 'zone-label.png'),
(4, 'Kepala Puskesmas', 'Managemen', 'admin', 'main.php?id=kepala_puskesmas', 'zone-label.png'),
(5, 'Data Petugas Registrasi', 'Laporan', 'admin', 'main.php?id=lap_petugas', 'zone-label.png'),
(6, 'Data Dokter', 'Laporan', 'admin', 'main.php?id=lap_dokter', 'zone-label.png'),
(7, 'Data Apoteker', 'Laporan', 'admin', 'main.php?id=lap_apoteker', 'zone-label.png'),
(11, 'Managemen Berita', 'System', 'admin', 'main.php?id=berita', 'zone-label.png'),
(13, 'Laporan Kunjungan Pasien', 'Laporan', 'petugas registrasi', 'main.php?id=lap_kunjungan', 'zone-label.png'),
(14, 'Rekam Medis', 'Laporan', 'dokter', 'main.php?id=lap_rekam_medis', 'zone-label.png'),
(15, 'Pemasukan Obat', 'Laporan', 'apoteker', 'main.php?id=pemasukan_obat', 'zone-label.png'),
(16, 'Persediaan Obat', 'Laporan', 'apoteker', 'main.php?id=persediaan_obat', 'zone-label.png'),
(17, 'Pengeluaran Obat', 'Laporan', 'apoteker', 'main.php?id=pengeluaran_obat', 'zone-label.png'),
(18, 'Laporan Pemasukan Obat', 'Laporan', 'kepala puskesmas', 'main.php?id=lap_pemasukan_obat', 'zone-label.png'),
(19, 'Laporan Pengeluaran Obat', 'Laporan', 'kepala puskesmas', 'main.php?id=lap_pengeluaran', 'zone-label.png'),
(20, 'Laporan Persediaan Obat', 'Laporan', 'kepala puskesmas', 'main.php?id=Lap_persediaan_obat', 'zone-label.png'),
(21, 'Laporan Rekam Medisa', 'Laporan', 'kepala puskesmas', 'main.php?id=lap_rekam_medis', 'zone-label.png'),
(22, 'Laporan Kunjungan', 'Laporan', 'kepala puskesmas', 'main.php?id=lap_kunjungan', 'zone-label.png'),
(23, 'Keluhan', 'System', 'admin', 'main.php?id=keluhan', 'zone-label.png'),
(24, 'Laporan Keluhan', 'Laporan', 'kepala puskesmas', 'main.php?id=lap_keluhan', 'zone-label.png'),
(25, 'Resep Pasien', 'Resep Obat', 'apoteker', 'main.php?id=resep_obat_pasien', 'zone-label.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_obat`
--

CREATE TABLE IF NOT EXISTS `master_obat` (
  `id_obat` varchar(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `satuan` varchar(50) DEFAULT NULL,
  `harga` varchar(50) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Managemen data obat';

--
-- Dumping data untuk tabel `master_obat`
--

INSERT INTO `master_obat` (`id_obat`, `nama`, `tgl_masuk`, `satuan`, `harga`, `total`) VALUES
('ACIT', 'Acitral', '2015-10-04', 'Tablet', 'Rp. 500', 50),
('ACT', 'Actal Plus', '2015-10-04', 'Tablet', 'Rp. 500', 70),
('ACTIF', 'Actifed Plus Syr', '2015-10-04', 'Botol', 'Rp. 8.000', 80),
('AFL', 'Acne Feldin Lotion', '2015-10-04', 'Botol', 'Rp. 12.000', 500),
('AFRIN', 'Afrin Paed Drop', '2015-10-04', 'Botol', 'Rp. 8.000', 500),
('ALBU', 'Albucid Eye drop', '2015-10-04', 'Botol', 'Rp. 10.000', 500),
('ALIN', 'Alinamin-f Tab', '2015-10-04', 'Tablet', 'Rp. 8.000', 2000),
('ALLE', 'allerin Syr', '2015-10-04', 'Botol', 'Rp. 8.000', 500),
('ALLO', 'Alloris Tab', '2015-10-04', 'Tablet', 'Rp. 500', 2000),
('ALU', 'Aludonna', '2015-10-04', 'Tablet', 'Rp. 500', 2000),
('AME', 'Amerol', '2015-10-04', 'Tablet', 'Rp. 8.000', 2000),
('AMOX', 'Amoxillin', '2015-10-07', 'tablet', 'Rp. 500', 1983),
('ANTAS', 'Antasida', '2015-10-13', 'tablet', 'Rp. 500', 2000),
('API', 'Apialys Dro', '2015-10-04', 'Botol', 'Rp. 8.000', 500),
('APOL', 'Apolar Cream', '2015-10-04', 'Tube', 'Rp. 8.000', 300),
('ASMEF', 'Asam Mefenamat', '2015-10-13', 'tablet', 'Rp. 800', 2000),
('ASPAR', 'Aspar', '2015-10-04', 'Tablet', 'Rp. 500', 2000),
('ATG', 'Antalgin', '2015-10-07', 'tablet', 'Rp. 500', 1984),
('BACTOI', 'Bactoderm Oint', '2015-10-04', 'Tube', 'Rp. 8.000', 300),
('BAKRIM', 'Bactroban Cream', '2015-10-04', 'Tube', 'Rp. 8.000', 300),
('BECE', 'Becefory Syr', '2015-10-04', 'Botol', 'Rp. 8.000', 500),
('BERRY', 'Berry Vision', '2015-10-04', 'Tablet', 'Rp. 500', 2000),
('BETA', 'Betason Cream', '2015-10-04', 'Tube', 'Rp. 8.000', 300),
('BETO', 'Betadine Oint', '2015-10-04', 'Botol', 'Rp. 5.000', 500),
('BETOP', 'Betoptima', '2015-10-04', 'Botol', 'Rp. 8.000', 500),
('BETV', 'Betadine Vag', '2015-10-04', 'Botol', 'Rp. 8.000', 500),
('CANDROP', 'Candistin Drop', '2015-10-04', 'Botol', 'Rp. 6.000', 500),
('CATO', 'Catopril', '2015-10-13', 'tablet', 'Rp. 500', 2000),
('CHLROM', 'Chlrompenicol', '2015-10-13', 'tablet', 'Rp. 500', 2000),
('CHOL', 'Cholestat', '2015-10-04', 'Tablet', 'Rp. 500', 2000),
('CIPRO', 'Ciprofloxacin', '2015-10-13', 'kapsul', 'Rp. 500', 2000),
('COTRI', 'Cotripet', '2015-10-13', 'tablet', 'Rp.500', 2000),
('CPZ', 'Chlorpromazine', '2015-10-13', 'kapsul', 'Rp.500', 1500),
('CTM', 'Chlorrpheniramine', '2015-10-16', 'tablet', 'Rp. 500', 1999),
('DEXA', 'Dexametasone', '2015-10-16', 'tablet', 'Rp. 500', 2097),
('DIAZ', 'Diazepam', '2015-10-16', 'kapsul', 'Rp. 500', 1600),
('GG', 'Glyceryl Guaiacolate', '2015-10-16', 'kapsul', 'Rp. 500', 1593),
('HALO', 'Haloperidol', '2015-10-13', 'tablet', 'Rp. 500', 2000),
('IBU', 'Ibuprophine', '2015-10-13', 'tablet', 'Rp. 500', 1997),
('LACTACID', 'Calcium Lactate', '2015-10-16', 'tablet', 'Rp. 500', 2100),
('LIPI', 'Lipitor', '2015-10-16', 'tablet', 'Rp. 500', 2100),
('METRO', 'Metrodinasol', '2015-10-16', 'tablet', 'Rp. 500', 2100),
('ORA', 'Oralit', '2015-10-13', NULL, 'Rp. 500', 4990),
('PAPA', 'Papaverin', '2015-10-16', 'tablet', 'Rp. 500', 2400),
('PCT', 'Paracetamol', '2015-10-16', 'tablet', 'Rp. 500', 2081),
('TETRA', 'TETRA', '2015-10-16', 'kapsul', 'Rp. 500', 1600),
('TRI', 'Trihexyphenidyl', '2015-10-16', 'kapsul', 'Rp. 500', 1700),
('TTD', 'Tambah Darah', '2015-10-16', 'tablet', 'Rp. 500', 2080),
('VB1', 'Vitamin B1', '2015-10-16', 'tube', 'Rp. 500', 1777),
('VB12', 'Vitamin B12', '2015-10-16', 'kapsul', 'Rp. 500', 1681),
('VB6', 'Vitamin B6', '2015-10-16', 'kapsul', 'Rp. 500', 1577),
('VBCOM', 'Vitamin B Complex', '2015-10-16', 'tablet', 'Rp. 500', 2485),
('VITC', 'Vitamin C', '2015-10-16', 'tablet', 'Rp. 500', 3976);

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat_keluar`
--

CREATE TABLE IF NOT EXISTS `obat_keluar` (
  `id_obat` varchar(50) NOT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `satuan` varchar(50) DEFAULT NULL,
  `total` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Managemen data obat';

--
-- Dumping data untuk tabel `obat_keluar`
--

INSERT INTO `obat_keluar` (`id_obat`, `tgl_keluar`, `satuan`, `total`) VALUES
('AMOX', '2015-10-16', 'tablet', '3'),
('PCT', '2015-10-16', 'tablet', '3'),
('DEXA', '2015-10-16', 'tablet', '3'),
('PCT', '2015-10-16', 'tablet', '10'),
('AMOX', '2015-10-16', 'tablet', '10'),
('VB6', '2015-10-16', 'kapsul', '10'),
('VBCOM', '2015-10-16', 'tablet', '10'),
('TTD', '2015-10-16', 'tablet', '10'),
('VB1', '2015-10-16', 'kapsul', '10'),
('VB6', '2015-10-16', 'kapsul', '10'),
('VB12', '2015-10-16', 'kapsul', '10'),
('PCT', '2015-10-16', 'tablet', '10'),
('TTD', '2015-10-16', 'tablet', '10'),
('VB1', '2015-10-16', 'kapsul', '10'),
('VITC', '2015-10-16', 'tablet', '10'),
('VB1', '2015-10-16', 'kapsul', '3'),
('VB6', '2015-10-16', 'kapsul', '3'),
('VB12', '2015-10-16', 'kapsul', '3'),
('GG', '2015-10-16', 'kapsul', '7'),
('CTM', '2015-10-16', 'tablet', '5'),
('PCT', '2015-10-16', 'tablet', '8'),
('VITC', '2015-10-16', 'tablet', '8'),
('VB12', '2015-10-16', 'kapsul', '6'),
('IBU', '2015-10-16', 'tablet', ' 3'),
('AMOX', '2015-10-16', 'tablet', '4'),
('VITC', '2015-10-16', 'tablet', '6'),
('PCT', '2015-10-16', 'tablet', '2'),
('PCT', '2015-10-16', 'tablet', '3'),
('VBCOM', '2015-10-16', 'tablet', '5'),
('CTM', '2015-10-16', 'tablet', '6'),
('ORA', '2015-10-16', '', '5'),
('ATG', '2015-10-16', 'tablet', '10'),
('ATG', '2015-10-16', 'tablet', '6'),
('PCT', '2015-10-16', 'tablet', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat_masuk`
--

CREATE TABLE IF NOT EXISTS `obat_masuk` (
  `id_obat` varchar(50) NOT NULL,
  `tgl_masuk` varchar(50) DEFAULT NULL,
  `satuan` varchar(50) DEFAULT NULL,
  `total` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat_masuk`
--

INSERT INTO `obat_masuk` (`id_obat`, `tgl_masuk`, `satuan`, `total`) VALUES
('CTM', '2015-10-16', 'tablet', '10'),
('DEXA', '2015-10-16', 'tablet', '100'),
('DIAZ', '2015-10-16', 'kapsul', '100'),
('GG', '2015-10-16', 'kapsul', '100'),
('LACTACID', '2015-10-16', 'tablet', '100'),
('LIPI', '2015-10-16', 'tablet', '100'),
('METRO', '2015-10-16', 'tablet', '100'),
('PAPA', '2015-10-16', 'tablet', '2000'),
('PCT', '2015-10-16', 'tablet', '120'),
('TETRA', '2015-10-16', 'kapsul', '100'),
('TRI', '2015-10-16', 'kapsul', '200'),
('TTD', '2015-10-16', 'tablet', '2000'),
('VB1', '2015-10-16', 'tube', '150'),
('VB12', '2015-10-16', 'kapsul', '200'),
('VB6', '2015-10-16', 'kapsul', '100'),
('VBCOM', '2015-10-16', 'tablet', '500'),
('VITC', '2015-10-16', 'tablet', '2000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekam_medis`
--

CREATE TABLE IF NOT EXISTS `rekam_medis` (
`idrekam_medik` int(11) NOT NULL,
  `kd_dokter` varchar(50) NOT NULL,
  `id_pasien` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `jenis_perawatan` varchar(50) NOT NULL,
  `poli` varchar(50) NOT NULL,
  `keluhan` text NOT NULL,
  `diagnosa` text NOT NULL,
  `tindakan` text NOT NULL,
  `pemeriksaan` text NOT NULL,
  `tgl_pemeriksaan` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekam_medis`
--

INSERT INTO `rekam_medis` (`idrekam_medik`, `kd_dokter`, `id_pasien`, `nama`, `jk`, `jenis_perawatan`, `poli`, `keluhan`, `diagnosa`, `tindakan`, `pemeriksaan`, `tgl_pemeriksaan`) VALUES
(1, 'Drg. Pualinggi P. Madika', '7315072810020001', 'Muh. Tasdiq', 'pria', 'Rawat Jalan', 'Poli Gigi', ' sakit gigi', 'pulpitis stadium dini ', 'penguji pulpa elektrik    ', ' fisik', '10-15-2015'),
(2, 'Drg. Pualinggi P. Madika', '7315073012550003', 'Hasmin', 'pria', 'Rawat Jalan', 'Poli Gigi', 'sakit gigi dan ngilu', ' gangguan pulpa                   ', '  rangsangan ketukan pada daerah ngilu        ', ' fisik           ', '10-15-2015'),
(3, 'Drg. Pualinggi P. Madika', '7315073112730173', 'Darwis', 'pria', 'Rawat Jalan', 'Poli Gigi', ' gusi bengkak dibagian kanan bawah belakang            ', 'abses perikoronal      ', ' operkulektomi     ', ' fisik        ', '10-15-2015'),
(5, 'Drg. Pualinggi P. Madika', '7315077112750223', 'Juda', 'wanita', 'Rawat Jalan', 'Poli Gigi', ' gigi berlubang dan ngilu yang tajam           ', 'Karies             ', ' tes elektrik            ', 'fisik             ', '10-15-2015'),
(6, 'Drg. Pualinggi P. Madika', '7315076803100001', 'Nor Fazira', 'wanita', 'Rawat Jalan', 'Poli Gigi', ' gigi susu berdempetan            ', ' persitensi            ', 'pemeriksaan intra oral             ', 'fisik             ', '10-15-2015'),
(7, 'Drg. Pualinggi P. Madika', '731507260600007', 'Muh. Fahril', 'pria', 'Rawat Jalan', 'Poli Gigi', 'gigi berdempetan             ', 'persitensi             ', 'Exo             ', 'fisik             ', '10-15-2015'),
(8, 'Drg. Pualinggi P. Madika', '7315076060600007', 'Muh. FAhrul', 'pria', 'Rawat Jalan', 'Poli Gigi', ' gigi susu berdempetan            ', 'persistensi             ', 'Exo             ', 'fisik             ', '10-15-2015'),
(9, 'Drg. Pualinggi P. Madika', '731507100404', 'Muh. Faiz', 'pria', 'Rawat Jalan', 'Poli Gigi', ' rasa ngilu yang sangat kuat     ', 'Hipermia pulpa             ', 'oral             ', 'fisik             ', '10-15-2015'),
(10, 'Drg. Pualinggi P. Madika', '7315071102970001', 'Amelia', 'wanita', 'Rawat Jalan', 'Poli Gigi', 'gigi berlubang dan terasa sakit apabila mengkonsumsi makanan dingin          ', 'pulpitis akut             ', 'pemeriksaan intra oral             ', 'fisik             ', '10-15-2015'),
(11, 'Drg. Pualinggi P. Madika', '7315071809030002', 'Rian', 'pria', 'Rawat Jalan', 'Poli Gigi', ' gusi berdarah ketika menyikat gigi           ', 'gingivitis         ', ' intra oral           ', 'fisik             ', '10-15-2015'),
(12, 'Drg. Pualinggi P. Madika', '7315073107070001', 'Muh. Farhan', 'pria', 'Rawat Jalan', 'Poli Gigi', ' sakit gigi dan gusi bengkak            ', 'gangguan pulpa             ', 'intra oral             ', 'fisik             ', '10-15-2015'),
(13, 'Drg. Pualinggi P. Madika', '7315070107090001', 'Andi M. Husni', 'pria', 'Rawat Jalan', 'Poli Gigi', ' gigi berlubang            ', 'karies     ', 'Exo             ', 'fisik             ', '10-15-2015'),
(14, 'Dr. Bernadetta, Sp.OG', '7315075909930005', 'Rosneni', 'wanita', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', '   -          ', '   -          ', ' pemeriksaan perut, dan pemeriksaan kaki            ', 'fisik           ', '10-15-2015'),
(15, 'Dr. Bernadetta, Sp.OG', '7315074107750038', 'Juma', 'wanita', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', ' sering pusing, mual, telat menstruasi            ', 'Hamil             ', 'test urine             ', 'fisik             ', '10-15-2015'),
(16, 'Dr. Bernadetta, Sp.OG', '7315076105800001', 'Linda', 'wanita', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'mudah pusing, mudah lelah             ', 'kurang vitamin B           ', 'pemeriksaan perut dan detak jantung      ', 'fisik             ', '10-15-2015'),
(17, 'Dr. Bernadetta, Sp.OG', '7315075009910005', 'Darmawati', 'wanita', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', ' -            ', 'pemeriksaan tri semester I             ', 'pengambilan BB, TB, pemeriksaan perut          ', 'fisik             ', '10-15-2015'),
(18, 'Dr. Bernadetta, Sp.OG', '7315075108140001', 'Nurul Adibah', 'wanita', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', ' -            ', ' -           ', ' imunisasi           ', 'fisik          ', '10-15-2015'),
(19, 'Dr. Bernadetta, Sp.OG', '7315075011900002', 'Jumriati', 'wanita', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', ' -            ', ' -            ', ' TORCH,  pemeriksaan dalam             ', '  pemeriksaan trisemester II           ', '10-15-2015'),
(20, 'Dr. Bernadetta, Sp.OG', '7315070912140002', 'Azila Nurfadilah', 'wanita', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', ' -          ', 'imunisasi              ', 'suntik imunisasi             ', ' fisik           ', '10-15-2015'),
(21, 'Dr. Bernadetta, Sp.OG', '7315074301800002', 'Nani', 'wanita', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', ' kaki bengkak, mudah lelah           ', 'pemeriksaan trisemester III, preeklampsia       ', ' pemeriksaan kaki, dalam, perut           ', 'fisik             ', '10-15-2015'),
(22, 'Dr. Bernadetta, Sp.OG', '7315072201120001', 'Muh. Fahri', 'pria', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', ' -            ', ' imunisasi            ', ' suntik          ', 'fisik             ', '10-15-2015'),
(23, 'Dr. Bernadetta, Sp.OG', '731507711274003', 'Lisa', 'wanita', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'susah BAB, pusing, mudah lelah dan ngantuk             ', ' pemeriksaan trisemester II           ', 'torch, pemeriksaan perut dan detak jantung        ', 'fisik             ', '10-15-2015'),
(24, 'Dr. Bernadetta, Sp.OG', '7315074704840002', 'wati', 'wanita', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', '  mudah lelah, pusing           ', ' anemia, trisemester II             ', 'pemeriksaan perut             ', 'fisik             ', '10-15-2015'),
(25, 'Dr. Bernadetta, Sp.OG', '7315074905910001', 'Muslia', 'wanita', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', ' mual, pusing, telat menstruasi            ', 'hamil             ', 'test urin, pemeriksaan perut             ', 'fisik             ', '10-15-2015'),
(26, 'Dr. Bernadetta, Sp.OG', '7315074002030001', 'Ummi Kalsum', 'wanita', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', ' mudah lelah, susah BAB            ', 'trisemester II           ', 'pemeriksaan perut, dalam             ', ' fisik            ', '10-15-2015'),
(27, 'Dr. Bernadetta, Sp.OG', '7315070304950001', 'Rita', 'wanita', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'sering BAK, kaki bengkak           ', 'trisemester III             ', 'torch, pemeriksaan kaki, perut, dalam,             ', 'fisik             ', '10-15-2015'),
(28, 'Dr. Bernadetta, Sp.OG', '7315074305800001', 'Hasmia', 'wanita', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', '  sering BAK           ', 'trisemester iii             ', 'torch, pemeriksaaan perut             ', 'fisik             ', '10-15-2015'),
(29, 'Dr. Bernadetta, Sp.OG', '7315076041210001', 'Nur Atikah', 'wanita', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', ' -            ', ' imunisasi           ', ' suntik           ', ' fisik           ', '10-15-2015'),
(30, 'Dr. Bernadetta, Sp.OG', '7315071110150001', 'Riski Aditya', 'pria', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', '-             ', 'imunisasi             ', ' suntik         ', 'fisik             ', '10-15-2015'),
(31, 'Dr. Bernadetta, Sp.OG', '7315077230350002', 'Muh. A. Muhtadi', 'pria', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', '-             ', ' imunisasi            ', ' BB, suntik             ', ' fisik            ', '10-15-2015'),
(32, 'Dr. Bernadetta, Sp.OG', '7315077230350002', 'Muh. A. Muhtadi', 'pria', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', ' -           ', ' imunisasi             ', 'Timbang BB, suntik             ', 'fisik             ', '10-15-2015'),
(33, 'Dr. Bernadetta, Sp.OG', '73150771128900009', 'Ramlah', 'wanita', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', ' susah BAB          ', 'trisemester I             ', 'pemeiksaan perut, tinggi badan             ', 'fisik             ', '10-15-2015'),
(34, 'Dr. Bernadetta, Sp.OG', '7315070110890001', 'Ratna', 'wanita', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', ' mual, pusing, mudah lelah           ', ' hamil             ', 'test urin, pemeriksaan BB, perut             ', 'fisik             ', '10-15-2015'),
(35, 'Dr. Bernadetta, Sp.OG', '7315076607820001', 'Mariati', 'wanita', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'mual, mudah lelah          ', ' hamil           ', 'test urin, pemeriksaan BB, TB             ', ' fisik            ', '10-15-2015'),
(36, 'Dr. Bernadetta, Sp.OG', '7315075005740004', 'Rabah', 'wanita', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', ' pusing, mudah lelah, ngantuk dipagi hari          ', 'anemia, trismester I             ', 'pemeriksaan perut, dalam             ', 'fisik             ', '10-15-2015'),
(37, 'Dr. Nirwana', '7315077112540070', 'Hj. Bahara', 'wanita', 'Rawat Jalan', 'Poli Umum', 'gelisah, cemas, emosional             ', ' skizofrenia             ', 'psikoterapi             ', 'fisik             ', '10-15-2015'),
(38, 'Dr. Nirwana', '7315072811030001', 'Doni', 'pria', 'Rawat Jalan', 'Poli Umum', ' tubuh panas, kepala pusing             ', ' febris            ', ' test suhu tubuh             ', 'fisik             ', '10-16-2015'),
(39, 'Dr. Nirwana', '7315071212070001', 'Adam', 'pria', 'Rawat Jalan', 'Poli Umum', '  BAB berdarah           ', 'disentri             ', ' pemeriksaan tekana darah             ', ' nonfisik             ', '10-16-2015'),
(40, 'Dr. Nirwana', '731507121840004', 'Jumardi', 'pria', 'Rawat Jalan', 'Poli Umum', 'kaki luka karena jatuh dari motor        ', ' luka bakar           ', ' balut luka             ', 'fisik             ', '10-16-2015'),
(41, 'Dr. Nirwana', '7315077112640067', 'Mariana', 'wanita', 'Rawat Jalan', 'Poli Umum', ' susah dan sakit ketika menelan          ', 'faringitis             ', 'intra faring             ', 'fisik             ', '10-16-2015'),
(42, 'Dr. Nirwana', '7315071502800003', 'Gana', 'pria', 'Rawat Jalan', 'Poli Umum', ' nyeri pada lambung, mual            ', 'gastritis             ', 'pemeriksaan perut dan lambung             ', 'fisik             ', '10-16-2015'),
(43, 'Dr. Nirwana', '7315070806980002', 'Aswan', 'pria', 'Rawat Jalan', 'Poli Umum', ' batuk sejak seminggu, tenggorokan terasa kering           ', 'batuk lama             ', ' pemberian obat             ', '-             ', '10-16-2015'),
(44, 'Dr. Nirwana', '7315072712700003', 'mustafa', 'pria', 'Rawat Jalan', 'Poli Umum', ' susah BAB, sejak 3 hari            ', 'dispepsi             ', 'obat             ', 'nonfisik             ', '10-16-2015'),
(45, 'Dr. Nirwana', '7315074107660005', 'Dara', 'wanita', 'Rawat Jalan', 'Poli Umum', ' pusing ketika berdiri, mudah lelah     ', 'anemia             ', 'pemeriksaan tekanan darah             ', 'fisik             ', '10-16-2015'),
(46, 'Dr. Nirwana', '73150771112600001', 'Eda', 'wanita', 'Rawat Jalan', 'Poli Umum', ' kulit terasa gatal, merah, bengkak             ', 'dermatitis             ', 'pemeriksaan kulit             ', 'fisik             ', '10-16-2015'),
(47, 'Dr. Nirwana', '7315072408130001', 'A. Muh. Rafik', 'pria', 'Rawat Jalan', 'Poli Umum', ' BAB sejak kemarin, BAB encer           ', 'Diare             ', 'obat             ', 'nonfisik             ', '10-16-2015'),
(48, 'Dr. Nirwana', '7315075909930005', 'Hj. Halla', 'wanita', 'Rawat Jalan', 'Poli Umum', ' muncul benjolan merah, bernanah, nyeri          ', 'bisul             ', 'pengamatan jasmani             ', 'nonfisik             ', '10-16-2015'),
(49, 'Dr. Nirwana', '7315070612980002', 'A. Sulistia', 'wanita', 'Rawat Jalan', 'Poli Umum', ' susah tidur sudah 1 minggu', 'insomnia             ', 'pemeriksaan mata             ', 'fisik             ', '10-16-2015'),
(50, 'Dr. Nirwana', '2114067112270004', 'Mutri', 'wanita', 'Rawat Jalan', 'Poli Umum', ' luka terasa nyeri dimalam hari            ', 'insomnia, rawat luka             ', 'ganti pembalut luka             ', 'fisik             ', '10-16-2015'),
(51, 'Dr. Nirwana', '7315071010720002', 'Bakkarang', 'pria', 'Rawat Jalan', 'Poli Umum', ' sakit kepala sebelah, leher terasa tegang              ', 'migraine             ', 'obat             ', 'nonfisik             ', '10-16-2015'),
(52, 'Drg. Pualinggi P. Madika', '7315072810020001', 'Muh. Tasdiq', 'pria', 'Rawat Jalan', 'Poli Gigi', 'sakit gigi', 'gigi berlubang             ', 'Cabut Gigi             ', 'gigi berlubang             ', '25-10-2015'),
(53, 'Dr. Nirwana', '1263', 'santi', 'wanita', 'Rawat Jalan', 'NIK', '             asda', '             asdas', '             asda', '             asda', '2015-10-25'),
(54, 'Dr. Nirwana', '1263', 'santi', 'wanita', 'Rawat Jalan', 'NIK', '             asda', '             asdas', '             asda', '             asda', '2015-10-25'),
(55, 'Dr. Nirwana', '1263', 'santi', 'wanita', 'Rawat Jalan', 'Poli Umum', '             asda', '             sdas', '             asdas', '             dasd', '2015-10-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep_obat`
--

CREATE TABLE IF NOT EXISTS `resep_obat` (
  `id_pasien` varchar(50) NOT NULL,
  `kd_dokter` varchar(50) DEFAULT NULL,
  `keluhan` varchar(50) DEFAULT NULL,
  `diagnosa` varchar(50) DEFAULT NULL,
  `resep_obat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Mencatat resep obat pasien ';

--
-- Dumping data untuk tabel `resep_obat`
--

INSERT INTO `resep_obat` (`id_pasien`, `kd_dokter`, `keluhan`, `diagnosa`, `resep_obat`) VALUES
('2114067112270004', 'Dr. Nirwana', ' luka terasa nyeri dimalam hari            ', 'insomnia, rawat luka             ', 'R/ b1, b6, b12 pct / 10'),
('7315070107090001', 'Drg. Pualinggi P. Madika', ' gigi berlubang            ', 'karies     ', 'R/ t.i.d p.c vitc/9 pct/4'),
('7315070110890001', 'Dr. Bernadetta, Sp.OG', ' mual, pusing, mudah lelah           ', ' hamil             ', 'R/ p.c.d TTD, B1, vitc /10'),
('7315070612980002', 'Dr. Nirwana', ' susah tidur sudah 1 minggu', 'insomnia             ', 'R/ p.c b1, b6, b12'),
('7315070806980002', 'Dr. Nirwana', ' batuk sejak seminggu, tenggorokan terasa kering  ', 'batuk lama             ', ' R/ p.c. t.i.d gg, ctm, pct, vitc'),
('731507100404', 'Drg. Pualinggi P. Madika', ' rasa ngilu yang sangat kuat     ', 'Hipermia pulpa             ', 'R/ t.i.d p.c amox/3, pct/3, dexa/3'),
('7315071010720002', 'Dr. Nirwana', ' sakit kepala sebelah, leher terasa tegang        ', 'migraine             ', ' R/ p.c.d b12, ibu / 6'),
('7315071102970001', 'Drg. Pualinggi P. Madika', 'gigi berlubang dan terasa sakit apabila mengkonsum', 'pulpitis akut             ', 'R/ t.i.d p.c amox/4 vitc/6 pct/2'),
('7315071212070001', 'Dr. Nirwana', '  BAB berdarah           ', 'disentri             ', 'R/ pct, bcom, oralit'),
('731507121840004', 'Dr. Nirwana', 'kaki luka karena jatuh dari motor        ', ' luka bakar           ', 'R/ p.c.d pct, amox, b6 / 10'),
('7315071502800003', 'Dr. Nirwana', ' nyeri pada lambung, mual            ', 'gastritis             ', ' R/ t.i.d p.c papaverin, b6/10'),
('7315071809030002', 'Drg. Pualinggi P. Madika', ' gusi berdarah ketika menyikat gigi           ', 'gingivitis         ', 't.i.d p.c vitc/8 amox/6'),
('7315072408130001', 'Dr. Nirwana', ' BAB sejak kemarin, BAB encer           ', 'Diare             ', 'R/ p.c.t p.i.d exa, ctm, oralit'),
('7315072712700003', 'Dr. Nirwana', ' susah BAB, sejak 3 hari            ', 'dispepsi             ', 'R/ t.i.d pct, mox,dexa, ctm'),
('7315072810020001', 'Drg. Pualinggi P. Madika', ' sakit gigi', 'pulpitis stadium dini ', 'R/ b.d p.c atg/10'),
('7315072811030001', 'Dr. Nirwana', ' tubuh panas, kepala pusing             ', ' febris            ', ' R/ pct bcom vitc / 10'),
('7315073012550003', 'Drg. Pualinggi P. Madika', 'sakit gigi dan ngilu', ' gangguan pulpa                   ', 'R/ b.d p.c asmef/3 Dexa/2'),
('7315073107070001', 'Drg. Pualinggi P. Madika', ' sakit gigi dan gusi bengkak            ', 'gangguan pulpa             ', 'R/ t.i.d p.c pct/6 vitc/9'),
('7315073112730173', 'Drg. Pualinggi P. Madika', ' gusi bengkak dibagian kanan bawah belakang       ', 'abses perikoronal      ', 'R/ b.d p.c atg/6 pct/3'),
('7315074107660005', 'Dr. Nirwana', ' pusing ketika berdiri, mudah lelah     ', 'anemia             ', 'R/ TTD, bcom / 6'),
('7315074107750038', 'Dr. Bernadetta, Sp.OG', ' sering pusing, mual, telat menstruasi            ', 'Hamil             ', 'R/ tablet tambah darah/10'),
('7315074301800002', 'Dr. Bernadetta, Sp.OG', ' kaki bengkak, mudah lelah           ', 'pemeriksaan trisemester III, preeklampsia       ', 'R/ B6, Bcom /6'),
('7315074704840002', 'Dr. Bernadetta, Sp.OG', '  mudah lelah, pusing           ', ' anemia, trisemester II             ', 'R/ p.c.d TTD/10'),
('7315074905910001', 'Dr. Bernadetta, Sp.OG', ' mual, pusing, telat menstruasi            ', 'hamil             ', ' R/ p.c.d vitc, b1 / 6'),
('7315075005740004', 'Dr. Bernadetta, Sp.OG', ' pusing, mudah lelah, ngantuk dipagi hari         ', 'anemia, trismester I             ', 'R/ TTD, bcom /6'),
('7315075009910005', 'Dr. Bernadetta, Sp.OG', ' -            ', 'pemeriksaan tri semester I             ', 'R/ p.c.d B6 Bcom /10'),
('7315075011900002', 'Dr. Bernadetta, Sp.OG', ' -            ', ' -            ', 'R/ B1'),
('7315075909930005', 'Dr. Nirwana', ' muncul benjolan merah, bernanah, nyeri          ', 'bisul             ', 'R/ t.i.d amox, pct, vitc / 10'),
('7315076105800001', 'Dr. Bernadetta, Sp.OG', 'mudah pusing, mudah lelah             ', 'kurang vitamin B           ', 'R/ t.i.d p.c. b1 b2 b12 / 6'),
('7315076803100001', 'Drg. Pualinggi P. Madika', ' gigi susu berdempetan            ', ' persitensi            ', 'R/ s.i.d vitc/6'),
('73150771112600001', 'Dr. Nirwana', ' kulit terasa gatal, merah, bengkak             ', 'dermatitis             ', 'R/ p.c.    ctm, dexa, vitc, salep'),
('7315077112540070', 'Dr. Nirwana', 'gelisah, cemas, emosional             ', ' skizofrenia             ', 'R/ t.i.d cpz ctm /10'),
('7315077112640067', 'Dr. Nirwana', ' susah dan sakit ketika menelan          ', 'faringitis             ', 'R/ pc tid cipro, dexa, bcom, gg / 10'),
('731507711274003', 'Dr. Bernadetta, Sp.OG', 'susah BAB, pusing, mudah lelah dan ngantuk        ', ' pemeriksaan trisemester II           ', 'R/ bcom, TTD / 10'),
('7315077112750223', 'Drg. Pualinggi P. Madika', ' gigi berlubang dan ngilu yang tajam           ', 'Karies             ', 'R/ b.d p.c amox/3 vitc/10 dexa/5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `uadmin`
--

CREATE TABLE IF NOT EXISTS `uadmin` (
`id` int(10) unsigned NOT NULL,
  `username` char(50) DEFAULT NULL,
  `password` char(50) DEFAULT NULL,
  `jenis_kelamin` char(50) DEFAULT NULL,
  `level` char(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `img` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='Mangemen Data Admin';

--
-- Dumping data untuk tabel `uadmin`
--

INSERT INTO `uadmin` (`id`, `username`, `password`, `jenis_kelamin`, `level`, `status`, `img`) VALUES
(1, 'admin', '9c1ad00a16a7c67e2727b471ac969e96', 'perempuan', 'admin', 'aktif', 'admin.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `uapoteker`
--

CREATE TABLE IF NOT EXISTS `uapoteker` (
  `nip` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='managemen data petugas';

--
-- Dumping data untuk tabel `uapoteker`
--

INSERT INTO `uapoteker` (`nip`, `username`, `ttl`, `jenis_kelamin`, `alamat`, `no_telp`, `pendidikan`, `jabatan`, `agama`, `password`, `status`, `level`, `img`) VALUES
('19870126 201003 1 003', 'Warni D, S.Farm, Apt', 'Tuppu, 26 Januari 1987', 'Wanita', 'Tuppu', '08396186180', 'S1 Farmasi', 'Apoteker', 'kristen', '21232f297a57a5a743894a0e4a801fc3', 'aktif', 'apoteker', '19870126 201003 1 003.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `udokter`
--

CREATE TABLE IF NOT EXISTS `udokter` (
  `nip` varchar(50) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `hp` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `kd_poli` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='managemen data dokter';

--
-- Dumping data untuk tabel `udokter`
--

INSERT INTO `udokter` (`nip`, `nama_dokter`, `ttl`, `jenis_kelamin`, `alamat`, `hp`, `pendidikan`, `jabatan`, `agama`, `spesialis`, `kd_poli`, `password`, `level`, `status`, `img`) VALUES
('197504092007011006', 'Drg. Pualinggi P. Madika', 'Makale, 9 April 1975', 'Pria', 'Kompleks PKM Tuppu', '085398040939', 'Fakultas Kedokteran Gigi', 'Dokter Gigi', 'kristen', 'Gigi', 'Poli Gigi', '21232f297a57a5a743894a0e4a801fc3', 'dokter', 'aktif', '197504092007011006.jpg'),
('197911162010012009', 'Dr. Bernadetta, Sp.OG', 'wono, 16 November 1979', 'Wanita', 'Kompleks PKM Tuppu', '085299963378', 'PPDS Obstetri &amp; Ginekologi', 'Kepala KIA', 'kristen', 'Spesialis Kebidanan Dan Kandungan', 'Poli Kesehatan Ibu Dan Anak', '21232f297a57a5a743894a0e4a801fc3', 'dokter', 'aktif', '197911162010012009.jpg'),
('198402242010042008', 'Dr. Nirwana', 'Kajuangin, 24 Februari 1984', 'Wanita', 'Kajuangin', '085299211640', 'Fakultas Kedokteran', 'Dokter Umum', 'islam', '-', 'Poli Umum', '21232f297a57a5a743894a0e4a801fc3', 'dokter', 'aktif', '198402242010042008.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ukpl_puskesmas`
--

CREATE TABLE IF NOT EXISTS `ukpl_puskesmas` (
  `nip` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='managemen data petugas';

--
-- Dumping data untuk tabel `ukpl_puskesmas`
--

INSERT INTO `ukpl_puskesmas` (`nip`, `username`, `ttl`, `jenis_kelamin`, `alamat`, `no_telp`, `pendidikan`, `jabatan`, `agama`, `password`, `status`, `level`, `img`) VALUES
('196905061989031003', 'H. Muh. Agus Saad, SKM, M.kes', 'Pinrang, 6 Mei 1969', 'Pria', 'Kompleks PKM Tuppu', '081342265357', 'Master Kesehatan', 'Kepala Puskesmas', 'islam', '21232f297a57a5a743894a0e4a801fc3', 'aktif', 'kepala puskesmas', '196905061989031003.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `upasien`
--

CREATE TABLE IF NOT EXISTS `upasien` (
`no_antrian` int(11) NOT NULL,
  `idpasien` varchar(50) NOT NULL,
  `identitas` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(50) NOT NULL DEFAULT '0',
  `agama` varchar(50) NOT NULL DEFAULT '0',
  `tgl_lahir` date DEFAULT NULL,
  `no_tlp` varchar(50) DEFAULT NULL,
  `usia` varchar(50) DEFAULT NULL,
  `nama_kpl_klrg` varchar(50) DEFAULT NULL,
  `hub_klrg` varchar(50) DEFAULT NULL,
  `tgl_daftar` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `jenis_perawatan` varchar(50) NOT NULL DEFAULT '0',
  `poli` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `denda` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=latin1 COMMENT='Managemen Data Pasien';

--
-- Dumping data untuk tabel `upasien`
--

INSERT INTO `upasien` (`no_antrian`, `idpasien`, `identitas`, `nama`, `jenis_kelamin`, `agama`, `tgl_lahir`, `no_tlp`, `usia`, `nama_kpl_klrg`, `hub_klrg`, `tgl_daftar`, `alamat`, `jenis_perawatan`, `poli`, `status`, `denda`) VALUES
(1, '7315077112540070', 'NIK', 'Hj. Bahara', 'wanita', 'Islam', '1953-03-05', '+6285205994752', '63 tahun', 'Hj. Bahara', '-', '15-10-13', 'pajalele', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(2, '7315072811030001', 'NIK', 'Doni', 'pria', 'Islam', '1996-06-09', '+62856966054513', '20 tahun', 'Jufri', 'anak', '15-10-13', 'Karajo', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(3, '7315071212070001', 'NIK', 'Adam', 'pria', 'Islam', '1992-02-19', '+6285399832839', '24 tahun', 'Nasir', 'Anak', '15-10-13', 'tuppu', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(4, '7315075909930005', 'NIK', 'Rosneni', 'wanita', 'Islam', '1994-09-01', '+6285397970804', '22 tahun', 'saleng', 'suami', '15-10-13', 'kalosi', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'aktif', '-'),
(5, '731507121840004', 'NIK', 'Jumardi', 'pria', 'Islam', '1971-06-19', '+6285340847267', '45 tahun', 'Jumardi', 'Suami', '15-10-13', 'karawa', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(6, '7604062307580001', 'NIK', 'Duali', 'pria', 'Islam', '1982-02-04', '+6285145086726', '34 tahun', 'Duali', 'Suami', '15-10-13', 'polewali', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(7, '7315074107750038', 'NIK', 'Juma', 'wanita', 'Islam', '1989-12-07', '+6281933965334', '26 tahun', 'Rendi', 'Suami', '15-10-13', 'kanipang', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'aktif', '-'),
(8, '7315077112640067', 'NIK', 'Mariana', 'wanita', 'Kristen', '1986-03-15', '+6289631898810', '30 tahun', 'Donatus Manara', 'Suami', '15-10-13', 'Pangaparang', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(9, '7315071502800003', 'NIK', 'Gana', 'pria', 'Islam', '1978-05-19', '085213931809', '38 tahun', 'Gana', 'Suami', '15-10-13', 'Lakkadong', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(10, '7315070806980002', 'NIK', 'Aswan', 'pria', 'Islam', '1992-08-15', '+62087840202327', '24 tahun', 'La Suing', 'Anak', '15-10-13', 'Kajuangin', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(11, '7315072712700003', 'NIK', 'mustafa', 'pria', 'Islam', '1966-01-25', '+6285338472760', '50 tahun', 'mustafa', 'suami', '15-10-13', 'buttu sappa', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(12, '7315074107660005', 'NIK', 'Dara', 'wanita', 'Islam', '1966-07-01', '+6281543037910', '50 tahun', 'Kadang', 'Suami', '15-10-13', 'Lombo', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(13, '7315076105800001', 'NIK', 'Linda', 'wanita', 'Islam', '1980-05-21', '+6281266722664', '36 tahun', 'Usman', 'Suami', '15-10-13', 'Lombo', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'aktif', '-'),
(14, '73150771112600001', 'NIK', 'Eda', 'wanita', 'Islam', '1960-12-31', '+62085343737595', '55 tahun', 'Abd. Thalib', 'Suami', '15-10-13', 'Kannipang', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(15, '7315074703880001', 'NIK', 'Sasmi', 'wanita', 'Islam', '1988-06-07', '+62085253014659', '28 tahun', 'Daniel', 'suami', '15-10-13', 'Tuppu', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(16, '7315072408130001', 'NIK', 'A. Muh. Rafik', 'pria', 'Islam', '2013-08-24', '+6281241008110', '3 tahun', 'A. Tiar', 'Anak', '15-10-13', 'Tuppu', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(17, '7315075609130001', 'NIK', 'Nur Wahidah', 'wanita', 'Islam', '2015-09-16', '+6285242400224', '1 tahun', 'Kasman', 'Anak', '15-10-13', 'salusape', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(18, '7315075909930005', 'NIK', 'Hj. Halla', 'wanita', 'Islam', '1964-03-30', '+6289503309727', '52 tahun', 'Hj. Halla', 'Janda', '15-10-13', 'salukalobe', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(19, '7315071312110001', 'NIK', 'Kama', 'wanita', 'Islam', '1966-12-13', '+6285397921294', '49 tahun', 'Muddu', 'istri', '15-10-13', 'salopi', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(20, '7315070612980002', 'NIK', 'A. Sulistia', 'wanita', 'Islam', '1998-12-06', '+6282301999984', '17 tahun', 'Suaib', 'Anak', '15-10-13', 'Pajalele', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(21, '2114067112270004', 'NIK', 'Mutri', 'wanita', 'Islam', '1927-12-31', '-', '88 tahun', 'Mutri', 'Janda', '15-10-13', 'Kajuangin', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(22, '7315075009910005', 'NIK', 'Darmawati', 'wanita', 'Islam', '1991-09-10', '+62085342732085', '25 tahun', 'Arfah', 'Suami', '15-10-13', 'Kajuangin', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'aktif', '-'),
(23, '7315071010720002', 'NIK', 'Bakkarang', 'pria', 'Islam', '1972-10-10', '+6285255876230', '44 tahun', 'Bakkarang', 'Suami', '15-10-13', 'Salopi', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(24, '7315075808060003', 'NIK', 'Nurmalasari', 'wanita', 'Islam', '1996-06-13', '+6287841079327', '20 tahun', 'Muhtar', 'Anak', '15-10-13', 'Salukalobe', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(25, '7315079112750229', 'NIK', 'Hj. Sukawati', 'wanita', 'Islam', '1975-12-31', '+6285340995365', '40 tahun', 'M. Yusup', 'Istri', '15-10-13', 'Pajalele', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(26, '7315071502070001', 'NIK', 'Haikal', 'pria', 'Islam', '2007-02-05', '+6282346659911', '9 tahun', 'Suardi', 'Anak', '15-10-13', 'Pangaparang', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(27, '7315071308130001', 'NIK', 'Rusyadi', 'pria', 'Islam', '2013-08-13', '+6285399373066', '3 tahun', 'Sumiati', 'Anak', '15-10-13', 'salusape', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(28, '7315071411950001', 'NIK', 'Hernawati', 'wanita', 'Islam', '1995-11-14', '+6282347747376', '20 tahun', 'Basri', 'anak', '15-10-13', 'sali-sali', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(29, '7315075108140001', 'NIK', 'Nurul Adibah', 'wanita', 'Islam', '2014-08-12', '+6285256635607', '2 tahun', 'Thalib', 'Anak', '15-10-13', 'Karajo', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'aktif', '-'),
(30, '7315070606020001', 'NIK', 'Arjun', 'pria', 'Islam', '2002-06-06', '+6285255205285', '14 tahun', 'Amir', 'Anak', '15-10-13', 'cappalete', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(31, '7315070206680020', 'NIK', 'Hartawan', 'pria', 'Islam', '1968-06-01', '+6285242260809', '48 tahun', 'Hartawan', 'Suami', '15-10-14', 'Kandoka', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(32, '7315075011900002', 'NIK', 'Jumriati', 'wanita', 'Islam', '1955-02-02', '+6282396642273', '61 tahun', 'Herman', 'Istri', '15-10-14', 'Lambalumama', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'aktif', '-'),
(33, '7315070912140002', 'NIK', 'Azila Nurfadilah', 'wanita', 'Islam', '2014-12-09', '+6285256491789', '1 tahun', 'H. Jabbar', 'Anak', '15-10-14', 'Pembangun', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'aktif', '-'),
(34, '7315074301800002', 'NIK', 'Nani', 'wanita', 'Islam', '1979-01-03', '+6282187508998', '37 tahun', 'Iksan', 'Istri', '15-10-14', 'pangaparang', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'aktif', '-'),
(35, '73150743070800003', 'NIK', 'miranda', 'wanita', 'Islam', '2006-07-03', '+62085298549354', '10 tahun', 'Heri', 'istri', '15-10-14', 'salusape', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(36, '7315077112270004', 'NIK', 'Muttia', 'wanita', 'Islam', '1927-12-31', '+6282301553567', '88 tahun', 'Mutttia', 'istri', '15-10-14', 'kajuangin', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(37, '7315072201120001', 'NIK', 'Muh. Fahri', 'pria', 'Islam', '2012-06-22', '+6285242546440', '4 tahun', 'Rusnawati', 'anak', '15-10-14', 'tuppu', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'aktif', '-'),
(38, '7315072810020001', 'NIK', 'Muh. Tasdiq', 'pria', 'Islam', '2002-10-28', '+6282187293253', '13 tahun', 'Agussalim', 'anak', '15-10-14', 'salimbongan', 'Rawat Jalan', 'Poli Gigi', 'aktif', '-'),
(39, '7315077012520010', 'NIK', 'Rema', 'pria', 'Islam', '1952-12-30', '+6285208522796', '63 tahun', 'Rema', 'Suami', '15-10-14', 'buttusappa', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(40, '7315073012550003', 'NIK', 'Hasmin', 'pria', 'Islam', '1953-12-30', '+625343632297', '62 tahun', 'Hasmin', 'suami', '15-10-14', 'tuppu', 'Rawat Jalan', 'Poli Gigi', 'aktif', '-'),
(41, '7315073112730173', 'NIK', 'Darwis', 'pria', 'Islam', '1973-12-31', '+6285398244245', '42 tahun', 'Darwis', 'suami', '15-10-14', 'lambalumama', 'Rawat Jalan', 'Poli Gigi', 'aktif', '-'),
(42, '7315077112750223', 'NIK', 'Juda', 'wanita', 'Islam', '1975-12-31', '+6285346205846', '40 tahun', 'Muh. Nasir', 'istri', '15-10-14', 'salusape', 'Rawat Jalan', 'Poli Gigi', 'aktif', '-'),
(43, '7315073112480047', 'NIK', 'Parakkasi', 'pria', 'Islam', '1948-12-31', '+6282395086770', '67 tahun', 'Parakkasi', 'suami', '15-10-14', 'kannipang', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(44, '7315073112540163', 'NIK', 'Baddu', 'pria', 'Islam', '1954-12-31', '+6282393080850', '61 tahun', 'Baddu', 'suami', '15-10-14', 'lambalumama', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(45, '731507711274003', 'NIK', 'Lisa', 'wanita', 'Islam', '1974-12-31', '+6281354997627', '41 tahun', 'Sudirman', 'istri', '15-10-14', 'pembangun', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'aktif', '-'),
(46, '7315074704840002', 'NIK', 'wati', 'wanita', 'Islam', '1984-04-07', '+6285242624020', '32 tahun', 'Abbas', 'istri', '15-10-14', 'pajalele', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'aktif', '-'),
(47, '7315074905910001', 'NIK', 'Muslia', 'wanita', 'Islam', '1991-05-09', '+6285340533249', '25 tahun', 'Rahim', 'istri', '15-10-14', 'butttu tanre', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'aktif', '-'),
(48, '7315077112490029', 'NIK', 'Eja', 'wanita', 'Islam', '1949-12-31', '-', '66 tahun', 'Eja', '-', '15-10-14', 'salusape', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(49, '7315071312660001', 'NIK', 'Kamaria', 'wanita', 'Islam', '1966-12-13', '+6282348865312', '49 tahun', 'Madok', 'istri', '15-10-14', 'lemosusu', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(50, '7315070704040003', 'NIK', 'Rusdin', 'pria', 'Islam', '1994-04-07', '+6281314066249', '22 tahun', 'Sunuri', 'anak', '15-10-14', 'lambalumama', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(51, '7315076601850001', 'NIK', 'Tarika', 'wanita', 'Islam', '1996-05-10', '+6285396407055', '20 tahun', 'Yonta', 'anak', '15-10-14', 'lambalumama', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(52, '7315076303960004', 'NIK', 'Hasliana', 'wanita', 'Islam', '1996-03-23', '+6285242542232', '20 tahun', 'Rustam', 'anak', '15-10-14', 'cullu', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(53, '7315074002030001', 'NIK', 'Ummi Kalsum', 'wanita', 'Islam', '1993-02-09', '+6281266653565', '23 tahun', 'Firdaus', 'istri', '15-10-14', 'salopi', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'aktif', '-'),
(54, '7315074109470001', 'NIK', 'Hj. Nurjanna', 'wanita', 'Islam', '1947-08-01', '+6285341024223', '69 tahun', 'Summang', 'istri', '15-10-14', 'salusape', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(55, '7315074212470001', 'NIK', 'TIja', 'wanita', 'Islam', '1947-12-02', '+6282348458605', '68 tahun', 'sagala', 'istri', '15-10-14', 'karawa', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(56, '7315072106860002', 'NIK', 'Umar', 'pria', 'Islam', '1986-06-21', '+6282346129369', '30 tahun', 'Umar', 'suami', '15-10-14', 'batu losso', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(57, '7315070304950001', 'NIK', 'Rita', 'wanita', 'Islam', '1995-04-03', '+6285241905272', '21 tahun', 'Suhaeri', 'istri', '15-10-14', 'lombo', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'aktif', '-'),
(58, '7315073012570004', 'NIK', 'Zainuddin', 'pria', 'Islam', '1957-12-30', '+6282393111070', '58 tahun', 'Zainuddin', 'suami', '15-10-14', 'salusape', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(59, '7315074305800001', 'NIK', 'Hasmia', 'wanita', 'Islam', '1980-05-03', '+6285299705512', '36 tahun', 'Sarullah', 'istri', '15-10-14', 'pembangun', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'aktif', '-'),
(60, '7315070706740001', 'NIK', 'Halim', 'pria', 'Islam', '1964-06-07', '+6285396369315', '52 tahun', 'Halim', 'suami', '15-10-14', 'kalosi', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(61, '7315075312720001', 'NIK', 'Darawisa', 'wanita', 'Islam', '1959-12-31', '+6285397000950', '56 tahun', 'Darawisa', '-', '15-10-14', 'tuppu', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(62, '7315070803130001', 'NIK', 'Edgard', 'pria', 'Islam', '2013-03-08', '+6281320219262', '3 tahun', 'Saru', 'anak', '15-10-14', 'tuppu', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(63, '731507311247032', 'NIK', 'Ruki', 'pria', 'Islam', '1947-12-31', '+6282346422106', '68 tahun', 'Ruki', 'suami', '15-10-14', 'salukalobe', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(64, '7315070504860047', 'NIK', 'Hasbudi', 'pria', 'Islam', '1986-04-05', '+6285396376246', '30 tahun', 'Hasbudi', 'suami', '15-10-14', 'Kajuangin', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(65, '7315073112600245', 'NIK', 'Muh. Yusuf', 'pria', 'Islam', '1960-12-31', '+6285248268883', '55 tahun', 'Muh.Yususf', 'suami', '15-10-14', 'kannipang', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(66, '7315076710730001', 'NIK', 'Hanisa', 'wanita', 'Islam', '1973-10-27', '+6285256012034', '42 tahun', 'Marsuki', 'istri', '15-10-14', 'ratte', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(67, '7315072406050001', 'NIK', 'Junaedi', 'pria', 'Islam', '2005-06-24', '+6285396709947', '11 tahun', 'Muh. Saleh', 'anak', '15-10-14', 'karajo', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(68, '7315072309090001', 'NIK', 'Sapira', 'wanita', 'Islam', '2009-09-23', '+6285242942023', '7 tahun', 'Munir', 'anak', '15-10-14', 'karajo', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(69, '7315074808760001', 'NIK', 'Nahira', 'wanita', 'Islam', '1976-08-08', '+6285240065863', '40 tahun', 'Udin', 'istri', '15-10-14', 'tuppu', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(70, '7315076041210001', 'NIK', 'Nur Atikah', 'wanita', 'Islam', '2015-04-15', '+6282347410824', '1 tahun', 'Aldi', 'anak', '15-10-14', 'tuppu', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'aktif', '-'),
(71, '7315077427100024', 'NIK', 'Sagara', 'wanita', 'Islam', '1951-12-31', '-', '64 tahun', 'Sagar', '-', '15-10-14', 'pangaparang', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(72, '7315071110150001', 'NIK', 'Riski Aditya', 'pria', 'Islam', '2015-01-14', '+6282306787731', '1 tahun', 'Hamsa', 'Anak', '15-10-14', 'tuppu', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'aktif', '-'),
(73, '7315077230350002', 'NIK', 'Muh. A. Muhtadi', 'pria', 'Islam', '2015-03-23', '+6285267766546', '1 tahun', 'Askar', 'Anak', '15-10-14', 'salusape', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'aktif', '-'),
(74, '7315071002680001', 'NIK', 'Abdul Halid', 'pria', 'Islam', '1968-02-10', '+6285397535068', '48 tahun', 'Abdul Halid', 'suami', '15-10-14', 'saludadeko', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(75, '7315074510030001', 'NIK', 'Milna Sari', 'wanita', 'Islam', '2003-10-05', '+6285355479864', '13 tahun', 'Herman', 'anak', '15-10-14', 'kanipang', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(76, '7315072008100001', 'NIK', 'Fadil', 'pria', 'Islam', '2010-08-20', '+6282194396083', '6 tahun', 'Dede Malik', 'Anak', '15-10-14', 'salukalobe', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(77, '7315071604010001', 'NIK', 'Yulian', 'wanita', 'Islam', '2004-01-16', '+6282346038553', '12 tahun', 'Yantu', 'Anak', '15-10-14', 'salusape', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(78, '7315070611020001', 'NIK', 'Abd. Ahmad', 'pria', 'Islam', '2006-11-06', '+6285242392575', '9 tahun', 'Yaman', 'Anak', '15-10-14', 'salusape', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(79, '73150771128900009', 'NIK', 'Ramlah', 'wanita', 'Islam', '1989-12-31', '+6285242266190', '26 tahun', 'Nure', 'istri', '15-10-14', 'salusape', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'aktif', '-'),
(80, '7315070110890001', 'NIK', 'Ratna', 'wanita', 'Islam', '1989-10-01', '+6285299413142', '27 tahun', 'Ahmad', 'istri', '15-10-14', 'bungi', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'aktif', '-'),
(81, '7315076803100001', 'NIK', 'Nor Fazira', 'wanita', 'Islam', '2010-03-28', '+6281355816994', '6 tahun', 'Muh. Saing', 'anak', '15-10-14', 'batu losso', 'Rawat Jalan', 'Poli Gigi', 'aktif', '-'),
(82, '7315076607820001', 'NIK', 'Mariati', 'wanita', 'Islam', '1982-07-25', '+6282348363674', '34 tahun', 'Sapai', 'istri', '15-10-14', 'Tuppu', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'aktif', '-'),
(83, '7315070914230001', 'NIK', 'Abd. Asis', 'pria', 'Islam', '1991-07-02', '+6285242266190', '25 tahun', 'Abd. Asis', 'suami', '15-10-14', 'lemosusu', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(84, '7315074906070203', 'NIK', 'Nur Fadilla', 'wanita', 'Islam', '2007-06-09', '+6285241083097', '9 tahun', 'Mursalin', 'Anak', '15-10-14', 'Cappa Lete', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(85, '731507260600007', 'NIK', 'Muh. Fahril', 'pria', 'Islam', '2006-06-26', '+6285342790670', '10 tahun', 'Sanodding', 'Anak', '15-10-14', 'salimbongan', 'Rawat Jalan', 'Poli Gigi', 'aktif', '-'),
(86, '7315076060600007', 'NIK', 'Muh. FAhrul', 'pria', 'Islam', '2006-06-26', '+6285399129870', '10 tahun', 'Sanodding', 'Anak', '15-10-14', 'Salimbongan', 'Rawat Jalan', 'Poli Gigi', 'aktif', '-'),
(87, '731507100404', 'NIK', 'Muh. Faiz', 'pria', 'Islam', '2004-04-10', '+6281244742404', '12 tahun', 'Sanodding', 'Anak', '15-10-14', 'Salimbongan', 'Rawat Jalan', 'Poli Gigi', 'aktif', '-'),
(88, '7315079112570003', 'NIK', 'Hj. Sundre', 'wanita', 'Islam', '1957-12-01', '+6285397844849', '58 tahun', 'Abd. Muing', 'Istri', '15-10-14', 'Kajuangin', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(89, '7315071305010002', 'NIK', 'Dzul Iqra', 'pria', 'Islam', '2001-05-13', '+6285396369315', '15 tahun', 'Sardewa', 'Anak', '15-10-14', 'Pembangun', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(90, '7315071102970001', 'NIK', 'Amelia', 'wanita', 'Islam', '1997-02-11', '+6285397000050', '19 tahun', 'Yadi', 'Anak', '15-10-14', 'Salopi', 'Rawat Jalan', 'Poli Gigi', 'aktif', '-'),
(91, '7315070302150001', 'NIK', 'Muh. Ali Syarif', 'pria', 'Islam', '2015-02-03', '+6285397844849', '1 tahun', 'Syafaat', 'Anak', '15-10-15', 'Tuppu', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'aktif', '-'),
(92, '7315071601150002', 'NIK', 'Jibran', 'pria', 'Islam', '2015-01-16', '+6285341511494', '1 tahun', 'Jamaluddin', 'Anak', '15-10-15', 'salusape', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'aktif', '-'),
(93, '7315074403670001', 'NIK', 'Bungawati', 'wanita', 'Islam', '1987-03-04', '+6281242742339', '29 tahun', 'Sultan', 'Istri', '15-10-15', 'Pembangun', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(94, '7315071908140001', 'NIK', 'Muh Hafiz', 'pria', 'Islam', '2014-08-10', '+62853982890009', '2 tahun', 'Bahar', 'Anak', '15-10-15', 'Salukalobe', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'aktif', '-'),
(95, '7315070710140001', 'NIK', 'Muh. Abifar', 'pria', 'Islam', '2014-10-07', '+6281242742404', '2 tahun', 'Safar', 'Anak', '15-10-15', 'Kandoka', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(96, '7315070801150002', 'NIK', 'Muh. Assagaf', 'pria', 'Islam', '2015-01-08', '+62085399129870', '1 tahun', 'Indra Wahyu', 'Anak', '15-10-15', 'Tuppu', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'aktif', '-'),
(97, '7315071809030002', 'NIK', 'Rian', 'pria', 'Islam', '2003-09-18', '+6281248365898', '13 tahun', 'Lagosi', 'Anak', '15-10-15', 'Cappa Lete', 'Rawat Jalan', 'Poli Gigi', 'aktif', '-'),
(98, '7315074105550001', 'NIK', 'Nurul Andin', 'pria', 'Islam', '2015-05-01', '+6285239156526', '1 tahun', 'Hasbi', 'Anak', '15-10-15', 'Tuppu', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'aktif', '-'),
(99, '7315071981080004', 'NIK', 'Daniati', 'wanita', 'Islam', '2015-05-19', '+6281248365606', '1 tahun', 'Culla', 'Anak', '15-10-15', 'Kajuangin', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(100, '7315070104150002', 'NIK', 'Salsabila', 'wanita', 'Islam', '2015-05-04', '+6285342790670', '1 tahun', 'Anwar', 'Anak', '15-10-15', 'SaluSape`', 'Rawat Inap', '-', 'aktif', '-'),
(101, '7315077004150001', 'NIK', 'Muh. Alif', 'pria', 'Islam', '2015-04-30', '+6285355847091', '1 tahun', 'Kasman', 'Anak', '15-10-15', 'Salusape', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'aktif', '-'),
(102, '7315073107070001', 'NIK', 'Muh. Farhan', 'pria', 'Islam', '2004-04-14', '+6285299005816', '12 tahun', 'Muh. Tahir', 'Anak', '15-10-15', 'Lemosusu', 'Rawat Jalan', 'Poli Gigi', 'aktif', '-'),
(103, '7315071802010001', 'NIK', 'Muh. Iqbal', 'pria', 'Islam', '2001-02-18', '+6282194783118', '15 tahun', 'Mansyur', 'Anak', '15-10-15', 'Pangaparang', 'Rawat Jalan', 'Poli Umum', 'aktif', '-'),
(104, '7315075005740004', 'NIK', 'Rabah', 'wanita', 'Islam', '1975-05-19', '+6285242296170', '41 tahun', 'Munir', 'Istri', '15-10-15', 'Lemosusu', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'aktif', '-'),
(105, '7315070107090001', 'NIK', 'Andi M. Husni', 'pria', 'Islam', '2009-07-01', '+6285255406772', '7 tahun', 'Sukirman', 'Anak', '15-10-15', 'Salukalobe', 'Rawat Jalan', 'Poli Gigi', 'aktif', '-'),
(106, '7315070607900001', 'NIK', 'Nurlia', 'wanita', 'Islam', '1990-07-06', '+6281242914593', '26 tahun', 'Sahrul', 'Istri', '15-10-15', 'Kanipang', 'Rawat Jalan', 'Poli Kesehatan Ibu Dan Anak', 'aktif', '-'),
(107, '1263', 'NIK', 'santi', 'wanita', 'Islam', '1992-08-25', '098', '24 tahun', 'suyuti', 'anak', '15-10-16', 'tuppu', 'Rawat Jalan', 'Poli Umum', 'aktif', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `upetugas`
--

CREATE TABLE IF NOT EXISTS `upetugas` (
  `nip` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='managemen data petugas';

--
-- Dumping data untuk tabel `upetugas`
--

INSERT INTO `upetugas` (`nip`, `username`, `ttl`, `jenis_kelamin`, `alamat`, `no_telp`, `pendidikan`, `jabatan`, `agama`, `password`, `status`, `level`, `img`) VALUES
('196505201986092002', 'Sumiati', 'Pajalele, 20 Mei 1965', 'Wanita', 'Pangaparang', '081343510248', 'D3 Keperawatan', 'Petugas Registrasi', 'islam', '21232f297a57a5a743894a0e4a801fc3', 'aktif', 'petugas registrasi', '196505201986092002.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`idberita`);

--
-- Indexes for table `beri_resep`
--
ALTER TABLE `beri_resep`
 ADD PRIMARY KEY (`id_resep`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
 ADD PRIMARY KEY (`idinbox`);

--
-- Indexes for table `jenis_poli`
--
ALTER TABLE `jenis_poli`
 ADD PRIMARY KEY (`id_jn_poli`);

--
-- Indexes for table `klevel`
--
ALTER TABLE `klevel`
 ADD PRIMARY KEY (`idlevel`), ADD KEY `level` (`level`);

--
-- Indexes for table `kmenu`
--
ALTER TABLE `kmenu`
 ADD PRIMARY KEY (`idmenu`), ADD KEY `kategori` (`kategori`), ADD KEY `level` (`level`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
 ADD PRIMARY KEY (`id_kunjungan`);

--
-- Indexes for table `lmenu`
--
ALTER TABLE `lmenu`
 ADD PRIMARY KEY (`idkategori`), ADD KEY `kategori` (`kategori`), ADD KEY `level` (`level`);

--
-- Indexes for table `master_obat`
--
ALTER TABLE `master_obat`
 ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `obat_masuk`
--
ALTER TABLE `obat_masuk`
 ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
 ADD PRIMARY KEY (`idrekam_medik`);

--
-- Indexes for table `resep_obat`
--
ALTER TABLE `resep_obat`
 ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `uadmin`
--
ALTER TABLE `uadmin`
 ADD PRIMARY KEY (`id`), ADD KEY `level` (`level`);

--
-- Indexes for table `udokter`
--
ALTER TABLE `udokter`
 ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `upasien`
--
ALTER TABLE `upasien`
 ADD PRIMARY KEY (`no_antrian`);

--
-- Indexes for table `upetugas`
--
ALTER TABLE `upetugas`
 ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `idberita` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `beri_resep`
--
ALTER TABLE `beri_resep`
MODIFY `id_resep` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
MODIFY `idinbox` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `klevel`
--
ALTER TABLE `klevel`
MODIFY `idlevel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kmenu`
--
ALTER TABLE `kmenu`
MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `kunjungan`
--
ALTER TABLE `kunjungan`
MODIFY `id_kunjungan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `lmenu`
--
ALTER TABLE `lmenu`
MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
MODIFY `idrekam_medik` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `uadmin`
--
ALTER TABLE `uadmin`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `upasien`
--
ALTER TABLE `upasien`
MODIFY `no_antrian` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=108;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
