<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice8</title>
</head>
<body>
    <?php
    //1. la boucle While:
    $i = 0;
    while ($i <= 20) {
        if ($i % 2 == 0) {
            if ($i == 10) {
                echo "<b>$i</b><br>";
            } else {
                echo "$i<br>";
            }
        }
        $i++;
    }
    ?>

    <?php
    // 2. boucle While vs do...While:
    $compteur = 5;
    $exec_while = 0;
    while ($compteur < 5) {
        $exec_while++;
        $compteur++;
    }
    echo "Boucle while : $exec_while execution<br>";

    // test avec do-while
    $compteur = 5;
    $exec_dowhile = 0;
    do {
        $exec_dowhile++;
        $compteur++;
    } while ($compteur < 5);
    echo "Boucle do-while : $exec_dowhile excution<br>";
    ?>

    <?php
    //3. continue et break:
    for ($j = 1; $j <= 20; $j++) {
        if ($j >= 16) {
            break;
        }
        if ($j % 3 == 0) {
            continue;
        }
        echo "$j<br>";
    }
    ?>

</body>
</html>
