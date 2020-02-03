<?php
    include("connexion.php");

    function supprimerOffre($id)
    {
        global $db;
        $sql = "DELETE FROM offre WHERE id_offre = $id";
        $db->query($sql);
    }
?>