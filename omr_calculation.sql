-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2021 at 02:10 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omr_calculation`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_correct_answers`
--

CREATE TABLE `tbl_correct_answers` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `option_number` int(11) NOT NULL COMMENT '1,2,3,4,5',
  `insert_by` int(11) NOT NULL,
  `insert_time` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT '0000-00-00 00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_correct_answers`
--

INSERT INTO `tbl_correct_answers` (`id`, `exam_id`, `question_number`, `option_number`, `insert_by`, `insert_time`) VALUES
(1, 1, 1, 5, 1, '2021-09-15 11:03'),
(2, 1, 2, 3, 1, '2021-09-15 11:03'),
(3, 1, 3, 3, 1, '2021-09-15 11:03'),
(4, 1, 4, 4, 1, '2021-09-15 11:03'),
(5, 1, 5, 3, 1, '2021-09-15 11:03'),
(6, 1, 6, 4, 1, '2021-09-15 11:03'),
(7, 1, 7, 2, 1, '2021-09-15 11:03'),
(8, 1, 8, 4, 1, '2021-09-15 11:03'),
(9, 1, 9, 2, 1, '2021-09-15 11:03'),
(10, 1, 10, 3, 1, '2021-09-15 11:03'),
(11, 1, 11, 5, 1, '2021-09-15 11:03'),
(12, 1, 12, 2, 1, '2021-09-15 11:03'),
(13, 1, 13, 4, 1, '2021-09-15 11:03'),
(14, 1, 14, 2, 1, '2021-09-15 11:03'),
(15, 1, 15, 4, 1, '2021-09-15 11:03'),
(16, 1, 16, 3, 1, '2021-09-15 11:03'),
(17, 1, 17, 3, 1, '2021-09-15 11:03'),
(18, 1, 18, 2, 1, '2021-09-15 11:03'),
(19, 1, 19, 3, 1, '2021-09-15 11:03'),
(20, 1, 20, 4, 1, '2021-09-15 11:03'),
(26, 1, 21, 3, 1, '2021-09-15 11:04'),
(27, 1, 22, 2, 1, '2021-09-15 11:04'),
(28, 1, 23, 2, 1, '2021-09-15 11:04'),
(29, 1, 24, 3, 1, '2021-09-15 11:04'),
(30, 1, 25, 3, 1, '2021-09-15 11:04'),
(31, 1, 26, 3, 1, '2021-09-15 16:34'),
(32, 1, 27, 4, 1, '2021-09-15 16:34'),
(33, 1, 28, 4, 1, '2021-09-15 16:34'),
(34, 1, 29, 3, 1, '2021-09-15 16:34'),
(35, 1, 30, 4, 1, '2021-09-15 16:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_divission`
--

CREATE TABLE `tbl_divission` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_divission`
--

INSERT INTO `tbl_divission` (`id`, `name`) VALUES
(1, '????????????'),
(2, '?????????????????????'),
(3, '???????????????????????????'),
(4, '???????????????'),
(5, '???????????????'),
(6, '??????????????????'),
(7, '???????????????'),
(8, '????????????????????????');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exams`
--

CREATE TABLE `tbl_exams` (
  `id` int(11) NOT NULL,
  `exam_name` text COLLATE utf8_bin DEFAULT NULL,
  `total_question` int(11) NOT NULL,
  `per_question_mark` double NOT NULL DEFAULT 0,
  `negative_mark` double NOT NULL DEFAULT 0,
  `insert_by` int(11) NOT NULL,
  `insert_time` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT '0000-00-00 00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_exams`
--

INSERT INTO `tbl_exams` (`id`, `exam_name`, `total_question`, `per_question_mark`, `negative_mark`, `insert_by`, `insert_time`) VALUES
(1, 'test', 30, 1, 0, 1, '2021-09-15 11:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students_marks`
--

CREATE TABLE `tbl_students_marks` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL DEFAULT 0,
  `roll_number` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `question_number` int(11) NOT NULL DEFAULT 0,
  `selected_option` int(11) NOT NULL DEFAULT 0,
  `insert_time` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT '0000-00-00 00:00',
  `insert_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_upozilla`
--

CREATE TABLE `tbl_upozilla` (
  `id` int(11) NOT NULL,
  `division_id` int(11) NOT NULL,
  `zilla_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_upozilla`
--

INSERT INTO `tbl_upozilla` (`id`, `division_id`, `zilla_id`, `name`) VALUES
(1, 1, 1, '???????????????'),
(2, 1, 1, '??????????????????'),
(3, 1, 1, '??????????????????????????????'),
(4, 1, 1, '????????????????????????'),
(5, 1, 1, '???????????????'),
(6, 1, 1, '????????????????????? ?????????????????? ?????????????????????'),
(7, 1, 2, '????????????????????????'),
(8, 1, 2, '???????????????????????????'),
(9, 1, 2, '????????????????????????'),
(10, 1, 2, '????????????????????? ?????????'),
(11, 1, 2, '?????????????????????'),
(12, 1, 3, '??????????????????'),
(13, 1, 3, '?????????????????????'),
(14, 1, 3, '??????????????????'),
(15, 1, 3, '????????????????????????'),
(16, 1, 3, '????????????????????????'),
(17, 1, 3, '??????????????????'),
(18, 1, 3, '???????????????????????????'),
(19, 1, 3, '?????????????????????'),
(20, 1, 3, '??????????????????'),
(21, 1, 3, '???????????????????????? ?????????'),
(22, 1, 3, '????????????????????????'),
(23, 1, 3, '??????????????????'),
(24, 1, 4, '???????????????????????????'),
(25, 1, 4, '???????????????'),
(26, 1, 4, '?????????????????????????????? ?????????'),
(27, 1, 4, '?????????????????????'),
(28, 1, 4, '????????????????????????'),
(29, 1, 5, '????????????'),
(30, 1, 5, '?????????????????????'),
(31, 1, 5, '????????????'),
(32, 1, 5, '????????????????????????'),
(33, 1, 5, '??????????????????'),
(34, 1, 5, '??????????????????????????????'),
(35, 1, 5, '???????????????????????????'),
(36, 1, 5, '??????????????????????????? ?????????'),
(37, 1, 5, '????????????????????????'),
(38, 1, 5, '????????????????????????'),
(39, 1, 5, '???????????????????????????'),
(40, 1, 5, '?????????????????????'),
(41, 1, 5, '???????????????'),
(42, 1, 6, '??????????????????'),
(43, 1, 6, '?????????????????????'),
(44, 1, 6, '????????????????????? ?????????'),
(45, 1, 6, '????????????'),
(46, 1, 6, '?????????????????????'),
(47, 1, 6, '??????????????????'),
(48, 1, 7, '????????????????????? ?????????'),
(49, 1, 7, '????????????????????????'),
(50, 1, 7, '???????????????'),
(51, 1, 7, '????????????????????????????????????'),
(52, 1, 7, '????????????????????????'),
(53, 1, 8, '????????????????????? ?????????'),
(54, 1, 8, '??????????????????????????????'),
(55, 1, 8, '???????????????????????????'),
(56, 1, 8, '??????????????????'),
(57, 1, 8, '???????????????????????????'),
(58, 1, 8, '??????????????????'),
(59, 1, 8, '???????????????????????????'),
(60, 1, 8, '?????????????????????'),
(61, 1, 8, '???????????????'),
(62, 1, 9, '??????????????????????????? ?????????'),
(63, 1, 9, '???????????????'),
(64, 1, 9, '?????????????????????'),
(65, 1, 9, '???????????????'),
(66, 1, 10, '??????????????????????????? ?????????'),
(67, 1, 10, '????????????????????????'),
(68, 1, 10, '???????????????????????????'),
(69, 1, 10, '??????????????????????????????'),
(70, 1, 10, '???????????????????????????'),
(71, 1, 11, '?????????????????????????????? ?????????'),
(72, 1, 11, '?????????????????????'),
(73, 1, 11, '??????????????????????????????'),
(74, 1, 11, '??????????????? '),
(75, 1, 11, '?????????????????????'),
(76, 1, 11, '????????????????????????'),
(77, 1, 12, '???????????????????????????'),
(78, 1, 12, '????????????????????????'),
(79, 1, 12, '??????????????????????????? ?????????'),
(80, 1, 12, '????????????'),
(81, 1, 12, '??????????????????'),
(82, 1, 12, '?????????????????????'),
(83, 1, 12, '?????????????????????'),
(84, 1, 13, '???????????????????????? ?????????'),
(85, 1, 13, '???????????????'),
(86, 1, 13, '??????????????????'),
(87, 1, 13, '???????????????????????????'),
(88, 1, 13, '????????????????????????'),
(89, 1, 13, '????????????????????????'),
(90, 2, 14, '?????????'),
(91, 2, 14, '???????????????????????????'),
(92, 2, 14, '?????????????????????'),
(93, 2, 14, '??????????????????'),
(94, 2, 14, '??????????????????'),
(95, 2, 14, '????????????'),
(96, 2, 14, '????????????????????????'),
(97, 2, 14, '???????????????'),
(98, 2, 14, '?????????????????????'),
(99, 2, 15, '?????????????????????'),
(100, 2, 15, '??????????????????'),
(101, 2, 15, '???????????????????????????'),
(102, 2, 15, '?????????????????????'),
(103, 2, 15, '?????????????????????'),
(104, 2, 15, '???????????????????????????'),
(105, 2, 15, '??????????????????????????? ?????????'),
(106, 2, 15, '???????????????'),
(107, 2, 15, '???????????????????????????'),
(108, 2, 16, '?????????????????????'),
(109, 2, 16, '?????????????????????'),
(110, 2, 16, '????????????????????????'),
(111, 2, 16, '??????????????? ?????????'),
(112, 2, 16, '????????????'),
(113, 2, 16, '?????????????????????'),
(114, 2, 16, '?????????????????????'),
(115, 2, 16, '?????????????????????'),
(116, 2, 16, '?????????????????????'),
(117, 2, 17, '??????????????????'),
(118, 2, 17, '??????????????? ?????????'),
(119, 2, 17, '????????????????????????????????????'),
(120, 2, 17, '??????????????????????????????'),
(121, 2, 17, '??????????????????????????????'),
(122, 2, 17, '?????????????????????'),
(123, 2, 17, '??????????????????????????????'),
(124, 2, 17, '?????????????????????'),
(125, 2, 17, '????????????'),
(126, 2, 17, '??????????????????'),
(127, 2, 17, '??????????????????'),
(128, 2, 17, '?????????????????????'),
(129, 2, 18, '?????????????????????????????????????????? ?????????'),
(130, 2, 18, '??????????????????????????????'),
(131, 2, 18, '???????????????'),
(132, 2, 18, '?????????????????????'),
(133, 2, 18, '?????????????????????'),
(134, 2, 19, '???????????????????????????'),
(135, 2, 19, '???????????????'),
(136, 2, 19, '????????????????????????'),
(137, 2, 19, '????????????????????????'),
(138, 2, 19, '???????????????????????? ?????????'),
(139, 2, 20, '???????????????????????????'),
(140, 2, 20, '?????????????????????'),
(141, 2, 20, '????????????????????????'),
(142, 2, 20, '????????????????????????'),
(143, 2, 20, '???????????????????????????'),
(144, 2, 20, '??????????????????'),
(145, 2, 20, '??????????????????'),
(146, 2, 20, '?????????????????????'),
(147, 2, 20, '??????????????? ?????????'),
(148, 2, 20, '?????????????????????'),
(149, 2, 20, '???????????????'),
(150, 2, 21, '??????????????? ?????????'),
(151, 2, 21, '???????????????'),
(152, 2, 21, '???????????????????????????'),
(153, 2, 21, '??????????????????????????????'),
(154, 2, 21, '??????????????????????????????'),
(155, 2, 21, '??????????????????'),
(156, 2, 21, '????????????????????????'),
(157, 3, 22, '??????????????????????????????'),
(158, 3, 22, '???????????????????????????'),
(159, 3, 22, '?????????????????????'),
(160, 3, 22, '???????????????'),
(161, 3, 22, '????????????????????????'),
(162, 3, 22, '????????????????????????'),
(163, 3, 22, '???????????????????????????'),
(164, 3, 22, '?????????????????????'),
(165, 3, 22, '???????????????????????????'),
(166, 3, 22, '????????????????????????'),
(167, 3, 22, '???????????????????????????'),
(168, 3, 22, '?????????????????????'),
(169, 3, 22, '??????????????????'),
(170, 3, 22, '????????????????????????'),
(171, 3, 23, '???????????????????????????'),
(172, 3, 23, '???????????????'),
(173, 3, 23, '????????????????????????????????????'),
(174, 3, 23, '????????????????????????'),
(175, 3, 23, '??????????????????????????????'),
(176, 3, 23, '??????????????????????????????'),
(177, 3, 23, '???????????????'),
(178, 3, 23, '??????????????????'),
(179, 3, 23, '????????????????????????'),
(180, 3, 23, '???????????????????????????'),
(181, 3, 23, '???????????????????????? ?????????'),
(182, 3, 23, '???????????????'),
(183, 3, 23, '???????????????????????????'),
(184, 3, 23, '????????? ??????????????????'),
(185, 3, 23, '???????????????'),
(186, 3, 23, '??????????????????'),
(187, 3, 24, '???????????????????????????'),
(188, 3, 24, '???????????? ?????????'),
(189, 3, 24, '????????????????????????'),
(190, 3, 24, '?????????????????????'),
(191, 3, 24, '?????????????????????'),
(192, 3, 24, '????????????????????????'),
(193, 3, 25, '?????????????????????????????????????????? ?????????'),
(194, 3, 25, '????????????'),
(195, 3, 25, '????????????????????????'),
(196, 3, 25, '???????????????'),
(197, 3, 25, '?????????????????????'),
(198, 3, 25, '??????????????????'),
(199, 3, 25, '??????????????????'),
(200, 3, 25, '????????????????????????????????????'),
(201, 3, 25, '?????????????????????'),
(202, 3, 26, '?????????????????????????????? ?????????'),
(203, 3, 26, '?????????????????????'),
(204, 3, 26, '?????????????????????'),
(205, 3, 26, '????????????????????????'),
(206, 3, 26, '????????????'),
(207, 3, 26, '???????????????'),
(208, 3, 26, '????????????????????????'),
(209, 3, 26, '????????????????????????'),
(210, 3, 26, '?????????????????????'),
(211, 3, 26, '???????????????????????????'),
(212, 3, 27, '??????????????????'),
(213, 3, 27, '???????????????'),
(214, 3, 27, '????????????????????????'),
(215, 3, 27, '????????????????????? ?????????'),
(216, 3, 27, '???????????? ???????????????'),
(217, 3, 27, '???????????????????????????'),
(218, 3, 27, '???????????? ??????????????????'),
(219, 3, 27, '????????????????????????'),
(220, 3, 28, '???????????????????????? ?????????'),
(221, 3, 28, '????????????????????????????????????'),
(222, 3, 28, '????????????????????????'),
(223, 3, 28, '??????????????????'),
(224, 3, 28, '????????????????????????'),
(225, 3, 28, '?????????????????????'),
(226, 3, 28, '??????????????????'),
(227, 3, 28, '??????????????????'),
(228, 3, 28, '???????????????????????????'),
(229, 3, 29, '?????????????????????????????? ?????????'),
(230, 3, 29, '??????????????????'),
(231, 3, 29, '??????????????????'),
(232, 3, 29, '??????????????????'),
(233, 3, 29, '?????????????????????'),
(234, 3, 30, '??????????????????????????? ?????????'),
(235, 3, 30, '??????????????????'),
(236, 3, 30, '???????????????????????????'),
(237, 3, 30, '???????????????'),
(238, 3, 30, '????????????????????????'),
(239, 3, 30, '??????????????????'),
(240, 3, 30, '????????????'),
(241, 3, 30, '??????????????????'),
(242, 3, 31, '???????????????????????? ?????????'),
(243, 3, 31, '????????????????????????'),
(244, 3, 31, '??????????????????'),
(245, 3, 31, '????????????????????????'),
(246, 3, 31, '?????????????????????'),
(247, 3, 31, '????????????????????????'),
(248, 3, 31, '???????????????'),
(249, 3, 31, '??????????????????????????????'),
(250, 3, 31, '?????????????????????'),
(251, 3, 32, '??????????????????????????? ?????????'),
(252, 3, 32, '??????????????????'),
(253, 3, 32, '????????????????????????????????????'),
(254, 3, 32, '????????????????????????'),
(255, 3, 32, '????????????'),
(256, 3, 32, '????????????'),
(257, 3, 32, '???????????????'),
(258, 4, 33, '????????????????????????'),
(259, 4, 33, '?????????????????????????????????'),
(260, 4, 33, '????????????????????????'),
(261, 4, 33, '????????????????????????????????????'),
(262, 4, 33, '??????????????????????????????'),
(263, 4, 33, '???????????????????????????'),
(264, 4, 33, '???????????????????????????'),
(265, 4, 33, '???????????????????????????'),
(266, 4, 33, '????????????????????????'),
(267, 4, 33, '??????????????? ?????????'),
(268, 4, 33, '?????????????????????'),
(269, 4, 33, '?????????????????? ???????????????'),
(270, 4, 33, '?????????????????? ?????????'),
(271, 4, 34, '??????????????????'),
(272, 4, 34, '?????????????????????'),
(273, 4, 34, '?????????????????????'),
(274, 4, 34, '?????????????????????????????? ????????? '),
(275, 4, 34, '??????????????????'),
(276, 4, 34, '???????????????????????????'),
(277, 4, 34, '????????????'),
(278, 4, 35, '?????????????????????'),
(279, 4, 35, '??????????????????'),
(280, 4, 35, '??????????????????????????????'),
(281, 4, 35, '????????????????????????'),
(282, 4, 35, '???????????????'),
(283, 4, 35, '???????????????????????????'),
(284, 4, 35, '????????????????????? ?????????'),
(285, 4, 35, '?????????????????????'),
(286, 4, 36, '??????????????????????????? ?????????'),
(287, 4, 36, '?????????????????? ???????????????????????????'),
(288, 4, 36, '????????????????????????????????????'),
(289, 4, 36, '????????????'),
(290, 4, 36, '??????????????????????????????'),
(291, 4, 36, '????????????????????????'),
(292, 4, 36, '????????????????????????'),
(293, 4, 36, '???????????????????????????'),
(294, 4, 36, '??????????????????'),
(295, 4, 36, '???????????????'),
(296, 4, 36, '?????????????????????????????????'),
(297, 5, 37, '????????????????????????'),
(298, 5, 37, '??????????????????'),
(299, 5, 37, '?????????????????????'),
(300, 5, 37, '???????????????'),
(301, 5, 37, '?????????????????????'),
(302, 5, 37, '????????????????????????'),
(303, 5, 37, '???????????????????????????'),
(304, 5, 37, '???????????????'),
(305, 5, 37, '????????????'),
(306, 5, 38, '???????????????????????????'),
(307, 5, 38, '??????????????????'),
(308, 5, 38, '???????????????????????????'),
(309, 5, 38, '??????????????????'),
(310, 5, 38, '????????????????????????'),
(311, 5, 38, '?????????????????????'),
(312, 5, 38, '???????????? ?????????'),
(313, 5, 38, '??????????????????'),
(314, 5, 39, '?????????????????????'),
(315, 5, 39, '?????????????????????'),
(316, 5, 39, '?????????????????????'),
(317, 5, 39, '??????????????????????????? ?????????'),
(318, 5, 39, '????????????????????????'),
(319, 5, 39, '????????????'),
(320, 5, 39, '????????????????????????'),
(321, 5, 40, '????????????????????????'),
(322, 5, 40, '???????????????????????? ?????????'),
(323, 5, 40, '???????????????'),
(324, 5, 41, '??????????????? ?????????'),
(325, 5, 41, '?????????????????????'),
(326, 5, 41, '??????????????????'),
(327, 5, 42, '?????????????????????????????? ?????????'),
(328, 5, 42, '???????????????????????????'),
(329, 5, 42, '???????????????????????????'),
(330, 5, 42, '?????????????????????'),
(331, 5, 43, '??????????????????'),
(332, 5, 43, '?????????????????????'),
(333, 5, 43, '?????????????????? ?????????'),
(334, 5, 43, '???????????????????????????'),
(335, 5, 44, '?????????????????????'),
(336, 5, 44, '???????????????????????? ?????????'),
(337, 5, 44, '???????????????????????????'),
(338, 5, 44, '?????????????????????'),
(339, 5, 44, '??????????????????'),
(340, 5, 44, '???????????????????????????'),
(341, 5, 44, '???????????????'),
(342, 5, 44, '???????????????'),
(343, 5, 44, '????????????????????????'),
(344, 5, 45, '????????????????????? ?????????'),
(345, 5, 45, '?????????????????????'),
(346, 5, 45, '????????????????????????????????? '),
(347, 5, 45, '????????????????????????'),
(348, 5, 45, '??????????????????????????????'),
(349, 5, 45, '?????????????????????'),
(350, 5, 46, '???????????????????????? ?????????'),
(351, 5, 46, '???????????????????????????'),
(352, 5, 46, '???????????????'),
(353, 5, 46, '??????????????????'),
(354, 5, 46, '?????????????????????'),
(355, 5, 46, '????????????????????????'),
(356, 6, 47, '?????????????????? ?????????'),
(357, 6, 47, '???????????????????????????'),
(358, 6, 47, '????????????????????????'),
(359, 6, 47, '?????????????????????'),
(360, 6, 47, '??????????????????????????????'),
(361, 6, 47, '??????????????????'),
(362, 6, 47, '????????????????????????'),
(363, 6, 47, '????????????????????????????????????'),
(364, 6, 47, '??????????????????'),
(365, 6, 47, '???????????????'),
(366, 6, 48, '????????????????????? ?????????'),
(367, 6, 48, '????????????????????????'),
(368, 6, 48, '??????????????????'),
(369, 6, 48, '?????????????????????'),
(370, 6, 49, '???????????????'),
(371, 6, 49, '??????????????????????????? ?????????'),
(372, 6, 49, '???????????????'),
(373, 6, 49, '??????????????????'),
(374, 6, 49, '?????????????????????'),
(375, 6, 49, '??????????????????????????????'),
(376, 6, 49, '?????????????????????'),
(377, 6, 49, '??????????????????????????????'),
(378, 6, 50, '???????????????????????? ?????????'),
(379, 6, 50, '????????????????????????'),
(380, 6, 50, '?????????????????????'),
(381, 6, 50, '?????????????????????'),
(382, 6, 50, '??????????????????????????????'),
(383, 6, 50, '????????????????????????'),
(384, 6, 50, '???????????????????????????'),
(385, 6, 51, '???????????? ?????????'),
(386, 6, 51, '????????????????????????????????????'),
(387, 6, 51, '????????????????????????'),
(388, 6, 51, '?????????????????????'),
(389, 6, 51, '??????????????????'),
(390, 6, 51, '???????????????????????????'),
(391, 6, 51, '?????????????????????'),
(392, 6, 52, '???????????????'),
(393, 6, 52, '?????????????????? ?????????'),
(394, 6, 52, '??????????????????'),
(395, 6, 52, '???????????????'),
(396, 6, 52, '????????????????????????'),
(397, 6, 52, '??????????????????'),
(398, 7, 53, '??????????????? ?????????'),
(399, 7, 53, '????????????????????????'),
(400, 7, 53, '????????????????????????'),
(401, 7, 53, '?????????????????????'),
(402, 7, 53, '???????????????????????????'),
(403, 7, 53, '?????????????????????'),
(404, 7, 53, '?????????????????????'),
(405, 7, 53, '?????????????????????'),
(406, 7, 54, '?????????????????????????????? ?????????'),
(407, 7, 54, '????????????????????????'),
(408, 7, 54, '????????????????????????'),
(409, 7, 54, '??????????????????????????????'),
(410, 7, 54, '????????????????????????'),
(411, 7, 55, '?????????????????? ?????????'),
(412, 7, 55, '????????????????????????'),
(413, 7, 55, '????????????'),
(414, 7, 55, '?????????????????????'),
(415, 7, 55, '????????????????????????'),
(416, 7, 56, '??????????????????????????? ?????????'),
(417, 7, 56, '???????????????????????????'),
(418, 7, 56, '????????????????????????????????????'),
(419, 7, 56, '?????????????????????'),
(420, 7, 56, '????????????????????????'),
(421, 7, 56, '??????????????????'),
(422, 7, 56, '?????????????????????'),
(423, 7, 56, '??????????????????'),
(424, 7, 56, '?????? ????????????????????????'),
(425, 7, 57, '????????????????????????'),
(426, 7, 57, '?????????????????????'),
(427, 7, 57, '?????????????????????'),
(428, 7, 57, '????????????????????????'),
(429, 7, 57, '??????????????????????????????'),
(430, 7, 57, '????????????????????????'),
(431, 7, 57, '?????????????????????'),
(432, 7, 57, '?????????????????????'),
(433, 7, 57, '???????????????????????? ?????????'),
(434, 7, 57, '????????????????????????'),
(435, 7, 57, '?????????????????????'),
(436, 7, 57, '????????????'),
(437, 7, 57, '??????????????????????????????'),
(438, 7, 58, '??????????????????????????? ?????????'),
(439, 7, 58, '?????????????????????'),
(440, 7, 58, '???????????????????????????'),
(441, 7, 58, '??????????????????'),
(442, 7, 58, '????????????????????????????????????'),
(443, 7, 59, '?????????????????????????????????'),
(444, 7, 59, '??????????????????????????? ?????????'),
(445, 7, 59, '????????????????????????'),
(446, 7, 59, '??????????????????'),
(447, 7, 59, '?????????????????????????????????'),
(448, 7, 59, '??????????????????????????????'),
(449, 7, 59, '??????????????????'),
(450, 7, 60, '?????????????????????'),
(451, 7, 60, '???????????????'),
(452, 7, 60, '???????????????'),
(453, 7, 60, '??????????????????'),
(454, 7, 60, '???????????????????????????'),
(455, 7, 60, '??????????????????????????? ?????????'),
(456, 8, 61, '??????????????????????????? '),
(457, 8, 61, '?????????????????????'),
(458, 8, 61, '??????????????????'),
(459, 8, 61, '??????????????????????????????'),
(460, 8, 61, '???????????????????????? ?????????'),
(461, 8, 61, '?????????????????????'),
(462, 8, 61, '??????????????????'),
(463, 8, 61, '???????????????????????????'),
(464, 8, 61, '?????????????????????'),
(465, 8, 61, '?????????????????????'),
(466, 8, 61, '???????????????????????????'),
(467, 8, 61, '????????????????????????'),
(468, 8, 61, '??????????????????????????????'),
(469, 8, 62, '???????????????????????? ?????????'),
(470, 8, 62, '????????????????????????'),
(471, 8, 62, '????????????????????????'),
(472, 8, 62, '??????????????????????????????'),
(473, 8, 62, '???????????????????????????'),
(474, 8, 62, '???????????????????????????'),
(475, 8, 62, '????????????????????????'),
(476, 8, 63, '???????????????????????????'),
(477, 8, 63, '???????????????????????????'),
(478, 8, 63, '????????????????????????'),
(479, 8, 63, '??????????????????'),
(480, 8, 63, '?????????'),
(481, 8, 63, '??????????????????????????????'),
(482, 8, 63, '??????????????????????????????'),
(483, 8, 63, '????????????????????????'),
(484, 8, 63, '????????????????????????'),
(485, 8, 63, '??????????????????????????? ?????????'),
(486, 8, 64, '?????????????????? ?????????'),
(487, 8, 64, '??????????????????????????????'),
(488, 8, 64, '????????????????????????'),
(489, 8, 64, '????????????'),
(490, 8, 64, '???????????????????????????'),
(491, 1, 1, '???????????? ??????????????????');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_zilla`
--

CREATE TABLE `tbl_zilla` (
  `id` int(11) NOT NULL,
  `divission_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_zilla`
--

INSERT INTO `tbl_zilla` (`id`, `divission_id`, `name`) VALUES
(1, 1, '????????????'),
(2, 1, '?????????????????????'),
(3, 1, '????????????????????????'),
(4, 1, '??????????????????????????????'),
(5, 1, '???????????????????????????'),
(6, 1, '?????????????????????'),
(7, 1, '?????????????????????'),
(8, 1, '?????????????????????'),
(9, 1, '???????????????????????????'),
(10, 1, '???????????????????????????'),
(11, 1, '??????????????????????????????'),
(12, 1, '???????????????????????????'),
(13, 1, '????????????????????????'),
(14, 2, '?????????????????????'),
(15, 2, '???????????????????????????'),
(16, 2, '???????????????'),
(17, 2, '???????????????'),
(18, 2, '??????????????????????????????????????????'),
(19, 2, '????????????????????????'),
(20, 2, '???????????????'),
(21, 2, '???????????????'),
(22, 3, '???????????????????????????'),
(23, 3, '????????????????????????'),
(24, 3, '????????????'),
(25, 3, '??????????????????????????????????????????'),
(26, 3, '??????????????????????????????'),
(27, 3, '?????????????????????'),
(28, 3, '????????????????????????'),
(29, 3, '??????????????????????????????'),
(30, 3, '???????????????????????????'),
(31, 3, '????????????????????????'),
(32, 3, '???????????????????????????'),
(33, 4, '???????????????'),
(34, 4, '??????????????????????????????'),
(35, 4, '?????????????????????'),
(36, 4, '???????????????????????????'),
(37, 5, '???????????????'),
(38, 5, '????????????'),
(39, 5, '???????????????????????????'),
(40, 5, '????????????????????????'),
(41, 5, '???????????????'),
(42, 5, '??????????????????????????????'),
(43, 5, '??????????????????'),
(44, 5, '????????????????????????'),
(45, 5, '?????????????????????'),
(46, 5, '????????????????????????'),
(47, 6, '??????????????????'),
(48, 6, '?????????????????????'),
(49, 6, '???????????????????????????'),
(50, 6, '????????????????????????'),
(51, 6, '????????????'),
(52, 6, '??????????????????'),
(53, 7, '???????????????'),
(54, 7, '??????????????????????????????'),
(55, 7, '??????????????????'),
(56, 7, '???????????????????????????'),
(57, 7, '????????????????????????'),
(58, 7, '???????????????????????????'),
(59, 7, '???????????????????????????'),
(60, 7, '???????????????????????????'),
(61, 8, '????????????????????????'),
(62, 8, '????????????????????????'),
(63, 8, '???????????????????????????'),
(64, 8, '??????????????????');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `address` int(11) NOT NULL COMMENT 'thana id',
  `district` varchar(30) NOT NULL,
  `division` varchar(30) NOT NULL,
  `roadHouse` text NOT NULL,
  `postcode` varchar(100) NOT NULL,
  `phone` text NOT NULL,
  `userType` text NOT NULL,
  `photo` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 for active user, 0 for not active user',
  `emailVerified` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1 for verify, 0 for not verify',
  `mobileVerified` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1 for verify, 0 for not verify'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `address`, `district`, `division`, `roadHouse`, `postcode`, `phone`, `userType`, `photo`, `status`, `emailVerified`, `mobileVerified`) VALUES
(1, 'rayhan', 'roky', 'roky', 'rzroky@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, '', '', '12/6 solimullah road', '', '01709372481', 'admin', 'assets/userPhoto/pngtreebusinessmanuseravatarfreevectorpngimage_20210630104704.jpg', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='types of user, each type has single controller';

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `value`, `name`) VALUES
(1, 'user', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_correct_answers`
--
ALTER TABLE `tbl_correct_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_divission`
--
ALTER TABLE `tbl_divission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_exams`
--
ALTER TABLE `tbl_exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_students_marks`
--
ALTER TABLE `tbl_students_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_upozilla`
--
ALTER TABLE `tbl_upozilla`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_zilla`
--
ALTER TABLE `tbl_zilla`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_correct_answers`
--
ALTER TABLE `tbl_correct_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_divission`
--
ALTER TABLE `tbl_divission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_exams`
--
ALTER TABLE `tbl_exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_students_marks`
--
ALTER TABLE `tbl_students_marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_upozilla`
--
ALTER TABLE `tbl_upozilla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=492;

--
-- AUTO_INCREMENT for table `tbl_zilla`
--
ALTER TABLE `tbl_zilla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
