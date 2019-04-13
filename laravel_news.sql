-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 13, 2019 lúc 07:50 AM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel_news`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ads`
--

CREATE TABLE `ads` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ads`
--

INSERT INTO `ads` (`id`, `name`, `link`, `img`, `note`, `order`, `visibility`, `created_at`, `updated_at`) VALUES
(1, 'Let Show ADS', 'http://github.com/meesudzu', 'xEGyvmnGUO_latest_1.jpg', 'ADS', 1, 1, '2019-04-12 15:44:42', '2019-04-12 15:44:42'),
(2, 'Let Show ADS', 'http://github.com/meesudzu', 'jf2OEcR8hb_post_h_3.jpg', 'ADS', 2, 1, '2019-04-12 15:45:00', '2019-04-12 15:45:00'),
(3, 'Let Show ADS', 'http://github.com/meesudzu', 'XM8M18NmZQ_post_h_1.jpg', 'ADS', 3, 1, '2019-04-12 15:45:20', '2019-04-12 15:45:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_highlight` tinyint(1) NOT NULL DEFAULT '0',
  `view` int(11) NOT NULL DEFAULT '0',
  `user_id` int(10) UNSIGNED NOT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `articles`
--

INSERT INTO `articles` (`id`, `cat_id`, `title`, `slug`, `thumb`, `summary`, `content`, `tags`, `source`, `is_highlight`, `view`, `user_id`, `visibility`, `created_at`, `updated_at`) VALUES
(1, 5, '5 ứng viên giành\"Chiếc giày vàng\" Premeir League 2018/19', '5-ung-vien-gianhchiec-giay-vang-premeir-league-201819', 'jDfi7rLMzkYI2IbyatdFehhMke0SCB_7-cf-5115550177555554800-1555071111175.jpg', 'Bên cạnh những cuộc đua của các đội bóng tại Premier League, không thể quên các cuộc đua của các cá nhân, nổi bật là cuộc chiến giành “Chiếc giày vàng”.', '<p>Premier League đang bước vào giai đoạn khốc liệt nhất khi chỉ còn năm vòng đấu nữa giải đấu này sẽ kết thúc. Có khá nhiều những cuộc đua giữa các đội bóng, ở cuộc đua tới ngôi vô địch Liverpool và Man City đang tạo nên cuộc đua song mã. Dù Liverpool đang đứng đầu bảng với việc hơn Man City một điểm, song nhà đương kim vô địch lại nắm giữ lợi thế hơn đối thủ bởi còn một trận chưa đấu trong tay.</p>\r\n\r\n<p>Ở cuộc đua giành hai suất còn lại của tốp 4 sau Man City, Liverpool hiện tại có bốn ứng cử viên gồm Chelsea, Tottenham, Arsenal và Man Utd. Cả bốn đội bóng này đều đang có những lợi thế, bất lợi trong những trận đấu còn lại bởi thế cuộc chiến này xem ra còn khó lường hơn cuộc đua ngôi vô địch. Ở nhóm đua trụ hạng, sau khi Huddersfield và Fulham chính thức xuống hạng, một suất xuống hạng còn chưa xác định và đội đang xếp thứ 18 Cardiff vẫn còn nuôi hi vọng trụ hạng.</p>\r\n\r\n<p>Bên cạnh những cuộc đua của các đội bóng, không thể quên các cuộc đua của các cá nhân. Nổi bật nhất là cuộc đua giành “Chiếc giày vàng”. Năm ứng viên dưới đây là những cầu thủ có khả năng sẽ giành danh hiệu “Chiếc giày vàng” Premier League 2018/19.</p>\r\n\r\n<p><strong>5. Sadio Mane (Liverpool)</strong></p>\r\n\r\n<p><img alt=\"5 ứng viên giànhChiếc giày vàng Premeir League 2018/19 - 1\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2019/04/12/7-cf-5115550177555554800-1555071111175.jpg\" title=\"5 ứng viên giànhChiếc giày vàng Premeir League 2018/19 - 1\" /></p>\r\n\r\n<p>Sadio Mane</p>\r\n\r\n<p>Sadio Mane có mùa giải xuất sắc nhất kể từ khi bước chân tới Premeir League, với 17 bàn thắng ở 33 trận đấu đã qua, anh cũng có một đường kiến tạo. Thêm ba bàn thắng ở các giải đấu khác, Mane đã có được 20 bàn thắng ở mùa giải năm nay bằng tổng số bàn thắng anh ghi được ở mùa giải trước. Với năm trận đấu còn lại của Premeir League, tiền đạo người Senegal hoàn toàn có thể gia tăng số bàn thắng bởi anh đang có phong độ tốt. <br />\r\nTrong các tuần gần đây, Mane đang “gánh” Liverpool khi Mo Salah có dấu hiệu mất phong độ. Cầu thủ 26 tuổi này xuất sắc từ đầu năm nay, anh ghi được 9 bàn thắng trong 11 trận ra sân gần nhất. Nếu tiếp tục duy trì được phong độ như hiện tại, Sane hoàn toàn có khả năng tranh chấp danh hiệu “Chiếc giày vàng”.</p>\r\n\r\n<p><strong>4. Harry Kane  (Tottenham)</strong></p>\r\n\r\n<p><img alt=\"5 ứng viên giànhChiếc giày vàng Premeir League 2018/19 - 2\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2019/04/12/kane-1555071136547.jpg\" title=\"5 ứng viên giànhChiếc giày vàng Premeir League 2018/19 - 2\" /></p>\r\n\r\n<p>Harry Kane</p>\r\n\r\n<p>Kane giành danh hiệu “Chiếc giày vàng” tại các mùa giải 2015/16 và 2016/17, mùa giải năm ngoái anh cũng ghi được tới 30 bàn thắng, chỉ kém cầu thủ ghi nhiều bàn thắng nhất Mo Salah hai bàn. Nhìn vào “gia tài” bàn thắng của Kane ở Premier League, hẳn tất cả người hâm mộ đều phải thán phục tiền đạo của Tottenham, anh ghi 125 bàn qua 178 trận.</p>\r\n\r\n<p>Ở mùa giải năm nay, Kane đã ghi được 17 bàn, có bốn đường kiến tạo. Nếu ghi được 20 bàn thắng, Kane sẽ có mùa giải thứ năm liên tiếp cán cộc mốc nêu trên. Tuy nhiên, mới đây Kane đã dính chấn thương mắt cá trong trận đấu gặp Man City tại Champions League, hiện tại chưa rõ anh sẽ mất bao lâu để hồi phục. Nếu Kane vắng mặt tới hết mùa, đó là điều vô cùng đáng tiếc.</p>\r\n\r\n<p><strong>3. Pierre-Emerick Aubameyang (Arsenal)</strong></p>\r\n\r\n<p><img alt=\"5 ứng viên giànhChiếc giày vàng Premeir League 2018/19 - 3\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2019/04/12/7-dfb-315550178507607800-1555071164699.jpg\" title=\"5 ứng viên giànhChiếc giày vàng Premeir League 2018/19 - 3\" /></p>\r\n\r\n<p>Pierre-Emerick Aubameyang</p>\r\n\r\n<p>Trong vài năm qua, Aubameyang là một trong những tay săn bàn hàng đầu châu Âu. Anh đã ghi bàn thắng liên tục ở Pháp và Đức với các CLB Saint-Etienne, Borussia Dortmund và tiếp tục thể hiện phẩm chất của một tiền đạo hàng đầu kể từ khi chuyển đến Anh vào tháng 1 năm 2018.</p>\r\n\r\n<p>Mùa giải năm nay, Aubameyang đã ghi 17 bàn ở Premier League, cung cấp năm lần kiến tạo cho đồng đội, nhờ vậy Aubameyang đang xếp trên Kane và Mane trong danh sách đua tranh “Chiếc giày vàng”. Tuy nhiên, trong một vài tuần gần đây Unai Emery lại đang chọn Alexandre Lacazette đá vị trí cắm nhiều hơn so với Aubameyang, vì vậy tiền đạo người Gabon mới chỉ ghi có một bàn từ đầu tháng ba.</p>\r\n\r\n<p><strong>4. Mohamed Salah (Liverpool)</strong></p>\r\n\r\n<p><img alt=\"5 ứng viên giànhChiếc giày vàng Premeir League 2018/19 - 4\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2019/04/12/salah-1555071136659.jpg\" title=\"5 ứng viên giànhChiếc giày vàng Premeir League 2018/19 - 4\" /></p>\r\n\r\n<p>Mohamed Salah </p>\r\n\r\n<p>Salah chắc chắn là cầu thủ nổi bật ở Premier League mùa trước. Tiền đạo người Ai Cập ghi được tới 32 bàn thắng và giành danh hiệu “Chiếc giày vàng”, anh còn nổi bật ở Champions League với 11 bàn thắng đưa Liverpool vào chung kết. Trong nửa đầu mùa giải năm nay, Salah tiếp tục phong độ thăng hoa với 18 bàn thắng tại Premier League.</p>\r\n\r\n<p>Đáng tiếc mọi chuyện dường như không suôn sẻ cho tiền đạo của Liverpool trong một vài tháng trở lại đây. Salah đang dần trở nên tầm thường khi chỉ ghi một bàn thắng trong 7 trận đấu gần nhất cho The Kop, quả thật để  đua tranh “Chiếc giày vàng”, Salah cần có cảm giác ghi bàn tốt hơn hiện tại, anh cần trở lại với phong độ như ở đầu mùa giải.</p>\r\n\r\n<p><strong>1. Sergio Aguero (Manchester City)</strong></p>\r\n\r\n<p><img alt=\"5 ứng viên giànhChiếc giày vàng Premeir League 2018/19 - 5\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2019/04/12/aguero-1555071136523.jpg\" title=\"5 ứng viên giànhChiếc giày vàng Premeir League 2018/19 - 5\" /></p>\r\n\r\n<p>Sergio Aguero</p>\r\n\r\n<p>Không sở hữu chiều cao lí tưởng dành cho một tiền đạo, nhưng khả năng săn bàn của Aguero thì không cần phải nghi ngờ. Tiền đạo người Argentina thuộc tốp những tiền đạo xuất sắc nhất thế giới hiện nay, rất nhanh chóng Aguero đã trở thành chân sút vĩ đại nhất trong lịch sử Man City. Cũng như Kane, Aguero đang đặt mục tiêu ghi được trên 20 bàn thắng ở mùa giải thứ năm liên tiếp, có lẽ anh sẽ sớm thành công khi Man City còn sáu trận đấu nữa.</p>\r\n\r\n<p>Mặc dù có chút băn khoăn về việc Aguero có thực sự thích nghi với chiến thuật của Guardiola hay không, nhưng tiền đạo người Argentina vẫn đang làm tốt vai trò của một tiền đạo, điều đó khiến Guardiola vẫn phải coi anh là lựa chọn hàng đầu cho vị trí tiền đạo mỗi khi chọn đội hình ra sân. Nếu không gặp chấn thương, Aguero sẽ là ứng viên nặng ký cho danh hiệu “Chiếc giày vàng” mùa giải năm nay.</p>', '5,ung,vien,gianhchiec,giay,vang,premeir,league,201819', 'DT', 0, 0, 1, 1, '2019-04-12 15:49:21', '2019-04-12 15:49:21'),
(2, 5, 'CLB Hà Nội thoát thua trong trận đấu mà Khánh Hoà bị từ chối hai bàn thắng', 'clb-ha-noi-thoat-thua-trong-tran-dau-ma-khanh-hoa-bi-tu-choi-hai-ban-thang', 'GRYApLPpJBe3AB0kZ1ay70Yk3sRoB0_clb-ha-noi-112419-1555078338212.jpg', 'Hai lần trong trận đấu này, ngoại binh Oliveira bên phía Khánh Hoà đưa bóng vào lưới CLB Hà Nội,', '<p>Trận đấu ở vòng 5 Wake-Up 247 V-League 2019 diễn ra với tốc độ khá cao, đôi bên thay phiên nhau bắn phá khung thành của bên còn lại. Bóng mới lăn 4 phút, CLB Hà Nội đã có cơ hội tốt. Đấy là tình huống mà Hoàng Vũ Samson dùng ngực làm tường cho Quang Hải nhận bóng, rồi sút bóng từ khoảng 12m, đưa bóng đi chệch xà ngang khung thành đội chủ nhà.</p>\r\n\r\n<p>Chỉ sau đó đúng 1 phút, Khánh Hoà có câu trả lời. Nhận đường chuyền của ngoại binh Toure, Trùm Tỉnh lao xuống dứt điểm từ khoảng 14m, nhưng đường bóng bị thủ môn Văn Công của CLB Hà Nội đổ người ngăn chặn.</p>\r\n\r\n<p>Đến phút 6, Khánh Hoà có phen mừng hụt. Đường chuyền từ biên phải của đồng đội giúp Oliveira của Khánh Hoà có pha đánh gót điệu nghệ, đưa bóng vào lưới thủ môn Văn Công bên phía CLB Hà Nội. May cho đội bóng thủ đô là trong tình huống vừa nêu, Oliveira bị trọng tài Công Khanh xác định rằng rơi vào thế việt vị trước khi sút tung lưới đội khách.</p>\r\n\r\n<p><img alt=\"CLB Hà Nội thoát thua trong trận đấu mà Khánh Hoà bị từ chối hai bàn thắng - 1\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2019/04/12/clb-ha-noi-112419-1555078338212.jpg\" title=\"CLB Hà Nội thoát thua trong trận đấu mà Khánh Hoà bị từ chối hai bàn thắng - 1\" /></p>\r\n\r\n<p>Quang Hải và CLB Hà Nội thoát thua trên sân Nha Trang của Khánh Hoà </p>\r\n\r\n<p>Ở đầu sân bên kia, Quang Hải có pha đi bóng qua 3 hậu vệ Khánh Hoà ở phút 10, rồi vuốt bóng bằng chân trái từ khoảng 18m, thủ môn Tuấn Mạnh của đội chủ nhà bó tay, nhưng bóng lại dội cột dọc dội ra.</p>\r\n\r\n<p>Trước khi hiệp 1 kết thúc chừng 1 phút, Nguyễn Tấn Tài của Khánh Hoà đánh đầu từ khoảng 8m cực hiểm, nhưng thủ môn Văn Công của CLB Hà Nội phản xạ xuất thần, đẩy bóng cứu thua cho đội khách.</p>\r\n\r\n<p>Sang hiệp 2, Khánh Hoà một lần nữa phải mừng hụt, vì bị từ chối bàn thắng. Phút 60, 2 tiền đạo ngoại của đội bóng phố biển phối hợp với nhau: Toure Youssouf đánh đầu chuyền bóng cho Oliveira thoát qua sự đeo bám của hậu vệ CLB Hà Nội, kết thúc ngay trong khu vực 5m50 tung lưới CLB Hà Nội.</p>\r\n\r\n<p>Nhưng một lần nữa bàn thắng không được trọng tài Công Khanh công nhận, vì cho rằng Oliveira việt vị trước khi chọc thủng lưới đội đương kim vô địch V-League.</p>\r\n\r\n<p>Trong khi đó, khoảng thời gian cuối trận là khoảng thời gian mà CLB Hà Nội liên tục bỏ qua các cơ hội ngon ăn. Oseni và Hoàng Vũ Samson mỗi người bỏ qua các cơ hội không thể tin nổi, khi có dịp đối mặt với thủ môn Tuấn Mạnh của Khánh Hoà ngay trong khu vực 5m50 của đội chủ nhà.</p>\r\n\r\n<p>Cũng trong khoảng thời gian cuối trận, CLB Hà Nội được hưởng đến 2 quả đá phát trực tiếp ngay trước vạch 16m50 của Khánh Hoà. Một lần Quang Hải sút phạt sạt xà ngang, còn lần khác Hùng Dũng đá bóng lượn qua hàng rào, nhưng bị thủ môn Tuấn Mạnh nhoài người cản phá.</p>\r\n\r\n<p>Bị Khánh Hoà cầm chân với tỷ số hoà 0-0, CLB Hà Nội chính thức mất ngôi đầu bảng về tay CLB TPHCM.</p>', 'clb,ha,noi,thoat,thua,trong,tran,dau,ma,khanh,hoa,bi,tu,choi,hai,ban,thang', 'DT', 0, 15, 1, 1, '2019-04-12 15:50:04', '2019-04-12 15:50:04'),
(3, 5, 'CLB TPHCM vượt qua B.Bình Dương trong trận cầu nghẹt thở', 'clb-tphcm-vuot-qua-bbinh-duong-trong-tran-cau-nghet-tho', 'GW8nhzSYohIA6EyLjc6Wx45OZSa3sO_tphcm-112419-1555072231540.jpg', 'Bàn thắng ở phút 90 của tiền đạo Vinicius giúp CLB TPHCM giành chiến thắng 3-2 trước B.Bình Dương', '<p>Sau những phút đầu chơi có phần chậm rãi, đôi bên tăng tốc trong hiệp 2, trước khi tạo được khá nhiều tình huống sóng gió về phía khung thành của nhau.</p>\r\n\r\n<p>Phút 36, lão tướng Lê Tấn Tài của B.Bình Dương chuyền bóng rất hay từ cánh trái, đưa bóng đến đúng tầm đầu của Wander Luiz, để cầu thủ này đánh đầu lái bóng kỹ thuật, buộc thủ thành Thanh Thắng bên phía CLB TPHCM phải cứu thua bằng những đầu ngón tay.</p>\r\n\r\n<p>1 phút sau, đến lượt cầu thủ trẻ Hồ Tấn Tài tạt bóng từ biên phải, lại là Wander Luiz bật cao hơn hàng thủ CLB TPHCM, đánh đầu qua tay thủ môn Thanh Thắng, nhưng bóng lại đi sạt cột dọc ra ngoài.</p>\r\n\r\n<p><img alt=\"CLB TPHCM vượt qua B.Bình Dương trong trận cầu nghẹt thở - 1\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2019/04/12/tphcm-112419-1555072231540.jpg\" title=\"CLB TPHCM vượt qua B.Bình Dương trong trận cầu nghẹt thở - 1\" /></p>\r\n\r\n<p>Vinicius lập cú đúp...</p>\r\n\r\n<p>Không ghi được bàn thắng trong các pha bóng vừa nêu, Wander Luiz nói riêng và toàn đội B.Bình Dương phải tiếc nuối vì để cho CLB TPHCM chọc thủng lưới ngay sau đó.</p>\r\n\r\n<p>Phút 38, đón đường chuyền tưởng như không có gì nguy hiểm của đồng đội từ giữa sân, tiền đạo Vinicius của CLB TPHCM càn lướt qua 2 hậu vệ đội chủ nhà, trước khi xỉa bóng qua tay thủ môn Trần Đức Cường, mở tỷ số 1-0 cho đội bóng thành phố.</p>\r\n\r\n<p>Thua trước, B.Bình Dương đẩy cao đội hình tấn công ngay đầu hiệp 2, nhưng khi mà họ còn chưa kịp ghi bàn san bằng tỷ số, thì B.Bình Dương đã để thua tiếp bàn thứ 2.</p>\r\n\r\n<p>Phút 69, bóng bật ra từ pha tranh chấp tầm cao có sự tham dự của Vinicius, để rồi Công Thành của CLB TPHCM lao vào sút chéo góc từ khoảng chục mét, nâng tỷ số lên 2-0 cho đội khách.</p>\r\n\r\n<p><img alt=\"CLB TPHCM vượt qua B.Bình Dương trong trận cầu nghẹt thở - 2\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2019/04/12/tphcm-212419-1555072231580.jpg\" title=\"CLB TPHCM vượt qua B.Bình Dương trong trận cầu nghẹt thở - 2\" /></p>\r\n\r\n<p>... CLB TPHCM giành chiến thắng trước B.Bình Dương, để lấy lại ngôi đầu bảng</p>\r\n\r\n<p>Tuy nhiên, kịch tính của trận đấu bắt đầu xuất hiện từ đây. Ngỡ như đội bóng thành phố sẽ có chiến thắng dễ, thì họ gặp phải sự chống trả rất mạnh mẽ từ phía đội chủ nhà.</p>\r\n\r\n<p>Phút 73, đón đường chuyền từ biên phải của đồng đội, lão tướng Anh Đức bên phía B.Bình Dương khôn ngoan khống chế bóng gọn gàng, bất chấp sự đeo bám của hậu vệ đối phương, rồi sửa bóng vào lưới từ cự ly gần, thu ngắn cách biệt xuống còn 1-2 cho B.Bình Dương.</p>\r\n\r\n<p>Chưa hết, phút 76, bóng chạm tay một hậu vệ đội khách trong khu vực 16m50, và trọng tài cho đội bóng đất Thủ Dầu được hưởng phạt đền.</p>\r\n\r\n<p>Từ chấm 11m, Anh Đức đánh lừa thủ môn Thanh Thắng, nhẹ nhàng đưa bóng vào lưới, gỡ hoà 2-2 cho đội chủ nhà.</p>\r\n\r\n<p>Nhưng đấy vẫn chưa phải là bàn thắng cuối cùng của trận đấu này, và B.Bình Dương dù liên tiếp ghi 2 bàn trong vòng ít phút, vẫn không thể kiếm được điểm nào từ trận đấu này, bởi CLB TPHCM có bàn thắng quyết định đúng phút cuối cùng ở vòng 5 Wake-Up 247 V-League 2019.</p>\r\n\r\n<p>Phút 90, thêm một quả phạt đền xuất hiện, lần này đến lượt Hồ Sỹ Giáp của đội bóng đất Thủ Dầu để bóng chạm tay trong khu cấm địa, và trọng tài Thành Đệ chỉ tay vào chấm 11m.</p>\r\n\r\n<p>Từ chấm phạt đền, Vinicius của CLB TPHCM sút bóng bị thủ môn Đức Cường bên phía B.Bình Dương đẩy ra, nhưng cũng chính Vinicius sút bồi, ấn định chiến thắng 3-2 cho CLB TPHCM.</p>\r\n\r\n<p>Chiến thắng giúp đội bóng thành phố tạm đòi lại ngôi đầu bảng từ tay CLB Hà Nội, cho đến trước khi trận đấu giữa đội bóng thủ đô và Khánh Hoà cũng thuộc vòng 5 kết thúc.</p>', 'clb,tphcm,vuot,qua,bbinh,duong,trong,tran,cau,nghet,tho', 'DT', 0, 0, 1, 1, '2019-04-12 15:51:03', '2019-04-12 15:51:03'),
(4, 5, 'HLV Park Hang Seo và bài toán khủng hoảng… thừa thủ môn', 'hlv-park-hang-seo-va-bai-toan-khung-hoang-thua-thu-mon', '1Q7K2A43TteuEUSbOlcpxqUGe5gsMK_sai-gon-tphcm-26419-1554876970366.jpg', 'Ngay trước thềm các giải đấu quan trọng của các đội tuyển Việt Nam trong năm nay', '<p>Rất may cho đội tuyển Việt Nam và đội tuyển U23 Việt Nam ở chỗ trong bối cảnh mà thủ môn Nguyễn Tuấn Mạnh sa sút phong độ, còn thủ môn Bùi Tiến Dũng có dấu hiệu chững lại, bóng đá nội nổi lên một số thủ thành khác, có chất lượng chuyên môn không tồi. các thủ môn này đều đang khẳng định được vị trí ở V-League.</p>\r\n\r\n<p>Thay thế cho Nguyễn Tuấn Mạnh (Khánh Hoà) ở cấp độ đội tuyển quốc gia trong tương lai gần, HLV Park Hang Seo có thể nhắm đến thủ thành Nguyễn Văn Hoàng (Sài Gòn FC), vốn là thành viên của đội tuyển U23 Việt Nam, giành ngôi Á quân giải U23 châu Á hồi đầu năm ngoái.</p>\r\n\r\n<p>Sau một giải quốc tế ngồi dự bị cho thủ môn nổi tiếng Bùi Tiến Dũng tại giải U23 châu Á nói trên, Nguyễn Văn Hoàng hiện giờ có vẻ như còn thăng tiến tốt hơn hẳn Bùi Tiến Dũng.</p>\r\n\r\n<p><img alt=\"HLV Park Hang Seo và bài toán khủng hoảng… thừa thủ môn - 1\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2019/04/10/sai-gon-tphcm-26419-1554876970366.jpg\" title=\"HLV Park Hang Seo và bài toán khủng hoảng… thừa thủ môn - 1\" /></p>\r\n\r\n<p>Thủ thành Nguyễn Văn Hoàng (Sài Gòn FC) đang trưởng thành đáng kể tại V-League (ảnh: Trọng Vũ)</p>\r\n\r\n<p>Thủ thành này đã giành được vị trí chính thức ở Sài Gòn FC, đồng thời thi đấu ổn định qua 4 vòng đấu đầu tiên của V-League 2019.</p>\r\n\r\n<p>Thể hình khá (1m83), khả năng xử lý bóng bổng và khả năng quán xuyến khu vực 16m50 khá, Nguyễn Văn Hoàng có đầy đủ tố chất của một thủ thành có triển vọng trong tương lai gần.</p>\r\n\r\n<p>Chắc chắn Nguyễn Văn Hoàng chưa thể cạnh tranh vị trí số 1 trong khung thành của đội tuyển Việt Nam, chưa thể cạnh tranh với thủ môn Việt kiều Đặng Văn Lâm. Nhưng anh hoàn toàn có thể nhắm đến vị trí thủ môn số 2 của Nguyễn Tuấn Mạnh hoặc vị trí số 3 của Bùi Tiến Dũng ở đội tuyển quốc gia.</p>\r\n\r\n<p>Thủ môn Quàng Thế Tài của Viettel cũng là cái tên đáng chú ý. Sinh năm 1996, Quàng Thế Tài lố tuổi dự SEA Games vào cuối năm nay, nhưng anh có thể là gương mặt đáng chú ý cho việc tìm nhân tố mới cho đội tuyển quốc gia, chuẩn bị cho vòng loại World Cup 2022 – khu vực châu Á.</p>\r\n\r\n<p>Viettel thua nhiều hơn thắng trong giai đoạn đầu mùa giải, nhưng hầu hết các bàn thua của họ không có lỗi của thủ môn. Trái lại, chính những pha cứa thua xuất sắc của Quàng Thế Tài giúp cho Viettel hạn chế không ít bàn thua ở các trận đã qua.</p>\r\n\r\n<p>Nhân nói về sự dũng cảm trong việc trao cơ hội cho các thủ thành trẻ, phải kể đến HLV Lê Huỳnh Đức của SHB Đà Nẵng và HLV Trương Việt Hoàng của Hải Phòng.</p>\r\n\r\n<p>Thủ môn Nguyễn Văn Biểu (SHB Đà Nẵng) mới 21 tuổi nhưng cho thấy triển vọng rất tốt, trong khi thủ môn Nguyễn Văn Toản (Hải Phòng) còn nhỏ tuổi hơn: Mới 20 tuổi. Tuy nhiên, điều quan trọng là cả 2 đều chơi rất ổn định, và chững chạc hơn hẳn lứa tuổi đôi mươi của họ.</p>\r\n\r\n<p>Những thủ môn này là các gương mặt triển vọng cho SEA Games lần thứ 30 vào cuối năm nay. Họ còn có thể soán vị trí của thủ thành Bùi Tiến Dũng, nếu như họ tiếp tục thăng tiến như hiện tại, còn Bùi Tiến Dũng tiếp tục không có vị trí chính thức tại V-League.</p>\r\n\r\n<p>Dĩ nhiên, những sự lựa chọn nhân sự trong khung thành, nhất là việc thay thế - nếu có, vị trí của thủ môn Bùi Tiến Dũng, có thể khiến HLV Park Hang Seo đau đầu. Dù vậy, đấy sẽ là cơn đau đầu dễ chịu, vì thà… thừa tài năng để lựa chọn hơn là thiếu tài năng!</p>', 'hlv,park,hang,seo,va,bai,toan,khung,hoang,thua,thu,mon', 'DT', 1, 20, 1, 1, '2019-04-12 15:52:20', '2019-04-12 15:52:20'),
(5, 5, 'Báo Hàn Quốc chỉ ra điều giúp Công Phượng tỏa sáng', 'bao-han-quoc-chi-ra-dieu-giup-cong-phuong-toa-sang', 'XiEXnUym9xML4K4kI98C7yTyNU4LOR_nguyencongphuongincheonunitedvssuwonbluewingsfppnf-2704-q-86112-a-768-ai-9-mhn-1555064340816.jpg', 'Báo Hàn Quốc cho rằng Công Phượng có thể là nhân tố giúp Incheon United thoát khỏi khủng hoảng', '<p>Incheon United đang thi đấu cực tệ khi thua 4 trận liên tiếp và bị đẩy xuống vị trí cuối bảng ở giải VĐQG Hàn Quốc. Tờ Kyeonggi cho rằng nguyên nhân khiến CLB này tụt dốc là bởi thiếu quá nhiều trụ cột. Điều đó khiến cho CLB không thể vận hành lối chơi như ý.</p>\r\n\r\n<p><img alt=\"Báo Hàn Quốc chỉ ra điều giúp Công Phượng tỏa sáng - 1\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2019/04/12/nguyencongphuongincheonunitedvssuwonbluewingsfppnf-2704-q-86112-a-768-ai-9-mhn-1555064340816.jpg\" title=\"Báo Hàn Quốc chỉ ra điều giúp Công Phượng tỏa sáng - 1\" /></p>\r\n\r\n<p>Tờ Kyeonggi cho rằng Incheon United nên từ bỏ lối chơi bóng dài nếu muốn phát huy tố chất của Công Phượng</p>\r\n\r\n<p>Tuy nhiên, họ cũng cho rằng Công Phượng có thể là nhân tố giúp Incheon United thoát khỏi khủng hoảng nhưng để làm được điều đó, CLB này cần phải thay đổi chiến thuật.</p>\r\n\r\n<p>Tờ Kyeonggi viết: “Trong 4 trận gần đây, Incheon United luôn để đối thủ có cơ hội mở tỷ số và tỏ ra bế tắc trong việc lật ngược thế cờ. Vì thế, Incheon United cần phải tìm cách ghi được bàn thắng trước và hạn chế việc để mất bóng trước những đối thủ có hàng thủ chắc chắn.</p>\r\n\r\n<p>Để đạt được mục tiêu ấy, họ cần thay đổi chiến thuật bằng các tận dụng Công Phượng. Trong 2 lần được đá chính liên tiếp, tiền đạo này đã cho thấy tầm ảnh hưởng bằng việc hoạt động tích cực từ biên vào trung lộ.</p>\r\n\r\n<p>Khi những cầu thủ tốt nhất của Incheon United không thể ra sân, giải pháp hữu ích để đem lại hiệu quả cho hàng công của CLB này tận dụng tối đa tốc độ và kỹ thuật của Công Phượng. Để như vậy, Incheon United cần phải chơi bóng ngắn, thay vì bóng dài như những trận đấu vừa qua”.</p>', 'bao,han,quoc,chi,ra,dieu,giup,cong,phuong,toa,sang', 'DT', 1, 0, 1, 1, '2019-04-12 15:53:14', '2019-04-12 15:53:14'),
(6, 5, 'MU thất bại trước Barcelona: Khi “đất Mẹ” không bình yên…', 'mu-that-bai-truoc-barcelona-khi-dat-me-khong-binh-yen', '33riQ9eX4YZZ0MFvFEEuPkHOmzOCaN_mc-15549453635713533-1555063130498.jpg', 'Có thực tế khó tin là MU thi đấu trên sân nhà tệ hơn sân khách trong thời gian qua.', '<p>Có một thống kê đáng chú ý. Trong 6 trận gần nhất trên sân nhà ở Champions League, MU đã thất bại 4 trận (tính cả trận gặp Sevilla mùa giải trước). Nên nhớ, trong 74 trận đấu trước đó tại Old Trafford tại Champions League, Quỷ đỏ cũng chỉ thua 4 trận.</p>\r\n\r\n<p><img alt=\"MU thất bại trước Barcelona: Khi “đất Mẹ” không bình yên… - 1\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2019/04/12/mc-15549453635713533-1555063130498.jpg\" title=\"MU thất bại trước Barcelona: Khi “đất Mẹ” không bình yên… - 1\" /></p>\r\n\r\n<p>MU thi đấu không tốt trên sân nhà Old Trafford</p>\r\n\r\n<p>Những con số ấy chỉ ra một thực tế rằng sân nhà Old Trafford giờ đây không còn là điểm tựa, mà thay vào đó nó đang trở thành “cơn ác mộng” thực sự với đội bóng thành Manchester. Thậm chí, việc thi đấu ở “Nhà hát của những giấc mơ” ở cúp châu Âu chẳng khác gì gánh nặng với MU.</p>\r\n\r\n<p>Ở trận đấu với Barcelona vừa qua, MU thi đấu không quá tệ trước ứng cử viên nặng ký cho chức vô địch. Thế nhưng, họ vẫn không thể tránh khỏi kết cục cay đắng. Nó khiến cho mục tiêu đi tiếp của CLB bị ảnh hưởng nặng nề.</p>\r\n\r\n<p>Có nhiều nguyên nhân để lý giải cho điều này. Tuy nhiên, không phủ nhận rằng toàn đội MU đang phải chịu áp lực khi thi đấu ở Old Trafford. Ai cũng biết, việc được thi đấu sân nhà ở vòng knock-out là lợi thế của các CLB. Bởi vì thế, họ phải chịu áp lực chiến thắng rất lớn, nếu không muốn gặp khó khăn trên đất khách ở lượt về.</p>\r\n\r\n<p>Chính tư tưởng này vô hình đã “buộc” những HLV của MU như Solskjaer hay trước đó là Mourinho có xu hướng thực dụng hơn. Như ở trận gặp Barcelona vừa qua, HLV Solskjaer đã buộc phải sử dụng sơ đồ 3 trung vệ (thậm chí, ông phải gò Luke Shaw vào vị trí trung vệ, vốn không phải sở trường).</p>\r\n\r\n<p>Hay như ở trận gặp PSG trước đó, MU cũng sử dụng đội hình thấp và chủ yếu trông đợi vào những pha phản công. Điều này khác hoàn toàn so với trận lượt về, khi MU lao lên tấn công trong thế không còn gì để mất ngay trên sân Công viên các Hoàng tử. Cuối cùng, họ đã thành công.</p>\r\n\r\n<p><img alt=\"MU thất bại trước Barcelona: Khi “đất Mẹ” không bình yên… - 2\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2019/04/12/victorlindelofluissuarezmanchesterunitedbarcelona-5062-e-00-jk-1-zs-1-bb-6-bii-87-hest-1555063163709.jpg\" title=\"MU thất bại trước Barcelona: Khi “đất Mẹ” không bình yên… - 2\" /></p>\r\n\r\n<p>Có cảm tưởng như MU đang chịu áp lực khi thi đấu trên sân nhà</p>\r\n\r\n<p>Có chi tiết đáng chú ý, trong 5 trận đấu trên sân nhà ở Champions League mùa này, MU đã không ghi bàn trong 4 trận (và chỉ ghi được đúng 1 bàn vào lưới Young Boys). Những con số ấy càng làm rõ nhận định trên.</p>\r\n\r\n<p>Dù HLV Solskjaer đã liên tục nhắc đi nhắc lại về “tinh thần 1999” với các học trò. Thế nhưng, có thể thấy, ở trận gặp Barcelona, MU gần như chỉ làm tốt nhiệm vụ phòng ngự. Còn ở khâu tấn công, những gì họ làm được chỉ là con số không tròn trĩnh. Thống kê còn chỉ ra rằng, lần đầu tiên kể từ năm 2005, Quỷ đỏ không thể sút trúng đích lần nào trong trận đấu.</p>\r\n\r\n<p>Đương nhiên, người ta vẫn kỳ vọng vào cuộc nổi loạn trong thế chân tường của MU như từng thể hiện với PSG. Dù sao, niềm tin là dưới thời HLV Solskjaer, MU có thể phát huy được tinh thần năm xưa, khi bị đẩy vào thế chân tường.</p>\r\n\r\n<p>Nhưng sân Nou Camp cũng là “tử địa” với bất kỳ đội bóng nào. Vì vậy, nó đòi hỏi nỗ lực lớn hơn bao giờ hết của Quỷ đỏ…</p>', 'mu,that,bai,truoc,barcelona,khi,dat,me,khong,binh,yen', 'DT', 1, 10, 1, 1, '2019-04-12 15:53:53', '2019-04-12 15:53:53'),
(7, 4, 'BLACKPINK - \'Kill This Love\' M/V', 'blackpink-kill-this-love-mv', '1C3qaDuwzayaPByx6VP01zOGSOFeOn_tong-hop-thanh-tich-mv-kill-this-love-cua-blackpink-e2436bb8.jpg', 'Blackpink', '<p><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/2S24-y0Ij3Y\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe></p>', 'blackpink,kill,this,love,mv', 'Youtube', 1, 0, 1, 1, '2019-04-12 15:56:28', '2019-04-12 15:56:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `slug`, `order`, `visibility`, `created_at`, `updated_at`) VALUES
(1, 0, 'Tin Thời Sự', 'tin-thoi-su', 1, 1, NULL, NULL),
(2, 0, 'Tin Giải Trí', 'tin-giai-tri', 2, 1, NULL, NULL),
(3, 0, 'Tin Thể Thao', 'tin-the-thao', 3, 1, NULL, NULL),
(4, 0, 'Video', 'video', 4, 1, NULL, NULL),
(5, 3, 'Bóng Đá', 'bong-da', 5, 1, '2019-04-12 15:42:15', '2019-04-12 15:42:15'),
(6, 3, 'Tenis', 'tenis', 5, 1, '2019-04-12 15:42:25', '2019-04-12 15:42:25'),
(7, 2, 'Diễn Viên', 'dien-vien', 5, 1, '2019-04-12 15:42:47', '2019-04-12 15:42:47'),
(8, 2, 'Phim', 'phim', 6, 1, '2019-04-12 15:42:54', '2019-04-12 15:42:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `article_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 'Bài viết hay quá men.', '2019-04-12 16:47:46', '2019-04-12 16:47:46'),
(2, 2, 6, 'Hay....', '2019-04-12 16:58:08', '2019-04-12 16:58:08'),
(3, 2, 6, 'Thêm một cái nữa cho chất.', '2019-04-12 17:00:40', '2019-04-12 17:00:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_04_02_142535_table_ads', 1),
(2, '2019_04_02_143207_table_slides', 1),
(3, '2019_04_02_143820_table_permission', 1),
(4, '2019_04_02_144013_table_users', 1),
(5, '2019_04_02_145528_table_categories', 1),
(6, '2019_04_02_150045_table_articles', 1),
(7, '2019_04_02_150845_table_comments', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', NULL, NULL),
(2, 'Collaborator', NULL, NULL),
(3, 'User', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slides`
--

CREATE TABLE `slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slides`
--

INSERT INTO `slides` (`id`, `title`, `description`, `img`, `order`, `visibility`, `created_at`, `updated_at`) VALUES
(1, 'Building the Future', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit amet, aliquam lorem. Fusce id ligula non risus mollis consectetur', 'jpd5RQqpTd_home_slider.jpg', 1, 1, '2019-04-12 15:43:44', '2019-04-12 15:43:44'),
(2, 'Building the FutureBuilding the Future', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit amet, aliquam lorem. Fusce id ligula non risus mollis consectetur', '2JG7WVetRS_home_slider.jpg', 2, 1, '2019-04-12 15:43:53', '2019-04-12 15:43:53'),
(3, 'Building the Future', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit amet, aliquam lorem. Fusce id ligula non risus mollis consectetur', 'WG2DCemITJ_home_slider.jpg', 3, 1, '2019-04-12 15:44:01', '2019-04-12 15:44:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar-default.jpg',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `permission_id` int(10) UNSIGNED NOT NULL DEFAULT '3',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `avatar`, `status`, `permission_id`, `created_at`, `updated_at`) VALUES
(1, 'Administrator@gmail.com', '$2y$10$cNfeo6PWv97q4vTKwvFcOunHF6SPRivaQncTBJGOyiNA6ihAjz3e.', 'Administrator', 'avatar-default.jpg', 1, 1, NULL, NULL),
(2, 'user@gmail.com', '$2y$10$FWdkO6d4yHfrV0swUVlWo.KhyWvVu1Qkoulqh2S4HSfneFXYqmuz2', 'User', 'avatar-default.jpg', 1, 3, '2019-04-12 16:57:39', '2019-04-12 16:57:39');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_title_unique` (`title`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`),
  ADD KEY `articles_cat_id_foreign` (`cat_id`),
  ADD KEY `articles_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_article_id_foreign` (`article_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_permission_id_foreign` (`permission_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
