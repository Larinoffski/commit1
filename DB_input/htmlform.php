

<?php
include_once "config.php";

$name=$_POST['name'];
$runame=$_POST['runame'];
$year=$_POST['year'];
$country=$_POST['country'];
$genre=$_POST['genre'];
$director=$_POST['director'];



if($name){
    $dbcnx = mysql_connect($dblocation,$dbuser,$dbpasswd);
    mysql_set_charset('utf8',$dbcnx);
    $dbSelected = mysql_select_db($dbname, $dbcnx);

    $query = "INSERT INTO films VALUES ('','$name','$runame','$year','$country','$genre','$director')";
    mysql_query($query);
    mysql_close();
    echo"OK";
}
else {
    echo "Error: name cannot be empty";
}
echo "<br><a href='htmlform.html'>Back</a>";