<?php

    $server = "mysql";
    $host = "localhost";
    $base = "bddtourisme";
    $user = "root";
    $pass = "";
    
    $db = new PDO("$server:host=$host;dbname=$base", $user, $pass);

?>