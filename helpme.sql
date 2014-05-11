-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 11 2014 г., 19:31
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
  `audio` text NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `user_id_2` (`user_id`),
  KEY `user_id_3` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `reklama`
--

CREATE TABLE IF NOT EXISTS `reklama` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(250) NOT NULL,
  `repost_count` int(11) NOT NULL,
  `money` double NOT NULL,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`),
  KEY `project_id_2` (`project_id`),
  KEY `project_id_3` (`project_id`)
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `reklama`
--
ALTER TABLE `reklama`
  ADD CONSTRAINT `reklama_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
