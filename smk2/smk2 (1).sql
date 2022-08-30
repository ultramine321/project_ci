-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2022 at 11:21 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smk2`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `judul` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`judul`, `visi`, `misi`) VALUES
('Visi dan Misi', 'Menjadi Sekolah Menengah Kejuruan yang berkarakter, berbudaya, berwawasan lingkungan, menghasilkan insan yang bertaqwa, profesional, mampu berwirausaha dan berdaya saing global', 'a. Menyelenggarakan kegiatan pendampingan keagamaan dalam rangka peningkatan ketaqwaan.\r\n\r\nb. Menyelenggarakan pembiasaan beribadah sesuai agama masing-masing.\r\n\r\nc. Menyelenggarakan pembelajaran dengan pendekatan teknologi informasi dan komunikasi.\r\n\r\nd. Mengembangkan kurikulum, metodologi pembelajaran dan sistem penilaian berbasis kompetensi sesuai dengan kebutuhan industri global.');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `nama` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `angkatan` int(100) NOT NULL,
  `tahun_lulus` int(50) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`nama`, `foto`, `jk`, `angkatan`, `tahun_lulus`, `pekerjaan`) VALUES
('asndsd', 'asndsd.png', 'L', 221, 23232, 'rpl'),
('ucups', 'ucups.png', 'L', 221, 32232, 'karyawan');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `judul` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`judul`, `foto`, `tanggal`, `isi`) VALUES
('kepooo', 'kepooo.png', '2022-08-24', 'asdsddsds');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `passfoto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`judul`, `deskripsi`, `passfoto`) VALUES
('2343', 'kepooo lu', '2343.png'),
('kepooo', 'asdasd', 'kepooo.png'),
('ssaa', 'asddasf', 'ssaa.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `no_hp` varchar(12) NOT NULL,
  `email` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`no_hp`, `email`, `alamat`) VALUES
('342342323', 'asdssad@gmail.com', 'karangploso');

-- --------------------------------------------------------

--
-- Table structure for table `eskul`
--

CREATE TABLE `eskul` (
  `id` int(11) NOT NULL,
  `eskul` varchar(150) NOT NULL,
  `passfoto` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eskul`
--

INSERT INTO `eskul` (`id`, `eskul`, `passfoto`, `deskripsi`) VALUES
(2132, 'volly', '2132.png', 'Permainan bola voli termasuk salah satu contoh dari cabang olahraga bola besar. Bisa dikatakan, permainan ini masuk ke dalam kategori pertandingan karena melibatkan dua tim yang saling berhadapan untuk mendapatkan hasil pertandingan.'),
(6565, 'basket', '6565.png', 'Bola basket adalah olahraga bola berkelompok yang terdiri atas dua tim beranggotakan masing-masing lima orang yang saling bertanding mencetak poin dengan memasukkan bola ke dalam keranjang lawan'),
(12222, 'futsal', '12222.png', 'Futsal adalah permainan bola yang dimainkan oleh dua tim, yang masing-masing beranggotakan lima orang.');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `mapel` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `status_pegawaian` varchar(100) NOT NULL,
  `passfoto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama`, `tempat_lahir`, `tanggal_lahir`, `mapel`, `alamat`, `jk`, `status_pegawaian`, `passfoto`) VALUES
('21323', 'pak udin', 'ciamis', '1995-05-19', 'bahasa', 'yogyakarta', 'P', 'honorer', '21323.png'),
('2332', 'pak johny', 'Amerika', '0000-00-00', 'mtk', 'kediri', 'L', 'pns', '2332.png'),
('34343', 'pak jordi', 'Amerika', '2001-06-23', 'inggris', 'banten', 'L', 'pns', '34343.png'),
('987987', 'pak asep', 'bandung', '1995-12-23', 'bahasa', 'cirebon', 'L', 'pns', '987987.png');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `passfoto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `jurusan`, `passfoto`) VALUES
(4332, 'tkj', '4332.png'),
(23232, 'akutansi', '23232.png'),
(32112, 'tkj', '32112.png'),
(45454, 'rpl', '45454.png');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`) VALUES
(1, 'mebius', '92013962bb276c063ba43bcdf2c2100a');

-- --------------------------------------------------------

--
-- Table structure for table `master_siswa`
--

CREATE TABLE `master_siswa` (
  `nik` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `passfoto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_siswa`
--

INSERT INTO `master_siswa` (`nik`, `nama_siswa`, `jk`, `jurusan`, `alamat`, `passfoto`) VALUES
(12322, 'cecepsss', 'L', 'tkj', 'tangerang', '12322.png'),
(21323, 'aguzzzzz', 'L', 'rpl', 'sadsds', '21323.png');

-- --------------------------------------------------------

--
-- Table structure for table `organisasi`
--

CREATE TABLE `organisasi` (
  `id` int(11) NOT NULL,
  `organisasi` varchar(100) NOT NULL,
  `passfoto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organisasi`
--

INSERT INTO `organisasi` (`id`, `organisasi`, `passfoto`) VALUES
(21121, 'osis', '21121.png');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`nama`, `email`, `pesan`) VALUES
('ucups', 'asdbasd@gmail.com', 'sadasdafgff'),
('kepoo', 'asdssad@gmail.com', 'apa ajaa bolehhh'),
('sacx', 'asdbasd@gmail.com', 'asasdsff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`no_hp`);

--
-- Indexes for table `eskul`
--
ALTER TABLE `eskul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `master_siswa`
--
ALTER TABLE `master_siswa`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
