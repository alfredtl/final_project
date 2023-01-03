-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 04:52 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_berita`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tempat_kejadian` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL,
  `isi_berita` text NOT NULL,
  `publish_id` int(11) DEFAULT 1,
  `photo_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `tempat_kejadian`, `tanggal`, `isi_berita`, `publish_id`, `photo_link`) VALUES
(1, 'Musibah Banjir di Papakelan Tondano', 'Papakelan, Kec. Tondano Timur', '2022-11-07 12:07:48', 'Dinas DAMKAR Kabupaten Minahasa membantu warga kelurahan Papakelan yang terkena musibah banjir, Dinas DAMKAR juga membantu dalam memberihkan jalan akibat longsor, mengisi air bersih, dll. Berkolaborasi bersama tim BPBD, SATPOL PP, Dinas Sosial Kecamatan Tondano Timur. ', 0, 'berita-1.jpg'),
(2, 'Dinas DAMKAR mengikuti upacara memperingati HUT KAB. MINAHASA Ke-594', 'Kantor Bupati Kabupaten Minahasa', '2022-11-05 08:31:08', 'Petugas Dinas Pemadam Kebakaran Kab. Minahasa mengikuti upacara memperingati HUT Kab.Minahasa ke 594 yang di adakan di Kantor Bupati Kab. Minahasa, ini merupakan suatu bentuk penghargaan dari Dinas Pemadam Kebakaran untuk tanah Minahasa.', 2, 'berita-2.jpg'),
(3, 'DAMKAR Minahasa Turun di Minsel Jinakkan Amukan si jago merah di Pasar 54 Amurang', 'Pasar 54 Amurang', '2022-09-30 08:39:32', 'Dinas Pemadam Kebakaran Kab. Minahasa mengambil bagian dalam membantu memadamkan api saat Kebakaran di pasar 54 Amurang Minsel. Kepala Dinas pun terpantau langsung turun di lokasi kebakaran bersama tim.Tim Damkar Minahasa selalu siap membantu daerah lain bila diperlukan.', 3, 'berita-3.jpg'),
(4, 'Petugas DAMKAR melakukan kerja bakti membersihkan Stadion Maesa', 'Stadio Maesa', '2022-09-29 08:45:07', 'Tak hanya bisa memadamkan api, petugas damkar pun mampu bekerja sama membersihkan Lapangan Stadion Maesa dan dipimpin langsung oleh Pak Kepala Dinas.', 4, 'berita-4.jpg'),
(5, 'DAMKAR Minahasa berhasil memadamkan api di Kel. Tonsaru  Kec. Tondano Selatan', 'Kelurahan Tonsaru, Kecamatan Tondano Selatan', '2022-07-01 08:51:06', 'Petugas Kebakaran DAMKAR MINAHASA melakukan pemadaman di tempat Kel. Kosegaran Malonda. Petugas menurunkan 3 unit pemadam kebakaran dalam melakukan pemadaman.', 5, 'berita-5.jpg'),
(6, 'Pemadaman di Desa Tumaratas 1, Langowan Barat', 'Desa Tumaratas 1, Kec. Langowan Barat', '2022-07-25 08:55:26', 'DAMKAR Minahasa lagi-lagi menyelesaikan pemadaman dengan baik di Desa Tumaratas, tepatnya di rumah Kel. Seran-Burow.', 6, 'berita-6.jpg'),
(7, 'Kebakaran Bangunan ', 'Kelurahan Watulambot ', '2022-01-13 15:59:13', 'Kebakaran bangunan terjadi di salah satu rumah dari kel. Lontaan-Sumanti. kebakaran ini di bantu oleh Unit Pancar bersama SekDis, kabid pemadaman dan Kasi Ops. dan pemadaman berhasil dengan baik.', 7, 'berita-7.jpg'),
(8, 'Evakuasi Sarang Tawon Vespa', 'Tonsea Lama', '2022-08-06 15:59:13', 'Petugas Damkar di Minahasa mengevakuasi sarang tawon vespa, di salah satu rumah kel. Bapak Musa Lembong.\r\nEvakuasi sarang tawon Vespa ini dilakukan pada malam hari untuk mengantisipasi agar warga tidak tersengat lebah.\r\n Evakuasi sarang tawon ini di bantu oleh Brama 4, Brama 5, Danton Alpha 6 petugas Damkar Unit 70 dan evakuasi berhasil dilaksanakan dengan baik.', 8, 'berita-8.jpg'),
(9, 'Evakuasi Ular', 'Kelurahan Tounkuramber', '2022-05-20 09:43:00', 'Petugas DAMKAR di Minahasa berhasil mengevakuasi Ular yang terjadi di salah satu rumah warga yaitu keluarga Maengkom.\r\nPengevakuasian ini di bantu oleh Unit 10 bersama 5 anggota dan Bapak Kadis, SekDis, Kabid, dan Kasie Evakuasi.  ', 9, 'berita-9.jpg'),
(10, 'Kebakaran di samping BRI PUSAT TONDANO dapat dikendalikan hingga aman terkendali ', 'SAMPING BRI PUSAT TONDANO', '2022-08-01 09:43:00', 'Petugas Damkar di kerahkan untuk memadamkan api yang terjadi di samping BRI PUSAT TONDANO, apa dapat di padamkan 2 jam kemudian diduga api berasal karena arus pendek listrik, tidak ada korban jiwa dalam kebakaran ini tapi kerugian di perkirakan mencapai ratusan juta rupiah.', 10, 'berita-10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `diagram_pemadaman_penyelamatan`
--
-- Error reading structure for table db_berita.diagram_pemadaman_penyelamatan: #1932 - Table &#039;db_berita.diagram_pemadaman_penyelamatan&#039; doesn&#039;t exist in engine
-- Error reading data for table db_berita.diagram_pemadaman_penyelamatan: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `db_berita`.`diagram_pemadaman_penyelamatan`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `diagram_pema_peny`
--

CREATE TABLE `diagram_pema_peny` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `photo_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diagram_pema_peny`
--

INSERT INTO `diagram_pema_peny` (`id`, `judul`, `photo_link`) VALUES
(1, '', 'diagram_pemadaman.png'),
(2, '', 'diagram_penyelamatan.png');

-- --------------------------------------------------------

--
-- Table structure for table `foto_bersama`
--

CREATE TABLE `foto_bersama` (
  `id` int(11) NOT NULL,
  `photo_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foto_bersama`
--

INSERT INTO `foto_bersama` (`id`, `photo_link`) VALUES
(1, 'fotobersama1.jpg'),
(2, 'fotobersama2.jpg'),
(3, 'fotobersama3.jpg'),
(4, 'fotobersama4.jpg'),
(5, 'fotobersama5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_kondisiarmada`
--

