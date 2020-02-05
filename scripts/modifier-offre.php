<?php
    include("connexion.php");

    $filtresOffre = array(
        'id' => FILTER_VALIDATE_INT,
        'duree' => FILTER_VALIDATE_INT,
        'prix' => FILTER_VALIDATE_INT,
        'image' => FILTER_VALIDATE_INT,
        'description' => FILTER_VALIDATE_INT,
        'ville' => FILTER_VALIDATE_INT
    );
    $

    $SQL_MODIFIER_OFFRE = "UPDATE offre SET debut = :debut,
        duree = :duree,
        prix = :prix,
        url_image = :image,
        description = :description,
        ville = :ville
        WHERE id_offre = :id";

    $modificationOffre = $db->prepare($SQL_MODIFIER_OFFRE);
    $modificationOffre->bindParam(':id', $filtresOffre['id'], PDO::PARAM_INT);
    $modificationOffre->bindParam(':duree', $filtresOffre['duree'], PDO::PARAM_INT);
    $modificationOffre->bindParam(':prix', $filtresOffre['prix'], PDO::PARAM_INT);
    $modificationOffre->bindParam(':image', $filtresOffre['image'], PDO::PARAM_STRING);
    $modificationOffre->bindParam(':desciption', $filtresOffre['description'], PDO::PARAM_STRING);
    $modificationOffre->bindParam(':ville', $filtresOffre['ville'], PDO::PARAM_STRING);
    $modificationOffre->execute();
    
    header("Location: ../pages/panneau-admin.php");
?>