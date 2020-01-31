<?php
    function get_all_destination()
    {
        $server = "mysql";
        $host = "localhost";
        $base = "bddtourisme";
        $user = "root";
        $pass = "";

        $db = new PDO("$server:host=$host;dbname=$base", $user, $pass);

        $sql_command = "SELECT * from OFFRE";
        $i = 0;
        $answer = array();
        foreach ($db->query($sql_command) as $tab) {
            $answer[$i] = array(
                'prix' => $tab['prix'],
                'description' => $tab['description'],
                'ville' => $tab['ville'],
                'url_image' => $tab['url_image'],
                'debut' => $tab['debut'],
                'duree' => $tab['duree'],
                'sur_accueil' => $tab['sur_accueil']
            );
            $i++;
        }
        return ($answer);
    }
