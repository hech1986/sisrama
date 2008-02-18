-- phpMyAdmin SQL Dump
-- version 2.10.3deb1ubuntu0.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Feb 18, 2008 at 01:04 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.3-1ubuntu6.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `sisrama`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `rooms`
-- 

CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(5) unsigned NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `parent` varchar(50) NOT NULL,
  `regionid` int(5) unsigned NOT NULL,
  `studentheadid` int(10) unsigned NOT NULL,
  `campusid` int(5) unsigned NOT NULL,
  `capacity` double unsigned NOT NULL,
  `filled` double unsigned NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `rooms`
-- 

