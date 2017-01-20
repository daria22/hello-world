-- phpMyAdmin SQL Dump
-- version 4.4.8
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Янв 20 2017 г., 21:03
-- Версия сервера: 5.6.24
-- Версия PHP: 5.6.10RC1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `stud0505_user`
--

-- --------------------------------------------------------

--
-- Структура таблицы `NEWS`
--

CREATE TABLE IF NOT EXISTS `NEWS` (
  `Title` varchar(20) NOT NULL,
  `ID` int(11) NOT NULL,
  `Info` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `NEWS`
--

INSERT INTO `NEWS` (`Title`, `ID`, `Info`) VALUES
('new', 2, 'lol'),
('S', 3, 'A');

-- --------------------------------------------------------

--
-- Структура таблицы `USER`
--

CREATE TABLE IF NOT EXISTS `USER` (
  `ID` bigint(20) NOT NULL,
  `Login` varchar(30) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Number` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `USER`
--

INSERT INTO `USER` (`ID`, `Login`, `Password`, `Name`, `Number`) VALUES
(37, 'Bill@gmail.com', 'password', 'Bill', 0),
(38, 'Email@gmail.com', 'password', 'Paul', 0),
(39, 'Bgf@gmail.com', 'bill', 'Bill', 0),
(40, 'Gll@gmail.com', '', 'Bis', 0),
(41, 'someMail@gmail.com', '', 'Till', 0),
(43, 'Bisssll@gmail.com', 'password', 'Daria', 0),
(45, 'Bissssdall@gmail.com', 'password', 'Dasha', 0),
(46, 'Bill@gmail.comds', 'password', 'ger', 1234567890);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `NEWS`
--
ALTER TABLE `NEWS`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `USER`
--
ALTER TABLE `USER`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Login` (`Login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `NEWS`
--
ALTER TABLE `NEWS`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `USER`
--
ALTER TABLE `USER`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
