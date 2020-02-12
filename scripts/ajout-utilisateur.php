<?php
    include("connexion.php");
    global $db;

    $filterUtilisateur = array(
        'prenom' => FILTER_SANITIZE_STRING,
        'nom' => FILTER_SANITIZE_STRING,
        'jour' => FILTER_SANITIZE_STRING,
        'mois' => FILTER_SANITIZE_STRING,
        'annee' => FILTER_SANITIZE_STRING,
        'mail' => FILTER_SANITIZE_STRING,
        'mot_de_passe' => FILTER_SANITIZE_STRING,
    );
    $utilisateur = filter_input_array(INPUT_POST, $filterUtilisateur);
    $date_naissance = $utilisateur['annee'].'-'.$utilisateur['mois'].'-'.$utilisateur['jour'];
    $utilisateur['mot_de_passe'] = password_hash($utilisateur['mot_de_passe'], PASSWORD_DEFAULT);

    $SQL_AJOUTER_UTILISATEUR = "INSERT INTO UTILISATEUR (prenom, nom, date_naissance, mail, mot_de_passe)
                                    VALUES (:prenom, :nom, :date_naissance, :mail, :mot_de_passe)";
    
    $ajoutUtilisateur = $db->prepare($SQL_AJOUTER_UTILISATEUR);
    $ajoutUtilisateur->bindParam(':prenom', $utilisateur['prenom'], PDO::PARAM_STR);
    $ajoutUtilisateur->bindParam(':nom', $utilisateur['nom'], PDO::PARAM_STR);
    $ajoutUtilisateur->bindParam(':date_naissance', $date_naissance, PDO::PARAM_STR);
    $ajoutUtilisateur->bindParam(':mail', $utilisateur['mail'], PDO::PARAM_STR);
    $ajoutUtilisateur->bindParam(':mot_de_passe', $utilisateur['mot_de_passe'], PDO::PARAM_STR);
    $ajoutUtilisateur->execute();

    
    header("Location: ../pages/accueil.php");
?>