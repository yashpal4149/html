<?php

function a($no)
{
    $no=$no+8;
}
function b(&$no)
{
    $no=$no+9; 
}
$num=10;
a($num);
echo "value is".$num."<br>";

b($num);
echo "after the add value is".$num."<br>"
?>