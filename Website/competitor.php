<html>
<head>
    <title>Sports_Competition_Website</title>
</head>
<body> <CENTER>
<h1> Sports Competition </h1>
<h2>Competitor added!</h2> </CENTER>
<?php


$name=$_POST['namec'];
$sname=$_POST['surnamec'];
$date=$_POST['date'];
$weight=$_POST['weight'];
$height=$_POST['height'];
$club=$_POST['clubc'];


$dbh = pg_connect("dbname=sports_competition user=user_name password=password host=localhost") or die("Can't connect to the database!");

echo "<CENTER>";


$query= "insert into competitor(cname,csurname,birth_date,weight,height,club_id)
values ('$name','$sname','$date','$weight','$height','$club')";

$result=pg_query($query);


echo "<br/><br/><FORM action=main.php method=POST>
<input type=submit name=go_back value=Back> </form>";


echo "</CENTER>";

pg_close($dbh);

?>
</body>
</html>