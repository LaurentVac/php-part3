<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 2 part 3 php</title>
</head>
<body>
<?php 
    $number = 0;
    $secondNumber = 20 ; 
   
// Tant que $number est inferieur à 20 multiplier $number et $secondNumber et incrementer $
    while($number <= 20 ){
        echo   '$number a pour valeur ' .$number. '<br/>' ;
        echo   "Le résultat de la multiplication : " .$number*$secondNumber. "<br/>";
        
        $number++;
        
    }
    
    ?>

    
</body>
</html>