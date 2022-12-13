<html>
<head>
    <title>Sports_Competition_Website</title>
</head>
<body> <CENTER>
<h1> Sports Competition </h1>
<h2>Trainer added!</h2> </CENTER>
<?php


$name=$_POST['namet'];
$sname=$_POST['surnamet'];


$dbh = pg_connect("dbname=sports_competition user=user_name password=password host=localhost") or die("Can't connect to the database!");

echo "<CENTER>";


$query= "insert into trainer(tname,tsurname)
values ('$name','$sname')";

$result=pg_query($query);


echo "<br/><br/><FORM action=main.php method=POST>
<input type=submit name=go_back value=Back> </form>";


echo "</CENTER>";

pg_close($dbh);

?>
</body>
</html>