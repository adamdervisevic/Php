CREATE DATABASE `fakultet`CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

CREATE TABLE `predmeti`(
    `id` INT PRIMARY KEY,
    `naziv` VARCHAR(30) NOT NULL,
    `smer` VARCHAR(30) NOT NULL
) ENGINE=INNODB;

CREATE TABLE `studenti`(
    `indeks` VARCHAR(20) PRIMARY KEY,
    `ime` VARCHAR(30) NOT NULL,
    `prezime` VARCHAR(30) NOT NULL
) ENGINE=INNODB;

CREATE TABLE `ispiti`(
    `id` INT PRIMARY KEY,
    `datum` DATE NOT NULL,
    `ocena` INT(2) NOT NULL
) ENGINE=INNODB;

CREATE TABLE `nastavnici`(
    `id` INT PRIMARY KEY,
    `ime` VARCHAR(30) NOT NULL,
    `prezime` VARCHAR(30) NOT NULL
) ENGINE=INNODB;

ALTER TABLE `ispiti`
    ADD `student_indeks` VARCHAR(20) NOT NULL,
    ADD `predmet_id` INT NOT NULL,
    ADD `nastavnik_id` INT NOT NULL,
    ADD FOREIGN KEY (`student_indeks`) REFERENCES `studenti`(`indeks`),
    ADD FOREIGN KEY (`predmet_id`) REFERENCES `predmeti`(`id`),
    ADD FOREIGN KEY (`nastavnik_id`) REFERENCES `nastavnici`(`id`);

SELECT CONCAT(`studenti`.`ime`, " ", `studenti`.`prezime`) AS `student`, 
`predmeti`.`naziv`,
CONCAT(`nastavnici`.`ime`, " ", `nastavnici`.`prezime`) AS `nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks` 
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id` = `predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id` = `nastavnici`.`id`
WHERE `ispiti`.`datum` = "2023-05-15";

SELECT CONCAT(`studenti`.`ime`, " ", `studenti`.`prezime`) AS `student`, 
`predmeti`.`naziv`,
CONCAT(`nastavnici`.`ime`, " ", `nastavnici`.`prezime`) AS `nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks` 
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id` = `predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id` = `nastavnici`.`id`
WHERE `studenti`.`ime` = "Nikola" AND `studenti`.`prezime` = "Devic";

SELECT CONCAT(`studenti`.`ime`, " ", `studenti`.`prezime`) AS `student`, 
`predmeti`.`naziv`,
CONCAT(`nastavnici`.`ime`, " ", `nastavnici`.`prezime`) AS `nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks` 
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id` = `predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id` = `nastavnici`.`id`
WHERE `studenti`.`ime` = "Nikola" AND `studenti`.`prezime` = "Devic"
AND `ispiti`.`ocena` > 8;

