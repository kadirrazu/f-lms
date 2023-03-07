-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 05:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `f-lms`
--
CREATE DATABASE IF NOT EXISTS `f-lms` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `f-lms`;

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `title_bn`, `title_en`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(8, 'হুমায়ূন আহমেদ', 'Humayun Ahmed', 'humayun-ahmed', 1, '2023-02-12 11:38:05', '2023-02-12 11:38:05'),
(9, 'মুনতাসীর মামুন', 'Muntassir Mamoon', 'muntassir-mamoon', 1, '2023-02-12 11:38:05', '2023-02-12 11:38:05'),
(10, 'আসিফ নজরুল', 'Asif Nazrul', 'asif-nazrul', 1, '2023-02-12 11:38:05', '2023-02-12 11:38:05'),
(11, 'ইমদাদুল হক মিলন', 'Imdadul Haq Milan', 'imdadul-haq-milan', 1, '2023-02-12 11:38:05', '2023-02-12 11:38:05'),
(12, 'রবিশঙ্কর মৈত্রী', 'Ravisankar Maitree', 'ravisankar-maitree', 1, '2023-02-12 11:38:05', '2023-02-12 11:38:05'),
(13, 'আনিসুল হক', 'Anisul Hoque', 'anisul-hoque', 1, '2023-02-12 11:38:05', '2023-02-12 11:38:05'),
(14, 'আল মাহমুদ', 'Al Mahmud', 'al-mahmud', 1, '2023-02-12 11:38:06', '2023-02-12 11:38:06'),
(15, 'মুহম্মদ জাফর ইকবাল', 'Muhammod Zafar Iqbal', 'muhammod-zafar-iqbal', 1, '2023-02-12 11:38:06', '2023-02-12 11:38:06'),
(16, 'প্রফেসর ড. নিশীথ কুমার পাল', 'Professor Dr. Nishit Kumar Paul', 'professor-dr-nishit-kumar-paul', 1, '2023-02-12 11:38:06', '2023-02-12 11:38:06'),
(17, 'সুমন্ত আসলাম', 'Sumanto Aslam', 'sumanto-aslam', 1, '2023-02-12 11:38:06', '2023-02-12 11:38:06'),
(18, 'কেকা ফেরদৌসী', 'Keka Ferdousey', 'keka-ferdousey', 1, '2023-02-12 11:38:06', '2023-02-12 11:38:06'),
(19, 'জাহানারা ইমাম', 'Jahanara Emam', 'jahanara-emam', 1, '2023-02-12 11:38:06', '2023-02-12 11:38:06'),
(20, 'সেলিনা হোসেন', 'Selina Hossain', 'selina-hossain', 1, '2023-02-12 11:38:06', '2023-02-12 11:38:06'),
(21, 'অনুপ সাদি', 'Anup Sadi', 'anup-sadi', 1, '2023-02-12 11:38:06', '2023-02-12 11:38:06'),
(22, 'মনির জামান', 'Monir Jaman', 'monir-jaman', 1, '2023-02-12 11:38:06', '2023-02-12 11:38:06'),
(23, 'আডলফ হিটলার', 'Adolf Hitler', 'adolf-hitler', 1, '2023-02-12 11:38:06', '2023-02-12 11:38:06'),
(24, 'মানিক বন্দ্যোপাধ্যায়', 'Manik Bondhopadhai', 'manik-bondhopadhai', 1, '2023-02-12 11:38:06', '2023-02-12 11:38:06'),
(25, 'মোহনদাস করমচাঁদ গান্ধী ( মহাত্মা গান্ধী )', 'Mohandas karamchand Gandhi', 'mohandas-karamchand-gandhi', 1, '2023-02-12 11:38:06', '2023-02-12 11:38:06'),
(26, 'সুনীল গঙ্গোপাধ্যায় (নীললোহিত)', 'Sunil Gangapadhyay (Nillohit)', 'sunil-gangapadhyay-nillohit', 1, '2023-02-12 11:38:06', '2023-02-12 11:38:06'),
(27, 'রবীন্দ্রনাথ ঠাকুর', 'Rabindranath Tagore', 'rabindranath-tagore', 1, '2023-02-12 11:38:06', '2023-02-12 11:38:06'),
(28, 'শেখ হাসিনা', 'Sheikh Hasina', 'sheikh-hasina', 1, '2023-02-12 11:38:06', '2023-02-12 11:38:06'),
(29, 'হুমায়ুন আজাদ', 'Humayun Azad', 'humayun-azad', 1, '2023-02-12 11:38:06', '2023-02-12 11:38:06'),
(30, 'আনিসুজ্জামান', 'Anisuzzaman', 'anisuzzaman', 1, '2023-02-12 11:38:06', '2023-02-12 11:38:06'),
(31, 'শওকত ওসমান', 'Sowkot Osman', 'sowkot-osman', 1, '2023-02-12 11:38:06', '2023-02-12 11:38:06'),
(32, 'বাংলা একাডেমী', 'Bangla Academy', 'bangla-academy', 1, '2023-02-12 11:38:06', '2023-02-12 11:38:06'),
(33, 'বঙ্কিমচন্দ্র চট্টোপাধ্যায়', 'Bankimacandro Chattopadhay', 'bankimacandro-chattopadhay', 1, '2023-02-12 11:38:06', '2023-02-12 11:38:06'),
(34, 'কাজী নজরুল ইসলাম', 'Kazi Nazrul Islam', 'kazi-nazrul-islam', 1, '2023-02-12 11:38:06', '2023-02-12 11:38:06'),
(35, 'কাজী ‍সাজ্জাদ আলী জহির', 'Kazi Sajjad Ali Jahir', 'kazi-sajjad-ali-jahir', 1, '2023-02-12 11:38:06', '2023-02-12 11:38:06'),
(36, 'ডা. সুমন চৌধুরী', 'Dr. Sumon Chowdhury', 'dr-sumon-chowdhury', 1, '2023-02-12 11:38:06', '2023-02-12 11:38:06'),
(37, 'দ্বিজেন শর্মা', 'Dwijen Sarma', 'dwijen-sarma', 1, '2023-02-12 11:38:06', '2023-02-12 11:38:06'),
(38, 'তারিকুল ইসলাম', 'Tarikul Islam', 'tarikul-islam', 1, '2023-02-12 11:38:06', '2023-02-12 11:38:06'),
(39, 'ডা. এম আর খান', 'Dr. M R Khan', 'dr-m-r-khan', 1, '2023-02-12 11:38:06', '2023-02-12 11:38:06'),
(40, 'এ কে খন্দকার', 'A K Khondoker', 'a-k-khondoker', 1, '2023-02-12 11:38:06', '2023-02-12 11:38:06'),
(41, 'ড. এ কে এম শাহনাওয়াজ', 'Dr. A K M Shahnawaz', 'dr-a-k-m-shahnawaz', 1, '2023-02-12 11:38:06', '2023-02-12 11:38:06'),
(42, 'আইজ্যাক আসিমভ', 'Isaac Asimov', 'isaac-asimov', 1, '2023-02-12 11:38:06', '2023-02-12 11:38:06'),
(43, 'ক্যারেন আর্মস্ট্রং', 'Karen Armstrong', 'karen-armstrong', 1, '2023-02-12 11:38:07', '2023-02-12 11:38:07'),
(44, 'পাওলো কোয়েলহো', 'Paulo Coelho', 'paulo-coelho', 1, '2023-02-12 11:38:07', '2023-02-12 11:38:07'),
(45, 'স্টিফেন হকিং', 'Stephen Hawking', 'stephen-hawking', 1, '2023-02-12 11:38:07', '2023-02-12 11:38:07'),
(46, 'আহমদ ছফা', 'Ahmed Sofa', 'ahmed-sofa', 1, '2023-02-12 11:38:07', '2023-02-12 11:38:07'),
(47, 'শাহাদুজ্জামান', 'Shahaduzzaman', 'shahaduzzaman', 1, '2023-02-12 11:38:07', '2023-02-12 11:38:07'),
(48, 'সাহাদত হোসেন খান', 'Shahadat Hossain Khan', 'shahadat-hossain-khan', 1, '2023-02-12 11:38:07', '2023-02-12 11:38:07'),
(49, 'মোঃ জাকির হোসেন', 'Md: Jakir Hossain', 'md-jakir-hossain', 1, '2023-02-12 11:38:07', '2023-02-12 11:38:07'),
(50, 'সত্যজিৎ রায়', 'Satyajit Ray', 'satyajit-ray', 1, '2023-02-12 11:38:07', '2023-02-12 11:38:07'),
(51, 'অধ্যাপিকা সিদ্দিকা কবীর', 'Oddapika Siddika Kabir', 'oddapika-siddika-kabir', 1, '2023-02-12 11:38:07', '2023-02-12 11:38:07'),
(52, 'ড. মুনীরউদ্দিন আহমদ', 'Dr. Muniruddin Ahmed', 'dr-muniruddin-ahmed', 1, '2023-02-12 11:38:07', '2023-02-12 11:38:07'),
(53, 'আখতারুজ্জামান ইলিয়াস', 'Akhtaruzzaman Elias', 'akhtaruzzaman-elias', 1, '2023-02-12 11:38:07', '2023-02-12 11:38:07'),
(54, 'মাসউদ ইমরান', 'Masud Imran', 'masud-imran', 1, '2023-02-12 11:38:07', '2023-02-12 11:38:07'),
(55, 'শীর্ষেন্দু মুখোপাধ্যায়', 'Shirshendu Mukhopadhyay', 'shirshendu-mukhopadhyay', 1, '2023-02-12 11:38:07', '2023-02-12 11:38:07'),
(56, 'জে. কে. রাওলিং', 'J. K. Rowling', 'j-k-rowling', 1, '2023-02-12 11:38:07', '2023-02-12 11:38:07'),
(57, 'মুনির হাসান', 'Munir Hasan', 'munir-hasan', 1, '2023-02-12 11:38:07', '2023-02-12 11:38:07'),
(58, 'অধ্যাপক ডা. শুভাগত চৌধুরী', 'Professor Dr. Suvagoto Chowdhury', 'professor-dr-suvagoto-chowdhury', 1, '2023-02-12 11:38:07', '2023-02-12 11:38:07'),
(59, 'ম্যাক্সিম গোর্কি', 'Maxim Gorky', 'maxim-gorky', 1, '2023-02-12 11:38:07', '2023-02-12 11:38:07'),
(60, 'জহির রায়হান', 'Jahir Rayhan', 'jahir-rayhan', 1, '2023-02-12 11:38:07', '2023-02-12 11:38:07'),
(61, 'জসীম উদদীন', 'Josim Uddin', 'josim-uddin', 1, '2023-02-12 11:38:07', '2023-02-12 11:38:07'),
(62, 'সৈয়দ মুজতবা আলী', 'Sayed Mujtaba Ali', 'sayed-mujtaba-ali', 1, '2023-02-12 11:38:07', '2023-02-12 11:38:07'),
(63, 'বঙ্গবন্ধু শেখ মুজিবুর রহমান', 'Bangabandhu Sheikh Mujibur Rahman', 'bangabandhu-sheikh-mujibur-rahman', 1, '2023-02-12 11:38:07', '2023-02-12 11:38:07'),
(64, 'সুহৃদ সরকার', 'Suhreed Sarkar', 'suhreed-sarkar', 1, '2023-02-12 11:38:08', '2023-02-12 11:38:08'),
(65, 'বাপ্পি আশরাফ', 'Bappi Ashraf', 'bappi-ashraf', 1, '2023-02-12 11:38:08', '2023-02-12 11:38:08'),
(66, 'সমরেশ মজুমদার', 'Samaresh Majumder', 'samaresh-majumder', 1, '2023-02-12 11:38:08', '2023-02-12 11:38:08'),
(67, 'তামিম শাহরিয়ার সুবিন', 'Tamim Shahriar Subeen', 'tamim-shahriar-subeen', 1, '2023-02-12 11:38:08', '2023-02-12 11:38:08'),
(68, 'রকিব হাসান', 'Rokib Hasan', 'rokib-hasan', 1, '2023-02-12 11:38:08', '2023-02-12 11:38:08'),
(69, 'শাহরিয়ার', 'Shahorier', 'shahorier', 1, '2023-02-12 11:38:08', '2023-02-12 11:38:08'),
(70, 'কাজী আনোয়ার হোসেন', 'Kazi Anower Hossain', 'kazi-anower-hossain', 1, '2023-02-12 11:38:08', '2023-02-12 11:38:08'),
(71, 'জুল ভার্ন', 'Jules Verne', 'jules-verne', 1, '2023-02-12 11:38:08', '2023-02-12 11:38:08'),
(72, 'লিয়াকত হোসেন খোকন', 'Liakot Hosan Khokon', 'liakot-hosan-khokon', 1, '2023-02-12 11:38:08', '2023-02-12 11:38:08'),
(73, 'সাদাত হোসাইন', 'Sadat Hossain', 'sadat-hossain', 1, '2023-02-12 11:38:08', '2023-02-12 11:38:08'),
(74, 'আবদুল্লাহ আবু সায়ীদ', 'Abdullah Abu Syeed', 'abdullah-abu-syeed', 1, '2023-02-12 11:38:08', '2023-02-12 11:38:08'),
(75, 'চমক হাসান', 'Chamok Hasan', 'chamok-hasan', 1, '2023-02-12 11:38:08', '2023-02-12 11:38:08'),
(76, 'মহাজাতক', 'Mohajatok', 'mohajatok', 1, '2023-02-12 11:38:08', '2023-02-12 11:38:08'),
(77, 'শরৎচন্দ্র চট্টোপাধ্যায়', 'Saratchandra Chattopadhyay', 'saratchandra-chattopadhyay', 1, '2023-02-12 11:38:08', '2023-02-12 11:38:08'),
(78, 'যাযাবর', 'Zazabor', 'zazabor', 1, '2023-02-12 11:38:08', '2023-02-12 11:38:08'),
(79, 'শিব খেরা', 'Shib Khera', 'shib-khera', 1, '2023-02-12 11:38:08', '2023-02-12 11:38:08'),
(80, 'মির্চা এলিয়াদ', 'Mircha Aliyad', 'mircha-aliyad', 1, '2023-02-12 11:38:08', '2023-02-12 11:38:08'),
(81, 'উইলবার স্মিথ', 'Wilbur Smith', 'wilbur-smith', 1, '2023-02-12 11:38:08', '2023-02-12 11:38:08'),
(82, 'মাওলানা জাকির হোসেন আজাদী', 'Maulana Jakir Hossain Ajadi', 'maulana-jakir-hossain-ajadi', 1, '2023-02-12 11:38:08', '2023-02-12 11:38:08'),
(83, 'সৈয়দ শামসুল হক', 'Syed Shamsul Haque', 'syed-shamsul-haque', 1, '2023-02-12 11:38:08', '2023-02-12 11:38:08'),
(84, 'লে. কর্ণেল (অব:) এম এ হামিদ পিএসসি', 'L. Cornel (Re.) M A Hamid PSC', 'l-cornel-re-m-a-hamid-psc', 1, '2023-02-12 11:38:08', '2023-02-12 11:38:08'),
(85, 'বিভূতিভূষণ বন্দ্যোপাধ্যায়', 'Bivutivushon Bondopadhai', 'bivutivushon-bondopadhai', 1, '2023-02-12 11:38:08', '2023-02-12 11:38:08'),
(86, 'প্রফেসর এ. এফ. এম. আবদুর রহমান', 'Professor A. F. M. Abdur Rahman', 'professor-a-f-m-abdur-rahman', 1, '2023-02-12 11:38:08', '2023-02-12 11:38:08'),
(87, 'ডেল কার্ণেগী', 'Dale Carnegie', 'dale-carnegie', 1, '2023-02-12 11:38:09', '2023-02-12 11:38:09'),
(88, 'ড্যান ব্রাউন', 'Dan Brown', 'dan-brown', 1, '2023-02-12 11:38:09', '2023-02-12 11:38:09'),
(89, 'প্রণব চক্রবর্তী', 'Pronob Chocroborti', 'pronob-chocroborti', 1, '2023-02-12 11:38:09', '2023-02-12 11:38:09'),
(90, 'চিনোয়া আচেবে', 'Chinoya Achebe', 'chinoya-achebe', 1, '2023-02-12 11:38:09', '2023-02-12 11:38:09'),
(91, 'ফাল্গুনী মুখোপাধ্যায়', 'Falguni Mukhopadhai', 'falguni-mukhopadhai', 1, '2023-02-12 11:38:09', '2023-02-12 11:38:09'),
(92, 'ইকবাল কবীর মোহন', 'Iqbal Kobir Mohon', 'iqbal-kobir-mohon', 1, '2023-02-12 11:38:09', '2023-02-12 11:38:09'),
(93, 'ড. আর এম দেবনাথ', 'Dr. R M Debnath', 'dr-r-m-debnath', 1, '2023-02-12 11:38:09', '2023-02-12 11:38:09'),
(94, 'হযরত শেখ সাদী (রহঃ)', 'Hazrat Sheikh Sadi (Rah.)', 'hazrat-sheikh-sadi-rah', 1, '2023-02-12 11:38:09', '2023-02-12 11:38:09'),
(95, 'বাংলাদেশ শিশু একাডেমী', 'Bangladesh Shishu Academy', 'bangladesh-shishu-academy', 1, '2023-02-12 11:38:09', '2023-02-12 11:38:09'),
(96, 'মঞ্জুরী দাস', 'Monjuri Das', 'monjuri-das', 1, '2023-02-12 11:38:09', '2023-02-12 11:38:09'),
(97, 'মোঃ সিরাজুল ইসলাম', 'Md. Sirajul Islam', 'md-sirajul-islam', 1, '2023-02-12 11:38:09', '2023-02-12 11:38:09'),
(98, 'অ্যান্থনী ম্যাসকারেনহাস', 'Anthony Mascarenhas', 'anthony-mascarenhas', 1, '2023-02-12 11:38:09', '2023-02-12 11:38:09'),
(99, 'প্রফেসর ড. আবদুল করিম', 'Professor Dr. Abdul Korim', 'professor-dr-abdul-korim', 1, '2023-02-12 11:38:09', '2023-02-12 11:38:09'),
(100, 'মোঃ আলাউদ্দিন', 'Md. Alauddin', 'md-alauddin', 1, '2023-02-12 11:38:09', '2023-02-12 11:38:09'),
(101, 'নিমাই ভট্টাচার্য', 'Nimai Bhattacharya', 'nimai-bhattacharya', 1, '2023-02-12 11:38:09', '2023-02-12 11:38:09'),
(102, 'শরদিন্দু বন্দ্যোপাধ্যায়', 'Sharadindu Bandyopadhyay', 'sharadindu-bandyopadhyay', 1, '2023-02-12 11:38:09', '2023-02-12 11:38:09'),
(103, 'সুচিত্রা ভট্টাচার্য', 'Suchitra Bhattacharya', 'suchitra-bhattacharya', 1, '2023-02-12 11:38:09', '2023-02-12 11:38:09'),
(104, 'চেতন ভগত', 'Chetan Bhagat', 'chetan-bhagat', 1, '2023-02-12 11:38:09', '2023-02-12 11:38:09'),
(105, 'জওহরলাল নেহেরু', 'Jawaharlal Neheru', 'jawaharlal-neheru', 1, '2023-02-12 11:38:09', '2023-02-12 11:38:09'),
(106, 'লে জেনারেল জে এফ আর জেকব', 'Le General J F R Jekob', 'le-general-j-f-r-jekob', 1, '2023-02-12 11:38:09', '2023-02-12 11:38:09'),
(107, 'জয়দীপ দে', 'Joidip Dey', 'joidip-dey', 1, '2023-02-12 11:38:09', '2023-02-12 11:38:09'),
(108, 'ডা. আবু সাঈদ শিমুল', 'Dr. Abu Sayeed Shimul', 'dr-abu-sayeed-shimul', 1, '2023-02-12 11:38:09', '2023-02-12 11:38:09'),
(109, 'লে. জে. এ এ কে নিয়াজী', 'L. G. A A K Niyaji', 'l-g-a-a-k-niyaji', 1, '2023-02-12 11:38:09', '2023-02-12 11:38:09'),
(110, 'ড. নরম্যান ভিনসেন্ট পিল', 'Dr. Norman Vincent Peale', 'dr-norman-vincent-peale', 1, '2023-02-12 11:38:09', '2023-02-12 11:38:09'),
(111, 'হেনরি ফোর্ড', 'Henry Ford', 'henry-ford', 1, '2023-02-12 11:38:09', '2023-02-12 11:38:09'),
(112, 'তারেক অণু', 'Tareq Onu', 'tareq-onu', 1, '2023-02-12 11:38:09', '2023-02-12 11:38:09'),
(113, 'মোঃ রুহুল আমিন', 'Md. Rohul Amin', 'md-rohul-amin', 1, '2023-02-12 11:38:09', '2023-02-12 11:38:09'),
(114, 'সালাম সরকার', 'Salam Sarker', 'salam-sarker', 1, '2023-02-12 11:38:10', '2023-02-12 11:38:10'),
(115, 'তারাদাস বন্দ্যোপাধ্যায়', 'Taradas Bondhopadhay', 'taradas-bondhopadhay', 1, '2023-02-12 11:38:10', '2023-02-12 11:38:10'),
(116, 'মহিউদ্দিন আহমদ', 'Mohiuddin Ahmmod', 'mohiuddin-ahmmod', 1, '2023-02-12 11:38:10', '2023-02-12 11:38:10'),
(117, 'মুনশী মোহাম্মদ মেহেরুল্লাহ', 'Munshi Mohammad Meherullah', 'munshi-mohammad-meherullah', 1, '2023-02-12 11:38:10', '2023-02-12 11:38:10'),
(118, 'মোহাম্মদ ফিরোজ মিয়া', 'Mohammod Feroz Mia', 'mohammod-feroz-mia', 1, '2023-02-12 11:38:10', '2023-02-12 11:38:10'),
(119, 'রবার্ট টি. কিয়োসাকি', 'Robert T. Kiyosaki', 'robert-t-kiyosaki', 1, '2023-02-12 11:38:10', '2023-02-12 11:38:10'),
(120, 'ব্রায়ান ট্রেসি', 'Brian Tracy', 'brian-tracy', 1, '2023-02-12 11:38:10', '2023-02-12 11:38:10'),
(121, 'সান জু', 'Sun Tzu', 'sun-tzu', 1, '2023-02-12 11:38:10', '2023-02-12 11:38:10'),
(122, 'রাগিব হাসান', 'Ragib Hasan', 'ragib-hasan', 1, '2023-02-12 11:38:11', '2023-02-12 11:38:11'),
(123, 'তিতাস সরকার', 'Titas Sarker', 'titas-sarker', 1, '2023-02-12 11:38:11', '2023-02-12 11:38:11'),
(124, 'আসিফ সিবগাত ভূঞা', 'Asif Sibgat Bhuyan', 'asif-sibgat-bhuyan', 1, '2023-02-12 11:38:11', '2023-02-12 11:38:11'),
(125, 'আজহারুল ইসলাম', 'Azaharul Islam', 'azaharul-islam', 1, '2023-02-12 11:38:11', '2023-02-12 11:38:11'),
(126, 'ঝংকার মাহবুব', 'Jhankar Mahbub', 'jhankar-mahbub', 1, '2023-02-12 11:38:11', '2023-02-12 11:38:11'),
(127, 'নিক পিরোগ', 'Nick Pirog', 'nick-pirog', 1, '2023-02-12 11:38:11', '2023-02-12 11:38:11'),
(128, 'শতরূপা বোস রায়', 'Satarupa Bose Roy', 'satarupa-bose-roy', 1, '2023-02-12 11:38:11', '2023-02-12 11:38:11'),
(129, 'ক্রিশ্চিয়ান জ্যাঁক', 'Chritian Jacq', 'chritian-jacq', 1, '2023-02-12 11:38:11', '2023-02-12 11:38:11'),
(130, 'শাফায়েত আশরাফ', 'Shafaet Ashraf', 'shafaet-ashraf', 1, '2023-02-12 11:38:11', '2023-02-12 11:38:11'),
(131, 'আরিফ আজাদ', 'Arif Azad', 'arif-azad', 1, '2023-02-12 11:38:11', '2023-02-12 11:38:11'),
(132, 'থিবো মেরিস', 'Thibaut Meurisse', 'thibaut-meurisse', 1, '2023-02-12 11:38:11', '2023-02-12 11:38:11'),
(133, 'ক্রিস্টিনা স্টেইন', 'Christina Stein', 'christina-stein', 1, '2023-02-12 11:38:11', '2023-02-12 11:38:11'),
(134, 'কাজী শাহজাহান', 'Kazi Shahjahan', 'kazi-shahjahan', 1, '2023-02-12 11:38:11', '2023-02-12 11:38:11'),
(135, 'শাহ্‌ মোস্তফা খালেদ', 'Shah Mostofa Khaled', 'shah-mostofa-khaled', 1, '2023-02-12 11:38:11', '2023-02-12 11:38:11'),
(136, 'আয়মান সাদিক', 'Ayman Sadiq', 'ayman-sadiq', 1, '2023-02-12 11:38:11', '2023-02-12 11:38:11'),
(137, 'সুরজিৎ সরকার', 'Surjit Sarker', 'surjit-sarker', 1, '2023-02-12 11:38:11', '2023-02-12 11:38:11'),
(138, 'মুহাম্মদ খালিদ পারওয়েজ', 'Muhammod Khalid Paroyej', 'muhammod-khalid-paroyej', 1, '2023-02-12 11:38:11', '2023-02-12 11:38:11'),
(139, 'হেক্টর গার্সিয়া', 'Hector Garcia', 'hector-garcia', 1, '2023-02-12 11:38:11', '2023-02-12 11:38:11'),
(140, 'ফ্রান্সেস্ক মিরালস', 'Farncesc Miralles', 'farncesc-miralles', 1, '2023-02-12 11:38:11', '2023-02-12 11:38:11'),
(141, 'এইচ এম নাঈম', 'H M Nayem', 'h-m-nayem', 1, '2023-02-12 11:38:11', '2023-02-12 11:38:11'),
(142, 'তাহসান খান', 'Tahsan Khan', 'tahsan-khan', 1, '2023-02-12 11:38:11', '2023-02-12 11:38:11'),
(143, 'কল্লোল লাহিড়ী', 'Kollol Lahiri', 'kollol-lahiri', 1, '2023-02-12 11:38:11', '2023-02-12 11:38:11'),
(144, 'মোঃ শফিকুল ইসলাম লস্কর', 'Md. Shofikul Islam Loskor', 'md-shofikul-islam-loskor', 1, '2023-02-12 11:38:11', '2023-02-12 11:38:11'),
(145, 'মাসুদুল হক', 'Masudul Haque', 'masudul-haque', 1, '2023-02-12 11:38:11', '2023-02-12 11:38:11'),
(146, 'শেগুফা তারাঞ্জুম', 'Shegufa Taranjum', 'shegufa-taranjum', 1, '2023-02-12 11:38:11', '2023-02-12 11:38:11'),
(147, 'অনির্দিষ্ট লেখক', 'Untagged Author', 'untagged-author', 1, '2023-02-12 08:19:55', '2023-02-12 08:19:55'),
(148, 'সংকলন / সম্পাদনা', 'Collection / Editorial', 'collection-editorial', 1, '2023-02-12 21:08:04', '2023-02-12 21:08:04'),
(149, 'জাভেদ ইকবাল', 'Javed Iqbal', 'javed-iqbal', 1, '2023-02-13 04:34:11', '2023-02-13 04:34:11'),
(150, 'হাশিম কিয়াম', 'Hashim Kiyam', 'hashim-kiyam', 1, '2023-02-13 04:34:46', '2023-02-13 04:34:46'),
(151, 'সরকারি প্রকাশনা', 'Government Publication', 'government-publication', 1, '2023-02-13 09:56:43', '2023-02-13 09:56:43'),
(152, 'শাহাদাত হোসেন অর্নব', 'Shahdat Hossain Arnob', 'shahdat-hossain-arnob', 1, '2023-02-15 06:17:47', '2023-02-15 06:17:47'),
(153, 'সদরুদ্দিন আহমেদ', 'Sadruddin Ahmed', 'sadruddin-ahmed', 1, '2023-02-15 06:25:01', '2023-02-15 06:25:01'),
(154, 'ডক্টর মুহম্মদ শহীদুল্লাহ', 'Dr. Muhammad Shohidullah', 'dr.-muhammad-shohidullah', 1, '2023-02-15 06:53:05', '2023-02-15 06:53:05'),
(155, 'আবদুল কাদির', 'Abdul Kadir', 'abdul-kadir', 1, '2023-02-15 06:54:48', '2023-02-15 06:54:48'),
(156, 'Todd Lammle', 'Todd Lammle', 'todd-lammle', 1, '2023-02-15 07:29:18', '2023-02-15 07:29:18'),
(157, 'Behrouz A. Forouzan', 'Behrouz A. Forouzan', 'behrouz-a.-forouzan', 1, '2023-02-15 07:30:54', '2023-02-15 07:30:54'),
(158, 'মাহবুবুর রহমান', 'Mahbubur Rahman', 'mahbubur-rahman', 1, '2023-02-15 07:34:31', '2023-02-15 07:34:31'),
(159, 'E Balagurusamy', 'E Balagurusamy', 'e-balagurusamy', 1, '2023-02-15 07:59:14', '2023-02-15 07:59:14'),
(160, 'Naresh Chauhan', 'Naresh Chauhan', 'naresh-chauhan', 1, '2023-02-15 08:04:33', '2023-02-15 08:04:33'),
(161, 'মোঃ মাহবুবুল হাসান', 'Md. Mahbubul Hasan', 'md.-mahbubul-hasan', 1, '2023-02-15 08:16:22', '2023-02-15 08:16:22'),
(162, 'এ পি জে আবদুল কালাম', 'A P J Abdul Kalam', 'a-p-j-abdul-kalam', 1, '2023-02-15 09:36:00', '2023-02-15 09:36:00'),
(163, 'হারুন-অর-রশিদ', 'Harun-Or-Rashid', 'harun-or-rashid', 1, '2023-02-28 09:28:25', '2023-02-28 09:28:25'),
(164, 'আনোয়ারা বেগম', 'Anowara Begum', 'anowara-begum', 1, '2023-03-02 21:43:01', '2023-03-02 21:43:01'),
(165, 'মাহবুব তালুকদার', 'Mahbub Talukdar', 'mahbub-talukdar', 1, '2023-03-06 09:06:10', '2023-03-06 09:06:10');

