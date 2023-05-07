-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Май 07 2023 г., 17:03
-- Версия сервера: 5.7.39
-- Версия PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `TEST_DB`
--

-- --------------------------------------------------------

--
-- Структура таблицы `oders_info`
--

CREATE TABLE `oders_info` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `contact_info` varchar(255) NOT NULL,
  `price` decimal(2,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `oders_info`
--

INSERT INTO `oders_info` (`id`, `user_id`, `description`, `contact_info`, `price`) VALUES
(1, 2, 'test description', 'улица пушкина', '15'),
(2, 2, 'safvdahvis', 'vartuk kiaser', '19'),
(4, 2, 'краткое описание', 'pr. koroleva d. 65', '99'),
(5, 1, 'это тут впервые', 'а какая разница', '99'),
(8, 2, 'test', 'test', '10');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `login` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(500) NOT NULL,
  `avatar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES
(1, 'Александр Варкан', 'admin', 'Aleksandr.varkan@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'uploads/16832915831.jpg'),
(2, 'Варкан Александр', 'alex', 'ava@yan.ru', '534b44a19bf18d20b71ecc4eb77c572f', 'uploads/1683464247B565F262-AC2B-4BC2-B760-E20250451551 2.JPG');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `oders_info`
--
ALTER TABLE `oders_info`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `oders_info`
--
ALTER TABLE `oders_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
