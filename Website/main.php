<html>
<head>
    <title>Sports_Competition_Website</title>
</head>
<body> <CENTER>
<h1> Sports Competition </h1>
<h2>Welcome!</h2> </CENTER>
<?php


$dbh = pg_connect("dbname=sports_competition user=user_name password=password host=localhost") or die("Can't connect to the database!");

echo "<CENTER>";


$query="select cmp.id_competitor, cmp.cname, cmp.csurname, cmp.birth_date,cmp.cweight,cmp.height,cl.club_name from competitor c, club cl where cmp.club_id=cl.id_club";
$result=pg_query($dbh,$query);

$columns_number = pg_num_fields($result);
$rows_number= pg_num_rows($result);
echo "<br/>Registered competitors:<br/><br/>";
echo "<TABLE border width=1>";
echo "<TR>";
for($c =0;$c<$columns_number;$c++)
{
    echo "<TD>";
    echo pg_field_name($result,$c);
    echo "</TD>";
}
echo "</TR>";
for($r =0;$r<$rows_number;$r++)
{
    echo "<TR>";
    for($c =0;$c<$columns_number;$c++)
    {
	echo "<TD>";
	echo pg_fetch_result($result,$r,$c);
	echo "</TD>"; 
    }
echo "</TR>"; 
}
echo "</TABLE>";


$query="select cl.id_club, cl.club_name, ct.city_name,t.tname,t.tsurname from club cl, city ct, trainer t where cl.city_id=ct.id_miasto and cl.trainer_id=t.id_trainer";
$result=pg_query($dbh,$query);

$columns_number = pg_num_fields($result);
$rows_number= pg_num_rows($result);
echo "<br/><br/>Registered clubs:<br/><br/>";
echo "<TABLE border width=1>";
echo "<TR>";
for($c =0;$c<$columns_number;$c++)
{
    echo "<TD>";
    echo pg_field_name($result,$c);
    echo "</TD>";
}
echo "</TR>";
for($r =0;$r<$rows_number;$r++)
{
    echo "<TR>";
    for($c =0;$c<$columns_number;$c++)
    {
	echo "<TD>";
	echo pg_fetch_result($result,$r,$c);
	echo "</TD>"; 
    }
echo "</TR>"; 
}
echo "</TABLE>";


$query="select*from trainer";
$result=pg_query($dbh,$query);

$columns_number = pg_num_fields($result);
$rows_number= pg_num_rows($result);
echo "<br/><br/>Registered trainers:<br/><br/>";
echo "<TABLE border width=1>";
echo "<TR>";
for($c =0;$c<$columns_number;$c++)
{
    echo "<TD>";
    echo pg_field_name($result,$c);
    echo "</TD>";
}
echo "</TR>";
for($r =0;$r<$rows_number;$r++)
{
    echo "<TR>";
    for($c =0;$c<$columns_number;$c++)
    {
	echo "<TD>";
	echo pg_fetch_result($result,$r,$c);
	echo "</TD>"; 
    }
echo "</TR>"; 
}
echo "</TABLE>";


$query="select*from city";
$result=pg_query($dbh,$query);

$columns_number = pg_num_fields($result);
$rows_number= pg_num_rows($result);
echo "<br/><br/>Registered cities:<br/><br/>";
echo "<TABLE border width=1>";
echo "<TR>";
for($c =0;$c<$columns_number;$c++)
{
    echo "<TD>";
    echo pg_field_name($result,$c);
    echo "</TD>";
}
echo "</TR>";
for($r =0;$r<$rows_number;$r++)
{
    echo "<TR>";
    for($c =0;$c<$columns_number;$c++)
    {
	echo "<TD>";
	echo pg_fetch_result($result,$r,$c);
	echo "</TD>"; 
    }
echo "</TR>"; 
}
echo "</TABLE>";


$query="select*from place";
$result=pg_query($dbh,$query);

$columns_number = pg_num_fields($result);
$rows_number= pg_num_rows($result);
echo "<br/><br/>Places where the competition will take place:<br/><br/>";
echo "<TABLE border width=1>";
echo "<TR>";
for($c =0;$c<$columns_number;$c++)
{
    echo "<TD>";
    echo pg_field_name($result,$c);
    echo "</TD>";
}
echo "</TR>";
for($r =0;$r<$rows_number;$r++)
{
    echo "<TR>";
    for($c =0;$c<$columns_number;$c++)
    {
	echo "<TD>";
	echo pg_fetch_result($result,$r,$c);
	echo "</TD>"; 
    }
echo "</TR>"; 
}
echo "</TABLE>";


$query="select cmp.id_competition, cmp.competiton_name, p.place_name from competition cmp, place p where cmp.place_id=p.id_place";
$result=pg_query($dbh,$query);

$columns_number = pg_num_fields($result);
$rows_number= pg_num_rows($result);
echo "<br/><br/>Competitions:<br/><br/>";
echo "<TABLE border width=1>";
echo "<TR>";
for($c =0;$c<$columns_number;$c++)
{
    echo "<TD>";
    echo pg_field_name($result,$c);
    echo "</TD>";
}
echo "</TR>";
for($r =0;$r<$rows_number;$r++)
{
    echo "<TR>";
    for($c =0;$c<$columns_number;$c++)
    {
	echo "<TD>";
	echo pg_fetch_result($result,$r,$c);
	echo "</TD>"; 
    }
echo "</TR>"; 
}
echo "</TABLE>";



echo "<br/><br/><br/>Starting lists divided into competitions and weights categories:<br/><br/><FORM action=starting_lists.php method=POST>
<input type=submit name=lists value=Show_lists> </form>";


echo " <br/><br/><br/>Assign competitor to competition:<br/><br/>
<FORM action=start_number.php method=POST>
Competitor (id):   <input type=int name=sncompetitor> <br/><br/>
Competition:<select name=sncompetition>
<option selected=true disabled=disabled>Choose competition:</option>
<option value=1>100 m run</option>
<option value=2>400 m run</option>
<option value=3>bench press</option>
<option value=4>deadlift</option>
<option value=5>karate</option>
<option value=6>boxing</option>
</select>
<br/><br/>
<input type=submit name=register value=Register> </form>";


echo " <br/><br/>Add competitor:<br/><br/>
<FORM action=competitor.php method=POST>
Name:   <input type=text name=namec>
Surname: <input type=text name=surnamec> <br/><br/>
Birth date:   <input type=date name=date> <br/><br/>
Weight:   <input type=float name=weight>
Height:   <input type=float name=height> <br/><br/>
Sekcja (id):   <input type=int name=clubc>
<br/><br/>
<input type=submit name=register value=Register> </form>";


echo "<br/><br/>Add club:<br/><br/>
<FORM action=club.php method=POST>
Club name:   <input type=text name=clubname> <br/><br/>
City (id): <input type=int name=cityid> <br/><br/>
Trainer (id):   <input type=int name=trainerid>
<br/><br/>
<input type=submit name=register value=Register> </form>";


echo "<br/><br/>Add trainer:<br/><br/>
<FORM action=trainer.php method=POST>
Name:   <input type=text name=namet>
Surname: <input type=text name=surnamet>
<br/><br/>
<input type=submit name=register value=Register> </form>";


echo "<br/><br/>Add city:<br/><br/>
<FORM action=city.php method=POST>
City name:   <input type=text name=cityname>
<br/><br/>
<input type=submit name=register value=Register> </form>";


echo "</CENTER>";

pg_close($dbh);

?>
</body>
</html>