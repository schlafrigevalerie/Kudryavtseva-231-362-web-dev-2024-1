-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Ноя 01 2024 г., 11:53
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lab5_data`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bag`
--

CREATE TABLE `bag` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `bag`
--

INSERT INTO `bag` (`id`, `name`, `img`, `description`) VALUES
(3, 'Акугава. \"В стране водяных\"', 'Акутагава.jpg', 'Главный герой во время путешествия вдоль реки случайно повстречался с каппой (японским водяным) и, погнавшись за ним из любопытства, провалился в какую-то яму. В результате он оказался в стране, населенной этими удивительными существами, чьи обычаи и традиции оказались так непохожи на всё то, что ему приходилось видеть раньше...'),
(5, 'Венедикт Ерофеев. \"Москва-Петушки\"', 'Ерофеев.jpg', 'Поэма «Москва — Петушки» — самое популярное произведение потаенной русской литературы последних десятилетий, переведенное почти на двадцать языков мира. Венедикт Ерофеев — бывший студент-филолог немногим менее пяти вузов страны, отчислявшийся из оных за неординарное поведение и избыток эрудиции. Около 30 лет он успешно стирал грани между умственным и самым что ни на есть физическим трудом. В настоящее время всемирно известный автор поэмы быстро становится всемирно известным драматургом (поставлена на сцене многих театров у нас и за рубежом пьеса «Вальпургиева ночь, или Шаги командора», первая часть драматической трилогии). Имеются и другие, случайно не утерянные и ныне издаваемые сочинения, а автор продолжает писать новые. Примечание верстальщика: аннотация к изданию 1990 г. 11 мая того же года В. Ерофеев умер.');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `name`, `img`, `description`) VALUES
(1, 'Акугава. \"В стране водяных\"', 'Акутагава.jpg', 'Главный герой во время путешествия вдоль реки случайно повстречался с каппой (японским водяным) и, погнавшись за ним из любопытства, провалился в какую-то яму. В результате он оказался в стране, населенной этими удивительными существами, чьи обычаи и традиции оказались так непохожи на всё то, что ему приходилось видеть раньше...'),
(13, 'Глаза', 'eyes.jpg', 'Татуировка с глазами может символизировать различные вещи, в зависимости от контекста и культурных традиций. Обычно такие татуировки ассоциируются с темами наблюдения, интуиции, защиты или внутреннего видения. Глаза могут также символизировать осознание, мудрость или связь с духовным миром. В некоторых культурах глаза считаются защитным символом от злых духов.'),
(14, 'Цветущая вишня', 'cherry.jpg', 'Татуировка с цветущей вишней часто символизирует красоту, мимолетность жизни и обновление. В японской культуре цветущая вишня (сакура) ассоциируется с весной и является символом жизни, любви и скоротечности времени. Такие татуировки могут также олицетворять надежду и новые начинания.'),
(15, 'Лотос', 'lotus.jpg', 'Лотос — это мощный символ в различных культурах, особенно в буддизме и индуизме. Он растет в грязной воде, но цветет в чистоте, что символизирует преодоление трудностей и достижение духовного просветления. Татуировка с лотосом может означать внутреннюю силу, чистоту намерений и стремление к самосовершенствованию.'),
(16, 'Крылья', 'wings.jpg', 'Крылья часто ассоциируются со свободой и возможностью подняться над повседневными заботами. Они могут символизировать защиту, надежду и стремление к новым высотам. Татуировка с крыльями может быть напоминанием о том, что вы можете преодолеть любые преграды и следовать своим мечтам.'),
(17, 'Отражение', 'reflection.jpg', 'Татуировка с изображением отражения символизирует самопознание, внутреннее \"я\" и двойственность человеческой природы. Она может указывать на изменения и трансформацию, а также на взаимосвязь с окружающим миром. Визуально отражение также может представлять эстетику и красоту, а также состояние покоя и медитации.'),
(18, 'Медузы', 'jellyfish.jpg', 'Татуировка с изображением медузы символизирует защиту, интуицию и трансформацию. В различных культурах медуза ассоциируется с тайной, гибкостью и способностью адаптироваться к изменениям. Она также может олицетворять красоту и опасность, напоминая о том, что внешняя привлекательность может скрывать внутренние угрозы.'),
(19, 'Горы', 'mountains.jpg', 'Горы символизируют стойкость, силу и преодоление препятствий. Они могут олицетворять стремление к достижению целей и преодолению трудностей. Татуировка с горами может быть напоминанием о том, что, несмотря на сложности, вы способны подняться на вершину и достичь успеха.'),
(20, 'Компас', 'compass.jpg', 'Компас символизирует направление, навигацию и поиск пути. Татуировка с компасом может означать стремление к самопознанию, нахождению своего места в жизни и следованию своим целям. Она может служить напоминанием о том, что важно оставаться верным своим убеждениям и ценностям.'),
(21, 'Луна', 'moon.jpg', 'Татуировка с изображением луны символизирует интуицию, тайну и женственность. Луна ассоциируется с изменениями, цикличностью и внутренним миром. Она может олицетворять спокойствие, мечтательность и связь с природой, а также служить напоминанием о том, что свет может исходить даже в темные времена.'),
(22, 'Кошки', 'cat.jpg', 'Татуировка с изображением кошки символизирует независимость, грацию и интуицию. Кошки ассоциируются с тайной, магией и защитой, а также могут олицетворять женственность и силу. В некоторых культурах кошки считаются хранителями дома и защитниками от злых духов.'),
(25, 'Чёрная кошка', 'black_cat.jpg', '...'),
(26, 'Акутагава. \"В стране водяных\"', 'Акутагава.jpg', 'Главный герой во время путешествия вдоль реки случайно повстречался с каппой (японским водяным) и, погнавшись за ним из любопытства, провалился в какую-то яму. В результате он оказался в стране, населенной этими удивительными существами, чьи обычаи и традиции оказались так непохожи на всё то, что ему приходилось видеть раньше...');

