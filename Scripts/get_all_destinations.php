<?php
    function get_all_destination()
    {
        include("connexion.php");

        $sql_command = "SELECT * from OFFRE WHERE sur_accueil=true";
        $i = 0;
        $answer = array();
        foreach ($db->query($sql_command) as $tab) {
            $answer[$i] = array(
                'prix' => $tab['prix'],
                'description' => $tab['description'],
                'ville' => $tab['ville'],
                'url_image' => $tab['url_image'],
                'debut' => $tab['debut'],
                'duree' => $tab['duree']
            );
            $i++;
        }
        return ($answer);
    }
?>