-- --------------------------------------------------------

--
-- Table structure for table `author_book`
--

CREATE TABLE `author_book` (
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `author_book`
--

INSERT INTO `author_book` (`author_id`, `book_id`) VALUES
(108, 9),
(39, 10),
(36, 11),
(52, 12),
(58, 13),
(75, 14),
(75, 15),
(23, 16),
(113, 17),
(121, 18),
(114, 19),
(128, 20),
(105, 21),
(103, 22),
(80, 23),
(26, 24),
(91, 25),
(101, 26),
(101, 27),
(85, 28),
(134, 29),
(87, 30),
(122, 31),
(125, 32),
(79, 33),
(57, 34),
(122, 35),
(12, 36),
(136, 37),
(49, 38),
(8, 39),
(8, 40),
(8, 41),
(8, 42),
(8, 43),
(8, 44),
(8, 45),
(8, 46),
(8, 47),
(8, 48),
(8, 49),
(8, 50),
(8, 51),
(8, 52),
(8, 53),
(15, 54),
(15, 55),
(15, 56),
(14, 57),
(46, 58),
(13, 59),
(25, 60),
(72, 61),
(135, 62),
(112, 63),
(112, 64),
(75, 65),
(86, 66),
(42, 67),
(44, 68),
(81, 69),
(81, 70),
(88, 71),
(22, 72),
(106, 73),
(84, 74),
(9, 75),
(35, 76),
(35, 77),
(35, 78),
(32, 79),
(63, 80),
(28, 81),
(40, 82),
(151, 84),
(151, 85),
(118, 86),
(118, 87),
(89, 88),
(89, 89),
(147, 90),
(144, 91),
(38, 92),
(147, 93),
(100, 96),
(147, 97),
(29, 98),
(69, 99),
(69, 100),
(69, 101),
(69, 102),
(69, 103),
(69, 104),
(69, 105),
(69, 106),
(69, 107),
(69, 108),
(153, 109),
(110, 110),
(126, 111),
(120, 112),
(133, 112),
(64, 112),
(46, 113),
(124, 114),
(147, 115),
(147, 116),
(147, 117),
(147, 118),
(147, 119),
(154, 120),
(155, 121),
(94, 122),
(147, 123),
(147, 124),
(147, 125),
(82, 126),
(82, 127),
(82, 128),
(147, 129),
(77, 130),
(27, 131),
(147, 132),
(147, 133),
(64, 134),
(64, 135),
(156, 136),
(157, 137),
(158, 138),
(159, 139),
(159, 140),
(160, 141),
(67, 142),
(67, 143),
(67, 144),
(130, 145),
(161, 147),
(152, 148),
(65, 149),
(152, 150),
(147, 151),
(147, 152),
(126, 153),
(126, 154),
(147, 155),
(51, 156),
(18, 157),
(148, 158),
(147, 159),
(162, 94),
(162, 95),
(148, 160),
(18, 161),
(147, 162),
(46, 163),
(147, 164),
(147, 165),
(48, 166),
(109, 167),
(48, 167),
(69, 168),
(45, 169),
(19, 170),
(32, 171),
(137, 172),
(45, 173),
(32, 174),
(120, 175),
(123, 176),
(147, 177),
(119, 178),
(98, 179),
(98, 180),
(98, 181),
(145, 182),
(78, 183),
(63, 146),
(46, 184),
(21, 185),
(16, 186),
(16, 187),
(25, 188),
(93, 189),
(117, 190),
(27, 191),
(74, 192),
(74, 193),
(76, 194),
(76, 195),
(42, 196),
(42, 197),
(131, 198),
(131, 199),
(148, 200),
(142, 201),
(85, 202),
(10, 203),
(131, 204),
(81, 205),
(81, 206),
(81, 207),
(81, 208),
(43, 209),
(99, 210),
(71, 211),
(62, 212),
(111, 213),
(37, 214),
(127, 215),
(127, 216),
(127, 217),
(127, 218),
(41, 219),
(147, 220),
(129, 221),
(129, 222),
(129, 223),
(129, 224),
(129, 225),
(148, 226),
(148, 227),
(27, 228),
(147, 229),
(148, 230),
(131, 231),
(59, 232),
(46, 233),
(81, 234),
(81, 235),
(102, 236),
(92, 237),
(92, 238),
(92, 239),
(8, 240),
(8, 241),
(60, 242),
(62, 243),
(62, 244),
(62, 245),
(62, 246),
(141, 247),
(146, 247),
(147, 248),
(147, 249),
(132, 250),
(96, 251),
(147, 252),
(42, 253),
(42, 254),
(85, 255),
(143, 256),
(107, 257),
(41, 258),
(54, 258),
(139, 259),
(140, 259),
(85, 260),
(61, 261),
(61, 262),
(85, 263),
(85, 264),
(47, 265),
(85, 266),
(62, 267),
(62, 268),
(62, 269),
(62, 270),
(62, 271),
(62, 272),
(62, 273),
(62, 274),
(62, 275),
(62, 276),
(62, 277),
(150, 278),
(131, 279),
(44, 280),
(149, 280),
(58, 281),
(8, 282),
(163, 83),
(164, 283),
(165, 284);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publisher_id` bigint(20) UNSIGNED NOT NULL,
  `printed_price` int(11) DEFAULT NULL,
  `purchase_price` int(11) DEFAULT NULL,
  `pages` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_method_id` bigint(20) UNSIGNED NOT NULL,
  `entry_no` int(11) DEFAULT NULL,
  `entry_date` date DEFAULT NULL,
  `storage_id` bigint(20) UNSIGNED DEFAULT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `recommended` tinyint(1) DEFAULT 0,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title_bn`, `title_en`, `slug`, `publisher_id`, `printed_price`, `purchase_price`, `pages`, `image`, `collection_method_id`, `entry_no`, `entry_date`, `storage_id`, `state_id`, `recommended`, `notes`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(9, 'শিশুকে সুস্থ রাখার সহজ উপায়', 'Shishuke Sustho Rakhar Sohoj Upay', 'shishuke-sustho-rakhar-sohoj-upay', 13, 160, 120, 80, 'thumbnails/gwRaIbc5pbgL42SU9YqMEdk7dox6sfpG83F121in.jpg', 1, 1, '2018-02-26', 16, 1, 0, NULL, 1, 1, '2023-02-12 09:33:18', '2023-02-12 09:42:23'),
(10, 'মা ও শিশু', 'Ma o Shishu', 'ma-o-shishu', 130, 100, 80, 178, 'thumbnails/DJ6cnQPt4LtuhRILSGFCBoCv7iulrOID1fO4EtEy.jpg', 1, 2, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-12 09:40:44', '2023-02-12 09:40:44'),
(11, 'কখন মা হবেন', 'Kokhon Ma Hoben', 'kokhon-ma-hoben', 8, 100, 80, 112, 'thumbnails/iRPjxXxhgt371WeS39VROMO2eUV5fdCC1ktGelGU.jpg', 1, 3, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-12 09:44:28', '2023-02-12 09:44:28'),
(12, 'সব ওষুধ নিরাপদ নয়', 'Sob Oshudh Nirapod Noy', 'sob-oshudh-nirapod-noy', 10, 200, 175, 111, 'thumbnails/FkOhapubsvJbiMlzaiYIVRtKiZSE0ibC3WI2C4Rq.jpg', 1, 4, '2016-01-01', 16, 1, 0, NULL, 1, NULL, '2023-02-12 09:48:22', '2023-02-12 09:48:22'),
(13, 'ক্যান্সার', 'Cancer', 'cancer', 34, 250, 220, 191, 'thumbnails/WirH6YXqPqDltjA3YFjRqxPNyzwACQQGbu3tO7bg.jpg', 1, 5, '2018-02-26', 16, 1, 0, NULL, 1, NULL, '2023-02-12 09:53:22', '2023-02-12 09:53:22'),
(14, 'গল্পে জল্পে জেনেটিক্স (১ম খণ্ড)', 'Golpe jolpe Genetics (1st Part)', 'golpe-jolpe-genetics-1st-part', 25, 240, 192, 97, 'thumbnails/hxcyVQNbebwzc0MbdmRGPrUqAuz9czrsVrH0WgoJ.jpg', 1, 6, '2016-02-28', 16, 1, 0, NULL, 1, NULL, '2023-02-12 10:00:40', '2023-02-12 10:00:40'),
(15, 'গল্পে জল্পে জেনেটিক্স (২য় খণ্ড)', 'Golpe jolpe Genetics (2nd Part)', 'golpe-jolpe-genetics-2nd-part', 25, 240, 192, 114, 'thumbnails/7x02la9J5RHHw6RoOhFyoH7FlOpmGz8Wo0ISTrEa.jpg', 1, 7, '2016-02-28', 16, 1, 0, NULL, 1, NULL, '2023-02-12 10:02:41', '2023-02-12 10:02:41'),
(16, 'মাইন ক্যাম্ফ', 'Mine Camf', 'mine-camf', 130, 250, 150, 239, 'thumbnails/Tj4pL7TomSk3Ef2QmBDRL9E4mnaYVn9pvEBtKu40.jpg', 1, 8, NULL, 16, 1, 0, NULL, 1, 1, '2023-02-12 10:05:02', '2023-02-12 10:06:41'),
(17, 'ইতিহাসের সেইসব নিষ্ঠুর মানুষেরা', 'Etihaser Seysob Nisthur Manushera', 'etihaser-seysob-nisthur-manushera', 50, 150, 120, 92, 'thumbnails/4xGmPO0Y1Tdg4kRAXhcxtEDORriW3wfsYZKjELfp.jpg', 1, 9, '2017-01-01', 16, 1, 0, NULL, 1, NULL, '2023-02-12 10:09:32', '2023-02-12 10:09:32'),
(18, 'দ্য আর্ট অব ওয়ার', 'The Art of War', 'the-art-of-war', 42, 150, 120, 78, 'thumbnails/tedC9OgZ2lU9lzwFXbxiSNuAdAEB9zZ3IgIuGUQv.jpg', 1, 10, '2017-02-19', 16, 1, 0, NULL, 1, NULL, '2023-02-12 10:11:17', '2023-02-12 10:11:17'),
(19, 'বিয়ে মানে লস প্রজেক্ট', 'Biye Mane Loss Project', 'biye-mane-loss-project', 30, 200, 150, 112, 'thumbnails/oWSf5lamWVPZpaCNraaDOcQ03WBwTRsVZwWTWoou.jpg', 1, 11, '2016-02-28', 16, 1, 0, 'বাজে একটি বই। নট রেকমেন্ডেড!', 1, NULL, '2023-02-12 10:12:39', '2023-02-12 10:12:39'),
(20, 'মীর এই পর্যন্ত', 'Mir Ai Porjonto', 'mir-ai-porjonto', 130, 300, 225, 86, 'thumbnails/FPN3LjUSUIeOmgAoBVkkKd9WPOdAJ5j0ZweG9m5r.jpg', 1, 12, '2016-06-29', 16, 1, 0, NULL, 1, NULL, '2023-02-12 19:55:49', '2023-02-12 19:55:49'),
(21, 'মেয়ের কাছে বাবার চিঠি', 'Meyer Kache Babar Chithhi', 'meyer-kache-babar-chithhi', 108, 150, 120, 104, 'thumbnails/F81IsZwBTthiwON3MawiEIFBEiKyAvg65oCAN8tF.jpg', 1, 13, '2018-02-26', 16, 1, 0, NULL, 1, NULL, '2023-02-12 19:58:37', '2023-02-12 19:58:37'),
(22, 'কাছের মানুষ', 'Kacher Manush', 'kacher-manush', 40, 350, 265, 645, 'thumbnails/zEBesIC2u95WxoD3u8ylubxoBo9FwrIyxpZYq6gF.jpg', 1, 14, '2010-08-03', 16, 1, 0, NULL, 1, NULL, '2023-02-12 20:02:23', '2023-02-12 20:02:23'),
(23, 'লা নুই বেঙ্গলী', 'La Nui Bengali', 'la-nui-bengali', 130, 75, 75, 103, 'thumbnails/tpilit7jqIeegey4BqU8wGVMhUosk1aDPKEBXEjn.jpg', 1, 15, '2010-12-10', 16, 1, 0, NULL, 1, NULL, '2023-02-12 20:05:54', '2023-02-12 20:05:54'),
(24, 'সোনালী দুঃখ', 'Sonali Dukkho', 'sonali-dukkho', 40, 60, 50, 80, 'thumbnails/ih5XpPwM4sCCE4T5XHjSluzDgTorcvBzBDPqG6kz.jpg', 1, 16, '2020-05-08', 16, 1, 0, NULL, 1, NULL, '2023-02-12 20:07:13', '2023-02-12 20:07:13'),
(25, 'শ্রেষ্ঠ উপন্যাস সমগ্র', 'Srestho Uponnas Somogro', 'srestho-uponnas-somogro', 67, 200, 140, 240, 'thumbnails/zPw4G4Oi3dbnsIa6hlnNYVwxLWtPKP3P5BKV4YGi.jpg', 1, 17, '2010-05-08', 16, 1, 0, NULL, 1, NULL, '2023-02-12 20:08:28', '2023-02-12 20:08:28'),
(26, 'গোধুলিয়া', 'Godhulia', 'godhulia', 73, 250, 125, 196, 'thumbnails/rtqZq46Ge7Bmyy94z9A4ua3m1mVpdEouRrCLBZvL.jpg', 1, 18, '2017-12-14', 16, 1, 0, NULL, 1, NULL, '2023-02-12 20:46:18', '2023-02-12 20:46:18'),
(27, 'তিনটি শ্রেষ্ঠ উপন্যাস', 'Tinti Sreshtho Uponnas', 'tinti-sreshtho-uponnas', 73, 250, 125, 366, 'thumbnails/zTpKLJc6omckGg178KHAoUSzkof3TqP73Sdug0Hc.jpg', 1, 19, '2010-12-10', 16, 1, 0, NULL, 1, NULL, '2023-02-12 20:49:49', '2023-02-12 20:49:49'),
(28, 'পথের পাঁচালী', 'Pother Pachali', 'pother-pachali', 107, 380, 140, 231, 'thumbnails/PtwTqy8rm1m0pHbuVCboMYcAekVIVaGGFrRiHSID.jpg', 1, 20, '2017-12-14', 16, 1, 0, NULL, 1, NULL, '2023-02-12 20:52:12', '2023-02-12 20:52:12'),
(29, 'জীবনের জলতরঙ্গ', 'Jiboner Joltorongo', 'jiboner-joltorongo', 24, 200, 120, 95, 'thumbnails/9u6AqW2EwcWrlj00YcBVolDGaiTX3fnf3VbWuxs5.jpg', 1, 21, '2017-12-14', 16, 1, 0, NULL, 1, 1, '2023-02-12 20:54:52', '2023-02-12 20:55:16'),
(30, 'রচনাসমগ্র - ডেল কার্ণেগী', 'Rochona Somogro', 'rochona-somogro', 130, 350, 150, 504, 'thumbnails/hCKV7UmfPMnUelY0XWGaNPeAafwytW7cylv0ha9n.jpg', 1, 22, '2010-03-03', 16, 1, 0, NULL, 1, 1, '2023-02-12 20:58:32', '2023-02-12 21:06:20'),
(31, 'মন প্রকৌশল - স্বপ্ন অনুপ্রেরণা আর জীবন গড়ার ফরমুলা', 'Mon Prakaushal Swapna Anuprerana Ar Jibon Gadrar Farmula', 'mon-prakaushal-swapna-anuprerana-ar-jibon-gadrar-farmula', 36, 150, 120, 80, 'thumbnails/aUkh8FcNdSwcBcBf9AVQEk3ghBoNuZWFQBCvlyNq.jpg', 1, 23, '2015-02-22', 16, 1, 0, NULL, 1, NULL, '2023-02-13 05:06:31', '2023-02-13 05:06:31'),
(32, 'মানসিক প্রশান্তি আর মর্যাদাপূর্ণ জীবনের জাদুকাঠি', 'Manasik Prashanti Ar Marzadapurna Jiboner Jadukathi', 'manasik-prashanti-ar-marzadapurna-jiboner-jadukathi', 36, 250, 188, 118, 'thumbnails/LGOXMzrqvXKnRhRkZnigmpc6PPrxGuMoYL3xYB3Q.jpg', 1, 24, '2016-02-28', 16, 1, 1, NULL, 1, NULL, '2023-02-13 05:08:46', '2023-02-13 05:08:46'),
(33, 'তুমিও জিতবে', 'Tumio Jitbe', 'tumio-jitbe', 83, 175, 130, 270, 'thumbnails/Xe8ukQ7pmbuvi8jG1HDG0Alpel0W04lFlOOdwJ2D.jpg', 1, 25, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-13 05:11:46', '2023-02-13 05:11:46'),
(34, 'পড়ো পড়ো পড়ো', 'Poro Poro Poro', 'poro-poro-poro', 36, 250, 185, 136, 'thumbnails/bFDVEUqsdroRv0ZWsJ6BjeE1awuptP12zGVgI3qv.jpg', 1, 26, '2017-02-12', 16, 1, 0, NULL, 1, NULL, '2023-02-13 05:12:58', '2023-02-13 05:12:58'),
(35, 'গবেষণায় হাতেখড়ি', 'Gobeshonai Hatekhori', 'gobeshonai-hatekhori', 36, 200, 160, 91, 'thumbnails/bDbjwTk1s91UHIba7xycKy9okQ7SlTSuwtVO1Ppg.jpg', 1, 27, '2015-02-22', 16, 1, 0, NULL, 1, NULL, '2023-02-13 05:14:34', '2023-02-13 05:14:34'),
(36, 'সুন্দর কথা বলবেন কিভাবে', 'Sundor Kotha Bolben Kivabe', 'sundor-kotha-bolben-kivabe', 131, 125, 105, 80, 'thumbnails/cBpo5XWOAicIjxpjmvuWh0DKjNUihZwJgMnhuRcR.jpg', 1, 28, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-13 05:17:39', '2023-02-13 05:17:39'),
(37, 'নেভার স্টপ লার্নিং', 'Never Stop Learning', 'never-stop-learning', 119, 270, 205, 140, 'thumbnails/3exQg2kHR8Pk2niXDiVABZAYlQ0ZT7VfxZe8vfwl.jpg', 1, 29, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-13 05:19:10', '2023-02-13 05:19:10'),
(38, 'উপস্থাপনা ও কথা বলার কলাকৌশল', 'Uposthapona O KOtha bolar Kolakoishol', 'uposthapona-o-kotha-bolar-kolakoishol', 60, 100, 80, 96, 'thumbnails/NbAacCjdDrMViYSZHhqBhVdUIdxpEUFfO48VynJA.jpg', 1, 30, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-13 05:20:47', '2023-02-13 05:20:47'),
(39, 'মিসির আলি সমগ্র', 'Misir Ali Samagra', 'misir-ali-samagra', 8, 800, 640, 1144, 'thumbnails/1ESxSKdyCuYxbKjR4K6yqKQAAWNElMzpMG6bduYI.jpg', 1, 31, '2016-06-29', 16, 1, 0, NULL, 1, NULL, '2023-02-13 05:23:26', '2023-02-13 05:23:26'),
(40, 'মিসির আলি সমগ্র - ২', 'Misir Ali Samagra - 2', 'misir-ali-samagra-2', 8, 450, 360, 320, 'thumbnails/WzRFfl4ZNTosoYluA6dUTHkEBuQx4mnlHkyFjo1c.jpg', 1, 32, '2016-06-29', 16, 1, 0, NULL, 1, NULL, '2023-02-13 05:25:27', '2023-02-13 05:25:27'),
(41, 'হিমু দশ', 'Himu Dash', 'himu-dash', 7, 800, 640, 703, 'thumbnails/ANjuhDkW5wdAsH0m2LRvuYW2JE8LO2tpRwKOhtoi.jpg', 1, 33, '2017-01-01', 16, 1, 0, NULL, 1, NULL, '2023-02-13 05:27:05', '2023-02-13 05:27:05'),
(42, 'ভ্রমণ সমগ্র', 'Vromon Somogro', 'vromon-somogro', 7, 550, 440, 368, 'thumbnails/sglWP5SxkmfdVkXUyDsWC3wZasrA7oOYlr14OpFm.jpg', 1, 34, '2016-02-28', 16, 1, 0, NULL, 1, NULL, '2023-02-13 05:33:16', '2023-02-13 05:33:16'),
(43, 'শ্রেষ্ঠ গল্প', 'Srestha Golpo', 'srestha-golpo', 18, 500, 400, 380, 'thumbnails/1M6rHfPCtsbaG5YRlo62C0pvV2nFhbkELPmXn25p.jpg', 1, 35, '2016-02-28', 16, 1, 0, NULL, 1, NULL, '2023-02-13 05:34:47', '2023-02-13 05:34:47'),
(44, 'আমি', 'Ami', 'ami', 7, 500, 400, 312, 'thumbnails/bmtVFqucAqAklxueT9xwIzjU9pRT6qsRptmSRpPf.jpg', 1, 36, '2016-02-28', 16, 1, 0, NULL, 1, NULL, '2023-02-13 05:35:57', '2023-02-13 05:35:57'),
(45, 'দেবী', 'Debi', 'debi', 38, 65, 60, 80, 'thumbnails/71JsAmyUbPXEaxxhadIzsW7MWzyYV1yee7D0DgJA.jpg', 1, 37, '2010-12-10', 16, 1, 0, NULL, 1, NULL, '2023-02-13 05:37:32', '2023-02-13 05:37:32'),
(46, 'শূন্য', 'Shunno', 'shunno', 18, 100, 85, 72, 'thumbnails/QaOtIOBAchPo0LlN5FeiVEiPdJ2yjkqRkHnOVocW.jpg', 1, 38, '2017-10-11', 16, 1, 0, NULL, 1, NULL, '2023-02-13 05:38:54', '2023-02-13 05:38:54'),
(47, 'ফিহা সমীকরণ', 'Fiha Somikoron', 'fiha-somikoron', 14, 125, 105, 78, 'thumbnails/5rspAQHR8kHa6kUi1FcBBO8FLsGcJ69srBZ9KqhU.jpg', 1, 39, '2017-10-11', 16, 1, 0, NULL, 1, NULL, '2023-02-13 05:40:14', '2023-02-13 05:40:14'),
(48, 'দি একসরসিস্ট', 'The Exorcist', 'the-exorcist', 15, 180, 150, 120, 'thumbnails/bSN8WuPuGJk0K7QVDjJvLUW7EPc6f3fwoRPuhEfh.jpg', 1, 40, '2017-10-11', 16, 1, 0, NULL, 1, NULL, '2023-02-13 05:41:54', '2023-02-13 05:41:54'),
(49, 'তোমাদের জন্য ভালোবাসা', 'Tomader Jonno Bhalobasha', 'tomader-jonno-bhalobasha', 13, 135, 101, 68, 'thumbnails/4KZAxmlJH2Gq6vx5RmQLGPblVTlt7b9t4ocXwnLA.jpg', 1, 41, '2017-10-11', 16, 1, 0, NULL, 1, NULL, '2023-02-13 05:43:41', '2023-02-13 05:43:41'),
(50, 'লীলাবতী', 'Lilaboti', 'lilaboti', 7, 400, 320, 240, 'thumbnails/lNgXGl1WXjGHRS7Tl8gqcEX4a4hRhXieG9A3o2sr.jpg', 1, 42, '2017-01-01', 16, 1, 0, NULL, 1, NULL, '2023-02-13 05:44:47', '2023-02-13 05:44:47'),
(51, 'পুতুল', 'Putul', 'putul', 17, 70, 60, 56, 'thumbnails/Iz89hMMq7m1Ev1lDHoCsao9EjaYOkr0Fpvu8LeNg.jpg', 1, 43, '2017-10-11', 16, 1, 0, NULL, 1, NULL, '2023-02-13 05:46:37', '2023-02-13 05:46:37'),
(52, 'দেয়াল', 'Deyal', 'deyal', 7, 380, 310, 195, 'thumbnails/MkHDkp8rSrfVAddeHSgM4BfuIatvpO6VUElkyAzr.jpg', 1, 44, '2016-06-29', 16, 1, 0, NULL, 1, NULL, '2023-02-13 05:48:00', '2023-02-13 05:48:00'),
(53, 'নক্ষত্রের রাত', 'Nokkhotrer Rat', 'nokkhotrer-rat', 7, 150, 130, 88, 'thumbnails/jNQ9ZduMaPYaJBafrGXoN4PGQZfTqQnugx6ngQ2x.jpg', 1, 45, '2017-01-01', 16, 1, 0, NULL, 1, NULL, '2023-02-13 05:49:31', '2023-02-13 05:49:31'),
(54, 'পিশাচিনী', 'Pishachini', 'pishachini', 23, 200, 160, 120, 'thumbnails/YBwbq9npQKSrdMKeqjelxrQmxHua2loM13nWiqBa.jpg', 1, 46, '2018-01-01', 16, 1, 0, NULL, 1, NULL, '2023-02-13 05:51:18', '2023-02-13 05:51:18'),
(55, 'প্রেত', 'Pret', 'pret', 15, 150, 125, 111, 'thumbnails/xzkMoZUGbRZz5xrEMLn3rC4E4ZHRhTz9uN5oLJVo.jpg', 1, 47, '2018-01-01', 16, 1, 0, NULL, 1, NULL, '2023-02-13 05:52:28', '2023-02-13 05:52:28'),
(56, 'নিশিকন্যা', 'Nishi Konna', 'nishi-konna', 16, 150, 125, 112, 'thumbnails/jYvZnb25UrGOhqoa7g3UbwGpx6cFiMwm6ty3OfsX.jpg', 1, 48, '2018-01-01', 16, 1, 0, NULL, 1, NULL, '2023-02-13 05:53:32', '2023-02-13 05:53:32'),
(57, 'ক্রীতদাসী', 'Kritodashi', 'kritodashi', 46, 250, 200, 143, 'thumbnails/AeoJTZw7m2hFQrOJncZWw7LNxXsV5gxJnRcoAoMU.jpg', 1, 49, '2016-02-28', 16, 1, 0, NULL, 1, NULL, '2023-02-13 05:54:45', '2023-02-13 05:54:45'),
(58, 'যদ্যপি আমার গুরু', 'Jodyopi Amar Guru', 'jodyopi-amar-guru', 23, 175, 150, 110, 'thumbnails/zNJRMOt2KX6GOvZUIhfQ7OUzhqrrlqt4aYwQCYYD.jpg', 1, 50, '2018-01-01', 16, 1, 0, NULL, 1, NULL, '2023-02-13 05:56:47', '2023-02-13 05:56:47'),
(59, 'মা', 'Ma', 'ma', 18, 400, 320, 317, 'thumbnails/LIFk1Ob2VYUqqGMlBoJAo9KHuODkiEwVyQyCUXAr.jpg', 1, 51, '2018-10-10', 16, 1, 0, NULL, 1, NULL, '2023-02-13 07:59:13', '2023-02-13 07:59:13'),
(60, 'আমার আত্মজীবনী', 'Amar Aattojiboni', 'amar-aattojiboni', 57, 500, 400, 432, 'thumbnails/xg9NTKvvUqInTrJ08HNRW33nikJYZb46w4O2Ei3P.jpg', 1, 52, '2015-03-18', 16, 1, 0, NULL, 1, NULL, '2023-02-13 08:02:58', '2023-02-13 08:02:58'),
(61, 'জাদুটোনার দেশ কামরূপ কামাখ্যা', 'Jadutonar Desh Kamrup Kamakkhya', 'jadutonar-desh-kamrup-kamakkhya', 35, 100, 75, 100, 'thumbnails/O6G74GffU90NsAnkJDa09aqYKBvNGK1ieykTcZS2.jpg', 1, 53, '2015-02-22', 16, 1, 0, NULL, 1, 1, '2023-02-13 08:06:17', '2023-02-13 08:12:24'),
(62, 'ভারত ভ্রমণের দিনলিপি', 'Bharat Vromoner Dinlipi', 'bharat-vromoner-dinlipi', 120, 270, 205, 161, 'thumbnails/PxK2SSVns64QkIlkcXG7dwwhCp9xCBj12BxH3SsK.jpg', 1, 54, '2018-02-26', 16, 1, 0, NULL, 1, NULL, '2023-02-13 08:08:48', '2023-02-13 08:08:48'),
(63, 'পৃথিবীর পথে পথে', 'Prithibir Pothe Pothe', 'prithibir-pothe-pothe', 88, 500, 400, 336, 'thumbnails/g3ofnUTGPk4T8LZNmZCZ0m6yu4HeExTdFY5CJX49.jpg', 1, 55, '2014-09-22', 16, 1, 0, NULL, 1, NULL, '2023-02-13 08:10:18', '2023-02-13 08:10:18'),
(64, 'পথ চলাতেই আনন্দ', 'Poth Cholatei Anondo', 'poth-cholatei-anondo', 88, 300, 240, 224, 'thumbnails/CPcmqkLwEiEKbXFcReD3WZA1DoEZg5YokvGlmyoW.jpg', 1, 56, '2015-09-22', 16, 1, 0, NULL, 1, NULL, '2023-02-13 08:15:07', '2023-02-13 08:15:07'),
(65, 'গণিতের রঙ্গে - হাসিখুশি গণিত', 'Goniter Ronge - Hashikhushi Gonit', 'goniter-ronge-hashikhushi-gonit', 36, 200, 160, 96, 'thumbnails/cAxTo16BSDonI9SL2Ihi5iY80Qd4ZJDIKZE1rEfc.jpg', 1, 57, '2015-02-22', 16, 1, 0, NULL, 1, 1, '2023-02-13 08:17:26', '2023-02-13 08:18:21'),
(66, 'গণিতের সংক্ষিপ্ত ইতিহাস', 'Goniter Songkhipto Itihash', 'goniter-songkhipto-itihash', 130, 135, 105, 116, 'thumbnails/8iv0cH9hWCk31jJj8JcLYwuTWMAMZ4G51cwc5gWJ.jpg', 1, 58, '2015-02-22', 16, 1, 0, NULL, 1, NULL, '2023-02-13 08:20:20', '2023-02-13 08:20:20'),
(67, 'মিশরের ইতিহাস', 'Mishorer Itihash', 'mishorer-itihash', 22, 300, 240, 190, 'thumbnails/VJOdP8YesId3vbUtRU3EblYOqWcZ7B5S0lbx3v0D.jpg', 1, 59, '2018-02-26', 16, 1, 1, 'প্রাচীন মিশরিয় সভ্যতা বিষয়ক অসাধারণ একটি বই।', 1, NULL, '2023-02-13 08:22:49', '2023-02-13 08:22:49'),
(68, 'দ্য আলকেমিস্ট', 'The Alchemist', 'the-alchemist', 26, 250, 205, 139, 'thumbnails/a0LIrnnHijrc9fb8awfqyfLpPXP2IVaFBO5anisq.jpg', 1, 60, '2017-10-11', 16, 1, 0, NULL, 1, NULL, '2023-02-13 08:25:16', '2023-02-13 08:25:16'),
(69, 'ফারাও', 'Farao', 'farao', 43, 460, 430, 383, 'thumbnails/wX36WqVcwKeIpTW4U1q3JnxfuL4Tk764Ccfk6ejL.jpg', 1, 61, '2017-10-11', 16, 1, 1, NULL, 1, NULL, '2023-02-13 08:27:12', '2023-02-13 08:27:12'),
(70, 'রিভার গড', 'River God', 'river-god', 43, 350, 310, 415, 'thumbnails/pb81bO22jVhm0t3BLNWZo63ZSUN1WSmEl9P981qh.jpg', 1, 62, '2018-02-26', 16, 1, 1, NULL, 1, NULL, '2023-02-13 08:29:40', '2023-02-13 08:29:40'),
(71, 'অরিজিন', 'Origin', 'origin', 37, 450, 360, 440, 'thumbnails/tg3JqgIUqmYdHn3reA3X6qwRptPP8OTHT6hRc9Ie.jpg', 1, 63, NULL, 16, 1, 1, NULL, 1, NULL, '2023-02-13 08:31:24', '2023-02-13 08:31:24'),
(72, 'ভারত কেন ভাঙ্গে', 'Bharat Keno Bhange', 'bharat-keno-bhange', 9, 100, 85, 71, 'thumbnails/m8yTtKM4DfFd1JvTzSbOBOJH5NKN7zmJE8ruNQGW.jpg', 1, 64, '2014-09-22', 16, 1, 0, NULL, 1, NULL, '2023-02-13 08:33:18', '2023-02-13 08:33:18'),
(73, 'সারেন্ডার অ্যাট ঢাকা', 'Surrender At Dhaka', 'surrender-at-dhaka', 71, 300, 225, 230, NULL, 1, 65, '2017-02-19', 16, 1, 1, NULL, 1, NULL, '2023-02-13 08:35:44', '2023-02-13 08:35:44'),
(74, 'তিনটি সেনা অভ্যুত্থান ও কিছু না বলা কথা', 'Tinti Sena Ovuthan O kisu Na Bola Kotha', 'tinti-sena-ovuthan-o-kisu-na-bola-kotha', 28, 250, 210, 208, 'thumbnails/n9tBe06aWBPhKh1ygDsBQpBiGzIJfDe8fp71lGkP.jpg', 1, 66, '2018-10-10', 16, 1, 1, 'শুদ্ধ ইতিহাসের উৎস হিসেবে অসাধারণ একটি বই। রেকমেন্ডেড।', 1, NULL, '2023-02-13 08:38:45', '2023-02-13 08:38:45'),
(75, 'মুক্তিযুদ্ধ ১৯৭১', 'Muktijuddho 1971', 'muktijuddho-1971', 8, 300, 225, 208, 'thumbnails/QjvA912CSpE5umbJV2bLWNBaB1TKpkzr1F4Jrkau.jpg', 1, 67, '2016-06-29', 16, 1, 0, NULL, 1, NULL, '2023-02-13 09:35:05', '2023-02-13 09:35:05'),
(76, 'বাংলার কিশোর মুক্তিযোদ্ধা', 'Banglar Kishore Muktijoddha', 'banglar-kishore-muktijoddha', 11, 100, 90, 72, 'thumbnails/cnpCXTPRQf4Rax6JsgWnwMvfPA7IOtmIX3JLpltG.jpg', 1, 68, '2018-05-30', 16, 1, 0, NULL, 1, NULL, '2023-02-13 09:36:37', '2023-02-13 09:36:37'),
(77, 'বীরশ্রেষ্ট শহীদ ফ্লাইট লেফটেন্যান্ট মতিউর রহমান', 'Birshersto Shaid Floyet Left. Motiur Rahaman', 'birshersto-shaid-floyet-left-motiur-rahaman', 11, 150, 115, 70, 'thumbnails/BDPdOQS9toMuZISMatyYWzdsbggHfRiWjZpMq3UJ.jpg', 1, 69, '2018-05-30', 16, 1, 0, NULL, 1, 1, '2023-02-13 09:38:44', '2023-02-13 09:41:39'),
(78, 'মুক্তিযোদ্ধা শহীদ ক্যাপ্টেন আফতাব কাদের বীরউত্তম', 'Muktijuddha Shohid Captain Aftab Kader Beeruttom', 'muktijuddha-shohid-captain-aftab-kader-beeruttom', 11, 160, 140, 84, 'thumbnails/RpiS7G1MCCSiT0XCXARq8js5WNQNVBXVlCIeKBLy.jpg', 1, 70, '2018-05-30', 16, 1, 0, NULL, 1, NULL, '2023-02-13 09:41:22', '2023-02-13 09:41:22'),
(79, 'বাংলাদেশের লোকজ সংস্কৃতি গ্রন্থমালা - মাগুরা', 'Bangladesher Lokoj Songskriti Gronthomala Magura', 'bangladesher-lokoj-songskriti-gronthomala-magura', 11, 340, 300, 371, 'thumbnails/y8qxbK42r2iwRal9mkPVCzkOMSFIPakFB4r4oqmf.jpg', 1, 71, '2017-02-18', 16, 1, 0, NULL, 1, 1, '2023-02-13 09:44:54', '2023-02-24 10:54:35'),
(80, 'অসমাপ্ত আত্মজীবনী', 'Osomapto Attojiboni', 'osomapto-attojiboni', 71, 525, 395, 303, 'thumbnails/XHqAJi97NAhowWy7mTRn4qhp0PoiotUfwNO0rvn5.jpg', 1, 72, '2016-06-29', 16, 1, 0, NULL, 1, NULL, '2023-02-13 09:47:47', '2023-02-13 09:47:47'),
(81, 'শেখ মুজিব আমার পিতা', 'Sheikh Mujib Amar Pita', 'sheikh-mujib-amar-pita', 10, 250, 205, 111, 'thumbnails/dz0JghCsPoykaBceiMoZE2E0wc1G0IvMCP8YYuYN.jpg', 1, 73, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-13 09:49:19', '2023-02-13 09:49:19'),
(82, '১৯৭১ ভেতরে বাইরে', '1971 Vetore Baire', '1971-vetore-baire', 21, 450, 400, 216, 'thumbnails/kQ8foAIt0h1IA82lbi7nEf7kv8ORg2ASH7fXL10Q.jpg', 1, 74, '2014-09-22', 16, 1, 1, NULL, 1, NULL, '2023-02-13 09:51:16', '2023-02-13 09:51:16'),
(83, '৭ই মার্চের ভাষণ কেন বিশ্ব-ঐতিহ্য সম্পদ', '7 marcher vashon keno bisso oitijjo sompod', '7-marcher-vashon-keno-bisso-oitijjo-sompod', 7, 250, 200, 117, 'thumbnails/OMTByxoCeCjXaS7sdb2lEfIG7z9yfkylQecUGz92.jpg', 1, 75, '2018-09-09', 16, 1, 0, NULL, 1, 1, '2023-02-13 09:53:49', '2023-02-28 09:29:28'),
(84, 'গণপ্রজাতন্ত্রী বাংলাদেশের সংবিধান', 'The Constitution of the Peoples Republic of Bangladesh: Government Publication', 'the-constitution-of-the-peoples-republic-of-bangladesh-government-publication', 95, 340, 270, 225, 'thumbnails/SpT3tVWPNn6Dag67zB5LSTePGTWpPQfq7dKdMEjY.jpg', 1, 76, NULL, 16, 1, 0, NULL, 1, 1, '2023-02-13 09:57:45', '2023-02-13 09:58:12'),
(85, 'সচিবালয় নির্দেশমালা ২০১৪', 'Secretariet Instruction 2014', 'secretariet-instruction-2014', 95, 170, 140, 105, 'thumbnails/q27qBUCyp4hr7zR5rWgyMp0uhR8UUV6Q0VMYNkJP.jpg', 1, 77, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-13 10:00:09', '2023-02-13 10:00:09'),
(86, 'চাকরির বিধানাবলী', 'Chakrir Bidhanaboli', 'chakrir-bidhanaboli', 100, 525, 525, 687, 'thumbnails/NxI3IGI7exV6cwi9KC8I23j18gR4eLp3hwi5TrIB.jpg', 1, 78, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-13 10:19:20', '2023-02-13 10:19:20'),
(87, 'বাংলাদেশ সার্ভিস রুলস', 'Bangladesh Service Rules', 'bangladesh-service-rules', 100, 495, 495, 535, 'thumbnails/FuN0u9QTxUCU1Olhxz3UVzn0mrsNEkRR0wMQj8ts.jpg', 1, 79, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-13 10:20:43', '2023-02-13 10:20:43'),
(88, 'জেন্‌রল্‌ ফিন্যান্‌শল রুল্‌স্‌', 'General Financial Rules', 'general-financial-rules', 106, 625, 470, 462, 'thumbnails/pOjzu85cghm1MTStxkm5uYT8HzDoXE4a10glVSx5.jpg', 1, 80, '2018-10-10', 16, 1, 0, NULL, 1, NULL, '2023-02-13 10:22:31', '2023-02-13 10:22:31'),
(89, 'ট্রেজারি রুলস', 'Treasury Rules', 'treasury-rules', 106, 685, 515, 516, 'thumbnails/jw9beiW1M9Qs3kNrrSO0yo2P9mPu4wlEHp2jtQLo.jpg', 1, 81, '2018-10-10', 16, 1, 0, NULL, 1, NULL, '2023-02-13 10:23:57', '2023-02-13 10:23:57'),
(90, 'রুলস অফ বিজনেস', 'Rules of Business', 'rules-of-business', 106, 435, 325, 222, 'thumbnails/LWI0lMEZJcIN3dgTXWfxrpYsgSd5FKXFO6W1DDR2.jpg', 1, 82, '2018-04-23', 16, 1, 0, NULL, 1, NULL, '2023-02-13 10:26:09', '2023-02-13 10:26:09'),
(91, 'পাবলিক প্রকিউরমেন্ট - আইন ও বিধিমালা', 'Public Procurement - Law and Rules', 'public-procurement-law-and-rules', 106, 575, 460, 286, 'thumbnails/2pw7tHg7GHJO91DBMcAqvlAs4BabTeVbnQIq3I8R.jpg', 1, 83, '2018-04-23', 16, 1, 0, NULL, 1, NULL, '2023-02-13 10:28:23', '2023-02-13 10:28:23'),
(92, 'চাকরি বিধি, আর্থিক বিধি ও নিরীক্ষা বিধিমালা', 'Chakri Bidhi Aarthik Bidhi O Nirikkha Bidhimala', 'chakri-bidhi-aarthik-bidhi-o-nirikkha-bidhimala', 106, 800, 640, 728, 'thumbnails/iIbntKs88xTot0xETRchx1eDgl45aOebImwiyXSX.jpg', 1, 84, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-13 10:30:46', '2023-02-13 10:30:46'),
(93, 'ছুটি, ভ্রমণ, ভবিষ্য ও কল্যাণ তহবিল এবং অবসর ভাতা বিধি', 'Chuti Vromon Vobissot O Kollan Tohobil Obosor Vata Bidhi', 'chuti-vromon-vobissot-o-kollan-tohobil-obosor-vata-bidhi', 90, 350, 265, 278, 'thumbnails/B2IYzW40v2vmveaEtPWTWPl9pMsWUuqH5mAERMof.jpg', 1, 85, '2018-10-10', 16, 1, 0, NULL, 1, NULL, '2023-02-13 10:33:56', '2023-02-13 10:33:56'),
(94, 'উইংস অব ফায়ার', 'Wings of Fire', 'wings-of-fire', 40, 150, 0, 203, 'thumbnails/1aLN94YHTNEMdMmb6fgUIof7T1JLscT9IgnxdT3l.jpg', 2, 86, '2021-02-02', 16, 1, 1, NULL, 1, 1, '2023-02-13 10:35:25', '2023-02-15 09:44:17'),
(95, 'টার্নিং পয়েন্টস', 'Turning Points', 'turning-points', 40, 150, 0, 166, 'thumbnails/hAf1ndVIOZQ3oHkG4oqPFFVQYRF6zPsrinN3fTwz.jpg', 2, 87, '2021-02-02', 16, 1, 0, NULL, 1, 1, '2023-02-13 10:37:57', '2023-02-15 09:47:11'),
(96, 'ম্যানারস্‌ এটিকেটস্‌ প্রোটোকল', 'Manners Atiquettee Protocols', 'manners-atiquettee-protocols', 130, 400, 320, 285, 'thumbnails/Arw4TDZzS9AeqF7mBdv3b1o4hft9gEewa2WIzzBv.jpg', 1, 88, '2017-08-10', 16, 1, 0, NULL, 1, NULL, '2023-02-13 10:41:17', '2023-02-13 10:41:17'),
(97, 'সড়ক ব্যবহার বিধি ও সংক্ষিপ্ত অটোমেকানিজম', 'Sorok Babyohar Bidhi O Songkhipto Automechanism', 'sorok-babyohar-bidhi-o-songkhipto-automechanism', 33, 100, 80, 96, 'thumbnails/iCN70YZ5SXiPgOp5F3Viylor2ehUArMrSdSEE6vn.jpg', 1, 89, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-13 10:44:25', '2023-02-13 10:44:25'),
(98, 'লাল নীল দীপাবলি (বাংলা সাহিত্যের জীবনী)', 'Lal Nil Dipaboli', 'lal-nil-dipaboli', 10, 100, 80, 104, 'thumbnails/NjkiY4ZwCyqq2UkmIJg2y6bAXueNmGWrEJxShJVC.jpg', 1, 90, '2013-02-01', 16, 1, 0, NULL, 1, 1, '2023-02-13 10:46:34', '2023-02-13 10:47:02'),
(99, 'বেসিক আলী', 'Basic Ali', 'basic-ali', 111, 200, 150, 160, 'thumbnails/OeybiodWwdmTvpyfAg8q7NsxC4YDVa3kOOb9WuK4.jpg', 1, 91, '2015-03-18', 16, 1, 0, NULL, 1, 1, '2023-02-13 10:51:00', '2023-02-13 10:51:11'),
(100, 'বেসিক আলী - ২', 'Basic Ali - 2', 'basic-ali-2', 111, 220, 160, 158, 'thumbnails/qdd5Zv6ZItTiJbPhs0ThUcKxrYmzWBYuPzNL9QxR.jpg', 1, 92, '2015-03-18', 16, 1, 0, NULL, 1, NULL, '2023-02-13 10:52:46', '2023-02-13 10:52:46'),
(101, 'বেসিক আলী - ৩', 'Basic Ali - 3', 'basic-ali-3', 111, 220, 160, 160, 'thumbnails/GqGBaYiQYflc51EDsqv4g7zbHvXPYz8aqxNZr4Ne.jpg', 1, 93, '2015-03-18', 16, 1, 0, NULL, 1, NULL, '2023-02-13 10:53:56', '2023-02-13 10:53:56'),
(102, 'বেসিক আলী - ৪', 'Basic Ali - 4', 'basic-ali-4', 111, 220, 160, 160, 'thumbnails/WpWh6O7cTPwyBFnTc9mQ7fQJKL9hUKV4DalVBdOp.jpg', 1, 94, '2015-03-18', 16, 1, 0, NULL, 1, NULL, '2023-02-13 10:55:27', '2023-02-13 10:55:27'),
(103, 'বেসিক আলী - ৫', 'Basic Ali - 5', 'basic-ali-5', 111, 200, 150, 160, 'thumbnails/WShea4TXAkQQGc1cNfGAfbvw1xtN8QQK6KygTt3j.jpg', 1, 95, '2015-03-18', 16, 1, 0, NULL, 1, NULL, '2023-02-13 10:56:32', '2023-02-13 10:56:32'),
(104, 'বেসিক আলী - ৬', 'Basic Ali - 6', 'basic-ali-6', 111, 220, 160, 160, 'thumbnails/yZ5d77Vt8UgoqqtPDfAA76oqysNemIwuHsdEp9jo.jpg', 1, 96, '2015-02-22', 16, 1, 0, NULL, 1, NULL, '2023-02-13 10:57:45', '2023-02-13 10:57:45'),
(105, 'বেসিক আলী - ৭', 'Basic Ali - 7', 'basic-ali-7', 111, 220, 160, 160, 'thumbnails/G1B4QQNycqFWiJK5HdOfvbTTSf4wDKP02dpJR36n.jpg', 1, 97, '2015-02-22', 16, 1, 0, NULL, 1, NULL, '2023-02-13 10:58:59', '2023-02-13 10:58:59'),
(106, 'বেসিক আলী - ৮', 'Basic Ali - 8', 'basic-ali-8', 111, 220, 160, 160, 'thumbnails/RHBkL7n5GhO69dZHzQNVsQTuOFDtFoADVZZgiagM.jpg', 1, 98, '2016-02-06', 16, 1, 0, NULL, 1, 1, '2023-02-13 11:00:29', '2023-02-15 06:22:07'),
(107, 'বেসিক আলী - ৯', 'Basic Ali - 9', 'basic-ali-9', 111, 220, 160, 160, 'thumbnails/gvd0xmgW12Sajuw2vknhQYqWsH9WmnS4RqSg8sih.jpg', 1, 99, '2017-01-01', 16, 1, 0, NULL, 1, NULL, '2023-02-13 11:01:47', '2023-02-13 11:01:47'),
(108, 'বেসিক আলী - ১০', 'Basic Ali - 10', 'basic-ali-10', 111, 220, 160, 160, 'thumbnails/ySxUzHthJGfHFT3x6jVWMBXqR28IjpjTZsEXU0Gx.jpg', 1, 100, '2018-01-01', 16, 1, 0, NULL, 1, NULL, '2023-02-13 11:03:13', '2023-02-13 11:03:13'),
(109, 'Learning English The Easy Way', 'Learning English The Easy Way', 'learning-english-the-easy-way', 130, 80, 80, 326, 'thumbnails/VWHRqMTDeJDOIuwpgEsMHSfwg92DzQhtDxywKXBR.jpg', 1, 101, NULL, 16, 1, 0, NULL, 1, 1, '2023-02-15 06:26:45', '2023-02-15 06:27:25'),
(110, 'দ্য পাওয়ার অব্‌ পজিটিভ থিংকিং', 'The Power of Positive Thinking', 'the-power-of-positive-thinking', 60, 320, 255, 288, 'thumbnails/1X7ZzBIz8pNw3kJjTXQ1HxirNN5QVJEVR3r0fUjE.jpg', 1, 102, '2018-11-01', 16, 1, 0, NULL, 1, NULL, '2023-02-15 06:29:27', '2023-02-15 06:29:27'),
(111, 'রিচার্জ Your ডাউন ব্যাটারি', 'Recharge Your Down Battery', 'recharge-your-down-battery', 36, 200, 160, 118, 'thumbnails/XCqPQrrRYkdSpsqskUNm63jBvzcHYhyZ8nXn28np.jpg', 1, 103, '2018-11-01', 16, 1, 0, NULL, 1, NULL, '2023-02-15 06:31:23', '2023-02-15 06:31:23'),
(112, 'ব্যাঙকে খাও চুমু!', 'Bangke Khao Chumu', 'bangke-khao-chumu', 15, 220, 185, 144, 'thumbnails/XFPAA9YSVOjUj9awZmFa2ys00C4r97tqAmw7Jk0D.jpg', 1, 104, '2018-11-01', 16, 1, 0, NULL, 1, NULL, '2023-02-15 06:34:56', '2023-02-15 06:34:56'),
(113, 'গাভী বিত্তান্ত', 'Gavi Bittanto', 'gavi-bittanto', 44, 200, 160, 120, 'thumbnails/b7pnW6IDwcHtiCUfMj2ZNfskMKE6a1m2IwsfdhYt.jpg', 1, 105, '2018-11-01', 16, 1, 0, NULL, 1, NULL, '2023-02-15 06:37:10', '2023-02-15 06:37:10'),
(114, 'সহজ কুরআন', 'Sohoj Kuran', 'sohoj-kuran', 36, 300, 240, 166, 'thumbnails/RhubWJVu7qnZ1PkgCNQk8PwoUvQUPdi0K1ubNZiU.jpg', 1, 106, '2016-02-28', 16, 1, 0, NULL, 1, 1, '2023-02-15 06:38:51', '2023-02-15 06:39:33'),
(115, 'শান্তিময় পারিবারিক জীবন', 'Shantimoy Paribarik Jibon', 'shantimoy-paribarik-jibon', 77, 100, 85, 136, 'thumbnails/ncg4K87wNIa1buwQrUO5CBEy7l8I7cOScbm6mzRA.jpg', 1, 107, '2016-06-29', 16, 1, 0, NULL, 1, 1, '2023-02-15 06:41:53', '2023-02-15 06:46:13'),
(116, 'কুরআন হাদীসের আলোকে ইসলামী বিবাহ', 'Islami Bibaho', 'islami-bibaho', 82, 130, 105, 224, 'thumbnails/h0vxWiVVwXoETw7SXjXQm9zzB8VebuB9udZVoO15.jpg', 1, 108, '2016-06-29', 16, 1, 0, NULL, 1, 1, '2023-02-15 06:43:52', '2023-02-15 06:46:00'),
(117, 'বিভিন্ন ধর্মগ্রন্থে মুহাম্মদ', 'Bivinno Dhormogronthe Muhammad', 'bivinno-dhormogronthe-muhammad', 130, 50, 50, 64, 'thumbnails/GP2W2qMO6g9QCGyX1GeS9qse45a3rd4trrDagB47.jpg', 1, 109, '2016-06-29', 16, 1, 0, NULL, 1, NULL, '2023-02-15 06:45:38', '2023-02-15 06:45:38'),
(118, 'নামাযের নিয়ম', 'Namajer Niyom', 'namajer-niyom', 69, 60, 60, 114, 'thumbnails/XJRSOOyTAnOw13JO7KtHaB4vI4J6TCqMeU32KjmG.jpg', 1, 110, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-15 06:48:05', '2023-02-15 06:48:05'),
(119, 'আল কুরআন এক মহাবিস্ময়', 'Al Quran Ak Moha Bissoy', 'al-quran-ak-moha-bissoy', 76, 60, 50, 80, 'thumbnails/1owq01roXQpg239sCYnKm6QaaLcBmxhDHC6GEaX8.jpg', 1, 111, '2017-10-11', 16, 1, 0, NULL, 1, NULL, '2023-02-15 06:50:48', '2023-02-15 06:50:48'),
(120, 'ছোটদের নবী কথা', 'Chotoder Nobi Kotha', 'chotoder-nobi-kotha', 69, 47, 45, 48, 'thumbnails/y2s0t9LSZhtPDqDGBMReAgl8SuTiCzvDOlBHDHSG.jpg', 1, 112, '2015-02-22', 16, 1, 0, NULL, 1, NULL, '2023-02-15 06:53:58', '2023-02-15 06:53:58'),
(121, 'খুলাফায়ে রাশেদীন', 'Khulafaye Rashedin', 'khulafaye-rashedin', 69, 60, 50, 76, 'thumbnails/10GjqiexCSLF7t98QhAAdgJQa9Iy2yQ5cNmNmySx.jpg', 1, 113, '2015-02-22', 16, 1, 0, NULL, 1, NULL, '2023-02-15 06:56:02', '2023-02-15 06:56:02'),
(122, 'শেখ সাদী\'র (রঃ) ১৫২ গল্প', 'Sheikh Sadir 152 Golpo', 'sheikh-sadir-152-golpo', 78, 270, 215, 384, 'thumbnails/e6ORPUXVZSx7mgI48JduiEeEuylXzhID3qZmR8FO.jpg', 1, 114, '2016-06-29', 16, 1, 0, NULL, 1, NULL, '2023-02-15 06:58:12', '2023-02-15 06:58:12'),
(123, 'হযরত শাহজালাল (রঃ) ও শাহপরান (রঃ)', 'Hajrat Shahjalal O Shahparan', 'hajrat-shahjalal-o-shahparan', 107, 380, 280, 352, 'thumbnails/TdNw3BhuS5CRTRqBYL5I10ef7HckXJO0H7mckjtT.jpg', 1, 115, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-15 06:59:50', '2023-02-15 06:59:50'),
(124, 'জান্নাতী হুর কেমন হবে?', 'Jannati Hur Kemon Hobe', 'jannati-hur-kemon-hobe', 97, 160, 125, 128, 'thumbnails/ypw0MIGlFvZIaZCjQv6IF80w7ZoJnrHJXxP1lgby.jpg', 1, 116, '2016-06-29', 16, 1, 0, NULL, 1, NULL, '2023-02-15 07:01:35', '2023-02-15 07:01:35'),
(125, 'কিয়ামতের আলামত বিষয়ে রাসূলুল্লাহ (সঃ) এঁর ভবিষ্যত বাণী', 'Kiyamoter Alamot Somporke Rasulullah er Vobissot Bani', 'kiyamoter-alamot-somporke-rasulullah-er-vobissot-bani', 98, 180, 150, 186, 'thumbnails/w03yFDrOyVOpubXGzICHhsfN4EB6KrNWeCSs34e4.jpg', 1, 117, '2017-10-11', 16, 1, 0, NULL, 1, NULL, '2023-02-15 07:03:41', '2023-02-15 07:03:41'),
(126, '২৫ জন নবী ও রাসূল', 'Pochis Jon Nobi O Rasul', 'pochis-jon-nobi-o-rasul', 130, 200, 160, 300, NULL, 1, 118, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-15 07:06:43', '2023-02-15 07:06:43'),
(127, 'ছহীহ্‌ বোখারী শরীফ', 'Sohi Bokhari Shorif', 'sohi-bokhari-shorif', 67, 300, 200, 352, 'thumbnails/fMDaO6OBKNZMxH1avdyRyZlvvulTKcjA7m5Lwun6.jpg', 1, 119, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-15 07:08:14', '2023-02-15 07:08:14'),
(128, 'মোক্‌ছুদুল মোমিনীন (বেহেশ্‌তের পুঞ্জি)', 'Mokchudul Mominin', 'mokchudul-mominin', 67, 300, 180, 356, 'thumbnails/D1ydOalrhZMUJc2JUWfztY0yIDmi2mgfMq7HMRJR.jpg', 1, 120, NULL, 16, 1, 0, NULL, 1, 1, '2023-02-15 07:10:21', '2023-02-15 07:12:59'),
(129, 'ইসলামের ফরয বিধান - পর্দার হুকুম ও নারীর মর্যাদা', 'Pordar Hukum O Narir Morjada', 'pordar-hukum-o-narir-morjada', 107, 280, 200, 384, 'thumbnails/touFWGVrl5z83RuzKNeyzaOdHuILO4z7GOQYWNtt.jpg', 1, 121, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-15 07:14:39', '2023-02-15 07:14:39'),
(130, 'শরৎ রচনা সমগ্র - ১', 'Shorot Rochona Shomogra - 1', 'shorot-rochona-shomogra-1', 132, 400, 320, 1264, 'thumbnails/94u9zWNEMbFeQc8jdxBvDgOnr5YL3cSFwXfWwWVG.jpg', 1, 122, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-15 07:18:33', '2023-02-15 07:18:33'),
(131, 'কিশোর রচনাবলী', 'Kishore Rochonaboli', 'kishore-rochonaboli', 66, 500, 400, 783, 'thumbnails/pEacIZfwli7GcGR7ZrxA8mnwpBJklR0R18SY8lCM.jpg', 1, 123, '2015-02-22', 16, 1, 0, NULL, 1, NULL, '2023-02-15 07:20:25', '2023-02-15 07:20:25'),
(132, 'শিশুর সুন্দর নাম', 'Shishur Shundor Nam', 'shishur-shundor-nam', 81, 250, 100, 224, 'thumbnails/NxcReh97TiM6p6ta6CSCO8XRG5z58yiA9ImWsInf.jpg', 1, 124, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-15 07:21:55', '2023-02-15 07:21:55'),
(133, 'Methods of Statistics - 4th Edition', 'Methods of Statistics', 'methods-of-statistics', 130, 300, 250, 513, 'thumbnails/TcAWYXbyfsU3ycSy99hWTHghoBStX4ydVPCgQvTh.jpg', 1, 125, '2011-04-29', 16, 1, 0, NULL, 1, NULL, '2023-02-15 07:24:11', '2023-02-15 07:24:11'),
(134, 'সিসকো নেটওয়ার্কিং', 'Cisco Networking', 'cisco-networking', 15, 340, 280, 434, 'thumbnails/ooKQhjU6imyqYucUFhCuOZrcePl3cbZPui4Iccjp.jpg', 1, 126, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-15 07:26:02', '2023-02-15 07:26:02'),
(135, 'এক্সপার্ট নেটওয়ার্কিং', 'Expert Networking', 'expert-networking', 15, 400, 320, 754, 'thumbnails/WIgTyBSJ81qfSz14GzYSaqn0aRRQlUggGAA7BKkT.jpg', 1, 127, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-15 07:27:19', '2023-02-15 07:27:19'),
(136, 'CCNA - Routing and Switching', 'CCNA Routing and Switching', 'ccna-routing-and-switching', 133, 350, 200, 1100, 'thumbnails/ppfVYmbZOa3qRB8PuRv0x8OelHacqeKsEqJ78hlo.jpg', 1, 128, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-15 07:29:58', '2023-02-15 07:29:58'),
(137, 'Data Communications and Networking', 'Data Communications and Networking', 'data-communications-and-networking', 134, 1486, 950, 1134, 'thumbnails/NxyYboTuX0IZBFFw6s68R93JJYl1kjS2EhmIMguy.jpg', 1, 129, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-15 07:33:02', '2023-02-15 07:33:02'),
(138, 'ওরাকল ও ডেভেলপার', 'Oracle and Developer', 'oracle-and-developer', 48, 470, 400, 704, 'thumbnails/pFZhHVwrSXXRMnW2CS9ytIxPMoIMX9psxuhVAwlL.jpg', 1, 130, '2011-09-12', 16, 1, 0, NULL, 1, NULL, '2023-02-15 07:35:15', '2023-02-15 07:35:15'),
(139, 'Programming in ANSI C - 4th Edition', 'Programming in ANSI C', 'programming-in-ansi-c', 134, 200, 120, 543, 'thumbnails/MXG4G0K9v30K0G8s4KxPDJM2NAO8D8nLwL1llM5W.jpg', 1, 131, '2009-02-19', 16, 1, 0, NULL, 1, NULL, '2023-02-15 08:01:28', '2023-02-15 08:01:28'),
(140, 'Programming with JAVA - 2nd Edition', 'Programming with JAVA', 'programming-with-java', 134, 1078, 300, 446, 'thumbnails/Y7DURR1ndEzBINF0MhHYyUgHIpq5bok3FTT1ybcZ.jpg', 1, 132, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-15 08:03:42', '2023-02-15 08:03:42'),
(141, 'Software Testing - Principles and Practices', 'Software Testing Principles and Practices', 'software-testing-principles-and-practices', 135, 1200, 750, 605, 'thumbnails/hnzpra6WykXVdUVWVQa00dDyF0hlScDJVx02uERQ.jpg', 1, 133, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-15 08:06:55', '2023-02-15 08:06:55'),
(142, 'কম্পিউটার প্রোগ্রামিং - ১ম খন্ড', 'Computer Programming Prothom Khondo', 'computer-programming-prothom-khondo', 25, 240, 200, 197, 'thumbnails/iahWrcRbnwqgME94cyQvELCGBAy43DoyGlqanYEi.jpg', 1, 134, '2014-01-01', 16, 1, 0, NULL, 1, NULL, '2023-02-15 08:09:15', '2023-02-15 08:09:15'),
(143, 'কম্পিউটার প্রোগ্রামিং - ২য় খন্ড', 'Computer Programming Ditiyo Khondo', 'computer-programming-ditiyo-khondo', 104, 250, 210, 180, 'thumbnails/knVrV8ca2Z7zHMQBHqz6653guQ8PQ9EXu8T9soB1.jpg', 1, 135, '2016-09-24', 16, 1, 0, NULL, 1, NULL, '2023-02-15 08:10:37', '2023-02-15 08:10:37'),
(144, 'পাইথন পরিচিতি', 'Python Porichiti', 'python-porichiti', 25, 260, 215, 184, 'thumbnails/pQxbWt9hzvdhM4gGvDs4IUF1TclpcFx9sW5AdrIn.jpg', 1, 136, '2016-09-24', 16, 1, 0, NULL, 1, 1, '2023-02-15 08:11:59', '2023-02-23 07:24:01'),
(145, 'গ্রাফ অ্যালগরিদম', 'Graph Algorithm', 'graph-algorithm', 104, 220, 180, 124, 'thumbnails/gpWUpRzmtbZMevUHjDvh1NOSHixQXalbU5UUf4F9.jpg', 1, 137, '2016-10-23', 16, 1, 0, NULL, 1, NULL, '2023-02-15 08:13:30', '2023-02-15 08:13:30'),
(146, 'আমার দেখা নয়াচীন', 'Amar Dekha Noya Chin', 'amar-dekha-noya-chin', 11, 400, 350, 199, 'thumbnails/EeAgTzMon2I1stChQDd8Xj7iuBfKsePbDWrcl1ix.jpg', 1, 138, '2022-02-01', 16, 1, 0, NULL, 1, 1, '2023-02-15 08:14:37', '2023-02-16 05:44:33'),
(147, 'প্রোগ্রামিং কনটেস্ট - ডেটা স্ট্রাকচার ও অ্যালগরিদম', 'Programming Contest Data Structure and Algorithm', 'programming-contest-data-structure-and-algorithm', 104, 360, 280, 276, 'thumbnails/6qJdPrPo5zIh8ikiBBMR3mtLDlGG2gih60vMtDpk.jpg', 1, 139, '2016-09-24', 16, 1, 0, NULL, 1, NULL, '2023-02-15 08:17:20', '2023-02-15 08:17:20'),
(148, 'কম্পিউটার ও তথ্য প্রযুক্তি কোষ', 'Computer O Tohtho Projukti Kosh', 'computer-o-tohtho-projukti-kosh', 61, 250, 0, 214, 'thumbnails/KDXlZND0vN8nhI6f0N8KULQqb4DPJ3xi2utjZq4Z.jpg', 2, 140, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-15 08:19:13', '2023-02-15 08:19:13'),
(149, 'কম্পিট এক্সেল', 'Complete Excel', 'complete-excel', 15, 280, 220, 375, 'thumbnails/aeSyttj9c5RpUYkhgGISqE3rJEeBxdX58ctX3rUe.jpg', 1, 141, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-15 08:20:30', '2023-02-15 08:20:30'),
(150, 'ফেসবুক A টু Z', 'Facebook A to Z', 'facebook-a-to-z', 48, 200, 0, 174, 'thumbnails/ENt4ATwT58Xas3yq6OBs8mYkPdpAxRml6Dio5EtX.jpg', 2, 142, '2011-09-08', 16, 1, 0, NULL, 1, 1, '2023-02-15 08:23:28', '2023-02-15 08:26:58'),
(151, 'টেকি সফল উদ্যোক্তার গল্প', 'Techi Sofol Uddoktar Golpo', 'techi-sofol-uddoktar-golpo', 130, 220, 180, 174, 'thumbnails/vbMrc4ZCI8kX0uJksalUP50BUP5MNPn9icBqbztG.jpg', 1, 143, '2015-03-14', 16, 1, 0, NULL, 1, NULL, '2023-02-15 08:29:41', '2023-02-15 08:29:41'),
(152, 'কম্বিনেটরিক্স - গণিতের মজার দুনিয়া', 'Combinatorics Goniter Mojar Duniya', 'combinatorics-goniter-mojar-duniya', 88, 50, 50, 80, 'thumbnails/BpFjMZ9MyGNTMqmFUJkIFzRMI1zqp9HGVnZpBgpl.jpg', 1, 144, '2015-02-22', 16, 1, 0, NULL, 1, NULL, '2023-02-15 08:31:28', '2023-02-15 08:31:28'),
(153, 'হাবলুদের জন্য প্রোগ্রামিং', 'Habluder Jonno Programming', 'habluder-jonno-programming', 36, 200, 160, 127, 'thumbnails/JXGmqAqzLUtDZU15GZ8p8Nfn2nH0XThkdAz51fqv.jpg', 1, 145, '2016-02-28', 16, 1, 0, NULL, 1, NULL, '2023-02-15 08:32:43', '2023-02-15 08:32:43'),
(154, 'প্রোগ্রামিংয়ের বলদ টু বস', 'Programming er Bolod to Boss', 'programming-er-bolod-to-boss', 36, 200, 160, 125, 'thumbnails/0b4pEYDj6bTbYwfK4xtc6s7FPR8oUqu1Ymx5rK87.jpg', 1, 146, '2016-02-19', 16, 1, 0, NULL, 1, NULL, '2023-02-15 08:34:19', '2023-02-15 08:34:19'),
(155, 'গল্পে স্বল্পে প্রোগ্রামিং', 'Golpe Solpe Programming', 'golpe-solpe-programming', 36, 200, 175, 110, 'thumbnails/Oi0jpQuNGxeSYqMEPnWuqTPhqVAVm7l6hypoPmnW.jpg', 1, 147, '2017-02-19', 16, 1, 0, NULL, 1, NULL, '2023-02-15 08:36:53', '2023-02-15 08:36:53'),
(156, 'রান্না খাদ্য পুষ্টি', 'Ranna Khaddo Pushti', 'ranna-khaddo-pushti', 130, 500, 350, 558, 'thumbnails/gpHsjTNhL04SQqBGJvamNnDa2oVCW37iiIeeulXc.jpg', 1, 148, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-15 08:40:10', '2023-02-15 08:40:10'),
(157, 'মজাদার রান্না', 'Mojadar Ranna', 'mojadar-ranna', 8, 250, 200, 327, 'thumbnails/pxJmSDi17KDBFLOgOKKLqMkd25cd5PWkSLJJj45M.jpg', 1, 149, '2015-03-18', 16, 1, 0, NULL, 1, NULL, '2023-02-15 08:41:30', '2023-02-15 08:41:30'),
(158, 'আমার রান্নাঘর', 'Amar Rannaghor', 'amar-rannaghor', 34, 150, 125, 152, 'thumbnails/oboFLsRq2jhnvznqoATYetv755lDBY5uM5nBjS31.jpg', 1, 150, '2014-01-01', 16, 1, 0, NULL, 1, NULL, '2023-02-15 08:43:02', '2023-02-15 08:43:02'),
(159, 'সুগৃহিণীদের আধুনিক রান্না', 'Sugrihinider Adhunik Ranna', 'sugrihinider-adhunik-ranna', 99, 75, 75, 112, 'thumbnails/8Q5rF7pzkSr6X64rtfu81IIjEbsP93MmHaUT0jz4.jpg', 1, 151, '2015-02-22', 16, 1, 0, NULL, 1, NULL, '2023-02-15 08:44:57', '2023-02-15 08:44:57'),
(160, 'ভর্তা ভাজি সবজি সালাদ', 'Vorta Bhaji Shobji Salad', 'vorta-bhaji-shobji-salad', 52, 250, 185, 224, 'thumbnails/3UXTi7hmpQYcj3WIrRGJpDM1sraFeTyZcKGUPpyZ.jpg', 1, 152, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-15 09:50:27', '2023-02-15 09:50:27'),
(161, 'মাইক্রোওয়েভ ওভেনে রান্না', 'Microwave Oven e Ranna', 'microwave-oven-e-ranna', 8, 125, 105, 76, 'thumbnails/LGuOQNAacTuVJEmnXrsuiZTrRXSrzb1HP06Q2XT4.jpg', 1, 153, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-15 09:52:04', '2023-02-15 09:52:04'),
(162, 'মাইক্রোওয়েভ ওভেন রেসিপি', 'Microwave Oven Recepie', 'microwave-oven-recepie', 59, 350, 265, 184, 'thumbnails/VE4qzvVLroLhSDMORkbjNKU6ZKpRTejeXoHql8Rv.jpg', 1, 154, NULL, 16, 1, 0, NULL, 1, NULL, '2023-02-15 09:53:23', '2023-02-15 09:53:23'),
(163, 'পুষ্প, বৃক্ষ এবং বিহঙ্গ পুরাণ', 'Pushpo Brikkho abong Bihongo Puran', NULL, 64, 175, 150, 95, 'thumbnails/HqPLaD9bieiYjf25tiG0iLi0q8N71UXdTsEhnM6u.jpg', 1, 155, '2019-01-12', 16, 1, 0, NULL, 1, NULL, '2023-02-15 09:56:05', '2023-02-15 09:56:05'),
(164, 'নিন্দিত নন্দন', 'Nindito Nondon', 'nindito-nondon', 131, 450, 340, 248, 'thumbnails/y42oRMnQNs6olXP3UsPFXivkwfM9HGKITEwfdmJ3.jpg', 1, 156, '2019-01-12', 16, 1, 0, NULL, 1, NULL, '2023-02-15 09:58:16', '2023-02-15 09:58:16'),
(165, 'সালাহউদ্দীন আইয়ুবী', 'Salahuddin Aiyubi', 'salahuddin-aiyubi', 117, 242, 180, 164, 'thumbnails/j3LrhgWLvEGRip6esP8QeizNemYlcAmrTm77kSZh.jpg', 1, 157, '2019-01-12', 16, 1, 0, NULL, 1, NULL, '2023-02-15 10:00:22', '2023-02-15 10:00:22'),
(166, 'ক্রুসেড', 'Crused', 'crused', 14, 450, 350, 399, 'thumbnails/7rHWp6P1S6l9RemMPoQk1hdxqldzzeb6REDwIlKf.jpg', 1, 158, '2019-01-12', 16, 1, 0, NULL, 1, NULL, '2023-02-15 10:01:51', '2023-02-15 10:01:51'),
(167, 'দ্য বিট্রেয়াল অব ইস্ট পাকিস্তান', 'The Bitrayal of East Pakistan', 'the-bitrayal-of-east-pakistan', 56, 400, 300, 320, 'thumbnails/dZc05t83pizsmWESRW2TPJlu6ckxaWaGQL77Ox2y.jpg', 1, 159, '2019-02-27', 16, 1, 1, NULL, 1, 1, '2023-02-15 10:04:05', '2023-02-15 10:07:58'),
(168, 'বেসিক আলী - ১১', 'Basic Ali - 11', 'basic-ali-11', 111, 220, 165, 160, 'thumbnails/wNOJm9Q9moQSxlLki6JsUdo4TNNXGEfRlaStw3bb.jpg', 1, 160, '2019-02-27', 16, 1, 0, NULL, 1, NULL, '2023-02-15 10:05:37', '2023-02-15 10:05:37'),
(169, 'দ্য থিওরি অব এভরিথিং', 'The Theory of Everything', 'the-theory-of-everything', 21, 300, 225, 145, 'thumbnails/oXA059HKZn8CLiBJDTDYNpUBo6d8WkoknmCUmIZQ.jpg', 1, 161, '2019-02-27', 16, 1, 0, NULL, 1, NULL, '2023-02-15 10:07:44', '2023-02-15 10:07:44'),
(170, 'একাত্তরের দিনগুলি', 'Ekattorer Dinguli', 'ekattorer-dinguli', 45, 350, 265, 312, 'thumbnails/5BRC0OA3pVDL0dkx850UwbWwnbjDD8obzg0H5p5h.jpg', 1, 162, '2019-02-27', 16, 1, 0, NULL, 1, NULL, '2023-02-15 10:09:41', '2023-02-15 10:09:41'),
(171, 'বাংলাদেশের লোকজ সংস্কৃতি গ্রন্থমালা - চুয়াডাঙ্গা', 'Bangladesher Lokoj Songskriti Gronthomala Chuadanga', 'bangladesher-lokoj-songskriti-gronthomala-chuadanga', 11, 300, 225, 388, 'thumbnails/HKL8C9qeRvdDUoYgboaMPsRkwBM0opaq2wVQ4o0e.jpg', 1, 163, '2019-02-27', 16, 1, 0, NULL, 1, NULL, '2023-02-15 10:12:24', '2023-02-15 10:12:24'),
(172, 'ইলেকট্রনিক্সের প্রাথমিক পাঠ', 'Electronics Er Prathomik Paath', 'electronics-er-prathomik-paath', 19, 175, 131, 111, 'thumbnails/C8ASmyIso1AWKeIoLtdOyTvWe9nLMOaiOPBYXA8t.jpg', 1, 164, '2019-02-27', 16, 1, 0, NULL, 1, NULL, '2023-02-15 10:14:06', '2023-02-15 10:14:06'),
(173, 'কালের সংক্ষিপ্ত ইতিহাস', 'Kaler Songkhipto Itihash', 'kaler-songkhipto-itihash', 56, 225, 190, 158, 'thumbnails/mSUxx7k1Zar2H8MzmPUZUJmit6rHxKnSpgimRXen.jpg', 1, 165, '2019-07-22', 16, 1, 0, NULL, 1, NULL, '2023-02-15 10:16:00', '2023-02-15 10:16:00'),
(174, 'প্রমিত বাংলা বানানের নিয়ম', 'Promito Bangla Bananer Niyom', 'promito-bangla-bananer-niyom', 11, 20, 20, 32, 'thumbnails/B3R9CbPyUTbMVpD1ayuPvcsSFE83QAEw4thxJn0c.jpg', 1, 166, '2019-07-22', 16, 1, 0, NULL, 1, NULL, '2023-02-15 10:17:13', '2023-02-15 10:17:13'),
(175, 'টাইম ম্যানেজমেন্ট', 'Time Management', 'time-management', 110, 200, 176, 112, 'thumbnails/tFL3KcUHExln0A4Tigr69MeD1bAyElTo76DiUHT8.jpg', 1, 167, '2019-07-22', 16, 1, 0, NULL, 1, NULL, '2023-02-15 10:18:41', '2023-02-15 10:18:41'),
(176, 'মাইক্রোটিক রাউটার - নেটওয়ার্কিং ও সিকিউরিটি', 'Mikrotik Router Networking O Security', 'mikrotik-router-networking-o-security', 36, 300, 265, 160, 'thumbnails/RgD5hUTvnaJCVed8sw00S1Zh07gn2zPsTG91PbRE.jpg', 1, 168, '2019-07-22', 16, 1, 0, NULL, 1, NULL, '2023-02-15 10:20:11', '2023-02-15 10:20:11'),
(177, 'Smart English', 'Smart English', 'smart-english', 130, 250, 210, 192, 'thumbnails/f8dxlFxDXVjD4mSII88J5VSPIZpV5J0tOFtT3mgI.jpg', 1, 169, '2019-07-22', 16, 1, 0, NULL, 1, NULL, '2023-02-15 10:21:19', '2023-02-15 10:21:19'),
(178, 'রিচ ড্যাড পুওর ড্যাড', 'Rich Dad Poor Dad', 'rich-dad-poor-dad', 92, 300, 225, 160, 'thumbnails/Yq3AxzwRYAbjy85ekY3jT6kdZQBhBYsi1SEUqKkW.jpg', 1, 170, '2019-07-22', 16, 1, 0, NULL, 1, 1, '2023-02-15 10:23:31', '2023-02-15 10:23:52'),
(179, 'Bangladesh - A Legacy of Blood', 'Bangladesh - A Legacy of Blood', 'bangladesh-a-legacy-of-blood', 130, 300, 215, 184, 'thumbnails/We8lHlzWU5JelFdSpdIuvVYeuDkVcUw2EecZ8GC0.jpg', 1, 171, '2019-08-25', 16, 1, 0, NULL, 1, NULL, '2023-02-15 10:25:53', '2023-02-15 10:25:53'),
(180, 'বাংলাদেশ - রক্তের ঋণ', 'Bangladesh Rokter Rin', 'bangladesh-rokter-rin', 51, 250, 215, 216, 'thumbnails/UYDMnxMdWisripO8IVVqYGasXSm0xaTzSDtHx2Nj.jpg', 1, 172, '2019-08-25', 16, 1, 0, NULL, 1, 1, '2023-02-15 10:27:16', '2023-02-15 10:28:55'),
(181, 'দ্য রেইপ অব বাংলাদেশ', 'The Rape of Bangladesh', 'the-rape-of-bangladesh', 93, 200, 175, 164, 'thumbnails/iTVqlpSZpOkvVpYWO4tiVRvwd8ZAJ0eMk7QS3jqC.jpg', 1, 173, '2019-08-25', 16, 1, 0, NULL, 1, NULL, '2023-02-15 10:28:40', '2023-02-15 10:28:40'),
(182, 'বাংলাদেশের স্বাধীনতা যুদ্ধে \'র\' এবং সিআইএ', 'Bangladesher Sadhinota Juddhe Raw ebong CIA', 'bangladesher-sadhinota-juddhe-raw-ebong-cia', 53, 300, 255, 170, 'thumbnails/YhF4nyW4h6S8IddoWQHSCLn3kBhv6feuFst5b9vI.jpg', 1, 174, '2019-08-25', 16, 1, 0, NULL, 1, NULL, '2023-02-15 10:31:00', '2023-02-15 10:31:00'),
(183, 'দৃষ্টিপাত', 'Dristipat', 'dristipat', 27, 160, 140, 135, 'thumbnails/ig72wgNhadSnAdQEwRS5NxEITovJHsMka0OnTeTl.jpg', 1, 175, '2019-08-25', 16, 1, 1, NULL, 1, NULL, '2023-02-15 10:32:48', '2023-02-15 10:32:48'),
(184, 'বাঙ্গালি মুসলমানের মন', 'Bangali Musolmaner Mon', 'bangali-musolmaner-mon', 64, 220, 187, 136, 'thumbnails/xsOyRb5Ipjg335H1qu8UQY5GPlTPuSiqEoQ7rPBe.jpg', 1, 176, '2019-11-28', 16, 1, 0, NULL, 1, NULL, '2023-02-16 05:47:52', '2023-02-16 05:47:52'),
(185, 'সমাজতন্ত্র', 'Somajtontro', 'somajtontro', 130, 200, 150, 136, 'thumbnails/RVpV75krKknXd0ms7BNtvj05XGfL5k3IorXTS9ji.jpg', 1, 177, '2019-11-28', 16, 1, 0, NULL, 1, NULL, '2023-02-16 05:50:56', '2023-02-16 05:50:56'),
(186, 'গল্পে গল্পে পৃথিবীকে জানো', 'Golpe Golpe Prithibike Jano', 'golpe-golpe-prithibike-jano', 65, 100, 90, 56, 'thumbnails/41Uf5Pf6njdjhDZATaf4ZIguqgfnMcv1u4aaHWI0.jpg', 1, 178, '2019-11-28', 16, 1, 0, NULL, 1, NULL, '2023-02-16 05:54:23', '2023-02-16 05:54:23'),
(187, 'রহস্যে ঘেরা মহাকাশ', 'Rohosshe Ghera Mohakash', 'rohosshe-ghera-mohakash', 57, 300, 255, 208, 'thumbnails/2QBoiM6qHNKKPG6lOORbUaIexT3tuJVrPfxHlFxi.jpg', 1, 179, '2019-11-28', 16, 1, 0, NULL, 1, NULL, '2023-02-16 06:02:09', '2023-02-16 06:02:09'),
(188, 'হিন্দুধর্ম কী', 'Hindhudhormo Ki', 'hindhudhormo-ki', 19, 75, 68, 92, 'thumbnails/PC1xUa1rEREAq09RWf4T7em8COrmZf1558QO88aq.jpg', 1, 180, '2019-11-28', 16, 1, 0, NULL, 1, NULL, '2023-02-16 06:05:08', '2023-02-16 06:05:08'),
(189, 'সিন্ধু থেকে হিন্দু', 'Sindhu Theke Hindu', 'sindhu-theke-hindu', 130, 300, 255, 214, 'thumbnails/c9ZR2O9H8DxI1aPWcApKiAq1HfUXYbowB4UB9gNd.jpg', 1, 181, '2019-11-28', 16, 1, 0, NULL, 1, NULL, '2023-02-16 06:07:33', '2023-02-16 06:07:33'),
(190, 'হিন্দু ধর্ম - রহস্য ও দেবলীলা', 'Hindudhormo Rohossho O Deblila', 'hindudhormo-rohossho-o-deblila', 113, 200, 120, 142, 'thumbnails/r8Uxj5DpXTwLJxUCNGfVz8KfOlDZNsVwN1mCLIMp.jpg', 1, 182, '2019-11-28', 16, 1, 0, NULL, 1, 1, '2023-02-16 06:09:22', '2023-02-16 06:10:03'),
(191, 'জাপান যাত্রী', 'Japan Jatri', 'japan-jatri', 24, 100, 100, 72, 'thumbnails/CDhRHwhCoCpnU5rmIOkMy3JwNqUZ4oUF2xnbh9Bt.jpg', 1, 183, '2020-08-29', 16, 1, 0, NULL, 1, 1, '2023-02-16 06:13:53', '2023-02-24 09:39:39'),
(192, 'ওড়াউড়ির দিন', 'Oraurir Din', 'oraurir-din', 18, 275, 220, 192, 'thumbnails/6O3yb6mZJc6fgTslc4AlVKxm5mr9c0biI0WF5cTS.jpg', 1, 184, '2020-08-29', 16, 1, 0, NULL, 1, NULL, '2023-02-16 06:16:56', '2023-02-16 06:16:56'),
(193, 'ওড়াউড়ির দিন - দ্বিতীয় খন্ড - ইংল্যান্ড', 'Oraurir Din Ditiyo Khondo England', 'oraurir-din-ditiyo-khondo-england', 18, 250, 200, 163, 'thumbnails/YQrpCMsFWQ2omD4JW956qCpY7QE736ZTimCnR7Mg.jpg', 1, 185, '2020-08-29', 16, 1, 0, NULL, 1, NULL, '2023-02-16 06:19:10', '2023-02-16 06:19:10'),
(194, 'কোয়ান্টাম মেথড', 'Quantum Method', 'quantum-method', 55, 340, 300, 223, 'thumbnails/CTPtHZNteGiHxW8JA0gAUP2gmWwWYiPlihMNZibk.jpg', 1, 186, '2020-12-13', 16, 1, 0, NULL, 1, NULL, '2023-02-16 07:19:09', '2023-02-16 07:19:09'),
(195, 'শুদ্ধাচার', 'Suddhachar', 'suddhachar', 101, 400, 320, 334, 'thumbnails/hDaf9mWNbtWaqh0XMUm2cLzjKNmzO0APNqwxUFbo.jpg', 1, 187, '2020-12-13', 16, 1, 0, NULL, 1, NULL, '2023-02-16 07:20:41', '2023-02-16 07:20:41'),
(196, 'ভিটামিন বিষয়ে আমরা যেভাবে জানলাম', 'Vitamin Bishoye Amara Jevabe Janlam', 'vitamin-bishoye-amara-jevabe-janlam', 94, 100, 80, 54, 'thumbnails/Yil2XZFqpUqAsTqVHLb2tw6d39WCBAmVT9YuGlNT.jpg', 1, 188, '2020-12-13', 16, 1, 0, NULL, 1, NULL, '2023-02-16 07:22:56', '2023-02-16 07:22:56'),
(197, 'রক্ত বিষয়ে আমরা যেভাবে জানলাম', 'Rokto Bishoye Amara Jevabe Janlam', 'rokto-bishoye-amara-jevabe-janlam', 94, 110, 100, 70, 'thumbnails/OzhqeSuPFB9i6MlJ0OTbtOQymNP9rxpAb71h8mNr.jpg', 1, 189, '2020-12-13', 16, 1, 0, NULL, 1, NULL, '2023-02-16 07:24:50', '2023-02-16 07:24:50'),
(198, 'গল্পগুলো অন্যরকম', 'Golpogulo Onnorokom', 'golpogulo-onnorokom', 118, 315, 0, 211, 'thumbnails/sKPwpCiZqCTidjn5FRS88DMsbHmuGHQwXYqqWQh3.jpg', 2, 190, '2020-12-19', 16, 1, 0, NULL, 1, 1, '2023-02-16 07:26:08', '2023-02-16 07:27:54'),
(199, 'বেলা ফুরাবার আগে', 'Bela Furabar Aga', 'bela-furabar-aga', 118, 287, 0, 187, 'thumbnails/jF3fl22Gdh4v2aAFXQloe5KA0mH5wiUrXbh1i4Zc.jpg', 2, 191, '2020-12-19', 16, 1, 0, NULL, 1, 1, '2023-02-16 07:27:27', '2023-02-16 07:27:45'),
(200, 'নাসিরুদ্দিন হোজ্জার ১০০ গল্প', 'Nasiruddin Hojjar Eksho Golpo', 'nasiruddin-hojjar-eksho-golpo', 21, 220, 150, 104, 'thumbnails/fHGiM5uDS6pk6IayOfVRm0wGjI3KzyEdjtOJU086.jpg', 1, 192, '2021-01-06', 16, 1, 0, NULL, 1, NULL, '2023-02-16 07:30:27', '2023-02-16 07:30:27'),
(201, 'অনুভূতির অভিধান', 'Onuvutir Ovidhan', 'onuvutir-ovidhan', 119, 270, 203, 118, 'thumbnails/JFsOrCUWcLJv39rpTjuZxKqXbOuywIeXEDRrcM2n.jpg', 1, 193, '2021-04-17', 16, 1, 0, NULL, 1, NULL, '2023-02-16 07:31:35', '2023-02-16 07:31:35'),
(202, 'আদর্শ হিন্দু হোটেল', 'Adarsha Hindu Hotel', 'adarsha-hindu-hotel', 72, 270, 270, 150, 'thumbnails/mRSSOVtk0fEcxsa7uI0eyAAQ1bOklxB0PO6vpHbL.jpg', 1, 194, '2021-04-17', 16, 1, 1, NULL, 1, 1, '2023-02-16 07:34:44', '2023-02-18 10:36:48'),
(203, 'পিএইচডির গল্প', 'PHD er Golpo', 'phd-er-golpo', 68, 250, 188, 120, 'thumbnails/pk3sRfR5bjruapa1eopEnTBsg34FwWdHcwbrcPCd.jpg', 1, 195, '2021-04-17', 16, 1, 0, NULL, 1, NULL, '2023-02-16 07:36:41', '2023-02-16 07:36:41'),
(204, 'জীবন যেখানে যেমন', 'Jibon Jekhane Jemon', 'jibon-jekhane-jemon', 118, 237, 155, 146, 'thumbnails/xdDgVK8KxWUqUmbqXCeZMRmL75iWufvLccGXTppU.jpg', 1, 196, '2021-04-17', 16, 1, 0, NULL, 1, NULL, '2023-02-16 07:38:51', '2023-02-16 07:38:51'),
(205, 'ডেজার্ট গড', 'Desert God', 'desert-god', 43, 460, 345, 383, 'thumbnails/zkAz9LYmuqkILx8Jsgj54lDRHMHiEmnfBkwIH5nW.jpg', 1, 197, '2021-04-17', 16, 1, 1, NULL, 1, NULL, '2023-02-16 07:40:40', '2023-02-16 07:40:40'),
(206, 'ওয়ারলক', 'Warlock', 'warlock', 43, 500, 375, 543, 'thumbnails/yWOBCBeDUQ9PaL55Zpz9dHm2yWgeCJFs8FrSMWVr.jpg', 1, 198, '2021-04-17', 16, 1, 1, NULL, 1, NULL, '2023-02-16 07:41:47', '2023-02-16 07:41:47'),
(207, 'দ্য কোয়েস্ট', 'The Quest', 'the-quest', 43, 500, 375, 557, 'thumbnails/ZdkLRrOLumaHhXUW08BxRFaDnM0nMXL7bsyRoXUy.jpg', 1, 199, '2021-04-17', 16, 1, 1, NULL, 1, NULL, '2023-02-16 07:43:03', '2023-02-16 07:43:03'),
(208, 'দ্য সেভেন্‌থ স্ক্রৌল', 'The Seventh Scroll', 'the-seventh-scroll', 43, 400, 300, 400, 'thumbnails/7VpzbSGycPwtSvBXqFDaYK1iLAWLnPRaDKKQTFlC.jpg', 1, 200, '2021-04-17', 16, 1, 1, NULL, 1, 1, '2023-02-16 07:44:55', '2023-02-18 10:11:38');
INSERT INTO `books` (`id`, `title_bn`, `title_en`, `slug`, `publisher_id`, `printed_price`, `purchase_price`, `pages`, `image`, `collection_method_id`, `entry_no`, `entry_date`, `storage_id`, `state_id`, `recommended`, `notes`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(209, 'ইসলাম - সংক্ষিপ্ত ইতিহাস', 'Islam Songkhipto Itihash', 'islam-songkhipto-itihash', 22, 360, 306, 216, 'thumbnails/NmTLfvemrVOhyGVh4UbQBV6GoRDISEhf0db7METY.jpg', 1, 201, '2021-05-20', 16, 1, 0, NULL, 1, NULL, '2023-02-16 07:47:40', '2023-02-16 07:47:40'),
(210, 'ইসলামের ইতিহাস', 'Islamer Itihash', 'islamer-itihash', 53, 375, 281, 315, 'thumbnails/KR5XqjBsMqAlmIXUWGR1ex48II6qHaS5VDCbXUcS.jpg', 1, 202, '2021-05-20', 16, 1, 1, NULL, 1, NULL, '2023-02-16 07:50:01', '2023-02-16 07:50:01'),
(211, 'আশি দিনে বিশ্বভ্রমণ', 'Aashe Din E Bissho Vromon', 'aashe-din-e-bissho-vromon', 47, 125, 110, 48, 'thumbnails/mw47ijEkgHz9QtQU2fDSp2lDxHdmZwJWkfrk0s86.jpg', 1, 203, '2021-05-20', 16, 1, 1, NULL, 1, NULL, '2023-02-16 07:51:52', '2023-02-16 07:51:52'),
(212, 'দেশে বিদেশে', 'Deshe Bideshe', 'deshe-bideshe', 27, 350, 298, 224, 'thumbnails/Gpg7GyPHueoS7OZgmnUooSsAoXP6n2Y5gSfg0Bhd.jpg', 1, 204, '2021-05-20', 16, 1, 1, 'অসাধারণ একটি বই। কালজয়ী ও চিরায়ত লেখা।', 1, NULL, '2023-02-16 07:54:09', '2023-02-16 07:54:09'),
(213, 'সিক্রেটস অব জায়োনিজম', 'Secrets of Zionism', 'secrets-of-zionism', 115, 280, 225, 295, 'thumbnails/M5E7JLAbVtGo2e1G2tISwZPKWE0wGJUWhYEwSASz.jpg', 1, 205, '2021-05-20', 16, 1, 0, NULL, 1, NULL, '2023-02-16 07:56:38', '2023-02-16 07:56:38'),
(214, 'বাংলাদেশের বৃক্ষ', 'Bangladesher Brikkho', 'bangladesher-brikkho', 20, 100, 90, 24, 'thumbnails/o55EN0f9DQPxyueGUPvzNPc1iHE1vcD29r9kt7VP.jpg', 1, 206, '2021-08-18', 16, 1, 0, NULL, 1, NULL, '2023-02-16 07:58:47', '2023-02-16 07:58:47'),
(215, 'থ্রি এএম (3:00 AM)', '3:00 AM', '3-00-am', 68, 150, 102, 110, 'thumbnails/kTNi5PEEotMfDiOTvjWT3ocfroihNop2fA9kx1m8.jpg', 1, 207, '2021-08-18', 16, 1, 0, NULL, 1, NULL, '2023-02-16 08:12:46', '2023-02-16 08:12:46'),
(216, 'থ্রি টেন এএম (3:10 AM)', '3:10 AM', '3-10-am', 68, 160, 109, 110, 'thumbnails/jBFZYODWr59uTV3PLtbEm9tf8d61nllBqBcHDZid.jpg', 1, 208, '2021-08-18', 16, 1, 0, NULL, 1, NULL, '2023-02-16 08:14:12', '2023-02-16 08:14:12'),
(217, 'থ্রি : টোয়েন্টিওয়ান এএম ও থ্রি : থার্টিফোর এএম (3:21 AM and 03:34 AM)', '3:21 AM and 03:34 AM', '3-21-am-and-03-34-am', 68, 320, 218, 269, 'thumbnails/yp4xDlUdLf2dqaRs3dAAaBXdYFceHBx7yobxOi65.jpg', 1, 209, '2021-08-18', 16, 1, 0, NULL, 1, NULL, '2023-02-16 08:16:18', '2023-02-16 08:16:18'),
(218, 'থ্রি : ফরটিসিক্স এএম (3:46 AM)', '3:46 AM', '3-46-am', 68, 160, 109, 126, 'thumbnails/quPWCTsZvSXqc7WoZE7TehQdaGeZwnRNNDy3tvil.jpg', 1, 210, '2021-08-18', 16, 1, 0, NULL, 1, NULL, '2023-02-16 08:17:35', '2023-02-16 08:17:35'),
(219, 'মিশরীয় সভ্যতা', 'Mishorio Sovvota', 'mishorio-sovvota', 38, 500, 425, 96, 'thumbnails/Ys7LU4NJSgecj1kRxK5WeNUhqgndPeWAOeTbCwR3.jpg', 1, 211, '2021-08-18', 16, 1, 0, NULL, 1, NULL, '2023-02-16 08:18:58', '2023-02-16 08:18:58'),
(220, 'দ্য পিরামিড', 'The Pyramid', 'the-pyramid', 43, 200, 176, 126, 'thumbnails/YkLbLBLDVG3aNIWhMw7uwjEv01gEmaM9ldWwuW4v.jpg', 1, 212, '2021-08-18', 16, 1, 2, NULL, 1, 1, '2023-02-16 08:20:52', '2023-02-16 08:21:13'),
(221, 'রামেসিস - সান অফ লাইট', 'Rameses Sun of Light', 'rameses-sun-of-light', 106, 340, 282, 294, 'thumbnails/ufKovVX64geFfCoxRSNh5TnkV4h7vM9Yzp6FaNfJ.jpg', 1, 213, '2021-08-18', 16, 1, 1, NULL, 1, NULL, '2023-02-16 08:23:40', '2023-02-16 08:23:40'),
(222, 'রামেসিস - দ্য ইটারনাল টেম্পল', 'Rameses The Eternal Temple', 'rameses-the-eternal-temple', 106, 350, 291, 301, 'thumbnails/5up4tZe2h5UZaHBCVJBFo5vH9ctPvImg25VSmwW4.jpg', 1, 214, '2021-08-18', 16, 1, 1, NULL, 1, NULL, '2023-02-16 08:25:20', '2023-02-16 08:25:20'),
(223, 'রামেসিস - দ্য ব্যাটল অফ কাদেশ', 'Rameses The Battle of Kadesh', 'rameses-the-battle-of-kadesh', 106, 330, 274, 299, 'thumbnails/9UEQgQ4j5nQvg5YYiM6iEySRGo5R0xtmSLntCwGj.jpg', 1, 215, '2021-08-18', 16, 1, 1, NULL, 1, NULL, '2023-02-16 08:27:14', '2023-02-16 08:27:14'),
(224, 'রামেসিস - দ্য লেডি অফ আবু সিম্বেল', 'Rameses The Lady of Abu Simbel', 'rameses-the-lady-of-abu-simbel', 106, 370, 307, 295, 'thumbnails/xkCi7VFJjiUwLguMEkboegU9auDad4lc4yNPEg2P.jpg', 1, 216, '2021-08-18', 16, 1, 1, NULL, 1, NULL, '2023-02-16 08:28:39', '2023-02-16 08:28:39'),
(225, 'রামেসিস - আন্ডার দ্য ওয়েস্টার্ন অ্যাকাশিয়া', 'Rameses Under the Western Acacia', 'rameses-under-the-western-acacia', 106, 350, 291, 288, 'thumbnails/DjbnEiDybOYKHv1zi5c7nnLNZSD72VSGFBlwZtsX.jpg', 1, 217, '2021-08-18', 16, 1, 1, NULL, 1, NULL, '2023-02-16 08:31:03', '2023-02-16 08:31:03'),
(226, 'নির্বাচিত সুকুমার রায় শিশু সাহিত্য', 'Nirbachito Sukumar Roy Sishu Sahitto', 'nirbachito-sukumar-roy-sishu-sahitto', 39, 390, 295, 284, 'thumbnails/kAHT0hzPazYgnz7Fet24ZfnVNinQaKGpISTBBi7i.jpg', 1, 218, '2021-11-08', 16, 1, 0, NULL, 1, NULL, '2023-02-16 23:41:58', '2023-02-16 23:41:58'),
(227, 'নির্বাচিত সুকুমার রায় শিশু সাহিত্য - দ্বিতীয় খন্ড', 'Nirbachito Sukumar Roy Sishu Sahitto Ditiyo Khondo', 'nirbachito-sukumar-roy-sishu-sahitto-ditiyo-khondo', 39, 390, 295, 312, 'thumbnails/9NK2i3zBTvKp5gDua2U3bYbRlqFKIe0WymJdTBnA.jpg', 1, 219, '2021-11-08', 16, 1, 0, NULL, 1, NULL, '2023-02-16 23:43:16', '2023-02-16 23:43:16'),
(228, 'নির্বাচিত রবীন্দ্র শিশু সাহিত্য', 'Nirbachito Robindra Shishu Sahitto', 'nirbachito-robindra-shishu-sahitto', 39, 285, 225, 304, 'thumbnails/wXpWbBhvZRJPBLq80upXXIftK8lJbCV41qLHssqb.jpg', 1, 220, '2021-11-08', 16, 1, 0, NULL, 1, NULL, '2023-02-16 23:46:14', '2023-02-16 23:46:14'),
(229, 'বাঙালি ও বাংলাদেশ', 'Bangali of Bangladesh', 'bangali-of-bangladesh', 39, 200, 160, 63, 'thumbnails/eCkfNUpShBor84khy1juLeQZjf7xFPWje4yP6bu5.jpg', 1, 221, '2021-11-08', 16, 1, 0, NULL, 1, NULL, '2023-02-16 23:47:50', '2023-02-16 23:47:50'),
(230, 'সকল শিশুর জন্য এশিয়ার লোক কাহিনি', 'Asiar Lokokahini', 'asiar-lokokahini', 39, 245, 205, 152, 'thumbnails/7WAx7yjRfCIM7uwSlR5Pg66Z3xN2tYPtqmJIvVA1.jpg', 1, 222, '2021-11-08', 16, 1, 0, NULL, 1, NULL, '2023-02-16 23:49:34', '2023-02-16 23:49:34'),
(231, 'প্যারাডক্সিক্যাল সাজিদ', 'Paradoxical Sazid', 'paradoxical-sazid', 115, 200, 160, 167, 'thumbnails/n9h4qU0GPgQgcr6lBflIyWk6HNudMlrRDdOsdtxx.jpg', 1, 223, '2021-11-08', 16, 1, 0, NULL, 1, NULL, '2023-02-16 23:53:27', '2023-02-16 23:53:27'),
(232, 'মা', 'Maa', 'maa', 27, 300, 255, 319, 'thumbnails/1EZHGLQPodoBdJFszupBwFCORrfp9VxOr9KoBosj.jpg', 1, 224, '2021-12-12', 16, 1, 0, NULL, 1, NULL, '2023-02-16 23:54:45', '2023-02-16 23:54:45'),
(233, 'আহমদ ছফার পাঁচটি উপন্যাস', 'Ahmad Sofar Pachti Uponnas', 'ahmad-sofar-pachti-uponnas', 70, 400, 340, 380, 'thumbnails/6Q1MqZH2qM8nD2AWmUIXzNztlBYd2K8032m04ero.jpg', 1, 225, '2021-12-12', 16, 1, 0, NULL, 1, NULL, '2023-02-16 23:56:06', '2023-02-16 23:56:06'),
(234, 'এলিফ্যান্ট সং', 'Elephant Song', 'elephant-song', 130, 400, 320, 352, 'thumbnails/UUTnTlS0VOt4wXetLHewHvCKPcE4fhTjYUrTsT1D.jpg', 1, 226, '2021-12-12', 16, 1, 0, NULL, 1, NULL, '2023-02-16 23:58:42', '2023-02-16 23:58:42'),
(235, 'দ্য নিউ কিংডম', 'The New Kingdom', 'the-new-kingdom', 43, 500, 300, 400, 'thumbnails/HJ30KUE8I0Rx2zet4MdaTsuRYgGzrr4yHDXsSSKW.jpg', 1, 227, '2021-12-12', 16, 1, 0, NULL, 1, NULL, '2023-02-16 23:59:54', '2023-02-16 23:59:54'),
(236, 'ব্যোমকেশ সমগ্র', 'Boymkesh Somogro', 'boymkesh-somogro', 130, 500, 380, 904, 'thumbnails/1kPotq7aMjgcN8wouVUSHNgzlcctTB2htrY4Wwbf.jpg', 1, 228, '2022-03-10', 16, 1, 0, NULL, 1, NULL, '2023-02-17 00:02:05', '2023-02-17 00:02:05'),
(237, 'কুরআনের সাথে ৩৬৫ দিন', 'Quraner Sathe 365 Din', 'quraner-sathe-365-din', 112, 350, 245, 176, 'thumbnails/nXa1OFDlTX6CnpbapSw7sgG5x4BkaikHaKKl65tp.jpg', 1, 229, '2022-04-24', 16, 1, 0, NULL, 1, NULL, '2023-02-17 00:03:41', '2023-02-17 00:03:41'),
(238, 'মহানবী (সা) এঁর সাথে ৩৬৫ দিন', 'Mohanabi S Er Sathe 365 Din', 'mohanabi-s-er-sathe-365-din', 112, 500, 350, 415, 'thumbnails/6IegWsSgZvguOlh94ms4DIRJ7h0BhqTDXiLqJ1g5.jpg', 1, 230, '2022-04-24', 16, 1, 0, NULL, 1, NULL, '2023-02-17 00:05:25', '2023-02-17 00:05:25'),
(239, 'সাহাবীদের সাথে ৩৬৫ দিন', 'Sahabider Sathe 365 Din', 'sahabider-sathe-365-din', 112, 350, 245, 231, 'thumbnails/6fn0b0NUtbghd39ku2KgHgARbME4deNUgtoxLjnZ.jpg', 1, 231, '2022-04-24', 16, 1, 0, NULL, 1, NULL, '2023-02-17 00:06:39', '2023-02-17 00:06:39'),
(240, 'অপেক্ষা', 'Opekkha', 'opekkha', 14, 500, 425, 219, 'thumbnails/NiqxIbnDiF42eLm6sJ1Ks3TqH0XZ6zB0lxCmZ86A.jpg', 1, 232, '2022-07-15', 16, 1, 0, NULL, 1, NULL, '2023-02-17 00:07:48', '2023-02-17 00:07:48'),
(241, 'জোছনা ও জননীর গল্প', 'Jochna O Jananir Golpo', 'jochna-o-jananir-golpo', 7, 800, 680, 505, 'thumbnails/PMSI3rQgB4oHKPhA4fsEcNH6teRBnlW34VWqsCX5.jpg', 1, 233, '2022-07-15', 16, 1, 0, NULL, 1, NULL, '2023-02-17 00:09:17', '2023-02-17 00:09:17'),
(242, 'বরফ গলা নদী', 'Borof Gola Nadi', 'borof-gola-nadi', 12, 160, 140, 96, 'thumbnails/qKyTDSNcX0dDaWDUDP8UIe9gYcyc6SAEWED701nb.jpg', 1, 234, '2022-07-15', 16, 1, 0, NULL, 1, NULL, '2023-02-17 00:10:16', '2023-02-17 00:10:16'),
(243, 'শব্‌নম্‌', 'Shobnom', 'shobnom', 27, 220, 200, 140, 'thumbnails/gKpTkQ32MnvUZ0sI0aSewmAmQ9ermdAizYWtqJde.jpg', 1, 235, '2022-07-15', 16, 1, 0, NULL, 1, NULL, '2023-02-17 00:11:24', '2023-02-17 00:11:24'),
(244, 'হিটলার', 'Hitlar', 'hitlar', 27, 230, 200, 149, 'thumbnails/8FwgxJByqHBVr2fRIexNfXxUb6jkN8LQ4lc5U48X.jpg', 1, 236, '2022-07-15', 16, 1, 0, NULL, 1, NULL, '2023-02-17 00:12:32', '2023-02-17 00:12:32'),
(245, 'চাচা কাহিনী', 'Cacha Kahini', 'cacha-kahini', 27, 200, 160, 116, 'thumbnails/UlgB5F1MTGvIXYehpL9aEbbyVFF2HQp7wSj1BtJk.jpg', 1, 237, '2022-07-15', 16, 1, 0, NULL, 1, NULL, '2023-02-17 00:13:41', '2023-02-17 00:13:41'),
(246, 'সেরা রম্যরচনা', 'Sera Rommorochona', 'sera-rommorochona', 27, 320, 285, 210, 'thumbnails/6rqFjN2LwcdWI4J2hbJWLocCQLrDOe5MuU1WNvO8.jpg', 1, 238, '2022-07-15', 16, 1, 0, NULL, 1, NULL, '2023-02-17 00:21:30', '2023-02-17 00:21:30'),
(247, 'প্রোগ্রামিং এর আদ্যোপান্ত', 'Programming er Addyopanto', 'programming-er-addyopanto', 89, 590, 480, 317, 'thumbnails/DOBJ85Z02O0rtzpZO2OuLyUtjFNYRtjfHjU6XW3w.jpg', 1, 239, '2022-07-15', 16, 1, 0, NULL, 1, NULL, '2023-02-17 00:23:11', '2023-02-17 00:23:11'),
(248, 'Kaizen', 'Kaizen', 'kaizen', 130, 300, 250, 283, 'thumbnails/9zdBMXQuMtQO0FyOjnGA81JY3pyP8XGpWgcranfF.jpg', 1, 240, '2022-07-22', 16, 1, 0, NULL, 1, NULL, '2023-02-17 00:24:54', '2023-02-17 00:24:54'),
(249, 'Atomic Habits', 'Atomic Habits', 'atomic-habits', 130, 300, 250, 285, 'thumbnails/jY1CaROCMGkAxc170BQeq5TcYysM4fEBnpdzUJUp.jpg', 1, 241, '2022-07-22', 16, 1, 0, NULL, 1, NULL, '2023-02-17 00:26:12', '2023-02-17 00:26:12'),
(250, 'ডোপামিন ডিটক্স', 'Dopamin Detox', 'dopamin-detox', 124, 200, 165, 79, 'thumbnails/NUWGXRBCLKxAyNYmYqGFN0AqdlC9IRGZZgrqjyEc.jpg', 1, 242, '2022-08-09', 16, 1, 0, NULL, 1, NULL, '2023-02-17 00:27:16', '2023-02-17 00:27:16'),
(251, 'মিশর দেখে এলাম', 'Mishore Dekhe Elam', 'mishore-dekhe-elam', 40, 225, 180, 107, 'thumbnails/tSPR0vnIRqVNUQJia9LXJfqFt6Hioh070spYgoNZ.jpg', 1, 243, '2022-08-10', 16, 1, 1, 'পরিচ্ছন্ন ভাষায় লেখা চমৎকার একটি ভ্রমণ বিষয়ক বই।', 1, NULL, '2023-02-17 00:29:33', '2023-02-17 00:29:33'),
(252, 'বসন্ত ছিলো', 'Bosonto Chilo', 'bosonto-chilo', 130, 60, 60, 48, 'thumbnails/HMPY82q2Od4IBkDzKAOmLOA6jPfIy1A6HMx20cYg.jpg', 1, 244, '2022-10-11', 16, 1, 0, NULL, 1, NULL, '2023-02-17 00:30:37', '2023-02-17 00:30:37'),
(253, 'পরমাণু ও পরমাণু শক্তি', 'Poromanu O Poromanu Shokti', 'poromanu-o-poromanu-shokti', 88, 270, 232, 144, 'thumbnails/zXv1HCunzgUt4pmDULdlhwULPp824muEM9WbzhOA.jpg', 1, 245, '2022-10-16', 16, 1, 0, NULL, 1, NULL, '2023-02-17 00:31:58', '2023-02-17 00:31:58'),
(254, 'পুরাণের কথা', 'Puraner Kotha', 'puraner-kotha', 22, 240, 206, 142, 'thumbnails/uiuBo4qO0Ue66IgMQtMz7lfZkEHdNH1SYOCTLMhQ.jpg', 1, 246, '2022-10-16', 16, 1, 0, NULL, 1, NULL, '2023-02-17 00:33:10', '2023-02-17 00:33:10'),
(255, 'তারানাথ তান্ত্রিক সমগ্র', 'Taranath Tantrik Somogro', 'taranath-tantrik-somogro', 72, 810, 810, 436, 'thumbnails/oabT7eOaRr6OChQHJW99Hxq7UH2xw5yXa1gzflO1.jpg', 1, 247, '2022-10-16', 16, 1, 1, NULL, 1, NULL, '2023-02-17 00:58:55', '2023-02-17 00:58:55'),
(256, 'ইন্দুবালা ভাতের হোটেল', 'Indubala Vater Hotel', 'indubala-vater-hotel', 129, 465, 465, 157, 'thumbnails/B025cTn0ImTwb0p1wM5ddJQ1Cy99yNNGn7beAI5a.jpg', 1, 248, '2022-10-25', 16, 1, 1, NULL, 1, NULL, '2023-02-17 01:00:44', '2023-02-17 01:00:44'),
(257, 'রেলকে ঘিরে', 'Railke Ghire', 'railke-ghire', 28, 550, 475, 448, 'thumbnails/V4GNtBLx9Y6mkGrOYVajiy7H1RyZRCifENv4KZah.jpg', 1, 249, '2022-10-25', 16, 1, 1, NULL, 1, NULL, '2023-02-17 01:02:33', '2023-02-17 01:02:33'),
(258, 'মানচিত্রে বাংলার ইতিহাস', 'Manchitre Banglar Itihash', 'manchitre-banglar-itihash', 38, 500, 375, 96, 'thumbnails/rJEhd9hFotczZe9zCs96oaSj1yE5DljF6hGBMduW.jpg', 1, 250, '2022-10-25', 16, 1, 0, NULL, 1, NULL, '2023-02-17 01:04:29', '2023-02-17 01:04:29'),
(259, 'ইকিগাই', 'Ikigai', 'ikigai', 36, 300, 258, 134, 'thumbnails/ilQhHNmYrcMpn4WDGpv6P5oN4sKGtwokvJQs1XEm.jpg', 1, 251, '2022-11-30', 16, 1, 0, NULL, 1, NULL, '2023-02-17 01:07:44', '2023-02-17 01:07:44'),
(260, 'আরণ্যক', 'Aronnok', 'aronnok', 27, 270, 232, 252, 'thumbnails/5lUZwAL26E1hWf7vSjouNTkyLbiGtOHViiNEcwHY.jpg', 1, 252, '2022-11-30', 16, 1, 1, NULL, 1, NULL, '2023-02-17 01:09:08', '2023-02-17 01:09:08'),
(261, 'নক্সী কাঁথার মাঠ', 'Nokshi Kathar Maath', 'nokshi-kathar-maath', 49, 220, 189, 93, 'thumbnails/vN6IOuhSoIkBAPPDgq3DwAUGbEEkn3jI3TCfNCCc.jpg', 1, 253, '2022-11-30', 16, 1, 0, NULL, 1, NULL, '2023-02-17 01:11:06', '2023-02-17 01:11:06'),
(262, 'সোজন বাদিয়ার ঘাট', 'Shojon Badiyar Ghat', 'shojon-badiyar-ghat', 49, 300, 258, 160, 'thumbnails/Uro5nOJ3xJjUhulcWnwK0PEPcWJCZKWeESleBv3V.jpg', 1, 254, '2022-11-30', 16, 1, 0, NULL, 1, NULL, '2023-02-17 01:12:45', '2023-02-17 01:12:45'),
(263, 'ইছামতী', 'Ichamoti', 'ichamoti', 128, 350, 228, 320, 'thumbnails/kSyNDlgYBmTrCFNu5bzij8qVEZDznrkFDL1l6k5Y.jpg', 1, 255, '2023-02-05', 16, 1, 0, NULL, 1, NULL, '2023-02-17 01:15:46', '2023-02-17 01:15:46'),
(264, 'অশনি সংকেত', 'Oshoni Songket', 'oshoni-songket', 126, 200, 130, 112, 'thumbnails/rZbiGC6ycvrhMTh3nOCwSBenTdpqkLI158Fa3aBD.jpg', 1, 256, '2023-02-05', 16, 1, 0, NULL, 1, NULL, '2023-02-17 01:17:28', '2023-02-17 01:17:28'),
(265, 'ক্রাচের কর্নেল', 'Kracher Kornel', 'kracher-kornel', 23, 550, 358, 351, 'thumbnails/FmbKUfqRdPclJzjRvxXld5F2GYgs4Bmrjz7GHPqm.jpg', 1, 257, '2023-02-05', 16, 1, 0, NULL, 1, NULL, '2023-02-17 01:19:27', '2023-02-17 01:19:27'),
(266, 'ভয় সমগ্র', 'Bhoi Shomogro', 'bhoi-shomogro', 128, 500, 300, 359, 'thumbnails/SagIXzvQGnVf5NdMN64XApsDVztRLDj9KzsqFkc1.jpg', 1, 258, '2023-02-07', 16, 1, 1, NULL, 1, NULL, '2023-02-17 01:21:08', '2023-02-17 01:21:08'),
(267, 'রচনাবলি - প্রথম খন্ড', 'Rochonaboli - Prothom Khondo', 'rochonaboli---prothom-khondo', 27, 600, 360, 327, 'thumbnails/AsLbrSWUmWwtrijmLJsUqvtzd4BHnYdLaIuxF6qh.jpg', 1, 259, '2023-02-07', 16, 1, 0, NULL, 1, NULL, '2023-02-17 02:41:54', '2023-02-17 02:41:54'),
(268, 'রচনাবলি - দ্বিতীয় খন্ড', 'Rochonaboli - Ditiyo Khondo', 'rochonaboli-ditiyo-khondo', 27, 660, 400, 375, 'thumbnails/79BWbr7RK27lbT4AE2hqO5bXqblKrVjKoMjX1UMC.jpg', 1, 260, '2023-02-07', 16, 1, 0, NULL, 1, NULL, '2023-02-17 02:44:04', '2023-02-17 02:44:04'),
(269, 'রচনাবলি - তৃতীয় খন্ড', 'Rochonaboli - Tritiyo Khondo', 'rochonaboli-tritiyo-khondo', 27, 430, 260, 382, 'thumbnails/IC5sXgmphIWujsohfPVt5OZtQYpqqvbCuB1rT45E.jpg', 1, 261, '2023-02-07', 16, 1, 0, NULL, 1, NULL, '2023-02-17 02:45:37', '2023-02-17 02:45:37'),
(270, 'রচনাবলি - চতুর্থ খন্ড', 'Rochonaboli - Choturtho Khondo', 'rochonaboli-choturtho-khondo', 27, 375, 225, 327, 'thumbnails/LaU7fz7UYnv4zipqpzNYy4apeQwKxenK7PPG9SvJ.jpg', 1, 262, '2023-02-07', 16, 1, 0, NULL, 1, NULL, '2023-02-17 02:47:05', '2023-02-17 02:47:05'),
(271, 'রচনাবলি - পঞ্চম খন্ড', 'Rochonaboli - Ponchom Khondo', 'rochonaboli-ponchom-khondo', 27, 430, 260, 384, 'thumbnails/K076DPgzjcECAOuhE9ygK4JAry67bWR6CT4V4YA1.jpg', 1, 263, '2023-02-07', 16, 1, 0, NULL, 1, NULL, '2023-02-17 02:48:22', '2023-02-17 02:48:22'),
(272, 'রচনাবলি - ষষ্ঠ খন্ড', 'Rochonaboli - Sostho Khondo', 'rochonaboli-sostho-khondo', 27, 375, 225, 316, 'thumbnails/HJ1hhzDeClufgKMmnrLQUCJ6gl7D9WMUUmbIV4gf.jpg', 1, 264, '2023-02-07', 16, 1, 0, NULL, 1, NULL, '2023-02-17 02:49:52', '2023-02-17 02:49:52'),
(273, 'রচনাবলি - সপ্তম খন্ড', 'Rochonaboli - Soptom Khondo', 'rochonaboli-soptom-khondo', 27, 430, 260, 375, 'thumbnails/XDZRcJsGoqIG2FZBp8LCHZKw2PE6AAMiLjfzNhuC.jpg', 1, 265, '2023-02-07', 16, 1, 0, NULL, 1, NULL, '2023-02-17 02:51:05', '2023-02-17 02:51:05'),
(274, 'রচনাবলি - অষ্টম খন্ড', 'Rochonaboli - Ostom Khondo', 'rochonaboli-ostom-khondo', 27, 375, 225, 333, 'thumbnails/I90p3TL9n9P4sUYoPyIqouI9h4vRRAPdHkL6viSv.jpg', 1, 266, '2023-02-07', 16, 1, 0, NULL, 1, NULL, '2023-02-17 02:52:54', '2023-02-17 02:52:54'),
(275, 'রচনাবলি - নবম খন্ড', 'Rochonaboli - Nobom Khondo', 'rochonaboli-nobom-khondo', 27, 375, 225, 328, 'thumbnails/Nj9xeDKmHWz4WfBbr4d1QGJLB7b9eoZXaGAQeFp3.jpg', 1, 267, '2023-02-07', 16, 1, 0, NULL, 1, NULL, '2023-02-17 02:54:07', '2023-02-17 02:54:07'),
(276, 'রচনাবলি - দশম খন্ড', 'Rochonaboli - Doshom Khondo', 'rochonaboli-doshom-khondo', 27, 375, 225, 325, 'thumbnails/zBNtHJXetm0tOfgmnh1GfQvLzqrxvMgsXGnfzUzO.jpg', 1, 268, '2023-02-07', 16, 1, 0, NULL, 1, NULL, '2023-02-17 02:55:31', '2023-02-17 02:55:31'),
(277, 'রচনাবলি - একাদশ খন্ড', 'Rochonaboli - Ekadosh Khondo', 'rochonaboli-ekadosh-khondo', 27, 320, 190, 286, 'thumbnails/LNN4FqiPxzzAYgizqACQiS77WpfrwvRwADVuQeQZ.jpg', 1, 269, '2023-02-07', 16, 1, 0, NULL, 1, NULL, '2023-02-17 02:56:51', '2023-02-17 02:56:51'),
(278, 'সম্পর্কের শিকড়ে বেদনার কষ', 'Somporker Shikore Bedonar Kosh', 'somporker-shikore-bedonar-kosh', 130, 200, 0, 64, 'thumbnails/byuSunoYS9bSoh7SbfvH7b0bo5Yfw916i0KFfq8T.jpg', 2, 270, '2023-02-13', 16, 1, 0, NULL, 1, NULL, '2023-02-17 02:58:40', '2023-02-17 02:58:40'),
(279, 'প্রত্যাবর্তন', 'Prottaborton', 'prottaborton', 118, 330, 180, 221, 'thumbnails/xGKi67APBrK2O2hVGSzumxZ4xlMH8UkQWlv3sOSz.jpg', 1, 271, '2023-02-13', 16, 1, 0, NULL, 1, NULL, '2023-02-17 02:59:56', '2023-02-17 02:59:56'),
(280, 'স্টোরিজ ফর প্যারেন্টস, চিলড্রেন অ্যান্ড গ্র্যান্ড চিলড্রেন - ২', 'Stories for Parents Children and Grand Children', 'stories-for-parents-children-and-grand-children', 121, 350, 0, 111, 'thumbnails/s04JMdAPuj3xYydxRmqIgS6maDJMG7ivA9I38duH.jpg', 2, 272, '2023-02-13', 16, 1, 0, NULL, 1, NULL, '2023-02-17 03:01:45', '2023-02-17 03:01:45'),
(281, 'সুস্থ্য থাকার সহজ উপায়', 'Sustho Thakar Sohoj Upay', 'sustho-thakar-sohoj-upay', 34, 250, 200, 208, 'thumbnails/tqSBuwN1sNl3FZqEPhZwBajdtK5J2cMuPmU3c1a9.jpg', 1, 273, '2014-02-01', 16, 1, 0, NULL, 1, NULL, '2023-02-17 03:03:06', '2023-02-17 03:03:06'),
(282, 'নিউইয়র্কের নীলাকাশে ঝকঝকে রোদ', 'Newyorker Nilakashe Jhokjhoke Rod', 'newyorker-nilakashe-jhokjhoke-rod', 7, 200, 160, 93, 'thumbnails/8AslqiMC1A5Kmtxi5qi8z3PtvBH51PSVx8cwG07K.jpg', 1, 274, '2016-02-24', 16, 1, 0, NULL, 1, NULL, '2023-02-17 03:04:57', '2023-02-17 03:04:57'),
(283, 'ক্যালেন্ডারে যত বুদ্ধি', 'Calendar e Joto Buddhi', 'calendar-e-joto-buddhi', 39, 72, 60, 44, 'thumbnails/lCPSbWPjvTqwveoEWbA1T3DwmsE5WUPO0ER4fb9h.jpg', 1, 275, '2023-02-25', 16, 1, 0, NULL, 1, NULL, '2023-03-02 21:45:03', '2023-03-02 21:45:03'),
(284, 'নির্বাচননামা', 'Nirbachon Nama', 'nirbachon-nama', 21, 750, 563, 344, 'thumbnails/Wnbb12QQjSZJwe7wKLykOsAZqWvOq2q5KfcX6HwH.jpg', 1, 276, '2023-03-06', 16, 1, 0, NULL, 1, NULL, '2023-03-06 09:07:59', '2023-03-06 09:07:59');

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE `book_category` (
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`book_id`, `category_id`) VALUES
(9, 35),
(10, 35),
(11, 35),
(12, 35),
(13, 35),
(14, 19),
(15, 19),
(16, 20),
(16, 31),
(16, 39),
(17, 20),
(17, 21),
(18, 7),
(18, 20),
(19, 12),
(20, 39),
(21, 7),
(21, 17),
(21, 31),
(22, 15),
(23, 15),
(24, 15),
(25, 15),
(26, 15),
(27, 15),
(28, 15),
(29, 26),
(30, 14),
(30, 18),
(31, 18),
(32, 18),
(33, 18),
(34, 18),
(35, 18),
(35, 19),
(36, 18),
(38, 18),
(39, 8),
(39, 14),
(39, 15),
(40, 8),
(40, 14),
(40, 15),
(41, 15),
(42, 22),
(43, 12),
(44, 39),
(45, 8),
(45, 15),
(46, 11),
(47, 11),
(47, 12),
(48, 7),
(48, 10),
(48, 15),
(49, 11),
(50, 15),
(51, 12),
(51, 15),
(51, 17),
(52, 15),
(53, 15),
(54, 9),
(54, 12),
(55, 9),
(55, 12),
(56, 9),
(56, 12),
(57, 15),
(58, 13),
(58, 38),
(59, 15),
(59, 23),
(59, 27),
(60, 39),
(61, 22),
(62, 22),
(63, 22),
(64, 22),
(65, 40),
(66, 40),
(67, 7),
(67, 21),
(68, 7),
(68, 15),
(68, 18),
(69, 7),
(69, 10),
(69, 15),
(70, 7),
(70, 10),
(70, 15),
(71, 7),
(71, 10),
(71, 11),
(71, 15),
(72, 20),
(72, 21),
(73, 20),
(73, 21),
(73, 23),
(73, 27),
(74, 20),
(74, 21),
(74, 27),
(75, 20),
(75, 23),
(75, 27),
(76, 23),
(77, 23),
(77, 41),
(78, 23),
(78, 41),
(79, 21),
(79, 27),
(80, 20),
(80, 27),
(80, 39),
(81, 20),
(81, 41),
(82, 21),
(82, 23),
(82, 27),
(83, 23),
(84, 27),
(84, 36),
(84, 24),
(86, 24),
(86, 36),
(87, 24),
(87, 36),
(88, 24),
(88, 36),
(89, 24),
(89, 36),
(90, 24),
(90, 36),
(91, 24),
(91, 36),
(92, 24),
(92, 36),
(93, 24),
(93, 36),
(96, 18),
(96, 29),
(96, 36),
(97, 25),
(98, 38),
(98, 21),
(98, 42),
(99, 17),
(99, 43),
(100, 17),
(100, 43),
(101, 17),
(101, 43),
(102, 17),
(102, 43),
(103, 17),
(103, 43),
(104, 17),
(104, 43),
(105, 17),
(105, 43),
(106, 17),
(106, 43),
(107, 17),
(107, 43),
(108, 17),
(108, 43),
(109, 38),
(109, 44),
(110, 7),
(110, 18),
(111, 18),
(112, 18),
(113, 13),
(113, 15),
(113, 43),
(114, 32),
(114, 45),
(115, 33),
(115, 45),
(116, 33),
(116, 45),
(117, 32),
(117, 45),
(116, 32),
(115, 32),
(118, 32),
(118, 45),
(119, 32),
(119, 45),
(120, 32),
(120, 45),
(121, 32),
(121, 41),
(121, 45),
(122, 12),
(122, 45),
(123, 45),
(124, 32),
(124, 45),
(125, 32),
(125, 45),
(126, 32),
(126, 45),
(127, 32),
(127, 45),
(128, 32),
(128, 45),
(129, 32),
(129, 45),
(130, 15),
(130, 42),
(131, 12),
(131, 13),
(131, 15),
(131, 17),
(132, 17),
(132, 38),
(133, 36),
(133, 40),
(134, 16),
(134, 36),
(135, 16),
(135, 36),
(136, 16),
(136, 36),
(137, 16),
(137, 36),
(138, 16),
(138, 36),
(139, 16),
(139, 36),
(140, 16),
(140, 36),
(141, 16),
(141, 36),
(142, 16),
(142, 36),
(143, 16),
(143, 36),
(144, 16),
(144, 36),
(145, 16),
(145, 36),
(147, 16),
(147, 36),
(148, 16),
(149, 16),
(150, 16),
(151, 16),
(151, 38),
(152, 40),
(153, 16),
(153, 36),
(154, 16),
(154, 36),
(155, 16),
(155, 36),
(156, 28),
(157, 28),
(158, 28),
(159, 28),
(94, 18),
(94, 39),
(95, 18),
(95, 39),
(95, 41),
(94, 41),
(160, 28),
(161, 28),
(162, 28),
(163, 13),
(163, 34),
(164, 15),
(165, 41),
(165, 45),
(166, 20),
(166, 21),
(167, 20),
(167, 21),
(167, 23),
(167, 27),
(168, 17),
(168, 43),
(169, 7),
(169, 19),
(169, 31),
(167, 7),
(170, 23),
(170, 27),
(171, 21),
(171, 27),
(171, 29),
(172, 19),
(173, 19),
(173, 31),
(174, 44),
(175, 7),
(175, 18),
(176, 16),
(176, 36),
(177, 44),
(178, 18),
(178, 7),
(179, 20),
(179, 21),
(179, 23),
(179, 27),
(179, 37),
(180, 20),
(180, 21),
(180, 23),
(180, 27),
(181, 7),
(181, 20),
(181, 21),
(181, 23),
(181, 27),
(180, 7),
(182, 20),
(182, 21),
(182, 23),
(182, 27),
(183, 13),
(183, 29),
(183, 42),
(146, 20),
(146, 21),
(146, 27),
(184, 13),
(184, 27),
(184, 31),
(185, 20),
(185, 29),
(185, 31),
(186, 19),
(186, 34),
(186, 40),
(187, 19),
(187, 34),
(187, 40),
(188, 31),
(188, 32),
(189, 31),
(189, 32),
(190, 31),
(190, 32),
(191, 21),
(191, 22),
(191, 29),
(192, 22),
(193, 22),
(194, 18),
(194, 35),
(195, 18),
(195, 29),
(196, 7),
(196, 17),
(196, 35),
(197, 7),
(197, 17),
(197, 35),
(198, 12),
(198, 32),
(199, 12),
(199, 32),
(200, 12),
(200, 43),
(201, 12),
(202, 15),
(202, 29),
(203, 22),
(203, 39),
(204, 12),
(204, 32),
(205, 7),
(205, 10),
(205, 15),
(206, 7),
(206, 10),
(206, 15),
(207, 7),
(207, 10),
(207, 15),
(208, 7),
(208, 10),
(208, 15),
(209, 7),
(209, 21),
(209, 32),
(210, 21),
(210, 32),
(210, 45),
(211, 7),
(211, 10),
(211, 15),
(212, 21),
(212, 22),
(212, 29),
(213, 7),
(213, 8),
(214, 17),
(214, 27),
(214, 34),
(215, 7),
(215, 8),
(215, 10),
(216, 7),
(216, 8),
(216, 10),
(217, 7),
(217, 8),
(217, 10),
(218, 7),
(218, 8),
(218, 10),
(219, 21),
(219, 29),
(220, 7),
(220, 15),
(220, 43),
(221, 7),
(221, 15),
(221, 21),
(222, 7),
(222, 15),
(222, 21),
(223, 7),
(223, 15),
(223, 21),
(224, 7),
(224, 15),
(224, 21),
(225, 7),
(225, 15),
(225, 21),
(226, 17),
(227, 17),
(228, 12),
(228, 17),
(229, 17),
(229, 27),
(230, 12),
(230, 17),
(231, 12),
(231, 32),
(232, 7),
(232, 15),
(232, 20),
(232, 29),
(233, 15),
(234, 7),
(234, 10),
(234, 15),
(235, 7),
(235, 15),
(236, 8),
(236, 15),
(237, 17),
(237, 32),
(237, 45),
(238, 17),
(238, 32),
(238, 45),
(239, 17),
(239, 32),
(239, 45),
(240, 15),
(241, 15),
(242, 15),
(243, 15),
(243, 42),
(244, 13),
(245, 12),
(245, 13),
(245, 29),
(246, 12),
(246, 43),
(247, 16),
(247, 36),
(248, 18),
(248, 37),
(249, 18),
(249, 37),
(250, 7),
(250, 18),
(251, 22),
(251, 29),
(252, 39),
(253, 7),
(253, 19),
(253, 40),
(254, 7),
(254, 9),
(254, 29),
(255, 9),
(255, 12),
(256, 15),
(257, 19),
(257, 21),
(257, 27),
(258, 21),
(258, 27),
(258, 29),
(259, 18),
(259, 35),
(260, 15),
(260, 34),
(261, 21),
(261, 26),
(261, 42),
(262, 21),
(262, 26),
(263, 15),
(264, 15),
(264, 42),
(265, 20),
(265, 21),
(265, 23),
(265, 27),
(266, 9),
(266, 12),
(267, 12),
(267, 13),
(267, 14),
(267, 15),
(267, 42),
(268, 12),
(268, 13),
(268, 14),
(268, 15),
(269, 12),
(269, 13),
(269, 14),
(269, 15),
(270, 12),
(270, 13),
(270, 14),
(270, 15),
(271, 12),
(271, 13),
(271, 14),
(271, 15),
(272, 12),
(272, 13),
(272, 14),
(272, 15),
(273, 12),
(273, 13),
(273, 14),
(273, 15),
(274, 12),
(274, 13),
(274, 14),
(274, 15),
(275, 12),
(275, 13),
(275, 14),
(275, 15),
(276, 12),
(276, 13),
(276, 14),
(276, 15),
(277, 12),
(277, 13),
(277, 14),
(277, 15),
(278, 26),
(279, 12),
(279, 32),
(280, 7),
(280, 12),
(281, 35),
(282, 22),
(282, 39),
(79, 29),
(83, 21),
(83, 27),
(283, 17),
(284, 20),
(284, 27);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title_bn`, `title_en`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(7, 'অনুবাদ সাহিত্য', 'Onubad', 'onubad', 1, '2023-02-12 07:57:11', '2023-02-12 07:57:11'),
(8, 'গোয়েন্দা / রহস্য', 'Detective / Mystery', 'mystery-detective', 1, '2023-02-12 07:59:34', '2023-02-12 07:59:34'),
(9, 'ভৌতিক / মিথ', 'Horror / Myth', 'horror-myth', 1, '2023-02-12 08:00:17', '2023-02-12 08:00:17'),
(10, 'অ্যাডভেঞ্চার ও থ্রিলার', 'Adventure and Thriller', 'adventure-and-thriller', 1, '2023-02-12 08:01:01', '2023-02-12 08:01:01'),
(11, 'সায়েন্স ফিকশন', 'Science Fiction', 'science-fiction', 1, '2023-02-12 08:01:38', '2023-02-12 08:01:38'),
(12, 'গল্প', 'Story', 'story', 1, '2023-02-12 08:01:52', '2023-02-12 08:01:52'),
(13, 'প্রবন্ধ', 'Article', 'article', 1, '2023-02-12 08:02:17', '2023-02-12 08:02:17'),
(14, 'রচনাসমগ্র / সংকলন', 'Collections & Sets', 'collections-sets', 1, '2023-02-12 08:02:48', '2023-02-12 08:02:48'),
(15, 'উপন্যাস', 'Novel', 'novel', 1, '2023-02-12 08:04:51', '2023-02-12 08:04:51'),
(16, 'কম্পিউটার, ইন্টারনেট ও প্রোগ্রামিং', 'Computer, Internet and Programming', 'computer-internet-and-programming', 1, '2023-02-12 08:05:42', '2023-02-12 08:05:42'),
(17, 'শিশু-কিশোর বই', 'Children Books', 'children-books', 1, '2023-02-12 08:06:10', '2023-02-12 08:06:10'),
(18, 'আত্ম-উন্নয়ন / মোটিভেশনাল', 'Self Help / Motivational', 'self-help-motivational', 1, '2023-02-12 08:06:54', '2023-02-12 08:06:54'),
(19, 'বিজ্ঞান ও প্রযুক্তি', 'Science and Technology', 'science-and-technology', 1, '2023-02-12 08:07:15', '2023-02-12 08:07:15'),
(20, 'রাজনীতি', 'Politics', 'politics', 1, '2023-02-12 08:07:30', '2023-02-12 08:07:30'),
(21, 'ইতিহাস ও ঐতিহ্য', 'History and Tradition', 'history-and-tradition', 1, '2023-02-12 08:07:47', '2023-02-12 08:07:47'),
(22, 'ভ্রমণ', 'Travel', 'travel', 1, '2023-02-12 08:08:05', '2023-02-12 08:08:05'),
(23, 'মুক্তিযুদ্ধ', 'Liberation War', 'liberation-war', 1, '2023-02-12 08:08:21', '2023-02-12 08:08:21'),
(24, 'আইন ও বিচার', 'Law and Justice', 'law-and-justice', 1, '2023-02-12 08:08:39', '2023-02-12 08:08:39'),
(25, 'ইঞ্জিনিয়ারিং', 'Engineering', 'engineering', 1, '2023-02-12 08:08:51', '2023-02-12 08:08:51'),
(26, 'ছড়া, কবিতা ও আবৃত্তি', 'Rhymes, Poems and Recitation', 'rhymes-poems-and-recitation', 1, '2023-02-12 08:09:11', '2023-02-12 08:09:11'),
(27, 'বাংলাদেশ', 'Bangladesh', 'bangladesh', 1, '2023-02-12 08:09:24', '2023-02-12 08:09:24'),
(28, 'রান্নাবান্না, খাদ্য ও পুষ্টি', 'Cooking, Food and Nutrition', 'cooking-food-and-nutrition', 1, '2023-02-12 08:10:04', '2023-02-12 08:10:04'),
(29, 'সমাজ, সভ্যতা ও সংস্কৃতি', 'Society, Civilization and Culture', 'society-civilization-and-culture', 1, '2023-02-12 08:11:04', '2023-02-12 08:11:04'),
(30, 'খেলাধুলা', 'Sports & Games', 'sports-games', 1, '2023-02-12 08:11:31', '2023-02-12 08:11:31'),
(31, 'দর্শন', 'Philosophy and Philosopher', 'philosophy-and-philosopher', 1, '2023-02-12 08:12:02', '2023-02-12 08:12:02'),
(32, 'ধর্মীয় বই', 'Religious Books', 'religious-books', 1, '2023-02-12 08:12:37', '2023-02-12 08:12:37'),
(33, 'পরিবার, প্যারেন্টিং ও শিশু বিষয়ক', 'Family, Parenting and Children Related', 'family-parenting-and-children-related', 1, '2023-02-12 08:13:10', '2023-02-12 08:13:10'),
(34, 'পরিবেশ ও প্রকৃতি', 'Nature & Outdoors', 'nature-outdoors', 1, '2023-02-12 08:13:52', '2023-02-12 08:14:04'),
(35, 'স্বাস্থ্য, পরিচর্যা ও রোগ নিরাময়', 'Health and Fitness', 'health-and-fitness', 1, '2023-02-12 08:14:39', '2023-02-12 08:14:39'),
(36, 'পেশাগত বই', 'Professional Books', 'professional-books', 1, '2023-02-12 08:16:00', '2023-02-12 08:16:00'),
(37, 'বিদেশি ভাষার বই', 'Foreign Language Books', 'foreign-language-books', 1, '2023-02-12 08:18:10', '2023-02-12 08:18:10'),
(38, 'নন ক্যাটাগরাইজড', 'Non Categorised', 'non-categorised', 1, '2023-02-12 08:19:05', '2023-02-12 08:19:05'),
(39, 'আত্ম-চরিত / আত্ম জীবনী', 'Biography', 'biography', 1, '2023-02-12 10:06:23', '2023-02-12 10:06:23'),
(40, 'গণিত / বিজ্ঞান', 'Math / Science', 'math-science', 1, '2023-02-13 08:18:00', '2023-02-13 08:18:00'),
(41, 'ঐতিহাসিক ব্যক্তিত্ত্ব', 'Historical Personnel', 'historical-personnel', 1, '2023-02-13 09:39:10', '2023-02-13 09:39:10'),
(42, 'সাহিত্য', 'Literature', 'literature', 1, '2023-02-13 10:45:46', '2023-02-13 10:45:46'),
(43, 'কমিকস্‌ / রম্য', 'Comics', 'comics', 1, '2023-02-13 10:50:11', '2023-02-13 10:50:11'),
(44, 'ভাষা', 'Language', 'language', 1, '2023-02-15 06:27:04', '2023-02-15 06:27:04'),
(45, 'ইসলামিক', 'Islamic', 'islamic', 1, '2023-02-15 06:39:16', '2023-02-15 06:39:16');

-- --------------------------------------------------------

--
-- Table structure for table `collection_methods`
--

CREATE TABLE `collection_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collection_methods`
--

INSERT INTO `collection_methods` (`id`, `title_bn`, `title_en`, `created_at`, `updated_at`) VALUES
(1, 'ক্রয়', 'Purchase', '2023-02-06 03:23:43', '2023-02-06 03:58:50'),
(2, 'উপহার', 'Gift', '2023-02-06 03:59:04', '2023-02-06 03:59:04'),
(3, 'পারিবারের মাধ্যমে', 'Through Family', '2023-02-06 04:00:14', '2023-02-06 04:00:14'),
(4, 'অন্যান্য', 'Others', '2023-02-12 05:24:35', '2023-02-12 05:24:35'),
(5, 'অনির্ধারিত', 'Unset', '2023-02-12 05:24:59', '2023-02-12 05:24:59');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`id`, `user_id`, `book_id`, `created_at`, `updated_at`) VALUES
(5, 3, 57, '2023-02-22 12:30:14', '2023-02-22 12:30:14'),
(6, 3, 248, '2023-02-22 12:30:43', '2023-02-22 12:30:43'),
(8, 3, 126, '2023-02-22 13:03:36', '2023-02-22 13:03:36'),
(9, 1, 154, '2023-02-23 07:21:13', '2023-02-23 07:21:13'),
(10, 5, 256, '2023-02-23 11:06:12', '2023-02-23 11:06:12'),
(12, 5, 204, '2023-02-23 11:06:44', '2023-02-23 11:06:44'),
(13, 5, 175, '2023-02-23 11:06:45', '2023-02-23 11:06:45'),
(14, 1, 249, '2023-02-23 20:45:18', '2023-02-23 20:45:18'),
(15, 1, 113, '2023-02-24 00:45:50', '2023-02-24 00:45:50'),
(16, 1, 82, '2023-02-24 00:48:53', '2023-02-24 00:48:53');

