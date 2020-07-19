-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2020 at 07:24 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs_backend`
--
DROP DATABASE IF EXISTS `dbs_backend`;
CREATE DATABASE IF NOT EXISTS `dbs_backend` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbs_backend`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_costumer`
--

CREATE TABLE `tbl_costumer` (
  `kd_costumer` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_costumer`
--

INSERT INTO `tbl_costumer` (`kd_costumer`, `foto`) VALUES
(14, 'Agrinesia.png'),
(15, 'PT__Prima_Top_Boga.png'),
(16, 'Kafe_Betawi.png'),
(17, '71.jpg'),
(18, 'RSUD_Cibinong.jpg'),
(19, 'RS__BMC.png'),
(20, 'Dapur_Cokelat.jpg'),
(21, 'Geprek_Bensu.png'),
(22, 'Hotel_Savero.png'),
(23, 'Hotel_Permata.png'),
(24, 'Hotel_Whiz_Prime.png'),
(25, 'Hotel_Zest.png'),
(26, 'Hotel_DAnaya.png'),
(27, 'PT__Global_Dairi_Alami.png'),
(28, 'Tan_Ek_Tjoan_2.jpg'),
(29, 'Ayam_Asix.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_produk`
--

CREATE TABLE `tbl_jenis_produk` (
  `kd_jenis` int(11) NOT NULL,
  `jenis_produk` varchar(50) NOT NULL,
  `kd_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenis_produk`
--

INSERT INTO `tbl_jenis_produk` (`kd_jenis`, `jenis_produk`, `kd_kategori`) VALUES
(6, 'Cooking-Oil', 2),
(7, 'Fat-Oil', 2),
(8, 'Margarine', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kd_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kd_kategori`, `nama_kategori`) VALUES
(1, 'Industry'),
(2, 'Retail');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_principal`
--

CREATE TABLE `tbl_principal` (
  `kd_principal` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_principal`
--

INSERT INTO `tbl_principal` (`kd_principal`, `foto`) VALUES
(1, '1.png'),
(2, '2.png'),
(3, '3.png'),
(4, '4.png'),
(7, '7.png'),
(8, '8.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `kd_produk` int(11) NOT NULL,
  `nama_produk` text NOT NULL,
  `foto` text NOT NULL,
  `keterangan` text NOT NULL,
  `kd_jenis_produk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`kd_produk`, `nama_produk`, `foto`, `keterangan`, `kd_jenis_produk`) VALUES
(7, 'Cooking Oil BIB CAMAR 18L', 'Cooking_Oil_BIB_CAMAR_18L1.jpg', '<p>Minyak goreng Camar adalah minyak nabati serbaguna, sempurna untuk memasak, menumis dan menggoreng.</p>\r\n\r\n<p><strong>Packaging :</strong></p>\r\n\r\n<p>Carton (BIB) 18L</p>\r\n', 6),
(8, 'Cooking Oil Jerrycan \"CAMAR\" 18L', 'Cooking_Oil_Jerrycan_CAMAR_18L.jpg', '<p>Minyak goreng Camar adalah minyak nabati serbaguna, sempurna untuk memasak, menumis dan menggoreng.</p>\r\n\r\n<p><strong>Packaging :</strong></p>\r\n\r\n<p>Jerrycan 18L</p>\r\n', 6),
(9, 'Cooking Oil Pouch \"CAMAR\"', 'Cooking_Oil_Pouch_CAMAR_02.jpg', '<p>Minyak goreng Camar adalah minyak nabati serbaguna, sempurna untuk memasak, menumis dan menggoreng.</p>\r\n\r\n<p><strong>Packaging :</strong></p>\r\n\r\n<p>Stand Pouch 1L</p>\r\n\r\n<p>Stand Pouch 2L</p>\r\n', 6),
(10, 'Cooking Oil BIB \"Citra Nabati\" 18L', 'Cooking_Oil_BIB_Citra_Nabati_18L.jpg', '<p>Minyak goreng Citra Nabati adalah minyak nabati serbaguna, sempurna untuk memasak, menumis dan menggoreng.</p>\r\n\r\n<p><strong>Packaging :</strong></p>\r\n\r\n<p>Carton (BIB) 18L</p>\r\n', 6),
(11, 'Cooking Oil Jerrycan \"Citra Nabati\" 18L', 'Cooking_Oil_Jerrycan_Citra_Nabati_18L.jpg', '<p>Minyak goreng Citra Nabati adalah minyak nabati serbaguna, sempurna untuk memasak, menumis dan menggoreng.</p>\r\n\r\n<p><strong>Packaging :</strong></p>\r\n\r\n<p>Jerrycan 18L</p>\r\n', 6),
(12, 'Cooking Oil Pouch \"Golldy\"', 'Cooking_Oil_Pouch_Golldy.jpg', '<p>Minyak goreng Golldy adalah minyak nabati serbaguna, sempurna untuk memasak, menumis dan menggoreng.</p>\r\n\r\n<p><strong>Packaging :</strong></p>\r\n\r\n<p>Stand Pouch 2L</p>\r\n', 6),
(16, 'Medalia Margarine', 'Medalia_Margarine.jpg', '<p>Medalia Margarine adalah margarin serbaguna dengan aroma buah-buahan. Medalia Margarin merupakan pilihan terbaik untuk industri dan UKM yang menjamin harga bersaing&nbsp;</p>\r\n\r\n<p><strong>Packaging:</strong></p>\r\n\r\n<p>Carton 15 kg</p>\r\n\r\n<p><strong>Saran Penggunaan:</strong></p>\r\n\r\n<p>Roti tawar dan roti manis, kue, kue kering dan bahan isian kue.</p>\r\n', 8),
(17, 'Medalia Shortening', 'Medalia_Shortening.jpg', '<p>Medalia Shortening adalah shortening serbaguna, pilihan terbaik untuk industri dan UKM yang menjamin harga bersaing.</p>\r\n\r\n<p><strong>Packaging:</strong></p>\r\n\r\n<p>Carton 15 kg</p>\r\n\r\n<p><strong>Saran Penggunaan:</strong></p>\r\n\r\n<p>Krim isian, Biskuit, Roti Tawar, Butter Krim</p>\r\n', 8),
(18, 'Bakeria Cream Margarine', 'Bakeria_Cream_Margarine1.jpg', '<p>Bakeria Cream Margarine adalah margarin serbaguna dan terjangkau dengan aroma moka pandan.</p>\r\n\r\n<p><strong>Packaging:</strong></p>\r\n\r\n<p>Carton 15 kg</p>\r\n\r\n<p><strong>Saran Penggunaan:</strong></p>\r\n\r\n<p>Roti tawar, Roti manis, Kue, Kue kering dan krim isian kue.</p>\r\n', 8),
(19, 'VITAS Butter Oil Substitute', 'VITAS_Butter_Oil_Substitute.jpg', '<p>Vitas Butter Oil Substitute (BOS) adalah pengganti minyak mentega berkualitas tinggi dengan cita rasa mentega yang kuat.</p>\r\n\r\n<p><strong>Packaging:</strong></p>\r\n\r\n<p>Carton 15 kg</p>\r\n\r\n<p>Pail 18 kg</p>\r\n\r\n<p><strong>Saran Penggunaan:</strong></p>\r\n\r\n<p>Roti manis dan kue kering beraroma mentega, Krim isian aroma mentega</p>\r\n', 8),
(20, 'Deep Frying Fat “Frybest”', 'Deep_Frying_Fat_Frybest.jpg', '<p>Frybest adalah minyak goreng padat, cocok digunakan untuk menggoreng sistem rendam. Mudah dipakai. Sesuai untuk hotel dan restoran. Bebas lemak trans.&nbsp;</p>\r\n\r\n<p><strong>Packaging:</strong></p>\r\n\r\n<p>Carton 15 kg&nbsp;</p>\r\n\r\n<p><strong>Saran Penggunaan:</strong></p>\r\n\r\n<p>Menggoreng rendam : Ayam goreng, Kentang goreng, Nugget, Donat, dsb.</p>\r\n', 7),
(21, 'Deep Frying Fat GOLLDY', 'Deep_Frying_Fat_GOLLDY.jpg', '<p>Golldy adalah minyak goreng padat, cocok digunakan untuk menggoreng sistem rendam. Mudah dipakai. Sesuai untuk hotel dan restoran. Bebas lemak trans.&nbsp;</p>\r\n\r\n<p><strong>Packaging:</strong></p>\r\n\r\n<p>Carton 15 kg&nbsp;</p>\r\n\r\n<p><strong>Saran Penggunaan:</strong></p>\r\n\r\n<p>Menggoreng rendam : Ayam goreng, Kentang goreng, Nugget, Donat, dsb.</p>\r\n', NULL),
(22, 'Bakeria Pan Release Agent', 'Bakeria_Pan_Release_Agent.jpg', '<p>Bakeria Pan Release Agent adalah pelapis loyang terbaik, tidak lengket dan ekonomis untuk penggunaan industry bakeri&nbsp;</p>\r\n\r\n<p><strong>Packaging:</strong></p>\r\n\r\n<p>Carton 16.3 kg&nbsp;</p>\r\n\r\n<p><strong>Saran Penggunaan:</strong></p>\r\n\r\n<p>Oles loyang untuk roti dan kue.</p>\r\n', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slide`
--

CREATE TABLE `tbl_slide` (
  `kd_slide` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slide`
--

INSERT INTO `tbl_slide` (`kd_slide`, `foto`) VALUES
(3, 'olive.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `kd_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `foto` text NOT NULL,
  `acc_lvl` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`kd_user`, `username`, `password`, `foto`, `acc_lvl`) VALUES
(1, 'Admin', 'silarisfood', 'download.png', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_costumer`
--
ALTER TABLE `tbl_costumer`
  ADD PRIMARY KEY (`kd_costumer`);

--
-- Indexes for table `tbl_jenis_produk`
--
ALTER TABLE `tbl_jenis_produk`
  ADD PRIMARY KEY (`kd_jenis`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kd_kategori`);

--
-- Indexes for table `tbl_principal`
--
ALTER TABLE `tbl_principal`
  ADD PRIMARY KEY (`kd_principal`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`kd_produk`),
  ADD KEY `kd_jenis_produk` (`kd_jenis_produk`);

--
-- Indexes for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
  ADD PRIMARY KEY (`kd_slide`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`kd_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_costumer`
--
ALTER TABLE `tbl_costumer`
  MODIFY `kd_costumer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_jenis_produk`
--
ALTER TABLE `tbl_jenis_produk`
  MODIFY `kd_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `kd_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_principal`
--
ALTER TABLE `tbl_principal`
  MODIFY `kd_principal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `kd_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
  MODIFY `kd_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `kd_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD CONSTRAINT `tbl_produk_ibfk_1` FOREIGN KEY (`kd_jenis_produk`) REFERENCES `tbl_jenis_produk` (`kd_jenis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
