-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 22 2019 г., 14:44
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
-- База данных: `projectdatabase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES
(1, 'Yerkebulan07', 'coin98@list.ru', 'c2a81330fcb3f6849f0c9a07d3c334d2'),
(6, 'asddfghg', 'asasddfgh@mail.ru', '38859a28d9d3f611cbefd96d4db019eb'),
(7, 'YeraMrak', 'coin98@list.ru', 'c2a81330fcb3f6849f0c9a07d3c334d2'),
(8, 'darkhan', 'darkhan@gmail.com', '89b8aa520cd4c3505073d51c7b1fdd02'),
(9, 'Jony77', 'jony@mail.ru', '47c5c18ea2ad887225a3f2356c942432');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
