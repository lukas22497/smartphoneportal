-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 13. Mai 2015 um 21:43
-- Server Version: 5.6.21
-- PHP-Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `smartphone_mueller_olej`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bluetooth`
--

CREATE TABLE IF NOT EXISTS `bluetooth` (
  `ID` int(11) NOT NULL,
  `rev` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `bluetooth`
--

INSERT INTO `bluetooth` (`ID`, `rev`) VALUES
(1, 'Bluetooth 4.0'),
(2, 'Bluetooth 3.0');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`ID` smallint(6) NOT NULL,
  `category` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `category`
--

INSERT INTO `category` (`ID`, `category`) VALUES
(1, 'Einsteigersmartphone'),
(2, 'Businessklasse'),
(3, 'Luxus');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `chip`
--

CREATE TABLE IF NOT EXISTS `chip` (
  `ID` int(11) NOT NULL,
  `chipname` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `chip`
--

INSERT INTO `chip` (`ID`, `chipname`) VALUES
(1, 'Qualcomm Snapdragon 400'),
(2, 'A8');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `network`
--

CREATE TABLE IF NOT EXISTS `network` (
`ID` int(11) NOT NULL,
  `network` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `network`
--

INSERT INTO `network` (`ID`, `network`) VALUES
(1, 'LTE'),
(2, '3G');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `os`
--

CREATE TABLE IF NOT EXISTS `os` (
`ID` tinyint(4) NOT NULL,
  `os` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `os`
--

INSERT INTO `os` (`ID`, `os`) VALUES
(1, 'Android 5.1'),
(2, 'iOS'),
(3, 'Windows Phone OS');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `picture`
--

CREATE TABLE IF NOT EXISTS `picture` (
  `ID` int(11) NOT NULL,
  `frontback` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `picture`
--

INSERT INTO `picture` (`ID`, `frontback`) VALUES
(1, 's6.png');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `size`
--

CREATE TABLE IF NOT EXISTS `size` (
  `ID` int(11) NOT NULL,
  `size` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `size`
--

INSERT INTO `size` (`ID`, `size`) VALUES
(1, '5,0"'),
(2, '4,7"');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `smartphone`
--

CREATE TABLE IF NOT EXISTS `smartphone` (
`ID` smallint(6) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `preis` decimal(6,2) DEFAULT NULL,
  `category_ID` smallint(6) NOT NULL,
  `os_ID` tinyint(4) NOT NULL,
  `specs_ID` smallint(6) NOT NULL,
  `picture_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `smartphone`
--

