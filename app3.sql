-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 04 2019 г., 13:44
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
(16, 'asasasasasd2zzzа', 'wwwа', '4473044d7169b8efbe247075866ea1a2.jpg', 'eeehhа', '2019-04-04 08:20:29'),
(19, 'анг', 'анг', '5c8a8ccc48d7d.jpg', 'ынг', '2019-03-14 17:18:04'),
(21, 'srtg', 'argt', '5c8e67433e3ad.jpg', 'art', '2019-03-17 15:26:59'),
(27, 'xhg', 'cghj', '5c8e73307f1f6.jpg', 'xhj', '2019-03-17 16:17:52'),
(29, 'vuhl', 'vhijl', '9228164f28bf5eee8e3a85b3ae20b0bc.jpg', 'vhul', '2019-04-04 08:55:53'),
(65, 'fgh', 'gfh', 'c282a06ffb4b98dbcbc8ba7c34f5322c.jpg', 'xfgh', '2019-04-04 10:41:46'),
(68, 'io', 'ui', '25602c609b459a540993381230db36f5.jpg', 'ui', '2019-04-04 10:43:00'),
(69, 'jl', 'lkj', '2aa868701073b08b5aaa2ecc5913522d.jpg', 'bkl', '2019-04-04 10:43:14');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
