-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 19, 2023 lúc 10:53 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `product06`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_binhluan`
--

CREATE TABLE `tbl_binhluan` (
  `id` int(11) NOT NULL,
  `noidung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postdate` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idpro` int(10) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `iduser` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_binhluan`
--

INSERT INTO `tbl_binhluan` (`id`, `noidung`, `postdate`, `idpro`, `name`, `iduser`) VALUES
(4, 'ádasdasd', '04:53:33pm 01/11', 80, 'hhhhh', 0),
(13, 'ádasdasd', '06:30:42pm 01/11', 80, 'anhdeptrai', 0),
(14, 'tội việt quá', '06:31:36pm 01/11', 80, 'anhdeptrai', 0),
(15, 'sadsadas', '06:41:47pm 01/11', 80, '', 0),
(16, 'nam', '06:42:00pm 01/11', 80, '', 0),
(17, 'sadsadas', '06:44:53pm 01/11', 80, 'anhdeptrai', 0),
(22, '', NULL, 0, 'aa', 0),
(25, '', NULL, 0, 'aa', 0),
(26, '', NULL, 0, 'aa', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idsp` int(10) NOT NULL,
  `img` varchar(50) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `gia` double(10,0) NOT NULL,
  `soluong` int(10) NOT NULL,
  `size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `iduser`, `idsp`, `img`, `tensp`, `gia`, `soluong`, `size`) VALUES
(465, 33, 184, 'upload/3bg.jpg', ' BLACK BLOCK BACKPACK', 620000, 3, 's'),
(487, 0, 184, 'upload/3bg.jpg', ' BLACK BLOCK BACKPACK', 620000, 1, 's'),
(488, 0, 184, 'upload/3bg.jpg', ' BLACK BLOCK BACKPACK', 620000, 1, 's'),
(489, 0, 184, 'upload/3bg.jpg', ' BLACK BLOCK BACKPACK', 620000, 1, 's'),
(490, 0, 184, 'upload/3bg.jpg', ' BLACK BLOCK BACKPACK', 620000, 1, 's'),
(491, 0, 184, 'upload/3bg.jpg', ' BLACK BLOCK BACKPACK', 620000, 1, 's'),
(492, 0, 184, 'upload/3bg.jpg', ' BLACK BLOCK BACKPACK', 620000, 1, 'm'),
(493, 0, 184, 'upload/3bg.jpg', ' BLACK BLOCK BACKPACK', 620000, 1, 'm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id` int(4) NOT NULL,
  `tendm` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `uutien` int(4) NOT NULL DEFAULT 0,
  `hienthi` tinyint(1) NOT NULL DEFAULT 1,
  `soluong` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id`, `tendm`, `uutien`, `hienthi`, `soluong`) VALUES
(24, 'Hoodie', 0, 1, 16),
(25, 'Tee & Polo', 0, 1, 16),
(26, 'Short & Pants', 0, 1, 16),
(31, 'Bags', 0, 1, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `sdt` varchar(15) NOT NULL,
  `diachi` varchar(250) NOT NULL,
  `iduser` int(10) NOT NULL,
  `tongtien` float(11,0) NOT NULL,
  `thang` int(10) NOT NULL,
  `ngay` int(10) NOT NULL,
  `nam` int(10) NOT NULL,
  `gio` varchar(15) NOT NULL,
  `trangthai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_donhang`
--

INSERT INTO `tbl_donhang` (`id`, `name`, `gmail`, `sdt`, `diachi`, `iduser`, `tongtien`, `thang`, `ngay`, `nam`, `gio`, `trangthai`) VALUES
(318, 'Trần Văn Anh', 'anht87259@gmail.com', '0833598807', 'Quận 12', 31, 4080000, 12, 16, 2022, '19:36:15', 4),
(319, 'Trần Văn Anh', 'anht87259@gmail.com', '0833598807', 'agagagaga', 31, 9920000, 12, 16, 2022, '19:45:45', 4),
(320, 'Trần Văn Anh', 'anht87259@gmail.com', '0833598807', 'quận7 ', 32, 1860000, 12, 17, 2022, '10:51:10', 4),
(328, 'Trần Văn Anh', 'anht87259@gmail.com', '0833598807', 'sadasdasdasd', 0, 620000, 7, 20, 2023, '02:22:15', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhaphang`
--

