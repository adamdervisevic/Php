-- Citanje podataka iz baze

SELECT * FROM `tasks`;

SELECT `title`, `start_date`, `due_date` FROM `tasks`;

SELECT `name`, `age`, `address` FROM `customers`;

-- Dohvati sva razlicita imena koja imaju nasi potrosaci

SELECT DISTINCT `name` FROM `customers`;

SELECT DISTINCT `name`, `age`, `address` FROM `customers`;

SELECT DISTINCT `id`, `name` FROM `customers`;

SELECT DISTINCT `salary` FROM `customers`;

--Iz tabele customers, pročitati sve klijente:
--Koji dolaze iz Srbije,
--Koji imaju platu jednaku (manju, veću) od 500.
SELECT *
FROM `customers`
WHERE `state` = 'Srbija';

SELECT *
FROM `customers`
WHERE `salary` >= 500;

--Iz tabele tasks, pročitati sve zadatke:
--Čiji je status aktivan (1),
--Čiji je prioritet nizak (0)

SELECT `task_id`, `title`, `description`
FROM `tasks`
WHERE `status` = 1;

SELECT `task_id`, `title`, `description`
FROM `tasks`
WHERE `priority` = 1;

--Iz tabele tasks, procitati sve zadatke koji su prioritetni, a koji su zavrseni

SELECT `task_id`, `title`, `description`
FROM `tasks`
WHERE `priority` != 0 
AND `due_date` IS NOT NULL;

--Iz tabele customers, pročitati sve klijente:

--Čija je plata između 300 i 800,
SELECT `name`, `address`, `state`, `salary`
FROM `customers`
WHERE `salary` BETWEEN 300 AND 800;

-- Cija je plata jedna 500 600 ili 700
SELECT `name`, `address`, `state`, `salary`
FROM `customers`
WHERE `salary` = 500 OR `salary` = 600 OR `salary` = 700;

--BOLJI NACIN OD ONOG GORE
SELECT `name`, `address`, `state`, `salary`
FROM `customers`
WHERE `salary` IN (500, 600, 700);

--Cije je ime Ana, Bojana ili Vuk
SELECT `name`, `address`, `state`, `salary`
FROM `customers`
WHERE `name` IN ("Ana", "Bojana", "Vuk");

--Cije ime pocinje na slovo 'B'
SELECT `name`, `address`, `state`, `salary`
FROM `customers`
WHERE `name` LIKE 'B%';

--Cije ime sadrzi slovo 'j'
SELECT `name`, `address`, `state`, `salary`
FROM `customers`
WHERE `name` LIKE '%j%';

--Koji su iz Srbije, Rumunije ili Bugarske,
SELECT `name`, `address`, `state`, `salary`
FROM `customers`
WHERE `state` IN ("Srbija", "Rumunija", "Bugarska");

--Koju potiču iz zemlje koja počinje na slovo “S”.
SELECT `name`, `address`, `state`, `salary`
FROM `customers`
WHERE `state` LIKE 'S%';

--Iz tabele tasks, pročitati sve zadatke:
--Čiji id pripada skupu {1, 4, 8, 12},
SELECT `task_id`, `start_date`, `due_date`, `status`, `description`, `priority`
FROM `tasks`
WHERE `task_id` IN (1, 4, 8, 12);

--Čiji je početak veći od 2019-01-01,
SELECT `task_id`, `start_date`, `due_date`, `status`, `description`, `priority`
FROM `tasks`
WHERE `start_date` > "2019-01-01";

--Čiji je status različit od neaktivan.
SELECT `task_id`, `start_date`, `due_date`, `status`, `description`, `priority`
FROM `tasks`
WHERE `status` != 0;

--dodavanje
INSERT INTO `tasks`(`task_id`, `title`, `start_date`, `due_date`, `status`, `description`, `priority`)
VALUES 
(4, "Odmori dusu", "2023-06-03", "2023-06-03", 0, "Ohladi glavu", 1);

--Limitiranje broja rezultata
SELECT *
FROM `customers`
LIMIT 2;

