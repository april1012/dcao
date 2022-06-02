-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 01:51 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dcao`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `middlename`, `lastname`, `username`, `email`, `contact`, `password`, `image`) VALUES
(3, 'judilyn', '', 'Minguito', 'juds12', 'judilynminguito@gmail.com', 2147483647, 'b494885b1f4f3d7366d8c52f53b2686b', '5.webp');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `service_request` varchar(255) NOT NULL,
  `date_sched` datetime NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `username`, `firstname`, `middlename`, `lastname`, `email`, `contact`, `address`, `service_request`, `date_sched`, `date_created`) VALUES
(15, '', 'joric', 'ochavo', 'alianic', 'joric1262@gmail.com', 0, '6668 Howmart Rd., Baesa , Quezon City', 'New Assessment', '2022-05-24 02:29:00', '2022-05-24 02:29:21');

-- --------------------------------------------------------

--
-- Table structure for table `cancellation`
--

CREATE TABLE `cancellation` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `requestor` enum('Owner','Auth_rep') NOT NULL,
  `authorization_letter` enum('Yes','No') NOT NULL,
  `valid_id` enum('Yes','No') NOT NULL,
  `letter_request` enum('Yes','No') NOT NULL,
  `tax_declaration` enum('Yes','No') NOT NULL,
  `demolition_permit` enum('Yes','No') NOT NULL,
  `brgy_certificate` enum('Yes','No') NOT NULL,
  `c_pictures` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`) VALUES
(1, 'April Rose Ang', 'aprilang1234@gmail.com', 'Hello! Stay and have a great day.'),
(4, 'judilyn Minguito', 'minguitojudilyn@gmail.com', 'Hello guys!!'),
(5, 'Jamaica Palama', 'palamajamaica08@gmail.com', 'Hello. How are you?');

-- --------------------------------------------------------

--
-- Table structure for table `ctc_taxdeclaration`
--

CREATE TABLE `ctc_taxdeclaration` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `requestor` enum('Owner','Auth_rep') NOT NULL,
  `filled_request_form` enum('Yes','No') NOT NULL,
  `authorization_letter` enum('Yes','No') NOT NULL,
  `valid_id` enum('Yes','No') NOT NULL,
  `pin` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `c_no-improvement`
--

CREATE TABLE `c_no-improvement` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `requestor` enum('Owner','Auth_rep') NOT NULL,
  `filled_request_form` enum('Yes','No') NOT NULL,
  `authorization_letter` enum('Yes','No') NOT NULL,
  `valid_id` enum('Yes','No') NOT NULL,
  `pin` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `c_no-landholding`
--

CREATE TABLE `c_no-landholding` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `requestor` enum('Owner','Auth_rep') NOT NULL,
  `filled_request_form` enum('Yes','No') NOT NULL,
  `authorization_letter` enum('Yes','No') NOT NULL,
  `valid_id` enum('Yes','No') NOT NULL,
  `pin` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `c_total-landholding`
--

