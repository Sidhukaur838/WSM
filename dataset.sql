-- Database: `water_management_system`

-- --------------------------------------------------------

-- Table structure for table `admin`
DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(50) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `type` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
);

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `type`) VALUES
(1, 'root', '', '$2y$10$FG3.WOTTFlGYlQ03O/Eqi.RrtZIoNHxQwfLuGxULeiZTxGFWe4DX.', 'admin'),
(2, 'root', '$2y$10$1f1O.n7smkk3iRkF5P3WcOK73VW6FQ4o8GkGZBxfkgFDuUnSNB60C', 'dik@gmail.com', 'admin'),
(3, 'root', 'pass@waa', '$2y$10$dztIGrP7r7uNGl63BAUf..iSN2QW8aWSwIFtSqH7peOvkyFgodDB2', 'admin'),
(4, 'admin', 'admin@gmail.com', '$2y$10$JXUHqe014he1VbVJfv441eh05wGBn4VMib2QwTuDb0LO.pOQVhQES', 'admin'),
(6, 'dik', 'dik@gmail.com', '$2y$10$xOz/HFJ4O6/oJIPCF5LJ/ubUX8KNaYOD7YoMauIBUNr263NQTsiTG', 'admin');


-- --------------------------------------------------------

-- Table structure for table `customer`
DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `customer_id` INT(11) NOT NULL AUTO_INCREMENT,
  `customer_name` VARCHAR(100) NOT NULL,
  `customer_phone` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`customer_id`),
  UNIQUE KEY `customer_phone` (`customer_phone`)
);

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_phone`) VALUES
(1, 'Dikshant23', '99750576266'),
(3, 'HEllo', '1223'),
(5, 'Akshata', '9004439609');

-- --------------------------------------------------------

-- Table structure for table `orders`
DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `order_id` INT(11) NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(50) NOT NULL,
  `vendor_id` INT(11) NOT NULL,
  `customer_id` INT(11) NOT NULL,
  `total` DECIMAL(10,2) NOT NULL,
  `payment_status` VARCHAR(20) NOT NULL,
  `date` DATE NOT NULL,
  PRIMARY KEY (`order_id`),
  FOREIGN KEY (`customer_id`) REFERENCES `customer`(`customer_id`),
  FOREIGN KEY (`vendor_id`) REFERENCES `vendor`(`id`)
);

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `type`, `vendor_id`, `customer_id`, `total`, `payment_status`, `date`) VALUES
(1045, 1, NULL, 1, 200, 'paid', '2022-02-14'),
(1046, 1, NULL, 1, 0, 'pending', '2022-02-14'),
(1047, 1, NULL, 1, 0, 'pending', '2022-02-14'),
(1049, 1, NULL, 1, 0, 'paid', '2022-02-14'),
(1050, 1, NULL, 1, 0, 'pending', '2022-02-14'),
(1051, 1, NULL, 1, 0, 'pending', '2022-02-14'),
(1052, 1, NULL, 1, 0, 'paid', '2022-02-14'),
(1053, 1, NULL, 1, 0, 'pending', '2022-02-14'),
(1054, 1, NULL, 1, 0, 'pending', '2022-02-14'),
(1055, 1, NULL, 1, 0, 'pending', '2022-02-14'),
(1056, 1, NULL, 1, 0, 'pending', '2022-02-14'),
(1057, 1, NULL, 1, 0, 'pending', '2022-02-14'),
(1058, 1, NULL, 1, 0, 'pending', '2022-02-14'),
(1059, 1, NULL, 1, 0, 'pending', '2022-02-14'),
(1060, 1, NULL, 1, 0, 'pending', '2022-02-14'),
(1061, 1, NULL, 1, 0, 'pending', '2022-02-14'),
(1062, 1, NULL, 1, 0, 'pending', '2022-02-14'),
(1063, 1, NULL, 1, 0, 'pending', '2022-02-14'),
(1064, 1, NULL, 1, 0, 'pending', '2022-02-14'),
(1065, 1, NULL, 1, 0, 'pending', '2022-02-14'),
(1066, 1, NULL, 3, 0, 'pending', '2022-02-15'),
(1067, 1, NULL, 3, 0, 'pending', '2022-02-15'),
(1068, 1, NULL, 3, 0, 'pending', '2022-02-15'),
(1069, 1, NULL, 1, 0, 'pending', '2022-02-15'),
(1070, 1, NULL, 1, 0, 'pending', '2022-02-15'),
(1071, 1, NULL, 1, 300, 'pending', '2022-02-15'),
(1072, 1, NULL, 1, 0, 'pending', '2022-02-15'),
(1073, 1, NULL, 1, 0, 'pending', '2022-02-15'),
(1074, 1, NULL, 1, 0, 'pending', '2022-02-15'),
(1075, 1, NULL, 1, 0, 'pending', '2022-02-15'),
(1076, 1, NULL, 1, 0, 'pending', '2022-02-15'),
(1077, 1, NULL, 1, 0, 'pending', '2022-02-15'),
(1078, 1, NULL, 1, 0, 'pending', '2022-02-15'),
(1079, 1, NULL, 1, 0, 'pending', '2022-02-15'),
(1080, 1, NULL, 1, 0, 'pending', '2022-02-15'),
(1081, 1, NULL, 1, 20710, 'paid', '2022-02-15'),
(1082, 1, NULL, 1, 1700, 'paid', '2022-02-16'),
(1083, 0, 88, NULL, 0, 'pending', '2022-02-16');

-- --------------------------------------------------------

-- Table structure for table `orders_product`
DROP TABLE IF EXISTS `orders_product`;

CREATE TABLE `orders_product` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `order_id` INT(11) NOT NULL,
  `product_id` INT(11) NOT NULL,
  `quantity` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`order_id`) REFERENCES `orders`(`order_id`),
  FOREIGN KEY (`product_id`) REFERENCES `products`(`product_id`)
);

--
-- Dumping data for table `orders_product`
--

INSERT INTO `orders_product` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(1, 1045, 1, 10),
(4, 1049, 1, 11),
(5, 1050, 1, 11),
(6, 1051, 1, 11),
(7, 1053, 1, 11),
(10, 1081, 2, 58),
(11, 1081, 3, 10),
(12, 1082, 1, 85);

-- --------------------------------------------------------

-- Table structure for table `products`
DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `product_id` INT(11) NOT NULL AUTO_INCREMENT,
  `product_category` VARCHAR(50) NOT NULL,
  `product_name` VARCHAR(100) NOT NULL,
  `product_cost` DECIMAL(10,2) NOT NULL,
  `product_price` DECIMAL(10,2) NOT NULL,
  `product_stock` INT(11) NOT NULL,
  PRIMARY KEY (`product_id`)
);

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_category`, `product_name`, `product_cost`, `product_price`, `product_stock`) VALUES
(1, 'Water Bottle', 'Bislery', 0, 20, 1712),
(2, 'Water Jar', 'Kinely23', 0, 355, 100),
(3, 'aw', '2323', 0, 12, 10),
(4, 'www', 'www', 0, 233, 213123);

-- --------------------------------------------------------

-- Table structure for table `vendor`
DROP TABLE IF EXISTS `vendor`;

CREATE TABLE `vendor` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `vendor_name` VARCHAR(100) NOT NULL,
  `vendor_phone` VARCHAR(20) NOT NULL,
  `product_id` INT(11) NOT NULL,
  `vendor_quantity` INT(11) NOT NULL,
  `vendor_price` DECIMAL(10,2) NOT NULL,
  `vendor_product` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `vendor_phone` (`vendor_phone`),
  FOREIGN KEY (`product_id`) REFERENCES `products`(`product_id`)
);

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `vendor_name`, `vendor_phone`, `product_id`, `vendor_quantity`, `vendor_price`, `vendor_product`) VALUES
(74, 'awdwad', '11113243132', 1, 1243, 43, 'water'),
(80, 'John', '88117722', 2, 2312, 242423, 'water'),
(88, 'Krishnataknt', '88888888888', 1, 23, 233, 'water'),
(90, 'awdwad', '111', 2, 123, 223, 'water'),
(92, 'Test2', '8828822213', 1, 122, 555, 'water');
