-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Hoszt: 127.0.0.1
-- Létrehozás ideje: 2022. ápr. 17. 16:02
-- Szerver verzió: 5.0.96
-- PHP verzió: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Adatbázis: `a20i86webprog`
--
CREATE DATABASE a20i86webprog;
USE a20i86webprog;
-- --------------------------------------------------------

--
-- Tábla szerkezet: `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `send_date` datetime NOT NULL,
  `is_guest` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- A tábla adatainak kiíratása `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `subject`, `message`, `send_date`, `is_guest`) VALUES
(1, 'Oliver Balog', 'asperant8@gmail.com', '+36203114807', 'sdujoafhkuasehgkfh', 'jkksdfagbnk?hjweabrg?fuikhwerauoghuo?awerhguioaerwhguio', '2022-04-17 15:59:29', 1),
(2, 'alwehjf jklafghn', 'asdjhoas@ds.fr', '+36342358923', 'jksdfghbn?jksdfhnjkghj', 'jsdfanvk?hrqae?gjk eraighWKL?EFHJLVIW ??hfnw.efl', '2022-04-17 16:01:30', 0);

-- --------------------------------------------------------

--
-- Tábla szerkezet: `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL auto_increment,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`) VALUES
(1, 'asdasd', 'asdasd', 'asdasd', '85136c79cbf9fe36bb9d05d0639c70c265c18d37'),
(2, 'ergnjkhbn?erkwsghn', 'hjkl?dfgsvhnbbsdfujkghbn', 'peti', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');