CREATE TABLE `c_total-landholding` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `requestor` enum('Owner','Auth_rep') NOT NULL,
  `filled_request_form` enum('Yes','No') NOT NULL,
  `authorization_letter` enum('Yes','No') NOT NULL,
  `valid_id` enum('Yes','No') NOT NULL,
  `pin` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dispute`
--

CREATE TABLE `dispute` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `requestor` enum('Owner','Auth_rep') NOT NULL,
  `authorization_letter` enum('Yes','No') NOT NULL,
  `valid_id` enum('Yes','No') NOT NULL,
  `letter_request` enum('Yes','No') NOT NULL,
  `tax_declaration` enum('Yes','No') NOT NULL,
  `survey_plan` enum('Yes','No') NOT NULL,
  `c_pictures` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `map_verification`
--

CREATE TABLE `map_verification` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `requestor` enum('Owner','Auth_rep') NOT NULL,
  `filled_request_form` enum('Yes','No') NOT NULL,
  `authorization_letter` enum('Yes','No') NOT NULL,
  `valid_id` enum('Yes','No') NOT NULL,
  `letter_request` enum('Yes','No') NOT NULL,
  `title_property` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `n_a_buildings`
--

CREATE TABLE `n_a_buildings` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `requestor` enum('Owner','Auth_rep') NOT NULL,
  `filled_request_form` enum('Yes','No') NOT NULL,
  `sworn_statement` enum('Yes','No') NOT NULL,
  `authorization_letter` enum('Yes','No') NOT NULL,
  `valid_id` enum('Yes','No') NOT NULL,
  `building_permit_cert` enum('Yes','No') NOT NULL,
  `pictures` enum('Yes','No') NOT NULL,
  `sketch_plan` enum('Yes','No') NOT NULL,
  `tax_dec_land` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `n_a_buildings`
--

INSERT INTO `n_a_buildings` (`id`, `firstname`, `middlename`, `lastname`, `email`, `contact`, `address`, `requestor`, `filled_request_form`, `sworn_statement`, `authorization_letter`, `valid_id`, `building_permit_cert`, `pictures`, `sketch_plan`, `tax_dec_land`) VALUES
(13, 'joric', 'ochavo', 'alianic', 'joric1262@gmail.com', 0, 'calindagan,dumaguete city', 'Auth_rep', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(26, 'Jamaica', 'Lado', 'Palama', 'palamajamaica08@gmail.com', 12345, '6668 Howmart Rd., Baesa , Quezon City', 'Owner', 'Yes', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(29, 'rose', 'esconde', 'ang', 'rosaesconde@gmail.com', 912347569, 'tinago, dumaguete city', 'Auth_rep', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `n_a_lands`
--

CREATE TABLE `n_a_lands` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `requestor` enum('Owner','Auth_rep') NOT NULL,
  `filled_request_form` enum('Yes','No') NOT NULL,
  `sworn_statement` enum('Yes','No') NOT NULL,
  `authorization_letter` enum('Yes','No') NOT NULL,
  `valid_id` enum('Yes','No') NOT NULL,
  `t_o_cert_title` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `n_a_lands`
--

INSERT INTO `n_a_lands` (`id`, `firstname`, `middlename`, `lastname`, `email`, `contact`, `address`, `requestor`, `filled_request_form`, `sworn_statement`, `authorization_letter`, `valid_id`, `t_o_cert_title`) VALUES
(3, 'Jamaica', 'Lado', 'Palama', 'palamajamaica08@gmail.com', 12345, '6668 Howmart Rd., Baesa , Quezon City', 'Auth_rep', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(9, 'joric', 'ochavo', 'alianic', 'joric1262@gmail.com', 0, 'calindagan,dumaguete city', 'Owner', 'Yes', 'Yes', 'No', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `n_a_machineries`
--

CREATE TABLE `n_a_machineries` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `requestor` enum('Owner','Auth_rep') NOT NULL,
  `filled_request_form` enum('Yes','No') NOT NULL,
  `sworn_statement` enum('Yes','No') NOT NULL,
  `authorization_letter` enum('Yes','No') NOT NULL,
  `valid_id` enum('Yes','No') NOT NULL,
  `o_r_machineries` enum('Yes','No') NOT NULL,
  `t_d_building` enum('Yes','No') NOT NULL,
  `l_cd_agreement` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `n_a_machineries`
--

INSERT INTO `n_a_machineries` (`id`, `firstname`, `middlename`, `lastname`, `email`, `contact`, `address`, `requestor`, `filled_request_form`, `sworn_statement`, `authorization_letter`, `valid_id`, `o_r_machineries`, `t_d_building`, `l_cd_agreement`) VALUES
(3, 'Jamaica', 'Lado', 'Palama', 'palamajamaica08@gmail.com', 12345, '6668 Howmart Rd., Baesa , Quezon City', 'Owner', 'Yes', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `n_a_public_land`
--

CREATE TABLE `n_a_public_land` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `requestor` enum('Owner','Auth_rep') NOT NULL,
  `filled_request_form` enum('Yes','No') NOT NULL,
  `sworn_statement` enum('Yes','No') NOT NULL,
  `authorization_letter` enum('Yes','No') NOT NULL,
  `valid_id` enum('Yes','No') NOT NULL,
  `o_ai_patent` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `n_a_public_land`
--

INSERT INTO `n_a_public_land` (`id`, `firstname`, `middlename`, `lastname`, `email`, `contact`, `address`, `requestor`, `filled_request_form`, `sworn_statement`, `authorization_letter`, `valid_id`, `o_ai_patent`) VALUES
(1, 'Jamaica', 'Lado', 'Palama', 'palamajamaica08@gmail.com', 12345, '6668 Howmart Rd., Baesa , Quezon City', 'Owner', 'Yes', 'Yes', 'No', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `profileimg`
--

CREATE TABLE `profileimg` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `service_request` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `date_sched` datetime NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `username`, `firstname`, `middlename`, `lastname`, `email`, `contact`, `address`, `service_request`, `message`, `status`, `date_sched`, `date_created`) VALUES
(2, 'alianic17', 'joric', 'ochavo', 'alianic', 'joric1262@gmail.com', 0, 'calindagan,dumaguete city', 'New Assessment', 'joric alianic scheduled a request', 1, '2022-05-28 13:59:00', '2022-05-27 23:59:39'),
(3, 'alianic17', 'joric', 'ochavo', 'alianic', 'joric1262@gmail.com', 0, 'calindagan,dumaguete city', 'Map Verification', 'joric alianic scheduled a request', 1, '2022-05-30 03:00:00', '2022-05-28 00:42:29');

-- --------------------------------------------------------

--
-- Table structure for table `re_classification`
--

CREATE TABLE `re_classification` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `requestor` enum('Owner','Auth_rep') NOT NULL,
  `authorization_letter` enum('Yes','No') NOT NULL,
  `valid_id` enum('Yes','No') NOT NULL,
  `letter_request` enum('Yes','No') NOT NULL,
  `tax_declaration` enum('Yes','No') NOT NULL,
  `zoning_cert` enum('Yes','No') NOT NULL,
  `tax_clearance` enum('Yes','No') NOT NULL,
  `c_pictures` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `firstname`, `middlename`, `lastname`, `username`, `email`, `contact`, `password`, `image`) VALUES
(1, 'april', '', 'ang', 'april12', 'aprilang1234@gmail.com', 2147483647, '3f8c1d9e97bbd72e92bceba6de0bec65', 'wall1.jpg'),
(2, 'Jamaica', 'Lado', 'Palama', 'jamaica2', 'palamajamaica08@gmail.com', 936123456, '41b2fb28b9e1f30bd6e4167045194979', ''),
(3, 'april', 'esconde', 'ang', 'april1012', 'aprilang1234@gmail.com', 2147483647, 'dd6ae7018a234d35ee174165dfd3dadb', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_a_buildings_lands`
--

