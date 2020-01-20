-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 20 2020 г., 06:14
-- Версия сервера: 10.3.18-MariaDB-50+deb10u1.cba-log
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rokiebutgood`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `number` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `task` text NOT NULL,
  `status` tinyint(1) DEFAULT 0,
  `changed` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`number`, `name`, `email`, `task`, `status`, `changed`) VALUES
(1, 'Инкогнито', 'test@test.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae augue eu est hendrerit bibendum. Fusce quis enim facilisis, pellentesque augue at, gravida nisl. Vestibulum lacinia ornare eros eget porta. Curabitur molestie sem metus, in ornare odio euismod at. Mauris interdum tincidunt enim, non efficitur sem. Curabitur tempus arcu a nulla porta iaculis. Suspendisse leo mi, ultrices in blandit vitae, placerat ac arcu. Etiam commodo at dolor quis convallis. Mauris at arcu eget justo ultricies consequat non at tortor. Curabitur finibus porta pulvinar. Quisque dignissim dui justo, et gravida eros fermentum id.', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `name` text NOT NULL,
  `password` text NOT NULL,
  `role` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`name`, `password`, `role`) VALUES
('admin', '123', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`number`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
