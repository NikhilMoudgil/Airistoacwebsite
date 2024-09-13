-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2024 at 11:28 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airisto`
--

-- --------------------------------------------------------

--
-- Table structure for table `addproduct`
--

CREATE TABLE `addproduct` (
  `name` varchar(255) NOT NULL,
  `pimage` longblob NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `srno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addproduct`
--

INSERT INTO `addproduct` (`name`, `pimage`, `type`, `size`, `brand`, `description`, `price`, `srno`) VALUES
('Airconditioner', 0x494d472d36363336373032383031356137342e32303836393231382e706e67, 'Split', '1.5 ton', 'LG', 'In a good contion', '12000', '10001'),
('Air conditioner', 0x494d472d36363338363063626633313736322e35313335363930342e6a7067, 'split', '2 Ton', 'Voltas', 'In a pretty good condition', '12K', '10002'),
('Ac', 0x494d472d36363337393666633331343432352e38373335383837312e706e67, 'split', '1.5 ton', 'O Gernal', 'Heavy duty Airconditioner ,well maintained indoor and outdoor units', '10K', '10003'),
('Air conditioner', 0x494d472d36363338363136643661653664392e34333734313431302e6a706567, 'Split', '1.5 Ton', 'LG', 'Well maintain', '7K', '10004'),
('Airconditioner', 0x494d472d36363337393763363361333036392e37343939313831382e6a706567, 'Split', '2ton', 'Hitachi', 'Fully maintained', '9k', '10005'),
('Air conditioner', 0x494d472d36363338363735326562393630322e37323037303438362e706e67, 'Split', '2 Ton', 'Lloyd', 'well maintain and proper service recored', '1K', '10006'),
('Air conditioner', 0x494d472d36363338363231656330623863302e39343638303432312e6a706567, 'Window', '1 Ton', 'Mitshubishi', 'Well maintain with service recored', '10K', '20001'),
('Air conditioner', 0x494d472d36363338363261326338313638392e30393531353437372e6a706567, 'Window', '2 Ton', 'Blue Star', 'well maintain ', '12K', '20002'),
('Air conditioner', 0x494d472d36363338363332643038386435362e39373232343833322e6a706567, 'Window', '1.5 Ton', 'Croma', 'Best Quality', '10K', '20003'),
('Air Conditioner', 0x494d472d36363337393736333338313263302e36393338383831312e6a706567, 'Window', '2 ton', 'Samsung', 'In a good condition , only two years old', '7K', '20004'),
('Air conditioner', 0x494d472d36363338363339383464366164312e39303830353133392e6a706567, 'Window', '1 Ton', 'Lloyd', 'Well maintain and in a good condition', '12K', '20005'),
('Air conditioner', 0x494d472d36363338363433616561616664372e39343632353435352e6a7067, 'Window', '2 Ton', 'Daikin', 'In a good condition', '10K', '20006'),
('AC', 0x494d472d36363337613261386361626132342e38333532383531342e6a706567, 'Window', '2 Ton', 'LG', 'In a good condition dual inverter', '12K', '20007'),
('Air conditioner', 0x494d472d36363338363634666235663562312e33393636383433302e6a706567, 'Window', '1.5 Ton', 'Carrier Global', 'well maintain ', '10K', '20008'),
('Ac', 0x494d472d36363337613362366530356533342e34313133373837342e6a706567, 'Window', '2 Ton', 'Voltas', 'A very clean and maintained Air conditioner', '15K', '20009'),
('Air conditioner', 0x494d472d36363338363665353466393162312e39373632393938362e6a706567, 'Window', '1 Ton', 'Godrej ', 'In a pretty well condition', '12K', '20010');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_1` varchar(255) NOT NULL,
  `password_2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminname`, `email`, `password_1`, `password_2`) VALUES
('airisto', '', 'airisto123', 'airisto123'),
('airisto', '', 'airisto123', 'airisto123');

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `contactmethod` varchar(50) NOT NULL,
  `contacttime` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`name`, `email`, `phone`, `location`, `contactmethod`, `contacttime`, `message`) VALUES
('Nikhil', 'nikhlmoudgil799@gmail.com', '1312718741', 'Kharar', 'Phone No.', 'Afternoon (1:00pm - 4:00pm)', 'hy there i need to know about marketplace');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `srno` varchar(50) DEFAULT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `srno`, `contact_number`, `email`, `order_date`) VALUES
(20, '10005', '88629875493', 'abs@gmail.com', '2024-05-05 17:15:46'),
(28, '20007', '7876385445', 'mentalx629@gmail.com', '2024-05-06 04:42:03'),
(29, '20009', '1234567892', 'payalkashyap2326@gmail.com', '2024-05-06 05:16:09'),
(30, '10006', '1234567890', 'modgiltripta@gmail.com', '2024-05-09 14:55:29'),
(31, '10006', '87318736178', 'modgiltripta@gmail.com', '2024-05-09 15:05:39'),
(34, '10005', '78763645832', 'ranaji5355@gmail.com', '2024-05-13 18:04:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_1` varchar(255) NOT NULL,
  `password-2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password_1`, `password-2`) VALUES
('abhishek', 'sharmaabishek712@gmail.com', '12345', '12345'),
('abhishje', 'shamrmaabhis23@gmail.com', '12345', '12345'),
('nikhilmoudgil', 'nikhilmoudgil799@gmail.com', '@Nikhil1307', '@Nikhil1307'),
('nikhilmoudgil123', 'nikhil123@gmail.com', 'nikhil1307', 'nikhil1307'),
('payal', 'payal@gmail.com', 'payal123', 'payal123'),
('nikhilmoudgil1232', 'nikhilmoudgil999@gmail.com', 'nikhil123', 'nikhil123'),
('rahul', 'rahulmoudgil27@gmail.com', 'rahul123', 'rahul123'),
('abhi', 'abhishek343@gmail.com', 'abhi123', 'abhi123'),
('abhi1', 'sharmabishek32@gmail.com', '1212', '1212');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addproduct`
--
ALTER TABLE `addproduct`
  ADD UNIQUE KEY `srno` (`srno`),
  ADD UNIQUE KEY `srno_2` (`srno`),
  ADD UNIQUE KEY `srno_3` (`srno`);

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `srno` (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`srno`) REFERENCES `addproduct` (`srno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
