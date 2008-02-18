-- phpMyAdmin SQL Dump
-- version 2.10.3deb1ubuntu0.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Feb 18, 2008 at 01:03 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.3-1ubuntu6.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `sisrama`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `periods`
-- 

CREATE TABLE IF NOT EXISTS `periods` (
  `id` int(5) unsigned NOT NULL auto_increment,
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `periods`
-- 

