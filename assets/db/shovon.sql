-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2020 at 06:31 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shovon`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `send_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `send_date`) VALUES
(1, 'Mohammad Shahabuddin', 'shahabuddin650@gmail.com', 'Intern methodology', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo', '2020-01-18 12:07:58'),
(2, 'Mohammad Shahabuddin', 'shahabuddin650@gmail.com', 'Intern methodology', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo', '2020-01-18 12:20:25');

-- --------------------------------------------------------

--
-- Table structure for table `get_touch`
--

CREATE TABLE `get_touch` (
  `id` int(11) NOT NULL,
  `icon` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `text` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `get_touch`
--

INSERT INTO `get_touch` (`id`, `icon`, `name`, `text`) VALUES
(1, '<i class=\"lni-map-marker\"></i>', 'Address', 'Painadi Natun Mahalla, Near Kolshi Building, Shiddhirgonj, Narayangonj-1430.'),
(2, '<i class=\"lni-phone\"></i>', 'Phone', '+88015 2156 9197 <br>+88018 1212 748'),
(3, '<i class=\"lni-envelope\"></i>', 'Email', 'smshovon1995@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `nav`
--

CREATE TABLE `nav` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nav`
--

INSERT INTO `nav` (`id`, `name`) VALUES
(1, 'about'),
(2, 'services'),
(3, 'portfolio'),
(4, 'contact');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `icon` text NOT NULL,
  `details` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `icon`, `details`) VALUES
(1, 'Logo &amp; Branding', 'Logo-&-Branding.png', 'A logo is an easily recognizable, reproducible design element, often including a name, symbol, specified colors or trademark.'),
(2, 'Print Desig', 'print-design2.png', 'Print design, a subset of graphic design, is a form of visual communication used to convey information to an audience.'),
(3, 'Product &amp; Merchandise', 'merchandise.png', 'Product Designer responsibilities include defining product specifications, creating digital or print drawings.'),
(4, 'Art &amp; Illustration', 'illustration.png', 'An illustration is a drawing, painting or printed work of art which explains, clarifies, illuminates, visually represents.'),
(5, 'Web', 'web-design.png', 'A designer creates the look, layout &amp; features of a website. The job involves understanding both graphic design and computer programming.'),
(6, 'Business &amp; Advertising', 'Advertising.png', 'Advertising provides a direct line of communication to your existing and prospective customers about your product or service.');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `name`, `percentage`) VALUES
(1, 'PHOTOSHOP', 80),
(2, 'ILLUSTRATOR', 85),
(3, 'AFTER EFFECTS', 40),
(4, 'Sketch', 60);

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `image_2` text NOT NULL,
  `link` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `cat_id`, `name`, `image`, `image_2`, `link`) VALUES
(1, 0, 'Product Design', 'w-1.jpg', 'w-1.jpg', 'https://www.behance.net/gallery/78579567/Pohela-Boishakh-Invitation-card'),
(2, 1, 'Product Design', 'w-2.jpg', 'w-2.jpg', 'https://www.behance.net/gallery/79744903/Trifold-IT-Company-Brochure'),
(3, 1, 'Product Design', 'w-3.jpg', 'w-3.jpg', 'https://www.behance.net/gallery/70839631/Logo-Design'),
(4, 1, 'Product Design', 'w-4.jpg', 'w-4.jpg', 'https://www.behance.net/gallery/78083523/Free-Flyer-Template-Mockup'),
(5, 1, 'Product Design', 'w-5.jpg', 'w-5.jpg', 'https://www.behance.net/gallery/84202261/Dangler-Design'),
(6, 1, '', 'w-6.jpg', 'w-6.jpg', 'https://www.behance.net/gallery/72919661/Real-Estate-Logo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `get_touch`
--
ALTER TABLE `get_touch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nav`
--
ALTER TABLE `nav`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `get_touch`
--
ALTER TABLE `get_touch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nav`
--
ALTER TABLE `nav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
