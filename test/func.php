<?php
$file = fopen("/home/besus/laring/server/indeex.jpeg","r");
if(!file)
{
    echo("Ошибка открытия файла");
}
else
{
    fpassthru($file);
}
//readfile ("/home/besus/laring/server/index.jpeg");