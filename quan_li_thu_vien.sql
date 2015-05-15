-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2015 at 01:32 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quan_li_thu_vien`
--
CREATE DATABASE IF NOT EXISTS `quan_li_thu_vien` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `quan_li_thu_vien`;

-- --------------------------------------------------------

--
-- Table structure for table `dau_sach`
--

CREATE TABLE IF NOT EXISTS `dau_sach` (
  `ma_dau_sach` smallint(6) NOT NULL,
  `ten_dau_sach` varchar(50) NOT NULL,
  `ma_the_loai` smallint(6) NOT NULL,
  `thoi_han_muon` int(11) DEFAULT NULL,
  `ma_nguoi_sua` smallint(6) DEFAULT NULL,
  `ma_nguoi_xoa` smallint(6) DEFAULT NULL,
  `ma_nguoi_them` smallint(6) NOT NULL,
  `ngay_them` date DEFAULT NULL,
  `ngay_sua` date DEFAULT NULL,
  `ngay_xoa` date DEFAULT NULL,
  `gia` double DEFAULT NULL,
  PRIMARY KEY (`ma_dau_sach`),
  KEY `fk_nguoithem_ds` (`ma_nguoi_them`),
  KEY `ma_the_loai_idx` (`ma_the_loai`),
  KEY `ma_nguoi_sua_idx` (`ma_nguoi_sua`),
  KEY `ma_nguoi_xoa_idx` (`ma_nguoi_xoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dau_sach`
--

INSERT INTO `dau_sach` (`ma_dau_sach`, `ten_dau_sach`, `ma_the_loai`, `thoi_han_muon`, `ma_nguoi_sua`, `ma_nguoi_xoa`, `ma_nguoi_them`, `ngay_them`, `ngay_sua`, `ngay_xoa`, `gia`) VALUES
(1, 'd8', 1, 15, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(2, 'Hình Học 10', 1, 150, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(3, 'Ngữ Văn 10', 1, 150, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(4, 'Anh Văn 10', 1, 150, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(5, 'Vật Lý 10', 1, 150, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(6, 'Hóa Học 10', 1, 150, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(7, 'Sinh Học 10', 1, 150, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(8, 'Tin Học 10', 1, 150, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(9, 'Lịch Sử 10', 1, 150, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(10, 'Địa Lý 10', 1, 150, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(11, 'Giải Tích 11', 1, 150, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(12, 'Hình Học 11', 1, 150, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(13, 'Vật Lý 11', 1, 150, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(14, 'Hóa Học 11', 1, 150, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(15, 'Ngữ Văn 11', 1, 150, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(16, 'Anh Văn 11', 1, 150, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(17, 'Sinh Học 11', 1, 150, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(18, 'Lịch Sử 11', 1, 150, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(19, 'Địa Lý 11', 1, 150, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(20, 'Tin Học 11', 1, 150, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(21, 'Giải Tích 12', 1, 150, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(22, 'Hình Học 12', 1, 150, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(23, 'Vật Lý 12', 1, 150, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(24, 'Hóa Học 12', 1, 150, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(25, 'Sinh Học 12', 1, 150, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(26, 'Ngữ Văn 12', 1, 150, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(27, 'Anh Văn 12', 1, 150, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(28, 'Lịch Sử 12', 1, 150, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(29, 'Địa Lý 12', 1, 150, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(30, 'Tin Học 12', 1, 150, NULL, NULL, 1, '2015-04-02', NULL, NULL, 20000),
(31, 'Toán Cao Cấp - Giải Tích 1', 2, 150, NULL, NULL, 2, '2015-04-02', NULL, NULL, 40000),
(32, 'Toán Cao Cấp - Giải Tích 2', 2, 150, NULL, NULL, 2, '2015-04-02', NULL, NULL, 40000),
(33, 'Toán Cao Cấp - Đại Số', 2, 150, NULL, NULL, 2, '2015-04-02', NULL, NULL, 40000),
(34, 'Vật Lý Đại Cương - Cơ Nhiệt', 2, 150, NULL, NULL, 2, '2015-04-02', NULL, NULL, 40000),
(35, 'Vật Lý Đại Cương - Điện Quang', 2, 150, NULL, NULL, 2, '2015-04-02', NULL, NULL, 40000),
(36, 'Lập Trình C', 2, 150, NULL, NULL, 2, '2015-04-02', NULL, NULL, 40000),
(37, 'Lập Trình C++', 2, 150, NULL, NULL, 2, '2015-04-02', NULL, NULL, 40000),
(38, 'Lập Trình C#', 2, 150, NULL, NULL, 2, '2015-04-02', NULL, NULL, 40000),
(39, 'Lập Trình PHP', 2, 150, NULL, NULL, 2, '2015-04-02', NULL, NULL, 40000),
(40, 'Ngôn Ngữ Sql', 2, 150, NULL, NULL, 2, '2015-04-02', NULL, NULL, 40000),
(41, 'Tác Phẩm Văn Học VN Nổi Bật Trước CM T8', 3, 90, NULL, NULL, 3, '2015-04-02', NULL, NULL, 50000),
(42, 'Tác Phẩm Văn Học VN Nổi Bật Sau CM T8', 3, 90, NULL, NULL, 3, '2015-04-02', NULL, NULL, 50000),
(43, 'Tác Phẩm Văn Học Nước Ngoài Nổi Bật Trước CTTG2', 3, 90, NULL, NULL, 3, '2015-04-02', NULL, NULL, 50000),
(44, 'Tác Phẩm Văn Học Nước Ngoài Nổi Bật Sau CTTG2', 3, 90, NULL, NULL, 3, '2015-04-02', NULL, NULL, 50000),
(45, 'Lịch Sử Việt Nam Cận Đại', 4, 90, NULL, NULL, 3, '2015-04-02', NULL, NULL, 50000),
(46, 'Lịch Sử Việt Nam Trung Đại', 4, 90, NULL, NULL, 3, '2015-04-02', NULL, NULL, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `doc_gia`
--

CREATE TABLE IF NOT EXISTS `doc_gia` (
  `ma_doc_gia` smallint(6) NOT NULL,
  `ho_ten` varchar(50) DEFAULT NULL,
  `so_dien_thoai` varchar(20) DEFAULT NULL,
  `dia_chi` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `ngay_xoa` date DEFAULT NULL,
  `ngay_sua` date DEFAULT NULL,
  `ngay_them` date DEFAULT NULL,
  `ma_nguoi_sua` smallint(6) DEFAULT NULL,
  `ma_nguoi_xoa` smallint(6) DEFAULT NULL,
  `ma_nguoi_them` smallint(6) NOT NULL,
  PRIMARY KEY (`ma_doc_gia`),
  KEY `fk_nguoithem_dg` (`ma_nguoi_them`),
  KEY `ma_nguoi_sua_idx` (`ma_nguoi_sua`),
  KEY `ma_nguoi_xoa_idx` (`ma_nguoi_xoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doc_gia`
--

INSERT INTO `doc_gia` (`ma_doc_gia`, `ho_ten`, `so_dien_thoai`, `dia_chi`, `email`, `ngay_xoa`, `ngay_sua`, `ngay_them`, `ma_nguoi_sua`, `ma_nguoi_xoa`, `ma_nguoi_them`) VALUES
(1, 'Nguyễn Thị Hà', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 1),
(2, 'Nguyễn Đăng Dũng', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 1),
(3, 'Trần Phương Anh', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 1),
(4, 'Nguyễn Minh Phương', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 1),
(5, 'Lê Thanh Sơn', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 1),
(6, 'Lý Văn Nam', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 1),
(7, 'Ngô Thanh Vân ', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 1),
(8, 'Nguyễn Hồng Thuận', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 1),
(9, 'Đặng Phương Anh', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 1),
(10, 'Nguyễn Phương Thảo', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 1),
(11, 'Trương Minh Hải', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 1),
(12, 'Nguyễn Minh Quân', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 1),
(13, 'Lê Thành Nam', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 1),
(14, 'Nguyễn Thúy Quỳnh', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 1),
(15, 'Lương Văn Sơn', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 1),
(16, 'Trần Minh Phương', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 1),
(17, 'Hoàng Văn Mạnh', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 1),
(18, 'Lê Đình Thanh', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 2),
(19, 'Ngô Trung', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 2),
(20, 'Nguyễn Thanh Hải', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 2),
(21, 'Phùng Quang Đức ', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 2),
(22, 'Đỗ Thanh Hà', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 2),
(23, 'Đặng Minh Anh', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 2),
(24, 'Nguyễn Bình An', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 2),
(25, 'Lê Hoàng Nam', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 2),
(26, 'Hoàng Đình Hải', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 2),
(27, 'Lương Trung Kiên', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 2),
(28, 'Nguyễn Hoàng Nam', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 2),
(29, 'Trần Phương Anh', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 2),
(30, 'Nguyễn Minh Thảo', '0988', 'Hà Nội', 'abc@gmail.com', NULL, NULL, '2015-04-02', NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `muon_tra`
--

CREATE TABLE IF NOT EXISTS `muon_tra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_sach` smallint(6) NOT NULL,
  `ma_thu_thu` smallint(6) NOT NULL,
  `ma_doc_gia` smallint(6) NOT NULL,
  `ngay_muon` date DEFAULT NULL,
  `ngay_tra` date DEFAULT NULL,
  PRIMARY KEY (`id`,`ma_sach`,`ma_thu_thu`,`ma_doc_gia`),
  KEY `fk_muon_sach` (`ma_sach`),
  KEY `ma_thu_thu_idx` (`ma_thu_thu`),
  KEY `ma_doc_gia_idx` (`ma_doc_gia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `muon_tra`
