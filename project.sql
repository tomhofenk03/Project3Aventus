-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 19 apr 2022 om 18:45
-- Serverversie: 10.4.22-MariaDB
-- PHP-versie: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

--
-- Tabelstructuur voor tabel `adresgegevens`
--

CREATE TABLE `adresgegevens` (
  `adresgegevens_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `straat` varchar(255) NOT NULL,
  `woonplaats` varchar(255) NOT NULL,
  `postcode` varchar(6) NOT NULL,
  `provincie` varchar(255) NOT NULL,
  `land` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `hobbys`
--

CREATE TABLE `hobbys` (
  `hobby_id` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `hobby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `opleidingen`
--

CREATE TABLE `opleidingen` (
  `opleiding_id` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `opleiding` varchar(255) NOT NULL,
  `begindatum_opleiding` varchar(255) NOT NULL,
  `einddatum_opleiding` varchar(255) NOT NULL,
  `omschrijving_opleiding` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `persoonlijkeinformatie`
--

CREATE TABLE `persoonlijkeinformatie` (
  `persinfo_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `geboorteplaats` varchar(255) NOT NULL,
  `geboortedatum` date NOT NULL,
  `nationaliteit` varchar(255) NOT NULL,
  `rijbewijs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `testtabel`
--

CREATE TABLE `testtabel` (
  `persoon` varchar(100) NOT NULL,
  `kleur` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `testtabel`
--

INSERT INTO `testtabel` (`persoon`, `kleur`) VALUES
('anouk', 'blue');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(7, 'admin1', '$2y$10$KAgFgZT9u5CMzsgvYo0HfeSDM8ZIAYNIhecWyCql6QwwUt7MXc8w.');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vaardigheden`
--

CREATE TABLE `vaardigheden` (
  `vaardigheid_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `vaardigheid` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `werkervaring`
--

CREATE TABLE `werkervaring` (
  `werkervaring_id` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `werkervaring` varchar(255) NOT NULL,
  `begindatum_werkervaring` varchar(255) NOT NULL,
  `einddatum_werkervaring` varchar(255) NOT NULL,
  `omschrijving_werkervaring` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `adresgegevens`
--
ALTER TABLE `adresgegevens`
  ADD PRIMARY KEY (`adresgegevens_id`),
  ADD KEY `id` (`id`);

--
-- Indexen voor tabel `hobbys`
--
ALTER TABLE `hobbys`
  ADD PRIMARY KEY (`hobby_id`),
  ADD KEY `id` (`id`);

--
-- Indexen voor tabel `opleidingen`
--
ALTER TABLE `opleidingen`
  ADD PRIMARY KEY (`opleiding_id`),
  ADD KEY `id` (`id`);

--
-- Indexen voor tabel `persoonlijkeinformatie`
--
ALTER TABLE `persoonlijkeinformatie`
  ADD PRIMARY KEY (`persinfo_id`),
  ADD KEY `idd` (`id`);

--
-- Indexen voor tabel `testtabel`
--
ALTER TABLE `testtabel`
  ADD PRIMARY KEY (`persoon`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexen voor tabel `vaardigheden`
--
ALTER TABLE `vaardigheden`
  ADD PRIMARY KEY (`vaardigheid_id`),
  ADD KEY `id` (`id`);

--
-- Indexen voor tabel `werkervaring`
--
ALTER TABLE `werkervaring`
  ADD PRIMARY KEY (`werkervaring_id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `adresgegevens`
--
ALTER TABLE `adresgegevens`
  MODIFY `adresgegevens_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `hobbys`
--
ALTER TABLE `hobbys`
  MODIFY `hobby_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `opleidingen`
--
ALTER TABLE `opleidingen`
  MODIFY `opleiding_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `persoonlijkeinformatie`
--
ALTER TABLE `persoonlijkeinformatie`
  MODIFY `persinfo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `vaardigheden`
--
ALTER TABLE `vaardigheden`
  MODIFY `vaardigheid_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `werkervaring`
--
ALTER TABLE `werkervaring`
  MODIFY `werkervaring_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `adresgegevens`
--
ALTER TABLE `adresgegevens`
  ADD CONSTRAINT `adresgegevens_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `hobbys`
--
ALTER TABLE `hobbys`
  ADD CONSTRAINT `hobbys_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `opleidingen`
--
ALTER TABLE `opleidingen`
  ADD CONSTRAINT `opleidingen_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `persoonlijkeinformatie`
--
ALTER TABLE `persoonlijkeinformatie`
  ADD CONSTRAINT `persoonlijkeinformatie_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `vaardigheden`
--
ALTER TABLE `vaardigheden`
  ADD CONSTRAINT `vaardigheden_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `werkervaring`
--
ALTER TABLE `werkervaring`
  ADD CONSTRAINT `werkervaring_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
