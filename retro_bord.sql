-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 11 2020 г., 14:07
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `retro_bord`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(260) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `title`, `text`) VALUES
(1, 'Амбарні дошки', 'Унікальний обробний матеріал для створення неповторних інтер\'єрів в стилі: лофт, Сканді, Рустик, Шале, Індастріал, Ретро, Еко, Кантрі, Модерн, Грандж. Високий контроль якості, широка палітра відтінків. Амбарні дошки не називаються старими, вінтажними і навіть антикварними. Все вірно, адже в середньому вік їх витримки це 40 років. Цінується така деревина не тільки за особливий колір і фактуру. Дизайнери і лофтюбителі стильних інтерє\'єрів відзначають, що амбарані дошки - це завжи автентична історія.'),
(2, 'Панно', 'Старе дерево в іетер\'єрі - актуальна тема, яка надихає дизайнерів у всьому світі.  \r\nСьогодні у вас є можливість замовити найоригінальніші декоративні панелі з амбарної і ратро-дошки.\r\nДекоративні панелі:\r\n-заміняють штукатуркуі шпалери;\r\n-зберігають \r\n\r\n'),
(3, 'Лофт меблі', 'Меблі з вінтажного дерева - краще в стилі Лофт Рустик і Кантрі Розширюючи столярний напрямок ми почали виробляти меблі в стилі Лофт. Брутальне поєднання старого дерева і металу - знахідка для будь-якого тематичного інтер\'єру. Столи, стільці, табуретки, стелажі і багато інших інтерєрних фантазій готові втілити в життя наші столяр і зварювальники. Ми працюємо як з амбарною дошкою, так і з будь-якими породами масиву дерева - сосна, модрина, бук, дуб, ясен, які додадуть природний шарм вашим інтер\'єрам!'),
(4, 'Обладнання інтерєру старим деревом', 'Ретро-дошка в вашому інтер\'єрі - це дошка з характером і історією. Виразна фактура, глибина кольору, запах сонця - саме за це цінуються природно постарілі дошки. Наша компанія пропунує великий вибір екологічно чистої продукції з масиву старого дерева. Ви впізнаєте цей тип природиної, а не людиною зістареної деревини за особливою виразною фактурою і глибиною кольором. Такого ефекту не можливо домогтися в жодні майстерні, навіть використовуючи дороге обладнання.'),
(5, 'Інші вироби', 'Меблі з вінтажного дерева - краще в стилі лофт, рустик і кантрі! Розширюючи столярний напрям, ми почали виробляти меблі в стилі лофт. Брутальне поєднання старого дерева і металу - знахідка для будь-якого тематичного інтер\'єру. Столи , стільниці, табуретки, стелажі і багато інших інтер\'єрних фантазії готові втілити в життя наші столяри і зварювальники. Ми працюємо як з амбарний дошкою, так і з будь-якими породами масиву дерева - сосна, модрина, бук, дуб, ясен, які додадуть природний шарм вашим інтер\'єрам!'),
(7, 'frgtuj', 'tgyhu7i'),
(8, 'frgtujскімсукмс', 'adfvsdfvds');

-- --------------------------------------------------------

--
-- Структура таблицы `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `img` varchar(260) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_subcategory` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `img`
--

INSERT INTO `img` (`id`, `img`, `id_subcategory`, `price`) VALUES
(39, '93550461_103820074578689_1050812037144759627_n.jpg', 115, 0),
(41, 'Без імені.png', 115, 0),
(42, '93550461_103820074578689_1050812037144759627_n.jpg', 116, 0),
(43, '93550461_103820074578689_1050812037144759627_n.jpg', 117, 0),
(44, '93550461_103820074578689_1050812037144759627_n.jpg', 115, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `id_category` int(11) DEFAULT NULL,
  `title` varchar(260) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(260) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(260) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(260) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `subcategory`
--

INSERT INTO `subcategory` (`id`, `id_category`, `title`, `text`, `img`, `price`) VALUES
(1, 1, 'Амбарна дошка \'Шип-паз\' коротка', 'свіу евп екп екв пеув пу пук іпаук іпаукі паук па ', 'img/img/', '100 грн за кв. мктер'),
(2, 1, 'Амбарна дошка \'Шип-паз\' довга', 'Лицьова сторона ', '/img/img/20.jpg', ''),
(3, 1, 'Сіра амбарна дошка \'Шип-паз\'', 'авріаипо\'vcs\'', 'img/img/logo.png', 'wewregt'),
(4, 1, 'Амбарна дошка пряма стругана', 'уфавпмав', 'img/img/1aaba40b-af07-46e6-bfef-5f57156e98b1.jpg', 'weret'),
(5, 1, 'Амбарана дошка 40 мм', 'уіакі', '', ''),
(6, 1, 'Амбарна дошка \'Ламель\'', 'вуцфасіуас', '', ''),
(7, 1, 'Оригінальна амбарна дошка', 'вфуасіуф', '', ''),
(8, 1, 'Амбарна дошка старий дуб, без покриття', 'сфвімусі', '', ''),
(9, 1, 'Амбарна дошка старий дуб, лакована', 'аіусуф', '', ''),
(115, 2, 'ф ікеанг оеркп уцм гноп фк', 'eafs edrf ers gedr gerd g fvgrgzs uifausi izsdewhS gfh\r\nвуфацуіацуіацуіацу ewf rdh rtfh  esfsf', 'img/img/93550461_103820074578689_1050812037144759627_n.jpg', 'уфапкерго ріпа уікперо'),
(116, 7, 'cfg', 'defg', 'img/img/', 'derft'),
(117, 3, 'fgthuj', 'ijuhygtrfedw', 'img/img/', 'wsedtfgyu');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT для таблицы `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
