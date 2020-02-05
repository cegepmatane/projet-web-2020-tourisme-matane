<?php

    include("connexion.php");
    global $db;

    $id = $_GET["id"];
    $sql_command = "DELETE FROM offre WHERE id_offre=".$id;
    echo $sql_command;
    $db->query($sql_command);
    header("Location: ../pages/panneau-admin.php");