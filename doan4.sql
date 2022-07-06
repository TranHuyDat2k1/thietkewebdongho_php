-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 06, 2022 lúc 09:16 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doan4`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donghonoibat`
--

CREATE TABLE `donghonoibat` (
  `id` int(100) NOT NULL,
  `TenDongHo` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `HinhAnh` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `MoTa` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gia` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donghonoibat`
--

INSERT INTO `donghonoibat` (`id`, `TenDongHo`, `HinhAnh`, `MoTa`, `Gia`, `created_at`, `updated_at`) VALUES
(1, 'Đồng hồ ELIO 43 mm Nam', 'dongho1.jpg', 'Mẫu Đồng Hồ ELIO 43mm Nam mang đến cho phái mạnh vẻ ngoài lịch lãm nhưng cũng không kém phần trẻ trung đặc trưng thuộc dòng Edifice với kiểu dáng đồng hồ 6 kim đi kèm tính năng đo thời gian Chronograph.', 1000000, NULL, '2022-06-09 00:17:57'),
(5, 'Đồng hồ KORLEX 36 mm Nữ', 'dongho2.jpg', 'Đồng hồ KORLEX 36mm Nữ  với hình dáng truyền thống của hãng, phù hợp cho cả nam lẫn nữ, tông màu vàng chủ đạo từng chi tiết vỏ, mặt số và dây đeo tạo nên thời trang sang trọng, quý phái và thanh lịch.', 2000000, '2022-05-09 20:13:23', '2022-05-12 00:17:22'),
(6, 'Đồng hồ DAUMIER 50 mm Nam', 'dongho3.jpg', 'Đồng hồ DAUMIER 50mm Nam  lịch lãm với mặt đồng hồ tròn màu trắng , chữ số La Mã mạ vàng, dây đeo demi thời trang, 3 kim chỉ, 1 lịch ngày.', 3000000, '2022-05-09 20:28:28', '2022-05-12 00:17:29'),
(7, 'Đồng hồ SMILE KID 47 mm ', 'dongho4.jpg', 'Đồng hồ Đồng hồ SMILE KID 47 mm  có mặt số tròn tinh tế với vỏ mạ bạc bao quanh nền số màu trắng trang nhã, kim chỉ màu xanh độc đáo cùng vạch số La Mã màu đen nổi bật, ô lịch ngày vị trí 3h, dây đeo kim loại với điểm nhấn màu vàng mang lại nét sang trọng lịch lãm dành cho phái mạnh.\n\n', 4000000, '2022-05-12 00:18:41', '2022-05-12 00:18:41'),
(8, 'Đồng hồ MVW 42 mm Nam', 'dongho5.jpg', 'Mẫu Đồng hồ MVW 42 mm Nam phiên bản giản dị kiểu dáng 3 kim với các chi tiết vạch số mạ vàng tinh tế sang trọng với thiết kế mỏng vỏ máy pin dày 8mm.', 5000000, '2022-05-12 00:21:54', '2022-05-12 00:21:54'),
(9, 'Đồng hồ CANDINO 28.5 mm Nữ', 'dongho6.jpg', 'Đồng hồ nam CANDINO 28.5mm Nữ với thiết kế hiện đại pin sử dụng công nghệ Eco-Drive (Năng Lượng Ánh Sáng), vỏ máy bằng thép không gỉ tạo vẻ chắc chắn nam tính, kết hợp dây đeo với chất liệu kim loại với phong cách mạnh mẻ.', 6000000, '2022-05-12 00:22:36', '2022-06-07 09:56:49'),
(10, 'Đồng hồ MOVADO 40 mm Nam', 'dongho7.jpg', 'Mẫu MOVADO 40mm Nam được thiết kế 3 núm vặn điều chỉnh các tính năng Chronograph (đo thời gian) hiện thị trên nền mặt số đen với kích thước lớn 40mm.', 7000000, '2022-05-12 00:23:20', '2022-06-07 09:57:01'),
(11, 'Đồng hồ CERTINA Urban 29 Nữ', 'dongho8.jpg', 'Đồng hồ CERTINA Urban 29mm Nữ có mặt số tròn lớn nam tính, nền màu đen mạnh mẽ, kim chỉ và vạch số La Mã được mạ bạc làm mỏng nổi bật, dây đeo kim loại mạ bạc.', 8000000, '2022-05-12 00:25:08', '2022-06-08 18:08:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `TenDongHo` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `SoLuong` float DEFAULT NULL,
  `DonGia` float DEFAULT NULL,
  `ThanhTien` float DEFAULT NULL,
  `HoTen` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `SoDienThoai` float DEFAULT NULL,
  `DiaChi` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `NgayDat` datetime DEFAULT NULL,
  `TrangThai` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `TenDongHo`, `SoLuong`, `DonGia`, `ThanhTien`, `HoTen`, `SoDienThoai`, `DiaChi`, `NgayDat`, `TrangThai`, `created_at`, `updated_at`) VALUES
(1, 'Lamborghini-Nam Sapphia', 2, 2000000, 4000000, 'Lê Huy Hàng', 132645000, 'Hưng Yên', '2022-04-25 15:58:57', 'Đã Giao', NULL, '2022-04-25 08:58:57'),
(2, 'Omega-NamSapphia', 2, 345555, 342323, 'tra gy', 123123, 'Hưng Yên', '2022-06-07 14:10:39', 'Đang Vận chuyển', '2022-05-12 01:42:15', '2022-06-07 07:10:39'),
(3, 'Đồng hồ ELIO 43 mm Nam ES075-02', 2, 2000000, 4000000, 'Văn Lâm', 54154200, 'Hưng Yên', '2022-06-07 14:10:16', 'Đang Giao', '2022-06-05 17:47:47', '2022-06-07 07:10:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `TenKhachHang` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Password` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `TenKhachHang`, `Password`, `Email`, `Phone`, `created_at`, `updated_at`) VALUES
(1, 'Trần Đức Hùng', '1', 'tranduchung0301@gmail.com', 236413000, NULL, '2022-04-25 08:40:23'),
(2, 'Văn Hiếu', '2', 'vanhieu@gmail.com', 36213600, '2022-04-25 08:41:42', '2022-04-25 08:41:42'),
(3, 'Hoàng Lâm', '3', 'lam@gmail.com', 454851000, '2022-05-09 18:14:03', '2022-05-09 18:14:03'),
(4, 'Bảo Lâm', '4', 'baolam@gmail.com', 56564200, '2022-06-07 07:06:05', '2022-06-07 07:08:00'),
(5, 'Tạ Lâm', '5', 'talam@gmail.com', 231546000, '2022-06-07 07:06:05', '2022-06-07 07:07:53'),
(6, 'Huy huy', '6', 'huy@gmail.com', 2314570000, '2022-06-07 07:07:28', '2022-06-07 07:07:40'),
(7, 'Lâm Thúy', '7', 'lamthuy@gmail.com', 254654000, '2022-06-07 07:08:30', '2022-06-07 07:08:30'),
(8, 'Thúy', '8', 'thuy@gmail.com', 544855000, '2022-06-07 07:08:46', '2022-06-07 07:08:46'),
(9, 'Oan', '9', 'oan@gmail.com', 854869000, '2022-06-07 07:09:08', '2022-06-07 07:09:08'),
(10, 'Hiệp Tọccc', '10', 'toc@gmail.com', 1561510000, '2022-06-07 07:09:25', '2022-06-07 07:09:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `id` int(11) NOT NULL,
  `TenNCC` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`id`, `TenNCC`, `Email`, `DiaChi`, `created_at`, `updated_at`) VALUES
(1, 'CTY Hoàng Hán', 'hoang1@gmail.com', 'Thường Tín- Hà Nội', NULL, '2022-05-09 19:24:38'),
(2, 'CTY Hoàng Hán handi', 'huy@gmail.com', 'Nam Định', '2022-04-18 19:58:07', '2022-06-07 06:53:28'),
(3, 'CTY Bảo Nam', 'baonam@gmail.com', 'Hải Dương', '2022-04-25 08:25:14', '2022-04-25 08:25:14'),
(5, 'CTY SIMON', 'simon@gmail.com', 'Hưng Yên', '2022-06-07 06:52:29', '2022-06-07 06:52:29'),
(6, 'CTY VinHoms', 'vinhomes@gmail.com', 'Hà Nội', '2022-06-07 06:53:01', '2022-06-07 06:53:01'),
(7, 'Cty Reverside', 'revider@gmail.com', 'Gia Lâm - Hà Nội', '2022-06-07 06:54:03', '2022-06-07 06:54:03'),
(8, 'Cty Li-oa', 'lioa@gmail.com', 'TP.Hồ Chí Minh', '2022-06-07 06:54:38', '2022-06-07 06:54:38'),
(9, 'Cty MaMi', 'mami@gmail.com', 'Hải Dương', '2022-06-07 06:55:03', '2022-06-07 06:55:03'),
(10, 'Cty DaHa', 'daha@gmail.com', 'Bắc Ninh', '2022-06-07 06:55:29', '2022-06-07 06:55:29'),
(11, 'Cty SuNi', 'suni@gmail.com', 'Hưng Yên', '2022-06-07 06:55:47', '2022-06-07 06:55:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `TenTinTuc` varchar(225) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `NoiDung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LoaiTinTuc` int(50) DEFAULT NULL,
  `NgayThem` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `TenTinTuc`, `NoiDung`, `Img`, `LoaiTinTuc`, `NgayThem`, `created_at`, `updated_at`) VALUES
(1, 'Đại tiệc sale mừng sinh nhật Đăng Quang Watch, cơ hội duy nhất mua đồng hồ chính hãng giảm 40%', 'Nhân dịp kỷ niệm 12 năm thành lập thương hiệu, Đăng Quang Watch khuyến mại lớn nhất từ trước tới nay với ưu đãi giảm giá cực sốc đến 40% và hàng triệu phần quà tặng ý nghĩa thay cho lời tri ân sâu sắc gửi tới khách hàng đã và đang đồng hành cùng Đăng Quang Watch trong suốt thời gian qua.Trải qua 12 năm hoạt động và phát triển, với sự đồng hành, tin tưởng của khách hàng Đăng Quang Watch ngày một phát triển mạnh mẽ, vững vàng hơn. Với hệ thống quy mô 100 showroom bán lẻ đồng hồ chính hãng lớn mạnh bậc nhất trên thị trường và chinh phục khách hàng bởi hàng ngàn mẫu đồng hồ chính hãng mang phong cách sang trọng, đẳng cấp cùng dịch vụ hậu mãi, chăm sóc khách hàng tận tâm', 'tintuc1.jpg', 1, '2022-04-06', NULL, NULL),
(2, 'Cách bảo dưỡng và làm mới dây da đồng hồ hiệu quả', 'Trung bình, tuổi thọ của các mẫu dây da đồng hồ từ khoảng 1 năm rưỡi đến 2 năm, nhưng đa số người dùng cần phải thay thế chúng trước tuổi thọ vì cách bảo dưỡng không tốt.Những mẫu đồng hồ dây da rất được khách hàng ưa chuộng bởi sự tiện dụng cũng như vẻ đẹp lịch thiệp, thời trang của chúng. Tuy nhiên, dây da là một vật liệu hữu cơ nên chúng khá nhạy cảm với môi trường, có tuổi thọ ngắn hơn nhiều so với các mẫu dây kim loại nên cần cách bảo dưỡng dây da đồng hồ hiệu quả để có thể kéo dài tuổi thọ cũng như giúp dây da luôn bóng đẹp, đảm bảo tính thẩm mỹNhững điều cần lưu ý khi đeo đồng hồ dây da.  “KHÔ” và “THOÁNG” là hai từ khoá bạn cần nhớ khi bảo dưỡng; dây da rất dễ hút nước, vì thế khi đã để đồng hồ tiếp xúc với nước hay mồ hôi tay thì bạn cần lau khô ngay bằng khăn khô và mềm.  Không nên đeo dây da khi đi tắm, đi bơi, đi mưa, xông hơi, kể cả đối với chất liệu da cá sấu.  Tránh để dây da ở nơi có nhiệt độ cao hoặc ở trực tiếp dưới ánh mặt trời quá lâu làm dây da bị đổi màu, khô giòn.  Tháo đồng hồ khi đi ngủ để dây da được “thả lỏng”, “thông thoáng”.  Tháo đồng hồ khi làm công việc vệ sinh nhà cửa.  Tránh để các hoá chất tẩy rửa, nước hoa, đồ ăn dính vào mặt dây.  Tránh đeo đồng hồ quá chặt, không những làm giảm lượng máu lưu thông tay bạn mà còn dễ làm gãy nếp của dây  Trong thời tiết nóng bức, nên nới lỏng dây khi đeo bằng độ rộng: cổ tay + một ngón tay út.  Vệ sinh dây da định kỳ ít nhất 1 lần/ 1 tuần để dây không sinh ra mùi hôi khó chịu.', 'tintuc2.jpg', 1, '2022-03-10', NULL, NULL),
(3, 'Những mẫu đồng hồ nam cực chất với máy cơ, kính sapphire đang được giảm 40% mở bán duy nhất trong ngày.', 'Mặc dù đồng hồ cơ nằm ở phân khúc cao cấp, giá thành cao nhưng đối với phái mạnh, chiếc đồng hồ cơ luôn mang đến sức hút mạnh mẽ. Để sở hữu những siêu phẩm đồng hồ cơ chính hãng với mức giá cực hời, chắc chắn quý khách hàng không thể nào bỏ qua ưu đãi săn flash sale tại Đăng Quang Watch.     Cầu thủ Quế Ngọc Hải mua đồng hồ tại Đăng Quang  Mỗi một chiếc đồng hồ cơ chứa đựng tinh hoa của công nghệ chế tạo đồng hồ kéo dài qua hàng thế kỷ nên đồng hồ cơ không chỉ là một thiết bị xem giờ mà còn là một tác phẩm nghệ thuật có giá trị. Chính vì sự phức tạp trong sản xuất cũng như tính thẩm mỹ cao nên đồng hồ cơ thường rất đắt tiền. Nhưng nếu bạn đăng nhập website Đăng Quang Watch ngay hôm nay, bạn sẽ có thể sở hữu ngay những mẫu đồng hồ cơ chính hãng cực chất từ những thương hiệu lớn với mức giá sale giảm 40% mở bán duy nhất trong ngày.     Đồng hồ nam Philippe Auguste     Đồng hồ nam chính hãng     ĐỒng hồ nam     Đồng hồ nam xuất xứ áo     Đồng hồ Philippe Auguste thương hiệu Pháp với thiết kế lộ máy độc đáo, kính sapphire chống xước, chiụ lực tốt và công nghệ mạ vàng PVD tiên tiến nhất thị trường. Giá bán lẻ của một chiếc đồng hồ cơ Philippe Auguste dao động từ trên 10 triệu đồng.', 'tintuc3.jpg', 2, '2022-03-11', NULL, NULL),
(4, 'Gen Z đón đầu xu hướng với đồng hồ chính hãng, kính mắt thời trang cực chất', 'Trung bình, tuổi thọ của các mẫu dây da đồng hồ từ khoảng 1 năm rưỡi đến 2 năm, nhưng đa số người dùng cần phải thay thế chúng trước tuổi thọ vì cách bảo dưỡng không tốt.Những mẫu đồng hồ dây da rất được khách hàng ưa chuộng bởi sự tiện dụng cũng như vẻ đẹp lịch thiệp, thời trang của chúng. Tuy nhiên, dây da là một vật liệu hữu cơ nên chúng khá nhạy cảm với môi trường, có tuổi thọ ngắn hơn nhiều so với các mẫu dây kim loại nên cần cách bảo dưỡng dây da đồng hồ hiệu quả để có thể kéo dài tuổi thọ cũng như giúp dây da luôn bóng đẹp, đảm bảo tính thẩm mỹNhững điều cần lưu ý khi đeo đồng hồ dây da.  “KHÔ” và “THOÁNG” là hai từ khoá bạn cần nhớ khi bảo dưỡng; dây da rất dễ hút nước, vì thế khi đã để đồng hồ tiếp xúc với nước hay mồ hôi tay thì bạn cần lau khô ngay bằng khăn khô và mềm.  Không nên đeo dây da khi đi tắm, đi bơi, đi mưa, xông hơi, kể cả đối với chất liệu da cá sấu.  Tránh để dây da ở nơi có nhiệt độ cao hoặc ở trực tiếp dưới ánh mặt trời quá lâu làm dây da bị đổi màu, khô giòn.  Tháo đồng hồ khi đi ngủ để dây da được “thả lỏng”, “thông thoáng”.  Tháo đồng hồ khi làm công việc vệ sinh nhà cửa.  Tránh để các hoá chất tẩy rửa, nước hoa, đồ ăn dính vào mặt dây.  Tránh đeo đồng hồ quá chặt, không những làm giảm lượng máu lưu thông tay bạn mà còn dễ làm gãy nếp của dây  Trong thời tiết nóng bức, nên nới lỏng dây khi đeo bằng độ rộng: cổ tay + một ngón tay út.  Vệ sinh dây da định kỳ ít nhất 1 lần/ 1 tuần để dây không sinh ra mùi hôi khó chịu.', 'tintuc4.jpg', 1, '2022-03-17', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `donghonoibat`
--
ALTER TABLE `donghonoibat`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `donghonoibat`
--
ALTER TABLE `donghonoibat`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
