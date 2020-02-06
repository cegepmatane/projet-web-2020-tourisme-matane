<?php
    include("connexion.php");
    global $db;
    
    $filterOffre = array(
        'debut' => FILTER_SANITIZE_STRING,
        'duree' => FILTER_VALIDATE_INT,
        'prix' => FILTER_VALIDATE_FLOAT,
        'image' => FILTER_SANITIZE_URL,
        'description' => FILTER_SANITIZE_STRING,
        'ville' => FILTER_SANITIZE_STRING,
    );
    $offre = filter_input_array(INPUT_POST, $filterOffre);

    $SQL_AJOUTER_OFFRE = "INSERT INTO OFFRE (debut, duree, prix, url_image, sur_accueil, description, ville)
                                    VALUES (:debut, :duree, :prix, :image, 0, :description, :ville)";
    
    $ajoutOffre = $db->prepare($SQL_AJOUTER_OFFRE);
    $ajoutOffre->bindParam(':debut', $offre['debut'], PDO::PARAM_STR);
    $ajoutOffre->bindParam(':duree', $offre['duree'], PDO::PARAM_INT);
    $ajoutOffre->bindParam(':prix', $offre['prix'], PDO::PARAM_INT);
    $ajoutOffre->bindParam(':image', $offre['image'], PDO::PARAM_STR);
    $ajoutOffre->bindParam(':description', $offre['description'], PDO::PARAM_STR);
    $ajoutOffre->bindParam(':ville', $offre['ville'], PDO::PARAM_STR);
    $ajoutOffre->execute();

    header("Location: ../pages/panneau-admin.php");
?>