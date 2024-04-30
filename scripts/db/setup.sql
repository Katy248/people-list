CREATE DATABASE `people-db`;

USE `people-db`;

CREATE TABLE `people` (
    id INT PRIMARY KEY,
    first_name VARCHAR(255),
    phone VARCHAR(20),
    creation DATE,
    last_edit DATE
);
