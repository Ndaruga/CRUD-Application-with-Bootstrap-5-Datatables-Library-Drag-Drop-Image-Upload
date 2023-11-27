CREATE DATABASE `ajax_crud`;

USE `ajax_crud`;

DROP TABLE IF EXISTS `User`;

CREATE TABLE `User` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `First Name` varchar(255) default NULL,
  `Last Name` varchar(255) default NULL,
  `email` varchar(255) default NULL,
  `country` varchar(100) default NULL,
  `Gender` varchar(255) default NULL,
  `Image` TEXT default NULL,
  PRIMARY KEY (`id`)
) AUTO_INCREMENT=1;

INSERT INTO `User` (`First Name`,`Last Name`,`email`,`country`,`Gender`,`Image`)
VALUES
  ("Zenia","Mannix","hendrerit.a@protonmail.com","Kenya","Bo","elit elit fermentum risus, at fringilla purus mauris a"),
  ("Kelly","Hashim","urna.justo.faucibus@google.ca","Chad","Tarik","sit amet luctus vulputate, nisi sem semper erat,"),
  ("Randall","Daria","id.enim@yahoo.com","Uganda","Matthew","at, libero. Morbi accumsan laoreet ipsum. Curabitur consequat, lectus"),
  ("Gabriel","John","eros.non@outlook.couk","Malawi","Jordan","venenatis lacus. Etiam bibendum fermentum metus. Aenean");
