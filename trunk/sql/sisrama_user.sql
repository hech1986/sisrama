-- phpMyAdmin SQL Dump
-- version 2.9.1.1-Debian-2ubuntu1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Dec 07, 2007 at 08:36 AM
-- Server version: 5.0.38
-- PHP Version: 5.2.1
-- 
-- Database: `a`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `adm_menus`
-- 

CREATE TABLE `adm_menus` (
  `menuname` varchar(50) NOT NULL,
  `menuhead` varchar(50) NOT NULL,
  `modname` varchar(50) NOT NULL,
  `actname` varchar(50) NOT NULL,
  `horder` smallint(6) default '0',
  `isshow` tinyint(1) default '1',
  PRIMARY KEY  (`menuname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `adm_menus`
-- 

INSERT INTO `adm_menus` (`menuname`, `menuhead`, `modname`, `actname`, `horder`, `isshow`) VALUES 
('Change Password', 'Administration', 'user', 'ChangePassword', 1, 1),
('User Admin', 'Administration', 'user', 'index', 2, 1),
('Role Admin', 'Administration', 'user', 'RoleAdmin', 3, 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `adm_rolemenu_rel`
-- 

CREATE TABLE `adm_rolemenu_rel` (
  `rolename` varchar(50) NOT NULL,
  `menuname` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `adm_rolemenu_rel`
-- 

INSERT INTO `adm_rolemenu_rel` (`rolename`, `menuname`) VALUES 
('Superman', 'Change Password'),
('Superman', 'User Admin'),
('Superman', 'Role Admin');

-- --------------------------------------------------------

-- 
-- Table structure for table `adm_roles`
-- 

CREATE TABLE `adm_roles` (
  `rolename` varchar(50) NOT NULL,
  `roledesc` varchar(100) default '',
  PRIMARY KEY  (`rolename`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `adm_roles`
-- 

INSERT INTO `adm_roles` (`rolename`, `roledesc`) VALUES 
('Superman', 'Superman'),
('Guru', 'Role untuk guru'),
('Siswa', 'Role untuk siswa');

-- --------------------------------------------------------

-- 
-- Table structure for table `adm_userrole_rel`
-- 

CREATE TABLE `adm_userrole_rel` (
  `userid` varchar(25) NOT NULL,
  `rolename` varchar(50) NOT NULL,
  UNIQUE KEY `userid` (`userid`,`rolename`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `adm_userrole_rel`
-- 

INSERT INTO `adm_userrole_rel` (`userid`, `rolename`) VALUES 
('aisyah', 'Superman');

-- --------------------------------------------------------

-- 
-- Table structure for table `adm_users`
-- 

CREATE TABLE `adm_users` (
  `userid` varchar(25) NOT NULL,
  `passw` varchar(64) default NULL,
  `username` varchar(100) NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `lastlogin` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `connip` varchar(15) default NULL,
  `sessid` varchar(32) default NULL,
  PRIMARY KEY  (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `adm_users`
-- 

INSERT INTO `adm_users` (`userid`, `passw`, `username`, `sex`, `lastlogin`, `connip`, `sessid`) VALUES 
('aisyah', '26bb533df5747c7a3f2a9cc48a8cf3ee', 'aisyah adinda kita', 0, '2007-12-06 10:42:42', NULL, '849fbfeacffbb6062e31e64ab314ef81');
