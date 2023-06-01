-- komanda za kreiranje baze podataka:
--CREATE DATABASE test_druga;
CREATE DATABASE test_druga CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

--Komanda za brisanje baze podataka
DROP DATABASE test_druga;

--Komanda za odabir baze podataka:
USE test_baza;

--Kreiraj bazu skola
CREATE DATABASE skola CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

--odaberi bazu skola:
USE skola;

--Kreiranje tabele studenti

CREATE TABLE studenti(
    ime VARCHAR(50),
    prezime VARCHAR(50)
);

--kreiranje tabele customers
CREATE TABLE customers(
    id INT NOT NULL,
    name VARCHAR(20) NOT NULL,
    age TINYINT NOT NULL,
    address CHAR(25),
    salary DECIMAL(18, 2) DEFAULT 500
);

--kreiranje tabele tasks
CREATE TABLE tasks(
    task_id INT UNIQUE,
    title VARCHAR(255) NOT NULL,
    start_date DATE,
    due_date DATE,
    status TINYINT NOT NULL,
    description TEXT
);

--kreiranje tabele customers sa primarnim kljucem
--CREATE TABLE customers(
    --id INT NOT NULL,
    --name VARCHAR(20) NOT NULL,
    --age TINYINT NOT NULL,
    --address CHAR(25),
    --salary DECIMAL(18, 2) DEFAULT 500,
    --PRIMARY KEY(id)
--); ovo ne moze jer vec postoji tabela sa ovim nizom
--Dodavanja primarnog kljuca u tabelu customers
ALTER TABLE `customers` ADD PRIMARY KEY(`id`);

ALTER TABLE `customers` ADD active BOOLEAN;
ALTER TABLE `customers` ADD state VARCHAR(90);
ALTER TABLE `customers` ADD number_of_visits TINYINT;
ALTER TABLE `tasks` ADD priority TINYINT NOT NULL;
