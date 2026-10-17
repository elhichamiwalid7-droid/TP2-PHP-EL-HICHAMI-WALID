<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9</title>
</head>
<body>

<?php
$notes = [
    "Anas" => 12,
    "Walid" => 16,
    "Ossama" => 9,
    "Adil" => 14,
    "Wassim" => 10
];

$somme = 0;
$nb_valide = 0;
$meilleure_note = 0;
$meilleur_etudiant = "";

foreach ($notes as $note) {
    $somme += $note;
}
$moyenne = $somme / count($notes);

foreach ($notes as $etudiant => $note) {
    if ($note >= 10) {
        $nb_valide++;
    }
    if ($note > $meilleure_note) {
        $meilleure_note = $note;
        $meilleur_etudiant = $etudiant;
    }
}
?>

<h2>Tableau des notes</h2>
<table>
    <tr>
        <th>Etudiant</th>
        <th>Note</th>
        <th>Statut</th>
    </tr>
    <?php foreach ($notes as $etudiant => $note): ?>
    <tr>
        <td><?= $etudiant ?></td>
        <td><?= $note ?></td>
        <td><?= $note >= 10 ? "Valide" : "Non valide" ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<h3>Resultats</h3>
<p>Somme des notes : <?= $somme ?></p>
<p>Moyenne de la classe : <?= $moyenne ?></p>
<p>Nombre d'etudiants ayant valide : <?= $nb_valide ?></p>
<p>Meilleure note : <?= $meilleure_note ?> (<?= $meilleur_etudiant ?>)</p>

</body>
</html>
