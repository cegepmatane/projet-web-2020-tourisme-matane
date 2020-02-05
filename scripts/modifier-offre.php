<?php
    include("connexion.php");

    $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

    $filtresOffre = array(
        'debut' => FILTER_SANITIZE_STRING,
        'duree' => FILTER_VALIDATE_INT,
        'prix' => FILTER_VALIDATE_FLOAT,
        'image' => FILTER_SANITIZE_URL,
        'description' => FILTER_SANITIZE_STRING,
        'ville' => FILTER_SANITIZE_STRING
    );
    $offre = filter_input_array(INPUT_POST, $filtresOffre);

    $SQL_MODIFIER_OFFRE = "UPDATE offre SET debut = :debut,
        duree = :duree,
        prix = :prix,
        url_image = :image,
        description = :description,
        ville = :ville
        WHERE id_offre = :id";

    $modificationOffre = $db->prepare($SQL_MODIFIER_OFFRE);
    $modificationOffre->bindParam(':id', $id, PDO::PARAM_INT);
    $modificationOffre->bindParam(':debut', $offre['id'], PDO::PARAM_STR);
    $modificationOffre->bindParam(':duree', $offre['duree'], PDO::PARAM_FLOAT);
    $modificationOffre->bindParam(':prix', $offre['prix'], PDO::PARAM_INT);
    $modificationOffre->bindParam(':image', $offre['image'], PDO::PARAM_STR);
    $modificationOffre->bindParam(':desciption', $offre['description'], PDO::PARAM_STR);
    $modificationOffre->bindParam(':ville', $offre['ville'], PDO::PARAM_STR);
    $modificationOffre->execute();
    
    header("Location: ../pages/panneau-admin.php");
?>