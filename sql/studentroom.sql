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
-- Table structure for table `studentroom`
-- 

CREATE TABLE IF NOT EXISTS `studentroom` (
  `roomid` int(5) unsigned NOT NULL,
  `studentid` int(10) unsigned NOT NULL,
  KEY `roomid` (`roomid`,`studentid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `studentroom`
-- 

