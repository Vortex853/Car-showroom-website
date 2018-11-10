-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2017 at 07:27 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `product_id`) VALUES
(1, 2, 1),
(21, 9, 1),
(22, 1, 2),
(19, 1, 9),
(17, 7, 3),
(20, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`) VALUES
(1, 1, 4),
(2, 1, 4),
(3, 7, 3),
(4, 1, 9),
(5, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_desc`, `product_image`, `product_price`) VALUES
(1, 'Honda Amaze', 'Great car. Stylish.', 'honda-amaze.jpg', 800000),
(2, 'Honda Zest', 'GOOD car. black and blue colour available.', 'zest.png', 750000),
(3, 'Renault Kwid', 'best car with user friendly features,making every drive effortless', 'kwid.jpg', 400000),
(4, 'Toyota', 'experience the style with petrol,diesel and automatic variants. great mileage', 'toyota.jpg', 2600000),
(5, 'Honda City', 'variant in India which comes 6 airbags, rear parking camera, Honda', 'hondacity.jpg', 900000),
(6, 'Swift Dzire', 'Swift Dzire will get premium upholstery and dual tone colour scheme. In addition to these, it will also benefit from new features such as the automatic climate control, keyless entry with engine start/stop button', 'maruti-dzire.jpg', 550000),
(7, 'SUV maruti', 'Good: Good Fuel Economy, Very good Style, Show Stealer in the road', 'suv.jpg', 1000000),
(8, 'skoda rapid Sedan', 'Great build up quality, maintenance package for 4 years. Has very good mileage of 17-18km/lt on a highway drive, in city traffic 8-12km/lt . on highway its superb.  Black color.', 'sedan.jpg', 900000),
(9, 'Ferrari', 'Ferrari FF Base Variant Specifications. Engine Type. 6.3L V12 Engine. Displacement (CC) Length. 4907 mm. Width. No. of gears. Automatic. Wheel Type. Alloy Wheels. Tyre Type. Front Brake Type. Ventilated Disc', 'ferrari.jpg', 30000000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(2, 'sowmya', 'sowmyasaraswathi@gmail.com', 'sowmya'),
(3, 'meenakshi', 'meenakshi@gmail.com', 'meenakshi'),
(4, 'prerna', 'prerna@gmail.com', 'prerna');

-- ---------------------------------------------------------


CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



--
-- Dumping data for table `admin`
--


INSERT INTO `admin` (`admin_id`,`admin_email`,`admin_password`) VALUES
(2, 'admin1@gmail.com', 'admin'),
(3, 'sowmya@gmail.com', 'sowmya'),
(4, 'meenakshi@gmail.com','meenakshi'),
(6, 'prerna@gmail.com','prerna');

-- --------------------------------------------------------





--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlist_id`, `user_id`, `product_id`) VALUES
(30, 5, 3),
(33, 6, 1),
(37, 10, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
