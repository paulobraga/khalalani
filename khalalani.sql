-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2013 at 08:32 AM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `khalalani`
--

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=184 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 330),
(2, 1, NULL, NULL, 'Branches', 2, 13),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 1, NULL, NULL, 'Categories', 14, 25),
(9, 8, NULL, NULL, 'index', 15, 16),
(10, 8, NULL, NULL, 'view', 17, 18),
(11, 8, NULL, NULL, 'add', 19, 20),
(12, 8, NULL, NULL, 'edit', 21, 22),
(13, 8, NULL, NULL, 'delete', 23, 24),
(14, 1, NULL, NULL, 'Cities', 26, 37),
(15, 14, NULL, NULL, 'index', 27, 28),
(16, 14, NULL, NULL, 'view', 29, 30),
(17, 14, NULL, NULL, 'add', 31, 32),
(18, 14, NULL, NULL, 'edit', 33, 34),
(19, 14, NULL, NULL, 'delete', 35, 36),
(20, 1, NULL, NULL, 'CompaniesCategories', 38, 49),
(21, 20, NULL, NULL, 'index', 39, 40),
(22, 20, NULL, NULL, 'view', 41, 42),
(23, 20, NULL, NULL, 'add', 43, 44),
(24, 20, NULL, NULL, 'edit', 45, 46),
(25, 20, NULL, NULL, 'delete', 47, 48),
(26, 1, NULL, NULL, 'Companies', 50, 63),
(27, 26, NULL, NULL, 'index', 51, 52),
(28, 26, NULL, NULL, 'view', 53, 54),
(29, 26, NULL, NULL, 'add', 55, 56),
(30, 26, NULL, NULL, 'edit', 57, 58),
(31, 26, NULL, NULL, 'delete', 59, 60),
(38, 1, NULL, NULL, 'ComplaintCategories', 64, 77),
(39, 38, NULL, NULL, 'index', 65, 66),
(40, 38, NULL, NULL, 'view', 67, 68),
(41, 38, NULL, NULL, 'add', 69, 70),
(42, 38, NULL, NULL, 'edit', 71, 72),
(43, 38, NULL, NULL, 'delete', 73, 74),
(50, 1, NULL, NULL, 'Complaints', 78, 93),
(51, 50, NULL, NULL, 'index', 79, 80),
(52, 50, NULL, NULL, 'view', 81, 82),
(53, 50, NULL, NULL, 'add', 83, 84),
(54, 50, NULL, NULL, 'edit', 85, 86),
(55, 50, NULL, NULL, 'delete', 87, 88),
(62, 1, NULL, NULL, 'Consumers', 94, 105),
(63, 62, NULL, NULL, 'index', 95, 96),
(64, 62, NULL, NULL, 'view', 97, 98),
(65, 62, NULL, NULL, 'add', 99, 100),
(66, 62, NULL, NULL, 'edit', 101, 102),
(67, 62, NULL, NULL, 'delete', 103, 104),
(68, 1, NULL, NULL, 'Groups', 106, 117),
(69, 68, NULL, NULL, 'index', 107, 108),
(70, 68, NULL, NULL, 'view', 109, 110),
(71, 68, NULL, NULL, 'add', 111, 112),
(72, 68, NULL, NULL, 'edit', 113, 114),
(73, 68, NULL, NULL, 'delete', 115, 116),
(74, 1, NULL, NULL, 'Managers', 118, 129),
(75, 74, NULL, NULL, 'index', 119, 120),
(76, 74, NULL, NULL, 'view', 121, 122),
(77, 74, NULL, NULL, 'add', 123, 124),
(78, 74, NULL, NULL, 'edit', 125, 126),
(79, 74, NULL, NULL, 'delete', 127, 128),
(80, 1, NULL, NULL, 'Nationalities', 130, 141),
(81, 80, NULL, NULL, 'index', 131, 132),
(82, 80, NULL, NULL, 'view', 133, 134),
(83, 80, NULL, NULL, 'add', 135, 136),
(84, 80, NULL, NULL, 'edit', 137, 138),
(85, 80, NULL, NULL, 'delete', 139, 140),
(86, 1, NULL, NULL, 'Operators', 142, 155),
(87, 86, NULL, NULL, 'index', 143, 144),
(88, 86, NULL, NULL, 'view', 145, 146),
(89, 86, NULL, NULL, 'add', 147, 148),
(90, 86, NULL, NULL, 'edit', 149, 150),
(91, 86, NULL, NULL, 'delete', 151, 152),
(92, 1, NULL, NULL, 'Pages', 156, 165),
(93, 92, NULL, NULL, 'display', 157, 158),
(94, 1, NULL, NULL, 'Provinces', 166, 177),
(95, 94, NULL, NULL, 'index', 167, 168),
(96, 94, NULL, NULL, 'view', 169, 170),
(97, 94, NULL, NULL, 'add', 171, 172),
(98, 94, NULL, NULL, 'edit', 173, 174),
(99, 94, NULL, NULL, 'delete', 175, 176),
(100, 1, NULL, NULL, 'Users', 178, 197),
(101, 100, NULL, NULL, 'index', 179, 180),
(102, 100, NULL, NULL, 'view', 181, 182),
(103, 100, NULL, NULL, 'add', 183, 184),
(104, 100, NULL, NULL, 'edit', 185, 186),
(105, 100, NULL, NULL, 'delete', 187, 188),
(106, 100, NULL, NULL, 'login', 189, 190),
(107, 100, NULL, NULL, 'logout', 191, 192),
(108, 1, NULL, NULL, 'AclExtras', 198, 199),
(109, 1, NULL, NULL, 'DebugKit', 200, 207),
(110, 109, NULL, NULL, 'ToolbarAccess', 201, 206),
(111, 110, NULL, NULL, 'history_state', 202, 203),
(112, 110, NULL, NULL, 'sql_explain', 204, 205),
(113, 100, NULL, NULL, 'changePassword', 193, 194),
(114, 92, NULL, NULL, 'dashboard', 159, 160),
(115, 100, NULL, NULL, 'selectUserRole', 195, 196),
(116, 1, NULL, NULL, 'Upload', 208, 209),
(117, 1, NULL, NULL, 'ComplaintComments', 210, 221),
(118, 117, NULL, NULL, 'index', 211, 212),
(119, 117, NULL, NULL, 'view', 213, 214),
(120, 117, NULL, NULL, 'add', 215, 216),
(121, 117, NULL, NULL, 'edit', 217, 218),
(122, 117, NULL, NULL, 'delete', 219, 220),
(123, 1, NULL, NULL, 'ComplaintLikes', 222, 233),
(124, 123, NULL, NULL, 'index', 223, 224),
(125, 123, NULL, NULL, 'view', 225, 226),
(126, 123, NULL, NULL, 'add', 227, 228),
(127, 123, NULL, NULL, 'edit', 229, 230),
(128, 123, NULL, NULL, 'delete', 231, 232),
(129, 1, NULL, NULL, 'ContactDetails', 234, 245),
(130, 129, NULL, NULL, 'index', 235, 236),
(131, 129, NULL, NULL, 'view', 237, 238),
(132, 129, NULL, NULL, 'add', 239, 240),
(133, 129, NULL, NULL, 'edit', 241, 242),
(134, 129, NULL, NULL, 'delete', 243, 244),
(135, 1, NULL, NULL, 'Countries', 246, 257),
(136, 135, NULL, NULL, 'index', 247, 248),
(137, 135, NULL, NULL, 'view', 249, 250),
(138, 135, NULL, NULL, 'add', 251, 252),
(139, 135, NULL, NULL, 'edit', 253, 254),
(140, 135, NULL, NULL, 'delete', 255, 256),
(141, 1, NULL, NULL, 'Courses', 258, 269),
(142, 141, NULL, NULL, 'index', 259, 260),
(143, 141, NULL, NULL, 'view', 261, 262),
(144, 141, NULL, NULL, 'add', 263, 264),
(145, 141, NULL, NULL, 'edit', 265, 266),
(146, 141, NULL, NULL, 'delete', 267, 268),
(147, 1, NULL, NULL, 'EducationDetails', 270, 281),
(148, 147, NULL, NULL, 'index', 271, 272),
(149, 147, NULL, NULL, 'view', 273, 274),
(150, 147, NULL, NULL, 'add', 275, 276),
(151, 147, NULL, NULL, 'edit', 277, 278),
(152, 147, NULL, NULL, 'delete', 279, 280),
(153, 1, NULL, NULL, 'Levels', 282, 293),
(154, 153, NULL, NULL, 'index', 283, 284),
(155, 153, NULL, NULL, 'view', 285, 286),
(156, 153, NULL, NULL, 'add', 287, 288),
(157, 153, NULL, NULL, 'edit', 289, 290),
(158, 153, NULL, NULL, 'delete', 291, 292),
(159, 1, NULL, NULL, 'PersonalDetails', 294, 305),
(160, 159, NULL, NULL, 'index', 295, 296),
(161, 159, NULL, NULL, 'view', 297, 298),
(162, 159, NULL, NULL, 'add', 299, 300),
(163, 159, NULL, NULL, 'edit', 301, 302),
(164, 159, NULL, NULL, 'delete', 303, 304),
(165, 1, NULL, NULL, 'MaritalStatuses', 306, 317),
(166, 165, NULL, NULL, 'index', 307, 308),
(167, 165, NULL, NULL, 'view', 309, 310),
(168, 165, NULL, NULL, 'add', 311, 312),
(169, 165, NULL, NULL, 'edit', 313, 314),
(170, 165, NULL, NULL, 'delete', 315, 316),
(171, 1, NULL, NULL, 'CompanyLikes', 318, 329),
(172, 171, NULL, NULL, 'index', 319, 320),
(173, 171, NULL, NULL, 'view', 321, 322),
(174, 171, NULL, NULL, 'add', 323, 324),
(175, 171, NULL, NULL, 'edit', 325, 326),
(176, 171, NULL, NULL, 'delete', 327, 328),
(177, 26, NULL, NULL, 'selectCompany', 61, 62),
(178, 86, NULL, NULL, 'listByCompanyId', 153, 154),
(179, 92, NULL, NULL, 'dashboard_by_company_id', 161, 162),
(180, 50, NULL, NULL, 'listByCompanyId', 89, 90),
(181, 38, NULL, NULL, 'listByCompanyId', 75, 76),
(182, 92, NULL, NULL, 'consumer_dashboard', 163, 164),
(183, 50, NULL, NULL, 'listByConsumerId', 91, 92);

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 2),
(2, NULL, 'Group', 2, NULL, 3, 4),
(3, NULL, 'Group', 3, NULL, 5, 6),
(4, NULL, 'Group', 4, NULL, 7, 8);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 3, 1, '1', '1', '1', '1'),
(3, 2, 1, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `province_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created`, `modified`) VALUES
(1, 'Provedor de ServiÃ§os de Internet', '', '2013-10-26 18:36:37', '2013-10-26 18:36:37'),
(2, 'Operadora de Telefonia MÃ³vel', '', '2013-10-26 18:36:59', '2013-10-26 18:36:59'),
(4, 'Loja Virtual', '', '2013-11-02 19:58:39', '2013-11-02 19:58:39'),
(5, 'Transporte', '', '2013-11-04 19:33:40', '2013-11-04 19:33:40'),
(6, 'ComunicaÃ§ao', '', '2013-11-04 19:38:14', '2013-11-04 19:38:14'),
(7, 'Restaurante', '', '2013-11-04 19:40:52', '2013-11-04 19:40:52'),
(9, 'ImobiliÃ¡ria', '', '2013-11-04 19:51:57', '2013-11-04 19:51:57');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `province_id` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `province_id`, `name`, `created`, `modified`) VALUES
(1, 1, 'Beira', NULL, NULL),
(2, 2, 'Maputo', NULL, NULL),
(3, 3, 'Lichinga', '2013-10-31 08:12:55', '2013-10-31 08:12:55'),
(4, 1, 'Mafambisse', '2013-11-01 00:45:48', '2013-11-01 00:45:48');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `logo` varchar(45) DEFAULT NULL,
  `street_address` varchar(45) DEFAULT NULL,
  `website` varchar(45) DEFAULT NULL,
  `acronym` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `logo_dir` varchar(45) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `zipcode` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `email`, `logo`, `street_address`, `website`, `acronym`, `created`, `modified`, `status`, `logo_dir`, `country_id`, `province_id`, `city_id`, `zipcode`, `phone`, `mobile`, `fax`) VALUES
