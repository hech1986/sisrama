-- phpMyAdmin SQL Dump
-- version 2.10.3deb1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 17, 2008 at 10:22 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.3-1ubuntu6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `sisrama`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `si_campus`
-- 

DROP TABLE IF EXISTS `si_campus`;
CREATE TABLE IF NOT EXISTS `si_campus` (
  `campusid` int(11) NOT NULL auto_increment,
  `campusname` varchar(255) default NULL,
  `disable` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`campusid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `si_campus`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `si_city`
-- 

DROP TABLE IF EXISTS `si_city`;
CREATE TABLE IF NOT EXISTS `si_city` (
  `cityid` int(11) NOT NULL auto_increment,
  `cityname` varchar(255) default '',
  `consulateid` int(11) default NULL,
  `disable` tinyint(1) default '0',
  PRIMARY KEY  (`cityid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `si_city`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `si_consulate`
-- 

DROP TABLE IF EXISTS `si_consulate`;
CREATE TABLE IF NOT EXISTS `si_consulate` (
  `consulateid` int(11) NOT NULL auto_increment,
  `consulatename` varchar(255) default '',
  `disable` tinyint(1) default '0',
  PRIMARY KEY  (`consulateid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `si_consulate`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `si_dnclass`
-- 

DROP TABLE IF EXISTS `si_dnclass`;
CREATE TABLE IF NOT EXISTS `si_dnclass` (
  `classid` int(11) NOT NULL auto_increment,
  `name` varchar(254) default NULL,
  `level` int(11) default NULL,
  `name_ar` text,
  PRIMARY KEY  (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `si_dnclass`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `si_kamar3`
-- 

DROP TABLE IF EXISTS `si_kamar3`;
CREATE TABLE IF NOT EXISTS `si_kamar3` (
  `kamar` text,
  `regionid` int(11) default NULL,
  `musrif` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `si_kamar3`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `si_officer`
-- 

DROP TABLE IF EXISTS `si_officer`;
CREATE TABLE IF NOT EXISTS `si_officer` (
  `officerid` int(11) NOT NULL auto_increment,
  `officername` varchar(128) default NULL,
  `disable` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`officerid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `si_officer`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `si_period`
-- 

DROP TABLE IF EXISTS `si_period`;
CREATE TABLE IF NOT EXISTS `si_period` (
  `periodid` int(11) NOT NULL auto_increment,
  `fromdate` date default NULL,
  `todate` date default NULL,
  `disable` tinyint(1) default '0',
  `active` tinyint(1) default NULL,
  PRIMARY KEY  (`periodid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `si_period`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `si_permit`
-- 

DROP TABLE IF EXISTS `si_permit`;
CREATE TABLE IF NOT EXISTS `si_permit` (
  `permitid` int(11) NOT NULL auto_increment,
  `periodid` int(11) default NULL,
  `studentid` bigint(20) default NULL,
  `permittime` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `expiretime` timestamp NOT NULL default '0000-00-00 00:00:00',
  `destination` text,
  `reason` text,
  `supervisor` varchar(128) default NULL,
  `returntime` timestamp NOT NULL default '0000-00-00 00:00:00',
  `notes` text,
  `permitter` varchar(128) default NULL,
  `permitnumber` varchar(64) NOT NULL,
  PRIMARY KEY  (`permitid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `si_permit`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `si_presence`
-- 

DROP TABLE IF EXISTS `si_presence`;
CREATE TABLE IF NOT EXISTS `si_presence` (
  `studentroomid` int(11) default NULL,
  `periodid` int(11) default NULL,
  `status` varchar(3) default NULL,
  `presencedate` date default NULL,
  `presenceid` int(11) NOT NULL auto_increment,
  PRIMARY KEY  (`presenceid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `si_presence`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `si_proguser`
-- 

DROP TABLE IF EXISTS `si_proguser`;
CREATE TABLE IF NOT EXISTS `si_proguser` (
  `userid` int(11) NOT NULL auto_increment,
  `username` varchar(255) default NULL,
  `password` varchar(255) default NULL,
  `email` varchar(255) default NULL,
  `name` varchar(255) default NULL,
  `lastlogin` int(11) default NULL,
  `groupid` smallint(6) default NULL,
  PRIMARY KEY  (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `si_proguser`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `si_region`
-- 

DROP TABLE IF EXISTS `si_region`;
CREATE TABLE IF NOT EXISTS `si_region` (
  `regionid` int(11) NOT NULL auto_increment,
  `regionname` varchar(255) default NULL,
  `disable` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`regionid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `si_region`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `si_room`
-- 

DROP TABLE IF EXISTS `si_room`;
CREATE TABLE IF NOT EXISTS `si_room` (
  `roomid` int(11) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `regionid` int(11) default NULL,
  `campusid` int(11) default NULL,
  `studentheadid` int(11) default NULL,
  `parent` varchar(255) default NULL,
  `capacity` int(11) default NULL,
  `disable` tinyint(1) default '0',
  PRIMARY KEY  (`roomid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `si_room`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `si_student`
-- 

DROP TABLE IF EXISTS `si_student`;
CREATE TABLE IF NOT EXISTS `si_student` (
  `studentid` int(11) NOT NULL auto_increment,
  `regnumber` varchar(255) default '',
  `name` varchar(255) default '',
  `name_ar` text,
  `parent` varchar(255) default '',
  `parent_ar` text,
  `address` text,
  `active` tinyint(1) default '1',
  `class` varchar(8) default '',
  `phonenumber` varchar(64) default '',
  `mobilenumber` varchar(64) default NULL,
  `photo` varchar(128) default NULL,
  `cityid` int(11) NOT NULL default '0',
  `classid` int(11) default NULL,
  `birthdate` date NOT NULL,
  `birthplace` varchar(30) NOT NULL,
  PRIMARY KEY  (`studentid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `si_student`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `si_studentroom`
-- 

DROP TABLE IF EXISTS `si_studentroom`;
CREATE TABLE IF NOT EXISTS `si_studentroom` (
  `studentroomid` int(11) NOT NULL auto_increment,
  `periodid` int(11) default NULL,
  `roomid` int(11) default NULL,
  `studentid` int(11) NOT NULL default '0',
  PRIMARY KEY  (`studentroomid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `si_studentroom`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `si_student_state`
-- 

DROP TABLE IF EXISTS `si_student_state`;
CREATE TABLE IF NOT EXISTS `si_student_state` (
  `stateid` int(11) NOT NULL auto_increment,
  `studentid` int(11) default NULL,
  `classid` int(11) default NULL,
  `periodid` int(11) NOT NULL,
  PRIMARY KEY  (`stateid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `si_student_state`
-- 

