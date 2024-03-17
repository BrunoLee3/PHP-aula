<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $num = 7.3;
        
        echo ceil($num); //arredonda pra cima
        echo '<br>';
        echo floor($num); //arendonda pra baixo
        echo '<br>';
        echo round($num); //arrendonda seguindo regra matematica

        echo '<br><br>';

        // echo rand() . '<br>'; //gera numero aleatorio
        // echo getrandmax(); //num aleatorio maximo


        echo rand(0, 10); //gera num aleatorio dentro do intervalo 

        //echo sqrt(9)
        
    ?>
</body>
</html>