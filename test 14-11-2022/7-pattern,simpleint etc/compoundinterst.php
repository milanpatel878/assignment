<h1> compund interest </h1>

<?php
$p=120000;
$r=5;
$n=3;
$ci=$p*(pow((1+$r/100),$n));
echo "compund interest of three years is:".$ci; 
?>