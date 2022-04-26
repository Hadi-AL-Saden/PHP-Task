<?php
$arr = array (90,96,95,73,85,94,89,82,80);
$length = count($arr);
$sum = array_sum($arr);
$avr = $sum/$length;

if($avr >=90)
{
    echo "A";
}
elseif($avr >= 80 && $avr < 90)
{
    echo "B";
}
elseif($avr >= 70 && $avr < 80)
{
    echo "C";
}
elseif($avr >= 60 && $avr < 70)
{
    echo "D";
}
elseif($avr <= 60)
{
    echo "F";
}


?>