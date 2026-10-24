<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Traitement GET</title></head>
<body>
<?php
if (isset($_GET['nom'], $_GET['prenom'], $_GET['groupe'])) {
    $nom = trim($_GET['nom']);
    $prenom = trim($_GET['prenom']);
    $groupe = trim($_GET['groupe']);

    if ($nom === "" || $prenom === "" || $groupe === "") {
        echo "<p>Erreur : tous les champs sont obligatoires.</p>";
    } else {
        $nom_safe = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
        $prenom_safe = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
        $groupe_safe = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');
        echo "<h2>Bienvenue $prenom_safe $nom_safe du groupe $groupe_safe !</h2>";
        echo "<p>Methode GET utilisee.</p>";
    }
} else {
    echo "<p>Aucune donnee reçue. Veuillez passer par le formulaire <a href='ex10_get.html'>ex10_get.html</a></p>";
}
?>
<a href="ex10_get.html">Retour</a>
</body>
</html>
