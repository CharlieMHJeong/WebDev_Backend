CREATE TABLE `customers` (
  `Id` int(11) NOT NULL auto_increment,
  `Title` varchar(10) NOT NULL default '',
  `Surname` varchar(100) NOT NULL default '',
  `Firstname` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- 
-- Dumping data for table `customers`
-- 

INSERT INTO `customers` VALUES (1, 'Mrs', 'Smith', 'Lynne');
INSERT INTO `customers` VALUES (2, 'Miss', 'Jones', 'Ann');
INSERT INTO `customers` VALUES (3, 'Mr', 'Brown', 'Simon');
INSERT INTO `customers` VALUES (4, 'Mr', 'Smith', 'David');
INSERT INTO `customers` VALUES (5, 'Mr', 'Bell', 'Peter');
INSERT INTO `customers` VALUES (6, 'Ms', 'Hall', 'Elizabeth');
INSERT INTO `customers` VALUES (7, 'Mr', 'Smith', 'Kevin');
INSERT INTO `customers` VALUES (8, 'Mr', 'Jones', 'Jack');
INSERT INTO `customers` VALUES (9, 'Mr', 'Green', 'William');
INSERT INTO `customers` VALUES (10, 'Mrs', 'Smith', 'Lynne');
INSERT INTO `customers` VALUES (11, 'Mr', 'Bell', 'Simon');
INSERT INTO `customers` VALUES (12, 'Mr', 'Brown', 'Ian');

-- --------------------------------------------------------

-- 
-- Table structure for table `products`
-- 

CREATE TABLE `products` (
  `Id` int(11) NOT NULL auto_increment,
  `Name` varchar(255) NOT NULL default '',
  `Description` text NOT NULL,
  `Quantity` int(11) NOT NULL default '0',
  `Cost` float NOT NULL default '0',
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- 
-- Dumping data for table `products`
-- 

INSERT INTO `products` VALUES (1, 'Beer Glass', '600 ml Beer Glass', 345, 3.99);
INSERT INTO `products` VALUES (2, 'Wine Glass', '125 ml Wine Glass', 236, 2.99);
INSERT INTO `products` VALUES (3, 'Wine Glass', '175 ml Wine Glass', 436, 3.5);
INSERT INTO `products` VALUES (4, 'Shot Glass', '50 ml Small Glass', 132, 1.5);
INSERT INTO `products` VALUES (5, 'Spirit Glass', '100 ml Short Glass', 489, 2.5);
INSERT INTO `products` VALUES (6, 'Long Glass', '200 ml Tall Glass', 263, 2.5);
INSERT INTO `products` VALUES (7, 'Beer Glass', '300 ml Beer Glass', 247, 2.99);
INSERT INTO `products` VALUES (8, 'Wine Glass', '225 ml Wine Glass', 96, 3.99);

-- --------------------------------------------------------

-- 
-- Table structure for table `purchaseproducts`
-- 

CREATE TABLE `purchaseproducts` (
  `products_Id` int(11) NOT NULL default '0',
  `purchases_Id` int(11) NOT NULL default '0',
  `Quantity` int(11) NOT NULL default '0',
  `Cost` float NOT NULL default '0',
  KEY `products_Id` (`products_Id`,`purchases_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `purchaseproducts`
-- 

INSERT INTO `purchaseproducts` VALUES (2, 1, 20, 2.99);
INSERT INTO `purchaseproducts` VALUES (3, 2, 10, 3);
INSERT INTO `purchaseproducts` VALUES (8, 2, 30, 4.5);
INSERT INTO `purchaseproducts` VALUES (6, 3, 25, 2.5);
INSERT INTO `purchaseproducts` VALUES (3, 4, 10, 3.5);
INSERT INTO `purchaseproducts` VALUES (4, 4, 100, 1.5);
INSERT INTO `purchaseproducts` VALUES (5, 4, 40, 3);
INSERT INTO `purchaseproducts` VALUES (1, 5, 22, 3.99);
INSERT INTO `purchaseproducts` VALUES (1, 6, 5, 3.99);
INSERT INTO `purchaseproducts` VALUES (3, 7, 15, 3.5);
INSERT INTO `purchaseproducts` VALUES (4, 7, 25, 2);
INSERT INTO `purchaseproducts` VALUES (5, 7, 10, 2.5);
INSERT INTO `purchaseproducts` VALUES (7, 7, 55, 2.5);
INSERT INTO `purchaseproducts` VALUES (8, 7, 1, 3.99);

-- --------------------------------------------------------

-- 
-- Table structure for table `purchases`
-- 

CREATE TABLE `purchases` (
  `Id` int(11) NOT NULL auto_increment,
  `customers_Id` int(11) NOT NULL default '0',
  `Day` int(11) NOT NULL default '0',
  `Month` int(11) NOT NULL default '0',
  `Year` int(11) NOT NULL default '0',
  PRIMARY KEY  (`Id`),
  KEY `customers_Id` (`customers_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `purchases`
-- 

INSERT INTO `purchases` VALUES (1, 2, 3, 9, 2020);
INSERT INTO `purchases` VALUES (2, 4, 6, 9, 2020);
INSERT INTO `purchases` VALUES (3, 6, 13, 9, 2020);
INSERT INTO `purchases` VALUES (4, 2, 22, 9, 2020);
INSERT INTO `purchases` VALUES (5, 1, 28, 9, 2020);
INSERT INTO `purchases` VALUES (6, 9, 1, 10, 2020);
INSERT INTO `purchases` VALUES (7, 7, 1, 10, 2020);