(2, 'TelecomunicaÃ§Ãµes de MoÃ§ambique', 'tdm@tdm.co.mz', '1003.png', NULL, 'http://www.tdm.mz', 'TDM', '2013-10-26 22:49:23', '2013-11-04 19:28:27', 1, '2', 1, 2, 2, '2132', '21322234', '823422343', '21324543'),
(4, 'MoÃ§ambique Celular, SARL', 'mcel@mcel.co.mz', '1000.png', NULL, 'http://www.mcel.mz', 'Mcel', '2013-10-26 23:19:32', '2013-10-26 23:19:32', 1, '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Vodacom', 'vodacom@vm.mz', '1001.png', NULL, 'http://www.vm.co.mz', 'Vodacom', '2013-10-27 02:32:13', '2013-11-04 11:49:27', 1, '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Xava', 'info@xava.co.mz', 'xava_logo114x114.png', 'Av. Ahmed Sekou TourÃ©', 'http://www.xava.co.mz', 'Xava', '2013-11-02 20:01:52', '2013-11-02 20:01:52', 1, '6', 1, 2, 2, '2102', '(+258) 21 333282/3', '826588481', '(+258) 21 021459');

-- --------------------------------------------------------

--
-- Table structure for table `companies_categories`
--

CREATE TABLE `companies_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `companies_categories`
--

INSERT INTO `companies_categories` (`id`, `company_id`, `category_id`, `created`, `modified`) VALUES
(9, 4, 1, NULL, NULL),
(10, 4, 2, NULL, NULL),
(11, 5, 1, NULL, NULL),
(13, 6, 4, NULL, NULL),
(14, 5, 2, NULL, NULL),
(15, 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company_likes`
--

