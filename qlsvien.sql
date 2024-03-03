-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2024 at 07:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlsvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `email`, `password`, `teacher_id`) VALUES
(1, 'admin1@gmail.com', '$2y$12$mcGfKI/kAuq5Lkx9K5OxZu5n0W9zrrsHXKRDHRBIAYc9zM2c7xxkS', 45),
(2, 'admin2@gmail.com', '1', 45),
(3, 'admin3@gmail.com', '1', 45),
(4, 'admin4@gmail.com', '1', 45),
(6, 'admin5@gmail.com', '1', 45),
(7, 'admin6@gmail.com', '1', 45),
(8, 'admin7@gmail.com', '1', 45),
(9, 'admin8@gmail.com', '1', 45),
(10, 'admin9@gmail.com', '1', 45),
(11, 'admin10@gmail.com', '1', 45),
(12, 'admin11@gmail.com', '1', 45),
(13, 'admin12@gmail.com', '1', 45),
(14, 'admin13@gmail.com', '1', 45),
(15, 'admin14@gmail.com', '1', 45),
(16, 'admin15@gmail.com', '1', 45),
(17, 'admin16@gmail.com', '1', 45),
(18, 'admin17@gmail.com', '1', 45),
(19, 'admin18@gmail.com', '1', 45),
(20, 'admin19@gmail.com', '1', 45),
(21, 'admin20@gmail.com', '1', 45),
(22, 'admin21@gmail.com', '1', 45),
(23, 'admin22@gmail.com', '1', 45),
(24, 'admin23@gmail.com', '1', 45),
(25, 'admin24@gmail.com', '1', 45),
(26, 'admin25@gmail.com', '1', 45),
(27, 'admin26@gmail.com', '1', 45),
(28, 'admin27@gmail.com', '1', 45),
(29, 'admin28@gmail.com', '1', 45),
(30, 'admin29@gmail.com', '1', 45),
(31, 'admin30@gmail.com', '1', 45),
(32, 'admin31@gmail.com', '1', 45),
(33, 'admin32@gmail.com', '1', 45),
(34, 'admin33@gmail.com', '1', 45),
(35, 'admin34@gmail.com', '1', 45),
(36, 'admin35@gmail.com', '1', 45),
(37, 'admin36@gmail.com', '1', 45),
(38, 'admin37@gmail.com', '1', 45),
(39, 'admin38@gmail.com', '1', 45),
(40, 'admin39@gmail.com', '1', 45),
(41, 'admin40@gmail.com', '1', 45),
(42, 'admin41@gmail.com', '1', 45),
(43, 'admin42@gmail.com', '1', 45),
(44, 'admin43@gmail.com', '1', 45),
(45, 'admin44@gmail.com', '1', 45),
(46, 'admin45@gmail.com', '1', 45),
(47, 'admin46@gmail.com', '1', 45),
(48, 'admin47@gmail.com', '1', 45),
(49, 'admin48@gmail.com', '1', 45),
(50, 'admin49@gmail.com', '1', 45),
(51, 'admin50@gmail.com', '1', 45),
(52, 'admin51@gmail.com', '1', 45),
(53, 'admin52@gmail.com', '1', 45),
(54, 'admin53@gmail.com', '1', 45),
(55, 'admin54@gmail.com', '1', 45),
(56, 'admin55@gmail.com', '1', 45),
(57, 'admin56@gmail.com', '1', 45),
(58, 'admin57@gmail.com', '1', 45),
(59, 'admin58@gmail.com', '1', 45),
(60, 'admin59@gmail.com', '1', 45),
(61, 'admin60@gmail.com', '1', 45),
(62, 'admin61@gmail.com', '1', 45),
(63, 'admin62@gmail.com', '1', 45),
(64, 'admin63@gmail.com', '1', 45),
(65, 'admin64@gmail.com', '1', 45),
(66, 'admin65@gmail.com', '1', 45),
(67, 'admin66@gmail.com', '1', 45),
(68, 'admin67@gmail.com', '1', 45),
(69, 'admin68@gmail.com', '1', 45),
(70, 'admin69@gmail.com', '1', 45),
(71, 'admin70@gmail.com', '1', 45),
(72, 'admin71@gmail.com', '1', 45),
(73, 'admin72@gmail.com', '1', 45),
(74, 'admin73@gmail.com', '1', 45),
(75, 'admin74@gmail.com', '1', 45),
(76, 'admin75@gmail.com', '1', 45),
(77, 'admin76@gmail.com', '1', 45),
(78, 'admin77@gmail.com', '1', 45),
(79, 'admin78@gmail.com', '1', 45),
(80, 'admin79@gmail.com', '1', 45),
(81, 'admin80@gmail.com', '1', 45),
(82, 'admin81@gmail.com', '1', 45),
(83, 'admin82@gmail.com', '1', 45),
(84, 'admin83@gmail.com', '1', 45),
(85, 'admin84@gmail.com', '1', 45),
(86, 'admin85@gmail.com', '1', 45),
(87, 'admin86@gmail.com', '1', 45),
(88, 'admin87@gmail.com', '1', 45),
(89, 'admin88@gmail.com', '1', 45),
(90, 'admin89@gmail.com', '1', 45),
(91, 'admin90@gmail.com', '1', 45),
(92, 'admin91@gmail.com', '1', 45),
(93, 'admin92@gmail.com', '1', 45),
(94, 'admin93@gmail.com', '1', 45),
(95, 'admin94@gmail.com', '1', 45),
(96, 'admin95@gmail.com', '1', 45),
(97, 'admin96@gmail.com', '1', 45),
(98, 'admin97@gmail.com', '1', 45),
(99, 'admin98@gmail.com', '1', 45),
(100, 'admin99@gmail.com', '1', 45),
(101, 'admin100@gmail.com', '1', 45);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class`
--

CREATE TABLE `tbl_class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(100) NOT NULL,
  `major_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `homeroom_teacher` int(11) NOT NULL,
  `year_of_admission` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_class`
