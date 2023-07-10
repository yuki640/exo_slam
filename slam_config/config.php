<?php
require_once '../slam_vue/fiche_vue.php';

if (isset($_GET['prenom']) && isset($_GET['nom'])) {
    $prenom = $_GET['prenom'];
    $nom = $_GET['nom'];
    if ($prenom != '' && $nom != '') {
        $req = $bd->prepare('INSERT INTO utilisateurs(prenom, nom) VALUES(:prenom, :nom)');
        $req->execute(array(
            'prenom' => $prenom,
            'nom' => $nom
        ));
        header('Location: fiche_vue.php');
    } else {
        echo 'Veuillez remplir tous les champs';
    }
}

?>