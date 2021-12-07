-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 08, 2021 at 02:19 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gmcthail_pa`
--

-- --------------------------------------------------------

--
-- Table structure for table `group_department`
--

CREATE TABLE `group_department` (
  `id` int(11) NOT NULL,
  `department_nm` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `department_bref` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `department_table` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `department_char` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `group_department`
--

INSERT INTO `group_department` (`id`, `department_nm`, `department_bref`, `department_table`, `department_char`) VALUES
(1, 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษา', 'สพม', 'affsub44AfBAA', 'affsub34AfBA'),
(2, 'สำนักงานเขตพื้นที่การศึกษาประถมศึกษา ', 'สพป', 'affsub44AfBAB', 'affsub34AfBA'),
(3, 'สำนักบริหารงานการศึกษาพิเศษ ', 'สศศ', 'affsub34AfBB', NULL),
(4, 'สำนักงานคณะกรรมการส่งเสริมการศึกษาเอกชน ', 'สช', 'affsub34AfC', NULL),
(5, 'สำนักงานคณะกรรมการการอุดมศึกษา / สังกัดมหาวิทยาลัย', 'สกอ', 'affsub24AfF', NULL),
(6, 'องค์การปกครองส่วนท้องถิ่น ', 'อปธ', 'affsub44AfG', 'affsub34AfG'),
(7, 'สำนักงานคณะกรรมการการอาชีวศึกษา', 'สอศ', 'affsub34AfE', NULL),
(8, 'สำนักงานส่งเสริมการศึกษานอกระบบและการศึกษาตามอัธยาศัย', 'กศน', NULL, NULL),
(9, 'สำนักงานศึกษาธิการจังหวัด', 'ศธจ', NULL, NULL),
(10, 'สังกัดสำนักงานคณะกรรมการการศึกษาขั้นพื้นฐาน', 'สพฐ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `group_learn`
--

CREATE TABLE `group_learn` (
  `id` int(11) NOT NULL,
  `group` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_learn`
--

INSERT INTO `group_learn` (`id`, `group`) VALUES
(1, 'ภาษาไทย'),
(2, 'คณิตศาสตร์'),
(3, 'วิทยาศาสตร์'),
(4, 'สังคมศึกษา ศาสนา และวัฒนธรรม'),
(5, 'สุขศึกษาและพลศึกษา'),
(6, 'ศิลปะ'),
(7, 'การงานอาชีพและเทคโนโลยี'),
(8, 'ภาษาต่างประเทศ'),
(9, 'กิจกรรมพัฒนาผู้เรียน');

-- --------------------------------------------------------

--
-- Table structure for table `group_member`
--

