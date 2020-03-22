-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Мар 21 2020 г., 18:53
-- Версия сервера: 5.7.21-20-beget-5.7.21-20-1-log
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `edgar2020_zakaz`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--
-- Создание: Мар 20 2020 г., 20:17
-- Последнее обновление: Мар 21 2020 г., 14:36
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `views` int(255) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `user_id`, `name`, `views`, `date`) VALUES
(14, 3, '5e7517e795436Без названия.jpg', 1, '2020-03-20 19:22:15'),
(15, 1, '5e751813d889218954868_1455524017897262_6035237684429310113_o.jpg', 7, '2020-03-20 19:22:59'),
(16, 3, '5e751813d950053229514_2105360136238108_4855339508834500608_o.jpg', 1, '2020-03-20 19:22:59'),
(17, 3, '5e751813da18c53513187_2105359226238199_162178527737675776_o.jpg', 3, '2020-03-20 19:22:59'),
(18, 2, '5e751813db26854194663_2105359492904839_497113933044252672_o.jpg', 2, '2020-03-20 19:22:59'),
(19, 3, '5e751813dbda354432315_1860627404043825_218469472925646848_o.jpg', 7, '2020-03-20 19:22:59'),
(24, 3, '5e751813df8e8eurovision-song-contest-2018-lisbon.jpg', 1, '2020-03-20 19:22:59'),
(25, 4, '5e76249eef262', 2, '2020-03-21 14:28:46'),
(26, 4, '5e7624cdf1b34Без названия.jpg', 3, '2020-03-21 14:29:33'),
(27, 4, '5e76253e082dfБез названия.jpg', 0, '2020-03-21 14:31:26');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--
-- Создание: Мар 20 2020 г., 20:17
-- Последнее обновление: Мар 21 2020 г., 14:28
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `password`, `img`, `date`) VALUES
(3, 'Zhora', 'Khzmalyan', 'khzmalyanzhora1996@gmail.comsss', '$1$EaSD0GFi$E9flwwKHowHiGKd00uwDS/', '', '2020-03-20 18:36:50'),
(4, 'Masha', 'Masha', 'ksmakarch@gmail.com', '$1$JGSOJTH1$uAaFabX7OIjXl.f4gPHI71', '', '2020-03-21 14:28:20');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
