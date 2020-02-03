<?php
    include("connexion.php");

    function modifierOffreDebut($id, $date)
    {
        global $db;
        $sql = "UPDATE offre SET debut = $date WHERE id_offre = $id";
        $db->query($sql);
    }

    function modifierOffreDuree($id, $duree)
    {
        global $db;
        $sql = "UPDATE offre SET duree = $duree WHERE id_offre = $id";
        $db->query($sql);
    }

    function modifierOffrePrix($id, $prix)
    {
        global $db;
        $sql = "UPDATE offre SET prix = $prix WHERE id_offre = $id";
        $db->query($sql);
    }

    function modifierOffreUrlImage($id, $url)
    {
        global $db;
        $sql = "UPDATE offre SET url_image = $url WHERE id_offre = $id";
        $db->query($sql);
    }

    function modifierOffreSurAccueil($id, $bool)
    {
        global $db;
        $sql = "UPDATE offre SET sur_accueil = $bool WHERE id_offre = $id";
        $db->query($sql);
    }

    function modifierOffreDescription($id, $description)
    {
        global $db;
        $sql = "UPDATE offre SET description = $description WHERE id_offre = $id";
        $db->query($sql);
    }

    function modifierOffreVille($id, $ville)
    {
        global $db;
        $sql = "UPDATE offre SET ville = $ville WHERE id_offre = $id";
        $db->query($sql);
    }
?>