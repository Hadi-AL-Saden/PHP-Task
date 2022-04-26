<?php
$x = 12;
$y = 10;
echo "\nBefore swapping:  ". $x . ',' . $y;
echo "<br>";
list($x, $y) = array($y, $x);
echo "\nAfter swapping: \$x= ". $x . ',' , "\$y=" . $y."\n";
?>
