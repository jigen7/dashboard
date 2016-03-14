-- Adminer 4.1.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `games`;
CREATE TABLE `games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(30) NOT NULL,
  `team1` varchar(50) NOT NULL,
  `team1_score` varchar(50) NOT NULL,
  `team2` varchar(50) NOT NULL,
  `team2_score` varchar(50) NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `games` (`id`, `type`, `team1`, `team1_score`, `team2`, `team2_score`, `date_start`, `date_end`) VALUES
(1,	'basketball',	'Bulls',	'87',	'Cavaliers',	'91',	'2016-03-01 02:00:00',	'2016-03-01 03:00:00'),
(2,	'baseball',	'New York Mets',	'12',	'Miami Orlins',	'50',	'2016-03-02 02:00:00',	'2016-03-02 02:00:00'),
(3,	'basketball',	'Warriors',	'80',	'Heat',	'79',	'2016-03-01 02:00:00',	'2016-12-01 02:00:00'),
(4,	'baseball',	'Rays',	'0',	'Phillies',	'0',	'2016-04-01 02:00:00',	'2016-04-01 02:00:00');