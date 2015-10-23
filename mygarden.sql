-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Окт 22 2015 г., 19:54
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mygarden`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `title_url` varchar(150) NOT NULL,
  `img` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `keywords` text NOT NULL,
  `category` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `title_url`, `img`, `date`, `keywords`, `category`) VALUES
(1, 'Правильный уход за розой', 'pravilnij_uhod_za_rozoj', 'roses.jpg', '2015-10-04', 'keywords roza', 'october'),
(2, 'Сроки посева петунии', 'srok_poseva_petunii', 'flower1_1.jpg', '2015-10-13', 'petunii', 'september'),
(3, 'Отрава от колорадского жука', 'otrava_ot_kalaradskogo_juka', 'beetle1.jpg', '2015-10-19', 'otrava', 'august'),
(4, 'Как лучше всего организовать полив комнатных растений', 'poliv_komnatnih_rastenij', 'water1.jpg', '2015-10-14', 'poliv', 'jule');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `title_url` varchar(150) NOT NULL,
  `keywords` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `title_url`, `keywords`) VALUES
(1, 'Январь', 'january', 'jan keywords'),
(2, 'Февраль', 'february', 'feb keywords'),
(3, 'Март', 'march', 'mar keywords'),
(4, 'Апрель', 'april', 'apr keywords'),
(5, 'Май', 'may', 'may keywords'),
(6, 'Июнь', 'june', 'jun keywords'),
(7, 'Июль', 'jule', 'jal keywords'),
(8, 'Август', 'august', 'aug keywords'),
(9, 'Сентябрь', 'september', 'sep keywords'),
(10, 'Октябрь', 'october', 'okt keywords');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `title_url` varchar(150) NOT NULL,
  `keywords` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `title`, `title_url`, `keywords`) VALUES
(1, 'Главная', 'home', 'keywords of home page 	 '),
(2, 'Статьи', 'articles', 'keywords of articles page      '),
(3, 'Галерея', 'gallery', 'keywords of gallery page 	 '),
(4, 'Контакты', 'contacts', 'keywords of gallery page 	');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
