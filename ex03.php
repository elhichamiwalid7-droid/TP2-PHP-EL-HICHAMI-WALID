<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice3</title>
</head>
<body>
    <?php
    // Q1
    define('TAUX_TVA', 20);
    define('DEVISE', 'MAD');
    //Q2
     $HT = 60;
     $quantite = 3;
     //Q3
     $totalHT = $HT*$quantite;
     echo "le total HT est: " . $totalHT . DEVISE . "<br>";
     $montant = $totalHT * TAUX_TVA /100;
     echo "le montant TVA:" . $montant . DEVISE . "<br>";
     $totalTTC = $totalHT + $montant . DEVISE . "<br>";
     echo " le totalTTC: " . $totalTTC . "<br>";
     // Q4. frais de livraison
     $totalTTC += 15;
     echo "la totalTTC avec les frais de livraison: " . $totalTTC . "<br>";
    ?> 
    
    <?php
    //Q5
        if (defined('TAUX_TVA')) {
            echo "La constante TAUX_TVA existe et vaut : " . TAUX_TVA . "%";
        } else {
            echo "La constante TAUX_TVA n'existe pas";
        }
        ?>
    
</body>
</html>
