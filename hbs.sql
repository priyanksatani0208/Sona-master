-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2024 at 08:37 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(5) NOT NULL,
  `admin_name` varchar(10) NOT NULL,
  `admin_email` varchar(25) NOT NULL,
  `admin_password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, '', 'admin123@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(20) NOT NULL,
  `cust_id` int(15) DEFAULT NULL,
  `room_id` int(15) DEFAULT NULL,
  `booking_rooms` int(5) NOT NULL,
  `booking_check_in` date NOT NULL,
  `booking_check_out` date DEFAULT NULL,
  `total_amount` int(10) NOT NULL,
  `uuid` varchar(225) NOT NULL,
  `booking_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `cust_id`, `room_id`, `booking_rooms`, `booking_check_in`, `booking_check_out`, `total_amount`, `uuid`, `booking_status`) VALUES
(13, 7, 3, 1, '2024-01-01', '2024-01-02', 1599, '', 0),
(14, 8, 3, 2, '2024-01-04', '2024-01-07', 9594, '', 0),
(20, 5, 7, 2, '2024-01-06', '2024-01-09', 5994, '', 0),
(21, 11, 3, 1, '2024-07-13', '2024-07-15', 3198, 'b3d558c6-05e9-40e4-a56b-37a4b4ab9a5e', 1),
(22, 11, 3, 1, '2024-07-14', '2024-07-15', 1599, 'd6883e12-f2b4-4a7a-b89c-64c4e0689598', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cont_id` int(10) NOT NULL,
  `cont_name` varchar(50) NOT NULL,
  `cont_mob` int(10) NOT NULL,
  `cont_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cont_id`, `cont_name`, `cont_mob`, `cont_message`) VALUES
(1, 'priyank satani', 2147483647, 'Ahmedabad ');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(10) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `cust_email` varchar(50) NOT NULL,
  `cust_mob` varchar(12) NOT NULL,
  `cust_add` varchar(255) NOT NULL,
  `cust_password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_email`, `cust_mob`, `cust_add`, `cust_password`) VALUES
(5, 'Divya Rathod', 'divyarathod2292002@gmail.com', '2147483647', 'Ahmadabad 1', '123'),
(7, 'Mihir Bhuva', 'mihirbhuva2711@gmail.com', '9737184225', 'C/5-21 ,indrajit bag society nikol gam road Ahmedabad', '12345'),
(8, 'priyank satani ', 'priyanksatani1234@gmail.com', '1234567890', 'C/4-22 ,indrajit bag society nikol gam road Ahmedabad', '123'),
(10, 'vijay', 'abc@gmail.com', '7523458785', 'asdf', '123'),
(11, 'Pratham V Shah', 'shahpratham3011@gmail.com', '1234567896', 'Ahmedabad', '123');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(10) NOT NULL,
  `feed_rating` int(5) NOT NULL,
  `feed_review` varchar(255) NOT NULL,
  `cust_id` int(25) NOT NULL,
  `room_id` int(25) NOT NULL,
  `feedback_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `feed_rating`, `feed_review`, `cust_id`, `room_id`, `feedback_date`) VALUES
(6, 4, 'Nice  Website for booking.', 8, 4, '2024-01-03 18:14:56'),
(11, 4, 'Nice Room !', 11, 3, '2024-07-12 22:04:04');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(15) NOT NULL,
  `room_image` varchar(255) NOT NULL,
  `room_category` varchar(50) NOT NULL,
  `room_price` int(25) NOT NULL,
  `room_size` varchar(25) NOT NULL,
  `room_capacity` varchar(25) NOT NULL,
  `room_bed` varchar(25) NOT NULL,
  `room_services` varchar(255) NOT NULL,
  `room_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_image`, `room_category`, `room_price`, `room_size`, `room_capacity`, `room_bed`, `room_services`, `room_details`) VALUES
(3, 'room-1.jpg', 'Premium King Room', 1599, '30 ft', 'Max persion 5', 'King Beds', 'Wifi, Television, Bathroom, etc...', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><br><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>'),
(4, 'room-2.jpg', 'Deluxe Room', 1999, '45 ft', 'Max persion 3', 'King Beds', 'Wifi, Television, Bathroom,...', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><br><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>'),
(5, 'room-3.jpg', 'Double Room', 2599, '35 ft', 'Max persion 2', 'King Beds', 'Wifi, Television, Bathroom,...', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><br><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>'),
(6, 'room-4.jpg', 'Luxury Room', 2999, '40 ft', 'Max persion 3', 'King Beds', 'Television, Bathroom,etc...', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><br><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>'),
(7, 'room-5.jpg', 'Single Premium Room ', 999, '25 ft', 'Max persion 1', 'King Beds', 'Television, Bathroom,etc...', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><br><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>'),
(8, 'room-6.jpg', 'Balcony -Room', 3599, '50ft', 'Max persion 6', 'King Beds', 'Wifi, Television, Bathroom,...', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><br><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cont_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`room_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
