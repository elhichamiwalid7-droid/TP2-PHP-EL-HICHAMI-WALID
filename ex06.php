<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice6</title>
</head>
<body>
    <?php
    #question1: $numeroMois = 3
    $numeroMois = (int) date("m");
    #question2:
    switch ($numeroMois){
        case 1:
            echo "Janvier<br>";
            break;
        case 2:
            echo "Fevrier<br>";
            break;
        case 3: 
            print("Mars<br>");
            break;
        case 4:
            echo "Avril<br>";
            break;
        case 5:
            echo "Mai<br>";
            break;
        case 6:
            echo "Juin<br>";
            break;
        case 7:
            echo "Juillet<br>";
            break;
        case 8:
            echo "Aout<br>";
            break;
        case 9:
            echo "Septembre<br>";
            break;
        case 10:
            echo "Octobre<br>";
            break;
        case 11:
            echo "Novembre<br>";
            break;
        case 12:
            echo "Decembre<br>";
            break;
        #question3:
        default:
            echo "Numero de mois invalide<br>";
            break;
    }
    #question4: 
    $var = [1,3,12,15];
    foreach ($var as $numeroMois){
        echo "$numeroMois: ";
        switch ($numeroMois){
        case 1:
            echo "Janvier<br>";
            break;
        case 2:
            echo "Fevrier<br>";
            break;
        case 3: 
            print("Mars<br>");
            break;
        case 4:
            echo "Avril<br>";
            break;
        case 5:
            echo "Mai<br>";
            break;
        case 6:
            echo "Juin<br>";
            break;
        case 7:
            echo "Juillet<br>";
            break;
        case 8:
            echo "Aout<br>";
            break;
        case 9:
            echo "Septembre<br>";
            break;
        case 10:
            echo "Octobre<br>";
            break;
        case 11:
            echo "Novembre<br>";
            break;
        case 12:
            echo "Decembre<br>";
            break;
        #question3:
        default:
            echo "Numero de mois invalide<br>";
            break;
        }

    }
    ?>
    
</body>
</html>
