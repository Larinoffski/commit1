<form action="htmlformup.php" method="post">
    id: <input type="text" name="id">
    <input type="Submit" value="Отправить">
</form>
//Форма для ГЕТ АЙДИ



<?php

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
++$i;
}

$ud_id=$_POST['ud_id'];
$ud_name=$_POST['ud_name'];
$ud_runame=$_POST['ud_runame'];
$ud_year=$_POST['ud_year'];
$ud_country=$_POST['ud_country'];
$ud_genre=$_POST['ud_genre'];
$ud_director=$_POST['ud_director'];

$query = "UPDATE films SET name='$ud_name',RUS_name='$ud_runame',year='$ud_year',counry='$ud_country',genre='$ud_genre',director='$ud_director' WHERE id='$ud_id'";
mysql_query($query);
echo "Record Updated";
mysql_close();




$query = "UPDATE `films` SET `id`='$ud_id',`name`='$ud_name',`RUS_name`='$ud_runame',`year`='$ud_year',`country`='$ud_country',`genre`='$ud_genre',`director`='$ud_director' WHERE `id`='$ud_id'";