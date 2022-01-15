-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 15, 2022 lúc 10:27 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `linkedin_61thnb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_images`
--

CREATE TABLE `db_images` (
  `ma_nguoidung` int(10) NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `up` datetime NOT NULL,
  `status` binary(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_nguoidung`
--

CREATE TABLE `db_nguoidung` (
  `id_nguoidung` int(10) UNSIGNED NOT NULL,
  `account` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_nguoidung`
--

INSERT INTO `db_nguoidung` (`id_nguoidung`, `account`, `email`, `matkhau`) VALUES
(1, 'dat', 'doixuandat@gmail.com', '10092001Aq'),
(2, '', 'anh@gmail.com', '123456'),
(3, '', 'nguyentrongthoaianh@gmail.com', '123456'),
(4, '', 'a@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_noidung`
--

CREATE TABLE `db_noidung` (
  `ma_nguoidung` int(10) NOT NULL,
  `noidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_thongtinnguoidung`
--

CREATE TABLE `db_thongtinnguoidung` (
  `id_nguoidung` int(10) UNSIGNED NOT NULL,
  `ma_nguoidung` int(10) NOT NULL,
  `truonghoc` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `db_images`
--
ALTER TABLE `db_images`
  ADD PRIMARY KEY (`ma_nguoidung`);

--
-- Chỉ mục cho bảng `db_nguoidung`
--
ALTER TABLE `db_nguoidung`
  ADD PRIMARY KEY (`id_nguoidung`);

--
-- Chỉ mục cho bảng `db_noidung`
--
ALTER TABLE `db_noidung`
  ADD PRIMARY KEY (`ma_nguoidung`);

--
-- Chỉ mục cho bảng `db_thongtinnguoidung`
--
ALTER TABLE `db_thongtinnguoidung`
  ADD PRIMARY KEY (`id_nguoidung`),
  ADD KEY `ma_nguoidung` (`ma_nguoidung`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `db_images`
--
ALTER TABLE `db_images`
  MODIFY `ma_nguoidung` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `db_nguoidung`
--
ALTER TABLE `db_nguoidung`
  MODIFY `id_nguoidung` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `db_noidung`
--
ALTER TABLE `db_noidung`
  MODIFY `ma_nguoidung` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `db_thongtinnguoidung`
--
ALTER TABLE `db_thongtinnguoidung`
  MODIFY `id_nguoidung` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `db_images`
--
ALTER TABLE `db_images`
  ADD CONSTRAINT `db_images_ibfk_1` FOREIGN KEY (`ma_nguoidung`) REFERENCES `db_thongtinnguoidung` (`ma_nguoidung`);

--
-- Các ràng buộc cho bảng `db_noidung`
--
ALTER TABLE `db_noidung`
  ADD CONSTRAINT `db_noidung_ibfk_1` FOREIGN KEY (`ma_nguoidung`) REFERENCES `db_thongtinnguoidung` (`ma_nguoidung`);

--
-- Các ràng buộc cho bảng `db_thongtinnguoidung`
--
ALTER TABLE `db_thongtinnguoidung`
  ADD CONSTRAINT `db_thongtinnguoidung_ibfk_1` FOREIGN KEY (`id_nguoidung`) REFERENCES `db_nguoidung` (`id_nguoidung`),
  ADD CONSTRAINT `db_thongtinnguoidung_ibfk_2` FOREIGN KEY (`ma_nguoidung`) REFERENCES `db_images` (`ma_nguoidung`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
