-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2017 at 02:18 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookmarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
`id_book` int(10) NOT NULL,
  `name_book` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `category_book` varchar(45) CHARACTER SET utf8 NOT NULL,
  `price_book` int(11) unsigned NOT NULL,
  `status_book` varchar(30) CHARACTER SET utf8 NOT NULL,
  `author_book` varchar(70) CHARACTER SET utf8 NOT NULL,
  `describe_book` mediumtext CHARACTER SET utf8 NOT NULL,
  `number_book` int(11) unsigned NOT NULL,
  `user_seller_user` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id_book`, `name_book`, `category_book`, `price_book`, `status_book`, `author_book`, `describe_book`, `number_book`, `user_seller_user`) VALUES
(6, ' Kể Chuyện Danh Nhân Việt Nam', 'Danh nhân', 35000, '', 'Nguyễn Phương Bảo An', 'Chúng ta - những người con của Đất Việt luôn có quyền tự hào về những trang sử vẻ vang của dân tộc.\r\n\r\nCuốn sách "Kể chuyện danh nhân Việt Nam" khắc hoạ, phản ánh một cách chân thực, sinh động cuộc đời, sự nghiệp cũng như những chiến công hiển hách của 27 danh nhân lịch sử dân tộc được trình bày theo thứ tự thời gian với mục đích lưu truyền cho các thế hệ sau:\r\n- Bà Triệu (225 - 248).\r\n\r\n- Lý Công Uẩn (974 - 1028).\r\n\r\n- Lý Thường Kiệt (1019 - 1105).\r\n\r\n- Ỷ Lan phu nhân (? – 1117)\r\n', 50, 'duckbb'),
(7, 'Sức Mạnh Của Tĩnh Tâm', 'Văn hóa', 40000, 'New', 'Hải Hoa', '<p>Tr&aacute;i tim của ch&uacute;ng ta giống như một chiếc cốc thủy tinh. Khi cốc đựng đầy nước &eacute;p tr&aacute;i c&acirc;y, người ta sẽ n&oacute;i: &quot;Đ&acirc;y l&agrave; một cốc nước &eacute;p hoa quả&quot;. Khi n&oacute; đựng đầy sữa, người ta lại n&oacute;i: &quot;Đ&acirc;y l&agrave; một cốc sữa&quot;. C&ograve;n chỉ khi chiếc cốc trống trơn th&igrave; người ta mới n&oacute;i: &quot;Đ&acirc;y l&agrave; một c&aacute;i cốc&quot;. Rất nhiều l&uacute;c, tr&aacute;i tim của ch&uacute;ng ta chất chứa qu&aacute; nhiều thứ, đến nỗi kh&ocirc;ng thể nh&igrave;n thấy được c&aacute;i t&ocirc;i ch&acirc;n thực. V&igrave; vậy, chỉ c&oacute; vứt bỏ mọi sự rối ren để t&acirc;m tĩnh lại th&igrave; mới c&oacute; thể xoa dịu được t&acirc;m trạng lo lắng bất an trong l&ograve;ng, lấy lại sự y&ecirc;n b&igrave;nh v&agrave; niềm vui trong tim.</p>\r\n\r\n<p>&quot;Gặp được c&aacute;i t&ocirc;i tĩnh t&acirc;m&quot;, d&ugrave; biết ph&iacute;a trước l&agrave; v&ugrave;ng hiểm trở, bạn cũng c&oacute; thể coi l&agrave; đồng bằng để vững bước đi qua; d&ugrave; trước mắt thế sự b&atilde;i bể nương d&acirc;u, đổi thay nhanh ch&oacute;ng, bạn cũng vẫn c&oacute; được sự b&igrave;nh an trong l&ograve;ng.&quot;Gặp được c&aacute;i t&ocirc;i tĩnh t&acirc;m&quot;, tuy tạm thời phải chịu ấm ức v&agrave; kh&ocirc;ng vui, vẫn c&oacute; thể y&ecirc;n l&ograve;ng; tuy cuộc sống b&igrave;nh dị, cũng c&oacute; thể tận hưởng năm th&aacute;ng b&igrave;nh y&ecirc;n.</p>\r\n', 40, 'duckbb'),
(8, 'Triết Học Albert Camus', 'Văn hóa', 40000, 'New', 'Albert Camus', '<p>Triết học của Albert Camus quan t&acirc;m đến kinh nghiệm sống về c&aacute;i hữu hạn v&agrave; c&aacute;i tuyệt đối (l&rsquo;exp&eacute;rience v&eacute;cue du fini et de l&rsquo;absolu / the lived experience of the finite and the absolute). C&aacute;i hữu hạn l&agrave; cảm thức về t&igrave;nh trạng vong th&acirc;n / ph&oacute;ng thể (alienation) của ch&uacute;ng ta, t&iacute;nh dễ bị tổn thương (vulnerability), sự yếu đuối (weakness), t&iacute;nh bất to&agrave;n (imperfection), t&igrave;nh trạng kh&ocirc;ng ai n&acirc;ng đỡ (helplessness), v&agrave; sự hạn chế của nhận thức (limitation of knowledge). C&oacute; lẽ điều n&agrave;y thường gặp nhất trong t&iacute;nh bất khả ti&ecirc;n liệu (unpredictableness) của những sự việc h&agrave;ng ng&agrave;y. Tuy nhi&ecirc;n t&iacute;nh hữu hạn đ&oacute; lại đồng hiện hữu (coexist) với một &yacute; thức vi diệu về tuyệt đối vốn thường được hiểu, dưới những dạng kh&aacute;c nhau, như một Thượng đế bất biến, hay như một vũ trụ b&iacute; ẩn m&agrave; khởi nguy&ecirc;n hay tận c&ugrave;ng dường như bất khả tư nghị đối với tư tưởng thuần l&yacute; (impenetrable to rational thought), hay cảm thức y&ecirc;n b&igrave;nh v&agrave; duy nhất (one&rsquo;s sense of peace and oneness) trong sự hiện diện của nắng, gi&oacute;, v&agrave; của biển trời, v.v...</p>\r\n', 60, 'maintt'),
(9, 'Tướng Lĩnh Việt Nam Thế Kỉ XX Qua Lời Kể Của Người Thân', 'Lịch sử', 100000, 'New', 'Nguyễn Mạnh Hùng', '<p>T&oacute;m tắt cuốn s&aacute;ch &quot;<strong>Tướng Lĩnh Việt Nam Thế Kỉ XX Qua Lời Kể Của Người Th&acirc;n</strong>&quot;:</p>\r\n\r\n<p>Cuốn s&aacute;ch Tướng Lĩnh Việt Nam Thế Kỉ XX Qua Lời Kể Của Người Th&acirc;n dựng lại ch&acirc;n dung đời thường của những con người từng l&agrave;m n&ecirc;n lịch sử. Cuốn s&aacute;ch gi&uacute;p bạn đọc t&igrave;m hiểu về cuộc sống đời thường của 15 trong số c&aacute;c vị tướng được thụ phong trong thời kỳ chiến tranh giải ph&oacute;ng như Đại tướng Nguyễn Ch&iacute; Thanh, Đại tướng Văn Tiến Dũng, Đại tướng L&ecirc; Đức Anh, Đại tướng L&ecirc; Trọng Tấn, Thượng tướng Ho&agrave;ng Minh Thảo, Trung tướng Phạm Hồng Sơn...</p>\r\n\r\n<p>Kh&ocirc;ng chỉ cung cấp nhiều tư liệu qu&yacute;, cuốn s&aacute;ch c&ograve;n c&oacute; nhiều c&acirc;u chuyện c&oacute; gi&aacute; trị, được viết trung thực, r&otilde; r&agrave;ng về th&acirc;n thế sự nghiệp, thể hiện r&otilde; cốt c&aacute;ch, phương ph&aacute;p, t&aacute;c phong của mỗi vị tướng lĩnh tr&ecirc;n từng cương vị c&ocirc;ng t&aacute;c. Từ đ&oacute;, người đọc thấy được vai tr&ograve; l&atilde;nh đạo, chỉ huy v&agrave; những c&ocirc;ng lao đ&oacute;ng g&oacute;p của c&aacute;c vị tướng lĩnh Việt Nam đối với sự nghiệp C&aacute;ch mạng của Đảng.</p>\r\n\r\n<p>Waka tr&acirc;n trọng giới thiệu s&aacute;ch &quot;<strong>Tướng Lĩnh Việt Nam Thế Kỉ XX Qua Lời Kể Của Người Th&acirc;n</strong>&quot;!</p>\r\n', 200, 'maintt'),
(11, ' Ngô Vương Quyền', 'Lịch sử', 80000, 'old', 'Trần Thanh Mại', '<p><strong><em>B</em></strong><em>ạn đọc thân mến!</em></p>\r\n\r\n<p>Lịch sử văn hóa của một dân tộc không phải của riêng cá nhân nào, chính vì vậy, việc bảo tồn, gìn giữ và phát triển lịch sử văn hóa cũng không phải riêng một người nào có thể gánh vác được, nó thuộc về nhận thức chung của toàn xã hội và vai trò của từng nhân tố trong mỗi chặng đường lịch sử. Lịch sử là một khoa học. Lịch sử không phải là việc thống kê sự kiện một cách khô khan rời rạc. Bởi mỗi sự kiện trong tiến trình đó đều có mối liên kết chặt chẽ với nhau bằng sợi dây vô hình xuyên suốt không gian và thời gian tạo nên lịch sử của một dân tộc.</p>\r\n\r\n<p>Đồng hành với mối quan tâm của toàn xã hội, Công ty Cổ phần Sách Alpha - một doanh nghiệp hoạt động trong lĩnh vực xuất bản, với tôn chỉ “Tri thức là sức mạnh” - đặc biệt quan tâm tới việc góp phần nâng cao hiểu biết của người dân về truyền thống văn hóa lịch sử đất nước.</p>\r\n\r\n<p>Theo nhiều kết quả khảo sát, đánh giá nhu cầu của bạn đọc cho thấy, “lỗ hổng lịch sử” ở không ít người trẻ hiện nay hoàn toàn có thể bù lấp một phần dựa trên nhiều nguồn tư liệu, công trình nghiên cứu, sách cổ sách quý hiện đang được các Viện nghiên cứu, các tổ chức, cá nhân lưu giữ. Để chung tay tái hiện một cách rõ nét những mảnh ghép lịch sử dân tộc, Công ty Cổ phần Sách Alpha đã triển khai dự án xuất bản mang tên Góc nhìn sử Việt với mục đích xuất bản lại và xuất bản mới một cách có hệ thống các công trình, tư liệu, sách nghiên cứu, sách văn học có giá trị… về lịch sử, bước đầu hình thành nên Tủ sách Alpha Di sản.</p>\r\n\r\n<p>Cuốn sách bạn đang cầm trên tay là một trong những sản phẩm đầu tiên của dự án này.</p>\r\n\r\n<p><em><strong>Xin trân trọng giới thiệu!</strong></em></p>\r\n\r\n<p> Mời các bạn đón đọc sách <strong>Ngô Vương Quyền.</strong></p>\r\n', 8, 'giangbv'),
(12, ' Đất Nước Việt Nam Qua Các Đời', 'Lịch sử', 25000, 'old', 'Đào Duy Anh', '<p>Giới thiệu</p>\r\n\r\n<p>Tóm tắt sách <strong>Đất nước Việt Nam qua các đời.</strong></p>\r\n\r\n<p><strong><em>B</em></strong><em>ạn đọc thân mến!</em></p>\r\n\r\n<p>Lịch sử văn hóa của một dân tộc không phải của riêng cá nhân nào, chính vì vậy, việc bảo tồn, gìn giữ và phát triển lịch sử văn hóa cũng không phải riêng một người nào có thể gánh vác được, nó thuộc về nhận thức chung của toàn xã hội và vai trò của từng nhân tố trong mỗi chặng đường lịch sử. Lịch sử là một khoa học. Lịch sử không phải là việc thống kê sự kiện một cách khô khan rời rạc. Bởi mỗi sự kiện trong tiến trình đó đều có mối liên kết chặt chẽ với nhau bằng sợi dây vô hình xuyên suốt không gian và thời gian tạo nên lịch sử của một dân tộc.</p>\r\n\r\n<p>Đồng hành với mối quan tâm của toàn xã hội, Công ty Cổ phần Sách Alpha - một doanh nghiệp hoạt động trong lĩnh vực xuất bản, với tôn chỉ “Tri thức là sức mạnh” - đặc biệt quan tâm tới việc góp phần nâng cao hiểu biết của người dân về truyền thống văn hóa lịch sử đất nước.</p>\r\n\r\n<p>Theo nhiều kết quả khảo sát, đánh giá nhu cầu của bạn đọc cho thấy, “lỗ hổng lịch sử” ở không ít người trẻ hiện nay hoàn toàn có thể bù lấp một phần dựa trên nhiều nguồn tư liệu, công trình nghiên cứu, sách cổ sách quý hiện đang được các Viện nghiên cứu, các tổ chức, cá nhân lưu giữ. Để chung tay tái hiện một cách rõ nét những mảnh ghép lịch sử dân tộc, Công ty Cổ phần Sách Alpha đã triển khai dự án xuất bản mang tên Góc nhìn sử Việt với mục đích xuất bản lại và xuất bản mới một cách có hệ thống các công trình, tư liệu, sách nghiên cứu, sách văn học có giá trị… về lịch sử, bước đầu hình thành nên Tủ sách Alpha Di sản.</p>\r\n\r\n<p>Cuốn sách bạn đang cầm trên tay là một trong những sản phẩm đầu tiên của dự án này.</p>\r\n\r\n<p><em><strong>Xin trân trọng giới thiệu!</strong></em></p>\r\n\r\n<p>Waka trân trọng giới thiệu sách <strong>Đất nước Việt Nam qua các đời.</strong></p>\r\n', 50, 'giangbv'),
(13, 'Bá Tước Monto Crixto', 'Văn học', 30000, 'New', 'Alexandre Dumas', '<p><strong>B&aacute; tước Monte Cristo</strong>&nbsp;l&agrave; một tiểu thuyết phi&ecirc;u lưu của Alexandre Dumas cha. C&ugrave;ng với một t&aacute;c phẩm kh&aacute;c của &ocirc;ng l&agrave; Ba ch&agrave;ng l&iacute;nh ngự l&acirc;m, t&aacute;c phẩm thường được xem l&agrave; t&aacute;c phẩm văn học nổi tiếng nhất của Dumas.</p>\r\n\r\n<p>Mời c&aacute;c bạn đ&oacute;n đọc s&aacute;ch&nbsp;<strong>B&aacute; tước Monto Crixto.</strong></p>\r\n', 50, 'maintt'),
(15, 'Đô Thị Cổ Hội An - Di Sản Văn Hóa Thế Giới', 'Văn hóa', 15000, 'New', 'Nguyễn Trung Hiếu', '<p>T&oacute;m tắt cuốn s&aacute;ch &quot;<strong>Đ&ocirc; Thị Cổ Hội An - Di Sản Văn H&oacute;a Thế Giới</strong>&quot;:</p>\r\n\r\n<p>Nếu bạn l&agrave; người y&ecirc;u th&iacute;ch lịch sử v&agrave; đang c&oacute; &yacute; định tham quan Hội An th&igrave; đ&acirc;y l&agrave; cuốn s&aacute;ch n&ecirc;n tham khảo trước chuyến đi. Cuốn s&aacute;ch đề cập đến hầu hết c&aacute;c di t&iacute;ch lịch sử, văn h&oacute;a nổi tiếng của Hội An. Ngo&agrave;i việc giới thiệu, t&aacute;c giả c&ograve;n tr&igrave;nh b&agrave;y qu&aacute; tr&igrave;nh ph&aacute;t triển, n&eacute;t đặc sắc của c&aacute;c nh&agrave; cổ, &yacute; nghĩa của c&aacute;c di t&iacute;ch lịch sử, nguồn gốc, n&eacute;t đặc sắc của ẩm thực, c&aacute;c tr&ograve; chơi d&acirc;n gian... N&ecirc;n c&oacute; thể n&oacute;i rằng cuốn s&aacute;ch n&agrave;y như một &quot;hướng dẫn vi&ecirc;n du lịch&quot; về Hội An cho bạn. Điều m&igrave;nh th&iacute;ch nhất l&agrave; s&aacute;ch c&oacute; đề cập đến cả &quot;mắt cửa Hội An&quot;, một phần rất quen thuộc trong c&aacute;c ng&ocirc;i nh&agrave; cổ ở Hội An nhưng chưa thấy t&agrave;i liệu n&agrave;o đề cập đến.</p>\r\n\r\n<p>Waka tr&acirc;n trọng giới thiệu cuốn s&aacute;ch &quot;<strong>Đ&ocirc; Thị Cổ Hội An - Di Sản Văn H&oacute;a Thế Giới</strong>&quot;!</p>\r\n\r\n<p>Thu gọn</p>\r\n', 60, 'duckbb'),
(18, 'Socola Cho Một Trái Tim Yêu', 'Tiểu thuyết', 40000, 'Old', 'Kay Allenbaugh', '<p>T&oacute;m tắt s&aacute;ch&nbsp;<strong>Socola Cho Một Tr&aacute;i Tim Y&ecirc;u:&nbsp;</strong>Sức mạnh của t&igrave;nh y&ecirc;u c&oacute; thể l&agrave;m được g&igrave;? N&oacute; c&oacute; thể di chuyển vạn vật, biến ước mơ của ch&uacute;ng ta th&agrave;nh sự thật v&agrave; an ủi t&acirc;m hồn ch&uacute;ng ta v&agrave;o những l&uacute;c kh&oacute; khăn nhất của cuộc đời. Cho d&ugrave; ch&uacute;ng ta đang ở trong một mối quan hệ đặc biệt với một ai đ&oacute;, hay đang tr&ecirc;n đường t&igrave;m kiếm cho m&igrave;nh một người bạn đời đặc biệt n&agrave;o đ&oacute;. Ch&uacute;ng ta kh&ocirc;ng thể phủ nhận rằng t&igrave;nh y&ecirc;u sẽ đến l&uacute;c ch&uacute;ng ta &iacute;t ngờ tới nhất v&agrave; lu&ocirc;n c&oacute; l&yacute; lẽ cho việc trải nghiệm những cung bậc cảm x&uacute;c qu&yacute; gi&aacute; từ ch&uacute;ng. Kay Allenbaugh, t&aacute;c giả của series &quot;Chocolate for Woman&#39;s Soul&quot; đ&atilde; tập hợp những c&acirc;u chuyện rất thật, rất đời thường, được viết bởi ph&aacute;i đẹp v&agrave; d&agrave;nh ri&ecirc;ng cho họ trong &quot;Socola cho một tr&aacute;i tim y&ecirc;u&quot;. Quyển s&aacute;ch sẽ th&uacute;c đẩy bạn tiến đến c&aacute;c mục ti&ecirc;u của m&igrave;nh, khiến bạn cảm thấy vui vẻ, khiến bạn kh&oacute;c, cười, v&agrave; quan trọng hơn hết, l&agrave; nhắc nhở bạn, t&igrave;nh y&ecirc;u - l&agrave; điều g&igrave; đ&oacute; tuyệt vời, cần phải được nu&ocirc;i dưỡng, ấp ủ, n&acirc;ng niu, v&agrave; chia sẻ, như một thanh chocolate ngọt ng&agrave;o.</p>\r\n\r\n<p>Mời c&aacute;c bạn đ&oacute;n đọc s&aacute;ch&nbsp;<strong>Socola Cho Một Tr&aacute;i Tim Y&ecirc;u.</strong></p>\r\n', 60, 'giangbv'),
(19, ' Không Có Sông Nào Để Vượt Qua', 'Văn học', 30000, 'New', 'Ni Daehaeng', '<p>T&oacute;m tắt s&aacute;ch&nbsp;<strong>Kh&ocirc;ng c&oacute; s&ocirc;ng n&agrave;o để vượt qua:&nbsp;</strong>Qua cuốn Kh&ocirc;ng c&oacute; s&ocirc;ng n&agrave;o để vượt qua (t&ecirc;n tiếng Anh: No river to cross), điều m&agrave; Sư b&agrave; Dae Haeng muốn b&agrave;y tỏ kh&ocirc;ng hẳn l&agrave;: ai cũng n&ecirc;n tu tập mười năm trong n&uacute;i s&acirc;u, khi đ&oacute;i th&igrave; ăn c&acirc;y cỏ, quả dại v&agrave; nấm rừng, m&ugrave;a đ&ocirc;ng tới th&igrave; đ&agrave;o một c&aacute;i hố c&aacute;t gần bờ s&ocirc;ng để tr&uacute; ẩn &ndash; cho d&ugrave; đ&oacute; ch&iacute;nh x&aacute;c l&agrave; những g&igrave; b&agrave;, bằng phẩm chất tuyệt hảo của một Thiền sư, đ&atilde; trải qua trước khi ra giảng dạy v&agrave; &ldquo;nổi danh khắp nơi l&agrave; một bậc thầy vừa c&oacute; tuệ gi&aacute;c, vừa c&oacute; l&ograve;ng từ bi s&acirc;u sắc&rdquo;, l&agrave; vị Ni c&oacute; ảnh hưởng s&acirc;u rộng nhất trong t&ocirc;ng ph&aacute;i T&agrave;o Kh&ecirc; cũng như trong to&agrave;n diện x&atilde; hội Đại H&agrave;n.</p>\r\n\r\n<p>Mời c&aacute;c bạn đ&oacute;n đọc s&aacute;ch&nbsp;<strong>Kh&ocirc;ng c&oacute; s&ocirc;ng n&agrave;o để vượt qua.</strong></p>\r\n', 40, 'maintt'),
(20, 'Ngụ Ngôn Thời Hiện Đại Hay Những Bài Học Làm Người Đắt Giá', 'Văn học', 25000, 'New', 'Waka Biên Soạn', '<p>T&oacute;m tắt s&aacute;ch:&nbsp;<strong>Ngụ Ng&ocirc;n Thời Hiện Đại Hay Những B&agrave;i Học L&agrave;m Người Đắt Gi&aacute;</strong>: Thật l&agrave; th&uacute; vị khi những c&acirc;u chuy&ecirc;̣n ngụ ng&ocirc;n h&oacute;m hỉnh lại mang đến cho mọi người những kinh nghiệm qu&yacute; gi&aacute; trong cu&ocirc;̣c s&ocirc;́ng hi&ecirc;̣n đại.</p>\r\n\r\n<p>Cùng đọc và kh&aacute;m ph&aacute; những bài học ý nghĩa qua cuốn&nbsp;<strong>&quot;Ngụ ng&ocirc;n thời hiện đại hay những b&agrave;i học l&agrave;m người đắt gi&aacute;&quot;</strong>&nbsp;với Waka nh&eacute;!</p>\r\n\r\n<p>Mời bạn đ&oacute;n đọc s&aacute;ch&nbsp;<strong>Ngụ Ng&ocirc;n Thời Hiện Đại Hay Những B&agrave;i Học L&agrave;m Người Đắt Gi&aacute;.</strong></p>\r\n', 10, 'maintt'),
(22, 'Hà Mã, Chó, Chim, Cá Và Những Thứ Khác', 'Truyện ngắn', 30000, 'New', 'Vũ Thanh Sơn', '<p>T&oacute;m tắt cuốn s&aacute;ch &quot;<strong>H&agrave; M&atilde;, Ch&oacute;, Chim, C&aacute; V&agrave; Những Thứ Kh&aacute;c</strong>&quot;:</p>\r\n\r\n<p>C&ocirc; đơn. Hoang mang. Bị nhấn ch&igrave;m. Bị vật h&oacute;a. Mất cảm gi&aacute;c hiện hữu. Lạc k&iacute; ức. Chung đụng với nhiều thứ hiện thực tẻ ngắt. Biến mất. V&acirc;n v&acirc;n.</p>\r\n\r\n<p>Mọi thứ được cắt lớp, chớp bắt, đồng hiện, thả tr&ocirc;i trong những cấu tr&uacute;c văn bản tưởng như rời rạc nhưng thực ra đầy &yacute; thức v&agrave; sự tiết chế. Văn phong chỉnh chu, tinh gọn, kh&ocirc;ng ch&uacute;t g&ograve; nắn hoa mỹ hay cố t&igrave;nh nhồi nh&eacute;t triết l&yacute;, kh&ocirc;ng tuyến t&iacute;nh đầu xu&ocirc;i, đu&ocirc;i lọt, người viết đang dấn bước v&agrave;o một cuộc đoe đuồi ẩn mật: nắm bắt t&iacute;nh chất xao nh&atilde;ng, đa trạng th&aacute;i b&ecirc;n trong con người đương đại. T&iacute;nh đương đại ở sự ưu tư, đa diện, x&aacute;o trộn m&agrave; kh&ocirc;ng son phấn. Khước từ lối tả kể truyền thống, tập truyện mỏng n&agrave;y chủ động để lại nhiều khoảng trống, độ hẫng khiến bạn đọc bối rối lẫn ho&agrave;i nghi. V&agrave;, đến l&uacute;c những khoảng trống, độ hẫng đ&oacute; mới l&agrave; điều hấp dẫn bạn đi v&agrave;o t&aacute;c phẩm. - Nguyễn Vĩnh Nguy&ecirc;n</p>\r\n\r\n<p>Waka tr&acirc;n trọng giới thiệu cuốn s&aacute;ch &quot;<strong>H&agrave; M&atilde;, Ch&oacute;, Chim, C&aacute; V&agrave; Những Thứ Kh&aacute;c</strong>&quot;!</p>\r\n', 20, 'minhnb'),
(23, 'Narnia', 'Thần Thoại', 40000, 'old', 'C.S. Lewis', 'RKO', 3, 'giangbv'),
(24, 'Narnia Trọn bộ', 'Thần thoại', 70000, 'new', 'C.S. Lewis', 'Clive Staples Lewis sinh năm 1898 tại Belfast. Ông làm nghiên cứu sinh và là trợ giảng bộ môn Văn học Anh tại trường Magdalen, Oxford và sau này là giáo sư bộ môn Văn học thời kỳ Trung cổ và Phục hưng tại Đại học Cambridge, nơi ông làm việc cho đến khi qua đời vào năm 1963.\r\nÔng viết rất nhiều sách về phê bình văn học và Đạo cơ đốc, với tác phẩm nổi tiếng “The Screwtape Letters”, cùng với bốn cuốn tiểu thuyết khác dành cho người lớn.\r\nBộ truyện bảy tập “Biên niên sử Narnia” là bộ truyện duy nhất ông viết cho trẻ em.\r\nBiên niên sử về Narnia viết về một thế giới tưởng tượng, những phép màu và một thế giới song song cùng tồn tại với thế giới của chúng ta.\r\nBiên niên sử về Narnia dựng nên một thế giới tưởng tượng, kỳ ảo nhưng có những cơ sở của hiện thực – điểm khác biệt với Harry Potter\r\nBiên niên sử về Narnia là một tác phẩm hư cấu có giá trị nghệ thuật cao trên nhiều phương diện :\r\nMột tác phẩm có cấu trúc cân đối, hoàn chỉnh, tính tư tưởng quán xuyến từ đầu đến cuối ; là tinh thần đấu tranh cho chính nghĩa, cho con người, đặc biệt là một tình yêu thiên nhiên, hoà mình với thiên nhiên, coi cỏ cây hoa lá, muông thú cũng có tính bản thiện và có nhu cầu được cộng sinh trong thế giới của muôn loài và cho muôn loài. Một tư tưởng rất nhân bản và đang được nhân loại đề cao. Bộ sách giúp bạn đọc có ý thức tốt hơn về môi trường thiên nhiên cũng như môi trường văn hoá. Và đặc biệt có thể nhìn cuộc đời với một đôi mắt « ngây thơ » hơn.\r\nTác phẩm hấp dẫn nhờ một cốt truyện cổ điển, có mâu thuẫn, cao trào và giải quyết mâu thuẫn, thể hiện một trí tưởng tượng rất cao, mang dấu ấn của cá tính sáng tạo của nhà văn. Từ tập 1 đến tập 7, thế giới tưởng tượng được xây dựng và phát triển một cách vừa khác biệt vừa nhất quán với toàn bộ và theo cấp độ tăng tiến, khiến người đọc đi từ ngạc nhiên này đến ngạc nhiên khác với những hình tượng độc đáo, kỳ thú không hề bị lặp lại.\r\nTác phẩm đưa ra một hệ thống nhân vật phong phú, có cá tính : không có nhân vật nào lẫn với nhân vật nào, dù là con vật hay con người đều có những nét đặc biệt đáng ghi nhớ.\r\nLối giải quyết mâu thuẫn của tác giả, tự nhiên, không gượng ép và đặc biệt là nhẹ nhàng, thoải mái không gây nên những cảnh quá dữ dội có thể ảnh hưởng đến tâm hồn trẻ thơ.\r\nTheo bình chọn của tạp chí Big Reader : Biên niên sử về Narnia có tên trong danh sách 21 cuốn sách được độc giả Anh yêu thích nhất (trong danh sách 100 tiểu thuyết thế giới).\r\nBộ truyện được chuyển thể sang tác phẩm điện ảnh trở thành là bộ phim ăn khách của thế kỷ 21', 7, 'getrkoed'),
(25, 'Đội quân nhí nhố', 'Truyện tranh', 12000, 'normal', 'Choi Sang', 'Bộ truyện tranh hàn quốc cực hài.\r\nMua của mình giá rẻ', 5, 'getrkoed'),
(26, 'Doraemon Nobita đến xứ Ba tư', 'Truyện tranh', 8000, 'new', 'Fujiko F Fujio', 'Tập truyện dài của bộ truyện tranh nổi tiếng Doraemon. \r\nTruyện mình mua sưu tập nên còn mới lắm ', 1, 'getrkoed'),
(27, 'Doeraemon Chiến thắng quỷ Navas', 'Truyện tranh', 8000, 'new', 'Fujiko F Fujio', 'Tập truyện dài của bộ truyện tranh nổi tiếng Doraemon. Truyện mình mua sưu tập nên còn mới lắm', 1, 'getrkoed'),
(28, 'Dooraemon Truyện ngắn trọn bộ', 'Truyện tranh', 7000, 'new', 'Fujiko F Fujio', 'Sách mừn sưu tập nên mới nhắm :)', 45, 'getrkoed'),
(29, 'Sir Alex Ferguson Tự truyện', 'Tự truyện', 210000, 'normal', 'Sir Alex Ferguson', 'Sách khá hiếm nên hơi đắt', 1, 'getrkoed'),
(30, '7 Ngôi Làng Ma', 'Kinh dị', 100000, 'new', 'QUÁI ĐÀM HIỆP HỘI', 'Truyện cũng tạm được. Không hợp với mình lắm', 1, 'getrkoed'),
(31, 'Đội quân nhí nhố trọn bộ', 'Truyện tranh', 8000, 'new', 'Choi Sang', 'Tui có trọn bộ. Mua thì mua cả. Không bán lẻ', 44, 'minhnb'),
(32, 'Hóa học 8', 'Sách Giáo Khoa', 1000, 'new', 'Bộ GD&ĐT', '...', 1, 'minhnb'),
(33, 'Hóa học 9', 'Sách Giáo Khoa', 1000, 'new', 'Bộ GD&ĐT', '...', 1, 'minhnb'),
(34, 'Hóa học 10', 'Sách Giáo Khoa', 1000, 'new', 'Bộ GD&ĐT', '...', 1, 'minhnb'),
(35, 'Hóa học 11', 'Sách Giáo Khoa', 1000, 'new', 'Bộ GD&ĐT', '...', 1, 'minhnb'),
(36, 'Hóa học 12', 'Sách Giáo Khoa', 1000, 'new', 'Bộ GD&ĐT', 'Tao ghét hóa ok', 1, 'minhnb'),
(37, 'SGK Hóa Học trọn bộ', 'Sách Giáo Khoa', 5000, 'old', 'Bộ GD&ĐT', 'Sách để lại cho những bạn muốn cao điểm hóa. Tui khủng nên note nhiều thứ lém', 5, 'duckbb'),
(38, 'Ronaldo Ám ảnh về sự hoàn hảo', 'Thể thao', 64000, 'normal', 'Luca Caioli', 'Tóm tắt cuốn sách "Ronaldo - Ám Ảnh Về Sự Hoàn Hảo": Cầu thủ xuất sắc nhất thế giới của FIFA năm 2008, 2 lần đạt giải Quả bóng vàng châu Âu, chủ nhân của Chiếc giày vàng mùa giải 2010 - 2011 và trở thành cầu thủ đắt giá nhất trong lịch sử bóng đá thế giới khi chuyển từ Manchester United sang câu lạc bộ mới là Real Madrid với mức giá 80 triệu bảng, đó là bảng liệt kê những danh hiệu cá nhân của C. Ronaldo - một trong những ngôi sao sáng nhất của làng túc cầu thế giới hiện nay.\r\nTuy đang ở đỉnh cao của sự nghiệp nhưng cầu thủ người Bồ Đào Nha này vẫn không dừng bước trong hành trình vượt qua ‘nỗi ám ảnh’ để đạt đến  ‘sự hoàn hảo’ tuyệt đối.\r\nTrong cuốn sách có tựa đề The Obsession for Perfection (Ám ảnh về sự hoàn hảo), cây bút thể thao nổi tiếng Luca Caioli đã chia sẻ với người hâm mộ những điều chưa từng được tiết lộ về C. Ronaldo, từ tuổi thơ nghèo khó trên đảo Madeira đến những bước đi đầu tiên trong sự nghiệp và con đường trở thành một siêu sao của làng túc cầu. Qua đó, tác giả giúp họ hiểu rõ hơn về tính cách độc đáo, những thăng trầm trong cuộc đời ‘chọn bóng đá làm lẽ sống’ của thần tượng mình trên bức tranh toàn cảnh sống động, chuyên nghiệp của ngành công nghiệp bóng đá châu Âu.\r\nCuốn sách thực sự là món quà có ý nghĩa dành cho những ai quan tâm đến ‘chú ong nhỏ’ C.Ronaldo và những fan hâm mộ của bóng đá khi những cuộc tranh tài gay cấn, hấp dẫn trong mùa giải 2012 - 2013 đang bắt đầu bước vào giai đoạn quyết liệt.', 7, 'ronaldo7'),
(39, 'Manchester Thiên sứ về Quỷ Đỏ', 'Thể thao', 120000, 'new', 'Jim White', 'Cuốn sách ghi lại cuộc hành trình phi thường của câu lạc bộ được sinh ra trong các công trình đường sắt của Newton Heath đã trở thành nhà vô địch châu Âu. Các giai đoạn quan trọng trong lịch sử của Manchester United qua cách vẽ trên những hồi ức của mọi người từ các cầu thủ và các nhà quản lý cho tới người hâm mộ và nhân viên, Jim đã khai thác và tái hiện một lịch sử hấp dẫn của câu lạc bộ bóng đá giỏi nhất nước Anh này.\r\nCác mốc giai đoạn quan trọng trong lịch sử của Manchester United được tái hiện: những cầu thủ tử nạn trong thảm họa máy bay tại Munich năm 1958 là phần tốt nhất của toàn bộ các “đứa trẻ” của Busby; trở thành đội bóng Anh đầu tiên để giành chiến thắng các giải châu Âu trong năm 1968 (với Bobby Charlton và George Best); sự thống trị của các câu lạc bộ trong giải Ngoại hạng; việc bán gây tranh cãi để ông trùm Mỹ Malcolm Glazer.\r\nThành tích đáng nể: 20 lần vô địch bóng đá Anh, 11 lần đoạt Cúp FA và 3 lần vô địch UEFA Champions League, đội bóng áo đỏ thực sự xứng đáng trở thành một trong những đội bóng thành công nhất nước Anh.\r\nThông qua cuốn sách này, độc giả sẽ được lần lượt trải qua những thăng trầm trong lịch sử vĩ đại của Manchester United, thấu hiểu những khó khăn cũng như nỗ lực không mệt mỏi của họ để liên tục được xướng tên trên bảng vàng.', 5, 'ronaldo7'),
(40, 'Tôi là Zlatan Ibrahimovic', 'Tự truyện', 80000, 'new', 'David Lagercrantz ', '"Xin dành tặng quyển sách này cho gia đình và bạn bè, cho những người đã luôn ở cạnh tôi, trong những ngày vui và những ngày buồn. Tôi cũng tặng cuốn sách này cho tất cả những trẻ em ngoài kia, những người cảm thấy mình khác biệt nhưng không hòa nhập được với đời. Với những trẻ em như thế, tôi muốn nói là cứ việc khác biệt. Hãy là chính mình. Tôi đã tồn tại và thành công theo cách ấy"', 4, 'ronaldo7'),
(41, 'Kỹ nghệ phần mềm', 'Công nghệ', 30000, 'old', 'Lê Văn Phùng', 'Dành cho những bạn muốn nghiên cứu chuyên sâu về công nghệ phần mềm', 1, 'trungtt'),
(42, 'Cấu trúc dữ liệu hướng đối tượng', 'Công nghệ', 140000, 'new', 'Nell Dale', 'Dành cho các sinh viên muốn nghiên cứu sâu lập trình hướng đối tượng', 8, 'trungtt'),
(43, 'Lập trình hướng đối tượng', 'Công nghệ', 46000, 'old', 'Dan Clark', 'Dành cho các sinh viên muốn nghiên cứu sâu lập trình hướng đối tượng', 5, 'trungtt'),
(44, 'Đắc Nhân Tâm', 'Tự giúp bản thân', 50000, 'normal', 'Dale Carnegie', 'Quyển sách đưa ra các lời khuyên về cách thức cư xử, ứng xử và giao tiếp với mọi người để đạt được thành công trong cuộc sống', 7, 'trungtt'),
(45, 'Flashpoint Paradox', 'Truyện tranh', 37000, 'new', 'DC Comics', 'Câu truyện huyền thoại về The Flash', 8, 'sonphan'),
(46, 'Harry Potter Trọn bộ', 'Tiểu thuyết', 60000, 'normal', 'J.K. Rowling', 'Tiểu thuyết huyền thoại về thế giới ma thuật', 8, 'sonphan'),
(47, 'I am Zlatan Ibrahimovic', 'Tự truyện', 70000, 'normal', 'David Lagercrantz ', 'Sách khá hay. Mình mua lâu rồi nên để giá rẻ', 1, 'sonphan'),
(48, '50 Sắc Thái trọn bộ', 'Tiểu thuyết', 100000, 'new', 'E.L. James', '', 3, 'sonphan'),
(49, 'Naruto', 'Truyện tranh', 7000, 'normal', 'Kishimoto', 'Bộ truyện mình sưu tầm', 80, 'sonphan'),
(50, 'Từ điển Tiếng Việt', 'Từ điển', 50000, 'new', 'Viện ngôn ngữ học', '', 1, 'sonphan');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
`id_city` int(3) NOT NULL,
  `name_city` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id_city`, `name_city`) VALUES
