<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice5</title>
</head>
<body>
    <?php 
    #1.
    $moyenne = 12;
    #2 et 3 
    if ($moyenne < 0 || $moyenne > 20){
        echo "Note invalide<br>";
    }elseif($moyenne < 10){
        echo "Non valide<br>";
    }elseif($moyenne < 12){
        echo "Passable<br>";
    }elseif($moyenne < 14){
        echo "Assez bien<br>";
    }elseif($moyenne < 16){
        echo "Bien<br>";
    }else{
        echo "Tres bien<br>";
    }
    #4.
    $notes = [-1,9,10,12,14,16,21];
    foreach ($notes as $moyenne){
        echo "Moyenne = $moyenne :";
         if ($moyenne < 0 || $moyenne > 20){
            echo "Note invalide<br>";
        }elseif($moyenne < 10){
            echo "Non valide<br>";
        }elseif($moyenne < 12){
            echo "Passable<br>";
        }elseif($moyenne < 14){
            echo "Assez bien<br>";
        }elseif($moyenne < 16){
            echo "Bien<br>";
        }else{
            echo "Tres bien<br>";
        }

    }
    
    ?>
    
</body>
</html>
