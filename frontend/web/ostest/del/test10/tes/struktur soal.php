-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 08, 2008 at 07:12 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `onlinetest`
--

-- --------------------------------------------------------

--
-- Table structure for table `soal_20`
--

CREATE TABLE IF NOT EXISTS `soal_20` (
  `id` int(5) NOT NULL auto_increment,
  `soal` text collate utf8_unicode_ci NOT NULL,
  `opsia` varchar(75) collate utf8_unicode_ci NOT NULL default '',
  `opsib` varchar(75) collate utf8_unicode_ci NOT NULL default '',
  `opsic` varchar(75) collate utf8_unicode_ci NOT NULL default '',
  `opsid` varchar(75) collate utf8_unicode_ci NOT NULL default '',
  `opsie` varchar(75) collate utf8_unicode_ci NOT NULL default '',
  `kunci` char(1) collate utf8_unicode_ci NOT NULL default '',
  `benar` int(5) NOT NULL,
  `salah` int(5) NOT NULL,
  `sisbenar` text collate utf8_unicode_ci NOT NULL,
  `sissalah` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `soal_20`
--
