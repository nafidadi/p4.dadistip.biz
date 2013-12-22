-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2013 at 01:31 PM
-- Server version: 5.5.34
-- PHP Version: 5.3.10-1ubuntu3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dadistip_p4_dadistip_biz`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE IF NOT EXISTS `hotels` (
  `hotel_id` char(10) NOT NULL COMMENT 'Phone Number as PK',
  `hotel_name` varchar(255) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `city` varchar(63) NOT NULL,
  `state` char(2) NOT NULL,
  `zipcode` char(5) NOT NULL,
  `neighborhood` varchar(255) NOT NULL,
  `website` varchar(63) NOT NULL,
  `email` varchar(63) NOT NULL,
  PRIMARY KEY (`hotel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotel_id`, `hotel_name`, `street_address`, `city`, `state`, `zipcode`, `neighborhood`, `website`, `email`) VALUES
('6152323830', 'TownePlace Suites Nashville Airport', '2700 Elm Hill Pike', 'Nashville', 'TN', '37214', 'Airport, Elm Hill Pike', 'www.marriott.com/bnats', ''),
('6152434311', 'Best Western Downtown', '711 Union Street', 'Nashville', 'TN', '37219', 'Downtown, convention Center', 'www.bestwestern.com', ''),
('6152440150', 'Holiday Inn Express Nashville Downtown', '920 Broadway', 'Nashville', 'TN', '37203', 'Downtown', 'www.hiexndt.com', ''),
('6152443121', 'The Hermitage Hotel Nashville Downtown', '231 6th ave. N', 'Nashville', 'TN', '37219', 'Downtown', 'www.thehermitagehotel.com', 'info@thehermitagehotel.com'),
('6152446690', 'Ramada Inn Nashville Downtown', '303 Interstate Dr', 'Nashville', 'TN', '37213', 'Downtown, Stadium', 'www.ramada.com', ''),
('6152448200', 'DoubleTree Nashville Downtown', '350 4th ave. N', 'Nashville', 'TN', '37219', 'Downtown', 'www.nashville.doubletree.com', ''),
('6152541551', 'Days Inn Stadium', '211 N. First St.', 'Nashville', 'TN', '37213', 'Downtown, Stadium', 'www.daysinnnashville.com', ''),
('6152558400', 'Renaissance Hotel Nashville Downtown', '611 Commerce St', 'Nashville', 'TN', '37203', 'Downtown', 'www.renaissancenashville.com', ''),
('6152560900', 'Courtyard Downtown', '170 4th ave. N', 'Nashville', 'TN', '37219', 'Downtown', 'www.nashvilledowntowncourtyard.com', ''),
('6152592000', 'Sheraton Hotel Nashville Downtown', '623 Union St', 'Nashville', 'TN', '37219', 'Downtown', 'www.sheratonnashvilledowntown.com', ''),
('6152775000', 'Hampton Inn and Suites Nashville Downtown', '310 4th ave. S', 'Nashville', 'TN', '37201', 'Downtown', 'www.hamptondowntownnashville.com', 'BNADT_Hampton_Suites@Hilton.com'),
('6152959160', 'Knights Inn Nashville Downtown', '99 Spring St', 'Nashville', 'TN', '37207', 'Downtown, Stadium', 'www.knightsinn.com', ''),
('6153615900', 'Hotel Preston', '733 Briley Parkway', 'Nashville', 'TN', '37217', 'Airport, Briley parkway', 'www.hotelpreston.com', 'kate@hotelpreston.com'),
('6153913919', 'Comfort suites Airport', '2521 Elm Hill Pike', 'Nashville', 'TN', '37214', 'Airport, Elm Hill Pike', 'www.choicehotels.com/hotel/tn363', ''),
('6154935200', 'Hyatt Place Nashville Airport', '721 Royal Parkway', 'Nashville', 'TN', '37214', 'Airport, Royal Parkway', 'www.nashvilleairport.place.hyatt.com', ''),
('6156201000', 'Hilton Hotel Nashville Downtown', '121 4th ave. S', 'Nashville', 'TN', '37201', 'Downtown', 'www.nashvillehilton.com', 'info@nashvillehilton.com'),
('6156879995', 'Hyatt Place Nashville Downtown', '301 3rd ave. S', 'Nashville', 'TN', '37201', 'Downtown', 'www.nashvilledowntown.place.hyatt.com', ''),
('6157261001', 'Union Station Hotel Downtown', '350 4th ave. N', 'Nashville', 'TN', '37219', 'Downtown', 'www.nashville.doubletree.com', ''),
('6157425550', 'Homewood Suites Nashville Downtown', '706 Church St', 'Nashville', 'TN', '37203', 'Downtown', 'www.nashvilledowntown.homewoodsuites.com', ''),
('6157825300', 'Omni Hotel Nashville Downtown', '250 5th ave. N', 'Nashville', 'TN', '37203', 'Downtown', 'www.omnihotels.com/FindAHotel/Nashville.aspx', ''),
('6158710033', 'Embassy Suites Nashville Airport', '10 Century Blvd', 'Nashville', 'TN', '37214', 'Airport, McGovack pike', 'nashvilleairport.embassysuites.com', ''),
('6158710222', 'Baymont Inn and Suites Nashville Airport', '2350 Elm Hill Pike', 'Nashville', 'TN', '37214', 'Airport, Elm Hill Pike', 'www.baymontnashville.com', ''),
('6158714545', 'Super 8 Hermitage', '1414 Princeton Place', 'Hermitage', 'TN', '37076', 'Hermitage', 'www.nashvillehotelairport.com', 'janakpatel15@gmail.com'),
('6158720109', 'Fairfield Inn and Suites Nashville Airport', '911 Airport Center Drive', 'Nashville', 'TN', '37214', 'Airport, Royal Parkway', 'www.marriott.com/bnaap', ''),
('6158720735', 'Red Roof Inn Nashville Airport', '510 Claridge Drive', 'Nashville', 'TN', '37214', 'Airport, Donelson Pike', 'www.redroofinn.com', ''),
('6158748040', 'Country Inn and Suites Nashville Airport', '590 Donelson Pike', 'Nashville', 'TN', '37214', 'Airport, Donelson Pike', 'www.countryinns.com/nashvilletn_airport', ''),
('6158830500', 'Club Hotel Nashville Inn and Suites', '2435 Atrium Way', 'Nashville', 'TN', '37214', 'Airport, Atrium Way', 'www.clubhotelnashville.com', 'info@nashvilleclubhotel.com'),
('6158831366', 'Holiday Inn Express Nashville Airport', '1111 Airport Center Drive', 'Nashville', 'TN', '37214', 'Airport, Royal Parkway', 'www.hienashville.com', ''),
('6158835201', 'Nashville Airport Inn and Suites', '2425 Atrium Way', 'Nashville', 'TN', '37214', 'Airport, Elm Hill Pike', 'www.nashvilleairportinnandsuites.com', ''),
('6158839500', 'Courtyard Nashville Airport', '2508 Elm Hill Pike', 'Nashville', 'TN', '37214', 'Airport, Elm Hill Pike', 'www.marriott.com/bnaca', ''),
('6158839770', 'Holiday Inn Opryland/Airport', '2200 Elm Hill Pike', 'Nashville', 'TN', '37214', 'Airport, Elm Hill Pike', 'www.hinashville.com', ''),
('6158840088', 'Hilton Garden Inn Nashville Airport', '412 Royal Parkway', 'Nashville', 'TN', '37214', 'Airport, Royal Parkway', 'www.nashvilleairport.stayhgi.com', ''),
('6158846111', 'SpringHill Suites Nashville Airport', '1100 Airport Center Drive', 'Nashville', 'TN', '37214', 'Airport, Royal Parkway', 'www.marriott.com/bnasa', ''),
('6158848111', 'Homewood Suites Nashville Airport', '2640 Elm Hill Pike', 'Nashville', 'TN', '37214', 'Airport, Elm Hill Pike', 'www.homewoodsuites1.hilton.com', ''),
('6158849777', 'Wingate by Wyndham Nashville Airport', '800 Royal Parkway', 'Nashville', 'TN', '37214', 'Airport, Royal Parkway', 'www.wingatehotels.com/hotel/05109', ''),
('6158852200', 'Sheraton Music City Nashville Airport', '777 McGovack Pike', 'Nashville', 'TN', '37214', 'Airport, McGovack', 'www.sheraton.com/musiccity', ''),
('6158854242', 'Hampton Inn and Suites Nashville Airport', '583 Donelson Pike', 'Nashville', 'TN', '37214', 'Airport, Donelson Pike', 'www.nashvilleairportsuites.hamptoninn.com', ''),
('6158894466', 'Alexis Inn and Suites Nashville Airport', '600 Ermac Drive', 'Nashville', 'TN', '37214', 'Airport, Elm Hill Pike', 'www.alexisinnnashville.com', 'info@alexisinnnashville.com'),
('6158897050', 'Nashville Shores', '4001 Bell Road', 'Hermitage', 'TN', '37076', 'J. Percy Priest Lake', 'www.nashvilleshores.com', 'info@nashvilleshores.com'),
('6158898600', 'Residence Inn Nashville Airport', '2300 Elm Hill Pike', 'Nashville', 'TN', '37214', 'Airport, Elm Hill Pike', 'www.marriott.com/bnabn', ''),
('6158898887', 'Super 8 Airport nashville', '720 Royal Parkway', 'Nashville', 'TN', '37214', 'Airport, Royal Parkway', 'www.super8Nashvilleairport.com', 'info@bnasuper8.com'),
('6158898889', 'DoubleTree Suites Nashville Airport', '2424 Atrium Way', 'Nashville', 'TN', '37214', 'Airport, Atrium Way', 'www.nashvilleairportsuites.doubletree.com', ''),
('6158899090', 'Radisson Hotel Nashville Airport', '1112 Airport Center Drive', 'Nashville', 'TN', '37214', 'Airport, Royal Parkway', 'www.radisson.com/nashvilletn_airport', ''),
('6158899300', 'Nashville Airport Marriott', '600 Marriott Drive', 'Nashville', 'TN', '37214', 'Airport, Elm Hill Pike', 'www.nashvillemarriott.com', ''),
('6158916000', 'Hotel Indigo Nashville Downtown', '301 Union St', 'Nashville', 'TN', '37201', 'Downtown', 'www.hotelindigo.com', ''),
('6159020400', 'Drury Inn and Suites Nashville Airport', '555 Donelson Pike', 'Nashville', 'TN', '37214', 'Airport, Donelson Pike', 'www.druryhotels.com/properties/nashvilleairport.cfm', '');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'FK refences users',
  `content` text NOT NULL,
  `hotel_id` char(10) NOT NULL COMMENT 'FK references hotels',
  PRIMARY KEY (`post_id`),
  KEY `user_id` (`user_id`),
  KEY `hotel_id` (`hotel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `created`, `modified`, `user_id`, `content`, `hotel_id`) VALUES
