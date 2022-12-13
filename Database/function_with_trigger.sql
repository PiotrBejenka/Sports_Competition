-- function that automates process of assignig competitors to accurate weight category basing on weight
-- given during registratrion triggered by registration a competitor to participate in chosen competition

create or replace function weight_check() returns trigger
language plpgsql
as
'
declare
w float;
w_cat int;
id int;
comp_id int;
begin
SELECT competitor.cweight INTO w
FROM competitor, start_table
WHERE competitor.id_competitor=NEW.competitor_id;
SELECT start_table.weight_category INTO w_cat
FROM start_table, competitor
WHERE competitor.id_competitor=NEW.competitor_id
AND competitor.id_competitor=start_table.competitor_id;
SELECT start_table.competitor_id INTO id
FROM start_table
WHERE start_table.competitor_id=NEW.competitor_id;
SELECT start_table.competition_id INTO comp_id
FROM start_table
WHERE start_table.competition_id=NEW.competition_id;
if w<70
then w_cat=1;
UPDATE start_table SET weight_category=w_cat WHERE competitor_id=id and competition_id=comp_id;
return new;
end if;
if w>70 and w<85
then w_cat=2;
UPDATE start_table SET weight_category=w_cat WHERE competitor_id=id and competition_id=comp_id;
return new;
end if;
if w>85
then w_cat=3;
UPDATE start_table SET weight_category=w_cat WHERE competitor_id=id and competition_id=comp_id;
return new;
end if;
end;
';

create trigger add_to_weight_category after insert on start_table for each row execute procedure weight_check();