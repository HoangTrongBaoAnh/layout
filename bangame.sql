-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 13, 2020 lúc 10:42 AM
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
(1, 2),
(1, 1),
(2, 3),
(2, 2);

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
  `trailer` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `game`
--

INSERT INTO `game` (`idgame`, `tengame`, `giatien`, `namphathanh`, `nhaphathanh`, `os_mini`, `processor_mini`, `memory_mini`, `graphics_mini`, `harddrive_mini`, `os_recommend`, `processor_recommend`, `memory_recommend`, `graphics_recommend`, `harddrive_recommend`, `content`, `trailer`) VALUES
(1, 'GrandThefAuto V', 479000, 2013, 'Rockstar', 'Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1, Windows Vista 64 Bit Service Pack 2*', 'Intel Core 2 Quad CPU Q6600 @ 2.40GHz (4 CPUs) / AMD Phenom 9850 Quad-Core Processor (4 CPUs) @ 2.5GHz', '4 GB RAM', 'NVIDIA 9800 GT 1GB / AMD HD 4870 1GB (DX 10, 10.1, 11)', '65 GB available space', 'OS: Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1\r\n\r\n', 'Intel Core i5 3470 @ 3.2GHz (4 CPUs) / AMD X8 FX-8350 @ 4GHz (8 CPUs)', '8 GB RAM', 'NVIDIA GTX 660 2GB / AMD HD 7870 2GB', '65 GB available space', 'Grand Theft Auto V (còn được gọi là Grand Theft Auto Năm, GTA 5 hoặc GTA V) là trò chơi video được phát triển bởi Rockstar North thuộc hãng Rockstar Games. Là phiên bản thứ năm trong Dòng trò chơi Grand Theft Auto và là phần kế tiếp của Grand Theft Auto IV . Bản gốc của trò chơi chính thức được phát hành vào ngày 17 Tháng 9 năm 2013 cho phiên bản Xbox 360 và PlayStation 3. Trò chơi cũng đã được phát hành cho phiên bản Xbox One và PlayStation 4 vào ngày 18 tháng 11 năm 2014, sau đó phát hành cho PC vào ngày 14 tháng 4 năm 2015. Trò chơi nằm trong mạch truyện chính của series Grand Theft Auto, mạch truyện này được tính là từ khi bắt đầu nội dung của trò chơi Grand Theft Auto IV (2008), không liên hệ nội dung đến các phần trước Grand Theft Auto IV. Nằm trong tiểu bang hư cấu San Andreas, mô phỏng Nam California, câu chuyện nói về ba tên tội phạm và nỗ lực của họ trong việc thực hiện các cuộc tấn công trong thế giới ngầm bên cạnh là chống lại chính phủ và các thế lực khác. Trò chơi được thiết kế theo kiểu thế giới mở cho phép người chơi tự do đi khắp nơi, các vùng nông thôn, rừng núi, hoang mạc và thành phố hư cấu Los Santos, mô phỏng thành phố Los Angeles ngoài đời.\r\n\r\nTrò chơi hỗ trợ chơi theo góc nhìn thứ nhất (FPS - First Person Shooter) và thứ ba (TPS - Third Person Shooter), di chuyển trong thế giới bằng cách điều hướng chân để đi bộ hoặc phương tiện giao thông. Người chơi điều khiển ba nhân vật chính xuyên suốt trò chơi và có thể chuyển đổi điều khiển qua lại giữa các nhân vật ở ngoài hoặc trong nhiệm vụ (một số phân đoạn trong nhiệm vụ buộc người chơi phải điều khiển một nhân vật nhất định hoặc phải chuyển đổi sang nhân vật khác). Câu chuyện chủ yếu xoay quanh những việc của tội phạm như trộm cướp, đánh nhau, liên hệ đến việc bắn súng và lái xe. Hệ thống cảnh sát trong trò chơi sẽ luôn cố gắng kiểm soát người chơi khi thực hiện những hành vi tội ác đến mức độ nào đó bằng cách bắt vào tù hoặc giết, số sao truy nã (tối đa là năm sao) càng cao thì mức độ nguy hiểm của cảnh sát đối với nhân vật càng tăng, tương tự như những phần Grand Theft Auto trước đó. Grand Theft Auto Online , chế độ chơi trực tiếp nhiều người chơi, cho phép lên đến 30 người chơi cùng khám phá thế giới, làm nhiệm vụ, tham gia các trò chơi như đánh nhau, đua xe,...\r\n\r\nTrò chơi được phát triển ngay sau khi phát hành Grand Theft Auto IV và được thực hiện giữa nhiều studio của Rockstar Games trên toàn thế giới. Nhóm phát triển đã dựa nhiều yếu tố trong cơ chế trò chơi từ các trò chơi trước đó của họ như Red Dead Redemption và Max Payne 3, và thiết kế trò chơi xung quanh ba nhân vật chính để đổi mới lối chơi so với những phiên bản trò chơi trước. Phần lớn công việc tạo trò chơi là công đoạn tạo ra thế giới mở, và các thành viên trong nhóm phát triển đã đến California để nghiên cứu thực địa nơi đây bằng cách chụp nhiều bức ảnh, quay video rồi gửi cho đội thiết kế. Là trò chơi được mong chờ nhất trong năm 2013, Grand Theft Auto V đã phá vỡ kỷ lục bán hàng của ngành công nghiệp game và trở thành sản phẩm giải trí tăng doanh thu nhanh nhất trong lịch sử, kiếm được 800 triệu USD trong ngày đầu tiên và 1 tỷ USD trong ba ngày. Nó đã nhận được sự ủng hộ rộng rãi, cùng nhiều nhận xét tích cực, khen ngợi về cách thiết kế nhân vật, thế giới mở, đồ họa và lối chơi. Tuy nhiên, tương tự như các phần trò chơi trước, nó cũng vấp phải không ít tranh cãi, kiện tụng về nội dung bạo lực, phân biệt giới tính... Được đánh giá là một trong những trò chơi nổi tiếng nhất của thế hệ thứ 7 (tính từ giai đoạn cuối năm 2005 trở đi) và được công nhận là một trong những trò chơi hay nhất từng được thực hiện, nó đã giành được giải thưởng vào cuối năm là giải thưởng Game of the Year (Trò chơi của năm). Tính đến hiện tại, GTA 5 đã bán được trên 90 triệu bản trò chơi trên toàn thế giới và là một trong những trò chơi video bán chạy nhất mọi thời đại.', 'https://www.youtube.com/watch?v=QkkoHAzjnUs'),
(2, 'Doki Doki Literature Club!', 0, 2017, '\r\nTeam Salvato', '0', '0', '0', '0', '0', 'OS: Windows 7\r\n\r\n\r\n', '1.8GHz Dual-Core CPU', '4 GB RAM', 'Integrated graphics', '350 MB available space', 'Hi, Monika here!\r\nWelcome to the Literature Club! It\'s always been a dream of mine to make something special out of the things I love. Now that you\'re a club member, you can help me make that dream come true in this cute game!\r\n\r\nEvery day is full of chit-chat and fun activities with all of my adorable and unique club members:\r\n\r\nSayori, the youthful bundle of sunshine who values happiness the most;\r\nNatsuki, the deceivingly cute girl who packs an assertive punch;\r\nYuri, the timid and mysterious one who finds comfort in the world of books;\r\n...And, of course, Monika, the leader of the club! That\'s me!\r\n\r\nI\'m super excited for you to make friends with everyone and help the Literature Club become a more intimate place for all my members. But I can tell already that you\'re a sweetheart—will you promise to spend the most time with me? ♥\r\n\r\nThis game is not suitable for children\r\nor those who are easily disturbed.', 'https://www.youtube.com/watch?v=kB1663FTpzU'),
(5, 'Outlast', 690000, 2013, 'Red Barrels\r\n', 'Windows XP / Vista / 7 / 8 - 64 bits *', '2.2 GHz Dual Core CPU', '2 GB RAM', '512 MB NVIDIA GeForce 9800GTX / ATI Radeon HD 3xxx series', '5 GB available space', 'Windows Vista / 7 / 8 - 64 bits', '2.8 GHz Quad Core CPU', '3 GB RAM', ' 1GB NVIDIA GTX 460 / ATI Radeon HD 6850 or better', '5 GB available space', 'Hell is an experiment you can\'t survive in Outlast, a first-person survival horror game developed by veterans of some of the biggest game franchises in history. As investigative journalist Miles Upshur, explore Mount Massive Asylum and try to survive long enough to discover its terrible secret... if you dare.\r\n\r\nSynopsis:\r\n\r\nIn the remote mountains of Colorado, horrors wait inside Mount Massive Asylum. A long-abandoned home for the mentally ill, recently re-opened by the “research and charity” branch of the transnational Murkoff Corporation, the asylum has been operating in strict secrecy… until now.\r\n\r\nActing on a tip from an anonymous source, independent journalist Miles Upshur breaks into the facility, and what he discovers walks a terrifying line between science and religion, nature and something else entirely. Once inside, his only hope of escape lies with the terrible truth at the heart of Mount Massive.\r\n\r\nOutlast is a true survival horror experience which aims to show that the most terrifying monsters of all come from the human mind.\r\n\r\nFeatures:\r\n\r\nTrue Survival Horror Experience: You are no fighter - if you want to survive the horrors of the asylum, your only chance is to run... or hide\r\nImmersive Graphics: AAA-quality graphics give players a detailed, terrifying world to explore\r\nHide and Sneak: Stealth-based gameplay, with parkour-inspired platforming elements\r\nUnpredictable Enemies: Players cannot know when - and from where - one of the asylum’s terrifying inhabitants will finally catch up to them\r\nReal Horror: Outlast’s setting and characters are inspired by real asylums and cases of criminal insanity\r\n\r\nWarning:\r\n\r\nOutlast contains intense violence, gore, graphic sexual content, and strong language. Please enjoy.', 'https://www.youtube.com/watch?v=uKA-IA4locM'),
(6, 'Outlast 2', 960000, 2017, 'Red Barrels', 'Windows Vista / 7 / 8 / 10, 64-bits', 'Intel Core i3-530', '4 GB RAM\r\n', '1GB VRAM, NVIDIA Geforce GTX 260 / ATI Radeon HD 4870\r\n', '30 GB available space', 'Windows Vista / 7 / 8 / 10, 64-bits', 'Intel Core i5', '8 GB RAM', '1.5GB VRAM, NVIDIA Geforce GTX 660 / ATI Radeon HD 7850', '30 GB available space', 'Outlast 2 is the sequel to the acclaimed survival horror game Outlast. Set in the same universe as the first game, but with different characters and a different setting, Outlast 2 is a twisted new journey into the depths of the human mind and its dark secrets.\r\n\r\nOutlast 2 introduces you to Sullivan Knoth and his followers, who left our wicked world behind to give birth to Temple Gate, a town, deep in the wilderness and hidden from civilization. Knoth and his flock are preparing for the tribulations of the end of times and you’re right in the thick of it.\r\n\r\nYou are Blake Langermann, a cameraman working with your wife, Lynn. The two of you are investigative journalists willing to take risks and dig deep to uncover the stories no one else will dare touch.\r\n\r\nYou\'re following a trail of clues that started with the seemingly impossible murder of a pregnant woman known only as Jane Doe.\r\nThe investigation has lead you miles into the Arizona desert, to a darkness so deep that no one could shed light upon it, and a corruption so profound that going mad may be the only sane thing to do.', 'https://www.youtube.com/watch?v=MKrUZ36IVAY'),
(7, 'Ai Shoujo', 1008500, 2020, 'ILLUSION', 'WINDOWS® 8.1 / 10 (64-bit required)\r\n', 'Intel Core ｉ3 4000 serise or better', '4 GB RAM', 'NVIDIA® GeForce® GTX 700 Series or AMD Radeon™ R-2000 Series (VRAM 2GB) or better', '15 GB available space', 'WINDOWS® 8.1 / 10 (64-bit required)', 'Intel Core ｉ5 4000 serise or better', '8 GB RAM', 'NVIDIA® GeForce® GTX 700 Series or AMD Radeon™ R-2000 Series (VRAM 4GB) or better', '15 GB available space', '◆The Ultimate 3D Life Simulator◆\r\nAI Shoujo is a simulation crafting and survival game where you\'ll enjoy a carefree life of abundance on a lush deserted island. But this is no solitary journey of philosophical contemplation, no! A lovely group of realistic AI ladies will keep your nights from growing lonely and your days filled with comfort and joy.\r\n\r\nAI Shoujo won\'t just blow your mind, it\'ll blow you...away!\r\nAll characters in the game are over the age of 18.', 'https://www.youtube.com/watch?v=aQPy-QgO8T8');

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
(5, 'screenshot4f367a5e3-3012-404f-b81e-c39e0e6c59537b2e4880-2ac9-432a-8314-ff047803065d.webp', 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `idhoadon` int(11) NOT NULL,
  `code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `idgame` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `ngay` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(7, 'can', '1', 'fukboizchinhhieu@yahoo.com', 'Đỗ Nguyễn Tài Cẩn', '099999999', 1, 'frog.jpg', 0);

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
  ADD PRIMARY KEY (`idhoadon`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idgame` (`idgame`);

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
  MODIFY `idgame` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `hinh`
--
ALTER TABLE `hinh`
  MODIFY `idhinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `idhoadon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `idtheloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`idgame`) REFERENCES `game` (`idgame`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
