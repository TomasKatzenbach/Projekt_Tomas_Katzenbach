-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: St 29.Máj 2024, 14:19
-- Verzia serveru: 10.4.32-MariaDB
-- Verzia PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `sj_projekt`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `Nazov` varchar(255) NOT NULL,
  `Popis` text NOT NULL,
  `Cena` float NOT NULL,
  `Obrazok` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `products`
--

INSERT INTO `products` (`ID`, `Nazov`, `Popis`, `Cena`, `Obrazok`) VALUES
(2, 'Webstránka \"Na Mieru\"', 'Naša služba úpravy webovej stránky je navrhnutá pre tých, ktorí už majú existujúcu webovú stránku, ale hľadajú možnosti na zlepšenie a prispôsobenie podľa svojich špecifických požiadaviek. S naším balíkom úpravy webovej stránky máte možnosť transformovať váš online priestor presne podľa vašich predstáv. Individualizované Prispôsobenia: Naši odborníci v oblasti webového dizajnu a vývoja pracujú s vami na identifikácii a implementácii individualizovaných prispôsobení pre vašu webovú stránku. Optimalizácia Pre Používateľskú Skúsenosť: Zabezpečujeme, aby vaša webová stránka poskytovala optimálnu používateľskú skúsenosť (UX), čím zlepšuje interakcie a zadržiava návštevníkov na vašom webe. Rýchlejšie Načítanie: Optimalizujeme kód a zdroje pre rýchlejšie načítanie stránok, čo prispieva k lepšiemu hodnoteniu vyhľadávačov a celkovej spokojnosti návštevníkov. Integrácia Nových Funkcií: Ak máte nové požiadavky alebo funkcie, radi ich integrujeme do vášho existujúceho webového prostredia. Rady a Odborné Odporúčania: Poskytujeme odborné rady a odporúčania pre zlepšenie viditeľnosti a efektívnosti vášej webovej stránky.', 500, 'img/produkt2.png'),
(9, 'Úprava webstránky', 'Naša služba úpravy webovej stránky je navrhnutá pre tých, ktorí už majú existujúcu webovú stránku, ale hľadajú možnosti na zlepšenie a prispôsobenie podľa svojich špecifických požiadaviek. S naším balíkom úpravy webovej stránky máte možnosť transformovať váš online priestor presne podľa vašich predstáv. Individualizované Prispôsobenia: Naši odborníci v oblasti webového dizajnu a vývoja pracujú s vami na identifikácii a implementácii individualizovaných prispôsobení pre vašu webovú stránku. Optimalizácia Pre Používateľskú Skúsenosť: Zabezpečujeme, aby vaša webová stránka poskytovala optimálnu používateľskú skúsenosť (UX), čím zlepšuje interakcie a zadržiava návštevníkov na vašom webe. Rýchlejšie Načítanie: Optimalizujeme kód a zdroje pre rýchlejšie načítanie stránok, čo prispieva k lepšiemu hodnoteniu vyhľadávačov a celkovej spokojnosti návštevníkov. Integrácia Nových Funkcií: Ak máte nové požiadavky alebo funkcie, radi ich integrujeme do vášho existujúceho webového prostredia. Rady a Odborné Odporúčania: Poskytujeme odborné rady a odporúčania pre zlepšenie viditeľnosti a efektívnosti vašej webovej stránky.', 250, 'img/produkt1.jpg'),
(11, 'Produkt ', 'Produkt', 50, 'img/valid.png');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `spravy`
--

CREATE TABLE `spravy` (
  `ID` int(11) NOT NULL,
  `Meno` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `spravy`
--

INSERT INTO `spravy` (`ID`, `Meno`, `Email`, `Text`) VALUES
(1, 'Tomas', 'ekam51@gmail.com', 'Ahoj'),
(2, 'Martin', 'martinmatko@gmail.com', 'Dobry den chcem stranku'),
(3, 'Uzivatel', 'uzivatel@uzivatel.sk', 'Sprava');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Role` varchar(32) NOT NULL DEFAULT 'User',
  `Meno` varchar(255) NOT NULL,
  `Priezvisko` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Tel_cislo` varchar(255) NOT NULL,
  `Heslo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `users`
--

INSERT INTO `users` (`ID`, `Role`, `Meno`, `Priezvisko`, `Email`, `Tel_cislo`, `Heslo`) VALUES
(0, 'Admin', 'Tomáš', 'Katzenbach', 'ekam51@gmail.com', '0944645429', '$2y$10$QWRPFsIztguAjsYINjslbOmkiZ485.2Pb5KGfCPjOPVDeO1JYKfu6'),
(1, 'User', 'Martin', 'Mucha', 'martinmucha@gmail.com', '0909090909', '$2y$10$QWRPFsIztguAjsYINjslbOmkiZ485.2Pb5KGfCPjOPVDeO1JYKfu6'),
(5, 'User', 'Tomas', 'Martin', 'tomasmartin@gmail.com', '090909090909', '$2y$10$3IoXZD8mMF4C1NjL.phOGuKD83IgxoQUU8sbK7yxHYYJpwMIywfDK');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexy pre tabuľku `spravy`
--
ALTER TABLE `spravy`
  ADD PRIMARY KEY (`ID`);

--
-- Indexy pre tabuľku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pre tabuľku `spravy`
--
ALTER TABLE `spravy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pre tabuľku `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
