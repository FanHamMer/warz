-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 생성 시간: 17-08-20 14:56
-- 서버 버전: 5.6.35
-- PHP 버전: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `warzrp`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `admins`
--

CREATE TABLE `admins` (
  `p_name` varchar(32) CHARACTER SET utf8 NOT NULL,
  `save_adminname` varchar(32) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `admins`
--

INSERT INTO `admins` (`p_name`, `save_adminname`) VALUES
('Prince_Jess', '플렌'),
('Vandroos_Luther', 'Birth');

-- --------------------------------------------------------

--
-- 테이블 구조 `connectLog`
--

CREATE TABLE `connectLog` (
  `xid` int(11) NOT NULL,
  `ip` text NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `reason` varchar(100) NOT NULL DEFAULT 'success'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `connectLog`
--

INSERT INTO `connectLog` (`xid`, `ip`, `p_name`, `p_password`, `date`, `reason`) VALUES
(1, '108.162.245.43', 'Al1on', 'wham0139', '2017-04-15 17:51:28', 'false'),
(2, '108.162.245.43', 'rlagytjr888', 'tprtm123', '2017-04-15 17:52:20', 'false'),
(3, '108.162.245.43', 'rlagytjr888', 'tprtm123', '2017-04-15 17:52:21', 'false'),
(4, '162.158.255.121', 'Bonchan_Gu', 'gosemvhs452', '2017-04-15 22:12:25', 'false'),
(5, '162.158.255.121', 'Bonchan_Gu', 'gosemvhs452', '2017-04-15 22:12:28', 'false'),
(6, '162.158.255.121', 'Bonchan_Gu', 'gosemvhs452', '2017-04-15 22:12:33', 'false'),
(7, '162.158.255.121', 'Bonchan_Gu', 'gosemvhs452', '2017-04-15 22:12:34', 'false'),
(8, '162.158.255.121', 'Bonchan_Gu', 'gosemvhs452', '2017-04-15 22:34:50', 'false'),
(9, '162.158.255.121', 'Bonchan_Gu', 'gosemvhs452', '2017-04-15 22:34:51', 'false'),
(10, '108.162.222.67', 'Klaus_Poppe', 'klaus0208', '2017-04-15 23:56:25', 'false'),
(11, '108.162.246.200', 'cf', 'cl', '2017-04-16 00:56:42', 'false'),
(12, '108.162.245.241', 'mingeun_kim', 'coffee1221', '2017-04-16 02:43:34', 'false'),
(13, '172.68.132.248', 'Jayden_Chung', 'dnj_toavmcnd12-', '2017-04-16 05:08:35', 'false'),
(14, '172.68.132.248', 'Jayden_Chung', 'dnj_toavmcnd12-', '2017-04-16 05:08:43', 'false'),
(15, '172.68.132.248', 'Jayden_Chung', 'dnj_toavmcnd12-', '2017-04-16 05:08:57', 'false'),
(16, '108.162.246.44', 'Prince_Jess', '123321', '2017-04-16 05:21:30', 'false'),
(17, '108.162.246.44', 'Test_User', '123', '2017-04-16 05:21:37', 'false'),
(18, '108.162.246.44', 'Prince_Jess', '123', '2017-04-16 05:21:42', 'false'),
(19, '172.68.142.194', 'Vandroos_Luther', '????', '2017-04-16 05:34:09', 'false'),
(20, '172.68.142.194', 'Vandroos_Luther', '12345', '2017-04-16 06:05:57', 'success'),
(21, '108.162.245.241', 'mingeun_kim', '12345', '2017-04-16 06:07:38', 'success'),
(22, '162.158.178.78', 'Carson_Timothy', '1234', '2017-04-16 06:33:04', 'false'),
(23, '108.162.246.38', 'Carl_Jason', 'tjdgns10', '2017-04-16 06:47:17', 'success'),
(24, '162.158.255.151', 'Chi-Won', '2374', '2017-04-16 07:28:07', 'false'),
(25, '172.68.142.122', 'tngh2758', 'wlgh2758', '2017-04-16 08:53:30', 'false'),
(26, '108.162.246.164', 'Marco_Salinas', 'rhkdtn23', '2017-04-16 09:10:44', 'false'),
(27, '172.68.142.44', 'dqlsdl123456', '123456aa', '2017-04-16 09:36:43', 'false'),
(28, '108.162.246.44', '1234', '1234', '2017-04-16 10:02:14', 'false'),
(29, '172.68.142.188', 'Kobe_Brocker', 'q6454851', '2017-04-16 10:05:04', 'success'),
(30, '162.158.106.15', 'rlarkqcjs', 'rlfls12', '2017-04-16 10:25:51', 'false'),
(31, '162.158.179.13', 'Heywood_Alex', 'choh3722', '2017-04-16 10:30:46', 'success'),
(32, '172.68.133.141', 'Bonchan_Gu', 'gosemvhs452', '2017-04-16 10:31:21', 'success'),
(33, '108.162.246.176', 'Hojin_Kim', '554862', '2017-04-16 12:06:20', 'false'),
(34, '108.162.246.176', 'Hojin_Kim', '123123', '2017-04-16 12:06:34', 'false'),
(35, '108.162.246.176', 'Hojin_Kim', '123123', '2017-04-16 12:06:42', 'false'),
(36, '162.158.179.49', 'Nelson', 'o0oajeor2', '2017-04-16 12:06:47', 'false'),
(37, '108.162.246.44', 'Prince_Jess', '123321', '2017-04-16 13:14:28', 'success'),
(38, '108.162.245.193', 'fhr55', '463643', '2017-04-16 13:37:30', 'false'),
(39, '108.162.245.199', 'Gelico_Crobeil', '15912', '2017-04-16 14:38:44', 'false'),
(40, '108.162.246.134', 'Garnire_Mac', 'q1w2e3r4', '2017-04-16 15:56:30', 'false'),
(41, '108.162.246.134', 'Garnire_Mac', '1234', '2017-04-16 15:57:10', 'false'),
(42, '172.68.132.158', 'Prince_Jess', '123321', '2017-04-17 02:43:26', 'success'),
(43, '162.158.69.84', 'Gelico_Crobeil', '15912', '2017-04-17 09:35:03', 'success'),
(44, '172.68.133.141', 'Bonchan_Gu', 'gosemvhs452', '2017-04-17 10:17:55', 'success'),
(45, '162.158.178.78', 'Carson_Timothy', '1234', '2017-04-17 12:28:52', 'success'),
(46, '108.162.245.241', 'mingeun_kim', '123321', '2017-04-17 12:33:02', 'success'),
(47, '172.68.142.194', 'Vandroos_Luther', '12345', '2017-04-17 12:35:49', 'false'),
(48, '172.68.142.194', 'Vandroos_Luther', '1234', '2017-04-17 12:35:55', 'false'),
(49, '172.68.142.194', 'Vandroos_Luther', '123', '2017-04-17 12:36:00', 'false'),
(50, '172.68.142.194', 'Vandroos_Luther ', '12345', '2017-04-17 12:36:10', 'false'),
(51, '172.68.142.194', 'Vandroos_Luther', '12345', '2017-04-17 12:36:35', 'false'),
(52, '172.68.133.141', 'Bonchan_Gu', 'gosemvhs452', '2017-04-17 14:38:19', 'success'),
(53, '172.68.142.206', 'Yong_One', 'bid7123', '2017-04-17 15:01:17', 'success'),
(54, '108.162.222.241', 'Franklin_Collins', 'bsa40833', '2017-04-17 17:55:31', 'false'),
(55, '108.162.245.241', 'mingeun_kim', 'coffee1221', '2017-04-20 14:40:26', 'false'),
(56, '108.162.245.241', 'mingeun_kim', '123321', '2017-04-20 14:40:34', 'success'),
(57, '108.162.222.229', 'Test_User', '123', '2017-04-21 10:30:39', 'false'),
(58, '108.162.246.224', 'Test_User', '123', '2017-04-21 10:30:45', 'false'),
(59, '108.162.246.224', 'Test_User', '123', '2017-04-21 10:30:52', 'false'),
(60, '108.162.222.229', 'Test_User', '123', '2017-04-21 10:30:52', 'false'),
(61, '108.162.222.229', 'Test_User', '123', '2017-04-21 10:31:10', 'false'),
(62, '108.162.246.98', 'Test_User', '123', '2017-04-21 10:37:11', 'false'),
(63, '108.162.245.241', 'mingeun_kim', '123321', '2017-04-21 16:06:46', 'success'),
(64, '108.162.246.44', 'Prince_Jess', '123321', '2017-04-22 10:44:40', 'success'),
(65, '108.162.245.241', 'mingeun_kim', '123321', '2017-04-22 15:00:42', 'success'),
(66, '108.162.246.74', 'mingeun_kim', '123321', '2017-04-22 15:00:50', 'success'),
(67, '108.162.246.224', 'mingeun_kim', '123321', '2017-04-23 04:54:40', 'success'),
(68, '162.158.179.61', 'Gubin_Park', 'darkblack', '2017-04-23 10:21:14', 'false'),
(69, '172.68.132.188', 'Prince_Jess', '123321', '2017-04-23 15:21:14', 'success'),
(70, '108.162.246.44', 'Prince_Jess', '123321', '2017-04-23 15:21:20', 'success'),
(71, '108.162.245.241', 'root', 'coffee1221', '2017-04-24 11:42:01', 'false'),
(72, '108.162.246.152', 'Garry_Robredo', 'wngur0705', '2017-04-24 14:15:29', 'false'),
(73, '108.162.222.241', 'Franklin_Collins', 'bsa40833', '2017-04-24 14:25:47', 'false'),
(74, '108.162.245.241', 'mingeun_kim', '123321', '2017-04-24 14:50:48', 'success'),
(75, '162.158.255.43', 'Vandroos_Luther', 'asd123', '2017-04-24 18:03:21', 'false'),
(76, '162.158.179.127', 'mingeun_kim', '123321', '2017-04-24 23:15:43', 'success'),
(77, '162.158.255.157', 'tmvlem2z', 'viver456', '2017-04-25 00:31:59', 'false'),
(78, '108.162.222.67', 'Klaus_Poppe', 'gooney0208', '2017-04-25 06:37:00', 'false'),
(79, '108.162.222.67', 'Klaus_Poppe', 'goppe0208', '2017-04-25 06:37:58', 'false'),
(80, '108.162.222.67', 'Klaus_Poppe', 'goppe0208', '2017-04-25 06:38:11', 'false'),
(81, '108.162.222.67', 'Klaus_Poppe', 'goppe0208', '2017-04-25 06:38:37', 'false'),
(82, '162.158.179.49', 'Hokins_Jang', 'vhsdlswmd00700', '2017-04-25 09:30:05', 'false'),
(83, '162.158.179.49', 'Hokins_Jang', 'vhsdlswmd00700', '2017-04-25 09:30:12', 'false'),
(84, '162.158.179.49', 'Hokins_Jang', 'vhsdlswmd00700', '2017-04-25 09:33:18', 'false'),
(85, '162.158.179.49', 'Hokins_Jang', 'alstn6040', '2017-04-25 09:33:26', 'false'),
(86, '172.68.189.40', 'Jasmin_Foxworth', 'wnsduddbwls1110', '2017-04-25 09:42:46', 'false'),
(87, '108.162.245.241', 'Harry_Winks', '123321', '2017-04-25 12:08:14', 'success'),
(88, '172.68.143.57', 'fdgds', 'fdfdas', '2017-04-27 11:55:03', 'false'),
(89, '108.162.246.80', '???', 'als72788', '2017-04-29 11:03:46', 'false'),
(90, '108.162.246.80', 'baram1538', 'als72788', '2017-04-29 11:04:21', 'false'),
(91, '108.162.246.80', '???', 'dlsdfsfs', '2017-04-29 11:04:43', 'false'),
(92, '172.68.143.33', 'wbb13', 'a1367549', '2017-04-30 02:42:27', 'false'),
(93, '172.68.143.33', 'Steven_Clix', 'a1367549', '2017-04-30 02:43:17', 'false'),
(94, '108.162.246.164', 'naclo2011', '34153415lk', '2017-05-02 15:24:43', 'false'),
(95, '108.162.245.181', 'Darneil_Chadwick', 'ajtm1234', '2017-05-03 08:48:22', 'false'),
(96, '108.162.246.38', 'carl_jason', 'tjdgns10', '2017-05-03 14:39:15', 'success'),
(97, '108.162.222.241', 'Prince_Jess', '123321', '2017-05-04 15:56:44', 'success'),
(98, '162.158.255.91', 'xsmillx', 'gksalsrb12', '2017-05-06 15:40:02', 'false'),
(99, '108.162.245.169', 'mingeun_kim', '123321', '2017-05-08 06:31:09', 'success'),
(100, '162.158.255.97', 'sa65391', 'sa42426539', '2017-05-11 11:06:30', 'false'),
(101, '162.158.178.150', 'renato', 'qwe123', '2017-05-17 16:10:41', 'false'),
(102, '172.68.142.86', 'Xenops_Shakerfold', 'alfrka45', '2017-05-19 18:29:26', 'false'),
(103, '162.158.178.6', 'Prince_Jess', '123321', '2017-05-23 00:21:54', 'success'),
(104, '172.68.141.13', 'Mingeun_kim', '123321', '2017-05-23 10:35:33', 'success'),
(105, '162.158.179.49', 'Prince_Jess', '123321', '2017-05-25 00:17:04', 'success'),
(106, '172.68.133.213', 'Test_User', '123', '2017-05-25 06:19:01', 'false'),
(107, '172.68.133.213', 'Test_User', '123123', '2017-05-25 06:19:07', 'false'),
(108, '172.68.133.213', 'Harry_Winks', '123321', '2017-05-25 06:19:50', 'success'),
(109, '108.162.222.151', 'Clover_Break', '123', '2017-05-27 02:05:10', 'false'),
(110, '108.162.222.151', 'Clover_Break', '1234', '2017-05-27 02:05:15', 'false'),
(111, '162.158.6.61', '55555', '55555', '2017-06-05 15:30:31', 'false'),
(112, '162.158.6.115', 'nyn168', '12dlgustnr', '2017-06-16 12:34:38', 'false'),
(113, '162.158.6.13', 'qwe', 'hsfhsf', '2017-06-25 12:52:39', 'false'),
(114, '162.158.6.13', 'dsadsa', 'assss', '2017-06-25 12:52:52', 'false'),
(115, '108.162.245.241', 'mingeun_kim', '123321', '2017-07-16 10:22:35', 'success'),
(116, '172.68.132.158', 'Yuuki_Shinonome', 'akskqn12', '2017-07-27 09:41:39', 'success'),
(117, '172.68.132.158', 'Yuuki_Shinonome', 'akskqn12', '2017-07-27 09:41:40', 'success');

-- --------------------------------------------------------

--
-- 테이블 구조 `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `f_ip` text CHARACTER SET latin1 NOT NULL,
  `f_name` varchar(20) CHARACTER SET latin1 NOT NULL,
  `f_adddate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `f_contents` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=euckr;

-- --------------------------------------------------------

--
-- 테이블 구조 `playerobjects`
--

CREATE TABLE `playerobjects` (
  `object_id` int(10) UNSIGNED NOT NULL,
  `owner_name` varchar(32) NOT NULL,
  `modelid` int(10) DEFAULT NULL,
  `object_x` float DEFAULT NULL,
  `object_y` float DEFAULT NULL,
  `object_z` float DEFAULT NULL,
  `object_rx` float DEFAULT NULL,
  `object_ry` float DEFAULT NULL,
  `object_rz` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `playerobjects`
--

INSERT INTO `playerobjects` (`object_id`, `owner_name`, `modelid`, `object_x`, `object_y`, `object_z`, `object_rx`, `object_ry`, `object_rz`) VALUES
(1, 'Harry_Winks', 15257, -2112.05, -852.769, 31.6172, 0, 0, -83.1),
(2, 'Harry_Winks', 15239, -2036.26, -715.468, 31.0434, 0, 0, 0),
(3, 'Harry_Winks', 19632, -2032.3, -716.524, 31.0034, 0, 0, 61),
(4, 'Harry_Winks', 15167, -2031.76, -719.322, 30.8734, 0, 0, 37),
(5, 'Harry_Winks', 15257, -2030.23, -716.629, 31.2634, 0, 0, -64.1),
(6, 'Harry_Winks', 15117, -2028.2, -714.189, 31.0734, 0, 0, 89.1),
(7, 'Harry_Winks', 15119, -2032.35, -719.368, 31.0628, 0, 0, 66.9);

-- --------------------------------------------------------

--
-- 테이블 구조 `players`
--

CREATE TABLE `players` (
  `p_id` int(10) UNSIGNED NOT NULL,
  `p_name` varchar(32) DEFAULT NULL,
  `p_password` varchar(64) DEFAULT NULL,
  `p_ammo` int(10) DEFAULT '0',
  `p_reload` int(10) DEFAULT '0',
  `p_weapontype` int(10) DEFAULT '0',
  `p_posx` float DEFAULT '0',
  `p_posy` float DEFAULT '0',
  `p_posz` float DEFAULT '0',
  `p_skin` int(10) DEFAULT '0',
  `p_interior` int(10) DEFAULT '0',
  `p_vw` int(10) DEFAULT '0',
  `p_health` float DEFAULT '0',
  `p_tutorial` int(10) DEFAULT '0',
  `p_race` int(10) DEFAULT '0',
  `p_gender` int(10) DEFAULT '0',
  `p_group` int(10) DEFAULT '0',
  `p_dise` int(10) DEFAULT '0',
  `p_quest` int(10) DEFAULT '0',
  `p_bleeding` int(10) DEFAULT '0',
  `p_hunger` int(10) DEFAULT '0',
  `p_thirst` int(10) DEFAULT '0',
  `p_keys` int(10) DEFAULT '0',
  `p_bullet` int(10) DEFAULT '0',
  `p_weaponsecondary` int(10) DEFAULT '0',
  `p_nicolasmission1` int(10) DEFAULT '0',
  `p_nicolasmission2` int(10) DEFAULT '0',
  `p_davemission1` int(10) DEFAULT '0',
  `p_davemission2` int(10) DEFAULT '0',
  `p_gas` int(10) DEFAULT '0',
  `p_mail` varchar(64) DEFAULT '0',
  `p_zombiekills` int(10) DEFAULT '0',
  `p_hours` int(10) DEFAULT '0',
  `p_minute` int(10) DEFAULT '0',
  `p_second` int(10) DEFAULT '0',
  `p_orga` int(10) DEFAULT '0',
  `areaIndex` int(10) NOT NULL DEFAULT '-1',
  `p_bagtype` varchar(20) CHARACTER SET utf8 DEFAULT '0',
  `item_0` int(10) DEFAULT '0',
  `item_1` int(10) DEFAULT '0',
  `item_2` int(10) DEFAULT '0',
  `item_3` int(10) DEFAULT '0',
  `item_4` int(10) DEFAULT '0',
  `item_5` int(10) DEFAULT '0',
  `item_6` int(10) DEFAULT '0',
  `item_7` int(10) DEFAULT '0',
  `item_8` int(10) DEFAULT '0',
  `item_9` int(10) DEFAULT '0',
  `item_10` int(10) DEFAULT '0',
  `item_11` int(10) DEFAULT '0',
  `item_12` int(10) DEFAULT '0',
  `item_13` int(10) DEFAULT '0',
  `item_14` int(10) DEFAULT '0',
  `item_15` int(10) DEFAULT '0',
  `item_16` int(10) DEFAULT '0',
  `item_17` int(10) DEFAULT '0',
  `item_18` int(10) DEFAULT '0',
  `item_19` int(10) DEFAULT '0',
  `item_20` int(10) DEFAULT '0',
  `item_21` int(10) DEFAULT '0',
  `item_22` int(10) DEFAULT '0',
  `item_23` int(10) DEFAULT '0',
  `item_24` int(10) DEFAULT '0',
  `item_25` int(10) DEFAULT '0',
  `item_26` int(10) DEFAULT '0',
  `item_27` int(10) DEFAULT '0',
  `item_28` int(10) DEFAULT '0',
  `p_firstweb` int(10) NOT NULL DEFAULT '0',
  `p_admin` int(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- 테이블의 덤프 데이터 `players`
--

INSERT INTO `players` (`p_id`, `p_name`, `p_password`, `p_ammo`, `p_reload`, `p_weapontype`, `p_posx`, `p_posy`, `p_posz`, `p_skin`, `p_interior`, `p_vw`, `p_health`, `p_tutorial`, `p_race`, `p_gender`, `p_group`, `p_dise`, `p_quest`, `p_bleeding`, `p_hunger`, `p_thirst`, `p_keys`, `p_bullet`, `p_weaponsecondary`, `p_nicolasmission1`, `p_nicolasmission2`, `p_davemission1`, `p_davemission2`, `p_gas`, `p_mail`, `p_zombiekills`, `p_hours`, `p_minute`, `p_second`, `p_orga`, `areaIndex`, `p_bagtype`, `item_0`, `item_1`, `item_2`, `item_3`, `item_4`, `item_5`, `item_6`, `item_7`, `item_8`, `item_9`, `item_10`, `item_11`, `item_12`, `item_13`, `item_14`, `item_15`, `item_16`, `item_17`, `item_18`, `item_19`, `item_20`, `item_21`, `item_22`, `item_23`, `item_24`, `item_25`, `item_26`, `item_27`, `item_28`, `p_firstweb`, `p_admin`) VALUES
(62, 'Harry_Winks', 'c8837b23ff8aaa8a2dde915473ce0991', 4, 250, 1, -2092.58, -830.109, 32.172, 41, 0, 0, 100, 1, 0, 2, 0, 0, 5, 0, 100, 100, 0, 3998644, 0, 0, 0, 0, 0, 0, 'NULL', 64, 2, 50, 34, 0, -1, '기본 가방', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(63, 'Mingeun_Kim', 'c8837b23ff8aaa8a2dde915473ce0991', 4, 250, 12, -2115.66, -853.548, 32.187, 41, 0, 0, 100, 1, 0, 2, 0, 0, 1, 0, 100, 100, 0, 7, 0, 0, 0, 0, 0, 0, 'NULL', 16, 0, 14, 42, 0, -1, '기본 가방', 6, 7, 1, 2, 3, 55, 11, 12, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 0, 0),
(60, 'Carson_Timothy', '81dc9bdb52d04dc20036dbd8313ed055', 4, 182, 0, -2080.03, -847.444, 32.172, 41, 0, 0, 100.04, 1, 0, 2, 0, 0, 5, 0, 100, 100, 0, 0, 0, 0, 0, 0, 0, 0, 'NULL', 94, 0, 42, 43, 0, -1, '기본 가방', 0, 0, 0, 0, 0, 0, 1, 0, 0, 299, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(59, 'Dominic_Kakau', '5633c1b0c58ea1bdd19f02c37da66ad8', 16, 18, 12, -2019.9, -731.297, 32.172, 42, 0, 0, 100.4, 1, 0, 1, 0, 0, 5, 0, 100, 100, 351, 162, 17, 0, 0, 0, 1, 0, 'NULL', 279, 1, 36, 32, 0, -1, '기본 가방', 7, 2, 7, 0, 0, 1, 1, 0, 23, 1, 57, 24, 23, 22, 19, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, 'Heywood_Alex', '8c32d9133dcbbafb6348f31a3bba1d37', 4, 0, 0, -2136.03, -883.828, 32.226, 8, 0, 0, 100, 1, 0, 1, 0, 0, 5, 0, 100, 100, 0, 0, 17, 0, 1, 0, 0, 0, 'NULL', 174, 1, 15, 42, 0, -1, '기본 가방', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
(64, 'Gelico_Crobeil', '06b87c9e02de2d5cf9dda1d3a42e089e', 3, 250, 0, -2084.48, -851.154, 32.172, 8, 0, 0, 100.04, 1, 0, 1, 0, 0, 5, 0, 100, 100, 0, 13, 0, 0, 0, 0, 0, 0, 'NULL', 31, 0, 23, 9, 0, -1, '기본 가방', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
(65, 'Scott_Pilgrim', 'a4e7fa7a7019f8796ee59bdffa703bcf', 15, 75, 11, -1540.84, 760.544, 7.039, 29, 0, 2, 10000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'NULL', 0, 0, 0, 0, 0, -1, '기본 가방', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
(66, 'Bonchan_Gu', 'dbebe943c1b87cc5b530a02adaa2cd3e', 0, 0, -1, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, -1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
(67, 'Garnire_Mac', 'c62d929e7b7e7b6165923a5dfc60cb56', 0, 0, -1, -2101.91, -831.526, 32.172, 41, 0, 0, 100, 1, 0, 2, 0, 0, 2, 0, 100, 100, 0, 0, 0, 0, 0, 0, 0, 0, 'NULL', 3, 0, 3, 51, 0, -1, '기본 가방', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
(68, 'Test_Tested', '827ccb0eea8a706c4c34a16891f84e7b', 15, 75, 11, -1541.76, 759.571, 7.039, 29, 0, 1, 10000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'NULL', 6, 0, 0, 0, 0, -1, '기본 가방', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
(69, 'fwef_tested', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, -1, -1515.99, 698.542, 30.521, 29, 0, 1, 10000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'NULL', 0, 0, 0, 0, 0, -1, '기본 가방', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
(70, 'Klaus_Poppe', '568ab747778bcf2348c5664c1462f87a', 0, 0, -1, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, -1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
(71, 'Chloe_Park', '7f141cf8e7136ce8701dc6636c2a6fe4', 15, 54, 11, -1847.95, 425.989, 17.375, 29, 0, 3, 10000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'NULL', 3, 0, 0, 0, 0, -1, '기본 가방', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(72, 'Johnny_Sack', 'b557bb7fc92bbd41672e9cb19efd602e', 0, 0, -1, -1515.99, 698.542, 30.521, 29, 0, 1, 10000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'NULL', 0, 0, 0, 0, 0, -1, '기본 가방', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
(73, 'Yong_One', '5013b3e7462d4bbc4e9da59bbcd9d360', 0, 0, -1, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, -1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
(74, 'Daniel_Jones', '90e9456560eed84e544169fdd574e6ad', 10, 75, 11, -2115.89, -786.122, 32.427, 29, 0, 2, 10000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'NULL', 3, 0, 0, 0, 0, -1, '기본 가방', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(75, 'Kent_Kim', '1ecdec353419f6d7e30857d00d0312d1', 0, 0, -1, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, -1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
(76, 'Dwany_Johnson', 'ae9684c68a1ff7cbf8b3889a28936d20', 0, 0, -1, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, -1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
(77, 'wefwef_wefwef', '827ccb0eea8a706c4c34a16891f84e7b', 5, 71, 11, -1904.19, 720.691, 45.388, 29, 0, 2, 10000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'NULL', 3, 0, 0, 0, 0, -1, '기본 가방', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(79, 'Vandroos_Luther', '13baa6503e89dcd74a6767a851c1f220', 6, 14, 9, -2065.25, -862.618, 32.391, 266, 0, 0, 100, 1, 0, 1, 0, 0, 5, 0, 100, 100, 416, 23, 0, 0, 1, 0, 0, 0, 'NULL', 411, 353, 55, 50, 2, -1, '기본 가방', 15, 0, 0, 0, 0, 0, 0, 20, 15, 11, 39, 12, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(78, 'Danny_Brown', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 11, 50, 50, 50, 29, 0, 1, 10000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'NULL', 4, 0, 0, 0, 0, -1, '기본 가방', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(80, 'Samuel_Walter', 'bfd59291e825b5f2bbf1eb76569f8fe7', 4, 250, 0, -2100.81, -828.549, 32.49, 8, 0, 0, 100, 1, 0, 1, 0, 0, 5, 0, 100, 100, 345, 23, 0, 0, 0, 0, 0, 0, 'NULL', 53, 1, 13, 26, 0, -1, '기본 가방', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(81, 'Dan_Joruran', '827ccb0eea8a706c4c34a16891f84e7b', 13, 36, 11, -1903.19, 719.232, 45.297, 29, 0, 2, 10000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'NULL', 3, 0, 0, 0, 0, -1, '기본 가방', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(82, 'Dan_Jorura', '827ccb0eea8a706c4c34a16891f84e7b', 4, 246, 0, -2059.24, -917.327, 32.18, 42, 0, 0, 100.16, 1, 0, 1, 0, 0, 5, 0, 100, 100, 46, 0, 0, 0, 0, 0, 0, 0, 'NULL', 28, 0, 25, 35, 0, -1, '기본 가방', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(83, 'Yuuki_Shinonome', 'bef7766413f5304c8447f4bc37b2e82e', 16, 43, 12, -1729.42, 764.352, 24.892, 41, 0, 0, 100.5, 1, 0, 2, 0, 0, 5, 0, 100, 100, 58, 0, 0, 0, 1, 1, 1, 0, 'NULL', 135, 1, 8, 3, 0, -1, '기본 가방', 0, 0, 5, 0, 0, 1, 1, 0, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
(85, 'Guman_Ship', '5013b3e7462d4bbc4e9da59bbcd9d360', 3, 262, 0, -1722.53, 763.136, 24.891, 42, 0, 0, 100.68, 1, 0, 1, 0, 0, 5, 0, 100, 100, 69, 0, 0, 0, 0, 0, 0, 0, 'NULL', 60, 0, 33, 46, 0, -1, '기본 가방', 4, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 15, 14, 18, 14, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(84, 'Daniel_Jone', 'f6122d42022d849e3a3ed3233b4ff746', 0, 0, -1, -2085.2, -818.821, 72.464, 42, 0, 0, 100, 1, 0, 1, 0, 0, 0, 0, 100, 100, 0, 0, 0, 0, 0, 0, 0, 0, 'NULL', 4, 0, 1, 25, 0, -1, '기본 가방', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(86, 'Quvenzhane_Wallis', '1373b284bc381890049e92d324f56de0', 15, 56, 11, 50, 50, 50, 29, 0, 5, 10000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'NULL', 9, 0, 0, 0, 0, -1, '기본 가방', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(87, 'David_Admon', '827ccb0eea8a706c4c34a16891f84e7b', 16, 22, 12, -2817.51, -1800.89, 139.196, 8, 0, 0, 100, 1, 0, 1, 0, 0, 5, 0, 100, 100, 79, 41, 0, 0, 0, 0, 0, 0, 'NULL', 520, 0, 44, 19, 0, -1, '기본 가방', 0, 0, 5, 0, 0, 1, 0, 0, 3, 0, 0, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(88, 'Tabuloce_Doveking', 'ce5140df15d046a66883807d18d0264b', 0, 0, 11, -2922.78, 518.596, -0.908, 29, 0, 1, 9997.36, 0, 0, 0, 0, 0, 5, 0, 0, 20, 0, 0, 0, 0, 0, 0, 0, 0, 'NULL', 16, 0, 0, 0, 0, -1, '기본 가방', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(89, 'Jimmy_Kingston', 'ce5140df15d046a66883807d18d0264b', 15, 75, 11, -1541.22, 760.088, 7.039, 29, 0, 1, 10000, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'NULL', 0, 0, 0, 0, 0, -1, '기본 가방', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(90, 'Samuel_Braddock', 'bfd59291e825b5f2bbf1eb76569f8fe7', 0, 0, -1, 477.755, 144.536, 18.887, 8, 11, 0, 100, 1, 0, 1, 0, 0, 5, 0, 100, 100, 0, 0, 0, 0, 0, 0, 0, 0, 'NULL', 0, 0, 13, 40, 0, -1, '기본 가방', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(91, 'Dokgo_Sin', '1641fc696374fa0942b1f20148e06ce8', 4, 250, 0, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, -1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
(92, 'Tabuloce_Kingston', 'ce5140df15d046a66883807d18d0264b', 0, 0, -1, -2071.05, -711.639, 32.187, 42, 0, 0, -1.32, 1, 0, 1, 0, 0, 2, 0, 100, 100, 0, 0, 0, 0, 0, 0, 0, 0, 'NULL', 4, 0, 7, 15, 0, -1, '기본 가방', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(95, 'Prince_Jess', 'c8837b23ff8aaa8a2dde915473ce0991', 40, 500, 4, -1954.61, 525.484, 9.98, 145, 0, 1, 100, 1, 0, 2, 0, 0, 5, 0, 100, 100, 0, 0, -1, 0, 0, 0, 0, 0, 'NULL', 45, 14, 59, 53, 0, -1, '기본 가방', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(93, 'Michael_Cudlitz', '962012d09b8170d912f0669f6d7d9d07', 0, 0, -1, -2085.2, -818.821, 72.164, 8, 0, 0, 100, 1, 0, 1, 0, 0, 2, 0, 100, 100, 0, 0, 0, 0, 0, 0, 0, 0, 'NULL', 4, 0, 6, 41, 0, -1, '기본 가방', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(94, 'Bono_Killing', '408b7c8ad06e4d9954fa2d948a01f508', 3, 250, 0, -1995.72, -725.066, 32.164, 8, 0, 0, 100.8, 1, 0, 1, 0, 0, 5, 0, 100, 100, 0, 6, 0, 0, 0, 0, 0, 0, 'NULL', 31, 0, 20, 37, 0, -1, '기본 가방', 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(96, 'Carl_Jason', '60298801296d2a9919a6c65db54949b2', 4, 187, 0, -2108.47, -857.395, 35.128, 15, 0, 0, 100, 1, 0, 1, 0, 0, 5, 0, 100, 100, 0, 0, 0, 0, 0, 0, 0, 0, '0', 66, 1557, 4, 20, 1, -1, '기본 가방', 8, 0, 1, 0, 0, 0, 0, 0, 29, 22, 0, 0, 11, 0, 7, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(97, 'Roh_JJang', 'bc3c02b188cdd008d64ab42a1ac17440', 0, 0, -1, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, -1, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 테이블 구조 `webalarm`
--

CREATE TABLE `webalarm` (
  `xid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `webalarm`
--

INSERT INTO `webalarm` (`xid`, `title`, `url`, `date`) VALUES
(1, '서버 긴급점검', 'http://cafe.daum.net/WarZ/dvTf/66', '2017.04.15 21:41'),
(2, '인포웹 정상 구동', '인포웹 안정화가 되었습니다.', '2017.04.16 15:00');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`p_name`);

--
-- 테이블의 인덱스 `connectLog`
--
ALTER TABLE `connectLog`
  ADD PRIMARY KEY (`xid`);

--
-- 테이블의 인덱스 `playerobjects`
--
ALTER TABLE `playerobjects`
  ADD PRIMARY KEY (`object_id`);

--
-- 테이블의 인덱스 `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`p_id`);

--
-- 테이블의 인덱스 `webalarm`
--
ALTER TABLE `webalarm`
  ADD PRIMARY KEY (`xid`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `connectLog`
--
ALTER TABLE `connectLog`
  MODIFY `xid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
--
-- 테이블의 AUTO_INCREMENT `playerobjects`
--
ALTER TABLE `playerobjects`
  MODIFY `object_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 테이블의 AUTO_INCREMENT `players`
--
ALTER TABLE `players`
  MODIFY `p_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- 테이블의 AUTO_INCREMENT `webalarm`
--
ALTER TABLE `webalarm`
  MODIFY `xid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
