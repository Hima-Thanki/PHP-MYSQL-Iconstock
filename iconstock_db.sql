-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 08:20 AM
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
-- Database: `iconstock_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(6, 'a', 'a', 'a@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
(7, 'hima', 'thanki', 'h@gmail.com', '14b85b0752eddc5f25217386e3c6bf22'),
(8, 'sona', 'balu nair', 's@gmail.com', '99cd3843754d20ec3c5885d805db8a32');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(20) NOT NULL,
  `uid` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(10) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `uid`, `name`, `email`, `message`) VALUES
(1, 3, 'Mina', 'mina@gmail', 'hello can i get xyz developer contact number ?'),
(9, 2, 'sita', 'sita@gmail', 'hello can i get new icons ?'),
(11, 4, 'jiya', 'jiya123@gm', 'Hello this is testing msg..');

-- --------------------------------------------------------

--
-- Table structure for table `forum_answer`
--

CREATE TABLE `forum_answer` (
  `id` int(10) NOT NULL,
  `que_id` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum_answer`
--

INSERT INTO `forum_answer` (`id`, `que_id`, `uid`, `answer`) VALUES
(1, 1, 2, 'not now, because it is not implemented yet. check after some days.'),
(2, 1, 1, 'yes,Check in the categories section.'),
(3, 2, 1, 'No, this feature is paid..'),
(4, 2, 1, 'You have to pay for this...'),
(5, 1, 1, 'yes,  you can. iconstock provide all unique icons'),
(7, 2, 37, 'i ageree.');

-- --------------------------------------------------------

--
-- Table structure for table `forum_q`
--

