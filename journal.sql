-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 05:13 PM
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
(32, 'Ikhsan', '', 'ikhsan.thohir@gmail.com', 'Nusa Putra University'),
(33, 'Ikhsan', '', 'ikhsan.thohir@gmail.com', 'Nusa Putra University'),
(34, 'Ikhsan', '', 'ikhsan.thohir@gmail.com', 'Nusa Putra University'),
(35, 'Ikhsan', '', 'ikhsan.thohir@gmail.com', 'Nusa Putra University'),
(36, 'Ikhsan', '', 'ikhsan.thohir@gmail.com', 'Nusa Putra University');

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
(4, 'SCIENCE', '2018', '1', 1, '13dae-cover1.png', '<p>\n	Call for paper</p>\n', '1', '2018-12-04'),
(5, 'IJEAT', '2018', '1', 1, '', NULL, '1', '2018-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_paper`
--

CREATE TABLE `jurnal_paper` (
  `id_jurnal_paper` int(11) NOT NULL,
  `id_jurnal` varchar(255) NOT NULL,
  `id_paper` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id_page`, `judul_page`, `url`, `isi`, `tanggal`) VALUES
(1, 'Current Papers', 'current-paper', '<div>\n	International Journal on Electrical Engineering and Informatics is a peer reviewed journal in the field of electrical engineering and informatics. The journal is published quarterly by The School of Electrical Engineering and Informatics, Institut Teknologi Bandung, Indonesia. All papers will be blind reviewed. Accepted papers will be available on line (free access) and printed version. No publication fee.</div>\n<div>\n	&nbsp;</div>\n<div>\n	The journal publishes original papers in the field of electrical engineering and informatics which covers, but not limited to, the following scope :</div>\n<div>\n	&nbsp;</div>\n<h3>\n	Power Engineering</h3>\n<div>\n	&nbsp;</div>\n<div>\n	Electric Power Generation, Transmission and Distribution, Power Electronics, Power Quality, Power Economic, FACTS, Renewable Energy, Electric Traction, Electromagnetic Compatibility, Electrical Engineering Materials, High Voltage Insulation Technologies, High Voltage Apparatuses, Lightning Detection and Protection, Power System Analysis, SCADA, Electrical Measurements</div>\n<div>\n	&nbsp;</div>\n<div>\n	Telecommunication Engineering</div>\n<div>\n	&nbsp;</div>\n<div>\n	Antenna and Wave Propagation, Modulation and Signal Processing for Telecommunication, Wireless and Mobile Communications, Information Theory and Coding, Communication Electronics and Microwave, Radar Imaging, Distributed Platform, Communication Network and Systems, Telematics Services, Security Network, and Radio Communication.</div>\n<div>\n	&nbsp;</div>\n<div>\n	Computer Engineering</div>\n<div>\n	&nbsp;</div>\n<div>\n	Computer Architecture, Parallel and Distributed Computer, Pervasive Computing, Computer Network, Embedded System, Human&mdash;Computer Interaction, Virtual/Augmented Reality, Computer Security, VLSI Design-Network Traffic Modeling, Performance Modeling, Dependable Computing, High Performance Computing, Computer Security</div>\n<div>\n	&nbsp;</div>\n<div>\n	Control and Computer Systems</div>\n<div>\n	&nbsp;</div>\n<div>\n	Optimal, Robust and Adaptive Controls, Non Linear and Stochastic Controls, Modeling and Identification, Robotics, Image Based Control, Hybrid and Switching Control, Process Optimization and Scheduling, Control and Intelligent Systems, Artificial Intelligent and Expert System, Fuzzy Logic and Neural Network, Complex Adaptive Systems.</div>\n<div>\n	&nbsp;</div>\n<div>\n	Electronics</div>\n<div>\n	&nbsp;</div>\n<div>\n	To Study Microelectronic System, Electronic Materials, Design and Implementation of Application Specific Integrated Circuits (ASIC), System-on-a-Chip (SoC) and Electronic Instrumentation Using CAD Tools</div>\n<div>\n	&nbsp;</div>\n<div>\n	Information technology</div>\n<div>\n	&nbsp;</div>\n<div>\n	Digital Signal Processing, Human-Machine Interface, Stochastic Systems, Information Theory, Intelligent Systems, IT Governance, Networking Technology, Optical Communication Technology, Next Generation Media, Robotic Instrumentation</div>\n<div>\n	&nbsp;</div>\n<div>\n	Informatics</div>\n<div>\n	&nbsp;</div>\n<div>\n	Information Search Engine, Multimedia Security, Computer Vision, Information Retrieval, Intelligent System, Distributed Computing System, Mobile Processing, Next Network Generation, Computer Network Security, Natural Language Processing, Business Process, Cognitive Systems.</div>\n<div>\n	&nbsp;</div>\n<div>\n	Data and Software engineering</div>\n<div>\n	&nbsp;</div>\n<div>\n	Software Engineering (Software: Lifecycle, Management, Engineering Process, Engineering Tools and Methods), Programming (Programming Methodology and Paradigm), Data Engineering (Data and Knowledge level Modeling, Information Management (DB) practices, Knowledge Based Management System, Knowledge Discovery in Data)</div>\n<div>\n	&nbsp;</div>\n<div>\n	Biomedical Engineering</div>\n<div>\n	&nbsp;</div>\n<div>\n	Biomedical Physics, Biomedical Transducers and instrumentation, Biomedical System Design and Projects, Medical Imaging Equipment and Techniques, Telemedicine System, Biomedical Imaging and Image Processing, Biomedical Informatics and Telemedicine, Biomechanics and Rehabilitation Engineering, Biomaterials and Drug Delivery Systems.</div>\n', '0000-00-00 00:00:00'),
(2, 'Aims & Scope', 'aims-scope', '<div>\n	International Journal on Electrical Engineering and Informatics is a peer reviewed journal in the field of electrical engineering and informatics. The journal is published quarterly by The School of Electrical Engineering and Informatics, Institut Teknologi Bandung, Indonesia. All papers will be blind reviewed. Accepted papers will be available on line (free access) and printed version. No publication fee.</div>\n<div>\n	&nbsp;</div>\n<div>\n	The journal publishes original papers in the field of electrical engineering and informatics which covers, but not limited to, the following scope :</div>\n<div>\n	&nbsp;</div>\n<div>\n	Power Engineering</div>\n<div>\n	&nbsp;</div>\n<div>\n	Electric Power Generation, Transmission and Distribution, Power Electronics, Power Quality, Power Economic, FACTS, Renewable Energy, Electric Traction, Electromagnetic Compatibility, Electrical Engineering Materials, High Voltage Insulation Technologies, High Voltage Apparatuses, Lightning Detection and Protection, Power System Analysis, SCADA, Electrical Measurements</div>\n<div>\n	&nbsp;</div>\n<div>\n	Telecommunication Engineering</div>\n<div>\n	&nbsp;</div>\n<div>\n	Antenna and Wave Propagation, Modulation and Signal Processing for Telecommunication, Wireless and Mobile Communications, Information Theory and Coding, Communication Electronics and Microwave, Radar Imaging, Distributed Platform, Communication Network and Systems, Telematics Services, Security Network, and Radio Communication.</div>\n<div>\n	&nbsp;</div>\n<div>\n	Computer Engineering</div>\n<div>\n	&nbsp;</div>\n<div>\n	Computer Architecture, Parallel and Distributed Computer, Pervasive Computing, Computer Network, Embedded System, Human&mdash;Computer Interaction, Virtual/Augmented Reality, Computer Security, VLSI Design-Network Traffic Modeling, Performance Modeling, Dependable Computing, High Performance Computing, Computer Security</div>\n<div>\n	&nbsp;</div>\n<div>\n	Control and Computer Systems</div>\n<div>\n	&nbsp;</div>\n<div>\n	Optimal, Robust and Adaptive Controls, Non Linear and Stochastic Controls, Modeling and Identification, Robotics, Image Based Control, Hybrid and Switching Control, Process Optimization and Scheduling, Control and Intelligent Systems, Artificial Intelligent and Expert System, Fuzzy Logic and Neural Network, Complex Adaptive Systems.</div>\n<div>\n	&nbsp;</div>\n<div>\n	Electronics</div>\n<div>\n	&nbsp;</div>\n<div>\n	To Study Microelectronic System, Electronic Materials, Design and Implementation of Application Specific Integrated Circuits (ASIC), System-on-a-Chip (SoC) and Electronic Instrumentation Using CAD Tools</div>\n<div>\n	&nbsp;</div>\n<div>\n	Information technology</div>\n<div>\n	&nbsp;</div>\n<div>\n	Digital Signal Processing, Human-Machine Interface, Stochastic Systems, Information Theory, Intelligent Systems, IT Governance, Networking Technology, Optical Communication Technology, Next Generation Media, Robotic Instrumentation</div>\n<div>\n	&nbsp;</div>\n<div>\n	Informatics</div>\n<div>\n	&nbsp;</div>\n<div>\n	Information Search Engine, Multimedia Security, Computer Vision, Information Retrieval, Intelligent System, Distributed Computing System, Mobile Processing, Next Network Generation, Computer Network Security, Natural Language Processing, Business Process, Cognitive Systems.</div>\n<div>\n	&nbsp;</div>\n<div>\n	Data and Software engineering</div>\n<div>\n	&nbsp;</div>\n<div>\n	Software Engineering (Software: Lifecycle, Management, Engineering Process, Engineering Tools and Methods), Programming (Programming Methodology and Paradigm), Data Engineering (Data and Knowledge level Modeling, Information Management (DB) practices, Knowledge Based Management System, Knowledge Discovery in Data)</div>\n<div>\n	&nbsp;</div>\n<div>\n	Biomedical Engineering</div>\n<div>\n	&nbsp;</div>\n<div>\n	Biomedical Physics, Biomedical Transducers and instrumentation, Biomedical System Design and Projects, Medical Imaging Equipment and Techniques, Telemedicine System, Biomedical Imaging and Image Processing, Biomedical Informatics and Telemedicine, Biomechanics and Rehabilitation Engineering, Biomaterials and Drug Delivery Systems.</div>\n', '0000-00-00 00:00:00'),
(3, 'Archive', 'Archive', '<div>\n	International Journal on Electrical Engineering and Informatics is a peer reviewed journal in the field of electrical engineering and informatics. The journal is published quarterly by The School of Electrical Engineering and Informatics, Institut Teknologi Bandung, Indonesia. All papers will be blind reviewed. Accepted papers will be available on line (free access) and printed version. No publication fee.</div>\n<div>\n	&nbsp;</div>\n<div>\n	The journal publishes original papers in the field of electrical engineering and informatics which covers, but not limited to, the following scope :</div>\n<div>\n	&nbsp;</div>\n<h3>\n	Power Engineering</h3>\n<div>\n	&nbsp;</div>\n<div>\n	Electric Power Generation, Transmission and Distribution, Power Electronics, Power Quality, Power Economic, FACTS, Renewable Energy, Electric Traction, Electromagnetic Compatibility, Electrical Engineering Materials, High Voltage Insulation Technologies, High Voltage Apparatuses, Lightning Detection and Protection, Power System Analysis, SCADA, Electrical Measurements</div>\n<div>\n	&nbsp;</div>\n<div>\n	Telecommunication Engineering</div>\n<div>\n	&nbsp;</div>\n<div>\n	Antenna and Wave Propagation, Modulation and Signal Processing for Telecommunication, Wireless and Mobile Communications, Information Theory and Coding, Communication Electronics and Microwave, Radar Imaging, Distributed Platform, Communication Network and Systems, Telematics Services, Security Network, and Radio Communication.</div>\n<div>\n	&nbsp;</div>\n<div>\n	Computer Engineering</div>\n<div>\n	&nbsp;</div>\n<div>\n	Computer Architecture, Parallel and Distributed Computer, Pervasive Computing, Computer Network, Embedded System, Human&mdash;Computer Interaction, Virtual/Augmented Reality, Computer Security, VLSI Design-Network Traffic Modeling, Performance Modeling, Dependable Computing, High Performance Computing, Computer Security</div>\n<div>\n	&nbsp;</div>\n<div>\n	Control and Computer Systems</div>\n<div>\n	&nbsp;</div>\n<div>\n	Optimal, Robust and Adaptive Controls, Non Linear and Stochastic Controls, Modeling and Identification, Robotics, Image Based Control, Hybrid and Switching Control, Process Optimization and Scheduling, Control and Intelligent Systems, Artificial Intelligent and Expert System, Fuzzy Logic and Neural Network, Complex Adaptive Systems.</div>\n<div>\n	&nbsp;</div>\n<div>\n	Electronics</div>\n<div>\n	&nbsp;</div>\n<div>\n	To Study Microelectronic System, Electronic Materials, Design and Implementation of Application Specific Integrated Circuits (ASIC), System-on-a-Chip (SoC) and Electronic Instrumentation Using CAD Tools</div>\n<div>\n	&nbsp;</div>\n<div>\n	Information technology</div>\n<div>\n	&nbsp;</div>\n<div>\n	Digital Signal Processing, Human-Machine Interface, Stochastic Systems, Information Theory, Intelligent Systems, IT Governance, Networking Technology, Optical Communication Technology, Next Generation Media, Robotic Instrumentation</div>\n<div>\n	&nbsp;</div>\n<div>\n	Informatics</div>\n<div>\n	&nbsp;</div>\n<div>\n	Information Search Engine, Multimedia Security, Computer Vision, Information Retrieval, Intelligent System, Distributed Computing System, Mobile Processing, Next Network Generation, Computer Network Security, Natural Language Processing, Business Process, Cognitive Systems.</div>\n<div>\n	&nbsp;</div>\n<div>\n	Data and Software engineering</div>\n<div>\n	&nbsp;</div>\n<div>\n	Software Engineering (Software: Lifecycle, Management, Engineering Process, Engineering Tools and Methods), Programming (Programming Methodology and Paradigm), Data Engineering (Data and Knowledge level Modeling, Information Management (DB) practices, Knowledge Based Management System, Knowledge Discovery in Data)</div>\n<div>\n	&nbsp;</div>\n<div>\n	Biomedical Engineering</div>\n<div>\n	&nbsp;</div>\n<div>\n	Biomedical Physics, Biomedical Transducers and instrumentation, Biomedical System Design and Projects, Medical Imaging Equipment and Techniques, Telemedicine System, Biomedical Imaging and Image Processing, Biomedical Informatics and Telemedicine, Biomechanics and Rehabilitation Engineering, Biomaterials and Drug Delivery Systems.</div>\n', '0000-00-00 00:00:00');

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
  `tanggal_submit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`id_paper`, `judul`, `abstrak`, `keyword`, `kategori`, `pernyataan_originial`, `tanggal_submit`, `id_user`) VALUES
(57, 'adasd', 'dasd', 'dasd', 'mechanical engineering', 'paper10.pdf', '2018-12-05 14:50:51', '24'),
(58, 'fafa', 'fafa', 'fafaf', 'mechanical engineering', 'paper11.pdf', '2018-12-05 15:31:25', '24'),
(59, 'dasd', 'dasdas', 'dasdasd', 'mechanical engineering', 'original_letter.pdf', '2018-12-05 15:36:05', '24'),
(60, 'Teknik SEO bagi pemula untuk blogsopt dan wordpress', 'fasdas', 'upload', 'electrical engineering', 'original_letter1.pdf', '2018-12-05 15:43:20', '24'),
(61, 'Teknik SEO bagi pemula untuk blogsopt dan wordpress', 'dadas', 'dasd', 'mechanical engineering', 'original_letter2.pdf', '2018-12-05 15:43:57', '24');

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
(31, '57', '32', '1'),
(32, '58', '33', '1'),
(33, '59', '34', '1'),
(34, '60', '35', '1'),
(35, '61', '36', '1');

-- --------------------------------------------------------

--
-- Table structure for table `paper_file`
--

CREATE TABLE `paper_file` (
  `id_paper_file` int(11) NOT NULL,
  `id_paper` varchar(255) NOT NULL,
  `file_paper` varchar(255) NOT NULL,
  `komentar_author` varchar(255) NOT NULL,
  `komentar_admin` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paper_file`
--

INSERT INTO `paper_file` (`id_paper_file`, `id_paper`, `file_paper`, `komentar_author`, `komentar_admin`, `tanggal`, `status`) VALUES
(51, '57', 'paper.docx', '', '', '2018-12-04 17:00:00', 0),
(52, '58', 'paper1.docx', '', '', '2018-12-04 17:00:00', 0),
(53, '59', 'paper2.docx', '', '', '2018-12-04 17:00:00', 0),
(54, '60', 'paper3.docx', '', '', '2018-12-04 17:00:00', 0),
(55, '61', 'paper4.docx', '', '', '2018-12-05 15:43:57', 0);

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

-- --------------------------------------------------------

--
-- Table structure for table `revisi`
--

CREATE TABLE `revisi` (
  `id_revisi` int(11) NOT NULL,
  `id_paper` varchar(255) NOT NULL,
  `file_paper` varchar(255) NOT NULL,
  `komentar` text NOT NULL,
  `pengirim` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `revisi`
--

INSERT INTO `revisi` (`id_revisi`, `id_paper`, `file_paper`, `komentar`, `pengirim`, `status`, `tanggal`) VALUES
(27, '49', '49-20181205.pdf', 'Kurang dalam penulisan', '', 2, '2018-12-05 05:40:10');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id_setting` int(11) NOT NULL,
  `nama_website` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_setting`, `nama_website`, `keterangan`, `alamat`, `logo`) VALUES
(1, 'IJEAT', 'International Journal Engineering and Applied Technology (IJEAT)', '', '');

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
(25, 'Admin', 'Mr.', '<p>\r\n	Cibolang</p>\r\n', '<p>\r\n	Cisaat</p>\r\n', 'Sukabumi', 'Indonesia', '081615399070', 'admin@admin.com', '43152', 'Nusa Putra University', 'admin', '', 'admin', 'admin', '2018-12-01 18:42:48');

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
-- Indexes for table `revisi`
--
ALTER TABLE `revisi`
  ADD PRIMARY KEY (`id_revisi`);

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
  MODIFY `id_author` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id_jurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jurnal_paper`
--
ALTER TABLE `jurnal_paper`
  MODIFY `id_jurnal_paper` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id_page` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paper`
--
ALTER TABLE `paper`
  MODIFY `id_paper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `paper_author`
--
ALTER TABLE `paper_author`
  MODIFY `id_paper_author` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `paper_file`
--
ALTER TABLE `paper_file`
  MODIFY `id_paper_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id_partner` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `revisi`
--
ALTER TABLE `revisi`
  MODIFY `id_revisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
