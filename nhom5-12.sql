-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 19, 2021 lúc 04:07 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhom5`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `id_banner` int(11) NOT NULL,
  `noi_dung` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anh_minh_hoa` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_them` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_banner`
--

INSERT INTO `tbl_banner` (`id_banner`, `noi_dung`, `link`, `anh_minh_hoa`, `ngay_them`) VALUES
(1, 'now', '#', '../img/now.png', '2021-01-19 19:11:33'),
(2, 'Nhà hàng ba con cừu', '#', '../img/66a9c11a07ffd252067a7c19c5d19452.jpg', '2021-01-19 19:12:34'),
(3, 'Món thái', '#', '../img/mon_thai.jpg', '2021-01-19 19:09:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_binh_luan`
--

CREATE TABLE `tbl_binh_luan` (
  `id_binh_luan` int(11) NOT NULL,
  `id_reviewer` int(11) NOT NULL,
  `id_review` int(11) NOT NULL,
  `noi_dung` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_them` timestamp NOT NULL DEFAULT current_timestamp(),
  `trang_thai` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_binh_luan`
--

INSERT INTO `tbl_binh_luan` (`id_binh_luan`, `id_reviewer`, `id_review`, `noi_dung`, `ngay_them`, `trang_thai`) VALUES
(36, 4, 9, 'dffđ', '2021-01-16 08:06:51', 1),
(50, 4, 12, '2', '2021-01-16 08:34:08', 1),
(70, 4, 6, 'hgjg', '2021-01-16 10:04:52', 0),
(71, 4, 6, 'đinh ngọc', '2021-01-16 10:14:31', 1),
(74, 4, 8, 'kakhlhla', '2021-01-18 02:46:20', 1),
(77, 4, 106, 'ddd', '2021-01-18 04:33:49', 1),
(82, 4, 103, 'chán', '2021-01-19 05:16:01', 1),
(83, 1, 6, 'lhslahfa', '2021-01-19 07:44:09', 1),
(84, 1, 106, 'a', '2021-01-19 10:05:45', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danh_muc`
--

CREATE TABLE `tbl_danh_muc` (
  `id_danh_muc` int(11) NOT NULL,
  `ten_danh_muc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh_minh_hoa` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danh_muc`
--

INSERT INTO `tbl_danh_muc` (`id_danh_muc`, `ten_danh_muc`, `anh_minh_hoa`) VALUES
(1, 'Đồ ăn nhanh', '../img/do_an_nhanh.jpg'),
(2, 'Đồ uống', '../img/do_uong.jpg'),
(3, 'Đồ chay', '../img/do_chay.jpg'),
(4, 'Mì/Phở/Bún/Miến', '../img/mi_pho_mien.jpg'),
(5, 'Bánh', '../img/banh.jpg'),
(6, 'Cơm', '../img/com.jpg'),
(7, 'Cháo', '../img/chao.jpg'),
(8, 'Pizza/Sushi', '../img/pizza_sushi.jpg'),
(9, 'Lẩu/Nướng', '../img/lau_nuong.jpg'),
(10, 'Hải sản', '../img/hai_san.jpg'),
(11, 'Đồ ăn vặt', '../img/do_an_vat.jpg'),
(12, 'Món khác', '../img/mon_khac.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_da_luu`
--

CREATE TABLE `tbl_da_luu` (
  `id_reviewer` int(11) NOT NULL,
  `id_review` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_da_luu`
--

INSERT INTO `tbl_da_luu` (`id_reviewer`, `id_review`) VALUES
(1, 58),
(27, 58);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_duong`
--

CREATE TABLE `tbl_duong` (
  `id_duong` int(11) NOT NULL,
  `ten_duong` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_duong`
--

INSERT INTO `tbl_duong` (`id_duong`, `ten_duong`) VALUES
(1, 'Xã Đàn'),
(2, 'Đặng Văn Ngữ'),
(3, 'Chùa Bộc'),
(4, 'Hồ Đắc Di'),
(5, 'Láng Hạ'),
(6, 'Pháo Đài Láng'),
(7, 'Nguyên Hồng'),
(8, 'Chùa Láng'),
(9, 'Thái Hà'),
(10, 'Tây Sơn'),
(11, 'Tôn Thất Tùng'),
(12, 'Phạm Ngọc Thạnh'),
(13, 'Trần Hữu Tước'),
(14, 'Tôn Đức Thắng'),
(15, 'Nguyễn Phúc Lai'),
(16, 'Tam Khương'),
(17, 'Khâm Thiên'),
(18, 'Nguyễn Ngọc Doãn'),
(19, 'Ô Chợ Dừa'),
(20, 'Nam Đồng'),
(21, 'Khuỳnh Phúc Kháng'),
(22, 'Nguyễn Chí Thanh'),
(23, 'Kim Liên'),
(24, 'Quốc Tử Giám'),
(25, 'Lý Văn Phức'),
(26, 'Thịnh Quang'),
(28, 'Trường Chinh'),
(29, 'Thái Thịnh'),
(30, 'Ngô Sĩ Liên'),
(31, 'Đông Các'),
(32, 'Bích Câu'),
(33, 'Vũ Thạnh'),
(34, 'Trần Quý Cáp'),
(35, 'Văn Chương 1'),
(36, 'Quan Thổ 1'),
(37, 'Trung Tự'),
(38, 'Nguyễn Văn Tuyết'),
(39, 'Trung Liệt'),
(40, 'Lương Định Của'),
(41, 'Trung Phụng'),
(42, 'Hoàng Ngọc Phách'),
(43, 'Thượng Đình'),
(44, 'Vĩnh Hồ'),
(45, 'Giảng Võ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_gop_y`
--

CREATE TABLE `tbl_gop_y` (
  `id_gop_y` int(11) NOT NULL,
  `ho_ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieu_de` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_dung` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` int(1) NOT NULL DEFAULT 0,
  `ngay_gui` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_review`
--

CREATE TABLE `tbl_review` (
  `id_review` int(11) NOT NULL,
  `id_reviewer` int(11) NOT NULL,
  `id_danh_muc` int(11) NOT NULL,
  `id_duong` int(11) NOT NULL,
  `so_nha` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gio_mo_cua` time DEFAULT NULL,
  `gio_dong_cua` time DEFAULT NULL,
  `ten_mon` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_dung` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diem` float DEFAULT NULL,
  `gia_tb` float DEFAULT NULL,
  `gia_min` float DEFAULT NULL,
  `gia_max` float DEFAULT NULL,
  `anh_minh_hoa` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_dang` timestamp NOT NULL DEFAULT current_timestamp(),
  `luot_xem` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_review`
--

INSERT INTO `tbl_review` (`id_review`, `id_reviewer`, `id_danh_muc`, `id_duong`, `so_nha`, `gio_mo_cua`, `gio_dong_cua`, `ten_mon`, `noi_dung`, `diem`, `gia_tb`, `gia_min`, `gia_max`, `anh_minh_hoa`, `ngay_dang`, `luot_xem`) VALUES
(6, 1, 7, 14, 'Số 162E', '09:30:00', '00:00:00', 'Súp cua trứng bắc thảo', '📍Sáng trời còn nắng còn thèm thèm định nghĩ tan làm đi ăn chè ăn kem chiều mưa mưa gió ùa về trời trở lạnh thui đổi ý tắp lự đi làm bát súp cho ấm bụnggg. Chọn ăn quán này thấy đang hot rần rần trên các hội nhóm mà cũng gần cty tiện tiện. Súp đặc quánh vị khá thơm nhưng ko thấy mấy vị cua, mà còn cho cả hành khô mình cũng ko thấy hợp với súp lắm. Nên cho thêm xì dầu vì súp nấu hơi nhạt. Gọi bát thập cẩm có trứng cút, trứng bắc thảo, tim trứng non, óc heo nhưng bữa này mình ăn quán hết nên được thay bằng chả cua 😂 trứng bắc thảo dẻo ăn the the, ai ăn quen thì thích nha vì trứng bắc thảo đây oki phết. Nói chung mình thấy ăn tạm ổn được cái nhiều nhân ăn kèm đa dạng chứ bản thân súp chưa được ngon lắm.', 8, 35000, NULL, NULL, 'img/doan/n1.jpg', '2021-01-03 16:32:47', 22),
(8, 1, 5, 8, 'Số 29', '06:00:00', '20:00:00', 'Bánh mì nướng muối ớt ', '📍Team Ngoại Thương Ngoại Giao tan học mà chưa biết ăn gì thì nhao lẹ vào đâyy. Bánh mì nướng muối ớt đẫm topping giá rẻ tiếp sức nè. Bánh được ép bẹp nướng nóng giòn thơm thơm xong cắt thành từng miếng vừa ăn rồi rưới maiyonaise lên trên cho ngậy, 1 lớp muối ớt cay tê nhẹ nhẹ và cả tương ớt nữa. Topping nào xúc xích, bò khô, ruốc và cả tép khô nữa. Vị tép khô đặc trưng lắm. Ăn kèm có dưa chuột cho đỡ ngấy. Để nói là ngon thì cũng chẳng hẳn nhưng để ăn vặt vui mồm thì rõ là hạp lý đó. Bánh full topping size to như mình gọi là 25k còn có các loại từ 15-20k nữa nhaa💁🏻♀️', 8, NULL, 15000, 25000, 'img/doan/n2.jpg', '2021-01-04 06:23:15', 3),
(9, 1, 5, 11, 'Số 112', NULL, NULL, 'Bánh mì cô Thắm', 'Bánh mì ở đây thuộc dạng siêu “nhân” các bác ạ nhiều nhân lém lun ý. Vỏ bánh ở đây được ép giòn rụm cắn nghe thấy tiếng vỡ hấp dẫn lém thơm mùi bột mì vị hơi khác khác so với các quán khác nhé😉\r\nNhân gồm pate, ruốc, thịt nguội, xúc xích tỏi, dăm bông,... rau thơm, dưa chuột cả củ cải với cà rốt muối nha các bác tha hồ chọn nhé. Pate thì thơm mùi gan béo ngậy không bị tanh nhé, nhấn mạnh lại với các bác là ở đây đúng là siêu nhìu nhân luôn nhìn qua ép tưởng bé bé, ít ít nhưng mà cũng được kha khá thịt nguội rùi giò các thứ các thứ đó😁\r\nĐồ muối ăn kèm trong bánh mì vừa phải ăn đưa mồm cực kỳ luôn ý. Chưa kể ở đây menu đồ uống khá phong phú, tui gọi trà ổi hồng với cả sữa tươi khoai lang tím hơi ngọt với tui nhưng không biết các bác như nèo. Ở đây có cả ship nhá nên là cả nhà không phải lo việc nắng nôi lại phải thò mặt ra đường đi ăn đâu, alo là có bánh liền à🙆🏻♀️\r\n(sđt ship: 070.668.6666 - 070.442.9999)', 9, NULL, 18000, 25000, 'img/doan/n4.jpg', '2021-01-04 06:26:08', 0),
(10, 6, 13, 10, 'Kiot số 5 ngõ 298', NULL, NULL, 'Tiệm cô Mây', ' đây menu có khá nhiều món cho các bác lựa chọn lắm, nào là chim quay, nem chua, khoai tây chiên, cút lộn xào me, chè rau câu, xôi,... nhiều lém các bác ơi cơ mà hôm nay bọn tôi chỉ gọi có: nem chua, khoai tây chiên, gà xiên chiên, chè khúch bạch thập cẩm, caramen trân châu và món mới chim cút quay thui vì trông bàn bên cạnh ăn hấp dẫn quóoo🤤 Quán bán cả xôi, bánh mỳ, mì,... nên ai ở gần đây ra ăn sáng cũng được nha👍\r\nNem chua vs cả khoai tây chiên vừa phải không bị ngập ngụa mỡ ăn món này lúc nào cũng vào ý. Phần gà xiên chiên thì lấy thịt từ phần ức gà, tưởng là bị bở cơ mà ăn lại rất mềm nha, không sợ bị khô quá nhé ăn vào phết.\r\nVề phần chim quay ở đây có vị ướp đặc biệt và lạ hơn các chỗ khác, vẫn có lá móc mật mùi thơm ghê cơ, phần da thấm tầm ướp nên đậm đà và giòn, bên trong thịt lại mềm mịn ngọt thanh ăn được lém các bác ưiii, quán mở từ sáng cơ mà món chim quay thì sau 16h mới có nha.\r\nThêm 2 bát chè nữa, caramen trân châu lá dứa, caramen siu mềm mịn và thơm mùi sữa ngọt, bát đầy ự có viên rau câu to cùng trân châu và các loại thạch. Bát chè khoai dẻo cũng đầy ắp, cả 2 loại đều có nước cốt dừa thơm thơm, ngọt ngọt ngon ngon tráng miệng quá là ưng luôn á 🥺\r\n', 9, NULL, 8000, 35000, 'img/doan/n5.jpg', '2021-01-04 06:32:28', 11),
(11, 13, 9, 10, 'Nhúng Quán - Số 16 Ngõ 298', '10:00:00', '23:00:00', 'Bò nầm viên nướng nhúng sốt', '📍Ui đỉnh đỉnhhh quán nướng nhúng sốt chân ái của mình mới update thêm các loại viên nướng cùng sốt nàyy😻 Cứ tưởng mấy viên này chỉ thả lẩu mới hợp ai dè nhúng sốt xì xèo cũng mê vchuongg. Kiểu nướng cho xém xém săn mặt ngoài bên trong ngập nhân trứng cua, nhân phomai chảy kéo sợi béo ngậy tất cả hòa quyện cùng sốt keo sánh. Về sốt thì mình thường gọi sốt me chua ngọt hoặc sốt tiêu tỏi dậy vị thơm thơm hợp khẩu vị nhất. Ngoài ra thì nầm bò các loại nướng nhúng sốt vẫn luôn ngon nha. Thịt ngấm vị sốt đậm đà ăn ko cần chấm gì, cuộn cùng chút xà lách và kimchi giòn tan vừa đỡ nhanh ngán vừa bon mồm hơn🤤 Mình đi 3ng gọi set nướng nhỏ 159k, thêm đĩa bắp bò, xúc xích phomai, viên phomai, viên trứng cua từ 49-79k/đĩa, ngô chiên 40k. Quán có điều hoà mát mẻ, chỗ ngồi thoáng.\r\nNói chung thịt thà nầm bò dẻ sườn nướng thì cũng nhiều chỗ có, mà viên thả lẩu nướng thì mới thấy mỗi đây, lại còn là nướng cùng sốt ngon ngon nữa chứ, mn thử xem có bị mê giống mình ko nhaa :))\r\n', 10, 150000, NULL, NULL, 'img/doan/n6.jpg', '2021-01-04 06:32:28', 6),
(12, 12, 9, 16, 'Miss Homemade 2 - Số 82', '08:00:00', '23:00:00', 'Chảo bạch tuộc xào mỳ tok phomai, lẩu tok, chảo mỳ xào Hàn Quốc', '📍Một trong những quán đồ Hàn xinh nhứt khu Đống Đa đây. Còn ai chưa kịp set kèo tụ tập trung thu thì nhào hết dzô đây làm bữa muộn nàoo💪💪 Đúng team nghiện mỳ đi với nhau, gọi 3 món món nào cũng phải có mỳ mới chịu được😂 Nồi lẩu tok đầy đặn nhất, có ba chỉ bò, viên thả lẩu, xúc xích, chả cá, tok béo ú... Nước lẩu đậm đà cay ngọt, mà ko bị cay quá đâu nha dễ ăn lắm. Chảo bạch tuộc ngon nhưng hơi ít bạch tuộc, vẫn là mỳ Hàn sợi to dai dai phủ lớp phomai beo béo ngậy thơm bên trên, tok béo rồi khoai, ca rốt, vì là chảo xào nên phần nước sền sệt và có phần ngấm vị hơn bên lẩu, ăn cũng xuýt xoa hơn chút. Chảo mỳ xào là món cay nhất trong 3 món, đợt này quán còn giảm cay đi chút chút cho vừa khẩu vị hơn đó. Mỳ Hàn mềm mềm dai dai ngấm đẫm sốt xào sánh đặc cay tê tê ăn phê đứ đừ, đi kèm có khô gà thơm thơm đặc trưng, nguyên miếng chả có to đùng ăn nó đã miệng, rồi cả thanh cua nữa. Đặc biệt nhất là tok quán dùng đúng tok xịn to to béo ú dai dai, đun lâu cũng ko bị nhũn nát ăn vẫn rõ là ưng lun. Chảo mỳ 52k, chảo bạch tuộc xào 165k, lẩu tok 175k.\r\nKhông gian bên cơ sở này tông hồng chủ đạo, trông quán tựa tựa bể bơi xinh xinh độc đáo, đi đông người hay liên hoan có tầng 4 ngồi riêng thoải mái lun. Còn bên cơ sở 71A Hồng Mai thì tông trắng tiểu thư nhẹ hàng hơn bên này nha.\r\n', 10, NULL, 52000, 175000, 'img/doan/n7.jpg', '2021-01-04 06:36:06', 3),
(13, 13, 10, 2, 'Ốc Trang Hải Phòng - Số 114 D1', '11:00:00', '23:00:00', 'Ốc luộc, thưng hấp Thái, móng tay xào bơ tỏi', '📍Tháng nào ko ra quán ốc quen đóng họ là bứt rứt ko chịu được🤣 Cơ bản là ngon giá rổ hạp lý lại tiện ngay gần công ty, mà đi càng đông lại càng rẻ cả thử được nhiều món. Bữa này mình đi 3ng gọi ngao trắng và thưng hấp Thái, ốc mít luộc, móng tay xào bơ tỏi, cút lộn xào me. Thề là cái nước hấp Thái ở đây chua cay ngọt thơm mê đắm lắm nên lần nào mình cũng phải gọi, ngao trắng rẻ vô địch trong số các quán ốc có 25k/bát đầy đặn, thưng thì hên xui tuỳ bữa to nhỏ đúng bữa nay trộm vía to múp đều, ăn rõ giòn ngọt thịt. Ốc móng tay sốt bơ tỏi cũng tươi nè, làm sạch sẽ ăn ko bị sạn, sốt bơ tỏi ngậy thơm có cả ngô ngọt ăn vui miệng. Cút lộn xào me chua ngọt đậm đà. Chấm bánh mì vào sốt me hay sốt bơ tỏi đều đưa tay hết. Cút lộn 25k, ốc mít 60k, thưng hay móng tay 100k, 3ng chia nhau tầm 100k/ng thuii.\r\nQuán nằm ở mặt đường ĐVN, nhìn chếch chếch Circle K Hồ Đắc Di là thấy nha.\r\n', 9, NULL, 25000, 100000, 'img/doan/n8.jpg', '2021-01-04 06:42:31', 0),
(14, 12, 1, 17, 'Số 230 Ngõ Chợ Khâm Thiên', '16:00:00', '22:00:00', 'Nem chua rán, lạp xưởng, phomai que', '📍Nhân một chiều tan làm bị siêu thèm ăn vặt nên rủ ngay đứa em đi ăn liềnn. Đây là quán nem chua rán phomai que nổi tiếng Ngõ Chợ Khâm Thiên, các bạn nhỏ khu này chắc nhẵn mặt đây lun rùi nhỉi🙋🏻♀️🙋🏻♀️ Menu chủ yếu các món chiên rán cơ bản. Mình gọi nem chua rán, lạp xưởng, phomai que, bánh mì que và khoai chiên lắc pmai. Nem chua bọc bột chiên xù giòn ngoài dẻo trong, chấm cùng tương ớt vắt quất chua chua cay cay ăn ngon hơn hẳn lunn. lạp xưởng mềm thơm ăn cũng ngon, hết mình lại gọi thêm mấy cái nữa ăn tiếp. Phomai que đẫm phomai béo ngậy bên trong. Có bánh mì que là chán nhất, bánh giòn mà kiểu giòn cứng cơ theo mình ko nên gọi đâu nhaa :)) Quán nằm trong ngõ chợ nên để xe cũng hạn chế. Bên trong nhà bé và hơi bí chút. Menu món ở ảnh cuối, hôm đó 3 đứa cả ăn cả uống trà quất các thứ hết 150k💸', 9, NULL, 5500, 15000, 'img/doan/n9.jpg', '2021-01-04 06:42:31', 2),
(15, 12, 2, 18, 'Chick Garden - Số 105C3', NULL, NULL, 'Chè bưởi siêu cùi, tàu hũ, khoai dẻo', '📍Từ lần ăn chè với tàu hũ ở đây xong thấy mê là lượn qua ăn tiếp suốtt😆Chè bưởi ở đây nhiều cùi thật sự ý, cùi bưởi miếng to giòn ngon, cốt chè trong vắt màu nâu cánh gián đậm đúng chuẩn nấu đường thốt nốt, độ ngọt vừa phải và không bị quá nhiều đậu xanh, quán có bán chè bưởi theo cân lun nhaa :)) Tiếp là món tàu hũ, ở đây có 2 vị là tàu hũ trắng và tàu hũ cacao mix cùng đủ loại khoai dẻo, trân châu... tàu hũ ca cao thơm thơm đắng nhẹ, núng na núng nính rõ iuu, ăn thơm béo mướt mát tan trong miệng. Đặc biệt là tàu hũ cũng ngọt vừa dễ ăn😋 Chè khoai dẻo ở đây thì chắc mn cũng chẳng lạ gì. Mình thường hay gọi khoai dẻo pudding xoài hoặc khoai dẻo caramen, bát đầy đặn ăn mãi ko hết. Giá chè khoai dẻo 25-29k, chè bưởi 25k, tàu hũ từ 25k. Ở đây có cả các món ăn vặt như khoai chiên, nem chua, chân gà.. Cơ sở 2 ở 6 Nguyễn Phong Sắc ship trên Now, GrabFood, Go Viet nếu ngại tự đi nháaa! (ship 098 669 4416)', 10, NULL, 25000, 30000, 'img/doan/n10.jpg', '2021-01-04 06:46:55', 1),
(16, 13, 4, 8, 'Onama Steak - Số 17 Ngõ 82', '10:00:00', '21:00:00', 'Mỳ bò cay, bò Úc áp chảo', '📍Tiếp tục chuyên mục nằm nhà order cả thế giới nhấ. Tăm tia quán này cũng lâu rùi vì trông hay hay ngon ngon, bữa nay mình gọi thử mỳ bò cay và bò Úc áp chảo là 2 món chủ đạo của quán, thêm cả suất mỳ riêng nữa tại sợ đói :”> Gọi ship về nhận đồ y hệt ảnh check in ở quán lun, đựng hộp giấy chắc chắn, đồ vẫn đẹp mắt ko bị xộc xệch xíu nào. Ui ưng mỳ bò cay lắm nàyyy, sốt cay quyện đều thấm đẫm sợi mỳ mềm dai chín tới lại có thêm cả bò áp Úc mềm mềm xen tí gân sần sật dai nhẹ, thịt nhiều chứ ko phải kiểu lướt vội qua hàng thịt đâu, đính kèm thêm chút rau củ luộc để đỡ ngán. Mình thấy suất mỳ bò cay này hợp lý thật sự👌🏻 Suất bò Úp áp chảo thì gồm bò, khoai tây chiên và rau củ luộc. Bò vẫn ngon mềm như ở suất mỳ, cơ mà ăn cùng khoai ko mê bằng ăn cùng mỳ heheh. Về phần sốt có 3 loại, mình chọn sốt chanh và sốt tiêu ăn đều thấy ngon, nhất là sốt chanh the the thơm thơm ăn lạ lạ. Điểm cộng đồ uống dùng ống hút giấy. Các suất mình gọi đều là size L giá 69-75k, có thể gọi combo kèm cả đồ uống rẻ thêm đc xíuu, menu chi tiết mình để ảnh cuối. Quán có cả trên Now và Grab nữa nhaa💁🏻♀️ (ship 0363 191 000)', 10, NULL, 55000, 79000, 'img/doan/n11.jpg', '2021-01-04 06:48:59', 0),
(17, 13, 4, 19, 'Số 53', '11:00:00', '22:00:00', 'Ramen Mì Nhật', 'Mới tìm đc hàng ramen ngay Ô Chợ Dừa ăn hơi bị oke luôn nên phải review ngay nè. Quán có 1 tầng thôi, không gian hơi nhỏ một xíuu. Menu có khá nhiều loại ramen nhưng mình gọi loại số 2 Tan-Tan Men 89k với loại số 3 Shio Ramen 70k để thứ nè, à gọi thêm há cảo với cả gà chiên nữaaaa. Sợi mì ở đây là sợi mì tươi, dẹt chứ kp sợi tròn nha, mà ăn ngấm vị với mềm ko bị trợ tuột đâu. Loại số 2 hơi cay nhẹ một chút, nước dùng thơm beo béo ngon phết, à có trứng ngâm tương ăn cùng nữa mê ơi là mê, trứng lòng đào sánh sánh ăn cuốn cực. Loại số 3 là loại mình thích nhất, nước dùng từ đậu nành ăn ngậy lắm, mì ở đây ko bị mặn cũng ko nhạt vừa ăn lắm nha, ngoài trứng ra có một miếng thịt nữa nhưng cũng hơi ít nên phải gọi thêm đồ ăn ngoài mới đã nhá. Gà chiên giòn giòn, ăn hợp cực luôn nháaaaa. Nói chung tui thấy oke đó nên mng ghé thử xem sao nha ❤️', 9, NULL, 79000, 89000, 'img/doan/n12.jpg', '2021-01-04 06:51:07', 0),
(18, 13, 9, 5, '16 ngõ 59', NULL, NULL, 'Lẩu Phan', 'Đi thị tẩm set lẩu hơi mới của Phan đây, hssv bọn mình thì ai mà chẳng một lần tới đây ăn rồi nhỉ, giá rẻ mà đồ cũng oke phù hợp với giá nữa, nhớ đợi trước liên hoan hay sinh nhật đứa nào là đều kéo nhau ra đây ăn. Trước mình hay ăn buffey set 199k vì nhiều đồ nhất, lại là buffet nên ăn thoải mái luôn. Tới đây thì cứ nước lẩu thái hoặc nước lẩu kim chi mà ăn thôi nhaaa. Lần này có set lẩu hơi mới, toàn hải sản tươi giòn, giá gốc thấy 299k mà đnag đc giảm còn 160k thôi. Set này có 5 tầng lận, râu mực sa tế, hàu sốt hồng xíu, ngao hoa hồng xíu, ngao trắng sốt sambal và ba chỉ bò kim chi. 5 tầng đc đặt trên nồi lẩu luôn, khói nghi ngút nóng hổi ăn thích phết. À set 199k còn mới có bò siêu mềm, món này tui thích nè, bò mềm, ngọt, chấm sốt ngon lắm nha. Có thêm cả, cá hồi, mực ống nữa, so với phân khúc lẩu sv thì tui yhaasy mỗi Phan có hay sao ấy, mng ghé thử nhaaaa.', 8, 160000, NULL, NULL, 'img/doan/n13.jpg', '2021-01-04 06:53:59', 0),
(19, 1, 1, 20, 'A8 Chợ Nam Đồng', '15:00:00', '21:00:00', 'Trứng chén nướng', 'Biết quán này lâu rồi nay mới có dịp thử nè, mng đi thẳng vào chợ Nam Đồng tìm A8 là thấy ngay. Lúc mình đến trời vẫn sáng mà tại quán đông quá chờ lâu nên cũng tờ mờ tối rồi. Ngoài các loại trứng chén nướng, vịt lộn nướng còn có cả các loại bánh tráng và bắp xào nữa. Bọn mình đi 2 đứa gọi 3 trứng chén, 2 vịt lộn và 1 bắp xào phomai cũng đầy đầy cho 1 bữa ăn vặt buổi chiều. Trứng chén nướng (15k) khá ngon, mình thấy ngon hơn cô Ty, trứng béo ngậy cùng tép, bò khô đậm đà phết, muốn đậm hơn thì cho thêm sốt me và tương ớt thêm nữa. Trứng vịt lộn (10k) cũng oke, món này cho thêm sốt me vào sẽ hợp lý hơn nhé. Bắp xào trứng muối (30k) 1 bát khá đầy, bắp ở đây là bắp mỹ ăn giòn ngọt, xào cùng với tóp mỡ, tép và trứng muối cắt miếng, bên trên còn phủ 1 ít trứng muối vụn nữa, món này m thấy ngon nhất nhưng vì ra sau nên k kịp chụp. Tổng kết quán này khá đáng thử nha.', 9, NULL, 15000, 30000, 'img/doan/n14.jpg', '2021-01-04 06:53:59', 0),
(20, 1, 1, 1, 'Số 276', NULL, NULL, 'Hadu sushi', 'Chắc các bác k còn lạ lẫm gì với quán này rồi, quán tủ của tui nèee. Ở đây không những không gian đẹp mà đồ ăn còn được bày rất đẹp mắt nữa, menu thì siêu nhiều món nên kể cả những được k ăn được 1 số loại sashimi vẫn có thể thoải mái chọn lựa nè. Hôm nay đi 2 người nên gọi set 767k gồm salad hoa quả, set sashimi (cá hồi, các trích, sò đỏ) sushi (cá hồi mentai, tôm và lươn), mai cua sốt phomai (món này must try nhá) và cuối cùng thì được chọn 1 trong 3 món là cơm ranh cá hồi, gà chiên, lẩu. Mấy loại sushi ở đây ăn đưa miệng dã man luôn, ngon nhất là cá hồi mentai, kiểu cá hồi được khò tái rồi rưới 1 lớp sốt siêu đẫm ở trên, nhắc đến lại thèm rồi này. Sashimi tươi rói, thịt cá hồi béo múp míp luôn, mê tơi. Các bác nên thử mai cua nướng sốt phomai cay ở đây, món này mới có này nên hôm nay t mới được thử, thịt cua bóc nhỏ cùng trứng cút, trứng cua và sốt phomai ngậy béo hơi cay nhẹ 1 chút, ăn lạ mà ngon phết. Cơm rang phomai đựng trong bát đá sắt nên vẫn nóng hổi tới hạt cuối cùng luôn. Sau khi ăn no vỡ bụng thì được tráng miệng bằng mochi nước hoặc dưa hấu mát lạnh thì còn gì bằng.', 10, 767000, NULL, NULL, 'img/doan/n15.jpg', '2021-01-04 07:03:20', 0),
(22, 2, 1, 12, '111B4', NULL, NULL, 'Bánh mì nướng Lạng Sơn ', '1 suất đầy đủ 25 cành bao gồm bánh nướng, 1 xiên thịt vs 1 cái chúc chích. Mình team xôi thịt nên gọi thêm mỗi suất 2 xiên cho ú ụ ăn no luôn. Thịt xiên rất ngon, mỡ giòn ko ngấy, tẩm ướp vừa vặn nhưng mình vẫn mong đợi cái gì đó đặc biệt hơn, kiểu nướng với lá móc mật chẳng hạn. Nước chấm có vị chua-cay-ngọt rắc thêm rau gì đó thơm lắm. Bánh mì giòn. Có dưa chuột với nộm ăn giải ngấy. Ai ko rảnh ngồi ăn thì quán bán cả bánh mì kẹp mang đi luôn.Tổng kết là ưng cái miệng, nên thử 🤤 có thêm lạp sườn nướng nữa thì đóng họ nhiều luôn nà', 8, NULL, 10000, 55000, 'img/doan/banh_mi_nuong_lang_son.png', '2021-01-04 09:29:19', 0),
(23, 5, 5, 21, 'Số 2, ngõ 16', '06:00:00', '21:00:00', 'Bánh cuốn Cao Bằng', 'Phần nhân ở đây hơi khác bánh cuốn HN là chỉ có thịt băm chứ ko thêm mộc nhĩ hành các thứ khác. Nước chấm cũng là nước hầm xương ăn ngọt ngọt lạ lắm ấy, gọi bánh cuốn trứng được để luôn trong bát xong còn thêm que giò nữa. Ăn kèm có măng chua chua giòn giòn đưa miệng lắm. Các bác nhớ thử nha tui thấy lạ miệng mà ngon đó!!', 9, 35000, NULL, NULL, 'img/doan/banh_cuon_cao_bang.jpg', '2021-01-04 09:35:14', 0),
(24, 1, 13, 20, 'Khu A8', '15:00:00', '21:00:00', 'Trứng chén nướng', 'Huhu món ăn vặt siu đỉnh của mùa đông đây òiii. Chỉ mỗi tội hàng này ko đỉnh thui ạ =))) Ăn gọi là được được oki vui mồm chứ tui là tui thích trứng chén nướng ở Nguyễn Quang Bích hơn nhìu ý. Ở đây mỗi chén trứng cút nướng là được 4 quả nha, rồi thêm hành lá, tôm khô, xúc xích rồi sốt me nữa nè, mà sốt me ở đây chưa được đậm vị chua ngọt lắm. Ăn xong trứng chén nướng tui có làm thêm cả đĩa ngô xào trứng muối với cả bánh tráng tráng cuốn nữa ăn xong no díu lun à. Nói chung ăn vặt Đống Đa thì ra đây cũng được đỡ phải đi xa nha.', 8, NULL, 10000, 30000, 'img/doan/trung_chen_nuong.jpg', '2021-01-04 09:43:13', 0),
(25, 6, 10, 2, 'Số 114 D1', '11:00:00', '23:00:00', 'Ốc hấp', 'Tháng nào ko ra quán ốc quen đóng họ là bứt rứt ko chịu được🤣 Cơ bản là ngon giá rổ hạp lý lại tiện ngay gần công ty, mà đi càng đông lại càng rẻ cả thử được nhiều món. Bữa này mình đi 3ng gọi ngao trắng và thưng hấp Thái, ốc mít luộc, móng tay xào bơ tỏi, cút lộn xào me. cái nước hấp Thái ở đây chua cay ngọt thơm mê đắm lắm nên lần nào mình cũng phải gọi, ngao trắng rẻ vô địch trong số các quán ốc có 25k/bát đầy đặn, thưng thì hên xui tuỳ bữa to nhỏ đúng bữa nay trộm vía to múp đều, ăn rõ giòn ngọt thịt. Ốc móng tay sốt bơ tỏi cũng tươi nè, làm sạch sẽ ăn ko bị sạn, sốt bơ tỏi ngậy thơm có cả ngô ngọt ăn vui miệng. Quán nằm ở mặt đường ĐVN, nhìn chếch chếch Circle K Hồ Đắc Di là thấy nha.', 8, NULL, 25000, 100000, 'img/doan/oc_hap.jpg', '2021-01-04 09:46:44', 0),
(26, 12, 4, 22, 'Loan Hồ - 34', '06:30:00', '10:30:00', 'Bún dọc mùng mọc thịt', 'Ở đây có bún dọc mùng ăn kèm thịt-sườn-lưỡi-móng-mọc. Hnay tui ăn hết lưỡi hơi tiếc. Nên gọi đầy đủ các phần còn lại, và order thêm bát rau giá 50k. Phần mọc và móng là tui mê nhứt. Mọc thịt nấm hương cùng chun chút tiêu nhẹ. Móng ninh rất nhừ siêu dễ gặm. Sườn thì để miếng hơi to qué còn thịt lại cắt hơi mỏng, được cái đều oki. Nước dùng ổn, thanh ngọt vừa miệng, tuy không xuất sắc lắm. Dọc mùng làm khá kĩ. Nước chấm có xì dầu ớt tỏi thui, pha chưa khéo bằng bên Ngô sĩ liên hay Đoàn thị điểm. Ăn lại cũng oki vì khá tiện đường nạ', 8, NULL, 40000, 60000, 'img/doan/bun_doc_mung_moc_thit.jpg', '2021-01-04 09:51:51', 0),
(27, 13, 13, 23, 'C5 Lương Định Của', NULL, NULL, 'Xiên gà', 'Nem chua rán nóng hổi, giòn rụm, dai dai. Thích meeee.Tiếc là gà tẩm ướp nồng quá, chấm tương ớt tương cà xong ăn hơi ngang.', 8, NULL, 6000, 8000, 'img/doan/xien_ga.jpg', '2021-01-04 09:54:52', 0),
(28, 7, 4, 19, 'ngõ 16, Hoàng Cầu', '11:00:00', '14:00:00', 'Bún chiên lòng nướng', 'Suất đầy đủ là 50k, gồm lòng nướng, đậu rán và bún (có 2 loại bún thường và bún chiên) mình gọi bún chiên, cơ mà ăn miếng đầu ok đấy nhưng sau hơi ngấy nha, còn bị dính răng nữa cơ, sau đó lại phải gọi thêm đĩa bún đậu thường để ăn. Lòng nướng 1 đĩa nhiều phết, dồi nhiều đậu xanh quá nên hơi bở. Chả cốm thì ăn ok, miếng to cắn đã miệng. Ngoài ra còn có giả cầy, xung quanh chủ yếu là khách văn phòng thôi, vì quán ngõ ngách kphai ai cũng biết. Được cái cô chú chủ quán nhiệt tình thân thiện lắm luôn', 8, 50000, NULL, NULL, 'img/doan/bun_chien_long_nuong.jpg', '2021-01-04 09:57:46', 0),
(29, 2, 4, 19, 'Lẩu Thái & Bún hải sản -40 Hoàng Cầu ', '09:00:00', '23:00:00', 'Bún Thái hải sản', 'Bún hải sản ở đây nhìn ngon mắt lắm ấy, ngoài tôm nõn, bề bề, cá rán còn chả cá và hẳn cái càng cua to bự nữa nha. Càng to đỏ au, ngọt thịt, bề bề, tôm cũng tươi lắm. Nước chan bún vị như nước lẩu thái ấy, chua chua cay cay vừa miệng. Bát 50k nhưng xứng đáng với chất lượng ăn cũng no lâu lắm đấy', 8, NULL, 50000, 100000, 'img/doan/bun_thai_hai_san.jpg', '2021-01-04 10:01:50', 0),
(30, 4, 5, 4, 'A0 Chợ Nam Đồng, Ngõ 119 ', '06:00:00', '23:00:00', 'Bánh cuốn trứng', 'Trong khu Hồ Đắc Di có tiệm bánh cuốn nhỏ đã bán 10 năm có lẻ, rẻ mà ngon nhé. Nhiều khách quen đi đâu cũng chỉ thích quay lại đây thưởng thức cái vị bánh cuốn vỏ mỏng mướt, nhân ắp đầy thịt mộc nhĩ này đây. Nước chấm chua ngọt vừa vặn kèm theo chả quế mềm ngon. Nhớ gọi thêm suất bánh cuốn trứng béo ngậy nếu đi 2 người nhé.', 9, NULL, 10000, 30000, 'img/doan/banh_cuon_trung.jpg', '2021-01-04 10:05:11', 0),
(31, 3, 4, 19, '53 Hoàng Cầu', '11:00:00', '20:00:00', 'Mỳ bò Đài Loan', 'Quán mỳ bò ngon bất ngờ lun, mấy ce thấy mới mở nên đi thử. Ở đây đồng giá 3 loại mỳ đều 55K: Mỳ bò Đài Loan, Mỳ xá xíu Hongkong và Mỳ sườn Singapore. Đặt tên cho vui chắc zậy tại tui thấy nước dùng 3 tô hệt nhau à :)). Thế nhưng nước dùng ấy thực sự rất ngon, mới đi qua nồi nước dùng thui mà mùi thơm quyến rũ ấy khiến tui không cưỡng lại nổi. Và theo tui nên ăn bò nhất nhé vì ngấm vị ninh kĩ nên đỉnh cao lắm nè. Tô mỳ bò là có xương, thịt thái dày miếng, gân nữa và được ninh nhừ ngấm vị mềm mọng tan trong miệng. Mỳ sườn siêu cấp nhiều thịt luôn, có cả sườn sụn nữa, cũng ninh nhừ rất ưng. Xá xíu thì lệch tông nhất cơ mà bạn có thể thử. Điểm trừ nhỏ là hông có dưa muối kiểu Đài ăn kèm. Nêm nếm gia vị thì có thêm dầu ớt Tàu nữa nhé.', 9, 55000, NULL, NULL, 'img/doan/my_bo_dai_loan.jpg', '2021-01-04 10:10:46', 0),
(32, 9, 4, 24, '11 Bích Cầu', NULL, NULL, 'Bún ngan', 'Quán bún này nằm ở mạn phố Bích Câu, ngay gần trục đường Cát Linh nha mng. Quán chỉ bán từ sáng sớm đến gần trưa nên sáng nào cũng siêu đông ý. Quán bán bún miến mỳ ngan, chỉ có ngan thui chứ không có mọc hay gì khác đâu nha. Nước dùng của quán thanh ngọt nhẹ, thơm mùi măng khô ý. Măng ở đây là măng khô miếng, được ngâm kĩ không bị hôi, ăn giòn nè. Một bát thì siêu siêu nhiều thịt, miếng tiết thì mềm núng nính luôn. Ăn xong 1 bát này là no đến trưa luôn. À mình thích ăn gan nên có gọi thêm ngan nữa và cũng siêu ngon vs thơm chứ không có mùi gây', 9, NULL, 30000, 40000, 'img/doan/bun_ngan.jpg', '2021-01-04 10:13:11', 0),
(33, 8, 4, 10, 'Bún Ngan Chặt Chị Hòa - Đầu ngõ 178 ', '07:00:00', '14:00:00', 'Bún ngan chặt', '-	Mình thấy 1 bát ở đây siêu rẻ mà lại chất lượng lun. 1 bát bún ngan đầy ụ, nhiều thịt. Thịt ngan dai mềm ăn cùng với măng chua, rau sống, lạc... Nêm nếm thêm gia giảm, xì dầu, giấm ớt các thứ rồi trộn đều hết lên, đúng hợp luôn á. Bên cạnh có thêm rổ rau sống và bát nước dùng to ụ. Nước dùng đậm đà ngọt thanh làm tui húp hết sạch luôn. Lần sau chắc ra thử nốt bún nước nữa xem sao. Bún ngan trộn có 25k thôi, nếu gọi bún ngan chặt thì là 40k nha', 9, NULL, 25000, 40000, 'img/doan/bun_ngan_chat.jpg', '2021-01-04 10:16:52', 0),
(34, 10, 4, 10, 'Ngõ 178 ', '08:00:00', '14:00:00', 'Bún riêu', 'Ui từ lúc ăn ở đây xong lại nghiện bún riêu ạ. Bún riêu ở đây cũng như mọi quán khác thui, có thịt bò chín tới, đậu rán, giò mềm ngon, chút riêu cua béo ngậy. Mình gọi thêm 1 quả trứng vịt lộn ăn cùng chất lượng lun. Sợi bún tươi, cho 1 chút rau sống ăn kèm cùng gia vị, giấm ớt nêm nếm vào là chén thui. Nước dùng ngọt thanh vừa miệng cực, ai ăn nhạt thì cũng chả cần phải nêm nếm gì luôn. Hôm nay hết ốc mất rồi nên lần sau mình sẽ ra sớm hơn 1 chút để thử, ngoài ra còn có cả miến và bánh đa nữa nha', 8, NULL, 25000, 45000, 'img/doan/bun_rieu.jpg', '2021-01-04 10:19:16', 0),
(35, 14, 13, 25, 'số 5 ', '16:30:00', '23:30:00', 'Cánh gà nướng', 'Quán Chân Gà Thịnh Vượng số 5 có lẽ là mình hay lui tới nhất trong cái ngõ này. Đặc biệt, có món Rau Muống Muối giòn giòn chua ngọt ăn mê lắm, có khi còn nghiện hơn cả chân gà nướng. Lâu lắm mới ăn lại nên nay gọi đồ hơi đầy đặn chút xíu hihi. Chân, cánh ở đây trông có vẻ cháy nhưng không bị khô đâu, tẩm ướp gia vị khéo lắm, vị mật ong rõ lắm luôn nên nhìn vào thấy nó sẽ hơi bị xém xém nha. Tui lười gặm nên chỉ thích ăn cánh cho nhiều thịt 🤣', 8, NULL, 12000, 24000, 'img/doan/canh_ga_nuong.jpg', '2021-01-04 10:30:22', 0),
(36, 4, 4, 26, '149 ngõ Thái Thịnh 1', NULL, NULL, 'Miến lươn trộn', 'Trong 3 món nước, xào, trộn thì mình thích trộn nhất 🥰 vì miến trộn ở đây dùng sợi miến tươi Hàn Quốc, ăn dai dai quyện sốt ngon lắm ạ, nó không bị bết như miến thường. Sốt trộn chua ngọt bắt miệng xong có cả dưa chuột giòn, cảm giác fresh cực 😂😂. Miến nước thì có nước dùng rất ok, nước ngọt đậm luôn nhưng vẫn có mì chính. Ai không thích thì bảo chị chủ đừng cho vào là được. Còn lại miến xào thì mình thấy ổn chứ chưa quá xuất sắc lắm :3. Lươn ở đây có lươn mềm và lươn giòn, mình thì thích lươn giòn nhất ý 😭 quả lươn giòn tan ăn sướng mồm như kiểu nhai snack ý 🤣🤣 mình thấy có mấy bạn bảo gọi ship lươn về ăn bị vụn, thế thì hãy đến quán ăn trực tiếp như mình vì chưa bao giờ bị vụn nha :)))', 9, 40000, NULL, NULL, 'img/doan/mien_luon_tron.jpg', '2021-01-04 10:33:32', 0),
(37, 3, 11, 5, 'Số 1 ngõ 20', '10:00:00', '20:00:00', 'Kem dừa nguyên trái', 'Được hôm trời lạnh lại đi ăn kem ☺))). Lúc mới bước vào quán đập vào mắt là quán thật sạch sẽ, giá cả cũng rất phải chăng. Chủ quán là người Đồng Tháp nên kem ngon khỏi bàn☺)). Thạch dừa man mát, cảm giác như từng miếng trôi luôn xuống họng. Kem dừa thì có nhiều loại từ loại vani dừa, dâu hay sầu riêng tùy bạn chọn ( tui thấy vị nào cũng ngon hết xẩy ). Quan trọng là ăn xong còn được cạo cùi dừa ngậy ơi là ngậy\r\n', 9, 30000, NULL, NULL, 'img/doan/t1.jpg', '2021-01-04 14:55:01', 0),
(38, 16, 6, 5, ' Số 31i', '10:00:00', '20:00:00', 'Cơm gà hải nam', 'Nói thế nào nhỉ? Món ăn ở đây mình đã ưng từ cách bày trí rồi ☺)). Bày biện món ăn khá là lịch sự, đầy đặn nha!. Mình rất thích cơm ở đây nhé, mềm mà đc nấu bằng nước dùng gà nên dẻo và thơm lắm. Thịt gà cũng mềm, tươi vị, ngọt, mình thích ăn lườn gà nên suất cơm này rất hợp khẩu vị và đặc biệt là vẫn còn lưu lại hương vị sau khi ăn. Đồ chấm cũng siêu tuyệt vời(3 loại gia vị để chấm gà thì nên trộn vào với nhau để được thưởng thức hương vị tuyệt vời nhất nhé ) <3 <3 <3', 8, NULL, 25000, 60000, 'img/doan/t2.jpg', '2021-01-04 14:58:12', 0),
(39, 3, 4, 9, 'Số 42', '15:00:00', '20:00:00', 'Miến lươn giòn', 'Nghe lời con bạn đi ăn thử miến lươn giòn ở đây.Bát miến đối với sức ăn của mình khá đầy đặn, ăn cũng no lắm, sức ăn con trai thì vừa đủ. Nước dùng thanh nhưng quan điểm cá nhân không đặc sắc lắm (có lẽ sẽ có ng bảo đã thanh còn đòi hương vị đặc sắc - :D ). Lươn tẩm bột chiên nên giòn cực kỳ nhưng thành ra lại khô quắt, ko vị(để ý sẽ thấy người ta chiên bằng bột chiên ngô á). Có giá và hành phi trong bát miến. Đúng 2 thứ mình thích ^^ Đúng như bạn mình bảo, lươn giòn để lâu trong nước sẽ thành dai. Do đó ăn chậm thì khó lòng thưởng thức được món này ☺)))\r\n', 8, NULL, 35000, 50000, 'img/doan/t3.jpg', '2021-01-04 14:59:54', 0),
(40, 3, 4, 9, 'Số 1 ngõ 198', '08:00:00', '20:00:00', 'Miến ngan trộn', 'Được hôm thèm ăn miến ngan thì con bạn nó kéo ra đây. Nên khoogn cần suy nghĩ mình gọi luôn miến ngan trộn. Lúc mới nhận bát miến mình không thấy vui cho lắm, vì nhìn nó ít xìu à, lọt thỏm trong bát luôn ☹(((.Nhưng đến lúc thật sự ăn thì ... ai ngờ đâu nhiều lắm lắm, siêu thịt ấy, miến nên nó phèn coi zậy hoy :)). Gây ấn tượng đầu tiên là thịt ngan chắc nịch, thịt ngọt lắm. Với miến nước thì nước dùng ấm sực vị đậm đà đúng kiểu nồi ninh xương ngan lâu và quan trọng hơn cả là nó nóng rẫy, ăn vào ngày lạnh quá thích. Tui là tui rất không vui với quán nào bán đồ nóng mà mang ra chỉ âm ấm, còn ở đây đúng nghĩa nóng sực luônn. Miến trộn vị ngon mà hơi nhạt với tui, thêm chút xì dầu là ổn. Thêm nữa là quán có quẩy nha, giòn ngon hết sẩy lun nạ ☺))\r\n', 8, 45000, NULL, NULL, 'img/doan/t4.jpg', '2021-01-04 15:01:34', 0),
(41, 3, 4, 5, 'Số 14 ngõ 59', '10:00:00', '20:00:00', 'Bún chả Hương Liên', 'Lâu lắm không ăn bún chả rồi, lượn lờ gần nhất thì có chỗ này nên liền thử. Bún chả ở đây nhìn coi sạch sẽ lắm. Một phần cũng mắc hơn xíu so với các quán bình dân khác. Nước chấm cũng khá vừa nhưng nguội ngắt☹((. Mình ăn bún chả lẫn thêm nem cua bể. Nem cua bể thì ngon cực, chuẩn nem với cua kiểu Hải Phòng đó. Nem cua bể ở đây mắc nhưng thịt cua nhiều, đầy đặn lắm chứ không kiểu cho có đâu. Bún chả cũng ngon, thịt nướng thơm mềm. Tuy nhiên không quá đặc sắc lắm.', 9, NULL, 35000, 70000, 'img/doan/t5.jpg', '2021-01-04 15:03:03', 0),
(42, 15, 9, 5, 'Số 108 K1', '10:00:00', '22:00:00', 'Bò nướng BBQ', 'Chính ra hồi xưa Al Fresco có combo sườn cho 1 người này ngon phết, mà từ hồi cơn lốc sườn nướng nguyên cân quét qua Hà Nội thì chả mấy ai đến đây ăn nữa. Mình toàn mỗi đứa một combo xong gọi thêm đĩa salad nữa là no lè lưỡi .Sườn khá róc thịt, sốt ngon mỗi tội nhìn hơi bé không được phồn thực cho lắm. Khoai thì hôm ngon hôm không, hành vòng chiên giòn một cách đáng ngạc nhiên nhưng mình không thích ăn hành tây nên chả mấy khi ăn. Salad vừa miệng.\r\n', 9, NULL, 150000, 330000, 'img/doan/t6.jpg', '2021-01-04 15:05:02', 0),
(43, 16, 9, 9, 'Số 83', '09:00:00', '22:00:00', 'Lẩu 9 tầng mây', 'Quán nằm ở chân cầu vượt trên đường Thái Hà nên suýt nữa mình đã không tìm ra. Lúc vào cửa hàng, gọi suất lẩu 9 tầng mây mà được giới thiệu  áp dụng cho 3-4 người lớn. Vậy mà 2 người lớn ăn cũng thấy vẫn ít mà giá 399k. Ko quá nhiều. Chỉ có thịt bò- thịt gà- chả viên bò. Nhà mình ko thích ăn gà và bò viên nên 2 đĩa này coi như bỏ. Rau thì các em phục vụ bảo phải gọi thêm ngoài vì trong set ko có. Ko hiểu sao set lẩu mà lại ko có rau trong set. Giá đó ko rẻ mà đồ ăn thì chả ra sao cả. Bếp vẫn sử dụng bếp ga nên cảm giác rất nóng.Khong gian ăn chật hẹp và thái độ phục vụ của nhân viên kém làm ảnh hưởng sâu sắc đến khẩu vị của mình', 8, 120000, NULL, NULL, 'img/doan/t7.jpg', '2021-01-04 15:06:31', 0),
(44, 15, 5, 5, 'Số 44', '06:30:00', '22:00:00', 'Bánh mỳ xá xíu ', 'Thứ nhất là dễ mua, vào quán order với nhân viên xong thì chỉ 2-3 phút là nhận được bánh. Thứ hai nữa là giá cả cũng dạt dẻ, chỉ 25 nghìn với 1 chiếc bánh mì xá xíu . Topping trong bánh thì cũng nhiều, đầy đặn. Thịt được tẩm ướp đầy đủ thơm lừng, thích nhất là lần nào mua nhân viên cũng làm cho vỏ bánh thật giòn, đặc biệt là nước sốt ngon tuyệt vời luôn. Nói chung thì ăn xong cũng no lắm no lắm )))', 8, NULL, 15000, 30000, 'img/doan/t8.jpg', '2021-01-04 15:08:43', 0),
(45, 15, 5, 5, 'Số 111', '15:00:00', '20:00:00', ' Bánh tráng cuốn thịt heo Hoàng Bèo ', 'Hôm qua mình và bạn mình đến ăn ở Láng hạ, gọi 3 suất quay, và lúc bạn nhân viên mang ra bọn mình cực shock. Vì miếng thịt chỉ bé bằng 1/2 miếng thịt bt mình ăn, chưa kể có suất còn bị xanh xanh ở mỡ như mốc, mình phải gọi nhân viên đổi lại. Có hỏi vì sao lại bé thế, bạn ấy bảo suất bọn em định lượng như vậy. 70k một suất 6 miếng thịt siêu bé như hình, chưa kể có miếng còn siêu siêu bé và mỏng. Quá thất vọng Bạn nhân viên khá là thái độ khi mình phản ánh miếng thịt bị xanh xanh ở phần da và muốn đổi suất khác\r\n', 9, 35000, NULL, NULL, 'img/doan/t9.jpg', '2021-01-04 15:13:52', 0),
(46, 3, 4, 9, 'Số 2A Ngõ 7', '08:00:00', '22:30:00', 'Bún đậu mẹt', 'Miếng đậu chiên giòn vàng bên ngoài nhưng vẫn giữ nguyên vị béo ngậy bên trong(Đậu luôn được rán ngay sau khi thực khách yêu cầu chứ không rán sẵn- nên nó luôn nóng chứ ko nguội ngắt nhe ☺)))) . Chả cốm bên ngoài giòn bên trong dẻo thơm, thêm cả thịt chân giò, lưỡi, lòng, dồi, gan, dạ dày luộc vô cùng hấp dẫn. Nhân vật chính của món ăn này là bát mắm tôm có vị thơm đặc trưng, sau khi pha chế vừa miệng thêm dầu chiên đậu còn nóng, quất hoặc chanh, mấy lát ớt thái mỏng đánh đều lên, thế là đúng điệu! Bên cạnh là các loại rau ăn kèm hợp khẩu vị như tía tô, kinh giới, giá, dưa leo....Tất cả được trình bày trong chiếc mẹt nhỏ nhắn và bắt mắt. Thật sự chỉ muốn quay lại ăn tiếp!\r\n', 9, NULL, 20000, 50000, 'img/doan/t10.jpg', '2021-01-04 15:15:31', 0),
(47, 3, 4, 29, 'Số 200A ', '09:00:00', '22:30:00', 'Mì vịt quay', 'Được hôm đi chơi nên ghé vào ăn thử. Mì vịt quay phải gọi là khá ngon. Vịt mềm, vị đậm đà, bát được cả cái đùi vịt to, da giòn. Nước dùng trong nhưng ăn lại rất ngọt. trong mì vằn thắn thì có 1 miếng bóng, vài miếng thịt xá xíu, khoảng 3 miếng há cảo, 1 miếng gan, 1 miếng hoành thánh chiên, có cả rau cải nữa. Bình thường mình ghét ăn loại rau đó, nhưng không hiểu sao ăn ở đây lại rất hợp. Nói chung là một cảm giác rất vừa vặn. Hơn thế nữa giá cũng rẻ hơn so với nhiều hàng có món này', 8, NULL, 100000, 330000, 'img/doan/t11.jpg', '2021-01-04 15:19:12', 0),
(48, 16, 11, 7, 'Số 21 Ngõ 62', '09:00:00', '20:00:00', ' Bò nhúng me ', 'Sau khi chờ khoảng gần 10p tôi cũng được chiêm ngưỡng món bò sốt me. Dầu ăn và tỏi bằm bỏ trong chảo gang đặt lên bếp cồn. Bò thái mỏng ngập trong sốt me được phủ một lớp vừng, kèm theo là 1 đĩa rau rừng Gia Rai tươi rói với ít nấm kim chi trắng trang trí bên trên và 1 đĩa bánh mỳ. Khi chảo đã nóng và tỏi thơm mùi ngào ngạt thì bỏ thịt bò cùng nước sốt vào, đảo đều, cho cả nấm và rau vào cùng luôn. Chờ chín rồi măm măm thôi! Lần đầu tiên đi ăn, thật may là có bạn nhân viên rất nhiệt tình hướng dẫn tôi quy trình ăn món này, nếu không tôi cũng lớ ngớ chẳng biết làm sao \r\nNói thế nào nhỉ, sự kết hợp giữa bò – sốt me – rau – bánh mỳ cũng hay ra phết. Nước sốt sền sệt, chua chua, ngọt ngọt nhưng không đến mức thần thánh như trên Lozi đã nói, thậm chí còn hơi mặn so với khẩu vị của tôi. Tôi thích sốt chua hơn 1 xíu cho đỡ ngấy. Thịt bò mềm, thơm và rau rất bùi. Bánh mỳ tươi xốp hơn chút nữa thì tuyệt! 180k cho combo 2 người là khá hợp lý. Tưởng ít mà hóa ra không phải, thật ấm bụng người háu ăn như tôi.\r\n', 9, NULL, 20000, 100000, 'img/doan/t12.jpg', '2021-01-04 15:20:58', 0),
(49, 16, 9, 9, 'Số 44', '10:00:00', '20:00:00', 'Vịt thiết bản', 'Đến ngồi gọi em ơi , gọi mấy câu không trả lời gọi món xong ngồi chờ vêu mõm người đến mua mang về thi bán trước , còn ai chờ cứ việc ☹((((.THỜI GIAN TRÔI QUA RẤT L U THÌ MỚI ORDER ĐƯỢC ! Vịt tẩm cũng được , vừa vặn, khà đầy đặn. 35k/suất này 3 người ăn no đó, tất nhiên vẫn nên gọi thêm bát bún cho chắc dạ\r\n	Đang nguôi nguôi đi thì thái độ của em nhân viên làm mình cáu nên hôm đó được coi là tệ\r\n', 8, NULL, 100000, 220000, 'img/doan/t13.jpg', '2021-01-04 15:23:14', 0),
(50, 3, 11, 9, 'Số 50', '08:00:00', '22:30:00', 'Tào phớ Thập cẩm ', 'Đi đường qua thấy quán đã lâu nhưng bh ms có cơ hội thử.Tào phớ vị rất ổn, thanh mát không bị ngọt quá, cảm giác như hồi nhỏ được ăn tào phớ xe đẩy,. Trân châu dai dai giòn giòn, đậm vị không cứng. Thích ăn trân châu bảo quán cho thêm cũng sẵn sàng và không thêm tiền. Mình hay ăn trân châu lẫn giữa trân châu trắng và đen. thêm hạt é và thạch ăn ngon.Topping đầy đặn , bày biện khá đẹp mắt. Hôm đấy mình đến dù đông khách nhưng nhân viên vẫn khá thân thiện!:)))) ', 9, NULL, 20000, 50000, 'img/doan/t14.jpg', '2021-01-04 15:25:22', 0),
(51, 3, 7, 5, 'Chợ Láng Hạ', '08:00:00', '11:00:00', 'Cháo sườn quẩy ruốc', 'cứ khi nào rảnh là ra làm 1 bát(gần trường mà ☺)), nhất là ăn vào mùa đông thì còn gì bằng!!! Xe cháo của cô chú dựng trên vỉa hè .Có ít ghế lắm, nên hôm nào đông là đứng ăn thôi hoặc ngồi nhờ bục bên hàng thể thao :))), Cháo ngon hết sảy, cháo mềm và mịn, có hôm hơi nhão xíu, cháo k quá loãng, quẩy thì cứng và giòn,ăn giống bim bim.khiến cho tôi ăn mộtbát rồi mà muốn ăn thêm 1 bát nữa ☺))\r\n', 9, NULL, 10000, 15000, 'img/doan/t15.jpg', '2021-01-04 15:27:29', 0),
(52, 4, 6, 30, 'Ngõ 38', '14:00:00', '20:00:00', 'Xôi Sắn', 'Hè mà ăn xôi sắn huyền thoại này vẫn ngon  \r\nMột suất xôi ăn cứ gọi là no đến tối luôn, nhiều dã man. Giá tiền sẽ tùy theo loại xôi mà mình gọi nha.\r\nXôi trộn sắn bùi bùi, hạt xôi dẻo, thơm, không bị nát. Ăn kèm với thịt băm, tóp mỡ, cả giò chả rim nước mắm mặn mặn. Hành phi, mỡ hành đều do cô tự làm cả đấy nên ăn rất thơm, dậy mùi mà đậm đà lắm luôn. Có thêm dưa góp chua chua để ăn bớt ngấy nè. \r\nCô bán hàng cũng dễ thương nữa cơ nên cứ gọi là cắm cọc dài dài.\r\nMỗi tội điểm trừ là không có chỗ ngồi nên đành phải ngồi ké hàng nước bên cạnh, hoặc là kéo ghế ngồi cạnh cô mà trời mùa hè ngồi cạnh chỗ xôi thì \"mát\" phải biết   \r\nChưa kể hôm nào có công an phường đi \"dẹp loạn\" thì cũng ngồi lên xe đóng giả mua mang về \r\n', 8, NULL, 20000, 25000, 'img/doan/(1).jpg', '2021-01-05 16:30:26', 0),
(53, 4, 9, 13, '43', NULL, NULL, 'Quán chay Tịnh Tâm', 'Được dẫn đi 1 quán chay khá là ưng nên về review để các bạn đi ăn vào Rằm, Mùng 1 nè.\r\nỞ đây có cơm suất hoặc mì, bún miến thì rơi vào khoảng 25-50k. Còn nhóm mình gọi lẩu chay gồm lẩu riêu và lẩu thái. Về nước lẩu thì mình ăn nước lẩu riêu thấy đậm vị và dậy mùi hơn, nước lầu Thái có vẻ hơi nhạt. Đồ ăn kèm gồm có rau, đậu, nấm, váng đậu và 1 đĩa gì đó mà không biết tên  \r\nĐiểm cộng của quán là đồ ăn kèm khác cũng ngon: giò chay, nấm kim chiên giòn, dồi chay, và chả cốm viên.\r\nĐiểm trừ là chỗ ngồi trên tầng 2 nóng quá ạ dù có điều hoà. Ăn xong bữa lẩu mà khá vất vả, toát hết mồ hôi  \r\nNhưng mà phục vụ thân thiện, đồ ăn ngon, vào nghe nhạc nhẹ nhàng khiến người mình cũng thoải mái luôn í. \r\nĐi nhóm đông nếu gọi 2 lẩu to và các món ăn kèm (có gọi thêm lượt 2) thì chia ra có gần 90k/ng thôi, giá rất là vừa túi tiền. Mọi người có thể thử ạ. Ngay cạnh quán này cũng có 1 quán chay khác, có dịp mình sẽ thử thêm.\r\n', 9, NULL, 25000, 150000, 'img/doan/(3).jpg', '2021-01-05 16:41:16', 0),
(54, 4, 1, 28, '102', '10:30:00', '13:30:00', 'Eat Well', 'Mình mới phát hiện ra 1 quán Salad mới toanh khá ngon tên “Eat Well”, order mấy lần rồi hôm nay mới có thời gian review. \r\nMình order 2 suất, mỗi suất là 55k mà đóng gói cẩn thận đầy đặn, nhiều đồ như dưới hình. Thực sự thì mình rất thích ăn salad và mấy đồ ăn healthy, cũng đã ăn khá nhiều hàng rồi nhưng trong quận Đống Đa thì ưng nhất chính là Eat Well. Phải nói là ngon- bổ - rẻ .\r\nMình hay gọi Salad Gà trứng và Cơm gạo lứt gà sốt nấm. Salad có đủ các loại rau, gạo lứt thơm và dẻo. Recommend cho các bạn thích ăn cơm gạo dẻo như mình nhé. Nó ko bị tơi tơi mà dẻo ăn như xôi ý    . Kết nhất khoản này. Thịt gà mềm, quyện với sốt nấm ăn kèm cơm và rau củ luộc rất ngon. \r\nĐiểm tiếp theo mình thích chính là bộ thìa đũa rất là bảo vệ môi trường, đều làm bằng gỗ nha, trông xịn xò mà đẹp mắt nữa. \r\nĐiểm trừ của quán là không gian, hiện tại có vẻ quán tập trung vào bán online nên chưa có cửa hàng cho chúng mình đến ăn. Hy vọng sau này sẽ có quán đẹp cho chị em vào chill và thưởng thức Salad, còn giờ chắc order trên Now, Grab,…  Và gọi đồ trên Now với Grab rất hay được sale hehe, tranh thủ gọi ship thôi. Nói chung rất ưng và sẽ ủng hộ quán dài dài \r\n', 8, 55000, NULL, NULL, 'img/doan/(4.).jpg', '2021-01-05 16:43:30', 0),
(55, 4, 11, 9, '165', NULL, NULL, 'Sparta Beer Club', 'Trưa qua nhóm mình có đi ăn ở Sparta Beer Club. Thực ra nghe tên thì thấy hơi ngại vào nhưng thấy quảng cáo khuyến mại với cũng gần khu Đống Đa nên rủ chị em đi cùng. 1 tiếng 30p ẩm thực của mình như thế này:\r\n1. Không gian: lịch sự, khá đẹp, rộng rãi nên ngồi thoái mái\r\n2. Phục vụ: Nhanh nhẹn, trẻ trung. Có cái mình hơi không thích chút là mình không sử dụng khăn ướt nhưng nhân viên lại bóc ra sẵn cho khách nên bạn nào đi có thế nhắc luôn là ko dùng khăn để nv không tự bóc nhé ( bởi vì khăn ướt là có tính tiền nhé).\r\n3. Đồ ăn: Có 2 set tự chọn 89k/người với 135k/người - 7 món ( set dành cho 6 người nên bạn đi đông cứ gọi thêm set là được họ không quy định số người cứ trả đủ tiền set là được ). Bọn mình chọn 135k vì được kèm với 1 nồi lẩu. 6 món của bọn mình bao gồm :\r\n- Đầu tiên phải nhắc đến cực phẩm \"CÁNH GÀ CHIÊN MẮM\": Đặc biệt ấn tượng với nước chấm, ngon thì thôi rồi (ai có qua nhất định nhất định phải tick nhé)\r\n- Rau cải xào tỏi: khá ngon đậm đà mùi tỏi không nhiều dầu mỡ mà chín vừa tới\r\n- Gỏi chân gà chua cay: lại là món mình không ăn được vì cay, nhưng thấy 6 đứa còn lại khen ngon, chân gà được rút xương sẵn nên ăn tiện lun.\r\n- Cơm cháy pate: Cơm chiên kiểu gì siêu cực, mỏng dính hơn bánh đa, giòn giòn xong chấm với pate, cá nhân mình chưa ăn món này ở đâu nên thấy ngon với lạ miệng\r\n- Đùi ếch nướng muối ớt: Món này hơi bị \" vơ - đét \" nha các pác. Vị ớt cay cay đậm đà chút muối quyện lại với thịt ếch nhìn đã chảy nước miếng, ăn thì thôi rồi đừng hỏi. Nó gọi là best đấy các ông ạ.\r\n- Đậu phụ lướt ván: món này thì như mọi quán nên không ý kiến\r\n- Cuối cùng lẩu ếch măng chua cay: thú thật là ăn những món trên đã no căng đét nên đến khi lẩu ra chúng mình chỉ ăn chơi chơi xong bỏ. Nước lẩu tương đối ấn tượng đúng chuẩn vị lẩu ếch chua chua chút vị măng, mỗi tội đồ nhúng có vẻ hơi ít 1 chút \r\n4. Đồ uống: Quán đang có chương trình bia 15k/chai.\r\n5. Thanh toán: Tổng thiệt hại hôm đó hết 895k ( buổi trưa ĐIỂM CỘNG là quán không tính VAT và tiền phục vụ nha ) chia', 9, 130000, NULL, NULL, 'img/doan/(5..).jpg', '2021-01-05 16:46:07', 0),
(56, 4, 9, 5, '25 Ngõ 59', NULL, NULL, 'Lẩu ốc', 'Dạo này muốn đi ăn lẩu mà sợ dịch thề không dám ra ngoài ăn linh tinh mà thèm quá k nhịn nổi. Được con bạn bảo qua đây ăn sạch sẽ nên bấm bụng ăn thử xem sao. Mạnh dạn gọi set lẩu ốc ăn ngon phết. \r\n• Nước lẩu: mới đầu thấy cũng mức ổn thôi nhưng sau nhúng đồ thì đậm đà ngon hơn hẳn.\r\n• Ốc: nhiều , rửa sạch, k có sạn mà là loại vừa vừa k to oạch đâu con ốc béo, to kín cả vỏ chứ k bị teo tóp lại. Quả nước chấm ngon bất ngờ ấy, chua chua ngọt ngọt chuẩn luôn\r\n• Bắp bò: Hơi ít, Được cái tươi thật. Ai thích ăn thịt kiểu gì cũng phải gọi thêm đĩa nữa\r\n• Mọc viên: k đặc sắc mấy, viên bé tẹo, ăn là phải lấy muôi thủng vớt chứ đũa khó gắp dã man.\r\n• Khoai lang chiên: ui t thích món này lắm, giờ các quán toàn bán khoai lang kén thôi chứ chiên kiểu này ít thật sự. Ngọt ngọt, giòn giòn thêm tí vừng thơm thật.\r\nTóm lại cũng rất đáng thử, thấy quán có thêm cả lẩu cháo chim cũng hấp dẫn chắc lần sau sẽ ăn xem sao  \r\n', 8, 440000, NULL, NULL, 'img/doan/(6.jpg', '2021-01-05 16:48:17', 0),
(57, 4, 11, 31, '33', NULL, NULL, 'Sườn nướng', 'Hôm nay xin được review cho mọi người một quán ăn ngon ở Đống Đa nhé. Hôm đấy nhóm mình đi 4 người, gọi một sườn nướng khổng lồ (thật ra đây là tên gọi của quán thôi, là sườn nướng cỡ lớn) giá 499k. \r\nĐầu tiên điểm trừ một xíu là món này đợi hơi lâu, cũng bởi vì quán đông quá nhưng cảm giác cứ phải đợi đợi thấy mệt mệt. \r\nSườn mang ra ngoài còn nóng, miếng lớn, mình có đo thì cỡ khoảng 1 gang tay/sườn  Thịt nhiều nhé, ai thích ăn nạc có nạc mà thích ăn mỡ cũng đủ mỡ luôn. Tẩm ướp ngọt ngọt, đậm đậm rất ngon và vừa miệng.\r\n', 9, 499000, NULL, NULL, 'img/doan/(7).jpg', '2021-01-05 16:49:59', 0),
(58, 4, 13, 25, '5', NULL, NULL, 'Chân gà nướng', 'Quán Chân Gà Thịnh Vượng số 5 có lẽ là quân t hay lui tới nhất. Đặc biệt, có món Rau Muống Muối giòn giòn chua ngọt ăn mê lắm, có khi còn nghiện hơn cả chân gà nướng =)))))\r\nLâu lắm mới ăn lại nên nay gọi đồ hơi đầy đặn chút xíu hihi. Chân, cánh ở đây trông có vẻ cháy nhưng không bị khô đâu, tẩm ướp gia vị khéo lắm, vị mật ong rõ lắm luôn nên nhìn vào thấy nó sẽ hơi bị xém xém nha. Tui lười gặm nên chỉ thích ăn cánh cho nhiều thịt  . Bánh mì mật ong không bị quá giòn nên ăn vừa miệng, ngọt nhẹ mê tít lun. Ngoài ra các cô còn bán cả dạ dày nướng, mề nướng nha, có hôm giòn sật hôm dai nhưng mà nên gọi thử cho biết ha\r\nKết nổ đĩa quả tương ớt ở đây, chấm miếng thịt vào cay tê không quá nồng nên vị sẽ trung hoà hơn, ăn đỡ ngán hơn nhìu hehe.\r\n', 9, NULL, 70000, 100000, 'img/doan/(8).jpg', '2021-01-05 16:51:15', 0),
(59, 4, 4, 29, 'Ngõ 67', '06:00:00', '14:00:00', 'Bún cá', 'Quán có bún - miến - bánh đa đỏ nước trộn \r\nĐiểm cộng : Quán sạch sẽ , có măng ướp ăn kèm ngon , cá rán tại chỗ , chả cá to vị cá , bát đầy đặn ăn no luôn , lên đồ nhanh .\r\nĐiểm trừ : quán mới chuyển qua nhà mới nên hơi nhỏ , khá đắt so với mặt bằng chung .\r\nĐây là một quán bún cá cực kì nên thử ở khu Đống Đa\r\n', 7, NULL, 35000, 40000, 'img/doan/(9).jpg', '2021-01-05 16:53:21', 0),
(60, 4, 4, 14, '42 ngõ 211', NULL, NULL, 'Bánh đa trộn', 'Ngày trước cô bán ở ven hồ nhưng họ dẹp vỉa hè nên cô chuyển về đây bán. Suất trên ảnh 20k đầy đủ. Như bao quán khác có bánh đa kèm giò,chả cá và rau muống/rau cần tuỳ theo mùa. Vị ngon kiểu mộc mạc thôi, cũng không phải quá ấn tượng nhưng vẫn luôn nhớ đến. Bát này 20k thôi mà ăn chắc cũng no luôn ạ. Ai ăn thêm bảo cô làm thêm bát nhỏ 15k. Ăn thêm bát đấy chắc ngồi lại quán luôn không đứng lên nổi mất. Tớ thích dầu trộn của cô dã man ý. Rau muống là rau chẻ ra, ăn giòn ngon thích lắm nhé\r\nHôm trước mua heekca thấy xếp hàng đông quá nên tớ bỏ cuộc rồi qua 42c Lý Thường Kiệt ăn bánh đa trộn. Quán đó cũng khá nổi tiếng. 25k một suất ảnh, cũng bánh đa kèm giò, chả cá như bên Tôn Đức Thắng nhưng tớ thấy dầu trộn hơi nhạt phải ra xin thêm ăn mới vừa miệng. Cô bán hàng nhẹ nhàng khéo léo thích lắm nhé.\r\n\r\n', 8, 25000, NULL, NULL, 'img/doan/(10).jpg', '2021-01-05 16:58:09', 0),
(61, 4, 4, 32, '11', NULL, NULL, 'Bún ngan', 'Dạo này ăn hết bún ngan này sang bún ngan khác =)) mng bảo mình là búnholic cũng không sai đâu ạaa vì sngay rv bún =))\r\nQuán bún này nằm ở mạn phố Bích Câu, ngay gần trục đường Cát Linh nha mng. Quán chỉ bán từ sáng sớm đến gần trưa nên sáng nào cũng siêu đông ý\r\nQuán bán bún miến mỳ ngan, chỉ có ngan thui chứ không có mọc hay gì khác đâu nha. Nước dùng của quán thanh ngọt nhẹ, thơm mùi măng khô ý. Măng ở đây là măng khô miếng, được ngâm kĩ không bị hôi, ăn giòn nè. \r\nMột bát thì siêu siêu nhiều thịt, miếng tiết thì mềm núng nính luôn. Ăn xong 1 bát này là no đến trưa luôn. À mình thích ăn gan nên có gọi thêm ngan nữa và cũng siêu ngon vs thơm chứ không có mùi gây\r\nBạn nào sáng sớm đi làm đi học qua mạn này thì nhớ ghé vào đá bát bún cho ấm bụng nhá =))))\r\n', 9, NULL, 30000, 40000, 'img/doan/(11).jpg', '2021-01-05 16:59:16', 0);
INSERT INTO `tbl_review` (`id_review`, `id_reviewer`, `id_danh_muc`, `id_duong`, `so_nha`, `gio_mo_cua`, `gio_dong_cua`, `ten_mon`, `noi_dung`, `diem`, `gia_tb`, `gia_min`, `gia_max`, `anh_minh_hoa`, `ngay_dang`, `luot_xem`) VALUES
(62, 17, 1, 33, '109', '11:00:00', '19:30:00', 'Bánh rán', 'Thèm ăn bánh rán quá mà đi tìm quán save từ trước nhưng đóng cửa, may quá rẽ vào Vũ Thạnh lại có mấy hàng. Hàng này bạn mình chọn ngẫu nhiên thôi. Lúc ý tầm 7h nên mình thấy bánh rán sẵn hết. Cô bán hàng có bảo mình chọn rồi làm nóng lại cho (ưng điểm này phết) \r\nBọn mình có gọi 3 bánh rán mặn và 1 bánh ngô. Cô làm nóng xong cắt ra đĩa cho luôn\r\n- Bánh rán mặn: ăn khá vừa miệng và giòn ngon. Nhân vừa phải ko nhiều ko ít. Chưa biết các chỗ khác thế nào nên hơi khó so sánh nhưng mà mình thấy đến đây nên gọi món này \r\n- Bánh ngô: bánh rán rồi rán lại nên mình thấy ko giòn như lúc đầu nữa, ăn cũng bình thường.\r\nQuán có nước mắm chấm nhưng hơi chua và ko hợp khẩu vị mình lắm, mình chấm tương ớt thấy ok hơn nè.\r\n', 8, 5000, NULL, NULL, 'img/doan/(12).jpg', '2021-01-05 17:02:58', 0),
(63, 18, 11, 4, '45', '08:00:00', '22:00:00', 'Đồ ăn Hàn Quốc', 'Ngày mưa gió, thèm một nồi lẩu tokbokki nên nhớ đến quán Maru được nhiều người review khen ngon nên đến ăn thử.\r\nMình đi 2 người order 1 lẩu tokbokki chân gà sốt cay, 1 mỳ lạnh bò bulgogi, một gimbap gà chiên coca super và 2 nước. Tổng hoá đơn 359k, giá vừa túi tiền.\r\nVề không gian: quán chủ đạo tông màu trắng, decor giản dị đẹp mắt.\r\nVề đồ ăn: mỳ lạnh mình ăn bị fail, do trộn cùng bò với mỳ lạnh nên bò cứng, dai nên ăn ngán. Gimbap gà chiên ăn ngon, miếng gà to, mỗi tội ở đây cuốn ko được chặt tay nên hay bị rơi đồ ra ngoài. Món cuối cùng là Lẩu chân gà sốt cay, ăn bình thường, không có gì xuất sắc, chân gà vẫn còn xương, đồ đạc ăn tạm được. Nước lẩu đậm đà nhưng thiếu 1 thứ gì đó nên chưa tạo được điểm nổi ở đây\r\nPhục vụ: nhân viên ở đây thờ ơ, thái độ khi khách hỏi, khách hàng cần giúp thì nói kiểu chống đối xong đi ra quầy đứng. Vậy xin chào và không quay lại nhé. Đồ ăn ko phải xuất sắc, đi kèm phục vụ thì kém thì mất khách thôi.\r\n', 4, NULL, 40000, 200000, 'img/doan/(13).jpg', '2021-01-05 17:05:49', 0),
(64, 19, 4, 12, 'Ngõ 43', '06:00:00', '22:00:00', 'Bánh cuốn, Gà tần & Cơm rang', 'Tình cờ chọn 1 quán random ở gần cty mà k ngờ chất lượng ra phết. Mình thấy mn khen bánh cuốn vs cơm rang ở đây nên gọi cả 2 lun. Bánh cuốn mềm mướt, vỏ bánh mỏng mà đầy ắp nhân thịt vs mộc nhĩ, chấm quyện nước chấm vừa miệng mà k cần nêm nếm thêm gì lun. Chả quế mềm ngon, chả nướng thì ngọt thịt vẫn còn nóng ấm, thơm nức mũi. Chả nướng ở đây tự làm hay sao ý nên vị đặc trưng phết. Cơm rang hạt giòn mẩy, phần nhân dưa bò đc để riêng, kèm 1 bát dưa góp và canh thịt cà chua húp bên ngoài đưa miệng dã man. Đang đói nữa làm mình ăn sạch trơn lun   nhân nhiều phết nhé, thịt bò dai mềm, dưa k chua quá, cơm rang vừa miệng nhưng mình ăn mặn nên phải nêm nếm thêm chút xì dầu, tương ớt nữa là ngon lun. Giá cả bình dân mà 1 suất nhiều phết, no căng thật sự :)))', 8, NULL, 10000, 35000, 'img/doan/(14.1).jpg', '2021-01-05 17:08:27', 0),
(65, 19, 5, 33, '109', '09:00:00', '20:00:00', 'Bánh rán & Chè', 'Mình nhớ hồi c2 đã từng ăn ở đây r, h quay lại vẫn thấy cô bán. Hỏi ra mới biết cô bán đến nay đc 30 năm r. Thạch găng ăn đc, thanh thanh và ngọt mát. Chè thập cẩm cũng ổn, mình thích vị cốm vs bưởi nhà cô làm. Bánh chuối - ngô - khoai ngập nhân, đậm vị ngọt tươi của củ quả được bọc trong lớp bột mỏng zòn và nóng hổi. Bánh rán mặn chấm quyện nc chấm chua ngọt khá vừa miệng. Bánh rán ngọt thì nhân đậu xanh nhuyễn mịn đc phết. Nchung chưa phải chỗ ngon nhất mình ăn, nhưng vừa có bánh vừa có cả chè mà giá lại rẻ ntn thì cũng đáng các cậu ạ :))', 8, NULL, 5000, 10000, 'img/doan/(15).jpg', '2021-01-05 17:10:24', 0),
(66, 20, 13, 17, '102', '16:00:00', '23:00:00', 'Bánh mì', 'Tình cờ đi cf lượn qua phố Khâm Thiên phát hiện ra quán bánh mì thịt xiên vô cùng chất lượng. Quán phục vụ chủ yếu mua mang về nhưng cũng có bàn ngồi, bàn được xếp ở trong ngõ khá hẹp và nhỏ hơi bất tiện một chút nên khuyến khích các bác nên mua mang về hơn nha. \r\nPhải nói rằng thịt xiên rất chất lượng (12k/xiên) , thịt được thái bản to đầy đặn, tẩm ướp nêm nếm vừa vặn thơm mùi xả. Có cả nạc và mỡ xen kẽ nên ăn không bị khô đâu, mỡ xém xém ăn giòn giòn béo béo mê lắm  Bánh mì nướng mật ong (6k/bánh) được nướng đều tay giòn rụm, ăn kèm với thịt xiên chuẩn bài luôn các bác ạ  Mỗi người 1 bánh 2-3 xiên là đủ no bụng cho một buổi chiều luôn. \r\nCô chủ cởi mở nhiệt tình thân thiện làm đồ nhanh là thêm 1 điểm cộng nữa rồi. Các bác nên đến thử trải nghiệm xem có đúng như những gì tôi nói không nhaaa\r\n', 8, 12000, NULL, NULL, 'img/doan/(16).jpg', '2021-01-05 17:12:28', 0),
(67, 21, 5, 34, '2 ngõ 88', '15:00:00', '20:00:00', 'Bánh khoai tăm & Bánh chuối', 'Bánh khoai tăm khó ăn nhất?? kp vì vị mà khó ở cách ăn    Mình thích bánh khoai tăm lắm nhưng phải mấy năm rồi mới ăn lại luôn. Bánh khoai cô bán ơe Trần Quý Cáp, chỗ nhà trông hơi cũ và mang hơi thở \"ngày xưa\". Bánh khoai rán giòn và rất dễ rơi rớt  vừa ăn phải vừa hứng và đặc biệt k thể ăn nhanh được vì phải nhai, phải đỡ, hứng. Cách ăn hơi khó nhằn tý thôi nhưng mà vị thì ngon, bánh giòn rụm, chuối ở trong bánh siêu ngọt. Bánh có 7k mà to bằng cả cái chảo rán của cô.\r\n Cô làm 1 mình và chảo nhỏ nên đợi bánh sẽ hơi lâu, từ cách ăn đến đợi bánh rán xong thì chắc chắn p có thồ gian thưởng thức mới ra đây ngồi ăn và ngắm cô bán hàng cho khách nhé.\r\n', 8, 7000, NULL, NULL, 'img/doan/(17).jpg', '2021-01-05 17:16:08', 0),
(68, 22, 13, 20, 'A6', NULL, NULL, 'Tào phớ', 'Một bát tào phớ với giá 10k thôi mà có 6-7 loại topping liềnnn. Nào là thạch găng man mát, tào phớ mềm mịn, trân châu dai dai, có thêm 1 chút dừa tươi, dừa khô, nước cốt dừa nữaa.\r\nỞ đây cô bán cả thạch găng riêng luôn là 6k/1 cốc nhé!!!\r\n', 9, 10000, NULL, NULL, 'img/doan/(18).jpg', '2021-01-05 17:20:57', 0),
(69, 23, 13, 35, '233', '10:30:00', '22:00:00', 'Kem xôi', 'Ở trong ngõ Văn Chương Khâm Thiên lại có một hàng kem xôi, chè Thái ngon phết ý. Kem xôi ở đây ấn tượng bởi mang một hương vị thật đặc biệt, nếu ở các chỗ khác thường dùng kem vani thì ở đây lại dùng hẳn kem dừa. Lớp kem mềm xốp thơm thoang thoảng mùi dừa tươi. Xôi lá dứa thơm, dẻo ăn cùng mít sợi thơm lừng. Một bát này giá 16k/bát rẻ ơi là rẻ thêm bát caramen thập cẩm mít đầy ắp mà chỉ có 25k thôi, tụ tập ăn vặt ở đây là nhất rồiii', 9, 25000, NULL, NULL, 'img/doan/(19).jpg', '2021-01-05 17:26:52', 0),
(70, 24, 4, 31, '136', '06:00:00', '21:00:00', 'Mì vằn thắn & Sủi cảo', 'Bọn mình có gọi 2 loại mỳ vằn thắn: 1 trộn và 1 nước. Cảm nhận thì mình thấy đồ ăn ở đây cũng tạm ổn, sợi mì dai giòn, có há cảo chiên, sủi cảo đầy đặn thịt mà vỏ mỏng lắm cơ, thịt lợn thái mỏng, không phải thịt xá xíu hic, miếng trứng be bé =))))))))). Thiếu mất gan lợn của mỳ vằn thắn  . Nước dùng thì mình thích ở trên Đinh Liệt hơn, ở đây cũng ngon nhưng mà chưa trọn vị lắm, có mùi nấm hương khá thơm đấy  \r\n Giá rổ hợp lý 30k/ bát, chị chủ quán siêu đáng yêu =)))))))), phục vụ khiến mình ưng ý phết. Điểm trừ là quán bé, mình ngồi trên tầng 2 hơi nóng với chật, chắc được 4 người ngồi vừa  \r\n', 9, NULL, 25000, 30000, 'img/doan/(20).jpg', '2021-01-05 17:30:32', 0),
(71, 4, 7, 36, 'Cổng trường Đống Đa', '14:00:00', '18:00:00', 'Cháo sường & Cháo trai', 'Chiều xế tuần nào cũng qua ăn cháo sườn của cô, nay qua lúc 5h mà nồi cháo sườn đã gần hết rồi. Cháo sườn có nguyên miếng thịt luôn, quẩy giòn, cốt cháo không bị vữa. Cháo trai thì đậm vị hơn, trai hơi nhỏ mò mãi ko thấy luôn  , cháo trai là cháo hạt nhe. Cạnh hàng cháo có nộm vs bánh bột lọc cũng okela phết', 9, NULL, 20000, 25000, 'img/doan/(21.1).jpg', '2021-01-05 17:32:36', 0),
(72, 4, 4, 37, '107 C2', '06:00:00', '13:00:00', 'Bún riêu cua & Bánh đa trộn', 'Quán bánh đa trộn lâu năm lắm rồi đây này, quán này có từ hồi mình học cấp 2 đống đa, ngày trước toàn làm bát bánh đa trộn xong sang hàng bánh đúc nóng làm bát nữa. Cô chú ấy bán ngay trong sân C2, ai hay ăn ở khu này thì biết rồi ha. Mình gọi 1 bánh đa trộn, một miến trộn với 1 bún riêu để ăn nè. Bánh đa trộn ở đây sợi mềm, đậm đà phết, topping cũng nhiều có giò tai siêu ngon, thịt bò, đậu với gạch cua bùi bùi, béo béo nữa. Bạn mình ăn miếng cho ít dấm chua chua cay cay vô ăn cũng thấy ngon. Bún riêu của cô cũng đơn giản có giò bò đậu, nước riêu chua nhẹ, thơm mùi dấm bỗng lắm, ăn buổi sáng lạnh lạnh là chuẩn bài luôn. Xong xuôi làm cốc trà đá là đúng bữa sáng thanh cảnh rồi. Mng nhớ ghé ủng hộ cô chú nhaaaa.', 10, NULL, 20000, 40000, 'img/doan/(22.1).jpg', '2021-01-05 17:35:57', 0),
(73, 4, 4, 38, '85', NULL, NULL, 'Bánh cuốn Cao Bằng', 'Quán này tìm muốn gớt nước mắt luôn các bạn ạ, đặc biệt đi từ lối Thái Thịnh vào như muốn lác cả mắt để tìm luôn ý, có 3 phố trộn vào nhau: Tây Sơn, Trung Liệt, Nguyễn Văn Tuyết Số nhà ở đây bị đảo hết nên cũng tốn sương sương 30\' cuộc đời để tìm quán ạ. Để dễ tìm hơn thì nó nằm ngay cạnh Sữa Chua Trân Châu Hạ Long nhé. Không gian quán thì cũng khá rộng, mình đến lúc 11h30 thứ 7 lại thấy vắng chả có ai. Hai cô chú cứ tay làm thoăn thoắt cho các anh shipper thôi. Mình chờ khoảng 10\' thì đồ của mình cũng lên. Cảm nhận của mình thì nước dùng thơm ngon, nóng hổi vừa thổi vừa ăn, trứng thì làm chín tới thôi, ăn nó cứ bùi bùi thơm thơm mùi thịt. Giò ở đây cũng to, mỗi tội là cho hơi ít thịt và bánh cuốn thì hơi bé, nhìn đĩa của con bạn nhiều thịt hơn mà mình buồn ghê Tổng hết 60k cho 2 suất, 30k/suất nhe, thêm topping thì thêm tiền, nước vối tự phục vụ free ạ. 2 cô chú chủ quán niềm nở, nhiệt tình lắm, sẽ quay lại nhiều ạ ', 8, 30000, NULL, NULL, 'img/doan/(23).jpg', '2021-01-05 17:38:04', 0),
(74, 25, 4, 36, '54 ngõ Cẩm Văn', '07:30:00', '21:30:00', 'Nui xào ngọt', 'Quán này là một quán mình ăn suốt những năm tháng học cấp ba, học sinh ở trường THPT Đống Đa, Tô Vĩnh Diện chắc không thể không biết quán này rồi. Quán nằm sâu trong con ngõ, khá dễ tìm. Quán bé hơi tối một chút, không được sạch sẽ cho lắm. Xưa mình hay ăn nui xào lẫn ở đây nó khác hẳn với nui xào ở Kim Liên nha các bạn. Nui ở đây sốt chua ngọt, rau, thịt bò (các bạn có thể gọi thêm xúc xích, pho mai nữa). Ăn cũng nghiện phết đó, trước đi học sáng nào mình ghé ăn sáng. Một bát giá dao động từ 25k - 30k. Ngoài ra quán còn bán các loại ăn vặt khác nữa. Cô chú bán hàng thì nhiệt tình, vui vẻ thôi rồi luôn. Lần nào mình qua ăn cũng buôn dưa lê =)))))).', 8, NULL, 25000, 30000, 'img/doan/(24).jpg', '2021-01-05 17:40:37', 0),
(75, 4, 4, 8, '6 ngõ 185', NULL, NULL, 'Bún đỏ', 'Trước có đọc một bài review quán trông khá bắt mắt nên dù có lạnh đến mấy mình cũng lôi con bạn dậy đi chén luôn quán này. Quán khá dễ tìm, ngay đầu ngõ 185 Chùa Láng luôn, mỗi tội ngõ hơi bé tí. Không gian quán rộng rãi, sạch sẽ. Quán có mỗi hai cô chú bán thì phải, chả thấy nhân viên nào cả. Mình gọi 1 tô lớn 35k và 1 tô nhỏ 25k, quán còn có tô đặc biệt 45k nha. Nước uống thì free trà đá, nước ngọt từ 10k-15k. Chờ khoảng 10\' thì bát của bọn mình lên. Cảm nhận đầu tiên của bọn mình là bát nó to thật sự mọi người ạ, trên ảnh trông bé thế thôi chứ ở ngoài to lắm. Topping thì mình thấy cả 2 bát đều nhiều như nhau, chỉ có là size topping của bát 25k bé hơn bát 35k Mùi bún thơm lắm, mùi thoang thoảng hải sản ý mọi người, ai thích thì cho thêm chút mắm tôm cũng okela phết. Nước dùng đậm đà vừa miệng, sợi bún to như bánh canh vậy, ăn hết mà no phè phỡn không uổng nổi thêm cốc trà đá  Highly recommend cho các bạn muốn thử loại bún mới mà rẻ nhé.', 8, NULL, 25000, 35000, 'img/doan/(25).jpg', '2021-01-05 17:42:29', 0),
(76, 4, 1, 2, '71', '08:30:00', '22:00:00', 'Bánh mì chảo', 'Quán này thì chắc mn chẳng lạ gì nữa, cũng nhiều người khen người chê, mình thì thấy hợp miệng nên ăn suốt. Mình hay chọn combo quấy my love cho 2ng gồm 2 chảo, 1 salad và 2 trà quất nha đam để đỡ phải suy nghĩ chọn lựa. Thích nhất cái sốt sánh sệt chua ngọt thơm thơm mùi bơ, mà cũng đậm đà vừa đủ để chấm bánh mì nữa, sốt này xin thêm thoải mái ạ. Nhân có các thứ cơ bản như pate rán xém, trứng ốp, khoai tây nghiền, thịt nguội và ít nộm. Thực ra mình thích dưa chuột muối ngày xưa hơn là nộm bh nhưng cũng ko ảnh hưởng lắm vẫn ok. Salad ăn để giải ngấy ko đặc sắc lắm, ăn gọi là bổ sung chất xơ. Trà đường đá thơm ngọt đến cuối bởi dùng đường cô đặc. Mn có thể gọi thêm bò hoả diệm sơn ăn thêm cũng ok phết. Nói chung quán này tùy khẩu vị đấy bởi mình thấy khách quen như mình đến ăn cũng nhiều lắm ạ.', 8, 129000, NULL, NULL, 'img/doan/(26).jpg', '2021-01-05 17:43:45', 0),
(77, 4, 13, 11, '106 B3', '10:00:00', '22:00:00', 'Ốc Đỉnh', 'Ôi chu choa sao có hàng ốc ngon thế này mà bây giờ con Ly nó mới chỉ cho mình nhỉ huhu. Nói thật là trước đây mình không ăn ốc đâu, không thích ăn luôn ý, mà dạo này trời lạnh xong toàn đc rủ đi ăn ốc nên cắn răng phá lệ một phát thàn ra nghiện luôn rồi. Quán này ngay trung tâm, hơi nhỏ nhưng đc cái ốc xịn lắm nhé. Hôm đó mình đi 3 người gọi 1 ốc hương trứng muối, ốc len xào dừa, ốc cà na, ngao hai cùi hấp thái với hàu nướng phô mai để thử. Nói không phải điêu chứ sốt ốc ở đây cực phẩm đấy mng ạ k đùa được đâu. Đầu tiên là quả ngao hai cùi hấp thái ngon cực luôn, nước dùng thái cay nhẹ, chua chua thơm nức luôn, lạnh lạnh húp một miếng là tỉnh người liền, ngao cũng chắc thịt, to, ăn với nước dùng thái hợp cực kì luôn, siêu ngon nhé. Tiếp đến quả ốc hương trứng muối, uồi thề luôn ko biết do mình quê hay nn mà thấy nó ngon vãiiii, sốt sệt mà đậm vị trứng muối, ngấm vào từng con ốc luôn, sốt sệt sệt nữa chấm bánh mì ăn vèo vèo. Hàu phô mai thì béo béo, ngậy ngậy thơm cực luôn. À mình gọi thêm một đĩa xoài nữa, xoài cũng ngon mới đỉnh chứ huhu. Nói chung là ưng cực kì chấm 9,5 điểm, 0,5 điểm còn lại để mai đưa mẹ tới ăn xem chất lượng có đều tay không chứ tôi là thấy nức nở lắm rồi đấyyy. Quán này có nhiều loại ốc, nhiều sốt khác nhau lắm, mấy loại sốt me ăn cũng cuốn cực, mng ghé thử xem nhé. Hơi khó tim một tí, mng đi đến b3 tôn thất tùng đoạn nhà thuốc thì rẽ vào ngõ nhé.', 9, NULL, 30000, 130000, 'img/doan/(27.1).jpg', '2021-01-05 17:48:49', 0),
(78, 4, 11, 33, '3 ngõ 3', NULL, NULL, 'Beefsteak', 'Lần đầu ăn thử “Đà Điểu” Steak mà thấy còn ngon hơn thịt bò :)))). Thịt đà điểu mềm hơn gấp nhìu lần thịt bò, lại còn ngọt nữa. Phần nước sốt đậm đà, độ sệt vừa phải, ăn một đĩa chảo steak mà xin thêm mấy lần nước sốt để chấm bánh mì  . Có cả pate rán, trứng ốp lòng đào siu ngon. Ngoài ra anh chị còn bán cả phở đà điểu nữa nheee  ', 9, NULL, 40000, 50000, 'img/doan/(28).jpg', '2021-01-05 17:50:22', 0),
(79, 23, 13, 20, 'A2', '09:00:00', '23:00:00', 'Trứng chén nướng', 'Trứng chén nướng Nam Đồng, với tôi, như vũ trường, các loại gia vị rất sôi nổi và hào hứng, nhưng mỗi thứ nhảy theo nhịp điệu riêng biệt. Tất cả lùng bùng trên đầu lưỡi, thiếu gắn kết. Anh chủ có giới thiệu món ăn theo vị của Đà Nẵng, nhưng có vẻ không hợp với sở thích của mình.\r\nMình thuộc team thích sự mãnh liệt hài hoà đồng điệu cơ.\r\n', 9, 10000, NULL, NULL, 'img/doan/(29).jpg', '2021-01-05 17:56:54', 0),
(80, 4, 13, 39, '135', '10:30:00', '16:00:00', 'Nem nướng Nha Trang', 'Mới thị tẩm được hàng nem nướng nha trang khu tây sơn, trung liệt này hơi bị ổn áp nên là review luôn cho mng đâyyy. Chợt nhận ra đây là lần đầu tiên mình review nem nướng nha trang trên insta luôn ấy  Mình đi 2 người nên gọi 2 suất (30k/ suất) để ăn thử. Quán này rộng rãi phết mà đồ ra cũng nhanhh. Một phần sẽ có nem nướng, bánh phở, nộm chua chua, xoài thái lát, ram giòn giòn với rau sống ăn kèm. À còn bát nước sốt chấm nem sánh mịn, có hành khô thơm nức nữaaaa. Nem ở đây to tròn, bóng bảy lắm, ăn không bị bột với không bị bã nữa nên là oki, một cuốn đầy đủ đẫm nhân, chấm sốt bùi bùi, đậm đậm nữa ăn cuốn cực. Quán này thấy có cả trên Now đó nên mng thử xem sao nhaaaa.', 8, 30000, NULL, NULL, 'img/doan/(30).jpg', '2021-01-05 17:58:53', 0),
(81, 4, 6, 29, '23', NULL, NULL, 'Cơm Tấm Wow', 'Trần đời ai oán các bác ạ, lần đầu tiên em được ăn cơm Tấm trong cặp lồng. Really wow luôn =)))) chính là 1 cái cặp lồng đấy ạ. Xách vào văn phòng mà bao nhiêu người nhìn, mn còn hỏi ng yêu nấu cơm mang đến à   ăn xong lại hẹn h shipper đến thu lại, hơi bất tiện tí nhưng đc cái bảo vệ môi trg phết \r\nSuất cơm cũng gây bất ngờ không kém bao bì, miếng sườn cốt lết ướp rất vào cơm, mềm và khá thơm vị khói. Không biết có phải tại miếng sườn to không mà thấy cơm khá ít, dù nhìn cơm rõ ràng là hạt Tấm nhưng hơi dẻo. Chả trứng vừa miệng được cái là ko bị tanh. Nước chấm đúng vị cay ngọt Sài Gòn mình từng ăn trong đó. Còn canh chua đúng đỉnh của đỉnh. Không biết như nào là chuẩn vị nhưng nhìn chung ăn thấy ưng cái bụng lắm.\r\nQuán bị cái là đặt sớm thì ship chuẩn giờ mà hôm nào đói muốn ăn luôn thì phải đợi lâu lâu hơn chút. Không biết có phải bận đi rửa cặp lồng hay ko     ....\r\n', 8, NULL, 45000, 65000, 'img/doan/31.1.jpg', '2021-01-05 18:03:20', 0),
(82, 4, 9, 16, '82', NULL, NULL, 'Đồ ăn Hàn Quốc', 'Ăn đồ Hàn cay xuýt xoa tầm trời lạnh này quá hợp lý. Bữa này mình ăn lâu rồi nay thèm quá mới nhớ ra để review. Mình đi đông gọi 1 chảo gà xào, 1 chảo bạch tuộc xào và 1 chảo mỳ xào. Nhân viên có nói trước luôn chảo bạch tuộc sẽ hơi ít bạch tuộc, công nhận ít thật :)) chắc do hải sản đắt. Các món đều kiểu vị Hàn cay cay ngọt ngọt xuýt xoa ấm người. Chảo bạch tuộc cả chảo gà đều có tok to béo dai dai, mỳ Hàn ngấm vị ngon ngon. Chảo mỳ xào là món cay nhất, chảo mỳ đầy đặn có đủ mỳ, gà khô, phomai, chả cá, thanh cua. Mình thấy chảo mỳ và chảo gà hợp lý đáng gọi nhất, ai thích ăn hải sản gọi chảo bạch tuộc thì hơi ít chắc phải gọi thêm nhiều món khác ăn cùng. Ah ở đây có cả lẩu tok cũng ngon đầy đặn lắm. Chảo mỳ 52, chảo bạch tuộc 165, chảo gà 155, quán siêu xinh tông hồng decor trông giống như cái bể bơi lun ý, có 4 tầng nên tụ tập oki. ', 9, NULL, 52000, 165000, 'img/doan/32.jpg', '2021-01-05 18:05:11', 0),
(83, 26, 13, 40, 'C11 ', '06:00:00', '23:00:00', 'Bánh tráng', 'Quán tủ của học sinh C2 Đống Đa; đông quá luôn. Ở đây bán mấy món căn bản.\r\nBánh Tráng Cuộn ở đây sốt mayonnaise thôi nha. Cuốn lạ là ngoài xoài có thêm đu đủ với cà rốt :)) ăn cũng được nha; sốt mayonnaise hơi ngấy xíu thôi; thêm tí xoài để tăng độ chua thì ngon hơn. À có kèm trứng cút.\r\nBánh Tráng Trộn dai dai; hộp đầy ú ụ bò khô và tép khô, mực khô. Thơm từ rau dăm và lạc. \r\nMình gọi thêm Xoài Lắc ăn ngon phết. Xoài dầm bò khô. Xoài xanh giòn; chua vừa phải; hơi cay xíu xiu.\r\n', 8, NULL, 15000, 20000, 'img/doan/33.jpg', '2021-01-05 18:07:52', 0),
(84, 4, 9, 41, '100', '17:30:00', '23:30:00', 'Bò nhúng dấm', 'Team Đống Đa đang tìm địa chỉ ăn lẩu bò nhúng dấm thì mình giới thiệu ngay quán này nha. Lẩu bò nhúng dấm mình gọi set 2ng 180k có 1 đĩa bắp, 1 đĩa gầu, rau mỳ bún và đồ cuốn. Nước lẩu trong veo, thơm thơm vị sả dứa, chua thanh mà không bị gắt vị dấm, ăn đến cuối cũng ko thấy bị mặn, nhúng chút gầu bò giòn ngậy, bắp bò mềm ngọt xong cuốn cùng tí bánh tráng rau sống ăn năng suất vào việc lun :)) À mắm nêm chấm ở đây mình thấy hơi mặn nha. Nhậu nhậu lai rai có chân gà chiên mắm cực ngon, chân chiên già ko còn kiểu dẻo dẻo mà giòn rụm như bim bim ấy, quyện chặt sốt mắm đậm miệng ngòn ngọt nữa. Thêm cả nước, đậu tẩm hành và đĩa bắp bò muối khai vị hết gần 400k, 2ng no căngg, đi đông rẻ hơn tầm 130-150k/ng thui, nc là giá hợp lý. Phong cách quán nhậu bình dân nên nhiệt tình từ chủ đến nhân viên luôn ngồi tụ tập dzui lắm', 9, NULL, 130000, 150000, 'img/doan/34.jpg', '2021-01-05 18:12:21', 0),
(85, 4, 4, 38, 'Kiot 14', NULL, NULL, 'Bánh canh ghẹ Phú Gia', 'Lại chuyên mục bánh canh quay trở lại đêy, lần này là một chú quán khác này. Thấy mọi người hay ăn ở đây lắm mà giờ mình mới ăn lần đầu. 3 đứa gọi: 2 Bát Đặc Biệt, 1 Bát Ghẹ Xé. Thực sự là lần nào ăn bánh canh cũng bị no quá mức vì nhiều thực sự  . Giá cả ở đây cũng nhỉnh phết đấyy\r\n.\r\n Bát đặc biệt có bạch tuộc giòn sật, bề bề hơi bé một xíu nhưng vẫn ngọt thịt, tôm bóc sẵn đỏ au, không bị bở kiểu đông lạnh, ghẹ xé nhỏ mà nhiều lắm nha. Duy chỉ có cái chả cá thái lát là mình hem thích, ăn miếng to hẳn đã miệng hơn  \r\nNước dùng ở đây đậm đà, không quá ngọt như nhiều quán khác, độ sệt vừa phải. Sợi bánh canh tươi hút sụp ngon ghê, mướt mải lắm kiki. Điểm trừ nho nhỏ là tóp mỡ chiên phồng hơi mùi khét, có lẽ là do chiên quá tay thì phải  \r\n', 9, NULL, 35000, 75000, 'img/doan/35.1.jpg', '2021-01-05 18:13:49', 0),
(86, 4, 9, 38, '16/4', NULL, NULL, 'Đồ ăn Hàn Quốc', ' Mình mới phát hiện ra quán này, quán ăn Hàn Quốc mà giá rất mềm, nhưng mà ngon không đùa được.\r\nỞ quán có đầy đủ từ nướng, lẩu, gà xào phô mai, sườn nướng,... nhưng mình là đứa nghiện thịt nướng nên không ngại ngần gọi luôn Thịt nướng Kim Chi.\r\nThịt ở quán khá tươi, chỉ tẩm ướp một chút hạt tiêu, còn lại giữ nguyên vị của thịt nên rất ngọt. Có mấy loại thịt như là : thịt ba chỉ lợn, ba chỉ bò, vịt Hàn Quốc, lõi vai, với thịt nướng Kochuchang. Giá mỗi đĩa là từ 25k-45k.\r\nĐồ ăn kèm là rau xà lách, nấm, kim chi, phomai... Phô mai ăn cùng thịt nướng, với chút kim chi, vừa cay cay, vừa ngậy ngậy, đưa miệng kinh khủng.\r\n Ở quán không có buffet hay combo mà gọi món. Nên đồ ra rất nhanh.\r\n Một điểm trừ nho nhỏ là hôm qua mình ngồi phải bàn hút mùi bị hỏng (do là quán đông quá với mình không đặt bàn trước) nhưng cũng không bị ám mùi lắm. Mọi người qua quán nhớ đặt bàn trước nhé, vì mình thấy buổi tối quán khá đông!\r\n~Hôm qua mình ăn hết 250k/2 người (cả đồ uống)!\r\n', 9, NULL, 120000, 150000, 'img/doan/36.jpg', '2021-01-05 18:15:12', 0),
(87, 27, 4, 42, '18', NULL, NULL, 'Bún hải sản', 'LÊN CƠN THÈM BÚN HẢI SẢN THÌ ĐI ĐÂU??   \r\nVã bún hải sản, lên group mình search bún hải sản khu Đống Đa thì ra bài review hơn 1k likes ở Số 18 Hoàng Ngọc Phách, đọc comment khen nhìu nên cũng mò ra ăn thử :> \r\n35-45K/bát quá ư là chất lượng. Mình gọi 2 bát bún Thái 45K đầy đủ mực, tôm, ngao, chả cá, nấm kim, thịt bò lun. Bưng ra sợi bún to, nước dùng đẫm màu đã ưng rùi. \r\nHải sản khá tươi, ngao không bị sạn, vị đậm đà chua cay đã miệng lắm nè. \r\nThêm trà thái xanh uống mát ruột okela vỡi !\r\n\r\n', 9, NULL, 35000, 45000, 'img/doan/37.jpg', '2021-01-05 18:17:23', 0),
(88, 4, 1, 12, '17 B14', '09:00:00', '22:00:00', 'Milo đá bào trân châu', 'Milo đá bào trân châu đường đen tô to bự 25k: \r\nCả 1 tô đầy ắp trân châu đường đen, milo, bánh oreo, hạt ngũ cốc trộn với đá bào rôm rốp mát lạnh, thơm vị milo cacao  . Mới đầu t ăn hơi ngọt nhưng sau đá tan ra sẽ vừa hơn đó.\r\n', 8, 25000, NULL, NULL, 'img/doan/38.jpg', '2021-01-05 18:21:33', 0),
(89, 25, 5, 8, '29', '06:00:00', '20:00:00', 'Bánh mì muối ớt', 'Quán bánh mỳ muối ớt hot hit một thời nay đi thẩm lại vẫn ngon như ngày nào. Bánh mỳ được nướng giòn, đẫm sốt dã man. Topping bên trên có ruốc, xúc xích, bò khô, tép khô nữa. Một suất fulltopping là 20k, trà đào mình gọi uống cũng oke lắm. Món này ăn vặt buổi chiều là hết ý, riêng mình ăn đã ăn hai suất rồi  ', 8, 20000, NULL, NULL, 'img/doan/39.jpg', '2021-01-05 18:23:44', 0),
(90, 4, 4, 8, '8 Ngõ 91', '09:00:00', '21:00:00', 'Súp cua trứng bắc thảo', 'Hôm vừa rồi được đứa bạn rủ rê đổi bữa đi ăn súp cua trứng bắc thảo nè, thấy món này trong miền Nam nổi lắm mà ngoài Hà Nội thấy cũng hiếm nơi có, hay vì tui chưa khám phá ra nhỉ  \r\nQuán bé bé xinh xinh nằm trong ngõ nhỏ trên phố Chùa Láng, không gian sáng sủa sạch sẽ phết, điều hoà mát rượi, tuy hơi ít chỗ ngồi  \r\nThấy menu cũng đơn giản với mấy món súp gà ngô, súp cua trứng bắc thảo, súp cua óc heo, thêm topping nếu muốn (Menu mình up ở dưới). Và nhất định phải có thêm mấy loại nước rau má đúng như tên quán  . Bát súp trứng bắc thảo thì được đựng trong bát tô nhỏ, bát thêm óc heo thì đựng trong niêu nhìn mà choáng ngợp luôn ấy, với sức ăn con gái thì 2 người 1 bát chắc cũng no . Súp sánh mịn, đậm đà vừa miệng, ăn kèm óc heo hay cua, gà xé đều vô cùng hợp . Tuy nhiên trứng được có nửa quả thui à, mà tui thích ăn trứng bắc thảo quá trời nên không bõ  \r\nNước rau má thì thơm mát lạnh, thanh thanh, thích nhất là ly rau má đậu xanh bùi bùi, mấy hôm nắng nóng mà được một ngụm thì mê thật sự  Món tui kết nhất có lẽ là đĩa ngô xào trứng muối, ui thơm phức từ lúc bếp đang chế biến đến lúc bê ra, ngô thơm ngọt kèm trứng muối mằn mặt ăn rồi lại muốn gọi thêm  \r\n', 9, NULL, 10000, 37000, 'img/doan/40.jpg', '2021-01-05 18:25:03', 0),
(91, 4, 4, 2, '108 ngõ C4', NULL, NULL, 'Mì trộn Indomie', 'Có bác nào đam mê mì trộn Indomie giống em không ạ  Thề là thích ăn mì này dã man mà ăn ở nhà lại lười làm nên thỉnh thoảng thấy chỗ nào bán đều mua ăn thử. \r\nQuán này ngay ngõ 4C Đặng Văn Ngữ nha, điểm nhận dạng siêu dễ nhìn là nó “Màu Hường” các ông ạ  \r\nTui nay gọi 1 mì mix bánh gà, 1 mì nem chua, 1 mì thập cẩm và 5 bánh gà. Ở đây mì chỉ dùng chung 1 loại cho tất cả chứ không nhiều loại như các chỗ khác, sợi mì chụng vừa tới, không bị nát  Kết hợp với các loại viên như bò, cá, viên phomai, hồ lô,.. ai thích ăn nhiều viên thì gọi thêm nè.\r\nMột điểm lạ là ở đây có mì mix thêm cả bánh gà hoặc nem chua rán ăn cũng khá hay ho nhưng tui thấy nem chua mix hợp hơn là cùng bánh gà  \r\nCòn nếu thích ăn bánh gà thì có thể gọi riêng để ăn. Phần thịt gà bên trong mềm, phía vỏ ngoài giòn, không bị ngấm mỡ, chấm với tương cà, tương ớt ăn okela phết nha  \r\n', 8, NULL, 5000, 40000, 'img/doan/51.jpg', '2021-01-06 15:32:04', 0),
(92, 28, 13, 43, 'Đối diện cầu Khương Đình', NULL, NULL, 'Ngô xào tép', 'Đố ai tìm được xe đẩy bán ngô xào mà 20k đầy ú ụ ngô tép vị tuyệt đỉnh như này đấy :))\r\nNgô xào lâu rất kĩ, rất dẻo và ngấm gia vị. Nhiều tép dã man, mà tép lại còn giòn giòn cơ ko xỉu xỉu mốc mốc như mấy hàng bt á  Còn vị ngon thôi r, là sự cân bằng đủ ngậy thơm ngọt cay đậm. Ai thích ăn cay bảo cô làm nhiều ớt ăn mùa đông đã hơn á :))\r\nCô bán hàng có tâm trong việc nấu ăn lắm á. Ví dụ điển hình chính là nêm nếm kĩ mình mới nói bên trên. Ví dụ khác là khi mình hỏi ngô nào ngon hơn cô bảo ngô nếp ngon hơn dù ngô nếp cô bán rẻ hơn ngô ngọt (mình từng gặp hàng tư vấn lấy ngô ngọt 25k cho nhiều xiền r). À mình cũng ăn ngô ngọt r cũng ngon lém, nhưng vì ngô ngọt ngọt quá nên các vị khác như bơ, tép bị chìm nên mình thích ngô nếp hơn  \r\nThử tưởng tượng chiều 1 tối mùa đông Hà Nội vừa có gió lạnh se se vừa được ăn và hít hà mùi thơm bơ tép của ngô xào, nếu có combo người iu để ăn cùng nữa thì per phẹc =)). Hãy đến với quán xe đẩy của cô, mình tin các bạn sẽ được nếm trọn vẹn hương vị của mùa đông Hà Nội :”>\r\n', 9, 20000, NULL, NULL, 'img/doan/52.jpg', '2021-01-06 15:35:06', 0),
(93, 4, 9, 38, '22', '16:00:00', '23:00:00', 'Nướng Sapa', 'Ai team thích đồ nướng kiểu SaPa thật sự ko thể bỏ qua quán này nha  .\r\nKhông những thế bát nước chấm gia truyền gây NGHIỆN còn là chuẩn hương vị Tây Bắc ko nên bỏ qua  \r\nVới tiêu chí NGON- BỔ - RẺ mà vẫn đảm bảo vệ sinh SẠCH SẼ - ĐỒ TƯƠI NGON . Truyền thống nhà làm 15 năm với lượng khách quen nghiện ngập lâu năm nay Tại Yên Bái ( Đồ nướng Thành Dung ) ko ai ko biết ở quê nhà . Giờ thì thoả mãn cơn thèm cho các c/e bất cứ lúc nào cũng có thể đi ăn được ngay tại thủ đô mà giá và gia vị vẫn chuẩn 100%  . \r\n', 8, 130000, NULL, NULL, 'img/doan/53.jpg', '2021-01-06 15:37:33', 0),
(94, 4, 2, 38, '75', '08:00:00', '23:00:00', 'Nước rau má', 'Lúc đầu chúng mình phân vân dữ xem có nên ghé quán không vì chưa uống rau má bao giờ nhưng vì bạn bè bảo quán xinh xẻo lắm nên mới tạt vào. \r\n Biển hiệu khá là bắt mắt, quán có tông xanh lá dịu nhẹ nên nhìn cũng ưng phết. \r\n Chúng mình được tư vấn là rau má sữa dừa dễ uống, và còn gọi thêm rau má quất/cam đào/macchiato/thường/đậu xanh, nên được anh quản lí tặng cho hai phần ăn vặt là bánh tráng cuốn và khoai lang sấy mật. \r\n Vị được yêu thích nhất là rau má đậu xanh vì mùi đậu xanh trội hơn nên cả ai k thích mùi rau cũng thử được, còn có cả thạch củ năng quán tự làm nên tổng thể rất chi là ưng ý. Rau má cam đào và sữa dừa cũng có mùi thơm, sữa dừa thì ngậy hơn còn cam đào thì mát. \r\n Rau má macchiato là một sự kết hợp mình không recommend. Bạn mình bảo nó uống tanh còn mình lại thấy mặn lợ huhu. Vị rau má nguyên bản thì không có gì đặc biệt, còn rau má quất hơi chua. \r\n Khoai lang sấy mật ngon, dễ ăn, giống bim bim. Bánh tráng cuốn thì hơi chua và khô/cứng so với mình nhưng bạn mình bảo ai thích ăn bánh tráng sẽ thấy được. \r\n May cực vì quán mới mở, hôm đấy gặp được anh quản lí tại quán, nên bọn mình cũng được hỏi han xem đồ ăn uống ưng không. Các bạn nhân viên khác thì khá dễ tính. \r\n Tóm lại, quán nằm ở con ngõ nhộn nhịp, chỗ này nhiều cafe, nhiều quán ăn nhậu phết. Ai thích thử nước rau má thì nên ghé, ngồi với bạn bè chill tí, quán cũng chứa được tầm ~20 khách thui. \r\n', 8, NULL, 18000, 40000, 'img/doan/54.jpg', '2021-01-06 15:39:20', 0),
(95, 4, 9, 44, '111 A2', NULL, NULL, 'Lẩu thái', 'Tình cờ được đứa bạn nó mách cho cái hàng lẩu này trong ngõ hẻm mà đúng rẻ ngon lun ạ.\r\nTôi gọi một set lẩu (300) ăn đẫm miệng phết đĩa đồ đầy đặn có đậu, thịt bò, ngao, bạch tuộc à và đặc biệt ở đây không có độn rau nha. Nước lẩu chua cay vừa vặn ngậy nhẹ cốt dừa, tôi có trụng mì mà không bị mặn, ăn đến cuối chỉ hơi đậm lên tí thôi.\r\nTrong set lẩu còn có lòng, từng miếng trần lên cứ múp míp nhìn thích mắt, mà ăn lại không bị ngăm đắng tí nào. \r\nGà rang muối (95) vỏ xém vàng nhìn tưởng khô mà bên trong mướt lắm. Từng miếng thấm gia vị, hợp để ăn lai dai lắm nhé.\r\nNgô chiên (50) thì tôi thấy kiểu cũng bình thường thôi, không quá là suất xắc.\r\nChỗ này tôi đi 4 người ăn vừa no đứng dậy mỗi người tầm 130 cành thôi, với chất lượng lẩu thái ở đây tôi thấy là hợp tiêu chí ngon rẻ nhaa.\r\nQuán hơi khó tìm các bác đến 17 Vĩnh Hồ thì rẽ rồi đâm thẳng vào sân tập thể trong là thấy lun, hoặc xài chiêu của tôi “đường ở mồm” nhé\r\n', 9, 300000, NULL, NULL, 'img/doan/55.jpg', '2021-01-06 15:41:25', 0),
(96, 29, 4, 30, '29', '09:00:00', '15:00:00', 'Bún chả bà Vượng', 'Quán này mình được chị đồng nghiệp giới thiệu, chị ở Sài Gòn một thời gian, mà khi nhắc đến bún chả, chị ấy chỉ kịch liệt review mình tới đây. Lần cuối chị ấy ăn quán này cách đây 2 năm. Chị bảo ăn bún chả bà Vượng rồi là không còn thấy quán nào ở HN ngon hơn.\r\n.\r\nBún chả ở đây giá 40k/bát, dù là lẫn, hay chả băm riêng. Bát nước chấm trong lắm, thêm tí tỏi ớt vào là ok. Chả nướng vừa tới, không bị cháy đen, không quá mỡ, chả băm thì được quấn trong lá xương sông. Giờ ở Hà Nội, kiếm được quán có chả xương sông như này chắc đếm trên đầu ngón tay. Một suất đi kèm đĩa bún khá bé, nhưng mình ăn xong thấy no căng đét ấy. Nem cua bể nhiều nhân, bao nhiêu thịt rồi mộc nhĩ, vỏ giòn rụm, chấm cùng nước chấm vừa miệng, ăn bon mồm dã man. À sữa đậu ở đây cũng ưng cực, không bị loãng hay nhiều đá mà cũng không bị ngọt quá đâu.\r\n.\r\nVì bữa này mình được mời, quán cũng không có menu ghi giá tiền nên mình cũng không biết giá chính xác từng món như nào. Chỉ biết 1 suất bún chả giá 40k còn tổng thiệt hại của bàn mình hôm đó là 190k gồm 3 suất bún chả, 4 nem cua bể, 2 sữa đậu, 1 trà đá.\r\n\r\n', 8, 40000, NULL, NULL, 'img/doan/56.jpg', '2021-01-06 15:44:02', 0),
(97, 23, 4, 36, 'Ngách 49', NULL, NULL, 'Phở bò chín sốt vang', 'Nghe danh quán này đã lâu giờ mới có dịp đi qua ăn thử 😂 Quán này nằm tít trong ngõ Thổ Quan, nhưng cũng dễ tìm lắm, chỗ ngồi cũng thoải mái. Các cô bác bán hàng dễ thương mà nhiệt tình, nói chung là siêu ưng ý ❤️\r\nTui gọi 1 bát phở bò chín thêm sốt vang là 40k, 1 đĩa quẩy 20k và 1 ly sữa đậu của hàng nước bên cạnh 😍 Bát phở chất lượng nhiều bánh, nhiều thịt ăn no căng rốn. Ưng nhất khoản sốt vang ở đây, miếng to mà nhiều lắm, ăn không hề vụn nhé. Nước dùng t ăn thì thấy hơi mặn chút xíu, thêm tí giấm ớt nữa thì thấy vừa vặn hơn. À nói qua hàng nước bên cạnh 😂 sữa đậu uống cx ngon nhg mà ngọt quá thể :)) nếu có gọi thì các bạn nhớ xin thêm đá nha, một cốc cũng to phết ý 👍🏻\r\n', 9, 40000, NULL, NULL, 'img/doan/57.jpg', '2021-01-06 15:45:54', 0),
(98, 23, 13, 29, '164', '14:00:00', '17:00:00', 'Quẩy đùi gà', 'Chiều chiều ra mua gói quẩy đùi gà trên phố Thái Thịnh ăn cho đỡ buồn mồm  Quán này cũng lâu lắm rồi thấy lúc nào qua cũng xếp hàng mua. Quẩy chiên vàng ruộm, ăn mềm vị ngọt nhẹ đọng lại, 1k/c mua tầm chục cái ăn cũng đã đời  Mỗi tội quẩy “đùi gà” mà hình dáng thì sai quá sai   ', 8, 1000, NULL, NULL, 'img/doan/58.jpg', '2021-01-06 15:48:32', 0),
(99, 23, 13, 17, '111', '14:00:00', '19:00:00', 'Dồi sụn nướng', 'Đam mê món dồi sụn lắm luôn, tui đang quyết tâm ăn cho bằng hết các quán dồi sụn ở HN đây  Hôm qua ngõ chợ Khâm Thiên thấy một hàng mà như vớ đc vàng vậy xà vào ăn luôn cho đỡ thèm  \r\n.\r\nDồi sụn ở đây bán 15k/lạng ăn thấy kha khá nhiều sụn, sụn non , giòn sừn sựt chứ k bị cứng, tẩm ướp đậm đà, nướng vàng óng thơm lừng chấm kèm với sốt của quán. Gọi 3 lạng là 45k cho 2 đứa ăn đã đời luôn. \r\n', 9, 45000, NULL, NULL, 'img/doan/59.jpg', '2021-01-06 15:51:00', 0),
(100, 23, 5, 2, '7A ngõ 4C', NULL, NULL, 'Bánh mì nem khoai', 'Chiếc bánh mỳ nem khoai siêu HOT ngay khu thiên đường ăn uống Đặng Văn Ngữ   Về cảm quan ban đầu thì bánh khá là to, nem khoai nhiều, đặc biệt là nem chua rán ở đây, dài phết :)) không kiểu ngắn tủn hủn như các hàng khác đâu nha. Nem vs khoai được rán giòn, tuy vậy tui k thích lớp bột ở đây lắm, ăn kiểu dẻo dẻo xong hay bị giắt vào răng ý ;( À đứng để ý thấy trong bánh còn được rắc thêm tí bột phomai ăn cho thêm ngậy nữa nha, lần đầu thấy có chỗ làm theo kiểu này, khá lạ  \r\n\r\nĐể vote cho món này thì cảm thấy không ngon bằng bánh mỳ nem khoai ở số 6 Hương Viên đâu, thực sự ý. Ăn nhiều lần ở Hương Viên r mà vẫn chưa thấy có chỗ nào ngon hơn nơi đây. Tuy vậy với mức giá 20k mà được đầy đặn thế này cũng đáng để thử một lần  \r\n', 7, 20000, NULL, NULL, 'img/doan/60.jpg', '2021-01-06 15:52:18', 0),
(101, 4, 9, 45, '118 K1', NULL, NULL, 'Buffet lẩu Nhật', 'Thường qua Daruma hay gọi món lẻ ăn thôi, đc dịp liên hoan đi đông đông nên gọi buffet cho tiện  Buffet lẩu Nhật ở đây là 299k/ng (chưa gồm thuế VAT) theo tui đánh giá là khá ổn  \r\n.\r\nVề nước lẩu: Tui chọn nồi lẩu 2 ngăn ăn cho thoải mái, lẩu shabu shabu và kimchi miso. Lẩu Shabu ăn ngon hơn hẳn, đậm vị, thơm nức, mà lại k cay rất dễ ăn. Lẩu Kimchi miso thì chắc chắn cay r nhg mà cái vị kimchi cho vào miso ăn cứ ngang ngang lờ lợ k quen cho lắm nên cả bàn đều nhúng ăn shabu hết  \r\n.\r\nVề đồ nhúng: set 299k có cả hải sản và thịt bò nhé. Thịt thì có bắp hoa bò Mỹ, Ba Chỉ bò Mỹ, nạc vai bò Mỹ, ba chỉ heo, há cảo, xúc xích nấm. Hải sản có tôm sú, mực trứng, lườn cá hồi, cá basa file, cá ngừ,.. rau nhúng thì nhiều loại lắm k kể hết đc chỉ nhớ có cái phù trúc cá cuộn, chả cá xoắn ăn ngon tui gọi nhiều 2 món này nhất. Thịt thái mỏng tanh nhúng lẩu ăn k ngấy chút nào, bắp hoa bò Mỹ ăn ổn nhất, cứ gọi thịt bò thôi thịt heo ăn bt lắm  . Hải sản cũng tươi, có cả cá hồi vs cá ngừ ăn nhoè mồm  \r\n.\r\nVề phục vụ: Tui ăn tầm tối nên đông, đợi đồ lên lâu cũng phải 15p mới có đói mốc meo luôn  Được cái các bạn nhân viên rất nhiệt tình, bạn quản lý cx nhanh nhẹn thấy bàn mình đợi lâu nên cx ưu tiên cho đồ trước  \r\n', 9, 299000, NULL, NULL, 'img/doan/61.jpg', '2021-01-06 15:55:22', 0),
(102, 4, 5, 10, '169G', NULL, NULL, 'Bánh mì bò Pino', 'Tui thấy bánh mì BMore có nhiều hương vị lạ phết nè!! Thường các chỗ khác cũng chỉ có pate, trứng, thịt, chả,xúc xích,....Mà ở đây có cả vị bò sốt Ý rồi gà nướng sốt Thái, cả vịt quay nữa, nói chung cũng gọi là mới mẻ hơn so với mặt bằng chung bây giờ  \r\nHôm qua mua ăn thử 2 loại là Bánh mì Bò Pino (16k), Bánh mì Quạc Quạc (22k) thêm 1 ly trà atiso, sữa bắp. Trước tiên phải nói đến cảm quan ban đầu thì bánh mì ở đây hơi bé, ai ăn khỏe chắc phải làm 2 cái mất  Được cái vỏ bánh mỳ rất mềm và giòn, không ép máy nha mà nướng trực tiếp trong lò nên nhìn bánh mì không bị xép lép \r\nVề hương vị thì tui thích Bánh mì Quạc Quạc hơn. Nhân bánh có vịt quay, sốt cửu vị, bắp cải tím, rau húng, xà lách. Phần thịt vịt ăn mềm, thái không bị vụn lắm, có thêm mùi rau húng cảm giác cũng ngon hơn!! Cái sốt cửu vị được cái đậm đà nhưng không cảm nhận rõ được vị lắm  \r\nBánh mì Bò Pino tui đổi vỏ bánh mì thường thành bánh mì tinh than tre (thêm 5k nhé). Phần nhân là bò bằm sốt Ý cho hơi ít nên ăn chưa được đã lắm, có thêm chút khoai lang giòn giòn ăn lạ miệng phết. Phần sốt sữa chua cũng chưa thấy rõ vị, kiểu như nó không mang lại cái hương vị rõ rệt mà ăn phát cảm nhận được luôn  \r\nTóm lại t đánh giá ở đây có nhiều loại bánh khá mới lạ, giá cũng không quá cao, có thể sẽ quay lại mua ăn thêm để thử các loại bánh khác  \r\n', 8, NULL, 16000, 22000, 'img/doan/62.jpg', '2021-01-06 15:57:17', 0),
(103, 27, 5, 17, '100', NULL, NULL, 'Tiệm bánh hợp tác xã', 'Tiệm bánh nằm tít trong ngõ chợ Khâm Thiên, nếu không biết qua fb thì t cũng chả biết đến mà lần   Ở đây có món bánh tart trứng được khen nhiều phết nên cũng tò mò đến mua về ăn thử  \r\n1 chiếc thế này là 12k nha, để trong tủ mát, lúc mua cô bán bánh sẽ hỏi có làm nóng bánh lại luôn không, nên ăn lúc nóng các bác nhé, thấy ngon hơn hẳn. Về cơ bản bánh ăn cũng ổn, vỏ bánh nghìn lớp ăn xốp, mềm, ít thấm dầu. Nhân kem trứng vàng óng, béo ngậy, hơi nhanh ngấy xíu ăn đến cái thứ 2 là đã ngấy rồi  Để đánh giá thì bánh này chỉ tạm dừng lại mức ổn thôi, ăn vui vui thì cx đc ăn nhiều nhanh béo  \r\n', 8, 12000, NULL, NULL, 'img/doan/63.jpg', '2021-01-06 16:06:49', 0),
(104, 26, 9, 41, '93', NULL, NULL, 'Nướng', 'Nằm vùng cũng lâu lâu rồi mà giờ mới ngoi lên Review cho mọi người một quán nướng tủ.\r\n- Không gian  : quán kiểu nướng đường phố thôi, không có không gian chảnh chảnh đâu, mà lúc nào cũng đông người ý, tối nay đến thấy FULL bàn sớm luôn.\r\n- Đồ ăn  : ở đây có nướng và lẩu, tuy đã ăn nhiều lần nhưng mình toàn ăn nướng thôi, vì thế mình không review lẩu nha. \r\n+ Đồ nướng: bò, nầm, ba chỉ, dạ dày - cả 4 loại mình thấy đều ngon, miếng OK, không bị mỏng, không bị mỡ.\r\n+ Đồ ăn kèm: bánh mì nướng bơ mật ong, ngoăn ngoăn lắm luôn. Ngô, khoai chiên, ... (các đồ kiểu kim chi các thứ không nói nha, chỗ nào cũng có vậy à)\r\n+ Đồ chấm: muối ớt chanh + nước sốt tương cay ngọt (mình chỉ chấm muối ớt chanh thôi, sốt thì mình thấy không ngon, nhưng bạn mình thì ngược lại)\r\n+ Đồ uống: trà đá, các loại nước đóng chai, và ở đây có nước bí đao nhạt nhạt + hạt chia chai nhựa đỉnh luôn, cả lũ đều thích ý.\r\n- Giá  : đồ nướng ở đây không phải buffee. Tính tiền theo suất, đi bao nhiêu người thì bấy nhiêu suất. \r\nMình đi 6 người (trong ảnh là suất 5 người, về sau mình gọi thêm 1 suất): 6 suất đủ (rau Free, kim chi 1 có sẵn) + 2 đĩa bánh mì + 1 Ngô chiên + 1 Âu trà đá + 2 chai sâm hạt chia = 830k\r\n- Nhân viên  : Rất là nhiệt tình luôn nha cả nhà mình yêu!\r\n Tổng kết: thích, ăn nhiều lần rồi nhưng giờ mới là thời điểm thích hợp để review ạ.\r\n', 9, 140000, NULL, NULL, 'img/doan/64.1.jpg', '2021-01-06 16:08:28', 0),
(105, 30, 9, 1, '230', NULL, NULL, 'Lẩu', 'Hôm đi ăn mình được phục vụ theo cách cũng khá \"hú hồn\"  \r\nLúc ra được nồi lẩu xong mình thấy hơi lâu, cũng không biết tại sao. Xong hỏi một cái thì ôi thôi ạ, ngập ngụa bàn, mà thịt bàn mình ăn lúc lên đồ lần đầu tiên khéo phải 6 khay thịt  mấy bạn nhân viên chờ cho ra cả cục à  \r\nGọi lần 2 thì được 4 khay mà phải ăn cố  \r\nCác đồ nhúng khác thì ok, đầy đặn, vì set này không có hải sản nên cũng không có gì nhiều  \r\nNước lẩu 2 ngăn, 1 bên lẩu nấm 1 bên lẩu tomyum thì đúng là nước lẩu ở Food House chưa bao giờ làm mình thất vọng thật, chua ngọt cay rất đậm đà  \r\nMột điểm trừ là đồ chiên rán như khoai lang kén, khoai tây chiên, bánh bao khá mỡ  \r\n Nhìn chung là set này đáng ăn, không tệ, nhưng khuyết mất phần hải sản nha, mình thì ít ăn hải sản nên bỏ qua  \r\n', 8, NULL, 99000, 129000, 'img/doan/65.jpg', '2021-01-06 16:10:27', 0),
(106, 26, 6, 29, '20/35', NULL, NULL, 'Đồ ăn Hàn Quốc', 'Fan đồ Hàn không thử hơi phí  \r\n- Lần đầu ghé qua ăn tại quán và mình thực sự bị mê cái cách trang trí của quán... Decor nền xám kết hợp với đồ giả cổ tạo cảm giác chill dã man... Đồ đạc thì gọn gàng và rất là sang choảnh nữa. \r\nVề đồ ăn thì cũng có thể chấm 9/10 lunn. Quán phục vụ khá là nhanh gọn \r\nMình gọi combo Mỳ Tương Đen+ Tokk + Cơm trộn thập cẩm và 2 Trà thái. Ui thực sự là trà thái ở đây is the best luôn ấy  Không quá ngọt ngậy vừa đủ và rất là thơmmm . \r\n Tokk thì phải cho 10/10 vì thật sự là nó ngon vai chuong í ăn mãi vẫn không thấy chán. Khác những chỗ khác là quán còn cho kim chi vào tokk nè Tokk mềm chả cá dẻo và thơmm \r\n Cơm thì mềm dẻo nêm rất là vừa ăn 1 tô đầy ú ăn no ná thở lunnn  \r\n Mỳ tương đen thì không được đỉnh bằng hai món kia chắc vì hơi ít rau kèm nên bị mặn một chút. \r\ncc ai là fan đồ hàn thì nên đến quán thử nhaa . Bth mình hay gọi ship về vì không có thời gian ngồi lâu la. Hôm nay có dịp ghé thật sự rất là ưng lunnn  . \r\nHiện đang áp dụng combo 99k cho ae tha hồ hẹn hò đó  Riêng mình ăn hết chưa tới 200k đâu nè  \r\n', 9, 99000, NULL, NULL, 'img/doan/66.jpg', '2021-01-06 16:12:08', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user_admin`
--

CREATE TABLE `tbl_user_admin` (
  `id_quan_tri` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_dang_nhap` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh_dai_dien` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dang_nhap_cuoi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user_admin`
--

INSERT INTO `tbl_user_admin` (`id_quan_tri`, `ten`, `ten_dang_nhap`, `pass`, `anh_dai_dien`, `dang_nhap_cuoi`) VALUES
(1, 'Đinh Thanh Ngọc', 'admin', 'admin', '../img/thanhngoc.jpg', '2020-11-16 07:06:50'),
(2, 'Đoàn Thị Huyền Trang', 'admin1', 'admin1', '../img/trangdoan.jpg', '2021-01-04 07:48:08'),
(3, 'Trần Huyền Trang', 'admin2', 'admin2', '../img/agent-7.jpg', '2021-01-04 07:48:08'),
(4, 'Bùi Thu Trang', 'admin3', 'admin3', '../img/agent-1.jpg', '2021-01-04 07:48:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user_reviewer`
--

CREATE TABLE `tbl_user_reviewer` (
  `id_reviewer` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_dang_nhap` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pass` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh_dai_dien` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user_reviewer`
--

INSERT INTO `tbl_user_reviewer` (`id_reviewer`, `ten`, `ten_dang_nhap`, `email`, `pass`, `anh_dai_dien`) VALUES
(1, 'Đinh Thanh Ngọc', 'tngoc.d', 'ngocdinh326@gmail.com', '1234', 'img/thanhngoc.jpg'),
(2, 'Đoàn Thị Huyền Trang', '13_6_trang', 'huyentrangdoan1101@gmail.com', '1234', 'img/trangdoan.jpg'),
(3, 'Trần Huyền Trang', 'trang_tran', 'trangchanhchoe2000@gmail.com', '1234', 'img/trangdoan.jpg'),
(4, 'Bùi Thu Trang', 'trn.hh', 'hhtrang15@gmail.com', '1234', 'img/trangbui.jpg'),
(5, 'Nguyễn Hà Anh', 'mokhoet_hanoi', 'jinbts21a4040117@gmail.com', '12345', NULL),
(6, 'Trần Minh Thư', 'bachuaviahe', 'hoseok21a4040117@gmail.com', '12345', NULL),
(7, 'Nguyễn Phương Anh', 'phuonganh.uni', 'suga21a4040117@gmail.com', '12345', NULL),
(8, 'Nguyễn Hà Phương', 'phuongkhonglo', 'nhatnhatkhongnhifihting@gmail.com', '12345', NULL),
(9, 'Đoàn Thu Hằng', 'doan_hang', 'doanhang.13112002nd@gmail.com', '12345', NULL),
(10, 'Phạm Hà Liên', 'ph.lien', 'sayphamlien@gmail.com', '12345', NULL),
(11, 'Trần Thu Hằng', 'hang98', 'thuhang131102@gmail.com', '12345', NULL),
(12, 'Đoàn Khánh Huyền', 'khanhhuyen2', 'madesofine@gmail.com', '12345', NULL),
(13, 'Đỗ Thị Ngọc', 'ngocdox', 'qoaloa@gmail.com', '12345', NULL),
(14, 'Phạm Vũ Thu Trang', '_tr_sismeee', '21a4040117trang@gmail.com', '1234', NULL),
(15, 'Trần Thanh Thảo', 't_thao', 'thanhthaotran2306@gmail.com', '12345', NULL),
(16, 'Tràn Thanh Huyền', 'huyen_tran', 'huyenthanh1308@gmail.com', '12345', NULL),
(17, 'Nguyễn Hà Thu', 'nodiethere', 'nodiet123@gmail.com', '12345', NULL),
(18, 'Phạm Đức Hòa', 'todaytiteat', 'hoatit2k@gmail.com', '12345', NULL),
(19, 'Ngô Thu Phương', 'phuongkhonglo', 'phuongphuong@gmail.com', '12345', NULL),
(20, 'Hà Thị Hòa', 'binpyslife', 'hahoa132@gmail.com', '12345', NULL),
(21, 'Lê Phương Anh', 'pan.anit', 'Phanhpahnh@gmail.cpom', '12345', NULL),
(22, 'Nguyễn Thu Trang', 'trang.meyy', 'trangthu3@gmail.com', '12345', NULL),
(23, 'Lê Minh Hoàng', 'tunluvfood', 'hoangtun224@gmail.com', '12345', NULL),
(24, 'Phạm Thị Thanh Thư', '_troosismeeee', 'thutroos@gmail.com', '12345', NULL),
(25, 'Đinh Thái Sơn', 'eatwithbeann_', 'sonsonsonnn@gmail.com', '12345', NULL),
(26, 'Lê Thanh Tùng', 'chubehanoi', 'tunghn21@gmail.com', '12345', NULL),
(27, 'Hoàng Thùy Chi', 'kerochewchew', 'chithuy@gmail.com', '12345', NULL),
(28, 'Trịnh Tú Anh', 'gaumeo_bloggg', 'tuanhtrinh@gmail.com', '12345', NULL),
(29, 'Trần Thu Giang', 'gt.tran', 'ttrgiang@gmail.com', '12345', NULL),
(30, 'Nguyễn Hoàng Tùng', 'tungboo0107', 'tunghoang17@gmail.com', '12345', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_youtube`
--

CREATE TABLE `tbl_youtube` (
  `id_youtube` int(11) NOT NULL,
  `noi_dung` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_them` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_youtube`
--

INSERT INTO `tbl_youtube` (`id_youtube`, `noi_dung`, `link`, `ngay_them`) VALUES
(3, '[Review] Bỏ túi địa chỉ 5 QUÁN ĂN cực hot quận Đống Đa, Hà Nội | Feedy TV', '6WwjhgLBoGk', '2021-01-17 19:30:28'),
(4, '“ĂN SẬP” KHU CHÙA LÁNG CÙNG TASTING VIETNAM | TastingVietNam', 'HwkaFA39Wr0', '2021-01-17 19:30:28'),
(5, 'Top 5 quán ngon QUẬN ĐỐNG ĐA mà Ninh Tito mê // QUÁN NGON QUẬN MÌNH series', 'YqY-lUZ3JiQ', '2021-01-17 19:31:47');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Chỉ mục cho bảng `tbl_binh_luan`
--
ALTER TABLE `tbl_binh_luan`
  ADD PRIMARY KEY (`id_binh_luan`),
  ADD KEY `id_review` (`id_review`),
  ADD KEY `id_reviewer` (`id_reviewer`);

--
-- Chỉ mục cho bảng `tbl_danh_muc`
--
ALTER TABLE `tbl_danh_muc`
  ADD PRIMARY KEY (`id_danh_muc`);

--
-- Chỉ mục cho bảng `tbl_da_luu`
--
ALTER TABLE `tbl_da_luu`
  ADD PRIMARY KEY (`id_reviewer`,`id_review`),
  ADD KEY `tbl_da_luu_ibfk_1` (`id_review`);

--
-- Chỉ mục cho bảng `tbl_duong`
--
ALTER TABLE `tbl_duong`
  ADD PRIMARY KEY (`id_duong`);

--
-- Chỉ mục cho bảng `tbl_gop_y`
--
ALTER TABLE `tbl_gop_y`
  ADD PRIMARY KEY (`id_gop_y`);

--
-- Chỉ mục cho bảng `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `id_duong` (`id_duong`),
  ADD KEY `id_reviewer` (`id_reviewer`),
  ADD KEY `tbl_review_ibfk_2` (`id_danh_muc`);

--
-- Chỉ mục cho bảng `tbl_user_admin`
--
ALTER TABLE `tbl_user_admin`
  ADD PRIMARY KEY (`id_quan_tri`);

--
-- Chỉ mục cho bảng `tbl_user_reviewer`
--
ALTER TABLE `tbl_user_reviewer`
  ADD PRIMARY KEY (`id_reviewer`);

--
-- Chỉ mục cho bảng `tbl_youtube`
--
ALTER TABLE `tbl_youtube`
  ADD PRIMARY KEY (`id_youtube`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_binh_luan`
--
ALTER TABLE `tbl_binh_luan`
  MODIFY `id_binh_luan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT cho bảng `tbl_danh_muc`
--
ALTER TABLE `tbl_danh_muc`
  MODIFY `id_danh_muc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `tbl_duong`
--
ALTER TABLE `tbl_duong`
  MODIFY `id_duong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `tbl_gop_y`
--
ALTER TABLE `tbl_gop_y`
  MODIFY `id_gop_y` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT cho bảng `tbl_user_admin`
--
ALTER TABLE `tbl_user_admin`
  MODIFY `id_quan_tri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_user_reviewer`
--
ALTER TABLE `tbl_user_reviewer`
  MODIFY `id_reviewer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `tbl_youtube`
--
ALTER TABLE `tbl_youtube`
  MODIFY `id_youtube` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_binh_luan`
--
ALTER TABLE `tbl_binh_luan`
  ADD CONSTRAINT `tbl_binh_luan_ibfk_1` FOREIGN KEY (`id_review`) REFERENCES `tbl_review` (`id_review`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_binh_luan_ibfk_2` FOREIGN KEY (`id_reviewer`) REFERENCES `tbl_user_reviewer` (`id_reviewer`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_da_luu`
--
ALTER TABLE `tbl_da_luu`
  ADD CONSTRAINT `tbl_da_luu_ibfk_1` FOREIGN KEY (`id_review`) REFERENCES `tbl_review` (`id_review`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_da_luu_ibfk_2` FOREIGN KEY (`id_reviewer`) REFERENCES `tbl_user_reviewer` (`id_reviewer`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
