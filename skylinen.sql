-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2020 at 08:36 AM
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
-- Table structure for table `sky_customer`
--

CREATE TABLE `sky_customer` (
  `invoice_id` varchar(100) NOT NULL,
  `email` varchar(191) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `company` text,
  `phone_number` varchar(20) NOT NULL,
  `wa` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` varchar(60) NOT NULL,
  `zip` int(10) NOT NULL,
  `status` enum('waiting','completed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sky_customer`
--

INSERT INTO `sky_customer` (`invoice_id`, `email`, `first_name`, `last_name`, `company`, `phone_number`, `wa`, `address`, `city`, `state`, `zip`, `status`) VALUES
('#20200613-1', 'chandramaulanah@gmail.com', 'chandra', 'maulana husen', '-', '+62 821-0321-3212', '+62 821-0321-3212', 'Jl. Supratman No.66 A, Cihaur Geulis, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40122', 'Bandung', 'Indonesia', 40123, 'waiting'),
('#20200613-2', 'chandramaulanah@gmail.com', 'chandra', 'husen', '-', '+62 821-0321-3212', '+62 821-0321-3212', 'Jl. Supratman No.66 A, Cihaur Geulis, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40122', 'Bandung', 'Indonesia', 40123, 'waiting'),
('#20200613-3', 'chandramaulanah@gmail.com', 'chandra', 'husen', '-', '+62 821-0321-3212', '+62 821-0321-3212', 'Jl. Supratman No.66 A, Cihaur Geulis, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40122', 'Bandung', 'Indonesia', 40123, 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `sky_prod_balster`
--

CREATE TABLE `sky_prod_balster` (
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
-- Dumping data for table `sky_prod_balster`
--

INSERT INTO `sky_prod_balster` (`id`, `name`, `product_img_1`, `product_img_2`, `product_img_3`, `mini_detail`, `full_detail`, `material_title`, `material_desc`, `origin_title`, `origin_desc`, `status`) VALUES
('bs-1', 'Aspen Fitted Sheet', 'bantal1.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', 'Vintage washed Belgian Linen.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('bs-2', 'Milano Flat Sheet', 'bantal2.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', '100% cotton. Crisp Italian percale.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('bs-3', 'Como Flat Sheet', 'COMO-WHITE-BED-LINEN-1-0194-1920x1080.jpg', 'COMO-WHITE-BED-LINEN-2-0201-1920x1080.jpg', 'COMO-WHITE-BED-LINEN-3-0226-1920x1080.jpg', 'Zona Nyantuy', 'We weave Como from a rarer, finer type of flax plant that Italians believe creates the world\'s best bed linen. 230 thread count Belgian linen is handmade into sheeting by us in Melbourne.', '100% Belgian linen', 'Italian-woven fabric. Unforgettably soft and light with an unusually high 230 thread count, Como is the same Italian linen that’s used in couture shirting.', 'Handcrafted in Melbourne', 'Como sets a new standard for bedtime. Gentle, breathable and utterly effortless. We make Como by hand in Melbourne, finished with a single row of hemstitch detailing.', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `sky_prod_balstercase`
--

CREATE TABLE `sky_prod_balstercase` (
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
-- Dumping data for table `sky_prod_balstercase`
--

INSERT INTO `sky_prod_balstercase` (`id`, `name`, `product_img_1`, `product_img_2`, `product_img_3`, `mini_detail`, `full_detail`, `material_title`, `material_desc`, `origin_title`, `origin_desc`, `status`) VALUES
('bc-1', 'Aspen Fitted Sheet', 'bantal1.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', 'Vintage washed Belgian Linen.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('bc-2', 'Milano Flat Sheet', 'bantal2.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', '100% cotton. Crisp Italian percale.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('bc-3', 'Como Flat Sheet', 'COMO-WHITE-BED-LINEN-1-0194-1920x1080.jpg', 'COMO-WHITE-BED-LINEN-2-0201-1920x1080.jpg', 'COMO-WHITE-BED-LINEN-3-0226-1920x1080.jpg', 'Zona Nyantuy', 'We weave Como from a rarer, finer type of flax plant that Italians believe creates the world\'s best bed linen. 230 thread count Belgian linen is handmade into sheeting by us in Melbourne.', '100% Belgian linen', 'Italian-woven fabric. Unforgettably soft and light with an unusually high 230 thread count, Como is the same Italian linen that’s used in couture shirting.', 'Handcrafted in Melbourne', 'Como sets a new standard for bedtime. Gentle, breathable and utterly effortless. We make Como by hand in Melbourne, finished with a single row of hemstitch detailing.', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `sky_prod_bathmat`
--

CREATE TABLE `sky_prod_bathmat` (
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
-- Dumping data for table `sky_prod_bathmat`
--

INSERT INTO `sky_prod_bathmat` (`id`, `name`, `product_img_1`, `product_img_2`, `product_img_3`, `mini_detail`, `full_detail`, `material_title`, `material_desc`, `origin_title`, `origin_desc`, `status`) VALUES
('bm-1', 'Aspen Fitted Sheet', 'bantal1.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', 'Vintage washed Belgian Linen.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('bm-2', 'Milano Flat Sheet', 'bantal2.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', '100% cotton. Crisp Italian percale.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('bm-3', 'Como Flat Sheet', 'COMO-WHITE-BED-LINEN-1-0194-1920x1080.jpg', 'COMO-WHITE-BED-LINEN-2-0201-1920x1080.jpg', 'COMO-WHITE-BED-LINEN-3-0226-1920x1080.jpg', '420% Senja', 'We weave Como from a rarer, finer type of flax plant that Italians believe creates the world\'s best bed linen. 230 thread count Belgian linen is handmade into sheeting by us in Melbourne.', '100% Belgian linen', 'Italian-woven fabric. Unforgettably soft and light with an unusually high 230 thread count, Como is the same Italian linen that’s used in couture shirting.', 'Handcrafted in Melbourne', 'Como sets a new standard for bedtime. Gentle, breathable and utterly effortless. We make Como by hand in Melbourne, finished with a single row of hemstitch detailing.', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `sky_prod_bathtowel`
--

CREATE TABLE `sky_prod_bathtowel` (
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
-- Dumping data for table `sky_prod_bathtowel`
--

INSERT INTO `sky_prod_bathtowel` (`id`, `name`, `product_img_1`, `product_img_2`, `product_img_3`, `mini_detail`, `full_detail`, `material_title`, `material_desc`, `origin_title`, `origin_desc`, `status`) VALUES
('bt-1', 'Aspen Fitted Sheet', 'bantal1.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', 'Vintage washed Belgian Linen.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('bt-2', 'Milano Flat Sheet', 'bantal2.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', '100% cotton. Crisp Italian percale.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('bt-3', 'Como Flat Sheet', 'bantal3.jpg', 'COMO-WHITE-BED-LINEN-2-0201-1920x1080.jpg', 'COMO-WHITE-BED-LINEN-3-0226-1920x1080.jpg', 'Zona Nyantuy', 'We weave Como from a rarer, finer type of flax plant that Italians believe creates the world\'s best bed linen. 230 thread count Belgian linen is handmade into sheeting by us in Melbourne.', '100% Belgian linen', 'Italian-woven fabric. Unforgettably soft and light with an unusually high 230 thread count, Como is the same Italian linen that’s used in couture shirting.', 'Handcrafted in Melbourne', 'Como sets a new standard for bedtime. Gentle, breathable and utterly effortless. We make Como by hand in Melbourne, finished with a single row of hemstitch detailing.', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `sky_prod_cushion`
--

CREATE TABLE `sky_prod_cushion` (
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
-- Dumping data for table `sky_prod_cushion`
--

INSERT INTO `sky_prod_cushion` (`id`, `name`, `product_img_1`, `product_img_2`, `product_img_3`, `mini_detail`, `full_detail`, `material_title`, `material_desc`, `origin_title`, `origin_desc`, `status`) VALUES
('ch-1', 'Aspen Fitted Sheet', 'bantal1.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', 'Vintage washed Belgian Linen.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('ch-2', 'Milano Flat Sheet', 'bantal2.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', '100% cotton. Crisp Italian percale.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('ch-3', 'Como Flat Sheet', 'COMO-WHITE-BED-LINEN-1-0194-1920x1080.jpg', 'COMO-WHITE-BED-LINEN-2-0201-1920x1080.jpg', 'COMO-WHITE-BED-LINEN-3-0226-1920x1080.jpg', 'Zona Nyantuy', 'We weave Como from a rarer, finer type of flax plant that Italians believe creates the world\'s best bed linen. 230 thread count Belgian linen is handmade into sheeting by us in Melbourne.', '100% Belgian linen', 'Italian-woven fabric. Unforgettably soft and light with an unusually high 230 thread count, Como is the same Italian linen that’s used in couture shirting.', 'Handcrafted in Melbourne', 'Como sets a new standard for bedtime. Gentle, breathable and utterly effortless. We make Como by hand in Melbourne, finished with a single row of hemstitch detailing.', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `sky_prod_duvetcover`
--

CREATE TABLE `sky_prod_duvetcover` (
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
-- Dumping data for table `sky_prod_duvetcover`
--

INSERT INTO `sky_prod_duvetcover` (`id`, `name`, `product_img_1`, `product_img_2`, `product_img_3`, `mini_detail`, `full_detail`, `material_title`, `material_desc`, `origin_title`, `origin_desc`, `status`) VALUES
('dc-1', 'Aspen Fitted Sheet', 'ASPEN-ZINC-FITTED-SHEET-4-0267-1920x1080.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', 'Vintage washed Belgian Linen.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('dc-2', 'Milano Flat Sheet', 'bantal2.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', '100% cotton. Crisp Italian percale.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('dc-3', 'Como Flat Sheet', 'COMO-WHITE-BED-LINEN-1-0194-1920x1080.jpg', 'COMO-WHITE-BED-LINEN-2-0201-1920x1080.jpg', 'COMO-WHITE-BED-LINEN-3-0226-1920x1080.jpg', 'Zona Nyantuy', 'We weave Como from a rarer, finer type of flax plant that Italians believe creates the world\'s best bed linen. 230 thread count Belgian linen is handmade into sheeting by us in Melbourne.', '100% Belgian linen', 'Italian-woven fabric. Unforgettably soft and light with an unusually high 230 thread count, Como is the same Italian linen that’s used in couture shirting.', 'Handcrafted in Melbourne', 'Como sets a new standard for bedtime. Gentle, breathable and utterly effortless. We make Como by hand in Melbourne, finished with a single row of hemstitch detailing.', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `sky_prod_facetowel`
--

CREATE TABLE `sky_prod_facetowel` (
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
-- Dumping data for table `sky_prod_facetowel`
--

INSERT INTO `sky_prod_facetowel` (`id`, `name`, `product_img_1`, `product_img_2`, `product_img_3`, `mini_detail`, `full_detail`, `material_title`, `material_desc`, `origin_title`, `origin_desc`, `status`) VALUES
('ft-1', 'Aspen Fitted Sheet', 'bantal1.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', 'Vintage washed Belgian Linen.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('ft-2', 'Milano Flat Sheet', 'bantal2.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', '100% cotton. Crisp Italian percale.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('ft-3', 'Como Flat Sheet', 'COMO-WHITE-BED-LINEN-1-0194-1920x1080.jpg', 'COMO-WHITE-BED-LINEN-2-0201-1920x1080.jpg', 'COMO-WHITE-BED-LINEN-3-0226-1920x1080.jpg', '420% Senja', 'We weave Como from a rarer, finer type of flax plant that Italians believe creates the world\'s best bed linen. 230 thread count Belgian linen is handmade into sheeting by us in Melbourne.', '100% Belgian linen', 'Italian-woven fabric. Unforgettably soft and light with an unusually high 230 thread count, Como is the same Italian linen that’s used in couture shirting.', 'Handcrafted in Melbourne', 'Como sets a new standard for bedtime. Gentle, breathable and utterly effortless. We make Como by hand in Melbourne, finished with a single row of hemstitch detailing.', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `sky_prod_fittedsheet`
--

CREATE TABLE `sky_prod_fittedsheet` (
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
-- Dumping data for table `sky_prod_fittedsheet`
--

INSERT INTO `sky_prod_fittedsheet` (`id`, `name`, `product_img_1`, `product_img_2`, `product_img_3`, `mini_detail`, `full_detail`, `material_title`, `material_desc`, `origin_title`, `origin_desc`, `status`) VALUES
('fts-1', 'Aspen Fitted Sheet', 'bantal1.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', 'Vintage washed Belgian Linen.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('fts-2', 'Milano Flat Sheet', 'bantal2.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', '100% cotton. Crisp Italian percale.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('fts-3', 'Como Flat Sheet', 'COMO-WHITE-BED-LINEN-1-0194-1920x1080.jpg', 'COMO-WHITE-BED-LINEN-2-0201-1920x1080.jpg', 'COMO-WHITE-BED-LINEN-3-0226-1920x1080.jpg', 'Zona Nyantuy', 'We weave Como from a rarer, finer type of flax plant that Italians believe creates the world\'s best bed linen. 230 thread count Belgian linen is handmade into sheeting by us in Melbourne.', '100% Belgian linen', 'Italian-woven fabric. Unforgettably soft and light with an unusually high 230 thread count, Como is the same Italian linen that’s used in couture shirting.', 'Handcrafted in Melbourne', 'Como sets a new standard for bedtime. Gentle, breathable and utterly effortless. We make Como by hand in Melbourne, finished with a single row of hemstitch detailing.', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `sky_prod_flatsheet`
--

CREATE TABLE `sky_prod_flatsheet` (
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
-- Dumping data for table `sky_prod_flatsheet`
--

INSERT INTO `sky_prod_flatsheet` (`id`, `name`, `product_img_1`, `product_img_2`, `product_img_3`, `mini_detail`, `full_detail`, `material_title`, `material_desc`, `origin_title`, `origin_desc`, `status`) VALUES
('fs-1', 'Aspen Fitted Sheet', 'bantal1.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', 'Vintage washed Belgian Linen.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('fs-2', 'Milano Flat Sheet', 'bantal2.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', '100% cotton. Crisp Italian percale.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('fs-3', 'Como Flat Sheet', 'COMO-WHITE-BED-LINEN-1-0194-1920x1080.jpg', 'bantal3.jpg', 'bantal2.jpg', '420% Senja', 'We weave Como from a rarer, finer type of flax plant that Italians believe creates the world\'s best bed linen. 230 thread count Belgian linen is handmade into sheeting by us in Melbourne.', '100% Belgian linen', 'Italian-woven fabric. Unforgettably soft and light with an unusually high 230 thread count, Como is the same Italian linen that’s used in couture shirting.', 'Handcrafted in Melbourne', 'Como sets a new standard for bedtime. Gentle, breathable and utterly effortless. We make Como by hand in Melbourne, finished with a single row of hemstitch detailing.', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `sky_prod_handtowel`
--

CREATE TABLE `sky_prod_handtowel` (
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
-- Dumping data for table `sky_prod_handtowel`
--

INSERT INTO `sky_prod_handtowel` (`id`, `name`, `product_img_1`, `product_img_2`, `product_img_3`, `mini_detail`, `full_detail`, `material_title`, `material_desc`, `origin_title`, `origin_desc`, `status`) VALUES
('ht-1', 'Aspen Fitted Sheet', 'bantal1.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', 'Vintage washed Belgian Linen.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('ht-2', 'Milano Flat Sheet', 'bantal2.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', '100% cotton. Crisp Italian percale.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('ht-3', 'Como Flat Sheet', 'COMO-WHITE-BED-LINEN-1-0194-1920x1080.jpg', 'COMO-WHITE-BED-LINEN-2-0201-1920x1080.jpg', 'COMO-WHITE-BED-LINEN-3-0226-1920x1080.jpg', '420% Senja', 'We weave Como from a rarer, finer type of flax plant that Italians believe creates the world\'s best bed linen. 230 thread count Belgian linen is handmade into sheeting by us in Melbourne.', '100% Belgian linen', 'Italian-woven fabric. Unforgettably soft and light with an unusually high 230 thread count, Como is the same Italian linen that’s used in couture shirting.', 'Handcrafted in Melbourne', 'Como sets a new standard for bedtime. Gentle, breathable and utterly effortless. We make Como by hand in Melbourne, finished with a single row of hemstitch detailing.', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `sky_prod_innerduvet`
--

CREATE TABLE `sky_prod_innerduvet` (
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
-- Dumping data for table `sky_prod_innerduvet`
--

INSERT INTO `sky_prod_innerduvet` (`id`, `name`, `product_img_1`, `product_img_2`, `product_img_3`, `mini_detail`, `full_detail`, `material_title`, `material_desc`, `origin_title`, `origin_desc`, `status`) VALUES
('id-1', 'Aspen Fitted Sheet', 'bantal1.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', 'Vintage washed Belgian Linen.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('id-2', 'Milano Flat Sheet', 'bantal2.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', '100% cotton. Crisp Italian percale.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('id-3', 'Como Flat Sheet', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'COMO-WHITE-BED-LINEN-2-0201-1920x1080.jpg', 'COMO-WHITE-BED-LINEN-3-0226-1920x1080.jpg', 'Zona Nyantuy', 'We weave Como from a rarer, finer type of flax plant that Italians believe creates the world\'s best bed linen. 230 thread count Belgian linen is handmade into sheeting by us in Melbourne.', '100% Belgian linen', 'Italian-woven fabric. Unforgettably soft and light with an unusually high 230 thread count, Como is the same Italian linen that’s used in couture shirting.', 'Handcrafted in Melbourne', 'Como sets a new standard for bedtime. Gentle, breathable and utterly effortless. We make Como by hand in Melbourne, finished with a single row of hemstitch detailing.', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `sky_prod_kitchenanddining`
--

CREATE TABLE `sky_prod_kitchenanddining` (
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
-- Dumping data for table `sky_prod_kitchenanddining`
--

INSERT INTO `sky_prod_kitchenanddining` (`id`, `name`, `product_img_1`, `product_img_2`, `product_img_3`, `mini_detail`, `full_detail`, `material_title`, `material_desc`, `origin_title`, `origin_desc`, `status`) VALUES
('kd-1', 'Aspen Fitted Sheet', 'bantal1.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', '100% cotton. Crisp Italian percale.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('kd-2', 'Milano Flat Sheet', 'bantal2.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', '100% cotton. Crisp Italian percale.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('kd-3', 'Como Flat Sheet', 'bantal2.jpg', 'COMO-WHITE-BED-LINEN-2-0201-1920x1080.jpg', 'COMO-WHITE-BED-LINEN-3-0226-1920x1080.jpg', 'ANJAY MABAR!', 'We weave Como from a rarer, finer type of flax plant that Italians believe creates the world\'s best bed linen. 230 thread count Belgian linen is handmade into sheeting by us in Melbourne.', '100% Belgian linen', 'Italian-woven fabric. Unforgettably soft and light with an unusually high 230 thread count, Como is the same Italian linen that’s used in couture shirting.', 'Handcrafted in Melbourne', 'Como sets a new standard for bedtime. Gentle, breathable and utterly effortless. We make Como by hand in Melbourne, finished with a single row of hemstitch detailing.', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `sky_prod_mattressprotector`
--

CREATE TABLE `sky_prod_mattressprotector` (
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
-- Dumping data for table `sky_prod_mattressprotector`
--

INSERT INTO `sky_prod_mattressprotector` (`id`, `name`, `product_img_1`, `product_img_2`, `product_img_3`, `mini_detail`, `full_detail`, `material_title`, `material_desc`, `origin_title`, `origin_desc`, `status`) VALUES
('mp-1', 'Aspen Fitted Sheet', 'bantal1.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', 'Vintage washed Belgian Linen.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('mp-2', 'Milano Flat Sheet', 'bantal2.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', '100% cotton. Crisp Italian percale.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('mp-3', 'Como Flat Sheet', 'COMO-WHITE-BED-LINEN-1-0194-1920x1080.jpg', 'COMO-WHITE-BED-LINEN-2-0201-1920x1080.jpg', 'COMO-WHITE-BED-LINEN-3-0226-1920x1080.jpg', 'Zona Nyantuy', 'We weave Como from a rarer, finer type of flax plant that Italians believe creates the world\'s best bed linen. 230 thread count Belgian linen is handmade into sheeting by us in Melbourne.', '100% Belgian linen', 'Italian-woven fabric. Unforgettably soft and light with an unusually high 230 thread count, Como is the same Italian linen that’s used in couture shirting.', 'Handcrafted in Melbourne', 'Como sets a new standard for bedtime. Gentle, breathable and utterly effortless. We make Como by hand in Melbourne, finished with a single row of hemstitch detailing.', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `sky_prod_pillow`
--

CREATE TABLE `sky_prod_pillow` (
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
-- Dumping data for table `sky_prod_pillow`
--

INSERT INTO `sky_prod_pillow` (`id`, `name`, `product_img_1`, `product_img_2`, `product_img_3`, `mini_detail`, `full_detail`, `material_title`, `material_desc`, `origin_title`, `origin_desc`, `status`) VALUES
('pl-1', 'Aspen Fitted Sheet', 'bantal1.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', 'Vintage washed Belgian Linen.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('pl-2', 'Milano Flat Sheet', 'bantal2.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', '100% cotton. Crisp Italian percale.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('pl-3', 'Como Flat Sheet', 'COMO-WHITE-BED-LINEN-1-0194-1920x1080.jpg', 'COMO-WHITE-BED-LINEN-2-0201-1920x1080.jpg', 'COMO-WHITE-BED-LINEN-3-0226-1920x1080.jpg', 'Zona Nyantuy', 'We weave Como from a rarer, finer type of flax plant that Italians believe creates the world\'s best bed linen. 230 thread count Belgian linen is handmade into sheeting by us in Melbourne.', '100% Belgian linen', 'Italian-woven fabric. Unforgettably soft and light with an unusually high 230 thread count, Como is the same Italian linen that’s used in couture shirting.', 'Handcrafted in Melbourne', 'Como sets a new standard for bedtime. Gentle, breathable and utterly effortless. We make Como by hand in Melbourne, finished with a single row of hemstitch detailing.', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `sky_prod_pillowcase`
--

CREATE TABLE `sky_prod_pillowcase` (
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
-- Dumping data for table `sky_prod_pillowcase`
--

INSERT INTO `sky_prod_pillowcase` (`id`, `name`, `product_img_1`, `product_img_2`, `product_img_3`, `mini_detail`, `full_detail`, `material_title`, `material_desc`, `origin_title`, `origin_desc`, `status`) VALUES
('pc-1', 'Aspen Fitted Sheet', 'bantal1.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', 'Vintage washed Belgian Linen.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('pc-2', 'Milano Flat Sheet', 'bantal2.jpg', 'ASPEN-ZINC-BED-LINEN-3-0264-640x360.jpg', 'ASPEN-ZINC-FLAT-SHEET-5-0273-640x360.jpg', '100% cotton. Crisp Italian percale.', 'Pure linen adds effortless minimalist luxury to any bedroom. Above all, Citi is refreshing. Clean. Calming. Maybe that’s why it’s a customer staple.', '100% Belgian linen', 'Woven in Italy, the quality of the natural Belgian fibres is sheer bliss. We add a casual softness with a vintage treatment, then Citi only gets softer with time.', 'Handcrafted in Melbourne', 'Citi is incomparable. It’s the comforting, muted colours. It’s from being handmade in Melbourne. It’s especially soothing when it looks best without ironing.', 'yes'),
('pc-3', 'Como Flat Sheet', 'COMO-WHITE-BED-LINEN-1-0194-1920x1080.jpg', 'COMO-WHITE-BED-LINEN-2-0201-1920x1080.jpg', 'COMO-WHITE-BED-LINEN-3-0226-1920x1080.jpg', 'Zona Nyantuy', 'We weave Como from a rarer, finer type of flax plant that Italians believe creates the world\'s best bed linen. 230 thread count Belgian linen is handmade into sheeting by us in Melbourne.', '100% Belgian linen', 'Italian-woven fabric. Unforgettably soft and light with an unusually high 230 thread count, Como is the same Italian linen that’s used in couture shirting.', 'Handcrafted in Melbourne', 'Como sets a new standard for bedtime. Gentle, breathable and utterly effortless. We make Como by hand in Melbourne, finished with a single row of hemstitch detailing.', 'yes');

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

-- --------------------------------------------------------

--
-- Table structure for table `sky_user`
--

CREATE TABLE `sky_user` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `username` varchar(191) NOT NULL,
  `password` text NOT NULL,
  `status` int(1) NOT NULL,
  `hak` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sky_user`
--

INSERT INTO `sky_user` (`id`, `name`, `username`, `password`, `status`, `hak`) VALUES
(1, 'skylinen', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sky_customer`
--
ALTER TABLE `sky_customer`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `sky_prod_balster`
--
ALTER TABLE `sky_prod_balster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sky_prod_balstercase`
--
ALTER TABLE `sky_prod_balstercase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sky_prod_bathmat`
--
ALTER TABLE `sky_prod_bathmat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sky_prod_bathtowel`
--
ALTER TABLE `sky_prod_bathtowel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sky_prod_cushion`
--
ALTER TABLE `sky_prod_cushion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sky_prod_duvetcover`
--
ALTER TABLE `sky_prod_duvetcover`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sky_prod_facetowel`
--
ALTER TABLE `sky_prod_facetowel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sky_prod_fittedsheet`
--
ALTER TABLE `sky_prod_fittedsheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sky_prod_flatsheet`
--
ALTER TABLE `sky_prod_flatsheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sky_prod_handtowel`
--
ALTER TABLE `sky_prod_handtowel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sky_prod_innerduvet`
--
ALTER TABLE `sky_prod_innerduvet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sky_prod_kitchenanddining`
--
ALTER TABLE `sky_prod_kitchenanddining`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sky_prod_mattressprotector`
--
ALTER TABLE `sky_prod_mattressprotector`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sky_prod_pillow`
--
ALTER TABLE `sky_prod_pillow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sky_prod_pillowcase`
--
ALTER TABLE `sky_prod_pillowcase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sky_prod_sheeting`
--
ALTER TABLE `sky_prod_sheeting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sky_user`
--
ALTER TABLE `sky_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sky_user`
--
ALTER TABLE `sky_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
