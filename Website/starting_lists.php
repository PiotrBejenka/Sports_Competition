<html>
<head>
    <title>Sports_Competition_Website</title>
</head>
<body> <CENTER>
<h1> Sports Competition </h1>
<h2>Starting lists!</h2> </CENTER>
<?php


$dbh = pg_connect("dbname=sports_competition user=user_name password=password host=localhost") or die("Can't connect to the database!");

echo "<CENTER>";


$query="select s.start_number, c.cname, c.csurname, c.cweight from competitor c, start_table s where c.id_competitor=s.competitor_id and s.competition_id=1";
$result=pg_query($dbh,$query);

$columns_number = pg_num_fields($result);
$rows_number= pg_num_rows($result);
echo "<br/><br/>100 m run:<br/><br/>";
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


$query="select s.start_number, c.cname, c.csurname, c.cweight from competitor c, start_table s where c.id_competitor=s.competitor_id and s.competition_id=2";
$result=pg_query($dbh,$query);

$columns_number = pg_num_fields($result);
$rows_number= pg_num_rows($result);
echo "<br/><br/>400 m run:<br/><br/>";
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


$query="select s.start_number, c.cname, c.csurname, c.cweight from competitor c, start_table s where c.id_competitor=s.competitor_id and s.kategoria_wagowa=1 and s.competition_id=3";
$result=pg_query($dbh,$query);

$columns_number = pg_num_fields($result);
$rows_number= pg_num_rows($result);
echo "<br/><br/>Bench press lightweight:<br/><br/>";
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


$query="select s.start_number, c.cname, c.csurname, c.cweight from competitor c, start_table s where c.id_competitor=s.competitor_id and s.kategoria_wagowa=2 and s.competition_id=3";
$result=pg_query($dbh,$query);

$columns_number = pg_num_fields($result);
$rows_number= pg_num_rows($result);
echo "<br/><br/>Bench press middleweight:<br/><br/>";
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


$query="select s.start_number, c.cname, c.csurname, c.cweight from competitor c, start_table s where c.id_competitor=s.competitor_id and s.kategoria_wagowa=3 and s.competition_id=3";
$result=pg_query($dbh,$query);

$columns_number = pg_num_fields($result);
$rows_number= pg_num_rows($result);
echo "<br/><br/>Bench press heavyweight:<br/><br/>";
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


$query="select s.start_number, c.cname, c.csurname, c.cweight from competitor c, start_table s where c.id_competitor=s.competitor_id and s.kategoria_wagowa=1 and s.competition_id=4";
$result=pg_query($dbh,$query);

$columns_number = pg_num_fields($result);
$rows_number= pg_num_rows($result);
echo "<br/><br/>Deadlift lightweight:<br/><br/>";
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


$query="select s.start_number, c.cname, c.csurname, c.cweight from competitor c, start_table s where c.id_competitor=s.competitor_id and s.kategoria_wagowa=2 and s.competition_id=4";
$result=pg_query($dbh,$query);

$columns_number = pg_num_fields($result);
$rows_number= pg_num_rows($result);
echo "<br/><br/>Deadlift middleweight:<br/><br/>";
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


$query="select s.start_number, c.cname, c.csurname, c.cweight from competitor c, start_table s where c.id_competitor=s.competitor_id and s.kategoria_wagowa=3 and s.competition_id=4";
$result=pg_query($dbh,$query);

$columns_number = pg_num_fields($result);
$rows_number= pg_num_rows($result);
echo "<br/><br/>Deadlift heavyweight:<br/><br/>";
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


$query="select s.start_number, c.cname, c.csurname, c.cweight from competitor c, start_table s where c.id_competitor=s.competitor_id and s.kategoria_wagowa=1 and s.competition_id=5";
$result=pg_query($dbh,$query);

$columns_number = pg_num_fields($result);
$rows_number= pg_num_rows($result);
echo "<br/><br/>Karate lightweight:<br/><br/>";
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


$query="select s.start_number, c.cname, c.csurname, c.cweight from competitor c, start_table s where c.id_competitor=s.competitor_id and s.kategoria_wagowa=2 and s.competition_id=5";
$result=pg_query($dbh,$query);

$columns_number = pg_num_fields($result);
$rows_number= pg_num_rows($result);
echo "<br/><br/>Karate middleweight:<br/><br/>";
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


$query="select s.start_number, c.cname, c.csurname, c.cweight from competitor c, start_table s where c.id_competitor=s.competitor_id and s.kategoria_wagowa=3 and s.competition_id=5";
$result=pg_query($dbh,$query);

$columns_number = pg_num_fields($result);
$rows_number= pg_num_rows($result);
echo "<br/><br/>Karate heavyweight:<br/><br/>";
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


$query="select s.start_number, c.cname, c.csurname, c.cweight from competitor c, start_table s where c.id_competitor=s.competitor_id and s.kategoria_wagowa=1 and s.competition_id=6";
$result=pg_query($dbh,$query);

$columns_number = pg_num_fields($result);
$rows_number= pg_num_rows($result);
echo "<br/><br/>Boxing lightweight:<br/><br/>";
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


$query="select s.start_number, c.cname, c.csurname, c.cweight from competitor c, start_table s where c.id_competitor=s.competitor_id and s.kategoria_wagowa=2 and s.competition_id=6";
$result=pg_query($dbh,$query);

$columns_number = pg_num_fields($result);
$rows_number= pg_num_rows($result);
echo "<br/><br/>Boxing middleweight:<br/><br/>";
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


$query="select s.start_number, c.cname, c.csurname, c.cweight from competitor c, start_table s where c.id_competitor=s.competitor_id and s.kategoria_wagowa=3 and s.competition_id=6";
$result=pg_query($dbh,$query);

$columns_number = pg_num_fields($result);
$rows_number= pg_num_rows($result);
echo "<br/><br/>Boxing heavyweight:<br/><br/>";
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


echo "<br/><br/><FORM action=main.php method=POST>
<input type=submit name=go_back value=Back> </form>";


echo "</CENTER>";

pg_close($dbh);

?>
</body>
</html>