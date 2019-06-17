/*
Navicat MySQL Data Transfer

Source Server         : HCI
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : hci

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-05-28 10:06:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for chi_tiet_hoa_don
-- ----------------------------
DROP TABLE IF EXISTS `chi_tiet_hoa_don`;
CREATE TABLE `chi_tiet_hoa_don` (
  `ma_hd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ma_sp` int(10) unsigned DEFAULT NULL,
  `ten_sp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `so_luong` int(11) unsigned DEFAULT NULL,
  `gia_ban` int(11) unsigned DEFAULT NULL,
  `thanh_tien` int(11) unsigned DEFAULT NULL,
  KEY `ma_hd` (`ma_hd`),
  KEY `ten_sp` (`ten_sp`),
  KEY `ma_sp` (`ma_sp`),
  CONSTRAINT `ma_hd` FOREIGN KEY (`ma_hd`) REFERENCES `hoa_don` (`ma_hd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of chi_tiet_hoa_don
-- ----------------------------
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_18_1541077193', '1', 'SP1', '1', '1000000', '1000000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_18_1541077193', '6', 'mớiii', '2', '130000', '260000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_18_1541077313', '1', 'SP1', '1', '1000000', '1000000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_18_1541077322', '1', 'SP1', '1', '1000000', '1000000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_18_1541077365', '1', 'SP1', '1', '1000000', '1000000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_18_1541077717', '1', 'SP1', '1', '1000000', '1000000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_18_1541078178', '1', 'SP1', '1', '1000000', '1000000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_18_1541078396', '1', 'SP1', '1', '1000000', '1000000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_18_1541080283', '5', 'quan', '1', '100000', '100000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_18_1541326911', '1', 'SP 01', '1', '1000000', '1000000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_18_1541326911', '3', 'SP 02', '1', '200000', '200000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_18_1541420910', '1', 'SP 01', '2', '1000000', '2000000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('16_onl_1541595208', '7', 'SP 03', '1', '300000', '300000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('3_18_1541601508', '5', 'SP 20', '1', '100000', '100000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_onl_1541678733', '6', 'SP 19', '1', '130000', '130000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_onl_1541678733', '12', 'Hộp hoa 01', '1', '300000', '300000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_onl_1541680764', '5', 'SP 20', '1', '100000', '100000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_onl_1541682207', '5', 'SP 20', '1', '100000', '100000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_onl_1541683686', '1', 'SP 01', '2', '1000000', '2000000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_18_1541684602', '5', 'SP 20', '1', '100000', '100000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_19_1541776072', '5', 'SP 20', '2', '100000', '200000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_19_1541776072', '1', 'SP 01', '1', '1000000', '1000000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_onl_1541776153', '5', 'SP 20', '2', '100000', '200000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_onl_1542100243', '7', 'SP 03', '1', '300000', '300000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_18_1542285486', '5', 'SP 20', '1', '100000', '100000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_18_1542285486', '6', 'SP 19', '1', '130000', '130000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_18_1542389998', '1', 'SP 01', '2', '1000000', '2000000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_18_1542389998', '5', 'SP 20', '1', '100000', '100000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('2_22_1542431573', '1', 'SP 01', '1', '1000000', '1000000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('2_22_1542431573', '8', 'SP 12', '2', '40000', '80000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('2_22_1542431719', '1', 'SP 01', '1', '1000000', '1000000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('2_22_1542431719', '8', 'SP 12', '2', '40000', '80000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_22_1542431899', '7', 'SP 03', '1', '300000', '300000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_onl_1542438676', '6', 'SP 19', '1', '130000', '130000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('2_18_1542439425', '5', 'SP 20', '1', '100000', '100000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('2_18_1542439425', '11', 'SP S1', '1', '90000', '90000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('18_onl_1542452310', '1', 'SP 01', '2', '1000000', '2000000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('18_onl_1542452310', '3', 'SP 02', '1', '200000', '200000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_18_1542452542', '1', 'SP 01', '1', '2000000', '2000000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_18_1542452542', '3', 'SP 02', '6', '200000', '1200000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_22_1542452750', '5', 'SP 20', '1', '100000', '100000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('1_22_1542452750', '1', 'SP 01', '1', '2000000', '2000000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('20_onl_1557997320', '1', 'SP 01', '2', '2000000', '4000000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('12_23_1557998404', '12', 'Hộp hoa 01', '1', '300000', '300000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('12_23_1557998404', '1', 'SP 01', '1', '2000000', '2000000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('21_onl_1558011555', '1', 'SP 01', '1', '2000000', '2000000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('21_onl_1558011613', '1', 'SP 01', '1', '2000000', '2000000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('19_onl_1558011851', '5', 'SP 20', '1', '100000', '100000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('22_onl_1558011889', '1', 'SP 01', '1', '2000000', '2000000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('22_onl_1558012238', '1', 'SP 01', '1', '2000000', '2000000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('22_onl_1558025689', '12', 'Hộp hoa 01', '1', '300000', '300000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('22_onl_1558029233', '1', 'SP 01', '1', '2000000', '2000000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('22_onl_1558031668', '15', 'Hoa cưới 08', '1', '200000', '200000');
INSERT INTO `chi_tiet_hoa_don` VALUES ('22_onl_1558083358', '1', 'SP 01', '1', '2000000', '2000000');

-- ----------------------------
-- Table structure for hoa_don
-- ----------------------------
DROP TABLE IF EXISTS `hoa_don`;
CREATE TABLE `hoa_don` (
  `ma_hd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ma_kh` int(255) NOT NULL,
  `ma_nv` int(10) DEFAULT NULL COMMENT '0 = mua online',
  `ngay_ban` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tong_tien` int(20) NOT NULL,
  `trang_thai` int(10) unsigned NOT NULL COMMENT '0-đã xử lí, 1-chưa xử lí',
  PRIMARY KEY (`ma_hd`),
  KEY `ma_kh` (`ma_kh`),
  KEY `ma_nv` (`ma_nv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of hoa_don
-- ----------------------------
INSERT INTO `hoa_don` VALUES ('1_18_1541077193', '1', '18', '2018-10-01 13:59:53', '1260000', '0');
INSERT INTO `hoa_don` VALUES ('1_18_1541077313', '1', '18', '2018-10-01 14:01:53', '1000000', '0');
INSERT INTO `hoa_don` VALUES ('1_18_1541077322', '1', '18', '2018-11-01 14:02:02', '1000000', '0');
INSERT INTO `hoa_don` VALUES ('1_18_1541077365', '1', '18', '2018-11-01 14:02:45', '1000000', '0');
INSERT INTO `hoa_don` VALUES ('1_18_1541077717', '1', '18', '2018-11-01 14:08:37', '1000000', '0');
INSERT INTO `hoa_don` VALUES ('1_18_1541078178', '1', '18', '2018-11-01 14:16:18', '1000000', '0');
INSERT INTO `hoa_don` VALUES ('1_18_1541078396', '1', '18', '2018-11-01 14:19:56', '1000000', '0');
INSERT INTO `hoa_don` VALUES ('1_18_1541080283', '1', '18', '2018-11-01 14:51:23', '100000', '0');
INSERT INTO `hoa_don` VALUES ('1_18_1541326911', '1', '18', '2018-11-04 11:21:51', '1200000', '0');
INSERT INTO `hoa_don` VALUES ('1_18_1541420910', '1', '18', '2018-11-05 13:28:30', '2000000', '0');
INSERT INTO `hoa_don` VALUES ('1_18_1541684602', '1', '18', '2018-11-08 14:43:22', '100000', '0');
INSERT INTO `hoa_don` VALUES ('1_18_1542285486', '1', '18', '2018-11-15 19:38:06', '230000', '0');
INSERT INTO `hoa_don` VALUES ('1_18_1542389998', '1', '18', '2018-11-17 00:39:58', '2100000', '0');
INSERT INTO `hoa_don` VALUES ('1_18_1542452542', '1', '18', '2018-11-17 18:02:22', '3200000', '0');
INSERT INTO `hoa_don` VALUES ('1_19_1541776072', '1', '22', '2018-11-09 16:07:52', '1200000', '0');
INSERT INTO `hoa_don` VALUES ('1_22_1542431899', '1', '22', '2018-11-17 12:18:19', '300000', '0');
INSERT INTO `hoa_don` VALUES ('1_22_1542452750', '1', '22', '2018-11-17 18:05:50', '2100000', '0');
INSERT INTO `hoa_don` VALUES ('1_onl_1541678733', '1', null, '2018-11-08 13:05:33', '430000', '0');
INSERT INTO `hoa_don` VALUES ('1_onl_1541680764', '1', null, '2018-11-08 13:39:24', '100000', '0');
INSERT INTO `hoa_don` VALUES ('1_onl_1541682207', '1', null, '2018-11-08 14:03:27', '100000', '0');
INSERT INTO `hoa_don` VALUES ('1_onl_1541683686', '1', null, '2018-11-08 14:28:06', '2000000', '0');
INSERT INTO `hoa_don` VALUES ('1_onl_1541776153', '1', null, '2018-11-09 16:09:13', '200000', '0');
INSERT INTO `hoa_don` VALUES ('1_onl_1542100243', '1', null, '2018-11-13 10:10:43', '300000', '0');
INSERT INTO `hoa_don` VALUES ('1_onl_1542438676', '1', null, '2018-11-17 14:11:16', '130000', '0');
INSERT INTO `hoa_don` VALUES ('12_23_1557998404', '12', '23', '2019-05-16 16:20:04', '2300000', '0');
INSERT INTO `hoa_don` VALUES ('16_onl_1541595208', '16', null, '2018-11-07 13:53:28', '300000', '0');
INSERT INTO `hoa_don` VALUES ('18_onl_1542452310', '18', null, '2018-11-17 17:58:30', '2200000', '0');
INSERT INTO `hoa_don` VALUES ('19_onl_1558011851', '19', null, '2019-05-16 20:04:11', '100000', '1');
INSERT INTO `hoa_don` VALUES ('2_18_1542439425', '2', '18', '2018-11-17 14:23:45', '190000', '0');
INSERT INTO `hoa_don` VALUES ('2_22_1542431573', '2', '22', '2018-11-17 12:12:53', '1080000', '0');
INSERT INTO `hoa_don` VALUES ('2_22_1542431719', '2', '22', '2018-11-17 12:15:19', '1080000', '0');
INSERT INTO `hoa_don` VALUES ('20_onl_1557997320', '20', null, '2019-05-16 16:02:00', '4000000', '1');
INSERT INTO `hoa_don` VALUES ('21_onl_1558011555', '21', null, '2019-05-16 19:59:15', '2000000', '1');
INSERT INTO `hoa_don` VALUES ('21_onl_1558011613', '21', null, '2019-05-16 20:00:13', '2000000', '1');
INSERT INTO `hoa_don` VALUES ('22_onl_1558011889', '22', null, '2019-05-16 20:04:49', '2000000', '1');
INSERT INTO `hoa_don` VALUES ('22_onl_1558012238', '22', null, '2019-05-16 20:10:38', '2000000', '1');
INSERT INTO `hoa_don` VALUES ('22_onl_1558025689', '22', null, '2019-05-16 23:54:49', '300000', '0');
INSERT INTO `hoa_don` VALUES ('22_onl_1558029233', '22', null, '2019-05-17 00:53:53', '2000000', '1');
INSERT INTO `hoa_don` VALUES ('22_onl_1558031668', '22', null, '2019-05-17 01:34:28', '200000', '1');
INSERT INTO `hoa_don` VALUES ('22_onl_1558083358', '22', null, '2019-05-17 15:55:58', '2000000', '1');
INSERT INTO `hoa_don` VALUES ('3_18_1541596207', '3', '18', '2018-11-07 14:10:07', '1100000', '0');
INSERT INTO `hoa_don` VALUES ('3_18_1541601508', '3', '18', '2018-11-07 15:38:28', '100000', '0');

-- ----------------------------
-- Table structure for khach_hang
-- ----------------------------
DROP TABLE IF EXISTS `khach_hang`;
CREATE TABLE `khach_hang` (
  `ma_kh` int(10) NOT NULL AUTO_INCREMENT,
  `ten_kh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `so_dt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'số điện thoại',
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ma_kh`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of khach_hang
-- ----------------------------
INSERT INTO `khach_hang` VALUES ('1', 'Hongggg', '9850449856', 'hongg@gmail.com', 'Hà Nộii');
INSERT INTO `khach_hang` VALUES ('12', 'Tạ Hoàng', '092189797', 'quan@1223hn.com', 'Hà Nội');
INSERT INTO `khach_hang` VALUES ('17', 'Ahihi', '1234567890', 'quan@123445.com', 'Hà Nội');
INSERT INTO `khach_hang` VALUES ('19', 'Thân Thị Hồng', '0252756782756', 'hothan@gmail.com', 'THANH XUÂN, HÀ NỘI');
INSERT INTO `khach_hang` VALUES ('20', 'Thân Thị Hồng', '0259872525', 'wangkarry927@gmail.com', 'phung khoang, nam tu liem');
INSERT INTO `khach_hang` VALUES ('21', 'hhhh', '06774898999', 'h@gmail.com', 'triều khúc, thanh xuân, hà nội');
INSERT INTO `khach_hang` VALUES ('22', 'Thân Thị Hồng97', '0988229117', 'wangkarry97@gmail.com', 'thanh xuân, hà nội');

-- ----------------------------
-- Table structure for loai_san_pham
-- ----------------------------
DROP TABLE IF EXISTS `loai_san_pham`;
CREATE TABLE `loai_san_pham` (
  `ma_loai` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `loai_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `min` int(20) DEFAULT NULL,
  PRIMARY KEY (`ma_loai`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of loai_san_pham
-- ----------------------------
INSERT INTO `loai_san_pham` VALUES ('1', 'Bó hoa', '45228729_2191206254454052_7796096229061951488_n.jpg', '40000');
INSERT INTO `loai_san_pham` VALUES ('2', 'Chúc mừng', '45221574_2191206147787396_7020537225460842496_n.jpg', '40000');
INSERT INTO `loai_san_pham` VALUES ('3', 'Giỏ hoa', '44763651_1789461431153157_4770327211100078080_n.jpg', '50000');
INSERT INTO `loai_san_pham` VALUES ('4', 'Hoa cưới', '45179288_1802008129898487_3231767980329140224_n.jpg', '50000');
INSERT INTO `loai_san_pham` VALUES ('5', 'Hoa khai trương', '45228771_2191206227787388_5551307086198996992_n.jpg', '90000');
INSERT INTO `loai_san_pham` VALUES ('6', 'Hộp hoa', '44022979_1947152495392317_5551756571706392576_n.jpg', '100000');
INSERT INTO `loai_san_pham` VALUES ('7', 'Kệ hoa', '45266155_2191206404454037_6729045886799708160_n.jpg', '100000');
INSERT INTO `loai_san_pham` VALUES ('8', 'Sinh nhật', '44471957_2184764871764857_339925792232308736_n.jpg', '130000');
INSERT INTO `loai_san_pham` VALUES ('10', 'Mới nhập', '45208170_2191206001120744_3305207974015795200_n.jpg', '40000');

-- ----------------------------
-- Table structure for nhan_vien
-- ----------------------------
DROP TABLE IF EXISTS `nhan_vien`;
CREATE TABLE `nhan_vien` (
  `ma_nv` int(10) NOT NULL AUTO_INCREMENT,
  `ten_nv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `so_dt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mat_khau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'mật khẩu-md5',
  `trang_thai` int(4) DEFAULT NULL COMMENT '0-chưa chọn, 1-Hoạt động, 2-Hủy kích hoạt',
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'ảnh nhân viên',
  `loai_tk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ma_nv`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of nhan_vien
-- ----------------------------
INSERT INTO `nhan_vien` VALUES ('18', 'Admin', '12345678998', 'quanvuanh197@gmail.com', '483fb8bf724af473bab089e002d44882', '1', 'a78e0ddd1669a0f70c9a7c382d4f6895.jpg', 'admin');
INSERT INTO `nhan_vien` VALUES ('23', 'Than Thi Hong', '0388929822', 'hongthan997@gmail.com', '202cb962ac59075b964b07152d234b70', '1', '15538130_354415644914206_92594791912570880_n.jpg', 'admin');
INSERT INTO `nhan_vien` VALUES ('24', 'hongthan', '02588778834', 'wangkarry97@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '1', '22782383_527322060953327_1349214253_n.jpg', 'emp');

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `ma_sp` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kieu_dang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chu_de` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ten_sp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `gia_nhap` int(20) DEFAULT NULL,
  `don_gia` int(20) DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Lưu tên ảnh',
  PRIMARY KEY (`ma_sp`),
  KEY `ten_sp` (`ten_sp`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'Bó hoa', 'Hoa khai trương', 'SP 01', '6', '859998', '2000000', '43629515_1947115052062728_3666093992631599104_n.jpg');
INSERT INTO `products` VALUES ('3', 'Bó hoa', 'Chúc mừng', 'SP 02', '11', '150000', '200000', '42854240_1904764899643101_7401941359411593216_n.jpg');
INSERT INTO `products` VALUES ('5', 'Kệ hoa', 'Hoa khai trương', 'SP 20', '11', '90000', '100000', '44650366_2577153092302300_1583810009769181184_n.jpg');
INSERT INTO `products` VALUES ('6', 'Giỏ hoa', 'Sinh nhật', 'SP 19', '7', '110000', '130000', '45179288_1802008129898487_3231767980329140224_n.jpg');
INSERT INTO `products` VALUES ('7', 'Bó hoa', 'Sinh nhật', 'SP 03', '9', '260000', '300000', '44322775_2565465906804352_9198048286907301888_n.jpg');
INSERT INTO `products` VALUES ('8', 'Bó hoa', 'Chúc mừng', 'SP 12', '16', '30000', '40000', '43447153_1913752895410968_2555263682921627648_n.jpg');
INSERT INTO `products` VALUES ('9', 'Giỏ hoa', 'Hoa cưới', 'sp70', '14', '40000', '50000', 'IMG_2231-e1515297254522.jpg');
INSERT INTO `products` VALUES ('10', 'Bó hoa', 'Chúc mừng', 'SP 80', '10', '560000', '600000', '44327490_2565467423470867_709439652821467136_n.jpg');
INSERT INTO `products` VALUES ('11', 'Bó hoa', 'Hoa khai trương', 'SP S1', '15', '80000', '90000', '43851529_2551191818231761_4613057105132257280_n.jpg');
INSERT INTO `products` VALUES ('12', 'Hộp hoa', 'Chúc mừng', 'Hộp hoa 01', '8', '290000', '300000', '44022979_1947152495392317_5551756571706392576_n.jpg');
INSERT INTO `products` VALUES ('13', 'Hộp hoa', 'Hoa cưới', 'Hộp hoa 02', '20', '80000', '100000', '43601499_1947152522058981_443627708874752000_n.jpg');
INSERT INTO `products` VALUES ('15', 'Kệ hoa', 'Hoa cưới', 'Hoa cưới 08', '50', '150000', '200000', '43639685_1947114858729414_6144459116501794816_n.jpg');
INSERT INTO `products` VALUES ('16', 'Giỏ hoa', 'Chúc mừng', 'Giỏ hoa 19', '40', '70000', '80000', '43663897_1947115428729357_8267764370663014400_n.jpg');
INSERT INTO `products` VALUES ('17', 'Giỏ hoa', 'Sinh nhật', 'Sinh nhật 10', '16', '100000', '150000', '45266155_2191206404454037_6729045886799708160_n.jpg');
INSERT INTO `products` VALUES ('18', 'Hộp hoa', 'Hoa cưới', 'Giỏ hoa 09', '20', '500000', '600000', '45296857_2191206137787397_5580298514878955520_n.jpg');
