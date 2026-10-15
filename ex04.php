<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice4</title>
</head>
<body>
    <?php
    #1.
     $entier = 42;
     $chaine = "42";
     $flottant = 15.8;
     $boolean1 = true;
     $boolean2 = false;
     $vaid = NULL;
     #2.
     echo "<pre>";
     var_dump($entier,$chaine,$flottant,$boolean1,$boolean2,$vaid);
     #3.
     $string_to_int = (int) $chaine;
     $float_to_int = (int) $flottant;
     $int_to_string = (string) $entier;

     var_dump($string_to_int);
     var_dump($float_to_int);
     var_dump($int_to_string);
     #4.
     echo $boolean1;
     echo $boolean2;
     echo "<br>";
     var_dump($boolean1);
     var_dump($boolean2);
     #5.
     var_dump((bool) 0);
     var_dump((bool) "0");
     var_dump((bool) "PHP");
     var_dump((bool) []);

     echo "</pre>";

    ?>
    
</body>
</html>
