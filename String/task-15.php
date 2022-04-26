<?php
$string= ['\"\1+2/3*2:2-3/4*3']
function RemoveSpecialCharacter($string){
    $result  = preg_replace('/[^a-zA-Z0-9_ -]/s','',$string); 
    return $result;
  };
  echo $result;