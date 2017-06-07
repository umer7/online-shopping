

ALTER TABLE `user1` ADD `userid` INT NOT NULL FIRST
ALTER TABLE `user1` ADD PRIMARY KEY(`userid`);



ALTER TABLE `user1` ADD `userid` int NOT NULL AUTO_INCREMENT PRIMARY KEY AFTER `name`;









CREATE DATABASE logintest;


CREATE TABLE user12 (
 usid int NOT NULL AUTO_INCREMENT,
 
name INTEGER (255),
 username INTEGER (255),
 email INTEGER (255),
password INTEGER (255),
location INTEGER (255), 
 PRIMARY KEY(usid)
  )




CREATE TABLE products11 (
 itemid int NOT NULL AUTO_INCREMENT,
  itemname VARCHAR (255),
  itemType VARCHAR (255),
  companyName VARCHAR (255),
  rating INT (100),
  price INT (100),
  Discount INTEGER (255),
  reviews VARCHAR (255),
  PRIMARY KEY(itemid)
)
  
;
ALTER TABLE `products11` ADD `description` VARCHAR(255) NOT NULL AFTER `price`;


ALTER TABLE products11
ADD COLUMN desc VARCHAR(255) AFTER price;

ALTER TABLE `products11` ADD `image` VARCHAR(255) NOT NULL AFTER `reviews`;



CREATE TABLE cart11 (
 cartid int NOT NULL AUTO_INCREMENT,
  itemname VARCHAR (255),
  itemType VARCHAR (255),
  companyName VARCHAR (255),
  rating INT (100),
  price INT (100),
    desc VARCHAR(255),
  Discount INTEGER (255),
  reviews VARCHAR (255),
    image VARCHAR(255),
    quantity VARCHAR(255),
    totle VARCHAR(255),
    
  PRIMARY KEY(cartid)
)



CREATE TABLE  `images` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `image` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB ;

CREATE TABLE `db1`.`cart` ( `itemid` INT(11) NOT NULL , 
`itemname` VARCHAR(255) NOT NULL , `itemType` VARCHAR(255) NOT NULL , 
`CompanyName` VARCHAR(255) NOT NULL , `rating` INT(100) NOT NULL , 
`price` INT(100) NOT NULL , `description` VARCHAR(255) NOT NULL , 
`Discount` INT(255) NOT NULL , `reviews` VARCHAR(255) NOT NULL ) 
ENGINE = InnoDB;
