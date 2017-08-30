- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
--// Ö÷»ú: localhost
-- Éú³ÉÈÕÆÚ: 2007 Äê 09 ÔÂ 16 ÈÕ 07:42
-- ·þÎñÆ÷°æ±¾: 5.0.27
-- PHP °æ±¾: 5.2.1
-- 
-- Êý¾Ý¿â: `vote`
-- 

-- --------------------------------------------------------

-- 
-- ±íµÄ½á¹¹ `admin`
-- 

CREATE TABLE `admin` (
  `id` bigint(11) NOT NULL auto_increment,
  `name` tinytext,
  `pass` tinytext,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- µ¼³ö±íÖÐµÄÊý¾Ý `admin`
-- 

INSERT INTO `admin` VALUES (1, 'admin', 'admin');
INSERT INTO `admin` VALUES (3, '123', '');

-- --------------------------------------------------------

-- 
-- ±íµÄ½á¹¹ `info`
-- 

CREATE TABLE `info` (
  `id` bigint(20) NOT NULL auto_increment,
  `name` tinytext,
  `info` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- µ¼³ö±íÖÐµÄÊý¾Ý `info`
-- 

--INSERT INTO `info` VALUES (1, '²ÎÈü¹æÔò', '²ÎÈü¹æÔò²ÎÈü¹æÔò²ÎÈü¹æÔò²ÎÈü¹æÔò²ÎÈü¹æÔò²ÎÈü¹æÔò²ÎÈü¹æÔò²ÎÈü¹æÔò²ÎÈü¹æÔò²ÎÈü¹æÔò²ÎÈü¹æÔò²ÎÈü¹æÔò²ÎÈü¹æÔò²ÎÈü¹æÔò²ÎÈü¹æÔò²ÎÈü¹æÔò²ÎÈü¹æÔò²ÎÈü¹æÔò²ÎÈü¹æÔò²ÎÈü¹æÔò²ÎÈü¹æÔò²ÎÈü¹æÔò²ÎÈü¹æÔò²ÎÈü¹æÔò°®°®°®');
--INSERT INTO `info` VALUES (2, '»î¶¯½éÉÜ', '»î¶¯½éÉÜ»î¶¯½éÉÜ»î¶¯½éÉÜ»î¶¯½éÉÜ»î¶¯½éÉÜ»î¶¯½éÉÜ»î¶¯½éÉÜ»î¶¯½éÉÜ»î¶¯½éÉÜ»î¶¯½éÉÜ»î¶¯½éÉÜ»î¶¯½éÉÜ»î¶¯½éÉÜ»î¶¯½éÉÜ»î¶¯½éÉÜ»î¶¯½éÉÜ»î¶¯½éÉÜ»î¶¯½éÉÜ»î¶¯½éÉÜ»î¶¯½éÉÜ»î¶¯½éÉÜ»î¶¯½éÉÜ»î¶¯½éÉÜ»î¶¯½éÉÜ»î¶¯½éÉÜ»î¶¯½éÉÜ°¡°¡<br />\r\n<br />\r\n0<br />\r\n');
--INSERT INTO `info` VALUES (3, 'ÁªÏµÎÒÃÇ', 'ÁªÏµÎÒÃÇÁªÏµÎÒÃÇÁªÏµÎÒÃÇÁªÏµÎÒÃÇÁªÏµÎÒÃÇÁªÏµÎÒÃÇÁªÏµÎÒÃÇÁªÏµÎÒÃÇÁªÏµÎÒÃÇÁªÏµÎÒÃÇ<br />\r\n0<br />\r\n0');

-- --------------------------------------------------------

-- 
-- ±íµÄ½á¹¹ `photo`
-- 

CREATE TABLE `photo` (
  `id` bigint(20) NOT NULL auto_increment,
  `name` tinytext,
  `info` text,
  `pic` tinytext,
  `addtime` datetime default NULL,
  `p` bigint(20) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- 
-- µ¼³ö±íÖÐµÄÊý¾Ý `photo`
-- 

--INSERT INTO `photo` VALUES (1, 'Í¼Æ¬1', 'Í¼Æ¬ËµÃ÷1', '1.gif', '2007-09-02 00:00:00', 0);
--INSERT INTO `photo` VALUES (2, 'Í¼Æ¬2', 'Í¼Æ¬ËµÃ÷2', '', '0000-00-00 00:00:00', 0);
--INSERT INTO `photo` VALUES (3, '??', '???', '', '0000-00-00 00:00:00', 0);
--INSERT INTO `photo` VALUES (4, '²âÊÔ', '²âÊÔµÄËµÃ÷', 'ÊÕ¿î×¨ÓÃÕÂ.jpg', '2007-09-16 05:40:37', 0);
--INSERT INTO `photo` VALUES (5, '¼ÌÐø²âÊÔ', '¼ÌÐø²âÊÔÄÚÈÝ', 'Image(071).jpg', '2007-09-16 05:41:49', 0);
--INSERT INTO `photo` VALUES (6, 'Ô¬Àû·å', 'Ô¬Àû·åµÄÄÚÈÝ', 'icon_new_24x18.gif', '2007-09-16 05:42:44', 4);
--INSERT INTO `photo` VALUES (7, 'ËÑË÷', 'ËÑË÷', 'icon_new_24x18.gif', '2007-09-16 06:18:03', 0);
--INSERT INTO `photo` VALUES (8, 'ÊÇµÄ', 'ÊÇÊÇÊÇÊÇÊÇÊÇÊÇÊÇÊÇ', '200709160619261.gif', '2007-09-16 06:19:27', 0);
--INSERT INTO `photo` VALUES (9, '°¡°¡', '°¡°¡°¡', '200709160619421.gif', '2007-09-16 06:19:43', 0);
--INSERT INTO `photo` VALUES (10, 'È¥È¥', 'È¥È¥È¥È¥È¥È¥È¥', '200709160619574.gif', '2007-09-16 06:19:58', 0);
--INSERT INTO `photo` VALUES (11, 'ÎÒÎÒ', 'ÎÒÎÒÎÒÎÒÎÒÎÒ ', '200709160620129.gif', '2007-09-16 06:20:13', 0);
