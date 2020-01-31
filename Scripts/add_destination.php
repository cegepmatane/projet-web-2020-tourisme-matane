<?php
function add_destination($debut, $duree, $prix, $img, $description, $ville)
{
    $server = "mysql";
    $host = "localhost";
    $base = "bddtourisme";
    $user = "root";
    $pass = "";

    $db = new PDO("$server:host=$host;dbname=$base", $user, $pass);

    $sql_command = "INSERT INTO OFFRE (debut, duree, prix, url_image, description, ville)
                                VALUES ('$debut', '$duree', '$prix', '$img', '$description', '$ville')";

    $db->query($sql_command);
}
?>