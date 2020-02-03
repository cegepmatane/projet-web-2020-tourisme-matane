<?php
    include("connexion.php");
    global $db;
   
    if (isset($_POST['submit']))
    {
        $ville = addslashes(trim($_POST['ville']));
        $description = addslashes(trim($_POST['description']));
        $image = addslashes(trim($_POST['image']));
        $debut = addslashes(trim($_POST['debut']));
        $duree = addslashes(trim($_POST['duree']));
        $prix = addslashes(trim($_POST['prix']));
    
        $sql_command = "INSERT INTO OFFRE (debut, duree, prix, url_image, description, ville)
                                    VALUES ('$debut', '$duree', '$prix', '$image', '$description', '$ville')";
        echo $sql_command;
        $db->query($sql_command);
    }
    header("Location : ../pages/panneau-admin.php");
?>