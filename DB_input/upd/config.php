<head>
    <meta charset="UTF-8">
</head>

<?php

function connect(){

    $dblocation = "localhost";
    $dbname = "films";
    $dbuser = "root";
    $dbpasswd = "1";

    $dbcnx = mysql_connect($dblocation,$dbuser,$dbpasswd);
    $dbSelected = mysql_select_db($dbname, $dbcnx);
}