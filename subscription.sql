-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 27 2021 г., 14:29
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `subscription`
--

-- --------------------------------------------------------

--
-- Структура таблицы `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subscription_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `subscription_date`) VALUES
(1, 'aaa@aaa.lv', '2021-04-25 11:04:26'),
(3, 'aaa@bbb.lv', '2021-04-25 11:32:38'),
(4, 'ssadasd@inbox.com', '2021-04-25 22:25:54'),
(5, 'test@test.lv', '2021-04-26 12:20:26'),
(6, 'gmail@gmail.com', '2021-04-26 12:30:29'),
(8, 'example@example.com', '2021-04-26 22:05:04'),
(9, 'email@test.lv', '2021-04-27 10:55:53'),
(10, 'qwerty@gmail.com', '2021-04-27 11:11:47'),
(11, 'news@delfi.lv', '2021-04-27 13:59:10');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