CREATE TABLE `group_member` (
  `id` int(11) NOT NULL,
  `group` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_member`
--

INSERT INTO `group_member` (`id`, `group`) VALUES
(1, 'นักเรียน'),
(2, 'ครู'),
(3, 'ศึกษานิเทศน์'),
(4, 'ผู้บริหารสถานศึกษา'),
(5, 'ผู้บริหารการศึกษา'),
(6, 'บุคลากรอื่น ๆ');

-- --------------------------------------------------------

--
-- Table structure for table `pa`
--

CREATE TABLE `pa` (
  `id` int(11) NOT NULL,
  `PA_year` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `1_1` int(11) DEFAULT NULL,
  `1_2` int(11) DEFAULT NULL,
  `1_3` int(11) DEFAULT NULL,
  `1_4` int(11) DEFAULT NULL,
  `2_1` int(11) DEFAULT NULL,
  `2_2` int(11) DEFAULT NULL,
  `3` int(11) DEFAULT NULL,
  `4` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pa`
--

INSERT INTO `pa` (`id`, `PA_year`, `user_id`, `1_1`, `1_2`, `1_3`, `1_4`, `2_1`, `2_2`, `3`, `4`, `created_at`, `updated_at`) VALUES
(16, '2564', '5816582', 0, NULL, 0, 0, 0, 0, 0, 0, '2021-09-21 21:56:43', '2021-09-21 21:56:43'),
(17, '2564', '6', 0, NULL, 0, 0, 0, 0, 0, 0, '2021-09-23 07:18:38', '2021-09-23 07:18:38');

-- --------------------------------------------------------

--
-- Table structure for table `pa_develop_hour`
--

CREATE TABLE `pa_develop_hour` (
  `id` int(11) NOT NULL,
  `PA_year` int(11) NOT NULL DEFAULT 0,
  `user_id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `develops` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dev_hour` float NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pa_develop_hour`
--

INSERT INTO `pa_develop_hour` (`id`, `PA_year`, `user_id`, `develops`, `dev_hour`, `created_at`, `updated_at`) VALUES
(22, 2564, '65374', 'งานพัฒนาคุณภาพการจัดการศึกษาของสถานศึกษา', 1, '2021-10-21 17:08:42', '2021-10-21 17:08:42'),
(24, 2564, '5832540', 'งานพัฒนาคุณภาพการจัดการศึกษาของสถานศึกษา', 2, '2021-11-08 08:37:33', '2021-11-08 08:37:33');

-- --------------------------------------------------------

--
-- Table structure for table `pa_evaluation`
--

CREATE TABLE `pa_evaluation` (
  `id` int(11) NOT NULL,
  `eva_id` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `root` int(11) DEFAULT NULL,
  `no` int(11) DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pa_evaluation`
--

INSERT INTO `pa_evaluation` (`id`, `eva_id`, `root`, `no`, `detail`) VALUES
(1, 'WE7845415215', 0, 1, 'การจัดการตนเอง (Self managment)'),
(2, 'WE7845415215', 0, 2, 'การสื่อสาร (Communication)'),
(3, 'WE7845415215', 0, 3, 'การรวมพลังทำงานเป็นทีม ( Teamwork and Collaboration)'),
(4, 'WE7845415215', 0, 4, 'การคิดขั้นสูง (Higher order thinking)'),
(5, 'WE7845415215', 0, 5, 'การเป็นพลเมืองที่เข้มแข็ง (Active citizen)'),
(6, 'WE7845415215', 1, 1, 'การดูแลตนเองให้มีสุขภาพจิตที่ดี (สดชื่น ร่าเริง แจ่มใส ไม่เครียด ไม่ วิตกกังวล ไม่ซึมเศร้า ไม่ติดยาเสพติด/แอลกอฮอล์)'),
(7, 'WE7845415215', 1, 2, 'การดูแลตนเองให้มีสุขภาพร่าง กายแข็งแรง ไม่เจ็บป่วย มีกำลัง คล่องแคล่ว กระฉับกระเฉง'),
(8, 'WE7845415215', 1, 3, ' ความสามารถในการจัดการปัญ- หาในสถานการณ์ที่ไม่คาดคิดมาก่อน หรือ เหตุการณ์ที่ส่งผลกระทบต่อสมดุลทางอารมณ์และจิตใจ'),
(9, 'WE7845415215', 1, 4, 'ความสามารถในการฟื้นฟูพลัง กาย'),
(10, 'WE7845415215', 1, 5, ' ความสามารถในการอยู่ร่วมกับ บุคคลอื่นได้อย่างมีความสุข'),
(11, 'WE7845415215', 1, 6, 'มีการตั้งเป้าหมายในสิ่งที่อยากจะ เป็น อยากจะได้ และวางแผนเพื่อให้บรรรลุสิ่งที่ต้องการ'),
(12, 'WE7845415215', 2, 1, 'ความสามารถในการพูด การ- เขียน และภาษาที่ไม่ใช้คำพูด โดยผ่าน สัญลักษณ์/สัญญาณ/ท่าทาง'),
(13, 'WE7845415215', 2, 2, 'ความสามารถในการฟัง การอ่าน และทักษะความเข้าใจที่เป็นภาษาไม่ใช้ คำพูดโดยผ่านสัญลักษณ์/สัญญาณ /ท่าทาง'),
(14, 'WE7845415215', 2, 3, 'ความสามารถในการเลือกวิธีการ ส่งข่าวสารได้เหมาะสมและรวดเร็ว'),
(15, 'WE7845415215', 2, 4, 'ความสามารถในการส่งข่าวสาร ด้วยความรับผิดชอบต่อสังคม'),
(16, 'WE7845415215', 3, 1, 'ความสามารถในการเป็นผู้นำและ ผู้ตามรวมทั้งเป็นสมาชิกที่ดีของกลุ่ม'),
(17, 'WE7845415215', 3, 2, 'มีกระบวนการทำงานแบบร่วมมือ ร่วมใจในการทำงานเป็นกลุุ่ม'),
(18, 'WE7845415215', 3, 3, 'มีความสัมพันธ์ที่ดีกับบุคคลใน การทำงานเป็นกลุ่ม'),
(19, 'WE7845415215', 3, 4, ' ความสามารถในการจัดการปัญหาเมื่อเกิดความขัดแย้งภายในกลุ่ม'),
(20, 'WE7845415215', 3, 5, 'มีความรับผิดชอบในการทำงาน ร่วมกันเป็นกลุ่ม'),
(21, 'WE7845415215', 4, 1, 'ความสามารถในการคิดแยกสิ่งต่าง ๆ เป็นส่วนย่อย'),
(22, 'WE7845415215', 4, 2, 'ความสามารถในการคิดรวมสิ่งต่าง ๆ ตั้งแต่สองชนิดขึ้นไป เพื่อให้ ได้สิ่งใหม่ที่แตกต่างไปจากสิ่งเดิม'),
(23, 'WE7845415215', 4, 3, 'ความสามารถในการคิดที่ผ่านกระบวนการ ไตร่ตรองอย่างรอบคอบ มีเหตุผล โดยอาศัยความรู้ ข้อมูล หลักฐาน เพื่อนำไปสู่การสรุปและตัด'),
(24, 'WE7845415215', 4, 4, ' ความสามารถในการคิดอย่างเป็นขั้นตอน โดยมองภาพรวมเป็น ระบบ มีส่วนประกอบ / รายละเอียด ย่อยออกมาและเชื่อมโยงกับระบบ- ต่าง ๆ'),
(25, 'WE7845415215', 4, 5, 'ความสามารถในการคิดเพื่อสร้าง หรือพัฒนาสิ่งใหม่ที่แปลกแตกต่างไป จากเดิม'),
(26, 'WE7845415215', 4, 6, 'ความสามารถในการคิดหาเหตุผล'),
(27, 'WE7845415215', 4, 7, 'ความสามารถในการคิด วิเคราะห์ เพื่อตัดสินคุณค่าของสิ่งใดสิ่งหนึ่งโดยเลือกใช้เกณฑ์ที่เหมาะสม / เปรียบ เทียบกับหลักฐานอื่น'),
(28, 'WE7845415215', 5, 1, ' การรู้จักบทบาทและหน้าที่ของตน เอง ที่มีต่อตนเอง/ครอบครัว/โรงเรียน/ชุมชนและสังคมรอบข้าง'),
(29, 'WE7845415215', 5, 2, 'การปฏิบัติตนโดยเคารพสิทธิตน เองและยอมรับความแตกต่างของ บุคคลอื่นโดยไม่ไปละเมิดสิทธิเสรีภาพ'),
(30, 'WE7845415215', 5, 3, 'ความสามารถในการอยู่ร่วมกับ บุคคลอื่นที่มีความแตกต่างด้านเชื้อ ชาติด ภาษา ศาสนาและวัฒนธรรม'),
(31, 'WE7845415215', 5, 4, 'การมีส่วนรวมในการเรียนรู้ร่วม กับบุคคลอื่นในโครงการหรือกิจกรรม ใหม่ ๆ ในเชิงสร้างสรรค์'),
(32, 'WE7845415215', 5, 5, 'การมีส่วนร่วมในการดูแล รักษา/ ลดการใช้/ซ่อมแซม/ใช้ซ้ำ/นำกลับมา ใช้ใหม่ทรัพยากรธรรมชาติและสิ่งแวด ล้อม เพื่อให้คุ้มค่าและได้ประโยชน์สูงสุด');

-- --------------------------------------------------------

--
-- Table structure for table `pa_evaluation_agree`
--

CREATE TABLE `pa_evaluation_agree` (
  `id` int(11) NOT NULL,
  `root` int(11) NOT NULL DEFAULT 0,
  `sub` int(11) NOT NULL DEFAULT 0,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `eva_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PA_year` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teacher` float DEFAULT NULL,
  `student` float DEFAULT NULL,
  `agree` float DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pa_evaluation_agree`
--

INSERT INTO `pa_evaluation_agree` (`id`, `root`, `sub`, `detail`, `eva_id`, `PA_year`, `user_id`, `teacher`, `student`, `agree`, `created_at`, `updated_at`) VALUES
(26, 0, 1, 'การจัดการตนเอง (Self managment)', 'WE7845415215', '2564', '65374', 3.17, 0, 2.5, NULL, '2021-10-21 10:25:21'),
(27, 0, 2, 'การสื่อสาร (Communication)', 'WE7845415215', '2564', '65374', 2.75, 0, 3, NULL, '2021-10-21 10:25:25'),
(28, 0, 3, 'การรวมพลังทำงานเป็นทีม ( Teamwork and Collaboration)', 'WE7845415215', '2564', '65374', 3, 0, 1, NULL, '2021-10-21 10:25:28'),
(29, 0, 4, 'การคิดขั้นสูง (Higher order thinking)', 'WE7845415215', '2564', '65374', 2.71, 0, 2, NULL, '2021-10-21 10:25:32'),
(30, 0, 5, 'การเป็นพลเมืองที่เข้มแข็ง (Active citizen)', 'WE7845415215', '2564', '65374', 2, 0, 2.5, NULL, '2021-10-21 10:25:37'),
(31, 0, 1, 'การจัดการตนเอง (Self managment)', 'WE7845415215', '2564', '5832540', 1, 0, 2, NULL, '2021-10-24 19:50:29'),
(32, 0, 2, 'การสื่อสาร (Communication)', 'WE7845415215', '2564', '5832540', 2, 0, 0, NULL, NULL),
(33, 0, 3, 'การรวมพลังทำงานเป็นทีม ( Teamwork and Collaboration)', 'WE7845415215', '2564', '5832540', 3, 0, 0, NULL, NULL),
(34, 0, 4, 'การคิดขั้นสูง (Higher order thinking)', 'WE7845415215', '2564', '5832540', 4, 0, 0, NULL, NULL),
(35, 0, 5, 'การเป็นพลเมืองที่เข้มแข็ง (Active citizen)', 'WE7845415215', '2564', '5832540', 5, 0, 0, NULL, NULL),
(36, 0, 1, 'การจัดการตนเอง (Self managment)', 'WE7845415215', '2564', '5', 1, 0, 0, NULL, NULL),
(37, 0, 2, 'การสื่อสาร (Communication)', 'WE7845415215', '2564', '5', 2, 0, 0, NULL, NULL),
(38, 0, 3, 'การรวมพลังทำงานเป็นทีม ( Teamwork and Collaboration)', 'WE7845415215', '2564', '5', 3, 0, 0, NULL, NULL),
(39, 0, 4, 'การคิดขั้นสูง (Higher order thinking)', 'WE7845415215', '2564', '5', 3.43, 0, 0, NULL, NULL),
(40, 0, 5, 'การเป็นพลเมืองที่เข้มแข็ง (Active citizen)', 'WE7845415215', '2564', '5', 5, 0, 0, NULL, NULL),
(41, 0, 1, 'การจัดการตนเอง (Self managment)', 'WE7845415215', '2564', '6', 3.17, 0, 0, NULL, NULL),
(42, 0, 2, 'การสื่อสาร (Communication)', 'WE7845415215', '2564', '6', 3, 0, 0, NULL, NULL),
(43, 0, 3, 'การรวมพลังทำงานเป็นทีม ( Teamwork and Collaboration)', 'WE7845415215', '2564', '6', 3, 0, 0, NULL, NULL),
(44, 0, 4, 'การคิดขั้นสูง (Higher order thinking)', 'WE7845415215', '2564', '6', 2.71, 0, 0, NULL, NULL),
(45, 0, 5, 'การเป็นพลเมืองที่เข้มแข็ง (Active citizen)', 'WE7845415215', '2564', '6', 5, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pa_evaluation_answer`
--

CREATE TABLE `pa_evaluation_answer` (
  `id` int(11) NOT NULL,
  `user_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PA_year` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eva_id` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `root` int(11) DEFAULT NULL,
  `sub` int(11) DEFAULT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pa_evaluation_answer`
--

INSERT INTO `pa_evaluation_answer` (`id`, `user_id`, `PA_year`, `eva_id`, `root`, `sub`, `answer`, `type`, `created_at`, `updated_at`) VALUES
(289, '65374', '2564', 'WE7845415215', 1, 1, '1', 'owner', '2021-10-21 17:24:19', '2021-10-21 17:24:19'),
(290, '65374', '2564', 'WE7845415215', 1, 2, '2', 'owner', '2021-10-21 17:24:19', '2021-10-21 17:24:19'),
(291, '65374', '2564', 'WE7845415215', 1, 3, '3', 'owner', '2021-10-21 17:24:19', '2021-10-21 17:24:19'),
(292, '65374', '2564', 'WE7845415215', 1, 4, '4', 'owner', '2021-10-21 17:24:20', '2021-10-21 17:24:20'),
(293, '65374', '2564', 'WE7845415215', 1, 5, '5', 'owner', '2021-10-21 17:24:20', '2021-10-21 17:24:20'),
(294, '65374', '2564', 'WE7845415215', 1, 6, '4', 'owner', '2021-10-21 17:24:20', '2021-10-21 17:24:20'),
(295, '65374', '2564', 'WE7845415215', 2, 1, '2', 'owner', '2021-10-21 17:24:20', '2021-10-21 17:24:20'),
(296, '65374', '2564', 'WE7845415215', 2, 2, '3', 'owner', '2021-10-21 17:24:20', '2021-10-21 17:24:20'),
(297, '65374', '2564', 'WE7845415215', 2, 3, '3', 'owner', '2021-10-21 17:24:20', '2021-10-21 17:24:20'),
(298, '65374', '2564', 'WE7845415215', 2, 4, '3', 'owner', '2021-10-21 17:24:20', '2021-10-21 17:24:20'),
(299, '65374', '2564', 'WE7845415215', 3, 1, '2', 'owner', '2021-10-21 17:24:20', '2021-10-21 17:24:20'),
(300, '65374', '2564', 'WE7845415215', 3, 2, '3', 'owner', '2021-10-21 17:24:20', '2021-10-21 17:24:20'),
(301, '65374', '2564', 'WE7845415215', 3, 3, '3', 'owner', '2021-10-21 17:24:21', '2021-10-21 17:24:21'),
(302, '65374', '2564', 'WE7845415215', 3, 4, '3', 'owner', '2021-10-21 17:24:21', '2021-10-21 17:24:21'),
(303, '65374', '2564', 'WE7845415215', 3, 5, '4', 'owner', '2021-10-21 17:24:21', '2021-10-21 17:24:21'),
(304, '65374', '2564', 'WE7845415215', 4, 1, '2', 'owner', '2021-10-21 17:24:21', '2021-10-21 17:24:21'),
(305, '65374', '2564', 'WE7845415215', 4, 2, '3', 'owner', '2021-10-21 17:24:21', '2021-10-21 17:24:21'),
(306, '65374', '2564', 'WE7845415215', 4, 3, '2', 'owner', '2021-10-21 17:24:21', '2021-10-21 17:24:21'),
(307, '65374', '2564', 'WE7845415215', 4, 4, '3', 'owner', '2021-10-21 17:24:21', '2021-10-21 17:24:21'),
(308, '65374', '2564', 'WE7845415215', 4, 5, '4', 'owner', '2021-10-21 17:24:21', '2021-10-21 17:24:21'),
(309, '65374', '2564', 'WE7845415215', 4, 6, '3', 'owner', '2021-10-21 17:24:22', '2021-10-21 17:24:22'),
(310, '65374', '2564', 'WE7845415215', 4, 7, '2', 'owner', '2021-10-21 17:24:22', '2021-10-21 17:24:22'),
(311, '65374', '2564', 'WE7845415215', 5, 1, '2', 'owner', '2021-10-21 17:24:22', '2021-10-21 17:24:22'),
(312, '65374', '2564', 'WE7845415215', 5, 2, '2', 'owner', '2021-10-21 17:24:22', '2021-10-21 17:24:22'),
(313, '65374', '2564', 'WE7845415215', 5, 3, '2', 'owner', '2021-10-21 17:24:22', '2021-10-21 17:24:22'),
(314, '65374', '2564', 'WE7845415215', 5, 4, '2', 'owner', '2021-10-21 17:24:22', '2021-10-21 17:24:22'),
(315, '65374', '2564', 'WE7845415215', 5, 5, '2', 'owner', '2021-10-21 17:24:22', '2021-10-21 17:24:22'),
(316, '5832540', '2564', 'WE7845415215', 1, 1, '1', 'owner', '2021-10-25 02:38:52', '2021-10-25 02:38:52'),
(317, '5832540', '2564', 'WE7845415215', 1, 2, '1', 'owner', '2021-10-25 02:38:53', '2021-10-25 02:38:53'),
(318, '5832540', '2564', 'WE7845415215', 1, 3, '1', 'owner', '2021-10-25 02:38:53', '2021-10-25 02:38:53'),
(319, '5832540', '2564', 'WE7845415215', 1, 4, '1', 'owner', '2021-10-25 02:38:53', '2021-10-25 02:38:53'),
(320, '5832540', '2564', 'WE7845415215', 1, 5, '1', 'owner', '2021-10-25 02:38:53', '2021-10-25 02:38:53'),
(321, '5832540', '2564', 'WE7845415215', 1, 6, '1', 'owner', '2021-10-25 02:38:53', '2021-10-25 02:38:53'),
(322, '5832540', '2564', 'WE7845415215', 2, 1, '2', 'owner', '2021-10-25 02:38:54', '2021-10-25 02:38:54'),
(323, '5832540', '2564', 'WE7845415215', 2, 2, '2', 'owner', '2021-10-25 02:38:54', '2021-10-25 02:38:54'),
(324, '5832540', '2564', 'WE7845415215', 2, 3, '2', 'owner', '2021-10-25 02:38:55', '2021-10-25 02:38:55'),
(325, '5832540', '2564', 'WE7845415215', 2, 4, '2', 'owner', '2021-10-25 02:38:55', '2021-10-25 02:38:55'),
(326, '5832540', '2564', 'WE7845415215', 3, 1, '3', 'owner', '2021-10-25 02:38:55', '2021-10-25 02:38:55'),
(327, '5832540', '2564', 'WE7845415215', 3, 2, '3', 'owner', '2021-10-25 02:38:55', '2021-10-25 02:38:55'),
(328, '5832540', '2564', 'WE7845415215', 3, 3, '3', 'owner', '2021-10-25 02:38:55', '2021-10-25 02:38:55'),
(329, '5832540', '2564', 'WE7845415215', 3, 4, '3', 'owner', '2021-10-25 02:38:55', '2021-10-25 02:38:55'),
(330, '5832540', '2564', 'WE7845415215', 3, 5, '3', 'owner', '2021-10-25 02:38:55', '2021-10-25 02:38:55'),
(331, '5832540', '2564', 'WE7845415215', 4, 1, '4', 'owner', '2021-10-25 02:38:55', '2021-10-25 02:38:55'),
(332, '5832540', '2564', 'WE7845415215', 4, 2, '4', 'owner', '2021-10-25 02:38:56', '2021-10-25 02:38:56'),
(333, '5832540', '2564', 'WE7845415215', 4, 3, '4', 'owner', '2021-10-25 02:38:56', '2021-10-25 02:38:56'),
(334, '5832540', '2564', 'WE7845415215', 4, 4, '4', 'owner', '2021-10-25 02:38:56', '2021-10-25 02:38:56'),
(335, '5832540', '2564', 'WE7845415215', 4, 5, '4', 'owner', '2021-10-25 02:38:56', '2021-10-25 02:38:56'),
(336, '5832540', '2564', 'WE7845415215', 4, 6, '4', 'owner', '2021-10-25 02:38:56', '2021-10-25 02:38:56'),
(337, '5832540', '2564', 'WE7845415215', 4, 7, '4', 'owner', '2021-10-25 02:38:56', '2021-10-25 02:38:56'),
(338, '5832540', '2564', 'WE7845415215', 5, 1, '5', 'owner', '2021-10-25 02:38:56', '2021-10-25 02:38:56'),
(339, '5832540', '2564', 'WE7845415215', 5, 2, '5', 'owner', '2021-10-25 02:38:56', '2021-10-25 02:38:56'),
(340, '5832540', '2564', 'WE7845415215', 5, 3, '5', 'owner', '2021-10-25 02:38:56', '2021-10-25 02:38:56'),
(341, '5832540', '2564', 'WE7845415215', 5, 4, '5', 'owner', '2021-10-25 02:38:57', '2021-10-25 02:38:57'),
(342, '5832540', '2564', 'WE7845415215', 5, 5, '5', 'owner', '2021-10-25 02:38:57', '2021-10-25 02:38:57'),
(343, '5', '2564', 'WE7845415215', 1, 1, '1', 'owner', '2021-11-08 03:49:48', '2021-11-08 03:49:48'),
(344, '5', '2564', 'WE7845415215', 1, 2, '1', 'owner', '2021-11-08 03:49:48', '2021-11-08 03:49:48'),
(345, '5', '2564', 'WE7845415215', 1, 3, '1', 'owner', '2021-11-08 03:49:48', '2021-11-08 03:49:48'),
(346, '5', '2564', 'WE7845415215', 1, 4, '1', 'owner', '2021-11-08 03:49:48', '2021-11-08 03:49:48'),
(347, '5', '2564', 'WE7845415215', 1, 5, '1', 'owner', '2021-11-08 03:49:48', '2021-11-08 03:49:48'),
(348, '5', '2564', 'WE7845415215', 1, 6, '1', 'owner', '2021-11-08 03:49:48', '2021-11-08 03:49:48'),
(349, '5', '2564', 'WE7845415215', 2, 1, '2', 'owner', '2021-11-08 03:49:48', '2021-11-08 03:49:48'),
(350, '5', '2564', 'WE7845415215', 2, 2, '2', 'owner', '2021-11-08 03:49:48', '2021-11-08 03:49:48'),
(351, '5', '2564', 'WE7845415215', 2, 3, '2', 'owner', '2021-11-08 03:49:48', '2021-11-08 03:49:48'),
(352, '5', '2564', 'WE7845415215', 2, 4, '2', 'owner', '2021-11-08 03:49:48', '2021-11-08 03:49:48'),
(353, '5', '2564', 'WE7845415215', 3, 1, '3', 'owner', '2021-11-08 03:49:48', '2021-11-08 03:49:48'),
(354, '5', '2564', 'WE7845415215', 3, 2, '3', 'owner', '2021-11-08 03:49:48', '2021-11-08 03:49:48'),
(355, '5', '2564', 'WE7845415215', 3, 3, '3', 'owner', '2021-11-08 03:49:48', '2021-11-08 03:49:48'),
(356, '5', '2564', 'WE7845415215', 3, 4, '3', 'owner', '2021-11-08 03:49:48', '2021-11-08 03:49:48'),
(357, '5', '2564', 'WE7845415215', 3, 5, '3', 'owner', '2021-11-08 03:49:48', '2021-11-08 03:49:48'),
(358, '5', '2564', 'WE7845415215', 4, 1, '2', 'owner', '2021-11-08 03:49:48', '2021-11-08 03:49:48'),
(359, '5', '2564', 'WE7845415215', 4, 2, '3', 'owner', '2021-11-08 03:49:48', '2021-11-08 03:49:48'),
(360, '5', '2564', 'WE7845415215', 4, 3, '4', 'owner', '2021-11-08 03:49:48', '2021-11-08 03:49:48'),
(361, '5', '2564', 'WE7845415215', 4, 4, '5', 'owner', '2021-11-08 03:49:48', '2021-11-08 03:49:48'),
(362, '5', '2564', 'WE7845415215', 4, 5, '4', 'owner', '2021-11-08 03:49:48', '2021-11-08 03:49:48'),
(363, '5', '2564', 'WE7845415215', 4, 6, '3', 'owner', '2021-11-08 03:49:48', '2021-11-08 03:49:48'),
(364, '5', '2564', 'WE7845415215', 4, 7, '3', 'owner', '2021-11-08 03:49:48', '2021-11-08 03:49:48'),
(365, '5', '2564', 'WE7845415215', 5, 1, '5', 'owner', '2021-11-08 03:49:48', '2021-11-08 03:49:48'),
(366, '5', '2564', 'WE7845415215', 5, 2, '5', 'owner', '2021-11-08 03:49:48', '2021-11-08 03:49:48'),
(367, '5', '2564', 'WE7845415215', 5, 3, '5', 'owner', '2021-11-08 03:49:48', '2021-11-08 03:49:48'),
(368, '5', '2564', 'WE7845415215', 5, 4, '5', 'owner', '2021-11-08 03:49:48', '2021-11-08 03:49:48'),
(369, '5', '2564', 'WE7845415215', 5, 5, '5', 'owner', '2021-11-08 03:49:48', '2021-11-08 03:49:48'),
(370, '6', '2564', 'WE7845415215', 1, 1, '1', 'owner', '2021-11-27 12:35:28', '2021-11-27 12:35:28'),
(371, '6', '2564', 'WE7845415215', 1, 2, '2', 'owner', '2021-11-27 12:35:28', '2021-11-27 12:35:28'),
(372, '6', '2564', 'WE7845415215', 1, 3, '3', 'owner', '2021-11-27 12:35:28', '2021-11-27 12:35:28'),
(373, '6', '2564', 'WE7845415215', 1, 4, '4', 'owner', '2021-11-27 12:35:28', '2021-11-27 12:35:28'),
(374, '6', '2564', 'WE7845415215', 1, 5, '5', 'owner', '2021-11-27 12:35:28', '2021-11-27 12:35:28'),
(375, '6', '2564', 'WE7845415215', 1, 6, '4', 'owner', '2021-11-27 12:35:28', '2021-11-27 12:35:28'),
(376, '6', '2564', 'WE7845415215', 2, 1, '3', 'owner', '2021-11-27 12:35:28', '2021-11-27 12:35:28'),
(377, '6', '2564', 'WE7845415215', 2, 2, '3', 'owner', '2021-11-27 12:35:28', '2021-11-27 12:35:28'),
(378, '6', '2564', 'WE7845415215', 2, 3, '3', 'owner', '2021-11-27 12:35:28', '2021-11-27 12:35:28'),
(379, '6', '2564', 'WE7845415215', 2, 4, '3', 'owner', '2021-11-27 12:35:28', '2021-11-27 12:35:28'),
(380, '6', '2564', 'WE7845415215', 3, 1, '5', 'owner', '2021-11-27 12:35:28', '2021-11-27 12:35:28'),
(381, '6', '2564', 'WE7845415215', 3, 2, '4', 'owner', '2021-11-27 12:35:28', '2021-11-27 12:35:28'),
(382, '6', '2564', 'WE7845415215', 3, 3, '3', 'owner', '2021-11-27 12:35:28', '2021-11-27 12:35:28'),
(383, '6', '2564', 'WE7845415215', 3, 4, '2', 'owner', '2021-11-27 12:35:28', '2021-11-27 12:35:28'),
(384, '6', '2564', 'WE7845415215', 3, 5, '1', 'owner', '2021-11-27 12:35:28', '2021-11-27 12:35:28'),
(385, '6', '2564', 'WE7845415215', 4, 1, '1', 'owner', '2021-11-27 12:35:28', '2021-11-27 12:35:28'),
(386, '6', '2564', 'WE7845415215', 4, 2, '2', 'owner', '2021-11-27 12:35:28', '2021-11-27 12:35:28'),
(387, '6', '2564', 'WE7845415215', 4, 3, '3', 'owner', '2021-11-27 12:35:28', '2021-11-27 12:35:28'),
(388, '6', '2564', 'WE7845415215', 4, 4, '4', 'owner', '2021-11-27 12:35:28', '2021-11-27 12:35:28'),
(389, '6', '2564', 'WE7845415215', 4, 5, '3', 'owner', '2021-11-27 12:35:28', '2021-11-27 12:35:28'),
(390, '6', '2564', 'WE7845415215', 4, 6, '3', 'owner', '2021-11-27 12:35:28', '2021-11-27 12:35:28'),
(391, '6', '2564', 'WE7845415215', 4, 7, '3', 'owner', '2021-11-27 12:35:28', '2021-11-27 12:35:28'),
(392, '6', '2564', 'WE7845415215', 5, 1, '5', 'owner', '2021-11-27 12:35:28', '2021-11-27 12:35:28'),
(393, '6', '2564', 'WE7845415215', 5, 2, '5', 'owner', '2021-11-27 12:35:28', '2021-11-27 12:35:28'),
(394, '6', '2564', 'WE7845415215', 5, 3, '5', 'owner', '2021-11-27 12:35:28', '2021-11-27 12:35:28'),
(395, '6', '2564', 'WE7845415215', 5, 4, '5', 'owner', '2021-11-27 12:35:28', '2021-11-27 12:35:28'),
(396, '6', '2564', 'WE7845415215', 5, 5, '5', 'owner', '2021-11-27 12:35:28', '2021-11-27 12:35:28');

-- --------------------------------------------------------

--
-- Table structure for table `pa_innovation`
--

CREATE TABLE `pa_innovation` (
  `id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `PA_year` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `innovation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pa_innovation`
--

INSERT INTO `pa_innovation` (`id`, `no`, `PA_year`, `user_id`, `title`, `innovation`, `created_at`, `updated_at`) VALUES
(36, 1, '2564', '65374', 'youtube channal English school online', 'youtube channal English school online', '2021-10-21 17:14:40', '2021-10-21 17:14:40'),
(37, 2, '2564', '65374', 'youtube channal English school online', 'youtube channal English school online', '2021-10-21 17:14:45', '2021-10-21 17:14:45'),
(39, 0, '2564', '5832540', 'งานตอบสนองนโยบายและจุดเน้น', 'งานตอบสนองนโยบายและจุดเน้น', '2021-11-08 08:38:33', '2021-11-08 08:38:33'),
(40, 0, '2564', '5832540', 'งานตอบสนองนโยบายและจุดเน้น', 'งานตอบสนองนโยบายและจุดเน้น', '2021-11-08 08:38:38', '2021-11-08 08:38:38');

-- --------------------------------------------------------

--
-- Table structure for table `pa_issue`
--

CREATE TABLE `pa_issue` (
  `id` int(11) NOT NULL,
  `PA_year` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `issue` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ประเด็นท้าทาย เรื่อง',
  `detail_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '1. สภาพปัญหาของผู้เรียนและการจัดการเรียนรู้',
  `detail_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '2. วิธีการดำเนินการให้บรรลุผล',
  `detail_3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '3. ผลลัพธ์การพัฒนาที่คาดหวัง',
  `detail_4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '3.1 เชิงปริมาณ',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pa_issue`
--

INSERT INTO `pa_issue` (`id`, `PA_year`, `user_id`, `issue`, `detail_1`, `detail_2`, `detail_3`, `detail_4`, `created_at`, `updated_at`) VALUES
(15, '2564', '65374', 'Engineers should help solve the hardest questions, the unknowns, where being22222', '<ul><li>Engineers should help solve the hardest questions, the unknowns, where being&nbsp;</li><li>Engineers should help solve the hardest questions, the unknowns, where being&nbsp;</li><li>Engineers should help solve the hardest questions, the unknowns, where being&nbsp;</li><li>Engineers should help solve the hardest questions, the unknowns, where being&nbsp;<br></li></ul>', '<ul><li>Engineers should help solve the hardest questions, the unknowns, where being&nbsp;</li><li>Engineers should help solve the hardest questions, the unknowns, where being&nbsp;</li><li>Engineers should help solve the hardest questions, the unknowns, where being&nbsp;</li><li>Engineers should help solve the hardest questions, the unknowns, where being&nbsp;</li></ul>', '<ul><li>Engineers should help solve the hardest questions, the unknowns, where being&nbsp;</li><li>Engineers should help solve the hardest questions, the unknowns, where being&nbsp;</li><li>Engineers should help solve the hardest questions, the unknowns, where being&nbsp;</li><li>Engineers should help solve the hardest questions, the unknowns, where being&nbsp;</li></ul>', '<ul><li>Engineers should help solve the hardest questions, the unknowns, where being&nbsp;</li><li>Engineers should help solve the hardest questions, the unknowns, where being&nbsp;</li><li>Engineers should help solve the hardest questions, the unknowns, where being&nbsp;</li><li>Engineers should help solve the hardest questions, the unknowns, where being&nbsp;</li></ul>', '2021-10-21 18:44:45', '2021-11-14 14:57:54'),
(16, '2564', '5', 'Bitnami Modules are production-ready packages of the most popular open source applications, available in the widest variety of formats.', '<p><span style=\"color: rgb(28, 43, 57); font-family: Interstate, Hind, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16.8px; background-color: rgb(241, 241, 241);\">Bitnami Modules are production-ready packages of the most popular open source applications, available in the widest variety of formats.</span></p><p><span style=\"color: rgb(28, 43, 57); font-family: Interstate, Hind, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16.8px; background-color: rgb(241, 241, 241);\">Bitnami Modules are production-ready packages of the most popular open source applications, available in the widest variety of formats.</span></p><p><span style=\"color: rgb(28, 43, 57); font-family: Interstate, Hind, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16.8px; background-color: rgb(241, 241, 241);\">Bitnami Modules are production-ready packages of the most popular open source applications, available in the widest variety of formats.</span><span style=\"color: rgb(28, 43, 57); font-family: Interstate, Hind, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16.8px; background-color: rgb(241, 241, 241);\"><br></span><span style=\"color: rgb(28, 43, 57); font-family: Interstate, Hind, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16.8px; background-color: rgb(241, 241, 241);\"><br></span><br></p>', '<p><span style=\"color: rgb(28, 43, 57); font-family: Interstate, Hind, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16.8px; background-color: rgb(241, 241, 241);\">Bitnami Modules are production-ready packages of the most popular open source applications, available in the widest variety of formats.</span></p><p><span style=\"color: rgb(28, 43, 57); font-family: Interstate, Hind, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16.8px; background-color: rgb(241, 241, 241);\">Bitnami Modules are production-ready packages of the most popular open source applications, available in the widest variety of formats.</span></p><p><span style=\"color: rgb(28, 43, 57); font-family: Interstate, Hind, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16.8px; background-color: rgb(241, 241, 241);\">Bitnami Modules are production-ready packages of the most popular open source applications, available in the widest variety of formats.</span></p><p><span style=\"color: rgb(28, 43, 57); font-family: Interstate, Hind, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16.8px; background-color: rgb(241, 241, 241);\">Bitnami Modules are production-ready packages of the most popular open source applications, available in the widest variety of formats.</span><span style=\"color: rgb(28, 43, 57); font-family: Interstate, Hind, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16.8px; background-color: rgb(241, 241, 241);\"><br></span><span style=\"color: rgb(28, 43, 57); font-family: Interstate, Hind, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16.8px; background-color: rgb(241, 241, 241);\"><br></span><span style=\"color: rgb(28, 43, 57); font-family: Interstate, Hind, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16.8px; background-color: rgb(241, 241, 241);\"><br></span><br></p>', '<p><span style=\"color: rgb(28, 43, 57); font-family: Interstate, Hind, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16.8px; background-color: rgb(241, 241, 241);\">Bitnami Modules are production-ready packages of the most popular open source applications, available in the widest variety of formats.</span></p><p><span style=\"color: rgb(28, 43, 57); font-family: Interstate, Hind, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16.8px; background-color: rgb(241, 241, 241);\">Bitnami Modules are production-ready packages of the most popular open source applications, available in the widest variety of formats.</span><span style=\"color: rgb(28, 43, 57); font-family: Interstate, Hind, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16.8px; background-color: rgb(241, 241, 241);\">Bitnami Modules are production-ready packages of the most popular open source applications, available in the widest variety of formats.</span><span style=\"color: rgb(28, 43, 57); font-family: Interstate, Hind, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16.8px; background-color: rgb(241, 241, 241);\"><br></span><br></p>', '<p><span style=\"color: rgb(28, 43, 57); font-family: Interstate, Hind, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16.8px; background-color: rgb(241, 241, 241);\">Bitnami Modules are production-ready packages of the most popular open source applications, available in the widest variety of formats.</span></p><p><span style=\"color: rgb(28, 43, 57); font-family: Interstate, Hind, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16.8px; background-color: rgb(241, 241, 241);\">Bitnami Modules are production-ready packages of the most popular open source applications, available in the widest variety of formats.</span></p><p><span style=\"color: rgb(28, 43, 57); font-family: Interstate, Hind, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16.8px; background-color: rgb(241, 241, 241);\">Bitnami Modules are production-ready packages of the most popular open source applications, available in the widest variety of formats.</span><span style=\"color: rgb(28, 43, 57); font-family: Interstate, Hind, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16.8px; background-color: rgb(241, 241, 241);\"><br></span><span style=\"color: rgb(28, 43, 57); font-family: Interstate, Hind, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16.8px; background-color: rgb(241, 241, 241);\"><br></span><br></p>', '2021-11-08 03:56:27', '2021-11-07 21:17:52'),
(17, '2564', '5832540', 'That’s why we build Firefox, and all our products, to give you greater contr5 5ol over the information you share online and the information you share with us. We strive to collect only what we need to improve Firefox for everyone.', '<p>That’s why we build Firefox, and all our products, to give you greater \ncontrol over the information you share online and the information you \nshare with us. We strive to collect only what we need to improve Firefox\n for everyone.33</p>', '<p>That’s why we build Firefox, and all our products, to give you greater \ncontrol over the information you share online and the information you \nshare with us. We strive to collect only what we need to improve Firefox\n for everyone.22</p>', '<ul><li>That’s why we build Firefox, and all our products, to give you greater \ncontrol over the information you share online and the information you \nshare with us. We strive to collect only what we need to improve Firefox\n for everyone.</li><li>That’s why we build Firefox, and all our products, to give you greater \ncontrol over the information you share online and the information you \nshare with us. We strive to collect only what we need to improve Firefox\n for everyone.</li><li>That’s why we build Firefox, and all our products, to give you greater \ncontrol over the information you share online and the information you \nshare with us. We strive to collect only what we need to improve Firefox\n for everyone.88</li></ul>', '<p>That’s why we build Firefox, and all our products, to give you greater \ncontrol over the information you share online and the information you \nshare with us. We strive to collect only what we need to improve Firefox\n for everyone.99</p>', '2021-11-08 04:05:19', '2021-11-08 01:40:11');

-- --------------------------------------------------------

--
-- Table structure for table `pa_learn_class`
--

CREATE TABLE `pa_learn_class` (
  `id` int(11) NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pa_learn_class`
--

INSERT INTO `pa_learn_class` (`id`, `value`) VALUES
(1, 'ห้องเรียนวิชาสามัญหรือวิชาพื้นฐาน'),
(2, 'ห้องเรียนปฐมวัย'),
(3, 'ห้องเรียนการศึกษาพิเศษ'),
(4, 'ห้องเรียนสายวิชาชีพ'),
(5, 'ห้องเรียนการศึกษานอกระบบ/ตามอัธยาศัย');

-- --------------------------------------------------------

--
-- Table structure for table `pa_response_hour`
--

CREATE TABLE `pa_response_hour` (
  `id` int(11) NOT NULL,
  `PA_year` int(11) NOT NULL DEFAULT 0,
  `user_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `response` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `res_hour` float NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pa_response_hour`
--

INSERT INTO `pa_response_hour` (`id`, `PA_year`, `user_id`, `response`, `res_hour`, `created_at`, `updated_at`) VALUES
(18, 2564, '65374', 'งานตอบสนองนโยบายและจุดเน้น', 1, '2021-10-21 17:08:55', '2021-10-21 17:08:55'),
(19, 2564, '5832540', 'งานตอบสนองนโยบายและจุดเน้น', 3, '2021-11-08 08:37:39', '2021-11-08 08:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `pa_schedule_hour`
--

CREATE TABLE `pa_schedule_hour` (
  `id` int(11) NOT NULL,
  `PA_year` int(11) NOT NULL DEFAULT 0,
  `user_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `group_learn` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'วิชา',
  `grade` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT 'ระดับชั้น',
  `sch_hour` float NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pa_schedule_hour`
--

INSERT INTO `pa_schedule_hour` (`id`, `PA_year`, `user_id`, `group_learn`, `subject`, `grade`, `sch_hour`, `created_at`, `updated_at`) VALUES
(68, 2564, '65374', 'คณิตศาสตร์', 'คณิตศาสตร์', 'ม.1', 1.5, '2021-10-21 16:52:53', '2021-10-21 16:52:53'),
(70, 2564, '5832540', 'ภาษาไทย', 'ddd', 'd', 3, '2021-11-08 05:16:17', '2021-11-08 05:16:17'),
(71, 2564, '5832540', 'ภาษาไทย', 'ddd', 'f', 3, '2021-11-08 08:37:08', '2021-11-08 08:37:08');

-- --------------------------------------------------------

--
-- Table structure for table `pa_self_development`
--

CREATE TABLE `pa_self_development` (
  `id` int(11) NOT NULL,
  `user_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PA_year` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no` int(11) DEFAULT NULL,
  `standard_no` int(11) DEFAULT NULL,
  `standard_detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datestart` date DEFAULT NULL,
  `dateend` date DEFAULT NULL,
  `budget` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `benefit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='แผนการพัฒนาตนเอง';

-- --------------------------------------------------------

--
-- Table structure for table `pa_standard`
--

CREATE TABLE `pa_standard` (
  `id` int(11) NOT NULL,
  `root` int(11) NOT NULL DEFAULT 0 COMMENT '0=หัวข้อ,อื่นๆหมายถึงมาจากหัวข้อหลักนั้นๆ',
  `no` int(11) NOT NULL DEFAULT 0 COMMENT 'ลำดับ',
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pa_standard`
--

INSERT INTO `pa_standard` (`id`, `root`, `no`, `detail`, `owner`, `other`, `student`) VALUES
(1, 0, 1, 'ด้านการจัดการเรียนรู้', 'mean,5,6,7,8', 'mean,5,6,7,8', 'mean,5,6,7,8'),
(2, 0, 2, 'ด้านการส่งเสริมและสนับสนุนการจัดการเรียนรู้', 'mean,13,14,15,16', 'mean,13,14,15,16', 'mean,13,14,15,16'),
(3, 0, 3, 'ด้านการพัฒนาตนเองและวิชาชีพ', 'mean,17,18,19', 'mean,17,18,19', 'mean,17,18,19'),
(4, 0, 4, 'วินัย คุณธรรม จริยธรรม และจรรยาบรรณ', '20', '20', '20'),
(5, 1, 1, 'สร้างหรือพัฒนาหลักสูตร โดยจัดทำรายวิชาและ\nหน่วยการเรียนรู้ให้สอดคล้องกับมาตรฐานการ\nเรียนรู้ และตัวชี้วัดหรือผลการเรียนรู้ ตามหลัก\nสูตร ให้ผู้เรียนได้พัฒนาสมรรถนะและการเรียน\nรู้เต็มตามศักยภาพ', '70', '56', '35'),
(6, 1, 2, 'จัดกิจกรรมการเรียนรู้ อำนวยความสะดวกในการ เรียนรู้ และส่งเสริมผู้เรียน ได้พัฒนาเต็มตามศักย ภาพเรียนรู้และทำงานร่วมกัน', 'mean,4,7,70,71', 'mean,4,7,56,57', 'mean,4,7,35,36'),
(7, 1, 3, 'ปฏิบัติการสอนโดยออกแบบการจัดการเรียนรู้โดย เน้นผู้เรียนเป็นสำคัญ ให้ผู้เรียนเป็นสำคัญ ให้ผู้เรียน มีความรู้ ทักษะ คุณลักษณะประจำวิชา คุณลักษณะ อันพึงประสงค์ และสมรรถนะที่สำคัญตามหลักสูตร', 'mean,8,52,70,71', 'mean,8, 56, 57', 'mean,8,35,36'),
(8, 1, 4, 'วัดประเมินผลการเรียนรู้ด้วยวิธีที่หลากหลาย เหมาะสมและสอดคล้องกับมาตรฐานการเรียนรู้ให้ ผู้เรียนมีทักษะการคิดและสามารถสร้างนวัตกรรม', 'mean,64,66', '51', '33'),
(9, 1, 5, 'ศึกษา วิเคราะห์ สังเคราะห์ และวิจัย เพื่อแก้ปัญหา หรือพัฒนาการเรียนรู้ที่ส่งผลต่อคุณภาพผู้เรียน', '80', '64', '37'),
(10, 1, 6, 'สร้างหรือพัฒนาสื่อ นวัตกรรรมเทคโนโลยี และ แหล่งเรียนรู้ ที่สอดคล้องกับกิจกรรมการเรียนรู้ ให้ผู้เรียนมีทักษะการคิดและสามารถสร้างนวัตกรรม ได้', '4', '4', '4'),
(11, 1, 7, 'จัดบรรยากาศที่ส่งเสริมและพัฒนาผู้เรียน ให้เกิด กระบวนการคิด ทักษะชีวิต ทักษะการทำงาน ทักษะ การเรียนรู้และนวัตกรรมทักษะด้านสารสนเทศ สื่อ และเทคโนโลยี', '81', '65', '38'),
(12, 1, 8, 'อบรมบ่มนิสัยให้ผู้เรียนมีคุณธรรม จริยธรรม คุณลักษณะอันพึงประสงค์ และค่านิยมความเป็นไทย ที่ดีงาม', 'mean,1,2,3,6,9,10,19,42', 'mean,1,2,3,6,9,10,17,36', 'mean,1,2,3,6,9,10,16,29'),
(13, 2, 1, 'จัดทำข้อมูลสารสนเทศของผู้เรียนและรายวิชา เพื่อใช้ในการส่งเสริมสนับสนุนการเรียนรู้และพัฒนา คุณภาพผู้เรียน', '82', '36', '69'),
(14, 2, 2, 'ดำเนินการตามระบบดูแลช่วยเหลือผู้เรียน โดยใช้ ข้อมูลสารสนเทศเกี่ยวกับผู้เรียนรายบุคคล และประ สานความร่วมมือกับผู้มีส่วนเกี่ยวข้อง เพื่อพัฒนา และแก้ปัญหาผู้เรียน', 'mean,1,2,5', 'mean,1,2,5', 'mean,1,2,5'),
(15, 2, 3, ' ร่วมปฏิบัติงานทางวิชาการ และงานอื่น ๆ ของ สถานศึกษา เพื่อยกระดับคุณภาพการจัดการศึกษา ของสถานศึกษา', '83', '67', '-'),
(16, 2, 4, 'ประสานความร่วมมือกับผู้ปกครอง ภาคีเครือข่าย และหรือสถานประกอบการ เพื่อร่วมกันา พัฒนาผู้ เรียน', 'mean,2,5,43,44', 'mean,2,5,37,38', 'mean,2,5'),
(17, 3, 1, 'พัฒนาตนเองอย่างเป็นระบบและต่อเนื่อง เพื่อให้มีความรู้ ความสามารถ ทักษะ โดยเฉพาะ อย่างยิ่ง การใช้ภาษาไทยและภาษาอังกฤษเพื่อการ สื่อสาร และการใช้เทคโนโลยีดิจิทัลเพื่อการศึกษา สมรรถนะทางวิชาชีพครู ความรอบรู้ในเนื้อหาวิชา และวิธีการสอน', 'mean,10,31,32,35,69', 'mean,10,29,30,55', 'mean,10,24,25'),
(18, 3, 2, 'มีส่วนร่วม และเป็นผู้นำในการแลกเปลี่ยนเรียน รู้ทางวิชาชีพเพื่อพัฒนาการจัดการเรียนรู้', 'mean,32,33,39,64,67', 'mean,30,31,34,51,53', 'mean,25,33'),
(19, 3, 3, 'นำความรู้ ความสามารถ ทักษะที่ได้จากการ พัฒนาตนเองและวิชาชีพมาใช้ในการพัฒนา การจัดการเรียนรู้ การพัฒนาคุณภาพผู้เรียน รวมถึงการพัณนานวัตกรรมการจัดการเรียนรู้', 'mean,10,72', 'mean,10,58', '10'),
(20, 4, 1, 'มีวินัย คุณธรรม จริยธรรม และประพฤติ ปฏิบัติตนเป็นแบบอย่างที่ดี ดำรงชีวิตตามหลัก ปรัชญาของเศรษฐกิจพอเพียง มีจิตวิญญาณ ความเป็นครูมีจิตสำนึกความรับผิดชอบในวิชาชีพ ครูและมีจรรยาบรรณ ของวิชาชีพ', 'all,1,79', 'all,1,67', 'all,1.39');

-- --------------------------------------------------------

--
-- Table structure for table `pa_standard_development`
--

CREATE TABLE `pa_standard_development` (
  `id` int(11) NOT NULL,
  `user_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PA_year` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `standard_id` int(11) DEFAULT NULL COMMENT 'มาตรฐานตำแหน่งที่จะพัฒนา',
  `start_date` date DEFAULT NULL COMMENT 'เริ่มต้น',
  `end_date` date DEFAULT NULL COMMENT 'สิ้นสุด',
  `budget` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'งบประมาณ',
  `benefit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ประโยชน์',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='การพัฒนาตนเอง';

--
-- Dumping data for table `pa_standard_development`
--

INSERT INTO `pa_standard_development` (`id`, `user_id`, `PA_year`, `standard_id`, `start_date`, `end_date`, `budget`, `benefit`, `created_at`, `updated_at`) VALUES
(11, '5832540', '2564', 1, '2021-11-02', '2021-11-04', 'งานตอบสนองนโยบายและจุดเน้น', 'งานตอบสนองนโยบายและจุดเน้น', '2021-11-08 08:38:54', '2021-11-08 08:38:54'),
(12, '65374', '2564', 1, '2021-11-06', '2021-11-09', 'ไม่มีการของบประมาณ', '4711108001', '2021-11-08 09:01:49', '2021-11-08 09:01:49');

-- --------------------------------------------------------

--
-- Table structure for table `pa_support_hour`
--

CREATE TABLE `pa_support_hour` (
  `id` int(11) NOT NULL,
  `user_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `PA_year` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `support_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_hour` float NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pa_support_hour`
--

INSERT INTO `pa_support_hour` (`id`, `user_id`, `PA_year`, `support_detail`, `sp_hour`, `created_at`, `updated_at`) VALUES
(64, '65374', '2564', 'งานส่งเสริมและสนับสนุนการจัดการเรียนรู้', 1.5, '2021-10-21 17:02:16', '2021-10-21 17:02:16'),
(65, '5832540', '2564', 'งานส่งเสริมและสนับสนุนการจัดการเรียนรู้', 2, '2021-11-08 08:37:19', '2021-11-08 08:37:19'),
(66, '5832540', '2564', 'งานส่งเสริมและสนับสนุนการจัดการเรียนรู้', 1, '2021-11-08 08:37:25', '2021-11-08 08:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `pa_task`
--

CREATE TABLE `pa_task` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PA_year` int(11) DEFAULT 0,
  `standard_id` int(11) DEFAULT NULL,
  `standard` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'งานที่ปฏิบัติตามมาตรฐานตำแหน่ง',
  `task` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `outcome` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indicator` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='งานที่ปฏิบัติตามมาตรฐานตำแหน่ง\r\n';

--
-- Dumping data for table `pa_task`
--

INSERT INTO `pa_task` (`id`, `user_id`, `PA_year`, `standard_id`, `standard`, `task`, `outcome`, `indicator`, `created_at`, `updated_at`) VALUES
(27, '65374', 2564, 1, 'ด้านการจัดการเรียนรู้', 'งานที่ปฏิบัติตามมาตรฐานตำแหน่ง', 'งานที่ปฏิบัติตามมาตรฐานตำแหน่ง', 'งานที่ปฏิบัติตามมาตรฐานตำแหน่ง', '2021-10-21 17:21:35', '2021-10-21 17:21:35'),
(28, '65374', 2564, 2, 'ด้านการส่งเสริมและสนับสนุนการจัดการเรียนรู้', 'งานที่ปฏิบัติตามมาตรฐานตำแหน่ง', 'งานที่ปฏิบัติตามมาตรฐานตำแหน่ง', 'งานที่ปฏิบัติตามมาตรฐานตำแหน่ง', '2021-10-21 17:21:57', '2021-10-21 17:21:57'),
(32, '5832540', 2564, 2, 'ด้านการส่งเสริมและสนับสนุนการจัดการเรียนรู้', 'งานตอบสนองนโยบายและจุดเน้น', 'งานตอบสนองนโยบายและจุดเน้น', 'งานตอบสนองนโยบายและจุดเน้น', '2021-11-08 08:39:02', '2021-11-08 08:39:02'),
(33, '5832540', 2564, 1, 'ด้านการจัดการเรียนรู้', 'งานตอบสนองนโยบายและจุดเน้น', 'งานตอบสนองนโยบายและจุดเน้น', 'งานตอบสนองนโยบายและจุดเน้น', '2021-11-08 08:39:07', '2021-11-08 08:39:07'),
(34, '5832540', 2564, 3, 'ด้านการพัฒนาตนเองและวิชาชีพ', 'งานตอบสนองนโยบายและจุดเน้น', 'งานตอบสนองนโยบายและจุดเน้น', 'งานตอบสนองนโยบายและจุดเน้น', '2021-11-08 08:39:12', '2021-11-08 08:39:12'),
(35, '5832540', 2564, 4, 'วินัย คุณธรรม จริยธรรม และจรรยาบรรณ', 'งานตอบสนองนโยบายและจุดเน้นงานตอบสนองนโยบายและจุดเน้น', 'งานตอบสนองนโยบายและจุดเน้นงานตอบสนองนโยบายและจุดเน้น', 'งานตอบสนองนโยบายและจุดเน้น\r\nงานตอบสนองนโยบายและจุดเน้น\r\nงานตอบสนองนโยบายและจุดเน้นงานตอบสนองนโยบายและจุดเน้น', '2021-11-08 08:39:25', '2021-11-08 08:39:25');

-- --------------------------------------------------------

--
-- Table structure for table `pa_train_hour`
--

CREATE TABLE `pa_train_hour` (
  `id` int(11) NOT NULL,
  `PA_year` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `train` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `train_hour` int(11) NOT NULL DEFAULT 0,
  `agency` tinytext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'หน่วยงาน',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pa_train_hour`
--

INSERT INTO `pa_train_hour` (`id`, `PA_year`, `user_id`, `start_date`, `end_date`, `train`, `train_hour`, `agency`, `created_at`, `updated_at`) VALUES
(18, '2564', '65374', '2021-10-01', '2021-10-02', 'การอบรม001', 1, 'สำนักงานส่งเสริมการเกษตร', '2021-10-21 17:13:55', '2021-10-21 17:13:55'),
(19, '2564', '65374', '2021-10-23', '2021-10-25', 'การอบรม002', 3, 'สำนักการจัดการเรียนรู้', '2021-10-21 17:14:31', '2021-10-21 17:14:31'),
(21, '2564', '5832540', '2021-11-01', '2021-11-03', 'dfff', 2, '3', '2021-11-08 08:38:27', '2021-11-08 08:38:27');

-- --------------------------------------------------------

--
-- Table structure for table `pa_year`
--

CREATE TABLE `pa_year` (
  `id` int(11) NOT NULL,
  `year` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pa_year`
--

INSERT INTO `pa_year` (`id`, `year`, `active`) VALUES
(1, '2564', 1),
(2, '2563', 0),
(3, '2562', 0),
(4, '2561', 0),
(5, '2560', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pa_yokyong`
--

CREATE TABLE `pa_yokyong` (
  `id` int(11) NOT NULL,
  `member_group_code` varchar(155) DEFAULT NULL COMMENT 'กลุ่มผู้ประเมิน',
  `classs_no` varchar(50) DEFAULT NULL COMMENT 'ระดับชั้น',
  `indicate_type` varchar(50) DEFAULT NULL COMMENT 'ประเภท',
  `indicate_code` varchar(255) DEFAULT NULL COMMENT 'รหัส',
  `indicate_name` varchar(255) DEFAULT NULL COMMENT 'ชื่อ',
  `remark` varchar(255) DEFAULT NULL COMMENT 'หมายเหตุ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pa_yokyong`
--

INSERT INTO `pa_yokyong` (`id`, `member_group_code`, `classs_no`, `indicate_type`, `indicate_code`, `indicate_name`, `remark`) VALUES
(1, 'OcAA', '5', 'ครองตน', '1', 'รัก เข้าใจ ห่วงใยลูกศิษย์ ', 'สำหรับครู ชั้น5'),
(2, 'OcAA', '5', 'ครองตน', '2', 'หน้าที่ครูต่อศิษย์ตามหลักทิศ 6 ', 'สำหรับครู ชั้น5'),
(3, 'OcAA', '5', 'ครองตน', '3', 'ไม่สร้างหนี้เพิ่ม', 'สำหรับครู ชั้น5'),
(4, 'OcAA', '5', 'ครองตน', '4', 'จิตสาธารณะ ', 'สำหรับครู ชั้น5'),
(5, 'OcAA', '5', 'ครองตน', '5', 'ปฏิบัติตนอยู่ในศีล 5 และความดีสากล 5 ', 'สำหรับครู ชั้น5'),
(6, 'OcAA', '5', 'ครองตน', '6', 'มีความรับผิดชอบ พูดอย่างไรทำอย่างนั้น ทำอย่างไรพูดอย่างนั้น ', 'สำหรับครู ชั้น5'),
(7, 'OcAA', '5', 'ครองตน', '7', 'เรียนรู้ตลอดชีวิต ', 'สำหรับครู ชั้น5'),
(8, 'OcAA', '5', 'ครองตน', '8', 'รู้เท่าทันตนเอง ', 'สำหรับครู ชั้น5'),
(9, 'OcAA', '5', 'ครองตน', '9', 'ละอายและเกรงกลัวต่อบาป', 'สำหรับครู ชั้น5'),
(10, 'OcAA', '5', 'ครองคน', '10', 'เป็นผู้หวังดีให้ด้วยจิตเมตตา', 'สำหรับครู ชั้น5'),
(11, 'OcAA', '5', 'ครองคน', '11', 'ปฏิบัติตนตามแบบแผน และปรับแนวคิดให้ถูกต้องตรงกัน', 'สำหรับครู ชั้น5'),
(12, 'OcAA', '5', 'ครองคน', '12', 'ปฏิบัติตนกับบุคคลรอบข้างอย่างเหมาะสม', 'สำหรับครู ชั้น5'),
(13, 'OcAA', '5', 'ครองงาน', '13', 'มีความคิดสร้างสรรค์  (Creativity)', 'สำหรับครู ชั้น5'),
(14, 'OcAA', '5', 'ครองงาน', '14', 'มีการคิดวิเคราะห์ (Critical Thinking)', 'สำหรับครู ชั้น5'),
(15, 'OcAA', '5', 'ครองงาน', '15', 'มีทักษะด้านความร่วมมือและการทำงานเป็นทีม (Collaboration and Teamwork)', 'สำหรับครู ชั้น5'),
(16, 'OcAA', '5', 'ครองงาน', '16', 'มีทักษะสื่อสาร (Communication)', 'สำหรับครู ชั้น5'),
(17, 'OcAA', '5', 'ครองงาน', '17', 'รู้คอมพิวเตอร์และไอซีที (Computing and ICT Literacy)', 'สำหรับครู ชั้น5'),
(18, 'OcAA', '5', 'ครองงาน', '18', 'มีทักษะอาชีพและทักษะการเรียนรู้ (Career and Learning Skill)', 'สำหรับครู ชั้น5'),
(19, 'OcAA', '5', 'ครองงาน', '19', 'ผสมผสานทางวัฒนธรรม (Cross-cultural)', 'สำหรับครู ชั้น5');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_academic`
--

CREATE TABLE `teacher_academic` (
  `id` int(11) NOT NULL,
  `academic` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_academic`
--

INSERT INTO `teacher_academic` (`id`, `academic`) VALUES
(1, 'ครูผู้ช่วย'),
(2, 'ครู'),
(3, 'ครูชำนาญการ'),
(4, 'ครูชำนาญการพิเศษ'),
(5, 'ครูเชี่ยวชาญ'),
(6, 'ครูเชี่ยวชาญพิเศษ'),
(7, 'ศึกษานิเทศก์ชำนาญการ'),
(8, 'ศึกษานิเทศก์ชำนาญการพิเศษ'),
(9, 'ศึกษานิเทศก์เชี่ยวชาญ'),
(10, 'ศึกษานิเทศก์เชี่ยวชาญพิเศษ'),
(11, 'รองผู้อำนวยการชำนาญการ'),
(12, 'รองผู้อำนวยการชำนาญการพิเศษ'),
(13, 'รองผู้อำนวยการเชี่ยวชาญ'),
(14, 'ผู้อำนวยการชำนาญการ'),
(15, 'ผู้อำนวยการชำนาญการพิเศษ'),
(16, 'ผู้อำนวยการเชี่ยวชาญ'),
(17, 'ผู้อำนวยการเชี่ยวชาญพิเศษ'),
(18, 'รองผู้อำนวยการสำนักงานเขตพื้นที่การศึกษาชำนาญการพิเศษ'),
(19, 'รองผู้อำนวยการสำนักงานเขตพื้นที่การศึกษาเชี่ยวชาญ'),
(20, 'ผู้อำนวยการสำนักงานเขตพื้นที่การศึกษาเชี่ยวชาญ'),
(21, 'ผู้อำนวยการเขตพื้นที่การศึกษาเชี่ยวชาญพิเศษ');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `id` int(11) NOT NULL,
  `coverpage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstpage` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `graphic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id`, `coverpage`, `template`, `firstpage`, `graphic`, `page`, `created_at`, `updated_at`) VALUES
(1, 'cover01.jpg', 'template01', 'firstpage.gif', 'graphic.gif', 1, '2021-09-28 23:58:43', '2021-09-28 23:58:43'),
(2, 'cover02.jpg', 'template02', 'firstpage.gif', 'graphic.gif', 2, '2021-09-28 23:59:07', '2021-09-28 23:59:07'),
(3, 'cover03.jpg', 'template03', 'firstpage.gif', 'graphic.gif', 3, '2021-09-28 23:59:41', '2021-09-28 23:59:41'),
(4, 'cover04.jpg', 'template04', 'firstpage.gif', 'graphic.gif', 4, '2021-09-29 00:00:22', '2021-09-29 00:00:22'),
(5, 'cover05.jpg', 'template05', 'firstpage.gif', 'graphic.gif', 5, '2021-09-29 00:00:32', '2021-09-29 00:00:32');

-- --------------------------------------------------------

--
-- Table structure for table `user_education`
--

CREATE TABLE `user_education` (
  `id` int(11) NOT NULL,
  `user_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faculty` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `major` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edu_type` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='ประวัติการศึกษา';

--
-- Dumping data for table `user_education`
--

INSERT INTO `user_education` (`id`, `user_id`, `school`, `faculty`, `major`, `edu_type`, `created_at`, `updated_at`) VALUES
(137, '65374', 'มหาวิทยาลัยศรินคริทร์วิโรฒน์', 'มนุษย์ศาสตร์', 'ภาษาอังกฤษเพื่อการพัฒนา', 'ปริญญาตรี', '2021-10-21 15:48:22', '2021-10-21 15:48:22'),
(139, '5832540', 'ทุ่งสงวิทยาลัย', '-', 'วิทย-คณิต', 'ม.6', '2021-11-08 05:08:59', '2021-11-08 05:08:59');

-- --------------------------------------------------------

--
-- Table structure for table `user_edu_type`
--

CREATE TABLE `user_edu_type` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_edu_type`
--

INSERT INTO `user_edu_type` (`id`, `name`) VALUES
(1, 'ป.6'),
(2, 'ม.6'),
(3, 'ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส)'),
(4, 'ประกาศนียบัตรวิชาชีพ (ปวช)'),
(5, 'ประกาศนียบัตรวิชาชีพเทคนิค (ปวท)'),
(6, 'ปริญญาตรี'),
(7, 'ปริญญาโท'),
(8, 'ปริญญาเอก');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL,
  `user_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prename` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `major` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `national` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `race` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datestart` date DEFAULT NULL COMMENT 'วันที่บรรจุ',
  `datebegin` date DEFAULT NULL COMMENT 'วันที่รับราชการ',
  `academic` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'วิทยฐานะ',
  `dateacademic` date DEFAULT NULL COMMENT 'วันที่ดำรงตำแหน่ง',
  `school` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'โรงเรียน',
  `department_big` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'สังกัดใหญ่',
  `department_small` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'สังกัดเล็ก',
  `department_bref` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ตัวย่อ',
  `salary` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'เงินเดือน',
  `class_knowlage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ประเภทห้องเรียนที่จัดการเรียนรู้ ',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `user_id`, `prename`, `firstname`, `lastname`, `position`, `major`, `national`, `race`, `religion`, `address`, `datestart`, `datebegin`, `academic`, `dateacademic`, `school`, `department_big`, `department_small`, `department_bref`, `salary`, `class_knowlage`, `created_at`, `updated_at`) VALUES
(64, '5', 'นางสาว', 'Silver', 'Member', 'ครู', 'ภาษาต่างประเทศ', 'ไทย', 'ไทย', 'พุทธ', '103  ในเมือง     อำเภอเมืองร้อยเอ็ด จังหวัด ร้อยเอ็ด  45000', '2018-01-01', '2018-01-01', 'ครู', '2019-01-20', 'สตรีวิทยา', 'สพม', 'สพม.กรุงเทพมหานคร เขต 2', 'สพม', '18000', '1,2,3,', '2021-10-20 21:30:44', '2021-10-20 15:27:16'),
(65, '65374', 'นางสาว', 'เพ็ญลักษณ์', 'พลเกษตร', 'ครู', 'สังคมศึกษา ศาสนา และวัฒนธรรม', 'ไทยs', 'ไทย2', 'พุทธ', '60 ม.1 ต.บ้านชะอวด อ.จุฬาภรณ์ จ.นครศรีธรรมราช  ควนหนองคว้า     อำเภอจุฬาภรณ์ จังหวัด นครศรีธรรมราช  80130', '2015-01-01', '2015-01-01', 'ครูชำนาญการ', '2018-01-12', 'วัดชนะสงคราม', 'สพป', 'สพม.นนทบุรี', 'สพม', '18000', '1,3,5,', '2021-10-21 15:48:22', '2021-11-27 05:37:42'),
(66, '5832540', 'นาย', 'ฮากีม', 'ระยะหลง', 'ครู', 'วิทยาศาสตร์', 'ไทย', 'ไทย', 'อิสลาม', '83 ม.9 ต.ป่าชิง อ.จะนะ จ.สงขล 90130  ป่าชิง     อำเภอจะนะ จังหวัด สงขลา  90130', '2021-11-01', '2021-11-05', 'ครูผู้ช่วย', '2021-11-01', 'สุวรรณวงศ์', 'สช', NULL, 'สช', '15000', '1,2,3,', '2021-11-08 05:08:59', '2021-11-08 01:37:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `group_department`
--
ALTER TABLE `group_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_learn`
--
ALTER TABLE `group_learn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_member`
--
ALTER TABLE `group_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pa`
--
ALTER TABLE `pa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pa_develop_hour`
--
ALTER TABLE `pa_develop_hour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pa_evaluation`
--
ALTER TABLE `pa_evaluation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pa_evaluation_agree`
--
ALTER TABLE `pa_evaluation_agree`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pa_evaluation_answer`
--
ALTER TABLE `pa_evaluation_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pa_innovation`
--
ALTER TABLE `pa_innovation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pa_issue`
--
ALTER TABLE `pa_issue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pa_learn_class`
--
ALTER TABLE `pa_learn_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pa_response_hour`
--
ALTER TABLE `pa_response_hour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pa_schedule_hour`
--
ALTER TABLE `pa_schedule_hour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pa_self_development`
--
ALTER TABLE `pa_self_development`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pa_standard`
--
ALTER TABLE `pa_standard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pa_standard_development`
--
ALTER TABLE `pa_standard_development`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pa_support_hour`
--
ALTER TABLE `pa_support_hour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pa_task`
--
ALTER TABLE `pa_task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pa_train_hour`
--
ALTER TABLE `pa_train_hour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pa_year`
--
ALTER TABLE `pa_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pa_yokyong`
--
ALTER TABLE `pa_yokyong`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `teacher_academic`
--
ALTER TABLE `teacher_academic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_education`
--
ALTER TABLE `user_education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_edu_type`
--
ALTER TABLE `user_edu_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `group_department`
--
ALTER TABLE `group_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `group_learn`
--
ALTER TABLE `group_learn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `group_member`
--
ALTER TABLE `group_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pa`
--
ALTER TABLE `pa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pa_develop_hour`
--
ALTER TABLE `pa_develop_hour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pa_evaluation`
--
ALTER TABLE `pa_evaluation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `pa_evaluation_agree`
--
ALTER TABLE `pa_evaluation_agree`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `pa_evaluation_answer`
--
ALTER TABLE `pa_evaluation_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=397;

--
-- AUTO_INCREMENT for table `pa_innovation`
--
ALTER TABLE `pa_innovation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `pa_issue`
--
ALTER TABLE `pa_issue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pa_learn_class`
--
ALTER TABLE `pa_learn_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pa_response_hour`
--
ALTER TABLE `pa_response_hour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pa_schedule_hour`
--
ALTER TABLE `pa_schedule_hour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `pa_self_development`
--
ALTER TABLE `pa_self_development`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pa_standard`
--
ALTER TABLE `pa_standard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pa_standard_development`
--
ALTER TABLE `pa_standard_development`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pa_support_hour`
--
ALTER TABLE `pa_support_hour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `pa_task`
--
ALTER TABLE `pa_task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `pa_train_hour`
--
ALTER TABLE `pa_train_hour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pa_year`
--
ALTER TABLE `pa_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pa_yokyong`
--
ALTER TABLE `pa_yokyong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `teacher_academic`
--
ALTER TABLE `teacher_academic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_education`
--
ALTER TABLE `user_education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `user_edu_type`
--
ALTER TABLE `user_edu_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
