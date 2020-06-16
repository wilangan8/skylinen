-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2020 at 08:17 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skylinen.co.id`
--

-- --------------------------------------------------------

--
-- Table structure for table `sky_prod_sheeting`
--

CREATE TABLE `sky_prod_sheeting` (
  `id` varchar(5) NOT NULL,
  `name` varchar(191) NOT NULL,
  `product_img_1` text NOT NULL,
  `product_img_2` text NOT NULL,
  `product_img_3` text NOT NULL,
  `mini_detail` varchar(60) NOT NULL,
  `full_detail` text NOT NULL,
  `material_title` varchar(30) NOT NULL,
  `material_desc` text NOT NULL,
  `origin_title` varchar(30) NOT NULL,
  `origin_desc` text NOT NULL,
  `status` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sky_prod_sheeting`
--

INSERT INTO `sky_prod_sheeting` (`id`, `name`, `product_img_1`, `product_img_2`, `product_img_3`, `mini_detail`, `full_detail`, `material_title`, `material_desc`, `origin_title`, `origin_desc`, `status`) VALUES
('sh-1', 'Aspen Fitted Sheet', 'bantal1.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', 'Vintage washed Belgian Linen.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('sh-2', 'Milano Flat Sheet', 'bantal2.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', '100% cotton. Crisp Italian percale.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('sh-3', 'Como Flat Sheet', 'bantal2.jpg', 'COMO-WHITE-BED-LINEN-2-0201-1920x1080.jpg', 'COMO-WHITE-BED-LINEN-1-0194-1920x1080.jpg', '420% Senja', 'We weave Como from a rarer, finer type of flax plant that Italians believe creates the world\'s best bed linen. 230 thread count Belgian linen is handmade into sheeting by us in Melbourne.', '100% Belgian linen 2', 'Italian-woven fabric. Unforgettably soft and light with an unusually high 230 thread count, Como is the same Italian linen that’s used in couture shirting.', 'Handcrafted in Melbourne 2', 'Como sets a new standard for bedtime. Gentle, breathable and utterly effortless. We make Como by hand in Melbourne, finished with a single row of hemstitch detailing.', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sky_prod_sheeting`
--
ALTER TABLE `sky_prod_sheeting`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
