-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 03 2019 г., 19:40
-- Версия сервера: 5.7.23
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `app3`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(60) DEFAULT NULL,
  `text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `image`, `text`, `date`) VALUES
(16, 'asasasasasd2zzz', 'www', '5c8683833b830.jpg', 'eeehh', '2019-03-11 15:49:23'),
(19, 'анг', 'анг', '5c8a8ccc48d7d.jpg', 'ынг', '2019-03-14 17:18:04'),
(21, 'srtg', 'argt', '5c8e67433e3ad.jpg', 'art', '2019-03-17 15:26:59'),
(27, 'xhg', 'cghj', '5c8e73307f1f6.jpg', 'xhj', '2019-03-17 16:17:52'),
(29, 'vuhl', 'vhijl', '5c8f7908056f9.jpg', 'vhul', '2019-03-18 10:55:04'),
(36, 'cguk', 'ci', '5347edb9dffc847ca92e688f652f3726.jpg', 'cyi', '2019-04-03 16:24:58'),
(37, 'dtyfffww', 'etg', 'c07915e557ec75d4c9a5deab8c88a599.jpg', 'tetfff', '2019-04-03 16:34:53'),
(38, 'fi', 'hil', 'f3c37664d9dcb4d4815f37104cafb942.jpg', 'gil', '2019-04-03 16:32:55');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
