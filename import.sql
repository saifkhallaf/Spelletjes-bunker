DROP DATABASE IF EXISTS `spelletjes`;

CREATE DATABASE `spelletjes`;

USE `spelletjes`;

CREATE TABLE `gebruikers` (
	id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    gebruikersnaam VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    wachtwoord VARCHAR(100),
    admin VARCHAR(100)
);

CREATE TABLE `cards` (
	id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(255),
    rating DECIMAL(2,1),
    beschrijving TEXT,
    imgcode VARCHAR(255),
    titel VARCHAR(255),
    categorie VARCHAR(255)
);

