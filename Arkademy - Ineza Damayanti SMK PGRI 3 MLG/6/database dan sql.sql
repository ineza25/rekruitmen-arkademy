CREATE DATABASE arkademy;
USE arkademy;

CREATE TABLE categories(
	id int(5) PRIMARY KEY NOT NULL,
	name VARCHAR(10) NOT NULL);
INSERT INTO categories VALUES
	('1','nurhadi'),
	('2','aldo'),
	('3','dodi');
	
CREATE TABLE hobbies(
	id int(5) PRIMARY KEY NOT NULL,
	person_id int(5) NOT NULL,
	name VARCHAR(20) NOT NULL);
INSERT INTO hobbies VALUES
	('1','1','Bird watching'),
	('2','1','Martial arts'),
	('3','2','Hiking'),
	('4','1','Archery'),
	('5','2','Beekeeping'),
	('6','3','Book restoration');
	
SELECT 
categories.id AS person_id, categories.name,
GROUP_CONCAT(hobbies.name) AS person_hobbies
FROM categories, hobbies
WHERE categories.id=hobbies.person_id
GROUP BY person_id, name;