CREATE TABLE `company_likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `consumer_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `company_likes`
--

INSERT INTO `company_likes` (`id`, `company_id`, `consumer_id`, `created`) VALUES
(10, 4, 1, '2013-11-02 14:40:34'),
(11, 6, 1, '2013-11-02 20:02:12'),
(13, 2, 1, '2013-11-04 12:14:37'),
(18, 5, 2, '2013-11-06 05:04:06'),
(19, 4, 2, '2013-11-06 07:49:06');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `consumer_id` int(11) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `review` text,
  `description` text,
  `created` datetime DEFAULT NULL,
  `privacy` int(11) DEFAULT NULL,
  `allow_comments` int(11) DEFAULT NULL,
  `subject` varchar(45) DEFAULT NULL,
  `complaint_category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `company_id`, `consumer_id`, `status`, `rate`, `review`, `description`, `created`, `privacy`, `allow_comments`, `subject`, `complaint_category_id`) VALUES
(1, 6, 2, '0', NULL, '', 'Boa noite. venho por este meio informar que nao recebi o email apÃ³s efectuar a compra de uma recarga de 1000 meticais. comprei atravÃ©s da aplicaÃ§Ã£o para iOS. porfavor peÃ§o que mandem o email com a recarga pois tambÃ©m nao consta na lista de recargas compradas.', '2013-11-02 23:03:39', NULL, NULL, 'NÃ£o recebi o email apÃ³s comprar a recarga i', 7),
(4, 4, 2, '1', NULL, '', 'Nao consigo recarregar meu crÃ©dito, nao sei o que se passa, tenho rede e tudo, todos que conheÃ§o que usam mcel conseguem recarregar o crÃ©dito, mas eu nao estou a conseguir, jÃ¡ liguei para a linha do cliente mas ninguÃ©m resolve o problema. por favor peÃ§o que resolvam.', '2013-11-03 00:23:14', NULL, NULL, 'Nao consigo recarregar crÃ©dito', 4);

-- --------------------------------------------------------

--
-- Table structure for table `complaint_categories`
--

CREATE TABLE `complaint_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `complaint_categories`
--

