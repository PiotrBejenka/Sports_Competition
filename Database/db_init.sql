-- database

CREATE DATABASE sports_competition;


-- tables

CREATE TABLE competitor (
id_competitor serial primary key,
cname varchar(50) not null,
csurname varchar(50) not null,
birth_date date not null,
cweight float not null,
height float not null,
club_id int not null);

CREATE TABLE club(
id_club serial primary key,
club_name varchar(50) not null,
city_id int not null,
trainer_id int not null);

CREATE TABLE trainer(
id_trainer serial primary key,
tname varchar(50) not null,
tsurname varchar(50) not null);

CREATE TABLE city(
id_city serial primary key,
city_name varchar(50) not null);

CREATE TABLE competition(
id_competition serial primary key,
place_id int not null,
competiton_name varchar(50) not null);

CREATE TABLE place(
id_place serial primary key,
place_name varchar(50) not null);

CREATE TABLE start_table(
start_number serial primary key,
competition_id int not null,
competitor_id int not null,
weight_category int);


-- references

ALTER TABLE club ADD FOREIGN KEY (trainer_id)
REFERENCES trainer (id_trainer) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE club ADD FOREIGN KEY (city_id)
REFERENCES city (id_city) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE competitor ADD FOREIGN KEY (club_id)
REFERENCES club (id_club) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE start_table ADD FOREIGN KEY (competitor_id)
REFERENCES competitor (id_competitor) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE start_table ADD FOREIGN KEY (competition_id)
REFERENCES competition (id_competition) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE competition ADD FOREIGN KEY (place_id)
REFERENCES place (id_place) ON DELETE RESTRICT ON UPDATE RESTRICT;