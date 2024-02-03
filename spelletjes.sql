-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 11:34 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spelletjes`
--

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` mediumint(9) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `rating` decimal(2,1) DEFAULT NULL,
  `beschrijving` text DEFAULT NULL,
  `imgcode` varchar(255) DEFAULT NULL,
  `titel` varchar(255) DEFAULT NULL,
  `categorie` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `code`, `rating`, `beschrijving`, `imgcode`, `titel`, `categorie`) VALUES
(1, 'https://cdn.htmlgames.com/embed.js?game=SoldierAttack2&amp;bgcolor=white', '4.0', 'Soldier Attack 2 HTML5-game: Nieuwe niveaus: schiet de aliens neer met zo min mogelijk schoten. Richt en klik om te schieten.', 'https://images-ext-2.discordapp.net/external/aHH0A-OOLlQEIMYddYIEnPcziYoNG8Gh11SvUscmeo0/https/www.htmlgames.com/uploaded/game/thumb/soldierattack2300.webp?width=375&height=250', 'Soldier Attack 2', 'actie'),
(2, 'https://cdn.htmlgames.com/embed.js?game=WinterAttack&amp;bgcolor=white', '3.0', 'Winter Attack HTML5 game: Schiet alle aliens neer met zo min mogelijk schoten. Ain en klik om te schieten. Schakel onderaan tussen schoten en bommen.', 'https://www.htmlgames.com/uploaded/game/thumb/winterattack300200.webp', 'Winter Attack', 'actie'),
(3, 'https://cdn.htmlgames.com/embed.js?game=StayInTheDark&amp;bgcolor=white', '4.0', 'Als u ads.txt heeft geïmplementeerd op het domein waar u onze games insluit, moet u onze ads.txt-vermeldingen toevoegen aan uw ads.txt-bestand om ervoor te zorgen dat onze games werken.', 'https://www.htmlgames.com/uploaded/game/thumb/stayinthedark300200.webp', 'Stay in the Dark', 'actie'),
(4, 'https://cdn.htmlgames.com/embed.js?game=SaloonShootout&amp;bgcolor=white', '3.0', 'Saloon Shootout HTML5-game: Schiet de slechteriken neer voordat ze op jou schieten. Klik/tik om te schieten. Klik op de kogels (linksboven) om te herladen. Raak de onschuldigen niet.', 'https://www.htmlgames.com/uploaded/game/thumb/saloonshootout300.webp', 'Saloon Shootout', 'actie'),
(5, 'https://cdn.htmlgames.com/embed.js?game=RedAndGreen&amp;bgcolor=white', '4.0', 'Rood en groen HTML5-spel: schiet kanonskogels en verplaats de dieren naar hun eigen snoepjes. Beweeg om te richten en klik om te schieten.\r\n', 'https://www.htmlgames.com/uploaded/game/thumb200/redandgreen200.webp', 'Red and Green', 'actie'),
(6, 'https://cdn.htmlgames.com/embed.js?game=CatchTheThief&bgcolor=white', '4.0', 'Vang de dief HTML5-game: vang alle dieven door ze te bevriezen. Gebruik de bedieningselementen op het scherm of de pijltjestoetsen en spatiebalk.', 'https://www.htmlgames.com/uploaded/game/thumb200/catchthethief200.webp', 'Catch Saif', 'avontuur'),
(7, 'https://cdn.htmlgames.com/embed.js?game=MonkeyInTrouble2&bgcolor=white', '3.0', 'Monkey in Trouble 2 HTML5-spel: nieuwe niveaus: verzamel al het fruit en ontwijk de vijanden. Beweeg met de pijltjestoetsen of veeg op een aanraakapparaat. Schiet bananen met de spatiebalk of tik op het scherm.', 'https://www.htmlgames.com/uploaded/game/thumb/monkeyintrouble2300.webp', 'Saif in Trouble 2', 'avontuur'),
(9, 'https://cdn.htmlgames.com/embed.js?game=Avoider&bgcolor=white', '3.0', 'Avoider HTML5-spel: spring omhoog en vermijd de platforms. Tik of gebruik de spatiebalk om te springen.\r\n', 'https://www.htmlgames.com/uploaded/game/thumb200/avoider200.webp', 'Avoider', 'avontuur'),
(10, 'https://cdn.htmlgames.com/embed.js?game=AliceInWonderland&amp;bgcolor=white', '4.0', 'Alice in Wonderland HTML5-spel: Verzamel de sleutels om de deur naar het volgende niveau te openen. Gebruik de pijltjestoetsen om te bewegen en de spatiebalk (of springknop) om te springen.', 'https://www.htmlgames.com/uploaded/game/thumb200/aliceInwonderland200.webp', 'Alice in Wonderland', 'avontuur'),
(11, 'https://cdn.htmlgames.com/embed.js?game=DragonRun&amp;bgcolor=white', '4.0', 'Dragon Run HTML5-game: spring en schuif in dit eindeloze runner-spel. Ontwijk de obstakels en verzamel de diamanten en letters.\r\n', 'https://www.htmlgames.com/uploaded/game/thumb200/dragonrun200.webp', 'Dragon Run', 'avontuur'),
(12, 'https://cdn.htmlgames.com/embed.js?game=Hashiwokakero&bgcolor=white', '5.0', 'Hashiwokakero HTML5-spel: verbind alle eilanden met bruggen met behulp van de gegeven nummers. Maak zoveel bruggen van/naar een eiland als is aangegeven. Twee eilanden kunnen alleen verticaal of horizontaal met elkaar worden verbonden en met niet meer dan 2 bruggen.\r\n', 'https://www.htmlgames.com/uploaded/game/thumb200/hashiwokakero200.webp', 'Hashiwokakero', 'puzzel'),
(13, 'https://cdn.htmlgames.com/embed.js?game=SlidePuzzle&amp;bgcolor=white', '4.0', 'Schuifpuzzel HTML5-spel: los de schuifpuzzel op. Verplaats alle stukken naar de juiste plek.', 'https://www.htmlgames.com/uploaded/game/thumb200/slidepuzzle200.webp', 'Slide Puzzle', 'puzzel'),
(14, 'https://cdn.htmlgames.com/embed.js?game=1010Bricks&bgcolor=white', '4.0', '1010 Bricks HTML5 game: Help the penguin to place all bricks. Drag shapes onto the grid and complete rows and/or columns.', 'https://www.htmlgames.com/uploaded/game/thumb200/1010bricks200.webp', '1010 Bricks', 'puzzel'),
(15, 'https://cdn.htmlgames.com/embed.js?game=SlideAndRoll&amp;bgcolor=white', '3.0', 'Slide and Roll HTML5-spel: leuke schuifpuzzel. Schuif blokken en laat de bal het doel bereiken.', 'https://www.htmlgames.com/uploaded/game/thumb200/slideandroll200.webp', 'Slide and Roll', 'puzzel'),
(16, 'https://cdn.htmlgames.com/embed.js?game=JigsawJamWorld&amp;bgcolor=white', '4.0', 'Jigsaw Jam World HTML5 game: Voltooi de Jigsaw Puzzle en reis de wereld rond door stukjes naar de juiste plek te slepen.', 'https://www.htmlgames.com/uploaded/game/thumb200/jigsawjamworld200.webp', 'Jigsaw Jam World', 'puzzel'),
(17, 'https://cdn.htmlgames.com/embed.js?game=GiantSlalom&amp;bgcolor=white', '4.0', 'Reuzenslalom HTML5-spel: winterspel Reuzenslalom. Ga naar links en rechts en ski rechts van de rode poort en links van de blauwe poort.\r\n', 'https://www.htmlgames.com/uploaded/game/thumb200/giantslalom200.webp', 'Giant Slalom', 'sport'),
(18, 'https://cdn.htmlgames.com/embed.js?game=Baseball&amp;bgcolor=white', '3.0', 'Honkbal HTML5-spel: leuk oefenspel voor honkbal. Klik om naar de bal te zwaaien.\r\n', 'https://www.htmlgames.com/uploaded/game/thumb200/baseball200.webp', 'Baseball', 'sport'),
(19, 'https://cdn.htmlgames.com/embed.js?game=Tennis&amp;bgcolor=white', '4.0', 'Tennis HTML5 game: Speel een potje Tennis tegen een sterke tegenstander, kun jij winnen?', 'https://www.htmlgames.com/uploaded/game/thumb200/tennis200.webp', 'Tennis', 'sport'),
(20, 'https://cdn.htmlgames.com/embed.js?game=BasketballLegend&amp;bgcolor=white', '4.0', 'Basketball Legend HTML5-spel: leuk basketbalspel. Schiet de bal in de basket. Sleep over het scherm om je schot te bepalen.', 'https://www.htmlgames.com/uploaded/game/thumb/basketballlegend300200.webp', 'Basketball Legend', 'sport'),
(21, 'https://cdn.htmlgames.com/embed.js?game=AirHockey&amp;bgcolor=white', '4.0', 'Airhockey HTML5-spel: scoor jij de meeste punten in dit airhockeyspel?\r\n', 'https://www.htmlgames.com/uploaded/game/thumb200/airhockey200.webp', 'Air Hockey', 'sport'),
(22, 'https://cdn.htmlgames.com/embed.js?game=TrafficRacer&amp;bgcolor=white', '3.0', 'Traffic Racer HTML5-game: race in druk verkeer en vermijd botsingen. Gebruik de pijltjestoetsen of de pijltjes in het zicht om je auto te besturen.\r\n', 'https://www.htmlgames.com/uploaded/game/thumb200/trafficracer200.webp', 'Traffic Racer', 'race'),
(23, 'https://cdn.htmlgames.com/embed.js?game=BigParking&amp;bgcolor=white', '3.0', 'Big Parking HTML5 game: Parkeer je auto veilig op de aangegeven parkeerplaats.\r\n', 'https://www.htmlgames.com/uploaded/game/thumb200/bigparking200.webp', 'Big Parking', 'race'),
(24, 'x', '0.0', 'coming soon', 'x', 'coming soon', 'race'),
(25, '1234', '0.0', 'coming soon', '4321', 'coming soon', 'race'),
(26, '1234', '0.0', 'x', '4321', 'coming soon', 'race');

-- --------------------------------------------------------

--
-- Table structure for table `gebruikers`
--

CREATE TABLE `gebruikers` (
  `id` mediumint(9) NOT NULL,
  `gebruikersnaam` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `wachtwoord` varchar(100) DEFAULT NULL,
  `admin` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gebruikers`
--

INSERT INTO `gebruikers` (`id`, `gebruikersnaam`, `email`, `wachtwoord`, `admin`) VALUES
(1, 'ADMIN', 'ADMIN@admin.com', '$2y$10$kHuLYwvTr7Qv/Tlaiv.Pa.D4HtQB6fv5XfUf9UR10F7ryH7RB.7TC', 'YES'),
(2, 'Djai', 'djaistruik@gmail.com', '$2y$10$/rYkJsH6Zuaks9FvykOF9OwY.PkDHR5O9ca1J0LhceZZBML.lJa8O', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
