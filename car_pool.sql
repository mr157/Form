-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 30. Dez 2017 um 15:02
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
  `seat` int(11) DEFAULT NULL,
  `equip` int(11) DEFAULT NULL,
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
(1, 'BMW', '5er', NULL, NULL, NULL, NULL, NULL, NULL, 'Matthias', 'RÃ¼ger', 'mm@gmx.de', '', NULL),
(3, 'Mercedes', 'C-classe', NULL, NULL, NULL, NULL, NULL, NULL, 'Christian', 'MÃ¼ller', 'cm@gmx.de', '', NULL),
(4, 'BMW', 'sdfad2', NULL, NULL, NULL, NULL, NULL, NULL, 'Testd', 'Test', 'sd@ff.de', '', NULL),
(12, '3', 'df', NULL, NULL, NULL, NULL, NULL, NULL, 'Martin', 'Scheid', 'sd@ff.de', NULL, NULL),
(13, 'BMW', 'Meiner', NULL, NULL, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'asd', 'asd', 'dd@mm.de', NULL, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
