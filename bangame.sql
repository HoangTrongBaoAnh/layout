-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 26, 2020 lúc 06:58 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bangame`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiettheloai`
--

CREATE TABLE `chitiettheloai` (
  `idgame` int(11) NOT NULL,
  `idtheloai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiettheloai`
--

INSERT INTO `chitiettheloai` (`idgame`, `idtheloai`) VALUES
(31, 6),
(31, 7),
(1, 1),
(1, 2),
(32, 2),
(32, 7),
(33, 2),
(33, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `game`
--

CREATE TABLE `game` (
  `idgame` int(11) NOT NULL,
  `tengame` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `giatien` int(11) NOT NULL,
  `namphathanh` int(11) NOT NULL,
  `nhaphathanh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `os_mini` text COLLATE utf8_unicode_ci NOT NULL,
  `processor_mini` text COLLATE utf8_unicode_ci NOT NULL,
  `memory_mini` text COLLATE utf8_unicode_ci NOT NULL,
  `graphics_mini` text COLLATE utf8_unicode_ci NOT NULL,
  `harddrive_mini` text COLLATE utf8_unicode_ci NOT NULL,
  `os_recommend` text COLLATE utf8_unicode_ci NOT NULL,
  `processor_recommend` text COLLATE utf8_unicode_ci NOT NULL,
  `memory_recommend` text COLLATE utf8_unicode_ci NOT NULL,
  `graphics_recommend` text COLLATE utf8_unicode_ci NOT NULL,
  `harddrive_recommend` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `mota` longtext COLLATE utf8_unicode_ci NOT NULL,
  `trailer` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `game`
--

INSERT INTO `game` (`idgame`, `tengame`, `giatien`, `namphathanh`, `nhaphathanh`, `os_mini`, `processor_mini`, `memory_mini`, `graphics_mini`, `harddrive_mini`, `os_recommend`, `processor_recommend`, `memory_recommend`, `graphics_recommend`, `harddrive_recommend`, `content`, `mota`, `trailer`) VALUES
(1, 'GrandThefAuto V', 479000, 2013, 'Rockstar', 'Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1, Windows Vista 64 Bit Service Pack 2*', 'Intel Core 2 Quad CPU Q6600 @ 2.40GHz (4 CPUs) / AMD Phenom 9850 Quad-Core Processor (4 CPUs) @ 2.5GHz', '4 GB RAM', 'NVIDIA 9800 GT 1GB / AMD HD 4870 1GB (DX 10, 10.1, 11)', '65 GB available space', 'OS: Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1\r\n\r\n', 'Intel Core i5 3470 @ 3.2GHz (4 CPUs) / AMD X8 FX-8350 @ 4GHz (8 CPUs)', '8 GB RAM', 'NVIDIA GTX 660 2GB / AMD HD 7870 2GB', '65 GB available space', 'Grand Theft Auto V (còn được gọi là Grand Theft Auto Năm, GTA 5 hoặc GTA V) là trò chơi video được phát triển bởi Rockstar North thuộc hãng Rockstar Games. Là phiên bản thứ năm trong Dòng trò chơi Grand Theft Auto và là phần kế tiếp của Grand Theft Auto IV . Bản gốc của trò chơi chính thức được phát hành vào ngày 17 Tháng 9 năm 2013 cho phiên bản Xbox 360 và PlayStation 3. Trò chơi cũng đã được phát hành cho phiên bản Xbox One và PlayStation 4 vào ngày 18 tháng 11 năm 2014, sau đó phát hành cho PC vào ngày 14 tháng 4 năm 2015. Trò chơi nằm trong mạch truyện chính của series Grand Theft Auto, mạch truyện này được tính là từ khi bắt đầu nội dung của trò chơi Grand Theft Auto IV (2008), không liên hệ nội dung đến các phần trước Grand Theft Auto IV. Nằm trong tiểu bang hư cấu San Andreas, mô phỏng Nam California, câu chuyện nói về ba tên tội phạm và nỗ lực của họ trong việc thực hiện các cuộc tấn công trong thế giới ngầm bên cạnh là chống lại chính phủ và các thế lực khác. Trò chơi được thiết kế theo kiểu thế giới mở cho phép người chơi tự do đi khắp nơi, các vùng nông thôn, rừng núi, hoang mạc và thành phố hư cấu Los Santos, mô phỏng thành phố Los Angeles ngoài đời.\r\n\r\nTrò chơi hỗ trợ chơi theo góc nhìn thứ nhất (FPS - First Person Shooter) và thứ ba (TPS - Third Person Shooter), di chuyển trong thế giới bằng cách điều hướng chân để đi bộ hoặc phương tiện giao thông. Người chơi điều khiển ba nhân vật chính xuyên suốt trò chơi và có thể chuyển đổi điều khiển qua lại giữa các nhân vật ở ngoài hoặc trong nhiệm vụ (một số phân đoạn trong nhiệm vụ buộc người chơi phải điều khiển một nhân vật nhất định hoặc phải chuyển đổi sang nhân vật khác). Câu chuyện chủ yếu xoay quanh những việc của tội phạm như trộm cướp, đánh nhau, liên hệ đến việc bắn súng và lái xe. Hệ thống cảnh sát trong trò chơi sẽ luôn cố gắng kiểm soát người chơi khi thực hiện những hành vi tội ác đến mức độ nào đó bằng cách bắt vào tù hoặc giết, số sao truy nã (tối đa là năm sao) càng cao thì mức độ nguy hiểm của cảnh sát đối với nhân vật càng tăng, tương tự như những phần Grand Theft Auto trước đó. Grand Theft Auto Online , chế độ chơi trực tiếp nhiều người chơi, cho phép lên đến 30 người chơi cùng khám phá thế giới, làm nhiệm vụ, tham gia các trò chơi như đánh nhau, đua xe,...\r\n\r\nTrò chơi được phát triển ngay sau khi phát hành Grand Theft Auto IV và được thực hiện giữa nhiều studio của Rockstar Games trên toàn thế giới. Nhóm phát triển đã dựa nhiều yếu tố trong cơ chế trò chơi từ các trò chơi trước đó của họ như Red Dead Redemption và Max Payne 3, và thiết kế trò chơi xung quanh ba nhân vật chính để đổi mới lối chơi so với những phiên bản trò chơi trước. Phần lớn công việc tạo trò chơi là công đoạn tạo ra thế giới mở, và các thành viên trong nhóm phát triển đã đến California để nghiên cứu thực địa nơi đây bằng cách chụp nhiều bức ảnh, quay video rồi gửi cho đội thiết kế. Là trò chơi được mong chờ nhất trong năm 2013, Grand Theft Auto V đã phá vỡ kỷ lục bán hàng của ngành công nghiệp game và trở thành sản phẩm giải trí tăng doanh thu nhanh nhất trong lịch sử, kiếm được 800 triệu USD trong ngày đầu tiên và 1 tỷ USD trong ba ngày. Nó đã nhận được sự ủng hộ rộng rãi, cùng nhiều nhận xét tích cực, khen ngợi về cách thiết kế nhân vật, thế giới mở, đồ họa và lối chơi. Tuy nhiên, tương tự như các phần trò chơi trước, nó cũng vấp phải không ít tranh cãi, kiện tụng về nội dung bạo lực, phân biệt giới tính... Được đánh giá là một trong những trò chơi nổi tiếng nhất của thế hệ thứ 7 (tính từ giai đoạn cuối năm 2005 trở đi) và được công nhận là một trong những trò chơi hay nhất từng được thực hiện, nó đã giành được giải thưởng vào cuối năm là giải thưởng Game of the Year (Trò chơi của năm). Tính đến hiện tại, GTA 5 đã bán được trên 90 triệu bản trò chơi trên toàn thế giới và là một trong những trò chơi video bán chạy nhất mọi thời đại.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde enim alias quasi aut cupiditate quas tempore! Eos iste doloribus quia, error illum architecto rerum a minima voluptas ratione sit asperio', 'https://www.youtube.com/watch?v=QkkoHAzjnUs'),
(31, 'A Plague Tale: Innocence', 10000, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'https://www.youtube.com/watch?v=CtP6mNeN6yE'),
(32, 'doki doki literature club ', 20000, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'https://www.youtube.com/watch?v=kB1663FTpzU&list=LL8IyNPytyjnX9Uj2cUOMMxg&index=2417'),
(33, 'Outlast', 20000, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'https://www.youtube.com/watch?v=Q97yE2zkNvs');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinh`
--

CREATE TABLE `hinh` (
  `idhinh` int(11) NOT NULL,
  `tenhinh` text COLLATE utf8_unicode_ci NOT NULL,
  `idgame` int(11) NOT NULL,
  `idloaihinh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hinh`
--

INSERT INTO `hinh` (`idhinh`, `tenhinh`, `idgame`, `idloaihinh`) VALUES
(1, 'GTA.jpg', 1, 1),
(2, 'ob_477681_cau-hinh-may-tinh-choi-gta-5.jpg', 1, 2),
(3, 'gta-5-full-cho-pc.jpg', 1, 2),
(4, 'GameHubVn-Muon-Zombie-xuat-hien-trong-GTA-5-Day-la-nhung-ban-Mod-ban-phai-cai-4.jpg', 1, 2),
(5, 'screenshot4f367a5e3-3012-404f-b81e-c39e0e6c59537b2e4880-2ac9-432a-8314-ff047803065d.webp', 1, 2),
(14, 'plague1.jpg', 31, 1),
(15, 'plague2.jpg', 31, 2),
(16, 'plague3.jpg', 31, 2),
(17, 'plague4.jpg', 31, 2),
(18, 'plague5.jpg', 31, 2),
(19, 'doki1.png', 32, 1),
(20, 'doki2.jpg', 32, 2),
(21, 'doki3.png', 32, 2),
(22, 'doki4.webp', 32, 2),
(23, 'doki5.jpg', 32, 2),
(24, 'outlast11.jpg', 33, 1),
(25, 'outlast12.jpg', 33, 2),
(26, 'outlast13.png', 33, 2),
(27, 'outlast14.jpg', 33, 2),
(28, 'outlast15.webp', 33, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `idhoadon` int(11) NOT NULL,
  `code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tengame` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `iduser` int(11) NOT NULL,
  `ngay` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`idhoadon`, `code`, `tengame`, `iduser`, `ngay`) VALUES
(1, 'SfL4Y - oyYQP - YsRK', 'GrandThefAuto V', 1, '2020-06-24 18:41:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `idtheloai` int(11) NOT NULL,
  `tentheloai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tentheloai_khongdau` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`idtheloai`, `tentheloai`, `tentheloai_khongdau`) VALUES
(1, 'Hành Động', 'Hanh_Dong'),
(2, 'Nhập Vai', 'Nhap_Vai'),
(3, 'Indie', 'indie'),
(4, 'MUTIPLAYER-ONLINE', 'MUTIPLAYER-ONLINE'),
(5, 'Đối Kháng', 'Doi_Khang'),
(6, 'Giải Đố', 'Giai_Do'),
(7, 'Kinh Dị', 'Kinh_Di');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `tendangnhap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `idgroup` int(11) NOT NULL,
  `hinh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tien` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`iduser`, `tendangnhap`, `matkhau`, `email`, `ten`, `sdt`, `idgroup`, `hinh`, `tien`) VALUES
(1, 'batman347', '0123456789Vi', 'quangvinh2018vi@gmail.com', 'Vinh Trương', '0966003417', 1, 'frog.jpg', 100000),
(2, 'johncena', '1', 'bdsa@gmail.com', 'cena', '975411255', 0, 'frog.jpg', 0),
(3, 'chi', '1', '1tuan2em@yahoo.com', 'Vương Kim Chí', '099999999', 1, 'frog.jpg', 0),
(4, 'vinh', '1', '1tuan3em@yahoo.com', 'Trương Quang Vinh', '099999999', 1, 'frog.jpg', 0),
(5, 'anh', '1', 'countbasquad@yahoo.com', 'Đoàn Trọng Hải Anh', '099999999', 1, 'frog.jpg', 0),
(6, 'hai', '1', 'haicounttank@yahoo.com', 'Vũ Thanh Hải', '099999999', 1, 'frog.jpg', 0),
(7, 'can', '1', 'fukboizchinhhieu@yahoo.com', 'Đỗ Nguyễn Tài Cẩn', '099999999', 1, 'frog.jpg', 0),
(8, 'admin', '23', 'admin@da', 'admin', '1234567890', 0, 'frog.jpg', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiettheloai`
--
ALTER TABLE `chitiettheloai`
  ADD KEY `idgame` (`idgame`),
  ADD KEY `idtheloai` (`idtheloai`);

--
-- Chỉ mục cho bảng `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`idgame`);

--
-- Chỉ mục cho bảng `hinh`
--
ALTER TABLE `hinh`
  ADD PRIMARY KEY (`idhinh`),
  ADD KEY `idgame` (`idgame`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`idhoadon`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`idtheloai`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `game`
--
ALTER TABLE `game`
  MODIFY `idgame` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `hinh`
--
ALTER TABLE `hinh`
  MODIFY `idhinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `idhoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `idtheloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiettheloai`
--
ALTER TABLE `chitiettheloai`
  ADD CONSTRAINT `chitiettheloai_ibfk_1` FOREIGN KEY (`idgame`) REFERENCES `game` (`idgame`),
  ADD CONSTRAINT `chitiettheloai_ibfk_2` FOREIGN KEY (`idtheloai`) REFERENCES `theloai` (`idtheloai`);

--
-- Các ràng buộc cho bảng `hinh`
--
ALTER TABLE `hinh`
  ADD CONSTRAINT `hinh_ibfk_1` FOREIGN KEY (`idgame`) REFERENCES `game` (`idgame`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
