-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Окт 07 2017 г., 18:16
-- Версия сервера: 5.6.33-79.0-log
-- Версия PHP: 5.6.30-pl0-gentoo

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rosakaderf_avto`
--

-- --------------------------------------------------------

--
-- Структура таблицы `forma`
--

DROP TABLE IF EXISTS `forma-english`;
CREATE TABLE `forma-english` (
  `ID` int(30) NOT NULL,
  `name` varchar(85) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8 NOT NULL,
  `body` text CHARACTER SET utf8 NOT NULL,
  `fromfield` int(11) NOT NULL,
  `pack` varchar(30) CHARACTER SET utf8 NOT NULL,
  `packet` varchar(50) CHARACTER SET utf8 NOT NULL,
  `fromUrl` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `info` text CHARACTER SET utf8 NOT NULL,
  `total` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `forma`
--

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `forma`
--
ALTER TABLE `forma-english`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `forma`
--
ALTER TABLE `forma-english`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=400;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
