-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 21, 2024 at 03:23 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duhoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `image`, `author`, `created_at`, `updated_at`) VALUES
(3, 'DU HỌC MỸ - CƠ HỘI HIẾM CÓ - MIỄN PHÍ XÉT VISA', 'Theo quy định của Sứ quán Mỹ, lệ phí xét visa du học Mỹ là $185 USD - một khoản chi phí đáng kể đối với nhiều gia đình học sinh tại Việt Nam. Thấu hiểu được điều đó, Du Học QT triển khai chương trình \"MIỄN PHÍ XÉT VISA DU HỌC MỸ\" giúp phụ huynh và học sinh tiết kiệm khoản chi phí đáng kể để hiện thực hóa giấc mơ du học.\r\n\r\nKhi Quý Khách hàng ký hợp đồng du học Mỹ tại Công Ty Du Học QT, các bạn sẽ được:\r\n\r\nMiễn phí 100% lệ phí xét visa du học Mỹ (trị giá $185 USD).\r\nCung cấp thông tin chính xác về trường học, ngành học, học phí, …: MIỄN PHÍ.\r\nTư vấn xây dựng hoàn thiện kế hoạch học tập, tài chính, trả lời phỏng vấn: MIỄN PHÍ.\r\nĐẶC BIỆT: Học sinh sẽ được luyện kỹ năng phỏng vấn 1:1 cùng bộ câu hỏi phỏng vấn được cá thể hóa phù hợp nhất với từng học sinh để thuyết phục Sứ quán cấp Visa.\r\n\r\nVới 25 năm kinh nghiệm trong lĩnh vực tư vấn du học, thông tin du học được bảo trợ bởi Bộ GD&ĐT - tự hào với 99% khách hàng đã sử dụng dịch vụ hài lòng và giới thiệu cho người khác, các bạn hoàn toàn yên tâm khi liên hệ với chúng tôi.\r\n\r\nMọi thắc mắc vui lòng gọi số điện thoại 1800 64 68 33 để được hỗ trợ và tư vấn nhé!', 'assets/images/du-hoc-my.jpg', 'minh', '2024-11-12 13:22:56', '2024-11-12 13:36:09'),
(4, 'DU HỌC QT TẠI WORKSHOP CỦA TẬP ĐOÀN NAVITAS', 'DU HỌC QT vinh dự được tham gia workshop của tập đoàn Navitas tổ chức về trường International College of Manitoba & University of Manitoba. Bên cạnh những thông tin hữu ít từ phía đại diện trường Canada, thì buổi Workshop này thực sự ý nghĩa với những khoảnh khắc thú vị của hoạt động teamwork để tạo ra mô hình xe chạy bằng năng lượng mặt trời.\r\n\r\nDU HỌC QT gửi lời tri ân sâu sắc nhất dành cho trường International College of Manitoba & University of Manitoba và tập đoàn Navitas đã tổ chức buổi Workshop này. Tin rằng mối quan hệ giữa hai bên sẽ phát triển bền vững để giúp cho các bạn học sinh, sinh viên tìm được ngôi trường phù hợp, giúp các bạn thực hiện ước mơ du học tại “Xứ sở lá phong”.\r\n\r\nĐịnh hướng du học Canada nhưng chưa biết chọn trường gì, ngành nào, bang nào, … Quý phụ huynh và học sinh hãy nhanh chóng liên hệ Du Học Á - Âu theo thông tin dưới đây để gặp trực tiếp chuyên viên tư vấn, hỗ trợ thông tin kịp thời và chính xác nhất nhé!', 'assets/images/Navitas.jpg', 'minh', '2024-11-12 13:42:35', '2024-11-12 13:42:35'),
(5, 'HỘI THẢO DU HỌC THỤY SỸ NGÀNH DU LỊCH, NHÀ HÀNG, KHÁCH SẠN', 'Du Học Thụy Sỹ Ngành Du Lịch, Nhà Hàng, Khách Sạn: \r\n\r\nCHẤT LƯỢNG GIÁO DỤC VÀ SỰ CÔNG NHẬN BẰNG CẤP TẠI VIỆT NAM\r\n\r\nBạn đang suy nghĩ về việc du học Thụy Sỹ trong lĩnh vực du lịch, nhà hàng và khách sạn? Hãy tham gia hội thảo đặc biệt trong tháng 5 để hiểu rõ hơn về cơ hội mà một tấm bằng từ Thụy Sỹ sẽ mang lại cho sự nghiệp của bạn!\r\n\r\nThời gian: 10:00, Thứ Bảy, ngày 18/05/2024\r\nĐịa điểm: 52 Trần Huy Liệu, Phường 11, Quận Phú Nhuận, TP.HCM\r\nTrong hội thảo này, Du Học Á - Âu phối hợp cùng Học viện IMI, Thụy Sỹ sẽ giúp bạn:\r\n\r\nHiểu sâu sắc về việc lựa chọn giữa trường công lập và tư thục tại Thụy Sỹ.\r\nLàm rõ quy định công nhận bằng cấp từ các tổ chức giáo dục của chính phủ Thụy Sỹ.\r\nBằng cấp của Thuỵ Sỹ có được công nhận tại Việt Nam không? Nhận bằng Thụy Sỹ sẽ mang đến cơ hội gì cho sự nghiệp tương lai?\r\nChia sẻ định hướng chiến lược của IMI, Thụy Sỹ và tác động của nó đến du học sinh.\r\nThông tin diễn giả: Anh La Tất Thành: Đại diện tuyển sinh Học viện IMI, Thuỵ Sỹ tại Việt Nam.\r\nHọc viện IMI Thụy Sỹ được biết đến với chất lượng giáo dục đẳng cấp thế giới, đặc biệt trong lĩnh vực du lịch, nhà hàng và khách sạn. Chọn IMI không chỉ là đầu tư vào một tấm bằng uy tín, mà còn là cơ hội để phát triển năng lực chuyên môn, mở rộng mạng lưới quốc tế, đặt nền móng vững chắc cho một sự nghiệp thành công trong ngành công nghiệp dịch vụ sôi động và đầy thách thức.\r\n\r\nHãy đăng ký tham gia hội thảo để không bỏ lỡ cơ hội tìm hiểu kỹ lưỡng về du học Thụy Sỹ nhanh chóng, chính xác nhất. \r\n\r\nĐăng ký tại đây: TẠI ĐÂY \r\n\r\nNếu bạn có bất kỳ thắc mắc nào, đừng ngần ngại gọi ngay cho Á - Âu qua hotline: 1800 64 68 33 để được tư vấn chi tiết.', 'assets/images/AAU HOI THAO IMI THUY SY 18-5-2024 thumbnail_1714986758.jpg', 'minh', '2024-11-12 13:43:42', '2024-11-12 13:43:42'),
(6, 'DU HỌC NGHỀ ÚC: TỐI ƯU CHI PHÍ - RÚT NGẮN THỜI GIAN - RỘNG MỞ VIỆC LÀM, ĐỊNH CƯ', 'Trân trọng kính mời quý phụ huynh, học sinh tham gia buổi trò chuyện về Du học nghề Úc: Tối ưu chi phí - rút ngắn thời gian - rộng mở việc làm, định cư.\r\n\r\nBạn đang tìm kiếm lộ trình học tập chất lượng, học phí rẻ, thời gian ngắn\r\nBạn muốn làm việc ở Úc, cơ hội trở thành công dân “xứ sở chuột túi”\r\nDu học nghề Úc là lựa chọn phù hợp nhất dành cho bạn:\r\n\r\nThời gian học, chi phí chỉ bằng ½ so với bậc cử nhân\r\nỞ lại việc sau khi tốt nghiệp\r\nTrải nghiệm hệ thống giáo dục hàng đầu thế giới', 'assets/images/DU-HOC-NGHE-UC-2705-thumbnailWeb-e_1683709294.jpg', 'minh', '2024-11-12 13:44:22', '2024-11-12 13:44:22'),
(7, '30 PHÚT “NẰM LÒNG” THÔNG TIN ĐẠI HỌC TOP 2% ĐẠI HỌC THẾ GIỚI!!! - ĐH CÔNG LẬP JAMES COOK, PHÂN VIỆN SINGAPORE !!!', 'Bạn muốn du học Singapore nhưng:\r\nKhông biết chọn trường nào chất lượng, ranking cao, chương trình học tốt?\r\nKhông biết học ngành nào phù hợp với ước muốn cá nhân và theo xu hướng thị trường?\r\nKhông biết chi phí du học bao nhiêu là đủ?\r\nKhông biết cách chuẩn bị hồ sơ?\r\nVậy bạn đừng bỏ qua sự kiện du học cực hot tháng 8 của Du Học Á - Âu:\r\nCơ hội tìm hiểu chi tiết về du học Singapore.\r\nKhám phá ngôi trường top 2% đại học thế giới: Đại học công lập James Cook phân viện Singapore.\r\nTiếp cận ngành học xếp hạng cao, ngành đón đầu xu hướng, tăng cơ hội việc làm sau tốt nghiệp.\r\nCơ hội nhận học bổng lên đến 100%, tiết kiệm chi phí du học.', 'assets/images/30-PHUT-JCU-SINGAPORE-25-08-2023-thumbnail-Web_1691201514.jpg', 'minh', '2024-11-12 13:45:06', '2024-11-12 13:45:06'),
(8, 'HƯỚNG DẪN LÀM HỒ SƠ DU HỌC CÙNG CHUYÊN GIA', 'Khách hàng đang có ý định du học, đã chuẩn bị hoặc chưa chuẩn bị hồ sơ, đã nộp hồ sơ nhưng bị rớt visa, … Dù bạn thuộc trường hợp nào, mọi vấn đề đều sẽ được chuyên gia của chúng tôi phân tích, giải đáp và giải quyết khúc mắc chính xác, hiệu quả.\r\n\r\nNgay tại buổi trò chuyện, bạn sẽ nhận được kết quả hồ sơ của mình đậu hay rớt, lý do tại sao, làm cách nào để khắc phục, hướng dẫn xử lý đúng và đầy đủ nhất.\r\n\r\nThông tin chi tiết:\r\n\r\nMỖI TUẦN/ 1 BUỔI DUY NHẤT CHỈ NHẬN TIẾP 5 HỒ SƠ (ưu tiên đăng ký trước theo số thứ tự) \r\n\r\nThời gian sáng thứ Bảy: Từ 8h00 - 11h30 \r\n\r\nĐịa điểm: 52 Trần Huy Liệu, P.11, Q.Phú Nhuận, HCM\r\n\r\nTới với buổi hướng dẫn, Quý phụ huynh vui lòng đưa học sinh đi cùng (nếu được) để việc hướng dẫn và xem xét hồ sơ đạt kết quả tốt nhất. Bạn được miễn phí: Phí tư vấn, hướng dẫn, cung cấp tài liệu, thông tin.', 'assets/images/huong-dan-lam-ho-so-du-hoc-cung-chuyen-gia_1724059855.jpg', 'minh', '2024-11-12 13:46:02', '2024-11-12 13:46:23'),
(9, 'Nên học trung học hay dự bị khi du học Úc từ lớp 12?', 'Nếu các bạn trẻ có ý định du học Úc từ lớp 12, hẳn các bạn dễ cảm thấy hoang mang trước hai lựa chọn: học tiếp trung học hay dự bị đại học. Bài viết này sẽ cho các bạn thấy được ưu – khuyết điểm của hai lộ trình để phụ huynh cùng học sinh chọn lựa kế hoạch phù hợp.\r\nDu học Úc từ lớp 12 theo lộ trình trung học\r\nƯu điểm\r\nMột ưu điểm lớn nhất và dễ thấy chính là hệ thống giáo dục phổ thông tại Úc khá tương đồng với Việt Nam. Lớp 12 cũng chính là lớp học cuối cùng của chương trình phổ thông và là môi trường để các bạn học sinh rèn luyện kỹ năng sẵn sàng cho bậc đại học.\r\nKhi du học Úc từ lớp 12 ở bậc trung học, các bạn trẻ sẽ được tiếp tục chương trình giáo dục phổ thông mà bản thân vốn đã quen thuộc ở Việt Nam. Dù phương pháp đào tạo và tư duy giáo dục có khác biệt, song việc học tập trong môi trường có nhiều bè bạn đồng trang lứa và được thầy cô hỗ trợ sẽ giúp các bạn nhanh chóng làm quen.\r\n\r\nMột điểm cộng khác chính là, học trung học tại Úc cho phép các bạn có thêm nhiều trải nghiệm, tích lũy thêm các kỹ năng sống cần thiết. Như vậy, các bạn sẽ dễ dàng hòa nhập trong môi trường học tập đại học tại Úc.\r\n\r\nTại Úc, năng lực học tập bậc phổ thông được đánh giá bằng ATAR. Đây là thước đo thứ hạng giữa các học sinh cùng dự thi tốt nghiệp trung học phổ thông tại Australia. ATAR cao nhất mà một người có thể đạt được là 99,95 và càng cao thì bạn càng có cơ hội được nhận vào các trường đại học lớn.\r\n\r\nGần đây, bạn Nguyễn Lý Tâm Như (Ly Tam Nhu (Ruby) Nguyen), một du học sinh Việt đã đạt 99,85 trên 99,95 điểm ATAR. Qua đó, chứng minh các bạn trẻ Việt Nam hoàn toàn có thể thích nghi với chương trình phổ thông tại Úc, mở ra nhiều cơ hội ứng tuyển vào những trường đại học danh giá. (Theo VnExpress)', 'assets/images/kfo-du-hoc-uc-tu-lop-12-1.jpg', 'minh', '2024-11-14 11:11:52', '2024-11-14 11:11:52'),
(10, 'Lãnh thổ Bắc Úc: Điểm đến du học đặc biệt và đầy hứa hẹn tại Australia', 'Lãnh thổ Bắc Úc là điểm đến gần với châu Á nhất tại Australia, có khí hậu ôn hòa, dân số trẻ và đang phát triển nhanh chóng về mọi mặt. Khu vực này ngày càng thu hút nhiều du học sinh. Ngày 15/10/2022, Đại diện Lãnh thổ Bắc Úc và các cơ sở đào tạo đã tổ chức thành công hội thảo trực tuyến, chia sẻ nhiều thông tin hữu ích về du học cho phụ huynh và học sinh Việt Nam.\r\nNhững điều bạn chưa biết về Lãnh thổ Bắc Úc\r\nHội thảo Sống, học tập và làm việc tại Lãnh thổ Bắc Úc chào đón sự tham dự của cô Larnie Batten, cô Sophie Clements và cô Lauren Jenner là các đại diện của StudyNT – Cơ quan giáo dục của Bộ Công nghiệp, Du lịch và Thương mại Chính phủ Bắc Úc.\r\n\r\nCùng tham gia với đại diện khu vực là chị Rosie Nguyễn, du học sinh bậc Thạc sĩ ngành Công nghệ thông tin và Khoa học dữ liệu tại Đại học Charles Darwin (CDU). Chị Rosie cũng là một trong những đại sứ sinh viên tại Lãnh thổ Bắc Úc.\r\n\r\nVà để các bạn học sinh, sinh viên cũng như các vị phụ huynh có cái nhìn rõ hơn về môi trường học tập, cơ hội làm việc tại Bắc Úc thì chị Rosie đã mời đến hội thảo ông Steven Roberts, Giám đốc điều hành (CEO) One IT Services, nơi chị đang làm việc.', 'assets/images/SWA-truong-haileybury-rendal-school-lanh-tho-bac-uc.jpg', 'minh', '2024-11-14 11:16:34', '2024-11-14 11:16:34');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `blog_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `reply_content` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_id`, `name`, `email`, `comment`, `created_at`, `updated_at`, `reply_content`) VALUES
(1, 9, 'Minh Nguyen', 'nguyenhoangtuminh14@gmail.com', 'hay', '2024-11-20 07:00:05', '2024-11-20 08:11:55', 'Chưa chắc hay đâu'),
(3, 9, 'minh2', 'minh2@gmail.com', 'bài viết hay', '2024-11-20 08:20:02', '2024-11-20 08:20:02', NULL),
(4, 8, 'Minh Nguyen', 'nguyenhoangtuminh14@gmail.com', 'Mình cần hướng dẫn', '2024-11-20 08:21:27', '2024-11-20 08:21:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `reply_content` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`, `status`, `reply_content`) VALUES
(3, 'ff', 'minh@gmail.com', 'đâs', '2024-11-15 11:34:37', '2024-11-15 11:39:34', 1, 'hhhh'),
(7, 'Minh Nguyen', 'nguyenhoangtuminh14@gmail.com', '12345364', '2024-11-21 01:52:13', '2024-11-21 01:53:20', 1, '23456789'),
(8, 'Minh Nguyen', 'zackshika@gmail.com', '23456789', '2024-11-21 01:58:28', '2024-11-21 01:58:36', 1, '34567890-'),
(9, 'Minh Nguyen', 'zackshika@gmail.com', '123456', '2024-11-21 05:24:58', '2024-11-21 05:25:14', 1, '12345');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `flag`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Hoa Kỳ', 'images/flags/1731783704.jpg', 'Hợp chúng quốc Hoa Kỳ, gọi tắt là Hoa Kỳ hay Mỹ, là một quốc gia cộng hòa lập hiến liên bang ở châu Mỹ', '2024-11-16 12:01:44', '2024-11-16 12:01:44'),
(4, 'Hà Lan', 'images/flags/1731783742.png', 'Hà Lan hay Hòa Lan là một quốc gia tại Tây Âu. Đây là quốc gia cấu thành chủ yếu của Vương quốc Hà Lan, và còn bao gồm ba lãnh thổ đảo tại Caribe', '2024-11-16 12:02:22', '2024-11-16 12:02:22'),
(5, 'Pháp', 'images/flags/1731783765.png', 'Pháp, tên chính thức là Cộng hòa Pháp, là một quốc gia có lãnh thổ chính nằm tại Tây Âu cùng một số vùng và lãnh thổ hải ngoại', '2024-11-16 12:02:45', '2024-11-16 12:02:45'),
(6, 'Tây Ban Nha', 'images/flags/1731783807.png', 'Tây Ban Nha, tên gọi chính thức là Vương quốc Tây Ban Nha, là một quốc gia có chủ quyền với lãnh thổ chủ yếu nằm trên bán đảo Iberia tại phía Tây Nam châu Âu', '2024-11-16 12:03:27', '2024-11-16 12:03:27'),
(7, 'Nhật Bản', 'images/flags/1731783837.png', 'Nhật Bản, tên đầy đủ là Nhật Bản Quốc là một quốc gia và đảo quốc ở khu vực Đông Á, nằm bên rìa phía đông của biển Nhật Bản và biển Hoa Đông', '2024-11-16 12:03:57', '2024-11-16 12:03:57'),
(8, 'Úc', 'images/flags/1731783863.png', 'Úc hay Australia, Úc Châu, Úc Đại Lợi, tên chính thức là Thịnh vượng chung Úc, là một quốc gia có chủ quyền nằm ở giữa Ấn Độ Dương và Thái Bình Dương', '2024-11-16 12:04:23', '2024-11-16 12:04:23'),
(9, 'Trung Quốc', 'images/flags/1731783892.jpg', 'Trung Quốc, quốc hiệu là Cộng hòa Nhân dân Trung Hoa, là một quốc gia nằm ở khu vực Đông Á và là một trong hai quốc gia tỷ dân', '2024-11-16 12:04:52', '2024-11-16 12:04:52'),
(10, 'Thụy Điển', 'images/flags/1731783916.png', 'Thụy Điển, tên chính thức là Vương quốc Thụy Điển, là một quốc gia ở Bắc Âu, giáp Na Uy ở phía Tây và Phần Lan ở phía Đông Bắc', '2024-11-16 12:05:16', '2024-11-16 12:05:16'),
(11, 'Đức', 'images/flags/1731783939.png', 'Đức, tên chính thức là Cộng hòa Liên bang Đức, là quốc gia độc lập có chủ quyền ở khu vực Trung Âu', '2024-11-16 12:05:39', '2024-11-16 12:05:39'),
(12, 'Canada', 'images/flags/1731783966.png', 'Canada là quốc gia có diện tích lớn thứ hai trên thế giới, và nằm ở cực bắc của Bắc Mỹ', '2024-11-16 12:06:07', '2024-11-16 12:06:07'),
(13, 'Vương Quốc Anh', 'images/flags/1731783996.png', 'Vương quốc Liên hiệp Anh và Bắc Ireland hoặc Vương quốc Liên hiệp Đại Anh và Bắc Ireland hoặc Liên hiệp Vương quốc Anh và Bắc Ireland', '2024-11-16 12:06:36', '2024-11-16 12:06:36');

-- --------------------------------------------------------

--
-- Table structure for table `fields`
--

CREATE TABLE `fields` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fields`
--

INSERT INTO `fields` (`id`, `name`, `created_at`, `updated_at`) VALUES
(0, 'Không có', '2024-11-19 02:05:43', '2024-11-19 02:05:43'),
(4, 'Công Nghệ Thông Tin', '2024-11-18 17:03:17', '2024-11-18 17:03:17'),
(6, 'Kỹ Thuật Ô Tô', '2024-11-19 02:12:01', '2024-11-19 02:12:01'),
(7, 'Đồ Họa Máy Tính', '2024-11-19 02:13:11', '2024-11-19 02:13:11'),
(8, 'Kỹ Sư Cơ Khí', '2024-11-19 02:13:24', '2024-11-19 02:13:24'),
(9, 'Toán Học', '2024-11-19 02:14:04', '2024-11-19 02:14:04'),
(10, 'Hóa Dược', '2024-11-19 02:14:29', '2024-11-19 02:14:29'),
(11, 'Dược Học', '2024-11-19 02:14:37', '2024-11-19 02:14:37'),
(12, 'Kỹ Thuật Thực Phẩm', '2024-11-19 02:14:58', '2024-11-19 02:14:58'),
(13, 'Công Nghệ Thực Phẩm', '2024-11-19 02:15:06', '2024-11-19 02:15:06'),
(14, 'Luật', '2024-11-19 02:15:21', '2024-11-19 02:15:21'),
(15, 'Khoa Học Dữ Liệu', '2024-11-19 02:15:49', '2024-11-19 02:15:49'),
(16, 'Kinh Tế', '2024-11-19 02:16:09', '2024-11-19 02:16:09'),
(17, 'Kiến Trúc', '2024-11-19 02:16:26', '2024-11-19 02:16:26'),
(19, 'Địa Lý Học', '2024-11-19 02:16:42', '2024-11-19 02:16:42'),
(20, 'Địa Chất', '2024-11-19 02:16:53', '2024-11-19 02:16:53'),
(21, 'Sinh Học', '2024-11-19 02:17:08', '2024-11-19 02:17:08'),
(22, 'Đào Tạo Tay Đua Công Thức 1', '2024-11-19 02:17:47', '2024-11-19 02:17:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2024_11_10_155124_create_blogs_table', 1),
(3, '2024_11_10_174904_create_users_table', 1),
(4, '2024_11_10_174906_create_countries_table', 1),
(5, '2024_11_10_174906_create_programs_table', 1),
(6, '2024_11_10_174906_create_scholarships_table', 1),
(7, '2024_11_10_174907_create_consultations_table', 1),
(8, '2024_11_11_144005_remove_columns_from_users_table', 1),
(9, '2024_11_11_150011_add_columns_to_users_table', 1),
(10, '2024_11_14_175831_create_comments_table', 2),
(11, '2024_11_14_195007_create_contacts_table', 3),
(14, '2024_11_14_195316_create_contacts_table', 4),
(15, '2024_11_15_162239_add_status_to_contacts_table', 4),
(16, '2024_11_15_165919_add_reply_content_to_contacts_table', 5),
(18, '2024_11_16_192556_update_scholarships_table', 6),
(23, '2024_11_17_183150_create_registrations_table', 7),
(24, '2024_11_17_205811_add_sample_services', 8),
(26, '2024_11_17_220222_update_registrations_table', 9),
(27, '2024_11_17_225053_add_approved_to_registrations_table', 10),
(37, '2024_11_18_083034_create_services_table', 11),
(38, '2024_11_18_083047_create_registrations_table', 11),
(39, '2024_11_18_232328_create_fields_table', 11),
(40, '2024_11_18_233418_create_scholarships_table', 11),
(41, '2024_11_19_093344_update_amount_column_in_scholarships_table', 12),
(42, '2024_11_20_130535_create_comments_table', 13),
(44, '2024_11_20_144024_update_comments_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` bigint UNSIGNED NOT NULL,
  `service_id` bigint UNSIGNED NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '0',
  `datetime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `first_name`, `last_name`, `email`, `phone`, `education_level`, `country_id`, `service_id`, `approved`, `datetime`, `created_at`, `updated_at`) VALUES
(2, 'Minh', 'Nguyen', 'nguyenhoangtuminh15@gmail.com', '0398433688', 'Cao đẳng', 13, 3, 1, '2024-11-20 06:45:00', '2024-11-19 16:45:25', '2024-11-19 16:46:04'),
(3, 'Minh', 'Nguyen', 'nguyenhoangtuminh157@gmail.com', '0398433889', 'Đại học', 12, 4, 1, '2024-11-20 06:55:00', '2024-11-19 16:55:34', '2024-11-20 09:35:43'),
(4, 'Minh22', 'Nguyen', 'nguyenhoangtuminh124@gmail.com', '0398433689', 'Trung học phổ thông', 12, 3, 1, '2024-11-20 23:37:00', '2024-11-20 09:37:05', '2024-11-20 09:50:30'),
(8, 'Minh', 'Nguyen', 'nguyenhoangtuminh14@gmail.com', '0398433689', 'Trung cấp', 13, 1, 1, '2024-11-21 19:23:00', '2024-11-21 05:23:47', '2024-11-21 05:24:06');

-- --------------------------------------------------------

--
-- Table structure for table `scholarships`
--

CREATE TABLE `scholarships` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_id` bigint UNSIGNED NOT NULL,
  `country_id` bigint UNSIGNED NOT NULL,
  `requirements` text COLLATE utf8mb4_unicode_ci,
  `amount` decimal(15,2) NOT NULL,
  `deadline` date NOT NULL,
  `application_guidelines` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scholarships`
--

INSERT INTO `scholarships` (`id`, `name`, `type`, `field_id`, `country_id`, `requirements`, `amount`, `deadline`, `application_guidelines`, `created_at`, `updated_at`) VALUES
(1, 'Học Bổng Công Nghệ Thông Tin ÚC', 'Theo Ngành', 4, 8, 'Trình Độ Học Vấn: Đại Học', '200000.00', '2025-01-25', 'Bước 1: Chuẩn Bị Hồ Sơ\r\nBước 2: Điền Mẫu Đăng Ký\r\nBước 3: Xác Nhận Đăng Ký\r\nBước 4: Xem Xét Hồ Sơ Đăng Ký\r\nBước 5: Phỏng Vấn', '2024-11-19 01:54:46', '2024-11-19 05:21:50'),
(3, 'Học Bổng Toàn Phần Hà Lan', 'Toàn Phần', 0, 4, 'Trình Độ Học Vấn: Đại Học', '300000.00', '2024-12-18', 'Bước 1: Chuẩn Bị Hồ Sơ\r\nBước 2: Điền Mẫu Đăng Ký\r\nBước 3: Xác Nhận Đăng Ký\r\nBước 4: Xem Xét Hồ Sơ Đăng Ký\r\nBước 5: Phỏng Vấn', '2024-11-19 02:06:14', '2024-11-19 04:50:33'),
(4, 'Học Bổng Toàn Phần Du Học Đức', 'Toàn Phần', 0, 11, 'Trình Độ Học Vấn: Trung Học Phổ Thông', '400000.00', '2025-01-09', 'Bước 1: Chuẩn Bị Hồ Sơ\r\nBước 2: Điền Mẫu Đăng Ký\r\nBước 3: Xác Nhận Đăng Ký\r\nBước 4: Xem Xét Hồ Sơ Đăng Ký\r\nBước 5: Phỏng Vấn', '2024-11-19 02:47:45', '2024-11-19 04:50:41'),
(5, 'Học Bổng Bán Phần ÚC', 'Bán Phần', 0, 8, 'Biết Ngoại Ngữ: Tiếng Anh', '150000.00', '2025-01-01', 'Bước 1: Chuẩn Bị Hồ Sơ\r\nBước 2: Điền Mẫu Đăng Ký\r\nBước 3: Xác Nhận Đăng Ký\r\nBước 4: Xem Xét Hồ Sơ Đăng Ký\r\nBước 5: Phỏng Vấn', '2024-11-19 04:35:42', '2024-11-19 04:51:10'),
(6, 'Học Bổng Bán Phần Trung', 'Bán Phần', 0, 9, 'Biết Ngoại Ngữ: Tiếng Trung', '170000.00', '2024-12-19', 'Bước 1: Chuẩn Bị Hồ Sơ\r\nBước 2: Điền Mẫu Đăng Ký\r\nBước 3: Xác Nhận Đăng Ký\r\nBước 4: Xem Xét Hồ Sơ Đăng Ký\r\nBước 5: Phỏng Vấn', '2024-11-19 05:10:01', '2024-11-19 05:20:52'),
(7, 'Học Bổng Sinh Học Đức', 'Theo Ngành', 21, 11, 'Biết Ngoại Ngữ: Tiếng Đức', '300000.00', '2024-12-18', 'Bước 1: Chuẩn Bị Hồ Sơ\r\nBước 2: Điền Mẫu Đăng Ký\r\nBước 3: Xác Nhận Đăng Ký\r\nBước 4: Xem Xét Hồ Sơ Đăng Ký\r\nBước 5: Phỏng Vấn', '2024-11-19 05:14:53', '2024-11-19 05:20:40'),
(8, 'Học Bổng Địa Chất Nhật', 'Theo Ngành', 20, 7, 'Biết Ngoại Ngữ: Tiếng Nhật', '200000.00', '2025-03-07', 'Bước 1: Chuẩn Bị Hồ Sơ\r\nBước 2: Điền Mẫu Đăng Ký\r\nBước 3: Xác Nhận Đăng Ký\r\nBước 4: Xem Xét Hồ Sơ Đăng Ký\r\nBước 5: Phỏng Vấn', '2024-11-19 05:16:48', '2024-11-19 05:16:48'),
(9, 'Học Bổng Bán Phần Mỹ', 'Bán Phần', 0, 3, 'Trình Độ Học Vấn: Cao Đẳng', '190000.00', '2025-01-25', 'Bước 1: Chuẩn Bị Hồ Sơ\r\nBước 2: Điền Mẫu Đăng Ký\r\nBước 3: Xác Nhận Đăng Ký\r\nBước 4: Xem Xét Hồ Sơ Đăng Ký\r\nBước 5: Phỏng Vấn', '2024-11-20 10:59:17', '2024-11-20 10:59:17'),
(10, 'Du Học Kỹ Sư Anh Quốc', 'Theo Ngành', 8, 13, 'Trình Độ Học Vấn: Đại Học', '300000.00', '2025-04-25', 'Bước 1: Chuẩn Bị Hồ Sơ\r\nBước 2: Điền Mẫu Đăng Ký\r\nBước 3: Xác Nhận Đăng Ký\r\nBước 4: Xem Xét Hồ Sơ Đăng Ký\r\nBước 5: Phỏng Vấn', '2024-11-21 01:57:29', '2024-11-21 01:57:29');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `process` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `support_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `process`, `support_time`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Tư vấn chọn trường và ngành học phù hợp', 'Giúp bạn lựa chọn trường và ngành học phù hợp với năng lực và sở thích của bạn.', 'Đánh giá nhu cầu > Tư vấn > Lựa chọn trường.', '1-2 tuần.', 'storage/images/services/MbARmSnN85eKq81A7ho7EDwgX0FXwCdvrTxwf09Q.jpg', '2024-11-18 16:42:35', '2024-11-18 16:42:35'),
(2, 'Hỗ trợ xin học bổng và các chương trình giảm học phí', 'Cung cấp thông tin và hỗ trợ bạn trong việc xin học bổng và các chương trình giảm học phí.', 'Tìm hiểu thông tin > Chuẩn bị hồ sơ > Nộp đơn.', '2-4 tuần.', 'storage/images/services/7aJ3UEygUhp8ZjJLKrXHzka7zKADYlQz0kNGrBhI.jpg', '2024-11-18 16:43:04', '2024-11-18 16:43:04'),
(3, 'Tư vấn chuẩn bị hồ sơ du học và xin visa', 'Hỗ trợ bạn trong việc chuẩn bị hồ sơ du học và xin visa để đảm bảo thành công.', 'Tư vấn > Chuẩn bị hồ sơ > Nộp đơn xin visa.', '3-5 tuần.', 'storage/images/services/JtzYFj1lom38Ric2PpIVaPNoskjfej8BmC7EsrVW.png', '2024-11-18 16:43:30', '2024-11-18 16:43:30'),
(4, 'Dịch vụ hỗ trợ nơi ở, tìm việc làm thêm cho du học sinh', 'Giúp bạn tìm nơi ở và việc làm thêm phù hợp trong thời gian du học.', 'Tìm hiểu nhu cầu > Tìm kiếm > Đặt chỗ.', '1-2 tuần.', 'storage/images/services/gqIRUUuiCsEoagu7skaBzqoxRFsWEBES098Ab9vV.png', '2024-11-18 16:43:55', '2024-11-18 16:43:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'minh', 'minh@gmail.com', '$2y$12$zel1UVETimVGSCp4oDWHJOApHc0.Gl8iYTY.wiTSZvwonHTIZhSsK', '2024-11-11 09:22:54', '2024-11-11 09:22:54'),
(2, 'minh', 'minh2@gmail.com', '$2y$12$v7sj5sD.ab2hvDvEgoZQ2O6PtPubpj7tWUKDpdyiHuJ6qy1J6W8NO', '2024-11-11 10:04:48', '2024-11-11 10:04:48'),
(3, 'minh', 'minh4@gmail.com', '$2y$12$Uy5xBCaM73xqM4FgTL8Ef.CvRZPI3CmkS0/1l89XnK8j9xcRWmrVy', '2024-11-12 04:46:05', '2024-11-12 04:46:05'),
(6, 'mop', 'mop@gmail.com', '$2y$12$UfJUTt.xTI01ENQ9vl1srugJnSUnrrX9on1nfFO7jYWo62hJtrLMm', '2024-11-15 02:57:42', '2024-11-15 02:57:42'),
(7, 'minh44', 'minh24@gmail.com', '$2y$12$fymiX1wq0bQtf8LoD/Bg/ecKR.ic.tadBBoamuiHB2V/8dnorZ1.q', '2024-11-20 10:34:27', '2024-11-20 10:34:27'),
(8, 'minh33', 'minh33@gmail.com', '$2y$12$empCdXY4uEhYKEK8JNFvX.mMA14bucNpPDD.XfkY049vVbCHO5A.m', '2024-11-21 05:20:05', '2024-11-21 05:20:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `registrations_email_unique` (`email`),
  ADD KEY `registrations_country_id_foreign` (`country_id`),
  ADD KEY `registrations_service_id_foreign` (`service_id`);

--
-- Indexes for table `scholarships`
--
ALTER TABLE `scholarships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `scholarships_field_id_foreign` (`field_id`),
  ADD KEY `scholarships_country_id_foreign` (`country_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `fields`
--
ALTER TABLE `fields`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `scholarships`
--
ALTER TABLE `scholarships`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `registrations`
--
ALTER TABLE `registrations`
  ADD CONSTRAINT `registrations_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `registrations_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `scholarships`
--
ALTER TABLE `scholarships`
  ADD CONSTRAINT `scholarships_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `scholarships_field_id_foreign` FOREIGN KEY (`field_id`) REFERENCES `fields` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
