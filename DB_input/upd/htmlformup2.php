<?php
include_once "config.php";

$id=$_GET['id'];

connect();

$query=" SELECT * FROM films WHERE id='$id'";
$result=mysql_query($query);
//$num=mysql_numrows($result);
//echo"$num";

if($result){
    while($film = mysql_fetch_array($result)){

        ?>

<form action="htmlformup2.php" method="post" charset="UTF-8">
    <input type="hidden" name="ud_id" value="<?php echo $film['id']; ?>">
    Name: <input type="text" name="ud_name" value="<?php echo $film['name']; ?>">
    Название: <input type="text" name="ud_runame"  value="<?php echo $film['runame']; ?>">
    Year: <input type="text" name="ud_year" value="<?php echo $film['year']; ?>">
    Country: <input type="text" name="ud_country" value="<?php echo $film['country']; ?>">
    Genre: <input type="text" name="ud_genre" value="<?php echo $film['genre']; ?>">
    Director: <input type="text" name="ud_director" value="<?php echo $film['director']; ?>">
    <input type="Submit" value="Update">
</form>

        <?php

    }
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