INSERT INTO `smartphone` (`ID`, `name`, `preis`, `category_ID`, `os_ID`, `specs_ID`, `picture_ID`) VALUES
(1, 'Samsung Galaxy S6', '799.00', 1, 1, 1, 1),
(2, 'Nexus 6', '699.00', 1, 1, 2, 1),
(3, 'iPhone 5c', '499.00', 2, 2, 2, 1),
(4, 'Nokia Lumia 630', '499.00', 3, 3, 1, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `specs`
--

CREATE TABLE IF NOT EXISTS `specs` (
`ID` smallint(6) NOT NULL,
  `screenresolution` varchar(45) NOT NULL,
  `weight` varchar(45) NOT NULL,
  `ppi` varchar(45) NOT NULL,
  `wlan_ID` tinyint(4) NOT NULL,
  `network_ID` int(11) NOT NULL,
  `bluetooth_ID` int(11) NOT NULL,
  `size_ID` int(11) NOT NULL,
  `chip_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `specs`
--

INSERT INTO `specs` (`ID`, `screenresolution`, `weight`, `ppi`, `wlan_ID`, `network_ID`, `bluetooth_ID`, `size_ID`, `chip_ID`) VALUES
(1, '1920 x 1080', '155 g', '468 ppi', 1, 1, 1, 1, 1),
(2, '1366x768', '150 g', '326 ppi', 2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` smallint(6) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`ID`, `name`, `email`, `password`) VALUES
(1, 'mueller_olej', 'test@test.de', 'smartphoneportal');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user_bewertet_smartphone`
--

CREATE TABLE IF NOT EXISTS `user_bewertet_smartphone` (
  `user_ID` smallint(6) NOT NULL,
  `smartphone_ID` smallint(6) NOT NULL,
  `note` varchar(45) DEFAULT NULL,
  `comment` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user_kommentiert_kommentare`
--

CREATE TABLE IF NOT EXISTS `user_kommentiert_kommentare` (
  `user_ID` smallint(6) NOT NULL,
  `user_bewertet_smartphone_user_ID` smallint(6) NOT NULL,
  `comment` varchar(45) DEFAULT NULL COMMENT 'user id = User ID des Users, der den Kommentar kommentiert.\n\nuser_bewertet_smartphone_user_id = Ursprünglicher zu kommentierender Kommentar\n\ncomment = neuer Kommentar zu vorhandenem Kommentar',
  `note` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `wlan`
--

CREATE TABLE IF NOT EXISTS `wlan` (
`ID` tinyint(4) NOT NULL,
  `wlan` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `wlan`
--

INSERT INTO `wlan` (`ID`, `wlan`) VALUES
(1, 'b/g/n/ac'),
(2, 'b/g/n');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `bluetooth`
--
ALTER TABLE `bluetooth`
 ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `chip`
--
ALTER TABLE `chip`
 ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `network`
--
ALTER TABLE `network`
 ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `os`
--
ALTER TABLE `os`
 ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `picture`
--
ALTER TABLE `picture`
 ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `size`
--
ALTER TABLE `size`
 ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `smartphone`
--
ALTER TABLE `smartphone`
 ADD PRIMARY KEY (`ID`,`category_ID`,`os_ID`,`specs_ID`,`picture_ID`), ADD KEY `fk_smartphone_category1_idx` (`category_ID`), ADD KEY `fk_smartphone_os1_idx` (`os_ID`), ADD KEY `fk_smartphone_specs1_idx` (`specs_ID`), ADD KEY `fk_smartphone_picture1_idx` (`picture_ID`);

--
-- Indizes für die Tabelle `specs`
--
ALTER TABLE `specs`
 ADD PRIMARY KEY (`ID`), ADD KEY `fk_specs_wlan1_idx` (`wlan_ID`), ADD KEY `fk_specs_network1_idx` (`network_ID`), ADD KEY `fk_specs_bluetooth1_idx` (`bluetooth_ID`), ADD KEY `fk_specs_size1_idx` (`size_ID`), ADD KEY `fk_specs_chip1_idx` (`chip_ID`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `user_bewertet_smartphone`
--
ALTER TABLE `user_bewertet_smartphone`
 ADD PRIMARY KEY (`user_ID`,`smartphone_ID`), ADD KEY `fk_user_has_smartphone_smartphone1_idx` (`smartphone_ID`), ADD KEY `fk_user_has_smartphone_user1_idx` (`user_ID`);

--
-- Indizes für die Tabelle `user_kommentiert_kommentare`
--
ALTER TABLE `user_kommentiert_kommentare`
 ADD PRIMARY KEY (`user_ID`,`user_bewertet_smartphone_user_ID`), ADD KEY `fk_user_has_user_bewertet_smartphone_user_bewertet_smartpho_idx` (`user_bewertet_smartphone_user_ID`), ADD KEY `fk_user_has_user_bewertet_smartphone_user1_idx` (`user_ID`);

--
-- Indizes für die Tabelle `wlan`
--
ALTER TABLE `wlan`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `category`
--
ALTER TABLE `category`
MODIFY `ID` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT für Tabelle `network`
--
ALTER TABLE `network`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `os`
--
ALTER TABLE `os`
MODIFY `ID` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT für Tabelle `smartphone`
--
ALTER TABLE `smartphone`
MODIFY `ID` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT für Tabelle `specs`
--
ALTER TABLE `specs`
MODIFY `ID` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `wlan`
--
ALTER TABLE `wlan`
MODIFY `ID` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `smartphone`
--
ALTER TABLE `smartphone`
ADD CONSTRAINT `fk_smartphone_category1` FOREIGN KEY (`category_ID`) REFERENCES `category` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_smartphone_os1` FOREIGN KEY (`os_ID`) REFERENCES `os` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_smartphone_picture1` FOREIGN KEY (`picture_ID`) REFERENCES `picture` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_smartphone_specs1` FOREIGN KEY (`specs_ID`) REFERENCES `specs` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `specs`
--
ALTER TABLE `specs`
ADD CONSTRAINT `fk_specs_bluetooth1` FOREIGN KEY (`bluetooth_ID`) REFERENCES `bluetooth` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_specs_chip1` FOREIGN KEY (`chip_ID`) REFERENCES `chip` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_specs_network1` FOREIGN KEY (`network_ID`) REFERENCES `network` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_specs_size1` FOREIGN KEY (`size_ID`) REFERENCES `size` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_specs_wlan1` FOREIGN KEY (`wlan_ID`) REFERENCES `wlan` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `user_bewertet_smartphone`
--
ALTER TABLE `user_bewertet_smartphone`
ADD CONSTRAINT `fk_user_has_smartphone_smartphone1` FOREIGN KEY (`smartphone_ID`) REFERENCES `smartphone` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_user_has_smartphone_user1` FOREIGN KEY (`user_ID`) REFERENCES `user` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `user_kommentiert_kommentare`
--
ALTER TABLE `user_kommentiert_kommentare`
ADD CONSTRAINT `fk_user_has_user_bewertet_smartphone_user1` FOREIGN KEY (`user_ID`) REFERENCES `user` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_user_has_user_bewertet_smartphone_user_bewertet_smartphone1` FOREIGN KEY (`user_bewertet_smartphone_user_ID`) REFERENCES `user_bewertet_smartphone` (`user_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