--

INSERT INTO `tbl_class` (`class_id`, `class_name`, `major_id`, `department_id`, `homeroom_teacher`, `year_of_admission`) VALUES
(1, 'Công nghệ thông tin 6 - k61', 1, 1, 45, 2020),
(2, 'Công nghệ thông tin 5 - k61', 1, 1, 46, 2020),
(3, 'Công nghệ thông tin 1 - k61', 1, 1, 47, 2020),
(4, 'Công nghệ thông tin 2 - k61', 1, 1, 48, 2020),
(5, 'Công nghệ thông tin 3 - k61', 1, 1, 49, 2020),
(6, 'Công nghệ thông tin 4 - k61', 1, 1, 50, 2020),
(7, 'Công nghệ thông tin V.A - k61', 1, 1, 51, 2020);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_classroom`
--

CREATE TABLE `tbl_classroom` (
  `classroom_id` int(11) NOT NULL,
  `building` varchar(100) NOT NULL,
  `room_number` varchar(100) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_classroom`
--

INSERT INTO `tbl_classroom` (`classroom_id`, `building`, `room_number`, `class_id`) VALUES
(3, 'A2', '101', 1),
(4, 'A2', '102', 1),
(5, 'A2', '201', 2),
(6, 'A2', '202', 2),
(7, 'A2', '103', 1),
(8, 'A2', '104', 1),
(9, 'A2', '105', 1),
(10, 'A2', '203', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`department_id`, `department_name`) VALUES
(1, 'Công nghệ thông tin'),
(2, 'Công trình'),
(3, 'Cơ khí'),
(4, 'Vận tải kinh tế'),
(5, 'Điện - điện tử'),
(6, 'Lý luận chính trị'),
(7, 'Kỹ thuật xây dựng'),
(8, 'Quản lý xây dựng'),
(9, 'Đào tạo quốc tế'),
(10, 'Giáo dục quốc phòng'),
(11, 'Môi trường và an toàn giao thông'),
(12, 'Cơ bản');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enrollmentdetail`
--

CREATE TABLE `tbl_enrollmentdetail` (
  `enrollmentDetail_id` int(11) NOT NULL,
  `enrollment_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enrollments`
--

CREATE TABLE `tbl_enrollments` (
  `enrollment_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `enrollment_date` varchar(100) NOT NULL,
  `semester_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_examroom`
--

