CREATE DATABASE `ajax_crud`;

USE `ajax_crud`;

DROP TABLE IF EXISTS `User`;

CREATE TABLE `User` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `First Name` varchar(255) default NULL,
  `Last Name` varchar(255) default NULL,
  `email` varchar(255) default NULL,
  `phone` varchar(100) default NULL,
  `Gender` varchar(255) default NULL,
  `Image` TEXT default NULL,
  PRIMARY KEY (`id`)
) AUTO_INCREMENT=1;

INSERT INTO `User` (`First Name`,`Last Name`,`email`,`phone`,`Gender`,`Image`)
VALUES
  ("Zenia Wiley","Mannix Berg","hendrerit.a@protonmail.com","1-431-863-8420","Bo","elit elit fermentum risus, at fringilla purus mauris a"),
  ("Kelly Mejia","Hashim James","urna.justo.faucibus@google.ca","1-257-858-8257","Tarik","sit amet luctus vulputate, nisi sem semper erat,"),
  ("Randall Rosario","Daria Boyer","id.enim@yahoo.com","(463) 225-7839","Matthew","at, libero. Morbi accumsan laoreet ipsum. Curabitur consequat, lectus"),
  ("Gabriel Molina","John Mccarthy","eros.non@outlook.couk","1-842-912-1534","Jordan","venenatis lacus. Etiam bibendum fermentum metus. Aenean");
INSERT INTO `User` (`First Name`,`Last Name`,`email`,`phone`,`Gender`,`Image`)
VALUES
  ("Mollie Ferguson","Mohammad Kim","nec.metus@icloud.ca","(302) 481-5493","Zachery","in magna. Phasellus dolor elit, pellentesque");