INSERT INTO `complaint_categories` (`id`, `company_id`, `name`, `created`, `modified`) VALUES
(1, 2, 'Geral', '2013-11-02 16:09:51', '2013-11-02 16:09:51'),
(3, 2, 'Mau Atendimento', '2013-11-02 22:50:22', '2013-11-02 22:50:22'),
(4, 4, 'Geral', '2013-11-02 22:52:14', '2013-11-02 22:52:14'),
(5, 4, 'Mau Atendimento', '2013-11-02 22:52:22', '2013-11-02 22:52:22'),
(6, 6, 'Geral', '2013-11-02 23:00:47', '2013-11-02 23:00:47'),
(7, 6, 'Compra de Recarga', '2013-11-02 23:01:31', '2013-11-02 23:01:31'),
(8, 2, 'Falta de Sinal', '2013-11-04 08:08:22', '2013-11-04 08:08:22'),
(9, 2, 'OscilaÃ§Ã£o do Sinal', '2013-11-04 08:20:33', '2013-11-04 08:20:33'),
(10, 4, 'Falta de Sinal', '2013-11-04 09:52:45', '2013-11-04 09:52:45'),
(11, 4, 'Recarga InvÃ¡lida', '2013-11-04 09:59:22', '2013-11-04 09:59:22'),
(12, 5, 'Geral', '2013-11-04 11:38:32', '2013-11-04 11:38:32'),
(13, 5, 'Falta de Sinal', '2013-11-04 11:49:44', '2013-11-04 11:49:44'),
(14, 2, 'Falta de Respeito', '2013-11-04 12:12:58', '2013-11-04 12:12:58'),
(15, 5, 'Recarga InvÃ¡lida', '2013-11-06 05:03:54', '2013-11-06 05:03:54');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_comments`
--

CREATE TABLE `complaint_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `comment` text,
  `created` varchar(45) DEFAULT NULL,
  `is_deleted` tinyint(4) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `complaint_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `complaint_likes`
--

CREATE TABLE `complaint_likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `complaint_id` int(11) DEFAULT NULL,
  `consumer_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `consumers`
--

CREATE TABLE `consumers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `consumers`
--

