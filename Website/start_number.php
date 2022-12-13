<html>
<head>
    <title>Sports_Competition_Website</title>
</head>
<body> <CENTER>
<h1> Sports Competition </h1>
<h2>Competitor succesfully assigned to competition!</h2> </CENTER>
<?php


$cmptn=$_POST['sncompetition'];
$cmptr=$_POST['sncompetitor'];


$dbh = pg_connect("dbname=sports_competition user=user_name password=password host=localhost") or die("Can't connect to the database!");

echo "<CENTER>";


$query= "insert into start_table(competition_id,competitor_id)
values ('$cmptn','$cmptr')";

$result=pg_query($query);


echo "<br/><br/><FORM action=main.php method=POST>
<input type=submit name=go_back value=Back> </form>";


echo "</CENTER>";

pg_close($dbh);

?>
</body>
</html>