<?php
    include("connexion.php");

    
    if (isset($_POST['submit']))
    {
        $id = $_GET["id"];
        $ville = addslashes(trim($_POST['ville']));
        $description = addslashes(trim($_POST['description']));
        $image = addslashes(trim($_POST['image']));
        $debut = addslashes(trim($_POST['debut']));
        $duree = addslashes(trim($_POST['duree']));
        $prix = addslashes(trim($_POST['prix']));
    
	$sql = "UPDATE offre SET debut = '$debut',
            duree = $duree,
            prix = $prix,
            url_image = '$image',
            description = '$description',
            ville = '$ville'
            WHERE id_offre = $id";

        echo $sql;
        $db->query($sql);
    }
	
    header("Location: ../pages/panneau-admin.php");
?>