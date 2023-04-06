/* Create database called scandiweb_test_project */
CREATE DATABASE scandiweb_test_project;

/* Use the database */
USE scandiweb_test_products;

/* Create a table called products */
CREATE TABLE products 
(id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
 sku VARCHAR(255) NOT NULL, 
 name VARCHAR(255) NOT NULL, 
 price DECIMAL(20) NOT NULL,
 weight_kg DECIMAL(20) NOT NULL, 
 size INT(20) NOT NULL, 
 dimensions JSON NOT NULL);
