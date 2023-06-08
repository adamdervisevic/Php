CREATE DATABASE `store`;

CREATE TABLE `categories`(
    `id` int PRIMARY KEY,
    `category_name` VARCHAR(170) NOT NULL,
    `description` CHAR(200);
);

CREATE TABLE `products` (
    `id` INT PRIMARY KEY,
    `product_name` VARCHAR(200) NOT NULL,
    `price` DECIMAL(10,2) DEFAULT 0;
);

CREATE TABLE `product_categories` (
    `id` INT PRIMARY KEY,
    `id_product` INT,
    `id_category` INT,
    FOREIGN KEY (`id_product`) REFERENCES `product`(`id`),
    FOREIGN KEY (`id_category`) REFERENCES `categories`(`id`)
);

ALTER TABLE `categories` ENGINE = INNODB;
ALTER TABLE `products` ENGINE = INNODB;
ALTER TABLE `product_categories` ENGINE = INNODB;


INSERT INTO `categories`(`id`, `category_name`, `description`)
VALUES 
(1, 'GARDEN', 'za bastu'),
(2, 'HOUSE', 'za kucu'),
(3, 'CAR', 'za kola');


INSERT INTO `products`(`id`, `product_name`, `price`)
VALUES
(1, 'lopata', 500),
(2, 'metla', 300),
(3, 'brisaci', 200);

INSERT INTO `product_categories`(`id`, `id_product`, `id_category`) 
VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3);

SELECT DISTINCT `category_name`
FROM `categories`
ORDER BY `category_name`;

SELECT *
FROM `products`
WHERE `price` > (SELECT AVG(`price`) FROM `products`);

SELECT *
FROM `categories`
WHERE `category_name` = 'GARDEN'
ORDER BY `category_name` DESC
LIMIT 1;
-- ovo ne radi zato sto ga nisam JOINOVAO

