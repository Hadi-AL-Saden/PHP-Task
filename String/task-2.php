<?php
$word = "orange";
$mystring = "I am a full stack developer at orange coding academy";
 
if(strpos($mystring, $word) !== false){
    echo "Word Found!";
} else{
    echo "Word Not Found!";
}
?>