INSERT INTO `consumers` (`id`, `user_id`, `created`, `modified`) VALUES
(1, 1, '2013-10-31 00:00:00', '2013-10-31 00:00:00'),
(2, 4, '2013-10-31 00:00:00', '2013-10-31 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `address_street` varchar(45) DEFAULT NULL,
  `zipcode` varchar(45) DEFAULT NULL,
  `home_telephone` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `personal_email` varchar(45) DEFAULT NULL,
  `work_email` varchar(45) DEFAULT NULL,
  `other_email` varchar(45) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `country_id`, `province_id`, `city_id`, `address_street`, `zipcode`, `home_telephone`, `mobile`, `personal_email`, `work_email`, `other_email`, `user_id`) VALUES
(1, 1, 2, 2, 'Av. Eduardo Mondlane', '', '', '+258826588481', 'paulo.b33@gmail.com', 'pbraga@millpaginas.com', 'paulo.zacarias@uem.ac.mz', 1),
(2, 1, 2, 2, 'Jardim No 1211', '1211', '', '', 'uacheuache@gmail.com', '', 'jordao.uache@uem.ac.mz', 2),
(3, 1, 2, 2, 'Av. Eduardo Mondlane No 1547', '1547', '2109399', '826588481', 'paulo.b33@gmail.com', 'pbraga@millpaginas.com', 'paulo.zacarias@uem.ac.mz', 4);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created`, `modified`) VALUES
(1, 'MoÃ§ambique', NULL, NULL),
(2, 'Brasil', '2013-11-04 08:33:47', '2013-11-04 08:33:47'),
(3, 'Angola', '2013-11-04 08:46:40', '2013-11-04 08:46:40'),
(4, 'Portugal', '2013-11-04 08:48:05', '2013-11-04 08:48:05'),
(5, 'Malawi', '2013-11-04 08:50:30', '2013-11-04 08:50:30');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `created`, `modified`) VALUES
(1, 'InformÃ¡tica', NULL, '2013-10-27 23:00:52'),
(2, 'GestÃ£o de Empresas', '2013-10-31 08:13:23', '2013-10-31 08:13:23'),
(3, 'Contabilidade e Auditoria', '2013-10-31 08:13:37', '2013-10-31 08:13:37'),
(4, 'Medicina', '2013-10-31 08:13:50', '2013-10-31 08:13:50');

-- --------------------------------------------------------

--
-- Table structure for table `education_details`
--

CREATE TABLE `education_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `education_details`
--

