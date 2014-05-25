-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 25 2014 г., 19:12
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `helpme`
--

-- --------------------------------------------------------

--
-- Структура таблицы `advertising`
--

CREATE TABLE IF NOT EXISTS `advertising` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pib` varchar(250) NOT NULL,
  `name` varchar(150) NOT NULL,
  `text` varchar(250) NOT NULL,
  `money` double NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `advertising`
--

INSERT INTO `advertising` (`id`, `pib`, `name`, `text`, `money`, `user_id`) VALUES(1, '', '@transGaz', 'Требуются специалисты по поиску земельных участков (аренда, выкуп) под строительство АГЗС. ', 0.33, 3);
INSERT INTO `advertising` (`id`, `pib`, `name`, `text`, `money`, `user_id`) VALUES(2, '', '@SoftServ', 'Требуются специалисты по поиску земельных участков (аренда, выкуп) под строительство АГЗС. ', 0.31, 3);
INSERT INTO `advertising` (`id`, `pib`, `name`, `text`, `money`, `user_id`) VALUES(4, '', '@TimTek', 'На роботу потрібний PHP програміст', 0.11, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `shorttext` varchar(250) NOT NULL,
  `text` text NOT NULL,
  `money` double NOT NULL,
  `like` int(11) NOT NULL,
  `photo` text NOT NULL,
  `video` text NOT NULL,
  `audio` varchar(250) NOT NULL,
  `song` varchar(100) NOT NULL,
  `artist` varchar(100) NOT NULL,
  `album` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `user_id_2` (`user_id`),
  KEY `user_id_3` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `name`, `shorttext`, `text`, `money`, `like`, `photo`, `video`, `audio`, `song`, `artist`, `album`, `date`, `user_id`) VALUES(1, 'Нові лавочки!', 'Краудфандинг (англ. Crowdfunding, crowd — «натовп», funding — «фінансування»)', 'Краудфандинг (англ. Crowdfunding, crowd — «натовп», funding — «фінансування»), також спільнокошт — це співпраця людей, компаній, які добровільно чи з метою отримання реклами об''єднують свої гроші або інші ресурси разом, як правило через Інтернет. Краудфандинг (англ. Crowdfunding, crowd — «натовп», funding — «фінансування»), також спільнокошт — це співпраця людей, компаній, які добровільно чи з метою отримання реклами об''єднують свої гроші або інші ресурси разом, як правило через Інтернет', 6.51, 0, 'style/images/art/post1-full.jpg', '', '', '', '', '', '2014-05-12', 3);
INSERT INTO `projects` (`id`, `name`, `shorttext`, `text`, `money`, `like`, `photo`, `video`, `audio`, `song`, `artist`, `album`, `date`, `user_id`) VALUES(2, 'Нове гирло озера Єлейстоун', 'Краудфандинг (англ. Crowdfunding, crowd — «натовп», funding — «фінансування»)', 'Краудфандинг (англ. Crowdfunding, crowd — «натовп», funding — «фінансування»), також спільнокошт — це співпраця людей, компаній, які добровільно чи з метою отримання реклами об''єднують свої гроші або інші ресурси разом, як правило через Інтернет. Краудфандинг (англ. Crowdfunding, crowd — «натовп», funding — «фінансування»), також спільнокошт — це співпраця людей, компаній, які добровільно чи з метою отримання реклами об''єднують свої гроші або інші ресурси разом, як правило через Інтернет', 0.31, 0, '', '<iframe width="420" height="281" src="//www.youtube.com/embed/aGQ8yfctTPw" frameborder="1" allowfullscreen></iframe>', '', '', '', '', '2014-05-12', 3);
INSERT INTO `projects` (`id`, `name`, `shorttext`, `text`, `money`, `like`, `photo`, `video`, `audio`, `song`, `artist`, `album`, `date`, `user_id`) VALUES(3, 'Лев умрет за любовь', 'Над альбомом работали:  Андрей Самсонов - запись, сведение, аранжировки, мастеринг Ольга Маркес - вокал, тексты Дима Лаврентьев - гитара', 'Над альбомом работали:\r\n\r\nАндрей Самсонов - запись, сведение, аранжировки, мастеринг\r\nОльга Маркес - вокал, тексты\r\nДима Лаврентьев - гитара\r\nАлександр Федотовских - бас-гитара\r\nИлья Флюгельтауб - труба, флюгельгорн\r\nАрсений Трофим - клавиши\r\nЭмиль Яковлев - скрипка\r\nИлья Карташев - виолончель\r\nЕвгений Пушкарев - партии: виолончель, скрипка\r\nИлья Липатов - ударные\r\nВладимир Осташко - дизайн\r\nСергей Никифоров - фотографии\r\nКатерина Павлова - навигация', 0, 0, 'style/images/art/artwork.png', '', 'music/lev.mp3', 'Лев умрет за любовь', 'Alai Ol', 'Satta Massagana', '2014-05-12', 3);
INSERT INTO `projects` (`id`, `name`, `shorttext`, `text`, `money`, `like`, `photo`, `video`, `audio`, `song`, `artist`, `album`, `date`, `user_id`) VALUES(4, 'Нове гирло озера Єлейстоун', 'Краудфандинг (англ. Crowdfunding, crowd — «натовп», funding — «фінансування»)', 'Краудфандинг (англ. Crowdfunding, crowd — «натовп», funding — «фінансування»), також спільнокошт — це співпраця людей, компаній, які добровільно чи з метою отримання реклами об''єднують свої гроші або інші ресурси разом, як правило через Інтернет. Краудфандинг (англ. Crowdfunding, crowd — «натовп», funding — «фінансування»), також спільнокошт — це співпраця людей, компаній, які добровільно чи з метою отримання реклами об''єднують свої гроші або інші ресурси разом, як правило через Інтернет', 0, 0, '', '', '', '', '', '', '2014-05-12', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `repost`
--

CREATE TABLE IF NOT EXISTS `repost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `advertising_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`,`advertising_id`),
  KEY `advertising_id` (`advertising_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `permission` varchar(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `e_mail` varchar(30) NOT NULL,
  `cash` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `permission`, `name`, `surname`, `e_mail`, `cash`) VALUES(3, 'admin', '135642', 'admin', 'Petro', 'Krohmaluk', 'demik2792@gmail.com', '1111-1111-1111-1111');
INSERT INTO `users` (`id`, `login`, `password`, `permission`, `name`, `surname`, `e_mail`, `cash`) VALUES(4, 'user', '135642', 'user', 'Yuriy', 'Kovtsun', 'bobrja@gmail.com', '2222-2222-2222-2222');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `advertising`
--
ALTER TABLE `advertising`
  ADD CONSTRAINT `advertising_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `repost`
--
ALTER TABLE `repost`
  ADD CONSTRAINT `repost_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `repost_ibfk_2` FOREIGN KEY (`advertising_id`) REFERENCES `advertising` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
