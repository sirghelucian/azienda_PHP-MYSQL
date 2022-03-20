-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Creato il: Apr 08, 2019 alle 10:16
-- Versione del server: 5.6.38
-- Versione PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `azienda`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotto`
--

CREATE TABLE `prodotto` (
  `codice` int(10) NOT NULL,
  `codiceprod` varchar(20) DEFAULT NULL,
  `descrizione` varchar(50) DEFAULT NULL,
  `prezzo` float(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `prodotto`
--

INSERT INTO `prodotto` (`codice`, `codiceprod`, `descrizione`, `prezzo`) VALUES
(9, 'Apple', 'Iphone X 64GB', 759.99),
(10, 'Samsung', 'Galaxy S10', 859.00),
(11, 'Amazon', 'Echo PRO', 129.00),
(12, 'Apple', 'Ipad PRO', 999.99),
(13, 'Microsoft', 'Laptop 15 pollici', 999.99);

-- --------------------------------------------------------

--
-- Struttura della tabella `produttore`
--

CREATE TABLE `produttore` (
  `codice` varchar(20) NOT NULL,
  `ragionesociale` varchar(40) DEFAULT NULL,
  `partitaiva` varchar(40) DEFAULT NULL,
  `amministratore` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `produttore`
--

INSERT INTO `produttore` (`codice`, `ragionesociale`, `partitaiva`, `amministratore`) VALUES
('Amazon', 'Amazon LTE', '437848435887', 'Jeff Bezos'),
('Apple', 'Apple inc', '123456ABCD', 'Tim Cook'),
('Microsoft', 'Microsoft computer', 'ABCD12345', 'Steve Balmer'),
('Samsung', 'Samsung LTE', '789012ASFGS', 'Mr CHU'),
('Xiao MI', 'Xiao MI International inc', '23765763247342', 'CHi CIAN');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `prodotto`
--
ALTER TABLE `prodotto`
  ADD PRIMARY KEY (`codice`),
  ADD KEY `prodotto_ibfk_1` (`codiceprod`);

--
-- Indici per le tabelle `produttore`
--
ALTER TABLE `produttore`
  ADD PRIMARY KEY (`codice`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `prodotto`
--
ALTER TABLE `prodotto`
  MODIFY `codice` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `prodotto`
--
ALTER TABLE `prodotto`
  ADD CONSTRAINT `prodotto_ibfk_1` FOREIGN KEY (`codiceprod`) REFERENCES `produttore` (`codice`) ON DELETE CASCADE ON UPDATE CASCADE;
