<?php
    $user_db="root";
    $psw_db="";
    $db="omega_db";
    $server="localhost";
    $conx=mysqli_connect($server,$user_db,$psw_db);
    mysqli_select_db($conx,$db);
?>