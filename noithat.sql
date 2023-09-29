-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 12, 2022 lúc 02:42 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `noithat`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `mabinhluan` int(11) NOT NULL,
  `binhluan` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT 1,
  `thoigian` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `matk` int(11) NOT NULL,
  `masp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`mabinhluan`, `binhluan`, `trangthai`, `thoigian`, `matk`, `masp`) VALUES
(1, 'Sản phẩm tốt lắm', 2, '', 28, 8),
(3, 'Giao Hàng Rất Nhanh', 2, '', 23, 9),
(8, ' Bàn ngồi vui lắm', 2, '01.06.2022 9:27 pm', 28, 10),
(9, ' Bàn ngồi vừa vặn', 2, '01.06.2022 9:29 pm', 28, 12),
(12, ' Giao hàng nhanh', 2, '03.06.2022 10:08 am', 28, 11),
(14, ' Sản phẩm đẹp', 2, '08.06.2022 11:14 am', 28, 11),
(15, ' Nằm êm lắm', 1, '08.06.2022 2:00 pm', 40, 29),
(16, ' Độ nảy tốt', 1, '08.06.2022 2:00 pm', 40, 29);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanh`
--

CREATE TABLE `hinhanh` (
  `maha` int(11) NOT NULL,
  `anhchitiet` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `masp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hinhanh`
--

INSERT INTO `hinhanh` (`maha`, `anhchitiet`, `masp`) VALUES
(1, './Images/BanCoffeeCamThach.png', 8),
(2, './Images/BanCoffeeCamThach1.png', 8),
(3, './Images/BanCoffeeLV.png', 9),
(4, './Images/BanCoffeeLV1.png', 9),
(5, './Images/BanCoffee.png', 10),
(6, './Images/BanCoffee1.png', 10),
(7, './Images/BanAn.png', 11),
(8, './Images/BanAn1.png', 11),
(9, './Images/BanLamViec.png', 12),
(10, './Images/BanLamViec1.png', 12),
(11, './Images/BanLamViecSmith.png', 13),
(12, './Images/BanLamViecSmith1.png', 13),
(13, './Images/TuBupPheMobilia.png', 14),
(14, './Images/TuBupPheMobilia1.png', 14),
(15, './Images/TuThapBox.png', 15),
(16, './Images/TuThapBox1.png', 15),
(17, './Images/TuGiayWood.png', 16),
(18, './Images/TuGiayWood1.png', 16),
(19, './Images/TuTiviChris.png', 17),
(20, './Images/TuTiviChris1.png', 17),
(21, './Images/TuTiviMobilia.png', 18),
(22, './Images/TuTiviMobilia1.png', 18),
(23, './Images/TuTiviFlora.png', 19),
(24, './Images/TuTiviFlora1.png', 19),
(25, './Images/KeSachBox.png', 20),
(26, './Images/KeSachBox1.png', 20),
(27, './Images/TuDauGiuongRomeo.png', 21),
(28, './Images/TuDauGiuongRomeo1.png', 21),
(29, './Images/TuGiayUtilities.png', 22),
(30, './Images/TuGiayUtilities1.png', 22),
(31, './Images/Ghe01A.png', 23),
(32, './Images/Ghe01B.png', 23),
(33, './Images/Ghe02A.png', 24),
(34, './Images/Ghe02B.png', 24),
(35, './Images/Ghe03A.png', 25),
(36, './Images/Ghe03B.png', 25),
(37, './Images/Ghe04A.png', 26),
(38, './Images/Ghe04B.png', 26),
(39, './Images/Ghe05A.png', 27),
(40, './Images/Ghe05B.png', 27),
(41, './Images/Ghe06A.png', 28),
(42, './Images/Ghe06B.png', 28),
(43, './Images/Sofa01A.png', 29),
(44, './Images/Sofa01B.png', 29),
(45, './Images/Sofa02A.png', 30),
(46, './Images/Sofa02B.png', 30),
(47, './Images/Sofa03A.png', 31),
(48, './Images/Sofa03B.png', 31),
(49, './Images/Sofa04A.png', 32),
(50, './Images/Sofa04B.png', 32),
(51, './Images/Sofa05A.png', 33),
(52, './Images/Sofa05B.png', 33),
(53, './Images/Sofa06A.png', 34),
(54, './Images/Sofa06B.png', 34),
(55, './Images/Giuong01A.png', 35),
(56, './Images/Giuong01B.png', 35),
(57, './Images/Giuong02A.png', 36),
(58, './Images/Giuong02B.png', 36),
(59, './Images/Giuong03A.png', 37),
(60, './Images/Giuong03B.png', 37),
(61, './Images/Tu01A.png', 38),
(62, './Images/Tu01B.png', 38),
(63, './Images/Tu02A.png', 39),
(64, './Images/Tu02B.png', 39),
(65, './Images/Tu03A.png', 40),
(66, './Images/Tu03B.png', 40);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `makm` int(11) NOT NULL,
  `tenkm` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `giatrikm` int(11) NOT NULL,
  `ngaybd` datetime NOT NULL,
  `ngaykt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`makm`, `tenkm`, `giatrikm`, `ngaybd`, `ngaykt`) VALUES
(1, 'Giải Phóng Hàng Tồn', 2, '2022-01-01 00:00:00', '2023-01-01 00:00:00'),
(2, 'Mừng Lễ Lớn', 5, '2022-04-30 00:00:00', '2022-09-02 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichsumuahang`
--

CREATE TABLE `lichsumuahang` (
  `malichsu` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `matk` int(11) NOT NULL,
  `ngaythanhtoan` datetime NOT NULL,
  `soluong` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lichsumuahang`
--

INSERT INTO `lichsumuahang` (`malichsu`, `masp`, `matk`, `ngaythanhtoan`, `soluong`, `tongtien`) VALUES
(12, 16, 28, '2022-06-01 16:57:48', 2, 5980000),
(13, 13, 28, '2022-06-01 16:38:51', 1, 4390000),
(14, 35, 28, '2022-06-01 16:39:07', 1, 23990000),
(15, 32, 28, '2022-06-03 16:39:10', 1, 16790000),
(16, 10, 28, '2022-06-04 16:39:14', 1, 8890000),
(17, 21, 28, '2022-06-01 16:39:27', 1, 4690000),
(19, 8, 29, '2022-06-02 11:37:05', 5, 6000000),
(20, 12, 28, '2022-05-12 18:17:17', 1, 1790000),
(21, 14, 28, '2022-06-03 16:39:33', 1, 9990000),
(22, 13, 28, '2022-06-04 16:39:36', 1, 4390000),
(23, 37, 28, '2022-05-05 18:17:32', 1, 7790000),
(24, 38, 28, '2022-06-05 16:56:34', 1, 5990000),
(25, 13, 2, '2022-06-05 18:24:28', 4, 17560000),
(26, 13, 2, '2022-06-05 18:26:09', 3, 13170000),
(27, 38, 2, '2022-06-05 18:47:12', 2, 11980000),
(28, 12, 2, '2022-06-05 19:53:03', 3, 5370000),
(30, 11, 27, '2022-06-07 15:31:17', 3, 68970000),
(31, 12, 28, '2022-06-08 11:16:06', 6, 10740000),
(32, 11, 28, '2022-06-08 11:17:54', 1, 22990000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `maloaisp` int(11) NOT NULL,
  `tenloaisp` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`maloaisp`, `tenloaisp`) VALUES
(1, 'Bàn'),
(2, 'Ghế'),
(3, 'Sofa'),
(4, 'Giường'),
(5, 'Kệ Tủ'),
(6, 'Tủ Quần Áo'),
(15, 'Tủ Giày'),
(16, 'Tủ Áo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `maquyen` int(11) NOT NULL,
  `tenquyen` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `chitiet` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phanquyen`
--

INSERT INTO `phanquyen` (`maquyen`, `tenquyen`, `chitiet`) VALUES
(1, 'Quyền khách hàng', 'Được phép đặt hàng, thanh toán'),
(2, 'Quyền quản trị viên', 'Được phép thao tác trên tất cả các chức năng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(11) NOT NULL,
  `tensp` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `giasp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL DEFAULT 1,
  `mota` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `anhdaidien` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `chatlieu` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mausac` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `kichthuoc` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `xuatxu` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `baohanh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT 1,
  `maloaisp` int(11) NOT NULL,
  `makm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `giasp`, `soluong`, `mota`, `anhdaidien`, `chatlieu`, `mausac`, `kichthuoc`, `xuatxu`, `baohanh`, `trangthai`, `maloaisp`, `makm`) VALUES
(8, 'Bàn Coffee Cẩm Thạch Grand Tròn', 7790000, 48, 'Bàn tròn tinh tế, cấu tạo chắc chắn, an toàn\r\nMặt bàn đá cẩm thạch bền đẹp, ít trầy xước\r\nBề mặt trơn nhẵn, độ sáng bóng cao, vân tự nhiên\r\nChân inox sơn bóng, chống gỉ sét, chịu lực tốt\r\nPhù hợp với nhiều sản phẩm ghế khác nhau', './Images/BanCoffeeCamThach.png', 'Đá cẩm thạch', 'Đen', '89x75 cm', 'SIMPLEHOME (Thương Hiệu Cao Cấp)', '24 Tháng', 1, 1, 1),
(9, 'Bàn Coffee Cẩm Thạch Las Vegas', 11990000, 50, 'Làm từ đá cẩm thạch vân tự nhiên\r\nChân kim loại sáng bóng, chống gỉ sét\r\nThiết kế hiện đại theo phong cách Tây Âu\r\nTạo sự sang trọng và quý phái cho gia chủ', './Images/BanCoffeeLV.png', 'Đá cẩm thạch', 'Màu cẩm thạch tự nhiên', '125x65x45 cm', 'SIMPLEHOME (Thương Hiệu Cao Cấp)', '24 Tháng', 1, 1, 1),
(10, 'Bàn Coffee Tròn Grand', 8890000, 49, 'Làm từ đá ceramic độ bền cao\r\nBề mặt mịn bóng, chống xước, vân đá đẹp tự nhiên\r\nChân kim loại sơn tĩnh điện cao cấp\r\nGợi nhớ vẻ đẹp kiểu Ý phóng khoáng, mạnh mẽ', './Images/BanCoffee.png', 'Ceramic', 'Trắng', '89 cm', 'SIMPLEHOME (Thương Hiệu Cao Cấp)', '24 Tháng', 1, 1, 1),
(11, 'Bàn Ăn Mở Rộng', 22990000, 46, 'Làm từ đá ceramic độ bền cao\r\nMặt bàn vân sáng bóng đẹp tự nhiên\r\nChân kim loại chắc chắn, cố định\r\nMang phong cách Châu Âu sang trọng, thanh lịch', './Images/BanAn.png', 'Ceramic', 'Đen', '(180-220)x90x76 cm', 'SIMPLEHOME (Thương Hiệu Cao Cấp)', '24 Tháng', 1, 1, 2),
(12, 'Bàn Làm Việc Tynn Walnut', 1790000, 40, 'Làm từ gỗ công nghiệp với độ bền cao\r\nBề mặt phẳng, nhẵn, hạn chế nứt mẻ\r\nPhù hợp với mọi không gian từ nhỏ tới lớn\r\nSử dụng làm bàn làm việc, bàn học tại nhà hoặc văn phòng', './Images/BanLamViec.png', 'Gỗ công nghiệp', 'Nâu', '116x55x75 cm', 'SIMPLEHOME (Thương Hiệu Cao Cấp)', '24 Tháng', 1, 1, 2),
(13, 'Bàn Làm Việc SMITH', 4390000, 41, 'Làm từ gỗ MDF sơn bóng\r\nChân kim loại sơn tĩnh điện\r\nThiết kế chữ X cách điệu hai bên cạnh\r\nChất lượng cao bền bỉ với thời gian', './Images/BanLamViecSmith.png', 'Gỗ MDF', 'Trắng', '120x55x75 cm', 'SIMPLEHOME (Thương Hiệu Cao Cấp)', '24 Tháng', 1, 1, 2),
(14, 'Tủ Búp Phê MOBILIA ', 9990000, 49, 'Chất liệu gỗ chọn lọc, tẩm sấy kĩ càng nên gỗ không bị ăn mòn, mối mọt, không bị ẩm mốc như các loại gỗ thông thường khác. Chân kim loại không gỉ, chịu được lực tốt và chắc chắn. Từ trái sang phải chia làm 2 ngăn tủ : ngăn mở và ngăn kéo, cho phép bạn linh hoạt để đồ dùng, đồ đạc một cách có khoa học, tránh bị thất lạc. Ngoài ra Tủ Búp Phê MOBILIA - Nâu có vân gỗ nổi bật, nâu sáng, tôn lên sự ấm cúng, bạn có thể dễ dàng di chuyển và tiết kiệm diện tích. ', './Images/TuBupPheMobilia.png', 'Gỗ', 'Nâu', '150x44x86.5 cm', 'SIMPLEHOME (Thương Hiệu Cao Cấp)', '12 Tháng', 1, 5, 1),
(15, 'Tủ Thấp Box', 4990000, 50, 'Chất liệu làm từ MDF cho độ bền cao, Màu sắc nâu gỗ tao nhã, Kích thước rộng rãi dễ sử dụng', './Images/TuThapBox.png', 'MDF', 'Nâu', '80x39x135 cm', 'SIMPLEHOME (Thương Hiệu Cao Cấp)', '12 Tháng', 1, 5, 1),
(16, 'Tủ Giày Wood ', 2990000, 49, 'Được làm từ gỗ MDF cao cấp\r\nLớp gỗ bên ngoài sơn phủ chống mối mọt\r\nVân gỗ đẹp mắt, bóng và sáng\r\nRộng rãi và chứa đựng tốt', './Images/TuGiayWood.png', 'MDF', 'Trắng', '75x39x108 cm', 'SIMPLEHOME (Thương Hiệu Cao Cấp)', '12 Tháng', 1, 5, 1),
(17, 'Tủ Tivi CHRIS', 4290000, 50, 'Tủ Tivi CHRIS (Trắng) được làm bằng chất liệu gỗ sồi tự nhiên kết hợp MDF cao cấp sử dụng lâu năm, đã qua xử lý chống mối mọt, cong vênh, rất phù hợp với điều kiện khí hậu nóng ẩm của Việt Nam. Bên ngoài được phủ một lớp sơn bảo vệ chống thấm sáng bóng, do đó bạn có thể hoàn toàn yên tâm về chất lượng sản phẩm.', './Images/TuTiviChris.png', 'Gỗ công nghiệp', 'Trắng', '180x45x55 cm', 'SIMPLEHOME (Thương Hiệu Cao Cấp)', '12 Tháng', 1, 5, 1),
(18, 'Tủ Tivi MOBILIA', 3590000, 50, 'Chất liệu gỗ MDF bền đẹp, chắc chắn\r\nChất liệu cao cấp chống mối mọt, ẩm mốc\r\nBề mặt trơn nhẵn, làng mịn, dễ dàng vệ sinh\r\nCấu tạo chắc chắn, khả năng chịu lực tốt', './Images/TuTiviMobilia.png', 'MDF', 'Sồi Đậm', '150x44x85 cm', 'SIMPLEHOME (Thương Hiệu Cao Cấp)', '12 Tháng', 1, 5, 1),
(19, 'Tủ Tivi Flora', 4390000, 50, 'Được sản xuất từ gỗ MDF đạt tiêu chuẩn\r\nBề mặt có lớp kính chịu lực, không bị trầy xước\r\nKiểu dáng tuy đơn giản nhưng vô cùng tinh tế\r\nLà một trong các sản phẩm dẫn đầu xu thế', './Images/TuTiviFlora.png', 'MDF', 'Nâu', '160x39x56 cm', 'SIMPLEHOME (Thương Hiệu Cao Cấp)', '12 Tháng', 1, 5, 1),
(20, 'Kệ Sách Box', 4690000, 49, 'Kệ Tủ Sách đa dụng. Chất liệu từ gỗ công nghiệp bền bỉ. Màu sắc nâu tao nhã', './Images/KeSachBox.png', 'Gỗ công nghiệp', 'Nâu', '80x29x175 cm', 'SIMPLEHOME (Thương Hiệu Cao Cấp)', '12 Tháng', 1, 5, 1),
(21, 'Tủ Đầu Giường ROMEO', 4690000, 49, 'Chất liệu từ mặt đá nhân tạo, mặt gỗ dán veener\r\nCông nghiệp tiêu chuẩn E1, ngăn kéo giảm chấn\r\nChân gỗ phong, tay nắm kim loại mạ vàng\r\nKiểu dáng chắc chắn, tiện nghi', './Images/TuDauGiuongRomeo.png', 'Gỗ', 'Nâu Đậm', '55x39.5x43 cm', 'GAUSMANN (Thương Hiệu: Đức)', '12 Tháng', 1, 5, 1),
(22, 'Tủ Giày UTILITIES', 2980000, 50, 'Thiết kế tiện dụng nhiều ngăn rộng rãiPhù hợp với mọi không gian nội thất', './Images/TuGiayUtilities.png', 'MDF', 'Sồi Đậm', '100x39x125.5 cm', 'SIMPLEHOME (Thương Hiệu Cao Cấp)', '12 Tháng', 1, 5, 1),
(23, 'Ghế Garden', 890000, 50, 'Chất liệu: Khung sắt, mặt ghế nhựa giả gỗ\r\nKiểu dáng và màu sắc trang nhã\r\nChất liệu bền bỉ, chắc chắn\r\nTô điểm cho không gian thêm tiện nghi', './Images/Ghe01A.png', 'Sắt', 'Nâu', '79x47x42 cm', 'SIMPLEHOME (Thương Hiệu Cao Cấp)', '6 Tháng', 1, 2, 1),
(24, 'Ghế Xếp Florida', 490000, 50, 'Chất liệu: Kim loại bọc vải\r\nĐệm ngồi bọc vải êm ái, đàn hồi tốt\r\nKhung kim loại bền chặt, an toàn\r\nKiểu dáng dạng ghế gập, thiết kế đơn giản', './Images/Ghe02A.png', 'Kim loại bọc vải', 'Đen', '47x43x78 cm', 'SIMPLEHOME (Thương Hiệu Cao Cấp)', '6 Tháng', 1, 2, 1),
(25, 'Ghế Ăn MOBILIA', 690000, 50, 'Tựa lưng là miếng gỗ cong ra nhẹ nhàng\r\nĐệm ngồi dày vừa phải, thoáng khí\r\nGhế ăn mang đến sự hiện đại, bắt kịp xu thế\r\nAn tâm khi ngồi lâu mà không bị mỏi', './Images/Ghe03A.png', 'Khung gỗ bọc vải', 'Sồi/Xám', '49.5x46x79 cm', 'SIMPLEHOME (Thương Hiệu Cao Cấp)', '6 Tháng', 1, 2, 1),
(26, 'Ghế Thư Giãn Stella', 9690000, 50, 'Chất liệu: Khung gỗ bọc vải\r\nChất vải cao cấp mềm mịn, êm ái\r\nDùng để ngồi thư giãn, đọc sách, xem tivi,...\r\nĐặc biệt theo xu hướng hiện đại, tối giản đang thịnh hành hiện nay', './Images/Ghe04A.png', 'Khung gỗ bọc vải', 'Xám Đậm', '132x119x70 cm', 'SIMPLEHOME (Thương Hiệu Cao Cấp)', '12 Tháng', 1, 2, 1),
(27, 'Ghế Thư Giãn ', 4190000, 50, 'Chất liệu: Kim loại bọc vải\r\nChân ghế xoay, bọc nhựa PU\r\nTựa lưng cong tinh tế giúp thư giãn \r\nThiết kế bành rộng, ngồi thoải mái', './Images/Ghe05A.png', 'Kim loại bọc vải', 'Xám Đậm', '76x75x88 cm', 'SIMPLEHOME (Thương Hiệu Cao Cấp)', '12 Tháng', 1, 2, 1),
(28, 'Ghế Thư Giãn Zorro', 8990000, 50, 'Ghế được bọc da bền bỉ bên ngoài\r\nMặt trong được bọc vải mềm mịn, êm ái\r\nKhung kim loại cực kỳ chắc chắn\r\nGiúp thư giãn tối đa khi tựa và duỗi chân\r\nThiết kế sang trọng, quý phái', './Images/Ghe06A.png', 'Kim loại bọc da', 'Xám', '78x140x98 cm', 'GAUSMANN (Thương Hiệu: Đức)', '12 Tháng', 1, 2, 1),
(29, 'Sofa 3 Chỗ Bobby', 8990000, 50, 'Sản phẩm sở hữu kiểu dáng hiện đại và tiện ích với mặt ghế rộng rãi nên bạn có thể ngồi duỗi chân hay nằm đều được. Khả năng cân bằng và ổn định tốt giúp ghế đứng vững trên các mặt phẳng, không bị chông chênh, rung lắc. Sofa có lưng tựa dày để bạn thoải mái nghỉ ngơi sau những giờ làm việc căng thẳng hoặc khi đọc sách, xem tivi thư giãn.', './Images/Sofa01A.png', 'Khung gỗ bọc vải', 'Xám', '205x94x80 cm', 'SIMPLEHOME (Thương Hiệu Cao Cấp)', '24 Tháng', 1, 3, 2),
(30, 'Sofa Lazy ', 2190000, 50, 'Sofa lazy không chỉ là một chiếc sofa mà còn là chiếc giường mini. Với vài thao tác đơn giản bạn đã biến sofa thành chiếc giường êm ái. Sản phẩm có thể chịu được trọng lực lên tới 150kg, sẽ dễ dàng để gia đình bạn nghỉ ngơi và thư giãn trên chiếc sofa này. Khi nằm ghế định hình xương sống à các khớp của bạn đúng, mang đến cảm giác thư giãn tốt nhất. \r\n\r\n', './Images/Sofa02A.png', 'Vải', 'Xám', '78x82x58 cm - 150 kg (Có 7 nấc gập thông minh, có thể mở rộng thành nệm nằm)', 'SIMPLEHOME (Thương Hiệu Cao Cấp)', '24 Tháng', 1, 3, 2),
(31, 'Sofa L Thor', 5490000, 50, 'Chất liệu: Khung gỗ bọc vải\r\nTựa lưng và đệm mút ngồi êm ái\r\nCó thể sắp xếp theo nhiều kiểu khác nhau\r\nSofa đa năng, tiện lợi, lịch lãm', './Images/Sofa03A.png', 'Khung gỗ bọc vải', 'Xám Nhạt', '196x140x83 cm (Sofa có thể sắp xếp làm sofa góc trái, góc phải hoặc làm thành sofa 3 chỗ + đôn)', 'SIMPLEHOME (Thương Hiệu Cao Cấp)', '24 Tháng', 1, 3, 2),
(32, 'Sofa L (Góc Trái)', 16790000, 49, 'Sản phẩm sở hữu kiểu dáng hiện đại và tiện ích với mặt ghế rộng rãi nên bạn có thể ngồi duỗi chân hay nằm đều được. Chân sofa bằng inox chống trượt và chịu được trọng lượng lớn, đảm bảo an toàn khi ngồi. Khả năng cân bằng và ổn định tốt giúp ghế đứng vững trên các mặt phẳng, không bị chông chênh, rung lắc. Sofa có lưng tựa dày để bạn thoải mái nghỉ ngơi sau những giờ làm việc căng thẳng hoặc khi đọc sách, xem tivi thư giãn. ', './Images/Sofa04A.png', 'Khung gỗ bọc PVC', 'Đen', '252.5x216.5x92 cm', 'SIMPLEHOME (Thương Hiệu Cao Cấp)', '24 Tháng', 1, 3, 2),
(33, 'Sofabed L (Góc Trái)', 24990000, 50, 'Với cấu tạo đa năng có thể biến thành chiếc giường khi bạn ngả lưng ghế kéo phần đệm ra, giúp bạn thỏa mái nghỉ ngơi, thư giãn, thỏa mái trong mọi tư thế. Khi không dùng, bạn chỉ việc kéo lại ghế thành sofa để ngồi tiếp khách, coi TV, đọc sách. Sofabed L (Góc Trái) 9604 giúp bạn tiết kiệm chi phí, tiết kiệm diện tích không gian. Cùng với gam xám sẽ là lựa chọn thích hợp cho nhiều không gian nội thất : phòng khách, văn phòng, nhà hàng,..', './Images/Sofa05A.png', 'Khung gỗ bọc vải', 'Xám', '269x104/170x81 cm', 'SIMPLEHOME (Thương Hiệu Cao Cấp)', '24 Tháng', 1, 3, 2),
(34, 'Sofa 2 Chỗ L-16 Fancy', 19990000, 50, 'Chất liệu: Khung gỗ bọc da\r\nKhung xương ghế bằng gỗ tự nhiên\r\nDa bọc màu xám sạch sẽ, sang trọng\r\nĐệm mút ngồi cực êm và thoải mái\r\nSofa phòng khách, căn hộ, chung cư,..', './Images/Sofa06A.png', 'Khung gỗ bọc da cao cấp', 'Xám', '184x100x67/89 cm', 'SIMPLEHOME (Thương Hiệu Cao Cấp)', '24 Tháng', 1, 3, 2),
(35, 'Gường BOSA', 23990000, 49, 'Giường phòng ngủ phong cách Châu Âu\r\nChất liệu ngoại nhập cao cấp, chất lượng cao\r\nKhung siêu chắc chắn giúp tăng tuổi thọ của sản phẩm\r\nTạo cảm giác êm ái, thư thái mỗi khi sử dụng\r\nTô điểm cho không gian phòng ngủ của bạn', './Images/Giuong01A.png', 'Gỗ', 'Xám/Nâu Đậm', '180x200 cm', 'GAUSMANN (Thương Hiệu: Đức)', '12 Tháng', 1, 4, 2),
(36, 'Giường ROMEO', 22290000, 50, 'Nguyên liệu gỗ cao cấp đạt chuẩn E1\r\nBề mặt được phủ bóng chống hút ẩm, dễ lau chùi và hạn chế trầy xước\r\nSản phẩm đã qua xử lý chống cong vênh, mối mọt\r\nKết cấu chắc chắn, an toàn, được trau chuốt về các góc cạnh\r\nKhông chỉ đẹp hơn về mỹ quang mà còn mang lại độ bền chắc lâu dài', './Images/Giuong02A.png', 'Gỗ', 'Nâu Đậm', '180x200 cm', 'GAUSMANN (Thương Hiệu: Đức)', '12 Tháng', 1, 4, 2),
(37, 'Giường 1.6M Nisco', 7790000, 49, 'Chất liệu: Gỗ công nghiệp bọc vải cao cấp\r\nChân nhựa chắc chắn, cố định\r\nKiểu dáng trẻ trung, hiện đại, không gây tiếng ồn\r\nNêm nằm êm ái, giúp thư giãn khi mệt mỏi\r\nMang đến cho bạn một giấc ngủ ngon', './Images/Giuong03A.png', 'Gỗ công nghiệp', 'Xám', '160x200 cm', 'SIMPLEHOME (Thương Hiệu Cao Cấp)', '12 Tháng', 1, 4, 2),
(38, 'Tủ Áo 4 Cửa Kind ', 5990000, 47, 'Chất liệu: Gỗ công nghiệp\r\nTủ có 4 cánh cửa , có thêm hộc kéo tiện lợi\r\nChống bụi bẩn và chống trầy xước\r\nMẫu mã đep, sang trọng', './Images/Tu01A.png', 'Gỗ công nghiệp', 'Sồi', '162x59.5x198 cm', 'SIMPLEHOME (Thương Hiệu Cao Cấp)', '12 Tháng', 1, 6, 1),
(39, 'Tủ Áo 4 cửa Lisa ', 17790000, 50, 'Chất liệu: Gỗ MDF\r\nCó khả năng chống trầy xước, cong vênh\r\nĐáp ứng tốt mọi nhu cầu sử dụng\r\nTủ quần áo thông minh, hiện đại', './Images/Tu02A.png', 'MDF', 'Nâu Sồi', '181.3x59x216 cm', 'SIMPLEHOME (Thương Hiệu Cao Cấp)', '12 Tháng', 1, 6, 1),
(40, 'Tủ Áo 4 Cửa ANGEL', 20990000, 49, 'Chất liệu gỗ mdf sơn bóng cao cấpBề mặt tủ được phủ lớp chống trầy xướcThiết kế tỉ mỉ, kiểu dáng tủ 4 cửa rộng rãiPhong cách hiện đại, cao sang, quý phái', './Images/Tu03A.png', 'MDF', 'Xám', '240x60.9x220 cm', 'SIMPLEHOME (Thương Hiệu Cao Cấp)', '12 Tháng', 1, 6, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `matk` int(11) NOT NULL,
  `hoten` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `taikhoan` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT 1,
  `maquyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`matk`, `hoten`, `gioitinh`, `sdt`, `email`, `diachi`, `taikhoan`, `matkhau`, `trangthai`, `maquyen`) VALUES
(1, 'Lê Trung Hậu', 'Nam', '039 3979 079', 'trunghau@gmail.com', 'Vĩnh Long', 'trunghau', '123456', 1, 2),
(2, 'Nguyễn Thái Tài', 'Nam', '069 6969 969', 'thaitai@gmail.com', 'Vĩnh Long', 'thaitai', '123456', 1, 2),
(23, 'Nguyễn Vinh', 'Nam', '0797123123', 'Vinh01@gmail.com', 'Cần Thơ', 'vinh', 'Vinh1234@', 1, 2),
(24, 'Nguyễn a', 'Nam', '0797123123', 'nguyena01@gmail.com', 'Cần Thơ', 'nguyena', 'Nguyen1234@', 1, 1),
(27, 'Nguyễn Hoa', 'Nữ', '0797123123', 'Hoa2201@gmail.com', 'Cần Thơ', 'hoa', 'Hoa1234@', 1, 1),
(28, 'Văn Lâm ', 'Nam', '0316699887', 'lamca123@gmail.com', 'Long Hồ, Vĩnh Long', 'vanlam', 'VanLam@123', 1, 1),
(29, 'Văn Lâm', 'Nam', '0123123123', 'vanlam@gmail.com', 'P4, Vĩnh Long', 'vanlama', 'Lam1234@', 1, 1),
(37, 'Nguyễn A', 'Nữ', '0797123123', 'NguyenE@gmail.com', 'Cần Thơ', 'vinhLama', 'Lam1234@', 1, 1),
(40, 'Phước Lộc', 'Nam', '0316699888', 'phuocloc@gmail.com', 'P4, Vĩnh Long', 'phuocloc', 'Loc@1234', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `matt` int(11) NOT NULL,
  `soluongtt` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL,
  `thoigiantt` datetime NOT NULL,
  `diachigh` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `trangthaitt` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `masp` int(11) NOT NULL,
  `matk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhtoan`
--

INSERT INTO `thanhtoan` (`matt`, `soluongtt`, `tongtien`, `thoigiantt`, `diachigh`, `trangthaitt`, `masp`, `matk`) VALUES
(40, 1, 20990000, '0000-00-00 00:00:00', '', 'Chưa thanh toán', 40, 28),
(51, 1, 9990000, '0000-00-00 00:00:00', '', 'Chưa thanh toán', 14, 28),
(52, 2, 44580000, '0000-00-00 00:00:00', '', 'Chưa thanh toán', 36, 40),
(53, 1, 17790000, '0000-00-00 00:00:00', '', 'Chưa thanh toán', 39, 40);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongke`
--

CREATE TABLE `thongke` (
  `matk` int(11) NOT NULL,
  `tensp` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `thang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongke`
--

INSERT INTO `thongke` (`matk`, `tensp`, `thang`) VALUES
(4, 'Bàn Coffee Cẩm Thạch Grand Tròn', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`mabinhluan`),
  ADD KEY `fk_binhluan_taikhoan` (`matk`),
  ADD KEY `fk_binhluan_sanpham` (`masp`);

--
-- Chỉ mục cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`maha`),
  ADD KEY `fk_hinhanh_sanpham` (`masp`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`makm`);

--
-- Chỉ mục cho bảng `lichsumuahang`
--
ALTER TABLE `lichsumuahang`
  ADD PRIMARY KEY (`malichsu`),
  ADD KEY `fk_lichsu_sanpham` (`masp`),
  ADD KEY `fk_lichsu_taikhoan` (`matk`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`maloaisp`);

--
-- Chỉ mục cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`maquyen`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `fk_sanpham_loaisanpham` (`maloaisp`),
  ADD KEY `fk_sanpham_khuyenmai` (`makm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`matk`),
  ADD KEY `fk_taikhoan_phanquyen` (`maquyen`);

--
-- Chỉ mục cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`matt`),
  ADD KEY `fk_thanhtoan_sanpham` (`masp`),
  ADD KEY `fk_thanhtoan_taikhoan` (`matk`);

--
-- Chỉ mục cho bảng `thongke`
--
ALTER TABLE `thongke`
  ADD PRIMARY KEY (`matk`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `mabinhluan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `maha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `makm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `lichsumuahang`
--
ALTER TABLE `lichsumuahang`
  MODIFY `malichsu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `maloaisp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `matk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  MODIFY `matt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `thongke`
--
ALTER TABLE `thongke`
  MODIFY `matk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `fk_binhluan_sanpham` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_binhluan_taikhoan` FOREIGN KEY (`matk`) REFERENCES `taikhoan` (`matk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `fk_hinhanh_sanpham` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `lichsumuahang`
--
ALTER TABLE `lichsumuahang`
  ADD CONSTRAINT `fk_lichsu_sanpham` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_lichsu_taikhoan` FOREIGN KEY (`matk`) REFERENCES `taikhoan` (`matk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sanpham_khuyenmai` FOREIGN KEY (`makm`) REFERENCES `khuyenmai` (`makm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_sanpham_loaisanpham` FOREIGN KEY (`maloaisp`) REFERENCES `loaisanpham` (`maloaisp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `fk_taikhoan_phanquyen` FOREIGN KEY (`maquyen`) REFERENCES `phanquyen` (`maquyen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD CONSTRAINT `fk_thanhtoan_sanpham` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_thanhtoan_taikhoan` FOREIGN KEY (`matk`) REFERENCES `taikhoan` (`matk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
