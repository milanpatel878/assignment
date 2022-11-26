<?php

$a='1';
echo $a."<br>";

$b=&$a;
echo $b."<br>";

$b="2&b";
echo $a."<br>";
echo $b."<br>";
?>