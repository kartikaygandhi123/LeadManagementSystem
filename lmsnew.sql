-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 24, 2022 at 08:43 AM
-- Server version: 5.7.33
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lmsnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_businesses`
--

CREATE TABLE `all_businesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_vertical_id` int(11) DEFAULT NULL,
  `all_businesses` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `all_businesses`
--

INSERT INTO `all_businesses` (`id`, `business_vertical_id`, `all_businesses`, `created_at`, `updated_at`) VALUES
(1, 4, 'Communication', '2022-06-14 03:08:46', NULL),
(2, 4, 'Consulting', '2022-06-14 03:08:46', NULL),
(3, 4, 'Freight', '2022-06-14 03:08:46', NULL),
(4, 1, 'Fulfilment Centre', '2022-06-14 03:08:46', NULL),
(5, 3, 'HoliTech', '2022-06-14 03:08:46', NULL),
(6, 1, 'Hyperlocal', '2022-06-14 03:08:46', NULL),
(7, 2, 'ISCM', '2022-06-14 03:08:46', NULL),
(8, 1, 'LMD', '2022-06-14 03:08:46', NULL),
(9, 2, 'OSCM', '2022-06-14 03:08:46', NULL),
(10, 2, 'PAS Engineering', '2022-06-14 03:08:46', NULL),
(11, 4, 'Transportation', '2022-06-14 03:08:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brand_profiles`
--

CREATE TABLE `brand_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Customer_Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Contact_Number` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `POC_Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Industry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gst_no` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gst_file` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand_profiles`
--

