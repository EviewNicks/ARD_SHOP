-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2024 at 02:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cate_id` int(8) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cate_id`, `name`) VALUES
(25021001, 'Baju'),
(25021002, 'Celana'),
(25021003, 'Make-Up'),
(25021004, 'Accesories'),
(25021005, 'Books');

-- --------------------------------------------------------

--
-- Stand-in structure for view `dashboard`
-- (See below for the actual view)
--
CREATE TABLE `dashboard` (
`jumlah_pengguna` bigint(21)
,`jumlah_produk` bigint(21)
,`jumlah_transaksi` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `marketplace`
-- (See below for the actual view)
--
CREATE TABLE `marketplace` (
`category_name` varchar(30)
,`product_id` int(8)
,`product_name` varchar(50)
,`description` varchar(100)
,`price` float(6,3)
,`stock` int(3)
);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `user_id` int(8) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` longtext DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`user_id`, `username`, `email`, `password`, `address`, `phone_number`, `registration_date`) VALUES
(23021001, 'Asizah ', 'lathifazizah@gmail,com', 'Agustus', ' jl.lamacca no.19, Gowa', '831359655555 ', '2024-05-15 09:06:24'),
(23021002, 'Ardiansyh', 'Ardiansyah@gmail.com', '23105004', 'jl.empang no.7, kec.Barru ssssssss', '831359655999', '2024-05-27 01:20:57'),
(23021003, 'annajwa Al-Habsyi', 'AnnajwaAlhabsyi@gmail,com', 'Annijwahabsyi', 'Jl.parantambung ', '831359655555  ', '2024-05-12 16:35:38'),
(23022360, 'diansyahardi139@gmail.com', 'ArsilaFahmi@gmail.com', '23105004', 'ahhaisiisakakksz', '89625340821', '2024-05-26 06:25:16'),
(23025919, 'muhammad fadil Hambali ', 'FadilHambali@gamil.com', 'BerbagiituIndah', 'jl.Hajji Lamacca Kab.Gowa ', '089123654978 ', '2024-05-19 02:06:40'),
(23025933, 'Arsila Fahmi', 'ArsilaFahmiCute@gmail.com', 'ArsilaFahmi', 'jl.Andi Tonro no.4, Macciniayo, Somba Opu', '89356274232', '2024-05-26 01:44:37'),
(32021004, 'muhawalar ', 'muhawalar@gmail.com', 'muhawalar01', 'jl.lasawedi, kel.Coppo ', '895362952067 ', '2024-05-15 09:06:34'),
(32021014, 'Nadila', 'nadila73@gmail.com', '200534', 'Jl.Parangtambung', '0831578956', '2024-05-27 01:48:46');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(8) NOT NULL,
  `cate_id` int(8) DEFAULT NULL,
  `product_name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` float(6,3) NOT NULL,
  `stock` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `cate_id`, `product_name`, `description`, `price`, `stock`) VALUES
(26021001, 25021003, 'Spiriliuna', 'wajah glowing tanpa bekas', 25.000, 97),
(26021002, 25021001, 'T-Shirt Polo', 'Bahan Adem seperti berada di bawah air terjun', 85.000, 41),
(26021003, 25021004, 'Femono', 'kualitas, simple, premium', 75.000, 15),
(26021004, 25021004, 'Ring Love', 'Cinta abadi akhirat selamanya', 550.000, 13),
(26021005, 25021005, 'The power Principle', 'Otot seperti atlit, otak seperti stoicism ', 120.000, 60),
(26021006, 25021003, 'Nivea Extra-Bright', 'Mencerahkan semenjak pemakaian pertama', 45.000, 92),
(26021007, 25021005, 'Al-jami As-Shahih Bukhari', 'Bagaimana nabi berkehidupan', 125.000, 14),
(26021008, 25021002, 'sameadaku', ' mau di pakai joging, \nmendaki, berenang, bersepeda, tetap nyaman ', 108.000, 49);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_user`
-- (See below for the actual view)
--
CREATE TABLE `product_user` (
`username` varchar(30)
,`email` varchar(30)
,`address` longtext
,`product_name` varchar(50)
,`price` float(6,3)
,`order_quantity` int(2)
,`payment_status` varchar(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `section_accesories`
-- (See below for the actual view)
--
CREATE TABLE `section_accesories` (
`product_id` int(8)
,`product_name` varchar(50)
,`description` varchar(100)
,`price` float(6,3)
,`stock` int(3)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `section_baju`
-- (See below for the actual view)
--
CREATE TABLE `section_baju` (
`product_id` int(8)
,`product_name` varchar(50)
,`description` varchar(100)
,`price` float(6,3)
,`stock` int(3)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `section_books`
-- (See below for the actual view)
--
CREATE TABLE `section_books` (
`product_id` int(8)
,`product_name` varchar(50)
,`description` varchar(100)
,`price` float(6,3)
,`stock` int(3)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `section_celana`
-- (See below for the actual view)
--
CREATE TABLE `section_celana` (
`product_id` int(8)
,`product_name` varchar(50)
,`description` varchar(100)
,`price` float(6,3)
,`stock` int(3)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `section_makeup`
-- (See below for the actual view)
--
CREATE TABLE `section_makeup` (
`product_id` int(8)
,`product_name` varchar(50)
,`description` varchar(100)
,`price` float(6,3)
,`stock` int(3)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `total_transaction`
-- (See below for the actual view)
--
CREATE TABLE `total_transaction` (
`username` varchar(30)
,`email` varchar(30)
,`phone_number` varchar(15)
,`total_price` double(20,3)
,`total_order` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `transaction_id` int(11) NOT NULL,
  `user_id` int(8) DEFAULT NULL,
  `product_id` int(8) DEFAULT NULL,
  `order_quantity` int(2) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `payment_status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`transaction_id`, `user_id`, `product_id`, `order_quantity`, `order_date`, `payment_status`) VALUES
(24021001, 23021001, 26021004, 3, '2024-05-18 14:47:53', 'success'),
(24021002, 23021003, 26021005, 1, '2024-05-18 14:47:53', 'success'),
(24021003, 23021001, 26021001, 2, '2022-12-03 09:59:45', 'waiting'),
(24021004, 23021002, 26021003, 1, '2025-03-19 14:15:37', 'failed'),
(24021005, 23021002, 26021001, 2, '2024-05-18 14:47:53', 'success'),
(24021085, 23025933, 26021005, 1, '2024-05-27 13:10:36', 'waiting'),
(24021257, 23025933, 26021006, 5, '2024-05-26 02:37:58', 'waiting'),
(24022215, 23021002, 26021002, 1, '2024-05-18 14:32:18', 'success'),
(24022689, 23021002, 26021008, 1, '2024-05-18 14:37:57', 'success'),
(24023057, 23025933, 26021003, 1, '2024-05-27 13:10:33', 'waiting'),
(24023205, 23021002, 26021001, 2, '2024-05-26 05:34:30', 'success'),
(24023628, 23021002, 26021008, 1, '2024-05-18 14:31:33', 'success'),
(24024219, 23021002, 26021003, 1, '2024-05-26 05:34:30', 'success'),
(24024387, 23025919, 26021005, 1, '2024-05-19 02:15:14', 'success'),
(24024566, 23021002, 26021002, 1, '2024-05-26 05:34:30', 'success'),
(24024667, 23021002, 26021006, 1, '2024-05-26 05:34:30', 'success'),
(24024690, 23021002, 26021005, 1, '2024-05-18 14:31:33', 'success'),
(24025288, 23025933, 26021002, 1, '2024-05-27 13:10:29', 'waiting'),
(24026965, 23021002, 26021006, 1, '2024-05-18 14:31:33', 'success'),
(24027344, 23025919, 26021003, 1, '2024-05-19 02:26:40', 'waiting'),
(24027449, 23021002, 26021002, 1, '2024-05-18 14:31:33', 'success'),
(24027606, 23021002, 26021005, 2, '2024-05-26 05:34:30', 'success'),
(24027675, 23021002, 26021008, 1, '2024-05-26 05:34:30', 'success'),
(24028485, 23021002, 26021003, 1, '2024-05-26 05:35:54', 'success'),
(24029582, 23025933, 26021007, 1, '2024-05-27 13:10:26', 'waiting'),
(24029683, 23021002, 26021003, 3, '2024-05-18 14:31:33', 'success'),
(24029903, 23021002, 26021004, 2, '2024-05-18 14:31:33', 'success');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_history_transaksi`
-- (See below for the actual view)
--
CREATE TABLE `view_history_transaksi` (
`transaction_id` int(11)
,`user_id` int(8)
,`username` varchar(30)
,`product_name` varchar(50)
,`price` float(6,3)
,`order_quantity` int(2)
,`total_price` double(20,3)
,`payment_status` varchar(10)
,`order_date` timestamp
);

-- --------------------------------------------------------

--
-- Structure for view `dashboard`
--
DROP TABLE IF EXISTS `dashboard`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dashboard`  AS SELECT (select count(0) from `pengguna`) AS `jumlah_pengguna`, (select count(0) from `marketplace`) AS `jumlah_produk`, (select count(0) from `view_history_transaksi`) AS `jumlah_transaksi` ;

-- --------------------------------------------------------

--
-- Structure for view `marketplace`
--
DROP TABLE IF EXISTS `marketplace`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `marketplace`  AS SELECT `c`.`name` AS `category_name`, `p`.`product_id` AS `product_id`, `p`.`product_name` AS `product_name`, `p`.`description` AS `description`, `p`.`price` AS `price`, `p`.`stock` AS `stock` FROM (`products` `p` join `categories` `c` on(`p`.`cate_id` = `c`.`cate_id`)) GROUP BY `c`.`name`, `p`.`product_id`, `p`.`description`, `p`.`price`, `p`.`stock` ;

-- --------------------------------------------------------

--
-- Structure for view `product_user`
--
DROP TABLE IF EXISTS `product_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_user`  AS SELECT `u`.`username` AS `username`, `u`.`email` AS `email`, `u`.`address` AS `address`, `pr`.`product_name` AS `product_name`, `pr`.`price` AS `price`, `t`.`order_quantity` AS `order_quantity`, `t`.`payment_status` AS `payment_status` FROM ((`pengguna` `u` join `transaksi` `t` on(`t`.`user_id` = `u`.`user_id`)) join `products` `pr` on(`t`.`product_id` = `pr`.`product_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `section_accesories`
--
DROP TABLE IF EXISTS `section_accesories`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `section_accesories`  AS SELECT `products`.`product_id` AS `product_id`, `products`.`product_name` AS `product_name`, `products`.`description` AS `description`, `products`.`price` AS `price`, `products`.`stock` AS `stock` FROM (`products` join `categories` on(`categories`.`cate_id` = `products`.`cate_id`)) WHERE `categories`.`cate_id` = '25021004' ;

-- --------------------------------------------------------

--
-- Structure for view `section_baju`
--
DROP TABLE IF EXISTS `section_baju`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `section_baju`  AS SELECT `products`.`product_id` AS `product_id`, `products`.`product_name` AS `product_name`, `products`.`description` AS `description`, `products`.`price` AS `price`, `products`.`stock` AS `stock` FROM (`products` join `categories` on(`categories`.`cate_id` = `products`.`cate_id`)) WHERE `categories`.`cate_id` = '25021001' ;

-- --------------------------------------------------------

--
-- Structure for view `section_books`
--
DROP TABLE IF EXISTS `section_books`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `section_books`  AS SELECT `products`.`product_id` AS `product_id`, `products`.`product_name` AS `product_name`, `products`.`description` AS `description`, `products`.`price` AS `price`, `products`.`stock` AS `stock` FROM (`products` join `categories` on(`categories`.`cate_id` = `products`.`cate_id`)) WHERE `categories`.`cate_id` = '25021005' ;

-- --------------------------------------------------------

--
-- Structure for view `section_celana`
--
DROP TABLE IF EXISTS `section_celana`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `section_celana`  AS SELECT `products`.`product_id` AS `product_id`, `products`.`product_name` AS `product_name`, `products`.`description` AS `description`, `products`.`price` AS `price`, `products`.`stock` AS `stock` FROM (`products` join `categories` on(`categories`.`cate_id` = `products`.`cate_id`)) WHERE `categories`.`cate_id` = '25021002' ;

-- --------------------------------------------------------

--
-- Structure for view `section_makeup`
--
DROP TABLE IF EXISTS `section_makeup`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `section_makeup`  AS SELECT `products`.`product_id` AS `product_id`, `products`.`product_name` AS `product_name`, `products`.`description` AS `description`, `products`.`price` AS `price`, `products`.`stock` AS `stock` FROM (`products` join `categories` on(`categories`.`cate_id` = `products`.`cate_id`)) WHERE `categories`.`cate_id` = '25021003' ;

-- --------------------------------------------------------

--
-- Structure for view `total_transaction`
--
DROP TABLE IF EXISTS `total_transaction`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `total_transaction`  AS SELECT `u`.`username` AS `username`, `u`.`email` AS `email`, `u`.`phone_number` AS `phone_number`, sum(`p`.`price`) AS `total_price`, sum(`t`.`order_quantity`) AS `total_order` FROM ((`pengguna` `u` join `transaksi` `t` on(`t`.`user_id` = `u`.`user_id`)) join `products` `p` on(`t`.`product_id` = `p`.`product_id`)) GROUP BY `u`.`username` ;

-- --------------------------------------------------------

--
-- Structure for view `view_history_transaksi`
--
DROP TABLE IF EXISTS `view_history_transaksi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_history_transaksi`  AS SELECT `t`.`transaction_id` AS `transaction_id`, `u`.`user_id` AS `user_id`, `u`.`username` AS `username`, `p`.`product_name` AS `product_name`, `p`.`price` AS `price`, `t`.`order_quantity` AS `order_quantity`, `p`.`price`* `t`.`order_quantity` AS `total_price`, `t`.`payment_status` AS `payment_status`, `t`.`order_date` AS `order_date` FROM ((`transaksi` `t` join `pengguna` `u` on(`t`.`user_id` = `u`.`user_id`)) join `products` `p` on(`t`.`product_id` = `p`.`product_id`)) ORDER BY CASE WHEN `t`.`payment_status` = 'success' THEN 1 WHEN `t`.`payment_status` = 'waiting' THEN 2 WHEN `t`.`payment_status` = 'failed' THEN 3 ELSE 4 END ASC, `t`.`order_date` ASC ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaction_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