SELECT *
FROM `customers`
WHERE `name` Like 'B%';
LIMIT 1;

--Prikazi prva dva korisnika koji imaju dvocifren broj poseta
SELECT *
FROM `customers`
WHERE `number_of_visits` BETWEEN 10 AND 99
LIMIT 2;

--Sortiranje podataka
SELECT *
FROM `customers`
ORDER BY `name`;

--Svi korisnici po godinama od najstarijih ka najmladjim
SELECT *
FROM `customers`
ORDER BY `age` DESC;

--Svi korisnici po godinama od majmladjih ka najstarijim
--i po broju poseta od vise ka manjem broju poseta
SELECT *
FROM `customers`
ORDER BY `age` ASC, `number_of_visits` DESC;

--Prikazi prva dva koristnika sa najvecim brojem poseta
--a ciji je broj poseta dvocifren
--(odredi korisnike sa dvocifrenim brojem poseta, i prikazi prva dva sa najvecim takvim brojem poseta)
SELECT*
FROM `customers`
WHERE `number_of_visits` BETWEEN 10 AND 99
ORDER BY `number_of_visits` DESC
LIMIT 2;

--Prikazi korisnika koji ima najmanju platu koja je u opsegu izmedju 300 i 500
--ako ima vise ovakvih korisnika, prikazati onog cije je ime prvo u leksikografskom poretku

SELECT*
FROM `customers`
WHERE `salary` BETWEEN 300 AND 500
ORDER BY `salary`, `name`
LIMIT 1;

--Iz tabele customers, pročitati sve klijente:
--Koji su iz Srbije a plata je 600,
--Čije ime počinje na S ili imaju manje od 30god.

SELECT *
FROM `customers`
WHERE `state` = 'Srbija' AND `salary` = 600;

SELECT*
FROM `customers`
WHERE `name` LIKE 'S%' OR `age` < 30;

--Iz tabele tasks, pročitati sve zadatke:
--Čiji je status različit od aktivan i prioritet visok,
--Čiji datum nije veći od 2019-01-01.

SELECT*
FROM `tasks`
WHERE `status` != 1 AND `priority` > 0;

SELECT*
FROM `tasks`
WHERE NOT `start_date` > '2019-01-01';

--drugi nacin
SELECT*
FROM `tasks`
WHERE `start_date` <= '2019-01-01';

--fukncije kod select-a

--prebrojati koliko ima kupaca izmedju 30 i 40 godina
SELECT COUNT(`age`) AS 'broj_kupaca'
FROM `customers`
WHERE `age` BETWEEN 30 AND 40;

--odrediti procecan broj poseta kupaca
SELECT AVG(`number_of_visits`) AS 'prosecan_broj_poseta'
FROM `customers`;

--Odrediti prosecnu platu kupaca iz Srbije
SELECT AVG(`salary`) AS 'prosecna_plata_srbija'
FROM `customers`
WHERE `state` = 'Srbija';

--Odrediti broj razlicitih imena kupaca
SELECT COUNT(DISTINCT `name`) AS 'broj_razlicitih_imena'
FROM `customers`;

--Odrediti razliciti broj drzava kupaca
SELECT COUNT(DISTINCT `state`) AS 'broj_razlicitih_drzava'
FROM `customers`;

--Odrediti ime osobe koja ima najmanju platu
--ako ima vise takvih, ispisati bilo koju takvu osobu

SELECT `name`
FROM `customers`
WHERE `salary` = (SELECT MIN(`salary`) FROM `customers`)
LIMIT 1;

--jos lakse resenje
SELECT `name`
FROM `customers`
ORDER BY `salary`
LIMIT 1;

--ispisati imena svih natprosecno starih osoba u leksikografskom poretku
SELECT `name`
FROM `customers`
WHERE `age` > (SELECT AVG(`age`) FROM `customers`)
ORDER BY `name`;

--ispisati imena svih osoba iz Srbije sa natprosecnom platom

SELECT `name`
FROM `customers`
WHERE `salary` > (SELECT AVG(`salary`) FROM `customers` WHERE `state` = 'Srbija')
AND `state` = 'Srbija';