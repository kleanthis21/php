-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 12 Μαρ 2018 στις 21:27:30
-- Έκδοση διακομιστή: 10.1.30-MariaDB
-- Έκδοση PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `cd`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `buy`
--

CREATE TABLE `buy` (
  `title` text NOT NULL,
  `artist` text NOT NULL,
  `cost` int(11) NOT NULL,
  `name` text NOT NULL,
  `numbank` varchar(15) NOT NULL,
  `category` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `buy`
--

INSERT INTO `buy` (`title`, `artist`, `cost`, `name`, `numbank`, `category`, `date`) VALUES
('Never say never', 'Bieber', 13, 'dsa', '12', 'pop', '2016-06-08'),
('happy', 'beatles', 28, 'dsa', '12', 'rock', '2016-06-08'),
('hood', '2pac', 12, '', '', 'hiphop', '2018-03-12'),
('harmony', 'shakira', 20, '', '', 'pop', '2018-03-12');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `hiphop`
--

CREATE TABLE `hiphop` (
  `title` text NOT NULL,
  `artist` text NOT NULL,
  `year` date NOT NULL,
  `company` text NOT NULL,
  `cost` int(11) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `hiphop`
--

INSERT INTO `hiphop` (`title`, `artist`, `year`, `company`, `cost`, `category`) VALUES
('hood', '2pac', '2003-04-12', 'dos', 12, 'hiphop'),
('woods', 'nas', '2015-12-14', 'bene', 10, 'hiphop'),
('Loose Yourself', 'Eminem', '2012-07-06', 'Eminem', 24, 'hiphop');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `pop`
--

CREATE TABLE `pop` (
  `title` text NOT NULL,
  `artist` text NOT NULL,
  `year` date NOT NULL,
  `company` text NOT NULL,
  `cost` varchar(11) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `pop`
--

INSERT INTO `pop` (`title`, `artist`, `year`, `company`, `cost`, `category`) VALUES
('Never say never', 'Bieber', '2005-10-11', 'sbg', '13', 'pop'),
('harmony', 'shakira', '2016-05-10', 'espana', '20', 'pop'),
('Back To Black', 'Winehouse', '2010-05-04', 'ethistic', '21', 'pop'),
('So What', 'Pink', '2012-06-06', 'pink', '30', 'pop'),
('love', 'celine', '2015-12-08', 'hbo', '5', 'pop');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `rock`
--

CREATE TABLE `rock` (
  `title` text NOT NULL,
  `artist` text NOT NULL,
  `year` date NOT NULL,
  `company` text NOT NULL,
  `cost` int(11) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `rock`
--

INSERT INTO `rock` (`title`, `artist`, `year`, `company`, `cost`, `category`) VALUES
('war', 'guns', '2000-12-17', 'jk', 15, 'rock'),
('you', 'metallica', '1992-03-07', 'aek', 17, 'rock'),
('happy', 'beatles', '1970-09-09', 'qwerty', 28, 'rock');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `user`
--

CREATE TABLE `user` (
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `numbank` varchar(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `user`
--

INSERT INTO `user` (`name`, `surname`, `password`, `email`, `numbank`, `address`) VALUES
('dsa', 'as', '12', 'ffgd@gf', '12', 'ds'),
('kleanthis', 'babo', '123', 'afa@hotmail.com', 'gda', 'ewfewfwe'),
('nikos', 'aek', '1234', 'a@a', '4321', 'qwerty'),
('kleanthis', 'mpampotsi', '123456', 'kleanthis.mpampotsi@', '124365', 'fdsfsd32');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `pop`
--
ALTER TABLE `pop`
  ADD PRIMARY KEY (`cost`);

--
-- Ευρετήρια για πίνακα `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`password`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
