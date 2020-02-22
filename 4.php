
<?php

function split(){
    $string = "1234567";
    $find="1";
    $start= strpos($string, $find);
    $stop= strlen($find);
    $string_length = strlen($string);
    for ($i=0; $i<$string_length; $i++){
        echo substr($string, $i, 1);
    }


}

