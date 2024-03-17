<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = 'Bruno';
        $cor = 'azul';
        $idade = 20;

        echo 'Olá '. $nome .', vi que sua cor favorita é '. $cor .', e possui '.$idade.' anos';

        echo '<br>';

        echo "Olá $nome, vi que sua cor favorita é $cor, e possui $idade anos"
        
        //OBS: aspas duplas é mais lento, pq sempre faz a verificação se existe a variável
    ?>
</body>
</html>