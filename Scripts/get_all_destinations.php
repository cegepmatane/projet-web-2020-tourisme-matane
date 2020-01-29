<?php

    include('database_data.php');

    $db = new PDO("$server:host=$host;dbname=$base",$user, $pass);

    $sql_command = "SELECT * from OFFRE WHERE sur_accueil=true";
    $req = $this->db->query($sql_command);
    $i = 0;
    $answer = array();
    foreach ($db->query($sql_command) as $tab) {
        $answer[$i] = array(
            'prix' => $tab['prix'],
            'description' => $tab['description'],
            'location' => $tab['location'],
            'ville' => $tab['ville']
        );
        $i++;
    }
    return($answer);
