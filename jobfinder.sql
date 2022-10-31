-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 31, 2022 at 06:55 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_logo` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keyword` varchar(1000) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_author` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_gsm` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mesai` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitter` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_instagram` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mapurl` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_title`, `ayar_description`, `ayar_keyword`, `ayar_author`, `ayar_gsm`, `ayar_mail`, `ayar_adres`, `ayar_mesai`, `ayar_facebook`, `ayar_twitter`, `ayar_instagram`, `ayar_mapurl`) VALUES
(0, 'images/24338kariyer.JPG', 'Kariyer', 'İŞ,STAJ,MESLEK BULMAK İÇİN TAM YERİNDESİNİZ ', 'İŞ,STAJ,MESLEK ', 'Muhammed Gider', '00000000000 ', 'muhammed.gideer@gmail.com ', 'kariyer.com', 'açılış:sabah:06.00  kapanış:gece 01.00', 'www.facebook.com        ', 'www.twitter.com   ', 'www.google.com            ', 'https://www.google.com/maps');

-- --------------------------------------------------------

--
-- Table structure for table `basvurular`
--

CREATE TABLE `basvurular` (
  `basvur_id` int(11) NOT NULL,
  `basvur_ad` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `basvur_soyad` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `basvur_tel` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `basvur_mail` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `basvur_adres` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `basvur_cinsiyet` int(11) NOT NULL,
  `basvur_egitim` int(11) NOT NULL,
  `basvur_cv` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `basvur_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `basvur_ilanid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `basvurular`
--

INSERT INTO `basvurular` (`basvur_id`, `basvur_ad`, `basvur_soyad`, `basvur_tel`, `basvur_mail`, `basvur_adres`, `basvur_cinsiyet`, `basvur_egitim`, `basvur_cv`, `basvur_tarih`, `basvur_ilanid`) VALUES
(1, 'orhan', 'koyunbakan', '05374866105', 'orhan@gmail.com', 'orhan@gmail.com', 0, 4, 'images/cv/23610246472204528418', '2022-06-03 03:23:16', 6),
(2, 'sefer', 'rkejfdhujh', 'frebj', 'sefer@gmail.com', 'ffdyujhfbe r fre egf g', 0, 2, 'images/cv/27869259052689320361', '2022-06-03 03:26:07', 5),
(3, 'sefer', 'rkejfdhujh', 'frebj', 'sefer@gmail.com', 'ffdyujhfbe r fre egf g', 0, 2, 'images/cv/26004273983134520342', '2022-06-03 03:26:40', 5),
(4, 'gtr', 'g42refg2re', 'g2re', 'a@gmail.comm', 'freds', 1, 1, 'images/cv/27678306482339724893', '2022-06-03 03:29:19', 5),
(5, 'Muhammed', 'Gider', '05522953463', 'muhammed.gideer@gmail.com', 'Kaynarca', 0, 4, 'images/cv/22259279712943630854', '2022-10-28 18:04:20', 5),
(6, 'Muhammed', 'Gider', '05522953463', 'muhammed.gideer@gmail.com', 'Kaynarca', 0, 4, 'images/cv/29319266472143726853', '2022-10-31 06:45:51', 12);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_ad` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `blog_aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `blog_resimyol` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `blog_konu` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `blog_sira` int(11) NOT NULL,
  `blog_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_ad`, `blog_aciklama`, `blog_resimyol`, `blog_konu`, `blog_sira`, `blog_tarih`) VALUES
(6, 'Footprints in Time is perfect House in Kurashikiiiii', '<p><strong>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</strong></p>\r\n\r\n<p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>\r\n\r\n<p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>\r\n', 'images/blog/20956243862377127064home-blog1.jpg', 'EKONOMİ', 1, '2022-06-02 19:53:47'),
(7, 'En yeni teknolojiler sizin karşınızda jobfinder', '<h3><strong><em>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</em></strong></h3>\r\n\r\n<p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>\r\n\r\n<h2>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</h2>\r\n', 'images/blog/27882312402955127556home-blog2.jpg', 'JOBFİNDER', 2, '2022-06-02 19:53:47'),
(8, 'Footprints in Time is perfect House in Kurashikiiiii', '<p><strong>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</strong></p>\r\n\r\n<p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>\r\n\r\n<p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>\r\n', 'images/blog/20956243862377127064home-blog1.jpg', 'EKONOMİ', 1, '2022-06-02 19:53:47'),
(9, 'En yeni teknolojiler sizin karşınızda jobfinder', '<h3><strong><em>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</em></strong></h3>\r\n\r\n<p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>\r\n\r\n<h2>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</h2>\r\n', 'images/blog/27882312402955127556home-blog2.jpg', 'JOBFİNDER', 2, '2022-06-02 19:53:47');

-- --------------------------------------------------------

--
-- Table structure for table `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL DEFAULT '0',
  `hakkimizda_yazisi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_resimyol` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_yazisi`, `hakkimizda_resimyol`) VALUES
(1, '<p><strong>Bu platfrom aracılığıyla estetik ve kullanımı kolay şekilde iş ve staj başvuruları yapabilirsiniz.</strong></p>\r\n', 'images/hakkimizda/29694223242777523227kariyer.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `ilanlar`
--

CREATE TABLE `ilanlar` (
  `ilan_id` int(11) NOT NULL,
  `ilan_ad` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ilan_aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ilan_sehir` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ilan_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ilan_calisma_sekli` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ilan_pozisyon` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ilan_kategoriid` int(11) NOT NULL,
  `ilan_ucret` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ilan_sirketid` int(11) NOT NULL,
  `ilan_tur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `ilanlar`
--

INSERT INTO `ilanlar` (`ilan_id`, `ilan_ad`, `ilan_aciklama`, `ilan_sehir`, `ilan_tarih`, `ilan_calisma_sekli`, `ilan_pozisyon`, `ilan_kategoriid`, `ilan_ucret`, `ilan_sirketid`, `ilan_tur`) VALUES
(7, 'Django projeleri geliştirici', '<p><strong>What Are We Looking For?</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>At least 3+ years of experience in the field,</li>\r\n	<li>Can write sustainable, scalable and high quality, well-tested code</li>\r\n	<li>Having advanced knowledge of Javascript and Typescript,</li>\r\n	<li>Experienced in React / Node.js / Vue.js frameworks,</li>\r\n	<li>Developing a mobile project with React Native,</li>\r\n	<li>Familiar with NoSQL databases such as Firebase, Redis, MongoDB, ElasticSearch,</li>\r\n	<li>Developed projects with AWS and/or Google Cloud,</li>\r\n	<li>Experienced in CI / CD Processes,</li>\r\n	<li>Participated in projects managed with Agile / Scrum,</li>\r\n	<li>Actively using Git,</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>It Would Be Great!</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Having developed/used API with GraphQL,</li>\r\n	<li>Developing a project with JAMStack architecture,</li>\r\n	<li>Developing projects in new generation SSR frameworks such as Nuxt.js, Next.js,</li>\r\n	<li>Having developed a project in the field of payment systems/e-commerce.</li>\r\n</ul>\r\n', 'Ankara', '2022-10-31 06:31:52', 'Tam zamanlı', 'Uzman', 1, '13500', 3, 0),
(8, 'Python projeleri geliştirici', '<p>A Bit About Us</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Headquartered in Ankara with satellite offices in Istanbul and London, we are an ASELSAN certified defense contractor that provides advanced systems and services for commercial, military and government customers worldwide. We specialize in wireless communication, signal processing algorithms, communication protocols, RF/Digital PCB design, HF/VHF/UHF signal recording and spectrum tracking systems.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Established in 2015, our team is comprised of 3 PhDs, 9 MSc, and over 20 expert engineers from diverse backgrounds, and among us we have over 100 years of experience. Together we have completed over 10 major projects ranging from Network Monitoring Systems to IOT systems for notable customers such as Innova, Tubitak, Aselsan, T&uuml;rk Telekom, and the Republic of Turkey Ministry of Industry and Technology.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>With new exciting projects coming up, we have multiple Software Engineer openings across various teams. We&rsquo;re looking for self-motivated people who are willing to learn new programming languages, tools and technologies.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Why join us?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>We are an innovative company embracing new technologies constantly</li>\r\n	<li>We provide room for growth and collaboration opportunities with expert engineers and experienced managers</li>\r\n	<li>We have competitive compensation and excellent benefits</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Basic Qualifications:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>BS/MS degree in Computer Science, Software Engineering or a related subject</li>\r\n	<li>Proven hands-on software development experience</li>\r\n	<li>Working knowledge in one or more general purpose programming languages:Java,Python,C/C++,JavaScript</li>\r\n	<li>Object oriented analysis and design using common design patterns</li>\r\n	<li>0+ years of experience</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Preferred Qualifications:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Experience in C/C++ and Qt</li>\r\n	<li>Non-relational databases (MongoDB)</li>\r\n	<li>Relational databases (MYSQL or PostgreSQL)</li>\r\n	<li>Microservice architecture</li>\r\n	<li>Experience in VOIP communication and Session Initiation Protocol (SIP)</li>\r\n	<li>Experience in Cloud Computing</li>\r\n</ul>\r\n', 'İstanbul', '2022-10-31 06:38:09', 'Part Time', 'Uzman yardımcısı', 7, '13000', 4, 0),
(9, 'Django projeleri geliştirici stajyeri', '<p><strong>What Are We Looking For?</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>At least 3+ years of experience in the field,</li>\r\n	<li>Can write sustainable, scalable and high quality, well-tested code</li>\r\n	<li>Having advanced knowledge of Javascript and Typescript,</li>\r\n	<li>Experienced in React / Node.js / Vue.js frameworks,</li>\r\n	<li>Developing a mobile project with React Native,</li>\r\n	<li>Familiar with NoSQL databases such as Firebase, Redis, MongoDB, ElasticSearch,</li>\r\n	<li>Developed projects with AWS and/or Google Cloud,</li>\r\n	<li>Experienced in CI / CD Processes,</li>\r\n	<li>Participated in projects managed with Agile / Scrum,</li>\r\n	<li>Actively using Git,</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>It Would Be Great!</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Having developed/used API with GraphQL,</li>\r\n	<li>Developing a project with JAMStack architecture,</li>\r\n	<li>Developing projects in new generation SSR frameworks such as Nuxt.js, Next.js,</li>\r\n	<li>Having developed a project in the field of payment systems/e-commerce.</li>\r\n</ul>\r\n', 'Ankara', '2022-10-31 06:31:52', 'Tam zamanlı', 'Stajyer', 1, '7800', 3, 1),
(10, 'Python projeleri geliştirici stajyeri', '<p>A Bit About Us</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Headquartered in Ankara with satellite offices in Istanbul and London, we are an ASELSAN certified defense contractor that provides advanced systems and services for commercial, military and government customers worldwide. We specialize in wireless communication, signal processing algorithms, communication protocols, RF/Digital PCB design, HF/VHF/UHF signal recording and spectrum tracking systems.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Established in 2015, our team is comprised of 3 PhDs, 9 MSc, and over 20 expert engineers from diverse backgrounds, and among us we have over 100 years of experience. Together we have completed over 10 major projects ranging from Network Monitoring Systems to IOT systems for notable customers such as Innova, Tubitak, Aselsan, T&uuml;rk Telekom, and the Republic of Turkey Ministry of Industry and Technology.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>With new exciting projects coming up, we have multiple Software Engineer openings across various teams. We&rsquo;re looking for self-motivated people who are willing to learn new programming languages, tools and technologies.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Why join us?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>We are an innovative company embracing new technologies constantly</li>\r\n	<li>We provide room for growth and collaboration opportunities with expert engineers and experienced managers</li>\r\n	<li>We have competitive compensation and excellent benefits</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Basic Qualifications:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>BS/MS degree in Computer Science, Software Engineering or a related subject</li>\r\n	<li>Proven hands-on software development experience</li>\r\n	<li>Working knowledge in one or more general purpose programming languages:Java,Python,C/C++,JavaScript</li>\r\n	<li>Object oriented analysis and design using common design patterns</li>\r\n	<li>0+ years of experience</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Preferred Qualifications:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Experience in C/C++ and Qt</li>\r\n	<li>Non-relational databases (MongoDB)</li>\r\n	<li>Relational databases (MYSQL or PostgreSQL)</li>\r\n	<li>Microservice architecture</li>\r\n	<li>Experience in VOIP communication and Session Initiation Protocol (SIP)</li>\r\n	<li>Experience in Cloud Computing</li>\r\n</ul>\r\n', 'İstanbul', '2022-10-31 06:38:09', 'Part Time', 'Stajyer', 7, '8000', 4, 1),
(11, '.Net projeleri geliştirici', '<p>Asseco SEE Turkey is looking for Software Developer who will take part in the development team. If you are motivated to work for a</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&middot; Developing,</p>\r\n\r\n<p>&middot; Fast growing,</p>\r\n\r\n<p>&middot; Challenging,</p>\r\n\r\n<p>&middot; Highly innovative,</p>\r\n\r\n<p>&middot; International company with own solutions,</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>We would love to meet you!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Why is this job exciting: As a Software Developer you will;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Has desire to be part of a team that owns a good product and make it better in DevOps enviroment</li>\r\n	<li>Design, code, test, document and maintain software solutions using C#, .Net Core, ASP.Net, React and Javascript</li>\r\n	<li>Work closely with all team members to interpret and evolve requirements into product features</li>\r\n	<li>Demostrate a mastery of object-oriented design practices and patterns</li>\r\n	<li>Want to be a part of always learning and growing organization</li>\r\n	<li>Be part of all aspects of our software product - architecture, quality, user experience</li>\r\n	<li>Collaborate with international development teams when required</li>\r\n	<li>We&#39;re always looking for ways to do things better, so you&#39;ll be encouraged to take on projects that do that</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>We are looking for someone who has:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>At least 3 years of development experience with C#</li>\r\n	<li>Programming using Visual Studio C# , MS SQL database,</li>\r\n	<li>Required: C#, ASP.NET, MVC 5.0 , SQL, Javascript</li>\r\n	<li>Nice to have: .NET CORE, React</li>\r\n	<li>BS or MS in Software Engineering, Computer Science or Engineering or related fields</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>What do we offer:</p>\r\n\r\n<p>&middot; Opportunity to work within an international environment and new technologies</p>\r\n\r\n<p>&middot; Work within a growing team of professionals from which you can learn constantly,</p>\r\n\r\n<p>&middot; Self-Development opportunities; annual training budget</p>\r\n', 'Edirne', '2022-10-31 06:42:48', 'Tam zamanlı', 'Uzman Yardımcısı', 8, '13000', 5, 0),
(12, 'C++ projeleri geliştirici', '<p>Finansal yazılım sekt&ouml;r&uuml;nde faaliyet g&ouml;steren iş ortağımız i&ccedil;in C++ Developer &amp; Team Leader arayışımız mevcuttur.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Gereksinimler:</p>\r\n\r\n<ul>\r\n	<li>İleri seviye C/C++ bilgisine sahip (En az 10 yıl tecr&uuml;be)</li>\r\n	<li>Intel ve AMD chipsetlerin &ccedil;alışma prensipleri hakkında bilgi sahib</li>\r\n	<li>CPU cache bellek yapıları hakkında bilgi sahibi</li>\r\n	<li>Windows ve/veya Linux işletim sistemlerinde performans odaklı işlemci/&ccedil;ekirdek kullanımı hakkında bilgi sahibi</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>G&ouml;rev Tanımı:</p>\r\n\r\n<ul>\r\n	<li>Finans sekt&ouml;r&uuml; i&ccedil;in geliştirilmiş veri iletim uygulamanın C++ ile yeniden yazılarak daha performanslı &ccedil;alışmasını sağlamak</li>\r\n</ul>\r\n', 'İzmir', '2022-10-31 06:44:23', 'Part Time', 'Uzman', 9, '12500', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kategoriler`
--

