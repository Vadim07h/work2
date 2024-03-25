-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 11 2024 г., 16:21
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `master_VA`
--

-- --------------------------------------------------------

--
-- Структура таблицы `BIDS`
--

CREATE TABLE `BIDS` (
  `id` int NOT NULL,
  `title` varchar(30) NOT NULL,
  `discription` varchar(100) NOT NULL,
  `adress` varchar(30) NOT NULL,
  `user_id` int DEFAULT NULL,
  `status` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Новая'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `BIDS`
--

INSERT INTO `BIDS` (`id`, `title`, `discription`, `adress`, `user_id`, `status`) VALUES
(1, 'Кофемашинка капсульная Krups ', 'Не включается', 'г.Москва, ул.Святоозерская д.9', 1, 'Подтверждена'),
(2, 'посудомойка', 'не моет', 'г.Москва ул.Бибиревская д.9', 6, 'Подтверждена'),
(3, 'ffgfg', 'gffgfg', 'gfgfg', 7, 'Отменина');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `login`, `password`, `role`) VALUES
(1, '9', '8 999 999 99 99', '999@gmail.com', 'master', 'qwerty', 1),
(6, 'Иванов Кирилл Петрович', '8 977 777 77 77', '111@gmail.com', 'aaa', '123', 0),
(7, 'Иванов Кирилл Петрович', '8 977 777 77 77', '222@gmail.com', 'qqq', '123', 0),
(8, 'fghfg', '8 977 777 77 77', '111@gmail.com', 'aaa', '123', 0),
(9, 'Максим Розенберг', '8 977 777 77 77', '111@gmail.com', 'asd', 'asd', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `BIDS`
--
ALTER TABLE `BIDS`
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
-- AUTO_INCREMENT для таблицы `BIDS`
--
ALTER TABLE `BIDS`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