-- --------------------------------------------------------

--
-- Структура таблицы `images_book`
--

CREATE TABLE `images_book` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `images_book`
--

INSERT INTO `images_book` (`id`, `name`, `img`, `description`) VALUES
(1, 'Акугава. \"В стране водяных\"', 'Акутагава.jpg', 'Главный герой во время путешествия вдоль реки случайно повстречался с каппой (японским водяным) и, погнавшись за ним из любопытства, провалился в какую-то яму. В результате он оказался в стране, населенной этими удивительными существами, чьи обычаи и традиции оказались так непохожи на всё то, что ему приходилось видеть раньше...'),
(2, 'Сильвия Плат. \"Под стеклянным колпаком\"', 'Плат.jpg', 'Эстер Гринвуд получает возможность стажироваться в модном женском журнале в Нью-Йорке. Она уверена: ей под силу покорить этот город и осуществить свою заветную мечту — стать писательницей.\r\nНо за красивым фасадом — показы мод, коктейльные вечеринки, знакомства с интересными людьми — скрываются равнодушие окружающих и проблемы новой, \"взрослой\", жизни. И очень скоро Эстер понимает, что начинает терять контроль над собой, все больше погружаясь в одиночество и депрессию… '),
(3, 'Венедикт Ерофеев. \"Москва-Петушки\"', 'Ерофеев.jpg', 'Поэма «Москва — Петушки» — самое популярное произведение потаенной русской литературы последних десятилетий, переведенное почти на двадцать языков мира. Венедикт Ерофеев — бывший студент-филолог немногим менее пяти вузов страны, отчислявшийся из оных за неординарное поведение и избыток эрудиции. Около 30 лет он успешно стирал грани между умственным и самым что ни на есть физическим трудом. В настоящее время всемирно известный автор поэмы быстро становится всемирно известным драматургом (поставлена на сцене многих театров у нас и за рубежом пьеса «Вальпургиева ночь, или Шаги командора», первая часть драматической трилогии). Имеются и другие, случайно не утерянные и ныне издаваемые сочинения, а автор продолжает писать новые. Примечание верстальщика: аннотация к изданию 1990 г. 11 мая того же года В. Ерофеев умер.');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `role`) VALUES
(1, 'Вася', '$2y$10$TlITTvEkjSy/mto/7xk..umgJm7F00IuS22lDAqbvXMgvpM8q5atW', 'user'),
(2, 'Петя', '$2y$10$af77W1W9zSmY.nj6Ld4emu9lGmjfZ3ZAil/yfjsUZuZEaQi6113pW', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bag`
--
ALTER TABLE `bag`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images_book`
--
ALTER TABLE `images_book`
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
-- AUTO_INCREMENT для таблицы `bag`
--
ALTER TABLE `bag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `images_book`
--
ALTER TABLE `images_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;