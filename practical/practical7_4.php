<?php
$p=10;
$t=12;
$r=5;
$si=NULL;


$si=$p*(pow((1+$r/100),$t));
echo "compound Interest=".$si;

?>