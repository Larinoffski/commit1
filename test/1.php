<?php
$x=1;
$y=1;

while($x<=10)
{
do
	{
	echo $x*$y++; echo" ";
	}
	while($y<=10);
	echo('<br>');
$x++;
$y=1;
echo $x*$y++;
echo" ";
}
?>