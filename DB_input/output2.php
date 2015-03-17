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

if($result){
    while($film = mysql_fetch_array($result)){
        ?>

<tr>
    <td><font face="Arial, Helvetica, sans-serif"><?php echo $film['name']; ?></font></td>
    <td><font face="Arial, Helvetica, sans-serif"><?php echo $film['runame']; ?></font></td>
    <td><font face="Arial, Helvetica, sans-serif"><?php echo $film['year']; ?></font></td>
    <td><font face="Arial, Helvetica, sans-serif"><?php echo $film['country']; ?></font></td>
    <td><font face="Arial, Helvetica, sans-serif"><?php echo $film['genre']; ?></font></td>
    <td><font face="Arial, Helvetica, sans-serif"><?php echo $film['director']; ?></font></td>
</tr>

<?php
    }
}
?>
</table>