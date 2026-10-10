<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice-2</title>
</head>
<body>
  <?php
   $Nom = "El hichami";
   $Prenom = "Walid";
   $Age = 19;
   $Formation = "informatique appliquee";
   $phrase = "je m'appelle " . $Prenom . " " . $Nom . " j'ai " . $Age . "ans , je suis en formation d'" . $Formation;
   // affichage de la phrase
   echo "$phrase" . "<br>";
   // concatenation
   $phrase .= " j'apprends PHP";
   echo "$phrase" . "<br>";
   $Note = 12;
   $note = 16;
   echo "Note = " . $Note ."<br>";
   echo "note = " . $note ."<br>";
  ?>
    
</body>
</html>