CREATE TABLE `forum_q` (
  `id` int(10) NOT NULL,
  `uid` int(11) NOT NULL,
  `question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum_q`
--

INSERT INTO `forum_q` (`id`, `uid`, `question`) VALUES
(1, 3, 'hello, can I get festival icons from this website?'),
(2, 4, 'hi, can i customize animated icon free? '),
(3, 1, 'can i talk with developers ?');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `i_id` int(12) NOT NULL,
  `i_name` varchar(20) NOT NULL,
  `i_desc` varchar(2000) NOT NULL,
  `i_img` varchar(20) NOT NULL,
  `i_cat` varchar(50) NOT NULL,
  `i_type` varchar(10) NOT NULL,
  `i_style` varchar(15) NOT NULL,
  `dev_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`i_id`, `i_name`, `i_desc`, `i_img`, `i_cat`, `i_type`, `i_style`, `dev_name`) VALUES
(1, 'mail', 'uploaded by Admin...', 'mail.png', 'sm', 's', 'c', 'Admin'),
(2, 'call', 'uploaded by Admin...', 'call.png', 'sm', 's', 'c', 'Admin'),
(3, 'abstract-shape', 'uploaded by Jiya...\"', 'abstract-shape.png', 'shape', 's', 'c', 'Jiya'),
(4, 'Minus big symbol', 'uploaded by Admin..', 'minus-big-symbol.png', 'shape', 's', 'f', 'Sita'),
(11, 'Debit card', 'uploaded by Admin..', 'debit-card.gif', 'eco', 'a', 'l', 'Jiya'),
(12, 'Shopping cart', 'Uploaded by Admin..', 'shopping-cart.png', 'eco', 's', 'c', 'Jiya'),
(13, 'Shopping bag', 'Uploaded by Admin..', 'shopping-bag.gif', 'eco', 'a', 'l', 'Jiya'),
(14, 'Amazon shopping app', 'uploaded by admin...', 'amazon-shopping.png', 'eco', 's', 'l', 'Jiya'),
(15, 'Instagram', 'uploaded by Admin..', 'instagram.gif', 'sm', 'a', 'l', 'Jiya'),
(17, 'Database', 'uploaded by Admin', 'database.gif', 'db', 'a', 'l', ''),
(18, 'Database', 'uploaded by Admin..', 'database1.png', 'db', 's', 'c', ''),
(19, 'SQL', 'uploaded by Admin..', 'sql.png', 'db', 's', 'c', ''),
(20, 'Copy', 'uploaded', 'copy.gif', 'db', 'a', 'l', 'Jiya'),
(21, 'database', 'j', 'database2.png', 'db', 's', 'f', ''),
(22, 'GDPR database', 'H', 'gdpr-database.png', 'db', 's', 'l', ''),
(23, 'Update', 'h', 'update.png', 'db', 's', 'c', 'Jiya'),
(24, 'Cloud data', 'h', 'cloud-data.png', 'db', 's', 'f', ''),
(25, 'Folder', 'h', 'folder.png', 'file', 's', 'f', 'Jiya'),
(26, '3 - folder', 'h', '3 - folder.png', 'file', 's', 'c', 'Mira'),
(27, 'Setting', 'u', 'setting.gif', 'file', 'a', 'l', 'Mira'),
(28, 'Inbox', 'h', 'inbox.gif', 'file', 'a', 'l', 'Jiya'),
(29, 'PDF', 'j', 'pdf.png', 'file', 's', 'c', 'Mira'),
(30, 'File', 'h', 'file.png', 'file', 's', 'c', 'Jiya'),
(31, 'Bin', 'j', 'bin.gif', 'file', 'a', 'l', 'Mira'),
(32, 'Camera folder', 'h', 'camera-folder.gif', 'file', 'a', 'l', 'Mira'),
(33, 'LAN', 'h', 'lan.png', 'acc', 's', 'c', 'Mira'),
(34, 'Party hat', 'j', 'party-hat.gif', 'acc', 'a', 'l', ''),
(35, 'Accessory', 'b', 'accessory.png', 'acc', 's', 'f', ''),
(36, 'Pets', '', 'pets.png', 'acc', 's', 'c', ''),
(37, 'Hand bag', 'j', 'hand-bag.gif', 'acc', 'a', 'l', ''),
(38, 'Shoes', 'b', 'shoes.gif', 'acc', 'a', 'l', ''),
(39, 'Jewelry', 'h', 'jewelry.png', 'acc', 's', 'c', ''),
(40, 'Santa claus', 'j', 'santa-claus.gif', 'acc', 'a', 'l', ''),
(41, 'Diet', 'h', 'diet.png', 'food', 's', 'c', ''),
(42, 'Cooking', 'h', 'cooking.gif', 'food', 'a', 'l', ''),
(43, 'Balanced diet', 'b', 'balanced-diet.png', 'food', 's', 'c', ''),
(44, 'Ramen', 'h', 'ramen.png', 'food', 's', 'c', ''),
(45, 'Coffee cup', 'h', 'coffee-cup.gif', 'food', 'a', 'l', ''),
(46, 'Cake', 'g', 'cake.gif', 'food', 'a', 'l', ''),
(47, 'Food packet', 'food-packet', 'food-packet.png', 'food', 's', 'c', ''),
(48, 'water', 'h', 'water.gif', 'food', 'a', 'l', ''),
(49, 'Shopping cart', 'g', 'grocery-store.png', 'eco', 's', 'f', ''),
(50, 'Pay card', 'j', 'pay-card.png', 'eco', 's', 'c', ''),
(51, 'wish-list', 'h', 'wish-list.png', 'eco', 's', 'l', 'Mira'),
(52, 'chevron', 'j', 'chevron.gif', 'arrow', 'a', 'l', 'Mira'),
(53, 'uninstalling updates', 'uninstalling-updates', 'uninstalling.gif', 'arrow', 'a', 'l', ''),
(54, 'Move', 'uninstalling-updates', 'move.png', 'arrow', 's', 'c', ''),
(55, 'Buy upgrade', 'buy-upgrade', 'buy-upgrade.gif', 'arrow', 'a', 'l', ''),
(56, 'Arrow down', 'arrow-down', 'arrow-down.png', 'arrow', 's', 'c', ''),
(57, 'abstract', 'abstract', 'abstract.png', 'shape', 's', 'c', ''),
(58, 'diamond', 'diamond', 'diamond.gif', 'shape', 'a', 'l', ''),
(59, 'star', 'star', 'star.gif', 'shape', 'a', 'f', ''),
(60, 'abstract shape', 'abstract-shape1', 'abstract-shape1.png', 'shape', 's', 'c', ''),
(61, 'facebook', 'facebook', 'facebook.png', 'sm', 's', 'c', 'Mira'),
(62, 'social-media', 'social-media', 'social-media.gif', 'sm', 'a', 'l', ''),
(63, 'youtube', 'youtube', 'youtube.png', 'sm', 's', 'c', ''),
(64, 'share', 'share', 'share.gif', 'sm', 'a', 'l', ''),
(65, 'User', 'user', 'user.gif', 'sm', 'a', 'l', ''),
(66, 'Diagram', 'diagram', 'diagram.gif', 'shape', 'a', 'l', ''),
(67, 'video_play', 'desc', 'video_play.gif', 'sm', 'a', 'l', ''),
(68, 'accessibility', 'desc', 'accessibility.gif', 'sm', 'a', 'f', ''),
(69, 'account', 'desc', 'account.gif', 'sm', 'a', 'l', ''),
(70, 'chat', 'desc', 'chat.gif', 'sm', 'a', 'l', ''),
(71, 'linkedin', 'desc', 'linkedin.png', 'sm', 's', 'c', ''),
(72, 'pattern', 'desc', 'pattern.png', 'shape', 's', 'l', 'Mira'),
(73, 'cylinder', 'desc', 'cylinder.png', 'shape', 's', 'l', ''),
(74, 'star-symbol', 'desc', 'star-symbol.png', 'shape', 's', 'f', ''),
(75, 'enso', 'desc', 'enso.png', 'shape', 's', 'c', ''),
(76, 'geometric', 'desc', 'geometric.png', 'shape', 's', 'l', ''),
(77, 'rhombus', 'desc', 'rhombus.png', 'shape', 's', 'f', ''),
(79, 'right-arrow', 'desc', 'right-arrow.png', 'arrow', 's', 'f', ''),
(80, 'right-arrow', 'desc', 'right-arrow2.png', 'arrow', 's', 'c', ''),
(81, 'right-arrow-angle', 'desc', 'right-arrow1.png', 'arrow', 's', 'c', ''),
(82, 'left-arrow', 'desc', 'left-arrow.png', 'arrow', 's', 'c', ''),
(83, 'up-arrow', 'desc', 'up-arrow.png', 'arrow', 's', 'c', ''),
(84, 'security', 'desc', 'security.png', 'eco', 's', 'l', ''),
(85, 'tax', 'desc', 'tax.png', 'eco', 's', 'l', ''),
(86, 'bar-chart', 'desc', 'bar-chart.png', 'eco', 's', 'f', ''),
(87, 'agreement', 'desc', 'agreement.png', 'eco', 's', 'l', ''),
(88, 'money', 'desc', 'money.png', 'eco', 's', 'l', ''),
(89, 'order-complete', 'desc', 'order-complete.gif', 'eco', 'a', 'l', ''),
(90, 'database', 'desc', 'database7.png', 'db', 's', 'c', ''),
(91, 'database', 'desc', 'database1.gif', 'db', 'a', 'l', ''),
(92, 'database', 'desc', 'database6.png', 'db', 's', 'f', ''),
(93, 'database', 'desc', 'database3.png', 'db', 's', 'c', ''),
(94, 'database', 'desc', 'database4.png', 'db', 's', 'f', ''),
(95, 'database', 'database process', 'database5.png', 'db', 's', 'c', ''),
(96, 'video file', 'video', 'video file.gif', 'file', 'a', 'l', 'Gita'),
(97, 'word file', 'word', 'word.png', 'file', 's', 'c', 'Mira'),
(98, 'file binders', 'binders', 'binders.png', 'file', 's', 'c', 'Gita'),
(99, 'search file', 'search', 'search file.gif', 'file', 'a', 'l', 'Mira'),
(101, 'Folders', 'folders', 'folders.png', 'file', 's', 'c', 'Jiya'),
(102, 'Microphone', 'this is microphone.', 'microphone.png', 'acc', 's', 'i', 'Gita'),
(110, 'Pizza', 'pizza Icon', 'pizza.png', 'food', 's', 'c', 'Mira'),
(127, 'twitter', 'twitter animated icon for social media.', 'twitter.gif', 'sm', 'a', 'l', 'sita'),
(128, 'shapes', 'geometric-shapes animated icons', 'geometric-shapes.gif', 'shape', 'a', 'l', 'sita'),
(129, 'arrow', 'arrow animated icon', 'arrow.gif', 'arrow', 'a', 'l', 'sita'),
(130, 'arrow', 'arrow static color icon', '4822472.png', 'arrow', 's', 'c', 'sita'),
(131, 'arrow', 'arrow-right static icon.', 'arrow-right.png', 'arrow', 's', 'c', 'sita'),
(132, 'next', 'next icon using arrow', 'next.png', 'arrow', 's', 'f', 'sita'),
(133, 'ux', 'user experience', 'ux.png', 'eco', 's', 'c', 'sita'),
(134, 'zip-folder', 'zip-folder static icon.', 'zip-folder.png', 'file', 's', 'c', 'sita'),
(135, 'mouse', 'mouse static icon.', 'mouse.png', 'acc', 's', 'l', 'sita'),
(136, 'fan', 'fan animated icon.', 'fan.gif', 'acc', 'a', 'l', 'sita'),
(137, 'Device', 'Computer Hardware device static icon.', 'device.png', 'acc', 's', 'c', 'sita'),
(138, 'bulb', 'bulb animated icon', 'bulb.gif', 'acc', 'a', 'l', 'sita'),
(139, 'umbrella', 'umbrella static icon.', 'umbrella.png', 'acc', 's', 'l', 'sita'),
(140, 'soup', 'soup animated icon.', 'soup.gif', 'food', 'a', 'l', 'sita'),
(141, 'diet dish', 'diet dish static icon.', 'diet dish.png', 'food', 's', 'c', 'sita'),
(142, 'Star', 'star static color icon in shape type.', '956100.png', 'shape', 's', 'c', 'Admin'),
(143, 'Berger ', 'food satic filled icon', 'berger.png', 'food', 's', 'f', 'jiya'),
(144, 'Shopping cart', 'Shopping-cart animated color icon', 'shopping-cart.gif', 'eco', 'a', 'c', 'jiya'),
(145, 'Basket', 'basket icon', 'basket.png', 'acc', 's', 'f', 'Jiya');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `reg_id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `bio` varchar(200) NOT NULL,
  `u_type` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`reg_id`, `name`, `username`, `password`, `email`, `mobile_no`, `bio`, `u_type`) VALUES
