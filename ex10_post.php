<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Traitement POST</title></head>
<body>
<?php
if (isset($_POST['nom'], $_POST['prenom'], $_POST['groupe'])) {
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $groupe = trim($_POST['groupe']);

    if ($nom === "" || $prenom === "" || $groupe === "") {
        echo "<p>Erreur : tous les champs sont obligatoires.</p>";
    } else {
        $nom_safe = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
        $prenom_safe = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
        $groupe_safe = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');
        echo "<h2>Bienvenue $prenom_safe $nom_safe du groupe $groupe_safe !</h2>";
        echo "<p>Méthode POST utilisee.</p>";
    }
} else {
    echo "<p>Aucune donnee reçue. Veuillez passer par le formulaire <a href='ex10_post.html'>ex10_post.html</a></p>";
}
?>
<a href="ex10_post.html">Retour</a>
</body>
</html>