--

INSERT INTO `muon_tra` (`id`, `ma_sach`, `ma_thu_thu`, `ma_doc_gia`, `ngay_muon`, `ngay_tra`) VALUES
(1, 1, 1, 1, '2015-04-10', NULL),
(2, 2, 1, 1, '2015-04-10', NULL),
(3, 3, 1, 1, '2015-04-10', NULL),
(4, 4, 1, 1, '2015-04-10', NULL),
(5, 5, 1, 1, '2015-04-10', NULL),
(6, 6, 1, 1, '2015-04-10', NULL),
(7, 7, 2, 2, '2015-04-11', NULL),
(8, 8, 2, 2, '2015-04-11', NULL),
(9, 9, 2, 2, '2015-04-11', NULL),
(10, 10, 2, 2, '2015-04-11', NULL),
(11, 11, 2, 3, '2015-04-12', NULL),
(12, 12, 3, 3, '2015-04-12', NULL),
(13, 13, 3, 4, '2015-04-13', NULL),
(14, 14, 3, 4, '2015-04-13', NULL),
(15, 15, 3, 4, '2015-04-13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nha_xuat_ban`
--

CREATE TABLE IF NOT EXISTS `nha_xuat_ban` (
  `ma_nha_xuat_ban` smallint(6) NOT NULL,
  `ten` varchar(50) DEFAULT NULL,
  `dia_chi` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `so_dien_thoai` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ma_nha_xuat_ban`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nha_xuat_ban`
--

INSERT INTO `nha_xuat_ban` (`ma_nha_xuat_ban`, `ten`, `dia_chi`, `email`, `so_dien_thoai`) VALUES
(1, 'NXB ĐHQG', 'Hà Nội', 'joker@gmail.com', '0989'),
(2, 'NXB Giáo Dục', 'Hà Nội', 'joker@gmail.com', '0989'),
(3, 'NXB Quốc Gia', 'Hà Nội', 'joker@gmail.com', '0989'),
(4, 'NXB Quân Đội', 'Hà Nội', 'joker@gmail.com', '0989'),
(5, 'NXB Kim Đồng', 'Hà Nội', 'joker@gmail.com', '0989'),
(6, 'NXB Lao Động', 'Hà Nội', 'joker@gmail.com', '0989'),
(7, 'NXB Nhân Dân', 'Hà Nội', 'joker@gmail.com', '0989'),
(8, 'NXB Công An', 'Hà Nội', 'joker@gmail.com', '0989'),
(9, 'NXB Tiền Phong', 'Hà Nội', 'joker@gmail.com', '0989'),
(10, 'NXB Tuổi Trẻ', 'Hà Nội', 'joker@gmail.com', '0989'),
(11, 'NXB Thanh Niên', 'Hà Nội', 'joker@gmail.com', '0989'),
(12, NULL, 'Hà Nội', 'joker@gmail.com', '0989');

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE IF NOT EXISTS `sach` (
  `ma_sach` smallint(6) NOT NULL,
  `ma_dau_sach` smallint(6) NOT NULL,
  `ngay_xoa` date DEFAULT NULL,
  `ngay_sua` date DEFAULT NULL,
  `ngay_them` date NOT NULL,
  `isAvailable` tinyint(1) DEFAULT NULL,
  `ma_nguoi_lam_mat` smallint(6) DEFAULT NULL,
  `ma_nguoi_xoa` smallint(6) DEFAULT NULL,
  `ma_nguoi_sua` smallint(6) DEFAULT NULL,
  `ma_nguoi_them` smallint(6) NOT NULL,
  `ngay_lam_mat` date DEFAULT NULL,
  PRIMARY KEY (`ma_sach`),
  KEY `fk_nguoithem_s` (`ma_nguoi_them`),
  KEY `ma_dau_sach_idx` (`ma_dau_sach`,`ma_nguoi_sua`),
  KEY `ma_nguoi_sua_idx` (`ma_nguoi_sua`),
  KEY `ma_nguoi_xoa_idx` (`ma_nguoi_xoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`ma_sach`, `ma_dau_sach`, `ngay_xoa`, `ngay_sua`, `ngay_them`, `isAvailable`, `ma_nguoi_lam_mat`, `ma_nguoi_xoa`, `ma_nguoi_sua`, `ma_nguoi_them`, `ngay_lam_mat`) VALUES
(1, 1, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 1, NULL),
(2, 1, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 1, NULL),
(3, 1, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 1, NULL),
(4, 1, '2015-05-13', '2015-05-13', '2015-04-03', 1, 1, NULL, NULL, 1, NULL),
(5, 1, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 1, NULL),
(6, 1, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 1, NULL),
(7, 1, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 1, NULL),
(8, 1, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 1, NULL),
(9, 1, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 1, NULL),
(10, 1, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 1, NULL),
(11, 2, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 2, NULL),
(12, 2, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 2, NULL),
(13, 2, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 2, NULL),
(14, 2, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 2, NULL),
(15, 2, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 2, NULL),
(16, 2, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 2, NULL),
(17, 2, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 2, NULL),
(18, 2, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 3, NULL),
(19, 3, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 3, NULL),
(20, 3, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 3, NULL),
(21, 3, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 3, NULL),
(22, 3, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 3, NULL),
(23, 3, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 3, NULL),
(24, 3, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 3, NULL),
(25, 3, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 3, NULL),
(26, 3, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 3, NULL),
(27, 3, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 3, NULL),
(28, 4, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 4, NULL),
(29, 4, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 4, NULL),
(30, 4, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 4, NULL),
(31, 5, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 1, NULL),
(32, 5, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 1, NULL),
(33, 5, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 1, NULL),
(34, 5, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 1, NULL),
(35, 5, NULL, NULL, '2015-04-03', 1, NULL, NULL, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tac_gia`
--

CREATE TABLE IF NOT EXISTS `tac_gia` (
  `ma_tac_gia` smallint(6) NOT NULL,
  `ho_ten` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `so_dien_thoai` varchar(50) DEFAULT NULL,
  `dia_chi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ma_tac_gia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tac_gia`
--

INSERT INTO `tac_gia` (`ma_tac_gia`, `ho_ten`, `email`, `so_dien_thoai`, `dia_chi`) VALUES
(1, 'Nguyễn Văn Nam', NULL, NULL, 'Hà Nội'),
(2, 'Trần Phương Nam', NULL, NULL, 'Hà Nội'),
(3, 'Lê Đình Thi', NULL, NULL, 'Hà Nội'),
(4, 'Nguyễn Lan', NULL, NULL, 'Hà Nội'),
(5, 'Hoàng Hồng Quân', NULL, NULL, 'Hà Nội'),
(6, 'Lý Nam', NULL, NULL, 'Hà Nội'),
(7, 'Nguyễn Thanh Phương', NULL, NULL, 'Hà Nội'),
(8, 'Ngô Hải Hà', NULL, NULL, 'Hà Nội'),
(9, 'Lương Bằng', NULL, NULL, 'Hà Nội'),
(10, 'Phương Nam', NULL, NULL, 'Hà Nội'),
(11, 'Lê Hà', NULL, NULL, 'Hà Nội'),
(12, 'Hoàng Bình', NULL, NULL, 'Hà Nội'),
(13, 'Nguyễn Trung Kiên', NULL, NULL, 'Hà Nội'),
(14, 'Hoàng Quỳnh', NULL, NULL, 'Hà Nội'),
(15, 'Trần Phương Thúy', NULL, NULL, 'Hà Nội');

-- --------------------------------------------------------

--
-- Table structure for table `tac_gia_viet_dau_sach`
--

CREATE TABLE IF NOT EXISTS `tac_gia_viet_dau_sach` (
  `ma_tac_gia` smallint(6) NOT NULL,
  `ma_dau_sach` smallint(6) NOT NULL,
  PRIMARY KEY (`ma_tac_gia`,`ma_dau_sach`),
  KEY `ma_dau_sach_idx` (`ma_dau_sach`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tac_gia_viet_dau_sach`
--

INSERT INTO `tac_gia_viet_dau_sach` (`ma_tac_gia`, `ma_dau_sach`) VALUES
(1, 1),
(11, 1),
(2, 2),
(12, 2),
(3, 3),
(13, 3),
(4, 4),
(14, 4),
(5, 5),
(15, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `the_loai`
--

CREATE TABLE IF NOT EXISTS `the_loai` (
  `ma_the_loai` smallint(6) NOT NULL,
  `ten_the_loai` varchar(50) NOT NULL,
  PRIMARY KEY (`ma_the_loai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `the_loai`
--

INSERT INTO `the_loai` (`ma_the_loai`, `ten_the_loai`) VALUES
(1, 'Sách Giáo Khoa'),
(2, 'Giáo Trình Đại Học-Cao Đẳng'),
(3, 'Văn Học Việt Nam'),
(4, 'Văn Học Nước Ngoài'),
(5, 'Toán Học'),
(6, 'Vật Lý'),
(7, 'Hóa Học'),
(8, 'Sinh Học'),
(9, 'Lịch Sử'),
(10, 'Địa Lý'),
(11, 'Y Học'),
(12, 'Tin Học'),
(13, 'Tôn Giáo'),
(14, 'Chính Trị');

-- --------------------------------------------------------

--
-- Table structure for table `thu_thu`
--

CREATE TABLE IF NOT EXISTS `thu_thu` (
  `ma_thu_thu` smallint(6) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dia_chi` varchar(255) DEFAULT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `so_dien_thoai` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ma_thu_thu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thu_thu`
--

INSERT INTO `thu_thu` (`ma_thu_thu`, `ho_ten`, `username`, `password`, `dia_chi`, `ngay_sinh`, `so_dien_thoai`) VALUES
(1, 'Phạm Phú Đông', 'dongpp', 'abc123', 'Hà Nội', '1994-01-01', '0987'),
(2, 'Bùi Xuân Hiền', 'hienbx', 'abc123', 'Hà Nội', '1994-01-01', '0987'),
(3, 'Mai văn Hiến', 'hienmv', 'abc123', 'Hà Nội', '1994-01-01', '0987'),
(4, 'Nguyễn văn Hiển', 'hiennv', 'abc123', 'Hà Nội', '1994-01-01', '0987'),
(5, 'Ngô Văn Hiếu', 'hieunv', 'abc123', 'Hà Nội', '1994-01-01', '0987');

-- --------------------------------------------------------

--
-- Table structure for table `xuat_ban`
--

CREATE TABLE IF NOT EXISTS `xuat_ban` (
  `ma_dau_sach` smallint(6) NOT NULL,
  `ma_nha_xuat_ban` smallint(6) NOT NULL,
  `ngay_xuat_ban` date DEFAULT NULL,
  `lan_tai_ban` int(11) DEFAULT NULL,
  PRIMARY KEY (`ma_dau_sach`,`ma_nha_xuat_ban`),
  KEY `ma_nha_xuat_ban_idx` (`ma_nha_xuat_ban`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xuat_ban`
--

INSERT INTO `xuat_ban` (`ma_dau_sach`, `ma_nha_xuat_ban`, `ngay_xuat_ban`, `lan_tai_ban`) VALUES
(1, 2, '2005-01-07', 10),
(2, 2, '2005-01-07', 10),
(3, 2, '2005-01-07', 10),
(4, 2, '2005-01-07', 10),
(5, 2, '2005-01-07', 10),
(6, 2, '2005-01-07', 10),
(7, 2, '2005-01-07', 10),
(8, 2, '2005-01-07', 10),
(9, 2, '2005-01-07', 10),
(10, 2, '2005-01-07', 10),
(11, 2, '2005-01-07', 10),
(12, 2, '2005-01-07', 10),
(13, 2, '2005-01-07', 10),
(14, 2, '2005-01-07', 10),
(15, 2, '2005-01-07', 10),
(16, 2, '2005-01-07', 10),
(17, 2, '2005-01-07', 10),
(18, 2, '2005-01-07', 10),
(19, 2, '2005-01-07', 10),
(20, 2, '2005-01-07', 10),
(21, 2, '2005-01-07', 10),
(22, 2, '2005-01-07', 10),
(23, 2, '2005-01-07', 10),
(24, 2, '2005-01-07', 10),
(25, 2, '2005-01-07', 10),
(26, 2, '2005-01-07', 10),
(27, 2, '2005-01-07', 10),
(28, 2, '2005-01-07', 10),
(29, 2, '2005-01-07', 10),
(30, 2, '2005-01-07', 10),
(31, 1, '2007-01-07', 5),
(32, 1, '2007-01-07', 5),
(33, 1, '2007-01-07', 5),
(34, 1, '2007-01-07', 5),
(35, 1, '2007-01-07', 5),
(36, 1, '2007-01-07', 5),
(37, 1, '2007-01-07', 5);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dau_sach`
--
ALTER TABLE `dau_sach`
  ADD CONSTRAINT `fk_nguoisua_ds` FOREIGN KEY (`ma_nguoi_sua`) REFERENCES `thu_thu` (`ma_thu_thu`),
  ADD CONSTRAINT `fk_nguoithem_ds` FOREIGN KEY (`ma_nguoi_them`) REFERENCES `thu_thu` (`ma_thu_thu`),
  ADD CONSTRAINT `fk_nguoixoa_ds` FOREIGN KEY (`ma_nguoi_xoa`) REFERENCES `thu_thu` (`ma_thu_thu`),
  ADD CONSTRAINT `fk_theloai_ds` FOREIGN KEY (`ma_the_loai`) REFERENCES `the_loai` (`ma_the_loai`);

--
-- Constraints for table `doc_gia`
--
ALTER TABLE `doc_gia`
  ADD CONSTRAINT `fk_nguoisua_dg` FOREIGN KEY (`ma_nguoi_sua`) REFERENCES `thu_thu` (`ma_thu_thu`),
  ADD CONSTRAINT `fk_nguoithem_dg` FOREIGN KEY (`ma_nguoi_them`) REFERENCES `thu_thu` (`ma_thu_thu`),
  ADD CONSTRAINT `fk_nguoixoa_dg` FOREIGN KEY (`ma_nguoi_xoa`) REFERENCES `thu_thu` (`ma_thu_thu`);

--
-- Constraints for table `muon_tra`
--
ALTER TABLE `muon_tra`
  ADD CONSTRAINT `fk_muon_sach` FOREIGN KEY (`ma_sach`) REFERENCES `sach` (`ma_sach`),
  ADD CONSTRAINT `fk_nguoi_muon` FOREIGN KEY (`ma_doc_gia`) REFERENCES `doc_gia` (`ma_doc_gia`),
  ADD CONSTRAINT `fk_thu_thu` FOREIGN KEY (`ma_thu_thu`) REFERENCES `thu_thu` (`ma_thu_thu`);

--
-- Constraints for table `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `fk_dausach_s` FOREIGN KEY (`ma_dau_sach`) REFERENCES `dau_sach` (`ma_dau_sach`),
  ADD CONSTRAINT `fk_nguoisua_s` FOREIGN KEY (`ma_nguoi_sua`) REFERENCES `thu_thu` (`ma_thu_thu`),
  ADD CONSTRAINT `fk_nguoithem_s` FOREIGN KEY (`ma_nguoi_them`) REFERENCES `thu_thu` (`ma_thu_thu`),
  ADD CONSTRAINT `fk_nguoixoa_s` FOREIGN KEY (`ma_nguoi_xoa`) REFERENCES `thu_thu` (`ma_thu_thu`);

--
-- Constraints for table `tac_gia_viet_dau_sach`
--
ALTER TABLE `tac_gia_viet_dau_sach`
  ADD CONSTRAINT `fk_sach` FOREIGN KEY (`ma_dau_sach`) REFERENCES `dau_sach` (`ma_dau_sach`),
  ADD CONSTRAINT `fk_tgvietsach` FOREIGN KEY (`ma_tac_gia`) REFERENCES `tac_gia` (`ma_tac_gia`);

--
-- Constraints for table `xuat_ban`
--
ALTER TABLE `xuat_ban`
  ADD CONSTRAINT `fk_nxb` FOREIGN KEY (`ma_nha_xuat_ban`) REFERENCES `nha_xuat_ban` (`ma_nha_xuat_ban`),
  ADD CONSTRAINT `fk_xbs` FOREIGN KEY (`ma_dau_sach`) REFERENCES `dau_sach` (`ma_dau_sach`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
