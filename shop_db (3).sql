-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2024 at 05:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`) VALUES
(1, 'admin123@gmail.com', '7af2d10b73ab7cd8f603937f7697cb5fe432c7ff');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` date NOT NULL DEFAULT current_timestamp(),
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending',
  `check_in` varchar(10) NOT NULL,
  `check_out` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` int(10) NOT NULL,
  `image_01` varchar(100) NOT NULL,
  `image_02` varchar(100) NOT NULL,
  `image_03` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `details`, `price`, `image_01`, `image_02`, `image_03`) VALUES
(2, 'Bathroom cleaning', 'Hand cleaning of all areas : toilet pot, tiles , basin , exhaust etc.', 400, 'istockphoto-1742558671-612x612.jpg', 'istockphoto-1225171006-612x612.jpg', 'istockphoto-1226934342-612x612.jpg'),
(3, 'Kitchen cleaning', 'Oil & grease stain removal from walls , slabs , cabinets , stove , sink etc', 500, 'istockphoto-1353455220-612x612.jpg', 'istockphoto-1135994677-612x612.jpg', 'istockphoto-513603208-612x612.jpg'),
(5, 'Sofa & Carpet Cleaning', 'Dry vacuuming to remove crumbs and dirt particles  & Wet shampooing & vacuuming to remove tough stains and spillages', 500, 'istockphoto-949224886-612x612.jpg', 'istockphoto-1162869207-612x612.jpg', 'istockphoto-1255987716-612x612.jpg'),
(6, 'Ac Repair', 'Visiting / Inspection fee : RS 249\r\nSquare part / Repair cost : Extra', 249, 'istockphoto-1208084866-612x612.jpg', 'istockphoto-1215430465-612x612.jpg', 'istockphoto-1166082642-612x612.jpg'),
(7, 'Refrigerator Repair', 'Visiting / Inspection fee : RS 249\r\nSquare part / Repair cost : Extra', 249, 'istockphoto-176026558-612x612.jpg', 'istockphoto-1169088975-612x612.jpg', 'istockphoto-1419759220-640x640.jpg'),
(8, 'Television Repair', 'Visiting / Inspection fee : RS 250\r\nSquare part / Repair cost : Extra', 250, 'istockphoto-1403026048-612x612.jpg', 'istockphoto-1096963686-612x612.jpg', 'istockphoto-600674266-612x612.jpg'),
(9, 'Washing machine repair', 'Visiting / Inspection fee : RS 249\r\nSquare part / Repair cost : Extra', 249, 'istockphoto-477702657-612x612.jpg', 'istockphoto-1078745094-612x612.jpg', 'istockphoto-1309384812-612x612.jpg'),
(10, 'Plumber', 'Visiting / Inspection fee : RS 249\r\nSquare part / Repair cost : Extra', 249, 'istockphoto-1092268646-612x612.jpg', 'istockphoto-1409041754-612x612.jpg', 'istockphoto-530838501-612x612.jpg'),
(11, 'Carpenter', 'isiting charges Rs 249\r\n\r\nProcurement of spare part (at extra cost)', 249, 'istockphoto-1882561323-612x612.jpg', 'istockphoto-1626732213-612x612.jpg', 'istockphoto-1461357018-612x612.jpg'),
(12, 'Full home painting', 'Visiting / Inspection fee : RS 249 Square part / Repair cost : Extra', 3999, 'istockphoto-1216755261-612x612.jpg', 'istockphoto-1031066754-612x612.jpg', 'istockphoto-1386850746-612x612.jpg'),
(13, 'Salon for women', 'Visiting charges RS 49 \r\n\r\nWe offer a services like :\r\n(extra cost included as per service)\r\n\r\nWaxing , Facial & Cleanups , Manicure , Pedicure , Threading , Bleach & detan , Hair care', 49, 'istockphoto-545984710-612x612.jpg', 'istockphoto-468120216-612x612.jpg', 'istockphoto-1283727030-612x612.jpg'),
(14, 'Spa for women', 'High pressure full body therapy \r\n\r\nBenefit : Relieves muscle stiffnes , relieves soreness and pain', 1448, 'istockphoto-1360062001-612x612.jpg', 'istockphoto-1221527497-612x612.jpg', 'istockphoto-1354177930-612x612.jpg'),
(15, 'Hairstudio for women', 'Visiting charges RS 49\r\n\r\nWe offer services like :\r\n(extra cost as per service )\r\n\r\nBlow dry & Style  , Cut & Style , Trim & Style , Hair care , Keratin & hair botox , Monthly colour , Fashion colour', 49, 'istockphoto-1400843541-612x612.jpg', 'istockphoto-821569750-612x612.jpg', 'istockphoto-851007946-612x612.jpg'),
(16, 'Pestcontrol', 'isiting charges  RS 250\r\n\r\nExpert Pest Control Services ( Extra cost as per service ) :\r\n\r\nTermite Control, Cockroach Control , Bed Bug Control , Mosquito Control , Rodent Control , General Pest Control', 250, 'istockphoto-1406519107-612x612.jpg', 'istockphoto-1207333165-612x612.jpg', 'Pest control.jpeg.jpg'),
(17, 'Car cleaning', 'Takes 3 hours\r\n\r\nInterior Wet Cleaning Deep Sanitiration', 399, 'car wash.jpg', 'istockphoto-1287044692-612x612.jpg', 'istockphoto-870884548-612x612.jpg'),
(18, 'Pool cleaning', 'Our Services includes :\r\n\r\nEmpty skimmer & pump baskets , Clean the filter , Clean the chlorinator cell (if required), Brush the pool, Equipment Inspection , Lube o-rings (as required ) , Test & balance the water', 999, 'istockphoto-499264381-612x612.jpg', 'istockphoto-610843048-612x612.jpg', 'istockphoto-829042860-612x612.jpg'),
(19, 'Full Home Cleaning', 'For through cleaning with disc machine , includes upholstery wet washing & cabinet&#39;s interior', 799, 'istockphoto-804459108-612x612.jpg', 'istockphoto-1214346697-612x612.jpg', 'istockphoto-1080174876-612x612.jpg'),
(20, 'Salon for men', 'We offer a services like (extra cost included as per services ) :\r\n\r\nHaircut , Face care , Shave / beard grooming , Hair color , Message', 49, 'istockphoto-640274128-612x612.jpg', 'istockphoto-640276472-612x612.jpg', 'istockphoto-519511241-612x612.jpg'),
(21, 'Spa for men', 'High pressure full body massage with deep palm movements \r\n\r\nBenefits : Relives muscle tension , chronic pain & soreness', 49, 'istockphoto-1253073128-612x612.jpg', 'istockphoto-1440678931-612x612.jpg', 'istockphoto-1053964396-612x612.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


  ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
