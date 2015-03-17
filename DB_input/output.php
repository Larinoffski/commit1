<table border="1" cellspacing="2" cellpadding="2">
    <tr>
        <th><font face="Arial, Helvetica, sans-serif">Name</font></th>
        <th><font face="Arial, Helvetica, sans-serif">Название</font></th>
        <th><font face="Arial, Helvetica, sans-serif">Год</font></th>
        <th><font face="Arial, Helvetica, sans-serif">Страна</font></th>
        <th><font face="Arial, Helvetica, sans-serif">Жанр</font></th>
        <th><font face="Arial, Helvetica, sans-serif">Режиссер</font></th>
    </tr>



<?php
include_once "config.php";

$dbcnx = mysql_connect($dblocation,$dbuser,$dbpasswd);
$dbSelected = mysql_select_db($dbname, $dbcnx);

$query="SELECT * FROM films";
$result=mysql_query($query);

/*if($result){
    while($film = mysql_fetch_array($result)){
        echo "Название - " . $film['name'] . "<br>";
        echo "RUS - " . $film ['runame'] . "<br>";
        echo "Год - " . $film['year'] . "<br>";
        echo "Страна - " . $film['country'] . "<br>";
        echo "Жанр - " . $film['genre'] . "<br>";
        echo "Режиссер - " . $film['director'] . "<br>";
    }
}
*/

$num=mysql_numrows($result);
echo"<br>$num<br>";
$i=0;
while ($i < $num) {

    $name = mysql_result($result, $i, "name");
    $runame = mysql_result($result, $i, "runame");
    $year = mysql_result($result, $i, "year");
    $country = mysql_result($result, $i, "country");
    $genre = mysql_result($result, $i, "genre");
    $director = mysql_result($result, $i, "director");
    ?>


    <tr>
        <td><font face="Arial, Helvetica, sans-serif"><?php echo $name; ?></font></td>
        <td><font face="Arial, Helvetica, sans-serif"><?php echo $runame; ?></font></td>
        <td><font face="Arial, Helvetica, sans-serif"><?php echo $year; ?></font></td>
        <td><font face="Arial, Helvetica, sans-serif"><?php echo $country; ?></font></td>
        <td><font face="Arial, Helvetica, sans-serif"><?php echo $genre; ?></font></td>
        <td><font face="Arial, Helvetica, sans-serif"><?php echo $director; ?></font></td>
    </tr>


<?php
//echo"$name, $runame, $year, $country<br>";
$i++;
}

echo "</table>";
mysql_close();