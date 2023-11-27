CREATE DATABASE `ajax_crud`;

USE `ajax_crud`;

DROP TABLE IF EXISTS `User`;

CREATE TABLE `User` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `First Name` varchar(255) default NULL,
  `Last Name` varchar(255) default NULL,
  `email` varchar(255) default NULL,
  `phone` varchar(100) default NULL,
  `country` varchar(100) default NULL,
  `Gender` varchar(255) default NULL,
  `Image` TEXT default NULL,
  PRIMARY KEY (`id`)
) AUTO_INCREMENT=1;

INSERT INTO `User` (`First Name`,`Last Name`,`email`,`phone`,`country`,`Gender`,`Image`)
VALUES
  ("Zenia","Mannix","hendrerit.a@protonmail.com","1-431-863-8420","Kenya","Bo","elit elit fermentum risus, at fringilla purus mauris a"),
  ("Kelly","Hashim","urna.justo.faucibus@google.ca","1-257-858-8257","Chad","Tarik","sit amet luctus vulputate, nisi sem semper erat,"),
  ("Randall","Daria","id.enim@yahoo.com","463225-7839","Uganda","Matthew","at, libero. Morbi accumsan laoreet ipsum. Curabitur consequat, lectus"),
  ("Gabriel","John","eros.non@outlook.couk","1-842-912-1534","Malawi","Jordan","venenatis lacus. Etiam bibendum fermentum metus. Aenean");
