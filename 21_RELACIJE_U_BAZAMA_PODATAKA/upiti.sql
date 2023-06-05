-- pravimo novu bazu
CREATE DATABASE drustvene_mreze;

-- pravimo tabelu korisnici
CREATE TABLE `korisnici`(
    `id` INT PRIMARY KEY,
    `korisnicko_ime` VARCHAR(45),
    `lozinka` VARCHAR(45)
);

-- pravimo tabelu profili
CREATE TABLE `profili` (
    `id` INT PRIMARY KEY,
    `adresa` VARCHAR(45),
    `telefon` VARCHAR(45),
    `korisnik_id` INT -- ovo smo zaboravili UNIQUE
);

--dodajemo strani kljuc
ALTER TABLE `profili` 
ADD FOREIGN KEY (`korisnik_id`) -- polje iz tabele profili
REFERENCES `korisnici`(`id`); -- polje iz tabele na koju stavljamo kljuc
-- strani kljuc se nije dodao!! problem je engine=myisam
-- promena Egina na innodb

ALTER TABLE `profili` ENGINE = INNODB;
ALTER TABLE `korisnici` ENGINE = INNODB;

ALTER TABLE `profili` ADD UNIQUE(`korisnik_id`);
INSERT INTO `korisnici`(`id`, `korisnicko_ime`, `lozinka`)
VALUES 
(1, 'pera_paric', '1234'),
(2, 'mika_mikic', '12345'),
(5, 'nikola_nikolic', '1212');

INSERT INTO `profili`(`id`, `korisnik_id`, `adresa`)
VALUES 
(1, 5, 'adresa korisnika id = 5'),
(10,2, 'adresa korisnika id = 2');

INSERT INTO `profili`(`id`, `korisnik_id`, `adresa`)
VALUES 
(2, 50, 'adresa korisnika id = 50'); -- ne mozemo ovo uraditi, zato sto ovaj korisnik ne postoji, tj. id ne postoji 

-- veza 1:N
CREATE TABLE `objave`(
    `id` INT PRIMARY KEY,
    `naslov_objave` VARCHAR(45) NOT NULL
) ENGINE = INNODB;

CREATE TABLE `komentari` (
    `id` INT PRIMARY KEY,
    `komentar` VARCHAR(255) NOT NULL,
    `objava_id` INT NOT NULL
) ENGINE = INNODB;

ALTER TABLE `komentari`
ADD CONSTRAINT `komentari_objava_fk`
FOREIGN KEY (`objava_id`)
REFERENCES `objave`(`id`)
ON DELETE CASCADE ON UPDATE CASCADE;

INSERT INTO `objave` (`id`, `naslov_objave`)
VALUES
(1, 'Moja prva objava'),
(2, 'Moja druga objava'),
(3, 'Moja treca objava');

INSERT INTO `komentari`(`id`, `objava_id`, `komentar`)
VALUES
(101, 1, 'Komentar 1 za objavu 1'),
(102, 1, 'Komentar 2 za objavu 1'),
(103, 3, 'Komentar 1 za objavu 3');

INSERT INTO `komentari`(`id`, `objava_id`, `komentar`)
VALUES
(101, 1, 'Komentar 1 za objavu 1'); -- ne moze jer nemamo objavu sa id= 100

--veza n:m
CREATE TABLE `kategorije`(
    `id` INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `naziv` VARCHAR(45) NOT NULL
) ENGINE = INNODB;

INSERT INTO `kategorije` (`id`, `naziv`)
VALUES 
(1, 'Ekonomija'),
(null, 'Crna hronika');

INSERT INTO `kategorije` (`naziv`)
VALUES 
('Ljubav'),
('Drustvo'),
('Zdravlje');

CREATE TABLE `kategorije_has_objave` (
    `kategorija_id` INT(10) UNSIGNED  not null,
    `objava_id` int not null
) ENGINE=INNODB;

ALTER TABLE `kategorije_has_objave`
ADD CONSTRAINT `kat_obj_kategorija_fk`
FOREIGN KEY (`kategorija_id`)
REFERENCES `kategorije`(`id`)
ON DELETE NO ACTION ON UPDATE CASCADE,
ADD CONSTRAINT `kat_obj_objava_fk`
FOREIGN KEY (`objava_id`)
REFERENCES `objave`(`id`)
ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `kategorije_has_objave`
CHANGE `kategorija_id`
`kategorija_id` INT(10) UNSIGNED NOT NULL;

ALTER TABLE `kategorije_has_objave` ENGINE = INNODB;

INSERT INTO `kategorije_has_objave` (`kategorija_id`, `objava_id`)
VALUES 
(1, 1),
(5, 1),
(2, 2),
(4, 2),
(1, 3);



