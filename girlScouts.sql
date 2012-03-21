/*

Girls Scouts database

Tables:
cookies
nuts
girls
users
requests
events

*/

DROP DATABASE IF EXISTS S12-cpsc430G3;
CREATE DATABASE IF NOT EXISTS S12-cpsc430G3;
USE S12-cpsc430G3;

CREATE TABLE IF NOT EXISTS `cookies` (
  `name` varchar(40) NOT NULL,
  `price` int(5) NOT NULL,
  `description` varchar(70) NOT NULL,
  `quantity` int(3) NOT NULL,
  PRIMARY KEY (`name`)
) ;


CREATE TABLE IF NOT EXISTS `nuts` (
  `name` varchar(40) NOT NULL,
  `price` int(5) NOT NULL,
  `description` blob NOT NULL,
  PRIMARY KEY (`name`)
) ;

CREATE TABLE IF NOT EXISTS `girls`(
  `id` INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `DOB` varchar(9) NOT NULL,
  `address` varchar(70) NOT NULL,
  `st` varchar(2) NOT NULL,
  `zip` int(5) NOT NULL
  `sales` INT(5) NOT NULL DEFAULT 0
  
) ;


CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `DOB` varchar(9) NOT NULL,
  `address` varchar(70) NOT NULL,
  `st` varchar(2) NOT NULL,
  `zip` int(5) NOT NULL,
  `phoneNum` int(10) NOT NULL,
  `cellNum` int(10) NOT NULL,
  `licenseNum` varchar(12),
  `ssNum` varchar(10),
  
  PRIMARY KEY (`email`)
) ;

CREATE TABLE IF NOT EXISTS `requests`(
`senderName` varchar(50) NOT NULL,
`daughterId` varchar(50) NOT NULL,

FOREIGN KEY(daughterId)
REFERENCES girls(id)

);

CREATE TABLE IF NOT EXISTS `demographics`(
`parent` varchar(40) NOT NULL,
`race` ENUM('American Indian or Alaskan Native', 'Asian', 'Black or African American', 'Hawaiian or Pacific Islander', 'White', 'Other'),
`hispanicOrLatino` BOOLEAN NOT NULL ,
`gender` ENUM('Female', 'Male'),
`numYearsScouting` INT(2) NOT NULL 

FOREIGN KEY(`parent`)
REFERENCES `users`(`email`)
);

CREATE TABLE IF NOT EXISTS `events`(
`dateOfEvent` date NOT NULL,
`timeOfEvent` TIME NOT NULL,
`name` varchar(50) NOT NULL,
`description` blob,
`location` blob NOT NULL
);


SHOW TABLES;