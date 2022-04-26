<?php
echo "<table style= 'border: solid 1px; padding: 3px ; cellspacing = 0px'>";

for ($i=1; $i <= 5; $i++) { 
    echo "<tr >";
    for ($x=1; $x <=5 ; $x++) { 
        $sum = $i * $x;
        echo "<td style= 'border: solid 1px;'> $i * $x = $sum" . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>