(1, 'Gita', 'gita123', '123', 'gita123@gmail.com', 1234567891, '0', 'r'),
(2, 'Sita', 'sita123', '456', 'sample@gmail.com', 1234567891, 'developer', 'd'),
(3, 'Mina', 'mina123', '789', 'mina123@gmail.com', 2147483647, '', 'r'),
(4, 'Jiya', 'jiya123', '123456', 'jiya@gmail.com', 1234567891, 'artist', 'd'),
(13, 'Mira', 'mira123', '12345', 'abc@gmail.com', 1234567891, 'demo', 'd'),
(23, 'test', 'test_user', 'test', 'test@gmail.com', 2147483647, '', 'r'),
(35, 'test', 'test123', '123', 'ad@gmail.com', 1234567890, '', 'r'),
(36, 'Gita', 'gita', 'gita123', 'gita@gmail.com', 2147483647, ' Designer,Develop unique design', 'd'),
(37, 'Riya', 'riya', 'riya123', 'riya@gmail.com', 2147483647, '', 'r'),
(38, 'xyz', 'xyz', 'xyz', 'xyz@gmail.com', 2147483647, '', 'r');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `forum_answer`
--
ALTER TABLE `forum_answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `que_id` (`que_id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `forum_q`
--
ALTER TABLE `forum_q`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`reg_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `reg_id` (`reg_id`),
  ADD KEY `reg_id_2` (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `forum_answer`
--
ALTER TABLE `forum_answer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `forum_q`
--
ALTER TABLE `forum_q`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `i_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `reg_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD CONSTRAINT `contact_us_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`reg_id`);

--
-- Constraints for table `forum_answer`
--
ALTER TABLE `forum_answer`
  ADD CONSTRAINT `forum_answer_ibfk_1` FOREIGN KEY (`que_id`) REFERENCES `forum_q` (`id`),
  ADD CONSTRAINT `forum_answer_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`reg_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
