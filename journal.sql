-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2019 at 10:05 AM
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
(3, 'Anggy Pradiftha Junfithrana', 'Indonesia', 'mr.pradifta@nusaputra.ac.id', 'Universitas Nusa Putra'),
(4, 'Ade Sana Ruhiyat', 'Indonesia', 'adesana.sana7@gmail.com', 'Universitas Nusa Putra'),
(5, 'Asril Adi Sunarto ', 'Indonesia', 'asril_adi83@yahoo.com', 'Universitas Nusa Putra'),
(6, 'Marina Artiyasa', 'Indonesia', 'bundahamka@yahoo.co.id', 'Universitas Nusa Putra'),
(7, 'Sandi Gumilar', 'Indonesia', '', 'Universitas Nusa Putra'),
(8, 'Mia Arma Desima', 'Indonesia', '', 'Universitas Nusa Putra'),
(9, 'Sartam', 'Indonesia', '', ''),
(10, 'Nunik Destria', 'Indonesia', 'niek_dec@yahoo.com', 'Universitas Nusa Putra'),
(11, 'Moedjiono', 'Indonesia', 'moedjiono@gmail.com', 'Universitas Nusa Putra'),
(12, 'Muhamad Muslih', 'Indonesia', 'muhamad.muslih@nusaputra.ac.id', 'Universitas Nusa Putra'),
(13, 'Dudih Gustian', 'Indonesia', 'gustiandudih@gmail.com', 'Universitas Nusa'),
(15, 'Yudinata.ST', 'Indonesia', '', 'Universitas Nusa Putra'),
(16, 'Carwan', 'Indonesia', '', 'Universitas Nusa Putra'),
(17, 'Inen Karyadi', 'Indonesia', '', 'Universitas Nusa Putra'),
(18, 'Muhammad Enduh', 'Indonesia', '', 'Universitas Nusa Putra'),
(19, 'Iyus Maulana', 'Indonesia', '', 'Universitas Nusa Putra'),
(20, 'Agung Nurdiansyah', 'Indonesia', '', 'Universitas Nusa Putra'),
(21, 'Ujang Asep Rustandi', 'Indonesia', '', 'Universitas Nusa Putra'),
(22, 'Ujang Sanwasi', 'Indonesia', '', 'Universitas Nusa Putra'),
(23, 'Anang Mulyana', 'Indonesia', '', 'Universitas Nusa Putra'),
(24, 'Dini Septiani', 'Indonesia', '', 'Universitas Nusa Putra'),
(26, 'Herdy Oktaviana Nugraha', 'Indonesia', '', 'Universitas Nusa Putra'),
(27, 'Mahpudin', 'Indonesia', '', 'Universitas Nusa Putra'),
(28, 'Robes Madyana', 'Indonesia', '', 'Universitas Nusa Putra'),
(29, 'Yudha Putra', 'Indonesia', 'mailto:yudha.putra@nusaputra.ac.id', 'DEPARTEMEN TEKNIK ELEKTRO UNIVERSITAS NUSA PUTRA'),
(30, 'Vina Hermayanti', 'Indonesia', 'vina.hermayanti@nusaputra.ac.id', 'DEPARTEMEN TEKNIK ELEKTRO UNIVERSITAS NUSA PUTRA'),
(31, 'Fitri Sondang', 'Indonesia', 'fitri.sondang@nusaputra.ac.id', 'Universitas Nusa Putra'),
(32, 'Dhea Noer Fatimah', 'Indonesia', 'dhea.noer@nusaputra.ac.id', 'Universitas Nusa Putra'),
(33, 'Rico Sitohang', 'Indonesia', 'rico.sitohang@nusaputra.ac.id', 'Universitas Nusa Putra'),
(34, 'Achmad Dayari', 'Indonesia', 'achmad.dayari@nusaputra.ac.id', 'Universitas Nusa Putra'),
(35, 'Indra Yustiana', 'Indonesia', 'indra.yustiana@nusaputra.ac.id', 'Universitas Nusa Putra'),
(36, 'Somantri', 'Indonesia', 'somantri@nusaputra.ac.id', 'Universitas Nusa Putra'),
(37, 'Felki Fikiansyah', 'Indonesia', 'felki.fikiansyah@nusaputra.ac.id', 'Universitas Nusa Putra'),
(38, 'Dini Oktarina Dwi Handayani', 'Indonesia', 'dini.odh@nusaputra.ac.id', 'Universitas Nusa Putra'),
(39, 'Muhammad Anja Pasaribu', 'Indonesia', 'anja.pasaribu@nusaputra.ac.id', 'Universitas Nusa Putra'),
(40, 'Sudin Saepudin', 'Indonesia', 'sudin.saepudin@nusaputra.ac.id', 'Universitas Nusa Putra'),
(41, 'Yufriana Imamulhak', 'Indonesia', 'yufriana.imamulhak@nusaputra.ac.id', 'Universitas Nusa Putra'),
(42, 'Jelita Asian', 'Indonesia', 'jelita.asian@nusaputra.ac.id', 'Universitas Nusa Putra'),
(43, 'Asep Ramdan', 'Indonesia', 'asep.ramdan@nusaputra.ac.id', 'Universitas Nusa Putra'),
(44, 'Ikhsan', '', 'ikhsan.thohir@gmail.com', 'Nusa Putra University');

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
(2, 'REKAYASA', '2015', '1', 1, '', NULL, '3', '2015-01-20'),
(3, 'REKAYASA', '2017', '5', 1, '', NULL, '1', '2015-01-20');

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
(2, '2', '3', 6),
(3, '2', '2', 7),
(4, '2', '4', 8),
(5, '2', '5', 9),
(6, '2', '8', 0),
(7, '2', '7', 1),
(8, '2', '6', 2),
(9, '2', '10', 3),
(10, '2', '11', 4),
(11, '2', '9', 5),
(12, '3', '12', 8),
(13, '3', '18', 0),
(14, '3', '22', 1),
(15, '3', '21', 2),
(16, '3', '15', 3),
(17, '3', '13', 4),
(18, '3', '19', 5),
(19, '3', '17', 6),
(20, '3', '16', 7);

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
(2, 'RANCANG BANGUN ALAT BANTU JALAN UNTUK PENYANDANG TUNA NETRA BERBASIS ARDUINO', '<p>\n	Penyandang tuna netra dewasa ini masih memiliki kesulitan dalam melakukan aktifitasnya terutama dalam masalah mobilitas di dalam masyarakat. Hal ini tentunya diakibatkan masih minimnya sarana dan prasarana yang dapat menunjang para penyandang tuna netra dalam melakukan kegiatan sehari-hari. Salah satu fasilitas yang biasa digunakan adalah tongkat tuna netra, dengan tongkat ini para penyandang tuna netra cukup terbantu terutama ketika berjalan, namun tongkat konvensional tersebut memiliki keterbatasan, salah satunya adalah tidak dapat mendeteksi keberadaan objek yang berada diluar dari jangkauan tongkat tersebut. Dengan begitu pada penelitian ini dikembangkan sebuah konsep alat bantu jalan bagi penyandang tuna netra dengan mendesain sebuah perangkat baru yang dapat menutupi keterbatasan yang ada pada tongkat konvensional. alat yang dirancang memanfaatkan teknologi mikrokontoler dengan system minimum arduino, sensor ultrasonik, dan motor dc.&nbsp;&nbsp; Hasil penelitian menunjukkan bahwa alat yang dirancang dapat mendekteksi jarak maksimum 310 cm dengan margin error antara 0.2% - 5%.</p>\n', 'Tuna netra, mobilitas, arduino, ultrasonik.', '', '', '', 'cee44-anggy-pradiftha-junithrana-dan-ade-sana-ruhiyat-.pdf', '2015-01-19 17:00:00', ''),
(3, 'PERBANDINGAN PROGRAM SEQUENCE ALIGNMENT', '<div>\n	Multiple Sequence Alignment merupakan metode untuk menemukan kemiripan diantara banyak urutan biologis</div>\n<div>\n	(deoxyribonucleic acid dan protein) yang salah satu algoritmanya menggunakan teknik dynamic programming Needlemen&ndash;</div>\n<div>\n	Wunsch dengan kompleksitas O(n2). Penelitian ini bertujuan untuk mengembangkan program Sequence Alignment dengan</div>\n<div>\n	menggunakan algoritma Needlemen&ndash;Wunsch yang menjajarkan banyak urutan. Data organisme berasal dari NCBI yaitu</div>\n<div>\n	Arabidopsis thaliana, Solanum lycopersicum 2, Lycopersicum, Solanum2 lycopersicum. Program beta ini dibandingkan dengan</div>\n<div>\n	program lainnya yang sudah ada. Hasilnya terdapat selisih hingga 10% perbedaan skor kemiripan antara program yang ada.</div>\n', 'Sequence Alignment, Needlemen-Wunsch, Dynamic Programming, Multiple Sequence Alignment.', '', '', '', '55ed4-asril-adi-sunarto.pdf', '2015-01-19 17:00:00', ''),
(4, 'RANCANG BANGUN ANTENA HELIX DAN SIMULASI DENGAN SOFTWARE MMANAGAL UNTUK APLIKASI PENGUAT WIFI', '<div>\n	Antena helix terdiri dari konduktor tunggal atau multi konduktor terbuka yang berbentuk helix. Antena Helix merupkan</div>\n<div>\n	antena yang memiliki bentuk tiga dimensi. Bentuk dari antena helix menyerupai per atau pegas dan diameter serta jarak antar</div>\n<div>\n	lilitan berukuran tertentu. Penelitian ini bertujuan untuk merancang penguat sinyal wifi pada frekuensinya 2.4 GHZ. Bahan yang</div>\n<div>\n	digunakan berupa pipa paralon, kawat tembaga, berbagai konektor dan adaptor wireless dan berbagai komponen lainnya. Cara</div>\n<div>\n	pembuatannya ialah dengan cara menghitung parameter2 antena helix lalu Simulasi dengan software mmmanagal. Selanjutnya</div>\n<div>\n	diuji dengan software wirelesmon untuk menguji kekuatan sinyal wifi. Hasilnya berdasarkan Mmanagal, pola radiasi yang</div>\n<div>\n	dipancarkan mencapai Gin a: 4,5 dBi horizontal polarization, F/B: -0,41dB; rear azim 120 dgelev 60dg, Frekuensi 2400MHz,</div>\n<div>\n	impedansi R27.9 dan jX -430.9, Elev: 64.4dg real GND: 0,50 m height. Selain itu berdasarkan wirelesmon, kekuatan sinyal wifi</div>\n<div>\n	meningkat dari 47% menjadi 55%.</div>\n', 'Antena helix, wifi, frekuensi, mmanagal, wirelesmon.', '', '', '', 'b5553-marina-artiyasa-dan-sandi-gumilar.pdf', '2015-01-19 17:00:00', ''),
(5, 'RANCANG BANGUN KIT PRAKTIKUM RANGKAIAN ELEKTRONIKA DIGITAL', '<div>\n	Peran teknologi dewasa ini telah berkembang dengan pesat. Hampir seluruh peralatan elektronika menggunakan sistem digital.</div>\n<div>\n	Rangkaian digital banyak digunakan untuk pengendalian proses. Untuk mempermudah penggunaaan rangkaian digital perlu suatu rangkaian alat</div>\n<div>\n	praktikum. Penelitian ini bertujuan untuk membuat suatu rancang bangun kit praktikum rangkaian elektronik digital untuk mempermudah</div>\n<div>\n	praktikum mata kuliah rangkaian digital. Hasilnya, kit praktikum rangkaian elektrnonika digital dapat membantu dalam perkulian rangkaian</div>\n<div>\n	digital.</div>\n', 'Elektronika, Rangkaian Digital, Kit Praktikum', '', '', '', 'a237c-mia-arma-desima-dan-sartam.pdf', '2015-01-19 17:00:00', ''),
(6, 'PROTOTYPE SISTEM PENDUKUNG KEPUTUSAN PENERIMA BEASISWA DENGAN INTEGRASI METODE FUZZY C-MEANS (FCM) CLUSTERING DAN METODE SIMPLE ADDITIVE WEIGHTING (SAW) Studi Kasus : Sekolah Tinggi Teknologi Nusa Putra', '<p>\n	Mahasiswa merupakan agen perubahan (agent of change) yang akan menjadi ujung tombak dalam perubahan yang diharapkan memberi dampak baik kepada keluarga, masyarakat, Negara dan agama. Diantara sekian banyak mahasiswa yang mengenyam pendidikan di perguruan tinggi, tidak semuanya bisa menyelesaikan studinya karena berbagai factor yang salah satunya adalah faktor kekurangan ekonomi. Disinilah beasiswa dapat menunjukan manfaatnya. Program beasiswa diadakan untuk meringankan beban mahasiswa dalam menempuh masa studi, khususnya dalam masalah biaya. Salah satu pengambilan keputusan yang dapat dilakukan dengan menggunakan integrasi Metode <em>Fuzzy C-Means (FCM) Clustering</em> dan Metode <em>Simple Additive Weighting (SAW)</em>. Penilaian dilakukan dengan cara menetukan pengelompokan atau peng<em>cluster</em>an, kemudian menghitung indeks XB (Xie-Beni) pada tiap &ndash; tiap cluster yang telah terbentuk sehingga dari perhitungan tersebut diketahui cluster mana yang paling baik yang dapat dijadikan alternatif untuk pengambilan keputusan, setelah itu dilakukan proses perangkingan atau pembobotan dari setiap klaster yang akan menentukan alternatif yang optimal yaitu calon mahasiswa terbaik. Hasil penelitian ini adalah dimana penentuan penerima beasiswa di Sekolah Tinggi Teknologi Nusa Putra Sukabumi lebih objektif dan membuat keputusan yang lebih efisien.</p>\n<p>\n	&nbsp;</p>\n', 'Fuzzy C-Mean (FCM) Clustering, Simple Additive Weighting (SAW), Sistem Pengambilan Keputusan, indeks XB (Xie-Beni), Beasiswa', '', '', '', '381e1-nunik-destria.pdf', '2015-01-19 17:00:00', ''),
(7, 'PENGEMBANGAN E-MARKETING PENERIMAAN MAHASISWA BARU (PMB) DENGAN MENGGUNAKAN METODE SERVICE ORIENTED ARCHITECTURE (SOA) : STUDI KASUS PADA STT NUSA PUTRA SUKABUMI', '<div>\n	Penerimaan Mahasiswa Baru (PMB) dalam perguruan tinggi merupakan aspek penting yang harus dikelola dengan baik</div>\n<div>\n	dan terencana, Hal ini dilakukan karena dengan konsep konvensional sistem marketing dapat memberikan kesulitan</div>\n<div>\n	untuk sekolah dalam penyerahan dokumen pendaftaran PMB dan Program Beasiswa. Service-Oriented Architecture</div>\n<div>\n	(SOA) dapat menjadi solusi masalah tersebut. Konsep service-orientation menjanjikan agility dan reusability dari</div>\n<div>\n	service-service di suatu aplikasi. Penelitian ini memaparkan mengenai Pengembangan E-Marketing PMB pada divisi</div>\n<div>\n	PMB di STT Nusa Putra Sukabumi yang agile dan reusable berbasis SOA dengan implementasi pada web service.</div>\n<div>\n	Hasil dari penelitian ini membuktikan bahwa Pembangunan Sistem E-Marketing PMB dengan Arsitektur SOA pada</div>\n<div>\n	Divisi PMB dapat memberikan kemudahan kepada pengguna sistem dalam hal ini Divisi PMB dan sekolah yang</div>\n<div>\n	menjadi mitra STT Nusa Putra Sukabumi, hal ini terlihat dari tingkat kepuasan pengguna yang dilakukan dengan</div>\n<div>\n	menyebarkan kuesioner ke pengguna sistem, dan hasilnya sebesar 80% pengguna menyatakan puas dengan sistem EMarketing</div>\n<div>\n	PMB di STT Nusa Putra Sukabumi, dengan nilai korelasi variabel X terhadap Y sebesar 0,651 dengan</div>\n<div>\n	derajat keeratan cukup kuat, artinya semakin baik penerapan Sistem E-Marketing dengan metode SOA, maka akan</div>\n<div>\n	semakin baik sistem E-Marketing PMB di STT Nusa Putra Sukabumi.</div>\n', 'soa, cloud computing, E-Marketing, PMB, Arsitektur SOA', '', '', '', '440c4-muhamad-muslih.pdf', '2015-05-19 17:00:00', ''),
(8, 'KAJIAN KINERJA GURU BERDASARKAN METODE ADAPTIVE NEURO FUZZY INFERENCE SYSTEM  UNTUK MENGUKUR KELAYAKAN SERTIFIKASI : STUDI KASUS SMK NEGERI 1 KOTA SUKABUMI', '<p>\n	In order to improve the quality of national education , the national government through the Ministry of Education issued a certification policy . This of course makes appeal to the community to be part of the program , many of them choose to become teachers and lecturers, though not from college -based education . One factor is the main attraction is the allowance that would be obtained for Teachers and Lecturers who have passed the certification test . Government through legislation Teachers and Lecturers , issued a regulatory policy that can later be used as the basis to establish the feasibility of Teachers and Lecturers as a professional , so that the profession is entitled to benefits . However, field conditions , was found several irregularities that exist in determining the feasibility of a teacher especially in obtaining such benefits . Therefore , the system created using the Adaptive Neuro Fuzzy Inference System ( ANFIS ) , a case that condition is not expected to happen again . In this study provides an overview of the performance appraisal of teachers in order to obtain certification allowance with some competencies being assessed . ANFIS with hybrid modeling algorithm with input parameter &quot; trimf &quot; , providing improved accuracy with field assessment sequare root mean error 7.8166 x 10-5 .</p>\n', 'Certification, Supervision, Adaptive Neuro Fuzzy Inference Syste, Root Mean Error Sequare', '', '', '', '27827-dudih-gustian.pdf', '2015-01-19 17:00:00', ''),
(9, 'SUMBER ENERGI LISTRIK DARI SARI BUAH BELIMBING WULUH (AVVERHOA BILIMBI)', '<div style=\"text-align: justify;\">\n	Lately, energy is a topical issue in the world. Increased energy demand caused by population growth and resource depletion of world oil reserves as well as problems of fossil fuel energy put pressure on a lot of countries to immediately produce and use renewable energy. Increasing electricity rates, plus there are many Indonesian citizens, especially in rural areas untouched electricity, therefore it is necessary to develop alternative sources of electrical energy that is easy and inexpensive. In response, we are as students have the initiative to carry out a research in order to qualify the final project D3 and at the same time meet the challenges which needy people face, especially in my area, which incidentally is in desperate need of a renewable energy in order to reduce usage of nonrenewable electrical energy, one of which by utilizing star fruit juice as an alternative source of electrical energy. Because the results of our research and experimentation, star fruit have fairly high acidity and contain chemicals, among others; saponins, tannins, glucoses, calcium oxalate, sulfur, formic acid, peroxide, and potassium citrate. So the fruit star fruit can potentially generate alternative power.</div>\n', 'source, enegri electricity, alternative, starfruit.', '', '', '', '765fc-yudinata-dkk.pdf', '2015-01-19 17:00:00', ''),
(10, 'RANCANG BANGUN DAN IMPLEMENTASI KINCIR ANGIN DI PANTAI SELATAN JAMPANG KULON', '<p>\n	<strong>Wind is a clean alternative energy sources and environment-friendly. The conversion of wind energy into electrical energy through a two-stage i.e. Windmill to convert wind energy into kinetic energy (rotation), the resulting rotation used to run electric generators to convert the kinetic energy into electrical energy. </strong></p>\n<p>\n	<strong>There are two known windmill type i.e. Horizontal Axis Windmill (was HAWT) and Vertical Axis Windmill (VAWT). Many advantages &ndash; Excellence was HAWT and VAWT but there are also disadvantages or obstacles, namely efficiency lower horizontal axis windmill design of this new model is focused on improving efficiency, with models that can lower the energy of the barrier and expanding energy from the collector (boosters) will increase the efficiency and lower the minimum wind speeds that can rotate the paddles. </strong></p>\n<p>\n	<strong>Windmill designed it had 8 vanes finned, turbine vanes when contrary to the direction of the wind and spin the rotor then fins &ndash; the fin will turn so that it will look for the contrary wind energy when the wind direction with the position and rotation of the rotor and fins &ndash; the fins will remain silent towards the encouragement of wind itself so as to increase the thrust. Mathematical models with a dimensionless number group methods obtained the speed of the rotor, and energy round the rotor. Constants in the equation will be obtained by comparison of the data counts and tara experiments. This new design can improve the efficiency of energy conversion and lowered the minimum wind speed for a rotating wheel,windmills can be applied in all locations that has the speed and direction of the wind changed</strong></p>\n<p>\n	&nbsp;</p>\n', 'HAWT, Windmill , rene wable energy, wind turbine', '', '', '', '3545a-iyus-maulana-dkk.pdf', '2015-01-19 17:00:00', ''),
(11, 'RANCANG BANGUN SISTEM STABILISASI GEOTEKNIK DENGAN KONTROL SISTEM DRAINASE PADA PLTP GUNUNG SALAK SUKABUMI', '<div>\n	Indonesia is a country rich in natural resources, one of which is geothermal. They can be utilized as a source of renewable energy using technology Geothermal Power Plant (PLTP). Such recourses are situated in the mountainous regions dominated by steep slopes where the possibility of landslides is high. A disaster may lead to the economic losses of geothermal power plants managers and the consumers of electricity. The study was conducted to establish a system of geotechnical slope stabilization and improve the unstable area to control the drainage system which can project these areas as well as part of the stabilization control of all assets around the project site. The gain information for this paper, literature and field observations were used as methods. Development of the system is made by adapting literature related to the topic as a method of monitoring the field observations results by using a necessary reference and suitability of monitoring methods. The final result of this study is an engineering and construction which have being done in 2015 by the management of geothermal power plants as one of the measures for asset management.</div>\n', 'Engineering and construction in 2015, Geothermal', '', '', '', '4d32c-anang-mulyana-dkk.pdf', '2015-01-19 17:00:00', ''),
(12, 'RANCANG BANGUN ADJUSTABLE POWER SUPPLY 1,25 V-25 V MENGGUNAKAN IC LM317', '<p>\n	Adjustable power supply. Adjustable power supply ini terbuat dari trafo CT 2A, Ic LM317, elco, dioda, resistor. Power supply ini juga dapat diatur mulai sesuai kebutuhan mulai dari tegangan 1,25v-25v dengan arus 2A. Berdasarkan prinsip kerja penyearah setengah gelombang center tap (full wave rectifier) ternyata memiliki kelemahan sehingga tidak maksimal untuk digunakan, kelemahannya adalah arus listrik yang mengalir kebeban hanya separuh dari setiap satu cycle. Hal ini menyulitkan dalam proses filtering (penghalusan). Untuk mengatasi kelemahan ini adalah penyearah gelombang penuh. Rectifier gelombang penuh adalah equivalen dengan dua kali rectifier setengah gelombang, sebab center tap masing-masing rectifier mempunyai tegangan masukan yang equal dengan setengah tegangan sekunder. Kelebihannya bisa dipakai ngecharge alat apapun yang tegangannya disebutkan diatas selama ada colokan yang cocok yang bisa dihubungkan ke output. Kekurangan dari alat ini yaitu tegangannya hanya dari 3,45 V-21, V. Dari hasil pengetesan power supply buatan sendiri memakai osiloskop analog didapatkan bahwa hasil tegangan mendekati akurat, pada 5 Volt 96%, 10 Volt 98%, 15V 98%, 20 V 99%, jadi didapatkan ketelitian antara 96% sampai 99%.</p>\n', 'Power supply, IC LM317', '', '', '', 'dcb43-1-edisi-v-jurnal-rekayasateknologinusaputra-yudha-putra.pdf', '2016-12-31 17:00:00', ''),
(13, 'ANALISIS UJI KELAYAKAN PERKERASAN KAKU (RIGID PAVEMENT) BETON K350 PADA RUAS JALAN PEMBANGUNAN KOTA SUKABUMI-SEGMEN I', '<div style=\"text-align: justify;\">\n	Jalan raya merupakan prasarana transportasi yang memegang peranan penting dalam sektor pembangunan. Perencanaan perancangan stuktur jalan raya harus mempunyai nilai rancang yang kuat, stabil, aman, dan mampu bertahan sampai usia yang direncanakan. Seperti halnya pada Jalan Pembangunan, perancangan dan perencanaan jalan dilakukan dengan menggunakan metode Bina Marga Departemen Pekerjaan Umum. Kondisi Jalan Pembangunan Kota Sukabumi merupakan jalan lama yang menggunakan perkerasan lentur, dimana jalan ini mengalami kerusakan yaitu berlubang dan bergelombang. Sehingga akan dilakukan perubahan perkerasan dengan menggunakan Perkerasan Kaku (Rigid Pavement). Ruas Jalan Pembangunan Kota Sukabumi mengalami kerusakan sepanjang 1.150 Km. Dari hasil analisis dan pembahasan ini diperoleh kesimpulan bahwa sistem perencanaan perkerasan kaku pada Jalan Pembangunan Kota Sukabumi adalah dengan Metode Bina Marga, pada ruas jalannya menggunakan Beton K-350. Perolehan kuat tekan pada umur beton 3 hari pada nilai hasil estimasi ke 28 hari yaitu mencapai 367.85 Kg/cm&sup2; dan pada umur beton 7 hari yaitu 381.39 Kg/cm&sup2;, yaitu dengan cara membagi hasil nilai kubus (Kg/cm&sup2;) dengan nilai ratio umur beton. Nilai ratio umur beton 3 hari yaitu 0.4 sedangkan umur beton 7 hari yaitu 0.65, maka tidak perlu lagi dilakukannya pengetesan umur beton 14 hari, 21 hari dan juga usia beton 28 hari.</div>\n', 'Perkerasan kaku, Metode Bina Marga', '', '', '', '2eb95-2-edisi-v-jurnal-rekayasateknologinusaputra-fitri-sondang.pdf', '2018-12-25 17:00:00', ''),
(14, '', '', '', '', '', '', '', '0000-00-00 00:00:00', ''),
(15, 'ANALISIS TOKOH BERDASARKAN TEORI PSIKOANALISIS SIGMUND FREUD DALAM NASKAH DRAMA BADAI SEPANJANG MALAM KARYA MAX ARIFIN SERTA IMPLIKASINYA BAGI PEMBELAJARAN SASTRA', '<div style=\"text-align: justify;\">\n	Berdasakan teori psikoanalisis Sigmund Freud dapat dikemukankan bahwa tokoh dalam naskah drama memiliki tiga struktur kepribadian yaitu Id, Ego dan Super Ego. Id yaitu struktur biologis, Ego struktur psikologis dan Super Ego adalah struktur sosiologis. Hasil analisis tokoh berdasarkan teori psikoanalisis Sigmud Freud dalam naskah drama Badai Sepanjang Malam karya Max Arifin terdapat 2 kutipan struktur Id, 39 struktur Ego, dan 20 struktur Super Ego. Dengan demikian struktur Ego lebih dominan dibandingkan dengan struktur Id dan struktur Super Ego, hasil ini bisa menunjukan bahwa tokoh dalam naskah banyak sekali menunjukan keegoan dirinya sebagai bentuk pembelaan diri tokoh atas pemikiran dan pendapatnya dan juga analisis tokoh berdasarkan teori psikoanalisis Sigmud Frued dapat diaplikasikan dalam pembelajaran apresiasi sastra di SMA karena struktur Ego adalah struktur psikologi pada manusia, sementara anak usia SMA adalah anak yang sedang berkembang dalam psikologinya. Manfaat dari penelitian ini terhadap pembelajaran apresiasi sastra di SMA ialah sebagai alternatif dalam pembelajaran psikologi sastra dan bisa sebagai masukan kepada guru dalam meningkatkan pembelajaran apresiasi sastra terutama pada siswa SMA, menambah wawasan dan pengetahuan siswa mengenai tokoh yang terdapat dalam naskah drama Badai Sepanjang Malam karya Max Arifin.</div>\n', 'Psikoanalisis, Naskah Drama, Implikasi', '', '', '', '3b46d-3-edisi-v-jurnal-rekayasateknologinusaputra-ahmad-dayari.pdf', '2018-12-25 17:00:00', ''),
(16, 'PERANCANGAN TATA KELOLA KEAMANAN INFORMASI MENGGUNAKAN KERANGKA KERJA COBIT 5 DAN SNI ISO/IEC 27001:2013', '<div style=\"text-align: justify;\">\n	Pemanfaatan Teknologi Informasi (TI) dalam mendukung terselenggaranya pelayanan yang optimal menjadi kebutuhan utama organisasi saat ini, khususnya pada Badan Perencana Pembangunan Daerah Provinsi Jawa Barat. Akan tetapi, jaminan pengelolaan layanan yang baik dirasa belum maksimal tanpa adanya penggunaan sebuah standar. pemamfaatan teknologi informasi di badan penyelenggara pelayanan publik yang diharapkan tidak hanya kualitas layanannya saja yang meningkat tetapi juga adanya penjaminan keamanan yang sudah di standarkan. Akan tetapi, penggunaan sebuah standard dirasa belum maksimal melihat cakupan yang disediakan kurang luas sehingga diadakannya penggabungan beberapa standar dengan harapan standar-standar tersebut saling melengkapi. Dalam hal ini pemetaan SNI 27001 kedalam COBIT 5 akan meningkatkan kinerja dari framework dan sejalan dengan regulasi yang berlaku. Klausa SNI 27001 dipetakan kedalam control obyektif COBIT 5 yang berkaitan erat dengan aspek keamanan yaitu EDM03 Jaminan Optimasi Risiko, APO12 Pengaturan Risiko, APO13 Pengaturan Keamanan, BAI06 Pengaturan Perubahan dan DSS05 Manajemen Layanan Keamanan. Hasil dari penelitian yang didaapat melalui kuisoner dan wawancara menyatakan nilai kapabilitas sistem informasi BAPPEDA Jabar pada pada domain control akses dan media handling ada pada level 2 dan hendak dinaikan ke level 3. Rekomendasi yang diajukan adalah tahapan yang harus dilakukan BAPPEDa untuk menaikan level kapabilitasnya . Rekomendasi yang diajukan digunakan untuk menyusun dokumen kebijakan keamanan informasi di lingkungan kerja BAPPEDA Jabar pada domain control akses daan media handling</div>\n', 'SNI 27001, COBIT 5, EDM03, APO12,APO13, BAI06,DSS05, kapabilitas', '', '', '', '126e2-4.-edisi-v-jurnal-rekayasateknologinusaputra-indra.pdf', '2018-12-25 17:00:00', ''),
(17, 'PERANCANGAN JARINGAN VIRTUAL PRIVATE NETWORK (VPN) MENGGUNAKAN KERANGKA KERJA NIST SP 800-113 DALAM MENDUKUNG KEAMANAN E-GOVERNMENT', '<div style=\"text-align: justify;\">\n	High mobility of employees at the Office of Communications and Information Technology requires facilities for communicate and process information when employees are outside the office. The facility is in the form of internet network, and employees who are outside the office</div>\n<div style=\"text-align: justify;\">\n	can be connected in a computer network system. However, the internet network is a free network and can be accessed by anyone, so it has not guaranteed security. Data communications on the internet involves issues of security, ease and speed of transfer (data exchange). Designing Virtual Private Network Networks (VPNs) provides data confidentiality and security solution to internal resources located at the more secure Sukabumi City Office of Communication and Informatics (Diskominfo) The research method I used in this research is Network Development Life Cycle (NDLC) method with framework NIST SP 800-113. The life cycle of network system implementation is defined in a number of phases. namely: analysis, design, simulation prototype, implementation, monitoring and management. The author uses SSL-based VPN (Security Socket Layer) in this implementation. The results of this thesis research indicate that the application of Virtual Private Network (VPN) can streamline users in access network resources from outside network safely. The results also show that data send via VPN through a special path known as tunneling can not be detected by the sniffing program.</div>\n', 'VPN (Virtual Private Network), NIST SP 800-113, Network Development Life Cycle (NDLC), SSL, OpenVPN, e-government', '', '', '', '9c0b0-5.-edisi-v-jurnal-rekayasateknologinusaputra-somantri.pdf', '2018-12-25 17:00:00', ''),
(18, 'ANALISA INTERFERENSI WIRELESS TRAFFIC LIGHT TERHADAP REMOTE KUNCI MOBIL', '<div style=\"text-align: justify;\">\n	Lampu lalu lintas atau traffic light di gunakan untuk mengatur kelancaran di setiap persimpangan dengan cara memberikan kesempatan jalan setiap arah dengan cara bergantian .Karena fungsinya begitu penting maka lampu lalu lintas tersebut harus di kendalikan semudah mungkin . Sejalan dengan berkembangnya teknologi wireless sehingga pada saat ini untuk mengontrol setiap lampu sudah menggunakan wireless yang sebelumnya masih menggunakan jaringan kabel bawah tanah. Hal ini sangat memudahkan pemasangan Wireless traffic light tersebut sehingga para kontraktor untuk instalasi di lapangan tanpa harus melakukan penggalian kabel jaringan bawah tanah. Kedua system tersebut mempunyai frekwensi carier yang berdekatan yaitu 433 &ndash; 434 MHz. Untuk menganalisa interferensi tersebut di gunakan metode settingan variasi time delay dalam pancaran module wireless traffic light controller terhadap remote kunci mobil, hal ini untuk mencari settigan variasi time delay dapat meminilasir pengaruh wireless traffic light controller terhadap remote kunci mobil. Identifikasi frekwensi carier dari simulasi di lapangan terbuka wireless traffic light controller dan remote kunci mobil pada frekwensi 433 MHz dan 433 MHz. Dengan settingan variasi time delay 0s , 0,2s dan 0,5s selama experiment di lapangan terbuka . Hasil penelitian menunjukan pada time delay 0s dan 0,2s menunjukan probabillitas interferensi yang paling tinggi di atas 99 % terhadap remote kunci mobil. Untuk settingan time delay 0,5s pada wireless traffic light controller probabilitas interferensi 2% pada jarak 5 M terhadap remote kunci mobil.</div>\n', 'Adjacent Chanel, Interference, probability of interference, Remote Key Less Entry, Time Delay', '', '', '', '6a682-6.-edisi-v-jurnal-rekayasateknologinusaputra-felqi.pdf', '2018-12-25 17:00:00', ''),
(19, 'IMPLEMENTASI FUZZY LOGIC MAMDANI UNTUK MENENTUKAN KELAYAKAN KENAIKAN GAJI KARYAWAN', '<div style=\"text-align: justify;\">\n	Fuzzy logic is a multi-multi-logic form derived from fuzzy set theory to handle estimation reasoning. Fuzzy provides a means to represent and process subjective linguistic and attribute information from the real world. Fuzzy logic is an extension of Boolean Crisp logic to handle the concept of partial truth. The use of the Mamdani fuzzy method in research aims to determine the feasibility and unworthiness of employee salary increases. The feasibility of an employee can be assessed from the level of Self Ability (KD), Personal Development (PD), Personality (KB) in the assessment stage. The system designed using the tollbox in Matlab is expected to be implemented to help the company or personnel management in making decisions to determine the feasibility of employee salary increases.</div>\n', 'Fuzzy Logic, Mamdani, Matlab', '', '', '', '7b0df-7.-edisi-v-jurnal-rekayasateknologinusaputra-dini.pdf', '2018-12-25 17:00:00', ''),
(20, 'PENGARUH LOKASI TERHADAP KEPUTUSAN PEMBELIAN PENGUNJUNG DI MINIMARKET XYZ DI WILAYAH SUKABUMI', '<div style=\"text-align: justify;\">\n	Dalam situasi persaingan saat ini, perusahaan melakukan berbagai strategi untuk dapat mempertahankan dan meningkatkan kinerjanya. Salah satunya yaitu lokasi yang mudah dijangkau akan semakin banyak dikunjungi. Teori yang digunakan untuk keputusan pembelian adalah teori yang menyatakan lima tahapan pengambilan keputusan yaitu pengenalan masalah, pencarian informasi, evaluasi alternative, keputusan pembelian, dan perilaku pacsa pembelian. Teori lokasi yang digunakan adalah teori lokasi August Losch. Pendekatan yang digunakan pada penelitian ini adalah survey yang menggunakan sampel, karena dalam memberikan gambaran (deskripsi) atas suatu peristiwa atau gejala, menggunakan alat bantu statistic. Jenis penelitian adalah survey yang menggunakan sampel , yakni meliputi pengumpulan data untuk uji hipotesis atau menjawab pertanyaan mengenai status terakhir dari subjek penelitian. Adapun sifat penelitian adalah menguraikan atau menjelaskan (explanatory research) hubungan antar variabel penelitian dan menginterpretasikannya agar mampu menjawab rumusan masalah dan membuktikan hipotesis penelitian. Teknik pengumpulan data dilakukan melalui daftar pertanyaan (questionnaire) dan studi dokumentasi. Sampel dalam penelitian ini sebanyak 58 orang dari jumlah populasi 580 orang. Variabel diukur dengan skala likert. Pengujian hipotesis menggunakan analisis regresi linear sederhana melalui uji t dengan maksud untuk mengetahui pengaruh variable independen terhadap variable dependent pada tingkat kepercayaan 95 % ( &alpha; =0,05). Hasil pengujian dengan Uji t menunjukkan variable lokasi berpengaruh signifikan terhadap keputusan pembelian oleh pengunjung di Minimarket korelasi yang didapat sekitar r = 0,8166. Hal ini berarti bahwa lokasi dapat meningkatkan pembelian pengunjung.</div>\n', 'August Losch', '', '', '', 'c5c04-8.-edisi-v-jurnal-rekayasateknologinusaputra-sudin.pdf', '2018-12-25 17:00:00', ''),
(21, 'ANALISIS IMPLEMENTASI 2ND CARRIER HSDPA 15 CODE PADA JARINGAN WCDMA', '<div style=\"text-align: justify;\">\n	The third generation Wideband Technology Division Multiple Access (WCDMA) is currently the only mobile technology that offers various services such as voice, video and high-speed service (HSDPA). WCDMA uses a single frequency of 5 MHz at a rate of 3.84 Mcps access which is shared by all users for all services. Increased demand for various services, especially high-speed data service (HSDPA) affect air interface capacity, power and hardware that already exists are not sufficient, so it requires capacity expansion. In this study, the analysis performed on NodeB-NodeB capacity that has been done with the implementation of the 2nd carrier. There are several options for upgrading the capacity of such sectoral split, cell split, and the addition of carrier frequency. The addition of carrier is the most efficient way because there is no additional hardware, but the mobile operator shall have additional frequency license from regulator. Distribution strategy NodeB traffic handling in the 2nd carrier depends on a variety of businessoriented considerations that traffic release 99 or high-speed data service or both. Calculation and analysis aims to determine the maximum capacity of the channels that can be provided by the NodeB to the existing traffic after the addition of the carrier and to know the performance based on the value of the KPI (Key Performance Indicator) that have been determined.</div>\n', 'UMTS, WCDMA, Multiple Access, HSDPA', '', '', '', '86409-9.edisi-v-jurnal-rekayasateknologinusaputra-yufriana-imamulhak.pdf', '2018-12-25 17:00:00', ''),
(22, 'ANALISIS DAN PENGUJIAN 3G DAN 4G PADA INTERNET SERVICE PROVIDER (ISP) X DAN Y DAN OPTIMALISASI QUALITY OF SERVICE (QOS)', '<div style=\"text-align: justify;\">\n	Network communication technology is an interconnection circuit between technologies that are interconnected with each other. One of the wireless data technologies and services that is currently well-known and many 3G and 4G network users. With the network will facilitate users in the use of the internet in everyday life. However, with different access speeds, it is certainly necessary to test the network. Therefore, to get the quality of a network to provide good service it is necessary for Quality of service (QoS) services. Services in this test are focused on four parameters, namely: throughput, latency, jitter and packet loss. To measure the performance of 3G and 4G networks using Quality of Services (QoS), analysis and testing are used in order to see the representation of the current state. From these results, it can be concluded that there are differences in the results oftesting 3G and 4G networks. So 4G networks have twice as many tend to have increased throughput, latency, jitter and packet loss. However, from the second network technology can be used as a consideration for users in using the Internet according to their needs.</div>\n', 'QoS, Nperf,ping tools ,cmd.', '', '', '', 'd400e-10.edisi-v-jurnal-rekayasateknologinusaputra-jelita-asian.pdf', '2018-12-25 17:00:00', ''),
(23, 'RANCANG BANGUN ADJUSTABLE POWER SUPPLY 1,25 V-25 V MENGGUNAKAN IC LM317', 'asdasd', 'asdasd', 'industrial engineering', 'original_letter1.pdf', '', '', '2019-01-02 03:47:43', '24');

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
(3, '2', '4', '0'),
(4, '2', '3', '1'),
(5, '3', '5', '0'),
(6, '4', '5', '0'),
(7, '4', '6', '1'),
(8, '4', '7', '2'),
(9, '5', '8', '0'),
(10, '5', '9', '1'),
(11, '6', '11', '0'),
(12, '6', '10', '1'),
(13, '7', '12', '0'),
(14, '8', '13', '0'),
(15, '9', '16', '1'),
(16, '9', '17', '2'),
(17, '9', '18', '3'),
(18, '9', '15', '0'),
(19, '10', '20', '0'),
(20, '10', '19', '1'),
(21, '10', '21', '2'),
(22, '10', '22', '3'),
(23, '11', '23', '0'),
(24, '11', '24', '1'),
(25, '11', '26', '2'),
(26, '11', '27', '3'),
(27, '11', '28', '4'),
(28, '12', '6', '1'),
(29, '12', '30', '2'),
(30, '12', '29', '0'),
(31, '13', '32', '1'),
(32, '13', '31', '0'),
(33, '13', '33', '2'),
(34, '15', '34', '0'),
(35, '16', '35', '0'),
(36, '17', '12', '0'),
(37, '17', '36', '1'),
(38, '18', '37', '0'),
(39, '19', '38', '0'),
(40, '19', '13', '1'),
(41, '19', '39', '2'),
(42, '20', '40', '0'),
(43, '21', '41', '0'),
(44, '22', '43', '0'),
(45, '22', '42', '1'),
(46, '23', '44', '0');

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
(4, '1', '1-201812111.docx', '', 'This The new one', 'Still wrong in some part, ', '2018-12-11 18:18:00', 2),
(5, '12', 'paper.docx', '', '', 'kurang anu', '2018-12-12 06:01:56', 1),
(6, '12', '12-20181212.docx', '', 'ini revisinya', '', '2018-12-12 06:41:19', 2),
(8, '2', '2-20190104.docx', '', '', '', '2019-01-04 01:01:36', 1),
(9, '23', '23-20190104-rev.docx', '', '', '', '2019-01-04 02:16:47', 1);

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
(1, 'JURNAL UNIVERSITAS NUSA PUTRA', 'REKAYASA', '<p>\n	Jl. Raya Cibolang No.21</p>\n', 'cf94f-login-logo.png', '3c60d-jurnal-logo-rekayasa.png');

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
(27, 'Zaenal Alamysyah', 'Mr.', 'sukabumi', 'Jampang', 'Sukabumi', 'Afghanistan', '085793840191', 'zaenalalamsyah3@gmail.com', '43179', 'Universitas Nusa Putra', 'Choose Category', '', 'Bintang123', 'author', '2018-12-12 04:27:33'),
(31, 'Ikhsan Nusa Putra', 'Mr.', 'adasd', 'asdsa', 'Sukabumi', 'Åland Islands', '081615399070', 'ikhsan.thohir@nusaputra.ac.id', '43152', 'Nusa Putra University', 'employers', '', 'nusaputra', 'author', '2018-12-29 05:10:20');

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
  MODIFY `id_author` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id_jurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jurnal_paper`
--
ALTER TABLE `jurnal_paper`
  MODIFY `id_jurnal_paper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id_page` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paper`
--
ALTER TABLE `paper`
  MODIFY `id_paper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `paper_author`
--
ALTER TABLE `paper_author`
  MODIFY `id_paper_author` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `paper_file`
--
ALTER TABLE `paper_file`
  MODIFY `id_paper_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id_partner` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
