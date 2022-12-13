-- preset values not editable by userspress

insert into place (place_name) values ('running track');
insert into place (place_name) values ('gym');
insert into place (place_name) values ('dojo');


insert into competition(place_id, competiton_name) values (1,'100 m run');
insert into competition(place_id, competiton_name) values (1,'400 m run');
insert into competition(place_id, competiton_name) values (2,'bench press');
insert into competition(place_id, competiton_name) values (2,'deadlift');
insert into competition(place_id, competiton_name) values (3,'karate');
insert into competition(place_id, competiton_name) values (3,'boxing');


-- example values that can be added using forms by users

insert into city(nazwa_miasta) values ('Gdansk');
insert into city(nazwa_miasta) values ('Warszawa');
insert into city(nazwa_miasta) values ('Poznan');


insert into trainer(tname,tsurname) values ('Emanuel','Krajewski');
insert into trainer(tname,tsurname) values ('Bronislaw','Michalak');
insert into trainer(tname,tsurname) values ('Marek','Krajewski');
insert into trainer(tname,tsurname) values ('Dobromil','Laskowski');
insert into trainer(tname,tsurname) values ('Diego','Gorski');


insert into club(club_name,city_id,trainer_id) values ('Silacze Gdansk',1,1);
insert into club(club_name,city_id,trainer_id) values ('Lekkoatletyka Gdansk',1,2);
insert into club(club_name,city_id,trainer_id) values ('club Sportow Silowych Warszawa',2,3);
insert into club(club_name,city_id,trainer_id) values ('Sztuki Walki Warszawa',2,4);
insert into club(club_name,city_id,trainer_id) values ('Uczniowski Klub Sportowy Poznan',3,5);


insert into competitor(cname,csurname,birth_date,cweight,height,club_id) values ('Cezary','Sawicki','21-01-1997',88,182,1);
insert into competitor(cname,csurname,birth_date,cweight,height,club_id) values ('Albert','Michalak','15-03-1995',77,165,1);
insert into competitor(cname,csurname,birth_date,cweight,height,club_id) values ('Piotr','Blaszczyk','24-02-1996',69,175,2);
insert into competitor(cname,csurname,birth_date,cweight,height,club_id) values ('Alfred','Sikorski','12-04-1998',84,191,2);
insert into competitor(cname,csurname,birth_date,cweight,height,club_id) values ('Jozef','Szulc','09-07-1999',71,179,3);
insert into competitor(cname,csurname,birth_date,cweight,height,club_id) values ('Janusz','Adamski','03-05-2001',67,168,3);
insert into competitor(cname,csurname,birth_date,cweight,height,club_id) values ('Krystian','Gorski','27-04-1997',78,177,4);
insert into competitor(cname,csurname,birth_date,cweight,height,club_id) values ('Antoni','Lis','18-06-1998',72,189,4);
insert into competitor(cname,csurname,birth_date,cweight,height,club_id) values ('Juliusz','Kazmierczak','26-05-2000',91,181,5);
insert into competitor(cname,csurname,birth_date,cweight,height,club_id) values ('Kordian','Makowski','14-12-1999',81,166,5);
insert into competitor(cname,csurname,birth_date,cweight,height,club_id) values ('Miron','Zalewski','17-10-1996',61,185,5);
insert into competitor(cname,csurname,birth_date,cweight,height,club_id) values ('Rafal','Krawczyk','22-05-1999',79,170,5);


insert into start_table(competition_id,competitor_id) values (3,1);
insert into start_table(competition_id,competitor_id) values (4,1);
insert into start_table(competition_id,competitor_id) values (3,2);
insert into start_table(competition_id,competitor_id) values (4,2);
insert into start_table(competition_id,competitor_id) values (1,3);
insert into start_table(competition_id,competitor_id) values (2,3);
insert into start_table(competition_id,competitor_id) values (1,4);
insert into start_table(competition_id,competitor_id) values (2,4);
insert into start_table(competition_id,competitor_id) values (3,5);
insert into start_table(competition_id,competitor_id) values (4,5);
insert into start_table(competition_id,competitor_id) values (3,6);
insert into start_table(competition_id,competitor_id) values (4,6);
insert into start_table(competition_id,competitor_id) values (5,7);
insert into start_table(competition_id,competitor_id) values (6,8);
insert into start_table(competition_id,competitor_id) values (2,9);
insert into start_table(competition_id,competitor_id) values (5,9);
insert into start_table(competition_id,competitor_id) values (1,10);
insert into start_table(competition_id,competitor_id) values (6,10);
insert into start_table(competition_id,competitor_id) values (5,11);
insert into start_table(competition_id,competitor_id) values (6,12);