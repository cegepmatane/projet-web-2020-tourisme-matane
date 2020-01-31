<?php
include("connexion.php");

function add_destination($debut, $duree, $prix, $img, $description, $ville)
{
    global $db;

    $sql_command = "INSERT INTO OFFRE (debut, duree, prix, url_image, description, ville)
                                VALUES ('$debut', '$duree', '$prix', '$img', '$description', '$ville')";

    $db->query($sql_command);
}
?>