CREATE TABLE `t_a_buildings_lands` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `requestor` enum('Owner','Auth_rep') NOT NULL,
  `filled_request_form` enum('Yes','No') NOT NULL,
  `sworn_statement` enum('Yes','No') NOT NULL,
  `authorization_letter` enum('Yes','No') NOT NULL,
  `valid_id` enum('Yes','No') NOT NULL,
  `t_c_title` enum('Yes','No') NOT NULL,
  `e_c_sale` enum('Yes','No') NOT NULL,
  `d_sepejs_estate` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_a_buildings_lands`
--

INSERT INTO `t_a_buildings_lands` (`id`, `firstname`, `middlename`, `lastname`, `email`, `contact`, `address`, `requestor`, `filled_request_form`, `sworn_statement`, `authorization_letter`, `valid_id`, `t_c_title`, `e_c_sale`, `d_sepejs_estate`) VALUES
(1, 'Jamaica', 'Lado', 'Palama', 'palamajamaica08@gmail.com', 12345, '6668 Howmart Rd., Baesa , Quezon City', 'Owner', 'Yes', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'Yes'),
(2, 'joric', 'ochavo', 'alianic', 'joric1262@gmail.com', 0, 'calindagan,dumaguete city', 'Auth_rep', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `t_a_cscsl`
--

CREATE TABLE `t_a_cscsl` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `requestor` enum('Owner','Auth_rep') NOT NULL,
  `filled_request_form` enum('Yes','No') NOT NULL,
  `sworn_statement` enum('Yes','No') NOT NULL,
  `authorization_letter` enum('Yes','No') NOT NULL,
  `valid_id` enum('Yes','No') NOT NULL,
  `t_c_title_condominium` enum('Yes','No') NOT NULL,
  `a_sc_plan` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_a_cscsl`
