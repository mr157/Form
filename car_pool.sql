-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 05. Jan 2018 um 15:31
-- Server-Version: 10.1.21-MariaDB
-- PHP-Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `car_pool`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `brand` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `model` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `seat` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `equip` text CHARACTER SET utf8,
  `date_1` date DEFAULT NULL,
  `time_1` time DEFAULT NULL,
  `date_2` date DEFAULT NULL,
  `time_2` time DEFAULT NULL,
  `first_name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `last_name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `image` longblob,
  `comment` text CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `cars`
--

INSERT INTO `cars` (`id`, `brand`, `model`, `seat`, `equip`, `date_1`, `time_1`, `date_2`, `time_2`, `first_name`, `last_name`, `email`, `image`, `comment`) VALUES
(46, 'Audi', 'Meiner', NULL, NULL, '2018-01-14', '17:00:00', '2018-01-17', '17:00:00', 'Matthias', 'MÃ¼ller', 'md@md.com', NULL, ''),
(47, 'Volkswagen', 'Panamera', NULL, NULL, '2018-01-19', '16:22:00', '2018-01-10', '17:00:00', 'Matthias', 'mayer', 'sd@ff.de', NULL, ''),
(48, 'Volkswagen', 'Passat', NULL, NULL, '2018-01-26', '16:22:00', '2018-01-12', '17:00:00', 'Kim', 'Roberts', 'kr@kr.com', NULL, ''),
(49, 'Porsche', '5er', NULL, NULL, '2018-01-16', '16:22:00', '2018-01-19', '17:00:00', 'Martin', 'Scheid', 'mat@mueller.com', NULL, 'sdf'),
(50, 'BMW', 'dfds', NULL, NULL, '2018-01-18', '16:22:00', '2018-01-10', '17:00:00', 'Matthias', 'MÃ¼ller', 'mat@mueller.com', NULL, ''),
(58, 'Mercedes', '5er', '8 seats', 'automatic drive, roof box', '2018-01-09', '16:22:00', '2018-01-13', '17:00:00', 'Stefan', 'Scheid', 'sd@ff.de', 0x75706c6f6164732f53746f7279626f6172645f322e4a5047, NULL),
(59, 'Mercedes', '5er', '8 seats', 'automatic drive, roof box', '2018-01-09', '16:22:00', '2018-01-13', '17:00:00', 'Stefan', 'Scheid', 'sd@ff.de', 0x75706c6f6164732f53746f7279626f6172645f312e4a5047, NULL);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
