-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 13, 2024 lúc 10:05 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thuvien`
--
CREATE DATABASE IF NOT EXISTS `thuvien` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `thuvien`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `makhoa` varchar(225) NOT NULL,
  `tenkhoa` varchar(225) NOT NULL,
  `ghichu` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`makhoa`, `tenkhoa`, `ghichu`) VALUES
('CNTT', 'Công nghệ thông tin', ''),
('TDH', 'Tự động hóa', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `muontra`
--

CREATE TABLE `muontra` (
  `id_muontra` int(11) NOT NULL,
  `matv` int(11) NOT NULL,
  `macabiet` int(11) NOT NULL,
  `ngaymuon` date NOT NULL,
  `nguoichomuon` varchar(225) NOT NULL,
  `hantra` date NOT NULL,
  `ngaytra` date NOT NULL,
  `nguoinhan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ngonngu`
--

CREATE TABLE `ngonngu` (
  `mann` int(11) NOT NULL,
  `tennn` varchar(225) NOT NULL,
  `ghichu` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ngonngu`
--

INSERT INTO `ngonngu` (`mann`, `tennn`, `ghichu`) VALUES
(1, 'Tiếng Việt ', ''),
(2, 'Tiếng Anh', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id_user` int(11) NOT NULL,
  `matv` varchar(225) NOT NULL,
  `hoten` varchar(225) NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(225) NOT NULL,
  `chucdanh` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `sdt` varchar(225) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id_user`, `matv`, `hoten`, `ngaysinh`, `gioitinh`, `chucdanh`, `email`, `sdt`, `level`) VALUES
(1, 'admin', 'Admin', '2003-03-02', 'nam', 'admin', 'admin@gmail.com', '093824746', 2),
(2, 'DTC2154802010626', 'Trang', '2003-12-20', 'nữ', 'độc giả', 'trang...', '0938462', 1),
(3, 'thuthu', 'trang', '2003-03-02', 'nữ', 'thủ thư', 'thuthu.@gmail.com', '0395348', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacc`
--

CREATE TABLE `nhacc` (
  `mancc` int(11) NOT NULL,
  `tenncc` varchar(225) NOT NULL,
  `ghichu` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacc`
--

INSERT INTO `nhacc` (`mancc`, `tenncc`, `ghichu`) VALUES
(1, 'Nhà sách Tiến Thọ', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhaxb`
--

CREATE TABLE `nhaxb` (
  `manxb` int(11) NOT NULL,
  `tennxb` varchar(225) NOT NULL,
  `ghichu` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhaxb`
--

INSERT INTO `nhaxb` (`manxb`, `tennxb`, `ghichu`) VALUES
(1, 'NXB Kim Đồng', ''),
(2, 'NXB Tuổi trẻ', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tacgia`
--

CREATE TABLE `tacgia` (
  `matg` int(11) NOT NULL,
  `tentg` varchar(225) NOT NULL,
  `ghichu` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tacgia`
--

INSERT INTO `tacgia` (`matg`, `tentg`, `ghichu`) VALUES
(1, 'Nguyễn Nhật Ánh', ''),
(2, 'Nam Cao', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tailieu`
--

CREATE TABLE `tailieu` (
  `matailieu` int(11) NOT NULL,
  `tentailieu` varchar(225) NOT NULL,
  `hinhanh` varchar(225) NOT NULL,
  `tentheloai` varchar(225) NOT NULL,
  `tentg` varchar(225) NOT NULL,
  `tennxb` varchar(225) NOT NULL,
  `mann` int(11) NOT NULL,
  `sotrang` int(11) NOT NULL,
  `giabia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `ngaycapnhat` date NOT NULL,
  `soluongcon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tailieu`
--

INSERT INTO `tailieu` (`matailieu`, `tentailieu`, `hinhanh`, `tentheloai`, `tentg`, `tennxb`, `mann`, `sotrang`, `giabia`, `soluong`, `ngaycapnhat`, `soluongcon`) VALUES
(1, 'giáo trình tthcm', 'image\\tthcm.jpg', '1', '1', '1', 1, 567, 2340000, 20, '2024-03-01', 20),
(2, 'giáo trình chủ nghĩa xã hội khoa học', 'image\\cnxh.jpg', '1', '2', '2', 1, 254, 87000, 18, '2024-03-01', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tailieuchitiet`
--

CREATE TABLE `tailieuchitiet` (
  `macabiet` int(11) NOT NULL,
  `matl` int(11) NOT NULL,
  `ngaycapnhat` date NOT NULL,
  `nguoicapnhat` varchar(225) NOT NULL,
  `tinhtrang` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tailieuchitiet`
--

INSERT INTO `tailieuchitiet` (`macabiet`, `matl`, `ngaycapnhat`, `nguoicapnhat`, `tinhtrang`) VALUES
(1, 1, '2024-03-07', 'trang', ''),
(3, 1, '2024-03-08', 'trang', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `matheloai` int(11) NOT NULL,
  `tentheloai` varchar(225) NOT NULL,
  `ghichu` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`matheloai`, `tentheloai`, `ghichu`) VALUES
(1, 'Giáo trình', ''),
(2, 'Sách tham khảo', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `muontra`
--
ALTER TABLE `muontra`
  ADD PRIMARY KEY (`id_muontra`);

--
-- Chỉ mục cho bảng `ngonngu`
--
ALTER TABLE `ngonngu`
  ADD PRIMARY KEY (`mann`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id_user`);

--
-- Chỉ mục cho bảng `nhacc`
--
ALTER TABLE `nhacc`
  ADD PRIMARY KEY (`mancc`);

--
-- Chỉ mục cho bảng `nhaxb`
--
ALTER TABLE `nhaxb`
  ADD PRIMARY KEY (`manxb`);

--
-- Chỉ mục cho bảng `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`matg`);

--
-- Chỉ mục cho bảng `tailieu`
--
ALTER TABLE `tailieu`
  ADD PRIMARY KEY (`matailieu`);

--
-- Chỉ mục cho bảng `tailieuchitiet`
--
ALTER TABLE `tailieuchitiet`
  ADD PRIMARY KEY (`macabiet`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`matheloai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `muontra`
--
ALTER TABLE `muontra`
  MODIFY `id_muontra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ngonngu`
--
ALTER TABLE `ngonngu`
  MODIFY `mann` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nhacc`
--
ALTER TABLE `nhacc`
  MODIFY `mancc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `nhaxb`
--
ALTER TABLE `nhaxb`
  MODIFY `manxb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tacgia`
--
ALTER TABLE `tacgia`
  MODIFY `matg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tailieu`
--
ALTER TABLE `tailieu`
  MODIFY `matailieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tailieuchitiet`
--
ALTER TABLE `tailieuchitiet`
  MODIFY `macabiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `matheloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
