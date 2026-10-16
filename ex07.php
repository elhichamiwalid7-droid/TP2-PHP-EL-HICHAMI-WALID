<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice7</title>
</head>
<body>
<section>
    <h2>Multiplication de 7:</h2>
    <?php
    $nbr = 7;
    for ($i=1; $i<=10; $i++){
        echo "$nbr x $i = ".($nbr * $i)."<br>";
    }
    ?>
</section>
<section>
    <h2>Pyramide:</h2>
    <?php
    for ($L=1; $L<=6; $L++){
        for ($etoile=1; $etoile<=$L; $etoile++){
        echo "*";
    }
    echo "<br>";
    }
    ?>
</section>
    
</body>
</html>
