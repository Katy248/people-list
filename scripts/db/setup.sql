CREATE DATABASE `people-db`;

USE `people-db`;

CREATE TABLE `people` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    phone VARCHAR(20),
    creation DATE,
    last_edit DATE
);
