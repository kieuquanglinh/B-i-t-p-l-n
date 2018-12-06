-- Table structure for table `quanhuyen`
--

CREATE TABLE `quanhuyen` (
  `idQH` int(11) NOT NULL,
  `tenQH` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idTT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quanhuyen`
--

INSERT INTO `quanhuyen` (`idQH`, `tenQH`, `idTT`) VALUES
(1, 'Ba Đình', 1),
(2, 'Hoàn Kiếm', 1),
(3, 'Tây Hồ', 1),
(4, 'Long Biên', 1),
(5, 'Cầu Giấy', 1),
(6, 'Đống Đa', 1),
(7, 'Hai Bà Trưng', 1),
(8, 'Hoàng Mai', 1),
(9, 'Thanh Xuân', 1),
(10, 'Hà Đông', 1),
(11, 'Sơn Tây', 1),
(12, 'Sóc Sơn', 1),
(13, 'Đông Anh', 1),
(14, 'Gia Lâm', 1),
(15, 'Từ Liêm', 1),
(17, 'Mê Linh', 1),
(18, 'Ba Vì', 1),
(19, 'Phúc Thọ', 1),
(20, 'Đan Phượng', 1),
(21, 'Hoài Đức', 1),
(22, 'Quốc Oai', 1),
(23, 'Thạch Thất', 1),
(24, 'Chương Mỹ', 1),
(25, 'Thanh Oai', 1),
(26, 'Thường Tín', 1),
(27, 'Phú Xuyên', 1),
(28, 'Ứng Hòa', 1),
(29, 'Mỹ Đức', 1);

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE `thanhvien` (
  `tendangnhap` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matkhau` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`tendangnhap`, `matkhau`) VALUES
('linhkq', '$2y$10$qUp07E27Woh1s8s8Tt31Y.5eC3jAKr4e0A5ReYhaZ4g/4HARMicZK');

-- --------------------------------------------------------

--
-- Table structure for table `tinhthanh`
--

CREATE TABLE `tinhthanh` (
  `idTT` int(11) NOT NULL,
  `tenTT` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idVM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tinhthanh`
--

INSERT INTO `tinhthanh` (`idTT`, `tenTT`, `idVM`) VALUES
(1, 'TP Hà Nội', 1),
(2, 'Lào Cai', 1),
(3, 'Hà Giang', 1),
(4, 'Cao Bằng', 1),
(5, 'Bắc Cạn', 1),
(6, 'Tuyên Quang', 1),
(7, 'Điện Biên', 1),
(8, 'Lai Châu', 1),
(9, 'Sơn La', 1),
(10, 'Yên Bái', 1),
(11, 'Hòa Bình', 1),
(12, 'Thái Nguyên', 1),
(13, 'Lạng Sơn', 1),
(14, 'Quảng Ninh', 1),
(15, 'Bắc Giang', 1),
(16, 'Phú Thọ', 1),
(17, 'Vĩnh Phúc', 1),
(18, 'Bắc Ninh', 1),
(19, 'Hải Dương', 1),
(20, 'TP Hải Phòng', 1),
(21, 'Hưng Yên', 1),
(22, 'Thái Bình', 1),
(23, 'Hà Nam', 1),
(24, 'Nam Định', 1),
(25, 'Ninh Bình', 1),
(26, 'TP Đà Nẵng', 2),
(27, 'Thanh Hóa', 2),
(28, 'Nghệ An', 2),
(29, 'Hà Tĩnh', 2),
(30, 'Quảng Bình', 2),
(31, 'Quảng Trị', 2),
(32, 'Thừa Thiên Huế', 2),
(33, 'Quảng Nam', 2),
(34, 'Quảng Ngãi', 2),
(35, 'Bình Định', 2),
(36, 'Phú Yên', 2),
(37, 'Khánh Hóa', 2),
(38, 'Ninh Thuận', 2),
(39, 'Bình Thuận', 2),
(40, 'Kon Tum', 2),
(41, 'Gia Lai', 2),
(42, 'Đắk Lắk', 2),
(43, 'Đắk Nông', 2),
(44, 'Lâm Đồng', 2),
(45, 'TP Hồ Chí Minh', 3),
(46, 'Bình Phước', 3),
(47, 'Tây Ninh', 3),
(48, 'Bình Dương', 3),
(49, 'Đồng Nai', 3),
(50, 'Bà Rịa - Vũng Tàu', 3),
(51, 'Long An', 3),
(52, 'Tiền Giang', 3),
(53, 'Bến Trê', 3),
(54, 'Trà Vinh', 3),
(55, 'Vĩnh Long', 3),
(56, 'Đồng Tháp', 3),
(57, 'An Giang', 3),
(58, 'Kiên Giang', 3),
(59, 'TP Cần Thơ', 3),
(60, 'Hậu Giang', 3),
(61, 'Bạc Liêu', 3),
(62, 'Sóc Trăng', 3),
(63, 'Cà Mau', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.svg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;