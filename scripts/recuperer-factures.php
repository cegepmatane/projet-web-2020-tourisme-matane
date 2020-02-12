<?php
include ('connexion.php');
function recupererFactures()
{
    global $db;

    $sql_command = "SELECT * from FACTURES";
    $i = 0;
    $answer = array();
    foreach ($db->query($sql_command) as $tab) {
        $answer[$i] = array(
            'id_facture' => $tab['id_facture'],
            'id_utilisateur' => $tab['id_utilisateur'],
            'nb_adultes' => $tab['nb_adultes'],
            'nb_enfants' => $tab['nb_enfants'],
            'nb_animaux' => $tab['nb_animaux'],
            'duree' => $tab['duree'],
            'id_destination' => $tab['id_destination'],
            'prix_final' => $tab['prix_final']
        );
        $i++;
    }
    return ($answer);
}
function recupererFacturesWithIdUser($id_user)
{
    global $db;

    $sql_command = "SELECT * from FACTURES WHERE id_utilisateur=".$id_user;
    $i = 0;
    $answer = array();
    foreach ($db->query($sql_command) as $tab) {
        $answer[$i] = array(
            'id_facture' => $tab['id_facture'],
            'id_utilisateur' => $tab['id_utilisateur'],
            'nb_adultes' => $tab['nb_adultes'],
            'nb_enfants' => $tab['nb_enfants'],
            'nb_animaux' => $tab['nb_animaux'],
            'duree' => $tab['duree'],
            'id_destination' => $tab['id_destination'],
            'prix_final' => $tab['prix_final']
        );
        $i++;
    }
    return ($answer);
}
?>