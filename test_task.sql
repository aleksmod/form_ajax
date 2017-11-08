-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 08 2017 г., 15:25
-- Версия сервера: 10.1.16-MariaDB
-- Версия PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_task`
--

-- --------------------------------------------------------

--
-- Структура таблицы `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `account` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `accounts`
--

INSERT INTO `accounts` (`id`, `account`, `user_id`, `added`) VALUES
(1, 29, 1, '2017-11-10 01:17:19'),
(2, 18, 2, '2017-11-08 02:09:00'),
(5, 11, 3, '2017-11-09 10:02:00'),
(6, 34, 3, '2017-11-22 10:09:11'),
(7, 46, 1, '2017-11-07 15:21:02'),
(8, 46, 1, '2017-11-07 15:21:07'),
(9, 212, 1, '2017-11-08 14:06:35'),
(10, 34342, 23, '2017-11-08 14:06:49'),
(11, 454, 5, '2017-11-08 14:07:05'),
(12, 223, 41, '2017-11-08 14:11:08');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `usr_name` varchar(256) NOT NULL,
  `usr_email` varchar(256) NOT NULL,
  `usr_address` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `usr_name`, `usr_email`, `usr_address`) VALUES
(1, 'Alex', 'alex@gmail.com', 'Ukraine'),
(2, 'John', 'john@gmail.com', 'USA'),
(3, 'Emma', 'emma@uk.mail', 'UK'),
(5, 'Karl', 'karl@mail.de', 'Germany'),
(6, 'Otto', 'otto@mail.de', 'Germany'),
(23, 'Bob', 'bob@mail.net', 'Germany'),
(34, 'Lee', 'lee@mail', 'China'),
(41, 'Yan', 'yan@mail', 'Poland'),
(52, 'Vasya', 'vas@mail', 'Russia');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
