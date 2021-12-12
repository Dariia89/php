-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3308
-- Время создания: Дек 12 2021 г., 23:23
-- Версия сервера: 5.6.51
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lesson5`
--

-- --------------------------------------------------------

--
-- Структура таблицы `dogs`
--

CREATE TABLE `dogs` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `img` varchar(20) NOT NULL,
  `size` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `dogs`
--

INSERT INTO `dogs` (`id`, `name`, `img`, `size`, `count`) VALUES
(1, '0', 'dog.jpg', 600, 5),
(2, '1', 'dog1.jpg', 600, 8),
(3, '2', 'dog2.jpg', 600, 5),
(4, '3', 'dog3.jpg', 600, 7),
(5, '4', 'dog4.jpg', 600, 11),
(6, '5', 'dog5.jpg', 600, 19),
(7, '6', 'dog6.jpg', 600, 15),
(8, '7', 'dog7.jpg', 600, 7),
(9, '8', 'dog8.jpg', 600, 11);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `dogs`
--
ALTER TABLE `dogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `dogs`
--
ALTER TABLE `dogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