CREATE TABLE `jumlah_kondisiarmada` (
  `id` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kondisi_baik` int(11) NOT NULL,
  `kondisi_layak` int(11) NOT NULL,
  `kondisi_rusak` int(11) NOT NULL,
  `diharapkan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jumlah_kondisiarmada`
--

INSERT INTO `jumlah_kondisiarmada` (`id`, `jenis`, `jumlah`, `kondisi_baik`, `kondisi_layak`, `kondisi_rusak`, `diharapkan`) VALUES
(1, 'Mobil Unit Penyemprot	', 7, 4, 3, 0, 14),
(2, 'Mobil Suplly Unit	', 0, 0, 0, 0, 5),
(3, 'Mobil Operasional Bencana	', 0, 0, 0, 0, 5),
(4, 'Motor Operasional	', 0, 0, 0, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `kp_jbt`
--

CREATE TABLE `kp_jbt` (
  `id` int(11) NOT NULL,
  `no_` int(11) NOT NULL,
  `jbt` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kp_jbt`
--

INSERT INTO `kp_jbt` (`id`, `no_`, `jbt`, `jumlah`) VALUES
(1, 1, 'Kepala Dinas', 1),
(2, 2, 'Sekretaris', 1),
(3, 3, 'Kepala Subbagian', 2),
(4, 4, 'Kepala Bidang', 2),
(5, 5, 'Kepala Seksi', 6),
(6, 6, 'Kepala Seksi', 7),
(7, 7, 'Danpos/Wadanpos', 0),
(8, 8, 'Driver', 0),
(9, 9, 'Anggota', 78),
(10, 0, 'Jumlah\r\n', 97);

-- --------------------------------------------------------

--
-- Table structure for table `kp_jenjangpendidikan`
--

CREATE TABLE `kp_jenjangpendidikan` (
  `id` int(11) NOT NULL,
  `no_` int(11) DEFAULT NULL,
  `jenjang_pendidikan` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `presentase` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kp_jenjangpendidikan`
--

INSERT INTO `kp_jenjangpendidikan` (`id`, `no_`, `jenjang_pendidikan`, `jumlah`, `presentase`) VALUES
(1, 1, 'Strata 3', '0', '0'),
(2, 2, 'Strata 2', '1', '5'),
(3, 3, 'Strata 1', '15', '79'),
(4, 4, 'Diploma 3', '0', '0'),
(5, 5, 'SLTA Sederajat', '3', '16'),
(6, 6, 'SLTP Sederajat', '0', '0'),
(7, 7, 'SD', '0', '0'),
(8, 0, 'Jumlah', '19', '100');

-- --------------------------------------------------------

--
-- Table structure for table `kp_statuskepegawaian`
--

CREATE TABLE `kp_statuskepegawaian` (
  `id` int(11) NOT NULL,
  `no_` int(11) NOT NULL,
  `status_kepegawaian` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `presentase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kp_statuskepegawaian`
--

INSERT INTO `kp_statuskepegawaian` (`id`, `no_`, `status_kepegawaian`, `jumlah`, `presentase`) VALUES
(1, 1, 'Pegawai Negeri Sipil', 19, 20),
(2, 2, 'Pegawai Tidak Tetap', 78, 80),
(3, 0, 'Jumlah', 97, 100);

-- --------------------------------------------------------

--
-- Table structure for table `pemadaman_april`
--

CREATE TABLE `pemadaman_april` (
  `id` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `Hari/Tanggal` varchar(100) NOT NULL,
  `Pemadaman` varchar(100) NOT NULL,
  `Pemilik` varchar(100) NOT NULL,
  `Alamat Pemilik` varchar(100) NOT NULL,
  `Nomor HP` int(15) NOT NULL,
  `Jumlah Unit` int(11) NOT NULL,
  `Jenis Objek` varchar(100) NOT NULL,
  `Hasil Pelaksanaan` varchar(100) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemadaman_april`
--

INSERT INTO `pemadaman_april` (`id`, `No`, `Hari/Tanggal`, `Pemadaman`, `Pemilik`, `Alamat Pemilik`, `Nomor HP`, `Jumlah Unit`, `Jenis Objek`, `Hasil Pelaksanaan`, `Keterangan`) VALUES
(1, 1, 'Selasa 5 April 2022', 'Bangunan		', 'Kel. Keiko-Karisoh', '\"Desa Kambuan \r\nTondano Utara\"', 0, 6, 'Rumah Tinggal', '\"Pemadaman berhasil \r\ndengan baik\"', '\"Unit pancar bersama \r\nKabid Pemadam\"'),
(2, 2, 'Kamis 14 April 2022', 'Gardu/Tiang Listrik		', 'Kel. Unsulangi-Datangmani', '\"Tounkuramber \r\nTondano Barat\"', 0, 4, 'Kabel Listrik', '\"Pemadaman berhasil \r\ndengan baik\"', ''),
(3, 3, 'Senin 18 April 2022', 'Gardu/Tiang Listrik		', '', 'Koya Tondano Selatan', 0, 1, 'Gardu Listrik', '\"Pemadaman berhasil \r\ndengan baik\"', 'Unit 20');

-- --------------------------------------------------------

--
-- Table structure for table `pemadaman_februari`
--

CREATE TABLE `pemadaman_februari` (
  `id` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `Hari/tanggal` varchar(100) NOT NULL,
  `Pemadaman` varchar(100) NOT NULL,
  `Pemilik` varchar(100) NOT NULL,
  `Alamat Pemilik` varchar(100) NOT NULL,
  `Nomor HP` int(15) NOT NULL,
  `Jumlah Unit` int(11) NOT NULL,
  `Jenis Objek` varchar(100) NOT NULL,
  `Hasil Pelaksanaan` varchar(100) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemadaman_februari`
--

INSERT INTO `pemadaman_februari` (`id`, `No`, `Hari/tanggal`, `Pemadaman`, `Pemilik`, `Alamat Pemilik`, `Nomor HP`, `Jumlah Unit`, `Jenis Objek`, `Hasil Pelaksanaan`, `Keterangan`) VALUES
(1, 1, 'Rabu, 2 Februari 2022', 'Bangunan', 'Keluarga Tangkere-Fergew', 'Kelurahan Urongo lk. V', 0, 1, 'Rumah Tinggal', 'Pemadaman berhasil dengan baik', 'Unit 20 bersama OPS'),
(2, 2, 'Jumat, 4 Februari 2022', 'Bangunan', 'keluarga Toar-Lambey', 'Desa Pasiatan Kec. Kakas', 0, 0, 'Rumah Tinggal', 'Pemadaman berhasil dengan baik', ''),
(3, 3, 'Minggu, 6 Februari 2022', 'Bangunan', 'Keluarga Mnadang-Sangian', 'Desa Eris kec. Eris', 0, 0, 'Rumah Tinggal', 'Pemadaman berhasil dengan baik', ''),
(4, 4, 'Senin, 7 Februari 2022', 'Bangunan', 'Bapak R Pangemanan', 'Desa Urongo', 0, 5, 'Pondok jaga jaring ikan', 'Pemadaman berhasil dengan baik', 'Unit pancar bersama kadis, sekdis, kabid, kasi');

-- --------------------------------------------------------

--
-- Table structure for table `pemadaman_januari`
--

CREATE TABLE `pemadaman_januari` (
  `id` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `Hari/Tanggal` varchar(100) NOT NULL,
  `Pemadaman` varchar(100) NOT NULL,
  `Pemilik` varchar(100) NOT NULL,
  `Alamat Pemilik` varchar(100) NOT NULL,
  `Nomor HP` varchar(15) NOT NULL,
  `Jumlah Unit` int(11) NOT NULL,
  `Jenis Objek` varchar(100) NOT NULL,
  `Hasil Pelaksanaan` varchar(100) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemadaman_januari`
--

INSERT INTO `pemadaman_januari` (`id`, `No`, `Hari/Tanggal`, `Pemadaman`, `Pemilik`, `Alamat Pemilik`, `Nomor HP`, `Jumlah Unit`, `Jenis Objek`, `Hasil Pelaksanaan`, `Keterangan`) VALUES
(1, 1, 'Rabu 12 januari 2002', 'Bangunan		', '', '', '0', 1, 'Rumah tinggal', 'Pemadam berhasil dengan baik', 'Unit 20 bersama Ops	'),
(2, 2, 'Kamis 13 januari 2022', 'Bangunan		', 'Kel. Lontaan-Sumanti', 'Kelurahan watulambot', '085298834038', 6, 'Rumah tinggal', 'Pemadam berhasil dengan baik', 'Unit pancar bersama SekDis, kabid pemadaman, kasi Ops	');

-- --------------------------------------------------------

--
-- Table structure for table `pemadaman_juli`
--

CREATE TABLE `pemadaman_juli` (
  `id` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `Hari/tanggal` varchar(100) NOT NULL,
  `Pemadaman` varchar(100) NOT NULL,
  `Pemilik` varchar(100) NOT NULL,
  `Alamat pemilik` varchar(100) NOT NULL,
  `Nomor wa` varchar(100) NOT NULL,
  `Jumlah unit` int(11) NOT NULL,
  `Jenis objek pemadaman` varchar(100) NOT NULL,
  `Hasil pelaksanaan` varchar(100) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemadaman_juli`
--

INSERT INTO `pemadaman_juli` (`id`, `No`, `Hari/tanggal`, `Pemadaman`, `Pemilik`, `Alamat pemilik`, `Nomor wa`, `Jumlah unit`, `Jenis objek pemadaman`, `Hasil pelaksanaan`, `Keterangan`) VALUES
(1, 1, 'Jumat, 1 Juli 2022', 'Bangunan', 'Kel Kosegeran \r\nMalonda', 'Kel. Tounsaru Kec. \r\nTondano Selatan', '08958065934\r\nBpk. Rey Uwuh', 3, 'Rumah Tinggal', 'Pemadaman \r\nberhasil dengan Baik', 'Unit Mako bersama\r\nKadis, Sekdis, Kabid'),
(2, 2, 'Minggu, 3 Juli 2022', 'Bangunan', 'Kel Rurugala Waworundeng', 'Lingk. 3 Desa \r\nWarembungen \r\nKec. Pineleng', '085394072182\r\nDamkar Manado', 3, 'Rumah Tinggal', 'Pemadaman \r\nberhasil dengan Baik', 'Unit Mako bersama\r\nKadis, Sekdis, Kabid'),
(3, 3, 'Selasa, 5 Juli 2022', 'Bangunan', 'Kel. Supit Laluan', 'Lingk. 1. Kel.\r\n Sendangan Tenggah\r\n Kec. Kawangkoan', '', 1, 'Rumah Makan', 'Pemadaman \r\nberhasil dengan Baik', 'Unit Pos Kawangkoan'),
(4, 4, 'Senin, 25 Juli 2022', 'Bangunan', 'Kel. Seran Burow', 'Desa Tumarats 1 \r\nKec. Langowan Barat', 'Nataliao Woran', 1, 'Rumah Tinggal', 'Pemadaman \r\nberhasil dengan Baik', 'Unit Pos Kawangkoan'),
(5, 5, 'Tanggal 1-31 Juli 2022', '', '', '', '', 7, 'Dinas Pemadam \r\nKebakaran', 'Pemadaman di \r\nOperasikan', 'Setiap Pagi dan Malam\r\nUnit Kendaraan \r\ndi Panaskan');

-- --------------------------------------------------------

--
-- Table structure for table `pemadaman_juni`
--

CREATE TABLE `pemadaman_juni` (
  `id` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `Hari/Tanggal` varchar(100) NOT NULL,
  `Pemadaman` varchar(100) NOT NULL,
  `Pemilik` varchar(100) NOT NULL,
  `Alamat Pemilik` varchar(100) NOT NULL,
  `Nomor WA/Pengguna Layanan` int(11) NOT NULL,
  `Jumlah Unit` int(11) NOT NULL,
  `Jenis Objek Pemadaman` varchar(100) NOT NULL,
  `Hasil Pelaksanaan` varchar(100) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemadaman_juni`
--

INSERT INTO `pemadaman_juni` (`id`, `No`, `Hari/Tanggal`, `Pemadaman`, `Pemilik`, `Alamat Pemilik`, `Nomor WA/Pengguna Layanan`, `Jumlah Unit`, `Jenis Objek Pemadaman`, `Hasil Pelaksanaan`, `Keterangan`) VALUES
(1, 1, 'Sabtu, 11 Juni 2022', 'Bangunan		', 'Kel Sondakh-Tololiu', 'Desa Kanonang 3', 0, 3, 'Rumah Tinggal', 'Pemadaman \r\nberhasil dengan\r\nbaik', 'Unit Mako dan Pos \r\nKawangkoan bersama Kadis, \r\nSekdis, Kabid.'),
(2, 2, 'Jumat, 17 Juni 2022', 'Bangunan		', 'Kel Pioh-Umbas', 'Talikuran Barat\r\nLing 4 Kawangkoan \r\nUtara', 0, 1, 'Rumah Makan', 'Pemadaman \r\nberhasil dengan\r\nbaik', 'Unit Pos \r\nKawangkoan');

-- --------------------------------------------------------

--
-- Table structure for table `pemadaman_maret`
--

CREATE TABLE `pemadaman_maret` (
  `id` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `Hari/Tanggal` varchar(100) NOT NULL,
  `Pemadaman` varchar(100) NOT NULL,
  `Pemilik` varchar(100) NOT NULL,
  `Alamat Pemilik` varchar(100) NOT NULL,
  `Nomor HP` int(15) NOT NULL,
  `Jumlah Unit` int(11) NOT NULL,
  `Jenis Objek` varchar(100) NOT NULL,
  `Hasil Pelaksanaan` varchar(100) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemadaman_maret`
--

INSERT INTO `pemadaman_maret` (`id`, `No`, `Hari/Tanggal`, `Pemadaman`, `Pemilik`, `Alamat Pemilik`, `Nomor HP`, `Jumlah Unit`, `Jenis Objek`, `Hasil Pelaksanaan`, `Keterangan`) VALUES
(1, 1, 'Kamis 10 Maret 2002', 'Gardu/tiang listrik		', '', 'Kel. Sasatan Tondano utara', 0, 1, 'Kabel listrik', 'Pemadam berhasil dengan baik', 'Unit pancar bersama dengan kadis, kabid, kasie');

-- --------------------------------------------------------

--
-- Table structure for table `pemadaman_mei`
--

CREATE TABLE `pemadaman_mei` (
  `id` int(100) NOT NULL,
  `No` int(11) NOT NULL,
  `Hari/Tanggal` varchar(100) NOT NULL,
  `Pemadaman` varchar(100) NOT NULL,
  `Pemilik` varchar(100) NOT NULL,
  `Alamat Pemilik` varchar(100) NOT NULL,
  `No.HP` varchar(15) NOT NULL,
  `Jumlah Unit` int(11) NOT NULL,
  `Jenis Objek` varchar(100) NOT NULL,
  `Hasil Pelaksanaan` varchar(100) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemadaman_mei`
--

INSERT INTO `pemadaman_mei` (`id`, `No`, `Hari/Tanggal`, `Pemadaman`, `Pemilik`, `Alamat Pemilik`, `No.HP`, `Jumlah Unit`, `Jenis Objek`, `Hasil Pelaksanaan`, `Keterangan`) VALUES
(1, 1, 'Minggu 15 Mei 2022\r\n', 'Bangunan', 'Tampi - Runtu', 'Wangkot Tondano Timur', '', 6, 'Rumah Tinggal', 'Pemadaman Berhasil Dengan Baik', 'Unit Pancar Bersama Kadis, Sekdis, Kabid'),
(2, 2, 'Sabtu 21 Mei 2022', 'Bangunan', 'Kel. Sumanti', 'Ketinggolan Tondano Timur', '', 5, 'Rumah Tinggal', 'Pemadaman Berhasil Dengan Baik', ''),
(3, 3, 'Selasa 24 Mei 2022', 'Bangunan', 'Kollam - Lilla', 'Rerewokan Tondano Barat', '', 5, 'Rumah Tinggal', 'Pemadaman Berhasil Dengan Baik', 'Unit Pancar Bersama Kadis, Sekdis, Kabid');

-- --------------------------------------------------------

--
-- Table structure for table `pemadaman_november`
--

CREATE TABLE `pemadaman_november` (
  `id` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `Hari/tanggal` varchar(100) NOT NULL,
  `Pemadaman` varchar(100) NOT NULL,
  `Pemilik` varchar(100) NOT NULL,
  `Alamat pemilik` varchar(100) NOT NULL,
  `No Hp` int(11) NOT NULL,
  `Jumlah unit` int(11) NOT NULL,
  `Jenis objek pemadaman` varchar(100) NOT NULL,
  `Hasil pelaksanaan` varchar(100) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemadaman_november`
--

INSERT INTO `pemadaman_november` (`id`, `No`, `Hari/tanggal`, `Pemadaman`, `Pemilik`, `Alamat pemilik`, `No Hp`, `Jumlah unit`, `Jenis objek pemadaman`, `Hasil pelaksanaan`, `Keterangan`) VALUES
(1, 1, 'Senin,7 November 2022\r\n', 'Bangunan', 'Kel.Emil Mamesah\r\n', 'Desa Sea I Ling. 8 Kec. Mandolang\r\n', 0, 0, 'Kebakaran Rumah\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani dengan baik\r\n'),
(2, 2, 'Sabtu,12 November 2022\r\n', 'Bangunan', 'Kel. Chandra - Pandelaki\r\n', 'Komplex Pasar Amongena Langowan\r\n', 0, 0, 'Kebakaran Toko\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani Masyarakat\r\n'),
(3, 3, 'Selasa,15 November 2022\r\n', 'Bangunan', '-', 'Desa Rumengkor Kec. Tombulu\r\n', 0, 0, 'Kebakaran Rumah\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani dengan baik\r\n'),
(4, 4, 'Minggu,20 November 2022\r\n', 'Bangunan', 'Kel.Madao - Bandangan\r\n', 'Desa Kalasey I Jaga I\r\n', 0, 0, 'Kebakaran Rumah\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani dengan baik\r\n'),
(5, 5, 'Sabtu,26 November 2022\r\n', 'Bangunan', 'Gereja GMIM Kanaan Kulo\r\n', 'Kulo Kec. Tondano Barat\r\n', 0, 0, 'Kebakaran Gereja\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani dengan baik\r\n'),
(6, 6, 'Senin,28 November 2022\r\n', 'Bangunan', 'Kel.Mamesah - Supit\r\n', 'Tompaso Barat\r\n', 0, 0, 'Kebakaran Rumah\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani Dengan baik\r\n'),
(7, 7, 'Senin,28 November 2022\r\n', 'Bangunan', 'Kel.Kapoh - Bayak\r\n', 'Desa Lemoh Ling. 5 Kec. Tombariri Timur\r\n', 0, 0, 'Kebakaran Bangunan Sarang Walet\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani Dengan baik\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pemadaman_oktober`
--

CREATE TABLE `pemadaman_oktober` (
  `id` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `Hari/tanggal` varchar(100) NOT NULL,
  `Pemadaman` varchar(100) NOT NULL,
  `Pemilik` varchar(100) NOT NULL,
  `Alamat pemilik` varchar(100) NOT NULL,
  `No Hp` int(15) NOT NULL,
  `Jumlah unit` int(11) NOT NULL,
  `Jenis objek pemadaman` varchar(100) NOT NULL,
  `Hasil pelaksanaan` varchar(100) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemadaman_oktober`
--

INSERT INTO `pemadaman_oktober` (`id`, `No`, `Hari/tanggal`, `Pemadaman`, `Pemilik`, `Alamat pemilik`, `No Hp`, `Jumlah unit`, `Jenis objek pemadaman`, `Hasil pelaksanaan`, `Keterangan`) VALUES
(1, 1, 'Sabtu, 1 Oktober 2022\r\n', 'Bangunan', 'Pemerintah\r\n', 'Pasar Amurang Minsel\r\n', 0, 0, 'Kebakaran Pasar Amurang\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani dengan baik\r\n'),
(2, 2, 'Jumat, 3 Oktober 2022\r\n', 'Bangunan', 'Kel.Lolowang- Mandagi\r\n', 'Desa Talikuran Sonder\r\n', 0, 0, 'Kebakaran Toko\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani Masyarakat\r\n'),
(3, 3, 'Rabu, 5 Oktober 2022\r\n', 'Bangunan', 'Kel. Tumiwa-Pangkey\r\n', 'Desa Ampreng Jaga I\r\n', 0, 0, 'Kebakaran Rumah\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani dengan baik\r\n'),
(4, 4, 'Senin, 10 Oktober 2022\r\n', 'Bangunan', '', 'Asrama Tentara Kel. Renegetan\r\n', 0, 0, 'Kebakaran Asrama Tentara\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani dengan baik\r\n'),
(5, 5, 'Sabtu, 15 Oktober 2022\r\n', 'Bangunan', 'Indomart\r\n', 'samping Indomart Wawalintoan\r\n', 0, 0, 'Korsleting\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani Dengan baik\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pemadaman_penyelamatan_februari_2022`
--

CREATE TABLE `pemadaman_penyelamatan_februari_2022` (
  `id` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `Hari/Tanggal` varchar(100) NOT NULL,
  `Kegiatan` varchar(100) NOT NULL,
  `Waktu` varchar(100) NOT NULL,
  `Nama Penelepon` varchar(100) NOT NULL,
  `No.HP/WA Penelepon` varchar(100) NOT NULL,
  `Alamat Penelepon` varchar(100) NOT NULL,
  `Informasi yang diterima_Lokasi Kejadian` varchar(100) NOT NULL,
  `Informasi yang diterima_Pemilik` varchar(100) NOT NULL,
  `Informasi yang diterima_Objek` varchar(100) NOT NULL,
  `Hasil/Tindakan` varchar(100) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemadaman_penyelamatan_februari_2022`
--

INSERT INTO `pemadaman_penyelamatan_februari_2022` (`id`, `No`, `Hari/Tanggal`, `Kegiatan`, `Waktu`, `Nama Penelepon`, `No.HP/WA Penelepon`, `Alamat Penelepon`, `Informasi yang diterima_Lokasi Kejadian`, `Informasi yang diterima_Pemilik`, `Informasi yang diterima_Objek`, `Hasil/Tindakan`, `Keterangan`) VALUES
(1, 1, 'Selasa/01 feb 2022\r\n', 'Menerima aduan layanan melalui Piket Meja\r\n', '0:30\r\n', 'Bpk. Tangkere\r\n', '', 'Kel.urongo ling. 5\r\n', 'Kel.urongo ling.5\r\n', 'Kel.tangkere- vergow\r\n', 'Kebakaran Rumah\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani dengan baik\r\n'),
(2, 2, 'Jumat.04 Feb. 2022\r\n', 'Menerima informasi Telepon melalui Piket Meja\r\n', '14:20\r\n', 'Masyarakat\r\n', '', 'Desa Paslaten Kakas\r\n', 'Desa Paslaten Kakas\r\n', 'Kel. Toar - Lambey\r\n', 'Kebakaran Rumah\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani dengan baik\r\n'),
(3, 3, 'Sabtu/ 05. Feb 2022\r\n', 'Menerima informasi Telepon melalui Piket Meja\r\n', '18:00\r\n', 'Masyarakat\r\n', '\r\n', 'Kel. Watulambet\r\n\r\n', 'Perkebunan Sabit\r\n', '', 'Evakuasi Tawon\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah ditangani masyarakat\r\n'),
(4, 4, 'Minggu/ 06 Feb 2022\r\n', 'Menerima informasi Telepon melalui Piket Meja\r\n', '15:15\r\n', 'Masyarakat\r\n', '', 'Desa Eris\r\n', 'Desa Eris\r\n', '', 'Kebakaran Rumah\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani dengan baik'),
(5, 5, 'Senin, 07 Feb 2022\r\n', 'Menerima informasi Telepon melalui Piket Meja\r\n', '21:30\r\n', 'Bpk Novry Pangemanan\r\n', '', 'Urongo\r\n', 'Pingir Danau Tondano\r\n', 'Kel. Novri Pangemanan\r\n', 'Kebakaran Rumah\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani Dengan baik\r\n'),
(6, 6, 'Kamis/ 10 Feb 2022\r\n', 'Menerima informasi Telepon melalui Piket Meja\r\n', '21:10\r\n', '', '', '', '', '', 'Tawon Patiukan\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani Dengan baik\r\n'),
(7, 7, 'Sabtu/ 17 Feb 2022\r\n', 'Menerima informasi Telepon melalui Piket Meja\r\n', '17:00\r\n', 'Virginia Ruus\r\n', 'Virginia Ruus\r\n', 'Kel.Sendangan Kawangkoan\r\n', 'Kel. Sendangan\r\n', 'Kel. Tumiwa - Rantung\r\n', 'Kebakaran Rumah\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani Dengan baik\r\n'),
(8, 8, 'Senin/ 28 Feb 2022\r\n', 'Menerima informasi Telepon melalui Piket Meja\r\n', '21:42\r\n', 'Masyarakat\r\n', '', 'Desa Sea\r\n', 'Perumahan Garden Palace\r\n', '', 'Kebakaran Rumah\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani Dengan baik\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pemadaman_penyelamatan_januari_2022`
--

CREATE TABLE `pemadaman_penyelamatan_januari_2022` (
  `id` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `Hari/Tanggal` varchar(100) NOT NULL,
  `Kegiatan` varchar(100) NOT NULL,
  `Waktu` varchar(100) NOT NULL,
  `Nama Penelpon` varchar(100) NOT NULL,
  `No.Hp/WA Penelepon` varchar(100) NOT NULL,
  `Alamat Penelepon` varchar(100) NOT NULL,
  `Informasi yang diterima_Lokasi kejadian` varchar(100) NOT NULL,
  `Informasi yang diterima_Pemilik` varchar(100) NOT NULL,
  `Informasi yang diterima_Objek` varchar(100) NOT NULL,
  `Hasil/Tindakan` varchar(100) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemadaman_penyelamatan_januari_2022`
--

INSERT INTO `pemadaman_penyelamatan_januari_2022` (`id`, `No`, `Hari/Tanggal`, `Kegiatan`, `Waktu`, `Nama Penelpon`, `No.Hp/WA Penelepon`, `Alamat Penelepon`, `Informasi yang diterima_Lokasi kejadian`, `Informasi yang diterima_Pemilik`, `Informasi yang diterima_Objek`, `Hasil/Tindakan`, `Keterangan`) VALUES
(1, 1, 'Rabu/12 Januar2022\r\n', 'Menerima informasi Telepon melalui Piket Meja\r\n', '15:00\r\n', '', '', 'Desa Sawangan Minut\r\n', 'Desa Sawangan\r\n', '', 'Kebakaran Rumah\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani dengan baik\r\n'),
(2, 2, 'Kamis/ 13 Januar2022\r\n', 'Menerima informasi Telepon melalui Piket Meja\r\n', '3:15\r\n', 'Bpk. Jhony Gimon\r\n', '85298834038\r\n', 'Ling 2 Watulambot\r\n', 'Ling 2 Watulambot\r\n', 'Kel.Lontaan-Sumanti\r\n', 'Kebakaran Rumah\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani dengan baik\r\n'),
(3, 3, '\r\nSenin , 17 Januari 2022\r\n', 'Menerima informasi Telepon melalui Piket Meja\r\n', '15:20\r\n\r\n', 'Masyarakat\r\n\r\n', '', 'Perkebunan Sekep\r\n', 'Perkebunan Sekep\r\n\r\n', '\r\n', 'Tawon Vespa\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani Dengan baik\r\n'),
(4, 4, 'Senin, 17 Januari 2022\r\n\r\n', 'Menerima informasi Telepon melalui Piket Meja\r\n', '14:15\r\n\r\n', 'Masyarakat\r\n\r\n', '\r\n', 'Kawangkoan\r\n\r\n', '\r\n', 'Rompas - Moniung\r\n\r\n', 'Kebakaran Rumah\r\n\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani Dengan baik\r\n'),
(5, 5, 'Rabu,19 Januari, 2022\r\n', 'Menerima informasi Telepon melalui Piket Meja\r\n', '10:20\r\n', 'Bpk. Saleh - Keidemak\r\n', '', 'Ling.1 Kampung Jawa\r\n', 'Ling.1 Kampung Jawa\r\n', 'Saleh - Masloman\r\n', 'Tawon Vespa\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani dengan baik\r\n'),
(6, 6, 'Rabu,19 Januari, 2022\r\n', 'Menerima informasi Telepon melalui Piket Meja\r\n', '10:26\r\n', 'Pingkan Sarapung\r\n', '85298348225\r\n', 'Kel. Renegetan\r\n', 'Kel, Renegetan\r\n', 'Pingkan Sarapung\r\n', 'Tawon Patiukan\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani Dengan baik\r\n'),
(7, 7, 'Rabu, 19 Januari 2022\r\n', 'Menerima informasi Telepon melalui Piket Meja\r\n', '22:30\r\n', 'Marlon Nender\r\n', '85240914419\r\n', 'Desa Kembuan 1\r\n', 'Desa Kembuan 1 Blok A\r\n', 'Kel. Rengkuan - Metekohi\r\n', 'Tawon Patiukan\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani Dengan baik\r\n'),
(8, 8, 'Jumat,21 Januari 2022\r\n', 'Menerima informasi Telepon melalui Piket Meja\r\n', '17:30\r\n', 'Wulus - Pakasi\r\n', '82189700700\r\n', 'Desa Kembuan\r\n', 'Desa Kembuan\r\n', 'Wulus - Pakasi\r\n', 'Tawon Patiukan\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani Dengan baik\r\n'),
(9, 9, 'Senin, 24 Januari 2022\r\n', 'Menerima informasi Telepon melalui Piket Meja\r\n', '22:30\r\n', 'Swars Kapoyos\r\n', '87752088993\r\n', 'Kiniar Jaga 4\r\n', 'Kiniar Jaga 4\r\n', 'Alfa Mark\r\n', 'Sarang Tawon\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani Dengan baik\r\n'),
(10, 10, 'Rabu, 26 Januari 2022\r\n', 'Menerima informasi Telepon melalui Piket Meja\r\n', '22:00\r\n', 'Bpk Rumate - Petrus\r\n', '', 'Renegetan Ling 3\r\n', 'Renegetan Ling.3\r\n', 'Rumate - Petrus\r\n', 'Tawon Vespa\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani Dengan baik\r\n'),
(11, 11, 'Minggu, 30 Januari 2022\r\n', 'Menerima informasi Telepon melalui Piket Meja\r\n', '22:15\r\n', 'Bpk.Drs.M.L Rumate,M.SI\r\n', '82187733141\r\n', 'Kel. Luaan', 'Belakang Penjara\r\n', 'Kel. Rumate - Pangkerego\r\n', 'Tawon Patiukan\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani Dengan baik\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pemadaman_penyelamatan_maret_2022`
--

CREATE TABLE `pemadaman_penyelamatan_maret_2022` (
  `No` int(11) NOT NULL,
  `Hari/Tanggal` varchar(100) NOT NULL,
  `Kegiatan` varchar(100) NOT NULL,
  `Waktu` varchar(100) NOT NULL,
  `Nama Penelepon` varchar(100) NOT NULL,
  `No.HP/WA Penelepon` varchar(15) NOT NULL,
  `Alamat Penelepon` varchar(100) NOT NULL,
  `Informasi yang diterima_Lokasi Kejadian` varchar(100) NOT NULL,
  `Informasi yang diterima_Pemilik` varchar(100) NOT NULL,
  `Informasi yang diterima_Objek` varchar(100) NOT NULL,
  `Hasil/Tindakan` varchar(100) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemadaman_september`
--

CREATE TABLE `pemadaman_september` (
  `id` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `Hari/Tanggal` varchar(100) NOT NULL,
  `Pemadaman` varchar(100) NOT NULL,
  `Pemilik` varchar(100) NOT NULL,
  `Alamat Pemilik` varchar(100) NOT NULL,
  `No.HP` int(15) NOT NULL,
  `Jumlah Unit` int(11) NOT NULL,
  `Jenis Objek Pemadaman` varchar(100) NOT NULL,
  `Hasil Pelaksanaan` varchar(100) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemadaman_september`
--

INSERT INTO `pemadaman_september` (`id`, `No`, `Hari/Tanggal`, `Pemadaman`, `Pemilik`, `Alamat Pemilik`, `No.HP`, `Jumlah Unit`, `Jenis Objek Pemadaman`, `Hasil Pelaksanaan`, `Keterangan`) VALUES
(1, 1, 'Sabtu, 19 Sebtember 2022\r\n', 'Kendaraan\r\n', '', '\r\nKel. Wewelen Kec. Tondano Barat\r\n\r\n', 0, 0, '1 Kendaraan Bermotor', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani dengan baik\r\n'),
(2, 2, 'Minggu, 25 September 2022\r\n', 'Bangunan\r\n', 'Kel. Kawalo - Sumendap\r\n', 'Kec. Pineleng Ling. 3\r\n', 0, 0, '1 Rumah Tinggal', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani dengan baik\r\n'),
(3, 3, 'Senin, 26 September 2022\r\n', 'Bangunan', 'Kel.Rumondor Seandatu\r\n', 'Ling. IV Watulambot\r\n', 0, 0, '1 Rumah Tinggal', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani Masyarakat\r\n'),
(4, 4, 'Rabu, 28 September 2022\r\n', 'Bangunan', 'Kel. Maxi Manembu - Mangare\r\n', 'Desa Tondegesan 1 Jaga 4\r\n', 0, 0, '1 Rumah Tinggal', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani Dengan baik\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pengambilanair_juli`
--

CREATE TABLE `pengambilanair_juli` (
  `id` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `Hari/Tanggal` varchar(100) NOT NULL,
  `Tempat pengambilan_lokasi` varchar(100) NOT NULL,
  `Tempat pengambilan_pemilik` varchar(100) NOT NULL,
  `Pengambilan unit pancar air_No.unit` varchar(100) NOT NULL,
  `Pengambilan unit pancar air_Volume yang diambil` varchar(100) NOT NULL,
  `Kondisi air` varchar(100) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengambilanair_juli`
--

INSERT INTO `pengambilanair_juli` (`id`, `No`, `Hari/Tanggal`, `Tempat pengambilan_lokasi`, `Tempat pengambilan_pemilik`, `Pengambilan unit pancar air_No.unit`, `Pengambilan unit pancar air_Volume yang diambil`, `Kondisi air`, `Keterangan`) VALUES
(1, 1, 'Jumat, 1 Juli 2022', 'Jalan Bakti Abri \r\nTondano', 'Saluran Air Uluna', 'Unit 20, Unit 30, Unit 60', '23000 Liter', 'Air Selokan', ''),
(2, 2, 'Minggu, 3 Juli 2022', 'Telaga, Empang', 'Bakti Sumalata', 'Unit 20, Unit 30, \r\nUnit 60', '24001 Liter', 'Air Kolam', ''),
(3, 3, 'Selasa, 5 Juli 2022', 'Pemandian Air \r\nPanas Kinali', 'Sungai', 'Unit 70', '8000 Liter', 'Air Sungai', ''),
(4, 4, 'Kamis, 7 Juli 2022', 'Depot Penjualan Air', 'Rinegetan', 'Unit 20', '4000 Liter ', 'Air Bersih', ''),
(5, 5, 'Sabtu, 09 Juli 2022', 'Depot Penjualan Air', 'Rinegetan', 'Unit 60, Unit 30', '7500 Liter', 'Air Bersih', ''),
(6, 6, 'Kamis, 14 Juli 2022', 'Uluna', 'Sumber Air DPAM', 'Unit 20, Unit 30, \r\nUnit 40, Unit 50, Unit 60', '19500 Liter', 'Air Bersih', ''),
(7, 7, 'Rabu, 20 Juli 2022', 'Uluna', 'Sumber Air DPAM', 'Unit 20, Unit 30, \r\nUnit 40, Unit 50, Unit 61', '19500 Liter', 'Air Bersih', ''),
(8, 8, 'Senin, 25 Juli 2022', 'Kolam Ikan Tumarats', '', 'Unit 70 ', '40000 Liter', 'Air Keru', ''),
(9, 9, 'Rabu, 27 Juli 2022', 'Uluna', 'Sumber Air DPAM', 'Unit 20, Unit 30,\r\n Unit 40, Unit 50, Unit 61', '1950 Liter', 'Air Bersih', '');

-- --------------------------------------------------------

--
-- Table structure for table `penyelamatan_agustus`
--

CREATE TABLE `penyelamatan_agustus` (
  `id` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `Hari/Tanggal` varchar(100) NOT NULL,
  `Penyelamatan Hewan Berbisa` int(11) NOT NULL,
  `Penyelamatan Evakuasi` int(11) NOT NULL,
  `Penyelamatan Lain-lain` int(11) NOT NULL,
  `Pemilik` varchar(100) NOT NULL,
  `Alamat Pemilik` varchar(100) NOT NULL,
  `Nomor HP` int(15) NOT NULL,
  `Jumlah Unit` int(11) NOT NULL,
  `Jenis Objek Evakuasi` varchar(100) NOT NULL,
  `Hasil Pelaksanaan` varchar(100) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyelamatan_agustus`
--

INSERT INTO `penyelamatan_agustus` (`id`, `No`, `Hari/Tanggal`, `Penyelamatan Hewan Berbisa`, `Penyelamatan Evakuasi`, `Penyelamatan Lain-lain`, `Pemilik`, `Alamat Pemilik`, `Nomor HP`, `Jumlah Unit`, `Jenis Objek Evakuasi`, `Hasil Pelaksanaan`, `Keterangan`) VALUES
(1, 1, 'Senin, 1 Agustus 2022\r\n', 0, 1, 0, '', '', 0, 0, 'Manusia', 'Evakuasi berhasil dilaksanakan dengan baik.\r\n', 'petugas DAMKAR\r\n'),
(2, 2, 'Senin, 1 Agustus 2022\r\n', 0, 1, 0, '', '', 0, 0, 'Hewan\r\n', 'Evakuasi berhasil dilaksanakan dengan baik.\r\n', 'petugas DAMKAR\r\n'),
(3, 3, 'Senin, 6 Agustus 2022\r\n', 1, 0, 0, 'Bapak Musa Lembong\r\n', 'Tonsea Lama\r\n', 0, 1, 'Tawon Vespa\r\n', 'Evakuasi berhasil dilaksanakan dengan baik.\r\n', 'Brama 4, Brama 5, Danton Alpha 6 petugas damkar unit 70\r\n'),
(4, 4, 'senin, 8 agustus 2022\r\n', 1, 0, 0, 'bapak robert korompis\r\n', 'wewelen\r\n', 0, 1, 'Tawon Vespa\r\n', 'Evakuasi berhasil dilaksanakan dengan baik.\r\n', 'Brama 1, Danto Charlie 5 petugas damkar\r\n'),
(5, 5, 'minggu, 14 agustus 2022\r\n', 1, 0, 0, '', 'desa kulo\r\n', 0, 1, 'Tawon Vespa\r\n', 'Evakuasi berhasil dilaksanakan dengan baik.\r\n', 'Brama 1, Danto Charlie 5 petugas damkar\r\n'),
(6, 6, 'rabu, 17 agustus 2022\r\n', 1, 0, 0, '', 'kelurahan wewelan\r\n', 0, 1, 'Tawon Vespa\r\n', 'Evakuasi berhasil dilaksanakan dengan baik.\r\n', 'brama 1, brama 3, unit 20 6 petugas damkar\r\n'),
(7, 7, 'sabtu, 20 agustus 2022\r\n', 1, 0, 0, 'ibu mike\r\n', 'desa kulo\r\n', 0, 1, 'Tawon Vespa\r\n', 'Evakuasi berhasil dilaksanakan.\r\n', 'brama 2, brama 6, unit ambulance, 6 petugas damkar\r\n'),
(8, 8, 'senin,  22 agustus 2022\r\n', 1, 0, 0, 'kel. Kondoy kelengkian\r\n', 'kelurahan luaan\r\n', 0, 1, 'Tawon Vespa\r\n', 'evakuasi berhasil dilaksanakan.\r\n', 'brama 2, brama 6, 6 prtugas damkar\r\n'),
(9, 9, 'senin, 22 agustus 2022\r\n', 1, 0, 0, '', 'perum asabri\r\n', 0, 1, 'Tawon Vespa\r\n', 'evakuasi berhasil dilaksanakan\r\n', 'brama 1, brama 2, brama 6, 6 petugas damkar\r\n'),
(10, 10, 'senin, 29 agustus 2022\r\n', 1, 0, 0, 'gedung gereja\r\n', 'kelurahan wulauan\r\n', 0, 1, 'Tawon Vespa\r\n', 'evakuasi berhasil dilaksanakan\r\n', 'brama 1, brama 3, danton charlie 5 petugas damkar\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `penyelamatan_april`
--

CREATE TABLE `penyelamatan_april` (
  `id` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `Hari/Tanggal` varchar(100) NOT NULL,
  `Penyelamatan Hewan Berbisa` int(11) NOT NULL,
  `Penyelamatan Evakuasi` int(11) NOT NULL,
  `Penyelamatan lain-lain` int(11) NOT NULL,
  `Pemilik` varchar(100) NOT NULL,
  `Alamat Pemilik` varchar(100) NOT NULL,
  `Nomor HP` int(15) NOT NULL,
  `Jumlah Unit` int(11) NOT NULL,
  `Jenis Objeck` varchar(100) NOT NULL,
  `Hasil Pelaksanaan` varchar(100) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyelamatan_april`
--

INSERT INTO `penyelamatan_april` (`id`, `No`, `Hari/Tanggal`, `Penyelamatan Hewan Berbisa`, `Penyelamatan Evakuasi`, `Penyelamatan lain-lain`, `Pemilik`, `Alamat Pemilik`, `Nomor HP`, `Jumlah Unit`, `Jenis Objeck`, `Hasil Pelaksanaan`, `Keterangan`) VALUES
(1, 1, 'Senin 11 April 2022', 1, 0, 0, '', 'Desa Tember Tompaso', 0, 1, 'Tawon Vespa', '\"Evakuasi berhasil dilaksanakan \r\ndengan baik\"', 'Unit 20 bersama 5 anggota dan Bpk Kadis, Sekdis, Kabid, Kasie Evakuasi'),
(2, 2, 'Senin 12 April 2022', 1, 0, 0, 'Kel Mongi-Paengkuann', 'Kelurahan Sasaran', 0, 1, 'Tawon Vespa', '\"Evakuasi berhasil\r\n dilaksanakan \r\ndengan baik\"', '\"Unit 20 bersama 5 \r\nanggota dan Bpk Kadis, \r\nSekdis, Kabid, Kasie \r\nEvakuasi\"'),
(3, 3, 'Senin 12 April 2022', 1, 0, 0, '', 'Tataaran Patar', 0, 1, 'Tawon Vespa', '\"Evakuasi berhasil \r\ndilaksanakan \r\ndengan baik\"', '\"Unit 20 bersama 5 \r\nanggota dan Bpk Kadis,\r\n Sekdis, Kabid, Kasie \r\nEvakuasi\"');

-- --------------------------------------------------------

--
-- Table structure for table `penyelamatan_februari`
--

CREATE TABLE `penyelamatan_februari` (
  `id` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `Hari/Tanggal` varchar(100) NOT NULL,
  `Penyelamatan Hewan Berbisa` int(11) NOT NULL,
  `Penyelamatan Evakuasi` int(11) NOT NULL,
  `Penyelamatan lain-lain` int(11) NOT NULL,
  `Pemilik` varchar(100) NOT NULL,
  `Alamat Pemilik` varchar(100) NOT NULL,
  `Nomor HP` int(15) NOT NULL,
  `Jumlah Unit` int(11) NOT NULL,
  `Jenis Objeck` varchar(100) NOT NULL,
  `Hasil Pelaksanaan` varchar(100) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyelamatan_februari`
--

INSERT INTO `penyelamatan_februari` (`id`, `No`, `Hari/Tanggal`, `Penyelamatan Hewan Berbisa`, `Penyelamatan Evakuasi`, `Penyelamatan lain-lain`, `Pemilik`, `Alamat Pemilik`, `Nomor HP`, `Jumlah Unit`, `Jenis Objeck`, `Hasil Pelaksanaan`, `Keterangan`) VALUES
(1, 1, 'Jumat, 4 Februari 2022', 1, 0, 0, '', 'Jembatan Kinali', 0, 1, 'Tawon Vespa', 'Evakuasi berhasil dilaksanakan dengan baik.', 'Unit 20 bersama 5 anggota dan Bapak Kadis, sekdis, kabid, kasie evakuasi');

-- --------------------------------------------------------

--
-- Table structure for table `penyelamatan_januari`
--

CREATE TABLE `penyelamatan_januari` (
  `id` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `peny_hwn_brbisa` int(11) NOT NULL,
  `peny_eva` int(11) NOT NULL,
  `peny_lain` int(11) NOT NULL,
  `pemilik` varchar(100) NOT NULL,
  `almt_pemilik` varchar(100) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `jmlh_unit` int(11) NOT NULL,
  `jns_objk_eva` varchar(100) NOT NULL,
  `hsl_plksnn` varchar(100) NOT NULL,
  `Waktu Pelaksanaan_Mulai` varchar(100) NOT NULL,
  `Waktu Pelaksanaan_Selesai` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyelamatan_januari`
--

INSERT INTO `penyelamatan_januari` (`id`, `No`, `tanggal`, `peny_hwn_brbisa`, `peny_eva`, `peny_lain`, `pemilik`, `almt_pemilik`, `no_hp`, `jmlh_unit`, `jns_objk_eva`, `hsl_plksnn`, `Waktu Pelaksanaan_Mulai`, `Waktu Pelaksanaan_Selesai`, `ket`) VALUES
(1, 1, 'Senin 17 Januari 2022', 0, 0, 1, 'Masyarakat di sekitar lokasi', 'Perkebunan Sekep', 0, 1, 'Avanza', 'Evakuasi mobil korban behasil dilaksanakan dengan baik', '', '', 'Korban meninggal dunia'),
(2, 2, 'Rabu 19 Januari 2022', 1, 0, 0, 'Saleh kiaydemak', 'Kampung jawa', 0, 1, 'Tawon vespa', 'Evakuasi berhasil dilaksanakan dengan baik', '', '', 'Unit 20 bersama 5 anggota dan Bpk Kadis, sekdis, kabid, kasie evakuasi'),
(3, 3, 'Rabu 19 Januari 2022', 1, 0, 0, 'Kel pingkan sarapung', 'Rinegetan', 0, 1, 'Tawon vespa', 'Evakuasi berhasil dilaksanakan dengan baik', '', '', 'Unit 10 bersama 5 anggota dan Bpk Kadis, sekdis, kabid, kasie evakuasi'),
(4, 4, 'Rabu 19 Januari 2022', 1, 0, 0, 'Kel rengkuan metakahi', 'Desa kembuan', 0, 1, 'Tawon vespa', 'Evakuasi berhasil dilaksanakan dengan baik', '', '', 'Unit 10 bersama 5 anggota dan Bpk Kadis, sekdis, kabid, kasie evakuasi'),
(5, 5, 'Jumat 21 Januari 2022', 1, 0, 0, 'Kel wulus pakasi', 'Desa kembuan', 0, 1, 'Tawon vespa', 'Evakuasi berhasil dilaksanakan dengan baik', '', '', 'Unit 10 bersama 5 anggota dan Bpk Kadis, sekdis, kabid, kasie evakuasi'),
(6, 6, 'Senin 24 Januari 2022', 1, 0, 0, 'Alfamart', 'Alfamart kel. kiniar', 0, 1, 'Tawon vespa', 'Evakuasi berhasil dilaksanakan dengan baik', '', '', 'Unit 20 bersama 5 anggota dan Bpk Kadis, sekdis, kabid evakuasi'),
(7, 7, 'Rabu 26 Januari 2022', 1, 0, 0, 'Kel rumate petrus', 'Kelurahan rinegetan', 0, 1, 'Tawon vespa', 'Evakuasi berhasil dilaksanakan dengan baik', '', '', 'Unit 10 bersama 5 anggota dan Bpk Kadis, sekdis, kabid, kasie evakuasi'),
(8, 8, 'Sabtu 29 Januari 2022', 1, 0, 0, 'Kel Rumate pangkerego', 'Perkebunan pangkerego', 0, 1, 'Tawon vespa', 'Evakuasi berhasil dilaksanakan dengan baik', '', '', 'Unit 20 bersama 5 anggota dan Bpk Kadis, sekdis, kabid, kasie evakuasi');

-- --------------------------------------------------------

--
-- Table structure for table `penyelamatan_juli`
--

CREATE TABLE `penyelamatan_juli` (
  `id` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `Hari/Tanggal` varchar(100) NOT NULL,
  `Penyelamatan Hewan Berbisa` int(11) NOT NULL,
  `Penyelamatan Evakuasi` int(11) NOT NULL,
  `Penyelamatan Lain-lain` int(11) NOT NULL,
  `Pemilik` varchar(100) NOT NULL,
  `Alamat Pemilik` varchar(100) NOT NULL,
  `No. HP` varchar(15) NOT NULL,
  `Jumlah Unit` int(11) NOT NULL,
  `Jenis Objek Evakuasi` varchar(100) NOT NULL,
  `Hasil Pelaksanaan` varchar(100) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyelamatan_juli`
--

INSERT INTO `penyelamatan_juli` (`id`, `No`, `Hari/Tanggal`, `Penyelamatan Hewan Berbisa`, `Penyelamatan Evakuasi`, `Penyelamatan Lain-lain`, `Pemilik`, `Alamat Pemilik`, `No. HP`, `Jumlah Unit`, `Jenis Objek Evakuasi`, `Hasil Pelaksanaan`, `Keterangan`) VALUES
(1, 1, 'Senin, 4 Juli 2022', 1, 0, 0, 'Kel Kaligis-Kaseger ', 'Kel Watulambot', '081350725684', 1, 'Tawon Vespa', 'Evakuasi Berhasil\r\nDi Laksanakan\r\nDengan Baik', 'Brama 1, Brama 2, Brama 4, Brama 5, Brama 6, Unit 20, 5 Petugas Damkar'),
(2, 2, 'Selasa, 5 Juli 2022', 1, 0, 0, 'Kel Lomboan-\r\nTaroreh', 'Manembo\r\nLangowan Selatan', '08525679737', 1, 'Tawon Vespa', 'Evakuasi Berhasil\r\nDi Laksanakan\r\nDengan Baik', 'Unit Ambulance, Brama 2,\r\nBrama 6, 6 Petugas Damkar'),
(3, 3, 'Kamis, 7 Juli 2022', 1, 0, 0, 'Bapak Fredy\r\nTumengkol', 'Desa Kulo', '089695315037', 1, 'Tawon Vespa', 'Evakuasi Berhasil\r\nDi Laksanakan\r\nDengan Baik', 'Brama 1, Brama 4, Brama 5, Brama 6, Danton Alpha 6 Petugas Damkar'),
(4, 4, 'Jumat, 8 Juli 2022', 1, 0, 0, 'Wenny Sambul', 'Makalonsouw', '085240483304', 1, 'Tawon Vespa', 'Evakuasi Berhasil\r\nDi Laksanakan\r\nDengan Baik', 'Brama 1, Brama 2, Brama 6, 5 Petugas Damkar'),
(5, 5, 'Jumat, 8 Juli 2022', 1, 0, 0, 'Jendry Manus', 'Kel Liningaan', '085342941979', 1, 'Tawon Vespa', 'Evakuasi Berhasil\r\nDi Laksanakan\r\nDengan Baik', 'Brama 1, Brama 2, Brama 6, 5 Petugas Damkar'),
(6, 6, 'Jumat, 15 Juli 2022', 1, 0, 0, 'Kel Rotinsulu-\r\nWalean', 'Kel Wewelen', '085240570348', 1, 'Tawon Vespa', 'Evakuasi Berhasil\r\nDi Laksanakan\r\nDengan Baik', 'Brama 1, Brama 3, Unit 20\r\n6 Petugas Damkar'),
(7, 7, 'Minggu, 17 Juli 2022', 1, 0, 0, 'Septy Tumengkol', 'Remboken', '082193279878', 1, 'Tawon Vespa', 'Evakuasi Berhasil\r\nDilaksanakan', 'Brama 2, Brama 6, Unit Ambulance, 6 Petugas Damkar'),
(8, 8, 'Sabtu, 23 Juli 2022', 1, 0, 0, 'Kel Manengkey-\r\nSaon', 'Taataran II', '08124117966', 1, 'Tawon Vespa', 'Evakuasi Berhasil\r\nDilaksanakan', 'Brama 2, Brama 6, Unit 20,\r\n6 Petugas Damkar');

-- --------------------------------------------------------

--
-- Table structure for table `penyelamatan_juni`
--

CREATE TABLE `penyelamatan_juni` (
  `id` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `Hari/Tanggal` varchar(100) NOT NULL,
  `Penyelamatan_hewan Berbisa` int(11) NOT NULL,
  `Penyelamatan_evakuasi` int(11) NOT NULL,
  `Penyelamatan_lain - lain` int(11) NOT NULL,
  `Pemilik` varchar(100) NOT NULL,
  `Alamat Pemilik` varchar(100) NOT NULL,
  `Nomor Wa/Pengguna Layanan` int(11) NOT NULL,
  `Jumlah Unit` int(11) NOT NULL,
  `Jenis Objek Evakuasi` varchar(100) NOT NULL,
  `Hasil Pelaksanaan` varchar(100) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyelamatan_juni`
--

INSERT INTO `penyelamatan_juni` (`id`, `No`, `Hari/Tanggal`, `Penyelamatan_hewan Berbisa`, `Penyelamatan_evakuasi`, `Penyelamatan_lain - lain`, `Pemilik`, `Alamat Pemilik`, `Nomor Wa/Pengguna Layanan`, `Jumlah Unit`, `Jenis Objek Evakuasi`, `Hasil Pelaksanaan`, `Keterangan`) VALUES
(1, 1, 'Kamis 2 Juni 2022', 1, 0, 0, 'Kel Mait-Pesik', 'Kelurahan Liningaan', 0, 1, 'Tawon Vespa', 'Evakuasi berhasil dilaksanakan \r\ndengan baik', 'Unit 60 bersama 5 anggota dan Bpk Sekdis \r\nKasie Evakuasi'),
(2, 2, 'Jumat 3 Juni 2022', 1, 0, 0, 'SD Inpres Sasaran', 'Kel Sasaran', 0, 1, 'Tawon Vespa', 'Evakuasi berhasil\r\n dilaksanakan \r\ndengan baik', 'Unit 20 bersama 5 anggota dan Bpk Kadis, Sekdis, Kabid, \r\nKasie Evakuasi'),
(3, 3, 'Rabu 8 Juni 2022', 1, 0, 0, 'Kel Mandang-Lengkong', 'Desa Kulo', 0, 1, 'Tawon Vespa', 'Evakuasi berhasil \r\ndilaksanakan \r\ndengan baik', 'Unit 10 bersama 5 \r\nanggota dan Bpk Kadis,\r\n Sekdis, Kabid, Kasie \r\nEvakuasi'),
(4, 4, 'Kamis 9 Juni 2022', 1, 0, 0, '', 'Desa Eris', 0, 1, 'Tawon Vespa', 'Evakuasi berhasil \r\ndilaksanakan \r\ndengan baik', 'Unit 10 bersama 5 anggota dan Bpk Kadis, Sekdis, Kabid, \r\nKasie Evakuasi'),
(5, 5, 'Jumat 10 Juni 2022', 0, 1, 0, 'Kel Sabahudin-Samad', 'Kelurahan Wewelen', 0, 1, 'Manusia', 'Evakuasi berhasil \r\ndilaksanakan \r\ndengan baik', 'Kabid PPKSDM Kasie Operasi dan\r\n5 anggota'),
(6, 6, 'Sabtu 18 Juni 2022', 1, 0, 0, '', 'Kel Watulambot', 0, 1, 'Tawon Vespa', 'Evakuasi berhasil \r\ndilaksanakan \r\ndengan baik', 'Unit 10 bersama 5 anggota dan Bpk Kadis, Sekdis, Kabid, \r\nKasie Evakuasi');

-- --------------------------------------------------------

--
-- Table structure for table `penyelamatan_maret`
--

CREATE TABLE `penyelamatan_maret` (
  `id` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `Hari/Tanggal` varchar(100) NOT NULL,
  `Penyelamatan Hewan Berbisa` int(11) NOT NULL,
  `Penyelamatan Evakuasi` int(11) NOT NULL,
  `Penyelamatan lain-lain` int(11) NOT NULL,
  `Pemilik` varchar(100) NOT NULL,
  `Alamat Pemilik` varchar(100) NOT NULL,
  `Nomor HP` int(15) NOT NULL,
  `Jumlah Unit` int(11) NOT NULL,
  `Jenis Objeck` varchar(100) NOT NULL,
  `Hasil Pelaksanaan` varchar(100) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyelamatan_maret`
--

INSERT INTO `penyelamatan_maret` (`id`, `No`, `Hari/Tanggal`, `Penyelamatan Hewan Berbisa`, `Penyelamatan Evakuasi`, `Penyelamatan lain-lain`, `Pemilik`, `Alamat Pemilik`, `Nomor HP`, `Jumlah Unit`, `Jenis Objeck`, `Hasil Pelaksanaan`, `Keterangan`) VALUES
(1, 1, 'Minggu 13 Maret 2022', 0, 0, 1, 'Kel umbokahu kewas', 'kel sasaran', 0, 1, 'Ular', 'Evakuasi  behasil dilaksanakan dengan baik', 'Unit 10 bersama 5 anggota dan pak Sekdis '),
(2, 2, 'Selasa 15 Maret 2022', 1, 0, 0, 'kel tampi kaputungan', 'Desa kulo', 0, 1, 'Ular', 'Evakuasi  behasil dilaksanakan dengan baik', 'Unit 10 bersama 5 anggota dan pak Sekdis '),
(3, 3, 'Jumat 18 Maret 2022', 1, 0, 0, 'Kel rumate pangkerego', 'Kel luan', 0, 1, 'Ular', 'Evakuasi berhasil dilaksanakan dengan baik', 'Unit 10 bersama 5 anggota dan Bpk Kadis, sekdis, kabid, kasie evakuasi'),
(4, 4, 'Jumat 18 Maret 2023', 1, 0, 0, 'Kantor kec Tondano utara ', 'Desa tonsea lama', 0, 1, 'Tawon vespa', 'Evakuasi berhasil dilaksanakan dengan baik', 'Unit 10 bersama 5 anggota dan Bpk Kadis, sekdis, kabid, kasie evakuasi');

-- --------------------------------------------------------

--
-- Table structure for table `penyelamatan_mei`
--

CREATE TABLE `penyelamatan_mei` (
  `id` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `Hari/Tanggal` varchar(100) NOT NULL,
  `Penyelamatan_hewan berbisa` int(11) NOT NULL,
  `Penyelamatan_evakuasi` int(11) NOT NULL,
  `Penyelamatan_lain - lain` int(11) NOT NULL,
  `Pemilik` varchar(100) NOT NULL,
  `Alamat Pemilik` varchar(100) NOT NULL,
  `Nomor HP/Pengguna Layanan` varchar(15) NOT NULL,
  `Jumlah Unit` int(11) NOT NULL,
  `Jenis Objek Evakuasi` varchar(100) NOT NULL,
  `Hasil Pelaksanaan` varchar(100) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyelamatan_mei`
--

INSERT INTO `penyelamatan_mei` (`id`, `No`, `Hari/Tanggal`, `Penyelamatan_hewan berbisa`, `Penyelamatan_evakuasi`, `Penyelamatan_lain - lain`, `Pemilik`, `Alamat Pemilik`, `Nomor HP/Pengguna Layanan`, `Jumlah Unit`, `Jenis Objek Evakuasi`, `Hasil Pelaksanaan`, `Keterangan`) VALUES
(1, 1, 'Jumat 13 Mei 2022', 1, 0, 0, 'Gedung Gereja Wulauan', 'Kel Wulauan', '', 1, 'Tawon Vespa', '\"Evakuasi  berhasil\r\ndilaksanakan dengan baik\r\n\"', '\"Unit 20 Bersama 5 Anggota dan Bpk Kadis, \r\nSekdis, Kabid, Kasie Evakuasi\"'),
(2, 2, 'Selasa 17 Mei 2022', 1, 0, 0, 'Desa Sea', 'Sea Kec Pineleng', '', 1, 'Tawon Vespa', 'Evakuasi  berhasil\r\ndilaksanakan dengan baik\r\n', 'Unit 20 Bersama 5 Anggota dan Bpk Kadis, \r\nSekdis, Kabid, Kasie Evakuasi'),
(3, 3, 'Jumat 20 Mei 2022', 1, 0, 0, 'Keluarga Maengkom', 'Kel Tounkuramber', '', 1, 'Ular', 'Evakuasi  berhasil\r\ndilaksanakan dengan baik\r\n', 'Unit 10 Bersama 5 Anggota dan Bpk Kadis, \r\nSekdis, Kabid, Kasie Evakuasi'),
(4, 4, 'Minggu 22 Mei 2022', 0, 1, 0, '', 'Kel Roong', '', 1, 'Cincin', 'Evakuasi  berhasil\r\ndilaksanakan dengan baik\r\n', 'Unit 10 Bersama 5 Anggota dan Bpk Kadis, \r\nSekdis, Kabid, Kasie Evakuasi'),
(5, 5, 'Senin 23 Mei 2022', 1, 0, 0, 'Kel Rampengan Palealu', 'Perum Maesa \r\nBlok B', '', 1, 'Tawon Vespa', 'Evakuasi  berhasil\r\ndilaksanakan dengan baik\r\n', 'Unit 10 Bersama 5 Anggota dan Bpk Kadis, \r\nSekdis, Kabid, Kasie Evakuasi'),
(6, 6, 'Senin 23 Mei 2022', 1, 0, 0, 'Keluarga Saerang Sanger', 'Amongena 1', '', 1, 'Tawon Vespa', 'Evakuasi  berhasil\r\ndilaksanakan dengan baik', 'Unit 20 Bersama 5 Anggota dan Bpk Kadis, \r\nSekdis, Kabid, Kasie Evakuasi'),
(7, 7, 'Selasa 24 Mei 2022', 0, 1, 0, 'Bpk Wenny Koilam', 'Kel Rerewokan ', '', 1, 'Korban Kebakaran', 'Evakuasi  berhasil\r\ndilaksanakan dengan baik\r\n', 'Unit Anbulance Bersama 3 Anggota Kasie Evakuasi dan Kasie Proteksi'),
(8, 8, 'Selasa 24 Mei 2022', 1, 0, 0, '', '', '', 1, 'Tawon Vespa', 'Evakuasi  berhasil\r\ndilaksanakan dengan baik\r\n', 'Unit 20 Bersama 5 Anggota dan Bpk Kadis, \r\nSekdis, Kabid, Kasie Evakuasi'),
(9, 9, 'Kamis 26 Mei 2022', 1, 0, 0, 'Ibu Reini Taniowas', 'Perumahan Dumex', '', 1, 'Ular', 'Evakuasi  berhasil\r\ndilaksanakan dengan baik\r\n', 'Kasie Ops Kasie Kesiapsiagaan Bersama 5\r\nAnggota'),
(10, 10, 'Sabtu 28 Mei 2022', 1, 0, 0, 'Kel Oroh Tumiwa', 'Desa Tumaratas', '', 1, 'Tawon Vespa', 'Evakuasi  berhasil\r\ndilaksanakan dengan baik\r\n', 'Unit 60 Bersama 5 Anggota dan Bpk Kadis, \r\nSekdis, Kabid, Kasie Evakuasi'),
(11, 11, 'Senin 30 Mei 2022', 1, 0, 0, 'Kel Simelar Tobing', 'Desa Sea', '87843546948', 1, 'Tawon Vespa', 'Evakuasi  berhasil\r\ndilaksanakan dengan baik', 'Unit 10 Bersama 5 Anggota dan Bpk Kadis, \r\nSekdis, Kasid, Kasie Evakuasi');

-- --------------------------------------------------------

--
-- Table structure for table `penyelamatan_november`
--

CREATE TABLE `penyelamatan_november` (
  `id` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `Hari/tanggal` varchar(100) NOT NULL,
  `Penyelamatan Hewan Berbisa` int(11) NOT NULL,
  `Penyelamatan Evakuasi` int(11) NOT NULL,
  `Penyelamatan lain-lain` int(11) NOT NULL,
  `Pemilik` varchar(100) NOT NULL,
  `Alamat pemilik` varchar(100) NOT NULL,
  `No Hp` int(11) NOT NULL,
  `Jumlah unit` int(11) NOT NULL,
  `Jenis objek evakuasi` varchar(100) NOT NULL,
  `Hasil pelaksanaan` varchar(100) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyelamatan_november`
--

INSERT INTO `penyelamatan_november` (`id`, `No`, `Hari/tanggal`, `Penyelamatan Hewan Berbisa`, `Penyelamatan Evakuasi`, `Penyelamatan lain-lain`, `Pemilik`, `Alamat pemilik`, `No Hp`, `Jumlah unit`, `Jenis objek evakuasi`, `Hasil pelaksanaan`, `Keterangan`) VALUES
(1, 1, 'Selasa,15 November 2022\r\n', 1, 0, 0, 'Kel. Kawatak - Supit\r\n', 'Kel. Koya Kec. Tondano Selatan\r\n', 0, 0, 'Sarang Tawon\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani dengan baik\r\n'),
(2, 2, 'Minggu,20 November 2022\r\n', 1, 0, 0, 'Kel.Senge - Warouw \r\n', 'Kel. Sumalangka Ling I Tondano Utara\r\n', 0, 0, 'Sarang Tawon\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani dengan baik\r\n'),
(3, 3, 'Jumat,25 November 2022\r\n', 1, 0, 0, '-', 'Kel.Kampung Jawa Kec.Tondano Utara\r\n', 0, 0, 'Sarang Tawon\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani dengan baik\r\n'),
(4, 4, 'Senin,28 November 2022\r\n', 1, 0, 0, 'Frangki Kaso\r\n', 'Kel. Wewelen Ling. IV Tondano Barat\r\n', 0, 0, 'Ular', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani Dengan baik\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `penyelamatan_oktober`
--

CREATE TABLE `penyelamatan_oktober` (
  `id` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `Hari/tanggal` varchar(100) NOT NULL,
  `Penyelamatan Hewan Berbisa` int(11) NOT NULL,
  `Penyelamatan Evakuasi` int(11) NOT NULL,
  `Penyelamatan lain-lain` int(11) NOT NULL,
  `Pemilik` varchar(100) NOT NULL,
  `Alamat pemilik` varchar(100) NOT NULL,
  `No Hp` int(15) NOT NULL,
  `Jumlah Unit` int(11) NOT NULL,
  `Jenis Objek Evakuasi` varchar(100) NOT NULL,
  `Hasil Pelaksanaan` varchar(100) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyelamatan_oktober`
--

INSERT INTO `penyelamatan_oktober` (`id`, `No`, `Hari/tanggal`, `Penyelamatan Hewan Berbisa`, `Penyelamatan Evakuasi`, `Penyelamatan lain-lain`, `Pemilik`, `Alamat pemilik`, `No Hp`, `Jumlah Unit`, `Jenis Objek Evakuasi`, `Hasil Pelaksanaan`, `Keterangan`) VALUES
(1, 1, 'Rabu, 5 Oktober 2022\r\n', 0, 0, 1, 'Ibu Meiske Wullur\r\n', 'Kel. Wewelen\r\n', 0, 0, 'Penyelamatan Kucing\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani dengan baik\r\n'),
(2, 2, 'Jumat, 7 Oktober 2022\r\n', 1, 0, 0, 'Rudy Manumpil\r\n', 'Aspol Wewelen Tondano Barat\r\n', 0, 0, 'Ular', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani dengan baik\r\n'),
(3, 3, 'Rabu, 12 Oktober 2022\r\n', 1, 0, 0, 'Kel. Kemur - Supit\r\n', 'Tataaran II Kecamatan Tondano Selatan\r\n', 0, 0, 'Sarang Tawon\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani dengan baik\r\n'),
(4, 4, 'Sabtu, 15 Oktober 2022\r\n', 0, 1, 0, 'Ibu Nia\r\n', 'Perumahan Kharisma Koka, Desa Koka', 0, 0, 'Anjing Gila', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani dengan baik\r\n'),
(5, 5, 'Sabtu, 15 Oktober 2022\r\n', 1, 0, 0, 'Kel Tamboto\r\n', 'Kel. Wewelen, Depan Kantor Pengadilan Tondano\r\n\r\n', 0, 0, 'Sarang Tawon\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani Dengan baik\r\n'),
(6, 6, 'Sabtu, 22 Oktober 2022\r\n', 1, 0, 0, 'Bpk. Mekry Sondey\r\n', 'Desa Kalasey I Jaga I\r\n', 0, 0, 'Sarang Tawon', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani Dengan baik\r\n'),
(7, 7, 'Selasa, 25 Oktober 2022\r\n', 1, 0, 0, '', 'Kel. Wewelen ling. VI\r\n', 0, 0, 'Sarang Tawon\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani Dengan baik\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `penyelamatan_september`
--

CREATE TABLE `penyelamatan_september` (
  `id` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `Hari/Tanggal` varchar(100) NOT NULL,
  `Penyelamatan Hewan Berbisa` int(11) NOT NULL,
  `Penyalamatan Evakuasi` int(11) NOT NULL,
  `Penyelamatan Lain-lain` int(11) NOT NULL,
  `Pemilik` varchar(100) NOT NULL,
  `Alamat Pemilik` varchar(100) NOT NULL,
  `No. HP` int(15) NOT NULL,
  `Jumlah Unit` int(11) NOT NULL,
  `Jenis  Objek Evakuasi` varchar(100) NOT NULL,
  `Hasil Pelaksanaan` varchar(100) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyelamatan_september`
--

INSERT INTO `penyelamatan_september` (`id`, `No`, `Hari/Tanggal`, `Penyelamatan Hewan Berbisa`, `Penyalamatan Evakuasi`, `Penyelamatan Lain-lain`, `Pemilik`, `Alamat Pemilik`, `No. HP`, `Jumlah Unit`, `Jenis  Objek Evakuasi`, `Hasil Pelaksanaan`, `Keterangan`) VALUES
(1, 1, 'Sabtu, 03 September 2022\r\n', 1, 0, 0, 'Bpk Frits Muntu\r\n', 'Werot Kel. Kendis Tondano Timur\r\n', 0, 0, 'Ular di Mobil\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani dengan baik\r\n'),
(2, 2, 'Jumat, 09 September 2022\r\n', 1, 0, 0, 'Ronald Sengke\r\n', 'Kendis Kec. Tondano Timur\r\n', 0, 0, 'Sarang Tawon\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', ''),
(3, 3, 'Sabtu, 10 September 2022\r\n', 1, 0, 0, '', 'Tower Di Kel. Katinggolan\r\n', 0, 0, 'Sarang Tawon\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani dengan baik\r\n'),
(4, 4, 'Selasa, 13 September 2022\r\n', 1, 0, 0, '', 'Desa Tateli Kec. Mandolang\r\n', 0, 0, 'Tawon Patiukan\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani dengan baik\r\n'),
(5, 5, 'Rabu, 28 September 2022\r\n', 1, 0, 0, 'Gedung Ppa\r\n', 'Tondegesan I Jaga 4\r\n', 0, 0, 'Sarang Tawon\r\n', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani Dengan baik\r\n'),
(6, 6, 'Sabtu, 17 Sebtember 2022\r\n', 0, 1, 0, 'Kawunang- Muntu\r\n', 'Kel. Sasaran\r\n', 0, 0, 'Manusia', 'Diteruskan kepada Petugas di Mako dan kepada Pimpinan\r\n', 'Telah Ditangani dengan baik\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `berita_id_IDX` (`id`) USING BTREE;

--
-- Indexes for table `diagram_pema_peny`
--
ALTER TABLE `diagram_pema_peny`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto_bersama`
--
ALTER TABLE `foto_bersama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jumlah_kondisiarmada`
--
ALTER TABLE `jumlah_kondisiarmada`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kp_jbt`
--
ALTER TABLE `kp_jbt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kp_jenjangpendidikan`
--
ALTER TABLE `kp_jenjangpendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kp_statuskepegawaian`
--
ALTER TABLE `kp_statuskepegawaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemadaman_april`
--
ALTER TABLE `pemadaman_april`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemadaman_februari`
--
ALTER TABLE `pemadaman_februari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemadaman_januari`
--
ALTER TABLE `pemadaman_januari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemadaman_juli`
--
ALTER TABLE `pemadaman_juli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemadaman_juni`
--
ALTER TABLE `pemadaman_juni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemadaman_maret`
--
ALTER TABLE `pemadaman_maret`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemadaman_mei`
--
ALTER TABLE `pemadaman_mei`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemadaman_november`
--
ALTER TABLE `pemadaman_november`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemadaman_oktober`
--
ALTER TABLE `pemadaman_oktober`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemadaman_penyelamatan_februari_2022`
--
ALTER TABLE `pemadaman_penyelamatan_februari_2022`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemadaman_penyelamatan_januari_2022`
--
ALTER TABLE `pemadaman_penyelamatan_januari_2022`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemadaman_penyelamatan_maret_2022`
--
ALTER TABLE `pemadaman_penyelamatan_maret_2022`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `pemadaman_september`
--
ALTER TABLE `pemadaman_september`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengambilanair_juli`
--
ALTER TABLE `pengambilanair_juli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyelamatan_agustus`
--
ALTER TABLE `penyelamatan_agustus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyelamatan_april`
--
ALTER TABLE `penyelamatan_april`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyelamatan_februari`
--
ALTER TABLE `penyelamatan_februari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyelamatan_januari`
--
ALTER TABLE `penyelamatan_januari`
  ADD UNIQUE KEY `No` (`id`);

--
-- Indexes for table `penyelamatan_juli`
--
ALTER TABLE `penyelamatan_juli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyelamatan_juni`
--
ALTER TABLE `penyelamatan_juni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyelamatan_maret`
--
ALTER TABLE `penyelamatan_maret`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyelamatan_mei`
--
ALTER TABLE `penyelamatan_mei`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyelamatan_november`
--
ALTER TABLE `penyelamatan_november`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyelamatan_oktober`
--
ALTER TABLE `penyelamatan_oktober`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyelamatan_september`
--
ALTER TABLE `penyelamatan_september`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diagram_pema_peny`
--
ALTER TABLE `diagram_pema_peny`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `foto_bersama`
--
ALTER TABLE `foto_bersama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jumlah_kondisiarmada`
--
ALTER TABLE `jumlah_kondisiarmada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kp_jbt`
--
ALTER TABLE `kp_jbt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kp_jenjangpendidikan`
--
ALTER TABLE `kp_jenjangpendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kp_statuskepegawaian`
--
ALTER TABLE `kp_statuskepegawaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pemadaman_april`
--
ALTER TABLE `pemadaman_april`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pemadaman_februari`
--
ALTER TABLE `pemadaman_februari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pemadaman_januari`
--
ALTER TABLE `pemadaman_januari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pemadaman_juli`
--
ALTER TABLE `pemadaman_juli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pemadaman_juni`
--
ALTER TABLE `pemadaman_juni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pemadaman_maret`
--
ALTER TABLE `pemadaman_maret`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pemadaman_mei`
--
ALTER TABLE `pemadaman_mei`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pemadaman_november`
--
ALTER TABLE `pemadaman_november`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pemadaman_oktober`
--
ALTER TABLE `pemadaman_oktober`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pemadaman_penyelamatan_februari_2022`
--
ALTER TABLE `pemadaman_penyelamatan_februari_2022`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pemadaman_penyelamatan_januari_2022`
--
ALTER TABLE `pemadaman_penyelamatan_januari_2022`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pemadaman_penyelamatan_maret_2022`
--
ALTER TABLE `pemadaman_penyelamatan_maret_2022`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemadaman_september`
--
ALTER TABLE `pemadaman_september`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengambilanair_juli`
--
ALTER TABLE `pengambilanair_juli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `penyelamatan_agustus`
--
ALTER TABLE `penyelamatan_agustus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `penyelamatan_april`
--
ALTER TABLE `penyelamatan_april`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penyelamatan_februari`
--
ALTER TABLE `penyelamatan_februari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penyelamatan_januari`
--
ALTER TABLE `penyelamatan_januari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `penyelamatan_juli`
--
ALTER TABLE `penyelamatan_juli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `penyelamatan_juni`
--
ALTER TABLE `penyelamatan_juni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penyelamatan_maret`
--
ALTER TABLE `penyelamatan_maret`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penyelamatan_mei`
--
ALTER TABLE `penyelamatan_mei`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `penyelamatan_november`
--
ALTER TABLE `penyelamatan_november`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penyelamatan_oktober`
--
ALTER TABLE `penyelamatan_oktober`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `penyelamatan_september`
--
ALTER TABLE `penyelamatan_september`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
