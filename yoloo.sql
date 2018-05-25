-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2018 at 05:40 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yoloo`
--

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `id_penerbit` int(15) NOT NULL,
  `penerbit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id_penerbit`, `penerbit`) VALUES
(1, 'Polinema'),
(2, 'Brawijaya'),
(3, 'ITS'),
(4, 'PENS'),
(5, 'PPNS'),
(6, 'UNAIR');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_books`
--

CREATE TABLE `tbl_books` (
  `id` int(8) NOT NULL,
  `name` varchar(100) NOT NULL,
  `author` varchar(30) NOT NULL,
  `isbn` varchar(30) NOT NULL,
  `id_penerbit` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_books`
--

INSERT INTO `tbl_books` (`id`, `name`, `author`, `isbn`, `id_penerbit`) VALUES
(1, 'Learning PHP, MySQL & JavaScript', 'Robin Nixon', 'ISBN-13: 978-1491918661', 1),
(2, 'PHP and MySQL for Dynamic Web Sites', 'Larry Ullman', 'ISBN-13: 978-0321784070', 2),
(3, 'PHP Cookbook', 'David Sklar', 'ISBN-13: 978-1449363758', 3),
(4, 'Programming PHP', 'Kevin Tatroe', 'ISBN-13: 978-1449392772', 4),
(5, 'Modern PHP: New Features and Good Practices', 'Josh Lockhart', 'ISBN-13: 978-1491905012', 5),
(6, 'Modern PHP New Features and Good Practices', 'Josh Lockhart', 'ISBN-13: 978-1491905012', 5),
(7, 'Learning PHP MySQL & JavaScript', 'Robin Nixon', 'ISBN-13: 978-1491918661', 1),
(8, 'PHP and MySQL for Dynamic Web Sites', 'Larry Ullman', 'ISBN-13: 978-0321784070', 2),
(9, 'PHP Cookbook', 'David Sklar', 'ISBN-13: 978-1449363758', 3),
(10, 'Programming PHP', 'Kevin Tatroe', 'ISBN-13: 978-1449392772', 4),
(11, 'Modern PHP New Features and Good Practices', 'Josh Lockhart', 'ISBN-13: 978-1491905012', 5),
(12, 'Learning PHP MySQL & JavaScript', 'Robin Nixon', 'ISBN-13: 978-1491918661', 1),
(13, 'PHP and MySQL for Dynamic Web Sites', 'Larry Ullman', 'ISBN-13: 978-0321784070', 2),
(14, 'PHP Cookbook', 'David Sklar', 'ISBN-13: 978-1449363758', 3),
(15, 'Programming PHP', 'Kevin Tatroe', 'ISBN-13: 978-1449392772', 4),
(16, 'Modern PHP New Features and Good Practices', 'Josh Lockhart', 'ISBN-13: 978-1491905012', 5),
(17, 'Learning PHP MySQL & JavaScript', 'Robin Nixon', 'ISBN-13: 978-1491918661', 1),
(18, 'PHP and MySQL for Dynamic Web Sites', 'Larry Ullman', 'ISBN-13: 978-0321784070', 2),
(19, 'PHP Cookbook', 'David Sklar', 'ISBN-13: 978-1449363758', 3),
(20, 'Programming PHP', 'Kevin Tatroe', 'ISBN-13: 978-1449392772', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indexes for table `tbl_books`
--
ALTER TABLE `tbl_books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_penerbit` (`id_penerbit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id_penerbit` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_books`
--
ALTER TABLE `tbl_books`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
