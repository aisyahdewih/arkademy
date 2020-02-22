<?php
     function isAcceptedUsername($username) {
          if (preg_match('/^[a-z][a-z_]{5,8}$/i',$username)){
            $username = true;
          }
          else {
              $username= false;
          } 

          echo $username ? 'true' : 'false';
     }
     function isAcceptedPassword($password) {
        if (preg_match('/^[a-zA-Z0-9!]{9,9}$/i',$password)){
          $username = true;
        }
        else {
            $username= false;
        } 

        echo $username ? 'true' : 'false';
   }
     
    isAcceptedUsername("aisyah");
    echo "<br>";
    isAcceptedUsername("aisyah_d");
    echo "<br>";
    isAcceptedUsername("_aisyahd");
    echo "<br>";
    isAcceptedUsername("Aisyahdewih");
    echo "<br>";

    isAcceptedPassword("Beeth0v3n");
    echo "<br>";
    isAcceptedPassword("!Beeth0v3");
    echo "<br>";
    isAcceptedPassword("_Beeth0v3n");
    echo "<br>";
    isAcceptedPassword("_Beet");
    echo "<br>";
?>