INSERT INTO `brand_profiles` (`id`, `Customer_Name`, `Contact_Number`, `POC_Name`, `Industry`, `Email`, `address`, `gst_no`, `gst_file`, `created_at`, `updated_at`) VALUES
(64, 'Ambuja Cement', '8888008098', 'kartik', 'Engineering', 'g@c.com', NULL, NULL, NULL, '2022-08-23 06:48:38', '2022-08-23 06:48:38'),
(65, 'Holisol India', '8888889775', 'kartik', 'Extra Industry', 'g@c.com', 'yyrr', '123now345j', '1661238826Holisight BRD.docx', '2022-08-23 06:53:51', '2022-08-23 07:22:01'),
(66, 'raja kumari', '8343473293', 'second', 'Information Technology', 'g@c.com', 'wqrwet', '123now345', '1661497785New_Activity Module_Holisight.jpg', '2022-08-26 05:53:48', '2022-08-26 07:09:45'),
(67, 'Ultratech', '1345345323', 'Desirae Moses', 'Heavy Machinery/Construction', 'g@c.com', 'hunf', '123now345', '1661496048New_Activity Module_Holisight.jpg', '2022-08-26 06:20:46', '2022-08-26 06:40:48'),
(68, 'holiscope234', '7018916636', 'kartik', 'Information Technology', 'g@c.com', NULL, NULL, NULL, '2022-12-24 06:30:23', '2022-12-24 06:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `business_verticals`
--

CREATE TABLE `business_verticals` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_verticals`
--

INSERT INTO `business_verticals` (`id`, `name`) VALUES
(1, 'RETAIL'),
(2, 'IPL'),
(3, 'TECH'),
(4, 'CORPORATE');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Abu', '2022-06-14 00:55:02', NULL),
(2, 'Achalpur', '2022-06-14 00:55:02', NULL),
(3, 'Achhnera', '2022-06-14 00:55:02', NULL),
(4, 'Adalaj', '2022-06-14 00:55:02', NULL),
(5, 'Adilabad', '2022-06-14 00:55:02', NULL),
(6, 'Adityapur', '2022-06-14 00:55:02', NULL),
(7, 'Adoni', '2022-06-14 00:55:02', NULL),
(8, 'Adoor', '2022-06-14 00:55:02', NULL),
(9, 'Adra', '2022-06-14 00:55:02', NULL),
(10, 'Adyar', '2022-06-14 00:55:02', NULL),
(11, 'Afzalpur', '2022-06-14 00:55:02', NULL),
(12, 'Agartala', '2022-06-14 00:55:02', NULL),
(13, 'Agra', '2022-06-14 00:55:02', NULL),
(14, 'Ahmadabad', '2022-06-14 00:55:02', NULL),
(15, 'Ahmadnagar', '2022-06-14 00:55:02', NULL),
(16, 'Ahmedabad', '2022-06-14 00:55:02', NULL),
(17, 'Ahmedabad & Mumbai', '2022-06-14 00:55:02', NULL),
(18, 'Ahmedabad and Bangalore', '2022-06-14 00:55:02', NULL),
(19, 'Ahmednagar', '2022-06-14 00:55:02', NULL),
(20, 'Aizawl', '2022-06-14 00:55:02', NULL),
(21, 'Ajmer', '2022-06-14 00:55:02', NULL),
(22, 'Akola', '2022-06-14 00:55:02', NULL),
(23, 'Akot', '2022-06-14 00:55:02', NULL),
(24, 'Alappuzha', '2022-06-14 00:55:02', NULL),
(25, 'Aligarh', '2022-06-14 00:55:02', NULL),
(26, 'Alipore', '2022-06-14 00:55:02', NULL),
(27, 'Alipur Duar', '2022-06-14 00:55:02', NULL),
(28, 'AlipurdUrban Agglomerationr', '2022-06-14 00:55:02', NULL),
(29, 'Alirajpur', '2022-06-14 00:55:02', NULL),
(30, 'Allahabad', '2022-06-14 00:55:02', NULL),
(31, 'Almora', '2022-06-14 00:55:02', NULL),
(32, 'Alwar', '2022-06-14 00:55:02', NULL),
(33, 'Amalapuram', '2022-06-14 00:55:02', NULL),
(34, 'Amalner', '2022-06-14 00:55:02', NULL),
(35, 'Amaravati', '2022-06-14 00:55:02', NULL),
(36, 'Ambala', '2022-06-14 00:55:02', NULL),
(37, 'Ambala & Haridwar', '2022-06-14 00:55:02', NULL),
(38, 'Ambejogai', '2022-06-14 00:55:02', NULL),
(39, 'Ambikapur', '2022-06-14 00:55:02', NULL),
(40, 'Amer', '2022-06-14 00:55:02', NULL),
(41, 'Amravati', '2022-06-14 00:55:02', NULL),
(42, 'Amreli', '2022-06-14 00:55:02', NULL),
(43, 'Amritsar', '2022-06-14 00:55:02', NULL),
(44, 'Amroha', '2022-06-14 00:55:02', NULL),
(45, 'Anakapalle', '2022-06-14 00:55:02', NULL),
(46, 'Anand', '2022-06-14 00:55:02', NULL),
(47, 'Anantapur', '2022-06-14 00:55:02', NULL),
(48, 'Anantnag', '2022-06-14 00:55:02', NULL),
(49, 'Andhra Pradesh', '2022-06-14 00:55:02', NULL),
(50, 'Anjar', '2022-06-14 00:55:02', NULL),
(51, 'Ankleshwar', '2022-06-14 00:55:02', NULL),
(52, 'Ara', '2022-06-14 00:55:02', NULL),
(53, 'Arakkonam', '2022-06-14 00:55:02', NULL),
(54, 'Arambagh', '2022-06-14 00:55:02', NULL),
(55, 'Araria', '2022-06-14 00:55:02', NULL),
(56, 'Arcot', '2022-06-14 00:55:02', NULL),
(57, 'Arrah', '2022-06-14 00:55:02', NULL),
(58, 'Arsikere', '2022-06-14 00:55:02', NULL),
(59, 'Aruppukkottai', '2022-06-14 00:55:02', NULL),
(60, 'Arvi', '2022-06-14 00:55:02', NULL),
(61, 'Arwal', '2022-06-14 00:55:02', NULL),
(62, 'Asansol', '2022-06-14 00:55:02', NULL),
(63, 'Asarganj', '2022-06-14 00:55:02', NULL),
(64, 'Ashok Nagar', '2022-06-14 00:55:02', NULL),
(65, 'Assam and Noida', '2022-06-14 00:55:02', NULL),
(66, 'Athni', '2022-06-14 00:55:02', NULL),
(67, 'Attingal', '2022-06-14 00:55:02', NULL),
(68, 'Aurangabad', '2022-06-14 00:55:02', NULL),
(69, 'Ayodhya', '2022-06-14 00:55:02', NULL),
(70, 'Azamgarh', '2022-06-14 00:55:02', NULL),
(71, 'BABAL', '2022-06-14 00:55:02', NULL),
(72, 'Badagara', '2022-06-14 00:55:02', NULL),
(73, 'Badami', '2022-06-14 00:55:02', NULL),
(74, 'Baddi', '2022-06-14 00:55:02', NULL),
(75, 'Baddi, HP', '2022-06-14 00:55:02', NULL),
(76, 'Bagaha', '2022-06-14 00:55:02', NULL),
(77, 'Bageshwar', '2022-06-14 00:55:02', NULL),
(78, 'Bahadurgarh', '2022-06-14 00:55:02', NULL),
(79, 'Baharampur', '2022-06-14 00:55:02', NULL),
(80, 'Bahraich', '2022-06-14 00:55:02', NULL),
(81, 'Balaghat', '2022-06-14 00:55:02', NULL),
(82, 'Balangir', '2022-06-14 00:55:02', NULL),
(83, 'Balasore', '2022-06-14 00:55:02', NULL),
(84, 'Baleshwar', '2022-06-14 00:55:02', NULL),
(85, 'Baleshwar Town', '2022-06-14 00:55:02', NULL),
(86, 'Ballabhgarh', '2022-06-14 00:55:02', NULL),
(87, 'Ballari', '2022-06-14 00:55:02', NULL),
(88, 'Ballia', '2022-06-14 00:55:02', NULL),
(89, 'Bally', '2022-06-14 00:55:02', NULL),
(90, 'Balurghat', '2022-06-14 00:55:02', NULL),
(91, 'Bamnoli', '2022-06-14 00:55:02', NULL),
(92, 'Bamnoli 2', '2022-06-14 00:55:02', NULL),
(93, 'Banda', '2022-06-14 00:55:02', NULL),
(94, 'Bangalore', '2022-06-14 00:55:02', NULL),
(95, 'Bangalore MFC', '2022-06-14 00:55:02', NULL),
(96, 'Bangalore to Metros', '2022-06-14 00:55:02', NULL),
(97, 'Bangalore to PAN India', '2022-06-14 00:55:02', NULL),
(98, 'Bangladesh', '2022-06-14 00:55:02', NULL),
(99, 'Banglore', '2022-06-14 00:55:02', NULL),
(100, 'Bankura', '2022-06-14 00:55:02', NULL),
(101, 'Bapatla', '2022-06-14 00:55:02', NULL),
(102, 'Bara Banki', '2022-06-14 00:55:02', NULL),
(103, 'Baramati', '2022-06-14 00:55:02', NULL),
(104, 'Baramati Pune', '2022-06-14 00:55:02', NULL),
(105, 'Baramula', '2022-06-14 00:55:02', NULL),
(106, 'Baranagar', '2022-06-14 00:55:02', NULL),
(107, 'Barasat', '2022-06-14 00:55:02', NULL),
(108, 'Barbil', '2022-06-14 00:55:02', NULL),
(109, 'Bareilly', '2022-06-14 00:55:02', NULL),
(110, 'Bargarh', '2022-06-14 00:55:02', NULL),
(111, 'Barh', '2022-06-14 00:55:02', NULL),
(112, 'Baripada', '2022-06-14 00:55:02', NULL),
(113, 'Baripada Town', '2022-06-14 00:55:02', NULL),
(114, 'Barmer', '2022-06-14 00:55:02', NULL),
(115, 'Barnala', '2022-06-14 00:55:02', NULL),
(116, 'Barpeta', '2022-06-14 00:55:02', NULL),
(117, 'Barrackpore', '2022-06-14 00:55:02', NULL),
(118, 'Baruni', '2022-06-14 00:55:02', NULL),
(119, 'Barwani', '2022-06-14 00:55:02', NULL),
(120, 'Basirhat', '2022-06-14 00:55:02', NULL),
(121, 'Basti', '2022-06-14 00:55:02', NULL),
(122, 'Batala', '2022-06-14 00:55:02', NULL),
(123, 'Bathinda', '2022-06-14 00:55:02', NULL),
(124, 'Bawal', '2022-06-14 00:55:02', NULL),
(125, 'Beawar', '2022-06-14 00:55:02', NULL),
(126, 'Begusarai', '2022-06-14 00:55:02', NULL),
(127, 'Belagavi', '2022-06-14 00:55:02', NULL),
(128, 'BELGAUM', '2022-06-14 00:55:02', NULL),
(129, 'Belgavi', '2022-06-14 00:55:02', NULL),
(130, 'Bellampalle', '2022-06-14 00:55:02', NULL),
(131, 'Belonia', '2022-06-14 00:55:02', NULL),
(132, 'Bengaluru', '2022-06-14 00:55:02', NULL),
(133, 'Bettiah', '2022-06-14 00:55:02', NULL),
(134, 'Betul', '2022-06-14 00:55:02', NULL),
(135, 'BhabUrban Agglomeration', '2022-06-14 00:55:02', NULL),
(136, 'Bhadrachalam', '2022-06-14 00:55:02', NULL),
(137, 'Bhadrak', '2022-06-14 00:55:02', NULL),
(138, 'Bhadravati', '2022-06-14 00:55:02', NULL),
(139, 'Bhagalpur', '2022-06-14 00:55:02', NULL),
(140, 'Bhagwanpur', '2022-06-14 00:55:02', NULL),
(141, 'Bhainsa', '2022-06-14 00:55:02', NULL),
(142, 'Bhandara', '2022-06-14 00:55:02', NULL),
(143, 'Bharatpur', '2022-06-14 00:55:02', NULL),
(144, 'Bharhut', '2022-06-14 00:55:02', NULL),
(145, 'Bharuch', '2022-06-14 00:55:02', NULL),
(146, 'Bharuch, Gujrat', '2022-06-14 00:55:02', NULL),
(147, 'Bhatapara', '2022-06-14 00:55:02', NULL),
(148, 'Bhatpara', '2022-06-14 00:55:02', NULL),
(149, 'Bhavnagar', '2022-06-14 00:55:02', NULL),
(150, 'Bhawanipatna', '2022-06-14 00:55:02', NULL),
(151, 'Bheemunipatnam', '2022-06-14 00:55:02', NULL),
(152, 'Bhilai', '2022-06-14 00:55:02', NULL),
(153, 'Bhilai Nagar', '2022-06-14 00:55:02', NULL),
(154, 'Bhilwara', '2022-06-14 00:55:02', NULL),
(155, 'Bhimavaram', '2022-06-14 00:55:02', NULL),
(156, 'Bhind', '2022-06-14 00:55:02', NULL),
(157, 'Bhiwadi', '2022-06-14 00:55:02', NULL),
(158, 'Bhiwandi', '2022-06-14 00:55:02', NULL),
(159, 'Bhiwani', '2022-06-14 00:55:02', NULL),
(160, 'Bhojpur', '2022-06-14 00:55:02', NULL),
(161, 'Bhongir', '2022-06-14 00:55:02', NULL),
(162, 'Bhopal', '2022-06-14 00:55:02', NULL),
(163, 'Bhubaneshwar', '2022-06-14 00:55:02', NULL),
(164, 'Bhuj', '2022-06-14 00:55:02', NULL),
(165, 'Bhusawal', '2022-06-14 00:55:02', NULL),
(166, 'Bid', '2022-06-14 00:55:02', NULL),
(167, 'Bidar', '2022-06-14 00:55:02', NULL),
(168, 'Bihar', '2022-06-14 00:55:02', NULL),
(169, 'Bihar Sharif', '2022-06-14 00:55:02', NULL),
(170, 'Bijapur', '2022-06-14 00:55:02', NULL),
(171, 'Bijnor', '2022-06-14 00:55:02', NULL),
(172, 'Bikaner', '2022-06-14 00:55:02', NULL),
(173, 'Bilaspur', '2022-06-14 00:55:02', NULL),
(174, 'Bishnupur', '2022-06-14 00:55:02', NULL),
(175, 'Bithur', '2022-06-14 00:55:02', NULL),
(176, 'BLR', '2022-06-14 00:55:02', NULL),
(177, 'Bobbili', '2022-06-14 00:55:02', NULL),
(178, 'Bodh Gaya', '2022-06-14 00:55:02', NULL),
(179, 'Bodhan', '2022-06-14 00:55:02', NULL),
(180, 'Bokaro', '2022-06-14 00:55:02', NULL),
(181, 'Bokaro Steel City', '2022-06-14 00:55:02', NULL),
(182, 'Bongaigaon City', '2022-06-14 00:55:02', NULL),
(183, 'Brahmapur', '2022-06-14 00:55:02', NULL),
(184, 'Budaun', '2022-06-14 00:55:02', NULL),
(185, 'Budge Budge', '2022-06-14 00:55:02', NULL),
(186, 'Bulandshahr', '2022-06-14 00:55:02', NULL),
(187, 'Buldana', '2022-06-14 00:55:02', NULL),
(188, 'Bundi', '2022-06-14 00:55:02', NULL),
(189, 'Burdwan', '2022-06-14 00:55:02', NULL),
(190, 'Burhanpur', '2022-06-14 00:55:02', NULL),
(191, 'Buxar', '2022-06-14 00:55:02', NULL),
(192, 'Byasanagar', '2022-06-14 00:55:02', NULL),
(193, 'Calicut', '2022-06-14 00:55:02', NULL),
(194, 'Chaibasa', '2022-06-14 00:55:02', NULL),
(195, 'Chalakudy', '2022-06-14 00:55:02', NULL),
(196, 'Chamba', '2022-06-14 00:55:02', NULL),
(197, 'Chandausi', '2022-06-14 00:55:02', NULL),
(198, 'Chandernagore', '2022-06-14 00:55:02', NULL),
(199, 'Chandigarh', '2022-06-14 00:55:02', NULL),
(200, 'Chandragiri', '2022-06-14 00:55:02', NULL),
(201, 'Chandrapur', '2022-06-14 00:55:02', NULL),
(202, 'Changanassery', '2022-06-14 00:55:02', NULL),
(203, 'Chapra', '2022-06-14 00:55:02', NULL),
(204, 'Charkhi Dadri', '2022-06-14 00:55:02', NULL),
(205, 'Chatra', '2022-06-14 00:55:02', NULL),
(206, 'Chengalpattu', '2022-06-14 00:55:02', NULL),
(207, 'Chennai', '2022-06-14 00:55:02', NULL),
(208, 'Cherrapunji', '2022-06-14 00:55:02', NULL),
(209, 'Cherthala', '2022-06-14 00:55:02', NULL),
(210, 'Chhapra', '2022-06-14 00:55:02', NULL),
(211, 'Chhatarpur', '2022-06-14 00:55:02', NULL),
(212, 'Chhindwara', '2022-06-14 00:55:02', NULL),
(213, 'Chidambaram', '2022-06-14 00:55:02', NULL),
(214, 'Chikkamagaluru', '2022-06-14 00:55:02', NULL),
(215, 'Chilakaluripet', '2022-06-14 00:55:02', NULL),
(216, 'China', '2022-06-14 00:55:02', NULL),
(217, 'China to India', '2022-06-14 00:55:02', NULL),
(218, 'Chirala', '2022-06-14 00:55:02', NULL),
(219, 'Chirkunda', '2022-06-14 00:55:02', NULL),
(220, 'Chirmiri', '2022-06-14 00:55:02', NULL),
(221, 'Chitoor', '2022-06-14 00:55:02', NULL),
(222, 'Chitradurga', '2022-06-14 00:55:02', NULL),
(223, 'Chittaurgarh', '2022-06-14 00:55:02', NULL),
(224, 'Chittoor', '2022-06-14 00:55:02', NULL),
(225, 'Chittur-Thathamangalam', '2022-06-14 00:55:02', NULL),
(226, 'Churu', '2022-06-14 00:55:02', NULL),
(227, 'Cochin', '2022-06-14 00:55:02', NULL),
(228, 'Coimbatore', '2022-06-14 00:55:02', NULL),
(229, 'Coimbtore', '2022-06-14 00:55:02', NULL),
(230, 'Cuddalore', '2022-06-14 00:55:02', NULL),
(231, 'Cuttack', '2022-06-14 00:55:02', NULL),
(232, 'Dadra And Nagar Haveli (Union Territory)', '2022-06-14 00:55:02', NULL),
(233, 'Dadri', '2022-06-14 00:55:02', NULL),
(234, 'Dalhousie', '2022-06-14 00:55:02', NULL),
(235, 'Dalli-Rajhara', '2022-06-14 00:55:02', NULL),
(236, 'Daman', '2022-06-14 00:55:02', NULL),
(237, 'Daman And Diu (Union Territory)', '2022-06-14 00:55:02', NULL),
(238, 'Damoh', '2022-06-14 00:55:02', NULL),
(239, 'Darbhanga', '2022-06-14 00:55:02', NULL),
(240, 'Darjiling', '2022-06-14 00:55:02', NULL),
(241, 'Datia', '2022-06-14 00:55:02', NULL),
(242, 'Daulatabad', '2022-06-14 00:55:02', NULL),
(243, 'Davanagere', '2022-06-14 00:55:02', NULL),
(244, 'Davangere', '2022-06-14 00:55:02', NULL),
(245, 'Deesa', '2022-06-14 00:55:02', NULL),
(246, 'Dehra Dun', '2022-06-14 00:55:02', NULL),
(247, 'Dehradun', '2022-06-14 00:55:02', NULL),
(248, 'Dehri', '2022-06-14 00:55:02', NULL),
(249, 'Dehri-on-Sone', '2022-06-14 00:55:02', NULL),
(250, 'Delhi', '2022-06-14 00:55:02', NULL),
(251, 'Delhi / NCR', '2022-06-14 00:55:02', NULL),
(252, 'Delhi and Bombay', '2022-06-14 00:55:02', NULL),
(253, 'Delhi East', '2022-06-14 00:55:02', NULL),
(254, 'Delhi NCR', '2022-06-14 00:55:02', NULL),
(255, 'Delhi NCR - Dadri', '2022-06-14 00:55:02', NULL),
(256, 'Delhi NCR and Lucknow', '2022-06-14 00:55:02', NULL),
(257, 'Delhi (National Capital Territory)', '2022-06-14 00:55:02', NULL),
(258, 'Delhi, Mumbai & Kolkata', '2022-06-14 00:55:02', NULL),
(259, 'Delhi/NCR', '2022-06-14 00:55:02', NULL),
(260, 'Delhi-NCR', '2022-06-14 00:55:02', NULL),
(261, 'Deoghar', '2022-06-14 00:55:02', NULL),
(262, 'Deoria', '2022-06-14 00:55:02', NULL),
(263, 'Dera bassi', '2022-06-14 00:55:02', NULL),
(264, 'Devas', '2022-06-14 00:55:02', NULL),
(265, 'Dewas', '2022-06-14 00:55:02', NULL),
(266, 'Dhamtari', '2022-06-14 00:55:02', NULL),
(267, 'Dhanbad', '2022-06-14 00:55:02', NULL),
(268, 'Dhar', '2022-06-14 00:55:02', NULL),
(269, 'Dharmanagar', '2022-06-14 00:55:02', NULL),
(270, 'Dharmapuri', '2022-06-14 00:55:02', NULL),
(271, 'Dharmavaram', '2022-06-14 00:55:02', NULL),
(272, 'Dharmshala', '2022-06-14 00:55:02', NULL),
(273, 'Dharuhera', '2022-06-14 00:55:02', NULL),
(274, 'Dhaulpur', '2022-06-14 00:55:02', NULL),
(275, 'Dhenkanal', '2022-06-14 00:55:02', NULL),
(276, 'Dholpur', '2022-06-14 00:55:02', NULL),
(277, 'Dhoraji', '2022-06-14 00:55:02', NULL),
(278, 'Dhubri', '2022-06-14 00:55:02', NULL),
(279, 'Dhuburi', '2022-06-14 00:55:02', NULL),
(280, 'Dhule', '2022-06-14 00:55:02', NULL),
(281, 'Dhuri', '2022-06-14 00:55:02', NULL),
(282, 'Diamond Harbour', '2022-06-14 00:55:02', NULL),
(283, 'Dibrugarh', '2022-06-14 00:55:02', NULL),
(284, 'Dimapur', '2022-06-14 00:55:02', NULL),
(285, 'Dinapur Nizamat', '2022-06-14 00:55:02', NULL),
(286, 'Dindigul', '2022-06-14 00:55:02', NULL),
(287, 'Diphu', '2022-06-14 00:55:02', NULL),
(288, 'Dispur', '2022-06-14 00:55:02', NULL),
(289, 'Diu', '2022-06-14 00:55:02', NULL),
(290, 'Doda', '2022-06-14 00:55:02', NULL),
(291, 'Doha', '2022-06-14 00:55:02', NULL),
(292, 'Dowlaiswaram', '2022-06-14 00:55:02', NULL),
(293, 'Dubai', '2022-06-14 00:55:02', NULL),
(294, 'Dum Dum', '2022-06-14 00:55:02', NULL),
(295, 'Dumka', '2022-06-14 00:55:02', NULL),
(296, 'Dumraon', '2022-06-14 00:55:02', NULL),
(297, 'Dungarpur', '2022-06-14 00:55:02', NULL),
(298, 'Durg', '2022-06-14 00:55:02', NULL),
(299, 'Durgapur', '2022-06-14 00:55:02', NULL),
(300, 'Dwarka', '2022-06-14 00:55:02', NULL),
(301, 'Eluru', '2022-06-14 00:55:02', NULL),
(302, 'English Bazar', '2022-06-14 00:55:02', NULL),
(303, 'Ernakulam', '2022-06-14 00:55:02', NULL),
(304, 'Erode', '2022-06-14 00:55:02', NULL),
(305, 'Etah', '2022-06-14 00:55:02', NULL),
(306, 'Etawah', '2022-06-14 00:55:02', NULL),
(307, 'Faizabad', '2022-06-14 00:55:02', NULL),
(308, 'Faridabad', '2022-06-14 00:55:02', NULL),
(309, 'Faridkot', '2022-06-14 00:55:02', NULL),
(310, 'Farooqnagar', '2022-06-14 00:55:02', NULL),
(311, 'Farrukhabad-cum-Fatehgarh', '2022-06-14 00:55:02', NULL),
(312, 'Fatehabad', '2022-06-14 00:55:02', NULL),
(313, 'Fatehpur', '2022-06-14 00:55:02', NULL),
(314, 'Fatehpur Sikri', '2022-06-14 00:55:02', NULL),
(315, 'Fazilka', '2022-06-14 00:55:02', NULL),
(316, 'Firozabad', '2022-06-14 00:55:02', NULL),
(317, 'Firozpur', '2022-06-14 00:55:02', NULL),
(318, 'Firozpur Cantt.', '2022-06-14 00:55:02', NULL),
(319, 'Firozpur Jhirka', '2022-06-14 00:55:02', NULL),
(320, 'Forbesganj', '2022-06-14 00:55:02', NULL),
(321, 'Gadoli', '2022-06-14 00:55:02', NULL),
(322, 'Gadoli, Mumbai', '2022-06-14 00:55:02', NULL),
(323, 'Gadwal', '2022-06-14 00:55:02', NULL),
(324, 'Gandhinagar', '2022-06-14 00:55:02', NULL),
(325, 'Ganganagar', '2022-06-14 00:55:02', NULL),
(326, 'Gangarampur', '2022-06-14 00:55:02', NULL),
(327, 'Gangtok', '2022-06-14 00:55:02', NULL),
(328, 'Ganjbasoda', '2022-06-14 00:55:02', NULL),
(329, 'Gaya', '2022-06-14 00:55:02', NULL),
(330, 'Gaziabad', '2022-06-14 00:55:02', NULL),
(331, 'GGN', '2022-06-14 00:55:02', NULL),
(332, 'GGN, BAWAL & Jaipur', '2022-06-14 00:55:02', NULL),
(333, 'Ghaziabad', '2022-06-14 00:55:02', NULL),
(334, 'Ghazipur', '2022-06-14 00:55:02', NULL),
(335, 'Giridih', '2022-06-14 00:55:02', NULL),
(336, 'Goa', '2022-06-14 00:55:02', NULL),
(337, 'Goalpara', '2022-06-14 00:55:02', NULL),
(338, 'Gobichettipalayam', '2022-06-14 00:55:02', NULL),
(339, 'Gobindgarh', '2022-06-14 00:55:02', NULL),
(340, 'Godhra', '2022-06-14 00:55:02', NULL),
(341, 'Gohana', '2022-06-14 00:55:02', NULL),
(342, 'Gokak', '2022-06-14 00:55:02', NULL),
(343, 'Gonda', '2022-06-14 00:55:02', NULL),
(344, 'Gooty', '2022-06-14 00:55:02', NULL),
(345, 'Gopalganj', '2022-06-14 00:55:02', NULL),
(346, 'Gorakhpur', '2022-06-14 00:55:02', NULL),
(347, 'Greater Noida', '2022-06-14 00:55:02', NULL),
(348, 'Gudivada', '2022-06-14 00:55:02', NULL),
(349, 'Gudur', '2022-06-14 00:55:02', NULL),
(350, 'Gugaon', '2022-06-14 00:55:02', NULL),
(351, 'Gujarat', '2022-06-14 00:55:02', NULL),
(352, 'Gujrat', '2022-06-14 00:55:02', NULL),
(353, 'Gujrat and Haridwar', '2022-06-14 00:55:02', NULL),
(354, 'Gulmarg', '2022-06-14 00:55:02', NULL),
(355, 'Gumia', '2022-06-14 00:55:02', NULL),
(356, 'Guna', '2022-06-14 00:55:02', NULL),
(357, 'Guntakal', '2022-06-14 00:55:02', NULL),
(358, 'Guntur', '2022-06-14 00:55:02', NULL),
(359, 'Guragaon', '2022-06-14 00:55:02', NULL),
(360, 'Gurdaspur', '2022-06-14 00:55:02', NULL),
(361, 'Gurgaon', '2022-06-14 00:55:02', NULL),
(362, 'Gurgaon, Haryana', '2022-06-14 00:55:02', NULL),
(363, 'Gurugram', '2022-06-14 00:55:02', NULL),
(364, 'Guruvayoor', '2022-06-14 00:55:02', NULL),
(365, 'Guwahati', '2022-06-14 00:55:02', NULL),
(366, 'Guwahati and kolkata', '2022-06-14 00:55:02', NULL),
(367, 'Guwahati MFC', '2022-06-14 00:55:02', NULL),
(368, 'Guwahati, Pune and Bhubaneshwar', '2022-06-14 00:55:02', NULL),
(369, 'Gwalior', '2022-06-14 00:55:02', NULL),
(370, 'Gyalsing', '2022-06-14 00:55:02', NULL),
(371, 'Habra', '2022-06-14 00:55:02', NULL),
(372, 'Hajipur', '2022-06-14 00:55:02', NULL),
(373, 'Haldwani-cum-Kathgodam', '2022-06-14 00:55:02', NULL),
(374, 'Halebid', '2022-06-14 00:55:02', NULL),
(375, 'Halisahar', '2022-06-14 00:55:02', NULL),
(376, 'Hamirpur', '2022-06-14 00:55:02', NULL),
(377, 'Hansi', '2022-06-14 00:55:02', NULL),
(378, 'Hanumangarh', '2022-06-14 00:55:02', NULL),
(379, 'Haora', '2022-06-14 00:55:02', NULL),
(380, 'Hapur', '2022-06-14 00:55:02', NULL),
(381, 'Hardoi', '2022-06-14 00:55:02', NULL),
(382, 'Hardwar', '2022-06-14 00:55:02', NULL),
(383, 'Haridwar', '2022-06-14 00:55:02', NULL),
(384, 'Haridwar & Daman', '2022-06-14 00:55:02', NULL),
(385, 'Haryana', '2022-06-14 00:55:02', NULL),
(386, 'Hassan', '2022-06-14 00:55:02', NULL),
(387, 'Hathras', '2022-06-14 00:55:02', NULL),
(388, 'Hazaribag', '2022-06-14 00:55:02', NULL),
(389, 'Himachal Pradesh', '2022-06-14 00:55:02', NULL),
(390, 'Hindupur', '2022-06-14 00:55:02', NULL),
(391, 'Hisar', '2022-06-14 00:55:02', NULL),
(392, 'Hissar', '2022-06-14 00:55:02', NULL),
(393, 'Hooghly', '2022-06-14 00:55:02', NULL),
(394, 'Hoogly', '2022-06-14 00:55:02', NULL),
(395, 'Hoshangabad', '2022-06-14 00:55:02', NULL),
(396, 'Hoshiarpur', '2022-06-14 00:55:02', NULL),
(397, 'Hoshiarpur (Punjab)', '2022-06-14 00:55:02', NULL),
(398, 'Hosiharpur', '2022-06-14 00:55:02', NULL),
(399, 'Hosur', '2022-06-14 00:55:02', NULL),
(400, 'Hubballi-Dharwad', '2022-06-14 00:55:02', NULL),
(401, 'Hubli', '2022-06-14 00:55:02', NULL),
(402, 'Hubli-Dharwad', '2022-06-14 00:55:02', NULL),
(403, 'Hugli', '2022-06-14 00:55:02', NULL),
(404, 'Hugli-Chinsurah', '2022-06-14 00:55:02', NULL),
(405, 'Hyderabad', '2022-06-14 00:55:02', NULL),
(406, 'Ichalkaranji', '2022-06-14 00:55:02', NULL),
(407, 'Idukki', '2022-06-14 00:55:02', NULL),
(408, 'Imphal', '2022-06-14 00:55:02', NULL),
(409, 'India', '2022-06-14 00:55:02', NULL),
(410, 'Indonesia', '2022-06-14 00:55:02', NULL),
(411, 'Indore', '2022-06-14 00:55:02', NULL),
(412, 'Ingraj Bazar', '2022-06-14 00:55:02', NULL),
(413, 'Itanagar', '2022-06-14 00:55:02', NULL),
(414, 'Itarsi', '2022-06-14 00:55:02', NULL),
(415, 'Jabalpur', '2022-06-14 00:55:02', NULL),
(416, 'Jagdalpur', '2022-06-14 00:55:02', NULL),
(417, 'Jaggaiahpet', '2022-06-14 00:55:02', NULL),
(418, 'Jagraon', '2022-06-14 00:55:02', NULL),
(419, 'Jagtial', '2022-06-14 00:55:02', NULL),
(420, 'Jaipur', '2022-06-14 00:55:02', NULL),
(421, 'Jaipur & Noida', '2022-06-14 00:55:02', NULL),
(422, 'Jaisalmer', '2022-06-14 00:55:02', NULL),
(423, 'Jalandhar', '2022-06-14 00:55:02', NULL),
(424, 'Jalandhar Cantt.', '2022-06-14 00:55:02', NULL),
(425, 'Jalaun', '2022-06-14 00:55:02', NULL),
(426, 'Jalgaon', '2022-06-14 00:55:02', NULL),
(427, 'Jalor', '2022-06-14 00:55:02', NULL),
(428, 'Jalpaiguri', '2022-06-14 00:55:02', NULL),
(429, 'Jamalpur', '2022-06-14 00:55:02', NULL),
(430, 'Jammalamadugu', '2022-06-14 00:55:02', NULL),
(431, 'Jammu', '2022-06-14 00:55:02', NULL),
(432, 'Jammu And Kashmir', '2022-06-14 00:55:02', NULL),
(433, 'Jamnagar', '2022-06-14 00:55:02', NULL),
(434, 'Jamshedpur', '2022-06-14 00:55:02', NULL),
(435, 'Jamui', '2022-06-14 00:55:02', NULL),
(436, 'Jangaon', '2022-06-14 00:55:02', NULL),
(437, 'Jatani', '2022-06-14 00:55:02', NULL),
(438, 'Jaunpur', '2022-06-14 00:55:02', NULL),
(439, 'Jauri', '2022-06-14 00:55:02', NULL),
(440, 'Jehanabad', '2022-06-14 00:55:02', NULL),
(441, 'Jhabua', '2022-06-14 00:55:02', NULL),
(442, 'Jhalawar', '2022-06-14 00:55:02', NULL),
(443, 'Jhansi', '2022-06-14 00:55:02', NULL),
(444, 'Jhargram', '2022-06-14 00:55:02', NULL),
(445, 'Jharia', '2022-06-14 00:55:02', NULL),
(446, 'Jharkhand', '2022-06-14 00:55:02', NULL),
(447, 'Jharmajri', '2022-06-14 00:55:02', NULL),
(448, 'Jharsuguda', '2022-06-14 00:55:02', NULL),
(449, 'Jhumri Tilaiya', '2022-06-14 00:55:02', NULL),
(450, 'Jhunjhunu', '2022-06-14 00:55:02', NULL),
(451, 'Jind', '2022-06-14 00:55:02', NULL),
(452, 'Jodhpur', '2022-06-14 00:55:02', NULL),
(453, 'Jorhat', '2022-06-14 00:55:02', NULL),
(454, 'Juari', '2022-06-14 00:55:02', NULL),
(455, 'Junagadh', '2022-06-14 00:55:02', NULL),
(456, 'Junagarh', '2022-06-14 00:55:02', NULL),
(457, 'Kadapa', '2022-06-14 00:55:02', NULL),
(458, 'Kadi', '2022-06-14 00:55:02', NULL),
(459, 'Kadiri', '2022-06-14 00:55:02', NULL),
(460, 'Kagaznagar', '2022-06-14 00:55:02', NULL),
(461, 'Kailasahar', '2022-06-14 00:55:02', NULL),
(462, 'Kaithal', '2022-06-14 00:55:02', NULL),
(463, 'Kakinada', '2022-06-14 00:55:02', NULL),
(464, 'Kala-Amb', '2022-06-14 00:55:02', NULL),
(465, 'Kalaburagi', '2022-06-14 00:55:02', NULL),
(466, 'Kalimpong', '2022-06-14 00:55:02', NULL),
(467, 'Kalpi', '2022-06-14 00:55:02', NULL),
(468, 'Kalyan', '2022-06-14 00:55:02', NULL),
(469, 'Kalyan-Dombivali', '2022-06-14 00:55:02', NULL),
(470, 'Kamareddy', '2022-06-14 00:55:02', NULL),
(471, 'Kamarhati', '2022-06-14 00:55:02', NULL),
(472, 'Kancheepuram', '2022-06-14 00:55:02', NULL),
(473, 'Kanchipuram', '2022-06-14 00:55:02', NULL),
(474, 'Kanchrapara', '2022-06-14 00:55:02', NULL),
(475, 'Kandla', '2022-06-14 00:55:02', NULL),
(476, 'Kandukur', '2022-06-14 00:55:02', NULL),
(477, 'Kangra', '2022-06-14 00:55:02', NULL),
(478, 'Kanhangad', '2022-06-14 00:55:02', NULL),
(479, 'Kannauj', '2022-06-14 00:55:02', NULL),
(480, 'Kanniyakumari', '2022-06-14 00:55:02', NULL),
(481, 'Kannur', '2022-06-14 00:55:02', NULL),
(482, 'Kanpur', '2022-06-14 00:55:02', NULL),
(483, 'Kapadvanj', '2022-06-14 00:55:02', NULL),
(484, 'Kapurthala', '2022-06-14 00:55:02', NULL),
(485, 'Karaikal', '2022-06-14 00:55:02', NULL),
(486, 'Karimganj', '2022-06-14 00:55:02', NULL),
(487, 'Karimnagar', '2022-06-14 00:55:02', NULL),
(488, 'Karjat', '2022-06-14 00:55:02', NULL),
(489, 'Karli', '2022-06-14 00:55:02', NULL),
(490, 'Karnal', '2022-06-14 00:55:02', NULL),
(491, 'Karnataka', '2022-06-14 00:55:02', NULL),
(492, 'Karur', '2022-06-14 00:55:02', NULL),
(493, 'Karwar', '2022-06-14 00:55:02', NULL),
(494, 'Kasaragod', '2022-06-14 00:55:02', NULL),
(495, 'Kashipur', '2022-06-14 00:55:02', NULL),
(496, 'Kathmandu, Nepal', '2022-06-14 00:55:02', NULL),
(497, 'Kathua', '2022-06-14 00:55:02', NULL),
(498, 'KathUrban Agglomeration', '2022-06-14 00:55:02', NULL),
(499, 'Katihar', '2022-06-14 00:55:02', NULL),
(500, 'Kavali', '2022-06-14 00:55:02', NULL),
(501, 'Kayamkulam', '2022-06-14 00:55:02', NULL),
(502, 'Kendrapara', '2022-06-14 00:55:02', NULL),
(503, 'Kendujhar', '2022-06-14 00:55:02', NULL),
(504, 'Keonjhar', '2022-06-14 00:55:02', NULL),
(505, 'Kerala', '2022-06-14 00:55:02', NULL),
(506, 'Keshod', '2022-06-14 00:55:02', NULL),
(507, 'Khair', '2022-06-14 00:55:02', NULL),
(508, 'Khajuraho', '2022-06-14 00:55:02', NULL),
(509, 'Khambhat', '2022-06-14 00:55:02', NULL),
(510, 'Khammam', '2022-06-14 00:55:02', NULL),
(511, 'Khandwa', '2022-06-14 00:55:02', NULL),
(512, 'Khanna', '2022-06-14 00:55:02', NULL),
(513, 'Kharagpur', '2022-06-14 00:55:02', NULL),
(514, 'Kharar', '2022-06-14 00:55:02', NULL),
(515, 'Khargon', '2022-06-14 00:55:02', NULL),
(516, 'Kheda', '2022-06-14 00:55:02', NULL),
(517, 'Kholapur', '2022-06-14 00:55:02', NULL),
(518, 'Khowai', '2022-06-14 00:55:02', NULL),
(519, 'Kishanganj', '2022-06-14 00:55:02', NULL),
(520, 'Kishangarh', '2022-06-14 00:55:02', NULL),
(521, 'Koch Bihar', '2022-06-14 00:55:02', NULL),
(522, 'Kochi', '2022-06-14 00:55:02', NULL),
(523, 'Kodaikanal', '2022-06-14 00:55:02', NULL),
(524, 'Kodungallur', '2022-06-14 00:55:02', NULL),
(525, 'Kohima', '2022-06-14 00:55:02', NULL),
(526, 'Kolahpur', '2022-06-14 00:55:02', NULL),
(527, 'Kolar', '2022-06-14 00:55:02', NULL),
(528, 'Kolhapur', '2022-06-14 00:55:02', NULL),
(529, 'Kolkata', '2022-06-14 00:55:02', NULL),
(530, 'Kolkata @', '2022-06-14 00:55:02', NULL),
(531, 'Kolkata 1', '2022-06-14 00:55:02', NULL),
(532, 'Kolkata and Guwahati', '2022-06-14 00:55:02', NULL),
(533, 'Kollam', '2022-06-14 00:55:02', NULL),
(534, 'Konark', '2022-06-14 00:55:02', NULL),
(535, 'Koppad', '2022-06-14 00:55:02', NULL),
(536, 'Koraput', '2022-06-14 00:55:02', NULL),
(537, 'Koratla', '2022-06-14 00:55:02', NULL),
(538, 'Korba', '2022-06-14 00:55:02', NULL),
(539, 'Kot Kapura', '2022-06-14 00:55:02', NULL),
(540, 'Kota', '2022-06-14 00:55:02', NULL),
(541, 'Kothagudem', '2022-06-14 00:55:02', NULL),
(542, 'Kottayam', '2022-06-14 00:55:02', NULL),
(543, 'Kovvur', '2022-06-14 00:55:02', NULL),
(544, 'Koyilandy', '2022-06-14 00:55:02', NULL),
(545, 'Kozhikode', '2022-06-14 00:55:02', NULL),
(546, 'Krishnanagar', '2022-06-14 00:55:02', NULL),
(547, 'Kullu', '2022-06-14 00:55:02', NULL),
(548, 'Kumbakonam', '2022-06-14 00:55:02', NULL),
(549, 'Kunnamkulam', '2022-06-14 00:55:02', NULL),
(550, 'Kurali', '2022-06-14 00:55:02', NULL),
(551, 'Kurnool', '2022-06-14 00:55:02', NULL),
(552, 'Kurukshetra', '2022-06-14 00:55:02', NULL),
(553, 'Kuwait', '2022-06-14 00:55:02', NULL),
(554, 'Kyathampalle', '2022-06-14 00:55:02', NULL),
(555, 'Lachhmangarh', '2022-06-14 00:55:02', NULL),
(556, 'Lachung', '2022-06-14 00:55:02', NULL),
(557, 'Ladnu', '2022-06-14 00:55:02', NULL),
(558, 'Ladwa', '2022-06-14 00:55:02', NULL),
(559, 'Lahar', '2022-06-14 00:55:02', NULL),
(560, 'Laharpur', '2022-06-14 00:55:02', NULL),
(561, 'Lakheri', '2022-06-14 00:55:02', NULL),
(562, 'Lakhimpur', '2022-06-14 00:55:02', NULL),
(563, 'Lakhisarai', '2022-06-14 00:55:02', NULL),
(564, 'Lakshmeshwar', '2022-06-14 00:55:02', NULL),
(565, 'Lal Gopalganj Nindaura', '2022-06-14 00:55:02', NULL),
(566, 'Lalganj', '2022-06-14 00:55:02', NULL),
(567, 'Lalgudi', '2022-06-14 00:55:02', NULL),
(568, 'Lalitpur', '2022-06-14 00:55:02', NULL),
(569, 'Lalsot', '2022-06-14 00:55:02', NULL),
(570, 'Lanka', '2022-06-14 00:55:02', NULL),
(571, 'Lar', '2022-06-14 00:55:02', NULL),
(572, 'Lathi', '2022-06-14 00:55:02', NULL),
(573, 'Latur', '2022-06-14 00:55:02', NULL),
(574, 'Leh', '2022-06-14 00:55:02', NULL),
(575, 'LFS Ludhiana', '2022-06-14 00:55:02', NULL),
(576, 'Lilong', '2022-06-14 00:55:02', NULL),
(577, 'Limbdi', '2022-06-14 00:55:02', NULL),
(578, 'Lingsugur', '2022-06-14 00:55:02', NULL),
(579, 'Loha', '2022-06-14 00:55:02', NULL),
(580, 'Lohardaga', '2022-06-14 00:55:02', NULL),
(581, 'Lonar', '2022-06-14 00:55:02', NULL),
(582, 'Lonavla', '2022-06-14 00:55:02', NULL),
(583, 'Longowal', '2022-06-14 00:55:02', NULL),
(584, 'Loni', '2022-06-14 00:55:02', NULL),
(585, 'Losal', '2022-06-14 00:55:02', NULL),
(586, 'Lucknow', '2022-06-14 00:55:02', NULL),
(587, 'Ludhiana', '2022-06-14 00:55:02', NULL),
(588, 'Lumding', '2022-06-14 00:55:02', NULL),
(589, 'Lunawada', '2022-06-14 00:55:02', NULL),
(590, 'Lunglei', '2022-06-14 00:55:02', NULL),
(591, 'Macherla', '2022-06-14 00:55:02', NULL),
(592, 'Machilipatnam', '2022-06-14 00:55:02', NULL),
(593, 'Madanapalle', '2022-06-14 00:55:02', NULL),
(594, 'Maddur', '2022-06-14 00:55:02', NULL),
(595, 'Madgaon', '2022-06-14 00:55:02', NULL),
(596, 'Madhepura', '2022-06-14 00:55:02', NULL),
(597, 'Madhubani', '2022-06-14 00:55:02', NULL),
(598, 'Madhugiri', '2022-06-14 00:55:02', NULL),
(599, 'Madhupur', '2022-06-14 00:55:02', NULL),
(600, 'Madhya Pradesh', '2022-06-14 00:55:02', NULL),
(601, 'Madikeri', '2022-06-14 00:55:02', NULL),
(602, 'Madurai', '2022-06-14 00:55:02', NULL),
(603, 'Magadi', '2022-06-14 00:55:02', NULL),
(604, 'Mahabaleshwar', '2022-06-14 00:55:02', NULL),
(605, 'Mahad', '2022-06-14 00:55:02', NULL),
(606, 'Mahalingapura', '2022-06-14 00:55:02', NULL),
(607, 'Maharajganj', '2022-06-14 00:55:02', NULL),
(608, 'Maharajpur', '2022-06-14 00:55:02', NULL),
(609, 'Maharashtra', '2022-06-14 00:55:02', NULL),
(610, 'Mahasamund', '2022-06-14 00:55:02', NULL),
(611, 'Mahbubnagar', '2022-06-14 00:55:02', NULL),
(612, 'Mahe', '2022-06-14 00:55:02', NULL),
(613, 'Mahemdabad', '2022-06-14 00:55:02', NULL),
(614, 'Mahendragarh', '2022-06-14 00:55:02', NULL),
(615, 'Mahesana', '2022-06-14 00:55:02', NULL),
(616, 'Maheshwar', '2022-06-14 00:55:02', NULL),
(617, 'Mahidpur', '2022-06-14 00:55:02', NULL),
(618, 'Mahnar Bazar', '2022-06-14 00:55:02', NULL),
(619, 'Mahuva', '2022-06-14 00:55:02', NULL),
(620, 'Maihar', '2022-06-14 00:55:02', NULL),
(621, 'Mainaguri', '2022-06-14 00:55:02', NULL),
(622, 'Mainpuri', '2022-06-14 00:55:02', NULL),
(623, 'Makhdumpur', '2022-06-14 00:55:02', NULL),
(624, 'Makrana', '2022-06-14 00:55:02', NULL),
(625, 'Malaj Khand', '2022-06-14 00:55:02', NULL),
(626, 'Malappuram', '2022-06-14 00:55:02', NULL),
(627, 'Malavalli', '2022-06-14 00:55:02', NULL),
(628, 'Malda', '2022-06-14 00:55:02', NULL),
(629, 'Malegaon', '2022-06-14 00:55:02', NULL),
(630, 'Malerkotla', '2022-06-14 00:55:02', NULL),
(631, 'Malkangiri', '2022-06-14 00:55:02', NULL),
(632, 'Malkapur', '2022-06-14 00:55:02', NULL),
(633, 'Malout', '2022-06-14 00:55:02', NULL),
(634, 'Malpura', '2022-06-14 00:55:02', NULL),
(635, 'Malur', '2022-06-14 00:55:02', NULL),
(636, 'Mamallapuram', '2022-06-14 00:55:02', NULL),
(637, 'Manachanallur', '2022-06-14 00:55:02', NULL),
(638, 'Manasa', '2022-06-14 00:55:02', NULL),
(639, 'Manavadar', '2022-06-14 00:55:02', NULL),
(640, 'Manawar', '2022-06-14 00:55:02', NULL),
(641, 'Mancherial', '2022-06-14 00:55:02', NULL),
(642, 'Mandalgarh', '2022-06-14 00:55:02', NULL),
(643, 'Mandamarri', '2022-06-14 00:55:02', NULL),
(644, 'Mandapeta', '2022-06-14 00:55:02', NULL),
(645, 'Mandawa', '2022-06-14 00:55:02', NULL),
(646, 'Mandi', '2022-06-14 00:55:02', NULL),
(647, 'Mandi Dabwali', '2022-06-14 00:55:02', NULL),
(648, 'Mandideep', '2022-06-14 00:55:02', NULL),
(649, 'Mandla', '2022-06-14 00:55:02', NULL),
(650, 'Mandsaur', '2022-06-14 00:55:02', NULL),
(651, 'Mandvi', '2022-06-14 00:55:02', NULL),
(652, 'Mandya', '2022-06-14 00:55:02', NULL),
(653, 'Manendragarh', '2022-06-14 00:55:02', NULL),
(654, 'Maner', '2022-06-14 00:55:02', NULL),
(655, 'Manesar', '2022-06-14 00:55:02', NULL),
(656, 'Mangaldoi', '2022-06-14 00:55:02', NULL),
(657, 'Mangalore', '2022-06-14 00:55:02', NULL),
(658, 'Mangaluru', '2022-06-14 00:55:02', NULL),
(659, 'Mangalvedhe', '2022-06-14 00:55:02', NULL),
(660, 'Mangan', '2022-06-14 00:55:02', NULL),
(661, 'Manglaur', '2022-06-14 00:55:02', NULL),
(662, 'Mangrol', '2022-06-14 00:55:02', NULL),
(663, 'Mangrulpir', '2022-06-14 00:55:02', NULL),
(664, 'Manihari', '2022-06-14 00:55:02', NULL),
(665, 'Manipur', '2022-06-14 00:55:02', NULL),
(666, 'Manjlegaon', '2022-06-14 00:55:02', NULL),
(667, 'Mankachar', '2022-06-14 00:55:02', NULL),
(668, 'Mankoli', '2022-06-14 00:55:02', NULL),
(669, 'Manmad', '2022-06-14 00:55:02', NULL),
(670, 'Mansa', '2022-06-14 00:55:02', NULL),
(671, 'Manuguru', '2022-06-14 00:55:02', NULL),
(672, 'Manvi', '2022-06-14 00:55:02', NULL),
(673, 'Manwath', '2022-06-14 00:55:02', NULL),
(674, 'Mapusa', '2022-06-14 00:55:02', NULL),
(675, 'Margao', '2022-06-14 00:55:02', NULL),
(676, 'Margherita', '2022-06-14 00:55:02', NULL),
(677, 'Marhaura', '2022-06-14 00:55:02', NULL),
(678, 'Mariani', '2022-06-14 00:55:02', NULL),
(679, 'Marigaon', '2022-06-14 00:55:02', NULL),
(680, 'Markapur', '2022-06-14 00:55:02', NULL),
(681, 'Marmagao', '2022-06-14 00:55:02', NULL),
(682, 'Masaurhi', '2022-06-14 00:55:02', NULL),
(683, 'Mathabhanga', '2022-06-14 00:55:02', NULL),
(684, 'Matheran', '2022-06-14 00:55:02', NULL),
(685, 'Mathura', '2022-06-14 00:55:02', NULL),
(686, 'Mattancheri', '2022-06-14 00:55:02', NULL),
(687, 'Mattannur', '2022-06-14 00:55:02', NULL),
(688, 'Mauganj', '2022-06-14 00:55:02', NULL),
(689, 'Mavelikkara', '2022-06-14 00:55:02', NULL),
(690, 'Mavoor', '2022-06-14 00:55:02', NULL),
(691, 'Mayang Imphal', '2022-06-14 00:55:02', NULL),
(692, 'Medak', '2022-06-14 00:55:02', NULL),
(693, 'Medininagar (Daltonganj)', '2022-06-14 00:55:02', NULL),
(694, 'Medinipur', '2022-06-14 00:55:02', NULL),
(695, 'Meerut', '2022-06-14 00:55:02', NULL),
(696, 'Meghalaya', '2022-06-14 00:55:02', NULL),
(697, 'Mehkar', '2022-06-14 00:55:02', NULL),
(698, 'Memari', '2022-06-14 00:55:02', NULL),
(699, 'Membai', '2022-06-14 00:55:02', NULL),
(700, 'Merta', '2022-06-14 00:55:02', NULL),
(701, 'Merta City', '2022-06-14 00:55:02', NULL),
(702, 'Mhaswad', '2022-06-14 00:55:02', NULL),
(703, 'Mhow', '2022-06-14 00:55:02', NULL),
(704, 'Mhow Cantonment', '2022-06-14 00:55:02', NULL),
(705, 'Mhowgaon', '2022-06-14 00:55:02', NULL),
(706, 'MIDC, Shiroli Maharashtra', '2022-06-14 00:55:02', NULL),
(707, 'Midnapore', '2022-06-14 00:55:02', NULL),
(708, 'Mihijam', '2022-06-14 00:55:02', NULL),
(709, 'Mira-Bhayandar', '2022-06-14 00:55:02', NULL),
(710, 'Miraj', '2022-06-14 00:55:02', NULL),
(711, 'Mirganj', '2022-06-14 00:55:02', NULL),
(712, 'Miryalaguda', '2022-06-14 00:55:02', NULL),
(713, 'Mirzapur-Vindhyachal', '2022-06-14 00:55:02', NULL),
(714, 'Mizoram', '2022-06-14 00:55:02', NULL),
(715, 'Modasa', '2022-06-14 00:55:02', NULL),
(716, 'Modinagar', '2022-06-14 00:55:02', NULL),
(717, 'Moga', '2022-06-14 00:55:02', NULL),
(718, 'Mohali', '2022-06-14 00:55:02', NULL),
(719, 'Mokameh', '2022-06-14 00:55:02', NULL),
(720, 'Mokokchung', '2022-06-14 00:55:02', NULL),
(721, 'Mon', '2022-06-14 00:55:02', NULL),
(722, 'Monoharpur', '2022-06-14 00:55:02', NULL),
(723, 'Moradabad', '2022-06-14 00:55:02', NULL),
(724, 'Morena', '2022-06-14 00:55:02', NULL),
(725, 'Morinda, India', '2022-06-14 00:55:02', NULL),
(726, 'Morshi', '2022-06-14 00:55:02', NULL),
(727, 'Morvi', '2022-06-14 00:55:02', NULL),
(728, 'Motihari', '2022-06-14 00:55:02', NULL),
(729, 'Motipur', '2022-06-14 00:55:02', NULL),
(730, 'Mount Abu', '2022-06-14 00:55:02', NULL),
(731, 'Mudabidri', '2022-06-14 00:55:02', NULL),
(732, 'Mudalagi', '2022-06-14 00:55:02', NULL),
(733, 'Muddebihal', '2022-06-14 00:55:02', NULL),
(734, 'Mudhol', '2022-06-14 00:55:02', NULL),
(735, 'Mukerian', '2022-06-14 00:55:02', NULL),
(736, 'Mukhed', '2022-06-14 00:55:02', NULL),
(737, 'Muktsar', '2022-06-14 00:55:02', NULL),
(738, 'Mul', '2022-06-14 00:55:02', NULL),
(739, 'Mulbagal', '2022-06-14 00:55:02', NULL),
(740, 'Multai', '2022-06-14 00:55:02', NULL),
(741, 'Multiple locations', '2022-06-14 00:55:02', NULL),
(742, 'Mumbai', '2022-06-14 00:55:02', NULL),
(743, 'Mumbai / Delhi', '2022-06-14 00:55:02', NULL),
(744, 'Mumbai AB2', '2022-06-14 00:55:02', NULL),
(745, 'Mumbai and Delhi to PAN India', '2022-06-14 00:55:02', NULL),
(746, 'Mumbai Delhi', '2022-06-14 00:55:02', NULL),
(747, 'Mumbai, bangalore', '2022-06-14 00:55:02', NULL),
(748, 'Mundargi', '2022-06-14 00:55:02', NULL),
(749, 'Mundhwa', '2022-06-14 00:55:02', NULL),
(750, 'Mundi', '2022-06-14 00:55:02', NULL),
(751, 'Mundka', '2022-06-14 00:55:02', NULL),
(752, 'Mundka, Delhi', '2022-06-14 00:55:02', NULL),
(753, 'Mundra', '2022-06-14 00:55:02', NULL),
(754, 'Mungeli', '2022-06-14 00:55:02', NULL),
(755, 'Munger', '2022-06-14 00:55:02', NULL),
(756, 'Murliganj', '2022-06-14 00:55:02', NULL),
(757, 'Murshidabad', '2022-06-14 00:55:02', NULL),
(758, 'Murtijapur', '2022-06-14 00:55:02', NULL),
(759, 'Murwara', '2022-06-14 00:55:02', NULL),
(760, 'Murwara (Katni)', '2022-06-14 00:55:02', NULL),
(761, 'Musabani', '2022-06-14 00:55:02', NULL),
(762, 'Muscat, Oman', '2022-06-14 00:55:02', NULL),
(763, 'Mussoorie', '2022-06-14 00:55:02', NULL),
(764, 'Muvattupuzha', '2022-06-14 00:55:02', NULL),
(765, 'Muzaffarnagar', '2022-06-14 00:55:02', NULL),
(766, 'Muzaffarpur', '2022-06-14 00:55:02', NULL),
(767, 'Mysore', '2022-06-14 00:55:02', NULL),
(768, 'Mysuru', '2022-06-14 00:55:02', NULL),
(769, 'Nabadwip', '2022-06-14 00:55:02', NULL),
(770, 'Nabarangapur', '2022-06-14 00:55:02', NULL),
(771, 'Nabha', '2022-06-14 00:55:02', NULL),
(772, 'Nadbai', '2022-06-14 00:55:02', NULL),
(773, 'Nadiad', '2022-06-14 00:55:02', NULL),
(774, 'Nagaland', '2022-06-14 00:55:02', NULL),
(775, 'Nagaon', '2022-06-14 00:55:02', NULL),
(776, 'Nagapattinam', '2022-06-14 00:55:02', NULL),
(777, 'Nagappattinam', '2022-06-14 00:55:02', NULL),
(778, 'Nagar', '2022-06-14 00:55:02', NULL),
(779, 'Nagari', '2022-06-14 00:55:02', NULL),
(780, 'Nagarjunakoṇḍa', '2022-06-14 00:55:02', NULL),
(781, 'Nagarkurnool', '2022-06-14 00:55:02', NULL),
(782, 'Nagaur', '2022-06-14 00:55:02', NULL),
(783, 'Nagda', '2022-06-14 00:55:02', NULL),
(784, 'Nagercoil', '2022-06-14 00:55:02', NULL),
(785, 'Nagina', '2022-06-14 00:55:02', NULL),
(786, 'Nagla', '2022-06-14 00:55:02', NULL),
(787, 'Nagpur', '2022-06-14 00:55:02', NULL),
(788, 'Nahan', '2022-06-14 00:55:02', NULL),
(789, 'Naharlagun', '2022-06-14 00:55:02', NULL),
(790, 'Naidupet', '2022-06-14 00:55:02', NULL),
(791, 'Naihati', '2022-06-14 00:55:02', NULL),
(792, 'Naila Janjgir', '2022-06-14 00:55:02', NULL),
(793, 'Nainital', '2022-06-14 00:55:02', NULL),
(794, 'Nainpur', '2022-06-14 00:55:02', NULL),
(795, 'Najibabad', '2022-06-14 00:55:02', NULL),
(796, 'Nakodar', '2022-06-14 00:55:02', NULL),
(797, 'Nakur', '2022-06-14 00:55:02', NULL),
(798, 'Nalbari', '2022-06-14 00:55:02', NULL),
(799, 'Namagiripettai', '2022-06-14 00:55:02', NULL),
(800, 'Namakkal', '2022-06-14 00:55:02', NULL),
(801, 'Nanded', '2022-06-14 00:55:02', NULL),
(802, 'Nanded-Waghala', '2022-06-14 00:55:02', NULL),
(803, 'Nandgaon', '2022-06-14 00:55:02', NULL),
(804, 'Nandivaram-Guduvancheri', '2022-06-14 00:55:02', NULL),
(805, 'Nandura', '2022-06-14 00:55:02', NULL),
(806, 'Nandurbar', '2022-06-14 00:55:02', NULL),
(807, 'Nandyal', '2022-06-14 00:55:02', NULL),
(808, 'Nangal', '2022-06-14 00:55:02', NULL),
(809, 'Nanjangud', '2022-06-14 00:55:02', NULL),
(810, 'Nanjikottai', '2022-06-14 00:55:02', NULL),
(811, 'Nanpara', '2022-06-14 00:55:02', NULL),
(812, 'Narasapuram', '2022-06-14 00:55:02', NULL),
(813, 'Narasaraopet', '2022-06-14 00:55:02', NULL),
(814, 'Naraura', '2022-06-14 00:55:02', NULL),
(815, 'Narayanpet', '2022-06-14 00:55:02', NULL),
(816, 'Nargund', '2022-06-14 00:55:02', NULL),
(817, 'Narkatiaganj', '2022-06-14 00:55:02', NULL),
(818, 'Narkhed', '2022-06-14 00:55:02', NULL),
(819, 'Narnaul', '2022-06-14 00:55:02', NULL),
(820, 'Narsimhapur', '2022-06-14 00:55:02', NULL),
(821, 'Narsinghgarh', '2022-06-14 00:55:02', NULL),
(822, 'Narsipatnam', '2022-06-14 00:55:02', NULL),
(823, 'Narwana', '2022-06-14 00:55:02', NULL),
(824, 'Narwar', '2022-06-14 00:55:02', NULL),
(825, 'Nashik', '2022-06-14 00:55:02', NULL),
(826, 'Nasirabad', '2022-06-14 00:55:02', NULL),
(827, 'Natham', '2022-06-14 00:55:02', NULL),
(828, 'Nathdwara', '2022-06-14 00:55:02', NULL),
(829, 'Naugachhia', '2022-06-14 00:55:02', NULL),
(830, 'Naugawan Sadat', '2022-06-14 00:55:02', NULL),
(831, 'Nautanwa', '2022-06-14 00:55:02', NULL),
(832, 'Navadwip', '2022-06-14 00:55:02', NULL),
(833, 'Navalgund', '2022-06-14 00:55:02', NULL),
(834, 'Navi Mumbai', '2022-06-14 00:55:02', NULL),
(835, 'Navsari', '2022-06-14 00:55:02', NULL),
(836, 'Nawabganj', '2022-06-14 00:55:02', NULL),
(837, 'Nawada', '2022-06-14 00:55:02', NULL),
(838, 'Nawanshahr', '2022-06-14 00:55:02', NULL),
(839, 'Nawapur', '2022-06-14 00:55:02', NULL),
(840, 'NCR', '2022-06-14 00:55:02', NULL),
(841, 'Nedumangad', '2022-06-14 00:55:02', NULL),
(842, 'Neem-Ka-Thana', '2022-06-14 00:55:02', NULL),
(843, 'Neemuch', '2022-06-14 00:55:02', NULL),
(844, 'Nehtaur', '2022-06-14 00:55:02', NULL),
(845, 'Nelamangala', '2022-06-14 00:55:02', NULL),
(846, 'Nellikuppam', '2022-06-14 00:55:02', NULL),
(847, 'Nellore', '2022-06-14 00:55:02', NULL),
(848, 'Nepanagar', '2022-06-14 00:55:02', NULL),
(849, 'New Delhi', '2022-06-14 00:55:02', NULL),
(850, 'Neyveli (TS)', '2022-06-14 00:55:02', NULL),
(851, 'Neyyattinkara', '2022-06-14 00:55:02', NULL),
(852, 'Nidadavole', '2022-06-14 00:55:02', NULL),
(853, 'Nigeria', '2022-06-14 00:55:02', NULL),
(854, 'Nilambur', '2022-06-14 00:55:02', NULL),
(855, 'Nilanga', '2022-06-14 00:55:02', NULL),
(856, 'Nimbahera', '2022-06-14 00:55:02', NULL),
(857, 'Nioda', '2022-06-14 00:55:02', NULL),
(858, 'Nirmal', '2022-06-14 00:55:02', NULL),
(859, 'Niwai', '2022-06-14 00:55:02', NULL),
(860, 'Niwari', '2022-06-14 00:55:02', NULL),
(861, 'Nizamabad', '2022-06-14 00:55:02', NULL),
(862, 'Nohar', '2022-06-14 00:55:02', NULL),
(863, 'Noida', '2022-06-14 00:55:02', NULL),
(864, 'Noida UP', '2022-06-14 00:55:02', NULL),
(865, 'Noiida', '2022-06-14 00:55:02', NULL),
(866, 'Nokha', '2022-06-14 00:55:02', NULL),
(867, 'Nongstoin', '2022-06-14 00:55:02', NULL),
(868, 'Noorpur', '2022-06-14 00:55:02', NULL),
(869, 'North Lakhimpur', '2022-06-14 00:55:02', NULL),
(870, 'Nowgong', '2022-06-14 00:55:02', NULL),
(871, 'Nowrozabad (Khodargama)', '2022-06-14 00:55:02', NULL),
(872, 'Nuzvid', '2022-06-14 00:55:02', NULL),
(873, 'O Valley', '2022-06-14 00:55:02', NULL),
(874, 'Obra', '2022-06-14 00:55:02', NULL),
(875, 'Oddanchatram', '2022-06-14 00:55:02', NULL),
(876, 'Odisha', '2022-06-14 00:55:02', NULL),
(877, 'Okha', '2022-06-14 00:55:02', NULL),
(878, 'Oman', '2022-06-14 00:55:02', NULL),
(879, 'Ongole', '2022-06-14 00:55:02', NULL),
(880, 'Oragadam', '2022-06-14 00:55:02', NULL),
(881, 'Orai', '2022-06-14 00:55:02', NULL),
(882, 'Orchha', '2022-06-14 00:55:02', NULL),
(883, 'Osmanabad', '2022-06-14 00:55:02', NULL),
(884, 'Ottappalam', '2022-06-14 00:55:02', NULL),
(885, 'Ozar', '2022-06-14 00:55:02', NULL),
(886, 'P.N.Patti', '2022-06-14 00:55:02', NULL),
(887, 'Pachora', '2022-06-14 00:55:02', NULL),
(888, 'Pachore', '2022-06-14 00:55:02', NULL),
(889, 'Pacode', '2022-06-14 00:55:02', NULL),
(890, 'Padmanabhapuram', '2022-06-14 00:55:02', NULL),
(891, 'Padra', '2022-06-14 00:55:02', NULL),
(892, 'Padrauna', '2022-06-14 00:55:02', NULL),
(893, 'Paithan', '2022-06-14 00:55:02', NULL),
(894, 'Pakaur', '2022-06-14 00:55:02', NULL),
(895, 'Palacole', '2022-06-14 00:55:02', NULL),
(896, 'Palai', '2022-06-14 00:55:02', NULL),
(897, 'Palakkad', '2022-06-14 00:55:02', NULL),
(898, 'Palampur', '2022-06-14 00:55:02', NULL),
(899, 'Palani', '2022-06-14 00:55:02', NULL),
(900, 'Palanpur', '2022-06-14 00:55:02', NULL),
(901, 'Palasa Kasibugga', '2022-06-14 00:55:02', NULL),
(902, 'Palashi', '2022-06-14 00:55:02', NULL),
(903, 'Palayankottai', '2022-06-14 00:55:02', NULL),
(904, 'Palej, Bharuch', '2022-06-14 00:55:02', NULL),
(905, 'Palghar', '2022-06-14 00:55:02', NULL),
(906, 'Pali', '2022-06-14 00:55:02', NULL),
(907, 'Palia Kalan', '2022-06-14 00:55:02', NULL),
(908, 'Palitana', '2022-06-14 00:55:02', NULL),
(909, 'Palladam', '2022-06-14 00:55:02', NULL),
(910, 'Pallapatti', '2022-06-14 00:55:02', NULL),
(911, 'Pallikonda', '2022-06-14 00:55:02', NULL),
(912, 'Palwal', '2022-06-14 00:55:02', NULL),
(913, 'Palwancha', '2022-06-14 00:55:02', NULL),
(914, 'PAN India', '2022-06-14 00:55:02', NULL),
(915, 'Panagar', '2022-06-14 00:55:02', NULL),
(916, 'Panagudi', '2022-06-14 00:55:02', NULL),
(917, 'Panaji', '2022-06-14 00:55:02', NULL),
(918, 'Panamattom', '2022-06-14 00:55:02', NULL),
(919, 'Panchkula', '2022-06-14 00:55:02', NULL),
(920, 'Panchla', '2022-06-14 00:55:02', NULL),
(921, 'Pandharkaoda', '2022-06-14 00:55:02', NULL),
(922, 'Pandharpur', '2022-06-14 00:55:02', NULL),
(923, 'Pandhurna', '2022-06-14 00:55:02', NULL),
(924, 'PandUrban Agglomeration', '2022-06-14 00:55:02', NULL),
(925, 'Panihati', '2022-06-14 00:55:02', NULL),
(926, 'Panipat', '2022-06-14 00:55:02', NULL),
(927, 'Panipath', '2022-06-14 00:55:02', NULL),
(928, 'Panna', '2022-06-14 00:55:02', NULL),
(929, 'Panniyannur', '2022-06-14 00:55:02', NULL),
(930, 'Panruti', '2022-06-14 00:55:02', NULL),
(931, 'Pantnagar', '2022-06-14 00:55:02', NULL),
(932, 'Panvel', '2022-06-14 00:55:02', NULL),
(933, 'Pappinisseri', '2022-06-14 00:55:02', NULL),
(934, 'Paradip', '2022-06-14 00:55:02', NULL),
(935, 'Paramakudi', '2022-06-14 00:55:02', NULL),
(936, 'Parangipettai', '2022-06-14 00:55:02', NULL),
(937, 'Parasi', '2022-06-14 00:55:02', NULL),
(938, 'Paravoor', '2022-06-14 00:55:02', NULL),
(939, 'Parbhani', '2022-06-14 00:55:02', NULL),
(940, 'Pardi', '2022-06-14 00:55:02', NULL),
(941, 'Parlakhemundi', '2022-06-14 00:55:02', NULL),
(942, 'Parli', '2022-06-14 00:55:02', NULL),
(943, 'Partapgarh', '2022-06-14 00:55:02', NULL),
(944, 'Partur', '2022-06-14 00:55:02', NULL),
(945, 'Parvathipuram', '2022-06-14 00:55:02', NULL),
(946, 'Parwanoo', '2022-06-14 00:55:02', NULL),
(947, 'Pasan', '2022-06-14 00:55:02', NULL),
(948, 'Paschim Punropara', '2022-06-14 00:55:02', NULL),
(949, 'Pasighat', '2022-06-14 00:55:02', NULL),
(950, 'Patan', '2022-06-14 00:55:02', NULL),
(951, 'Pathanamthitta', '2022-06-14 00:55:02', NULL),
(952, 'Pathankot', '2022-06-14 00:55:02', NULL),
(953, 'Pathardi', '2022-06-14 00:55:02', NULL),
(954, 'Pathri', '2022-06-14 00:55:02', NULL),
(955, 'Patiala', '2022-06-14 00:55:02', NULL),
(956, 'Patna', '2022-06-14 00:55:02', NULL),
(957, 'Patratu', '2022-06-14 00:55:02', NULL),
(958, 'Pattamundai', '2022-06-14 00:55:02', NULL),
(959, 'Patti', '2022-06-14 00:55:02', NULL),
(960, 'Pattran', '2022-06-14 00:55:02', NULL),
(961, 'Pattukkottai', '2022-06-14 00:55:02', NULL),
(962, 'Patur', '2022-06-14 00:55:02', NULL),
(963, 'Pauni', '2022-06-14 00:55:02', NULL),
(964, 'Pauri', '2022-06-14 00:55:02', NULL),
(965, 'Pavagada', '2022-06-14 00:55:02', NULL),
(966, 'Pedana', '2022-06-14 00:55:02', NULL),
(967, 'Peddapuram', '2022-06-14 00:55:02', NULL),
(968, 'Pehowa', '2022-06-14 00:55:02', NULL),
(969, 'Pen', '2022-06-14 00:55:02', NULL),
(970, 'Perambalur', '2022-06-14 00:55:02', NULL),
(971, 'Peravurani', '2022-06-14 00:55:02', NULL),
(972, 'Peringathur', '2022-06-14 00:55:02', NULL),
(973, 'Perinthalmanna', '2022-06-14 00:55:02', NULL),
(974, 'Periyakulam', '2022-06-14 00:55:02', NULL),
(975, 'Periyasemur', '2022-06-14 00:55:02', NULL),
(976, 'Pernampattu', '2022-06-14 00:55:02', NULL),
(977, 'Perumbavoor', '2022-06-14 00:55:02', NULL),
(978, 'Petlad', '2022-06-14 00:55:02', NULL),
(979, 'Phagwara', '2022-06-14 00:55:02', NULL),
(980, 'Phalodi', '2022-06-14 00:55:02', NULL),
(981, 'Phaltan', '2022-06-14 00:55:02', NULL),
(982, 'Phek', '2022-06-14 00:55:02', NULL),
(983, 'Phillaur', '2022-06-14 00:55:02', NULL),
(984, 'Phulabani', '2022-06-14 00:55:02', NULL),
(985, 'Phulera', '2022-06-14 00:55:02', NULL),
(986, 'Phulpur', '2022-06-14 00:55:02', NULL),
(987, 'Phusro', '2022-06-14 00:55:02', NULL),
(988, 'Pihani', '2022-06-14 00:55:02', NULL),
(989, 'Pilani', '2022-06-14 00:55:02', NULL),
(990, 'Pilibanga', '2022-06-14 00:55:02', NULL),
(991, 'Pilibhit', '2022-06-14 00:55:02', NULL),
(992, 'Pilkhuwa', '2022-06-14 00:55:02', NULL),
(993, 'Pindwara', '2022-06-14 00:55:02', NULL),
(994, 'Pinjore', '2022-06-14 00:55:02', NULL),
(995, 'Pipar City', '2022-06-14 00:55:02', NULL),
(996, 'Pipariya', '2022-06-14 00:55:02', NULL),
(997, 'Piriyapatna', '2022-06-14 00:55:02', NULL),
(998, 'Piro', '2022-06-14 00:55:02', NULL),
(999, 'Pitampur', '2022-06-14 00:55:02', NULL),
(1000, 'Pithampur', '2022-06-14 00:55:02', NULL),
(1001, 'Pithapuram', '2022-06-14 00:55:02', NULL),
(1002, 'Pithoragarh', '2022-06-14 00:55:02', NULL),
(1003, 'Pollachi', '2022-06-14 00:55:02', NULL),
(1004, 'Polur', '2022-06-14 00:55:02', NULL),
(1005, 'Pondicherry', '2022-06-14 00:55:02', NULL),
(1006, 'Ponnani', '2022-06-14 00:55:02', NULL),
(1007, 'Ponneri', '2022-06-14 00:55:02', NULL),
(1008, 'Ponnur', '2022-06-14 00:55:02', NULL),
(1009, 'Porbandar', '2022-06-14 00:55:02', NULL),
(1010, 'Porsa', '2022-06-14 00:55:02', NULL),
(1011, 'Port Blair', '2022-06-14 00:55:02', NULL),
(1012, 'Powayan', '2022-06-14 00:55:02', NULL),
(1013, 'Prantij', '2022-06-14 00:55:02', NULL),
(1014, 'Pratapgarh', '2022-06-14 00:55:02', NULL),
(1015, 'Prayagraj', '2022-06-14 00:55:02', NULL),
(1016, 'Prithla', '2022-06-14 00:55:02', NULL),
(1017, 'Prithvipur', '2022-06-14 00:55:02', NULL),
(1018, 'Proddatur', '2022-06-14 00:55:02', NULL),
(1019, 'Puducherry', '2022-06-14 00:55:02', NULL),
(1020, 'Puducherry (Union Territory)', '2022-06-14 00:55:02', NULL),
(1021, 'Pudukkottai', '2022-06-14 00:55:02', NULL),
(1022, 'Pudupattinam', '2022-06-14 00:55:02', NULL),
(1023, 'Pukhrayan', '2022-06-14 00:55:02', NULL),
(1024, 'Pulgaon', '2022-06-14 00:55:02', NULL),
(1025, 'Puliyankudi', '2022-06-14 00:55:02', NULL),
(1026, 'Punalur', '2022-06-14 00:55:02', NULL),
(1027, 'Punch', '2022-06-14 00:55:02', NULL),
(1028, 'Pune', '2022-06-14 00:55:02', NULL),
(1029, 'Pune Chakhan', '2022-06-14 00:55:02', NULL),
(1030, 'Pune Salore', '2022-06-14 00:55:02', NULL),
(1031, 'Punganur', '2022-06-14 00:55:02', NULL),
(1032, 'Punjab', '2022-06-14 00:55:02', NULL),
(1033, 'Punjaipugalur', '2022-06-14 00:55:02', NULL),
(1034, 'Puranpur', '2022-06-14 00:55:02', NULL),
(1035, 'Puri', '2022-06-14 00:55:02', NULL),
(1036, 'Purna', '2022-06-14 00:55:02', NULL),
(1037, 'Purnia', '2022-06-14 00:55:02', NULL),
(1038, 'PurqUrban Agglomerationzi', '2022-06-14 00:55:02', NULL),
(1039, 'Purulia', '2022-06-14 00:55:02', NULL),
(1040, 'Purwa', '2022-06-14 00:55:02', NULL),
(1041, 'Pusa', '2022-06-14 00:55:02', NULL),
(1042, 'Pusad', '2022-06-14 00:55:02', NULL),
(1043, 'Pushkar', '2022-06-14 00:55:02', NULL),
(1044, 'Puthuppally', '2022-06-14 00:55:02', NULL),
(1045, 'Puttur', '2022-06-14 00:55:02', NULL),
(1046, 'Qadian', '2022-06-14 00:55:02', NULL),
(1047, 'Qatar', '2022-06-14 00:55:02', NULL),
(1048, 'Raayachuru', '2022-06-14 00:55:02', NULL),
(1049, 'Rabkavi Banhatti', '2022-06-14 00:55:02', NULL),
(1050, 'Radhanpur', '2022-06-14 00:55:02', NULL),
(1051, 'Rae Bareli', '2022-06-14 00:55:02', NULL),
(1052, 'Rafiganj', '2022-06-14 00:55:02', NULL),
(1053, 'Raghogarh-Vijaypur', '2022-06-14 00:55:02', NULL),
(1054, 'Raghunathganj', '2022-06-14 00:55:02', NULL),
(1055, 'Raghunathpur', '2022-06-14 00:55:02', NULL),
(1056, 'Rahatgarh', '2022-06-14 00:55:02', NULL),
(1057, 'Rahuri', '2022-06-14 00:55:02', NULL),
(1058, 'Raichur', '2022-06-14 00:55:02', NULL),
(1059, 'Raiganj', '2022-06-14 00:55:02', NULL),
(1060, 'Raiganj', '2022-06-14 00:55:02', NULL),
(1061, 'Raigarh', '2022-06-14 00:55:02', NULL),
(1062, 'Raikot', '2022-06-14 00:55:02', NULL),
(1063, 'Raipur', '2022-06-14 00:55:02', NULL),
(1064, 'Rairangpur', '2022-06-14 00:55:02', NULL),
(1065, 'Raisen', '2022-06-14 00:55:02', NULL),
(1066, 'Raisinghnagar', '2022-06-14 00:55:02', NULL),
(1067, 'Rajagangapur', '2022-06-14 00:55:02', NULL),
(1068, 'Rajahmundry', '2022-06-14 00:55:02', NULL),
(1069, 'Rajakhera', '2022-06-14 00:55:02', NULL),
(1070, 'Rajaldesar', '2022-06-14 00:55:02', NULL),
(1071, 'Rajam', '2022-06-14 00:55:02', NULL);
INSERT INTO `cities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1072, 'Rajampet', '2022-06-14 00:55:02', NULL),
(1073, 'Rajapalaiyam', '2022-06-14 00:55:02', NULL),
(1074, 'Rajapalayam', '2022-06-14 00:55:02', NULL),
(1075, 'Rajasthan', '2022-06-14 00:55:02', NULL),
(1076, 'Rajauri', '2022-06-14 00:55:02', NULL),
(1077, 'Rajgarh', '2022-06-14 00:55:02', NULL),
(1078, 'Rajgarh (Alwar)', '2022-06-14 00:55:02', NULL),
(1079, 'Rajgarh (Churu)', '2022-06-14 00:55:02', NULL),
(1080, 'Rajgir', '2022-06-14 00:55:02', NULL),
(1081, 'Rajkot', '2022-06-14 00:55:02', NULL),
(1082, 'Rajmahal', '2022-06-14 00:55:02', NULL),
(1083, 'Rajnandgaon', '2022-06-14 00:55:02', NULL),
(1084, 'Rajpipla', '2022-06-14 00:55:02', NULL),
(1085, 'Rajpura', '2022-06-14 00:55:02', NULL),
(1086, 'Rajsamand', '2022-06-14 00:55:02', NULL),
(1087, 'Rajula', '2022-06-14 00:55:02', NULL),
(1088, 'Rajura', '2022-06-14 00:55:02', NULL),
(1089, 'Ramachandrapuram', '2022-06-14 00:55:02', NULL),
(1090, 'Ramagundam', '2022-06-14 00:55:02', NULL),
(1091, 'Ramanagaram', '2022-06-14 00:55:02', NULL),
(1092, 'Ramanathapuram', '2022-06-14 00:55:02', NULL),
(1093, 'Ramdurg', '2022-06-14 00:55:02', NULL),
(1094, 'Rameshwaram', '2022-06-14 00:55:02', NULL),
(1095, 'Ramganj Mandi', '2022-06-14 00:55:02', NULL),
(1096, 'Ramgarh', '2022-06-14 00:55:02', NULL),
(1097, 'Ramnagar', '2022-06-14 00:55:02', NULL),
(1098, 'Ramngarh', '2022-06-14 00:55:02', NULL),
(1099, 'Rampur', '2022-06-14 00:55:02', NULL),
(1100, 'Rampur Maniharan', '2022-06-14 00:55:02', NULL),
(1101, 'Rampura Phul', '2022-06-14 00:55:02', NULL),
(1102, 'Rampurhat', '2022-06-14 00:55:02', NULL),
(1103, 'Ramtek', '2022-06-14 00:55:02', NULL),
(1104, 'Ranaghat', '2022-06-14 00:55:02', NULL),
(1105, 'Ranavav', '2022-06-14 00:55:02', NULL),
(1106, 'Ranchi', '2022-06-14 00:55:02', NULL),
(1107, 'Ranebennuru', '2022-06-14 00:55:02', NULL),
(1108, 'Rangia', '2022-06-14 00:55:02', NULL),
(1109, 'Rania', '2022-06-14 00:55:02', NULL),
(1110, 'Ranibennur', '2022-06-14 00:55:02', NULL),
(1111, 'Ranipet', '2022-06-14 00:55:02', NULL),
(1112, 'Rapar', '2022-06-14 00:55:02', NULL),
(1113, 'Rasipuram', '2022-06-14 00:55:02', NULL),
(1114, 'Rasra', '2022-06-14 00:55:02', NULL),
(1115, 'Ratangarh', '2022-06-14 00:55:02', NULL),
(1116, 'Rath', '2022-06-14 00:55:02', NULL),
(1117, 'Ratia', '2022-06-14 00:55:02', NULL),
(1118, 'Ratlam', '2022-06-14 00:55:02', NULL),
(1119, 'Ratnagiri', '2022-06-14 00:55:02', NULL),
(1120, 'Rau', '2022-06-14 00:55:02', NULL),
(1121, 'Raurkela', '2022-06-14 00:55:02', NULL),
(1122, 'Raver', '2022-06-14 00:55:02', NULL),
(1123, 'Rawatbhata', '2022-06-14 00:55:02', NULL),
(1124, 'Rawatsar', '2022-06-14 00:55:02', NULL),
(1125, 'Raxaul Bazar', '2022-06-14 00:55:02', NULL),
(1126, 'Rayachoti', '2022-06-14 00:55:02', NULL),
(1127, 'Rayadurg', '2022-06-14 00:55:02', NULL),
(1128, 'Rayagada', '2022-06-14 00:55:02', NULL),
(1129, 'Reengus', '2022-06-14 00:55:02', NULL),
(1130, 'Rehli', '2022-06-14 00:55:02', NULL),
(1131, 'Renigunta', '2022-06-14 00:55:02', NULL),
(1132, 'Renukoot', '2022-06-14 00:55:02', NULL),
(1133, 'Reoti', '2022-06-14 00:55:02', NULL),
(1134, 'Repalle', '2022-06-14 00:55:02', NULL),
(1135, 'Revelganj', '2022-06-14 00:55:02', NULL),
(1136, 'Rewa', '2022-06-14 00:55:02', NULL),
(1137, 'Rewari', '2022-06-14 00:55:02', NULL),
(1138, 'Rishikesh', '2022-06-14 00:55:02', NULL),
(1139, 'Risod', '2022-06-14 00:55:02', NULL),
(1140, 'Robertsganj', '2022-06-14 00:55:02', NULL),
(1141, 'Robertson Pet', '2022-06-14 00:55:02', NULL),
(1142, 'Rohad', '2022-06-14 00:55:02', NULL),
(1143, 'Rohtak', '2022-06-14 00:55:02', NULL),
(1144, 'Ron', '2022-06-14 00:55:02', NULL),
(1145, 'Roorkee', '2022-06-14 00:55:02', NULL),
(1146, 'Rosera', '2022-06-14 00:55:02', NULL),
(1147, 'Rudauli', '2022-06-14 00:55:02', NULL),
(1148, 'Rudharpur', '2022-06-14 00:55:02', NULL),
(1149, 'Rudrapur', '2022-06-14 00:55:02', NULL),
(1150, 'Rupnagar', '2022-06-14 00:55:02', NULL),
(1151, 'Russia', '2022-06-14 00:55:02', NULL),
(1152, 'Sabalgarh', '2022-06-14 00:55:02', NULL),
(1153, 'Sadabad', '2022-06-14 00:55:02', NULL),
(1154, 'Sadalagi', '2022-06-14 00:55:02', NULL),
(1155, 'Sadasivpet', '2022-06-14 00:55:02', NULL),
(1156, 'Sadri', '2022-06-14 00:55:02', NULL),
(1157, 'Sadulpur', '2022-06-14 00:55:02', NULL),
(1158, 'Sadulshahar', '2022-06-14 00:55:02', NULL),
(1159, 'Safidon', '2022-06-14 00:55:02', NULL),
(1160, 'Safipur', '2022-06-14 00:55:02', NULL),
(1161, 'Sagar', '2022-06-14 00:55:02', NULL),
(1162, 'Sagara', '2022-06-14 00:55:02', NULL),
(1163, 'Sagwara', '2022-06-14 00:55:02', NULL),
(1164, 'Saharanpur', '2022-06-14 00:55:02', NULL),
(1165, 'Saharsa', '2022-06-14 00:55:02', NULL),
(1166, 'Sahaspur', '2022-06-14 00:55:02', NULL),
(1167, 'Sahaswan', '2022-06-14 00:55:02', NULL),
(1168, 'Sahawar', '2022-06-14 00:55:02', NULL),
(1169, 'Sahibganj', '2022-06-14 00:55:02', NULL),
(1170, 'Sahjanwa', '2022-06-14 00:55:02', NULL),
(1171, 'Saidpur', '2022-06-14 00:55:02', NULL),
(1172, 'Saiha', '2022-06-14 00:55:02', NULL),
(1173, 'Sailu', '2022-06-14 00:55:02', NULL),
(1174, 'Sainthia', '2022-06-14 00:55:02', NULL),
(1175, 'Sakaleshapura', '2022-06-14 00:55:02', NULL),
(1176, 'Sakti', '2022-06-14 00:55:02', NULL),
(1177, 'Salaya', '2022-06-14 00:55:02', NULL),
(1178, 'Salem', '2022-06-14 00:55:02', NULL),
(1179, 'Salur', '2022-06-14 00:55:02', NULL),
(1180, 'Samalkha', '2022-06-14 00:55:02', NULL),
(1181, 'Samalkot', '2022-06-14 00:55:02', NULL),
(1182, 'Samana', '2022-06-14 00:55:02', NULL),
(1183, 'Samastipur', '2022-06-14 00:55:02', NULL),
(1184, 'Sambalpur', '2022-06-14 00:55:02', NULL),
(1185, 'Sambhal', '2022-06-14 00:55:02', NULL),
(1186, 'Sambhar', '2022-06-14 00:55:02', NULL),
(1187, 'Samdhan', '2022-06-14 00:55:02', NULL),
(1188, 'Samthar', '2022-06-14 00:55:02', NULL),
(1189, 'Sanand', '2022-06-14 00:55:02', NULL),
(1190, 'Sanand, Gujarat.', '2022-06-14 00:55:02', NULL),
(1191, 'Sanawad', '2022-06-14 00:55:02', NULL),
(1192, 'Sanchore', '2022-06-14 00:55:02', NULL),
(1193, 'Sandi', '2022-06-14 00:55:02', NULL),
(1194, 'Sandila', '2022-06-14 00:55:02', NULL),
(1195, 'Sanduru', '2022-06-14 00:55:02', NULL),
(1196, 'Sangamner', '2022-06-14 00:55:02', NULL),
(1197, 'Sangareddi', '2022-06-14 00:55:02', NULL),
(1198, 'Sangareddy', '2022-06-14 00:55:02', NULL),
(1199, 'Sangaria', '2022-06-14 00:55:02', NULL),
(1200, 'Sangli', '2022-06-14 00:55:02', NULL),
(1201, 'Sangole', '2022-06-14 00:55:02', NULL),
(1202, 'Sangrur', '2022-06-14 00:55:02', NULL),
(1203, 'Sankarankovil', '2022-06-14 00:55:02', NULL),
(1204, 'Sankari', '2022-06-14 00:55:02', NULL),
(1205, 'Sankeshwara', '2022-06-14 00:55:02', NULL),
(1206, 'Santipur', '2022-06-14 00:55:02', NULL),
(1207, 'Saraikela', '2022-06-14 00:55:02', NULL),
(1208, 'Sarangpur', '2022-06-14 00:55:02', NULL),
(1209, 'Sardarshahar', '2022-06-14 00:55:02', NULL),
(1210, 'Sardhana', '2022-06-14 00:55:02', NULL),
(1211, 'Sarni', '2022-06-14 00:55:02', NULL),
(1212, 'Sarsod', '2022-06-14 00:55:02', NULL),
(1213, 'Sasaram', '2022-06-14 00:55:02', NULL),
(1214, 'Sasvad', '2022-06-14 00:55:02', NULL),
(1215, 'Satana', '2022-06-14 00:55:02', NULL),
(1216, 'Satara', '2022-06-14 00:55:02', NULL),
(1217, 'Satara, Pune', '2022-06-14 00:55:02', NULL),
(1218, 'Sathyamangalam', '2022-06-14 00:55:02', NULL),
(1219, 'Satna', '2022-06-14 00:55:02', NULL),
(1220, 'Sattenapalle', '2022-06-14 00:55:02', NULL),
(1221, 'Sattur', '2022-06-14 00:55:02', NULL),
(1222, 'Saudi Arabia', '2022-06-14 00:55:02', NULL),
(1223, 'Saunda', '2022-06-14 00:55:02', NULL),
(1224, 'Saundatti-Yellamma', '2022-06-14 00:55:02', NULL),
(1225, 'Sausar', '2022-06-14 00:55:02', NULL),
(1226, 'Savanur', '2022-06-14 00:55:02', NULL),
(1227, 'Savarkundla', '2022-06-14 00:55:02', NULL),
(1228, 'Savner', '2022-06-14 00:55:02', NULL),
(1229, 'Sawai Madhopur', '2022-06-14 00:55:02', NULL),
(1230, 'Sawantwadi', '2022-06-14 00:55:02', NULL),
(1231, 'Sedam', '2022-06-14 00:55:02', NULL),
(1232, 'Sehore', '2022-06-14 00:55:02', NULL),
(1233, 'Selam', '2022-06-14 00:55:02', NULL),
(1234, 'Sendhwa', '2022-06-14 00:55:02', NULL),
(1235, 'Seohara', '2022-06-14 00:55:02', NULL),
(1236, 'Seoni', '2022-06-14 00:55:02', NULL),
(1237, 'Seoni-Malwa', '2022-06-14 00:55:02', NULL),
(1238, 'Sevagram', '2022-06-14 00:55:02', NULL),
(1239, 'Shahabad', '2022-06-14 00:55:02', NULL),
(1240, 'Shahabad, Hardoi', '2022-06-14 00:55:02', NULL),
(1241, 'Shahabad, Rampur', '2022-06-14 00:55:02', NULL),
(1242, 'Shahade', '2022-06-14 00:55:02', NULL),
(1243, 'Shahbad', '2022-06-14 00:55:02', NULL),
(1244, 'Shahdol', '2022-06-14 00:55:02', NULL),
(1245, 'Shahganj', '2022-06-14 00:55:02', NULL),
(1246, 'Shahjahanpur', '2022-06-14 00:55:02', NULL),
(1247, 'Shahpur', '2022-06-14 00:55:02', NULL),
(1248, 'Shahpura', '2022-06-14 00:55:02', NULL),
(1249, 'Shajapur', '2022-06-14 00:55:02', NULL),
(1250, 'Shakya Plant Bharuch', '2022-06-14 00:55:02', NULL),
(1251, 'Shamgarh', '2022-06-14 00:55:02', NULL),
(1252, 'Shamli', '2022-06-14 00:55:02', NULL),
(1253, 'Shamsabad, Agra', '2022-06-14 00:55:02', NULL),
(1254, 'Shamsabad, Farrukhabad', '2022-06-14 00:55:02', NULL),
(1255, 'Shantiniketan', '2022-06-14 00:55:02', NULL),
(1256, 'Shegaon', '2022-06-14 00:55:02', NULL),
(1257, 'Sheikhpura', '2022-06-14 00:55:02', NULL),
(1258, 'Shendurjana', '2022-06-14 00:55:02', NULL),
(1259, 'Shenkottai', '2022-06-14 00:55:02', NULL),
(1260, 'Sheoganj', '2022-06-14 00:55:02', NULL),
(1261, 'Sheohar', '2022-06-14 00:55:02', NULL),
(1262, 'Sheopur', '2022-06-14 00:55:02', NULL),
(1263, 'Sherghati', '2022-06-14 00:55:02', NULL),
(1264, 'Sherkot', '2022-06-14 00:55:02', NULL),
(1265, 'Shiggaon', '2022-06-14 00:55:02', NULL),
(1266, 'Shikaripur', '2022-06-14 00:55:02', NULL),
(1267, 'Shikarpur, Bulandshahr', '2022-06-14 00:55:02', NULL),
(1268, 'Shikohabad', '2022-06-14 00:55:02', NULL),
(1269, 'Shillong', '2022-06-14 00:55:02', NULL),
(1270, 'Shimla', '2022-06-14 00:55:02', NULL),
(1271, 'Shirdi', '2022-06-14 00:55:02', NULL),
(1272, 'Shirpur-Warwade', '2022-06-14 00:55:02', NULL),
(1273, 'Shirur', '2022-06-14 00:55:02', NULL),
(1274, 'Shishgarh', '2022-06-14 00:55:02', NULL),
(1275, 'Shivamogga', '2022-06-14 00:55:02', NULL),
(1276, 'Shivpuri', '2022-06-14 00:55:02', NULL),
(1277, 'Sholavandan', '2022-06-14 00:55:02', NULL),
(1278, 'Sholingur', '2022-06-14 00:55:02', NULL),
(1279, 'Shoranur', '2022-06-14 00:55:02', NULL),
(1280, 'Shravanabelagola', '2022-06-14 00:55:02', NULL),
(1281, 'Shrigonda', '2022-06-14 00:55:02', NULL),
(1282, 'Shrirampur', '2022-06-14 00:55:02', NULL),
(1283, 'Shrirangapattana', '2022-06-14 00:55:02', NULL),
(1284, 'Shujalpur', '2022-06-14 00:55:02', NULL),
(1285, 'Siana', '2022-06-14 00:55:02', NULL),
(1286, 'Sibsagar', '2022-06-14 00:55:02', NULL),
(1287, 'Siddipet', '2022-06-14 00:55:02', NULL),
(1288, 'Sidhi', '2022-06-14 00:55:02', NULL),
(1289, 'Sidhpur', '2022-06-14 00:55:02', NULL),
(1290, 'Sidlaghatta', '2022-06-14 00:55:02', NULL),
(1291, 'Sihor', '2022-06-14 00:55:02', NULL),
(1292, 'Sihora', '2022-06-14 00:55:02', NULL),
(1293, 'Sikanderpur', '2022-06-14 00:55:02', NULL),
(1294, 'Sikandra Rao', '2022-06-14 00:55:02', NULL),
(1295, 'Sikandrabad', '2022-06-14 00:55:02', NULL),
(1296, 'Sikar', '2022-06-14 00:55:02', NULL),
(1297, 'Sikkim', '2022-06-14 00:55:02', NULL),
(1298, 'Silao', '2022-06-14 00:55:02', NULL),
(1299, 'Silapathar', '2022-06-14 00:55:02', NULL),
(1300, 'Silchar', '2022-06-14 00:55:02', NULL),
(1301, 'Siliguri', '2022-06-14 00:55:02', NULL),
(1302, 'Sillod', '2022-06-14 00:55:02', NULL),
(1303, 'Sillvassa', '2022-06-14 00:55:02', NULL),
(1304, 'Sillvassa, Daman', '2022-06-14 00:55:02', NULL),
(1305, 'Silvassa', '2022-06-14 00:55:02', NULL),
(1306, 'Simdega', '2022-06-14 00:55:02', NULL),
(1307, 'Sindagi', '2022-06-14 00:55:02', NULL),
(1308, 'Sindhagi', '2022-06-14 00:55:02', NULL),
(1309, 'Sindhnur', '2022-06-14 00:55:02', NULL),
(1310, 'Singrauli', '2022-06-14 00:55:02', NULL),
(1311, 'Sinnar', '2022-06-14 00:55:02', NULL),
(1312, 'Sira', '2022-06-14 00:55:02', NULL),
(1313, 'Sircilla', '2022-06-14 00:55:02', NULL),
(1314, 'Sirhind Fatehgarh Sahib', '2022-06-14 00:55:02', NULL),
(1315, 'Sirkali', '2022-06-14 00:55:02', NULL),
(1316, 'Sirohi', '2022-06-14 00:55:02', NULL),
(1317, 'Sironj', '2022-06-14 00:55:02', NULL),
(1318, 'Sirsa', '2022-06-14 00:55:02', NULL),
(1319, 'Sirsa- Haryana', '2022-06-14 00:55:02', NULL),
(1320, 'Sirsaganj', '2022-06-14 00:55:02', NULL),
(1321, 'Sirsi', '2022-06-14 00:55:02', NULL),
(1322, 'Siruguppa', '2022-06-14 00:55:02', NULL),
(1323, 'Sitamarhi', '2022-06-14 00:55:02', NULL),
(1324, 'Sitapur', '2022-06-14 00:55:02', NULL),
(1325, 'Sitarganj', '2022-06-14 00:55:02', NULL),
(1326, 'Siuri', '2022-06-14 00:55:02', NULL),
(1327, 'Sivaganga', '2022-06-14 00:55:02', NULL),
(1328, 'Sivagiri', '2022-06-14 00:55:02', NULL),
(1329, 'Sivakasi', '2022-06-14 00:55:02', NULL),
(1330, 'Siwan', '2022-06-14 00:55:02', NULL),
(1331, 'Sohagpur', '2022-06-14 00:55:02', NULL),
(1332, 'Sohna', '2022-06-14 00:55:02', NULL),
(1333, 'Sojat', '2022-06-14 00:55:02', NULL),
(1334, 'Solan', '2022-06-14 00:55:02', NULL),
(1335, 'Solapur', '2022-06-14 00:55:02', NULL),
(1336, 'Sonamukhi', '2022-06-14 00:55:02', NULL),
(1337, 'Sonepat', '2022-06-14 00:55:02', NULL),
(1338, 'Sonepur', '2022-06-14 00:55:02', NULL),
(1339, 'Songadh', '2022-06-14 00:55:02', NULL),
(1340, 'Sonipat', '2022-06-14 00:55:02', NULL),
(1341, 'Sopore', '2022-06-14 00:55:02', NULL),
(1342, 'Soro', '2022-06-14 00:55:02', NULL),
(1343, 'Soron', '2022-06-14 00:55:02', NULL),
(1344, 'Soyagaon', '2022-06-14 00:55:02', NULL),
(1345, 'Sri Madhopur', '2022-06-14 00:55:02', NULL),
(1346, 'Srikakulam', '2022-06-14 00:55:02', NULL),
(1347, 'Srikalahasti', '2022-06-14 00:55:02', NULL),
(1348, 'Srinagar', '2022-06-14 00:55:02', NULL),
(1349, 'Srinivaspur', '2022-06-14 00:55:02', NULL),
(1350, 'Srirampore', '2022-06-14 00:55:02', NULL),
(1351, 'Srisailam Project (Right Flank Colony) Township', '2022-06-14 00:55:02', NULL),
(1352, 'Srivilliputhur', '2022-06-14 00:55:02', NULL),
(1353, 'Sugauli', '2022-06-14 00:55:02', NULL),
(1354, 'Sujangarh', '2022-06-14 00:55:02', NULL),
(1355, 'Sujanpur', '2022-06-14 00:55:02', NULL),
(1356, 'Sullurpeta', '2022-06-14 00:55:02', NULL),
(1357, 'Sultanganj', '2022-06-14 00:55:02', NULL),
(1358, 'Sultanpur', '2022-06-14 00:55:02', NULL),
(1359, 'Sultanpur, New Delhi', '2022-06-14 00:55:02', NULL),
(1360, 'Sumerpur', '2022-06-14 00:55:02', NULL),
(1361, 'Sunabeda', '2022-06-14 00:55:02', NULL),
(1362, 'Sunam', '2022-06-14 00:55:02', NULL),
(1363, 'Sundargarh', '2022-06-14 00:55:02', NULL),
(1364, 'Sundarnagar', '2022-06-14 00:55:02', NULL),
(1365, 'Supaul', '2022-06-14 00:55:02', NULL),
(1366, 'Surandai', '2022-06-14 00:55:02', NULL),
(1367, 'Surapura', '2022-06-14 00:55:02', NULL),
(1368, 'Surat', '2022-06-14 00:55:02', NULL),
(1369, 'Suratgarh', '2022-06-14 00:55:02', NULL),
(1370, 'SUrban Agglomerationr', '2022-06-14 00:55:02', NULL),
(1371, 'Surendranagar', '2022-06-14 00:55:02', NULL),
(1372, 'Suri', '2022-06-14 00:55:02', NULL),
(1373, 'Suriyampalayam', '2022-06-14 00:55:02', NULL),
(1374, 'Suryapet', '2022-06-14 00:55:02', NULL),
(1375, 'Tadepalligudem', '2022-06-14 00:55:02', NULL),
(1376, 'Tadpatri', '2022-06-14 00:55:02', NULL),
(1377, 'Takhatgarh', '2022-06-14 00:55:02', NULL),
(1378, 'Taki', '2022-06-14 00:55:02', NULL),
(1379, 'Talaja', '2022-06-14 00:55:02', NULL),
(1380, 'Talcher', '2022-06-14 00:55:02', NULL),
(1381, 'Talegaon Dabhade', '2022-06-14 00:55:02', NULL),
(1382, 'Talikota', '2022-06-14 00:55:02', NULL),
(1383, 'Taliparamba', '2022-06-14 00:55:02', NULL),
(1384, 'Talode', '2022-06-14 00:55:02', NULL),
(1385, 'Talwara', '2022-06-14 00:55:02', NULL),
(1386, 'Tamil Nadu', '2022-06-14 00:55:02', NULL),
(1387, 'Tamluk', '2022-06-14 00:55:02', NULL),
(1388, 'Tanda', '2022-06-14 00:55:02', NULL),
(1389, 'Tandur', '2022-06-14 00:55:02', NULL),
(1390, 'Tanjore', '2022-06-14 00:55:02', NULL),
(1391, 'Tanuku', '2022-06-14 00:55:02', NULL),
(1392, 'Tarakeswar', '2022-06-14 00:55:02', NULL),
(1393, 'Tarana', '2022-06-14 00:55:02', NULL),
(1394, 'Taranagar', '2022-06-14 00:55:02', NULL),
(1395, 'Taraori', '2022-06-14 00:55:02', NULL),
(1396, 'Tarbha', '2022-06-14 00:55:02', NULL),
(1397, 'Tarikere', '2022-06-14 00:55:02', NULL),
(1398, 'Tarn Taran', '2022-06-14 00:55:02', NULL),
(1399, 'Tasgaon', '2022-06-14 00:55:02', NULL),
(1400, 'Tauru', '2022-06-14 00:55:02', NULL),
(1401, 'Tauru Haryana', '2022-06-14 00:55:02', NULL),
(1402, 'Teekli', '2022-06-14 00:55:02', NULL),
(1403, 'Tehri', '2022-06-14 00:55:02', NULL),
(1404, 'Tekkalakote', '2022-06-14 00:55:02', NULL),
(1405, 'Telangana', '2022-06-14 00:55:02', NULL),
(1406, 'Telungana', '2022-06-14 00:55:02', NULL),
(1407, 'Tenali', '2022-06-14 00:55:02', NULL),
(1408, 'Tenkasi', '2022-06-14 00:55:02', NULL),
(1409, 'Tenu dam-cum-Kathhara', '2022-06-14 00:55:02', NULL),
(1410, 'Terdal', '2022-06-14 00:55:02', NULL),
(1411, 'Tezpur', '2022-06-14 00:55:02', NULL),
(1412, 'Thakurdwara', '2022-06-14 00:55:02', NULL),
(1413, 'Thalassery', '2022-06-14 00:55:02', NULL),
(1414, 'Thammampatti', '2022-06-14 00:55:02', NULL),
(1415, 'Thana Bhawan', '2022-06-14 00:55:02', NULL),
(1416, 'Thane', '2022-06-14 00:55:02', NULL),
(1417, 'Thanesar', '2022-06-14 00:55:02', NULL),
(1418, 'Thangadh', '2022-06-14 00:55:02', NULL),
(1419, 'Thanjavur', '2022-06-14 00:55:02', NULL),
(1420, 'Tharad', '2022-06-14 00:55:02', NULL),
(1421, 'Tharamangalam', '2022-06-14 00:55:02', NULL),
(1422, 'Tharangambadi', '2022-06-14 00:55:02', NULL),
(1423, 'Theni Allinagaram', '2022-06-14 00:55:02', NULL),
(1424, 'Thirumangalam', '2022-06-14 00:55:02', NULL),
(1425, 'Thirupuvanam', '2022-06-14 00:55:02', NULL),
(1426, 'Thiruthuraipoondi', '2022-06-14 00:55:02', NULL),
(1427, 'Thiruvalla', '2022-06-14 00:55:02', NULL),
(1428, 'Thiruvallur', '2022-06-14 00:55:02', NULL),
(1429, 'Thiruvananthapuram', '2022-06-14 00:55:02', NULL),
(1430, 'Thiruvarur', '2022-06-14 00:55:02', NULL),
(1431, 'Thodupuzha', '2022-06-14 00:55:02', NULL),
(1432, 'Thoubal', '2022-06-14 00:55:02', NULL),
(1433, 'Thrissur', '2022-06-14 00:55:02', NULL),
(1434, 'Thrissure', '2022-06-14 00:55:02', NULL),
(1435, 'Thuraiyur', '2022-06-14 00:55:02', NULL),
(1436, 'Tikamgarh', '2022-06-14 00:55:02', NULL),
(1437, 'Tilda Newra', '2022-06-14 00:55:02', NULL),
(1438, 'Tilhar', '2022-06-14 00:55:02', NULL),
(1439, 'Tindivanam', '2022-06-14 00:55:02', NULL),
(1440, 'Tinsukia', '2022-06-14 00:55:02', NULL),
(1441, 'Tiptur', '2022-06-14 00:55:02', NULL),
(1442, 'Tirora', '2022-06-14 00:55:02', NULL),
(1443, 'Tiruchchirappalli', '2022-06-14 00:55:02', NULL),
(1444, 'Tiruchendur', '2022-06-14 00:55:02', NULL),
(1445, 'Tiruchengode', '2022-06-14 00:55:02', NULL),
(1446, 'Tiruchirappalli', '2022-06-14 00:55:02', NULL),
(1447, 'Tirukalukundram', '2022-06-14 00:55:02', NULL),
(1448, 'Tirukkoyilur', '2022-06-14 00:55:02', NULL),
(1449, 'Tirunelveli', '2022-06-14 00:55:02', NULL),
(1450, 'Tirupathur', '2022-06-14 00:55:02', NULL),
(1451, 'Tirupati', '2022-06-14 00:55:02', NULL),
(1452, 'Tiruppur', '2022-06-14 00:55:02', NULL),
(1453, 'Tirur', '2022-06-14 00:55:02', NULL),
(1454, 'Tiruttani', '2022-06-14 00:55:02', NULL),
(1455, 'Tiruvannamalai', '2022-06-14 00:55:02', NULL),
(1456, 'Tiruvethipuram', '2022-06-14 00:55:02', NULL),
(1457, 'Tiruvuru', '2022-06-14 00:55:02', NULL),
(1458, 'Tirwaganj', '2022-06-14 00:55:02', NULL),
(1459, 'Titagarh', '2022-06-14 00:55:02', NULL),
(1460, 'Titlagarh', '2022-06-14 00:55:02', NULL),
(1461, 'Tittakudi', '2022-06-14 00:55:02', NULL),
(1462, 'Todabhim', '2022-06-14 00:55:02', NULL),
(1463, 'Todaraisingh', '2022-06-14 00:55:02', NULL),
(1464, 'Tohana', '2022-06-14 00:55:02', NULL),
(1465, 'Tonk', '2022-06-14 00:55:02', NULL),
(1466, 'Tripura', '2022-06-14 00:55:02', NULL),
(1467, 'Trivandrum', '2022-06-14 00:55:02', NULL),
(1468, 'Trivendram', '2022-06-14 00:55:02', NULL),
(1469, 'Tuensang', '2022-06-14 00:55:02', NULL),
(1470, 'Tuljapur', '2022-06-14 00:55:02', NULL),
(1471, 'Tulsipur', '2022-06-14 00:55:02', NULL),
(1472, 'Tumkur', '2022-06-14 00:55:02', NULL),
(1473, 'Tumkuru', '2022-06-14 00:55:02', NULL),
(1474, 'Tumsar', '2022-06-14 00:55:02', NULL),
(1475, 'Tundla', '2022-06-14 00:55:02', NULL),
(1476, 'Tuni', '2022-06-14 00:55:02', NULL),
(1477, 'Tura', '2022-06-14 00:55:02', NULL),
(1478, 'Tuticorin', '2022-06-14 00:55:02', NULL),
(1479, 'Uchgaon', '2022-06-14 00:55:02', NULL),
(1480, 'Udaipur', '2022-06-14 00:55:02', NULL),
(1481, 'Udaipurwati', '2022-06-14 00:55:02', NULL),
(1482, 'Udayagiri', '2022-06-14 00:55:02', NULL),
(1483, 'Udgir', '2022-06-14 00:55:02', NULL),
(1484, 'Udhagamandalam', '2022-06-14 00:55:02', NULL),
(1485, 'Udhampur', '2022-06-14 00:55:02', NULL),
(1486, 'Udumalaipettai', '2022-06-14 00:55:02', NULL),
(1487, 'Udupi', '2022-06-14 00:55:02', NULL),
(1488, 'Ujhani', '2022-06-14 00:55:02', NULL),
(1489, 'Ujjain', '2022-06-14 00:55:02', NULL),
(1490, 'Ulhasnagar', '2022-06-14 00:55:02', NULL),
(1491, 'Umarga', '2022-06-14 00:55:02', NULL),
(1492, 'Umaria', '2022-06-14 00:55:02', NULL),
(1493, 'Umarkhed', '2022-06-14 00:55:02', NULL),
(1494, 'Umbergaon', '2022-06-14 00:55:02', NULL),
(1495, 'Umred', '2022-06-14 00:55:02', NULL),
(1496, 'Umreth', '2022-06-14 00:55:02', NULL),
(1497, 'Una', '2022-06-14 00:55:02', NULL),
(1498, 'Unjha', '2022-06-14 00:55:02', NULL),
(1499, 'Unnamalaikadai', '2022-06-14 00:55:02', NULL),
(1500, 'Unnao', '2022-06-14 00:55:02', NULL),
(1501, 'Upleta', '2022-06-14 00:55:02', NULL),
(1502, 'Upleta', '2022-06-14 00:55:02', NULL),
(1503, 'Uran Islampur', '2022-06-14 00:55:02', NULL),
(1504, 'Uravakonda', '2022-06-14 00:55:02', NULL),
(1505, 'Urmar Tanda', '2022-06-14 00:55:02', NULL),
(1506, 'Usilampatti', '2022-06-14 00:55:02', NULL),
(1507, 'Uthamapalayam', '2022-06-14 00:55:02', NULL),
(1508, 'Uthiramerur', '2022-06-14 00:55:02', NULL),
(1509, 'Utraula', '2022-06-14 00:55:02', NULL),
(1510, 'Uttar Pradesh', '2022-06-14 00:55:02', NULL),
(1511, 'Uttarakhand', '2022-06-14 00:55:02', NULL),
(1512, 'Vadakkuvalliyur', '2022-06-14 00:55:02', NULL),
(1513, 'Vadalur', '2022-06-14 00:55:02', NULL),
(1514, 'Vadgaon Kasba', '2022-06-14 00:55:02', NULL),
(1515, 'Vadipatti', '2022-06-14 00:55:02', NULL),
(1516, 'Vadnagar', '2022-06-14 00:55:02', NULL),
(1517, 'Vadodara', '2022-06-14 00:55:02', NULL),
(1518, 'Vaijapur', '2022-06-14 00:55:02', NULL),
(1519, 'Vaikom', '2022-06-14 00:55:02', NULL),
(1520, 'Valparai', '2022-06-14 00:55:02', NULL),
(1521, 'Valsad', '2022-06-14 00:55:02', NULL),
(1522, 'Valsad, Gujrat', '2022-06-14 00:55:02', NULL),
(1523, 'Vandavasi', '2022-06-14 00:55:02', NULL),
(1524, 'Vaniyambadi', '2022-06-14 00:55:02', NULL),
(1525, 'Vapi', '2022-06-14 00:55:02', NULL),
(1526, 'Varanasi', '2022-06-14 00:55:02', NULL),
(1527, 'Varkala', '2022-06-14 00:55:02', NULL),
(1528, 'Varnavasi', '2022-06-14 00:55:02', NULL),
(1529, 'Vasai, Mumbai', '2022-06-14 00:55:02', NULL),
(1530, 'Vasai-Virar', '2022-06-14 00:55:02', NULL),
(1531, 'Vatakara', '2022-06-14 00:55:02', NULL),
(1532, 'Vedaranyam', '2022-06-14 00:55:02', NULL),
(1533, 'Vellakoil', '2022-06-14 00:55:02', NULL),
(1534, 'Vellore', '2022-06-14 00:55:02', NULL),
(1535, 'Venkatagiri', '2022-06-14 00:55:02', NULL),
(1536, 'Veraval', '2022-06-14 00:55:02', NULL),
(1537, 'Vidisha', '2022-06-14 00:55:02', NULL),
(1538, 'Vijainagar, Ajmer', '2022-06-14 00:55:02', NULL),
(1539, 'Vijapur', '2022-06-14 00:55:02', NULL),
(1540, 'Vijayapura', '2022-06-14 00:55:02', NULL),
(1541, 'Vijayawada', '2022-06-14 00:55:02', NULL),
(1542, 'Vijaypur', '2022-06-14 00:55:02', NULL),
(1543, 'Vikarabad', '2022-06-14 00:55:02', NULL),
(1544, 'Vikramasingapuram', '2022-06-14 00:55:02', NULL),
(1545, 'Viluppuram', '2022-06-14 00:55:02', NULL),
(1546, 'Vinukonda', '2022-06-14 00:55:02', NULL),
(1547, 'Viramgam', '2022-06-14 00:55:02', NULL),
(1548, 'Virudhachalam', '2022-06-14 00:55:02', NULL),
(1549, 'Virudhunagar', '2022-06-14 00:55:02', NULL),
(1550, 'Visakhapatnam', '2022-06-14 00:55:02', NULL),
(1551, 'Visnagar', '2022-06-14 00:55:02', NULL),
(1552, 'Viswanatham', '2022-06-14 00:55:02', NULL),
(1553, 'Vita', '2022-06-14 00:55:02', NULL),
(1554, 'Vizag', '2022-06-14 00:55:02', NULL),
(1555, 'Vizianagaram', '2022-06-14 00:55:02', NULL),
(1556, 'Vrindavan', '2022-06-14 00:55:02', NULL),
(1557, 'Vyara', '2022-06-14 00:55:02', NULL),
(1558, 'Wadgaon Road', '2022-06-14 00:55:02', NULL),
(1559, 'Wadhwan', '2022-06-14 00:55:02', NULL),
(1560, 'Wadi', '2022-06-14 00:55:02', NULL),
(1561, 'Wai', '2022-06-14 00:55:02', NULL),
(1562, 'Wanaparthy', '2022-06-14 00:55:02', NULL),
(1563, 'Wani', '2022-06-14 00:55:02', NULL),
(1564, 'Wankaner', '2022-06-14 00:55:02', NULL),
(1565, 'Wara Seoni', '2022-06-14 00:55:02', NULL),
(1566, 'Warangal', '2022-06-14 00:55:02', NULL),
(1567, 'Wardha', '2022-06-14 00:55:02', NULL),
(1568, 'Warhapur', '2022-06-14 00:55:02', NULL),
(1569, 'Warisaliganj', '2022-06-14 00:55:02', NULL),
(1570, 'Warora', '2022-06-14 00:55:02', NULL),
(1571, 'Warud', '2022-06-14 00:55:02', NULL),
(1572, 'Washim', '2022-06-14 00:55:02', NULL),
(1573, 'West Bengal', '2022-06-14 00:55:02', NULL),
(1574, 'Wokha', '2022-06-14 00:55:02', NULL),
(1575, 'Yadgir', '2022-06-14 00:55:02', NULL),
(1576, 'Yamunanagar', '2022-06-14 00:55:02', NULL),
(1577, 'Yanam', '2022-06-14 00:55:02', NULL),
(1578, 'Yavatmal', '2022-06-14 00:55:02', NULL),
(1579, 'Yawal', '2022-06-14 00:55:02', NULL),
(1580, 'Yellandu', '2022-06-14 00:55:02', NULL),
(1581, 'Yemmiganur', '2022-06-14 00:55:02', NULL),
(1582, 'Yerraguntla', '2022-06-14 00:55:02', NULL),
(1583, 'Yevla', '2022-06-14 00:55:02', NULL),
(1584, 'Zaidpur', '2022-06-14 00:55:02', NULL),
(1585, 'Zamania', '2022-06-14 00:55:02', NULL),
(1586, 'Zira', '2022-06-14 00:55:02', NULL),
(1587, 'Zirakpur', '2022-06-14 00:55:02', NULL),
(1588, 'Zirakpur Saha', '2022-06-14 00:55:02', NULL),
(1589, 'Zunheboto', '2022-06-14 00:55:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Customer_Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Contact_Number` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `POC_Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `Customer_Name`, `Contact_Number`, `POC_Name`, `Email`, `created_at`, `updated_at`) VALUES
(118, 'Ambuja Cement', '8888008098', 'kartik', 'g@c.com', '2022-08-23 06:48:38', '2022-08-23 06:48:38'),
(119, 'Ambuja Cement', '8888008659', 'weenky morios', 'g@c.com', '2022-08-23 06:49:26', '2022-08-23 06:49:26'),
(120, 'Holisol India', NULL, 'kartik', 'g@c.com', '2022-08-23 06:53:51', '2022-08-23 06:53:51'),
(121, 'Ambuja Cement', '8888008098', 'kartik', 'g@c.com', '2022-08-24 12:36:31', '2022-08-24 12:36:31'),
(122, 'raja kumari', '8343473293', 'second', 'g@c.com', '2022-08-26 05:53:48', '2022-08-26 05:53:48'),
(123, 'Ultratech', '1345345323', 'Desirae Moses', 'g@c.com', '2022-08-26 06:20:46', '2022-08-26 06:20:46'),
(124, 'raja kumari', '8343473293', 'second', 'g@c.com', '2022-08-26 07:05:48', '2022-08-26 07:05:48'),
(125, 'Ambuja Cement', '8888008098', 'kartik', 'g@c.com', '2022-08-26 09:30:26', '2022-08-26 09:30:26'),
(126, 'holiscope234', '7018916636', 'kartik', 'g@c.com', '2022-12-24 06:30:23', '2022-12-24 06:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Retail BD Head', '1', '2022-06-14 01:50:19', NULL),
(2, 'IPL BD Head', '1', '2022-06-14 01:50:19', NULL),
(3, 'Tech BD Head', '1', '2022-06-14 01:50:19', NULL),
(4, 'Retail BD', '1', '2022-06-14 01:50:19', NULL),
(5, 'Tech BD', '1', '2022-06-14 01:50:19', NULL),
(6, 'Admin', '1', '2022-06-14 01:50:19', NULL),
(7, 'Super Admin', '1', '2022-06-14 01:50:19', NULL),
(8, 'IPL BD', '1', '2022-06-14 01:50:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `followups`
--

CREATE TABLE `followups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lead_id` bigint(20) UNSIGNED DEFAULT NULL,
  `Follow_up_date` datetime DEFAULT NULL,
  `Remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `followed_up_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Automotive', '2022-06-14 02:32:54', NULL),
(2, 'E-commerce', '2022-06-14 02:32:54', NULL),
(3, 'Engineering', '2022-06-14 02:32:54', NULL),
(4, 'Fashion & Lifestyle', '2022-06-14 02:32:54', NULL),
(5, 'FMCG', '2022-06-14 02:32:54', NULL),
(6, 'FMCD', '2022-06-14 02:32:54', NULL),
(7, 'Health & Personal Care', '2022-06-14 02:32:54', NULL),
(8, 'Heavy Machinery/Construction', '2022-06-14 02:32:54', NULL),
(9, 'Information Technology', '2022-06-14 02:32:54', NULL),
(10, 'Logistics', '2022-06-14 02:32:54', NULL),
(11, 'Manufacturing', '2022-06-14 02:32:54', NULL),
(12, 'Others', '2022-06-14 02:32:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lob_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(11) UNSIGNED DEFAULT NULL,
  `lead_description` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Customer_Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Contact_Number` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `POC_Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Industry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Lead_Source` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `First_Contact_Date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Lead_Status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lead_source_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lost_reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dormant_reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_requirements` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks_for_legal` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agreement_finalized` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_onboarded` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `cost_center` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `legal_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `finance_user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `lob_id`, `user_id`, `created_by`, `lead_description`, `Customer_Name`, `Contact_Number`, `POC_Name`, `Industry`, `Lead_Source`, `Email`, `First_Contact_Date`, `Lead_Status`, `lead_source_id`, `created_at`, `updated_at`, `stage`, `lost_reason`, `dormant_reason`, `Reason`, `map_requirements`, `remarks_for_legal`, `agreement_finalized`, `business_onboarded`, `customer_id`, `cost_center`, `legal_user_id`, `finance_user_id`) VALUES
(239, NULL, 6, 6, 'test', 'Ambuja Cement', '8888008098', 'kartik', 'Engineering', 'Existing Business', 'g@c.com', '2022-08-23', 'Prospect', NULL, '2022-08-23 06:48:38', '2022-08-23 06:48:38', 'Lead', NULL, NULL, NULL, 'No', NULL, NULL, NULL, 64, NULL, NULL, NULL),
(240, NULL, 6, 6, 'yes', 'Ambuja Cement', '8888008659', 'weenky morios', 'Engineering', 'Email Marketing', 'g@c.com', '2022-08-23', 'Prospect', NULL, '2022-08-23 06:49:26', '2022-08-23 06:49:26', 'Lead', NULL, NULL, NULL, 'No', NULL, NULL, NULL, 64, NULL, NULL, NULL),
(241, NULL, 6, 6, 'yes', 'Holisol India', '8888889775', 'kartik', 'Extra Industry', 'Extra Lead Source', 'g@c.com', '2022-08-23', 'Agreement Finalized', NULL, '2022-08-23 06:53:51', '2022-12-24 06:33:59', 'Agreement', NULL, NULL, NULL, 'No', NULL, 'Yes', 'Awaiting', 65, 'RETAIL-FC_FSL-Avon', 6, 6),
(242, NULL, 6, 6, 'test', 'Ambuja Cement', '8888008098', 'kartik', 'Engineering', 'Social Media', 'g@c.com', '2022-08-24', 'Prospect', NULL, '2022-08-24 12:36:31', '2022-08-24 12:36:31', 'Lead', NULL, NULL, NULL, 'No', NULL, NULL, NULL, 64, NULL, NULL, NULL),
(243, NULL, 6, 6, 'yeseer', 'raja kumari', '8343473293', 'second', 'Information Technology', 'Existing Business', 'g@c.com', '2022-08-26', 'Prospect', NULL, '2022-08-26 05:53:48', '2022-08-26 05:53:48', 'Lead', NULL, NULL, NULL, 'No', NULL, NULL, NULL, 66, NULL, NULL, NULL),
(244, NULL, 6, 6, 'yes333', 'Ultratech', '1345345323', 'Desirae Moses', 'Heavy Machinery/Construction', 'testing value', 'g@c.com', '2022-08-26', 'Finance Verified', NULL, '2022-08-26 06:20:46', '2022-08-26 06:55:29', 'Business Onboarded', NULL, NULL, NULL, 'No', NULL, 'Yes', 'Yes', 67, 'RETAIL-FC_MFC Bamnoli 2', 6, 6),
(245, NULL, 6, 6, 'dgsdggs', 'raja kumari', '8343473293', 'second', 'Information Technology', 'Employee Referral', 'g@c.com', '2022-08-26', 'Finance Verified', NULL, '2022-08-26 07:05:48', '2022-08-26 07:09:59', 'Business Onboarded', NULL, NULL, NULL, 'No', NULL, 'Yes', 'Yes', 66, 'RETAIL-FC_FSL Herbalife', 6, 6),
(246, NULL, 6, 6, 'descripiuifief', 'Ambuja Cement', '8888008098', 'kartik', 'Engineering', 'Email Marketing', 'g@c.com', '2022-08-26', 'Proposal Not Shared', NULL, '2022-08-26 09:30:26', '2022-08-28 16:36:53', 'Requirements Mapping', NULL, NULL, NULL, 'No', NULL, NULL, NULL, 64, NULL, NULL, NULL),
(247, NULL, 6, 6, 'yes ccc', 'holiscope234', '7018916636', 'kartik', 'Information Technology', 'Customer Reference', 'g@c.com', '2022-12-24', 'Proposal Submitted', NULL, '2022-12-24 06:30:23', '2022-12-24 06:32:32', 'Proposal', NULL, NULL, NULL, 'No', NULL, NULL, NULL, 68, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lead_executed_agreements`
--

CREATE TABLE `lead_executed_agreements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lead_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expiry_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lead_executed_agreements`
--

INSERT INTO `lead_executed_agreements` (`id`, `lead_id`, `user_id`, `remarks`, `document_upload`, `start_date`, `expiry_date`, `created_at`, `updated_at`) VALUES
(8, 241, 6, 'agrrement is now finalized', '1661239495New_Activity Module_Holisight.jpg', '2022-08-23', '2022-08-25', '2022-08-23 07:24:55', '2022-08-23 07:24:55'),
(9, 244, 6, 'agrrement is now finalized', '1661495540New_Activity Module_Holisight.jpg', '2022-08-26', '2022-08-27', '2022-08-26 06:32:20', '2022-08-26 06:32:20'),
(10, 244, 6, 'agrrement is now finalized', '1661495734New_Activity Module_Holisight.jpg', '2022-08-26', '2022-08-27', '2022-08-26 06:35:34', '2022-08-26 06:35:34'),
(11, 244, 6, 'agrrement is now finalized', '1661496115New_Activity Module_Holisight.jpg', '2022-08-26', '2022-08-27', '2022-08-26 06:41:55', '2022-08-26 06:41:55'),
(12, 244, 6, 'agrrement is now finalized', '1661496582New_Activity Module_Holisight.jpg', '2022-08-26', '2022-09-03', '2022-08-26 06:49:42', '2022-08-26 06:49:42'),
(13, 244, 6, 'agrrement is now finalized', '1661496902New_Activity Module_Holisight.jpg', '2022-08-26', '2022-08-27', '2022-08-26 06:55:02', '2022-08-26 06:55:02'),
(14, 245, 6, 'huh', '1661497741New_Activity Module_Holisight.jpg', '2022-08-26', '2022-08-27', '2022-08-26 07:09:01', '2022-08-26 07:09:01'),
(15, 241, 6, 'huh', '1671863639holisol.jpg', '2022-12-24', '2022-12-24', '2022-12-24 06:33:59', '2022-12-24 06:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `lead_logs`
--

CREATE TABLE `lead_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lead_id` bigint(20) UNSIGNED DEFAULT NULL,
  `lead_owner_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `lead_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lead_stage` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lead_logs`
--

INSERT INTO `lead_logs` (`id`, `lead_id`, `lead_owner_id`, `user_id`, `lead_status`, `lead_stage`, `message`, `created_at`, `updated_at`) VALUES
(884, 239, 6, 6, 'Prospect', 'Lead', 'Lead Created Successfully', '2022-08-23 06:48:38', '2022-08-23 06:48:38'),
(885, 240, 6, 6, 'Prospect', 'Lead', 'Lead Created Successfully', '2022-08-23 06:49:26', '2022-08-23 06:49:26'),
(886, 241, 6, 6, 'Prospect', 'Lead', 'Lead Created Successfully', '2022-08-23 06:53:51', '2022-08-23 06:53:51'),
(887, 241, 6, 6, 'Qualified', 'Lead', 'Lead Status Changed to  Qualified', '2022-08-23 07:01:10', '2022-08-23 07:01:10'),
(888, 241, 6, 6, 'Qualified', 'Lead', 'Requirements mapping done  ', '2022-08-23 07:05:31', '2022-08-23 07:05:31'),
(889, 241, 6, 6, 'Proposal To Be Shared', 'Requirements Mapping', 'Business Proposal Shared', '2022-08-23 07:05:31', '2022-08-23 07:05:31'),
(890, 241, 6, 6, 'Proposal To Be Shared', 'Requirements Mapping', 'Requirements mapping done  ', '2022-08-23 07:06:04', '2022-08-23 07:06:04'),
(891, 241, 6, 6, 'Proposal To Be Shared', 'Requirements Mapping', 'Business Proposal Shared', '2022-08-23 07:06:04', '2022-08-23 07:06:04'),
(892, 241, 6, 6, 'Proposal To Be Shared', 'Requirements Mapping', 'Requirements mapping done  ', '2022-08-23 07:06:04', '2022-08-23 07:06:04'),
(893, 241, 6, 6, 'Proposal To Be Shared', 'Requirements Mapping', 'Business Proposal Shared', '2022-08-23 07:06:04', '2022-08-23 07:06:04'),
(894, 241, 6, 6, 'Proposal To Be Shared', 'Requirements Mapping', 'Requirements mapping done  ', '2022-08-23 07:12:44', '2022-08-23 07:12:44'),
(895, 241, 6, 6, 'Proposal To Be Shared', 'Requirements Mapping', 'Business Proposal Shared', '2022-08-23 07:12:44', '2022-08-23 07:12:44'),
(896, 241, 6, 6, 'Proposal Submitted', 'Proposal', 'Business Proposal Submitted ', '2022-08-23 07:12:53', '2022-08-23 07:12:53'),
(897, 241, 6, 6, 'Pending Verification', 'Proposal', 'Customer details updated by Admin', '2022-08-23 07:13:47', '2022-08-23 07:13:47'),
(898, 241, 6, 6, 'Pending Verification', 'Proposal', 'Customer details updated by Admin', '2022-08-23 07:21:40', '2022-08-23 07:21:40'),
(899, 241, 6, 6, 'Proposal Submitted', 'Proposal', 'Business Proposal Submitted ', '2022-08-23 07:21:51', '2022-08-23 07:21:51'),
(900, 241, 6, 6, 'Proposal Submitted', 'Proposal', 'Customer details updated by Admin', '2022-08-23 07:22:01', '2022-08-23 07:22:01'),
(901, 241, 6, 6, 'Proposal Accepted', 'Proposal', 'Business Proposal Acccepted ', '2022-08-23 07:23:02', '2022-08-23 07:23:02'),
(902, 241, 6, 6, 'Document Revision', 'Agreement', 'Lead data sent to Legal Team ', '2022-08-23 07:23:19', '2022-08-23 07:23:19'),
(903, 241, 6, 6, 'Document Revision', 'Agreement', 'Legal Team Sent Executed Document and remarks ', '2022-08-23 07:23:43', '2022-08-23 07:23:43'),
(904, 241, 6, 6, 'Document Finalized', 'Agreement', 'Lead Agreement Finalized', '2022-08-23 07:24:35', '2022-08-23 07:24:35'),
(905, 241, 6, 6, 'Agreement Finalized', 'Agreement', 'Uploaded Legal Executed Agreement', '2022-08-23 07:24:55', '2022-08-23 07:24:55'),
(906, 241, 6, 6, 'Finance Verified', 'Agreement', 'Customer details verified by Admin', '2022-08-23 07:25:25', '2022-08-23 07:25:25'),
(907, 241, 6, 6, 'Document Revision', 'Agreement', 'Lead data sent to Legal Team ', '2022-08-23 11:08:40', '2022-08-23 11:08:40'),
(908, 241, 6, 6, 'Document Revision', 'Agreement', 'Legal Team Sent Executed Document and remarks ', '2022-08-23 11:08:54', '2022-08-23 11:08:54'),
(909, 241, 6, 6, 'Document Revision', 'Agreement', 'Lead data sent to Legal Team ', '2022-08-23 11:10:41', '2022-08-23 11:10:41'),
(910, 241, 6, 6, 'Document Revision', 'Agreement', 'Legal Team Sent Executed Document and remarks ', '2022-08-23 11:10:59', '2022-08-23 11:10:59'),
(911, 241, 6, 6, 'Document Revision', 'Agreement', 'Lead data sent to Legal Team ', '2022-08-23 11:46:25', '2022-08-23 11:46:25'),
(912, 241, 6, 6, 'Document Revision', 'Agreement', 'Legal Team Sent Executed Document and remarks ', '2022-08-23 11:46:52', '2022-08-23 11:46:52'),
(913, 241, 6, 6, 'Proposal Submitted', 'Proposal', 'Business Proposal Submitted ', '2022-08-23 11:51:23', '2022-08-23 11:51:23'),
(914, 241, 6, 6, 'Proposal Accepted', 'Proposal', 'Business Proposal Acccepted ', '2022-08-23 11:51:36', '2022-08-23 11:51:36'),
(915, 241, 6, 6, 'Document Revision', 'Agreement', 'Lead data sent to Legal Team ', '2022-08-23 12:03:37', '2022-08-23 12:03:37'),
(916, 241, 6, 6, 'Document Revision', 'Agreement', 'Legal Team Sent Executed Document and remarks ', '2022-08-23 12:03:54', '2022-08-23 12:03:54'),
(917, 241, 6, 6, 'Document Revision', 'Agreement', 'Lead data sent to Legal Team ', '2022-08-23 12:05:41', '2022-08-23 12:05:41'),
(918, 241, 6, 6, 'Document Revision', 'Agreement', 'Legal Team Sent Executed Document and remarks ', '2022-08-23 12:06:04', '2022-08-23 12:06:04'),
(919, 241, 6, 6, 'Document Revision', 'Agreement', 'Lead data sent to Legal Team ', '2022-08-23 12:24:11', '2022-08-23 12:24:11'),
(920, 241, 6, 6, 'Document Revision', 'Agreement', 'Legal Team Sent Executed Document and remarks ', '2022-08-23 12:24:32', '2022-08-23 12:24:32'),
(921, 241, 6, 6, 'Document Revision', 'Agreement', 'Legal Team Sent Executed Document and remarks ', '2022-08-23 12:25:24', '2022-08-23 12:25:24'),
(922, 241, 6, 6, 'Document Revision', 'Agreement', 'Lead data sent to Legal Team ', '2022-08-23 12:32:06', '2022-08-23 12:32:06'),
(923, 241, 6, 6, 'Document Revision', 'Agreement', 'Legal Team Sent Executed Document and remarks ', '2022-08-23 12:32:31', '2022-08-23 12:32:31'),
(924, 241, 6, 6, 'Document Finalized', 'Agreement', 'Lead Agreement Finalized', '2022-08-23 12:33:24', '2022-08-23 12:33:24'),
(925, 242, 6, 6, 'Prospect', 'Lead', 'Lead Created Successfully', '2022-08-24 12:36:31', '2022-08-24 12:36:31'),
(926, 243, 6, 6, 'Prospect', 'Lead', 'Lead Created Successfully', '2022-08-26 05:53:48', '2022-08-26 05:53:48'),
(927, 244, 6, 6, 'Prospect', 'Lead', 'Lead Created Successfully', '2022-08-26 06:20:46', '2022-08-26 06:20:46'),
(928, 244, 6, 6, 'Qualified', 'Lead', 'Lead Status Changed to  Qualified', '2022-08-26 06:22:44', '2022-08-26 06:22:44'),
(929, 244, 6, 6, 'Qualified', 'Lead', 'Requirements mapping done  ', '2022-08-26 06:23:19', '2022-08-26 06:23:19'),
(930, 244, 6, 6, 'Proposal To Be Shared', 'Requirements Mapping', 'Business Proposal Shared', '2022-08-26 06:23:19', '2022-08-26 06:23:19'),
(931, 244, 6, 6, 'Proposal To Be Shared', 'Requirements Mapping', 'Requirements mapping done  ', '2022-08-26 06:23:19', '2022-08-26 06:23:19'),
(932, 244, 6, 6, 'Proposal To Be Shared', 'Requirements Mapping', 'Business Proposal Shared', '2022-08-26 06:23:19', '2022-08-26 06:23:19'),
(933, 244, 6, 6, 'Proposal Submitted', 'Proposal', 'Business Proposal Submitted ', '2022-08-26 06:24:02', '2022-08-26 06:24:02'),
(934, 244, 6, 6, 'Proposal Negotiation', 'Negotiation', 'Counter Proposal received ', '2022-08-26 06:24:11', '2022-08-26 06:24:11'),
(935, 244, 6, 6, 'Proposal To Be Shared', 'Requirements Mapping', 'Business Proposal Shared', '2022-08-26 06:26:34', '2022-08-26 06:26:34'),
(936, 244, 6, 6, 'Proposal Submitted', 'Proposal', 'Business Proposal Submitted ', '2022-08-26 06:27:18', '2022-08-26 06:27:18'),
(937, 244, 6, 6, 'Proposal Accepted', 'Proposal', 'Business Proposal Acccepted ', '2022-08-26 06:27:45', '2022-08-26 06:27:45'),
(938, 244, 6, 6, 'Document Revision', 'Agreement', 'Lead data sent to Legal Team ', '2022-08-26 06:27:59', '2022-08-26 06:27:59'),
(939, 244, 6, 6, 'Proposal Not Accepted', 'Proposal', 'Business Proposal Not Yet Acccepted ', '2022-08-26 06:28:30', '2022-08-26 06:28:30'),
(940, 244, 6, 6, 'Proposal Accepted', 'Proposal', 'Business Proposal Acccepted ', '2022-08-26 06:30:02', '2022-08-26 06:30:02'),
(941, 244, 6, 6, 'Document Revision', 'Agreement', 'Lead data sent to Legal Team ', '2022-08-26 06:30:10', '2022-08-26 06:30:10'),
(942, 244, 6, 6, 'Document Revision', 'Agreement', 'Legal Team Sent Executed Document and remarks ', '2022-08-26 06:30:49', '2022-08-26 06:30:49'),
(943, 244, 6, 6, 'Document Re-Revision', 'Agreement', 'Lead Agreement Not Finalized', '2022-08-26 06:31:20', '2022-08-26 06:31:20'),
(944, 244, 6, 6, 'Document Re-Revision', 'Agreement', 'Lead Agreement Not Finalized', '2022-08-26 06:31:39', '2022-08-26 06:31:39'),
(945, 244, 6, 6, 'Document Finalized', 'Agreement', 'Lead Agreement Finalized', '2022-08-26 06:31:50', '2022-08-26 06:31:50'),
(946, 244, 6, 6, 'Agreement Finalized', 'Agreement', 'Uploaded Legal Executed Agreement', '2022-08-26 06:32:20', '2022-08-26 06:32:20'),
(947, 244, 6, 6, 'Document Re-Revision', 'Agreement', 'Lead Agreement Not Finalized', '2022-08-26 06:34:51', '2022-08-26 06:34:51'),
(948, 244, 6, 6, 'Document Finalized', 'Agreement', 'Lead Agreement Finalized', '2022-08-26 06:35:09', '2022-08-26 06:35:09'),
(949, 244, 6, 6, 'Agreement Finalized', 'Agreement', 'Uploaded Legal Executed Agreement', '2022-08-26 06:35:34', '2022-08-26 06:35:34'),
(950, 244, 6, 6, 'Document Re-Revision', 'Agreement', 'Lead Agreement Not Finalized', '2022-08-26 06:40:02', '2022-08-26 06:40:02'),
(951, 244, 6, 6, 'Document Re-Revision', 'Agreement', 'Customer details updated by Admin', '2022-08-26 06:40:48', '2022-08-26 06:40:48'),
(952, 244, 6, 6, 'Document Finalized', 'Agreement', 'Lead Agreement Finalized', '2022-08-26 06:41:25', '2022-08-26 06:41:25'),
(953, 244, 6, 6, 'Agreement Finalized', 'Agreement', 'Uploaded Legal Executed Agreement', '2022-08-26 06:41:55', '2022-08-26 06:41:55'),
(954, 244, 6, 6, 'Document Revision', 'Agreement', 'Lead data sent to Legal Team ', '2022-08-26 06:48:54', '2022-08-26 06:48:54'),
(955, 244, 6, 6, 'Document Finalized', 'Agreement', 'Lead Agreement Finalized', '2022-08-26 06:49:03', '2022-08-26 06:49:03'),
(956, 244, 6, 6, 'Agreement Finalized', 'Agreement', 'Uploaded Legal Executed Agreement', '2022-08-26 06:49:42', '2022-08-26 06:49:42'),
(957, 244, 6, 6, 'Finance Verified', 'Agreement', 'Customer details verified by Admin', '2022-08-26 06:50:17', '2022-08-26 06:50:17'),
(958, 244, 6, 6, 'Finance Verified', 'Business Not Onboarded', 'Business Not Onboarded', '2022-08-26 06:52:40', '2022-08-26 06:52:40'),
(959, 244, 6, 6, 'Finance Verified', 'Business Onboarded', 'Business Onboarded Successfully', '2022-08-26 06:52:52', '2022-08-26 06:52:52'),
(960, 244, 6, 6, 'Document Revision', 'Agreement', 'Lead data sent to Legal Team ', '2022-08-26 06:53:04', '2022-08-26 06:53:04'),
(961, 244, 6, 6, 'Document Re-Revision', 'Agreement', 'Lead Agreement Not Finalized', '2022-08-26 06:53:14', '2022-08-26 06:53:14'),
(962, 244, 6, 6, 'Document Re-Revision', 'Agreement', 'Lead Agreement Not Finalized', '2022-08-26 06:53:27', '2022-08-26 06:53:27'),
(963, 244, 6, 6, 'Document Revision', 'Agreement', 'Lead data sent to Legal Team ', '2022-08-26 06:53:34', '2022-08-26 06:53:34'),
(964, 244, 6, 6, 'Document Revision', 'Agreement', 'Legal Team Sent Executed Document and remarks ', '2022-08-26 06:53:55', '2022-08-26 06:53:55'),
(965, 244, 6, 6, 'Document Finalized', 'Agreement', 'Lead Agreement Finalized', '2022-08-26 06:54:39', '2022-08-26 06:54:39'),
(966, 244, 6, 6, 'Agreement Finalized', 'Agreement', 'Uploaded Legal Executed Agreement', '2022-08-26 06:55:02', '2022-08-26 06:55:02'),
(967, 244, 6, 6, 'Finance Verified', 'Agreement', 'Customer details verified by Admin', '2022-08-26 06:55:15', '2022-08-26 06:55:15'),
(968, 244, 6, 6, 'Finance Verified', 'Business Onboarded', 'Business Onboarded Successfully', '2022-08-26 06:55:29', '2022-08-26 06:55:29'),
(969, 245, 6, 6, 'Prospect', 'Lead', 'Lead Created Successfully', '2022-08-26 07:05:48', '2022-08-26 07:05:48'),
(970, 245, 6, 6, 'Prospect', 'Lead', 'Lead Status Changed to  Prospect', '2022-08-26 07:06:01', '2022-08-26 07:06:01'),
(971, 245, 6, 6, 'Qualified', 'Lead', 'Lead Status Changed to  Qualified', '2022-08-26 07:06:18', '2022-08-26 07:06:18'),
(972, 245, 6, 6, 'Qualified', 'Lead', 'Requirements mapping done  ', '2022-08-26 07:06:44', '2022-08-26 07:06:44'),
(973, 245, 6, 6, 'Proposal Not Shared', 'Requirements Mapping', 'Business Proposal Not shared ', '2022-08-26 07:06:44', '2022-08-26 07:06:44'),
(974, 245, 6, 6, 'Proposal To Be Shared', 'Requirements Mapping', 'Business Proposal Shared', '2022-08-26 07:06:56', '2022-08-26 07:06:56'),
(975, 245, 6, 6, 'Proposal Submitted', 'Proposal', 'Business Proposal Submitted ', '2022-08-26 07:07:10', '2022-08-26 07:07:10'),
(976, 245, 6, 6, 'Proposal Not Accepted', 'Proposal', 'Business Proposal Not Yet Acccepted ', '2022-08-26 07:07:30', '2022-08-26 07:07:30'),
(977, 245, 6, 6, 'Proposal Accepted', 'Proposal', 'Business Proposal Acccepted ', '2022-08-26 07:07:41', '2022-08-26 07:07:41'),
(978, 245, 6, 6, 'Document Revision', 'Agreement', 'Lead data sent to Legal Team ', '2022-08-26 07:07:53', '2022-08-26 07:07:53'),
(979, 245, 6, 6, 'Document Revision', 'Agreement', 'Legal Team Sent Executed Document and remarks ', '2022-08-26 07:08:15', '2022-08-26 07:08:15'),
(980, 245, 6, 6, 'Document Finalized', 'Agreement', 'Lead Agreement Finalized', '2022-08-26 07:08:38', '2022-08-26 07:08:38'),
(981, 245, 6, 6, 'Agreement Finalized', 'Agreement', 'Uploaded Legal Executed Agreement', '2022-08-26 07:09:01', '2022-08-26 07:09:01'),
(982, 245, 6, 6, 'Finance Verified', 'Agreement', 'Customer details verified by Admin', '2022-08-26 07:09:45', '2022-08-26 07:09:45'),
(983, 245, 6, 6, 'Finance Verified', 'Business Onboarded', 'Business Onboarded Successfully', '2022-08-26 07:09:59', '2022-08-26 07:09:59'),
(984, 246, 6, 6, 'Prospect', 'Lead', 'Lead Created Successfully', '2022-08-26 09:30:26', '2022-08-26 09:30:26'),
(985, 246, 6, 6, 'Qualified', 'Lead', 'Lead Status Changed to  Qualified', '2022-08-28 15:50:15', '2022-08-28 15:50:15'),
(986, 246, 6, 6, 'Qualified', 'Lead', 'Requirements mapping done  ', '2022-08-28 16:36:53', '2022-08-28 16:36:53'),
(987, 246, 6, 6, 'Proposal Not Shared', 'Requirements Mapping', 'Business Proposal Not shared ', '2022-08-28 16:36:53', '2022-08-28 16:36:53'),
(988, 246, 6, 6, 'Proposal Not Shared', 'Requirements Mapping', 'Requirements mapping done  ', '2022-08-28 16:39:05', '2022-08-28 16:39:05'),
(989, 246, 6, 6, 'Proposal Not Shared', 'Requirements Mapping', 'Business Proposal Not shared ', '2022-08-28 16:39:05', '2022-08-28 16:39:05'),
(990, 246, 6, 6, 'Proposal Not Shared', 'Requirements Mapping', 'Requirements mapping done  ', '2022-08-28 16:39:39', '2022-08-28 16:39:39'),
(991, 246, 6, 6, 'Proposal Not Shared', 'Requirements Mapping', 'Business Proposal Not shared ', '2022-08-28 16:39:39', '2022-08-28 16:39:39'),
(992, 246, 6, 6, 'Proposal Not Shared', 'Requirements Mapping', 'Requirements mapping done  ', '2022-08-28 16:41:28', '2022-08-28 16:41:28'),
(993, 246, 6, 6, 'Proposal Not Shared', 'Requirements Mapping', 'Business Proposal Not shared ', '2022-08-28 16:41:28', '2022-08-28 16:41:28'),
(994, 246, 6, 6, 'Proposal Not Shared', 'Requirements Mapping', 'Requirements mapping done  ', '2022-08-28 16:41:44', '2022-08-28 16:41:44'),
(995, 246, 6, 6, 'Proposal Not Shared', 'Requirements Mapping', 'Business Proposal Not shared ', '2022-08-28 16:41:44', '2022-08-28 16:41:44'),
(996, 246, 6, 6, 'Proposal Not Shared', 'Requirements Mapping', 'Requirements mapping done  ', '2022-08-28 16:42:42', '2022-08-28 16:42:42'),
(997, 246, 6, 6, 'Proposal Not Shared', 'Requirements Mapping', 'Business Proposal Not shared ', '2022-08-28 16:42:42', '2022-08-28 16:42:42'),
(998, 246, 6, 6, 'Proposal Not Shared', 'Requirements Mapping', 'Requirements mapping done  ', '2022-08-28 16:43:00', '2022-08-28 16:43:00'),
(999, 246, 6, 6, 'Proposal Not Shared', 'Requirements Mapping', 'Business Proposal Not shared ', '2022-08-28 16:43:00', '2022-08-28 16:43:00'),
(1000, 247, 6, 6, 'Qualified', 'Lead', 'Lead Created Successfully', '2022-12-24 06:30:23', '2022-12-24 06:30:23'),
(1001, 247, 6, 6, 'Qualified', 'Lead', 'Requirements mapping done  ', '2022-12-24 06:32:17', '2022-12-24 06:32:17'),
(1002, 247, 6, 6, 'Proposal To Be Shared', 'Requirements Mapping', 'Business Proposal Shared', '2022-12-24 06:32:17', '2022-12-24 06:32:17'),
(1003, 247, 6, 6, 'Proposal Submitted', 'Proposal', 'Business Proposal Submitted ', '2022-12-24 06:32:32', '2022-12-24 06:32:32'),
(1004, 241, 6, 6, 'Agreement Finalized', 'Agreement', 'Uploaded Legal Executed Agreement', '2022-12-24 06:33:59', '2022-12-24 06:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `lead_proposals`
--

CREATE TABLE `lead_proposals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lead_id` bigint(20) UNSIGNED DEFAULT NULL,
  `proposal_documents` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proposal_remarks` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason_for_changing_proposal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `proposal_accepted` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lead_proposals`
--

INSERT INTO `lead_proposals` (`id`, `lead_id`, `proposal_documents`, `proposal_remarks`, `reason_for_changing_proposal`, `created_at`, `updated_at`, `proposal_accepted`) VALUES
(27, 241, '1661238773New_Activity Module_Holisight.jpg', 'Holi poli moli', NULL, '2022-08-23 07:12:53', '2022-08-23 07:12:53', 'Awaiting'),
(28, 241, '1661239311New_Activity Module_Holisight.jpg', 'Holi poli moli', NULL, '2022-08-23 07:21:51', '2022-08-23 07:23:02', 'Yes'),
(29, 241, '1661255483New_Activity Module_Holisight.jpg', '1', NULL, '2022-08-23 11:51:23', '2022-08-23 11:51:36', 'Yes'),
(30, 244, '1661495042New_Activity Module_Holisight.jpg', '1', NULL, '2022-08-26 06:24:02', '2022-08-26 06:24:11', 'No'),
(31, 244, '1661495238New_Activity Module_Holisight.jpg', 'proposal changed', NULL, '2022-08-26 06:27:18', '2022-08-26 06:30:02', 'Yes'),
(32, 245, '1661497630New_Activity Module_Holisight.jpg', 'proposal changed', NULL, '2022-08-26 07:07:10', '2022-08-26 07:07:41', 'Yes'),
(33, 247, '1671863552Holisol_Logo.png', '1', NULL, '2022-12-24 06:32:32', '2022-12-24 06:32:32', 'Awaiting');

-- --------------------------------------------------------

--
-- Table structure for table `lead_sources`
--

CREATE TABLE `lead_sources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lead_source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lead_sources`
--

INSERT INTO `lead_sources` (`id`, `lead_source`, `created_at`, `updated_at`) VALUES
(1, 'Customer Reference', '2022-06-14 02:40:10', NULL),
(2, 'Email Marketing', '2022-06-14 02:40:10', NULL),
(3, 'Employee Referral', '2022-06-14 02:40:10', NULL),
(4, 'Existing Business', '2022-06-14 02:40:10', NULL),
(5, 'Market Research', '2022-06-14 02:40:10', NULL),
(6, 'Others', '2022-06-14 02:40:10', NULL),
(7, 'Social Media', '2022-06-14 02:40:10', NULL),
(8, 'Web Research', '2022-06-14 02:40:10', NULL),
(9, 'Website', '2022-06-14 02:40:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `legal_remarks`
--

CREATE TABLE `legal_remarks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lead_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `document_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks_by_legal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks_for_legal` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bd_submitted_time` datetime DEFAULT NULL,
  `legal_submitted_time` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `legal_document_link` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `legal_remarks`
--

INSERT INTO `legal_remarks` (`id`, `lead_id`, `user_id`, `document_type`, `document_link`, `remarks_by_legal`, `remarks_for_legal`, `bd_submitted_time`, `legal_submitted_time`, `legal_document_link`, `created_at`, `updated_at`) VALUES
(36, 241, 6, 'Commercial Go-Ahead', '1661239399New_Activity Module_Holisight.jpg', 'this one', 'new2', '2022-08-23 12:53:00', '2022-08-23 12:53', '1661239423New_Activity Module_Holisight.jpg', NULL, '2022-08-23 07:23:43'),
(37, 241, 6, 'Commercial Go-Ahead', '1661252920New_Activity Module_Holisight.jpg', 'new', 'qwe', '2022-08-23 16:38:00', '2022-08-23 16:38', '1661252934New_Activity Module_Holisight.jpg', NULL, '2022-08-23 11:08:54'),
(38, 241, 6, 'Commercial Go-Ahead', '1661253041New_Activity Module_Holisight.jpg', 'yeh', 'new2', '2022-08-23 16:40:00', '2022-08-23 16:40', '1661253059New_Activity Module_Holisight.jpg', NULL, '2022-08-23 11:10:59'),
(39, 241, 6, 'Commercial Go-Ahead', '1661255185New_Activity Module_Holisight.jpg', 'new', 'new2', '2022-08-23 17:16:00', '2022-08-23 17:16', '1661255212New_Activity Module_Holisight.jpg', NULL, '2022-08-23 11:46:52'),
(40, 241, 6, 'Commercial Go-Ahead', '1661256217New_Activity Module_Holisight.jpg', 'test', 'new2', '2022-08-23 17:33:00', '2022-08-23 17:33', '1661256234New_Activity Module_Holisight.jpg', NULL, '2022-08-23 12:03:54'),
(41, 241, 6, 'Commercial Go-Ahead', '1661256341New_Activity Module_Holisight.jpg', 'verified', 'commerce', '2022-08-23 17:35:00', '2022-08-23 17:36', '1661256364New_Activity Module_Holisight.jpg', NULL, '2022-08-23 12:06:04'),
(42, 241, 6, 'Commercial Go-Ahead', '1661257451New_Activity Module_Holisight.jpg', 'new', 'new2', '2022-08-23 17:54:00', '2022-08-23 17:55', '1661257524Holisight V2_Revised Flow.pdf', NULL, '2022-08-23 12:25:24'),
(43, 241, 6, 'Commercial Go-Ahead', '1661257926Holisight V2_Revised Flow.pdf', 'this one', '2', '2022-08-23 18:02:00', '2022-08-23 18:02', '1661257951New_Activity Module_Holisight.jpg', NULL, '2022-08-23 12:32:31'),
(44, 244, 6, 'Commercial Go-Ahead', '1661495279New_Activity Module_Holisight.jpg', '', 'new2', '2022-08-26 11:57:00', NULL, NULL, NULL, NULL),
(45, 244, 6, 'Commercial Go-Ahead', '1661495410New_Activity Module_Holisight.jpg', 'this one', 'new2', '2022-08-26 12:00:00', '2022-08-26 12:00', '1661495449New_Activity Module_Holisight.jpg', NULL, '2022-08-26 06:30:49'),
(46, 244, 6, 'Commercial Go-Ahead', '1661496534New_Activity Module_Holisight.jpg', '', '2', '2022-08-26 12:18:00', NULL, NULL, NULL, NULL),
(47, 244, 6, 'Commercial Go-Ahead', '1661496784New_Activity Module_Holisight.jpg', '', '2', '2022-08-26 12:23:00', NULL, NULL, NULL, NULL),
(48, 244, 6, 'Commercial Go-Ahead', '1661496814New_Activity Module_Holisight.jpg', 'this one', 'new2', '2022-08-26 12:23:00', '2022-08-26 12:23', '1661496835New_Activity Module_Holisight.jpg', NULL, '2022-08-26 06:53:55'),
(49, 245, 6, 'Commercial Go-Ahead', '1661497673New_Activity Module_Holisight.jpg', 'new', 'new2', '2022-08-26 12:37:00', '2022-08-26 12:38', '1661497695New_Activity Module_Holisight.jpg', NULL, '2022-08-26 07:08:15');

-- --------------------------------------------------------

--
-- Table structure for table `lob_services`
--

CREATE TABLE `lob_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `services` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_line_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lob_services`
--

INSERT INTO `lob_services` (`id`, `services`, `business_line_id`, `created_at`, `updated_at`) VALUES
(1, 'DFC', 4, '2022-06-14 02:44:59', NULL),
(2, 'MFC-Ahmedabad', 4, '2022-06-14 02:44:59', NULL),
(3, 'MFC-Bangalore Achala', 4, '2022-06-14 02:44:59', NULL),
(4, 'MFC-Bangalore Jigani', 4, '2022-06-14 02:44:59', NULL),
(5, 'MFC-Chennai', 4, '2022-06-14 02:44:59', NULL),
(6, 'MFC-Delhi Bamnoli 2', 4, '2022-06-14 02:44:59', NULL),
(7, 'MFC-Delhi Mundka', 4, '2022-06-14 02:44:59', NULL),
(8, 'MFC-Gurgaon Gadoli', 4, '2022-06-14 02:44:59', NULL),
(9, 'MFC-Gurgaon Tauru', 4, '2022-06-14 02:44:59', NULL),
(10, 'MFC-Kolkata 1', 4, '2022-06-14 02:44:59', NULL),
(11, 'MFC-Kolkata 2', 4, '2022-06-14 02:44:59', NULL),
(12, 'MFC-Mumbai AB2', 4, '2022-06-14 02:44:59', NULL),
(13, 'MFC-Mumbai I3', 4, '2022-06-14 02:44:59', NULL),
(14, 'MFC-Noida Dadri', 4, '2022-06-14 02:44:59', NULL),
(15, 'Returnable Packaging', 7, '2022-06-14 02:44:59', NULL),
(16, 'Forward Transportation', 7, '2022-06-14 02:44:59', NULL),
(17, 'RP+Transportation', 7, '2022-06-14 02:44:59', NULL),
(18, 'Warehousing', 7, '2022-06-14 02:44:59', NULL),
(19, 'Non Returnable packing', 7, '2022-06-14 02:44:59', NULL),
(20, 'Sale', 7, '2022-06-14 02:44:59', NULL),
(21, 'Transportation', 7, '2022-06-14 02:44:59', NULL),
(22, 'Returnable Packaging', 9, '2022-06-14 02:44:59', NULL),
(23, 'Warehousing', 9, '2022-06-14 02:44:59', NULL),
(24, 'Non Returnable packing', 9, '2022-06-14 02:44:59', NULL),
(25, 'Sale', 9, '2022-06-14 02:44:59', NULL),
(26, 'Freight', 9, '2022-06-14 02:44:59', NULL),
(27, 'Transportation', 9, '2022-06-14 02:44:59', NULL),
(28, 'Last Mile delivery', 8, '2022-06-14 02:44:59', NULL),
(29, 'First Mile', 8, '2022-06-14 02:44:59', NULL),
(30, 'Cross Dock', 8, '2022-06-14 02:44:59', NULL),
(31, 'Transportation', 8, '2022-06-14 02:44:59', NULL),
(32, 'WMS', 5, '2022-06-14 02:44:59', NULL),
(33, 'DMS', 5, '2022-06-14 02:44:59', NULL),
(34, 'Holiscope', 5, '2022-06-14 02:44:59', NULL),
(35, 'Dopex', 5, '2022-06-14 02:44:59', NULL),
(36, 'Hyperlocal', 5, '2022-06-14 02:44:59', NULL),
(37, 'HOPS', 5, '2022-06-14 02:44:59', NULL),
(38, 'ULMS', 5, '2022-06-14 02:44:59', NULL),
(39, 'Pick n Pack', 5, '2022-06-14 02:44:59', NULL),
(40, 'TMS', 5, '2022-06-14 02:44:59', NULL),
(41, 'HINA', 5, '2022-06-14 02:44:59', NULL),
(42, 'YMS', 5, '2022-06-14 02:44:59', NULL),
(43, 'OCFS', 5, '2022-06-14 02:44:59', NULL),
(44, 'Feasibility Studies', 2, '2022-06-14 02:44:59', NULL),
(45, 'GST Consulting', 2, '2022-06-14 02:44:59', NULL),
(46, 'Internal Consulting', 2, '2022-06-14 02:44:59', NULL),
(47, 'New Logistics Set up', 2, '2022-06-14 02:44:59', NULL),
(48, 'Process Design & Engineering', 2, '2022-06-14 02:44:59', NULL),
(49, 'Supply  Chain Network Modelling', 2, '2022-06-14 02:44:59', NULL),
(50, 'Transportation Packaging Solution Design', 2, '2022-06-14 02:44:59', NULL),
(51, 'Warehouse Design & Layout', 2, '2022-06-14 02:44:59', NULL),
(52, 'Sea Freight', 3, NULL, NULL),
(53, 'Domestic Freight', 3, NULL, NULL),
(54, 'Packaging Solution', 10, NULL, NULL),
(55, 'Dark Store', 6, '2022-08-04 18:30:00', NULL),
(56, 'Pickup center', 6, '2022-08-04 18:30:00', NULL),
(57, 'Sales Center', 6, NULL, NULL),
(58, 'Customer experience Center', 6, NULL, NULL),
(59, '3P', 6, NULL, NULL),
(60, '4P', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_06_14_060115_create_cities_table', 1),
(3, '2022_06_14_063806_create_departments_table', 2),
(5, '2022_06_14_072953_create_industries_table', 3),
(6, '2022_06_14_080636_create_lead_sources_table', 4),
(7, '2022_06_14_081130_create_lob_services_table', 5),
(10, '2022_06_14_081930_create_all_businesses_table', 6),
(11, '2022_06_14_093137_create_stages_table', 7),
(12, '2014_10_12_000000_create_users_table', 8),
(13, '2014_10_12_100000_create_password_resets_table', 8),
(14, '2019_08_19_000000_create_failed_jobs_table', 8),
(15, '2019_12_14_000001_create_personal_access_tokens_table', 8),
(19, '2022_06_15_075008_create_leads_table', 9),
(21, '2022_06_18_060909_create_requirements_maps_table', 10),
(22, '2022_06_22_061626_add__stage_to_leads', 10),
(23, '2022_06_25_125258_create_roles_table', 11),
(25, '2022_06_17_102139_create_followups_table', 12),
(26, '2022_06_29_085029_add_lobandcity_to_users_table', 13),
(28, '2022_06_29_191553_add_rolename_to_users_table', 14),
(29, '2022_07_12_065915_add_lost_or_dorment_reason_to_leads_table', 15),
(30, '2022_07_14_070934_add_followed_up_date_to_followups_table', 16),
(31, '2022_07_14_091242_create_lead_logs_table', 17),
(32, '2022_07_15_064400_add_alldata_to_requirements_maps', 18),
(33, '2022_07_15_101345_add_reason_to_leads', 19),
(34, '2022_07_15_111334_add_share_business_proposal_to_requirements_maps', 20),
(35, '2022_07_15_125949_create_lead__propsals_table', 21),
(36, '2022_07_17_180552_add_map_requirements_to_leads', 22),
(37, '2022_07_18_085608_add_proposal_accepted_to_lead__propsals', 23),
(38, '2022_07_18_120438_create_legal_remarks_table', 24),
(39, '2022_07_18_123850_add_agreement_finalized_to_legal_remarks', 25),
(40, '2022_07_18_171255_add_business_onboarded_to_legal_remarks', 26),
(41, '2022_07_19_075712_add_user_id_to_leads', 27),
(42, '2022_07_20_100555_create_brand_profiles_table', 28),
(43, '2022_07_20_103625_create_contacts_table', 29),
(44, '2022_07_22_040946_create_lead_executed_agreements_table', 30);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('kartikaygandhi123@gmail.com', '$2y$10$CYtkDOJ5S/RMGfbYI5VgI.YZbiQ3ffO5ipvaA63mMuptAStN23JDG', '2022-06-24 08:42:25');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requirements_maps`
--

CREATE TABLE `requirements_maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lead_id` bigint(20) UNSIGNED DEFAULT NULL,
  `business_requirement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_requirement_documents` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `services` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expected_closure_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expected_monthly_revenue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expected_capex` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ebdta_percentage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ebdta_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `share_business_proposal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requirements_maps`
--

INSERT INTO `requirements_maps` (`id`, `created_at`, `updated_at`, `lead_id`, `business_requirement`, `upload_requirement_documents`, `lob`, `services`, `area`, `expected_closure_date`, `location`, `business_type`, `expected_monthly_revenue`, `expected_capex`, `ebdta_percentage`, `ebdta_amount`, `share_business_proposal`) VALUES
(13, '2022-08-23 07:05:31', '2022-08-23 07:12:44', 241, 'Labore enim in error', '1661238331New_Activity Module_Holisight.jpg', '7', '15', '88', '2022-08-23', 'Shenkottai', '11 Months', '4', '33', '80', '37', 'Yes'),
(14, '2022-08-26 06:23:19', '2022-08-26 06:23:19', 244, 'Aliquam eum saepe am', '1661494999New_Activity Module_Holisight.jpg', '7', '18', '77', '2022-08-26', 'West Bengal', '9 Months', '11', '50', '33', '55', 'Yes'),
(15, '2022-08-26 07:06:44', '2022-08-26 07:06:56', 245, 'Deserunt natus quia', '1661497604New_Activity Module_Holisight.jpg', '9', '22', NULL, '2022-08-26', 'Calicut', '8 Months', '10', '91', '20', '50', 'Yes'),
(16, '2022-08-28 16:36:53', '2022-08-28 16:43:00', 246, 'Aut ex lorem asperna', '1661704980summerhill technology.png', '7', '15', NULL, '2022-08-28', 'Nelamangala', '3 Years', '8', '26', '76', '50', 'No'),
(17, '2022-12-24 06:32:17', '2022-12-24 06:32:17', 247, 'Aut ex lorem asperna', '', '2', '45', NULL, '2022-12-24', 'Ahmedabad & Mumbai', 'One Time', '12', '12', '12', '1.00', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', NULL, NULL),
(2, 'Admin', NULL, NULL),
(3, 'BD Head', NULL, NULL),
(4, 'BD', NULL, NULL),
(5, 'Management', NULL, NULL),
(6, 'Legal', NULL, NULL),
(7, 'Finance', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stages`
--

CREATE TABLE `stages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stages`
--

INSERT INTO `stages` (`id`, `stage`, `created_at`, `updated_at`) VALUES
(1, 'Lost', '2022-06-14 04:19:22', NULL),
(2, 'Dormant', '2022-06-14 04:19:22', NULL),
(3, 'Lead', '2022-06-14 04:19:22', NULL),
(4, 'Requirements Mapping', '2022-06-14 04:19:22', NULL),
(5, 'Proposal', '2022-06-14 04:19:22', NULL),
(6, 'Negotiation', '2022-06-14 04:19:22', NULL),
(7, 'Agreement', '2022-06-14 04:19:22', NULL),
(8, 'Business Onboarded', '2022-06-14 04:19:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `lob_id` bigint(20) UNSIGNED DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `lob_id`, `city_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 2, NULL, NULL, 'Admin', 'admin@gmail.com', NULL, '$2y$10$HSYJpBmzE0lr4JrCUnWDz.OKDZPqIo2NjMUr6L2bnGjYlRKW6HqKi', NULL, NULL, NULL),
(7, 1, NULL, NULL, 'Super Admin', 'superadmin@gmail.com', NULL, '$2y$10$cK1qOidwK.9cKwOpGG/AFOLmtv9nP.NDbOX6UEmHK61g93CTfOd8u', NULL, NULL, NULL),
(47, 3, 7, 1, 'BD HEAD ISCM', 'bdheadiscm@gmail.com', NULL, '$2y$10$HSYJpBmzE0lr4JrCUnWDz.OKDZPqIo2NjMUr6L2bnGjYlRKW6HqKi', NULL, NULL, NULL),
(50, 4, 4, 1, 'Updated User', 'updateduser@gmail.com', NULL, '11223344', NULL, '2022-07-20 02:05:44', '2022-08-08 07:46:03'),
(51, 7, 6, 4, 'Finance User', 'finance@gmail.com', NULL, '$2y$10$Fp8EsbpDMa1V7nAD6Fdsv.vdT1tBeYdp3ZiQi.ji9l1qh8PUs0Ppi', NULL, '2022-07-24 10:37:19', '2022-07-24 10:37:19'),
(52, 6, 6, 1, 'Legal User', 'legal@gmail.com', NULL, '$2y$10$LeBuJfcLgtofFLgX58tD7eZhSPu.WtZ268kSjM/poDSgZ0slcBBi6', NULL, '2022-07-24 11:38:00', '2022-07-24 11:38:00'),
(53, 3, 8, 1, 'Bd head user', 'bdhead@gmail.com', NULL, '$2y$10$yzZG8zya8nCYYm8VK6IGPeywVBQaIfTzJ4Ns9dkidhZKTf2yCZ78y', NULL, '2022-07-25 03:55:43', '2022-07-25 03:55:43'),
(54, 4, 1, 1, 'kartikay updated', 'updated@gmail.com', NULL, '$2y$10$ILzAt83SkzwQKukgkLf/Ae8qUnZpVkMx/kGkSTMseBsWmVxBn4YdK', NULL, '2022-08-02 05:39:48', '2022-08-09 11:23:35'),
(55, 4, 3, 1, 'BD', 'bd@gmail.com', NULL, '$2y$10$Te3IN5SxuVUbBYNqOwYJQ.jQ/fuIO.5wijJA3/MNbITGbj1vHuzky', NULL, '2022-08-02 05:54:33', '2022-08-08 07:53:44'),
(56, 5, 1, 1, 'manage', 'manage@gmail.com', NULL, '$2y$10$XPARRScOvcUpAr40P1.mm.aGlYtRGTUOV/cNs8muTFGTGlPNp9kBm', NULL, '2022-08-02 06:04:50', '2022-08-02 06:04:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_businesses`
--
ALTER TABLE `all_businesses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_profiles`
--
ALTER TABLE `brand_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_verticals`
--
ALTER TABLE `business_verticals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `followups`
--
ALTER TABLE `followups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `followups_lead_id_foreign` (`lead_id`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `leads_lob_id_foreign` (`lob_id`),
  ADD KEY `leads_lead_souce_id_foreign` (`lead_source_id`),
  ADD KEY `leads_customer_id_foreign` (`customer_id`),
  ADD KEY `leads_legal_user_id_foreign` (`legal_user_id`),
  ADD KEY `leads_finance_user_id_foreign` (`finance_user_id`),
  ADD KEY `leads_created_by_foreign` (`user_id`);

--
-- Indexes for table `lead_executed_agreements`
--
ALTER TABLE `lead_executed_agreements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lead_executed_agreements_lead_id_foreign` (`lead_id`),
  ADD KEY `lead_executed_agreements_user_id_foreign` (`user_id`);

--
-- Indexes for table `lead_logs`
--
ALTER TABLE `lead_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lead_logs_lead_id_foreign` (`lead_id`),
  ADD KEY `lead_logs_lead_owner_id_foreign` (`lead_owner_id`),
  ADD KEY `lead_logs_user_id_foreign` (`user_id`);

--
-- Indexes for table `lead_proposals`
--
ALTER TABLE `lead_proposals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lead_proposals_lead_id_foreign` (`lead_id`);

--
-- Indexes for table `lead_sources`
--
ALTER TABLE `lead_sources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `legal_remarks`
--
ALTER TABLE `legal_remarks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `legal_remarks_lead_id_foreign` (`lead_id`),
  ADD KEY `legal_remarks_user_id_foreign` (`user_id`);

--
-- Indexes for table `lob_services`
--
ALTER TABLE `lob_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lob_services_business_line_id_foreign` (`business_line_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `requirements_maps`
--
ALTER TABLE `requirements_maps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requirements_maps_lead_id_foreign` (`lead_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stages`
--
ALTER TABLE `stages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`),
  ADD KEY `users_lob_id_foreign` (`lob_id`),
  ADD KEY `users_city_id_foreign` (`city_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_businesses`
--
ALTER TABLE `all_businesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `brand_profiles`
--
ALTER TABLE `brand_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `business_verticals`
--
ALTER TABLE `business_verticals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1590;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `followups`
--
ALTER TABLE `followups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- AUTO_INCREMENT for table `lead_executed_agreements`
--
ALTER TABLE `lead_executed_agreements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `lead_logs`
--
ALTER TABLE `lead_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;

--
-- AUTO_INCREMENT for table `lead_proposals`
--
ALTER TABLE `lead_proposals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `lead_sources`
--
ALTER TABLE `lead_sources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `legal_remarks`
--
ALTER TABLE `legal_remarks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `lob_services`
--
ALTER TABLE `lob_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requirements_maps`
--
ALTER TABLE `requirements_maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stages`
--
ALTER TABLE `stages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `followups`
--
ALTER TABLE `followups`
  ADD CONSTRAINT `followups_lead_id_foreign` FOREIGN KEY (`lead_id`) REFERENCES `leads` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `leads`
--
ALTER TABLE `leads`
  ADD CONSTRAINT `leads_created_by_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `leads_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `brand_profiles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `leads_finance_user_id_foreign` FOREIGN KEY (`finance_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `leads_legal_user_id_foreign` FOREIGN KEY (`legal_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `leads_lob_id_foreign` FOREIGN KEY (`lob_id`) REFERENCES `all_businesses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `leads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `lead_executed_agreements`
--
ALTER TABLE `lead_executed_agreements`
  ADD CONSTRAINT `lead_executed_agreements_lead_id_foreign` FOREIGN KEY (`lead_id`) REFERENCES `leads` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `lead_executed_agreements_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `lead_logs`
--
ALTER TABLE `lead_logs`
  ADD CONSTRAINT `lead_logs_lead_id_foreign` FOREIGN KEY (`lead_id`) REFERENCES `leads` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `lead_logs_lead_owner_id_foreign` FOREIGN KEY (`lead_owner_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `lead_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `lead_proposals`
--
ALTER TABLE `lead_proposals`
  ADD CONSTRAINT `lead_proposals_lead_id_foreign` FOREIGN KEY (`lead_id`) REFERENCES `leads` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `legal_remarks`
--
ALTER TABLE `legal_remarks`
  ADD CONSTRAINT `legal_remarks_lead_id_foreign` FOREIGN KEY (`lead_id`) REFERENCES `leads` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `legal_remarks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `lob_services`
--
ALTER TABLE `lob_services`
  ADD CONSTRAINT `lob_services_business_line_id_foreign` FOREIGN KEY (`business_line_id`) REFERENCES `all_businesses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `requirements_maps`
--
ALTER TABLE `requirements_maps`
  ADD CONSTRAINT `requirements_maps_lead_id_foreign` FOREIGN KEY (`lead_id`) REFERENCES `leads` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `users_lob_id_foreign` FOREIGN KEY (`lob_id`) REFERENCES `all_businesses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
