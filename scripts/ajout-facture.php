<?php
include("connexion.php");
global $db;

$filterFacture = array(
    'id_facture' => FILTER_VALIDATE_INT,
    'id_utilisateur' => FILTER_VALIDATE_INT,
    'nb_adultes' => FILTER_VALIDATE_INT,
    'nb_enfants' => FILTER_VALIDATE_INT,
    'nb_animaux' => FILTER_VALIDATE_INT,
    'duree' => FILTER_VALIDATE_INT,
    'id_destination' => FILTER_VALIDATE_INT,
    'prix_final' => FILTER_VALIDATE_FLOAT
);
$facture = filter_input_array(INPUT_POST, $filterFacture);

$SQL_AJOUTER_FACTURE = "INSERT INTO FACTURES (id_facture, id_utilisateur, nb_adultes, nb_enfants, nb_animaux, duree, id_destination, prix_final)
                                    VALUES (0, :id_utilisateur, :nb_adultes, :nb_enfants, :nb_animaux, :duree, :id_destination, :prix_final)";

$ajoutFacture = $db->prepare($SQL_AJOUTER_FACTURE);
$ajoutFacture->bindParam(':id_utilisateur', $facture['id_utilisateur'], PDO::PARAM_INT);
$ajoutFacture->bindParam(':nb_adultes', $facture['nb_adultes'], PDO::PARAM_INT);
$ajoutFacture->bindParam(':nb_enfants', $facture['nb_enfants'], PDO::PARAM_INT);
$ajoutFacture->bindParam(':nb_animaux', $facture['nb_animaux'], PDO::PARAM_INT);
$ajoutFacture->bindParam(':duree', $facture['duree'], PDO::PARAM_INT);
$ajoutFacture->bindParam(':id_destination', $facture['id_destination'], PDO::PARAM_INT);
$ajoutFacture->bindParam(':prix_final', $facture['prix_final'], PDO::PARAM_STR);
$ajoutFacture->execute();

//header("Location: ../pages/paiement4.php?id_destination=".$facture['id_destination']."&prix_final=".$facture['prix_final']);

?>