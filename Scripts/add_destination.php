<?php
function add_destination($debut, $duree, $prix, $img, $description, $ville)
{
    include("connexion.php");

    $sql_command = "INSERT INTO OFFRE (debut, duree, prix, url_image, description, ville)
                                VALUES ('$debut', '$duree', '$prix', '$img', '$description', '$ville')";

    $db->query($sql_command);
}
?>