-- --------------------------------------------------------

--
-- Table structure for table `lends`
--

CREATE TABLE `lends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lend_date` date NOT NULL,
  `lend_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_lend` tinyint(1) NOT NULL DEFAULT 1,
  `returned` tinyint(1) NOT NULL DEFAULT 0,
  `return_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_30_153737_create_authors_table', 1),
(6, '2023_01_30_153943_create_publishers_table', 1),
(7, '2023_01_30_154044_create_categories_table', 1),
(8, '2023_01_30_154114_create_storages_table', 1),
(9, '2023_01_30_154332_create_states_table', 1),
(10, '2023_01_30_154438_create_collection_methods_table', 1),
(11, '2023_01_30_154743_create_books_table', 1),
(12, '2023_01_30_154904_create_lends_table', 1),
(13, '2023_01_30_154937_create_reads_table', 1),
(15, '2023_02_07_023015_create_book_category_table', 1),
(16, '2023_02_07_023106_create_author_book_table', 1),
(17, '2023_02_22_161618_create_favourites_table', 2),
(19, '2023_01_30_161337_create_requests_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`id`, `title_bn`, `title_en`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(7, 'অন্যপ্রকাশ', 'Anyaprokash', 'anyaprokash', 1, '2023-02-12 13:28:37', '2023-02-12 13:28:37'),
(8, 'অনন্যা', 'Anannya', 'anannya', 1, '2023-02-12 13:28:37', '2023-02-12 13:28:37'),
(9, 'কথাপ্রকাশ', 'Kathaprokash', 'kathaprokash', 1, '2023-02-12 13:28:37', '2023-02-12 13:28:37'),
(10, 'আগামী প্রকাশনী', 'Agamee Prokashoni', 'agamee-prokashoni', 1, '2023-02-12 13:28:37', '2023-02-12 13:28:37'),
(11, 'বাংলা একাডেমি', 'Bangla Academy', 'bangla-academy', 1, '2023-02-12 13:28:37', '2023-02-12 13:28:37'),
(12, 'অনুপম প্রকাশনী', 'Anupam Prakashany', 'anupam-prakashany', 1, '2023-02-12 13:28:37', '2023-02-12 13:28:37'),
(13, 'অন্বেষা প্রকাশন', 'Annesha Prokashon', 'annesha-prokashon', 1, '2023-02-12 13:28:37', '2023-02-12 13:28:37'),
(14, 'আফসার ব্রাদার্স', 'Afsar Brothers', 'afsar-brothers', 1, '2023-02-12 13:28:37', '2023-02-12 13:28:37'),
(15, 'জ্ঞানকোষ প্রকাশনী', 'Gyankosh Prokashony', 'gyankosh-prokashony', 1, '2023-02-12 13:28:37', '2023-02-12 13:28:37'),
(16, 'পার্ল পাবলিকেশন্স', 'Pearl Publications', 'pearl-publications', 1, '2023-02-12 13:28:37', '2023-02-12 13:28:37'),
(17, 'প্রতীক প্রকাশনা সংস্থা', 'Protik Prokashana Sangstha', 'protik-prokashana-sangstha', 1, '2023-02-12 13:28:37', '2023-02-12 13:28:37'),
(18, 'সময় প্রকাশন', 'Somoy Prakashan', 'somoy-prakashan', 1, '2023-02-12 13:28:37', '2023-02-12 13:28:37'),
(19, 'র‌্যামন পাবলিশার্স', 'Ramon Publishers', 'ramon-publishers', 1, '2023-02-12 13:28:37', '2023-02-12 13:28:37'),
(20, 'সাহিত্য প্রকাশ', 'Shahitya Prakash', 'shahitya-prakash', 1, '2023-02-12 13:28:37', '2023-02-12 13:28:37'),
(21, 'প্রথমা প্রকাশন', 'Prothoma Prokashan', 'prothoma-prokashan', 1, '2023-02-12 13:28:37', '2023-02-12 13:28:37'),
(22, 'সন্দেশ', 'Sandesh', 'sandesh', 1, '2023-02-12 13:28:37', '2023-02-12 13:28:37'),
(23, 'মাওলা ব্রাদার্স', 'Mowla Brothers', 'mowla-brothers', 1, '2023-02-12 13:28:37', '2023-02-12 13:28:37'),
(24, 'বিশ্বসাহিত্য ভবন', 'Bishwasahitto vobon', 'bishwasahitto-vobon', 1, '2023-02-12 13:28:38', '2023-02-12 13:28:38'),
(25, 'অন্যরকম প্রকাশনী', 'Onnorokom Prokashonee', 'onnorokom-prokashonee', 1, '2023-02-12 13:28:38', '2023-02-12 13:28:38'),
(26, 'বিদ্যাপ্রকাশ', 'Biddyaprokash', 'biddyaprokash', 1, '2023-02-12 13:28:38', '2023-02-12 13:28:38'),
(27, 'বিশ্বসাহিত্য কেন্দ্র', 'Bishowsahitto Kendro', 'bishowsahitto-kendro', 1, '2023-02-12 13:28:38', '2023-02-12 13:28:38'),
(28, 'হাওলাদার প্রকাশনী', 'Hawlader Prokashoni', 'hawlader-prokashoni', 1, '2023-02-12 13:28:38', '2023-02-12 13:28:38'),
(29, 'তাম্রলিপি', 'Tamrolipi', 'tamrolipi', 1, '2023-02-12 13:28:38', '2023-02-12 13:28:38'),
(30, 'ইত্যাদি গ্রন্থ প্রকাশ', 'Ittadi Grantho Prokash', 'ittadi-grantho-prokash', 1, '2023-02-12 13:28:38', '2023-02-12 13:28:38'),
(31, 'অ্যাডর্ন পাবলিকেশন', 'Adorn Publication', 'adorn-publication', 1, '2023-02-12 13:28:38', '2023-02-12 13:28:38'),
(32, 'বিভাস', 'Bivas', 'bivas', 1, '2023-02-12 13:28:38', '2023-02-12 13:28:38'),
(33, 'জ্যোতি প্রকাশ', 'Jyotiprokash', 'jyotiprokash', 1, '2023-02-12 13:28:38', '2023-02-12 13:28:38'),
(34, 'মুক্তধারা', 'Muktadhara', 'muktadhara', 1, '2023-02-12 13:28:38', '2023-02-12 13:28:38'),
(35, 'অনিন্দ্য প্রকাশ', 'Anindya Prokash', 'anindya-prokash', 1, '2023-02-12 13:28:39', '2023-02-12 13:28:39'),
(36, 'আদর্শ', 'Adarsha', 'adarsha', 1, '2023-02-12 13:28:39', '2023-02-12 13:28:39'),
(37, 'নালন্দা', 'Nalonda', 'nalonda', 1, '2023-02-12 13:28:39', '2023-02-12 13:28:39'),
(38, 'অবসর প্রকাশনা সংস্থা', 'Abosar Prokashana Sangstha', 'abosar-prokashana-sangstha', 1, '2023-02-12 13:28:39', '2023-02-12 13:28:39'),
(39, 'বাংলাদেশ শিশু একাডেমি', 'Bangladesh Shishu Academy', 'bangladesh-shishu-academy', 1, '2023-02-12 13:28:39', '2023-02-12 13:28:39'),
(40, 'আনন্দ পাবলিশার্স (ভারত)', 'Ananda Publishers (India)', 'ananda-publishers-india', 1, '2023-02-12 13:28:39', '2023-02-12 13:28:39'),
(41, 'অক্ষর প্রকাশনী', 'Akhor Prokashoni', 'akhor-prokashoni', 1, '2023-02-12 13:28:39', '2023-02-12 13:28:39'),
(42, 'ঐতিহ্য', 'Oitijjhya', 'oitijjhya', 1, '2023-02-12 13:28:39', '2023-02-12 13:28:39'),
(43, 'রোদেলা প্রকাশনী', 'Rodela Prokasony', 'rodela-prokasony', 1, '2023-02-12 13:28:39', '2023-02-12 13:28:39'),
(44, 'খান ব্রাদার্স অ্যান্ড কোম্পানি', 'Khan Brothers & Company', 'khan-brothers-company', 1, '2023-02-12 13:28:39', '2023-02-12 13:28:39'),
(45, 'চারুলিপি প্রকাশন', 'Charulipi Prokashon', 'charulipi-prokashon', 1, '2023-02-12 13:28:39', '2023-02-12 13:28:39'),
(46, 'একুশে বাংলা প্রকাশন', 'Ekushe Bangla Prokashon', 'ekushe-bangla-prokashon', 1, '2023-02-12 13:28:39', '2023-02-12 13:28:39'),
(47, 'আজকাল প্রকাশনী', 'Aajkal Prokashani', 'aajkal-prokashani', 1, '2023-02-12 13:28:39', '2023-02-12 13:28:39'),
(48, 'সিসটেক পাবলিকেশন্স', 'Systech Publications', 'systech-publications', 1, '2023-02-12 13:28:39', '2023-02-12 13:28:39'),
(49, 'পলাশ প্রকাশনী', 'Palash Prokasani', 'palash-prokasani', 1, '2023-02-12 13:28:39', '2023-02-12 13:28:39'),
(50, 'শিরীন পাবলিকেশন্স', 'Shirin Publications', 'shirin-publications', 1, '2023-02-12 13:28:39', '2023-02-12 13:28:39'),
(51, 'হাক্কানী পাবলিশার্স', 'Hakkany Publishers', 'hakkany-publishers', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(52, 'গাজী প্রকাশনী', 'Gazi Prokashani', 'gazi-prokashani', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(53, 'জাতীয় সাহিত্য প্রকাশ', 'Jatiya Sahitya Prakash', 'jatiya-sahitya-prakash', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(54, 'অন্যধারা', 'Anyadhara', 'anyadhara', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(55, 'সেবা প্রকাশনী', 'Seba Prokashony', 'seba-prokashony', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(56, 'দি স্কাই পাবলিশার্স', 'The Sky Publishars', 'the-sky-publishars', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(57, 'স্বরবৃত্ত প্রকাশন', 'Sarobritto Prokashon', 'sarobritto-prokashon', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(58, 'পাঠক সমাবেশ', 'Pathak Shamabesh', 'pathak-shamabesh', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(59, 'ইছামতি প্রকাশনী', 'Isamoti Prokashni', 'isamoti-prokashni', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(60, 'মুক্তদেশ প্রকাশন', 'Muktodesh Prokason', 'muktodesh-prokason', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(61, 'দি ইউনিভার্সেল একাডেমি', 'The Universal Academy', 'the-universal-academy', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(62, 'বাংলাদেশ কো-অপারেটিভ বুক সোসাইটি লিঃ', 'Bangladesh Co-operative Book Society Ltd.', 'bangladesh-co-operative-book-society-ltd', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(63, 'অধুনা প্রকাশন', 'Adhuna Prakashan', 'adhuna-prakashan', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(64, 'বাঁধন পাবলিকেশন্স', 'Badhon Publications', 'badhon-publications', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(65, 'আলেয়া বুক ডিপো', 'Aleya Book Dipo', 'aleya-book-dipo', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(66, 'মৌলি প্রকাশনী', 'Mouli Prokashoni', 'mouli-prokashoni', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(67, 'সত্য কথা প্রকাশ', 'Satto Kotha Prokash', 'satto-kotha-prokash', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(68, 'বাতিঘর প্রকাশনী', 'Batighor Prokashoni', 'batighor-prokashoni', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(69, 'ইসলামিক ফাউন্ডেশন', 'Islamic Foundation', 'islamic-foundation', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(70, 'স্টুডেন্ট ওয়েজ', 'Student Ways', 'student-ways', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(71, 'দি ইউনিভার্সিটি প্রেস লিমিটেড (ইউপিএল)', 'The University Press Limited(UPL)', 'the-university-press-limited-upl', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(72, 'মিত্র ও ঘোষ পাবলিশার্স প্রাঃ লিঃ (ভারত)', 'Mitra O Ghosh Publishers Pvt. Ltd.(India)', 'mitra-o-ghosh-publishers-pvt-ltd-india', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(73, 'দে’জ পাবলিশিং (ভারত)', 'Deys Publishing (India)', 'deys-publishing-india', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(74, 'বাংলা সাহিত্য পরিষদ', 'Bangla Sahityo Prishod', 'bangla-sahityo-prishod', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(75, 'জিরো টু ইনফিনিটি প্রকাশনা', 'Jero to Infinity Prokashona', 'jero-to-infinity-prokashona', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(76, 'বাংলাদেশ ইসলামিক সেন্টার', 'Bangladesh Islamic Centre', 'bangladesh-islamic-centre', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(77, 'হাকীমুল উম্মত প্রকাশনী', 'Hakimul Ummot Prokashoni', 'hakimul-ummot-prokashoni', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(78, 'সোলেমানিয়া বুক হাউস', 'Solemania Book House', 'solemania-book-house', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(79, 'টেকপ্লাস পাবলিকেশন্স', 'Tekplash Publications', 'tekplash-publications', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(80, 'আনন্দধারা', 'Anondodhara', 'anondodhara', 1, '2023-02-12 13:31:34', '2023-02-12 13:31:34'),
(81, 'মনিহার বুক ডিপো', 'Monihar Book Dipo', 'monihar-book-dipo', 1, '2023-02-12 13:31:35', '2023-02-12 13:31:35'),
(82, 'নাদিয়াতুল কুরআন প্রকাশনী', 'Nadiyatul Quran Prakashoni', 'nadiyatul-quran-prakashoni', 1, '2023-02-12 13:31:35', '2023-02-12 13:31:35'),
(83, 'ম্যাকমিলান', 'Macmillan', 'macmillan', 1, '2023-02-12 13:31:35', '2023-02-12 13:31:35'),
(84, 'পিয়ারসন', 'Pearson', 'pearson', 1, '2023-02-12 13:31:35', '2023-02-12 13:31:35'),
(85, 'আনন্দ', 'Ananda', 'ananda', 1, '2023-02-12 13:31:35', '2023-02-12 13:31:35'),
(86, 'আদী প্রকাশন', 'Adee Prokashon', 'adee-prokashon', 1, '2023-02-12 13:31:35', '2023-02-12 13:31:35'),
(87, 'চারুলতা', 'Carulota', 'carulota', 1, '2023-02-12 13:31:35', '2023-02-12 13:31:35'),
(88, 'ছায়াবীথি', 'Chayabithi', 'chayabithi', 1, '2023-02-12 13:31:35', '2023-02-12 13:31:35'),
(89, 'প্রিয়মুখ', 'Priyomukh', 'priyomukh', 1, '2023-02-12 13:31:35', '2023-02-12 13:31:35'),
(90, 'বাংলাদেশ ল’বুক কোম্পানী', 'Bangladesh Law Book Com.', 'bangladesh-law-book-com', 1, '2023-02-12 13:31:35', '2023-02-12 13:31:35'),
(91, 'অক্ষরবৃত্ত', 'Akhorbirtto', 'akhorbirtto', 1, '2023-02-12 13:31:35', '2023-02-12 13:31:35'),
(92, 'এ্যাবাকাস পাবলিকেশন্স', 'Abacus Publications', 'abacus-publications', 1, '2023-02-12 13:31:35', '2023-02-12 13:31:35'),
(93, 'পপুলার পাবলিশার্স', 'Popular Publishers', 'popular-publishers', 1, '2023-02-12 13:31:35', '2023-02-12 13:31:35'),
(94, 'প্রকৃতি-পরিচয়', 'Prokriti Porichoy', 'prokriti-porichoy', 1, '2023-02-12 13:31:35', '2023-02-12 13:31:35'),
(95, 'গভার্ণমেন্ট পাবলিকেশন', 'Government Publication', 'government-publication', 1, '2023-02-12 13:31:35', '2023-02-12 13:31:35'),
(96, 'আনন্দ কম্পিউটারস্', 'Ananda Computers', 'ananda-computers', 1, '2023-02-12 13:31:35', '2023-02-12 13:31:35'),
(97, 'আলিফ পাবলিকেশন্স', 'Alif Publications', 'alif-publications', 1, '2023-02-12 13:31:35', '2023-02-12 13:31:35'),
(98, 'দারুস সালাম বাংলাদেশ', 'Darus Salam Bangladesh', 'darus-salam-bangladesh', 1, '2023-02-12 13:31:35', '2023-02-12 13:31:35'),
(99, 'শুভ প্রকাশন', 'Shuvo Prokashon', 'shuvo-prokashon', 1, '2023-02-12 13:31:35', '2023-02-12 13:31:35'),
(100, 'রোদ্দুর প্রকাশনী', 'Roddur Prokashoni', 'roddur-prokashoni', 1, '2023-02-12 13:31:35', '2023-02-12 13:31:35'),
(101, 'কোয়ান্টাম প্রকাশনা', 'Quantum Prokashona', 'quantum-prokashona', 1, '2023-02-12 13:31:35', '2023-02-12 13:31:35'),
(102, 'পানগুছি', 'Panguchi', 'panguchi', 1, '2023-02-12 13:31:35', '2023-02-12 13:31:35'),
(103, 'চিলড্রেন বুকস্‌ সেন্টার', 'Children Books Centre', 'children-books-centre', 1, '2023-02-12 13:31:35', '2023-02-12 13:31:35'),
(104, 'দ্বিমিক প্রকাশনী', 'Dimik Prokashoni', 'dimik-prokashoni', 1, '2023-02-12 13:31:36', '2023-02-12 13:31:36'),
(105, 'লিটন পাবলিকেশন্স', 'Liton Publications', 'liton-publications', 1, '2023-02-12 13:31:36', '2023-02-12 13:31:36'),
(106, 'আদি প্রকাশনী', 'Adi Prokashoni', 'adi-prokashoni', 1, '2023-02-12 13:31:36', '2023-02-12 13:31:36'),
(107, 'রাবেয়া বুক হাউস', 'Rabeya Book Hause', 'rabeya-book-hause', 1, '2023-02-12 13:31:36', '2023-02-12 13:31:36'),
(108, 'দ্যু প্রকাশন', 'Dyu Publication', 'dyu-publication', 1, '2023-02-12 13:31:36', '2023-02-12 13:31:36'),
(109, 'বাংলাদেশ বুক সেন্টার', 'Bangladesh Book Center', 'bangladesh-book-center', 1, '2023-02-12 13:31:36', '2023-02-12 13:31:36'),
(110, 'সাফল্য প্রকাশনী', 'Saphollo Prokasoni', 'saphollo-prokasoni', 1, '2023-02-12 13:31:36', '2023-02-12 13:31:36'),
(111, 'পাঞ্জেরী পাবলিকেশন্স লিমিটেড', 'Panjeree Publications Ltd', 'panjeree-publications-ltd', 1, '2023-02-12 13:31:36', '2023-02-12 13:31:36'),
(112, 'শিশু কানন', 'Shishu Kanon', 'shishu-kanon', 1, '2023-02-12 13:31:36', '2023-02-12 13:31:36'),
(113, 'মুনশী মোহাম্মদ মেহেরুল্লাহ রিসার্চ একাডেমী', 'Munshi Mohammod Meherullaho Research Academy', 'munshi-mohammod-meherullaho-research-academy', 1, '2023-02-12 13:31:36', '2023-02-12 13:31:36'),
(114, 'চারু প্রকাশনী', 'Charu Prokashoni', 'charu-prokashoni', 1, '2023-02-12 13:31:36', '2023-02-12 13:31:36'),
(115, 'গার্ডিয়ান পাবলিকেশনস', 'Guardian Publications', 'guardian-publications', 1, '2023-02-12 13:31:36', '2023-02-12 13:31:36'),
(116, 'এলাইড পাবলিশার্স লি.', 'Allied Publishers Ltd', 'allied-publishers-ltd', 1, '2023-02-12 13:31:36', '2023-02-12 13:31:36'),
(117, 'সমর্পণ প্রকাশন', 'Somorpon Prokashon', 'somorpon-prokashon', 1, '2023-02-12 13:31:36', '2023-02-12 13:31:36'),
(118, 'সমকালীন প্রকাশন', 'Somokalin Prokashon', 'somokalin-prokashon', 1, '2023-02-12 13:31:36', '2023-02-12 13:31:36'),
(119, 'অধ্যয়ন প্রকাশনী', 'Addhayan Prokashoni', 'addhayan-prokashoni', 1, '2023-02-12 13:31:36', '2023-02-12 13:31:36'),
(120, 'স্বরে অ', 'Swore O', 'swore-o', 1, '2023-02-12 13:31:36', '2023-02-12 13:31:36'),
(121, 'স্বদেশ শৈলী', 'Swadesh Shoilee', 'swadesh-shoilee', 1, '2023-02-12 13:31:36', '2023-02-12 13:31:36'),
(122, 'নেক্সাস পাবলিকেশন্স লিমিটেড', 'NEXUS Publications Ltd.', 'nexus-publications-ltd', 1, '2023-02-12 13:31:36', '2023-02-12 13:31:36'),
(123, 'অনন্য প্রকাশন', 'Ananny Prokashon', 'ananny-prokashon', 1, '2023-02-12 13:31:36', '2023-02-12 13:31:36'),
(124, 'রুশদা প্রকাশ', 'Rushda Prokash', 'rushda-prokash', 1, '2023-02-12 13:31:36', '2023-02-12 13:31:36'),
(125, 'অ্যাডভেঞ্চার প্রকাশনী', 'Adventure prokashoni', 'adventure-prokashoni', 1, '2023-02-12 13:31:36', '2023-02-12 13:31:36'),
(126, 'সূর্যোদয় প্রকাশন', 'Surjodoy Prokashon', 'surjodoy-prokashon', 1, '2023-02-12 13:31:36', '2023-02-12 13:31:36'),
(127, 'চন্দ্রবিন্দু', 'Chondrobindo', 'chondrobindo', 1, '2023-02-12 13:31:36', '2023-02-12 13:31:36'),
(128, 'সফা প্রকাশনী', 'Sofa Prokashoni', 'sofa-prokashoni', 1, '2023-02-12 13:31:36', '2023-02-12 13:31:36'),
(129, 'সুপ্রকাশ পাবলিশার্স', 'Suprokash Publishers', 'suprokash-publishers', 1, '2023-02-12 13:31:36', '2023-02-12 13:31:36'),
(130, 'অনির্ধারিত প্রকাশক', 'Untagged Publisher', 'untagged-publisher', 1, '2023-02-12 08:20:51', '2023-02-13 04:35:19'),
(131, 'শব্দ শৈলী', 'Shobdo Shoili', 'shobdo-shoili', 1, '2023-02-13 05:16:04', '2023-02-13 05:16:04'),
(132, 'কাকলী প্রকাশনী', 'Kakoli Prokashoni', 'kakoli-prokashoni', 1, '2023-02-15 07:17:35', '2023-02-15 07:17:35'),
(133, 'Wiley', 'Wiley', 'wiley', 1, '2023-02-15 07:28:44', '2023-02-15 07:28:44'),
(134, 'Tata McGraw Hill', 'Tata McGraw Hill', 'tata-mcgraw-hill', 1, '2023-02-15 07:31:13', '2023-02-15 07:31:13'),
(135, 'Oxford University Press', 'Oxford University Press', 'oxford-university-press', 1, '2023-02-15 08:04:52', '2023-02-15 08:04:52');

-- --------------------------------------------------------

--
-- Table structure for table `reads`
--

CREATE TABLE `reads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `reader_recommended` tinyint(1) NOT NULL DEFAULT 0,
  `comments` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reads`
--

INSERT INTO `reads` (`id`, `user_id`, `book_id`, `start_date`, `end_date`, `reader_recommended`, `comments`, `created_at`, `updated_at`) VALUES
(11, 1, 13, '2020-08-16', '2020-08-29', 1, 'ভালো লেগেছিলো। তথ্যবহুল একটি বই।', '2023-02-12 09:54:36', '2023-02-12 09:54:36'),
(12, 1, 21, '2020-04-02', '2020-04-03', 1, 'মেয়ে ইন্দিরা গান্ধীর কাছে পিতা জওহরলাল নেহেরুর লেখা কিছু অসাধারণ চিঠির সংকলন। বিশেষকরে কিশোর বয়সীদের জন্য দারুণ উপযোগি একটি বই।', '2023-02-12 20:00:35', '2023-02-12 20:00:35'),
(13, 1, 32, '2020-05-22', '2020-05-30', 1, 'ভালো বই।', '2023-02-13 05:09:30', '2023-02-13 05:09:30'),
(14, 1, 58, '2021-07-25', '2021-07-26', 0, 'আহমদ ছফা তাঁর শিক্ষক অধ্যাপক আব্দুর রাজ্জাক সম্পর্কে লিখেছেন।', '2023-02-13 05:58:22', '2023-02-13 05:59:58'),
(15, 1, 67, '2020-09-09', '2020-10-07', 1, 'প্রাচীন মিশরিয় সভ্যতা বিষয়ক অসাধারণ একটি বই।', '2023-02-13 08:23:23', '2023-02-13 08:23:23'),
(16, 1, 111, '2020-04-05', '2020-04-15', 1, 'নিজেকে রিচার্জ করার বা রাখার ভালো কিছু টিপস্‌ আছে এই বইয়ে।', '2023-02-15 06:32:26', '2023-02-15 06:32:26'),
(17, 1, 183, '2020-03-28', '2020-03-31', 1, 'অসাধারণ একটি কালজয়ী বই। বারবার পড়ার মতো লেখাগুলো।', '2023-02-15 10:33:42', '2023-02-15 10:33:42'),
(18, 1, 184, '2019-12-24', '2020-04-05', 0, 'মুসলমান সমাজ সম্পর্কে আহমদ ছফার বিভিন্ন বিচ্ছিন্ন ভাবনার সমষ্টি।', '2023-02-16 05:48:59', '2023-02-16 05:48:59'),
(19, 1, 185, '2020-04-30', '2020-05-02', 0, 'সমাজতন্ত্র সিস্টেম সম্পর্কে প্রাথমিক ধারণা পেয়েছি এই বই থেকে।', '2023-02-16 05:52:02', '2023-02-16 05:52:02'),
(20, 1, 186, '2020-04-18', '2020-04-18', 0, NULL, '2023-02-16 05:55:00', '2023-02-16 05:55:00'),
(21, 1, 187, '2020-05-02', '2020-09-02', 0, NULL, '2023-02-16 06:03:16', '2023-02-16 06:03:16'),
(22, 1, 188, '2020-04-19', '2020-04-21', 0, NULL, '2023-02-16 06:05:41', '2023-02-16 06:05:41'),
(23, 1, 191, '2020-09-02', '2020-09-09', 0, NULL, '2023-02-16 06:14:36', '2023-02-16 06:14:36'),
(24, 1, 62, '2021-02-09', '2021-03-17', 0, 'আমার MIT কোর্সের শিক্ষক খালেদ স্যারের লেখা বইটি। উনি BSSE স্টুডেন্টদের শিক্ষাসফরের একটি ব্যাচের সাথে ভারতের বিভিন্ন পর্যটন স্পট ভ্রমণের বিষয়ে লেখাতে তুলে ধরেছেন।', '2023-02-17 07:16:18', '2023-02-17 07:16:18'),
(25, 1, 70, '2021-03-22', '2021-04-02', 1, 'উইলবার স্মিথের লেখা প্রাচীন মিসরের বিখ্যাত কাহিনী। সিরিজের প্রথম বই এটি। চমৎকার লেগেছে পড়তে।', '2023-02-17 07:18:13', '2023-02-17 07:18:13'),
(26, 1, 59, '2021-04-05', '2021-04-08', 1, 'মুক্তিযুদ্ধকে উপজীব্য করে লেখা চমৎকার একটি উপন্যাস, যেটিতে ঐতিহাসিকভাবে সত্য কিছু চরিত্রও আছে।', '2023-02-17 07:20:49', '2023-02-17 07:20:49'),
(27, 1, 170, '2021-04-08', '2021-04-20', 1, 'শহীদ জননী জাহানারা ইমাম এঁর মুক্তিযুদ্ধের সময়কার স্মৃতিচারণা গ্রন্থ।', '2023-02-17 07:22:35', '2023-02-17 07:22:35'),
(28, 1, 203, '2021-04-21', '2021-04-22', 0, NULL, '2023-02-17 07:23:24', '2023-02-17 07:23:24'),
(29, 1, 202, '2021-04-22', '2021-04-23', 1, 'অসাধারণ একটি লেখা, যেটি পড়েই মূলত আমি বিভূতিভূষণ বন্দোপাধ্যায় এঁর ভক্ত হয়েছিলাম।', '2023-02-17 07:24:45', '2023-02-17 07:24:45'),
(30, 1, 205, '2021-04-25', '2021-05-01', 1, 'স্মিথের লেখা প্রাচীন মিসর ভিত্তিক সিরিজের ২য় গ্রন্থ। পুরো সিরিজটিই আমার অসম্ভব রকমের পছন্দের!', '2023-02-17 07:26:14', '2023-02-17 07:26:14'),
(31, 1, 69, '2021-05-01', '2021-05-07', 1, 'স্মিথের লেখা প্রাচীন মিসর ভিত্তিক সিরিজের ৩য় গ্রন্থ। ভালো লেগেছে।', '2023-02-17 07:27:17', '2023-02-17 07:27:29'),
(32, 1, 206, '2021-05-07', '2021-05-19', 1, 'স্মিথের লেখা প্রাচীন মিসর ভিত্তিক সিরিজের ৪র্থ বই এটি। রেকমেন্ডেড।', '2023-02-17 07:28:24', '2023-02-17 07:28:24'),
(33, 1, 207, '2021-05-20', '2021-06-18', 1, 'স্মিথের প্রাচীন মিসর ভিত্তিক সিরিজের একটি বই এটি। প্লট ব্যাপক প্রলম্বিত। তবে ধৈর্য্য ধরে পড়তে পারলে ভালো লাগবে।', '2023-02-17 07:30:06', '2023-02-17 07:30:06'),
(34, 1, 208, '2021-06-19', '2021-07-03', 1, 'স্মিথের প্রাচীন মিসর ভিত্তিক সিরিজের সর্বশেষ বই এটি। এটির উপজীব্য প্রাচীন মিসর হলেও ঘটনাগুলো আধুনিক সময়ের। ভালো লেগেছে।', '2023-02-17 07:31:49', '2023-02-17 07:31:49'),
(35, 1, 210, '2021-07-03', '2021-07-24', 1, 'ইসলামের উত্থানকাল ও তৎপরবর্তি সময়ের বিভিন্ন রাজনৈতিক ও সামাজিক ইতিহাস উঠে এসেছে গ্রন্থটিতে।', '2023-02-17 07:33:19', '2023-02-17 07:33:19'),
(36, 1, 113, '2021-07-26', '2021-07-28', 0, 'রম্য ধাচের লেখা হলেও কথাগুলো এবং মূলভাব বাস্তবতাভিত্তিক।', '2023-02-17 07:34:37', '2023-02-17 07:34:37'),
(37, 1, 167, '2021-07-29', '2021-08-05', 0, 'নিয়াজির দৃষ্টিতে ১৯৭১ এঁর মুক্তিযুদ্ধ ও তৎপরবর্তি বিভিন্ন ঘটনাবলী উঠে এসেছে বইটিতে।', '2023-02-17 07:36:04', '2023-02-17 07:36:04'),
(38, 1, 215, '2021-08-27', '2021-08-27', 0, NULL, '2023-02-17 07:37:00', '2023-02-17 07:37:00'),
(39, 1, 216, '2021-08-27', '2021-08-28', 0, NULL, '2023-02-17 07:37:31', '2023-02-17 07:37:31'),
(40, 1, 217, '2021-08-29', '2021-09-07', 0, NULL, '2023-02-17 07:37:58', '2023-02-17 07:37:58'),
(41, 1, 218, '2021-09-08', '2021-09-11', 0, NULL, '2023-02-17 07:38:24', '2023-02-17 07:38:24'),
(42, 1, 220, '2021-09-18', '2021-09-19', 2, 'ফালতু একটা বই। টাকা ও সময় দুটোই নষ্ট হয়েছে।', '2023-02-17 07:39:57', '2023-02-17 07:39:57'),
(43, 1, 221, '2021-09-24', '2021-10-08', 1, 'রামেসিস সিরিজের প্রথম বই এটি। চমৎকার লেগেছে পড়ে। রেকমেন্ডেড!', '2023-02-17 07:42:05', '2023-02-17 07:42:05'),
(44, 1, 222, '2021-10-08', '2021-10-12', 1, 'রামেসিস সিরিজের ২য় বই এটি। রেকমেন্ডেড!', '2023-02-17 07:43:29', '2023-02-17 07:43:29'),
(45, 1, 223, '2021-10-17', '2021-10-22', 1, NULL, '2023-02-17 07:44:08', '2023-02-17 07:44:08'),
(46, 1, 224, '2021-10-22', '2021-10-27', 1, NULL, '2023-02-17 07:44:49', '2023-02-17 07:44:49'),
(47, 1, 225, '2021-10-28', '2021-11-11', 1, NULL, '2023-02-17 07:45:40', '2023-02-17 07:45:40'),
(48, 1, 229, '2021-11-12', '2021-11-13', 2, 'তেমন ভালো লেখা না।', '2023-02-17 07:46:43', '2023-02-17 07:46:43'),
(49, 1, 219, '2021-11-20', '2021-11-27', 2, 'খুব বেশি ভালো মানের লেখা না।', '2023-02-17 07:47:40', '2023-02-17 07:47:40'),
(50, 1, 211, '2021-11-30', '2021-12-04', 1, 'ভালো লেগেছে। রেকমেন্ডেড!', '2023-02-17 07:48:28', '2023-02-17 07:48:28'),
(51, 1, 230, '2021-12-03', '2021-12-09', 2, 'বিরক্তিকর ধাচের লেখাগুলো। অনুবাদের মানও ভালো নয়।', '2023-02-17 07:49:41', '2023-02-17 07:49:41'),
(52, 1, 63, '2021-12-20', '2021-12-31', 2, 'লেখাগুলো দিনপঞ্জি ধাচের। লেখার মান পাঠকের জন্য আকর্ষণীয় নয়।', '2023-02-17 07:50:58', '2023-02-17 07:50:58'),
(53, 1, 231, '2022-01-23', '2022-05-07', 2, 'যুক্তিগুলো ভালো। তবে সব যুক্তিতেই প্রায় প্রতিদ্বন্দী হিসেবে হিন্দু কোন ব্যক্তিকে উপস্থাপন করা হয়েছে, যেটা ভালো লাগেনি।', '2023-02-17 07:53:12', '2023-02-17 07:53:12'),
(54, 1, 235, '2022-03-23', '2022-04-12', 2, 'লেখার মান ভালো নয়। স্মিথের ছায়ায় অন্য কারো লেখা কাহিনী বলে মনে হয়েছে।', '2023-02-17 07:54:14', '2023-02-17 07:54:14'),
(55, 1, 234, '2022-05-17', '2022-06-03', 1, 'ভালো লেগেছে। মাসুদ রানা বা জেমস বন্ড স্ট্যাইলের এডভেঞ্চার উপন্যাস।', '2023-02-17 07:55:03', '2023-02-17 07:55:03'),
(56, 1, 82, '2022-06-13', '2022-06-24', 1, 'মুক্তিযুদ্ধ বিষয়ক বিভিন্ন তথ্যবহুল দারুণ একটি বই। বইটি ২০১৪ তে কিনেছিলাম, আরো অনেক আগেই কেন পড়িনি সেজন্য আক্ষেপ হয়েছে বইটি পড়ে শেষ করার পর।', '2023-02-17 07:55:49', '2023-02-17 07:55:49'),
(57, 1, 73, '2022-06-25', '2022-07-02', 1, 'চমৎকার একটি বই। মুক্তিযুদ্ধের যুদ্ধকৌশল সম্পর্কে ও বাংলাদেশের জন্মক্ষণ সম্পর্কে অনেক কিছু জানতে পেরেছি।', '2023-02-17 07:56:37', '2023-02-17 07:56:37'),
(58, 1, 282, '2022-07-02', '2022-07-03', 1, 'দারুণ লেখা। সুখপাঠ্য ছিলো।', '2023-02-17 07:57:11', '2023-02-17 07:57:11'),
(59, 1, 212, '2022-07-04', '2022-07-12', 1, 'অনন্যসাধারণ একটি বই, বাংলা সাহিত্যের অমূল্য একটি সম্পদ। এই বইটি পড়তে কেন মধ্যবয়স পর্যন্ত সময় লাগলো - সেই বিষয়ে নিজের উপর খুব আক্ষেপ হলো।', '2023-02-17 07:58:15', '2023-02-17 07:58:35'),
(60, 1, 163, '2022-07-14', '2022-07-26', 1, 'দারুণ লেখা। বিভিন্ন বিষয়ে অনেক কিছু জানতে পেরেছি। আবার পড়ার আশা রাখি।', '2023-02-17 07:59:23', '2023-02-17 07:59:23'),
(61, 1, 209, '2022-07-29', '2022-08-13', 2, 'লেখা তথ্যবহুল। কিন্ত অনুবাদের মান ভালো নয়, সেই সাথে প্রচুর শব্দ ও বানান ভুল রয়েছে। মূলভাব ভালো করে বোঝার জন্য আরো এক বা দুইবার পড়া যেতে পারে।', '2023-02-17 08:00:06', '2023-02-17 08:00:06'),
(62, 1, 250, '2022-08-14', '2022-08-18', 2, 'কনসেপ্ট ভালো। কিন্ত লেখার ধরণ কিছুটা বোরিং। কাজে লাগাবার মতো কিছু তথ্য পেয়েছি।', '2023-02-17 08:01:05', '2023-02-17 08:01:05'),
(63, 1, 251, '2022-08-20', '2022-08-23', 1, 'দারুণ লেখা। বইটি পড়ে মনে হলো মিশর ভ্রমণটা আমিই করছি। আবারও একবার পড়বো।', '2023-02-17 08:02:12', '2023-02-17 08:02:12'),
(64, 1, 243, '2022-08-24', '2022-08-28', 1, 'চমৎকার লেখা। কালজয়ী একটি উপন্যাস। মধ্যভাগের পরের অংশ বেশি টেনে রেখেছিলো।', '2023-02-17 08:03:02', '2023-02-17 08:03:02'),
(65, 1, 245, '2022-09-12', '2022-09-23', 1, 'সৈয়দ মুজতবা আলীর আরো একটি অনবদ্য ছোটগল্পের সংকলন। ভালো লেগেছে পড়তে।', '2023-02-17 08:03:39', '2023-02-17 08:03:39'),
(66, 1, 244, '2022-10-07', '2022-10-29', 2, 'তথ্যবহুল, তবে প্রবন্ধ গোছের এবং অপেক্ষাকৃত জটিল বাক্যে লেখা বিধায় শুরুর দিক থেকে ০৯ (নয়) টি প্রবন্ধ পড়তে স্বাচ্ছন্দ্য বোধ করিনি। শেষের তিনিটি প্রবন্ধ ভালো লেগেছে, এই তিনটি প্রবন্ধের জন্যই বইটির স্বার্থকতা পরিষ্কার হয়েছে।', '2023-02-17 08:04:38', '2023-02-17 08:04:38'),
(67, 1, 252, '2022-10-13', '2022-10-17', 0, 'বাগেরহাটের মোল্লাহাট উপজেলার শাসন গ্রামের অবসরপ্রাপ্ত শিক্ষক জনাব মোঃ শামছুল ইসলামের স্ব-অভিজ্ঞতা সংক্রান্ত লেখা।', '2023-02-17 08:05:28', '2023-02-17 08:05:28'),
(68, 1, 253, '2022-10-19', '2022-11-01', 1, 'দারুণ কিছু মৌলিক জ্ঞান পেলাম। সহজ ভাষায় লেখা।', '2023-02-17 08:06:30', '2023-02-17 08:06:30'),
(69, 1, 255, '2022-11-02', '2022-11-22', 1, 'চমৎকার। পুরা রচনাসমগ্র খুবই উপভোগ করেছি, তিনটি সপ্তাহ প্রকৃতপক্ষেই তারানাথ চরিত্রে বুদ হয়ে ছিলাম বলা যায়।', '2023-02-17 08:07:18', '2023-02-17 08:07:18'),
(70, 1, 256, '2022-11-15', '2022-11-25', 1, 'দারুণ একটি উপন্যাস। ভিন্ন ধাচের লেখা। আবারও পড়ার মতো রসদ এতে আছে।', '2023-02-17 08:07:56', '2023-02-17 08:07:56'),
(71, 1, 258, '2022-11-23', '2022-11-24', 2, 'অল্প কয়েক পৃষ্ঠার বই। বেশ কিছু নতুন তথ্য জানলাম, তবে লেখা একাডেমিক ধাচের - খুব একটা মানসম্মত নয়।', '2023-02-17 08:08:39', '2023-02-17 08:08:39'),
(72, 1, 242, '2022-11-28', '2022-11-29', 2, 'ভাালো লেগেছে। কাহিনি বেদনাত্মক। ছোট এবং এক দিনে পড়ে শেষ করা যায় এমন একটি উপন্যাস।', '2023-02-17 08:09:17', '2023-02-17 08:09:40'),
(73, 1, 261, '2022-12-01', '2022-12-13', 0, 'লেখা খুবই ভালো, নিখাদ গ্রাম্য উপাখ্যান। তবে এই ধাচের কাব্যিক ঢং এর বর্ননা আমার পড়তে আনন্দ লাগে না।', '2023-02-17 08:10:31', '2023-02-17 08:10:31'),
(74, 1, 204, '2022-12-22', '2022-12-31', 1, 'জীবনকে ভিন্নভাবে চিন্তা করার অনুষঙ্গ যোগাতে পারে এই বইটি।', '2023-02-17 08:11:20', '2023-02-17 08:11:20'),
(75, 1, 260, '2023-01-18', '2023-01-21', 1, 'অসাধারণ একটি বই। ৩-৪ দিন এই বইয়ের ক্যারেক্টারে ডুবে ছিলাম। শেষ করার পর বুকের মধ্যে হু হু করা অনুভূতি হয়েছে।', '2023-02-17 08:12:19', '2023-02-17 08:12:19'),
(76, 1, 262, '2023-01-22', '2023-01-23', 1, 'কাব্য ধাচে লেখা উপন্যাস আমার ভালো লাগে না। কিন্ত জসীম উদ্‌দীন এঁর \"সোজন বাদিয়ার ঘাট\" নিঃসন্দেহে একটি মাস্টারপিস!', '2023-02-17 08:13:09', '2023-02-17 08:13:09'),
(77, 3, 46, '2023-02-17', '2023-02-18', 1, NULL, '2023-02-18 10:18:58', '2023-02-18 10:18:58'),
(79, 1, 46, '2023-03-02', '2023-03-03', 1, '১৯৯৪ সালে লেখা হুমায়ুন আহমেদ এঁর বিজ্ঞান ভিত্তিক কল্পকাহিনী। অল্প সময়ে পড়ে শেষ করা যায়, খারাপ না। গণিতের শিক্ষক মনসুর সাহেব এবং তাঁর কল্পনার ক্যারেক্টার শূণ্য জগত থেকে আসা ফিবোন্নাক্কির আলোচনাগুলো ভালোই লেগেছে।', '2023-03-02 20:49:46', '2023-03-02 20:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request_notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms_agreed` tinyint(1) NOT NULL DEFAULT 0,
  `issued` tinyint(1) NOT NULL DEFAULT 0,
  `returned` tinyint(1) NOT NULL DEFAULT 0,
  `issue_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `admin_notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `user_id`, `book_id`, `mobile`, `address`, `request_notes`, `terms_agreed`, `issued`, `returned`, `issue_date`, `return_date`, `admin_notes`, `created_at`, `updated_at`) VALUES
