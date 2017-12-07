/*
-- Query: 
-- Date: 2017-12-04 16:31
*/
CREATE SCHEMA IF NOT EXISTS `vulnerable_db` DEFAULT CHARACTER SET utf8 ;
USE `vulnerable_db` ;

-- -----------------------------------------------------
-- Table `vulnerable_db`.`user`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `vulnerable_db`.`user` (
  `iduser` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `password` VARCHAR(500) NULL,
  PRIMARY KEY (`iduser`))
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `vulnerable_db`.`cookie` (
  `idcookie` INT NOT NULL AUTO_INCREMENT,
  `time` VARCHAR(45) NULL,
  `cookiename` VARCHAR(254) NULL,
  `cookievalue` VARCHAR(254) NULL,
  PRIMARY KEY (`idcookie`))
ENGINE = InnoDB;
-- Met MD5 Passwords.....

INSERT INTO `user` (`iduser`,`name`,`password`) VALUES (NULL,'jan',MD5('test123'));
INSERT INTO `user` (`iduser`,`name`,`password`) VALUES (NULL,'piet',MD5('wachtwoord'));
INSERT INTO `user` (`iduser`,`name`,`password`) VALUES (NULL,'truus',MD5('1992'));
INSERT INTO `user` (`iduser`,`name`,`password`) VALUES (NULL,'saar',MD5('raas'));
INSERT INTO `user` (`iduser`,`name`,`password`) VALUES (NULL,'thomas',MD5('samoht'));


--Create user
CREATE USER 'pipo'@'localhost' IDENTIFIED BY 'declown';
GRANT ALL PRIVILEGES ON vulnerable_db.* TO 'pipo'@'localhost';


--zonder MD5