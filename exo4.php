<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 4 part 3 php</title>
</head>
<body>
<?php 
    $number = 1;
  
   
//
    while($number <= 10 ){
        
        echo   '$number a pour valeur ' .$number. '<br/>' ;
       
        // j'incrémente la moitier de la valeur sa valeur
        $number += $number/2;
        
    }
    
    ?>

    
</body>
</html>