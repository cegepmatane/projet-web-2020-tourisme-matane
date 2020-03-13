<?php
include("connexion.php");
global $db;

$id = filter_var($_GET["id"], FILTER_VALIDATE_INT);
$SQL_SUPPRIMER_OFFRE = "DELETE FROM offre WHERE id_offre=:id";

$suppressionOffre = $db->prepare($SQL_SUPPRIMER_OFFRE);
$suppressionOffre->bindParam(':id', $id, PDO::PARAM_INT);
$suppressionOffre->execute();

$message = "supprimé";
header("Content-type: text/json");
?>
{
    "message": "<?=$message?>"
}