CREATE TABLE `kategoriler` (
  `kategori_id` int(11) NOT NULL,
  `kategori_ad` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kategori_ilansys` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `kategoriler`
--

INSERT INTO `kategoriler` (`kategori_id`, `kategori_ad`, `kategori_ilansys`) VALUES
(1, 'Django Projeleri geliştirici', 3),
(7, 'Python projeleri geliştirici', 2),
(8, '.Net projeleri geliştirici', 0),
(9, 'C++ projeleri geliştirici', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sirketler`
--

CREATE TABLE `sirketler` (
  `sirket_id` int(11) NOT NULL,
  `sirket_ad` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sirket_aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sirket_resimyol` varchar(1000) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sirket_website` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sirket_mail` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `sirketler`
--

INSERT INTO `sirketler` (`sirket_id`, `sirket_ad`, `sirket_aciklama`, `sirket_resimyol`, `sirket_website`, `sirket_mail`) VALUES
(3, 'Şirket A', 'Sosyal medya da bir numara bir şirket', 'images/sirket/23398275982846921163job-list1.png', 'sirketa.com', 'sirketa@gmail.com'),
(4, 'Şirket B', 'Şirket B 1980 yılında kuruldu', 'images/sirket/26112214332747928977twitter-icon.png', 'sirketb.com', 'sirketb@gmail.com'),
(5, 'Şirket C', 'Şirket C bir startuptır', 'images/sirket/26502306852663920488job-list2.png', 'sirketc.com', 'sirketc@gmail .com');

-- --------------------------------------------------------

--
-- Table structure for table `uye`
--

CREATE TABLE `uye` (
  `uye_id` int(11) NOT NULL,
  `uye_zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `uye_ad` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `uye_soyad` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `uye_tc` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uye_mail` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `uye_password` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `uye_sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uye_token` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uye_durum` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  `uye_yetki` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `uye`
--

INSERT INTO `uye` (`uye_id`, `uye_zaman`, `uye_ad`, `uye_soyad`, `uye_tc`, `uye_mail`, `uye_password`, `uye_sifre`, `uye_token`, `uye_durum`, `uye_yetki`) VALUES
(10, '2022-06-08 16:42:42', 'Muhammed', 'Gider', '21366666640', 'muhammed.gideer@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '1234567', 'jo3qfux706', '1', 1),
(11, '2022-04-22 02:16:07', 'Muhammed', 'GİDER', '', 'muhammed@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '1234567', '1ptg7snhwz', '1', 5),
(12, '2022-10-30 00:45:11', 'Muhammed', 'Gider', '', 'muhammedd@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '1234567', '', '1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Indexes for table `basvurular`
--
ALTER TABLE `basvurular`
  ADD PRIMARY KEY (`basvur_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Indexes for table `ilanlar`
--
ALTER TABLE `ilanlar`
  ADD PRIMARY KEY (`ilan_id`);

--
-- Indexes for table `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `sirketler`
--
ALTER TABLE `sirketler`
  ADD PRIMARY KEY (`sirket_id`);

--
-- Indexes for table `uye`
--
ALTER TABLE `uye`
  ADD PRIMARY KEY (`uye_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ayar`
--
ALTER TABLE `ayar`
  MODIFY `ayar_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `basvurular`
--
ALTER TABLE `basvurular`
  MODIFY `basvur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ilanlar`
--
ALTER TABLE `ilanlar`
  MODIFY `ilan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sirketler`
--
ALTER TABLE `sirketler`
  MODIFY `sirket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `uye`
--
ALTER TABLE `uye`
  MODIFY `uye_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
