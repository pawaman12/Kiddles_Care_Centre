-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 11:00 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hamsafar`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent_form`
--

CREATE TABLE `agent_form` (
  `travel_id` int(255) NOT NULL,
  `y_name` varchar(255) NOT NULL,
  `agent_name` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent_form`
--

INSERT INTO `agent_form` (`travel_id`, `y_name`, `agent_name`, `reason`) VALUES
(1, 'Zoha Nadeem', 'Munaem Moin', 'I have travelled with her before too. She has amazing management skills.'),
(2, 'omema', 'fawad adil', 'He manages good.'),
(3, 'Hooria', 'Munaem Moin', 'She is pretty calm.'),
(4, 'M Ali', 'Hafsa Azhar', 'She is my friend.'),
(5, 'Omema', 'Huda Khan', 'She is cute!');

-- --------------------------------------------------------

--
-- Table structure for table `book_form`
--

CREATE TABLE `book_form` (
  `Id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `guests` int(255) NOT NULL,
  `arrival` date NOT NULL,
  `leaving` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_form`
--

INSERT INTO `book_form` (`Id`, `name`, `email`, `phone`, `address`, `location`, `guests`, `arrival`, `leaving`) VALUES
(1, 'Maliha', 'm206@gmail.com', '03345567867', 'R-789 Johar', 'bali ', 3, '2022-08-06', '2022-08-20'),
(2, 'jawed', 'j@gmail.com', '03323323456', '900-g/8 Nazimabad', 'Maldives', 8, '2022-07-20', '2022-07-04'),
(3, 'kokila', 'kokila@gmail.com', '033433354321', 'k-908 disco bakery', 'dubai', 9, '2022-08-05', '2022-08-06'),
(4, 'Shiza', 'sweetyclub456@gmail.com', '03327398694', 'fn 29/12 Shah Faisal', 'bali ', 2, '2022-07-26', '2022-08-03'),
(5, 'fizza', 'fizz@gmail.com', '0330098767', 'fn 29/12 malir ', 'Maldives', 1, '2022-08-06', '2022-07-27'),
(6, 'Uzair', 'u@gmail.com', '03358142389', 'g-90/8  millat garden', 'japan', 7, '2022-07-29', '2022-08-06');

-- --------------------------------------------------------

--
-- Table structure for table `offer_form`
--

CREATE TABLE `offer_form` (
  `offer_id` int(255) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `p_id` int(255) NOT NULL,
  `percentage` varchar(255) NOT NULL,
  `exception` varchar(255) NOT NULL,
  `starting_date` date NOT NULL,
  `ending_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offer_form`
--

INSERT INTO `offer_form` (`offer_id`, `a_name`, `p_id`, `percentage`, `exception`, `starting_date`, `ending_date`) VALUES
(1, 'Hiba Khan', 2131, '60', 'advance payment', '2022-07-12', '2022-07-26'),
(2, 'Hafsa Azhar', 2313, '70', 'only couples', '2022-08-06', '2022-08-30'),
(3, 'Syed Aali', 9999, '30', 'Half payment in advance', '2022-07-19', '2022-07-31'),
(4, 'Munaem Moin', 222, '12', 'only 1 hotel', '2022-07-12', '2022-07-31'),
(5, 'Hafsa Azhar', 333, '45', 'Except Sundays', '2022-07-19', '2022-07-31'),
(6, 'Hafsa Azhar', 2222, '80', 'only couples', '2022-07-14', '2022-07-26'),
(7, 'Hiba', 1231, '22', 'Only for admin', '2015-07-15', '2022-07-26'),
(8, 'Munaem Moin', 2222, '6', 'Can not be from karachi', '2022-07-22', '2022-07-31'),
(9, 'Munaem Moin', 4444, '20', 'Only for registered members.', '2022-07-21', '2022-07-29'),
(10, 'Aali', 8888, '12', 'Pay the membership fee first', '2022-07-19', '2022-07-29');

-- --------------------------------------------------------

--
-- Table structure for table `package_form`
--

CREATE TABLE `package_form` (
  `package_id` int(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `str_from` int(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `duration` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package_form`
--

INSERT INTO `package_form` (`package_id`, `admin_name`, `type`, `str_from`, `country`, `city`, `duration`) VALUES
(1, 'Hafsa Azhar', 'decent', 80000, 'Maldives', 'male', 3),
(2, 'Hafsa Azhar', 'economical', 50000, 'dubai', 'abu dabi', 15),
(3, 'Syed Aali', 'business class', 30000, 'japan', 'tokyo', 4),
(4, 'Munaem Moin', 'economical', 20000, 'Usa', 'florida', 45),
(5, 'Hafsa Azhar', 'decent', 90000, 'Pakistan', 'karachi', 6),
(6, 'Hiba Khan', 'decent', 90000, 'Pakistan', 'Islamabad', 4),
(7, 'Hiba', 'Business Class', 100000, 'UK', 'Worcestershire', 33),
(8, 'Munaem', 'economical', 40000, 'Pakistan', 'Karachi', 4),
(9, 'Hafsa Azhar', 'decent', 90000, 'America', 'Texas', 4),
(10, 'Aali', 'decent', 20000, 'Japan', 'tokyo', 3);

-- --------------------------------------------------------

--
-- Table structure for table `question_form`
--

CREATE TABLE `question_form` (
  `question_id` int(255) NOT NULL,
  `q_name` varchar(255) NOT NULL,
  `q_email` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question_form`
--

INSERT INTO `question_form` (`question_id`, `q_name`, `q_email`, `question`) VALUES
(1, 'Zoha Nadeem', 'Zoha@Gmail.com', 'Do you provide packages for Hajj too?'),
(2, 'M Ali', 'Mali@gmail.com', 'What is the best 3 day trip package for dubai?'),
(3, 'Hooria', 'Hooria@gmail.com', 'what packages you have for couples?'),
(4, 'Omema', 'omema@gmail.com', 'do you guys offer discounts for vloggers?'),
(5, 'Pasha', 'pasha@gmail.com', 'What star are your hotels?');

-- --------------------------------------------------------

--
-- Table structure for table `review_form`
--

CREATE TABLE `review_form` (
  `review_id` int(255) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `r_email` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review_form`
--

INSERT INTO `review_form` (`review_id`, `r_name`, `r_email`, `review`) VALUES
(1, 'Zoha Nadeem', 'zoha@gmail.com', 'We had a great time, thankyouu!'),
(2, 'Hafsa', 'hafsa@gmail.com', 'very nice experience '),
(3, 'Aira', 'aira@gmail.com', 'Hamsafar is good.'),
(4, 'M Ali', 'mali@gmail.com', 'Hamsafar provides amazing discounts thats why i always choose them.'),
(5, 'omema', 'omema@gmail.com', 'Good management! recommended!');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `user_id` int(255) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`user_id`, `u_name`, `email`, `password`, `user_type`) VALUES
(1, 'Hafsa Azhar', 'hafsaazhar360@gmail.com', '000', 'admin'),
(2, 'Hiba Khan', 'hibakhan@gmail.com', '111', 'admin'),
(3, 'Syed Aali', 'syedaali@gmail.com', '222', 'admin'),
(4, 'Munaem Moin', 'munaemmoin@gmail.com', '333', 'admin'),
(5, 'Zoha Nadeem', 'zoha@gmail.com', '12345', 'user'),
(6, 'Tuba Khan', 'tuba@gmail.com', '555555', 'user'),
(7, 'omema', 'omema@gmail.com', 'hehe', 'user'),
(8, 'Muhammad', 'm@gmail.com', '12345', 'user'),
(9, 'Hooria', 'h@gmail.com', 'hoor123', 'user'),
(10, 'Sara Khan', 'sara@gmail.com', '123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent_form`
--
ALTER TABLE `agent_form`
  ADD PRIMARY KEY (`travel_id`);

--
-- Indexes for table `book_form`
--
ALTER TABLE `book_form`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `offer_form`
--
ALTER TABLE `offer_form`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `package_form`
--
ALTER TABLE `package_form`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `question_form`
--
ALTER TABLE `question_form`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `review_form`
--
ALTER TABLE `review_form`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent_form`
--
ALTER TABLE `agent_form`
  MODIFY `travel_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `book_form`
--
ALTER TABLE `book_form`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `offer_form`
--
ALTER TABLE `offer_form`
  MODIFY `offer_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `package_form`
--
ALTER TABLE `package_form`
  MODIFY `package_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `question_form`
--
ALTER TABLE `question_form`
  MODIFY `question_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `review_form`
--
ALTER TABLE `review_form`
  MODIFY `review_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
