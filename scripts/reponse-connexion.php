<?php
    include("connexion.php");
    global $db;

    $filtresConnexion = array(
        'mail' => FILTER_VALIDATE_EMAIL,
        'mot-de-passe' => FILTER_SANITIZE_STRING
    );

    $identifiants = filter_input_array(INPUT_POST, $filtresConnexion);

    $SQL_UTILISATEUR = "SELECT * FROM utilisateur WHERE mail = :mail";

    $requeteUtilisateur = $db->prepare($SQL_UTILISATEUR);
    $requeteUtilisateur->bindParam(':mail', $identifiants['mail'], PDO::PARAM_STR);
    $requeteUtilisateur->execute();
    $utilisateur = $requeteUtilisateur->fetch();

    var_dump($utilisateur["mot_de_passe"]);
    var_dump($identifiants["mot-de-passe"]);
    var_dump(password_verify($identifiants["mot-de-passe"], trim($utilisateur["mot_de_passe"])));

    $hash = (string)password_hash('bobo', PASSWORD_DEFAULT);
    var_dump(password_verify('bobo', $hash));

    $motDePasseCorrect = password_verify($identifiants['mot-de-passe'], trim($utilisateur['mot_de_passe']));

    if (!$utilisateur)
    {
        echo "<p class='error'>L'adresse mail est incorrecte.</p>";
    }
    else
    {
        if ($motDePasseCorrect)
        {
            session_start();
            $_SESSION['id'] = $utilisateur['id_utilisateur'];
            $_SESSION['prenom'] = $utilisateur['prenom'];
            $_SESSION['nom'] = $utilisateur['nom'];
            $_SESSION['mail'] = $utilisateur['mail'];
            echo "Vous êtes connecté en tant que ".$_SESSION['prenom']." ".$_SESSION['nom'];
            //header("Location: ../pages/accueil.php");
        }
        else
        {
            echo "<p class='error'>L'adresse mail et le mot de passe ne correspondent pas.</p>";
        }
    }


?>