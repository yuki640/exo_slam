<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>
<body>
    <form action="fiche_vue.php" method="get">
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">
        <br>
        <br>
        <input type="submit" value="Envoyer">
        <br>
    </form>

    <?php
    require_once '../slam_sql/sql.php';
    require_once '../slam_config/config.php';
    // afficher le tableau SELECT * FROM `utilisateurs` dans un tableau html
    $req = $bd->query('SELECT * FROM utilisateurs');
    echo '<table border="1">';
    echo '<tr>';
    echo '<th>id</th>';
    echo '<th>prenom</th>';
    echo '<th>nom</th>';
    echo '</tr>';
    while ($donnees = $req->fetch()) {
        echo '<tr>';
        echo '<td>' . $donnees['id'] . '</td>';
        echo '<td>' . $donnees['prenom'] . '</td>';
        echo '<td>' . $donnees['nom'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
    ?>
</body>
</html>