/*
 Navicat Premium Data Transfer

 Source Server         : CCE
 Source Server Type    : MySQL
 Source Server Version : 100428
 Source Host           : localhost:3306
 Source Schema         : udru

 Target Server Type    : MySQL
 Target Server Version : 100428
 File Encoding         : 65001

 Date: 06/02/2025 09:22:26
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student`  (
  `StudentID` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `StudentName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Gender` enum('M','F','O') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Email` varchar(199) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `PhoneNumber` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `City` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `State` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `PostalCode` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Country` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `EnrollmentDate` date NOT NULL,
  `Program` varchar(199) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `StudentStatus` enum('กำลังศึกษา','สำเร็จการศึกษา','พักการเรียน') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`StudentID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES ('66001308101', 'นายธราเทพ ธาดา', 'F', '2003-08-18', 'supitchaya@email.com', '0989012359', '89 หมู่ 3', 'สงขลา', 'สงขลา', '90000', 'ไทย', '2023-06-01', 'เทคโนโลยีสารสนเทศ', 'พักการเรียน');
INSERT INTO `student` VALUES ('66001308102', 'นายนครินทร์ คนงาม', 'M', '2003-09-30', 'akkarat@email.com', '0856789015', '222 หมู่ 6', 'นครราชสีมา', 'นครราชสีมา', '30000', 'ไทย', '2023-06-01', 'วิทยาการข้อมูล', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66001308103', 'นายวุฒิชัย แก้ววิเศษ', 'F', '2001-11-21', 'supawadee@email.com', '0834567893', '789 หมู่ 3', 'ขอนแก่น', 'ขอนแก่น', '40000', 'ไทย', '2021-06-01', 'เทคโนโลยีสารสนเทศ', 'สำเร็จการศึกษา');
INSERT INTO `student` VALUES ('66001308104', 'นางสาวบุศราวดี สมศรี', 'F', '2002-07-08', 'phimlada@email.com', '0845678904', '101 หมู่ 5', 'ภูเก็ต', 'ภูเก็ต', '83000', 'ไทย', '2022-06-01', 'วิศวกรรมซอฟต์แวร์', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66001308105', 'นายวรรธนัย โคตรศรีวงษ์', 'M', '2003-09-30', 'akkarat@email.com', '0856789015', '222 หมู่ 6', 'นครราชสีมา', 'นครราชสีมา', '30000', 'ไทย', '2023-06-01', 'วิทยาการข้อมูล', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66001308106', 'นายฐิติพงศ์ คำภักดี', 'F', '2001-06-18', 'nichapat@email.com', '0867890126', '333 หมู่ 7', 'สุราษฎร์ธานี', 'สุราษฎร์ธานี', '84000', 'ไทย', '2021-06-01', 'วิศวกรรมอุตสาหการ', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66001308107', 'นายก้องภพ กวีวัฒนกร', 'M', '2002-12-25', 'kittisak@email.com', '0878901237', '444 หมู่ 8', 'อุดรธานี', 'อุดรธานี', '41000', 'ไทย', '2022-06-01', 'ระบบสารสนเทศ', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66001308108', 'นายชุติพนธ์ ชะนะบุญ', 'F', '2003-03-03', 'siriporn@email.com', '0889012348', '555 หมู่ 9', 'สงขลา', 'สงขลา', '90000', 'ไทย', '2023-06-01', 'การจัดการเทคโนโลยี', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66001308109', 'นางสาวปรางค์อักษร แสนงาม', 'F', '2001-08-15', 'somchai@email.com', '0890123459', '666 หมู่ 10', 'นครปฐม', 'นครปฐม', '73000', 'ไทย', '2021-06-01', 'วิศวกรรมไฟฟ้า', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66001308111', 'นายเอกราช อินทะวงค์OK', 'F', '2002-10-10', 'chanikan@email.com', '0901234560', '777 หมู่ 11', 'ราชบุรี', 'ราชบุรี', '70000', 'ไทย', '2022-06-01', 'วิศวกรรมโยธา', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66001308112', 'นายนรากร โคตรแสนลี', 'M', '2003-01-20', 'parinya@email.com', '0912345671', '888 หมู่ 12', 'บุรีรัมย์', 'บุรีรัมย์', '31000', 'ไทย', '2023-06-01', 'วิศวกรรมเครื่องกล', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308101', 'นายพัฒนพงษ์ ปิงตา', 'M', '2002-05-10', 'kongpop@email.com', '0812345671', '123 หมู่ 4', 'กรุงเทพฯ', 'กรุงเทพฯ', '10100', 'ไทย', '2022-06-01', 'วิศวกรรมคอมพิวเตอร์', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308102', 'นายกิตติศักดิ์ จิตจักร์', 'M', '2003-02-14', 'nattawut@email.com', '0823456782', '456 หมู่ 2', 'เชียงใหม่', 'เชียงใหม่', '50000', 'ไทย', '2023-06-01', 'วิทยาการคอมพิวเตอร์', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308104', 'นายบุรัสกร พรมยาลี', 'M', '2001-08-22', 'kritin@email.com', '0812345672', '901 หมู่ 22', 'สุโขทัย', 'สุโขทัย', '64000', 'ไทย', '2021-06-01', 'วิศวกรรมคอมพิวเตอร์', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308106', 'นายวุฒิไกร ชาญา', 'F', '2001-11-21', 'supawadee@email.com', '0834567893', '789 หมู่ 3', 'ขอนแก่น', 'ขอนแก่น', '40000', 'ไทย', '2021-06-01', 'เทคโนโลยีสารสนเทศ', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308107', 'นายโชติวัฒน์ แก้วหล้า', 'F', '2002-07-08', 'phimlada@email.com', '0845678904', '101 หมู่ 5', 'ภูเก็ต', 'ภูเก็ต', '83000', 'ไทย', '2022-06-01', 'วิศวกรรมซอฟต์แวร์', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308108', 'นายนรานันทร์ พลค้อ', 'M', '2003-09-30', 'akkarat@email.com', '0856789015', '222 หมู่ 6', 'นครราชสีมา', 'นครราชสีมา', '30000', 'ไทย', '2023-06-01', 'วิทยาการข้อมูล', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308110', 'นายธัญชนก อินทะวงษ์', 'F', '2001-06-18', 'nichapat@email.com', '0867890126', '333 หมู่ 7', 'สุราษฎร์ธานี', 'สุราษฎร์ธานี', '84000', 'ไทย', '2021-06-01', 'วิศวกรรมอุตสาหการ', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308111', 'นายศรานุพงษ์ นาคเสน', 'M', '2002-12-25', 'kittisak@email.com', '0878901237', '444 หมู่ 8', 'อุดรธานี', 'อุดรธานี', '41000', 'ไทย', '2022-06-01', 'ระบบสารสนเทศ', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308112', 'นายณัฏชนน ฤทธิศักดิ์', 'F', '2003-03-03', 'siriporn@email.com', '0889012348', '555 หมู่ 9', 'สงขลา', 'สงขลา', '90000', 'ไทย', '2023-06-01', 'การจัดการเทคโนโลยี', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308113', 'นายเทพสถิตย์ สุริยะ', 'M', '2001-08-15', 'somchai@email.com', '0890123459', '666 หมู่ 10', 'นครปฐม', 'นครปฐม', '73000', 'ไทย', '2021-06-01', 'วิศวกรรมไฟฟ้า', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308114', 'นายพัฒนพงศ์ คำรัตน์', 'F', '2002-10-10', 'chanikan@email.com', '0901234560', '777 หมู่ 11', 'ราชบุรี', 'ราชบุรี', '70000', 'ไทย', '2022-06-01', 'วิศวกรรมโยธา', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308115', 'นายปัญจนัย ท่าค้อ', 'M', '2003-01-20', 'parinya@email.com', '0912345671', '888 หมู่ 12', 'บุรีรัมย์', 'บุรีรัมย์', '31000', 'ไทย', '2023-06-01', 'วิศวกรรมเครื่องกล', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308116', 'นายเศรษฐพงษ์ ลิศรี', 'F', '2001-04-05', 'yada@email.com', '0923456782', '999 หมู่ 13', 'สุพรรณบุรี', 'สุพรรณบุรี', '72000', 'ไทย', '2021-06-01', 'วิศวกรรมเคมี', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308118', 'นางสาวสาวิตรี เสนาภักดี', 'F', '2002-04-19', 'natthida@email.com', '0823456783', '1010 หมู่ 23', 'ตาก', 'ตาก', '63000', 'ไทย', '2022-06-01', 'การจัดการเทคโนโลยี', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308120', 'นายพีรพงศ์ ภูสอดศรี', 'M', '2003-10-31', 'peerapol@email.com', '0834567894', '1111 หมู่ 24', 'พิษณุโลก', 'พิษณุโลก', '65000', 'ไทย', '2023-06-01', 'วิศวกรรมเครื่องกล', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308122', 'นางสาวอัจฉราภรณ์ แก้ววงษ์', 'M', '2002-09-12', 'teerapat@email.com', '0934567893', '123 หมู่ 14', 'สระบุรี', 'สระบุรี', '18000', 'ไทย', '2022-06-01', 'คอมพิวเตอร์ธุรกิจ', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308123', 'นายณัฎฐากร เดชสมบัติ', 'F', '2003-07-07', 'kanyarat@email.com', '0945678904', '234 หมู่ 15', 'ลพบุรี', 'ลพบุรี', '15000', 'ไทย', '2023-06-01', 'วิศวกรรมอิเล็กทรอนิกส์', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308124', 'นายวชิรวิทย์ แสงวิเศษ', 'M', '2001-11-22', 'pongsathorn@email.com', '0956789015', '345 หมู่ 16', 'ชัยภูมิ', 'ชัยภูมิ', '36000', 'ไทย', '2021-06-01', 'เทคโนโลยีอุตสาหกรรม', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308126', 'นางสาววิภาดา ศรีเลิศ', 'F', '2002-06-29', 'waraporn@email.com', '0967890126', '456 หมู่ 17', 'นครพนม', 'นครพนม', '48000', 'ไทย', '2022-06-01', 'เทคโนโลยีการเกษตร', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308127', 'นางสาวอภิญญา คะนึกรัตน์', 'M', '2003-12-09', 'wachirawit@email.com', '0978901237', '567 หมู่ 18', 'เพชรบุรี', 'เพชรบุรี', '76000', 'ไทย', '2023-06-01', 'วิศวกรรมสิ่งแวดล้อม', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308128', 'นายณัฐพล แช่มช้อย', 'F', '2001-03-28', 'paweena@email.com', '0989012348', '678 หมู่ 19', 'สมุทรสาคร', 'สมุทรสาคร', '74000', 'ไทย', '2021-06-01', 'วิศวกรรมโลจิสติกส์', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308130', 'นายเจษฎากร มูลสาร', 'M', '2002-01-05', 'panuwat@email.com', '0990123459', '789 หมู่ 20', 'มหาสารคาม', 'มหาสารคาม', '44000', 'ไทย', '2022-06-01', 'วิศวกรรมซอฟต์แวร์', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308201', 'นายธีรภัทร บุญมามี', 'M', '2001-12-15', 'sarawut@email.com', '0845678905', '1212 หมู่ 25', 'อุตรดิตถ์', 'อุตรดิตถ์', '53000', 'ไทย', '2021-06-01', 'วิศวกรรมไฟฟ้า', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308203', 'นายนนทพัทธ์ โสภะบุญ', 'F', '2002-06-07', 'piyathida@email.com', '0856789016', '1313 หมู่ 26', 'นครสวรรค์', 'นครสวรรค์', '60000', 'ไทย', '2022-06-01', 'วิศวกรรมอุตสาหการ', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308206', 'นายเคน อันเดร เอ็น สุวรรณศรี', 'M', '2003-09-14', 'anuwat@email.com', '0867890127', '1414 หมู่ 27', 'เพชรบูรณ์', 'เพชรบูรณ์', '67000', 'ไทย', '2023-06-01', 'คอมพิวเตอร์ธุรกิจ', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308207', 'นายภูมิรพี โคตรชมภู', 'F', '2001-11-20', 'priyaporn@email.com', '0878901238', '1515 หมู่ 28', 'กาญจนบุรี', 'กาญจนบุรี', '71000', 'ไทย', '2021-06-01', 'วิศวกรรมสิ่งแวดล้อม', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308208', 'นางสาวกัญญารัตน์ ขวัญติด', 'M', '2002-02-11', 'chanon@email.com', '0889012349', '1616 หมู่ 29', 'ราชบุรี', 'ราชบุรี', '70000', 'ไทย', '2022-06-01', 'วิศวกรรมโลจิสติกส์', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308209', 'นางสาวรัตนาภรณ์ อุรธานี', 'M', '2003-07-30', 'udon@email.com', '0890123460', '1717 หมู่ 30', 'สมุทรสงคราม', 'สมุทรสงคราม', '75000', 'ไทย', '2023-06-01', 'เทคโนโลยีอุตสาหกรรม', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308210', 'นายวุฒิชัย ทองแห้ว', 'F', '2001-03-01', 'natchaya@email.com', '0901234571', '1818 หมู่ 31', 'สมุทรปราการ', 'สมุทรปราการ', '10270', 'ไทย', '2021-06-01', 'วิศวกรรมเคมี', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308212', 'นายจรัส แสนอุบล', 'F', '2002-09-25', 'wachirayan@email.com', '0912345682', '1919 หมู่ 32', 'ปทุมธานี', 'ปทุมธานี', '12000', 'ไทย', '2022-06-01', 'เทคโนโลยีการเกษตร', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308214', 'นายพงศกร ปานจันดา', 'F', '2003-05-10', 'sujitra@email.com', '0801234561', '890 หมู่ 21', 'อุบลราชธานี', 'อุบลราชธานี', '34000', 'ไทย', '2023-06-01', 'เทคโนโลยีสารสนเทศ', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308215', 'นายธนกฤต สุทธิวรรณา', 'M', '2003-05-16', 'pakorn@email.com', '0923456793', '2020 หมู่ 33', 'นนทบุรี', 'นนทบุรี', '11000', 'ไทย', '2023-06-01', 'วิศวกรรมอิเล็กทรอนิกส์', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308218', 'นายทนงศักดิ์ ผุยบัวค้อ', 'M', '2001-07-09', 'ittipon@email.com', '0934567804', '2121 หมู่ 34', 'นครนายก', 'นครนายก', '26000', 'ไทย', '2021-06-01', 'วิทยาการข้อมูล', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308219', 'นางสาวชฎิลลดา วงษาพรหม', 'F', '2002-10-22', 'sukanya@email.com', '0945678915', '2222 หมู่ 35', 'ชลบุรี', 'ชลบุรี', '20000', 'ไทย', '2022-06-01', 'ระบบสารสนเทศ', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308221', 'นายระพีพัฒน์ ศิลาลัย', 'M', '2003-12-03', 'thanakrit@email.com', '0956789026', '2323 หมู่ 36', 'ระยอง', 'ระยอง', '21000', 'ไทย', '2023-06-01', 'วิศวกรรมซอฟต์แวร์', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308223', 'นางสาวจิราวัลย์ พันธุ', 'F', '2001-06-28', 'napatsorn@email.com', '0967890137', '2424 หมู่ 37', 'ตราด', 'ตราด', '23000', 'ไทย', '2021-06-01', 'วิศวกรรมเครื่องกล', 'กำลังศึกษา');
INSERT INTO `student` VALUES ('66041308226', 'นางสาวอุบลวรรณ จะโนรัตน์', 'M', '2002-04-08', 'pannawit@email.com', '0978901248', '2525 หมู่ 38', 'ประจวบคีรีขันธ์', 'ประจวบคีรีขันธ์', '77000', 'ไทย', '2022-06-01', 'การจัดการเทคโนโลยี', 'กำลังศึกษา');

-- ----------------------------
-- Table structure for vehicle
-- ----------------------------
DROP TABLE IF EXISTS `vehicle`;
CREATE TABLE `vehicle`  (
  `VehicleID` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `StudentID` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `LicensePlate` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `VehicleType` int UNSIGNED NOT NULL,
  `Brand` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Model` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Color` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `VehicleStatus` enum('Active','Inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `LastUpdated` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`VehicleID`) USING BTREE,
  UNIQUE INDEX `LicensePlate`(`LicensePlate`) USING BTREE,
  INDEX `VehicleType`(`VehicleType`) USING BTREE,
  INDEX `StudentID`(`StudentID`) USING BTREE,
  CONSTRAINT `vehicle_ibfk_1` FOREIGN KEY (`VehicleType`) REFERENCES `vehicletype` (`VehicleTypeID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `vehicle_ibfk_2` FOREIGN KEY (`StudentID`) REFERENCES `student` (`StudentID`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 34 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of vehicle
-- ----------------------------
INSERT INTO `vehicle` VALUES (1, '66001308104', 'กข-1234', 1, 'Honda', 'Wave 110i', 'แดง', 'Active', '2025-01-29 22:41:53');
INSERT INTO `vehicle` VALUES (2, '66001308105', 'ขจ-5678', 3, 'Toyota', 'Hilux Revo', 'ขาว', 'Active', '2025-01-29 22:41:53');
INSERT INTO `vehicle` VALUES (3, '66001308106', 'คง-9101', 4, 'Toyota', 'Commuter', 'เงิน', 'Active', '2025-01-29 22:41:53');
INSERT INTO `vehicle` VALUES (4, '66001308107', 'งจ-2345', 5, 'Honda', 'Dream Super Cub', 'ฟ้า', 'Inactive', '2025-01-29 22:41:53');
INSERT INTO `vehicle` VALUES (5, '66001308108', 'จข-6789', 2, 'Honda', 'City', 'ดำ', 'Active', '2025-01-29 22:41:53');
INSERT INTO `vehicle` VALUES (6, '66001308109', 'ฉข-1122', 1, 'Yamaha', 'Fino', 'น้ำเงิน', 'Active', '2025-01-29 22:41:53');
INSERT INTO `vehicle` VALUES (7, '66001308111', 'ชจ-3344', 3, 'Isuzu', 'D-Max', 'เทา', 'Active', '2025-01-29 22:41:53');
INSERT INTO `vehicle` VALUES (8, '66001308112', 'ซข-5566', 4, 'Nissan', 'Urvan', 'ขาว', 'Inactive', '2025-01-29 22:41:53');
INSERT INTO `vehicle` VALUES (9, '66041308101', 'ญข-7788', 5, 'Honda', 'Zoomer-X', 'เหลือง', 'Active', '2025-01-29 22:41:53');
INSERT INTO `vehicle` VALUES (10, '66041308102', 'ฎข-9900', 1, 'Suzuki', 'Raider 150', 'ดำ', 'Active', '2025-01-29 22:41:53');
INSERT INTO `vehicle` VALUES (11, '66041308104', 'ฏข-1123', 3, 'Mitsubishi', 'Triton', 'แดง', 'Inactive', '2025-01-29 22:41:53');
INSERT INTO `vehicle` VALUES (12, '66041308106', 'ฐข-3345', 4, 'Hyundai', 'H-1', 'เทา', 'Active', '2025-01-29 22:41:53');
INSERT INTO `vehicle` VALUES (13, '66041308107', 'ฑข-5567', 5, 'SYM', 'Maxsym 400', 'ดำ', 'Active', '2025-01-29 22:41:53');
INSERT INTO `vehicle` VALUES (14, '66041308108', 'ฒข-7789', 2, 'Mazda', 'Mazda 2', 'ฟ้า', 'Active', '2025-01-29 22:41:53');
INSERT INTO `vehicle` VALUES (15, '66041308210', 'ณข-9901', 1, 'Kawasaki', 'Z125', 'เขียว', 'Active', '2025-01-29 22:41:53');
INSERT INTO `vehicle` VALUES (16, '66041308212', 'ดข-1124', 3, 'Ford', 'Ranger', 'เงิน', 'Inactive', '2025-01-29 22:41:53');
INSERT INTO `vehicle` VALUES (17, '66041308214', 'ตข-3346', 4, 'Mercedes-Benz', 'Vito', 'ดำ', 'Active', '2025-01-29 22:41:53');
INSERT INTO `vehicle` VALUES (18, '66041308215', 'ถข-5568', 5, 'Honda', 'Super Cub', 'ชมพู', 'Active', '2025-01-29 22:41:53');
INSERT INTO `vehicle` VALUES (19, '66041308218', 'ทข-7780', 1, 'Yamaha', 'GT125', 'แดง', 'Active', '2025-01-29 22:41:53');
INSERT INTO `vehicle` VALUES (20, '66041308219', 'ธข-9902', 3, 'Chevrolet', 'Colorado', 'ฟ้า', 'Inactive', '2025-01-29 22:41:53');
INSERT INTO `vehicle` VALUES (21, '66041308221', 'นข-1125', 4, 'Volkswagen', 'Caravelle', 'น้ำตาล', 'Active', '2025-01-29 22:41:53');
INSERT INTO `vehicle` VALUES (22, '66041308223', 'บข-3347', 5, 'Honda', 'Wave 125i', 'ขาว', 'Active', '2025-01-29 22:41:53');
INSERT INTO `vehicle` VALUES (23, '66041308226', 'ปข-5569', 2, 'Toyota', 'Corolla Altis', 'เงิน', 'Active', '2025-01-29 22:41:53');
INSERT INTO `vehicle` VALUES (24, '66041308206', 'พข-1234', 1, 'Honda', 'Click 125i', 'ดำ', 'Active', '2025-01-29 22:47:10');
INSERT INTO `vehicle` VALUES (25, '66041308207', 'ฟข-5678', 3, 'Toyota', 'Hilux Vigo', 'ขาว', 'Active', '2025-01-29 22:47:10');
INSERT INTO `vehicle` VALUES (26, '66041308208', 'ภข-9101', 4, 'Hyundai', 'H-1', 'เทา', 'Inactive', '2025-01-29 22:47:10');
INSERT INTO `vehicle` VALUES (27, '66041308209', 'มข-2345', 5, 'Honda', 'Super Cub', 'ฟ้า', 'Active', '2025-01-29 22:47:10');
INSERT INTO `vehicle` VALUES (28, '66041308210', 'ยข-6789', 2, 'Mazda', 'CX-3', 'แดง', 'Active', '2025-01-29 22:47:10');
INSERT INTO `vehicle` VALUES (29, '66041308212', 'รข-1122', 1, 'Yamaha', 'Aerox', 'น้ำเงิน', 'Active', '2025-01-29 22:47:10');
INSERT INTO `vehicle` VALUES (30, '66041308214', 'ลข-3344', 3, 'Isuzu', 'D-Max', 'เงิน', 'Active', '2025-01-29 22:47:10');
INSERT INTO `vehicle` VALUES (31, '66041308215', 'วข-5566', 4, 'Nissan', 'Urvan', 'ขาว', 'Inactive', '2025-01-29 22:47:10');
INSERT INTO `vehicle` VALUES (32, '66041308218', 'ศข-7788', 5, 'Honda', 'Wave 110i', 'เขียว', 'Active', '2025-01-29 22:47:10');
INSERT INTO `vehicle` VALUES (33, '66041308219', 'ษข-9900', 2, 'Toyota', 'Camry', 'ดำ', 'Active', '2025-01-29 22:47:10');

-- ----------------------------
-- Table structure for vehicleentrylog
-- ----------------------------
DROP TABLE IF EXISTS `vehicleentrylog`;
CREATE TABLE `vehicleentrylog`  (
  `LogID` int NOT NULL AUTO_INCREMENT,
  `VehicleID` int UNSIGNED NOT NULL,
  `StudentID` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `EntryTime` datetime NOT NULL DEFAULT current_timestamp,
  `ExitTime` datetime NULL DEFAULT NULL,
  `GateNumber` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `LogStatus` enum('In','Out') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'In',
  `LastUpdated` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`LogID`) USING BTREE,
  INDEX `VehicleID`(`VehicleID`) USING BTREE,
  INDEX `StudentID`(`StudentID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 99 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of vehicleentrylog
-- ----------------------------
INSERT INTO `vehicleentrylog` VALUES (1, 1, '66001308104', '2025-01-29 06:58:00', NULL, 'Gate 1', 'In', '2025-01-29 23:11:22');
INSERT INTO `vehicleentrylog` VALUES (2, 1, '66001308105', '2025-01-29 07:30:00', NULL, 'Gate 2', 'In', '2025-01-29 23:11:22');
INSERT INTO `vehicleentrylog` VALUES (3, 1, '66001308106', '2025-01-29 06:50:00', NULL, 'Gate 3', 'In', '2025-01-29 23:11:22');
INSERT INTO `vehicleentrylog` VALUES (4, 2, '66001308107', '2025-01-29 07:10:00', NULL, 'Gate 1', 'In', '2025-01-29 23:11:22');
INSERT INTO `vehicleentrylog` VALUES (5, 2, '66001308108', '2025-01-29 08:05:00', '2025-01-29 15:40:00', 'Gate 2', 'Out', '2025-01-29 23:11:22');
INSERT INTO `vehicleentrylog` VALUES (6, 3, '66001308109', '2025-01-29 07:25:00', NULL, 'Gate 1', 'In', '2025-01-29 23:11:22');
INSERT INTO `vehicleentrylog` VALUES (68, 2, NULL, '2025-01-29 06:58:00', NULL, 'Gate 1', 'In', '2025-01-29 23:11:22');
INSERT INTO `vehicleentrylog` VALUES (69, 2, NULL, '2025-01-29 07:30:00', NULL, 'Gate 2', 'In', '2025-01-29 23:11:22');
INSERT INTO `vehicleentrylog` VALUES (70, 2, NULL, '2025-01-29 08:00:00', '2025-01-29 11:00:00', 'Gate 3', 'Out', '2025-02-05 15:50:49');
INSERT INTO `vehicleentrylog` VALUES (71, 2, NULL, '2025-01-29 08:30:00', NULL, 'Gate 4', 'In', '2025-01-29 23:11:22');
INSERT INTO `vehicleentrylog` VALUES (72, 2, NULL, '2025-01-29 09:00:00', '2025-01-29 12:00:00', 'Gate 5', 'Out', '2025-02-05 15:50:41');
INSERT INTO `vehicleentrylog` VALUES (73, 3, NULL, '2025-01-29 06:45:00', NULL, 'Gate 4', 'In', '2025-01-29 23:11:22');
INSERT INTO `vehicleentrylog` VALUES (74, 3, NULL, '2025-01-29 08:00:00', NULL, 'Gate 3', 'In', '2025-01-29 23:11:22');
INSERT INTO `vehicleentrylog` VALUES (75, 3, NULL, '2025-01-29 08:45:00', NULL, 'Gate 2', 'In', '2025-01-29 23:11:22');
INSERT INTO `vehicleentrylog` VALUES (76, 4, NULL, '2025-01-29 08:05:00', '2025-01-29 15:40:00', 'Gate 2', 'Out', '2025-01-29 23:11:22');
INSERT INTO `vehicleentrylog` VALUES (77, 5, NULL, '2025-01-29 07:25:00', '2025-01-29 10:25:00', 'Gate 1', 'Out', '2025-02-05 15:50:49');
INSERT INTO `vehicleentrylog` VALUES (78, 6, NULL, '2025-01-29 06:45:00', NULL, 'Gate 4', 'In', '2025-01-29 23:11:22');
INSERT INTO `vehicleentrylog` VALUES (79, 7, NULL, '2025-01-29 07:50:00', '2025-01-29 14:40:00', 'Gate 2', 'Out', '2025-01-29 23:11:22');
INSERT INTO `vehicleentrylog` VALUES (80, 8, NULL, '2025-01-29 09:15:00', '2025-01-29 16:00:00', 'Gate 5', 'Out', '2025-01-29 23:11:22');
INSERT INTO `vehicleentrylog` VALUES (81, 9, NULL, '2025-01-29 09:40:00', '2025-01-29 12:40:00', 'Gate 1', 'Out', '2025-02-05 15:50:41');
INSERT INTO `vehicleentrylog` VALUES (82, 10, NULL, '2025-01-29 08:30:00', NULL, 'Gate 3', 'In', '2025-01-29 23:11:22');
INSERT INTO `vehicleentrylog` VALUES (83, 2, NULL, '2025-01-29 06:00:00', NULL, 'Gate 1', 'In', '2025-01-29 23:11:22');
INSERT INTO `vehicleentrylog` VALUES (84, 2, NULL, '2025-01-29 06:15:00', '2025-01-29 09:15:00', 'Gate 2', 'Out', '2025-02-05 15:50:49');
INSERT INTO `vehicleentrylog` VALUES (85, 2, NULL, '2025-01-29 06:30:00', NULL, 'Gate 3', 'In', '2025-01-29 23:11:22');
INSERT INTO `vehicleentrylog` VALUES (86, 2, NULL, '2025-01-29 06:45:00', NULL, 'Gate 4', 'In', '2025-01-29 23:11:22');
INSERT INTO `vehicleentrylog` VALUES (87, 2, NULL, '2025-01-29 07:00:00', NULL, 'Gate 5', 'In', '2025-01-29 23:11:22');
INSERT INTO `vehicleentrylog` VALUES (88, 3, NULL, '2025-01-29 07:05:00', NULL, 'Gate 1', 'In', '2025-01-29 23:11:22');
INSERT INTO `vehicleentrylog` VALUES (89, 3, NULL, '2025-01-29 07:10:00', NULL, 'Gate 2', 'In', '2025-01-29 23:11:22');
INSERT INTO `vehicleentrylog` VALUES (90, 3, NULL, '2025-01-29 07:15:00', '2025-01-29 10:15:00', 'Gate 3', 'Out', '2025-02-05 15:50:41');
INSERT INTO `vehicleentrylog` VALUES (91, 4, NULL, '2025-01-29 07:20:00', '2025-01-29 10:20:00', 'Gate 4', 'Out', '2025-02-05 15:50:49');
INSERT INTO `vehicleentrylog` VALUES (92, 4, NULL, '2025-01-29 07:25:00', NULL, 'Gate 5', 'In', '2025-01-29 23:11:22');
INSERT INTO `vehicleentrylog` VALUES (93, 5, NULL, '2025-01-29 07:30:00', NULL, 'Gate 1', 'In', '2025-01-29 23:11:22');
INSERT INTO `vehicleentrylog` VALUES (94, 5, NULL, '2025-01-29 07:35:00', NULL, 'Gate 2', 'In', '2025-01-29 23:11:22');
INSERT INTO `vehicleentrylog` VALUES (95, 5, NULL, '2025-01-29 07:40:00', NULL, 'Gate 3', 'In', '2025-01-29 23:11:22');
INSERT INTO `vehicleentrylog` VALUES (96, 6, NULL, '2025-01-29 07:45:00', NULL, 'Gate 4', 'In', '2025-01-29 23:11:22');
INSERT INTO `vehicleentrylog` VALUES (97, 6, NULL, '2025-01-29 07:50:00', NULL, 'Gate 5', 'In', '2025-01-29 23:11:22');
INSERT INTO `vehicleentrylog` VALUES (98, 7, NULL, '2025-01-29 08:00:00', '2025-01-29 11:00:00', 'Gate 1', 'Out', '2025-02-05 15:50:49');

-- ----------------------------
-- Table structure for vehicletype
-- ----------------------------
DROP TABLE IF EXISTS `vehicletype`;
CREATE TABLE `vehicletype`  (
  `VehicleTypeID` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `TypeName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`VehicleTypeID`) USING BTREE,
  UNIQUE INDEX `TypeName`(`TypeName`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of vehicletype
-- ----------------------------
INSERT INTO `vehicletype` VALUES (1, 'จักรยานยนต์');
INSERT INTO `vehicletype` VALUES (3, 'รถกะบะ');
INSERT INTO `vehicletype` VALUES (4, 'รถตู้');
INSERT INTO `vehicletype` VALUES (5, 'รถพ่วงข้าง');
INSERT INTO `vehicletype` VALUES (2, 'รถเก๋ง');
INSERT INTO `vehicletype` VALUES (6, 'เครื่องบิน');

SET FOREIGN_KEY_CHECKS = 1;
