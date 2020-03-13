<?php
    include("./connexion.php");
    global $db;

    $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

    $attribut = $_GET['attribut'];
    $valeur = $_GET['valeur'];

    $SQL_MODIFIER_OFFRE = "UPDATE offre SET description = '".$valeur."' WHERE id_offre = ".$id;
    $db->query($SQL_MODIFIER_OFFRE);
    $message = "enregistré";
    header("Content-type: text/json");
?>
{
"message":"<?=$message?>"
}