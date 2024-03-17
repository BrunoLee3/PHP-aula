<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $valor = 10;
        $valor2 = (float) $valor;
        $valor3 = (string) $valor;

        echo gettype($valor);
        echo '<br>';
        echo gettype($valor2);
        echo '<br>';
        echo gettype($valor3);
    ?>
</body>
</html>