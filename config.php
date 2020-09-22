<?php

function getXFirstWord($myvalue, $x){
    $arr = explode(' ',trim($myvalue));
    $arrayFirst = array_slice($arr, 0, $x);
    return implode(" ", $arrayFirst);
}
 function getXFirstWordBis($myvalue, $x){
    return substr($myvalue,0,strpos($myvalue," ",$x));
 }

function get_words($sentence, $count = 10) {
    preg_match("/(?:\w+(?:\W+|$)){0,$count}/", $sentence, $matches);
    return $matches[0];
}

