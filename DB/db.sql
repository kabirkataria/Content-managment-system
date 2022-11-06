// tbl user 

CREATE TABLE `cms`.`tbl_user` (
`id` INT(11) NOT NULL AUTO_INCREMENT , 
`full_name` VARCHAR(64) NOT NULL , 
`email` VARCHAR(128) NOT NULL ,
`password` VARCHAR(256) NOT NULL , 
 PRIMARY KEY (`id`)
 ) ENGINE = InnoDB; 

 // tbl Brand

 CREATE TABLE `cms`.`tbl_brand` (
`id` INT(11) NOT NULL AUTO_INCREMENT ,
`title` VARCHAR(255) NOT NULL ,
PRIMARY KEY (`id`)
) ENGINE = InnoDB; 

// tbl_product

CREATE TABLE `cms`.`tbl_product` (
`id` INT(11) NOT NULL AUTO_INCREMENT , 
`brand_id` INT(11) NOT NULL , 
`title` VARCHAR(255) NOT NULL , 
`description` VARCHAR(255) NOT NULL , 
`actual_price` VARCHAR(128) NOT NULL , 
`discount_price` VARCHAR(128) NOT NULL , 
`image` VARCHAR(255) NOT NULL , 
PRIMARY KEY (`id`)
) ENGINE = InnoDB; 

// tbl_product_Specfications

CREATE TABLE `cms`.`tbl_product_specification`( 
`id` INT(11) NOT NULL AUTO_INCREMENT , 
`product_id` INT(11) NOT NULL , 
`ram` VARCHAR(64) NULL DEFAULT NULL , 
`warranty` VARCHAR(64) NULL DEFAULT NULL , 
`hard disk` VARCHAR(64) NULL DEFAULT NULL , 
`ssd` VARCHAR(64) NULL DEFAULT NULL , 
PRIMARY KEY (`id`)
) ENGINE = InnoDB; 

// tbl_product_reviews

CREATE TABLE `cms`.`tbl_product_review`( 
`id` INT(11) NOT NULL AUTO_INCREMENT , 
`product_id` INT(11) NOT NULL , 
`text` VARCHAR(255) NOT NULL , 
PRIMARY KEY (`id`)
) ENGINE = InnoDB; 
