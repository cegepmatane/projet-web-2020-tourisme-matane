<?php

    include("connexion.php");
    global $db;

    if (isset($_POST['submit'])) {
        $id = addslashes(trim($_POST['id']));
        $sql_command = "DELETE FROM offre WHERE id_offre=".$id;
        echo $sql_command;
        $db->query($sql_command);
    }
        header("Location: ../pages/panneau-admin.php");