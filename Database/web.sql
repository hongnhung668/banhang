-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 14, 2020 lúc 10:27 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangky`
--

CREATE TABLE `dangky` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gender` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dangky`
--

INSERT INTO `dangky` (`ID`, `Name`, `Gender`, `Address`, `Phone`, `Email`, `Password`, `img`) VALUES
(72, 'hồng', 'nam', 'Hà Nội', '1234566788', 'admin@gmail.com', '12345', '0'),
(75, 'lee', 'nam', 'Chọn quê', '1234566788', 'lee@gmail.com', '12345', 'hinh-nen-4k-sieu-xe-lamborghini.jpg'),
(76, 'ân', 'nữ', 'Bắc Ninh', '2345678', 'hongan@gmail.com', '12345', ''),
(77, 'min', 'nữ', 'Chọn quê', '1234566788', 'min@gmail.com', '12345', ''),
(78, 'Gin', 'Nam', 'Hà Nội', '12345678', 'Gin@gmail.com', '12345', 'canh-mua-dong-tai-thanh-pho-pattaya-Thai-Lan.jpg'),
(81, 'Nhung', 'nữ', 'Hà Nội', '12345678', 'nhung@gmail.com', '56789', '123.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangnhap`
--

CREATE TABLE `dangnhap` (
  `ID` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dangnhap`
--

INSERT INTO `dangnhap` (`ID`, `name`, `pass`) VALUES
(51, 'admin@gmail.com', '12345'),
(52, '789@gmail.com', '123'),
(53, 'thich@gmail.com', '12345'),
(54, 'lee@gmail.com', '12345'),
(55, 'hongan@gmail.com', '12345'),
(56, 'min@gmail.com', '12345'),
(57, 'Gin@gmail.com', '12345'),
(58, 'nam@gmail.com', '12345'),
(60, 'nhung@gmail.com', '56789');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quequan`
--

CREATE TABLE `quequan` (
  `ID` int(11) NOT NULL,
  `Address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quequan`
--

INSERT INTO `quequan` (`ID`, `Address`) VALUES
(1, 'Hà Nội'),
(2, 'Hải Phòng'),
(3, 'Quảng Ninh'),
(4, 'Bắc Giang'),
(5, 'Bắc Ninh'),
(7, 'Hà Nam'),
(8, 'Nam Định'),
(12, 'hà giang'),
(20, 'Hồ Chí Minh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `themmoi`
--

CREATE TABLE `themmoi` (
  `Name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Code` int(100) NOT NULL,
  `Category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Money` int(11) NOT NULL,
  `Description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Picture` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `themmoi`
--

INSERT INTO `themmoi` (`Name`, `Code`, `Category`, `Money`, `Description`, `Picture`) VALUES
('Đỏ tươi', 1, 'dior', 500000, '', 'son-moi-5.jpg'),
('Màu Đỏ ', 2, '3ce', 170000, '', 'A01dothuankhiet.JPG'),
('Matte Lipstick', 3, '3ce', 200000, '', '1.jpg'),
('Màu Đỏ Cam', 4, 'Innisfree', 190000, '', 'a03maudocam.JPG'),
('Màu Đỏ Hồng Trầm', 5, 'chanel', 200000, '', 'a04dohongtram.JPG'),
('Màu Đỏ Cam Ấm', 6, 'chanel', 210000, '', 'a05docamam.JPG'),
('Màu Đỏ Hồng Đào', 7, '3ce', 220000, '', 'a07maudo hong dao.JPG'),
('3ce', 8, 'son', 150000, '', 'bst.jpg'),
('Lip Tint', 9, 'chanel', 300000, '', 'son-tint-bioaqua.jpg'),
('Retro Matte', 10, 'Mac', 350000, '', 'son-moi-10-1515118613.jpg'),
('Creame Liptint', 11, 'ysl', 200000, '', '4.son-kem-768x768.jpg'),
('Đỏ hồng', 12, 'Lancôme', 450000, '', 'son-moi-7.jpg'),
('son nước màu', 13, 'Mac', 240000, '', '3.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dangky`
--
ALTER TABLE `dangky`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `quequan`
--
ALTER TABLE `quequan`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `themmoi`
--
ALTER TABLE `themmoi`
  ADD PRIMARY KEY (`Code`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dangky`
--
ALTER TABLE `dangky`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT cho bảng `dangnhap`
--
ALTER TABLE `dangnhap`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `quequan`
--
ALTER TABLE `quequan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `themmoi`
--
ALTER TABLE `themmoi`
  MODIFY `Code` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123456681;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
