<?php
include_once "config.php";
$dbcnx = mysql_connect($dblocation,$dbuser,$dbpasswd);
$dbSelected = mysql_select_db($dbname, $dbcnx);


/*if($dbcnx){
    echo"ok<br>";
}
if($dbSelected) {
    echo "ok";
}
$query = "INSERT INTO films VALUES ('','John','кенг','2000','usa','comedy','tarantino Q')";
mysql_query($query);
mysql_close();
*/





$stmt = mysqli_prepare($dbcnx, "INSERT INTO films VALUES (?, ?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, 'ssdsss', $name, $runame, $year, $country, $genre, $director);

$name = "M.I.B.";
$runame = "Люди в черном";
$year = "2001";
$country = "USA" ;
$genre = "Action";
$director = "X3" ;

/* execute prepared statement */
mysqli_stmt_execute($stmt);

printf("%d Row inserted.\n", mysqli_stmt_affected_rows($stmt));

/* close statement and connection */
mysqli_stmt_close($stmt);

/* Clean up table CountryLanguage */
mysqli_query($link, "DELETE FROM CountryLanguage WHERE Language='Bavarian'");
printf("%d Row deleted.\n", mysqli_affected_rows($link));

/* close connection */
mysqli_close($link);
