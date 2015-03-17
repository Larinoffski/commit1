<?php
include_once "config.php";
$dbcnx = mysql_connect($dblocation,$dbuser,$dbpasswd);
$dbSelected = mysql_select_db($dbname, $dbcnx);
if($dbSelected){
    $games = mysql_query("select * from games;");
    if($games) {
      while($game = mysql_fetch_array($games)){
          if ($game['genre']=="Sport") {
              echo "<br>название - " . $game['title'] . "<br>";
              echo "год - " . $game['year'] . "<br>";
              echo "жанр - " . $game['genre'] . "<br>";
              echo "страна - " . $game['country'] . "<br>";
          }
      }
    }
}