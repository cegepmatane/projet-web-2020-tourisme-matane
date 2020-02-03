<?php
include("connexion.php");

function ajouterDestination($debut, $duree, $prix, $img, $description, $ville)
{
    global $db;

    $sql_command = "INSERT INTO OFFRE (debut, duree, prix, url_image, description, ville)
                                VALUES ('$debut', '$duree', '$prix', '$img', '$description', '$ville')";

    $db->query($sql_command);
}
?>