(4, 3, 82, '01913021608', 'বড় বাজার, চুয়াডাঙ্গা।', NULL, 1, 1, 1, '2023-02-24', '2023-02-28', NULL, '2023-02-24 09:41:45', '2023-02-24 09:43:42'),
(5, 3, 192, '01913021608', 'মসজিদ পাড়া, চুয়াডাঙ্গা।', NULL, 1, 0, 0, NULL, NULL, NULL, '2023-02-24 23:47:39', '2023-02-24 23:47:39');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `title_bn`, `title_en`, `created_at`, `updated_at`) VALUES
(1, 'সংরক্ষিত আছে', 'Stored', '2023-02-06 05:00:57', '2023-02-06 05:00:57'),
(2, 'ধার দেওয়া হয়েছে', 'Lended', '2023-02-06 05:01:28', '2023-02-06 05:01:28'),
(3, 'পড়া হচ্ছে', 'Being Read', '2023-02-06 05:02:28', '2023-02-06 05:02:28'),
(4, 'বিনষ্ট হয়েছে', 'Destroyed', '2023-02-06 05:03:00', '2023-02-06 05:03:00'),
(5, 'হারিয়ে গেছে', 'Lost', '2023-02-06 05:03:20', '2023-02-06 05:03:20'),
(6, 'অফিসে আছে', 'At Office', '2023-02-12 05:31:30', '2023-02-12 05:31:30');

