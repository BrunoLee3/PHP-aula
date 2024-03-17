<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //recupera data atual
        // echo date('d/m/Y H:i'); 

        // echo '<br>' . date_default_timezone_get();
        // date_default_timezone_set('America/Sao_Paulo');
        // echo '<br>' .  date('d/m/Y H:i');

        $dataInicial = '2018-04-24';
        $dataFinal = '2018-05-15';

        //timestamp
        //24/04/2018 - 01/01/1970 (segunos)

        $timeInicial = strtotime($dataInicial);
        $timeFinal = strtotime($dataFinal);
        echo $dataInicial . ' - ' . $timeInicial;
        echo '<br>';
        echo $dataFinal . ' - ' . $timeFinal;

        $diferencaTimes = $timeFinal - $timeInicial;

        echo '<br>';
        echo 'A diferença de segundos entre a data inicial e a final é: '. $diferencaTimes;

        $segundosEmDia = 24 * 60 * 60; //86400
        
        $diferencaDiasEntreAsDatas = $diferencaTimes/$segundosEmDia;

        echo '<br> a diferença em dias é ' . $diferencaDiasEntreAsDatas 

    ?>
</body>
</html>