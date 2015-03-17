
<?php
include_once "config.php";

$id=$_GET['id'];

$dbcnx = mysql_connect($dblocation,$dbuser,$dbpasswd);
$dbSelected = mysql_select_db($dbname, $dbcnx);

$query=" SELECT * FROM films WHERE id='$id'";
$result=mysql_query($query);
$num=mysql_numrows($result);
//echo"$num";

$i=0;
while ($i < $num) {
    $name = mysql_result($result, $i, "name");
    $runame = mysql_result($result, $i, "runame");
    $year = mysql_result($result, $i, "year");
    $country = mysql_result($result, $i, "country");
    $genre = mysql_result($result, $i, "genre");
    $director = mysql_result($result, $i, "director");

    ?>
    <form action="htmlformup.php" method="post">
        <input type="hidden" name="ud_id" value="<?php echo $id; ?>">
        Name: <input type="text" name="ud_name" value="<?php echo $name; ?>">
        Название: <input type="text" name="ud_runame" value="<?php echo $runame; ?>">
        Year: <input type="text" name="ud_year" value="<?php echo $year; ?>">
        Country: <input type="text" name="ud_country" value="<?php echo $country; ?>">
        Genre: <input type="text" name="ud_genre" value="<?php echo $genre; ?>">
        Director: <input type="text" name="ud_director" value="<?php echo $director; ?>">
        <input type="Submit" value="Update">
    </form>
    <?php

    $i++;
}

$ud_id=$_POST['ud_id'];
$ud_name=$_POST['ud_name'];
$ud_runame=$_POST['ud_runame'];
$ud_year=$_POST['ud_year'];
$ud_country=$_POST['ud_country'];
$ud_genre=$_POST['ud_genre'];
$ud_director=$_POST['ud_director'];


if($ud_name) {
    $query = "UPDATE films SET name='$ud_name',RUS_name='$ud_runame',year='$ud_year',country='$ud_country',genre='$ud_genre',director='$ud_director' WHERE id='$ud_id'";
    mysql_query($query);
    mysql_close();
    echo "Record Updated";
}