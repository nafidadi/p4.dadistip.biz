Description

This is an application for searching hotels in Nashville, TN and surrounding cities. The feature can be accessed by clicking on the 'Hotels' navigation menu. It also lets users to leave their comments about the hotel once they they signed up. Logged in users can also edit or delete their earlier comments by going to their profile page. Searching for a hotel returns: the name, address, phone number, email(if available) and website of the hotel.
Features

    Search Hotels in various Cities in TN
    Sign up and/or Log in to the site
    Leave comments about a hotel once registered
    Comments are posted as anonymous or a user chosen nick name
    Edit and/or Delete posted comments upon log in
    javascript is used for client-side validation

Other info

    Three tables in the database: users, posts and hotels
    In the database, only hotels in Nashville (Downtown and Airport areas) are included

Database Tables

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

