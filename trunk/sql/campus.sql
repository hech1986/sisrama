-- phpMyAdmin SQL Dump
-- version 2.10.3deb1ubuntu0.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Feb 11, 2008 at 10:57 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.3-1ubuntu6.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `sisrama`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `campus`
-- 

CREATE TABLE IF NOT EXISTS `campus` (
  `id` int(5) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- 
-- Dumping data for table `campus`
-- 

INSERT INTO `campus` (`id`, `name`) VALUES 
(12, 'Campus1'),
(13, 'Campus2');