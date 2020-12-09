<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 3 part 3 php</title>
</head>
<body>
<?php 
    $number = 100;
    $secondNumber = 20 ; 
   
// Tant que $number est inferieur à 10 ou egal multiplier $number et $secondNumber et incrementer $ number
    while($number >= 10 ){
        echo   '$number a pour valeur ' .$number. '<br/>' ;
        echo   "Le résultat de la multiplication : " .$number*$secondNumber. "<br/>";
        
        $number--;
        
    }
    
    ?>

    
</body>
</html>