-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2016 at 07:50 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_plp`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_texts`
--

CREATE TABLE IF NOT EXISTS `about_texts` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `is_used` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_texts`
--

INSERT INTO `about_texts` (`id`, `content`, `is_used`) VALUES
(1, '<p>E-Learning merupakan layanan media pembelajaran Pertamina Corporate University berbasis teknologi internet yang dapat diakses melalui perangkat PC, Laptop, Tablet, Smartphone dan Gadget lainnya untuk memenuhi kebutuhan pembelajaran Pekerja Pertamina dimanapun berada.</p>\r\n<p>Dengan konsep employee self service, para Pekerja diharapkan dapat lebih mandiri dalam memenuhi kebutuhan pembelajarannya melalui berbagai fasilitas yang telah disesuaikan, diperbaharui dan dimutakhirkan secara terus menerus sehingga dapat menjadi sarana pembelajaran yang profesional dan bernilai tambah, sekaligus menjadikan Pertamina Corporate University sebagai HR Strategic Business Partner</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `navbar_navs`
--

CREATE TABLE IF NOT EXISTS `navbar_navs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `index` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `navbar_navs`
--

INSERT INTO `navbar_navs` (`id`, `name`, `link`, `index`) VALUES
(1, 'E-Learning', 'https://elearning.pertamina.com', 2),
(2, 'Library', 'https://www.pertamina.com/perpustakaan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL,
  `about_parallax_image` varchar(255) NOT NULL,
  `contact_parallax_image` varchar(255) NOT NULL,
  `courses_shown` int(11) NOT NULL DEFAULT '8',
  `library_shown` int(11) NOT NULL DEFAULT '8',
  `token_to_lms` varchar(255) NOT NULL DEFAULT '28df2302d3ba453f80943afd5e134427',
  `link_to_lms` varchar(255) NOT NULL DEFAULT 'https://elearning.pertamina.com/moodle/',
  `link_to_library` varchar(255) NOT NULL DEFAULT 'http://www.pertamina.com/perpustakaan/',
  `link_to_main` varchar(255) NOT NULL DEFAULT 'https://www.pertamina.com',
  `link_to_contact` varchar(255) NOT NULL DEFAULT 'mailto:elearning@pertamina.com',
  `contact_number` varchar(255) NOT NULL DEFAULT '(021) 3816666',
  `is_maintenance` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `about_parallax_image`, `contact_parallax_image`, `courses_shown`, `library_shown`, `token_to_lms`, `link_to_lms`, `link_to_library`, `link_to_main`, `link_to_contact`, `contact_number`, `is_maintenance`) VALUES
(1, 'public/images/parallaxes/test5.jpg', 'public/images/parallaxes/test4.jpg', 8, 8, '28df2302d3ba453f80943afd5e134427', 'https://elearning.pertamina.com/moodle/', 'https://www.pertamina.com/perpustakaan/', 'https://www.pertamina.com', 'mailto:elearning@pertamina.com', '(021) 3816666', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE IF NOT EXISTS `slides` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `index` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `image`, `index`) VALUES
(1, 'public/images/test.jpg', 5),
(2, 'public/images/test2.jpg', 12),
(3, 'public/images/test3.jpg', 10),
(6, 'public/images/slides/fb-about-1.jpg', 11),
(7, 'public/images/slides/antarafoto-program-konversi-bbm-bbg-101214-adm-2.jpg', 13);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `urname` varchar(32) NOT NULL,
  `passkey` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `urname`, `passkey`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_texts`
--
ALTER TABLE `about_texts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbar_navs`
--
ALTER TABLE `navbar_navs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_texts`
--
ALTER TABLE `about_texts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `navbar_navs`
--
ALTER TABLE `navbar_navs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
