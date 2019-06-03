-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2019 at 04:10 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE IF NOT EXISTS `billing` (
  `billing_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`billing_id`),
  KEY `bill2product` (`p_id`),
  KEY `bill2user` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`billing_id`, `user_id`, `p_id`, `qty`, `value`) VALUES
(2, 1, 10, 2, 2400),
(3, 1, 58, 1, 2200);

-- --------------------------------------------------------

--
-- Table structure for table `category_master`
--

CREATE TABLE IF NOT EXISTS `category_master` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category_master`
--

INSERT INTO `category_master` (`cat_id`, `cat_name`, `is_active`) VALUES
(1, 'Men', 1),
(2, 'Women', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
   `vendor_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `sizes` varchar(30) NOT NULL,
  `discount` int(3) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`p_id`),
  KEY `product2category_master` (`cat_id`),
  KEY `product2subcategory_master` (`sub_cat_id`),
   KEY `product2vendor_master` (`vendor_id`),
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `sub_cat_id`, `cat_id`, `name`, `brand`, `price`, `description`, `sizes`, `discount`, `url`, `is_active`) VALUES
(1, 1, 1, 'Indigo Nation Casual T-Shirt For Summer', 'Indigo Nation', 1392, 'Round neck, half sleeve T-Shirt.\r\n\r\nEasily washable.\r\n\r\nFine quality Clothing material.\r\n\r\nCasual T-Shirt, to set you style statement even higher.', 'Large, Medium, Small', 300, 'MC1.jpg', 1),
(2, 1, 1, 'Peter England grey Formal pants', 'Peter England', 3200, 'Grey formal pants.\r\n\r\nEasily washable.\r\n\r\nFine quality material.\r\n\r\nComfortable to wear.', 'Slim fit', 800, 'MC2.jpg', 1),
(3, 1, 1, 'BELARIO Men Fashion Light Blue Casual Blazer', 'Belario', 4999, 'Wedding and casual wear, can be paired casually with jeans.\r\n\r\nFabric is Light blue, with little shining.\r\n\r\nOne button blazer, with single cut at the back.', '36, 38, 40, 42', 2000, 'MC3.jpg', 1),
(4, 1, 1, 'Patchwork Men casual full sleeve T-Shirt', 'Patchwork ', 2250, 'Half sleeve, round neck, stylish casual t-shirt.\r\n\r\nSoft and comfortable material.\r\n\r\nEasily washable.\r\n', 'Large, Medium, Small', 400, 'MC4.jpg', 1),
(5, 1, 1, 'Roadster Men Grey Slim Fit Jogger', 'Roadster', 2399, 'Slim fit, grey, stylish, jogger.\r\n\r\nStretchable.\r\n\r\nFine quality material.\r\n\r\nEasily washable.\r\n\r\nComfortable sports jogger.\r\n', 'Small, Medium', 1000, 'MC5.jpg', 1),
(6, 1, 1, 'Gadreal Men Royal Blue Suit Party Wear', 'Gadreal', 3650, 'Classy finish royal blue suit.\r\n\r\nTuxedo type suit.\r\n\r\nDry cleanable.\r\n\r\nFine quality material.\r\n', '38, 40, 42', 1100, 'MC6.jpg', 1),
(7, 1, 1, 'Killer Slim Fit Men Jeans', 'Killer', 2999, 'Black faded jeans.\r\n\r\nStretchable.\r\n\r\nEasily washable.\r\n\r\nSlim fit stylish jeans.\r\n', ' 32 inch, 34 inch, 36 inch', 1000, 'MC7.jpg', 1),
(8, 1, 1, 'Killer Jeans Denim For Men Baggy Jeans ', 'Killer ', 2150, 'Denim  baggy jeans.\r\n\r\nFine quality material.\r\n\r\nEasily washable.\r\n\r\nComfortable.\r\n\r\nStretchable.\r\n', '32 inch, 34 inch, 36 inch', 400, 'MC8.jpg', 1),
(9, 4, 2, 'Shein Burgunde Moss Red Stylish Top', 'Shein', 2600, 'Fine quality clothing material.\r\n\r\nEasily washable.\r\n\r\nStylish and trendy burgunde color top.\r\n', 'Regular', 500, 'WC1.jpg', 1),
(10, 4, 2, 'Ladies Crew Neck Full Sleeve Crop Top', 'Fabally', 1800, 'Slim fit cotton material crop top.\r\n\r\nFull sleeve, grey color  crop top with crew neck.\r\n\r\nEasily washable.\r\n\r\nComfortable to wear\r\n', 'Large, Medium, Small', 600, 'WC2.jpg', 1),
(11, 4, 2, 'Womens White T-Shirt  By Shien', 'Shien', 950, 'White t-shirt. Half sleeve, round neck.\r\n\r\nFine quality clothing material.\r\n\r\nEasily washable.\r\n', 'Large, Medium, Small', 300, 'WC3.jpg', 1),
(12, 4, 2, 'Bare Denim Jeans For Women Stretchable', 'Levis', 3250, 'Stretchable.\r\n\r\nEasily washable.\r\n\r\nFine quality clothing material.\r\n\r\nSlim fit stylish Denim jeans for women.\r\n', '32, 34, 36', 1000, 'WC4.jpg', 1),
(13, 4, 2, 'Georgette Kurti Solid Print Red ', 'Bibha Collections', 1850, 'Fine quality georgette kurti.\r\n\r\nSolid colour red with printed design.\r\n\r\nComfortable to wear.\r\n\r\nEasily washable.\r\n', 'Large, Medium, Small', 600, 'WC5.jpg', 1),
(14, 4, 2, 'NGT Formal Women Pants Black by NGT', 'NGT', 2200, 'Slim fit, cotton formal pant.\r\n\r\nFine quality clothing material.\r\n\r\nEasily washable.\r\n\r\nComfortable to wear.\r\n', '32, 34, 36', 500, 'WC6.jpg', 1),
(15, 4, 2, 'Bhagalpuri Art Silk Orange Blue Printed Saree', 'Ishin', 3450, 'Traditional saree with orange and navy blue false printed bahgalpuri art work.\r\n\r\nFine quality silk material.\r\n\r\nEasily washable.\r\n\r\nWorks as both party and ethinic wear.\r\n', '', 600, 'WC7.jpg', 1),
(16, 4, 2, 'Stylish Women Formal Pant Light Grey', 'Park Avenue Women', 2600, 'Slim fit formal light grey pant.\r\n\r\nComfortable to wear in office.\r\n\r\nEasily washable.\r\n', '32, 34, 36', 400, 'WC8.jpg', 1),
(17, 3, 1, 'Casio Edifice Watches For Men', 'Casio Edifice', 11200, 'Stainless steel silver chain.\r\n\r\nRound dial, chronograph watch.\r\n\r\nWater resistant.\r\n\r\nMineral glass.', '7.5 inch, 7 inch, 6.5 inch', 2000, 'MW1.jpeg', 1),
(18, 3, 1, 'Fastrack Original Watches MDM5S90', 'Fastrack', 3500, 'Stainless quality steel chain.\r\n\r\nStylish round dial.\r\n\r\nWater resistant.\r\n\r\nImpact proof.\r\n\r\nMineral glass.', '7.5 inch, 7 inch, 6.5 inch', 300, 'MW2.jpeg', 1),
(19, 3, 1, 'Fastrack Leather Belt Casual Watches', 'Fastrack', 1699, 'Stylish watch.\r\n\r\nLeather finish belt.\r\n\r\nShock resistant.', 'Regular', 400, 'MW3.jpeg', 1),
(20, 3, 1, 'G-Shock Chronograph Watch Black and Gold Dial', 'G-Shock', 11899, 'Sports watch design.\r\n\r\nFine quality built.\r\n\r\nWater resistant.\r\n\r\nDigital and analog features.\r\n\r\nShock resistant.', 'Regular', 2000, 'MW4.jpeg', 1),
(21, 3, 1, 'Fastrack Neon Chronograph Watches', 'Fastrack', 3200, 'Quality material watch band.\r\n\r\nChronograph dial.\r\n\r\nNeon clock hands.\r\n\r\nMineral glass.', 'Regular', 400, 'MW5.jpeg', 1),
(22, 3, 1, 'Dengqin Chain Watch For Men', 'Dengqin', 2150, 'Stainless steel, chain silver and gold finish.\r\n\r\nWater resistant.\r\n\r\nScratch proof mineral glass.\r\n\r\nChronograph watch.', '7.5 inch, 7 inch, 6.5 inch', 300, 'MW6.jpg', 1),
(23, 3, 1, 'G-Shock Sports Watch Black', 'G-Shock', 11299, 'Water resistant.\r\n\r\nShock resistant.\r\n\r\nScratch proof glass.\r\n\r\nMulti functioning digital come analog watch with compass feature.\r\n\r\nFine quality built  material.', 'Regular', 200, 'MW7.jpeg', 1),
(24, 3, 1, 'Omega Watch For Men', 'Omega', 2500, 'Stainless steel stylish chain watch.\r\n\r\nBlack round dial.\r\n\r\nScratch proof dial glass.\r\n\r\nWater resistant.\r\n\r\n\r\n', '7.5 inch, 7 inch, 6.5 inch', 600, 'MW8.jpg', 1),
(25, 6, 2, 'Butterfly Analog Watch ', 'Omega', 942, 'Dial color: beige.\r\n\r\nDial shape: round.\r\n\r\nStrap color: blue.\r\n\r\nType: analog.\r\n', 'Regular', 300, 'WW1.jpg', 1),
(26, 6, 2, 'Fastrack M00XTR For Women', 'Fastrack', 4999, '	Band Colour: silver.\r\n	Band Material: Stainless Steel.\r\n	Band Width: 18 Millimeters.\r\n	Case Diameter: 34 Millimeters.\r\n	Case Material: Brass.\r\n	Clasp: Push Button Clasp.\r\n	Dial Colour: green.\r\n	Crystal material: Mineral.\r\n	Display Type:analog.\r\n	Case Shape:round.\r\n	Item Weight: 141 Grams.\r\n	Maximum Water Resistance. \r\n        Pressure: 3 atmosphere.\r\n	Water Resistance Depth: 30 \r\n        Meters.\r\n', '7.5 inch, 7 inch, 6.5 inch', 1000, 'WW2.jpg', 1),
(27, 6, 2, 'Casual Wrist Women Watch', 'DressBerry', 1392, 'Brand Name:susenstone.\r\nItem Type:Quartz Wristwatches.\r\nCase Shape:Round.\r\nBoxes & Cases Material:Paper.\r\nDial Diameter:40mm.\r\nFeature:Shock Resistant,Mood Tracker.\r\nGender:Women.\r\nStyle:Fashion & Casual.\r\nClasp Type:Buckle.\r\nBand Length:23cm.\r\nBand Material Type:Alloy.\r\nBand Width:19mm.\r\nCase Material:Stainless Steel.\r\nMovement:Quartz.\r\nCase Thickness:7mm.\r\nWater Resistance Depth:No waterproof.\r\nModel Number:relojes mujer 2016 \r\norologi donna bayan kol saati\r\nDial Window Material. \r\nType:Glass.\r\n', '7.5 inch, 7 inch, 6.5 inch', 200, 'WW3.jpg', 1),
(28, 6, 2, 'Fossil ES3590 Women Watch', 'Fossil', 2100, 'Brand:	Fossil.\r\n\r\nModel Number:	ES3590.\r\n\r\nDisplay Type:	Analog.\r\n	\r\nDial Color:	Gold.\r\n\r\nStrap Material:	Stainless Steel.\r\n\r\nStrap Colour:	Gold.\r\n\r\nBest For Occasion:	Party-Wedding.\r\n', '7.5 inch, 7 inch, 6.5 inch', 300, 'WW4.jpg', 1),
(29, 6, 2, 'U.S Polo Analog Watch', 'U.S Polo Association', 1450, 'Gold-tone watch featuring sparkling bezel and pink dial with applied logo and Roman numeral indices.\r\n\r\n40 mm metal case with glass dial window.\r\n\r\nQuartz movement with analog display.\r\n', '7.5 inch, 7 inch, 6.5 inch', 200, 'WW5.jpg', 1),
(30, 6, 2, 'Latest Fashion Wrist Watch For Women', 'Titan Watches', 2450, 'Style:Antique.\r\n  \r\nGender:Women.  \r\n\r\nFeature:Not Specified.  \r\n\r\nMovement:Quartz-Battery.  \r\n\r\nDial Shape:Round.  \r\n\r\nBand length:22.  \r\n\r\nDial Display:Analog.  \r\n\r\nDial Diameter:3.  \r\n\r\nBand Material Type:Stainless Steel.  \r\n\r\nCase Material Type:Alloy.  \r\n', '7.5 inch, 7 inch, 6.5 inch', 800, 'WW6.jpg', 1),
(32, 6, 2, 'Michael Kores Blue Chronograph Watch', 'Michel Kores', 3800, 'Product Type:CHRONOGRAPH WATCH.\r\n\r\nDial Color:WHITE AND GOLDEN.\r\n\r\nDial Shape:ROUND.\r\n\r\nStrap Type:METAL.\r\n\r\nStrap Color:BLUE AND GOLDEN.\r\n\r\nStrap Material:STAINLESS STEEL.\r\n\r\nDial Glass:CRYSTAL.\r\n\r\nCase Material:STAINLESS STEEL.\r\n\r\nMovement:QUARTZ.\r\n', '7.5 inch, 7 inch, 6.5 inch', 1100, 'WW7.jpg', 1),
(33, 6, 2, 'Rose Gold Women Watch', 'Contena Watches', 2750, 'Item Type:Quartz Wristwatches.\r\n\r\nDial Diameter:36mm.\r\n\r\nCase Shape:Round.\r\n\r\nStyle:Dress.\r\n\r\nGender:Women.\r\n\r\nBand Width:16mm.\r\n\r\nClasp Type:Bracelet Clasp.\r\n\r\nCase Thickness:10mm.\r\n\r\nBrand Name:contena.\r\n\r\nCase Material:Stainless Steel.\r\n\r\nBand Material Type:Stainless Steel.\r\n\r\nBand Length:20cm.\r\n\r\nBoxes & Cases Material:No package.\r\n\r\nMovement:Quartz.\r\n\r\nFeature:None.\r\n\r\nWater Resistance Depth:No waterproof.\r\n', '7.5 inch, 7 inch, 6.5 inch', 500, 'WW8.jpg', 1),
(34, 7, 1, 'Adidas Black Duffel Bag', 'Adidas', 1899, 'East to carry.\r\n\r\nDurable quality material.\r\n\r\nStylish black hand bag.\r\n\r\nWell stitched joins.', 'Regular', 200, 'MB1.jpg', 1),
(35, 7, 1, 'Allen Solly Duffel Bag', 'Allen Solly', 2890, 'Easy to carry.\r\n\r\nQuality leather material.\r\n\r\nStylish bag for travelling.\r\n\r\nSpacious.', 'Regular', 400, 'MB2.jpg', 1),
(36, 7, 1, 'American Tourister Trolly Bags', 'American Tourister', 3500, 'Black stylish designer bag.\r\n\r\nGood quality material.\r\n\r\nEasy to carry.\r\n\r\nSpacious.', 'large', 300, 'MB3.jpg', 1),
(37, 7, 1, 'Auxter Trolly Bags', 'Auxter', 3529, 'Designer black and brown bag.\r\n\r\nEasy to carry.\r\n\r\nWaterproof.\r\n\r\nSpacious.\r\n\r\nDurable good quality material.', 'Regular', 200, 'MB4.jpg', 1),
(39, 7, 1, 'Cammero Duffel Bags for Men', 'Cammero', 1899, 'Durable leather material.\r\n\r\nSpacious.\r\n\r\nEasy to carry.\r\n\r\n', 'Regular', 400, 'MB5.jpg', 1),
(41, 7, 1, 'Cole Haan Men Brayton Duffel Bag', 'Cole Haan', 2099, 'Easy to carry.\r\n\r\nGood quality leather material.\r\n\r\nSpacious.\r\n\r\nDurable.\r\n\r\n', 'Regular', 300, 'MB6.jpg', 1),
(42, 7, 1, 'Cool Leather Messenger Duffel Bag', 'VIP', 1899, 'Portable, easy to carry bag.\r\n\r\nGood quality material.\r\n\r\nDurable.', 'Medium', 300, 'MB7.jpeg', 1),
(43, 7, 1, 'Safire Trolly bag For Men', 'Safire', 5280, 'Stylish graphic design Trolly bag orange-black.\r\n\r\nGood quality material.\r\n\r\nSpacious.\r\n\r\nDurable.', 'large', 1000, 'MB8.jpg', 1),
(44, 8, 2, 'Charlesnkeith Womens Side Bag', 'Charlesnkeith ', 3250, 'Charles & Keith Bags.\r\n\r\nBrand- Charles & Keith.\r\n\r\nColor- light brown.\r\n\r\nStylish.\r\n\r\nType regular.', 'Regular', 2000, 'WB1.jpg', 1),
(45, 8, 2, 'Coccinelle Bags For Women', 'Coccinelle', 2490, 'beige leatherette handbag.\r\n\r\nwater proof :no.\r\n\r\nclosure :zip.\r\n\r\ntype :regular.\r\n\r\nnumber of pockets :3.\r\n\r\nlining material :polyester.\r\n\r\nitem weight (kgs) :0.3.\r\n\r\nprints & pattern :solids.\r\n', 'Regular', 400, 'WB2.jpg', 1),
(46, 8, 2, 'Da Milano Orange Handbag', 'Da Milano', 1392, 'Color:- orange and black.\r\n\r\nCategory:-handbags.\r\n\r\nStylish.\r\n', 'Regular', 200, 'WB3.jpg', 1),
(47, 8, 2, 'Valenkuci Womens Hand Bag', 'Valenkuci', 2999, 'Item Type:Handbags.\r\n\r\nLining Material:Polyester.\r\n\r\nExterior:Solid Bag.\r\n\r\nNumber of Handles/Straps:Single.\r\n\r\nInterior:Interior Compartment,Interior Zipper Pocket,Interior Slot Pocket,Cell Phone Pocket.\r\n\r\nTypes of bags:Handbags & Crossbody bags.\r\n\r\nHardness:Soft.\r\n\r\nClosure Type:Zipper.\r\n\r\nOccasion:Versatile.\r\n\r\nShape:Casual Tote.\r\n\r\nStyle:Fashion.\r\n\r\nHandbags Type:Totes.\r\n\r\nDecoration:None.\r\n\r\nPattern Type:Solid.\r\n\r\nMain Material:Patent Leather.\r\n', 'Medium', 500, 'WB5.jpg', 1),
(48, 8, 2, 'Women Girls Backpack Leather School College', 'Gucci', 1290, 'Made of high quality PU leather.\r\n\r\nThis backpack has adjustable and tight shoulder straps.\r\n\r\nOuter Material: Leather.\r\n\r\n Neither too big nor too small, so it''s enough to fit your daily necessities.\r\n\r\nSuper cool and stylish, it can be used for school, work and travel.\r\n\r\nGreat for high school and college girls.\r\n', 'Medium', 300, 'WB6.jpg', 1),
(49, 8, 2, 'Damilano Hand Bags Combo', 'Damilano', 2250, 'combo handbags.\r\n\r\nBlue and brown color combination.\r\n\r\nNumber of bags:-7.', '16/12 inch', 700, 'WB7.jpg', 1),
(50, 8, 2, 'Simple Atmosphere Hand Bags Combo', 'Simple Atmosphere', 3999, 'Leather bags.\r\n\r\nPurse Sling Bag Handbag.\r\n\r\n3 bags.\r\n\r\nSliver color.\r\n\r\nCan be used for party.\r\n\r\n', 'Large, Medium, Small', 1000, 'WB8.jpg', 1),
(51, 5, 2, 'Aluva Heels For Women', 'Aluva', 1000, 'Stylish and Trendy look;\r\nComfortable;\r\nOccasion: Casual, Party;\r\nLatest Fashion\r\nHeel Height: 2.5 inch\r\nColor: white and golden;', ' 8', 800, 'WF1.jpg', 1),
(52, 5, 2, 'Cat Walk Flat Heels For Women', 'Cat Walk', 2100, 'Comfortable;\r\nLatest Fashion;\r\nStylish & Trendy Look;\r\nOccasion: Casual, Party;\r\ncolor: Red & cream;\r\n', ' 7', 1500, 'WF2.jpg', 1),
(53, 5, 2, 'Nicore White Casual Sneaker', 'Nicore', 1500, 'High Heels Sneaker;\r\nMaterial: synthetic\r\ncolor: white & red', '7', 1200, 'WF3.jpg', 1),
(54, 5, 2, 'Reebok Women Sport Shoes', 'Reebok', 1600, 'Stylish sport''s shoes for women.\r\n\r\nComfortable and easy to put on.\r\n\r\nAll weather durable.\r\n\r\nFlexible and fine quality material.', 'Medium', 1200, 'WF5.jpg', 1),
(55, 5, 2, 'Sandlia''s Foot heels For Women', 'Sandila''s', 1850, 'Stylish quality heels.\r\n\r\nDurable quality material.\r\n\r\nAll weather resistant.\r\n\r\n', 'large', 1450, 'WF7.jpg', 1),
(56, 2, 1, 'Decathlon Sports Shoes For Men', 'Decathlon', 3200, 'Stylish navy blue with white stripe design.\r\n\r\nGoes with casual wear and sports wear.\r\n\r\nGood grip foot sole.\r\n\r\nFine quality build material.\r\n\r\nAll weather resistant.', 'Medium', 1000, 'MF3.jpg', 1),
(57, 2, 1, 'Woodland Shoes For Men', 'Woodland', 3700, 'Durable sole provides shock absorption while running.\r\n\r\nIdeal for all age Men with optimum comfort.\r\n\r\nVery light weight shoes.', 'Medium', 1200, 'MF4.jpg', 1),
(58, 2, 1, 'Autumn New Designer Boots', 'Revogue', 4200, 'Studs.\r\n\r\nLace Fastening.\r\n\r\nTPR sole.\r\n\r\nPU upper.\r\n\r\nWipe with clean, dry cloth when needed.', 'large', 2000, 'MF5.jpg', 1),
(59, 2, 1, 'Weldone Sneakers For Men', 'Weldone', 1999, 'Colour: Grey with white.\r\n\r\nOuter Material: Canvas.\r\n\r\nInner Material: Canvas.\r\n\r\nComfortable and easy to wear.\r\n\r\nFlexible and fine build quality.\r\n\r\nAll weather resistant.', '7', 999, 'MF6.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

CREATE TABLE IF NOT EXISTS `product_review` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `review` varchar(50) NOT NULL,
  `rating` int(50) NOT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`review_id`),
  KEY `review2product` (`p_id`),
  KEY `review2user` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `product_review`
--


-- --------------------------------------------------------

--
-- Table structure for table `subcategory_master`
--

CREATE TABLE IF NOT EXISTS `subcategory_master` (
  `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_cat_name` varchar(50) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '0',
  `cat_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`sub_cat_id`),
  KEY `cat2subcat` (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `subcategory_master`
--

INSERT INTO `subcategory_master` (`sub_cat_id`, `sub_cat_name`, `is_active`, `cat_id`) VALUES
(1, 'Clothing', 1, 1),
(2, 'Footwear', 1, 1),
(3, 'Watches', 1, 1),
(4, 'Clothing', 1, 2),
(5, 'Footwear', 1, 2),
(6, 'Watches', 1, 2),
(7, 'Bags', 1, 1),
(8, 'Bags', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE IF NOT EXISTS `user_master` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` int(12) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`user_id`, `user_email`, `password`, `is_active`, `first_name`, `last_name`, `phone`) VALUES
(1, 'niladrig007@gmail.com', 'niladri1994', 1, 'Niladri ', 'Goswami', 2147483647),
(2, 'aman.behani@gmail.com', '12345', 1, 'Aman', 'Behani', 2147483647),
(3, 'nilakshi.bhattacharya@gmail.com', 'nil295', 1, 'Nilakshi ', 'Bhattacharya', 2147483647),
(4, 'soubasu8@gmail.com', '12345', 1, 'sou', 'basu', 2147483647),
(5, 'nitesh.sarkar92@gmail.com', 'nitesh123', 1, 'Nitesh', 'Sarkar', 2147483647),
(6, 'singh.mukesh64@gmail.com', 'mukesh123', 1, 'Mukesh', 'Singh', 2147483647),
(7, 'kb@gmail.com', '54321', 1, 'kuntala', 'bhanja', 2147483647);

-- Table structure for table `vendor_master`
--

CREATE TABLE IF NOT EXISTS `vendor_master` (
  `vendor_id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `vendor_name` varchar(255) NOT NULL,
  `phone` int(12) NOT NULL,
  PRIMARY KEY (`vendor_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
ALTER TABLE `billing`
  ADD PRIMARY KEY (`billing_id`),
  ADD KEY `bill2product` (`p_id`),
  ADD KEY `bill2user` (`user_id`);

--
-- Indexes for table `cat`


--
-- Indexes for table `product`

--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `billing`
--
ALTER TABLE `billing`
  ADD CONSTRAINT `bill2product` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`),
  ADD CONSTRAINT `bill2user` FOREIGN KEY (`user_id`) REFERENCES `user_master` (`user_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product2cat` FOREIGN KEY (`cat_id`) REFERENCES `category_master` (`cat_id`),
  ADD CONSTRAINT `product2subcat` FOREIGN KEY (`sub_cat_id`) REFERENCES `subcategory_master` (`sub_cat_id`),
  ADD CONSTRAINT `product2vendor` FOREIGN KEY (`vendor_id`) REFERENCES `vendor_master` (`sub_cat_id`);
  
--
-- Constraints for table `product_review`
--
ALTER TABLE `product_review`
  ADD CONSTRAINT `review2product` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`),
  ADD CONSTRAINT `review2user` FOREIGN KEY (`user_id`) REFERENCES `user_master` (`user_id`);

--
-- Constraints for table `sub_cat`
--
ALTER TABLE `subcategory_master`
  ADD CONSTRAINT `cat2sub_cat` FOREIGN KEY (`cat_id`) REFERENCES `category_master` (`cat_id`);
COMMIT;
