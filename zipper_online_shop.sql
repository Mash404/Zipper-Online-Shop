-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2021 at 06:37 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zipper_online_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `subject`, `message`) VALUES
(2, 'mas', 'mas@gmail.com', 'asasas', 'asasasa'),
(3, 'farhan', 'ms@gmail.com', 'asasas', 'cxcczxcxzczxz');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_code`, `catagory`, `product_image`, `price`, `quantity`, `des`) VALUES
(1, 'Men\'s T-shirt (Nike)', 'NK12021', 'Apparel Upper Body', 'images/Products/t-shirt1.jpg', 450, 10, 'New'),
(2, 'Backpack ', 'BGP12021', 'Accessories', 'images/Products/backpack1.jpg', 600, 10, 'New'),
(3, 'Wallet 1', 'WLT22021', 'Accessories', 'images/Products/wallet1.jpg', 150, 8, 'New'),
(4, 'Jeans 1', 'J12021B', 'Lower Body', 'images/Products/jeans1.jpg', 700, 10, 'New'),
(5, 'black bag', 'BG20214', 'Accessories', 'images/Products/backpack4.jpg', 400, 0, 'New condition'),
(6, 'Men\'s Black Jacket ', 'MBJ20211', 'Upper Boddy Apperal', 'images/Products/jacket1.jpg', 1050, 8, 'New'),
(7, 'Shoe 8', 'SH2020128', 'Shoes', 'images/Products/shoe8.jpg', 2200, 10, 'New'),
(8, 'Jeans 2', 'J20201IN', 'Lower Body Apperal', 'images/Products/jeans2.jpg', 750, 9, 'New'),
(9, 'Shoe 1', 'SH20211', 'Shoes', 'images/Products/shoe1.jpg', 2000, 7, 'Brand new'),
(10, 'Shoe 2', 'SH2020124', 'Shoes', 'images/Products/shoe2.jpg', 1500, 10, 'New'),
(11, 'Shoe 3', 'SH2020126', 'Shoes', 'images/Products/shoe6.jpg', 1700, 10, 'New'),
(12, 'Shoe 4', 'SH2020143', 'Shoes', 'images/Products/shoe4.jpg', 1800, 10, 'New'),
(13, 'Shoe 5', 'SH2020125', 'Shoes', 'images/Products/shoe5.jpg', 1700, 10, 'New'),
(14, 'Shoe 7', 'SH2020127', 'Shoes', 'images/Products/shoe7.jpg', 2500, 10, 'New'),
(15, 'Backpack 2', 'bp20212', 'accessories', 'images/Products/backpack2.jpg', 650, 15, 'New'),
(16, 'T-Shirt 2', 'T21S34', 'Upper Boddy Apperal', 'images/Products/t-shirt2.jpg', 400, 10, 'New'),
(17, 'T-Shirt 3', 'T21S35', 'Upper Boddy Apperal', 'images/products/t-shirt3.jpg', 540, 10, 'New'),
(18, 'T-Shirt 4', 'T21S75', 'Upper Boddy Apperal', 'images/products/t-shirt4.jpg', 600, 10, 'New'),
(19, 'T-Shirt 5', 'T21S355', 'Upper Boddy Apperal', 'images/products/t-shirt5.jpg', 350, 10, 'New'),
(20, 'Wallet 2', 'W21S35', 'Accessories', 'images/products/wallet2.jpg', 250, 10, 'New'),
(21, 'Wallet 3', 'W21S784', 'Accessories', 'images/products/wallet3.jpg', 140, 10, 'New'),
(22, 'Wallet 4', 'W21S785', 'Accessories', 'images/products/wallet4.jpg', 300, 10, 'New'),
(23, 'Wallet 5', 'W21S765', 'Accessories', 'images/products/wallet5.jpg', 450, 10, 'New'),
(24, 'Jacket 2', 'JKT202012', 'Upper Body Apperal', 'images/Products/jacket2.jpg', 1200, 12, 'New'),
(25, 'Jacket 3', 'JKT202013', 'Upper Body Apperal', 'images/Products/jacket3.jpg', 900, 12, 'New'),
(26, 'Jacket 4', 'JKT220014', 'Upper Body Apperal', 'images/Products/jacket4.jpg', 1400, 8, 'New'),
(27, 'Backpack 4', 'BP202013', 'Accessories', 'images/Products/backpack4.jpg', 800, 7, 'New'),
(28, 'Backpack 6', 'BP202063', 'Accessories', 'images/Products/backpack6.jpg', 600, 8, 'New'),
(29, 'Backpack 7', 'BP202073', 'Accessories', 'images/Products/backpack7.jpg', 950, 7, 'New'),
(30, 'Backpack 5', 'BP202013', 'Accessories', 'images/Products/backpack5.jpg', 550, 7, 'New');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `tm_name` varchar(255) NOT NULL,
  `tm_id` text NOT NULL,
  `group` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `tm_name`, `tm_id`, `group`) VALUES
(1, 'Mashfiq Rahman', '180104087', 'B2'),
(2, 'Farhan Fuad', '180104082', 'B2'),
(3, 'Mashfiq Rahman', '180104087', 'B2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` text NOT NULL,
  `code` text DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `phone`, `password`, `code`, `status`, `created_date`, `updated_date`) VALUES
(9, 'xenon', 'xenon0619@gmail.com', '12365', '$2y$10$az6QKVHZni8pgpxYVvUJmeh4YTanxQnGOByT5072WgE.1gA.Vc6cu', '730912', 1, '2021-04-03 04:09:49', '2021-04-06 02:03:24'),
(11, 'mohaimen', 'mohaimenhasan7@gmail.com', '01521209559', '$2y$10$GzUoIMegEpZoYi4OHwAV.OVYcv3bEqK4vifjQ7FW9s8xF6RxwFJWq', '632306', 1, '2021-04-03 16:04:15', '2021-04-03 16:04:15'),
(12, 'mashfiq rahman', 'mashfiqrr88@gmail.com', '01861249261', '$2y$10$JmiLbhVBu0jzICzKB/YYneL0gDpGaNchOaovAON4HsjPKFUDQBVo2', '0', 1, '2021-04-06 07:42:02', '2021-04-06 07:42:02'),
(13, 'Farhan Fuad', 'farhanfuad333@gmail.com', '01521404234', '$2y$10$V1WfZ.E7a3tpWnkleQSNUuhEW5oLnOs6rEvuZlT1iIkon9HOi01Wi', '0', 1, '2021-04-06 10:08:53', '2021-04-06 10:08:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_name` (`product_name`),
  ADD KEY `pd` (`product_code`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
