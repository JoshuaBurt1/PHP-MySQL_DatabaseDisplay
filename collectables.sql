#sql code to generate database and table
CREATE DATABASE comp_1006;
USE comp_1006;
CREATE TABLE IF NOT EXISTS `collectables` (
  `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(50) NOT NULL, #-- ie: amazon-->
  `description` VARCHAR(50) NOT NULL, #-- ie: online shopping, CEO quit, twitter sentiment down --
  `value` VARCHAR(20) NOT NULL, #-- ie: $1000 --
  `image` VARCHAR(200) NOT NULL)  #-ie. data entry time --
ENGINE=MyISAM DEFAULT CHARSET=latin1;

#Sample entries
INSERT INTO collectables VALUES('1','Egyptian Ankh (gold)','Artifact - Africa','7900000.00','ankh.png');
INSERT INTO collectables VALUES('2','#6 Charizard, 1st Edition','Trading card - Pokemon','969.66','charizard.png');
INSERT INTO collectables VALUES('3','Lenin Statue (bronze)','Artifact - Europe','1451451.45','lenin.png');
#Sample entry to enter in browser
#4	Tiger Woods golf club, 1st pga tour, $44,444.44,'driver.png'

SELECT * FROM comp_1006.collectables;
#DROP TABLE collectables;