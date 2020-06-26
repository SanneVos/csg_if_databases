-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 30 apr 2020 om 08:13
-- Serverversie: 5.7.28-0ubuntu0.19.04.2-log
-- PHP-versie: 7.2.24-0ubuntu0.19.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------
-- Aangemaakt: 30 apr 2020 om 06:56
-- Laatst bijgewerkt: 30 apr 2020 om 07:31
-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `fotos`
--
-- Aangemaakt: 30 apr 2020 om 06:56
--

DROP TABLE IF EXISTS `fotos`;
CREATE TABLE `fotos` (
  `id` int(4) NOT NULL,
  `titel` varchar(32) NOT NULL,
  `subtitel` varchar(64) NOT NULL,
  `omschrijving` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `fotos`
--

INSERT INTO `fotos` (`id`, `titel`, `subtitel`, `omschrijving`) VALUES
(0, 'Museum', 'Chalon-sur-SaÃƒÂ´ne (Frankrijk), 27 april 2020', 'Foto genomen in MusÃƒÂ©e NicÃƒÂ©phore NiÃƒÂ©pce.'),
(1, 'Van Gogh' , 'Sterrennacht', '1889, olieverf', 'Dit schilderij staat op het moment in New York in het Museum of Modern Art')


-- --------------------------------------------------------
--
-- Indexen voor geëxporteerde tabellen
--


-- Indexen voor tabel `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
