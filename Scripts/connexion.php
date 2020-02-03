<?php

    $server = "mysql";
    $host = "localhost:3308";
    $base = "bddtourisme";
    $user = "root";
    $pass = "";
    
    $db = new PDO("$server:host=$host;dbname=$base", $user, $pass);

?>