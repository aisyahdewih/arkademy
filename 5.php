<?php
 
 $string = "cat, tac,code, silent  ";
 

 $key = "cat" ;
 
 if ($cari = stristr($string,$key)) {
     echo" $cari<br/>";
 } else {
    echo 'data tidak ditemukan';
 }

?>