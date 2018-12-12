-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2018 at 01:50 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `journal`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id_author` int(11) NOT NULL,
  `nama_author` varchar(255) NOT NULL,
  `negara` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `institusi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id_author`, `nama_author`, `negara`, `email`, `institusi`) VALUES
(1, 'eizan hyde', '', 'eizan38@gmail.com', 'Tokyo University'),
(2, 'Yukihiro', '', 'Yukihiro@gmail.com', 'Mitsui University');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE `jurnal` (
  `id_jurnal` int(11) NOT NULL,
  `judul_jurnal` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `volume` varchar(255) NOT NULL,
  `nomor` int(11) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `keterangan` text,
  `status` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id_jurnal`, `judul_jurnal`, `tahun`, `volume`, `nomor`, `cover`, `keterangan`, `status`, `tanggal`) VALUES
(1, 'IJEAT', '2018', '1', 1, '', NULL, '1', '2018-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_paper`
--

CREATE TABLE `jurnal_paper` (
  `id_jurnal_paper` int(11) NOT NULL,
  `id_jurnal` varchar(255) NOT NULL,
  `id_paper` varchar(255) NOT NULL,
  `paper_ke` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal_paper`
--

INSERT INTO `jurnal_paper` (`id_jurnal_paper`, `id_jurnal`, `id_paper`, `paper_ke`) VALUES
(1, '1', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id_page` int(11) NOT NULL,
  `judul_page` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paper`
--

CREATE TABLE `paper` (
  `id_paper` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `abstrak` text NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `pernyataan_originial` varchar(255) NOT NULL,
  `doi` varchar(255) NOT NULL,
  `file_paper_final` varchar(255) NOT NULL,
  `tanggal_submit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`id_paper`, `judul`, `abstrak`, `keyword`, `kategori`, `pernyataan_originial`, `doi`, `file_paper_final`, `tanggal_submit`, `id_user`) VALUES
(1, 'Cara membuat blog sederhana dengan codeigniter', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'lorem, ipsum', 'mechanical engineering', 'original_letter8.pdf', '', '', '2018-12-11 18:12:17', '26');

-- --------------------------------------------------------

--
-- Table structure for table `paper_author`
--

CREATE TABLE `paper_author` (
  `id_paper_author` int(11) NOT NULL,
  `id_paper` varchar(255) NOT NULL,
  `id_author` varchar(255) NOT NULL,
  `author_ke` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paper_author`
--

INSERT INTO `paper_author` (`id_paper_author`, `id_paper`, `id_author`, `author_ke`) VALUES
(1, '1', '1', '0'),
(2, '1', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `paper_file`
--

CREATE TABLE `paper_file` (
  `id_paper_file` int(11) NOT NULL,
  `id_paper` varchar(255) NOT NULL,
  `file_paper` varchar(255) NOT NULL,
  `file_revisi` varchar(255) NOT NULL,
  `komentar_author` varchar(255) NOT NULL,
  `komentar_admin` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paper_file`
--

INSERT INTO `paper_file` (`id_paper_file`, `id_paper`, `file_paper`, `file_revisi`, `komentar_author`, `komentar_admin`, `tanggal`, `status`) VALUES
(3, '1', '1-20181211.docx', '', 'please check', 'need more improvement in abastract, alse please add author more!', '2018-12-11 18:16:33', 1),
(4, '1', '1-201812111.docx', '', 'This The new one', 'Still wrong in some part, ', '2018-12-11 18:18:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id_partner` int(11) NOT NULL,
  `nama_partper` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `urutan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id_partner`, `nama_partper`, `keterangan`, `link`, `logo`, `urutan`) VALUES
(1, 'Google Schoolar', '', 'http://schoolar.google.com', '33361-schoolar.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id_setting` int(11) NOT NULL,
  `nama_website` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `logo_header` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_setting`, `nama_website`, `keterangan`, `alamat`, `logo`, `logo_header`) VALUES
(1, 'IJEAT', 'International Journal Engineering and Applied Technology (IJEAT)', '', '', '22de4-logo_journal.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `akses_level` varchar(255) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `title`, `address1`, `address2`, `city`, `country`, `phone`, `email`, `zip`, `institution`, `category`, `username`, `password`, `akses_level`, `last_login`) VALUES
(24, 'Ikhsan', 'Mr.', '<p>\n	Cibolang</p>\n', '<p>\n	Cisaat</p>\n', 'Sukabumi', 'Indonesia', '081615399070', 'ikhsan.thohir@gmail.com', '43152', 'Nusa Putra University', 'student', '', '123456', 'author', '2018-12-02 03:49:40'),
(25, 'Admin', 'Mr.', '<p>\r\n	Cibolang</p>\r\n', '<p>\r\n	Cisaat</p>\r\n', 'Sukabumi', 'Indonesia', '081615399070', 'admin@admin.com', '43152', 'Nusa Putra University', 'admin', '', 'admin', 'admin', '2018-12-01 18:42:48'),
(26, 'eizan hyde', 'Mr.', 'japan', 'japan', 'Tokyo', 'Japan', '081615399070', 'eizan38@gmail.com', '43152', 'Tokyo University', 'student', '', '123456', 'author', '2018-12-11 18:07:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id_author`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id_jurnal`);

--
-- Indexes for table `jurnal_paper`
--
ALTER TABLE `jurnal_paper`
  ADD PRIMARY KEY (`id_jurnal_paper`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id_page`);

--
-- Indexes for table `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`id_paper`);

--
-- Indexes for table `paper_author`
--
ALTER TABLE `paper_author`
  ADD PRIMARY KEY (`id_paper_author`);

--
-- Indexes for table `paper_file`
--
ALTER TABLE `paper_file`
  ADD PRIMARY KEY (`id_paper_file`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id_partner`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id_author` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id_jurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jurnal_paper`
--
ALTER TABLE `jurnal_paper`
  MODIFY `id_jurnal_paper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id_page` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paper`
--
ALTER TABLE `paper`
  MODIFY `id_paper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paper_author`
--
ALTER TABLE `paper_author`
  MODIFY `id_paper_author` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paper_file`
--
ALTER TABLE `paper_file`
  MODIFY `id_paper_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id_partner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
