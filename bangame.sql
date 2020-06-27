-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 27, 2020 lúc 06:48 AM
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
(1, 1),
(1, 2),
(35, 2),
(35, 7),
(36, 1),
(36, 2),
(31, 6),
(31, 7),
(34, 2),
(34, 6),
(34, 7),
(37, 1),
(37, 3),
(38, 1),
(38, 2),
(38, 7),
(39, 1),
(39, 2),
(39, 5),
(40, 1),
(40, 2),
(40, 5),
(41, 4),
(41, 6),
(42, 1),
(42, 2),
(42, 4),
(43, 1),
(43, 2),
(44, 6),
(45, 3),
(45, 6),
(46, 3),
(46, 4),
(47, 1),
(47, 2),
(47, 3),
(50, 4),
(51, 1),
(52, 1),
(52, 2),
(53, 1),
(53, 2),
(55, 1),
(55, 4),
(56, 2),
(57, 1),
(57, 3),
(58, 1),
(58, 2),
(58, 6),
(59, 2),
(59, 3),
(60, 1),
(60, 5);

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
(31, 'A Plague Tale: Innocence', 10000, 2019, 'Focus Home Interactive', 'Windows 7/8/10 (64 bits)', 'Intel Core i3-2120 (3.3 GHz)/AMD FX-4100 X4 (3.6 GHz)', '8 GB RAM', '2 GB, GeForce GTX 660/Radeon HD 7870', '50 GB available space', 'Windows 7/8/10 (64 bits)', 'Intel Core i5-4690 (3.5 GHz)/AMD FX-8300 (3.3 GHz)', '16 GB RAM', '4 GB, GeForce GTX 970/Radeon RX 480', '50 GB available space', 'Follow the grim tale of young Amicia and her little brother Hugo, in a heartrending journey through the darkest hours of history. Hunted by Inquisition soldiers and surrounded by unstoppable swarms of rats, Amicia and Hugo will come to know and trust each other. As they struggle to survive against overwhelming odds, they will fight to find purpose in this brutal, unforgiving world.\r\n1349. The plague ravages the Kingdom of France. Amicia and her younger brother Hugo are pursued by the Inquisition through villages devastated by the disease. On their way, they will have to join forces with other children, and evade swarms of rats using fire and light. Aided only by the link that binds their fates together, they will face untold horrors in their struggle to survive.As their adventure begins… the time of innocence ends.', '1349. The plague ravages the Kingdom of France. Amicia and her younger brother Hugo are pursued by the Inquisition through villages devastated by the disease...', 'https://www.youtube.com/watch?v=CtP6mNeN6yE'),
(34, 'Outlast', 20000, 2013, 'Red Barrels', 'Windows XP / Vista / 7 / 8 - 64 bits *', '2.2 GHz Dual Core CPU', '2 GB RAM', '512 MB NVIDIA GeForce 9800GTX / ATI Radeon HD 3xxx series', '5 GB available space', 'Windows Vista / 7 / 8 - 64 bits', '2.8 GHz Quad Core CPU', '3 GB RAM', '1GB NVIDIA GTX 460 / ATI Radeon HD 6850 or better', '5 GB available space', 'Waylon Park là kỹ sư phần mềm làm việc cho tập đoàn Murkoff. Sau khi phát hiện những bí mật đen tối trong các thí nghiệm của dự án bệnh viện Mount Massive Asylum, Waylon đã bí mật gửi mail cho nhà báo Miles Upshur nhưng bị Jeremy Blaire - sếp của anh phát hiện và anh bị đánh ngất rồi bị đưa đến phòng thí nghiệm Morphogenic Engine nhưng sau khi The Walrider mất kiểm soát vài giờ sau đó và đang quấy phá bệnh viện, Waylon cũng thoát được khỏi phòng thí nghiệm và cố gắng tìm cách liên lạc với chính quyền. Suốt phần đầu trò chơi, anh luôn bị 2 kẻ thù đáng sợ truy bắt là linh hồn The Walrider và một tên tâm thần ăn thịt người là Frank Manera. Khi Waylon tìm được radio thì Blaire xuất hiện và phá hủy nó nhằm che giấu âm mưu cuộc thí nghiệm. Suýt nữa thì Waylon đã bị Blaire giết vì bị bóp cổ nhưng ngay sau đó Chris Walker xuất hiện và Blaire buộc phải trốn thoát. Sau đó Waylon đã đến được trạm phát điện bên ngoài bệnh viện sau khi bị Chris Walker đuổi 2 lần.\r\n\r\nSau khi thoát khỏi Chris Walker (tên to béo ở phần 1, sau đó đã bị The Walrider giết chết), Waylon đến được Female Ward, tại đây anh bị một bệnh nhân tên là Dennis bắt và hiến dâng lên Eddie \"The Groom\" Gluskin - tên tâm thần đồng tính hạng nặng bị thí nghiệm ở đoạn đầu. Trong lúc trốn chạy Waylon ngã khỏi thang máy, bị thương ở chân phải đi cà nhắc và bị Eddie bắt được, và cuối cùng anh bị đưa đến nơi hành quyết của Eddie, nơi đã có rất nhiều bệnh nhân bị tên tâm thần này giết một cách dã man, khi Eddie sắp sửa hành quyết anh thì một phạm nhân đã tấn công Eddie nhờ vậy mà Waylon trốn thoát, Eddie đuổi theo và bắt được Waylon lần 2, lần này Eddie quyết định treo cổ Waylon, trong lúc giằng co, do cân nặng của anh trở nên quá lớn so với Eddie cho nên anh đã kéo ngược lại Eddie lên trần nhà và một thanh sắt nhọn đã đâm chết Eddie.\r\n\r\nỞ phần cuối, Waylon tiếp tục băng qua khu Male Ward để tiến về sảnh trước bệnh viện trong lúc cảnh sát được lệnh giết tất cả những ai sống sót và The Walrider đã được tự do. Tại cửa chính anh gặp lại Blaire lúc này đã bị thương, Blaire tấn công Waylon và đâm trúng anh bằng mảnh kính vỡ, trong lúc Blaire sắp giết anh thì linh hồn The Walrider xuất hiện nhấc bổng Blaire lên và xé nát hắn ra. Waylon thoát khỏi bệnh viện bằng cửa chính, tiến ra cổng và dùng chiếc xe hơi của Miles Upshur để thoát thân khi linh hồn The Walrider với vật chủ là nhà báo Miles Upshur đang trỗi dậy chiếm lấy toàn bộ bệnh viện.\r\n\r\nỞ đoạn phim cuối game, Waylon ngồi trước laptop và quyết định upload toàn bộ tư liệu về sự thật các cuộc thí nghiệm của tập đoàn Murkoff lên internet. Đứng kế bên anh là một mật vụ của FBI trong chương trình bảo vệ nhân chứng cảnh báo anh về những hiểm họa anh và gia đình sẽ phải gánh chịu nếu anh công bố những thông tin trên. Trò chơi kết thúc sau khi nhân vật Waylon Park quyết định nhấn nút \"Enter\" để upload.', 'Outlast là trò chơi điện tử thuộc thể loại kinh dị sinh tồn được phát triển và phát hành bởi hãng Red Barrels từ Canada dưới dạng góc nhìn người thứ nhất.', 'https://www.youtube.com/watch?v=2GPf3MdVOKI'),
(35, 'Doki Doki Literature Club!', 20000, 2017, 'Team Salvato', 'Windows 7', '1.8GHz Dual-Core CPU', ' 4 GB RAM', 'Integrated graphics', '350 MB available space', '', '', '', '', '', 'Hi, Monika here! Welcome to the Literature Club! It\'s always been a dream of mine to make something special out of the things I love. Now that you\'re a club member, you can help me make that dream come true in this cute game!  Every day is full of chit-chat and fun activities with all of my adorable and unique club members:  Sayori, the youthful bundle of sunshine who values happiness the most; Natsuki, the deceivingly cute girl who packs an assertive punch; Yuri, the timid and mysterious one who finds comfort in the world of books; ...And, of course, Monika, the leader of the club! That\'s me!  I\'m super excited for you to make friends with everyone and help the Literature Club become a more intimate place for all my members. But I can tell already that you\'re a sweetheart—will you promise to spend the most time with me? ♥  This game is not suitable for children or those who are easily disturbed.', 'The Literature Club is full of cute girls! Will you write the way into their heart? This game is not suitable for children or those who are easily disturbed.', 'https://www.youtube.com/watch?v=kB1663FTpzU&list=LL8IyNPytyjnX9Uj2cUOMMxg&index=2417'),
(36, ' Borderlands 3', 50000, 2019, '2K', 'Windows 7/10 (latest service pack', 'AMD FX-8350 (Intel i5-3570)', '6GB', 'AMD Radeon™ HD 7970 (NVIDIA GeForce GTX 680 2GB)', '75 GB', 'Windows 7/10 (latest service pack)', 'AMD Ryzen™ 5 2600 (Intel i7-4770)', '16GB', 'AMD Radeon™ RX 590 (NVIDIA GeForce GTX 1060 6GB)', '75 GB', 'Một thời gian dài sau khi những sự kiện trong Borderlands 2 kết thúc (trong cốt truyện, các sự kiện trong Borderlands: The Pre-Sequel diễn ra trước Borderlands 2), thành phố bay Sanctuary đã bị phá hủy khiến Lilith và những người còn sống sót của lực lượng Crimson Raider phải sử dụng những căn cứ tạm thời. Lilith muốn tìm đến những Vault đã được đánh dấu trong dải thiên hà để ngăn người khác dùng chúng vào mục đích xấu xa, nhưng để làm được điều này, họ phải tìm lại được chiếc chìa khóa chứa bản đồ các Vault đã bị thất lạc.\r\nSau vài năm tìm kiếm, Crimson Raider chẳng những không tìm được manh mối nào mà còn bị… thụt lùi khi phải đối đầu với một thế lực mới trỗi dậy là Children of the Vault. Do hai chị em Tyreen Calypso và Troy Calypso – các streamer bị bệnh vĩ cuồng – thành lập. Children of the Vault (COV) xem Crimson Raider là kẻ thù, bởi hai chị em này cũng muốn chiếm lấy các Vault mà Crimson Raider của Lilith đang tìm kiếm. Chúng tấn công các căn cứ của Crimson Raider và phá hoại hoạt động của họ, khiến tình thế càng trở nên gian nan cho Lilith. Thật may mắn là vào lúc này, Crimson Raider tìm được sự trợ giúp mới: bốn Vault Hunter mà Marcus chở về trên chiếc xe khách cọc cạch mà game thủ đã quen thuộc từ bản Borderlands đầu tiên.\r\nCùng với những người đồng đội mới, Lilith và những người còn sống sót của Crimson Raider lên chiếc phi thuyền Santuary 3 để bay vào vũ trụ, tìm đến những Vault mà họ đã nhìn thấy trong tấm bản đồ cuối phần 2. Cuộc phiêu lưu mới vào những biên cương xa xôi bắt đầu kể từ đó.', 'Borderlands 3 là một trò chơi video bắn súng góc nhìn thứ nhất hành động nhập vai được phát triển bởi Gearbox Software và được phát hành bởi 2K Games. Đây là phần tiếp theo của Borderlands 2 năm 2012, và là mục thứ tư trong loạt Borderlands chính.', 'https://www.youtube.com/watch?v=JrWxCUFMruo'),
(37, 'Agony', 200000, 2018, 'Madmind Studio', 'Windows 7 / 8 / 10', 'Intel Core i3 3.2 GHz, AMD Phenom II X4 955 - 4 Core, 3.2 GHz', '8 GB RAM', 'Radeon R9 280 or Nvidia GeForce GTX 660', '17 GB available space', 'Windows 7 / 8 /10', 'Intel Core i5-8400, AMD Ryzen 5 1600', '16 GB RAM', 'Radeon RX 580 or Nvidia GeForce GTX 1060 6GB', '17 GB available space', 'Lấy bối cảnh dưới Địa Ngục tối tăm nơi quỷ dữ và sự sợ hãi là những thứ luôn thường trực, Agony giao cho người chơi nhiệm vụ tẩu thoát dựa trên khả năng đặc biệt của nhân vật chính, đó là xâm nhập và điều khiển trí óc những con quỷ yếu đuối.Chúng ta đang nói đến Agony, một tựa game đi theo phong cách kinh dị góc nhìn người thứ nhất.\r\n\r\nNhân vật chính trong Agony không hề có chút kí ức nào về việc tại sao anh lại có mặt ở một địa điểm kinh hoàng như Địa Ngục. Thường xuyên gắn liền với tôn giáo và các câu chuyện thần thoại, đây là một bối cảnh khá mới mẻ khi đề cập đến thể loại game kinh dị sinh tồn.\r\nMàn chơi trong Agony khá rộng lớn, được chia ra thành nhiều địa điểm nhỏ, với những âm thanh gào thét, rên rỉ đầy ám ảnh.\r\nNhà sản xuất AGONY đã tạo ra một địa ngục thật sự ấn tượng, nhưng không phải ở khía cạnh đồ họa mà là chất liệu xây dựng. Nếu so với nhiều tựa game khác từng xuất hiện trên thị trường, cái địa ngục được mô tả trong trò chơi thật sự độc đáo mà chắc chắn bạn chưa bao giờ thấy ở bất kỳ game nào khác. Agony không có nhạc nền mà vận dụng âm thanh và những tiếng vọng để tạo không khí âm u và chết chóc ở địa ngục. Những âm thanh rên rỉ, gào thét vang vọng khắp mọi ngóc ngách, những thi thể thối rữa, bị treo lên, hoặc bị phanh thây nằm lăn lóc quanh những thứ rác rưởi không rõ là gì, hay những con quỷ đáng sợ rình rập khắp nơi, tất cả đều có thể khiến người chơi chết trong tức tưởi với bất kỳ sai lầm nào.\r\n\r\n\r\n\r\nTổng kết lại, nhà sản xuất đã mang đến một Agony \"đáng\" để trải nghiệm, Trò chơi đã sớm có sẵn định hướng khi chỉ hướng đến những người chơi hardcore, thích những tựa game thử thách lòng kiên nhẫn của họ hoặc có thể tự khám phá và trải nghiệm mà không cần bất kỳ chỉ dẫn nào của trò chơi.', 'Agony là một trò chơi video kinh dị sinh tồn giả tưởng đen tối 2018 được phát triển bởi Madmind Studio và được phát hành bởi PlayWay. Người chơi bắt đầu cuộc hành trình của mình như một linh hồn dày vò trong sâu thẳm Địa ngục mà không có bất kỳ ký ức nào về quá khứ của mình.', 'https://www.youtube.com/watch?v=iwinHf6H-Mo'),
(38, 'DOOM Eternal', 40000, 2020, 'Bethesda Softworks', '64-bit Windows 7 / 64-Bit Windows 10', 'Intel Core i5 @ 3.3 GHz or better, or AMD Ryzen 3 @ 3.1 GHz or better', '8 GB RAM', 'NVIDIA GeForce GTX 1050Ti (4GB), GTX 1060 (3GB), GTX 1650 (4GB) or AMD Radeon R9 280(3GB), AMD Radeon R9 290 (4GB), RX 470 (4GB)', '50 GB available space', '64-bit Windows 10', 'Intel Core i7-6700K or better, or AMD Ryzen 7 1800X or better', '8 GB RAM', 'NVIDIA GeForce GTX 1060 (6GB), NVIDIA GeForce 970 (4GB), AMD RX 480 (8GB)', '50 GB available space', 'Tiếp tục câu chuyện ở phần trước, Doom Eternal lấy bối cảnh ở Trái Đất, nơi đang bị thống trị bởi những đạo quân quỷ đến từ địa ngục. Xã hội con người gần như bị tiêu diệt sạch, số còn lại một là đã rời Trái Đất, hai là gia nhập đội quân kháng chiến chống quỷ Armored Response Coalition. Tưởng chừng như mọi hi vọng đã bị dập tắt thì The Doom Slayer trở lại (sau khi bị teleport đến một nơi không xác định) và bắt đầu cuộc chiến chống xâm lược của mình. \r\nDoom Slayer một lần nữa tiến vào địa ngục để săn lùng 3 tên giám mục địa ngục: Deags Nilox, Ranak,và Grav nhằm ngăn chặn cuộc xâm lược của binh đoàn quỷ địa ngục. Nhưng chủ mưu của cuộc xâm lăng này lại là một sinh vật ngoài hành tinh cổ đại tên Khan Maykr, ả ta năm lần bảy lượt ngăn cản Doom Slayer tiêu diệt những tên giám mục. Nhưng với aura mang hơi hướng “John Wick”, Doom Slayer đã thịt vô vàn con quỷ và tiêu diệt luôn Khan Maykr và Icon of Sin, đặt dấu chấm hết cho cuộc xâm lăng của quỷ địa ngục.', 'Doom Eternal là một trò chơi video bắn súng góc nhìn thứ nhất được phát triển bởi id Software và được xuất bản bởi Bethesda Softworks.', 'https://www.youtube.com/watch?v=_UuktemkCFI'),
(39, 'Mortal Kombat 11', 30000, 2019, ' Warner Bros Interactive Entertainment', '64-bit Windows 7 / Windows 10', 'Intel Core i5-750, 2.66 GHz / AMD Phenom II X4 965, 3.4 GHz or AMD Ryzen™ 3 1200, 3.1 GHz', '8 GB RAM', 'NVIDIA® GeForce™ GTX 670 or NVIDIA® GeForce™ GTX 1050 / AMD® Radeon™ HD 7950 or AMD® Radeon™ R9 270', '', '64-bit Windows 7 / Windows 10', 'Intel Core i5-2300, 2.8 GHz / AMD FX-6300, 3.5GHz or AMD Ryzen™ 5 1400, 3.2 GHz', '8 GB RAM', 'NVIDIA® GeForce™ GTX 780 or NVIDIA® GeForce™ GTX 1060-6GB / AMD® Radeon™ R9 290 or RX 570', '', 'Nếu bạn là một người hâm mộ của dòng game đối kháng Mortal Kombat thì chắc cũng không còn quá lạ đối với những nhân vật như Kuai Liang, Raiden hay Liu Kang....Cho đến phiên bản Mortal Kombat X thì đã có khá nhiều những nhân vật mới được giới thiệu với những sức mạnh đặc biệt của mình. Và trong phiên bản Mortal Kombat 11 này thì Geras được giới thiệu sẽ là một cái tên mới sẽ cùng đọ sức trên võ đài sinh tử của Mortal Kombat.\r\n\r\n\r\n\r\nNetherRealm cũng cho phép người chơi có một cái nhìn cận cảnh hơn về gameplay của tựa game đối kháng thương hiệu này trong suốt sự kiện livestream của họ. Nhà phát triển cũng đã trình diễn một loạt những đoạn footagae gameplay rất mạnh mẽ và không kém phần tàn bạo như phần trước, cùng với đó người hâm mộ sẽ được nhìn thấy một số nhân vật quen thuộc, và đồng thời cũng giới thiệu sự xuất hiện của nhân vật mới, đó là Geras.\r\n\r\n\r\n\r\nGeras được miêu tả là “người hầu cận mạnh mẽ và trung thành” của Kronika, Người Nắm Giữ Thời Gian, và là trùm nữ duy nhất trong cả series Mortal Kombat. Hắn ta trông có vẻ là một nhân vật ẩn chứa sức mạnh ghê gớm bên trong. Quan sát hắn trong trailer, Geras có thể triệu hồi các vật thể làm từ các, như là chiếc giường gai mà anh ta có thể kết liểu kẻ thù bằng cách đậm mạnh hắn vào chiếc giường. Hắn cũng có năng lực thao túng thời gian bằng cách đóng băng kẻ thù ngay tại chỗ.', 'Mortal Kombat 11 là phần thứ 11 của trò chơi điện tử đối kháng Mortal Kombat, do NetherRealm Studios sản xuất và Warner Bros. Interactive Entertainment phân phối. Game ra mắt ngày 23 tháng 4 năm 2019 trên các hệ máy PlayStation 4, Xbox One, Nintendo Switch và Windows.', 'https://www.youtube.com/watch?v=bxFoRCvEjUA'),
(40, 'Sekiro™: Shadows Die Twice', 600000, 2019, 'Activision (Excluding Japan and Asia), FromSoftware (Japan), 方块游戏 (Asia)', 'Windows 7 64-bit | Windows 8 64-bit | Windows 10 64-bit', 'Intel Core i3-2100 | AMD FX-6300', '4 GB RAM', 'NVIDIA GeForce GTX 760 | AMD Radeon HD 7950', '25 GB available space', 'Windows 7 64-bit | Windows 8 64-bit | Windows 10 64-bit', 'Intel Core i5-2500K | AMD Ryzen 5 1400', '8 GB RAM', 'NVIDIA GeForce GTX 970 | AMD Radeon RX 570', '25 GB available space', 'Sekiro: Shadows Die Twice vẫn là một tựa game nhập vai hành động giống như Bloodborne, tuy vậy tựa game này sẽ không phải là phiên bản giống theo phong cách Souls, mà sẽ đi theo một con đường khác hẳn và thậm chí là tách khỏi các tựa game trước của From Software. Hidetaka Miyazaki – giám đốc sản xuất của Sekiro: Shadows Die Twice đã có chia sẻ rằng đây không phải là một sản phẩm dạng “tiến hóa” của seri Soulsborne, thay vào đó nó được thiết kế mọi thứ từ đầu, với một ý tưởng hoàn toàn khác biệt, do đó sẽ thật là không công bằng khi cho rằng nó sẽ lại là một tựa game đi theo trường phái của Dark Souls hay Bloodborne.\r\n\r\n\r\n\r\nMột điều nữa là Sekiro: Shadows Die Twice sẽ không có chế độ chơi mạng, sẽ không còn những màn phối hợp giết boss hoặc PvP như các tựa game trước của From Software. Sekiro: Shadows Die Twice được thiết kế từ đầu hoàn toàn theo hướng chơi đơn, điều này cũng đi ngược lại xu thế của các game hiện đại, điểm độc đáo khác người thường thấy từ dòng game này.\r\n\r\n', 'Game of the Year - The Game Awards 2019, Best Action Game of 2019 - IGN. Carve your own clever path to vengeance in the award winning adventure from developer FromSoftware, creators of Bloodborne and the Dark Souls series. Take Revenge. Restore Your Honor. Kill Ingeniously.', 'https://www.youtube.com/watch?v=aUnEezrBFoA'),
(41, 'Sid Meier’s Civilization® VI', 20000, 2016, ' 2K, Aspyr (Mac), Aspyr (Linux)', 'Windows 7x64 / Windows 8.1x64 / Windows 10x64', 'Intel Core i3 2.5 Ghz or AMD Phenom II 2.6 Ghz or greater', '4 GB RAM', '1 GB & AMD 5570 or nVidia 450 or Intel Integrated Graphics 530', '12 GB available space', 'Windows 7x64 / Windows 8.1x64 / Windows 10x64', 'Fourth Generation Intel Core i5 2.5 Ghz or AMD FX8350 4.0 Ghz or greater', '8 GB RAM', '2GB & AMD 7970 or nVidia 770 or greater', '12 GB available space', 'Sid Meier’s Civilization VI (Civilization VI) là game chiến thuật 4X. Game cho phép ta xây dựng và phát triển một đế chế trong suốt mấy ngàn năm lịch sử của con người. Các bạn sẽ phát triển nền văn minh của mình từ một bộ lạc nhỏ, thông qua kinh tế, ngoại giao, chiến tranh, tôn giáo... để tiến tới kiểm soát toàn bộ hành tinh.\r\n\r\n\r\n\r\nKể từ khi con người xuất hiện, loài người đã liên kết với nhau trong các xã hội trên một hành trình khám phá. Từ những ngày đầu của thời kỳ đồ đá nơi các bộ lạc săn bắn động vật và hái lượm trái cây, cho tới cộng đồng toàn cầu ngày hôm nay, loài người đã trải qua một bước đi rất dài. Không phải là dễ dàng và vẫn có nhiều rạn nứt khó lành trên thế giới, nhưng nhiều điều tuyệt vời đã được phát minh. Nhiều đế quốc đã hình thành và sụp đổ trong suốt lịch sử của nhân loại. Những kỳ quan từng đứng như một thành tích cao chót vót để khoe sự khéo léo của con người và kỹ thuật sớm trở thành đống đổ nát. Việc lặp đi lặp lại chu kỳ lịch sử phát triển - hưng thịnh - suy tàn trên chứng minh rằng không có công thức nào, cũng như nền văn minh nào trường tồn với thời gian. Và nếu bạn muốn làm một chuyến du hành xuyên thời gian nhằm khám phá những điều kỳ diệu này, hãy thử chơi Civilization VI.', 'Civilization VI offers new ways to interact with your world, expand your empire across the map, advance your culture, and compete against history’s greatest leaders to build a civilization that will stand the test of time. Play as one of 20 historical leaders including Roosevelt (America) and Victoria (England).', 'https://www.youtube.com/watch?v=5KdE0p2joJw'),
(42, 'Call of Duty®: Black Ops III', 70000, 2015, ' Activision, Aspyr (Mac)', 'Windows 7 64-Bit / Windows 8 64-Bit / Windows 8.1 64-Bit', 'Intel® Core™ i3-530 @ 2.93 GHz / AMD Phenom™ II X4 810 @ 2.60 GHz', '6 GB RAM', 'NVIDIA® GeForce® GTX 470 @ 1GB / ATI® Radeon™ HD 6970 @ 1GB', '100 GB available space', '', '', '', '', '', 'Call of Duty Black Ops III (Call of Duty Black Ops 3, Call of Duty 2015, Call of Duty 12) là game bắn súng góc nhìn thứ nhất, là phiên bản thứ 12 trong seri Call of Duty. Game đưa người chơi vào chiến trường mạnh mẽ của tương lai, nơi mà công nghệ sinh học đã cho phép tạo ra những người lính công nghệ cao, những quân nhân nửa người nửa robot với những khả năng vượt trội.\r\n\r\n\r\n\r\nLịch sử đã chứng minh, từ khi con người còn lấy đá ném nhau, rồi chiến đấu bằng cung tên gươm giáo...cho đến ngày nay, luôn có một ai đó muốn thống trị nhân loại (hay ít nhất cũng là một phần nhân loại). Và Call of Duty Black Ops III cũng giới thiệu một câu truyện như vậy. Các bạn sẽ theo chân một đội Black Ops trong một hoạt động cứu hộ khi họ khám phá ra một âm mưu đe dọa tất cả thế giới. Các bạn được kêu gọi để điều tra sự biến mất của một nhóm CIA tại Singapore. Trong quá trình thực thi nhiệm vụ, họ đã mất liên lạc với trung tâm trong một vụ rò rỉ thông tin tình báo quân sự lớn nhất trong lịch sử. \"Bạn phải tìm ra sự thật\",  \"Thành viên trong nhóm của ta đang mất tích, và thông tin đang đưa chúng ta đến Cairo.\" Chào mừng bạn đến với năm 2065 trong Call of Duty Black Ops III.\r\n\r\n\r\n\r\n- Trong Campaign mode, các bạn phải đi du lịch qua một loạy các điểm nóng của một cuộc Chiến tranh Lạnh mới để tìm những đồng đội bị mất tích của bạn. Các bạn có thể chơi Campaign một mình (Solo) hoặc hợp tác với bạn bè (cooperatively).\r\n\r\n\r\n\r\n- Multiplayer sẽ mang đến cho các bạn một di chuyển mới, cho phép các bạni di chuyển êm ái, thông qua môi trường với sự khéo léo, sử dụng kiểm soát lực đẩy nhảy, trượt, ...Black Ops III multiplayer cũng giới thiệu đến các bạn hệ thống phát triển nhân vật mới, cho phép các bạn nâng cao khả năng làm chủ vũ khí và khả năng thiện chiến của mình thông qua một hệ thống tiến triển và mở khóa dựa trên các thử thách.\r\n\r\n\r\n\r\n- Không có phiên bản Call of Duty nào của Treyarch mà không có chế độ Zombies. \"Shadows of Evil\" có cốt truyện riêng biệt của nó, thiết lập trong năm 1940 tại Thành phố Morg hư cấu, nơi bốn nhân vật (femme fatale, magician, detective, boxer) gặp nhau trong một bộ phim lấy cảm hứng từ các câu chuyện kinh dị.\r\n\r\n', 'Call of Duty: Black Ops 4 là một tựa game bắn súng góc nhìn thứ nhất được Treyarch phát triển và sẽ được Activision phát hành vào ngày 12 tháng 10 năm 2018. Black Ops 4 là game thứ 15 trong loạt Call of Duty của và phần tiếp theo của Call of Duty: Black Ops III.', 'https://www.youtube.com/watch?v=k2GMPVXLGbk'),
(43, 'God of War', 200000, 2018, 'Sony Interactive Entertainment', '', '', '', '', '', '', '', '', '', '', 'God of War[a] là trò chơi phiêu lưu hành động góc nhìn thứ ba được Santa Monica Studio phát triển và Sony Interactive Entertainment (SIE) phát hành. Phát hành vào ngày 20 tháng 4 năm 2018, cho hệ máy PlayStation 4 (PS4), đây là phần thứ tám trong chuỗi trò chơi God of War, thứ tám theo thứ tự thời gian và là phần tiếp theo của trò chơi năm 2010, God of War III. Không giống như các trò chơi trước đó vốn dựa trên cơ sở của Thần thoại Hy Lạp, trò chơi này dựa trên cơ sở của Thần thoại Bắc Âu. Lần đầu tiên trong dòng game này có hai nhân vật chính: Kratos, cựu thần chiến tranh của Hy Lạp, và con trai của ông là Atreus. Sau cái chết của người vợ thứ hai của Kratos và mẹ của Atreus là Faye, họ bắt đầu cuộc hành trình để thực hiện lời hứa của bà ấy và rải tro của bà ấy ở đỉnh cao nhất trong chín cõi. Kratos giữ bí mật về quá khứ của mình không cho Atreus biết, người không biết về bản chất thần linh thực sự của mình. Trên hành trình của họ, họ gặp các quái vật và các thần của thế giới Bắc Âu.\r\n\r\nĐược giám đốc sáng tạo Cory Barlog mô tả như là phiên bản làm mới (reboot) lại toàn bộ thương hiệu, một sự thay đổi lớn trong trò chơi là Kratos chỉ sử dụng rìu Leviathan thay vì cặp song đao Blade of Chaos. God of War cũng sử dụng một góc nhìn chiếu qua vai, với cách quay phim One-shot, trái ngược góc nhìn điện ảnh cố định của các phiên bản trò chơi trước đó. Trò chơi bao gồm các yếu tố video nhập vai và con trai của Kratos, Atreus đóng vai trò hỗ trợ trong chiến đấu. Phần lớn nhóm phát triển của trò chơi gốc cũng phát triển God of War và thiết kế trò chơi để cho nó dễ tiếp cận và ổn định. Một trò chơi độc lập dùng văn bản text, God of War: A Call from the Wilds được phát hành vào tháng 2 năm 2018, mô phỏng Atreus trong chuyến phiêu lưu đầu tiên.\r\n\r\nGod of War nhận được sự ca ngợi từ giới phê bình cho cốt truyện, thiết kế thế giới, đạo diễn nghệ thuật, chất lượng đồ họa, nhân vật và hệ thống chiến đấu. Nhiều đánh giá cho rằng họ cảm nhận trò chơi đã hồi sinh dòng game một cách thành công mà không hề làm mất di đặc điểm của những phiên bản tiền nhiệm. Trò chơi nhận được điểm số hoàn hảo từ nhiều người đánh giá, khiến nó trở thành trò chơi được xếp hạng cao nhất trong chuỗi trò chơi God of War, đồng thời cũng là trò chơi PS4 được điểm đánh giá cao thứ 3 trên Metacritic. God of War có doanh thu khá, bán hơn năm triệu bản chỉ trong tháng đầu tiên phát hành, trở thảnh một trong những trò chơi PS4 bán chạy nhất mọi thời đại. Ngoài ra, trò chơi cũng nhận được giải thưởng trò chơi của năm từ rất nhiều kênh đại chúng ', 'God of War là series trò chơi điện tử thần thoại được sáng tạo bởi David Jaffe tại SIE Santa Monica Studio, một công ty con của Sony Interactive Entertainment.', 'https://www.youtube.com/watch?v=K0u_kAWLJOA'),
(44, 'Ori and the Blind Forest', 23232, 2015, 'Xbox Game Studios', 'Windows 7', 'Intel Core 2 Duo E4500 @ 2.2GHz or AMD Athlon 64 X2 5600+ @ 2.8 GHz', '4 GB RAM', 'GeForce 240 GT or Radeon HD 6570 – 1024 MB (1 gig)', '8 GB available space', 'Windows 7', 'Intel Core i5 2300 or AMD FX6120', '4 GB RAM', 'GeForce GTX 550 Ti or Radeon HD 6770', '8 GB available space', 'Kể từ sau khi được công bố tại sự kiện E3 năm 2014, sản phẩm của Moon Studio,Ori and the Blind Forest đã trở thành một trong những trò chơi trên Xbox One được mong chờ và nói tới nhiều nhất. Dưới đây là phần giới thiệu sơ về Ori and the Blind Forest, hé lộ phần nào bức tranh ẩn dấu đằng sau cốt truyện của trò chơi.Game có hai nhân vật chính là Ori, thực thể tách ra từ Spirit Tree sau một cơn bão lớn, và Naru, con quái vật to lớn mà nhìn thoáng qua, người chơi sẽ tưởng như gặp lại nhân vật Vô Diện trong phim hoạt hình Spirited Away (Cuộc phiêu lưu của Chihiro vào thế giới linh hồn). Từ cuộc giải cứu bất ngờ, Naru đã bảo vệ, bao bọc, chăm sóc Ori như một bậc phụ huynh mẫu mực. Cả hai đã cùng có những giây phút lao động, kiếm đồ ăn vui vẻ trong rừng Nibel.', '“Ori and the Blind Forest” tells the tale of a young orphan destined for heroics, through a visually stunning action-platformer crafted by Moon Studios for PC.', 'https://www.youtube.com/watch?v=EexSqzA5mXY'),
(45, 'The Room Three', 88888, 2018, ' Fireproof Games', 'Windows 7 or higher', '2.8 GHz Dual Core Processor', '4 GB RAM', 'Video card with 1024MB of VRAM', '4 GB available space', '', '', '', '', '', 'The Room Three sẽ tiếp tục truyền thống của dòng game The Room, với các câu đố khó nhằn, hệ thống điều khiển phá cách và một không khí “rờn rợn” đến lạnh người. Những điểm mới mà tựa game sẽ mang đến bao gồm khả năng nhìn trộm các cánh cửa bị khóa, hoặc sự xuất hiện của những nhân vật con người, chứ không chỉ là đồ vật vô tri nữa.', 'Lured to a remote island, you find yourself confined within the rooms of an ominous mansion. You must draw upon all your puzzle-solving ability to navigate a series of trials devised by a mysterious figure known only as “The Craftsman”. Do you have what it takes to escape?', 'https://www.youtube.com/watch?v=U-_zih88Dss'),
(46, 'Terraria', 20000, 2011, ' Re-Logic', 'Windows Xp, Vista, 7, 8/8.1, 10', '2.0 Ghz', '2.5GB', '200MB', '128mb Video Memory, capable of Shader', 'Windows 7, 8/8.1, 10', 'Dual Core 3.0 Ghz', '4GB', '256mb Video Memory, capable of Shader Model 2.0+', '200MB', 'Terraria sẽ cho bạn được đào bới, chiến đấu, khám phá, xây dựng. Không có gì là  không thể trong tựa game phiêu lưu kinh điển này.', 'Dig, fight, explore, build! Nothing is impossible in this action-packed adventure game. Four Pack also available!', 'https://www.youtube.com/watch?v=w7uOhFTrrq0'),
(47, 'Hollow Knight', 22222, 2017, 'Team Cherry', 'Windows 7', 'Intel Core 2 Duo E5200', '4 GB RAM', 'GeForce 9800GTX+ (1GB)', '9 GB available space', 'Windows 10', 'Intel Core i5', '8 GB RAM', 'GeForce GTX 560', '9 GB available space', 'Khám phá Vương Quốc cổ chìm sâu dưới lòng đất.\r\n\r\nBên dưới Thị Trấn tồi tàn Dirtmouth, có một vương quốc cổ bị lãng quên đang ngủ say. Rất nhiều người cách tìm cách xuống đây để tìm kiếm kho báu, vinh quang hay câu trả lời cho một bí mật cổ xưa.\r\n\r\nHollow Knight là một game phiêu lưu hành động 2D classic trong một thế giới game phong phú. Khám phá những hang động rộng lớn, những thành phố cổ xưa cùng với những rác thải chết người. Bạn sẽ chiến đấu với những sinh vật ô nhiễm, kết bạn với những chú bọ kỳ lạ và lý giải những bí ẩn cổ xưa trong lòng vương quốc.', 'Forge your own path in Hollow Knight! An epic action adventure through a vast ruined kingdom of insects and heroes. Explore twisting caverns, battle tainted creatures and befriend bizarre bugs, all in a classic, hand-drawn 2D style.', 'https://www.youtube.com/watch?v=UAO2urG23S4'),
(50, 'The Elder Scrolls® Online', 45343, 2014, 'Bethesda Softworks', 'Windows 7 64-bit', 'Intel® Core i3 540 or AMD A6-3620 or higher', '3 GB RAM', ' Direct X 11.0 compliant video card with 1GB RAM (NVidia GeForce 460 or AMD Radeon 6850)', '85 GB available space', 'Windows 7 64-bit', 'Intel® Core i5 2300 or AMD FX4350', ' 8 GB RAM', 'Direct X 11.0 compliant video card with 2GB RAM (NVIDIA® GeForce® GTX 750 or AMD Radeon™ HD 7850) or higher', '85 GB available space', 'ZeniMax Online Studios đã công bố một “tác phẩm điện ảnh” Elder Scrolls Online mới tại sự kiện The Game Awards và báo hiệu cho sự kết thúc của “Season of the Dragon”.\r\n\r\nVới trailer thực sự hoành tráng không thua kém bất kỳ thước phim chiếu rạp nào, một cuộc chiến hoàn hảo, nhiều chất liệu. Cuộc chiến bao gồm chiến thắng dành cho người tốt nhưng phải trả giá với những hy sinh, mất mát và khi mọi thứ tan biến khỏi không gian, giai đoạn tiếp theo của Elder Scrolls Online đã được tiết lộ với Skyrim.\r\n\r\n\r\nSkyrim là bối cảnh của “siêu phẩm” đình đám một thời The Elder Scrolls V: Skyrim – một trong những tựa game nổi tiếng nhất trong 10 năm qua với hơn 30 triệu bản được bán ra từ năm 2011.\r\n\r\nThe Elder Scrolls Online sẽ đưa người chơi tới thăm một số vùng đất nước tuyết trước đây và có vẻ như cảm hứng từ Bắc Âu sẽ là trọng tâm của The Elder Scrolls Online trong tương lai. Điều này cũng thực sự dễ hiểu bởi tính phổ biến của Skyrim, nếu nói không ngoa thì với Skyrim, tựa game online của The Elder Scrolls giờ mới chính thức được bắt đầu.', 'Join over 13 million players in the award-winning online multiplayer RPG and experience limitless adventure in a persistent Elder Scrolls world. Battle, craft, steal, or explore, and combine different types of equipment and abilities to create your own style of play. No game subscription required.', 'https://www.youtube.com/watch?v=8PfFKlWlE48'),
(51, 'MONSTER HUNTER: WORLD', 580303, 2018, 'CAPCOM Co., Ltd.', ' WINDOWS® 7, 8, 8.1, 10 (64-bit required)', ' Intel® Core™ i5-4460, 3.20GHz or AMD FX™-6300', '8 GB RAM', 'NVIDIA® GeForce® GTX 760 or AMD Radeon™ R7 260x (VRAM 2GB)', '48 GB available space', 'WINDOWS® 7, 8, 8.1, 10 (64-bit required)', 'Intel® Core™ i7 3770 3.4GHz or Intel® Core™ i3 8350 4GHz or AMD Ryzen™ 5 1500X', '8 GB RAM', 'NVIDIA® GeForce® GTX 1060 (VRAM 3GB) or AMD Radeon™ RX 570 (VRAM 4GB)', '48 GB available space', 'Monster Hunter là một trong các dòng game đình đám và có sức ảnh hưởng mạnh mẽ  nhất trên khắp thế giới, cùng lượng người hâm mộ đông đảo đồng hành cùng cái tên này xuyên suốt 15 năm qua. Sau khi ra mắt các phiên bản Monster Hunter độc quyền cho “gia đình” Nintendo và gặt hái được nhiều thành công, Capcom chính thức tiến thêm bước nữa khi quyết định “đàn áp” đa hệ với phiên bản mới toanh sở hữu cái tên đầy tham vọng: Monster Hunter World.\r\n\r\n\r\n\r\nĐược đánh tiếng tại kì hội chợ E3 2017, Capcom hứa hẹn Monster Hunter World là sự trở lại đầy mạnh mẽ khi giới thiệu lối chơi hào nhoáng, có chiều sâu mà ngay cả game thủ “già gân” lẫn những người còn lạ lẫm với dòng game cũng có thể tham gia được, đan xen đó là nền tảng đồ họa khá ấn tượng khi bước chân lên hệ máy console đời mới cũng như PC – riêng phiên bản dành cho PC sẽ ra mắt vào mùa thu 2018 tới. Vậy liệu rằng, Monster Hunter World sẽ trình diễn ra sao dưới góc nhìn của một giới mộ điệu “tân binh”?', 'Welcome to a new world! In Monster Hunter: World, the latest installment in the series, you can enjoy the ultimate hunting experience, using everything at your disposal to hunt monsters in a new world teeming with surprises and excitement.', 'https://www.youtube.com/watch?v=-0l0B7NDTAU'),
(52, 'Dishonored 2', 39888, 2016, 'Bethesda Softworks', ' Windows 7/8/10 (64-bit versions)', 'Intel Core i5-2400/AMD FX-8320 or better', '8 GB RAM', 'NVIDIA GTX 660 2GB/AMD Radeon HD 7970 3GB or better', '60 GB available space', 'Windows 10 (64-bit versions)', 'Intel Core i7-4770/AMD FX-8350 or better', '16 GB RAM', 'NVIDIA GTX 1060 6GB/AMD Radeon RX 480 8GB or better', '60 GB available space', 'Chúng ta có thể thấy Dishonored 2 đòi hỏi cấu hình khá khoai. Với một dàn máy tính tầm trung, các bạn sẽ phải nâng cấp thêm nếu muốn thoải mái trải nghiệm trò chơi này.\r\n\r\n\r\n\r\nSát thủ đầy quyền năng Corvo Attano đã trở lại với phần thứ hai của series Dishonored, lần này không còn đơn độc mà có thêm sự trợ giúp đến từ Emily Kaldwin - cô bé nay đã trưởng thành và sở hữu những kĩ năng ám sát không kém phần lợi hại so với người thầy của mình.\r\n\r\n\r\n\r\nNội dung của Dishonored 2 xoay quanh việc Emily phải tìm cách đoạt lại ngai vàng sau khi cô đã bị phế truất bởi những kẻ gian tồn tại trong vương quốc Dunwall. Game cho phép người chơi lựa chọn điều khiển một trong hai nhân vật chính với bộ kĩ năng hoàn toàn riêng biệt, đồng thời trải nghiệm cốt truyện dưới những góc nhìn khác nhau.', 'Dishonored 2 is set 15 years after the Lord Regent has been vanquished and the dreaded Rat Plague has passed into history. An otherworldly usurper has seized Empress Emily Kaldwin’s throne, leaving the fate of the Isles hanging in the balance. As Emily or Corvo, travel beyond the legendary streets of Dunwall to Karnaca, the once-dazzling coastal city that holds the keys to restoring Emily to power. Armed with the Mark of the Outsider and powerful new abilities, track down your enemies and take back what’s rightfully yours.', 'https://www.youtube.com/watch?v=UnsDyv-TtJg'),
(53, 'NieR:Automata', 77722, 2017, ' Square Enix', 'Windows 7 /8.1 /10 64bit', 'Intel Core i3 2100 or AMD A8-6500', '4 GB RAM', 'NVIDIA GeForce GTX 770 VRAM 2GB or AMD Radeon R9 270X VRAM 2GB', '50 GB available space', 'Windows 8.1 /10 64bit', 'Intel Core i5 4670 or AMD A10-7850K', '8 GB RAM', 'NVIDIA GeForce GTX 980 VRAM 4GB or AMD Radeon R9 380X VRAM 4GB', '50 GB available space', 'Nier: Automata được đặt trong bối cảnh hậu tận thế, khi mà một thế lực máy móc từ hành tinh khác đến xâm lược Trái Đất và buộc nhân loại phải rút chạy lên Mặt Trăng. Với quyết tâm đoạt lại ngôi nhà Trái Đất của mình, nhân loại đã liên tiếp triển khai lực lượng người máy xuống Trái Đất để chiến đấu với đội quân xâm lược kia. Tuy nhiên, trước sức mạnh hung hãn của đối phương, nỗ lực tái chiếm Địa Cầu của loài người không thu được kết quả gì đáng kể.\r\n\r\nYoRHa – biệt đội android (người máy dạng người) thế hệ mới nhất với năng lực chiến đấu siêu việt chính là niềm hi vọng lớn nhất của các nhà khoa học để mở ra cơ hội đánh bại thế lực máy móc hắc ám đang bá chiếm Địa Cầu. Và không ai khác, các thành viên của YoRHa mà đặc biệt là android nữ 2B chính là vai chính trong câu chuyện xoay quanh hành trình chiến đấu và tìm hiểu những bí mật trên Trái-Đất-không-còn-bóng-người trong Nier: Automata.\r\n\r\nĐiều thú vị là, 2B cũng như những người máy khác mà bạn sẽ gặp trong game hoàn toàn không phải là những cỗ máy vô tri vô giác. Bên cạnh bản tính vốn có được lập trình sẵn, thông qua tương tác với môi trường, họ sẽ dần dần hình thành nên tính cách của riêng mình – điều này ảnh hưởng không nhỏ đến cốt truyện của game. Và phải nói ngay rằng, Nier: Automata sẽ không phải là một tựa game chỉ có duy nhất một kết thúc. Cùng nhau, những người máy có thể là đồng minh, có thể là kẻ địch của nhau mang đến “nhân tính” và “sinh khí” cho một Trái Đất đã không còn bóng dáng của con người.', 'NieR: Automata tells the story of androids 2B, 9S and A2 and their battle to reclaim the machine-driven dystopia overrun by powerful machines.', 'https://www.youtube.com/watch?v=StXRi5zPPjk'),
(55, 'Destiny 2', 53293, 2019, 'Bungie', 'Windows® 7 / Windows® 8.1 / Windows® 10 64-bit (latest Service Pack)', ' Intel® Core™ i3 3250 3.5 GHz or Intel Pentium G4560 3.5 GHz / AMD FX-4350 4.2 GHz', '6 GB RAM', ' NVIDIA® GeForce® GTX 660 2GB or GTX 1050 2GB / AMD Radeon HD 7850 2GB', '105 GB available space', 'System Windows® 7 / Windows® 8.1 / Windows® 10 64-bit (latest Service Pack)', 'Processor Intel® Core™ i5 2400 3.4 GHz or i5 7400 3.5 GHz / AMD Ryzen R5 1600X 3.6 GHz', '8 GB RAM', 'Video NVIDIA® GeForce® GTX 970 4GB or GTX 1060 6GB / AMD R9 390 8GB Memory 8 GB RAM', '105 GB available space', 'Destiny là một cái tên quen thuộc với những ai sở hữu PS4 hoặc Xbox One từ những ngày đầu ra mắt. Là sản phẩm “đầu tay” của hãng Bungiesau khi chia tay với Microsoft, tuy rằng trò chơi còn tồn đọng những khuyết điểm, nhưng ít nhiều cũng tạo ra được một cộng đồng người hâm mộ lớn mạnh theo thời gian. Sau những thành công về doanh thu của Destiny cũng như bản mở rộng lấy lại “phong độ” The Taken King, không quá ngạc nhiên khi Bungie bắt tay vào việc phát triển phiên bản tiền nhiệm ngay sau đó. Và Destiny 2 cũng đã chính thức xuất hiện, sự trông ngóng từ những người hâm mộ được “hâm nóng” bằng hàng loạt các đoạn trailer và video trình diễn lối chơi hấp dẫn trong suốt thời gian qua và không ít thì nhiều, cũng thu hút được ánh nhìn mới từ những game thủ chưa có hứng thú về Destiny trước kia kể cả những game thủ chưa từng chơi Destiny trước đó. Để ngưởi chơi dễ dàng hòa nhập vào game, hãy cùng nhìn lại những điều sau đây để có thể tham gia hành trình của các Guardian trong Destiny 2 một cách tốt hơn.', 'Dive into the free-to-play world of Destiny 2 to experience responsive FPS combat, explore the mysteries of our solar system, customize your guardian with unique gear, and unleash elemental abilities against powerful enemies.', 'https://www.youtube.com/watch?v=hdWkpbPTpmE'),
(56, 'Life is Strange', 3000000, 2015, ' Square Enix, Feral interactive (Mac), Feral Interactive (Linux)', 'Windows Vista', 'Dual Core 2.0GHz or equivalent', '2 GB RAM', 'ATI or NVidia card w/ 512 MB RAM (not recommended for Intel HD Graphics cards)', '5 GB available space', 'Windows 7', 'Dual Core 3.0GHz or equivalent', '2 GB RAM', 'ATI or NVidia card w/ 1024 MB RAM (NVIDIA GeForce GTX 260 or ATI HD 4890)', '14 GB available space', 'Life Is Strange là game phiêu lưu được phát triển bởi Dontnod Entertainment, và phát hành bởi Square Enix. Cốt truyện của trò chơi tập trung vào Maxine, một sinh viên nhiếp ảnh, người phát hiện ra rằng cô ấy có khả năng tua lại thời gian bất cứ lúc nào. Life is Strange Complete Season là bản đầy đủ gồm Episode 1 - Episode 5\r\n\r\n\r\n\r\nLife is Strange kể về những câu chuyện hấp dẫn của Max; một sinh viên nhiếp ảnh, người đột nhiên phát hiện ra cô là có thể quay ngược thời gian. Cô trở về quê để gặp người bạn thời thơ ấu của mình, người mà cô đã không nhìn thấy trong năm năm qua. Cuộc hội ngộ biến cuộc sống của cô đảo lộn khi các sự kiện ngày càng lạ xảy ra trong thị trấn nhỏ của Arcadia Bay. Max bắt đầu có linh cảm và cố gắng để hiểu được ý nghĩa của sức mạnh của mình. Cô sử dụng sức mạnh của mình để cứu cuộc sống của Chloe nhưng cô nhanh chóng hiểu rằng việc thay đổi quá khứ đôi khi có thể dẫn đến một tương lai tàn phá.\r\n\r\n\r\n\r\nSau nhiều năm sống xa quê hương, sinh viên nhiếp ảnh Maxine Caulfield trở về quê nhà Arcadia Bay, Oregon để thăm bạn bè của cô: Chloe và Rachel Amber. Khi cô đến nhà Chloe, Max bỗng nhận ra cô có thể cảm nhận được các sự kiện trong quá khứ khi quan sát các đồ vật trong gia đình.\r\n\r\n\r\n\r\nKhi cả hai đoàn tụ, Chloe là một người hoàn toàn khác nhau, cả về tinh thần và sự xuất hiện. Cô giống như một kẻ nổi loạn, nhuộm tóc, có hình xăm trên cánh tay phải của mình, hút thuốc. Khám phá căn phòng, Max phát hiện tờ rơi tìm người mất tích và người đó là bạn bè chung của họ, Rachel Amber.\r\n\r\n\r\n\r\nMax biết rằng cha của Chloe đã qua đời và kể từ đó Chloe đã sống với một nỗi buồn không thể khắc phục. Cô tìm thấy chỗ dựa tinh thần ở Rachel Amber. Chloe giải thích rằng Rachel làm bạn với cô, và họ dự định chuyển đến Los Angeles với nhau. Chloe nghĩ của Rachel là \"thiên thần của cô ấy\". Tuy nhiên, bỗng nhiên, Rachel biến mất cùng với bạn trai của cô ấy. Nhiều người tin rằng Rachel chỉ đơn thuần là bỏ đi, tuy nhiên, Chloe không tin điều đó. Max quyết định giúp Chloe cùng nhau điều tra sự biến mất của Rachel, và từ đó họ đã làm sáng tỏ những bí ẩn của thành phố.\r\n\r\n\r\n\r\nLife is Strange là game phiêu lưu đồ họa góc nhìn người thứ ba gồm 5 Episode. Game sử dụng các yếu tố gameplay phi tuyến tính, cây hội thoại, loại hình phổ biến trong các game phiêu lưu mạo hiểm point and click như The Wolf Among Us, The Walking Dead của Telltale Games, và các trò chơi nhập vai như seri Mass Effect của BioWare.\r\n\r\n\r\n\r\nTuy nhiên, Khác với như game khác, Life is Strange dựa trên sự lựa chọn và hậu quả của trò chơi trong khi cho phép các bạn tua lại thời gian. Do đó hành động và lựa chọn của các bạn trong game sẽ ảnh hưởng đến quá khứ, hiện tại và tương lai. Vì các bạn có thể tua lại thời gian để thay đổi quá trình của sự kiện nên game sẽ có nhiều kết thúc khác nhau tùy thuộc vào lựa chọn của các bạn', 'Life is Strange is an award-winning and critically acclaimed episodic adventure game that allows the player to rewind time and affect the past, present and future.', 'https://www.youtube.com/watch?v=AURVxvIZrmU'),
(57, 'Cuphead', 37772, 2017, ' Studio MDHR Entertainment Inc.', '', '', '', '', '', '', '', '', '', '', '', '', 'https://www.youtube.com/watch?v=7jvRoNPBHjk'),
(58, 'Shadow of the Tomb Raider', 68234, 2018, ' Square Enix, Feral Interactive (Mac), Feral interactive (Linux)', '', '', '', '', '', '', '', '', '', '', '', '', 'https://www.youtube.com/watch?v=XYtyeqVQnRI'),
(59, 'SUPER MARIO MAKER', 43453, 2015, 'Nintendo', 'Windows 7 (x64) or above', '', '4 GB minimum, 6 GB or more recommended', '', '4 GB minimum, 6 GB or more recommended', '', '', '', '', '', '', '', 'https://www.youtube.com/watch?v=SV-Vy317a8g'),
(60, 'Dragon Ball Z: kakarot', 60000, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'https://www.youtube.com/watch?v=1Y-A1kUCvzY');

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
(34, 'outlast11.jpg', 34, 1),
(35, 'outlast12.jpg', 34, 2),
(36, 'outlast13.png', 34, 2),
(37, 'outlast14.jpg', 34, 2),
(38, 'outlast15.webp', 34, 2),
(39, 'doki1.png', 35, 1),
(40, 'doki2.jpg', 35, 2),
(41, 'doki3.png', 35, 2),
(42, 'doki4.webp', 35, 2),
(43, 'doki5.jpg', 35, 2),
(44, 'borderland3mot.jpg', 36, 1),
(45, 'borderland32.jpg', 36, 2),
(46, 'borderland33.jpg', 36, 2),
(47, 'borderland34.jpg', 36, 2),
(48, 'borderland35.jpg', 36, 2),
(49, 'agonymot.jpg', 37, 1),
(50, 'agony2.jpg', 37, 2),
(51, 'agony3.jpg', 37, 2),
(52, 'agony4.jpg', 37, 2),
(53, 'agony5.png', 37, 2),
(54, 'doometernal2.jpg', 38, 1),
(55, 'doometernalmot.jpg', 38, 2),
(56, 'doometernal3.jpg', 38, 2),
(57, 'doometernal4.jpg', 38, 2),
(58, 'doometernal5.jpg', 38, 2),
(59, 'mortalmot.jpg', 39, 1),
(60, 'mortal6.jpg', 39, 2),
(61, 'mortal3.jpg', 39, 2),
(62, 'mortal4.jpg', 39, 2),
(63, 'mortal5.jpg', 39, 2),
(64, 'sekiro0.webp', 40, 1),
(65, 'sekiromot.jpg', 40, 2),
(66, 'sekiro2.jpg', 40, 2),
(67, 'sekiro3.jpg', 40, 2),
(68, 'sekiro4.jpg', 40, 2),
(69, 'sidmeiermot.jpg', 41, 1),
(70, 'sidmeier2.jpg', 41, 2),
(71, 'sidmeier3.jpg', 41, 2),
(72, 'sidmeier4.jpg', 41, 2),
(73, 'sidmeier5.jpg', 41, 2),
(74, 'codmot.webp', 42, 1),
(75, 'cod2.jpg', 42, 2),
(76, 'cod3.webp', 42, 2),
(77, 'cod4.webp', 42, 2),
(78, 'cod5.webp', 42, 2),
(79, 'godofwarmot.jpg', 43, 1),
(80, 'godofwar2.jpg', 43, 2),
(81, 'godofwar3.jpg', 43, 2),
(82, 'godofwar4.jpg', 43, 2),
(83, 'godofwar5.jpg', 43, 2),
(84, 'orimot.jpg', 44, 1),
(85, 'ori2.jpg', 44, 2),
(86, 'ori3.jpg', 44, 2),
(87, 'ori4.jpg', 44, 2),
(88, 'ori5.jpg', 44, 2),
(89, 'theroommot.webp', 45, 1),
(90, 'theroom2.jpg', 45, 2),
(91, 'theroom3.jpg', 45, 2),
(92, 'theroom4.jpg', 45, 2),
(93, 'theroom5.jpg', 45, 2),
(94, 'terrariamot.jpg', 46, 1),
(95, 'terraria2.jpg', 46, 2),
(96, 'terraria3.jpg', 46, 2),
(97, 'terraria4.jpg', 46, 2),
(98, 'terraria5.jpg', 46, 2),
(99, 'hollowknightmot.webp', 47, 1),
(100, 'hollowknight2.jpg', 47, 2),
(101, 'hollowknight3.jpg', 47, 2),
(102, 'hollowknight4.jpg', 47, 2),
(103, 'hollowknight5.jpg', 47, 2),
(124, 'elderscrollmot.jpg', 50, 1),
(125, 'elderscroll2.jpg', 50, 2),
(126, 'elderscroll3.jpg', 50, 2),
(127, 'elderscroll4.jpg', 50, 2),
(128, 'elderscroll5.jpg', 50, 2),
(129, 'monstermot.jpg', 51, 1),
(130, 'monster2.jpg', 51, 2),
(131, 'monster3.jpg', 51, 2),
(132, 'monster4.jpg', 51, 2),
(133, 'monster5.jpg', 51, 2),
(134, 'dishonormot.jpg', 52, 1),
(135, 'dishonor2.jpg', 52, 2),
(136, 'dishonor3.jpg', 52, 2),
(137, 'dishonor4.jpg', 52, 2),
(138, 'dishonor5.jpg', 52, 2),
(139, 'niermot.webp', 53, 1),
(140, 'nier2.jpg', 53, 2),
(141, 'nier3.jpg', 53, 2),
(142, 'nier4.jpg', 53, 2),
(143, 'nier5.jpg', 53, 2),
(154, 'destinymot.jpg', 55, 1),
(155, 'destiny2.jpg', 55, 2),
(156, 'elderscroll3.jpg', 55, 2),
(157, 'destiny4.jpg', 55, 2),
(158, 'destiny5.jpg', 55, 2),
(159, 'liifeisstrangemot.webp', 56, 1),
(160, 'liifeisstrange2.jpg', 56, 2),
(161, 'liifeisstrange3.jpg', 56, 2),
(162, 'liifeisstrange4.jpg', 56, 2),
(163, 'liifeisstrange5.jpg', 56, 2),
(164, 'cupheadmot.jpg', 57, 1),
(165, 'cuphead2.jpg', 57, 2),
(166, 'cuphead3.jpg', 57, 2),
(167, 'cuphead4.jpg', 57, 2),
(168, 'cuphead5.jpg', 57, 2),
(169, 'tombraidermot.jpg', 58, 1),
(170, 'tombraider2.jpg', 58, 2),
(171, 'tombraider3.jpg', 58, 2),
(172, 'theroom4.jpg', 58, 2),
(173, 'tombraider5.jpg', 58, 2),
(174, 'mariomot.webp', 59, 1),
(175, 'mario2.jpg', 59, 2),
(176, 'mario3.jpg', 59, 2),
(177, 'mario4.jpg', 59, 2),
(178, 'mario5.jpg', 59, 2),
(179, 'Zkakarot1.jpg', 60, 1),
(180, 'Zkakarot2.jpg', 60, 2),
(181, 'Zkakarot3.jpg', 60, 2),
(182, 'Zkakarot4.jpg', 60, 2),
(183, 'Zkakarot5.jpg', 60, 2);

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
(8, 'admin', '23', 'admin@da', 'admin', '1234567890', 1, 'frog.jpg', 0);

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
  MODIFY `idgame` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `hinh`
--
ALTER TABLE `hinh`
  MODIFY `idhinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

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