--

INSERT INTO `t_a_cscsl` (`id`, `firstname`, `middlename`, `lastname`, `email`, `contact`, `address`, `requestor`, `filled_request_form`, `sworn_statement`, `authorization_letter`, `valid_id`, `t_c_title_condominium`, `a_sc_plan`) VALUES
(1, 'Jamaica', 'Lado', 'Palama', 'palamajamaica08@gmail.com', 12345, '6668 Howmart Rd., Baesa , Quezon City', 'Owner', 'Yes', 'Yes', 'No', 'Yes', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `username`, `email`, `contact`, `password`, `image`, `address`) VALUES
(1, '', '', '', 'alianic17', '', 0, 'e10adc3949ba59abbe56e057f20f883e', '2.jpg', 'calindagan,dumaguete city'),
(2, '', '', '', 'jamjam2', '', 12345, 'jamjam2', 'wall1.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `verification_of_pin`
--

CREATE TABLE `verification_of_pin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `requestor` enum('Owner','Auth_rep') NOT NULL,
  `filled_request_form` enum('Yes','No') NOT NULL,
  `authorization_letter` enum('Yes','No') NOT NULL,
  `valid_id` enum('Yes','No') NOT NULL,
  `title_property` enum('Yes','No') NOT NULL,
  `tax_declaration` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vicinity_map`
--

CREATE TABLE `vicinity_map` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `requestor` enum('Owner','Auth_rep') NOT NULL,
  `filled_request_form` enum('Yes','No') NOT NULL,
  `authorization_letter` enum('Yes','No') NOT NULL,
  `valid_id` enum('Yes','No') NOT NULL,
  `tax_declaration` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cancellation`
--
ALTER TABLE `cancellation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ctc_taxdeclaration`
--
ALTER TABLE `ctc_taxdeclaration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_no-improvement`
--
ALTER TABLE `c_no-improvement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_no-landholding`
--
ALTER TABLE `c_no-landholding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_total-landholding`
--
ALTER TABLE `c_total-landholding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dispute`
--
ALTER TABLE `dispute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `map_verification`
--
ALTER TABLE `map_verification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `n_a_buildings`
--
ALTER TABLE `n_a_buildings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `n_a_lands`
--
ALTER TABLE `n_a_lands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `n_a_machineries`
--
ALTER TABLE `n_a_machineries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `n_a_public_land`
--
ALTER TABLE `n_a_public_land`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profileimg`
--
ALTER TABLE `profileimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `re_classification`
--
ALTER TABLE `re_classification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_a_buildings_lands`
--
ALTER TABLE `t_a_buildings_lands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_a_cscsl`
--
ALTER TABLE `t_a_cscsl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verification_of_pin`
--
ALTER TABLE `verification_of_pin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vicinity_map`
--
ALTER TABLE `vicinity_map`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cancellation`
--
ALTER TABLE `cancellation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ctc_taxdeclaration`
--
ALTER TABLE `ctc_taxdeclaration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c_no-improvement`
--
ALTER TABLE `c_no-improvement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c_no-landholding`
--
ALTER TABLE `c_no-landholding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c_total-landholding`
--
ALTER TABLE `c_total-landholding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dispute`
--
ALTER TABLE `dispute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `map_verification`
--
ALTER TABLE `map_verification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `n_a_buildings`
--
ALTER TABLE `n_a_buildings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `n_a_lands`
--
ALTER TABLE `n_a_lands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `n_a_machineries`
--
ALTER TABLE `n_a_machineries`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `n_a_public_land`
--
ALTER TABLE `n_a_public_land`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profileimg`
--
ALTER TABLE `profileimg`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `re_classification`
--
ALTER TABLE `re_classification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_a_buildings_lands`
--
ALTER TABLE `t_a_buildings_lands`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_a_cscsl`
--
ALTER TABLE `t_a_cscsl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `verification_of_pin`
--
ALTER TABLE `verification_of_pin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vicinity_map`
--
ALTER TABLE `vicinity_map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
