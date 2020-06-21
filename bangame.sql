-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 21, 2020 lúc 07:05 AM
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
  `mota` longtext COLLATE utf8_unicode_ci NOT NULL,
  `trailer` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `game`
--

INSERT INTO `game` (`idgame`, `tengame`, `giatien`, `namphathanh`, `nhaphathanh`, `os_mini`, `processor_mini`, `memory_mini`, `graphics_mini`, `harddrive_mini`, `os_recommend`, `processor_recommend`, `memory_recommend`, `graphics_recommend`, `harddrive_recommend`, `content`, `mota`, `trailer`) VALUES
(1, 'GrandThefAuto V', 479000, 2013, 'Rockstar', 'Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1, Windows Vista 64 Bit Service Pack 2*', 'Intel Core 2 Quad CPU Q6600 @ 2.40GHz (4 CPUs) / AMD Phenom 9850 Quad-Core Processor (4 CPUs) @ 2.5GHz', '4 GB RAM', 'NVIDIA 9800 GT 1GB / AMD HD 4870 1GB (DX 10, 10.1, 11)', '65 GB available space', 'OS: Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1\r\n\r\n', 'Intel Core i5 3470 @ 3.2GHz (4 CPUs) / AMD X8 FX-8350 @ 4GHz (8 CPUs)', '8 GB RAM', 'NVIDIA GTX 660 2GB / AMD HD 7870 2GB', '65 GB available space', 'Grand Theft Auto V (còn được gọi là Grand Theft Auto Năm, GTA 5 hoặc GTA V) là trò chơi video được phát triển bởi Rockstar North thuộc hãng Rockstar Games. Là phiên bản thứ năm trong Dòng trò chơi Grand Theft Auto và là phần kế tiếp của Grand Theft Auto IV . Bản gốc của trò chơi chính thức được phát hành vào ngày 17 Tháng 9 năm 2013 cho phiên bản Xbox 360 và PlayStation 3. Trò chơi cũng đã được phát hành cho phiên bản Xbox One và PlayStation 4 vào ngày 18 tháng 11 năm 2014, sau đó phát hành cho PC vào ngày 14 tháng 4 năm 2015. Trò chơi nằm trong mạch truyện chính của series Grand Theft Auto, mạch truyện này được tính là từ khi bắt đầu nội dung của trò chơi Grand Theft Auto IV (2008), không liên hệ nội dung đến các phần trước Grand Theft Auto IV. Nằm trong tiểu bang hư cấu San Andreas, mô phỏng Nam California, câu chuyện nói về ba tên tội phạm và nỗ lực của họ trong việc thực hiện các cuộc tấn công trong thế giới ngầm bên cạnh là chống lại chính phủ và các thế lực khác. Trò chơi được thiết kế theo kiểu thế giới mở cho phép người chơi tự do đi khắp nơi, các vùng nông thôn, rừng núi, hoang mạc và thành phố hư cấu Los Santos, mô phỏng thành phố Los Angeles ngoài đời.\r\n\r\nTrò chơi hỗ trợ chơi theo góc nhìn thứ nhất (FPS - First Person Shooter) và thứ ba (TPS - Third Person Shooter), di chuyển trong thế giới bằng cách điều hướng chân để đi bộ hoặc phương tiện giao thông. Người chơi điều khiển ba nhân vật chính xuyên suốt trò chơi và có thể chuyển đổi điều khiển qua lại giữa các nhân vật ở ngoài hoặc trong nhiệm vụ (một số phân đoạn trong nhiệm vụ buộc người chơi phải điều khiển một nhân vật nhất định hoặc phải chuyển đổi sang nhân vật khác). Câu chuyện chủ yếu xoay quanh những việc của tội phạm như trộm cướp, đánh nhau, liên hệ đến việc bắn súng và lái xe. Hệ thống cảnh sát trong trò chơi sẽ luôn cố gắng kiểm soát người chơi khi thực hiện những hành vi tội ác đến mức độ nào đó bằng cách bắt vào tù hoặc giết, số sao truy nã (tối đa là năm sao) càng cao thì mức độ nguy hiểm của cảnh sát đối với nhân vật càng tăng, tương tự như những phần Grand Theft Auto trước đó. Grand Theft Auto Online , chế độ chơi trực tiếp nhiều người chơi, cho phép lên đến 30 người chơi cùng khám phá thế giới, làm nhiệm vụ, tham gia các trò chơi như đánh nhau, đua xe,...\r\n\r\nTrò chơi được phát triển ngay sau khi phát hành Grand Theft Auto IV và được thực hiện giữa nhiều studio của Rockstar Games trên toàn thế giới. Nhóm phát triển đã dựa nhiều yếu tố trong cơ chế trò chơi từ các trò chơi trước đó của họ như Red Dead Redemption và Max Payne 3, và thiết kế trò chơi xung quanh ba nhân vật chính để đổi mới lối chơi so với những phiên bản trò chơi trước. Phần lớn công việc tạo trò chơi là công đoạn tạo ra thế giới mở, và các thành viên trong nhóm phát triển đã đến California để nghiên cứu thực địa nơi đây bằng cách chụp nhiều bức ảnh, quay video rồi gửi cho đội thiết kế. Là trò chơi được mong chờ nhất trong năm 2013, Grand Theft Auto V đã phá vỡ kỷ lục bán hàng của ngành công nghiệp game và trở thành sản phẩm giải trí tăng doanh thu nhanh nhất trong lịch sử, kiếm được 800 triệu USD trong ngày đầu tiên và 1 tỷ USD trong ba ngày. Nó đã nhận được sự ủng hộ rộng rãi, cùng nhiều nhận xét tích cực, khen ngợi về cách thiết kế nhân vật, thế giới mở, đồ họa và lối chơi. Tuy nhiên, tương tự như các phần trò chơi trước, nó cũng vấp phải không ít tranh cãi, kiện tụng về nội dung bạo lực, phân biệt giới tính... Được đánh giá là một trong những trò chơi nổi tiếng nhất của thế hệ thứ 7 (tính từ giai đoạn cuối năm 2005 trở đi) và được công nhận là một trong những trò chơi hay nhất từng được thực hiện, nó đã giành được giải thưởng vào cuối năm là giải thưởng Game of the Year (Trò chơi của năm). Tính đến hiện tại, GTA 5 đã bán được trên 90 triệu bản trò chơi trên toàn thế giới và là một trong những trò chơi video bán chạy nhất mọi thời đại.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde enim alias quasi aut cupiditate quas tempore! Eos iste doloribus quia, error illum architecto rerum a minima voluptas ratione sit asperio', 'https://www.youtube.com/watch?v=QkkoHAzjnUs'),
(2, 'Doki Doki Literature Club!', 0, 2017, '\r\nTeam Salvato', '0', '0', '0', '0', '0', 'OS: Windows 7\r\n\r\n\r\n', '1.8GHz Dual-Core CPU', '4 GB RAM', 'Integrated graphics', '350 MB available space', 'Hi, Monika here!\r\nWelcome to the Literature Club! It\'s always been a dream of mine to make something special out of the things I love. Now that you\'re a club member, you can help me make that dream come true in this cute game!\r\n\r\nEvery day is full of chit-chat and fun activities with all of my adorable and unique club members:\r\n\r\nSayori, the youthful bundle of sunshine who values happiness the most;\r\nNatsuki, the deceivingly cute girl who packs an assertive punch;\r\nYuri, the timid and mysterious one who finds comfort in the world of books;\r\n...And, of course, Monika, the leader of the club! That\'s me!\r\n\r\nI\'m super excited for you to make friends with everyone and help the Literature Club become a more intimate place for all my members. But I can tell already that you\'re a sweetheart—will you promise to spend the most time with me? ♥\r\n\r\nThis game is not suitable for children\r\nor those who are easily disturbed.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde enim alias quasi aut cupiditate quas tempore! Eos iste doloribus quia, error illum architecto rerum a minima voluptas ratione sit asperio', 'https://www.youtube.com/watch?v=kB1663FTpzU'),
(3, 'Borderlands 3', 990000, 2020, '2k', 'Windows 7/10 (latest service pack)', 'AMD FX-8350 or Intel i5-3570', '6 GB RAM', 'AMD Radeon™ HD 7970 or NVIDIA GeForce GTX 680 2 GB', '75 GB available space', 'Windows 7/10 (latest service pack)', 'AMD Ryzen™ 5 2600 (Intel i7-4770)', '16 GB RAM', 'AMD Radeon™ RX 590 or NVIDIA GeForce GTX 1060 6GB', '75 GB available space', 'The original shooter-looter returns, packing bazillions of guns and an all-new mayhem-fueled adventure! Blast through new worlds and enemies as one of four brand new Vault Hunters – the ultimate treasure-seeking badasses of the Borderlands, each with deep skill trees, abilities, and customization. Play solo or join with friends to take on insane enemies, score loads of loot and save your home from the most ruthless cult leaders in the galaxy.\r\nA MAYHEM-FUELED THRILL RIDE\r\nStop the fanatical Calypso Twins from uniting the bandit clans and claiming the galaxy’s ultimate power. Only you, a thrill-seeking Vault Hunter, have the arsenal and allies to take them down.\r\nYOUR VAULT HUNTER, YOUR PLAYSTYLE\r\nBecome one of four extraordinary Vault Hunters, each with unique abilities, playstyles, deep skill trees, and tons of personalization options. All Vault Hunters are capable of awesome mayhem alone, but together they are unstoppable.\r\nLOCK, LOAD, AND LOOT\r\nWith bazillions of guns and gadgets, every fight is an opportunity to score new gear. Firearms with self-propelling bullet shields? Check. Rifles that spawn fire-spewing volcanoes? Obviously. Guns that grow legs and chase down enemies while hurling verbal insults? Yeah, got that too.', 'The original shooter-looter returns, packing bazillions of guns and a mayhem-fueled adventure! Blast through new worlds & enemies and save your home from the most ruthless cult leaders in the galaxy.', 'https://www.youtube.com/watch?v=d9Gu1PspA3Y'),
(4, 'Dishonored 2', 900000, 2016, 'Bethesda Softworks', 'Windows 7/8/10 (64-bit versions)', 'Intel Core i5-2400/AMD FX-8320 or better', '8 GB RAM', 'NVIDIA GTX 660 2GB/AMD Radeon HD 7970 3GB or better', '60 GB available space', 'Windows 10 (64-bit versions)', 'Intel Core i7-4770/AMD FX-8350 or better', '16 GB RAM', 'NVIDIA GTX 1060 6GB/AMD Radeon RX 480 8GB or better', '60 GB available space', 'Reprise your role as a supernatural assassin in Dishonored 2.\r\nPraised by PC Gamer as “brilliant”, IGN as “amazing” and “a super sequel, IGN as “amazing” and “a superb sequel”, declared a “masterpiece” by Eurogamer, and hailed “a must-play revenge tale among the best in its class” by Game Informer, Dishonored 2 is the follow up to Arkane Studio\'s first-person action blockbuster and winner of more than 100 \'Game of the Year\' awards, Dishonored.\r\n\r\nPlay your way in a world where mysticism and industry collide. Will you choose to play as Empress Emily Kaldwin or the royal protector, Corvo Attano? Will you make your way through the game unseen, make full use of its brutal combat system, or use a blend of both? How will you combine your character\'s unique set of powers, weapons and gadgets to eliminate your enemies? The story responds to your choices, leading to intriguing outcomes, as you play through each of the game\'s hand-crafted missions.\r\n', 'Reprise your role as a supernatural assassin in Dishonored 2. Declared a “masterpiece” by Eurogamer and hailed “a must-play revenge tale” by Game Informer, Dishonored 2 is the follow up to Arkane’s 1st-person action blockbuster & winner of 100+ \'Game of the Year\' awards, Dishonored.\r\n', 'https://www.youtube.com/watch?v=l1jyUAtxh-8'),
(5, 'Outlast', 690000, 2013, 'Red Barrels\r\n', 'Windows XP / Vista / 7 / 8 - 64 bits *', '2.2 GHz Dual Core CPU', '2 GB RAM', '512 MB NVIDIA GeForce 9800GTX / ATI Radeon HD 3xxx series', '5 GB available space', 'Windows Vista / 7 / 8 - 64 bits', '2.8 GHz Quad Core CPU', '3 GB RAM', ' 1GB NVIDIA GTX 460 / ATI Radeon HD 6850 or better', '5 GB available space', 'Hell is an experiment you can\'t survive in Outlast, a first-person survival horror game developed by veterans of some of the biggest game franchises in history. As investigative journalist Miles Upshur, explore Mount Massive Asylum and try to survive long enough to discover its terrible secret... if you dare.\r\n\r\nSynopsis:\r\n\r\nIn the remote mountains of Colorado, horrors wait inside Mount Massive Asylum. A long-abandoned home for the mentally ill, recently re-opened by the “research and charity” branch of the transnational Murkoff Corporation, the asylum has been operating in strict secrecy… until now.\r\n\r\nActing on a tip from an anonymous source, independent journalist Miles Upshur breaks into the facility, and what he discovers walks a terrifying line between science and religion, nature and something else entirely. Once inside, his only hope of escape lies with the terrible truth at the heart of Mount Massive.\r\n\r\nOutlast is a true survival horror experience which aims to show that the most terrifying monsters of all come from the human mind.\r\n\r\nFeatures:\r\n\r\nTrue Survival Horror Experience: You are no fighter - if you want to survive the horrors of the asylum, your only chance is to run... or hide\r\nImmersive Graphics: AAA-quality graphics give players a detailed, terrifying world to explore\r\nHide and Sneak: Stealth-based gameplay, with parkour-inspired platforming elements\r\nUnpredictable Enemies: Players cannot know when - and from where - one of the asylum’s terrifying inhabitants will finally catch up to them\r\nReal Horror: Outlast’s setting and characters are inspired by real asylums and cases of criminal insanity\r\n\r\nWarning:\r\n\r\nOutlast contains intense violence, gore, graphic sexual content, and strong language. Please enjoy.', '', 'https://www.youtube.com/watch?v=uKA-IA4locM'),
(6, 'Outlast 2', 960000, 2017, 'Red Barrels', 'Windows Vista / 7 / 8 / 10, 64-bits', 'Intel Core i3-530', '4 GB RAM\r\n', '1GB VRAM, NVIDIA Geforce GTX 260 / ATI Radeon HD 4870\r\n', '30 GB available space', 'Windows Vista / 7 / 8 / 10, 64-bits', 'Intel Core i5', '8 GB RAM', '1.5GB VRAM, NVIDIA Geforce GTX 660 / ATI Radeon HD 7850', '30 GB available space', 'Outlast 2 is the sequel to the acclaimed survival horror game Outlast. Set in the same universe as the first game, but with different characters and a different setting, Outlast 2 is a twisted new journey into the depths of the human mind and its dark secrets.\r\n\r\nOutlast 2 introduces you to Sullivan Knoth and his followers, who left our wicked world behind to give birth to Temple Gate, a town, deep in the wilderness and hidden from civilization. Knoth and his flock are preparing for the tribulations of the end of times and you’re right in the thick of it.\r\n\r\nYou are Blake Langermann, a cameraman working with your wife, Lynn. The two of you are investigative journalists willing to take risks and dig deep to uncover the stories no one else will dare touch.\r\n\r\nYou\'re following a trail of clues that started with the seemingly impossible murder of a pregnant woman known only as Jane Doe.\r\nThe investigation has lead you miles into the Arizona desert, to a darkness so deep that no one could shed light upon it, and a corruption so profound that going mad may be the only sane thing to do.', '', 'https://www.youtube.com/watch?v=MKrUZ36IVAY'),
(7, 'Ai Shoujo', 1008500, 2020, 'ILLUSION', 'WINDOWS® 8.1 / 10 (64-bit required)\r\n', 'Intel Core ｉ3 4000 serise or better', '4 GB RAM', 'NVIDIA® GeForce® GTX 700 Series or AMD Radeon™ R-2000 Series (VRAM 2GB) or better', '15 GB available space', 'WINDOWS® 8.1 / 10 (64-bit required)', 'Intel Core ｉ5 4000 serise or better', '8 GB RAM', 'NVIDIA® GeForce® GTX 700 Series or AMD Radeon™ R-2000 Series (VRAM 4GB) or better', '15 GB available space', '◆The Ultimate 3D Life Simulator◆\r\nAI Shoujo is a simulation crafting and survival game where you\'ll enjoy a carefree life of abundance on a lush deserted island. But this is no solitary journey of philosophical contemplation, no! A lovely group of realistic AI ladies will keep your nights from growing lonely and your days filled with comfort and joy.\r\n\r\nAI Shoujo won\'t just blow your mind, it\'ll blow you...away!\r\nAll characters in the game are over the age of 18.', '', 'https://www.youtube.com/watch?v=aQPy-QgO8T8'),
(8, 'God of War\r\n', 20000, 2018, 'Sony Interactive Entertainment', 'Windows 7 / 8 / 8.1', 'AMD Athlon X2 2.8 GHZ or Intel Core 2 Duo 2.4 GHZ', '4GB or more', 'AMD Radeon 3870 or higher; NVIDIA GeForce 8800 GT or higher', '8GB', 'Windows 7 / 8 / 8.1', 'AMD Six-Core CPU; Intel Quad-Core CPU', '8GB', 'AMD Radeon 7870 or higher; NVIDIA GeForce GTX 660 or higher', '3GB', 'God of War is a third-individual activity enterprise computer game created by Santa Monica Studio and distributed by Sony Computer Entertainment (SCE). Initially discharged on March 22, 2005, for the PlayStation 2 (PS2) console, it is the first portion in the arrangement of the same name and the third sequentially. Approximately in light of Greek mythology, it is set in old Greece with retaliation as its focal theme. The player controls the hero Kratos, a Spartan warrior who serves the Olympian Gods. The goddess Athena errands Kratos with murdering Ares, the God of War, who deceived Kratos into executing his own wife and tyke. As Ares attacks Athens out of disdain for Athena, Kratos sets out on a mission to locate the one item equipped for halting the god: the fanciful Pandora’s Box.', 'God of War is an action-adventure game franchise created by David Jaffe at Sony\'s Santa Monica Studio', 'https://www.youtube.com/watch?v=K0u_kAWLJOA'),
(9, 'Super Mario Odyssey', 20000, 2017, 'Nintendo\r\n', '', 'AMD Vishera FX-6350 3.9GHz or higher / Intel Pentium Dual-Core G4400 3.30GHz or higher', '512 MB	', 'ASUS Radeon R7 250 / NVIDIA GeForce GTX 750 or higher', '4 GB or more', '', 'AMD Six-Core CPU / Intel Quad-Core CPU', '1 GB', 'ASUS Radeon R7 250 / NVIDIA GeForce GTX 750 or higher; Graphics Memory 2 GB', '8 GB', 'Super Mario Odyssey is an all-new 3D Mario adventure exclusively for the Nintendo Switch. In SMO, players travel to entirely new lands never before seen, including a version of New York City. Super Mario Odyssey is the first adventure-style Mario since Super Mario Sunshine in 2002.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde enim alias quasi aut cupiditate quas tempore! Eos iste doloribus quia, error illum architecto rerum a minima voluptas ratione sit asperio', 'https://www.youtube.com/watch?v=wGQHQc_3ycE'),
(10, 'Missing Children', 43000, 2020, 'Chilla\'s Art', 'Windows 7 SP1+ x64', 'Intel/Amd', '4 GB RAM', 'Nvidia/Amd', '3 GB available space', '0', '0', '0', '0', '0', 'Missing Children  is a Japanese horror-themed adventure game about a bully detective searching for reported missing children.\r\n', 'Missing Children  is a Japanese horror-themed adventure game about a bully detective searching for reported missing children.\r\n\r\nFrom the creators of', 'https://www.youtube.com/watch?v=V0EuYIlRWq0'),
(11, 'Neverending Nightmares', 165000, 2014, 'Infinitap Games', 'Windows XP, Vista, 7, 8', '1.7GHz Intel/AMD CPU', '1 GB RAM', 'OpenGL 2.0 compliant video card', '500 MB available space', '0', '0', '0', '0', '0', 'Neverending Nightmares is a psychological horror game\r\n', 'Neverending Nightmares is a psychological horror game inspired by the developer\'s actual battle with mental illness. In the game, you take on the role of Thomas who awakens from a terrible nightmare only to find that he is still dreaming. As he descends deeper through the layers of hellish dreamscapes, he must hide from horrifying apparitions and outrun his inner demons. He must discover which of the horrors he encounters are a manifestation of his own psychological state and figure out what reality will be when he finally wakes up.\r\n\r\nTerrifying nightmare worlds inspired by real life struggles with OCD and depression.\r\nBlack and white artwork creates a distinctive moody and dark atmosphere.\r\nBranching narrative features 3 completely different endings.\r\nA dynamic lighting system gives the ever present darkness a character of its own.\r\nIGF nominated composer Skyler McGlothlin delivers a haunting and oppressive dark ambient score.', 'https://www.youtube.com/watch?v=lLqHUSefBjw'),
(12, 'WORLD OF HORROR', 165000, 2020, 'Ysbryd Games', 'Windows 7', 'Intel Core i3', '1 GB RAM', 'Intel HD Graphics 4400', '500 MB available space', '0', '0', '0', '0', '0', 'The developers describe the content like this:\r\n\r\nIn WORLD OF HORROR, there are frequent scenes disturbing and horrific scenes of implied violence, gore and mutilation of human bodies. All such scenes are presented in a 2D pixel art style, but nonetheless may have a realistic triggering impact on players with potential sensitivities. Player discretion is advised.\r\n\r\nIn addition, the game includes casual usage of cigarettes.', 'In WORLD OF HORROR, there are frequent scenes disturbing and horrific scenes of implied violence, gore and mutilation of human bodies.', 'https://www.youtube.com/watch?v=wzTLPpAQpF8'),
(13, 'Persona 4 Golden\r\n', 380000, 2020, 'SEGA', 'Windows 8.1', 'Intel Core 2 Duo E8400 | AMD Phenom II X2 550', '2 GB RAM', 'Nvidia GeForce GTS 450 | AMD Radeon HD 5770', '14 GB available space', 'Windows 10', 'Intel Core i5-650 | AMD Phenom X4 940', '4 GB RAM', 'Nvidia GeForce GTX 460 | AMD Radeon HD 6870', '14 GB available space', 'Inaba—a quiet town in rural Japan sets the scene for budding adolescence in Persona 4 Golden.\r\n\r\nA coming of age story that sets the protagonist and his friends on a journey kickstarted by a chain of serial murders. Explore meeting kindred spirits, feelings of belonging, and even confronting the darker sides of one’s self.', 'Inaba—a quiet town in rural Japan sets the scene for budding adolescence in Persona 4 Golden.', 'https://www.youtube.com/watch?v=lnwXbSYcywg'),
(14, 'CODE VEIN', 800000, 2019, 'BANDAI NAMCO Entertainment', 'Windows 7 SP1 or Windows 10 (64-bit)', 'Intel Core i5-2300', '6 GB RAM', 'GeForce GTX 760 or Radeon HD 7850', '35 GB available space', 'Windows 7 SP1 or Windows 10 (64-bit)', 'Intel Core i5-7400 or AMD Ryzen 3 2200G', '8 GB RAM', 'GeForce GTX 960 or Radeon R9 380X', '35 GB available space', 'RISE TOGETHER\r\nTeam up with an AI partner or a friend in co-op multiplayer and venture out into a world of destruction in this story driven connected dungeon experience. Use your combined strength to coordinate your approach and defend each other from surprise attacks or tackle overpowered enemies.\r\n\r\nGREATER CHALLENGES BRING GREATER REWARDS\r\nAcquire new gear, level up your character, and become more powerful to rise up against the Lost. From new players to seasoned action game veterans, the challenges in CODE VEIN will keep you coming back for more.\r\n\r\nCUSTOMIZE YOUR REVENANT\r\nChoose from various weapons such as bayonets, axes, spears, and more. Enhance your character’s abilities with powerful Blood Code enhancements, each with access to various “Gifts” that can increase your strength, weaken enemies, and can allow you to utilize new weapon abilities or access overpowered attacks. Finish off your opponents with your Blood Veil, powerful blood draining tools, each with their own unique visual and attack style that opens up a myriad of new combat strategies.', 'Team up with an AI partner or a friend in co-op multiplayer and venture out into a world of destruction in this story driven connected dungeon experience.', 'https://www.youtube.com/watch?v=YNLjmfMwPSw'),
(15, 'Follia - Dear father', 188000, 2020, 'Real Game Machine', 'WINDOWS 7, 8, 8.1, 10 (64-BIT Required)', 'Intel®Core i5-4460, 2.70GHz or AMD FX-6300 or better', '8 GB RAM', 'NVIDIA GeForce GTX 760 or AMD Radeon R7 260x with 2 GB Video RAM', '15 GB available space', 'WINDOWS 7, 8, 8.1, 10 (64-BIT Required)', 'Intel®Core i7-3770 or AMD FX-9590 or better', '8 GB RAM', 'NVIDIA GeForce GTX 1060 or AMD Radeon RX 480 with 3GB VRAM', '15 GB available space', 'Marcus Pitt, a young man whose only claim to fame is that both his parents work at a university, is drawn into the horrors that have emerged on the campus of the very same institution. His journey to find his parents, or at least find out what has happened to them, will take him into his worst nightmares – the seat of learning has been transformed into a place of death and horror. As he makes his way through the madness, Marcus will have to fight to make it out alive and with his sanity intact. Starting with just a handful of items to help him navigate the dimly lit corridors, he has to summon all his strength to survive and continue the search for his parents. Even though it might already be too late, his hopes of finding them alive will not die – unlike everyone else on campus, who already seem to have met their own gory end.\r\n\r\nExplore and look for clues that will help you unravel the mystery of how a university has become a slaughterhouse. Keep your eyes open – your flashlight could die any minute and engulf you in darkness. Sneak along corridors, explore every room you come across, and backtrack to find more clues and access additional parts of the university’s campus. But remember – whatever has happened here, evil has now seeped into every part of this immense university.', 'Marcus Pitt, a young man whose only claim to fame is that both his parents work at a university, is drawn into the horrors that have emerged on the campus of the very same institution.', 'https://www.youtube.com/watch?v=EqiRf1TK9PQ'),
(16, 'Blair Witch', 250000, 2019, 'Bloober Team SA', 'Windows 7', 'Intel Core i3-3220 (3.30 GHz) / AMD A8-7600 (3.1 GHz)', '4 GB RAM', 'GeForce GTX 750 Ti / AMD Radeon R7 265', '16 GB available space', 'Windows 10', 'Intel Core i5-6500 (3.2 GHz) / AMD Ryzen 5 1600', '8 GB RAM', 'GeForce GTX 1070 / AMD Radeon RX 590', '16 GB available space', 'It’s 1996. A young boy disappears in the Black Hills Forest near Burkittsville, Maryland. As Ellis, a former police officer with a troubled past, you join the search. What starts as an ordinary investigation soon turns into an endless nightmare as you confront your fears and the Blair Witch, a mysterious force that haunts the woods…\r\n\r\nBlair Witch is a first-person, story-driven psychological horror game based on the cinematic lore of Blair Witch.\r\nA STORY OF THE HUMAN DESCENT INTO DARKNESS\r\nFrom the creative minds behind the critically acclaimed Layers of Fear, experience first-hand the toll that fear can take on the mind in an original story inspired by the cinematic lore of Blair Witch.', 'Blair Witch is a first-person, story-driven psychological horror game based on the cinematic lore of Blair Witch.', 'https://www.youtube.com/watch?v=girSv9UH_V8'),
(17, 'The Cat Lady', 120000, 2012, '\r\nScreen 7', 'Windows 7, 8, 10', 'Intel or AMD CPU', '512 MB RAM', 'DirectX compatible card', '2 GB available space', 'Windows 7, 8, 10', 'Dual-core Intel or AMD CPU', '1 GB RAM\r\n', 'NVIDIA or AMD ATI video card with 1GB of RAM (Nvidia GeForce GTX 260 or higher/ATI Radeon 4890 or higher)', '2 GB available space', 'The Cat Lady follows Susan Ashworth, a lonely 40-year old on the verge of suicide. She has no family, no friends and no hope for a better future. One day she discovers that five strangers will come along and change everything...\r\n\r\nBy author Remigiusz Michalski (Harvester Games) this suspenseful psychological horror game features stylized artwork, a simple keyboard control method and English voice acting, plus a compelling, atmospheric 70 minute soundtrack by micAmic (now included free with every copy in Library > Music) and featured artists Warmer, 5iah and Tears Of Mars.\r\n\r\nThe Cat Lady contains strong adult themes and is recommended only for players over 18.', 'The Cat Lady follows Susan Ashworth, a lonely 40-year old on the verge of suicide.', 'https://www.youtube.com/watch?v=Wx6j2I8v2Z0'),
(18, 'Lorelai', 165000, 2019, 'Screen 7', 'Windows 7, 8, 10 (64-bit OS)', 'Quad-core Intel or AMD CPU', '8 GB RAM', 'NVIDIA or AMD ATI video card with 2GB of VRAM (Nvidia GeForce GT 705 or higher/AMD Radeon HD 8450G or higher)', '11 GB available space', 'Windows 7, 8, 10 (64-bit OS)', 'Intel Core i7-4770 @ 3.4 GHz or AMD Ryzen 5 1600 @ 3.2 GHz or equivalent', '8 GB RAM', 'NVIDIA or AMD ATI video card with 4GB of VRAM (NVIDIA GeForce GTX 960/AMD Radeon HD 7870 2GB)', '11 GB available space', 'Lorelai will never forget that day. The little she had, it was taken away. Her whole world disintegrated. She never really had a chance, but Lorelai refused to give up. She will fight. And not even death will stop her from getting it all back.\r\n\"A coming-of-age story about a young girl trying to escape the horrors in her family home. But adulthood is like waking up from a long dream. There will be times you will wish you were asleep again... But you can never go back to the same dream.\" - R. Michalski\r\nLorelai, by Harvester Games, is the conclusive part of R. Michalski\'s Devil Came Through Here adventure game trilogy, alongside The Cat Lady (2012) and Downfall (2016).\r\n\r\nA brand new horror adventure with an immersive story and world in full HD. An engaging soundtrack by micAmic and guest artists, English voice acting and Xbox controller support.\r\n\r\nStarring Maisy Kay as Lorelai, Margaret Cowen, Peter Kingston, Yong Yea, Jonnie Hurn, Abigail Turner, Forbes KB and Jim Sterling you can be certain Lorelai will take you on a whirlwind journey through an engrossing psychological thriller recommended only for adults.\r\n\r\n\r\n\r\nSteam achievements included - work towards a bittersweet ending\r\nSteam Trading Cards included - a piece of Valve history right there\r\n40 minute soundtrack promo included - enjoy some micAmic action\r\nForthcoming updates - stay tuned for Mac & Linux versions, translations & more\r\nWhat\'s next for Harvester Games? Thank you for the love & support & enjoy the game!\r\n\r\nYou may also be interested in other games from this series:\r\n\r\n\r\n\r\n\r\n', 'Lorelai will never forget that day. The little she had, it was taken away.', 'https://www.youtube.com/watch?v=toKfspeJqrw'),
(19, 'Downfall', 120000, 2016, 'Screen 7', 'Windows XP, Vista, 7 (32-bit or 64-bit OS)', 'Quad-core Intel or AMD CPU\r\n', '4 GB RAM\r\n', 'NVIDIA or AMD ATI video card with 1GB of RAM (Nvidia GeForce GTX 260 or higher/ATI Radeon 4890 or higher)', '2 GB available space', 'Windows 7, 8, 10 (64-bit OS)\r\n', 'Intel Core i5-750, 2.67 GHz | AMD Phenom II X4 965, 3.4 GHz', '8 GB RAM', 'NVIDIA or AMD ATI video card with 2GB of RAM (NVIDIA GTX 550 Ti 2GB/AMD Radeon HD 7870 2GB)', '3 GB available space', 'There is nothing Joe wouldn\'t do for his wife. But as they try to save their marriage with a romantic getaway, things go from bad to worse, and from worse... to insanity.\r\n\r\nIn this tale of love, madness and murder - Joe will prove what kind of man he is. But what kind of man is he exactly? A loving husband? A cold realist? A bitter skeptic? That is something YOU will decide, as you join him on his journey for redemption...\r\n\r\nFrom the creator of The Cat Lady, a dark & atmospheric horror adventure with full English voice acting (starring Jesse Gunn, Isa And & David Firth) with an original soundtrack by micAmic and many featured artists.\r\n', 'There is nothing Joe wouldn\'t do for his wife. But as they try to save their marriage with a romantic getaway, things go from bad to worse, and from worse... to insanity...', 'https://www.youtube.com/watch?v=PkFfFS4bzB4'),
(20, 'Detention', 140000, 2017, 'RedCandleGames, AGM PLAYISM', 'Windows 7/8/10', 'Intel(R) Core(TM)2 Duo 2.4, AMD Athlon(TM) X2 2.8 Ghz', '4 GB RAM', 'Geforce 9600 GS, Radeon HD4000\r\n', '3 GB available space', 'Windows 7/8/10', 'Intel(R) Core(TM)2 Quad 2.7 Ghz, AMD Phenom(TM)II X4 3 Ghz', '8 GB RAM', 'GeForce GTX 260, Radeon HD 5770', '3 GB available space', 'Greenwood high school, located in a remote mountainous area, two students found themselves trapped and vulnerable. The place they once knew has changed in unsettling ways, haunted by evil creatures. To escape, they must explore the mysterious campus filled with ominous objects and puzzles. How will they survive in this ever threatening environment? Could they return to safety in one piece?\r\n\r\nSet in a fictitious world in the 1960s Taiwan under martial law, Detention, the story-driven atmospheric horror incorporated East Asian elements rarely used in games. Taoism, Buddhism, Chinese mythology, the game draws on local Taiwanese cultural references to tell an unique and terrifying story.\r\n\r\nIn this 2D atmospheric horror side-scroller, players navigate the main characters in a classic point and click fashion to explore a high school where evil encroaches. While hiding from the rampaging monsters, you are to find items to interact with in the otherworldly rooms. And as more mysteries unveiled, the dark past of a cursed school will finally surface.\r\n\r\n\r\n2D atmospheric horror with spine-chilling atmosphere.\r\nImmersive gameplay and puzzle solving experience\r\nUnique Taiwanese/Eastern cultural references.\r\nOriginal sound tracks, fusing Electronic, Lo-Fi, and Rock with traditional Asian instruments.\r\nUnique and appealing graphics.\r\nMultiple language support. (Including English, Chinese and Japanese)\r\nMac, Windows and Linux support', 'Detention is an atmospheric horror game set in 1960s Taiwan under martial law. Incorporated religious elements based in Taiwanese/Chinese culture and mythology, the game provided players with unique graphics and gaming experience.', 'https://www.youtube.com/watch?v=8mJQ_LH2n0k'),
(21, 'Paranormal HK', 188000, 2020, 'Ghostpie Studio, Gamera Game\r\n', 'Windows 7 or Windows 10', 'Intel i5-4460 or AMD FX-6300', '8 GB RAM', 'NVIDIA® GeForce® GTX 760 or AMD Radeon™ R7 260x with 2GB Video RAM', '15 GB available space', 'Windows 7 or Windows 10', 'Intel i7-3770 or AMD equivalent', '8 GB RAM', 'NVIDIA GeForce GTX1060 or AMD equivalent', '15 GB available space\r\n', 'During the night of Hungry Ghost Festival, a group of young people gathered in Kowloon Walled City. They intended to film a short video for their online supernatural channel ”Beyond the Invisible”.\r\nAlthough a few accidents happened at the beginning ,they insisted to film the show.\r\nThe members of the crew disappeared one after another. Also,the actress Kathy’s behavior became very weird. The strange atmosphere enveloped the entire program group, and Ah Lok was also caught in it. In the face of all sorts of strange phenomena that have exceeded everyone’s perception, Ah Lok can\'t help wondering if someone has inadvertently touched some taboos. Although the doubts are overwhelming, , but Lok has no interest in it. All he wants is to find Kathy as soon as possible and take her away from here...', 'Paranormal HK is a first person horror game about Urban legends of Hong Kong, China. The story is about a crew of online supernatural channel“Beyond the Invisible” went to Kowloon Walled City to film a short movie for their latest episode and encountered something out of their expectations.', 'https://www.youtube.com/watch?v=lUGpivp94IQ'),
(22, 'Devotion', 1200000, 2019, 'Red Candle Games', 'Windows 8/10 64-bit', 'Intel Core i3 (3.4 GHz) / AMD A8-7600 (3.1 GHz)', '4 GB\r\n', 'NVIDIA GeForce 660 / AMD R9 270', '8 GB\r\n', 'Windows 8/10 64-bit\r\n', 'Intel Core i5', '8 GB', 'NVIDIA GeForce GTX 960', '8 GB', 'Vâng xin chào tất cả anh em đã quay trở lại với Khí Phách! Đầu tuần thế nào nhỉ? Để khởi động có lẽ Ad sẽ giới thiệu đến anh em một tựa game offline thuộc thể loại kinh dị. Phải nói rằng cốt truyện cực hay anh em ah.\r\n\r\nNhân vật chính của chúng ta ngày hôm nay đó chính là Devotion. Nếu bạn là một Fan của dòng game này thì đây có lẽ là trò chơi không thể bỏ qua. Đặc biệt là những anh em ở châu Á như chúng ta. Bối cảnh game ở Đài Loan khá quen thuộc :v.\r\nVì sao lại nói là những anh em ở châu á như chúng ta không nên bỏ qua?? Khi trải nghiệm tựa game này, những bùa chú, thầy cúng, nghi lễ các thứ làm cho ad khá là rùng mình vì có mùi quen quen :v. Rất khác với dòng game kinh dị lấy bối cảnh phương tây. Anh em trải nghiệm rồi cho mình biết cảm nhận nha.\r\n\r\nGame Devotion Việt Hóa hoàn toàn nên cốt truyện của trò chơi anh em sẽ dễ dàng nắm bắt hơn. Bạn sẽ dần dần khám phá ra được câu chuyện đằng sau những tấm màn che phủ. Có lẽ phải ngồi ngẫm nghĩ lại một chút sau khi đỡ sợ hãi thì anh em mới thấm được ý nghĩa đằng sau bi kịch này.\r\n\r\nKhông nói nhiều nữa. Còn lại để anh em tự khám phá, nhớ tham khảo phần cấu hình yêu cầu cấu hình bên dưới. Ah trong game có bài nhạc rất hay và nhẹ nhàng đấy, ad thích.', 'Nhân vật chính của chúng ta ngày hôm nay đó chính là Devotion. Nếu bạn là một Fan của dòng game này thì đây có lẽ là trò chơi không thể bỏ qua. Đặc biệt là những anh em ở châu Á như chúng ta. Bối cảnh game ở Đài Loan khá quen thuộc :v.\r\n\r\n', 'https://www.youtube.com/watch?v=PeOqyxE7J_Y'),
(23, 'DreadOut 2\r\n', 188000, 2020, 'Digital Happiness\r\n', 'Windows 8.1', 'Intel i5 3570K / AMD FX-8350', '8 GB RAM\r\n', 'GTX 770 with 2GB VRAM / Radeon R9 280X 3GB\r\n', '16 GB available space', 'Windows 10', 'Intel i7', '16 GB RAM\r\n', 'GTX 1050 / Radeon Rx 570\r\n', '16 GB available space', 'A unique take on third-person action-adventure survival horror with Indonesian supernatural in veins. Mixed gameplay of city exploring, “DreadOut” style smartphone ghost hunting and new action-packed combat within DreadOut supernatural realm. Even though it is a Horror game in veins, but with the touch of silly high school problems, satiric social commentaries, and yet touchy memorable moments, DreadOut 2 will become a fresh take on the survival horror genre.', 'A seal was broken, the great serpent Blorong has awakened. Witness Linda\'s journey looking for answers, redemption, and acceptance toward her role in stopping mankind\'s greatest threats. Dive deeper into a third-person horror adventure within DreadOut realm. Survive the Dread once more.\r\n', 'https://www.youtube.com/watch?v=MSqnAkcDcoo'),
(24, 'Home Sweet Home', 178000, 2017, 'YGGDRAZIL GROUP CO.,LTD\r\n', 'Windows 7 / 8 / 8.1 / 10\r\n', 'Intel Core i3\r\n', '4 GB RAM', 'NVIDIA® GeForce® GTX 560 or better', '11 GB available space\r\n', 'Windows 7 / 8 / 8.1 / 10\r\n', 'Intel Core i5', '8 GB RAM', 'NVIDIA® GeForce® GTX 770 or better', '11 GB available space', '\"Home Sweet Home will be released digitally on the Xbox One, PlayStation®4, and PlayStation®VR for PS4™ on October 16. A physical edition of Home Sweet Home, which includes the base game and PS®VR mode, will be released exclusively to GameStop stores across North America on October 16.\"\r\n\r\nDo not miss out on the most terrifying game you\'ll play this Halloween season; pre-order Home Sweet Home from GameStop today: bit.ly/HSHGameStop.\r\nFor digital download, please visit http://bit.ly/HSH_PS4 (PSN) and http://bit.ly/HSH_XBO (Xbox Store). Apart from that, North America users can visit bit.ly/HSHEBGames for Electronic Boutique Canada.\r\n\r\n\r\nSynopsis\r\nTim’s life has drastically changed since his wife disappeared mysteriously. In one night, after suffering from the sorrow for a long time, he woke up in an unknown place instead of his house. While trying to escape from this place, he was hunted by a rancorous female spirit. Can he survive? Is this place actually his house? Does it relate to the disappearance of his wife? Some dark sinister secret is hidden inside this house, and it won’t be a place of happiness as it used to be any longer.', 'Home Sweet Home is a first-person horror adventure game based on Thai myths and beliefs. The core gameplay focuses on storytelling and stealth to avoid perilous spirits hunting you. Moreover, few puzzles are added into the game, making gameplay more various.', 'https://www.youtube.com/watch?v=NuHZUkD8c2Q'),
(25, 'Home Sweet Home EP2', 190000, 2019, 'Ningbo Inception Media Co., Ltd.\r\n', 'Windows 7 / 8 / 8.1 / 10', 'Intel® Core™ i5-4460', '8 GB RAM', 'NVIDIA® GeForce® GTX 760', '26 GB available space', 'Windows 7 / 8 / 8.1 / 10', 'Intel® Core™ i7-3770', '16 GB RAM', 'NVIDIA® GeForce® GTX 1050', '26 GB available space', 'Synopsis\r\nSince his wife’s disappearance, Tim has searched tirelessly for her but remains no closer to the truth. Awakening in a mysterious forest, Tim feels beckoned to explore his mysterious new surroundings only to be set upon by villagers seemingly possessed by some sort of evil spirit as well as a mysterious and seemingly invisible Thai Dancer. Doggedly pursued through the forest and beyond, Tim must race against time to not only survive the evil all around him, but piece together the clues in an attempt to find his missing wife.\r\n\r\nKey Features\r\n•Thai Inspired Horror - Explore a sinister world with environments based onThai culture and a storyline inspired by Thai myths and folklore.\r\n•First Time Ever Combat - Tim can finally bring the fight back to the evil spirits pursuing him with an arsenal of weapons at his disposal\r\n•Multiple Enemy Encounters - evade or fight off multiple enemies simultaneously, making every encounter a unique blend of stealth and combat\r\n•Mind Bending Puzzles - utilize investigation skills to solve intuitive puzzles and unlock more pieces behind the puzzle of Tim’s missing wife', 'Terror and mystery meet in Home Sweet Home Sweet Home Episode 2, the sequel to last year’s cult-hit first-person horror game, Home Sweet Home. Immerse yourself in a world where evil hides behind every corner, in a world inspired by Thai folklore and mythology.\r\n', 'https://www.youtube.com/watch?v=iMg5IzWOLbo'),
(26, 'Paper Dolls: Original', 178000, 2019, 'Gamera Game\r\n', 'Windows 7 or Windows 10', 'Intel i5-4460 or AMD FX-6300', '4 GB RAM', 'NVIDIA GeForce GTX750Ti or AMD RadeonR7 260x', '3 GB available space', 'Windows 7 or Windows 10', 'Intel i7-3770 or AMD equivalent', '8 GB RAM', 'NVIDIA GeForce GTX1060 or AMD equivalent', '3 GB available space', 'A man wakes up from the nightmare. Again. Every time he closes his eyes he sees images of evil paper dolls attacking him. Sleepless, confused, terrified...and now he\'s haunted by imaginary sounds. At dawn, he will take his daughter to his ex-wife. He must.\r\nDriving on this road always makes him sad.\r\n\r\n“If it wasn\'t for my depression, our relationship wouldn\'t end like this.\"\r\n\"What’s the meaning of my life?\"', 'Paper Dolls Original is a first-person horror adventure game steeped in Eastern culture. You act a man who is separated from his daughter after a car accident. When he awakes, he finds himself in a deserted Asian mansion.', 'https://www.youtube.com/watch?v=vaZYx3B8zCg'),
(27, 'The Convenience Store', 43000, 2020, 'Chilla\'s Art', 'Windows 7 SP1+', 'Intel/Amd', '4 GB RAM', 'Nvidia/Amd', '2 GB available space', '0', '0', '0', '0', '0', 'The Convenience Store  is a J-horror game about a college girl on a night shift.\r\nFrom the creators of\r\nThe Convenience Store | 夜勤事件 is a J-horror game about a college girl on a night shift.\r\nFrom the creators of', 'The Convenience Store | 夜勤事件 is a J-horror game about a college girl on a night shift.', 'https://www.youtube.com/watch?v=tNgG2bcRVVE'),
(28, 'Dying Light', 372000, 2015, 'Techland Publishing', 'Windows® 7 64-bit / Windows® 8 64-bit / Windows® 8.1 64-bit', 'Intel® Core™ i5-2500 @3.3 GHz / AMD FX-8320 @3.5 GHz', '4 GB RAM DDR3', 'NVIDIA® GeForce® GTX 560 / AMD Radeon™ HD 6870 (1GB VRAM)', '40 GB free space', 'Windows® 7 64-bit / Windows® 8 64-bit / Windows® 8.1 64-bit', 'Intel® Core™ i5-4670K @3.4 GHz / AMD FX-8350 @4.0 GHz', '8 GB RAM DDR3', 'NVIDIA® GeForce® GTX 780 / AMD Radeon™ R9 290 (2GB VRAM)', '40 GB free space', 'From the creators of hit titles Dead Island and Call of Juarez. Winner of over 50 industry awards and nominations. The game whose uncompromising approach to gameplay set new standards for first-person zombie games. Still supported with new content and free community events years after the release.\r\nSurvive in a city beset by a zombie virus! Discover the hard choice you will have to make on your secret mission. Will loyalty to your superiors prove stronger than the will to save the survivors? The choice is yours…\r\nVAST OPEN WORLD\r\nRoam the city with unprecedented freedom and bask in its unique atmosphere. Use parkour to scale every building and reach remote areas.\r\nCREATIVE COMBAT\r\nEngage in gory combat and discover limitless options to confront your enemies. Use the environment paired with various weapon types and abilities to gain an advantage.\r\nDAY AND NIGHT CYCLE\r\nExperience the dramatic shift in the world, as you change from a hunter to hunted at sundown. Face the coming threat or run away without wasting your time to look behind.\r\n4-PLAYER CO-OP\r\nJoin forces with other players and raise your chances of survival in an exciting co-op mode. Tackle the story campaign together and take part in regularly scheduled community challenges.', 'First-person action survival game set in a post-apocalyptic open world overrun by flesh-hungry zombies. Roam a city devastated by a mysterious virus epidemic. Scavenge for supplies, craft weapons, and face hordes of the infected.', 'https://www.youtube.com/watch?v=9IM3YE0BZuo'),
(29, 'Dead by Daylight', 188000, 2016, 'Behaviour Interactive Inc.\r\n', '64-bit Operating Systems (Windows 7, Windows 8.1)', 'Intel Core i3-4170 or AMD FX-8120', '8 GB RAM', 'DX11 Compatible GeForce GTX 460 1GB or AMD HD 6850 1GB', '25 GB available space', '64-bit Operating Systems (Windows 7, Windows 8.1 or above)', 'Intel Core i3-4170 or AMD FX-8300 or higher', '8 GB RAM', 'DX11 Compatible GeForce 760 or AMD HD 8800 or higher with 4GB of RAM', '25 GB available space', 'Dead by Daylight is a multiplayer (4vs1) horror game where one player takes on the role of the savage Killer, and the other four players play as Survivors, trying to escape the Killer and avoid being caught, tortured and killed.\r\n\r\nSurvivors play in third-person and have the advantage of better situational awareness. The Killer plays in first-person and is more focused on their prey.\r\n\r\nThe Survivors\' goal in each encounter is to escape the Killing Ground without getting caught by the Killer - something that sounds easier than it is, especially when the environment changes every time you play.\r\n\r\n• Survive Together… Or Not - Survivors can either cooperate with the others or be selfish. Your chance of survival will vary depending on whether you work together as a team or if you go at it alone. Will you be able to outwit the Killer and escape their Killing Ground?\r\n\r\n• Where Am I? - Each level is procedurally generated, so you’ll never know what to expect. Random spawn points mean you will never feel safe as the world and its danger change every time you play.\r\n\r\n• A Feast for Killers - Dead by Daylight draws from all corners of the horror world. As a Killer you can play as anything from a powerful Slasher to terrifying paranormal entities. Familiarize yourself with your Killing Grounds and master each Killer’s unique power to be able to hunt, catch and sacrifice your victims.\r\n', 'Dead by Daylight is a multiplayer (4vs1) horror game where one player takes on the role of the savage Killer, and the other four players play as Survivors, trying to escape the Killer and avoid being caught and killed.\r\n', 'https://www.youtube.com/watch?v=JGhIXLO3ul8'),
(30, 'Agony', 165000, 2018, 'Madmind Studio', 'Windows 7 / 8 / 10', 'Intel Core i3 3.2 GHz, AMD Phenom II X4 955 - 4 Core, 3.2 GHz', '8 GB RAM', 'Radeon R9 280 or Nvidia GeForce GTX 660', '17 GB available space', 'Windows 7 / 8 /10', 'Intel Core i5-8400, AMD Ryzen 5 1600', '16 GB RAM', 'Radeon RX 580 or Nvidia GeForce GTX 1060 6GB', '17 GB available space', 'You will begin your journey as a tormented soul within the depths of hell, without any memories about your past.\r\n\r\nThe special ability to control people on your path, and even possess simple minded demons, gives you the necessary measures to survive in the extreme conditions you are in.\r\n\r\nBy exploring the hostile environment and interacting with other weary souls of the hellscape, the hero will soon understand that there is only one way to escape from Hell, and it will require meeting the mystical Red Goddess.\r\nAgony features a full-fledged story mode as well as an open challenge system that\r\nrandomly generates levels for players to explore and survive to gain new Highscores. In\r\naddition to featuring in countless “Most anticipated Horror Games 2018” lists, the kick\r\nstarter financed title is set to challenge players with its brutal and malevolent\r\nenvironments.\r\nAgony features a full-fledged story mode as well as an open challenge system that\r\nrandomly generates levels for players to explore and survive to gain new Highscores. In\r\naddition to featuring in countless “Most anticipated Horror Games 2018” lists, the kick\r\nstarter financed title is set to challenge players with its brutal and malevolent\r\nenvironments.', 'Agony is a first-person, survival horror set in hell. You will begin your journey as a tormented soul within the depths of hell without any memories about your past. The special ability to control people on your path, and possess demons, gives you the measures to survive.', 'https://www.youtube.com/watch?v=iwinHf6H-Mo');

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
(6, 'e3-2016-god-of-war-chien-than-trong-su-cach-tan-day-moi-me-gioi-thieu-game.jpg', 8, 1),
(7, 'wp2367709.png', 2, 1),
(8, '486147.jpg', 9, 1);

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
  MODIFY `idgame` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `hinh`
--
ALTER TABLE `hinh`
  MODIFY `idhinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