(1, 'Hà Nội'),
(2, 'TP.HCM'),
(3, 'An Giang'),
(4, 'Bà Rịa – Vũng Tàu'),
(5, 'Bạc Liêu'),
(6, 'Bắc Kạn'),
(7, 'Bắc Giang'),
(8, 'Bắc Ninh'),
(9, 'Bến Tre'),
(10, 'Bình Dương'),
(11, '	Bình Định'),
(12, '	Bình Phước'),
(13, '	Bình Thuận'),
(14, 'Cà Mau'),
(15, 'Cao Bằng'),
(16, 'Cần Thơ'),
(17, 'Đà Nẵng'),
(18, '	Đắk Lắk'),
(19, '	Đắk Nông'),
(20, '	Điện Biên'),
(21, 'Đồng Nai'),
(22, 'Đồng Tháp'),
(23, '	Gia Lai'),
(24, '	Hà Giang'),
(25, '	Hà Nam'),
(26, 'Hà Nội'),
(27, '	Hà Tĩnh'),
(28, '	Hải Dương'),
(29, 'Hải Phòng'),
(30, '	Hòa Bình'),
(31, '	Hậu Giang'),
(32, 'Hưng Yên'),
(33, 'Khánh Hòa'),
(34, '	Kiên Giang'),
(35, '	Kon Tum'),
(36, 'Lai Châu'),
(37, '	Lào Cai'),
(38, '	Lạng Sơn'),
(39, '	Lâm Đồng'),
(40, 'Long An'),
(41, 'Nam Định'),
(42, 'Nghệ An'),
(43, '	Ninh Bình'),
(44, 'Ninh Thuận'),
(45, '	Phú Thọ'),
(46, '	Phú Yên'),
(47, '	Quảng Bình'),
(48, '	Quảng Nam'),
(49, '	Quảng Ngãi'),
(50, '	Quảng Ninh'),
(51, 'Quảng Trị'),
(52, 'Sóc Trăng'),
(53, '	Sơn La'),
(54, 'Tây Ninh'),
(55, '	Thái Bình'),
(56, 'Thái Nguyên'),
(57, '	Thanh Hóa'),
(58, '	Thừa Thiên – Huế'),
(59, '	Tiền Giang'),
(60, '	Trà Vinh'),
(61, '	Tuyên Quang'),
(62, '	Vĩnh Long'),
(63, '	Vĩnh Phúc'),
(64, 'Yên Bái');