CREATE TABLE `tbl_nhaphang` (
  `id` int(11) NOT NULL,
  `noinhaphang` text NOT NULL,
  `idsp` int(20) NOT NULL,
  `soluong` int(20) NOT NULL,
  `gia` int(20) NOT NULL,
  `tensp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_nhaphang`
--

INSERT INTO `tbl_nhaphang` (`id`, `noinhaphang`, `idsp`, `soluong`, `gia`, `tensp`) VALUES
(184, 'china', 184, 10, 10, ''),
(185, 'china', 184, 10, 10, ''),
(186, 'china', 184, 10, 10, ''),
(187, '', 0, 0, 0, ''),
(188, '', 0, 0, 0, ''),
(189, 'TRUNG QUỐC', 0, 10, 10, 'AO GAO ĐỎ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id` int(6) NOT NULL,
  `tensp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gia` double(10,0) NOT NULL DEFAULT 0,
  `iddm` int(4) NOT NULL,
  `view` int(100) NOT NULL,
  `xuat` int(11) NOT NULL,
  `soluongs` int(10) NOT NULL,
  `soluongm` int(10) NOT NULL,
  `soluongl` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id`, `tensp`, `img`, `gia`, `iddm`, `view`, `xuat`, `soluongs`, `soluongm`, `soluongl`) VALUES
(133, 'INHUMAN HOODIE', 'upload/1h.jpg', 650000, 24, 0, 0, 0, 0, 0),
(134, 'GLOSSY TEE', 'upload/1tea.jpg', 380000, 25, 0, 0, 0, 0, 0),
(135, 'ENERGETIC PANT', 'upload/1bottoms.jpg', 650000, 26, 0, 1, 0, 0, 0),
(136, 'CURVE CROSSBODY QUITED BAG SKU', 'upload/1bg.jpg', 360000, 31, 0, 0, 0, 0, 0),
(137, 'MONOGRAM LONG SLEEVE POLO', 'upload/2tea.jpg', 700000, 24, 0, 0, 0, 0, 0),
(138, 'LELIS POLO', 'upload/3tea.jpg', 405000, 25, 0, 0, 0, 0, 0),
(139, 'CABINET BONE SHIRT', 'upload/4tea.jpg', 405000, 25, 0, 0, 0, 0, 0),
(140, 'MOLTING INSIDE TEE', 'upload/6tea.jpg', 380000, 25, 0, 0, 0, 0, 0),
(141, 'FALL IN LOVE TEE', 'upload/7tea.jpg', 380000, 25, 0, 0, 0, 0, 0),
(142, 'WATER SPLASH TEE', 'upload/8tea.jpg', 400000, 25, 0, 0, 0, 0, 0),
(143, 'RIPPED TEE', 'upload/9tea.jpg', 430000, 25, 0, 1, 0, 0, 0),
(144, 'PANTHER ROAR TEE', 'upload/10tea.jpg', 380000, 25, 0, 1, 0, 0, 0),
(145, 'DETERMINED TEE', 'upload/11tea.jpg', 380000, 25, 0, 0, 0, 0, 0),
(146, 'IMMATERIAL TEE', 'upload/12tea.jpg', 380000, 25, 0, 1, 0, 0, 0),
(147, 'VIBRANCE TEE', 'upload/13tea.jpg', 380000, 25, 0, 0, 0, 0, 0),
(148, 'FACED TIEDYE TEE', 'upload/14tea.jpg', 380000, 25, 0, 1, 0, 0, 0),
(149, 'MADNESS TEE', 'upload/tea15.jpg', 350000, 25, 0, 0, 0, 0, 0),
(150, 'GARNITURE BLACK SHIRT', 'upload/tea16.jpg', 450000, 25, 0, 0, 0, 0, 0),
(152, 'SUNDRY PANT', 'upload/2bottoms.jpg', 630000, 26, 0, 0, 0, 0, 0),
(153, 'INFERIOR SHORT', 'upload/3bottoms.jpg', 430000, 26, 0, 0, 0, 0, 0),
(154, 'FACADE PANT', 'upload/4b.jpg', 4300000, 26, 0, 0, 0, 0, 0),
(155, 'CURVED SHORT', 'upload/5n.jpg', 580000, 26, 0, 0, 0, 0, 0),
(156, 'MULTI TROUSER PANTS', 'upload/6b.jpg', 330000, 26, 0, 0, 0, 0, 0),
(157, 'MULTI TROUSER PANTS', 'upload/7b.jpg', 440000, 26, 0, 1, 0, 0, 0),
(158, 'HINGE CARGO PANTS', 'upload/8b.jpg', 440000, 26, 0, 0, 0, 0, 0),
(159, 'CHESS ZIP PANTS', 'upload/9b.jpg', 530000, 26, 0, 1, 0, 0, 0),
(160, 'ORDINARY TRACK PANTS', 'upload/10b.jpg', 490000, 26, 0, 1, 0, 0, 0),
(161, 'EMERY SHORTS', 'upload/11b.jpg', 340000, 26, 0, 1, 0, 0, 0),
(162, 'MARBLE CARGO PANTS', 'upload/12b.jpg', 450000, 26, 0, 0, 0, 0, 0),
(163, 'BIG POCKET SHORTS', 'upload/13b.jpg', 305000, 26, 0, 0, 0, 0, 0),
(164, 'HADES SIGNATURE CARGO PANTS', 'upload/14b.jpg', 490000, 26, 0, 0, 0, 0, 0),
(165, 'BASIC SHORTS', 'upload/15b.jpg', 210000, 26, 0, 0, 0, 0, 0),
(166, ' HADES / NEW BALANCE TROUSER PANTS', 'upload/16b.jpg', 270000, 26, 0, 0, 0, 0, 0),
(167, 'WAY ON CLOUD HOODIE', 'upload/2h.jpg', 585000, 24, 0, 0, 0, 0, 0),
(168, 'WILDCAT SWEATER', 'upload/3h.jpg', 530000, 24, 0, 0, 0, 0, 0),
(169, 'CARREAUX HOODIE', 'upload/4h.jpg', 620000, 24, 0, 0, 0, 0, 0),
(170, 'CARREAUX HOODIE', 'upload/5h.jpg', 620000, 24, 0, 0, 0, 0, 0),
(171, 'WATER SPLASH HOODIE', 'upload/6h.jpg', 660000, 24, 0, 0, 0, 0, 0),
(172, 'MONOGRAM CARDIGAN', 'upload/7h.jpg', 700000, 24, 0, 0, 0, 0, 0),
(173, 'SNIPER SCOPE HOODIE', 'upload/8h.jpg', 660000, 24, 0, 0, 0, 0, 0),
(174, 'CONCRETE TIEDYE SWEATER', 'upload/9h.jpg', 660000, 24, 0, 0, 0, 0, 0),
(175, 'RED VELVET CARDIGAN', 'upload/10h.jpg', 530000, 24, 0, 1, 0, 0, 0),
(176, ' BUTTERFLY EFFECTS SWEATER', 'upload/6h.jpg', 530000, 24, 0, 0, 0, 0, 0),
(177, ' BUTTERFLY EFFECTS SWEATER', 'upload/11h.jpg', 530000, 24, 0, 0, 0, 0, 0),
(178, 'ENFOLD JACKET ', 'upload/12h.jpg', 5950000, 24, 0, 1, 0, 0, 0),
(179, 'SPORT PATCHES HOODIE', 'upload/13h.jpg', 590000, 24, 0, 0, 0, 0, 0),
(180, 'FERNERY HOODIE', 'upload/14h.jpg', 620000, 24, 0, 1, 0, 0, 0),
(181, 'HADES MONOGRAM GILE', 'upload/2tea.jpg', 320000, 25, 1, 1, 5, 0, 0),
(182, 'MONOGRAM CARDIGAN', 'upload/5tea.jpg', 230000, 25, 0, 0, 0, 0, 0),
(183, 'PASSENGER BACKPACK', 'upload/2bg.jpg', 750000, 31, 0, 0, 0, 0, 0),
(184, ' BLACK BLOCK BACKPACK', 'upload/3bg.jpg', 620000, 31, 1, 1, 23, 24, 30),
(185, 'METAL MINI BAG', 'upload/4bg.jpg', 380000, 31, 0, 0, 0, 0, 0),
(186, 'MINUTE BAG', 'upload/5bg.jpg', 2950000, 31, 0, 1, 0, 0, 0),
(187, 'AGOM BACKPACK', 'upload/6bg.jpg', 560000, 31, 0, 1, 0, 0, 0),
(188, 'GOTHIC BACKPACK', 'upload/7bg.jpg', 650000, 31, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_spdonhang`
--

CREATE TABLE `tbl_spdonhang` (
  `id` int(10) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `gia` double NOT NULL,
  `soluong` int(50) NOT NULL,
  `iddonhang` int(10) NOT NULL,
  `idsp` int(10) NOT NULL,
  `size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_spdonhang`
--

INSERT INTO `tbl_spdonhang` (`id`, `tensp`, `img`, `gia`, `soluong`, `iddonhang`, `idsp`, `size`) VALUES
(527, 'HADES MONOGRAM GILE', 'upload/2tea.jpg', 320000, 5, 318, 181, 's'),
(528, ' BLACK BLOCK BACKPACK', 'upload/3bg.jpg', 620000, 4, 318, 184, 'm'),
(529, ' BLACK BLOCK BACKPACK', 'upload/3bg.jpg', 620000, 6, 319, 184, 'm'),
(530, ' BLACK BLOCK BACKPACK', 'upload/3bg.jpg', 620000, 10, 319, 184, 's'),
(531, ' BLACK BLOCK BACKPACK', 'upload/3bg.jpg', 620000, 3, 320, 184, 'l'),
(532, ' BLACK BLOCK BACKPACK', 'upload/3bg.jpg', 620000, 1, 321, 184, 's'),
(533, ' BLACK BLOCK BACKPACK', 'upload/3bg.jpg', 620000, 6, 322, 184, 'm'),
(534, ' BLACK BLOCK BACKPACK', 'upload/3bg.jpg', 620000, 6, 328, 184, 's');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(4) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `gmaildh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `namedh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `address`, `email`, `user`, `pass`, `role`, `gmaildh`, `namedh`, `sdt`) VALUES
(23, 'Trần Văn Anh', NULL, '222', 'anhdeptrai', '456', 1, '', '', ''),
(31, 'Lê Thị Hồng Anh', 'agagagaga', 'anhanh123@gmail.com', 'honganh', '123', 0, 'anht87259@gmail.com', 'Trần Văn Anh', '0833598807'),
(32, 'Trần Văn Anh', 'quận7 ', 'anht87259@gmail.com', 'admin', '111', 0, 'anht87259@gmail.com', 'Trần Văn Anh', '0833598807'),
(33, 'Vui', NULL, NULL, 'vui', '6868', 2, '', '', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_nhaphang`
--
ALTER TABLE `tbl_nhaphang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sanpham_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `tbl_spdonhang`
--
ALTER TABLE `tbl_spdonhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=494;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=329;

--
-- AUTO_INCREMENT cho bảng `tbl_nhaphang`
--
ALTER TABLE `tbl_nhaphang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT cho bảng `tbl_spdonhang`
--
ALTER TABLE `tbl_spdonhang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=535;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `fk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `tbl_danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
