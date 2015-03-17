<?php
include_once "config.php";
$dbcnx = mysql_connect($dblocation,$dbuser,$dbpasswd);
if($dbcnx){
    echo "conn ok<br>";
}
$dbSelected = mysql_select_db($dbname, $dbcnx);
if($dbSelected) {
    echo "ok";
}
    $crtable = "CREATE TABLE films (id int(5) NOT NULL auto_increment,name varchar(15) NOT NULL,RUS_name varchar(15) NOT NULL,year varchar(20) NOT NULL,country varchar(20) NOT NULL,genre varchar(20) NOT NULL,director varchar(30) NOT NULL,PRIMARY KEY (id),UNIQUE id (id),KEY id_2 (id))";

    mysql_query($crtable);
mysql_close();