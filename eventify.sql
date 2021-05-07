-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 07, 2021 at 04:15 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventify`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `public_id` varchar(300) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `image_url` varchar(500) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `organizer_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`public_id`, `name`, `date`, `time`, `location`, `description`, `image_url`, `created_by`, `organizer_name`) VALUES
('10b7bcca92c74f6360baaf92b05dd353', 'Belgian Waffles Free Workshop', '2021-05-21', '09:33:00', 'Accra, Ghana', 'Join me and learn how to make a great breakfast in just a few minutes. Sweet or Savory you can make those waffles in advance to enjoy at anytime with your favorite topping! Enjoy!\r\n\r\nGet your free ticket to receive the recipe and Amazon shopping list in your inbox a few days before the event.\r\n\r\nNOTE: It will no longer be possible to request the recipe once the registrations close.\r\n\r\nThis workshop will be Live on Bake It Up! by Lorena YouTube Channel and it is FREE. You are welcome to support the page and the upcoming events by sharing them. Thank you in advance for your support!\r\n\r\n-------------------------------------------------------------------------------------\r\n\r\nDETAILS:\r\n\r\nTo Join the Live on YouTube: 1\r\n\r\n1. Subscribe to the Page and click the Notification Bell https://www.youtube.com/channel/UC2DHFoLy7Kav4H_eoqEfkBQ/\r\n\r\n2. Go the the page a few minutes before the Live is scheduled and wait for the it to begin.\r\n\r\nSee you there. Ciao!\r\n\r\nLorena : )                           ', 'https://demo2.joomshaper.com/2020/podcast/images/2020/12/17/blog-052.jpg', 1, 'Hill'),
('021a958a9edc7e94f61335751cfce8ed', 'Career Path Design | The Future of Work & How to Prepare', '2021-05-19', '16:09:00', 'ACCRA', '             We don’t need to go into how 2020 changed the way we work — we’ve all been experiencing it first hand for over a year now. We’ve now got enough experience to know what’s sticking around, and what we need to work on.\r\n\r\nRegardless of your industry, come along for a session with Perkbox as we break down how to prepare for the future of work and the skills needed.\r\n\r\nWhether you’re a manufacturer going through a digital transformation, have had a change in the size of your workforce, or are just looking at career progression as a part of business as usual, join us as we face these similar hurdles together.                       ', 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F133121183%2F31424710869%2F1%2Foriginal.20210423-013857?w=480&auto=format%2Ccompress&q=75&sharp=10&rect=0%2C0%2C2160%2C1080&s=7f3f32ee24334531b7b9e4431537dd46', 1, 'Perkbox'),
('021a958a9edc7e94f61335751cfce8ed', 'Career Path Design | The Future of Work & How to Prepare', '2021-05-19', '16:09:00', 'Accra, Ghana', '             We don’t need to go into how 2020 changed the way we work — we’ve all been experiencing it first hand for over a year now. We’ve now got enough experience to know what’s sticking around, and what we need to work on.\r\n\r\nRegardless of your industry, come along for a session with Perkbox as we break down how to prepare for the future of work and the skills needed.\r\n\r\nWhether you’re a manufacturer going through a digital transformation, have had a change in the size of your workforce, or are just looking at career progression as a part of business as usual, join us as we face these similar hurdles together.                       ', 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F133121183%2F31424710869%2F1%2Foriginal.20210423-013857?w=480&auto=format%2Ccompress&q=75&sharp=10&rect=0%2C0%2C2160%2C1080&s=7f3f32ee24334531b7b9e4431537dd46', 1, 'Perkbox'),
('a535170e9ee09aa28f568cc68417e207', 'Baking from Scratch 101', '2021-05-23', '11:33:00', 'Tema C20', '                    ALL SESSIONS ARE ON INSTAGRAM LIVE! Schedule subject to change:\r\n\r\nFebruary 4: Rolling out puff pastry. Come ready with your \"détrempe!\" so we can get rolling! Instructions and ingredient list here.\r\nMarch 4: Tough times pantry cookies - and puff pastry principles reviewed so you can make our Croissant Chips at home!\r\nApril 1: Mystery recipe using Croissant Chips - REVEALED! Pastry Chef Caroline Schiff will show us how to make Slow Up Granola using hazelnuts - and some Croissant Chips thrown in! Ingredient list here.\r\nMay 6: WE ALL SCREAM FOR ICE CREAM! Cookie Square/Croissant Chip ice cream with Tiffany Schleigh - yes please. Ingredients and tools here.\r\nJune 3: TBD!\r\nJuly 1: TBD!\r\nNO AUGUST SESSION\r\nSeptember 2: TBD!\r\nWe will confirm the recipe and send instructions closer to each date.                ', 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F124377153%2F199607744421%2F1%2Foriginal.20210127-210812?w=480&auto=format%2Ccompress&q=75&sharp=10&rect=1%2C0%2C620%2C310&s=566806aec084c0bfbd784417fade595e', 3, 'Something'),
('a535170e9ee09aa28f568cc68417e207', 'Baking from Scratch 101', '2021-05-23', '11:33:00', 'Accra', '                    ALL SESSIONS ARE ON INSTAGRAM LIVE! Schedule subject to change:\r\n\r\nFebruary 4: Rolling out puff pastry. Come ready with your \"détrempe!\" so we can get rolling! Instructions and ingredient list here.\r\nMarch 4: Tough times pantry cookies - and puff pastry principles reviewed so you can make our Croissant Chips at home!\r\nApril 1: Mystery recipe using Croissant Chips - REVEALED! Pastry Chef Caroline Schiff will show us how to make Slow Up Granola using hazelnuts - and some Croissant Chips thrown in! Ingredient list here.\r\nMay 6: WE ALL SCREAM FOR ICE CREAM! Cookie Square/Croissant Chip ice cream with Tiffany Schleigh - yes please. Ingredients and tools here.\r\nJune 3: TBD!\r\nJuly 1: TBD!\r\nNO AUGUST SESSION\r\nSeptember 2: TBD!\r\nWe will confirm the recipe and send instructions closer to each date.                ', 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F124377153%2F199607744421%2F1%2Foriginal.20210127-210812?w=480&auto=format%2Ccompress&q=75&sharp=10&rect=1%2C0%2C620%2C310&s=566806aec084c0bfbd784417fade595e', 3, 'Something'),
('a535170e9ee09aa28f568cc68417e207', 'Baking from Scratch 101', '2021-05-23', '11:33:00', 'Accra', '                    ALL SESSIONS ARE ON INSTAGRAM LIVE! Schedule subject to change:\r\n\r\nFebruary 4: Rolling out puff pastry. Come ready with your \"détrempe!\" so we can get rolling! Instructions and ingredient list here.\r\nMarch 4: Tough times pantry cookies - and puff pastry principles reviewed so you can make our Croissant Chips at home!\r\nApril 1: Mystery recipe using Croissant Chips - REVEALED! Pastry Chef Caroline Schiff will show us how to make Slow Up Granola using hazelnuts - and some Croissant Chips thrown in! Ingredient list here.\r\nMay 6: WE ALL SCREAM FOR ICE CREAM! Cookie Square/Croissant Chip ice cream with Tiffany Schleigh - yes please. Ingredients and tools here.\r\nJune 3: TBD!\r\nJuly 1: TBD!\r\nNO AUGUST SESSION\r\nSeptember 2: TBD!\r\nWe will confirm the recipe and send instructions closer to each date.                ', 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F124377153%2F199607744421%2F1%2Foriginal.20210127-210812?w=480&auto=format%2Ccompress&q=75&sharp=10&rect=1%2C0%2C620%2C310&s=566806aec084c0bfbd784417fade595e', 3, 'Something'),
('a535170e9ee09aa28f568cc68417e207', 'Baking from Scratch 101', '2021-05-23', '11:33:00', 'Tema C20', '                    ALL SESSIONS ARE ON INSTAGRAM LIVE! Schedule subject to change:\r\n\r\nFebruary 4: Rolling out puff pastry. Come ready with your \"détrempe!\" so we can get rolling! Instructions and ingredient list here.\r\nMarch 4: Tough times pantry cookies - and puff pastry principles reviewed so you can make our Croissant Chips at home!\r\nApril 1: Mystery recipe using Croissant Chips - REVEALED! Pastry Chef Caroline Schiff will show us how to make Slow Up Granola using hazelnuts - and some Croissant Chips thrown in! Ingredient list here.\r\nMay 6: WE ALL SCREAM FOR ICE CREAM! Cookie Square/Croissant Chip ice cream with Tiffany Schleigh - yes please. Ingredients and tools here.\r\nJune 3: TBD!\r\nJuly 1: TBD!\r\nNO AUGUST SESSION\r\nSeptember 2: TBD!\r\nWe will confirm the recipe and send instructions closer to each date.                ', 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F124377153%2F199607744421%2F1%2Foriginal.20210127-210812?w=480&auto=format%2Ccompress&q=75&sharp=10&rect=1%2C0%2C620%2C310&s=566806aec084c0bfbd784417fade595e', 3, 'Something'),
('a535170e9ee09aa28f568cc68417e207', 'Baking from Scratch 101', '2021-05-23', '11:33:00', 'Tema C20', '                    ALL SESSIONS ARE ON INSTAGRAM LIVE! Schedule subject to change:\r\n\r\nFebruary 4: Rolling out puff pastry. Come ready with your \"détrempe!\" so we can get rolling! Instructions and ingredient list here.\r\nMarch 4: Tough times pantry cookies - and puff pastry principles reviewed so you can make our Croissant Chips at home!\r\nApril 1: Mystery recipe using Croissant Chips - REVEALED! Pastry Chef Caroline Schiff will show us how to make Slow Up Granola using hazelnuts - and some Croissant Chips thrown in! Ingredient list here.\r\nMay 6: WE ALL SCREAM FOR ICE CREAM! Cookie Square/Croissant Chip ice cream with Tiffany Schleigh - yes please. Ingredients and tools here.\r\nJune 3: TBD!\r\nJuly 1: TBD!\r\nNO AUGUST SESSION\r\nSeptember 2: TBD!\r\nWe will confirm the recipe and send instructions closer to each date.                ', 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F124377153%2F199607744421%2F1%2Foriginal.20210127-210812?w=480&auto=format%2Ccompress&q=75&sharp=10&rect=1%2C0%2C620%2C310&s=566806aec084c0bfbd784417fade595e', 3, 'Something');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `event_id` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `event_id`, `firstname`, `lastname`, `email`, `user_id`) VALUES
(1, 'de55c0e72b427d55dda9ce96aa986696', 'Desmond', 'Nyamador', 'selanyamador@gmail.com', '1'),
(2, 'de55c0e72b427d55dda9ce96aa986696', 'Desmond', 'Nyamador', 'selanyamador@gmail.com', '1'),
(3, 'de55c0e72b427d55dda9ce96aa986696', '', '', 'selanyamador@gmail.com', '1'),
(4, 'de55c0e72b427d55dda9ce96aa986696', 'Desmond', 'Nyamador', 'selanyamador@gmail.com', '1'),
(5, '10b7bcca92c74f6360baaf92b05dd353', 'Desmond', 'Nyamador', 'selanyamador@gmail.com', '1'),
(6, '021a958a9edc7e94f61335751cfce8ed', 'Desmond', 'Nyamador', 'selanyamador@gmail.com', '1'),
(7, '10b7bcca92c74f6360baaf92b05dd353', 'Desmond', 'Nyamador', 'selanyamador@gmail.com', '1'),
(8, 'a535170e9ee09aa28f568cc68417e207', 'ALien', 'SMirh', 'crazy@crazy.com', '3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `fullname`, `password`) VALUES
(1, 'selanyamador@gmail.com', 'Desmond Nyamador', '$2y$10$FF5kFlIyc3d80TFZuIcG.Oxg0DdU1DzuVAeAfU/qLEb24y7N6ZQVO'),
(3, 'crazy@crazy.com', 'Crazy Bones', '$2y$10$oHApiEbfwgYXc8Jb73iGv.vmz4LR/CciasoEm3kS0WJGFUf4NubK2');

-- --------------------------------------------------------

--
-- Table structure for table `user_sessions`
--

CREATE TABLE `user_sessions` (
  `session_id` varchar(255) NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_sessions`
--
ALTER TABLE `user_sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
