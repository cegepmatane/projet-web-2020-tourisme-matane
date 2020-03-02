<?php
include ('connexion.php');
    function recupererDestinations()
    {
        global $db;

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
                'sur_accueil' => $tab['sur_accueil'],
                'id_offre' => $tab['id_offre'],
                'prix_adulte' => $tab['prix_adulte'],
                'prix_enfant' => $tab["prix_enfant"],
                'prix_animal' => $tab["prix_animal"]
            );
            $i++;
        }
        return ($answer);
    }

    function recupererDestination($id){
        global $db;
        $answer = array();
        $sql_command = "SELECT * from OFFRE WHERE id_offre=".$id;
        foreach ($db->query($sql_command) as $tab) {
            $answer = array(
                'prix' => $tab['prix'],
                'description' => $tab['description'],
                'ville' => $tab['ville'],
                'url_image' => $tab['url_image'],
                'debut' => $tab['debut'],
                'duree' => $tab['duree'],
                'sur_accueil' => $tab['sur_accueil'],
                'id_offre' => $tab['id_offre'],
                'prix_adulte' => $tab['prix_adulte'],
                'prix_enfant' => $tab["prix_enfant"],
                'prix_animal' => $tab["prix_animal"]
            );
        }
        return $answer;
    }
