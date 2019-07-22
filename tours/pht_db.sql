-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2017 at 07:11 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pht_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `title`, `body`) VALUES
(1, 'How did we get started?', '<p>\r\n          We have such a passion for the city we live in. For over 33 years we have offered tours for Portland visitors and residents alike through our family business. Having family in Portland since the early 1900\'s has allowed us to build tours out of insight over 100 years. We are confident you will love any of our Portland tours with the help of our generous guides. We offer three tours: the Downtown, the Growth, and the Landmarks tour. Our favorites are the Downtown and Landmarks but with Portland\'s current growth we are selling out our Growth tours.<br><br>We hope to meet you soon! Let us know if you have any questions by visiting the <a href=\"/cas225/portlandhistoricaltours/contact\">Contact page.</a><br><br>Thank you!\r\n        </p>');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `first_name` text,
  `last_name` text,
  `email` text,
  `phone` text,
  `date` date DEFAULT NULL,
  `participants` text,
  `tour` text,
  `sensitivities` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `testimonial` text NOT NULL,
  `author` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `testimonial`, `author`) VALUES
(1, '\"It was amazing to walk around downtown Portland comparing the images in the booklet to the current building or in some cases disappearance of a building.\"', 'Emily'),
(2, '\"I moved to Portland a few years ago and learned so much from our funny and informative tour guide on the evolution of Portland as I know it today.\"', 'Alex'),
(3, '\"We were only in town for a day and decided to make the most of it with a tour. We covered almost the entire city. I couldn\'t have done that alone and our tour guide was so fun!\"', 'Beatrix');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

DROP TABLE IF EXISTS `tours`;
CREATE TABLE `tours` (
  `id` int(11) NOT NULL,
  `tour` text NOT NULL,
  `body` text NOT NULL,
  `duration` text NOT NULL,
  `transportation` text NOT NULL,
  `food` text NOT NULL,
  `price` int(11) NOT NULL,
  `included` text NOT NULL,
  `testimonialid` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `tour`, `body`, `duration`, `transportation`, `food`, `price`, `included`, `testimonialid`, `image`) VALUES
(1, 'Downtown', 'Enjoy a walking tour of Portland\'s days gone by. This walking only tour provides a glimpse into the natural, architectural, and cultural history of downtown Portland. Upon arrival, you will receive a booklet of the 20 locations we will visit throughout this three hour tour. Use this booklet to compare Portland\'s current landscape with accurate historical context.', '2 Hours', 'Walking', 'None', 50, '<li>Complimentary tour booklet with Before and After photos and a brief history of each location</li>\r\n<li>Complimentary water</li>', 1, 'images/downtowntoursmall.png'),
(2, 'Growth', 'Want to jump into Portland\'s rich history of growth? This tour offers an insightful experience, by our very educated tour guides, about the history of Portland\'s growth. While this tour includes walking and driving most conversations will take place at Deschutes Brewery over complimentary beer flights and complimentary dining at Portland\'s oldest restaurant, Huber\'s.', '3 Hours', 'Walking/Driving', 'Included', 80, '<li>Complimentary flight of three Deschutes Brewery beers</li>\r\n<li>Complimentary tapas style appetizer at Huber\'s restaurant</li>', 2, 'images/growthtoursmall.png'),
(3, 'Landmarks', 'This tour will help you cement your Portland knowledge and cover all of Portland\'s famous landmarks and must see spots. We use a spacious shuttle bus to travel around Portland\'s quadrants and famous bridges. When you finish the tour, you can tell everyone that you\'ve seen it all in Portland.', '4 Hours', 'Walking/Driving', 'Included', 70, '<li>Complimentary tour booklet with photos and brief descriptions of the locations we visit</li>\r\n<li>Complimentary local snacks</li>', 3, 'images/landmarkstoursmall.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
