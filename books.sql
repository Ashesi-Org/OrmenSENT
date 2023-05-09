-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 10:28 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `author_name`) VALUES
(5, 'James Patterson'),
(7, 'J. K. Rowling'),
(8, 'Stephen Hawking'),
(12, 'Jeff Kinney'),
(13, 'K. D. Twumasi'),
(14, 'Peter Asiedu'),
(15, 'Emmanuel Mintah-Afari');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(11) NOT NULL,
  `ip_add` varchar(50) NOT NULL,
  `c_id` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `c_id`, `qty`) VALUES
(20, '::1', 7, 1),
(9, '::1', 7, 10),
(13, '::1', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(2, 'Novels'),
(5, 'Science'),
(9, 'History'),
(10, 'Mathematics'),
(11, 'Fiction'),
(12, 'Non-Fiction'),
(13, 'Romance'),
(14, 'Personal Growth'),
(15, 'Political'),
(16, 'Cook'),
(17, 'Art'),
(18, 'Poetry');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_pass` varchar(150) NOT NULL,
  `customer_country` varchar(30) NOT NULL,
  `customer_city` varchar(30) NOT NULL,
  `customer_contact` varchar(15) NOT NULL,
  `customer_image` varchar(100) DEFAULT NULL,
  `user_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_image`, `user_role`) VALUES
(3, 'Nicole Zoe', 'nanaAma@gmail.com', 'e7c8bee6c47dd1f95a783d34859ad8a0', 'Ghana', 'Accra', '0203401101', NULL, 2),
(6, 'Orman Enterprise', 'orman@gmail.com', 'd68e6a316d9e29aede433de0f9796626', 'Ghana', 'Accra', '0203401102', NULL, 1),
(7, 'trial shopper', 'shopper@gmail.com', '776fc84b0a4f083c0176ec3af76aa084', 'Ghana', 'City', '0302445567', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`order_id`, `product_id`, `qty`) VALUES
(1, 9, 2),
(2, 13, 1),
(3, 13, 1),
(4, 13, 1),
(5, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `invoice_no`, `order_date`, `order_status`) VALUES
(1, 3, 1440677632, '2022-07-16', ''),
(2, 3, 44146155, '2022-07-16', ''),
(3, 3, 266658890, '2022-07-16', ''),
(4, 3, 207320975, '2022-07-17', ''),
(5, 3, 848622382, '2022-07-17', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `amt` double NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `currency` text NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `amt`, `customer_id`, `order_id`, `currency`, `payment_date`) VALUES
(1, 10, 3, 1, 'GHS', '2022-07-16'),
(2, 5, 3, 2, 'GHS', '2022-07-16'),
(3, 1, 3, 3, 'GHS', '2022-07-16'),
(4, 1, 3, 4, 'GHS', '2022-07-17'),
(5, 1, 3, 5, 'GHS', '2022-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_cat` int(11) NOT NULL,
  `product_author` int(11) NOT NULL,
  `product_title` varchar(200) NOT NULL,
  `product_price` double NOT NULL,
  `product_desc` varchar(500) DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `product_keywords` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_author`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(9, 2, 5, '22 Seconds ', 5, '22 seconds... until Lindsay Boxer loses her badge—or her life.  SFPD Sergeant Lindsay Boxer has guns on her mind.   There’s buzz of a last-ditch shipment of drugs and weapons crossing the Mexican border ahead of new restrictive gun laws. Before Lindsay can act, her top informant tips her to a case that hits disturbingly close to home.', '../img/Product/22seconds.jpg', 'James Patterson, Murder, Club'),
(10, 2, 7, 'The Ickabog', 5, 'Once upon a time there was a tiny kingdom called Cornucopia, as rich in happiness as it was in gold, and famous for its food. From the delicate cream cheeses of Kurdsburg to the Hopes-of-Heaven pastries of Chouxville, each was so delicious that people wept with joy as they ate them.', '../img/Product/Ickabog.jpg', 'J.K. Rowling, Ickabog,'),
(13, 2, 5, 'Diary of a wimpy kid: Wimpy Days', 1, 'It’s summer vacation, the weather’s great, and all the kids are having fun outside. So where’s Greg Heffley? Inside his house, playing video games with the shades drawn.   Greg, a self-confessed ', '../img/Product/DIARY-OF-A-WIMPY-KID-DOG-DAYS-870x870.jpg', 'Diary, Diary of a wimpy Kid, wimpy kid, novels'),
(19, 5, 13, 'Integrated Science for JHS', 5, 'Integrated Science In scope Textbook for JHS 2(K.D. TwUmasi)', '../img/product/Integrated-Science-In-scope-Textbook.jpg', 'Science, Twumasi'),
(20, 10, 14, 'Aki-Ola Core Mathematics', 5, 'Aki-Ola Series: Core Mathematics for Senior High Schools (5th Edition)', '../img/product/Akiola-Core-Mathematics-SHS.jpg', 'Math, Aki-Ola'),
(21, 9, 15, 'Social Studies for SHS, Global Series', 10, 'Social Studies, Global Series', '../img/product/Social Studies for SHS.jpg', 'History, Social Studies');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created`) VALUES
(1, 'nanakay@gmail.com', '2023-04-17 15:51:26'),
(2, 'nicolezoeok@gmail.com', '2023-04-17 20:00:21'),
(3, 'serwaakot11@gmail.com', '2023-04-17 20:04:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `p_id` (`p_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customer_email` (`customer_email`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_cat` (`product_cat`),
  ADD KEY `product_brand` (`product_author`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`product_cat`) REFERENCES `categories` (`cat_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`product_author`) REFERENCES `authors` (`author_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
