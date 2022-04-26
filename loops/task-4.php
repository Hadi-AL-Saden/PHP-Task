<?php

for ($i=0; $i < 5  ; $i++) { 

    for ($x=0; $x < 5 ; $x++) { 
        
        
        if($i == 1 && $x>=3)
        {
            echo 2;
        }
        elseif($i == 2 && $x>=2)
        {
            echo 3;
        }
        elseif($i == 3 && $x>=1)
        {
            echo 4;
        }
        elseif($i == 4 )
        {
            echo 5;
        }
        else
        {
            echo 1;
        }
    }
    echo "<br>";
}


?>