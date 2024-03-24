-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 18 2024 г., 13:28
-- Версия сервера: 5.7.39
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `solo_watch`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_surename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `DateTime` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `user_name`, `user_surename`, `user_email`, `user_phone`, `DateTime`) VALUES
(4, 2, 6, 'Василий', 'Вакуленко', 'basta@mail.ru', '+7(546)464-65-46', '08.03.2024 02:38:15'),
(5, 1, 5, 'Евгений', 'Гладков', 'evg@mail.ru', '+7(962)034-80-28', '08.03.2024 19:01:11'),
(6, 1, 6, 'Евгений', 'Гладков', 'evg@mail.ru', '+7(111)111-11-11', '12.03.2024 18:26:29');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typeMech` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frame` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clockFace` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bracelet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `glass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `gender`, `model`, `country`, `typeMech`, `frame`, `clockFace`, `bracelet`, `glass`, `size`, `img`) VALUES
(4, 'TONI', 'Великолепно выполненный дизайн и швейцарское качество сборки сочетают в себе искусство и утонченность. Master Series. Механические оригинальные наручные часы-хронометр. Сертифицирован швейцарским институтом тестирования официальных хронометров. Ротор и мосты механизма с родиевым покрытием. В механизме 25 камней. Запас хода 40 часов. Круглый стальной корпус c полированной поверхностью.\r\n\r\n', 90000, 'Мужской', 'productModel', 'productCountry', 'mechanic', 'productFrame', 'productClockFace', 'productBracelet', 'sapfir', 'productSize', '65f20a222774d.png'),
(5, 'TONI 83188-S-575', 'Великолепно выполненный дизайн и швейцарское качество сборки сочетают в себе искусство и утонченность. Master Series. Механические оригинальные наручные часы-хронометр. Сертифицирован швейцарским институтом тестирования официальных хронометров. Ротор и мосты механизма с родиевым покрытием. В механизме 25 камней. Запас хода 40 часов. Круглый стальной корпус c полированной поверхностью.', 109900, 'Мужской', 'TONI 83188-S-575', 'Швейцария', 'mechanic', 'Сталь 316L', 'Cеребристый', 'Cтальной 316L', 'sapfir', 'D 40мм', '65f20a2f30401.png'),
(6, 'TONI 83188-S-577', 'Великолепно выполненный дизайн и швейцарское качество сборки сочетают в себе искусство и утонченность. Master Series. Водонепроницаемые мужские наручные часы-хронометр. Сертифицирован швейцарским институтом тестирования официальных хронометров. Ротор и мосты механизма с родиевым покрытием. В механизме 25 камней. Запас хода 40 часов.', 159000, 'Мужской', ' TONI 83188-S-577', 'Швейцария', 'mechanic', 'Сталь 316L', 'Черный', 'Cтальной 316L', 'sapfir', ' D 40мм', '65f20a3a7936e.png'),
(7, 'TONI 83733-S-556', 'Оригинальный дизайн часов великолепно дополнит стильный образ современного мужчины. Airmaster. Швейцарские механические наручные часы. Ротор с позолотой 18К. В механизме 26 камней. Запас хода 40 часов. Круглый стальной корпус. Циферблат украшен кристаллами. Заостренные прямоугольные стрелки в стиле Baton с люминесцентным покрытием, которое светится в темноте после непродолжительной зарядки на свету. Метки в виде точек.', 60990, 'Мужской', 'TONI 83733-S-556', 'Швейцария', 'mechanic', 'Сталь 316L', 'Белый', 'Cтальной 316L', 'sapfir', 'D 38мм', '65f20a468bf98.png');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `isAdmin`, `name`, `surename`, `email`, `login`, `password`) VALUES
(1, 1, 'Евгений', 'Гладков', 'evg@mail.ru', 'gladof', 'qwerty'),
(2, 0, 'Василий', 'Вакуленко', 'basta@mail.ru', 'basta', '123');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
