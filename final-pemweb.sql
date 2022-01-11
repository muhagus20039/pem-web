-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2022 at 02:23 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final-pemweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_musik`
--

CREATE TABLE `tb_musik` (
  `kode_lagu` int(5) NOT NULL,
  `lagu` varchar(50) NOT NULL,
  `artis` varchar(50) NOT NULL,
  `dengarkan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_musik`
--

INSERT INTO `tb_musik` (`kode_lagu`, `lagu`, `artis`, `dengarkan`) VALUES
(1, 'Take Me Home, Country Roads', 'John Denver', 'https://youtu.be/1vrEljMfXYo'),
(2, 'So Far Away', 'Avenged Sevenfold', 'https://youtu.be/A7ry4cx6HfY'),
(3, 'Seize The Day', 'Avenged Sevenfold', 'https://youtu.be/-B2yzG6Gj0A'),
(4, 'Helena', 'My Chemical Romance', 'https://youtu.be/UCCyoocDxBA'),
(5, 'Welcome To The Black Parade', 'My Chemical Romance', 'https://youtu.be/RRKJiM9Njr8'),
(6, 'I Dont Love You', 'My Chemical Romance', 'https://youtu.be/pyi0ZfuIIvo'),
(7, 'I Miss You', 'blink182', 'https://youtu.be/wNHGT-neTes'),
(8, 'Perfect', 'Simple Plan', 'https://youtu.be/RUi54JTgL5s');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `email`, `password`) VALUES
('admin', 'admin@gmail.com', '$2y$10$dr/cT/NwnHnmzcUYoBaUe.HxuMG2hnlcosuHeCvIn4v24ykJZjD.a'),
('aku', 'admin1@gmail.com', '$2y$10$i1LLl5lwrmSlXqDQC7uF2eUBXv5XoLV/kdBseD9DNvi35jCXmX/IG'),
('muhagus12', 'muhagussaputra12@gmail.com', '$2y$10$QO0jPOs5jjYB9bLf0cvsdeBHaYj.GkmbTIMiBDZca4p17QuqUhg0i'),
('yusril', 'yusril@gmail.com', '$2y$10$4XgNBcQd/kIXBojz.q37WeJ948XDCalpZE3j3zOadYl1SUFQ99Jna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_musik`
--
ALTER TABLE `tb_musik`
  ADD PRIMARY KEY (`kode_lagu`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
