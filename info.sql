-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 22 2019 г., 14:43
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `crud`
--

-- --------------------------------------------------------

--
-- Структура таблицы `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `info`
--

INSERT INTO `info` (`id`, `p_name`, `address`, `image`, `price`) VALUES
(7, 'Bed', 'New-York', 'http://sami-stroim.com/sites/default/files/spalnia_0.jpg', '580$');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