(1, 1387255273, 1387662570, 2, 'really nice!', '6152592000'),
(5, 1387657052, 1387657052, 2, 'nice nice nice', '6156201000'),
(6, 1387659890, 1387659890, 2, 'nice', '6158899300'),
(7, 1387663135, 1387663135, 2, 'been there, seen that', '6152592000'),
(10, 1387730863, 1387730879, 2, 'that is', '6152446690'),
(12, 1387737493, 1387737493, 3, 'near printers ally', '6152448200');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` int(11) NOT NULL,
  `timezone` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `nick_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `created`, `modified`, `token`, `password`, `last_login`, `timezone`, `first_name`, `last_name`, `nick_name`, `email`) VALUES
(2, 1387252281, 1387252281, '9796d1c7c985cf29923b928ff6bd24541a3ef507', 'dcbd48ef4aecd7d3bae406bbca1b8607aaf1e2aa', 1387730742, '-5.0', 'ashe', 'dadi', 'anonymous', 'ashe@yahoo.com'),
(3, 1387340191, 1387340191, 'c75c1695029287835cf8dabfbccd0ad3519542b9', '96f45ba15e1b7f8ce3ae27b964584ca6c56ff8b8', 1387737377, '(GMT -5:00) Eastern Time (US & Canada), Bogota, Lima', 'John', 'Harvard', 'jh2013', 'john@harvard.edu');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`hotel_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