INSERT INTO `education_details` (`id`, `level_id`, `course_id`, `country_id`, `user_id`) VALUES
(1, 2, 1, 1, '1'),
(2, 2, 1, 1, '2'),
(3, 3, 1, 1, '4');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'System Administrator', '2013-10-17 01:10:25', '2013-10-17 01:10:25'),
(2, 'Consumer', '2013-10-27 16:38:54', '2013-10-27 16:38:54'),
(3, 'Company Manager', '2013-10-27 16:39:06', '2013-10-29 22:40:38'),
(4, 'Operator', '2013-10-27 16:39:13', '2013-10-27 16:39:13');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `name`, `created`, `modified`) VALUES
(1, 'MÃ©dio', NULL, NULL),
(2, 'Licenciatura', NULL, NULL),
(3, 'Mestrado', NULL, NULL),
(4, 'PÃ³s-Graduado', NULL, NULL),
(5, 'Doutorado', NULL, NULL),
(6, 'CatedrÃ¡tico', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `user_id`, `company_id`, `start_date`, `end_date`) VALUES
(1, 2, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `marital_statuses`
--

CREATE TABLE `marital_statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `marital_statuses`
--

INSERT INTO `marital_statuses` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Solteiro', NULL, NULL),
(2, 'Casado', NULL, NULL),
(3, 'Divorciado', NULL, NULL),
(4, 'ViÃºvo', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nationalities`
--

CREATE TABLE `nationalities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `nationalities`
--

INSERT INTO `nationalities` (`id`, `name`, `created`, `modified`) VALUES
(1, 'MoÃ§ambicana', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `operators`
--

CREATE TABLE `operators` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `company_id` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `operators`
--

INSERT INTO `operators` (`id`, `user_id`, `company_id`, `created`, `modified`) VALUES
(1, 3, '6', '2013-11-05 15:25:36', '2013-11-05 15:33:47');

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `middle_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `gender` tinyint(4) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `marital_status_id` int(11) DEFAULT NULL,
  `nationality_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`id`, `first_name`, `middle_name`, `last_name`, `gender`, `birthday`, `marital_status_id`, `nationality_id`, `country_id`, `province_id`, `city_id`, `user_id`) VALUES
(1, 'Paulo', 'Jorge Braga', 'Zacarias', NULL, NULL, 1, 1, 1, 1, 1, 1),
(2, 'JordÃ£o', 'Joaquim', 'Uache', 1, '1993-11-04', 1, 1, 1, 2, 2, 2),
(3, 'Eude', 'Nota', 'Tsamba', 1, '2013-11-05', 1, 1, 1, 1, 1, 3),
(4, 'Paulo', '', 'Braga', 1, '2013-11-05', 1, 1, 1, 1, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `country_id` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`, `country_id`, `created`, `modified`) VALUES
(1, 'Sofala', '1', NULL, NULL),
(2, 'Maputo Cidade', '1', NULL, NULL),
(3, 'Niassa', '1', '2013-10-31 08:12:26', '2013-10-31 08:12:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(45) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `photo` varchar(45) DEFAULT NULL,
  `photo_dir` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `status`, `username`, `group_id`, `photo`, `photo_dir`, `created`, `modified`) VALUES
(1, 'cdc986c902be61d72e32d8bd08d5b35b8e77ddd9', 1, 'admin', 1, NULL, NULL, '2013-10-17 06:06:02', '2013-10-17 06:06:02'),
(2, 'bedf19d67e82fb56665373143b113acdbb9c3187', NULL, 'jordao.uache', 3, '', '', '2013-11-04 21:47:38', '2013-11-04 21:47:38'),
(3, 'f0c86afa3c2b1ae84da8d7369216fad8802ae7f6', 1, 'eude.tsamba', 4, '', '', '2013-11-05 15:24:55', '2013-11-05 15:24:55'),
(4, '36156a6647ad65eb9ac167170fe47a0a8a85eae5', 1, 'paulo.zacarias', 2, '', '', '2013-11-05 20:52:38', '2013-11-05 20:52:38');