-- --------------------------------------------------------

--
-- Table structure for table `image_book`
--

CREATE TABLE IF NOT EXISTS `image_book` (
  `link_image` mediumtext,
  `book_id_book` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `image_book`
--

INSERT INTO `image_book` (`link_image`, `book_id_book`) VALUES
('03.jpg', 3),
('250px-Tudientiengviet1512993927.jpg', 50),
('06.jpg', 6),
('07.jpg', 7),
('08.jpg', 8),
('09.jpg', 9),
('121511700039.jpg', 12),
('13.jpg', 13),
('15.jpg', 15),
('18.jpg', 18),
('19.png', 19),
('20.png', 20),
('22.jpg', 22),
('chronciles-of-narnia-7-books-original-imaeyf6fgfemnwum1512540819.jpeg', 24),
('tron-bo-bien-nien-su-narnia-7-cuon-_47423_11512540819.jpg', 24),
('281511828237.JPG', 23),
('271511828237.jpg', 23),
('261511828237.jpg', 23),
('111512539964.jpg', 11),
('doi-quan-nhi-nho-ban-dep14168515161511847940.jpg', 25),
('tải xuống1511847940.jpg', 25),
('301511848360.jpg', 26),
('Vol11_0011511848360.jpg', 26),
('321511848577.jpg', 27),
('combo-5-doraemon-45-tap-truyen-ngan-an-ban-dac-biet-bia-roi-ky-niem-20-nam-doraemon-toi-viet-nam-26184-5001511849219.jpg', 28),
('tap11511849219.jpg', 28),
('tap71511849219.jpg', 28),
('hom-nay-phat-hanh-hoi-ky-alex-ferguson-phien-ban-tieng-viet_241078921511849370.jpg', 29),
('tumblr_inline_mylvq0ioEe1qcwypq1511849370.png', 29),
('bay-ngoi-lang-ma1511849654.jpg', 30),
('[Share99-net] Download doi quan nhi nho full (1)1511849731.jpg', 31),
('doi-quan-nhi-nho-ban-dep14168515161511849731.jpg', 31),
('hoa_hoc_8_5001511849934.png', 32),
('hoa_hoc_9_5001511849974.png', 33),
('Bia_11511850030.jpg', 34),
('3122016101217_13989725_1624104027919973_234538846_n_688x9601511850067.jpg', 35),
('Image0011511850093.jpg', 36),
('3122016101217_13989725_1624104027919973_234538846_n_688x9601511850542.jpg', 37),
('Bia_11511850542.jpg', 37),
('hoa_hoc_8_5001511850542.png', 37),
('hoa_hoc_9_5001511850542.png', 37),
('Image0011511850542.jpg', 37),
('b238b67542f5b5c1ae3d138b8cf5cae61512539334.gif', 38),
('1c2b01fa-9777-4c7d-b389-34fade9522501512539334.png', 38),
('Manchester-United-thien-su-ve-quy-do-Jim-White-top-10-202x3001512539465.gif', 39),
('images657183_6021512539514.jpg', 40),
('Toi-la-Zlatan-Ibrahimovic-Zlatan-Ibrahimovic-201x3001512539514.gif', 40),
('zlatan1512539514.jpg', 40),
('Image1512541123.jpg', 41),
('9956bc94738ef1c1512541277.jpg', 42),
('51xhQ4k1c-L1512541380.jpg', 43),
('img5921512541520.jpg', 44),
('neu-muon-giup-ban-than-hay-doc-dac-nhan-tam1512541520.jpg', 44),
('1852308-fp51512541846.jpg', 45),
('dc801b12df061570569bf332a4d2f0d1327acdf3_hq1512541846.jpg', 45),
('Flashpoint_(DC_Comics)1512541846.png', 45),
('420Harrry1512542280.jpg', 46),
('7a6159c1a82acbc0-600x4001512542280.jpg', 46),
('9780545162074_p0_v2_s1200x6301512542280.jpg', 46),
('images657183_6021512542374.jpg', 47),
('Toi-la-Zlatan-Ibrahimovic-Zlatan-Ibrahimovic-201x3001512542374.gif', 47),
('241512542624.jpg', 48),
('011512542624.jpg', 48),
('50sacthai1512542624.JPG', 48),
('ee9b6db56c6a4fedb2f47d6c5f5f82e61512542807.jpg', 49),
('imgrc00614104301512542807.jpg', 49),
('images1512993927.jpg', 50);

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE IF NOT EXISTS `user_admin` (
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`username`, `password`, `name`, `email`) VALUES
('admin1', 'e10adc3949ba59abbe56e057f20f883e', 'Mr.Pickles', 'picklesrick@gmail.com'),
('admin2', 'e10adc3949ba59abbe56e057f20f883e', 'Harry Potter', 'thechosen1@gmail.com'),
('admin3', 'e10adc3949ba59abbe56e057f20f883e', 'Barry Allen', 'irishusband@gmail.com'),
('admin4', 'e10adc3949ba59abbe56e057f20f883e', 'Lionel Messi', 'm10gmail.com'),
('admin5', 'e10adc3949ba59abbe56e057f20f883e', 'ronaldo', 'cr7@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_seller`
--

CREATE TABLE IF NOT EXISTS `user_seller` (
  `user` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `city_id_city` int(11) NOT NULL,
  `ava` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_seller`
--

INSERT INTO `user_seller` (`user`, `pass`, `email`, `name`, `address`, `phone`, `city_id_city`, `ava`) VALUES
('duckbb', 'e10adc3949ba59abbe56e057f20f883e', 'duck@gmail.com', 'Nguyễn Duck Tuấn Anh', 'Mai Dịch, Hà Nội', '0169000000', 1, '66c3efa5a55e1bae61b1afd185c535291511975996.PNG'),
('getrkoed', 'e10adc3949ba59abbe56e057f20f883e', 'sonphan270497@gmail.com', 'Randy Orton', 'Royal City', '01345645561', 1, '14102374_684824111669378_8953136366090023977_n1512640891.jpg'),
('giangbv', 'e10adc3949ba59abbe56e057f20f883e', 'gianghaihuoc@gmail.com', 'Bùi Văn Giang', 'Nhà mike', '01696969696', 19, 'Screenshot (150)1512988102.png'),
('maintt', 'e10adc3949ba59abbe56e057f20f883e', 'maint@gmail.com', 'Nguyễn Thị Mai', 'Hoàng Mai', '0169222222', 1, 'tonton1512540190.png'),
('minhnb', 'e10adc3949ba59abbe56e057f20f883e', 'minhnb@gmail.com', 'Nguyễn Bình Minh', 'Hoài Đức', '01464560465', 18, '61511976554.jpg'),
('ronaldo7', 'fcea920f7412b5da7be0cf42b8c93759', 'cr7@gmail.com', 'Christiano Ronaldo', 'Cocobay', '07777777777', 17, 'images (1)1512540251.jpg'),
('sonphan', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', 0, '14449889_1724210307907746_7981139227832726955_n1512993432.jpg'),
('trungtt', 'fcea920f7412b5da7be0cf42b8c93759', 'trungtt@gmail.com', 'Trịnh Thành Trung', 'Hà Nội', '01649660905', 9, 'trungtt1512541592.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
 ADD PRIMARY KEY (`id_book`,`user_seller_user`), ADD UNIQUE KEY `id_book` (`id_book`,`user_seller_user`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
 ADD PRIMARY KEY (`id_city`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user_seller`
--
ALTER TABLE `user_seller`
 ADD PRIMARY KEY (`user`), ADD UNIQUE KEY `user` (`user`), ADD UNIQUE KEY `user_2` (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
MODIFY `id_book` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
MODIFY `id_city` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=65;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