-- --------------------------------------------------------

--
-- Table structure for table `storages`
--

CREATE TABLE `storages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `storages`
--

INSERT INTO `storages` (`id`, `title_bn`, `title_en`, `status`, `created_at`, `updated_at`) VALUES
(6, 'বুক সেলফ - ০১, সারি - ০১', 'Book Shelf - 01, Row - 01', 1, '2023-02-12 05:26:11', '2023-02-12 05:26:11'),
(8, 'বুক সেলফ - ০১, সারি - ০২', 'Book Shelf - 01, Row - 02', 1, '2023-02-12 05:27:23', '2023-02-12 05:27:23'),
(9, 'বুক সেলফ - ০১, সারি - ০৩', 'Book Shelf - 01, Row - 03', 1, '2023-02-12 05:27:41', '2023-02-12 05:27:41'),
(10, 'বুক সেলফ - ০১, সারি - ০৪', 'Book Shelf - 01, Row - 04', 1, '2023-02-12 05:28:06', '2023-02-12 05:28:06'),
(11, 'সাইড কেবিনেট - ০১', 'Side Cabinet - 01', 1, '2023-02-12 05:28:35', '2023-02-12 05:28:35'),
(12, 'বুক সেলফ - ০২, সারি - ০১', 'Book Shelf - 02, Row - 01', 1, '2023-02-12 05:29:04', '2023-02-12 05:29:04'),
(13, 'বুক সেলফ - ০২, সারি - ০২', 'Book Shelf - 02, Row - 02', 1, '2023-02-12 05:29:35', '2023-02-12 05:29:35'),
(14, 'বুক সেলফ - ০২, সারি - ০৩', 'Book Shelf - 02, Row - 03', 1, '2023-02-12 05:29:57', '2023-02-12 05:29:57'),
(15, 'বুক সেলফ - ০২, সারি - ০৪', 'Book Shelf - 02, Row - 04', 1, '2023-02-12 05:30:33', '2023-02-12 05:30:33'),
(16, 'অনির্ধারিত', 'Unset', 1, '2023-02-12 09:30:51', '2023-02-12 09:30:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `name_bn`, `avatar`, `email`, `username`, `email_verified_at`, `password`, `mobile`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md Abdul Kadir', 'মোঃ আব্দুল কাদির', NULL, 'admin@kadir.tech', 'kadirrazu', NULL, '$2y$10$Z1jBRl65PxNp4YcM.xk2.uXgc2h0ydd9edWfgJiFsZcFdj3ZF2kzi', '01911683706', 'administrator', NULL, '2023-01-31 03:01:23', '2023-01-31 03:01:23'),
(2, 'Ramisha Nujhat', 'রামিশা নুজহাত', NULL, 'nujhat@kadir.tech', 'nujhat', NULL, '$2y$10$kUXuSehkjl6zGsxTJaidCu5n/io4TOqk/Wm5U5Jioj64BjsRn/UDq', NULL, 'user', NULL, '2023-01-31 03:01:23', '2023-01-31 03:01:23'),
(3, 'Mousumi Aktar', 'মৌসুমি আক্তার', NULL, 'mousumi.jnu@gmail.com', 'mousumi.jnu', NULL, '$2y$10$fH9mlW/AyzYH0Ojs0EzMeOmPsbk2oFXH2kMiNLINtasberW9tJebq', '01913021608', 'user', NULL, '2023-02-01 01:18:30', '2023-02-01 01:18:30'),
(5, 'Mazeda Khatun', 'মাজেদা খাতুন', NULL, 'sample@kadir.tech', 'majeda', NULL, '$2y$10$zSb1HcytBh8mf.k9uJas6eQDJiUmywC40HRHaNxerUZr/EFSxueF2', '01970021608', 'user', NULL, '2023-02-23 11:03:47', '2023-02-23 11:03:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author_book`
--
ALTER TABLE `author_book`
  ADD KEY `author_book_author_id_foreign` (`author_id`),
  ADD KEY `author_book_book_id_foreign` (`book_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_publisher_id_foreign` (`publisher_id`),
  ADD KEY `books_collection_method_id_foreign` (`collection_method_id`),
  ADD KEY `books_storage_id_foreign` (`storage_id`),
  ADD KEY `books_state_id_foreign` (`state_id`),
  ADD KEY `books_created_by_foreign` (`created_by`),
  ADD KEY `books_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD KEY `book_category_book_id_foreign` (`book_id`),
  ADD KEY `book_category_category_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collection_methods`
--
ALTER TABLE `collection_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favourites_user_id_foreign` (`user_id`),
  ADD KEY `favourites_book_id_foreign` (`book_id`);

--
-- Indexes for table `lends`
--
ALTER TABLE `lends`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lends_book_id_foreign` (`book_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reads`
--
ALTER TABLE `reads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reads_user_id_foreign` (`user_id`),
  ADD KEY `reads_book_id_foreign` (`book_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requests_user_id_foreign` (`user_id`),
  ADD KEY `requests_book_id_foreign` (`book_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storages`
--
ALTER TABLE `storages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=285;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `collection_methods`
--
ALTER TABLE `collection_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `lends`
--
ALTER TABLE `lends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `reads`
--
ALTER TABLE `reads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `storages`
--
ALTER TABLE `storages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `author_book`
--
ALTER TABLE `author_book`
  ADD CONSTRAINT `author_book_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`),
  ADD CONSTRAINT `author_book_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`);

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_collection_method_id_foreign` FOREIGN KEY (`collection_method_id`) REFERENCES `collection_methods` (`id`),
  ADD CONSTRAINT `books_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `books_publisher_id_foreign` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`id`),
  ADD CONSTRAINT `books_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `books_storage_id_foreign` FOREIGN KEY (`storage_id`) REFERENCES `storages` (`id`),
  ADD CONSTRAINT `books_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `book_category`
--
ALTER TABLE `book_category`
  ADD CONSTRAINT `book_category_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `book_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `favourites`
--
ALTER TABLE `favourites`
  ADD CONSTRAINT `favourites_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `favourites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `lends`
--
ALTER TABLE `lends`
  ADD CONSTRAINT `lends_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`);

--
-- Constraints for table `reads`
--
ALTER TABLE `reads`
  ADD CONSTRAINT `reads_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `reads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `requests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
