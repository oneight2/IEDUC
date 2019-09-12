-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2019 at 01:35 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ieduc`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `gambar`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `foto`) VALUES
(8, '5d6e7f1db9bb2.png'),
(9, '5d6e7f2c2d287.png'),
(10, '5d6e7f36d3a15.png'),
(11, '5d6e7f417bdf7.png');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `foto` text NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `foto`, `tahun`) VALUES
(2, '2.jpg', 2017),
(3, '3.jpg', 2018),
(4, '4.jpg', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `deskripsi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`deskripsi`) VALUES
('<p style=\"text-align: center;\">IEDUC cares more! The student\'s target is the tutor\'s target! IEDUC\'s tutors and staff believe that the success of the students is the real aim of the course. Each IEDUC\' tutor has the same burden as that of any student supervized. This makes all the tutors carry their high responsibility in day-to-day students\' development to achieve the students\' targets either in scores or skills. IEDUC offers 3 (three) streams of concentrations:</p>\r\n<p style=\"text-align: justify;\">1. Courses for those who want to study abroad in developed countries (scholarship or self financed), follow short courses, and apply for permanent resident. The programs are Preparations for IELTS, GMAT, GRE, TOEFL (Paper &amp; iBT), SAT, TOEIC, \"TPA\"</p>\r\n<p style=\"text-align: justify;\">2. Courses for executives, lecturers, or students who will attend or present their papers in international seminars, open or close international event, and those who have sufficient scores/ bands, yet need additional skills to succeed in their further study abroad. The programs are Giving Presentations, Writing, Giving speech, Conversation</p>\r\n<p style=\"text-align: justify;\">3. Courses for specific purposes for example for univerity students (depends on background study), fresh graduate/ jobseekers, children, teenagers, professionals (lawyers, businessmeen and many more), subjects of studies (mathematics, Physics, Chemistry, etc.), general English, Conversation with specific subjects</p>');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id_program` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id_program`, `judul`, `deskripsi`, `foto`) VALUES
(1, '  REGULAR/  SEMI INTENSIVE', '<p style=\"text-align: center;\"><strong>Durations</strong></p>\r\n<p style=\"text-align: center;\">2 months (20x meeting)</p>\r\n<p style=\"text-align: center;\"><strong>DAYS</strong></p>\r\n<p style=\"text-align: center;\">3 days a week</p>\r\n<p style=\"text-align: center;\"><strong>TIMES</strong></p>\r\n<p style=\"text-align: center;\">1,5 hours/day</p>\r\n<p style=\"text-align: center;\"><strong>PROGRAMS</strong></p>\r\n<ul>\r\n<li>IELTS Preparation</li>\r\n<li>TOEFL Paper-based/iBT Preparation</li>\r\n<li>TOEIC Preparation</li>\r\n<li>GMAT/GRE/SAT Preparation</li>\r\n<li>Communicative English</li>\r\n<li>Conversation</li>\r\n<li>Teenagers</li>\r\n<li>KIDS/Children</li>\r\n</ul>', 'about-mission.jpg'),
(2, '  INTENSIVE', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 0px 20px 20px; font-size: 14px; line-height: 24px; color: #333333; font-family: \'Open Sans\', sans-serif; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Durations</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 0px 20px 20px; font-size: 14px; line-height: 24px; color: #333333; font-family: \'Open Sans\', sans-serif; background-color: #ffffff; text-align: center;\">1 months (20x meeting)</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 0px 20px 20px; font-size: 14px; line-height: 24px; color: #333333; font-family: \'Open Sans\', sans-serif; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">DAYS</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 0px 20px 20px; font-size: 14px; line-height: 24px; color: #333333; font-family: \'Open Sans\', sans-serif; background-color: #ffffff; text-align: center;\">Study Everyday<br />(5 days a week)</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 0px 20px 20px; font-size: 14px; line-height: 24px; color: #333333; font-family: \'Open Sans\', sans-serif; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">TIMES</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 0px 20px 20px; font-size: 14px; line-height: 24px; color: #333333; font-family: \'Open Sans\', sans-serif; background-color: #ffffff; text-align: center;\">1,5 hours/day</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 0px 20px 20px; font-size: 14px; line-height: 24px; color: #333333; font-family: \'Open Sans\', sans-serif; background-color: #ffffff; text-align: center;\">3 hours/day</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 0px 20px 20px; font-size: 14px; line-height: 24px; color: #333333; font-family: \'Open Sans\', sans-serif; background-color: #ffffff; text-align: center;\">6 hours/day</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 0px 20px 20px; font-size: 14px; line-height: 24px; color: #333333; font-family: \'Open Sans\', sans-serif; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">PROGRAMS</span></p>\r\n<ul>\r\n<li>IELTS Preparation</li>\r\n<li>TOEFL Paper-based/iBT Prep.</li>\r\n<li>TOEIC Preparation</li>\r\n<li>GMAT/GRE/SAT Preparation</li>\r\n<li>Communicative English</li>\r\n<li>Conversation</li>\r\n<li style=\"text-align: justify;\">Teenagers</li>\r\n<li style=\"text-align: justify;\">KIDS/Children</li>\r\n</ul>', 'about-mission.jpg'),
(3, 'GROUP / COMPANY / INSITUTION', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 0px 20px 20px; font-size: 14px; line-height: 24px; color: #333333; font-family: \'Open Sans\', sans-serif; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Durations</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 0px 20px 20px; font-size: 14px; line-height: 24px; color: #333333; font-family: \'Open Sans\', sans-serif; background-color: #ffffff; text-align: center;\">1-6 months/<br />Time is negotiable</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 0px 20px 20px; font-size: 14px; line-height: 24px; color: #333333; font-family: \'Open Sans\', sans-serif; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">DAYS</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 0px 20px 20px; font-size: 14px; line-height: 24px; color: #333333; font-family: \'Open Sans\', sans-serif; background-color: #ffffff; text-align: center;\">Negotiable</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 0px 20px 20px; font-size: 14px; line-height: 24px; color: #333333; font-family: \'Open Sans\', sans-serif; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">TIMES</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 0px 20px 20px; font-size: 14px; line-height: 24px; color: #333333; font-family: \'Open Sans\', sans-serif; background-color: #ffffff; text-align: center;\">Negotiable</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 0px 20px 20px; font-size: 14px; line-height: 24px; color: #333333; font-family: \'Open Sans\', sans-serif; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">PROGRAMS</span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #666666; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li>IELTS Preparation</li>\r\n<li>TOEFL Paper-based/iBT Prep.</li>\r\n<li>TOEIC Preparation</li>\r\n<li>GMAT/GRE/SAT/NCLEX Prep.</li>\r\n<li>Communicative English</li>\r\n<li>Conversation</li>\r\n<li>Teenagers/KIDS/Children</li>\r\n<li>English for Bussiness</li>\r\n<li>Giving Presentation</li>\r\n<li>Others as required</li>\r\n</ul>', 'about-mission.jpg'),
(4, 'IN-HOUSE', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 0px 20px 20px; font-size: 14px; line-height: 24px; color: #333333; font-family: \'Open Sans\', sans-serif; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Durations</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 0px 20px 20px; font-size: 14px; line-height: 24px; color: #333333; font-family: \'Open Sans\', sans-serif; background-color: #ffffff; text-align: center;\">1-6 months/<br />Time is negotiable</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 0px 20px 20px; font-size: 14px; line-height: 24px; color: #333333; font-family: \'Open Sans\', sans-serif; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">DAYS</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 0px 20px 20px; font-size: 14px; line-height: 24px; color: #333333; font-family: \'Open Sans\', sans-serif; background-color: #ffffff; text-align: center;\">Negotiable</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 0px 20px 20px; font-size: 14px; line-height: 24px; color: #333333; font-family: \'Open Sans\', sans-serif; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">TIMES</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 0px 20px 20px; font-size: 14px; line-height: 24px; color: #333333; font-family: \'Open Sans\', sans-serif; background-color: #ffffff; text-align: center;\">Negotiable</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 0px 20px 20px; font-size: 14px; line-height: 24px; color: #333333; font-family: \'Open Sans\', sans-serif; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">PROGRAMS</span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #666666; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li>IELTS Preparation</li>\r\n<li>TOEFL Paper-based/iBT Prep.</li>\r\n<li>TOEIC Preparation</li>\r\n<li>GMAT/GRE/SAT/NCLEX Prep.</li>\r\n<li>Communicative English</li>\r\n<li>Conversation</li>\r\n<li>Teenagers/KIDS/Children</li>\r\n<li>English for Bussiness</li>\r\n<li>Giving Presentation</li>\r\n<li>Others as required</li>\r\n</ul>', 'about-mission.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `email` varchar(250) NOT NULL,
  `nomor_handphone` varchar(20) NOT NULL,
  `program` text NOT NULL,
  `tipe` varchar(250) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `nama`, `tgl_lahir`, `gender`, `email`, `nomor_handphone`, `program`, `tipe`, `alamat`, `tgl_daftar`) VALUES
(5, 'Novi Setia Nurviat', '2019-09-06', 'male', 'novisetianurviat@gmail.com', '08562251196', '  REGULAR/\r\n  SEMI INTENSIVE', 'Reguler', 'Komp. Buana Citra Ciwastra Blok C No. 27\r\nDesa Buah Batu Kec. Bojong Soang', '2019-09-02'),
(6, 'syarif Hidayat', '1998-09-07', 'male', 'syarif182x@gmail.com', '089699838615', '  REGULAR/  SEMI INTENSIVE', 'Reguler', 'Komplek Buana Citra Ciwastra Blok C No. 27 Jl. Ranca Oray, Desa Buahbatu Kecamatan Bojongsoang Kabupaten Bandung', '2019-09-03'),
(7, 'taufik', '1984-08-26', 'male', 'elrachman84@gmail.com', '089621141841', '  REGULAR/  SEMI INTENSIVE', 'Reguler', 'Komp. Buana Citra Ciwastra Blok C No. 27\r\nDesa Buah Batu Kec. Bojong Soang', '2019-09-04'),
(8, 'Julia', '1985-05-20', 'female', 'julia.trisna85@gmail.com', '082216142212', '  REGULAR/  SEMI INTENSIVE', 'Reguler', 'Jl. Batik Kumeli No. 7', '2019-09-04'),
(9, 'Karolina', '1999-07-20', 'female', 'karolinafabiola97@gmail.com', '081312080370', '  INTENSIVE', 'Intensive', 'Komplek Taman Sari Bukit Bandung Blok 12 No. 3 ', '2019-09-05');

-- --------------------------------------------------------

--
-- Table structure for table `sosial_media`
--

CREATE TABLE `sosial_media` (
  `email` text NOT NULL,
  `no_wa` varchar(250) NOT NULL,
  `facebook` text NOT NULL,
  `instagram` text NOT NULL,
  `gmaps` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sosial_media`
--

INSERT INTO `sosial_media` (`email`, `no_wa`, `facebook`, `instagram`, `gmaps`) VALUES
('info@ieducindonesia.com', '6282299889220', 'www.facebook.com', 'www.instagram.com', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.944610207142!2d107.63004631482995!3d-6.897228669413285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7b016c4b3ef%3A0x1535f00b09de3143!2sInternational%20Education%20Centre%20-%20IEDUC!5e0!3m2!1sid!2sid!4v1567415897753!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video1` text NOT NULL,
  `video2` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video1`, `video2`) VALUES
('www.youtube.com', 'www.youtube.com');

-- --------------------------------------------------------

--
-- Table structure for table `why_ieduc`
--

CREATE TABLE `why_ieduc` (
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `why_ieduc`
--

INSERT INTO `why_ieduc` (`deskripsi`) VALUES
('\r\n\r\nIEDUC cares more! The student\'s target is the tutor\'s target! IEDUC\'s tutors and staff believe that the success of the students is the real aim of the course. Each IEDUC\' tutor has the same burden as that of any student supervized. This makes all the tutors carry their high responsibility in day-to-day students\' development to achieve the students\' targets either in scores or skills. IEDUC offers 3 (three) streams of concentrations:\r\n\r\n1. Courses for those who want to study abroad in developed countries (scholarship or self financed), follow short courses, and apply for permanent resident. The programs are Preparations for IELTS, GMAT, GRE, TOEFL (Paper & iBT), SAT, TOEIC, \"TPA\"\r\n\r\n2. Courses for executives, lecturers, or students who will attend or present their papers in international seminars, open or close international event, and those who have sufficient scores/ bands, yet need additional skills to succeed in their further study abroad. The programs are Giving Presentations, Writing, Giving speech, Conversation\r\n\r\n3. Courses for specific purposes for example for univerity students (depends on background study), fresh graduate/ jobseekers, children, teenagers, professionals (lawyers, businessmeen and many more), subjects of studies (mathematics, Physics, Chemistry, etc.), general English, Conversation with specific subjects\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id_program`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