CREATE TABLE `tbl_examroom` (
  `exam_room_id` int(11) NOT NULL,
  `exam_room_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exams`
--

CREATE TABLE `tbl_exams` (
  `exam_id` int(11) NOT NULL,
  `exam_name` varchar(100) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `exam_date` varchar(100) NOT NULL,
  `start_time` varchar(100) NOT NULL,
  `end_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_grades`
--

CREATE TABLE `tbl_grades` (
  `grades_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `grades` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_major`
--

CREATE TABLE `tbl_major` (
  `major_id` int(11) NOT NULL,
  `major_name` varchar(100) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_major`
--

INSERT INTO `tbl_major` (`major_id`, `major_name`, `department_id`) VALUES
(1, 'Công nghệ thông tin', 1),
(2, 'Kỹ thuật xây dựng Đường bộ', 2),
(3, 'Kỹ thuật xây dựng Đường sắt', 2),
(4, 'Cơ khí giao thông công chính', 3),
(5, 'Kỹ thuật điện tử và Tin học công nghiệp', 5),
(6, 'Kinh tế vận tải du lịch', 4),
(7, 'Chính trị học', 6),
(8, 'Xây dựng dân dụng và Công nghiệp', 7),
(9, 'Quản lý xây dựng', 8),
(10, 'Công nghệ thông tin', 9),
(11, 'Giáo dục quốc phòng', 10),
(12, 'Kỹ thuật xây dựng Cầu - Đường bộ', 2),
(13, 'Kỹ thuật xây dựng Đường sắt đô thị', 2),
(14, 'Kỹ thuật xây dựng Cầu hầm', 2),
(15, 'Kỹ thuật xây dựng Đường hầm - Metro', 2),
(16, 'Kỹ thuật xây dựng Cầu - Đường sắt', 2),
(17, 'Địa kỹ thuật xây dựng Công trình giao thông', 2),
(18, 'Đầu máy toa xe', 3),
(19, 'Cơ giới hóa xây dựng cầu đường', 3),
(20, 'Kỹ thuật Máy động lực', 3),
(21, 'Tàu điện Metro', 3),
(22, 'Công nghệ chế tạo cơ khí', 3),
(23, 'Kinh tế vận tải hàng không', 4),
(24, 'Kinh tế vận tải ô tô', 4),
(25, 'Kinh tế vận tải đường sắt', 4),
(26, 'Kinh tế vận tải thủy bộ', 4),
(27, 'Vận tải thương mại quốc tế', 4),
(28, 'Trang thiết bị trong Công nghiệp và Giao thông', 5),
(29, 'Hệ thống điện Giao thông và Công nghiệp', 5),
(30, 'Kỹ thuật điều khiển và Tự động hóa GT', 5),
(31, 'Kỹ thuật tín hiệu Đường sắt', 5),
(32, 'Tự động hóa', 5),
(33, 'Triết học Chính trị', 6),
(34, 'Lịch sử Chính trị', 6),
(35, 'Chính trị quốc tế', 6),
(36, 'Chính trị so sánh', 6),
(37, 'Lý luận xã hội chính trị', 6),
(38, 'Kết cấu xây dựng', 7),
(39, 'Kỹ thuật hạ tầng đô thị', 7),
(40, 'Vật liệu và Công nghiệp xây dựng', 7),
(41, 'Kinh tế xây dựng Công trình giao thông', 8),
(42, 'Kinh tế quản lý khai thác cầu đường', 8),
(43, 'Kỹ thuật An toàn giao thông', 11),
(44, 'Kỹ thuật môi trường', 11),
(45, 'Toán ứng dụng', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semester`
--

CREATE TABLE `tbl_semester` (
  `semester_id` int(11) NOT NULL,
  `semester_name` varchar(100) NOT NULL,
  `school_year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_semester`
--

INSERT INTO `tbl_semester` (`semester_id`, `semester_name`, `school_year`) VALUES
(1, 'Học kỳ 1 - Công nghệ thông tin', '2020-2021'),
(2, 'Học kỳ 2 - Công nghệ thông tin', '2020-2021'),
(3, 'Học kỳ 3 - Công nghệ thông tin', '2021-2022'),
(4, 'Học kỳ 4 - Công nghệ thông tin', '2021-2022'),
(5, 'Học kỳ 1 - Kinh tế vận tải ô tô', '2020-2021'),
(6, 'Học kỳ 2 - Kinh tế vận tải ô tô', '2020-2021'),
(7, 'Học kỳ 3 - Kinh tế vận tải ô tô', '2021-2022'),
(8, 'Học kỳ 4 - Kinh tế vận tải ô tô', '2021-2022');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `student_id` int(11) NOT NULL,
  `student_code` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `student_avatar` varchar(100) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`student_id`, `student_code`, `first_name`, `last_name`, `date_of_birth`, `gender`, `address`, `email`, `phone`, `student_avatar`, `class_id`) VALUES
(1, '201200143', 'Thoại', 'Phạm', '2004-11-05', 'female', 'Hà Nội', 'phamthoai@gmail.com', '0987654323', 'gv1.jpg', 1),
(2, '201200144', 'Tùng', 'Sơn', '2004-07-09', 'male', 'Bắc Ninh', 'sontung@gmail.com', '0987654322', 'gv1.jpg', 1),
(3, '201200145', 'Tùng', 'Dương', '2004-06-16', 'male', 'Sơn La', 'tungduong@gmail.com', '0987865432', 'gv1.jpg', 1),
(4, '201200146', 'Đỗ', 'Long', '2002-11-03', 'male', 'Hà Nội', 'dolong@gmail.com', '0987475642', 'gv1.jpg', 1),
(5, '201200147', 'Nguyễn', 'Hương', '2002-06-15', 'female', 'Hồ Chí Minh', 'nguyenhuong@gmail.com', '0978654328', 'gv1.jpg', 1),
(6, '201200148', 'Trần', 'Nam', '2002-09-22', 'male', 'Đà Nẵng', 'trannam@gmail.com', '0934123789', 'gv1.jpg', 1),
(7, '201200149', 'Lê', 'Hà', '2002-02-28', 'female', 'Hải Phòng', 'leha@gmail.com', '0912345670', 'gv1.jpg', 1),
(8, '201200150', 'Phạm', 'Linh', '2002-08-10', 'male', 'Ninh Bình', 'phamlinh@gmail.com', '0945678901', 'gv1.jpg', 1),
(9, '201200151', 'Vũ', 'Hải', '2002-03-05', 'male', 'Quảng Ninh', 'vuhai@gmail.com', '0965432109', 'gv1.jpg', 1),
(10, '201200152', 'Ngô', 'Lan', '2002-07-18', 'female', 'Thanh Hóa', 'ngolan@gmail.com', '0923456789', 'gv1.jpg', 1),
(11, '201200153', 'Phan', 'Minh', '2002-01-12', 'male', 'Hà Giang', 'phanminh@gmail.com', '0998765432', 'gv1.jpg', 1),
(12, '201200154', 'Hoàng', 'My', '2002-05-20', 'female', 'Lào Cai', 'hoangmy@gmail.com', '0954321897', 'gv1.jpg', 1),
(13, '201200155', 'Trịnh', 'Thị', '2002-04-08', 'male', 'Bắc Ninh', 'trinhthi@gmail.com', '0987654321', 'gv1.jpg', 1),
(14, '201200156', 'Dương', 'Hữu', '2002-10-16', 'male', 'Thái Bình', 'duonghuu@gmail.com', '0976543214', 'gv1.jpg', 1),
(15, '201200157', 'Võ', 'Như', '2002-12-02', 'female', 'Nam Định', 'vonhu@gmail.com', '0967890124', 'gv1.jpg', 1),
(16, '201200158', 'Lý', 'Khánh', '2002-08-25', 'male', 'Hà Nam', 'lykhanh@gmail.com', '0932109875', 'gv1.jpg', 1),
(17, '201200159', 'Bùi', 'Quỳnh', '2002-06-30', 'male', 'Phú Thọ', 'buiquynh@gmail.com', '0943216789', 'gv1.jpg', 1),
(18, '201200160', 'Hoàng', 'Tuấn', '2002-09-10', 'male', 'Bắc Giang', 'hoangtuan@gmail.com', '0912345678', 'gv1.jpg', 1),
(19, '201200161', 'Phùng', 'Duy', '2002-02-15', 'male', 'Vĩnh Phúc', 'phungduy@gmail.com', '0987654320', 'gv1.jpg', 1),
(20, '201200162', 'Lê', 'Thu', '2002-05-22', 'female', 'Yên Bái', 'lethu@gmail.com', '0976543210', 'gv1.jpg', 1),
(21, '201200163', 'Trương', 'Hải', '2002-11-08', 'male', 'Lạng Sơn', 'truonghai@gmail.com', '0967890123', 'gv1.jpg', 1),
(22, '201200164', 'Đặng', 'Tâm', '2002-07-12', 'male', 'Cao Bằng', 'dangtam@gmail.com', '0932109876', 'gv1.jpg', 1),
(23, '201201111', 'Lữ', 'Pố', '2004-07-14', 'male', 'Ha Noi', 'lupo@gmail.com', '0372687311', 'gv1.jpg', 1),
(29, '301200143', 'f', 'g', '2024-02-26', 'male', 'Ha Noi', 'g@gmail.com', '0372687300', 'gv1.jpg', 1),
(30, '346545673', 'h', 'h', '2024-02-26', 'male', 'Ha Noi', 'hj@gmail.com', '0372687888', 'gv1.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `subject_credit` int(11) NOT NULL,
  `major_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`subject_id`, `subject_name`, `subject_credit`, `major_id`, `teacher_id`, `semester_id`) VALUES
(1, 'Lập trình web', 3, 1, 45, 1),
(2, 'Tin học đại cương', 3, 1, 46, 1),
(23, 'Cơ sở dữ liệu', 3, 1, 48, 1),
(24, 'Mạng máy tính', 2, 1, 49, 1),
(25, 'Ngôn ngữ lập trình C', 3, 1, 50, 1),
(26, 'An toàn thông tin', 2, 1, 51, 2),
(27, 'Phân tích và thiết kế hệ thống', 3, 1, 52, 2),
(28, 'Quản trị cơ sở dữ liệu', 2, 1, 53, 2),
(29, 'Hệ điều hành', 3, 1, 54, 2),
(30, 'Công nghệ web', 2, 1, 55, 2),
(31, 'Quản lý dự án', 3, 1, 56, 2),
(32, 'Thị giác máy tính', 2, 1, 57, 3),
(33, 'Học máy', 3, 1, 58, 3),
(34, 'Lập trình Python', 2, 1, 59, 3),
(35, 'Trí tuệ nhân tạo', 3, 1, 60, 3),
(37, 'Công nghệ ảo', 3, 1, 62, 4),
(38, 'Kinh doanh điện tử', 2, 1, 63, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher`
--

CREATE TABLE `tbl_teacher` (
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `teacher_date_of_birth` varchar(100) NOT NULL,
  `department_id` int(11) NOT NULL,
  `teacher_title` varchar(100) NOT NULL,
  `teacher_avatar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_teacher`
--

INSERT INTO `tbl_teacher` (`teacher_id`, `teacher_name`, `teacher_date_of_birth`, `department_id`, `teacher_title`, `teacher_avatar`) VALUES
(45, 'Đinh Công Tùng', '1985-03-15', 1, 'Giảng viên', 'gv1.jpg'),
(46, 'Nguyễn Hiếu Cường', '1988-07-22', 1, 'Giảng viên', NULL),
(47, 'Nguyễn Quốc Tuấn', '1992-05-10', 1, 'Giảng viên', NULL),
(48, 'Nguyễn Thanh Toàn', '1987-11-30', 1, 'Giảng viên', NULL),
(49, 'Hoàng Văn Thông', '1995-04-18', 1, 'Trưởng Khoa', NULL),
(50, 'Nguyễn Trần Hiếu', '1984-09-25', 1, 'Giảng viên', NULL),
(51, 'Đào Thị Lệ Thủy', '1993-12-07', 1, 'Giảng viên', NULL),
(52, 'Lại Mạnh Dũng', '1989-08-14', 1, 'Giảng viên', NULL),
(53, 'Bùi Ngọc Dũng', '1991-06-02', 1, 'Phó trưởng khoa', NULL),
(54, 'Nguyễn Đức Dư', '1986-02-28', 1, 'Giảng viên', NULL),
(55, 'Nguyễn Kim Sao', '1994-10-05', 1, 'Giảng viên', NULL),
(56, 'Lương Thái Lê', '1997-07-12', 1, 'Giảng viên', NULL),
(57, 'Nguyễn Thu Hường', '1983-03-20', 1, 'Giảng viên', NULL),
(58, 'Phạm Đình Phong', '1996-09-08', 1, 'Giảng viên', NULL),
(59, 'Nguyễn Trọng Phúc', '1982-04-15', 1, 'Giảng viên', NULL),
(60, 'Nguyễn Việt Hưng', '1998-11-22', 1, 'Giảng viên', NULL),
(61, 'Cao Thị Luyến', '1981-06-30', 1, 'Giảng viên', NULL),
(62, 'Đỗ Văn Đức', '1999-01-14', 1, 'Giảng viên', NULL),
(63, 'Phạm Xuân Tích', '1990-01-01', 1, 'Giảng viên', NULL),
(64, 'Nguyễn Thị Hồng Hoa', '1980-08-18', 1, 'Giảng viên', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_test`
--

CREATE TABLE `tbl_test` (
  `test_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `exam_room_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `test_date` varchar(100) NOT NULL,
  `test_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `email`, `password`, `student_id`) VALUES
(1, 'user1@gmail.com', '1', 1),
(2, 'user2@gmail.com', '1', 2),
(3, 'user3@gmail.com', '1', 3),
(4, 'user4@gmail.com', '1', 4),
(5, 'user5@gmail.com', '1', 5),
(6, 'user6@gmail.com', '1', 6),
(7, 'user7@gmail.com', '1', 7),
(8, 'user8@gmail.com', '1', 8),
(9, 'user9@gmail.com', '1', 9),
(10, 'user10@gmail.com', '1', 10),
(11, 'user11@gmail.com', '1', 11),
(12, 'user12@gmail.com', '1', 12),
(13, 'user13@gmail.com', '1', 13),
(14, 'user14@gmail.com', '1', 14),
(15, 'user15@gmail.com', '1', 15),
(16, 'user16@gmail.com', '1', 16),
(17, 'user17@gmail.com', '1', 17),
(18, 'user18@gmail.com', '1', 18),
(19, 'user19@gmail.com', '1', 19),
(20, 'user20@gmail.com', '1', 20),
(21, 'user21@gmail.com', '1', 21),
(22, 'user22@gmail.com', '1', 22),
(23, 'user23@gmail.com', '1', 1),
(24, 'user24@gmail.com', '1', 1),
(25, 'user25@gmail.com', '1', 1),
(26, 'user26@gmail.com', '1', 1),
(27, 'user27@gmail.com', '1', 1),
(28, 'user28@gmail.com', '1', 1),
(29, 'user29@gmail.com', '1', 1),
(30, 'user30@gmail.com', '1', 1),
(31, 'user31@gmail.com', '1', 1),
(32, 'user32@gmail.com', '1', 1),
(33, 'user33@gmail.com', '1', 1),
(34, 'user34@gmail.com', '1', 1),
(35, 'user35@gmail.com', '1', 1),
(36, 'user36@gmail.com', '1', 1),
(37, 'user37@gmail.com', '1', 1),
(38, 'user38@gmail.com', '1', 1),
(39, 'user39@gmail.com', '1', 1),
(40, 'user40@gmail.com', '1', 1),
(41, 'user41@gmail.com', '1', 1),
(42, 'user42@gmail.com', '1', 1),
(43, 'user43@gmail.com', '1', 1),
(44, 'user44@gmail.com', '1', 1),
(45, 'user45@gmail.com', '1', 1),
(46, 'user46@gmail.com', '1', 1),
(47, 'user47@gmail.com', '1', 1),
(48, 'user48@gmail.com', '1', 1),
(49, 'user49@gmail.com', '1', 1),
(50, 'user50@gmail.com', '1', 1),
(51, 'user51@gmail.com', '1', 1),
(52, 'user52@gmail.com', '1', 1),
(53, 'user53@gmail.com', '1', 1),
(54, 'user54@gmail.com', '1', 1),
(55, 'user55@gmail.com', '1', 1),
(56, 'user56@gmail.com', '1', 1),
(57, 'user57@gmail.com', '1', 1),
(58, 'user58@gmail.com', '1', 1),
(59, 'user59@gmail.com', '1', 1),
(60, 'user60@gmail.com', '1', 1),
(61, 'user61@gmail.com', '1', 1),
(62, 'user62@gmail.com', '1', 1),
(63, 'user63@gmail.com', '1', 1),
(64, 'user64@gmail.com', '1', 1),
(65, 'user65@gmail.com', '1', 1),
(66, 'user66@gmail.com', '1', 1),
(67, 'user67@gmail.com', '1', 1),
(68, 'user68@gmail.com', '1', 1),
(69, 'user69@gmail.com', '1', 1),
(70, 'user70@gmail.com', '1', 1),
(71, 'user71@gmail.com', '1', 1),
(72, 'user72@gmail.com', '1', 1),
(73, 'user73@gmail.com', '1', 1),
(74, 'user74@gmail.com', '1', 1),
(75, 'user75@gmail.com', '1', 1),
(76, 'user76@gmail.com', '1', 1),
(77, 'user77@gmail.com', '1', 1),
(78, 'user78@gmail.com', '1', 1),
(79, 'user79@gmail.com', '1', 1),
(80, 'user80@gmail.com', '1', 1),
(81, 'user81@gmail.com', '1', 1),
(82, 'user82@gmail.com', '1', 1),
(83, 'user83@gmail.com', '1', 1),
(84, 'user84@gmail.com', '1', 1),
(85, 'user85@gmail.com', '1', 1),
(86, 'user86@gmail.com', '1', 1),
(87, 'user87@gmail.com', '1', 1),
(88, 'user88@gmail.com', '1', 1),
(89, 'user89@gmail.com', '1', 1),
(90, 'user90@gmail.com', '1', 1),
(91, 'user91@gmail.com', '1', 1),
(92, 'user92@gmail.com', '1', 1),
(93, 'user93@gmail.com', '1', 1),
(94, 'user94@gmail.com', '1', 1),
(95, 'user95@gmail.com', '1', 1),
(96, 'user96@gmail.com', '1', 1),
(97, 'user97@gmail.com', '1', 1),
(98, 'user98@gmail.com', '1', 1),
(99, 'user99@gmail.com', '1', 1),
(100, 'user100@gmail.com', '1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `unique_admin_email` (`email`),
  ADD KEY `FK_admin_teacher` (`teacher_id`);

--
-- Indexes for table `tbl_class`
--
ALTER TABLE `tbl_class`
  ADD PRIMARY KEY (`class_id`),
  ADD KEY `FK_class_major` (`major_id`),
  ADD KEY `Fk_class_department` (`department_id`),
  ADD KEY `FK_class_teacher` (`homeroom_teacher`);

--
-- Indexes for table `tbl_classroom`
--
ALTER TABLE `tbl_classroom`
  ADD PRIMARY KEY (`classroom_id`),
  ADD KEY `FK_classroom_class` (`class_id`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `tbl_enrollmentdetail`
--
ALTER TABLE `tbl_enrollmentdetail`
  ADD PRIMARY KEY (`enrollmentDetail_id`),
  ADD KEY `FK_enrollDetail_enrollment` (`enrollment_id`),
  ADD KEY `FK_enrollDetail_subject` (`subject_id`);

--
-- Indexes for table `tbl_enrollments`
--
ALTER TABLE `tbl_enrollments`
  ADD PRIMARY KEY (`enrollment_id`),
  ADD KEY `FK_enrollment_student` (`student_id`),
  ADD KEY `FK_enrollment_semester` (`semester_id`);

--
-- Indexes for table `tbl_examroom`
--
ALTER TABLE `tbl_examroom`
  ADD PRIMARY KEY (`exam_room_id`);

--
-- Indexes for table `tbl_exams`
--
ALTER TABLE `tbl_exams`
  ADD PRIMARY KEY (`exam_id`),
  ADD KEY `FK_exam_semester` (`semester_id`);

--
-- Indexes for table `tbl_grades`
--
ALTER TABLE `tbl_grades`
  ADD PRIMARY KEY (`grades_id`),
  ADD KEY `FK_grades_student` (`student_id`),
  ADD KEY `FK_grades_subject` (`subject_id`),
  ADD KEY `FK_grades_semester` (`semester_id`);

--
-- Indexes for table `tbl_major`
--
ALTER TABLE `tbl_major`
  ADD PRIMARY KEY (`major_id`),
  ADD KEY `FK_major_department` (`department_id`);

--
-- Indexes for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `unique_student_code` (`student_code`),
  ADD UNIQUE KEY `unique_student_phone` (`phone`),
  ADD UNIQUE KEY `unique_student_email` (`email`),
  ADD KEY `FK_student_class` (`class_id`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`subject_id`),
  ADD UNIQUE KEY `unique_subject_name` (`subject_name`),
  ADD KEY `FK_subject_major` (`major_id`),
  ADD KEY `FK_subject_teacher` (`teacher_id`),
  ADD KEY `FK_subject_semester` (`semester_id`);

--
-- Indexes for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  ADD PRIMARY KEY (`teacher_id`),
  ADD KEY `FK_teacher_department` (`department_id`);

--
-- Indexes for table `tbl_test`
--
ALTER TABLE `tbl_test`
  ADD PRIMARY KEY (`test_id`),
  ADD KEY `FK_test_subject` (`subject_id`),
  ADD KEY `FK_test_examRoom` (`exam_room_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `unique_user_email` (`email`),
  ADD KEY `FK_user_student` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `tbl_class`
--
ALTER TABLE `tbl_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_classroom`
--
ALTER TABLE `tbl_classroom`
  MODIFY `classroom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_enrollmentdetail`
--
ALTER TABLE `tbl_enrollmentdetail`
  MODIFY `enrollmentDetail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_enrollments`
--
ALTER TABLE `tbl_enrollments`
  MODIFY `enrollment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_examroom`
--
ALTER TABLE `tbl_examroom`
  MODIFY `exam_room_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_exams`
--
ALTER TABLE `tbl_exams`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_grades`
--
ALTER TABLE `tbl_grades`
  MODIFY `grades_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_major`
--
ALTER TABLE `tbl_major`
  MODIFY `major_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  MODIFY `semester_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tbl_test`
--
ALTER TABLE `tbl_test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD CONSTRAINT `FK_admin_teacher` FOREIGN KEY (`teacher_id`) REFERENCES `tbl_teacher` (`teacher_id`);

--
-- Constraints for table `tbl_class`
--
ALTER TABLE `tbl_class`
  ADD CONSTRAINT `FK_class_major` FOREIGN KEY (`major_id`) REFERENCES `tbl_major` (`major_id`),
  ADD CONSTRAINT `FK_class_teacher` FOREIGN KEY (`homeroom_teacher`) REFERENCES `tbl_teacher` (`teacher_id`),
  ADD CONSTRAINT `Fk_class_department` FOREIGN KEY (`department_id`) REFERENCES `tbl_department` (`department_id`);

--
-- Constraints for table `tbl_classroom`
--
ALTER TABLE `tbl_classroom`
  ADD CONSTRAINT `FK_classroom_class` FOREIGN KEY (`class_id`) REFERENCES `tbl_class` (`class_id`);

--
-- Constraints for table `tbl_enrollmentdetail`
--
ALTER TABLE `tbl_enrollmentdetail`
  ADD CONSTRAINT `FK_enrollDetail_enrollment` FOREIGN KEY (`enrollment_id`) REFERENCES `tbl_enrollments` (`enrollment_id`),
  ADD CONSTRAINT `FK_enrollDetail_subject` FOREIGN KEY (`subject_id`) REFERENCES `tbl_subject` (`subject_id`);

--
-- Constraints for table `tbl_enrollments`
--
ALTER TABLE `tbl_enrollments`
  ADD CONSTRAINT `FK_enrollment_semester` FOREIGN KEY (`semester_id`) REFERENCES `tbl_semester` (`semester_id`),
  ADD CONSTRAINT `FK_enrollment_student` FOREIGN KEY (`student_id`) REFERENCES `tbl_student` (`student_id`);

--
-- Constraints for table `tbl_exams`
--
ALTER TABLE `tbl_exams`
  ADD CONSTRAINT `FK_exam_semester` FOREIGN KEY (`semester_id`) REFERENCES `tbl_semester` (`semester_id`);

--
-- Constraints for table `tbl_grades`
--
ALTER TABLE `tbl_grades`
  ADD CONSTRAINT `FK_grades_semester` FOREIGN KEY (`semester_id`) REFERENCES `tbl_semester` (`semester_id`),
  ADD CONSTRAINT `FK_grades_student` FOREIGN KEY (`student_id`) REFERENCES `tbl_student` (`student_id`),
  ADD CONSTRAINT `FK_grades_subject` FOREIGN KEY (`subject_id`) REFERENCES `tbl_subject` (`subject_id`);

--
-- Constraints for table `tbl_major`
--
ALTER TABLE `tbl_major`
  ADD CONSTRAINT `FK_major_department` FOREIGN KEY (`department_id`) REFERENCES `tbl_department` (`department_id`);

--
-- Constraints for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD CONSTRAINT `FK_student_class` FOREIGN KEY (`class_id`) REFERENCES `tbl_class` (`class_id`);

--
-- Constraints for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD CONSTRAINT `FK_subject_major` FOREIGN KEY (`major_id`) REFERENCES `tbl_major` (`major_id`),
  ADD CONSTRAINT `FK_subject_semester` FOREIGN KEY (`semester_id`) REFERENCES `tbl_semester` (`semester_id`),
  ADD CONSTRAINT `FK_subject_teacher` FOREIGN KEY (`teacher_id`) REFERENCES `tbl_teacher` (`teacher_id`);

--
-- Constraints for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  ADD CONSTRAINT `FK_teacher_department` FOREIGN KEY (`department_id`) REFERENCES `tbl_department` (`department_id`);

--
-- Constraints for table `tbl_test`
--
ALTER TABLE `tbl_test`
  ADD CONSTRAINT `FK_test_examRoom` FOREIGN KEY (`exam_room_id`) REFERENCES `tbl_examroom` (`exam_room_id`),
  ADD CONSTRAINT `FK_test_subject` FOREIGN KEY (`subject_id`) REFERENCES `tbl_subject` (`subject_id`);

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `FK_user_student` FOREIGN KEY (`student_id`) REFERENCES `tbl_student` (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
