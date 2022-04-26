<?php
$n = 5;
$total=1;
$str = '';
for ($i=1;$i<=$n;$i++):
$str .= $i.' x ';
$total *= $i;
endfor;
echo $total;
?>