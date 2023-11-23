-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2023 at 10:28 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `du_an1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bien_the_dv`
--

CREATE TABLE `bien_the_dv` (
  `id` int(11) NOT NULL,
  `id_dv` int(11) NOT NULL,
  `loai_dong_vat` varchar(5) NOT NULL,
  `kich_thuoc` int(2) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `ngay_bl` date NOT NULL,
  `id_tk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ct_hoa_don`
--

CREATE TABLE `ct_hoa_don` (
  `id` int(11) NOT NULL,
  `id_dv` int(11) NOT NULL,
  `id_hd` int(11) NOT NULL,
  `id_tk` int(11) NOT NULL,
  `id_bien_the` int(11) NOT NULL,
  `trang_thai` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dich_vu`
--

CREATE TABLE `dich_vu` (
  `id` int(11) NOT NULL,
  `ten_dv` varchar(255) NOT NULL,
  `anh_dv` varchar(500) NOT NULL,
  `mo_ta` text NOT NULL,
  `id_loai_dv` int(11) NOT NULL,
  `trang_thai` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dich_vu`
--

INSERT INTO `dich_vu` (`id`, `ten_dv`, `anh_dv`, `mo_ta`, `id_loai_dv`, `trang_thai`) VALUES
(1, 'cắt tỉa lông', 'anhtest.jpg', 'cắt lông', 1, 1),
(2, 'khám', 'anhtest.jpg', 'haa', 2, 1),
(4, 'test1', 'Bull (2).jpg', 'fa', 2, 1),
(5, 'test12', 'Chihuahua (2).jpg', '123', 2, 1),
(6, 'kah', 'Husky (3).jpg', 'hava', 2, 1),
(7, 'kahd', 'Chihuahua (3).jpg', 'fvs', 2, 1),
(8, 'ga', 'doberman (4).jpg', 'gaga', 2, 1),
(15, ' z vz', 'Husky (1).jpg', 'vsv', 2, 1),
(16, 'bbb', 'Chihuahua (3).jpg', 'af', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id` int(11) NOT NULL,
  `ngay_dat` date NOT NULL,
  `id_tk` int(11) NOT NULL,
  `id_dv` int(11) NOT NULL,
  `id_nv` int(11) NOT NULL,
  `trang_thai` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loai_dv`
--

CREATE TABLE `loai_dv` (
  `id` int(11) NOT NULL,
  `ten_loai_dv` varchar(255) NOT NULL,
  `ngay_tao` date NOT NULL,
  `trang_thai` int(2) NOT NULL DEFAULT 1,
  `mo_ta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loai_dv`
--

INSERT INTO `loai_dv` (`id`, `ten_loai_dv`, `ngay_tao`, `trang_thai`, `mo_ta`) VALUES
(1, 'Spa', '2023-11-22', 1, 'Cắt tỉa lông'),
(2, 'Chăm sóc sức khỏe', '2023-11-22', 0, 'Khám và chuẩn đoán');

-- --------------------------------------------------------

--
-- Table structure for table `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `id` int(11) NOT NULL,
  `ten_nv` varchar(50) NOT NULL,
  `ca_lam` int(3) NOT NULL,
  `anh` varchar(255) NOT NULL,
  `mo_ta` text NOT NULL,
  `link` varchar(500) NOT NULL,
  `trang_thai` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id` int(11) NOT NULL,
  `ten_tai_khoan` varchar(50) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `so_dien_thoai` int(11) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `dia_chi` varchar(500) NOT NULL,
  `vai_tro` int(2) NOT NULL,
  `anh` varchar(255) NOT NULL,
  `trang_thai` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bien_the_dv`
--
ALTER TABLE `bien_the_dv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dv` (`id_dv`);

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tk` (`id_tk`);

--
-- Indexes for table `ct_hoa_don`
--
ALTER TABLE `ct_hoa_don`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bien_the` (`id_bien_the`),
  ADD KEY `id_dv` (`id_dv`),
  ADD KEY `id_hd` (`id_hd`),
  ADD KEY `id_tk` (`id_tk`);

--
-- Indexes for table `dich_vu`
--
ALTER TABLE `dich_vu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_loai_dv` (`id_loai_dv`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tk` (`id_tk`),
  ADD KEY `id_dv` (`id_dv`),
  ADD KEY `id_nv` (`id_nv`);

--
-- Indexes for table `loai_dv`
--
ALTER TABLE `loai_dv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bien_the_dv`
--
ALTER TABLE `bien_the_dv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ct_hoa_don`
--
ALTER TABLE `ct_hoa_don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dich_vu`
--
ALTER TABLE `dich_vu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loai_dv`
--
ALTER TABLE `loai_dv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nhan_vien`
--
ALTER TABLE `nhan_vien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bien_the_dv`
--
ALTER TABLE `bien_the_dv`
  ADD CONSTRAINT `bien_the_dv_ibfk_1` FOREIGN KEY (`id_dv`) REFERENCES `dich_vu` (`id`);

--
-- Constraints for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`id_tk`) REFERENCES `tai_khoan` (`id`);

--
-- Constraints for table `ct_hoa_don`
--
ALTER TABLE `ct_hoa_don`
  ADD CONSTRAINT `ct_hoa_don_ibfk_1` FOREIGN KEY (`id_bien_the`) REFERENCES `bien_the_dv` (`id`),
  ADD CONSTRAINT `ct_hoa_don_ibfk_2` FOREIGN KEY (`id_dv`) REFERENCES `dich_vu` (`id`),
  ADD CONSTRAINT `ct_hoa_don_ibfk_3` FOREIGN KEY (`id_hd`) REFERENCES `hoa_don` (`id`),
  ADD CONSTRAINT `ct_hoa_don_ibfk_4` FOREIGN KEY (`id_tk`) REFERENCES `tai_khoan` (`id`);

--
-- Constraints for table `dich_vu`
--
ALTER TABLE `dich_vu`
  ADD CONSTRAINT `dich_vu_ibfk_1` FOREIGN KEY (`id_loai_dv`) REFERENCES `loai_dv` (`id`);

--
-- Constraints for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `fk_tk` FOREIGN KEY (`id_tk`) REFERENCES `tai_khoan` (`id`),
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`id_dv`) REFERENCES `dich_vu` (`id`),
  ADD CONSTRAINT `hoa_don_ibfk_2` FOREIGN KEY (`id_nv`) REFERENCES `nhan_vien` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
