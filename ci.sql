-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2014-02-11 15:06:58
-- 服务器版本: 5.5.32
-- PHP 版本: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `ci`
--

-- --------------------------------------------------------

--
-- 表的结构 `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `pname` text NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `attendance`
--

INSERT INTO `attendance` (`aid`, `mid`, `pid`, `pname`) VALUES
(1, 1, 1, '李书楠');

-- --------------------------------------------------------

--
-- 表的结构 `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `filename` text NOT NULL,
  `path` text NOT NULL,
  `filesize` int(11) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `meetings`
--

CREATE TABLE IF NOT EXISTS `meetings` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `mtitle` text NOT NULL,
  `mdate` date NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL,
  `content` longtext NOT NULL,
  `time_created` datetime NOT NULL,
  `time_modified` datetime NOT NULL,
  PRIMARY KEY (`mid`),
  UNIQUE KEY `mid` (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `meetings`
--

INSERT INTO `meetings` (`mid`, `mtitle`, `mdate`, `start`, `end`, `content`, `time_created`, `time_modified`) VALUES
(1, '李书楠', '2014-02-04', '00:00:00', '21:37:05', 'gdgdg', '2014-02-12 10:19:23', '2014-02-19 04:15:17');

-- --------------------------------------------------------

--
-- 表的结构 `participants`
--

CREATE TABLE IF NOT EXISTS `participants` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` text NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `participants`
--

INSERT INTO `participants` (`pid`, `pname`) VALUES
(1, '李书楠'),
(2, '张鹏程');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
