<?php
    include("connexion.php");

    function edit_offre_debut($id, $date)
    {
        global $db;
        $sql = "UPDATE offre SET debut = $date WHERE id_offre = $id";
        $db->query($sql);
    }

    function edit_offre_duree($id, $duree)
    {
        global $db;
        $sql = "UPDATE offre SET duree = $duree WHERE id_offre = $id";
        $db->query($sql);
    }

    function edit_offre_prix($id, $prix)
    {
        global $db;
        $sql = "UPDATE offre SET prix = $prix WHERE id_offre = $id";
        $db->query($sql);
    }

    function edit_offre_url_image($id, $url)
    {
        global $db;
        $sql = "UPDATE offre SET url_image = $url WHERE id_offre = $id";
        $db->query($sql);
    }

    function edit_offre_sur_accueil($id, $bool)
    {
        global $db;
        $sql = "UPDATE offre SET sur_accueil = $bool WHERE id_offre = $id";
        $db->query($sql);
    }

    function edit_offre_description($id, $description)
    {
        global $db;
        $sql = "UPDATE offre SET description = $description WHERE id_offre = $id";
        $db->query($sql);
    }

    function edit_offre_ville($id, $ville)
    {
        global $db;
        $sql = "UPDATE offre SET ville = $ville WHERE id_offre = $id";
        $db->query($sql);
    }
?>